<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notre Équipe - SOMAFIAM S.A</title>
    <meta name="description" content="Découvrez l'équipe SOMAFIAM S.A — des professionnels engagés au service de vos projets industriels depuis 2004 à Casablanca, Maroc.">
    <meta name="robots" content="index, follow">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://somafiam.com/notreEquipe">
    <meta property="og:title" content="Notre Équipe - SOMAFIAM S.A">
    <meta property="og:description" content="Des professionnels engagés au service de vos projets industriels depuis 2004.">
    <meta property="og:image" content="{{ url('Logo/Last Logo Somafiam.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        body { font-family: "Montserrat", sans-serif; background: #f4f6fb; }

        .hero-section {
            position: relative;
            width: 100%;
            height: 50vh;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #001f4d;
            color: #fff;
        }

        .background-video {
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            object-fit: cover;
        }

        .overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 20, 50, 0.82);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            padding-top: 80px;
        }

        .hero-content h1 {
            font-size: 46px;
            font-weight: 700;
            letter-spacing: 5px;
        }

        .hero-content p {
            font-size: 13px;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: #F47920;
            margin-top: 10px;
        }

        .section-title {
            font-size: 1.6rem;
            font-weight: 700;
            color: #003580;
            position: relative;
            display: inline-block;
            padding-bottom: 10px;
            margin-bottom: 40px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0; left: 0;
            width: 50px; height: 3px;
            background: #F47920;
            border-radius: 2px;
        }

        /* Card PDG */
        .card-pdg {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0, 53, 128, 0.12);
            padding: 48px 36px 36px;
            text-align: center;
            border-top: 5px solid #003580;
            max-width: 420px;
            margin: 0 auto 70px;
        }

        .card-pdg .photo-placeholder {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            background: linear-gradient(135deg, #e8f0ff, #f0f4ff);
            border: 3px dashed #003580;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: #003580;
            gap: 6px;
        }

        .card-pdg .photo-placeholder i {
            font-size: 36px;
            opacity: 0.5;
        }

        .card-pdg .photo-placeholder span {
            font-size: 0.65rem;
            font-weight: 600;
            opacity: 0.6;
            letter-spacing: 0.5px;
        }

        .card-pdg h3 {
            font-size: 1.25rem;
            font-weight: 700;
            color: #1a1a2e;
            margin-bottom: 4px;
        }

        .card-pdg .role {
            color: #F47920;
            font-size: 0.85rem;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 16px;
        }

        .card-pdg .divider {
            width: 40px;
            height: 2px;
            background: #e0e8f4;
            margin: 0 auto 16px;
        }

        .card-pdg p {
            font-size: 0.88rem;
            color: #666;
            line-height: 1.7;
        }

        /* Paragraphe équipe */
        .team-paragraph {
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 4px 20px rgba(0, 53, 128, 0.08);
            padding: 40px 44px;
            border-left: 5px solid #F47920;
            margin-bottom: 50px;
        }

        .team-paragraph p {
            font-size: 0.97rem;
            color: #444;
            line-height: 1.85;
            margin: 0;
        }

        .team-paragraph .quote-icon {
            font-size: 2.5rem;
            color: #F47920;
            opacity: 0.3;
            line-height: 1;
            margin-bottom: 12px;
            display: block;
        }

        .content-wrapper { padding-top: 0; }
    </style>
</head>

<body>
    @include('Header')

    <section class="hero-section" style="z-index: 333;">
        <video autoplay loop muted playsinline class="background-video">
            <source src="{{ asset('Videos/v5.mp4') }}" type="video/mp4">
        </video>
        <div class="overlay"></div>
        <div class="hero-content">
            <h1>NOTRE ÉQUIPE</h1>
            <p>Les femmes et hommes de SOMAFIAM S.A</p>
        </div>
    </section>

    <div class="content-wrapper">
        <div class="container" style="padding: 70px 15px;">

            <!-- Direction générale -->
            <h2 class="section-title">Direction Générale</h2>

            <div class="card-pdg">
                <div class="photo-placeholder">
                    <i class="fas fa-user"></i>
                    <span>PHOTO À VENIR</span>
                </div>
                <h3>Mohammed Hachchi</h3>
                <div class="role">Président Directeur Général</div>
                <div class="divider"></div>
                <p>Fort de plus de 22 ans d'expérience dans le secteur industriel marocain, M. Hachchi dirige SOMAFIAM S.A avec une vision d'excellence et d'innovation au service des entreprises.</p>
            </div>

            <!-- Notre Équipe — paragraphe -->
            <h2 class="section-title">Notre Équipe</h2>

            <div class="team-paragraph">
                <span class="quote-icon">"</span>
                <p>
                    Chez SOMAFIAM S.A, notre force repose avant tout sur les femmes et les hommes qui composent notre équipe.
                    Forts de compétences pluridisciplinaires dans les domaines industriel, commercial, technique et logistique,
                    nos collaborateurs partagent une même exigence : offrir à chaque client un service de qualité, réactif et personnalisé.
                    Animés par des valeurs de rigueur, d'intégrité et d'esprit d'équipe, ils sont le moteur de notre développement
                    et l'ambassadeurs de la réputation de SOMAFIAM S.A sur le marché marocain et à l'international.
                </p>
            </div>

            <!-- CTA Contact -->
            <div class="text-center" style="margin-top: 20px;">
                <p style="color: #666; margin-bottom: 16px;">Vous souhaitez nous rejoindre ou travailler avec nous ?</p>
                <a href="{{ route('contactShow') }}"
                   style="background:#003580; color:#fff; padding:12px 32px; border-radius:6px; font-weight:600; text-decoration:none; transition:background 0.2s;"
                   onmouseover="this.style.background='#F47920'" onmouseout="this.style.background='#003580'">
                    Contactez-nous
                </a>
            </div>

        </div>
    </div>

    @include('Footer')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
