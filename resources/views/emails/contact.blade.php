<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; color: #222; background: #f4f4f4; margin: 0; padding: 0; }
        .wrapper { max-width: 600px; margin: 30px auto; background: #fff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        .header { background: #003580; padding: 24px 32px; }
        .header h1 { color: #fff; margin: 0; font-size: 20px; letter-spacing: 1px; }
        .header span { color: #F47920; }
        .body { padding: 28px 32px; }
        .field { margin-bottom: 16px; }
        .label { font-size: 11px; text-transform: uppercase; letter-spacing: 1px; color: #888; margin-bottom: 4px; }
        .value { font-size: 15px; color: #222; border-left: 3px solid #F47920; padding-left: 10px; }
        .message-box { background: #f9f9f9; border-radius: 5px; padding: 16px; margin-top: 8px; font-size: 15px; white-space: pre-wrap; }
        .footer { background: #001f4d; color: #aaa; text-align: center; font-size: 12px; padding: 16px; }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="header">
        <h1>SOMAFIAM <span>S.A</span> — Nouveau message</h1>
    </div>
    <div class="body">
        <div class="field">
            <div class="label">Nom Prénom</div>
            <div class="value">{{ $name }}</div>
        </div>
        <div class="field">
            <div class="label">E-Mail</div>
            <div class="value">{{ $email }}</div>
        </div>
        @if($societe)
        <div class="field">
            <div class="label">Société</div>
            <div class="value">{{ $societe }}</div>
        </div>
        @endif
        @if($telephone)
        <div class="field">
            <div class="label">Téléphone</div>
            <div class="value">{{ $telephone }}</div>
        </div>
        @endif
        <div class="field">
            <div class="label">Pays</div>
            <div class="value">{{ $country }}</div>
        </div>
        <div class="field">
            <div class="label">Sujet</div>
            <div class="value">{{ $subject }}</div>
        </div>
        <div class="field">
            <div class="label">Message</div>
            <div class="message-box">{{ $message }}</div>
        </div>
    </div>
    <div class="footer">
        © {{ date('Y') }} SOMAFIAM S.A — somafiam.com
    </div>
</div>
</body>
</html>
