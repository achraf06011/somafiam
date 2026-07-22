<!DOCTYPE html>
<html lang="fr" style="scroll-behavior: smooth;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - SOMAFIAM S.A | Fournisseur Industriel au Maroc</title>
    <meta name="description" content="SOMAFIAM S.A — Société Marocaine de Fournitures Industrielles Agricoles et Métallurgie. Fournisseur de référence au Maroc pour équipements industriels, agricoles, métallurgiques et robotiques. Casablanca.">
    <meta name="robots" content="index, follow">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://somafiam.com/">
    <meta property="og:title" content="SOMAFIAM S.A | Fournisseur Industriel au Maroc">
    <meta property="og:description" content="Société Marocaine de Fournitures Industrielles Agricoles et Métallurgie — 2500+ produits, 22 ans d'expérience, basé à Casablanca.">
    <meta property="og:image" content="{{ url('Logo/Last Logo Somafiam.png') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="SOMAFIAM S.A | Fournisseur Industriel au Maroc">
    <meta name="twitter:description" content="Fournisseur de référence en équipements industriels, agricoles et métallurgiques au Maroc.">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Marquee.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ContactPagetheme.css') }}">

    <style>
        @import url(https://fonts.googleapis.com/css2?family=Gruppo:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap);
        @import url(https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap);

        * {
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        section div h2 {
            font-family: Gruppo;
            font-weight: 900;
            font-style: normal;
            font-size: 36px
        }

        section div p {
            font-family: Gruppo;
            font-weight: 900;
            font-style: italic;
            font-size: 18px;
            padding-bottom: 11px;
        }

        .hero {
            background: url('hero-image.jpg') no-repeat center center/cover;
            height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #fff;
        }

        .hero-content {
            max-width: 800px;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            font-weight: bold;
            background-color: #005baa;
            background-image: linear-gradient(125deg, #6c92b8 5%, #eef5fd 30%);
            background-size: 100%;
            background-repeat: repeat;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            -moz-background-clip: text;
            -moz-text-fill-color: transparent;
        }

        .hero p {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }

        .cta-primary {
            background-color: #F47920;
            color: #fff;
        }

        .cta-secondary {
            background-color: #fff;
            color: #F47920;
        }

        .content {
            padding: 50px 0;
            text-align: center;
        }

        .content h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .content p {
            font-size: 1.2rem;
            color: #555;
        }

        .carousel-item {
            background-color: #001a3a;
            min-height: 80vh;
        }

        .carousel-item video {
            height: 80vh;
            object-fit: cover;
            width: 100%;
        }

        .carousel-caption h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .carousel-caption p {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }

        /* ------------------------------------- cards style ------------------------------------ */

        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .modal-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(3, 48, 100, 0.432);
        }

        .modal-content {
            position: relative;
            background: transparent;
            padding: 125px;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .cards-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: 20px;
        }

        .card {
            position: relative;
            width: 250px;
            height: 250px;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease-in-out;
        }

        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .card-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 15px;
            background: rgba(255, 255, 255, 0);
            text-align: center;
        }

        .card h5 {
            margin: 0;
            font-size: 15px;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .card:hover {
            transform: translateY(-10px);
        }

        @media (max-width: 1200px) {
            .card {
                width: 19%;
            }
        }

        @media (max-width: 992px) {
            .card {
                width: 23%;
            }
        }

        @media (max-width: 768px) {
            .card {
                width: 48%;
            }
        }

        @media (max-width: 576px) {
            .card {
                width: 100%;
                margin-bottom: 20px;
            }
        }

        .card.show {
            opacity: 1;
            transform: translateY(25px);
        }

        .hidden {
            display: none;
        }

        #close-modal {
            margin-bottom: 20px;
        }

        /* ------------------------ card X Design ---------------------------- */

        .containerX {
            width: 100%;
            margin: 0 auto;
            display: flex;
            justify-content: flex-start;
            align-items: stretch;
            flex-wrap: nowrap;
            overflow-x: auto;
            gap: 0;
        }

        .cardX {
            width: calc(100% / 6);
            flex-shrink: 0;
            height: 380px;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            flex-shrink: 0;
        }

        .cardX::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 4px;
            background: #F47920;
            z-index: 10;
            transition: height 0.3s ease;
        }

        .cardX:hover::before {
            height: 6px;
        }

        .cardXLink {
            width: 100%;
            height: 100%;
            display: block;
            text-decoration: none;
            position: relative;
        }

        .cardXImg {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
            position: relative;
            top: 0;
        }

        .cardX:hover .cardXImg {
            transform: scale(1.1);
            top: 0;
        }

        .cardX-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(
                to bottom,
                rgba(0, 30, 80, 0.25) 0%,
                rgba(0, 53, 128, 0.80) 55%,
                rgba(0, 15, 50, 0.97) 100%
            );
            transition: background 0.5s ease;
            z-index: 2;
        }

        .cardX:hover .cardX-overlay {
            background: linear-gradient(
                to bottom,
                rgba(0, 30, 80, 0.10) 0%,
                rgba(0, 53, 128, 0.55) 40%,
                rgba(244, 121, 32, 0.90) 100%
            );
        }

        .cardX-content {
            position: absolute;
            bottom: 0; left: 0; right: 0;
            padding: 28px 18px 22px;
            text-align: center;
            z-index: 3;
            transform: translateY(8px);
            transition: transform 0.4s ease;
        }

        .cardX:hover .cardX-content {
            transform: translateY(0);
        }

        .cardX h5 {
            color: #fff;
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 13.5px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin: 0 0 10px 0;
            position: static;
            z-index: auto;
        }

        .cardX-line {
            width: 35px;
            height: 3px;
            background: #F47920;
            margin: 0 auto 12px;
            border-radius: 2px;
            transition: width 0.4s ease;
        }

        .cardX:hover .cardX-line {
            width: 55px;
        }

        .cardXDesc {
            opacity: 0;
            transform: translateY(8px);
            transition: opacity 0.4s ease 0.1s, transform 0.4s ease 0.1s;
            background-color: transparent;
            width: 100%;
            height: auto;
        }

        .cardX:hover .cardXDesc {
            opacity: 1;
            transform: translateY(0);
        }

        .cardXDesc p {
            color: rgba(255,255,255,0.90);
            font-size: 11.5px;
            line-height: 1.6;
        }

        /* ----------------------------------- infos Section --------------------------------------- */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .hero-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 50px 0;
            position: relative;
        }

        .experience-banner {
            position: absolute;
            left: 0;
            top: 20px;
            background-color: #254c94;
            padding: 20px;
            border-radius: 0 7px 7px 0;
            text-align: center;
            z-index: 1;
        }

        .experience-banner h2 {
            font-size: 48px;
            color: #fff;
            margin-bottom: 5px;
        }

        .experience-banner p {
            font-size: 16px;
            color: #fff;
        }

        .hero-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            width: 100%;
        }

        .hero-image {
            width: 700px;
        }

        .hero-image img {
            position: relative;
            left: 75px;
            max-width: 70%;
            border-radius: 7.5px;
        }

        .hero-text {
            padding: 20px;
            text-align: left;
        }

        .hero-text h1 {
            font-size: 36px;
            color: #333;
            margin-bottom: 10px;
            line-height: 1.2;
        }

        .hero-text p {
            font-size: 18px;
            color: #777;
        }

        /* Services Section */
        .services-section {
            padding: 50px 0;
            background-color: #fff;
            text-align: center;
        }

        .services-container {
            display: flex;
            justify-content: space-around;
            max-width: 1200px;
            margin: 0 auto;
        }

        .service-card {
            background-color: #f8f8f8;
            padding: 20px;
            border-radius: 10px;
            width: 30%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .service-card h3 {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }

        .service-card p {
            font-size: 16px;
            color: #777;
        }

        /* Stats Section */
        .stats-section {
            background-color: #254c94;
            padding: 50px 0;
            text-align: center;
            color: #fff;
        }

        .stats-container {
            display: flex;
            justify-content: space-around;
            max-width: 1200px;
            margin: 0 auto;
        }

        .stat-item {
            padding: 20px;
        }

        .stat-item h3 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .stat-item p {
            font-size: 16px;
        }

        /* -------------------------- catalogue section Design -------------------------- */

        .catalogueContainer {
            position: relative;
            text-align: center;
        }

        .qrCodeContainer {
            margin-top: 20px;
            text-align: center;
        }

        .qrCodeContainer img {
            width: 150px;
            /* Adjust size as needed */
            height: auto;
        }

        .qrCodeContainer p {
            margin-top: 10px;
            font-size: 14px;
        }
    </style>
</head>

<body>
    @include('Loader')

    @include('Header')

    <section class="hero wow fadeIn" data-wow-delay="0.1s">
        <div id="heroCarousel" class="carousel slide" data-ride="carousel" style="width: 100%;">
            <ol class="carousel-indicators">
                <li data-target="#heroCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#heroCarousel" data-slide-to="1"></li>
                <li data-target="#heroCarousel" data-slide-to="2"></li>
                <li data-target="#heroCarousel" data-slide-to="3"></li>
                <li data-target="#heroCarousel" data-slide-to="4"></li>
                <li data-target="#heroCarousel" data-slide-to="5"></li>
                <li data-target="#heroCarousel" data-slide-to="6"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <video class="wow fadeIn" data-wow-delay="1.3s" autoplay loop muted playsinline
                        style="filter: brightness(50%);">
                        <source src="{{ asset('Videos/v1.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="carousel-caption carousel-caption1 d-none d-md-block">
                        <h1 class="wow fadeIn" data-wow-delay="1.5s">
                            Société Marocaine de Fournitures Industrielles Agricoles et Metallurgie s.a
                        </h1>
                        <p class="wow fadeIn" data-wow-delay="1.9s">Systèmes et équipements industriels complets</p>
                        <a href="#secteurs">
                            <button style="background-color: #003580;border-color: #003580;"
                                class="btn btn-info wow fadeIn" data-wow-delay="2.1s">
                                En savoir plus
                            </button>
                        </a>
                        <a href="#" class="btn btn-outline-info wow fadeIn" data-wow-delay="2.3s"
                            id="modal-button0">
                            Nos Secteurs
                        </a>
                    </div>
                </div>

                <div class="carousel-item">
                    <video autoplay loop muted playsinline style="filter: brightness(50%);">
                        <source src="{{ asset('Videos/v4.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="carousel-caption d-none d-md-block">
                        <h1>
                            Société Marocaine de Fournitures Industrielles Agricoles et Metallurgie s.a
                        </h1>
                        <p>Équipements agricoles de pointe</p>
                        <a href="{{ route('agricultureProducts.index') }}">
                            <button style="background-color: #003580;border-color: #003580;" class="btn btn-info">
                                En savoir plus
                            </button>
                        </a>
                        <a href="#" class="btn btn-outline-info" id="modal-button1">Nos Secteurs</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <video autoplay loop muted playsinline style="filter: brightness(50%);">
                        <source src="{{ asset('Videos/v3.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="carousel-caption d-none d-md-block">
                        <h1>
                            Société Marocaine de Fournitures Industrielles Agricoles et Metallurgie s.a
                        </h1>
                        <p>Expertise en métallurgie industrielle</p>
                        <a href="{{ route('metallurgieProducts.index') }}">
                            <button style="background-color: #003580;border-color: #003580;" class="btn btn-info">
                                En savoir plus
                            </button>
                        </a>
                        <a href="#" class="btn btn-outline-info" id="modal-button2">Nos Secteurs</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <video autoplay loop muted playsinline style="filter: brightness(50%);">
                        <source src="{{ asset('Videos/v6.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="carousel-caption d-none d-md-block">
                        <h1>
                            Société Marocaine de Fournitures Industrielles Agricoles et Metallurgie s.a
                        </h1>
                        <p>Solutions avancées en robotique</p>
                        <a href="{{ route('robotiques') }}">
                            <button style="background-color: #003580;border-color: #003580;" class="btn btn-info">
                                En savoir plus
                            </button>
                        </a>
                        <a href="#" class="btn btn-outline-info" id="modal-button3">Nos Secteurs</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <video autoplay loop muted playsinline style="filter: brightness(50%);">
                        <source src="{{ asset('Videos/BTP.MP4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="carousel-caption d-none d-md-block">
                        <h1>
                            Société Marocaine de Fournitures Industrielles Agricoles et Metallurgie s.a
                        </h1>
                        <p>Solutions pour le secteur BTP et construction</p>
                        <a href="{{ route('btp') }}">
                            <button style="background-color: #003580;border-color: #003580;" class="btn btn-info">
                                En savoir plus
                            </button>
                        </a>
                        <a href="#" class="btn btn-outline-info" id="modal-button4">Nos Secteurs</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <video autoplay loop muted playsinline style="filter: brightness(50%);">
                        <source src="{{ asset('Videos/Mines.MP4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="carousel-caption d-none d-md-block">
                        <h1>
                            Société Marocaine de Fournitures Industrielles Agricoles et Metallurgie s.a
                        </h1>
                        <p>Équipements et expertise pour le secteur minier</p>
                        <a href="{{ route('mines') }}">
                            <button style="background-color: #003580;border-color: #003580;" class="btn btn-info">
                                En savoir plus
                            </button>
                        </a>
                        <a href="#" class="btn btn-outline-info" id="modal-button5">Nos Secteurs</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <video autoplay loop muted playsinline style="filter: brightness(50%);">
                        <source src="{{ asset('Videos/v5.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="carousel-caption d-none d-md-block">
                        <h1>
                            Société Marocaine de Fournitures Industrielles Agricoles et Metallurgie s.a
                        </h1>
                        <p>Services d'exportation internationaux</p>
                        <a href="{{ route('contactShow') }}">
                            <button style="background-color: #003580;border-color: #003580;" class="btn btn-info">
                                En savoir plus
                            </button>
                        </a>
                        <a href="#" class="btn btn-outline-info" id="modal-button6">Nos Secteurs</a>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <div id="modal" class="modal hidden">
        <div class="modal-overlay" id="modal-overlay"></div>
        <div class="modal-content">
            <button id="close-modal" class="btn btn-info"> Fermer </button>

            <div class="cards-container" style="flex-wrap:wrap; justify-content:center; gap:16px;">
                <div class="card" style="width:200px;height:200px;">
                    <a href="{{ route('industrielProducts.index') }}" style="display:block;width:100%;height:100%;">
                        <img src="{{ asset('Bg/cardBg6.jpeg') }}" alt="Équipements Industriels" style="width:100%;height:100%;object-fit:cover;">
                        <div class="card-overlay"><h5>Équipements Industriels</h5></div>
                    </a>
                </div>
                <div class="card" style="width:200px;height:200px;">
                    <a href="{{ route('agricultureProducts.index') }}" style="display:block;width:100%;height:100%;">
                        <img src="{{ asset('Bg/cardBg1.jpg') }}" alt="Équipements Agricoles" style="width:100%;height:100%;object-fit:cover;">
                        <div class="card-overlay"><h5>Équipements Agricoles</h5></div>
                    </a>
                </div>
                <div class="card" style="width:200px;height:200px;">
                    <a href="{{ route('robotiques') }}" style="display:block;width:100%;height:100%;">
                        <img src="{{ asset('Bg/cardBg5.jpeg') }}" alt="Robotique" style="width:100%;height:100%;object-fit:cover;">
                        <div class="card-overlay"><h5>Robotique</h5></div>
                    </a>
                </div>
                <div class="card" style="width:200px;height:200px;">
                    <a href="{{ route('metallurgieProducts.index') }}" style="display:block;width:100%;height:100%;">
                        <img src="{{ asset('Bg/cardBg2.jpg') }}" alt="Métallurgie" style="width:100%;height:100%;object-fit:cover;">
                        <div class="card-overlay"><h5>Métallurgie</h5></div>
                    </a>
                </div>
                <div class="card" style="width:200px;height:200px;">
                    <a href="{{ route('btp') }}" style="display:block;width:100%;height:100%;">
                        <img src="{{ asset('Bg/BTP .jpg') }}" alt="BTP" style="width:100%;height:100%;object-fit:cover;">
                        <div class="card-overlay"><h5>BTP</h5></div>
                    </a>
                </div>
                <div class="card" style="width:200px;height:200px;">
                    <a href="{{ route('mines') }}" style="display:block;width:100%;height:100%;">
                        <img src="{{ asset('Bg/Mines.jpg') }}" alt="Mines" style="width:100%;height:100%;object-fit:cover;">
                        <div class="card-overlay"><h5>Mines</h5></div>
                    </a>
                </div>
                <div class="card" style="width:200px;height:200px;">
                    <a href="{{ route('manutention') }}" style="display:block;width:100%;height:100%;">
                        <img src="{{ asset('manutentionProducts/p-xcs45.jpg') }}" alt="Manutention" style="width:100%;height:100%;object-fit:cover;">
                        <div class="card-overlay"><h5>Manutention</h5></div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- ── Section Nos Secteurs ── -->
    <section id="secteurs" style="background: #f8f9fb; border-top: 4px solid #F47920; padding: 60px 0 0;">
        <div class="container text-center wow fadeIn" data-wow-delay="0.1s">
            <p style="font-size: 10px; font-weight: 700; letter-spacing: 4px; text-transform: uppercase; color: #F47920; margin-bottom: 12px;">Nos Domaines</p>
            <h2 style="font-family:'Montserrat',sans-serif; font-size: 2.3rem; font-weight: 800; color: #001228; margin-bottom: 14px;">
                Nos Secteurs d'Activité
            </h2>
            <div style="width: 50px; height: 3px; background: #F47920; margin: 0 auto 20px; border-radius: 2px;"></div>
            <p style="font-size: 15px; color: #5a6a7e; max-width: 560px; margin: 0 auto 45px; line-height: 1.75;">
                De l'industrie à l'agriculture, SOMAFIAM couvre 7 secteurs stratégiques au service des entreprises marocaines.
            </p>
        </div>

        <div class="containerX">

            <div class="cardX wow fadeIn" data-wow-delay="0.1s">
                <a href="{{ route('industrielProducts.index') }}" class="cardXLink">
                    <img src="{{ asset('Bg/cardBg6.jpeg') }}" alt="Équipements Industriels" class="cardXImg">
                    <div class="cardX-overlay"></div>
                    <div class="cardX-content">
                        <h5>Équipements Industriels</h5>
                        <div class="cardX-line"></div>
                        <div class="cardXDesc"><p>Fourniture d'équipements industriels de haute qualité.</p></div>
                    </div>
                </a>
            </div>

            <div class="cardX wow fadeIn" data-wow-delay="0.2s">
                <a href="{{ route('agricultureProducts.index') }}" class="cardXLink">
                    <img src="{{ asset('Bg/cardBg1.jpg') }}" alt="Équipements Agricoles" class="cardXImg">
                    <div class="cardX-overlay"></div>
                    <div class="cardX-content">
                        <h5>Équipements Agricoles</h5>
                        <div class="cardX-line"></div>
                        <div class="cardXDesc"><p>Solutions innovantes pour l'agriculture moderne.</p></div>
                    </div>
                </a>
            </div>

            <div class="cardX wow fadeIn" data-wow-delay="0.3s">
                <a href="{{ route('metallurgieProducts.index') }}" class="cardXLink">
                    <img src="{{ asset('Bg/cardBg2.jpg') }}" alt="Métallurgie" class="cardXImg">
                    <div class="cardX-overlay"></div>
                    <div class="cardX-content">
                        <h5>Métallurgie</h5>
                        <div class="cardX-line"></div>
                        <div class="cardXDesc"><p>Expertise en métallurgie pour divers secteurs.</p></div>
                    </div>
                </a>
            </div>

            <div class="cardX wow fadeIn" data-wow-delay="0.4s">
                <a href="{{ route('robotiques') }}" class="cardXLink">
                    <img src="{{ asset('Bg/cardBg5.jpeg') }}" alt="Robotique" class="cardXImg">
                    <div class="cardX-overlay"></div>
                    <div class="cardX-content">
                        <h5>Robotique</h5>
                        <div class="cardX-line"></div>
                        <div class="cardXDesc"><p>Technologies avancées en robotique industrielle.</p></div>
                    </div>
                </a>
            </div>

            <div class="cardX wow fadeIn" data-wow-delay="0.5s">
                <a href="{{ route('btp') }}" class="cardXLink">
                    <img src="{{ asset('Bg/BTP .jpg') }}" alt="BTP" class="cardXImg">
                    <div class="cardX-overlay"></div>
                    <div class="cardX-content">
                        <h5>BTP</h5>
                        <div class="cardX-line"></div>
                        <div class="cardXDesc"><p>Équipements et machines pour le bâtiment et travaux publics.</p></div>
                    </div>
                </a>
            </div>

            <div class="cardX wow fadeIn" data-wow-delay="0.6s">
                <a href="{{ route('mines') }}" class="cardXLink">
                    <img src="{{ asset('Bg/Mines.jpg') }}" alt="Mines" class="cardXImg">
                    <div class="cardX-overlay"></div>
                    <div class="cardX-content">
                        <h5>Mines</h5>
                        <div class="cardX-line"></div>
                        <div class="cardXDesc"><p>Solutions et équipements spécialisés pour l'industrie minière.</p></div>
                    </div>
                </a>
            </div>

            <div class="cardX wow fadeIn" data-wow-delay="0.7s">
                <a href="{{ route('manutention') }}" class="cardXLink">
                    <img src="{{ asset('manutentionProducts/p-xcs45.jpg') }}" alt="Manutention" class="cardXImg">
                    <div class="cardX-overlay"></div>
                    <div class="cardX-content">
                        <h5>Manutention</h5>
                        <div class="cardX-line"></div>
                        <div class="cardXDesc"><p>Chariots élévateurs, reach stackers et solutions de levage portuaire.</p></div>
                    </div>
                </a>
            </div>
        </div>
    </section>


    <!-- ── Section Chiffres Clés ── -->
    <section class="wow fadeIn" data-wow-delay="0.3s" style="
        background: linear-gradient(135deg, #001f4d 0%, #003580 50%, #001228 100%);
        padding: 70px 0;
        position: relative;
        overflow: hidden;
    ">
        <div style="
            position: absolute; inset: 0;
            background: radial-gradient(ellipse 60% 80% at 80% 50%, rgba(244,121,32,0.08) 0%, transparent 70%);
            pointer-events: none;
        "></div>

        <div class="container" style="position: relative; z-index: 1;">
            <div class="text-center" style="margin-bottom: 50px;">
                <h2 style="color:#fff; font-family:'Montserrat',sans-serif; font-weight:700; font-size:1.9rem; letter-spacing:3px; text-transform:uppercase;">
                    SOMAFIAM <span style="color:#F47920;">en chiffres</span>
                </h2>
                <div style="width:50px; height:3px; background:#F47920; margin:14px auto 0; border-radius:2px;"></div>
            </div>

            <div class="row text-center">
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <div class="stat-box wow fadeIn" data-wow-delay="0.4s">
                        <div class="stat-number" data-target="22">0</div>
                        <div class="stat-plus">+</div>
                        <div class="stat-label">Ans d'expérience</div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <div class="stat-box wow fadeIn" data-wow-delay="0.6s">
                        <div class="stat-number" data-target="2500">0</div>
                        <div class="stat-plus">+</div>
                        <div class="stat-label">Produits référencés</div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <div class="stat-box wow fadeIn" data-wow-delay="0.8s">
                        <div class="stat-number" data-target="50">0</div>
                        <div class="stat-plus">+</div>
                        <div class="stat-label">Partenaires internationaux</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-box wow fadeIn" data-wow-delay="1.0s">
                        <div class="stat-number" data-target="6">0</div>
                        <div class="stat-plus"></div>
                        <div class="stat-label">Secteurs d'activité</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .stat-box { padding: 10px 0; }
        .stat-number {
            font-family: 'Montserrat', sans-serif;
            font-size: 3rem;
            font-weight: 800;
            color: #fff;
            line-height: 1;
            display: inline-block;
        }
        .stat-plus {
            font-size: 2rem;
            font-weight: 700;
            color: #F47920;
            display: inline-block;
            vertical-align: top;
            margin-top: 4px;
        }
        .stat-label {
            font-family: 'Montserrat', sans-serif;
            font-size: 0.8rem;
            color: rgba(255,255,255,0.7);
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-top: 10px;
        }
    </style>

    <script>
        function animateCounters() {
            document.querySelectorAll('.stat-number').forEach(function(el) {
                var target = parseInt(el.getAttribute('data-target'));
                var duration = 1800;
                var step = target / (duration / 16);
                var current = 0;
                var timer = setInterval(function() {
                    current += step;
                    if (current >= target) { current = target; clearInterval(timer); }
                    el.textContent = Math.floor(current).toLocaleString('fr-FR');
                }, 16);
            });
        }
        var statsObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) { animateCounters(); statsObserver.disconnect(); }
            });
        }, { threshold: 0.3 });
        var statsSection = document.querySelector('.stat-number');
        if (statsSection) statsObserver.observe(statsSection.closest('section'));
    </script>

    @include('Footer')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>

    <script>
        ['modal-button0','modal-button1','modal-button2','modal-button3','modal-button4','modal-button5','modal-button6'].forEach(function(id) {
            var el = document.getElementById(id);
            if (!el) return;
            el.addEventListener('click', function(event) {
                event.preventDefault();
                var modal = document.getElementById('modal');
                var cards = document.querySelectorAll('.card');
                modal.classList.remove('hidden');
                setTimeout(function() {
                    cards.forEach(function(card, index) {
                        setTimeout(function() { card.classList.add('show'); }, 100 * index);
                    });
                }, 100);
            });
        });

        document.getElementById('close-modal').addEventListener('click', function() {
            var modal = document.getElementById('modal');
            var cards = document.querySelectorAll('.card');

            modal.classList.add('hidden');

            cards.forEach(function(card) {
                card.classList.remove('show');
            });
        });

        document.getElementById('modal-overlay').addEventListener('click', function() {
            var modal = document.getElementById('modal');
            var cards = document.querySelectorAll('.card');

            modal.classList.add('hidden');

            cards.forEach(function(card) {
                card.classList.remove('show');
            });
        });
    </script>

    <script>
        new WOW().init();
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const marqueeContainer = document.querySelector('.marquee__container');
            let lastScrollTop = window.pageYOffset || document.documentElement.scrollTop;
            let offset = 0; // Track the offset for the transform

            function animateMarquee() {
                requestAnimationFrame(animateMarquee);
                marqueeContainer.style.transform = `translateX(${offset}px)`;
            }

            document.addEventListener('scroll', function() {
                let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

                // Check scroll direction
                if (scrollTop > lastScrollTop) {
                    // Scrolling down: move left
                    offset -= 2; // Adjust speed here
                } else {
                    // Scrolling up: move right
                    offset += 2; // Adjust speed here
                }

                lastScrollTop = scrollTop;
            });

            animateMarquee(); // Start the animation loop
        });
    </script>
</body>

</html>
