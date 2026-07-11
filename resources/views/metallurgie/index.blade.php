<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Métallurgie - SOMAFIAM S.A</title>
    <meta name="description" content="Solutions métallurgiques et acier de construction — SOMAFIAM S.A, expertise en métallurgie industrielle au Maroc.">
    <meta name="robots" content="index, follow">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">

    <style>
        @import url(https://fonts.googleapis.com/css2?family=Gruppo:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap);
        @import url(https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap);
        @import url(https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap);
        @import url(https://fonts.googleapis.com/css2?family=Belleza:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap);

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

        .hero-section {
            position: relative;
            width: 100%;
            height: 90vh;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #1e4479;
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
            height: 80vh;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.39);
            height: 80vh;
        }

        .hero-content {
            position: relative;
            text-align: center;
            z-index: 2;
            max-width: 800px;
            padding-top: 150px;
        }

        .hero-content h1 {
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

        .hero-content p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .hero-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .play-btn {
            font-size: 15px !important;
            background-color: rgba(0, 0, 0, 0.295) !important;
            border: 1px solid #fff !important;
            border-radius: 10px !important;
            width: 50px !important;
            padding: 10px !important;
            color: #ffffff !important;
            transition: all 1s ease-in-out !important;
        }

        .play-btn:hover {
            border: 1px solid #2b6aa5 !important;
            background-color: rgb(0, 0, 0) !important;
            border-radius: 17.5px !important;
            color: #2b6aa5 !important;
        }

        .services-section {
            background-color: #f8f9fa;
            padding: 50px 0;
            text-align: center;
            height: 75px;
        }

        .services-container {
            display: flex;
            justify-content: center;
            gap: 0px;
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            top: -150px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .service-card {
            background-color: #ffffff;
            padding: 5px;
            width: 33.4%;
            height: 100%;
        }

        .service-card img {
            width: 45px;
            margin-top: 10px;
            margin-bottom: 5px;
        }

        .service-card .icon-gradient {
            height: 45px;
            width: 50%;
            margin-top: 10px;
            margin-bottom: 5px;
        }

        .service-card h3 {
            font-size: 20px;
            margin-top: 1.5px;
            margin-bottom: 2.5px;
        }

        .service-card p {
            font-size: 14px;
            margin-bottom: 2.5px;
            font-family: gruppo;
        }

        .read-more {
            font-size: 14px;
            color: #2855a7;
            text-decoration: none;
        }

        .additional-section {
            width: 100%;
            padding: 50px 0;
            background-color: #ffffff;
            box-sizing: border-box;
        }

        .additional-content {
            display: flex;
            justify-content: center;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .additional-contentImg {
            width: 1250px;
            height: 150px;
            overflow: hidden;
            border-radius: 10px;
            margin-right: 20px;
        }

        .additional-contentImg img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }

        .text-content {
            padding: 10px;
            position: relative;
            left: 40px;
        }

        .text-content h2 {
            font-size: 30px;
            margin-bottom: 20px;
            color: #6f92d4
        }

        .text-content p {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .catTitle {
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: #e0f2f1;
            margin-top: 172.5px;
            font-size: 12.5px;
            font-family: Gruppo;
            font-weight: 700;
            font-style: normal
        }

        /* ---------------------------------- Categories design ------------------------------------ */

        .categories-section {
            background-color: #f0f4f8;
            padding: 28px 0 8px;
        }

        .hidden-category {
            display: none;
        }

        /* ---- Cat Card (Premium) ---- */
        .cat-card {
            display: block;
            text-decoration: none;
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 31, 77, 0.06), 0 1px 2px rgba(0, 31, 77, 0.05);
            border: 1px solid #eef1f7;
            border-bottom: 3px solid transparent;
            transition: transform 0.35s cubic-bezier(.22,1,.36,1), box-shadow 0.35s cubic-bezier(.22,1,.36,1), border-color 0.35s ease;
            margin-bottom: 24px;
        }
        .cat-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 20px 38px rgba(0, 31, 77, 0.16), 0 6px 14px rgba(244, 121, 32, 0.10);
            border-bottom-color: #F47920;
            border-color: #f6ddc8;
        }
        .cat-card__img { overflow: hidden; }
        .cat-card__img img {
            width: 100%;
            height: 175px;
            object-fit: cover;
            display: block;
            transition: transform 0.5s cubic-bezier(.22,1,.36,1);
        }
        .cat-card:hover .cat-card__img img { transform: scale(1.08); }
        .cat-card__body {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 14px 16px 13px;
        }
        .cat-card__title {
            font-size: 11.5px;
            font-weight: 700;
            letter-spacing: 1.2px;
            text-transform: uppercase;
            color: #001f4d;
            margin: 0;
            line-height: 1.4;
            flex: 1;
            padding-right: 8px;
        }
        .cat-card__arrow {
            color: #fff;
            font-size: 15px;
            font-weight: 700;
            flex-shrink: 0;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #F47920;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s ease, background 0.3s ease;
        }
        .cat-card:hover .cat-card__arrow { transform: translateX(3px) scale(1.08); background: #001f4d; }

        /* ---------------------------- Icons Styling ------------------------------ */

        .icon {
            filter: invert(45%) sepia(125%) saturate(7000%) hue-rotate(270deg) brightness(45%) contrast(150%);
        }

        /* .iconVision-gradient {
            width: 50px;
            height: 50px;
            background: linear-gradient(125deg, #29abe2 37.5%, #5b12d4 55%);
            -webkit-mask-image: url('Icons/vision.png');
            mask-image: url('Icons/vision.png');
            mask-size: contain;
            mask-repeat: no-repeat;
            mask-position: center;
            -webkit-mask-size: contain;
            -webkit-mask-repeat: no-repeat;
            -webkit-mask-position: center;
        }

        .iconMission-gradient {
            width: 50px;
            height: 50px;
            background: linear-gradient(125deg, #29abe2 37.5%, #5b12d4 55%);
            -webkit-mask-image: url('Icons/vision.png');
            mask-image: url('Icons/vision.png');
            mask-size: contain;
            mask-repeat: no-repeat;
            mask-position: center;
            -webkit-mask-size: contain;
            -webkit-mask-repeat: no-repeat;
            -webkit-mask-position: center;
        } */


        /* ------------------------------- additional Card Design -------------------------------- */

        .cardXCategory {
            width: 230px;
            height: 275px;
            border-radius: 30px;
            background: #ffffff;
            box-shadow: 15px 15px 30px #bebebe,
                -15px -15px 30px #ffffff;
        }

        /* ------------------------------- Button Design -------------------------------- */

        .buttons {
            display: flex;
            justify-content: space-around;
            top: 20px;
            left: 20px;
        }

        .buttons button {
            width: 150px;
            height: 50px;
            background-color: white;
            margin: 20px;
            color: #568fa6;
            position: relative;
            overflow: hidden;
            font-size: 14px;
            letter-spacing: 1px;
            font-weight: 500;
            text-transform: uppercase;
            transition: all 3s ease;
            cursor: pointer;
            border: 1px rgb(26, 50, 116) solid;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 3px;
        }

        .buttons button:before,
        .buttons button:after {
            content: "";
            position: absolute;
            width: 0;
            height: 3px;
            background-color: #3476cc;
            transition: all 3s cubic-bezier(0.35, 0.1, 0.25, 1);
        }

        .buttons button:before {
            right: 0;
            top: 0;
            transition: all 3s cubic-bezier(0.35, 0.1, 0.25, 1);
        }

        .buttons button:after {
            left: 0;
            bottom: 0;
        }

        .buttons button span {
            width: 100%;
            height: 100%;
            position: absolute;
            left: 0;
            top: 0;
            margin: 0;
            padding: 0;
            z-index: 1;
        }

        .buttons button span:before,
        .buttons button span:after {
            content: "";
            position: absolute;
            width: 3px;
            height: 0;
            background-color: #3476cc;
            transition: all 3s cubic-bezier(0.35, 0.1, 0.25, 1);
        }

        .buttons button span:before {
            right: 0;
            top: 0;
            transition: all 3s cubic-bezier(0.35, 0.1, 0.25, 1);
        }

        .buttons button span:after {
            left: 0;
            bottom: 0;
        }

        .buttons button p {
            padding: 0;
            margin: 0;
            transition: all 0.4s cubic-bezier(0.35, 0.1, 0.25, 1);
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .buttons button p:before,
        .buttons button p:after {
            position: absolute;
            width: 100%;
            transition: all 0.4s cubic-bezier(0.35, 0.1, 0.25, 1);
            z-index: 1;
            left: 0;
        }

        .buttons button p:before {
            content: attr(data-title);
            top: 50%;
            transform: translateY(-50%);
        }

        .buttons button p:after {
            content: attr(data-text);
            top: 150%;
            color: #3476cc;
        }

        .buttons button.clicked:before,
        .buttons button.clicked:after {
            width: 100%;
        }

        .buttons button.clicked span:before,
        .buttons button.clicked span:after {
            height: 100%;
        }

        .buttons button.clicked p:before {
            top: -50%;
            transform: rotate(5deg);
        }

        .buttons button.clicked p:after {
            top: 50%;
            transform: translateY(-50%);
        }

        .buttons button.start {
            background-color: #3476cc;
            box-shadow: 0px 5px 10px -10px rgba(0, 0, 0, 0.2);
            transition: all 3s ease-in-out;
        }

        .buttons button.start.clicked p:before {
            top: -50%;
            transform: rotate(5deg);
        }

        .buttons button.start.clicked p:after {
            color: white;
            transition: all 0s ease;
            content: attr(data-start);
            top: 50%;
            transform: translateY(-50%);
            animation: start 0.3s ease;
            animation-fill-mode: forwards;
        }

        @keyframes start {
            from {
                top: -50%;
            }
        }

        .buttons button.start.clicked:before,
        .buttons button.start.clicked:after {
            display: none;
        }

        .buttons button.start.clicked span {
            display: none;
        }

        .buttons button:active {
            outline: none;
            border: none;
        }

        .buttons button:focus {
            outline: 0;
        }

        /* ----------------------------- additional Designs ---------------------------- */

        div div h3 {
            font-size: 30px;
            font-family: Raleway;
            font-weight: 900;
            font-style: normal;
            text-transform: capitalize;
            color: #000000
        }

        div.service-card {
            color: #fafafa
        }

        div div p {
            font-weight: 500;
            font-style: normal;
            font-family: Belleza;
            font-size: 14px;
            text-transform: none;
        }
    </style>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    {{-- @include('Loader') --}}

    @include('Header')

    <!-- Hero Section -->
    <section class="hero-section wow fadeIn" data-wow-delay="0.1s">
        <video autoplay loop muted playsinline class="background-video wow fadeIn" data-wow-delay="1.3s">
            <source src="Videos/v3.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="overlay"></div>
        <div class="hero-content">
            {{-- <h1>Votre Satisfaction Assurée à 100%!</h1> --}}
            <h1 class="wow fadeIn" data-wow-delay="0.5s">Votre Confiance. Notre Garantie!</h1>
            <!--<p class="wow fadeIn" data-wow-delay="0.9s">-->
            <!--    As a world-wide distributor of solar supplies we endeavor to provide you with the-->
            <!--    best service and-->
            <!--    knowledgeable advice.-->
            <!--</p>-->
            <div class="hero-buttons">
                <a href="#category">
                    <button class="btn quote-btn btn-info wow fadeIn" data-wow-delay="1.3s">Nos Services</button>
                </a>
                <button data-wow-delay="2.25s" onclick="toggleVideo()" class="btn play-btn wow fadeIn">
                    ▶
                </button>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section">
        <div class="services-container">
            <div class="service-card " data-wow-delay="0.1s" style="background-color: #0d47a1; border-radius: 10px 0 0 10px;">
                <img src="Icons/mission.png" alt="Our Mission" class="icon">
                <h3> Notre Mission </h3>
                <p>
                    Fournir des solutions industrielles<br>
                    innovantes et de haute qualité.
                </p>
                {{-- Fournir des solutions industrielles innovantes <br>
                et de haute qualité pour soutenir la <br>
                croissance et l'efficacité des <br>
                entreprises dans divers secteurs. --}}
            </div>

            <div class="service-card " data-wow-delay="0.3s" style="background-color: #0277bd;">
                <img src="Icons/vision.png" alt="Our Vision" class="icon">
                <h3> Notre Vision </h3>
                <p>
                    Devenir un leader reconnu d'équipements<br>
                    dans la fourniture industriels avancés.
                </p>
                {{-- Devenir un leader reconnu <br>
                dans la fourniture d'équipements <br>
                industriels avancés, en établissant <br>
                des standards d'excellence. --}}
            </div>

            <div class="service-card " data-wow-delay="0.5s" style="background-color: #2196f3; border-radius: 0px 10px 10px 0px;">
                <img src="Icons/globe.png" alt="Our Value">
                <h3> Nos Valeurs </h3>
                <p>
                    Engagement envers l'innovation, la qualité,<br>
                    et la satisfaction des besoins de nos clients.
                </p>
                {{-- Engagement envers l'innovation, <br>
                la qualité, et la satisfaction <br>
                des besoins de nos clients dans <br>
                le secteur industriel. --}}
            </div>
        </div>
    </section>

    {{-- <section style="background-color: #162135; border-top: rgba(140, 207, 248, 0.63) ridge 12.5px;">
        <div class="container py-5">
            <div class="row" id="products-container">
                @include('metallurgie.products', [
                    'categories' => $categories,
                ])
            </div>
        </div>
    </section> --}}

    <div id="category"></div>

    <div class="hero-text wow fadeIn" data-wow-delay="0.1s" style="margin-top: 10px;">
        <h1 class="company-name"
            style="font-size: 32.5px; letter-spacing: 7.5px; padding: 25px 75px;
            background-image: linear-gradient(35deg, #003580 5%, #F47920 80%);">
            Catégories
        </h1>
    </div>

    <section id="category-section" class="categories-section wow fadeIn" data-wow-delay="0.3s">
        <div class="container">
            <div class="row category-row">
                @foreach ($categories as $index => $categorie)
                    <div class="col-md-6 col-lg-4 category-item {{ $index >= 6 ? 'hidden-category' : '' }}">
                        <a href="{{ route('metallurgieProducts.filterByCategory', ['category' => $categorie->id]) }}"
                            class="cat-card wow fadeIn" data-wow-delay="{{ 0.1 + ($index % 6) * 0.08 }}s">
                            <div class="cat-card__img">
                                <img src="{{ asset($categorie->imgCategory) }}"
                                    loading="lazy"
                                    alt="{{ $categorie->nomCategory }}">
                            </div>
                            <div class="cat-card__body">
                                <h5 class="cat-card__title">{{ $categorie->nomCategory }}</h5>
                                <span class="cat-card__arrow">&#8594;</span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- <div class="text-center">
        <button id="toggle-button" class="btn btn-primary mt-4">Tous les Catégories</button>
    </div> --}}

    @if ($categories->count() > 6)
        <div class="buttons wow fadeIn" data-wow-delay="0.3s">
            <button class="" id="toggle-button" style="width: 250px;"><span></span>
                <p style="font-weight: 900;" data-start="good luck!" data-text="Réduire" data-title="Tous les Catégories">
                </p>
            </button>
        </div>
    @endif

    <div class="hero-text" style="margin-top: 10px;"></div>

    <!-- Additional Section -->
    <section class="additional-section wow fadeIn" data-wow-delay="0.1s">
        <div class="additional-content">
            <div class="additional-contentImg wow fadeIn" data-wow-delay="0.3s">
                <img src="{{ asset('metallurgieBackgrounds/Origen-de-los-metales-1024x768.jpeg') }}" alt="Métallurgie industrielle SOMAFIAM">
            </div>
            <div class="text-content wow fadeIn" data-wow-delay="0.5s">
                <h2>Métallurgie durable, résiliente et productive !</h2>
            </div>
        </div>
    </section>

    <div class="hero-text" style="margin-top: 10px;"></div>

    <div class="hero-text wow fadeIn" data-wow-delay="0.1s" style="margin-top: 10px;">
        <h1 class="company-name"
            style="font-size: 32.5px; letter-spacing: 7.5px; padding: 25px 75px;
            background-image: linear-gradient(35deg, #003580 5%, #F47920 80%);">
            Mini Catalogue
        </h1>
    </div>

    <section class="wow fadeIn" data-wow-delay="0.3s"
        style="background-image: linear-gradient(135deg, #eeeeee 35%, #eeeeee 70%);">
        <div class="container py-5 wow fadeIn" data-wow-delay="0.5s">
            <div class="row" id="products-container">
                @include('metallurgie.productsMiniCatalogue', [
                    'products' => $products,
                    'subCategories' => $subCategories,
                ])
            </div>
        </div>
    </section>

    <div class="text-center wow fadeIn" data-wow-delay="0.1s">
        <a href="#category">
            <button id="toggle-button" class="btn btn-primary mt-4"
                style="background-color: #1679a7; border-color: #1679a7;">
                Voir les Categories des Produits
            </button>
        </a>
    </div>

    <div class="hero-text" style="margin-top: 10px;"></div>

    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>

    <script>
        new WOW().init();
    </script>

    <script>
        function toggleVideo() {
            const video = document.querySelector('.background-video');
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const hiddenCategories = document.querySelectorAll('.hidden-category');
            const toggleButton = document.getElementById('toggle-button');
            let expanded = false;

            if (toggleButton) {
                toggleButton.addEventListener('click', function() {
                    expanded = !expanded;
                    hiddenCategories.forEach(function(cat) {
                        cat.style.display = expanded ? 'block' : 'none';
                    });
                });
            }
        });

        document.querySelectorAll('.buttons button').forEach(button => {
            button.addEventListener('click', function() {
                this.classList.toggle('clicked');
            });
        });
    </script>
    
    @include('Footer')
</body>

</html>
