<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page introuvable - SOMAFIAM S.A</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('Logo/Last Logo Somafiam.png') }}">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, #001228 0%, #001f4d 50%, #002a6b 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            overflow: hidden;
        }

        .container-404 {
            text-align: center;
            padding: 40px 20px;
            position: relative;
            z-index: 2;
        }

        .logo img { height: 70px; margin-bottom: 40px; filter: brightness(0) invert(1); }

        .error-code {
            font-size: clamp(7rem, 20vw, 13rem);
            font-weight: 800;
            line-height: 1;
            background: linear-gradient(135deg, #003580 0%, #F47920 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: -4px;
            margin-bottom: 16px;
        }

        .error-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: #fff;
            margin-bottom: 12px;
            letter-spacing: 1px;
        }

        .error-desc {
            font-size: 0.92rem;
            color: rgba(255,255,255,0.6);
            margin-bottom: 40px;
            line-height: 1.7;
            max-width: 420px;
            margin-left: auto;
            margin-right: auto;
        }

        .divider {
            width: 50px; height: 3px;
            background: #F47920;
            border-radius: 2px;
            margin: 0 auto 32px;
        }

        .btn-home {
            display: inline-block;
            background: #003580;
            color: #fff;
            padding: 14px 36px;
            border-radius: 6px;
            font-weight: 700;
            font-size: 0.9rem;
            text-decoration: none;
            letter-spacing: 0.5px;
            transition: background 0.2s, transform 0.2s;
            margin: 6px;
        }
        .btn-home:hover { background: #F47920; color: #fff; transform: translateY(-2px); text-decoration: none; }

        .btn-contact {
            display: inline-block;
            background: transparent;
            color: #fff;
            padding: 13px 36px;
            border-radius: 6px;
            font-weight: 600;
            font-size: 0.9rem;
            text-decoration: none;
            border: 2px solid rgba(255,255,255,0.3);
            transition: border-color 0.2s, transform 0.2s;
            margin: 6px;
        }
        .btn-contact:hover { border-color: #F47920; color: #F47920; transform: translateY(-2px); text-decoration: none; }

        /* Orb décoratif */
        .orb {
            position: fixed;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.15;
            pointer-events: none;
        }
        .orb-1 { width: 500px; height: 500px; background: #F47920; top: -100px; right: -100px; }
        .orb-2 { width: 400px; height: 400px; background: #003580; bottom: -80px; left: -80px; }
    </style>
</head>
<body>
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>

    <div class="container-404">
        <div class="logo">
            <img src="{{ asset('Logo/Last Logo Somafiam.png') }}" alt="SOMAFIAM S.A">
        </div>

        <div class="error-code">404</div>

        <h1 class="error-title">Page introuvable</h1>
        <div class="divider"></div>
        <p class="error-desc">
            La page que vous recherchez n'existe pas ou a été déplacée.<br>
            Retournez à l'accueil pour continuer votre navigation.
        </p>

        <div>
            <a href="/" class="btn-home">Retour à l'accueil</a>
            <a href="/contact" class="btn-contact">Nous contacter</a>
        </div>
    </div>
</body>
</html>
