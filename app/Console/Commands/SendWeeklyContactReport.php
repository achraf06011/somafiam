<?php

namespace App\Console\Commands;

use App\Mail\WeeklyContactReportMail;
use App\Models\ContactSubmission;
use App\Models\SiteVisit;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendWeeklyContactReport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-weekly-contact-report';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envoie par email le recapitulatif hebdomadaire des demandes recues via le formulaire de contact';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $start = Carbon::now()->subDays(7);
        $end = Carbon::now();

        $submissions = ContactSubmission::where('created_at', '>=', $start)
            ->orderByDesc('created_at')
            ->get();

        $periodLabel = 'Du ' . $start->format('d/m/Y') . ' au ' . $end->format('d/m/Y');

        $totalVisits = SiteVisit::where('created_at', '>=', $start)->count();
        $uniqueVisitors = SiteVisit::where('created_at', '>=', $start)->distinct('ip_address')->count('ip_address');
        $categoryStats = $this->buildCategoryStats($start);

        Mail::to('contact@somafiam.com')->send(
            new WeeklyContactReportMail($submissions, $periodLabel, $uniqueVisitors, $totalVisits, $categoryStats)
        );

        $this->info("Rapport hebdomadaire envoye : {$submissions->count()} demande(s), {$uniqueVisitors} visiteur(s) unique(s).");
    }

    private function buildCategoryStats(Carbon $start)
    {
        return SiteVisit::where('created_at', '>=', $start)
            ->get(['ip_address', 'path'])
            ->map(function (SiteVisit $visit) {
                return [
                    'label' => $this->labelForPath((string) $visit->path),
                    'ip_address' => $visit->ip_address,
                ];
            })
            ->filter(fn (array $visit) => $visit['label'] !== null)
            ->groupBy('label')
            ->map(function ($visits, string $label) {
                return [
                    'label' => $label,
                    'visits' => $visits->count(),
                    'unique_visitors' => $visits->pluck('ip_address')->unique()->count(),
                ];
            })
            ->sortByDesc('visits')
            ->values();
    }

    private function labelForPath(string $path): ?string
    {
        $path = trim($path, '/');

        $sections = [
            'Accueil' => [''],
            'Agricole' => ['agriculture', 'agricultureProducts'],
            'Industriel' => ['industriel', 'industrielProducts'],
            'Metallurgie' => ['metallurgie', 'metallurgieProducts'],
            'Robots industriels' => [
                'robots-industriels',
                'robotsIndustrielsProducts',
                'm',
                'automobile',
                'electronique-electromecanique-electromenager',
                'mecanique-energie-plasturgie-biens-de-consommation',
            ],
            'Transformation alimentaire' => ['transformation-alimentaire', 'transformationAlimentaireProducts'],
            'BTP' => ['btp', 'btpProducts'],
            'Mines' => ['mines', 'minesProducts'],
            'Manutention' => ['manutention', 'manutentionProducts'],
            'Catalogues' => ['nos-catalogues'],
            'Contact' => ['contact'],
            'A propos' => ['aProposNous'],
        ];

        foreach ($sections as $label => $prefixes) {
            foreach ($prefixes as $prefix) {
                if ($path === $prefix || ($prefix !== '' && str_starts_with($path, $prefix . '/'))) {
                    return $label;
                }
            }
        }

        return null;
    }
}
