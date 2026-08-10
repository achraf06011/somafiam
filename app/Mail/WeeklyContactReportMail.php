<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;

class WeeklyContactReportMail extends Mailable
{
    use Queueable, SerializesModels;

    public Collection $submissions;
    public string $periodLabel;
    public int $uniqueVisitors;
    public int $totalVisits;
    public Collection $categoryStats;

    /**
     * Create a new message instance.
     */
    public function __construct(Collection $submissions, string $periodLabel, int $uniqueVisitors = 0, int $totalVisits = 0, ?Collection $categoryStats = null)
    {
        $this->submissions = $submissions;
        $this->periodLabel = $periodLabel;
        $this->uniqueVisitors = $uniqueVisitors;
        $this->totalVisits = $totalVisits;
        $this->categoryStats = $categoryStats ?? collect();
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            null,
            [],
            [],
            [],
            [],
            '[SOMAFIAM] Rapport hebdomadaire - ' . $this->submissions->count() . ' demande(s) recues'
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            'emails.weeklyContactReport',
            null,
            null,
            null,
            [
                'submissions' => $this->submissions,
                'periodLabel' => $this->periodLabel,
                'uniqueVisitors' => $this->uniqueVisitors,
                'totalVisits' => $this->totalVisits,
                'categoryStats' => $this->categoryStats,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
