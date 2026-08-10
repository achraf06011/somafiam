<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; color: #222; background: #f4f4f4; margin: 0; padding: 0; }
        .wrapper { max-width: 1100px; margin: 30px auto; background: #fff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        .header { background: #003580; padding: 24px 32px; }
        .header h1 { color: #fff; margin: 0; font-size: 20px; letter-spacing: 1px; }
        .header span { color: #F47920; }
        .header p { color: rgba(255,255,255,0.7); margin: 6px 0 0; font-size: 13px; }
        .body { padding: 28px 32px; }
        .summary-box { background: #f9f9f9; border-left: 4px solid #F47920; border-radius: 5px; padding: 16px 20px; margin-bottom: 24px; }
        .summary-box .count { font-size: 28px; font-weight: 700; color: #003580; }
        .summary-box .label { font-size: 13px; color: #666; }
        .stats-table { width: 100%; margin-bottom: 24px; border-collapse: separate; border-spacing: 12px 0; }
        .stat-box { background: #f9f9f9; border-left: 4px solid #003580; border-radius: 5px; padding: 16px 20px; width: 50%; }
        .stat-box .count { font-size: 24px; font-weight: 700; color: #003580; }
        .stat-box .label { font-size: 12px; color: #666; }
        table { width: 100%; border-collapse: collapse; font-size: 11px; }
        th { background: #001f4d; color: #fff; text-align: left; padding: 8px 6px; font-size: 10px; text-transform: uppercase; letter-spacing: 0.5px; }
        td { padding: 8px 6px; border-bottom: 1px solid #eee; vertical-align: top; word-break: break-word; }
        tr:nth-child(even) td { background: #fafafa; }
        .section-title { color: #003580; font-size: 15px; margin: 26px 0 10px; }
        .empty-state { text-align: center; padding: 30px 0; color: #888; font-size: 14px; }
        .footer { background: #001f4d; color: #aaa; text-align: center; font-size: 12px; padding: 16px; }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="header">
        <h1>SOMAFIAM <span>S.A</span> &mdash; Rapport hebdomadaire</h1>
        <p>{{ $periodLabel }}</p>
    </div>
    <div class="body">
        <div class="summary-box">
            <div class="count">{{ $submissions->count() }}</div>
            <div class="label">demande(s) re&ccedil;ue(s) via le formulaire de contact cette semaine</div>
        </div>

        <table class="stats-table" cellpadding="0" cellspacing="0">
            <tr>
                <td class="stat-box">
                    <div class="count">{{ number_format($uniqueVisitors, 0, ',', ' ') }}</div>
                    <div class="label">visiteur(s) unique(s) sur le site cette semaine</div>
                </td>
                <td class="stat-box">
                    <div class="count">{{ number_format($totalVisits, 0, ',', ' ') }}</div>
                    <div class="label">page(s) vue(s) au total</div>
                </td>
            </tr>
        </table>

        @if($categoryStats->isNotEmpty())
            <h2 class="section-title">Visites par rubrique</h2>
            <table>
                <thead>
                    <tr>
                        <th>Rubrique</th>
                        <th>Visites</th>
                        <th>Visiteurs uniques</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categoryStats as $stat)
                        <tr>
                            <td>{{ $stat['label'] }}</td>
                            <td>{{ number_format($stat['visits'], 0, ',', ' ') }}</td>
                            <td>{{ number_format($stat['unique_visitors'], 0, ',', ' ') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <h2 class="section-title">Demandes recues</h2>

        @if($submissions->isEmpty())
            <div class="empty-state">Aucune demande re&ccedil;ue cette semaine.</div>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Soci&eacute;t&eacute;</th>
                        <th>Fonction</th>
                        <th>T&eacute;l&eacute;phone</th>
                        <th>Pays</th>
                        <th>Ville</th>
                        <th>Adresse</th>
                        <th>Sujet</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($submissions as $s)
                        <tr>
                            <td>{{ $s->created_at->format('d/m H:i') }}</td>
                            <td>{{ $s->name }}</td>
                            <td>{{ $s->email }}</td>
                            <td>{{ $s->societe ?: '-' }}</td>
                            <td>{{ $s->fonction ?: '-' }}</td>
                            <td>{{ $s->telephone ?: '-' }}</td>
                            <td>{{ $s->country ?: '-' }}</td>
                            <td>{{ $s->ville ?: '-' }}</td>
                            <td>{{ $s->adresse ?: '-' }}</td>
                            <td>{{ $s->subject ?: '-' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
    <div class="footer">
        &copy; {{ date('Y') }} SOMAFIAM S.A &mdash; somafiam.com
    </div>
</div>
</body>
</html>
