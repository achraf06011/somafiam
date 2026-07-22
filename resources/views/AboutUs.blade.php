<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos de nous - SOMAFIAM S.A</title>
    <meta name="description" content="Découvrez SOMAFIAM S.A — 22 ans d'expertise dans la fourniture d'équipements industriels, agricoles et métallurgiques au Maroc. Notre histoire, nos valeurs et notre mission.">
    <meta name="robots" content="index, follow">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://somafiam.com/aProposNous">
    <meta property="og:title" content="À propos de SOMAFIAM S.A">
    <meta property="og:description" content="22 ans d'expertise dans la fourniture d'équipements industriels, agricoles et métallurgiques au Maroc.">
    <meta property="og:image" content="{{ url('Logo/Last Logo Somafiam.png') }}">

    <link href="https://fonts.googleapis.com/css2?family=Gruppo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Belleza&family=Raleway:wght@400;700&display=swap"
        rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        .hero-section {
            position: relative;
            width: 100%;
            height: 50vh;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #092a58;
            color: #fff;
            flex-direction: column;
            padding: 50px 0;

        }

        .background-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            object-fit: cover;
            height: 47.5vh;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 48.5vh;
            background-color: rgba(0, 25, 54, 0.863);
            /* background-image: url("https://png.pngtree.com/thumb_back/fh260/background/20231231/pngtree-golden-halftone-pattern-adds-texture-to-abstract-black-background-image_13880231.png"); */
            background-blend-mode: overlay;
        }

        .hero-content {
            position: relative;
            text-align: center;
            z-index: 2;
            max-width: 800px;
        }

        .hero-content h1 {
            position: relative;
            font-size: 50px;
            top: -25px;
        }

        .hero-content h6 {
            position: relative;
            font-family: gruppo;
            font-weight: 600;
            font-size: 13px;
            text-transform: uppercase;
            top: -25px;
            letter-spacing: 5px;
        }


        .hero-content p {
            font-size: 18px;
            margin-bottom: 30px;
        }



        .aboutUsSection {
            width: 80%;
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            border-radius: 12px;
            font-family: 'Raleway', sans-serif;
        }

        .aboutUsSectionTitre {
            text-align: left;
            margin-bottom: 20px;
        }

        .aboutUsSectionTitre h2 {
            font-size: 2rem;
            background-image: linear-gradient(35deg, #003580 5%, #F47920 80%);
            background-size: 100%;
            background-repeat: repeat;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            -moz-background-clip: text;
            -moz-text-fill-color: transparent;
            margin: 0;
            font-weight: 600;
        }

        .aboutUsSectionText {
            font-size: 1rem;
            color: #003580;
            line-height: 2;
            font-weight: 900;
        }

        .aboutUsSectionText h5 {
            font-size: 1.15rem;
            font-weight: 700;
            color: #F47920;
            margin: 32px 0 12px;
        }

        .aboutUsSectionText p {
            font-family: 'Raleway', sans-serif;
            margin-bottom: 20px;
            text-align: justify;
        }

        .aboutUsSectionText p:last-child {
            margin-bottom: 0;
        }

        .executive-info {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 36px;
            margin-top: 56px;
            padding: 38px 44px;
            background: linear-gradient(135deg, #fbfcff 0%, #f3f6fc 100%);
            border-radius: 18px;
            border: 1px solid #e5ebf5;
            box-shadow: 0 12px 40px rgba(0, 53, 128, 0.08);
            position: relative;
            overflow: hidden;
        }

        .executive-info::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #003580 0%, #F47920 100%);
        }

        .executive-info::after {
            content: '\201D';
            position: absolute;
            top: -30px;
            left: 20px;
            font-family: Georgia, serif;
            font-size: 160px;
            color: #003580;
            opacity: 0.05;
            line-height: 1;
            pointer-events: none;
        }

        .executive-info-text {
            color: #0A3D91;
            position: relative;
            z-index: 1;
        }

        .executive-info-text .eyebrow {
            display: block;
            font-size: 0.68rem;
            font-weight: 700;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            color: #F47920;
            margin-bottom: 10px;
        }

        .executive-info-text h4 {
            font-size: 1.55rem;
            margin: 0;
            font-weight: 800;
            color: #001f4d;
            letter-spacing: 0.3px;
        }

        .executive-info-text .divider {
            width: 42px;
            height: 2px;
            background: #F47920;
            margin: 12px 0;
        }

        .executive-info-text span.role {
            font-size: 0.92rem;
            display: block;
            font-style: italic;
            color: #46618f;
            letter-spacing: 0.3px;
        }

        .executive-info .photo-placeholder {
            flex-shrink: 0;
            width: 148px;
            height: 148px;
            border-radius: 50%;
            background: linear-gradient(135deg, #e8f0ff, #f0f4ff);
            border: 3px solid #fff;
            box-shadow: 0 0 0 3px #F47920, 0 14px 30px rgba(0, 53, 128, 0.22);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #003580;
            gap: 6px;
            overflow: hidden;
            position: relative;
            z-index: 1;
        }

        .executive-info .photo-placeholder img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .executive-info .photo-placeholder i {
            font-size: 40px;
            opacity: 0.45;
        }

        .executive-info .photo-placeholder span {
            font-size: 0.6rem;
            font-weight: 600;
            opacity: 0.55;
            letter-spacing: 0.5px;
        }

        @media (max-width: 576px) {
            .executive-info { flex-direction: column-reverse; text-align: center; padding: 32px 24px; }
            .executive-info-text .divider { margin: 12px auto; }
        }

        /* ── Responsive hero title ── */
        @media (max-width: 768px) {
            .hero-content h1 { font-size: 28px; }
        }
    </style>
</head>

<body>
    @include('Header')

    <section class="hero-section" style="z-index: 333;">
        <video autoplay loop muted playsinline class="background-video">
            <source src="{{ asset('Videos/v5.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="overlay wow fadeIn"data-wow-delay="0.1s"></div>
        <div class="hero-content">
            <h1 class="wow fadeIn"data-wow-delay="0.3s"> QUI SOMMES NOUS </h1>
            <h6 class="wow fadeIn"data-wow-delay="0.7s">
                Découvrez Notre Histoire
            </h6>
        </div>
    </section>


    <section class="aboutUsSection">
        <div class="executive-info">
            <div class="executive-info-text">
                <span class="eyebrow">Le mot du Président</span>
                <h4>Ing. Mohammed Hachchi</h4>
                <div class="divider"></div>
                <span class="role">Président directeur général</span>
            </div>
            <div class="photo-placeholder">
                <img src="{{ asset('Bg/PDG photo.jpeg') }}" alt="Mohammed Hachchi, Président directeur général de SOMAFIAM S.A">
            </div>
        </div>

        <div class="aboutUsSectionTitre">
            <h2>Société Marocaine des Fournitures Industrielles, Agricoles et Métallurgiques (SOMAFIAM S.A)</h2>
        </div>

        <div class="aboutUsSectionText">
            <p>Chers Partenaires,</p>

            <p>C'est avec une fierté légitime et un grand enthousiasme qu'aujourd'hui, après des années de rigueur, de persévérance et d'engagement constant, nous vous présentons la Société Marocaine des Fournitures Industrielles, Agricoles et Métallurgiques (SOMAFIAM S.A.), un acteur leader et incontournable sur son marché.</p>

            <p>Forts de plus de 24 ans d'expertise, nous nous appuyons sur une histoire riche et sur des équipes qualifiées dont le savoir-faire éprouvé permet de répondre avec précision aux besoins les plus exigeants des entreprises. Dès sa création, SOMAFIAM S.A. s'est fixée une vision claire : fournir des équipements et produits de haute qualité, rigoureusement conformes aux normes internationales les plus strictes. Au fil du temps, nos collaborateurs sont devenus de véritables partenaires de confiance pour toutes les structures en quête de solutions fiables, performantes et durables.</p>

            <h5>Une Clarté Stratégique et un Engagement Vers l'Excellence</h5>
            <p>Au cœur de notre démarche se trouvent trois piliers fondamentaux : l'excellence, l'innovation et la satisfaction client.</p>
            <p>Grâce à une compréhension fine et intuitive des contraintes opérationnelles des usines et des acteurs implantés dans les grandes zones industrielles, agricoles et minières du Royaume, SOMAFIAM S.A. n'a cessé d'évoluer. Nous adaptons et diversifions constamment notre offre pour devancer les mutations du marché, tissant ainsi avec nos clients des relations à long terme fondées sur la transparence et la réciprocité.</p>

            <h5>Une Offre Globale et Multi-Secteurs</h5>
            <p>Pour accompagner le développement économique et technique de nos partenaires, nous proposons une gamme vaste et intégrée :</p>
            <p>Matières premières fondamentales destinées à la transformation et à la fabrication.</p>
            <p>Équipements, machines et technologies de pointe conçus pour optimiser les processus industriels, agricoles et métallurgiques.</p>
            <p>Notre engagement envers la performance se traduit par un sourcing international rigoureux : nous sélectionnons les meilleures innovations disponibles sur le marché mondial pour les livrer à nos clients dans les meilleurs délais, au coût le plus juste et avec une efficacité logistique irréprochable. En dotant les entreprises des meilleurs outils, SOMAFIAM S.A. leur donne les moyens de maximiser leur productivité et d'atteindre leurs objectifs stratégiques.</p>

            <h5>Nos Valeurs : Le Socle de Notre Identité</h5>
            <p>Toutes nos décisions et nos interactions avec nos parties prenantes sont guidées par des valeurs fortes : l'intégrité, la coopération, la transparence et la durabilité.</p>
            <p>Notre mission va au-delà de la simple fourniture d'équipements : nous ambitionnons d'être le catalyseur de votre croissance et un maillon solide, créateur de valeur au sein de votre chaîne d'approvisionnement.</p>

            <p>Chers Partenaires,</p>
            <p>Nous vous remercions chaleureusement pour votre attention. C'est avec une grande confiance en l'avenir que nous vous invitons à échanger avec nos équipes, dans l'espoir de concrétiser très prochainement un partenariat économique stratégique, ambitieux et pérenne.</p>
        </div>
    </section>

    @include('Footer')
</body>

</html>
