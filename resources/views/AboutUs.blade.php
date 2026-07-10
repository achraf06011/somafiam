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
            padding-top: 150px;
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
            color: #060e27;
            line-height: 2;
            font-weight: 900;
        }
        
        .aboutUsSectionText h6 {
            margin-bottom: 10px;
            font-size: 1.25rem;
        }

        .aboutUsSectionText p {
            font-family: 'Raleway', sans-serif;
            margin-bottom: 20px;
        }

        .aboutUsSectionText p:last-child {
            margin-bottom: 0;
        }
        
        .executive-info {
            text-align: right;
            color: #0A3D91; /* Dark blue color */
            padding: 50px 0px 0px 0px;
        }
        
        .executive-info h4 {
            font-size: 1.4em;
            margin: 0;
            font-weight: bold;
        }
        
        .executive-info span {
            font-size: 1em;
            display: block;
            margin-top: 2.5px;
            font-style: italic;
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
            <h1 class="wow fadeIn"data-wow-delay="0.3s"> QUI SOMMES-NOUS </h1>
            <h6 class="wow fadeIn"data-wow-delay="0.7s">
                Découvrez Notre Histoire
            </h6>
        </div>
    </section>


    <section class="aboutUsSection">
        <div class="aboutUsSectionTitre">
            <h2>SOMAFIAM S.A</h2>
        </div>

        <div class="aboutUsSectionText">
            <h6> Mesdames et Messieurs </h6>
            
            <p>Aujourd’hui nous avons le plaisir, après une longue attente et de nombreuses années de patience et de lutte, de vous présenter la Société
            Marocaine des Fournitures Industrielles Agricoles et métallurgie, Société Anonyme, comme une société leader spécialisée dans les fournitures
            industrielles agricoles et métallurgie. Elle dispose de l'expertise et d'une histoire riche pour répondre aux divers besoins
            des sociétés depuis plus de vingt-deux ans. La Société Marocaine de Fournitures Industrielles Agricoles et métallurgie S.A. a été créée
            avec la vision de fournir des produits et services de haute qualité conformes aux normes internationales, et a développé ses cadres au fil
            des années pour devenir des partenaires fiables pour les sociétés à la recherche de produits industrielles agricoles et métallurgie de qualité,
            fiables et efficaces.</p>
            
            <p>Les solutions, la Société Marocaine des Fournitures Industrielles Agricoles et métallurgie S.A. se distingue
            par son engagement en faveur de l’excellence, de l’innovation et de la satisfaction de ses clients, ce qui en fait un acteur majeur sur le marché
            des fournitures industrielles agricoles et métallurgie. Grâce à une compréhension approfondie des exigences des usines et des entreprises
            des villes industrielles agricoles et minières, la Société Marocaine des Fournitures Industrielles Agricoles et métallurgie S.A. a continuellement
            adapté et diversifié ses offres pour répondre aux besoins évolutifs de ses clients, et établir des relations à long terme. Construit sur la confiance
            et la fiabilité.</p>
            
            <p>La Société marocaine de fournitures industrielles agricoles et métallurgie S.A proposé une gamme complète de fournitures
            industrielles agricoles et métallurgie pour soutenir divers secteurs, garantissant que les sociétés disposent des équipements et des machines
            dont elles ont besoin pour réussir. Des matières premières de base aux machines et technologies de pointe, la gamme de produits
            de la Société marocaine de fournitures industrielles agricoles et métallurgie S.A. comprend une large gamme de fournitures industrielles
            spécialement conçues pour répondre aux exigences spécifiques de divers secteurs. L'engagement de l'entreprise envers la qualité et l'efficacité
            se reflète dans son engagement à rechercher les meilleurs produits disponibles sur le marché mondial et à les livrer aux clients dans les
            délais, de manière rentable et efficace.</p>
            
            <p>En fournissant une gamme diversifiée de fournitures industrielles agricoles et de métallurgie, la Société
            marocaine des fournitures industrielles agricoles et métallurgie S.A. vise à permettre aux sociétés d'améliorer leurs opérations et d'atteindre
            leurs objectifs de manière efficiente et efficace.</p>
            
            <p>Sa mission et ses valeurs sont au cœur des opérations de la Société Marocaine des Fournitures
            Industrielles Agricoles et métallurgie S.A. , guidant les décisions, les actions et les relations de l'entreprise avec les parties prenantes engagée
            à promouvoir une culture d'intégrité, d'innovation et de durabilité, la mission de la Société marocaine des fournitures industrielles agricoles et
            métallurgie S.A. est d'être un partenaire de confiance des sociétés, en fournissant des solutions de pointe qui stimulent la croissance et le
            succès.</p>
            
            <p>La Société marocaine des fournitures industrielles agricoles et métallurgie S.A. valorise la coopération, la transparence et l'excellence,
            et s'efforce de dépasser les attentes des clients et de contribuer positivement à la chaîne d’approvisionnement. En défendant ces valeurs et en
            restant fidèle à sa mission, la Société Marocaine de Fournitures Industrielles Agricoles et de Minéraux se distingue comme un fournisseur
            fiable et respecté de fournitures industrielles agricoles et métallurgie, dédié à accompagner le succès et la durabilité de ses clients.
            Mesdames et Messieurs, nous espérons ne pas vous avoir parlé trop longtemps et nous vous laissons avec l'espoir de vous rencontrer
            et de démarrer ensemble un partenariat économique très important et à long terme.
            </p>
        </div>
        
        <div class="executive-info">
            <h4> Mohammed Hachchi </h4>
            <span> Président directeur général </span>
        </div>
    </section>

    @include('Footer')
</body>

</html>
