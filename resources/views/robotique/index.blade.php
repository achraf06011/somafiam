<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robotique Industrielle - SOMAFIAM S.A</title>
    <meta name="description" content="Solutions robotiques industrielles — intégration de systèmes robotiques et cobotiques pour optimiser vos processus de production. SOMAFIAM S.A, Casablanca.">
    <meta name="robots" content="index, follow">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">

    <style>
        @import url(https://fonts.googleapis.com/css2?family=Gruppo:wght@400;700;900&display=swap);
        @import url(https://fonts.googleapis.com/css2?family=Belleza:wght@400;700;900&display=swap);

        section div h2 { font-family: Gruppo; font-weight: 900; font-size: 36px; }
        section div p  { font-family: Gruppo; font-weight: 900; font-style: italic; font-size: 18px; padding-bottom: 11px; }

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
            top: 0; left: 0;
            width: 100%;
            object-fit: cover;
            height: 80vh;
        }

        .overlay {
            position: absolute;
            top: 0; left: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.42);
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
            background-image: linear-gradient(125deg, #6c92b8 5%, #eef5fd 30%);
            background-size: 100%;
            background-repeat: repeat;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            -moz-background-clip: text;
            -moz-text-fill-color: transparent;
        }

        .hero-buttons { display: flex; justify-content: center; gap: 20px; }

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
            gap: 0;
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
        .service-card img  { width: 45px; margin-top: 10px; margin-bottom: 5px; }
        .service-card h3   { font-size: 20px; margin-top: 1.5px; margin-bottom: 2.5px; }
        .service-card p    { font-size: 14px; margin-bottom: 2.5px; font-family: Gruppo; }
        div.service-card   { color: #fafafa; }

        .icon { filter: invert(45%) sepia(125%) saturate(7000%) hue-rotate(270deg) brightness(45%) contrast(150%); }

        div div p { font-weight: 500; font-style: normal; font-family: Belleza; font-size: 14px; text-transform: none; }

        /* ── Categories ── */
        .categories-section { background-color: #f0f4f8; padding: 28px 0 8px; }
        .hidden-category { display: none; }

        .cat-card {
            display: block;
            text-decoration: none;
            background: #001228;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 16px rgba(0, 31, 77, 0.14), 0 1px 3px rgba(0, 31, 77, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.06);
            transition: transform 0.35s cubic-bezier(.22,1,.36,1), box-shadow 0.35s cubic-bezier(.22,1,.36,1);
            margin-bottom: 24px;
            position: relative;
        }
        .cat-card:hover { transform: translateY(-8px); box-shadow: 0 22px 42px rgba(0, 31, 77, 0.30), 0 6px 16px rgba(244, 121, 32, 0.14); }

        .cat-card__img { overflow: hidden; height: 220px; position: relative; }
        .cat-card__img::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, rgba(0, 18, 40, 0) 45%, rgba(0, 18, 40, 0.92) 100%);
        }
        .cat-card__img img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.6s cubic-bezier(.22,1,.36,1); }
        .cat-card:hover .cat-card__img img { transform: scale(1.1); }

        .cat-card__body {
            position: absolute;
            bottom: 0; left: 0; right: 0;
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 16px 18px;
        }
        .cat-card__title {
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 1.3px;
            text-transform: uppercase;
            color: #ffffff;
            margin: 0;
            line-height: 1.4;
            flex: 1;
            padding-right: 10px;
            text-shadow: 0 1px 4px rgba(0, 0, 0, 0.35);
        }
        .cat-card__arrow {
            color: #fff; font-size: 15px; font-weight: 700; flex-shrink: 0;
            width: 34px; height: 34px; border-radius: 50%;
            background: rgba(244, 121, 32, 0.92);
            display: flex; align-items: center; justify-content: center;
            transition: transform 0.3s ease, background 0.3s ease;
        }
        .cat-card:hover .cat-card__arrow { transform: translateX(3px) scale(1.08); background: #F47920; }

        /* ── Toggle button ── */
        .buttons { display: flex; justify-content: space-around; }
        .buttons button {
            width: 150px; height: 50px;
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
        .buttons button:before, .buttons button:after {
            content: ""; position: absolute;
            width: 0; height: 3px;
            background-color: #3476cc;
            transition: all 3s cubic-bezier(0.35, 0.1, 0.25, 1);
        }
        .buttons button:before { right: 0; top: 0; }
        .buttons button:after  { left: 0; bottom: 0; }
        .buttons button span   { width: 100%; height: 100%; position: absolute; left: 0; top: 0; margin: 0; padding: 0; z-index: 1; }
        .buttons button span:before, .buttons button span:after {
            content: ""; position: absolute;
            width: 3px; height: 0;
            background-color: #3476cc;
            transition: all 3s cubic-bezier(0.35, 0.1, 0.25, 1);
        }
        .buttons button span:before { right: 0; top: 0; }
        .buttons button span:after  { left: 0; bottom: 0; }
        .buttons button p { padding: 0; margin: 0; transition: all 0.4s cubic-bezier(0.35, 0.1, 0.25, 1); position: absolute; width: 100%; height: 100%; }
        .buttons button p:before, .buttons button p:after { position: absolute; width: 100%; transition: all 0.4s cubic-bezier(0.35, 0.1, 0.25, 1); z-index: 1; left: 0; }
        .buttons button p:before { content: attr(data-title); top: 50%; transform: translateY(-50%); }
        .buttons button p:after  { content: attr(data-text); top: 150%; color: #3476cc; }
        .buttons button.clicked:before, .buttons button.clicked:after { width: 100%; }
        .buttons button.clicked span:before, .buttons button.clicked span:after { height: 100%; }
        .buttons button.clicked p:before { top: -50%; transform: rotate(5deg); }
        .buttons button.clicked p:after  { top: 50%; transform: translateY(-50%); }
    </style>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    @include('Header')

    <section class="hero-section wow fadeIn" data-wow-delay="0.1s">
        <video autoplay loop muted playsinline class="background-video wow fadeIn" data-wow-delay="1.3s">
            <source src="{{ asset('Videos/v1.mp4') }}" type="video/mp4">
        </video>
        <div class="overlay"></div>
        <div class="hero-content">
            <h1 class="wow fadeIn" data-wow-delay="0.5s">Robotique &amp; Automatisation Industrielle</h1>
            <div class="hero-buttons">
                <a href="#category">
                    <button class="btn quote-btn btn-info wow fadeIn" data-wow-delay="1.3s">Nos Secteurs</button>
                </a>
                <button data-wow-delay="2.25s" onclick="toggleVideo()" class="btn play-btn wow fadeIn">&#9654;</button>
            </div>
        </div>
    </section>

    <section class="services-section">
        <div class="services-container">
            <div class="service-card" data-wow-delay="0.1s" style="background-color:#0d47a1;border-radius:10px 0 0 10px;">
                <img src="{{ asset('Icons/mission.png') }}" alt="Notre Mission" class="icon">
                <h3>Notre Mission</h3>
                <p>Intégrer des solutions robotiques<br>innovantes et performantes.</p>
            </div>
            <div class="service-card" data-wow-delay="0.3s" style="background-color:#0277bd;">
                <img src="{{ asset('Icons/vision.png') }}" alt="Notre Vision" class="icon">
                <h3>Notre Vision</h3>
                <p>Leader marocain de l'intégration<br>de systèmes robotiques avancés.</p>
            </div>
            <div class="service-card" data-wow-delay="0.5s" style="background-color:#2196f3;border-radius:0 10px 10px 0;">
                <img src="{{ asset('Icons/globe.png') }}" alt="Nos Valeurs">
                <h3>Nos Valeurs</h3>
                <p>Innovation, précision et excellence<br>au service de l'industrie marocaine.</p>
            </div>
        </div>
    </section>

    <div id="category"></div>

    <div class="hero-text wow fadeIn" data-wow-delay="0.1s" style="margin-top:10px;">
        <h1 class="company-name"
            style="font-size:32.5px;letter-spacing:7.5px;padding:25px 75px;background-image:linear-gradient(35deg,#181b1f 5%,#419ef5 40%);">
            Secteurs
        </h1>
    </div>

    <section id="category-section" class="categories-section wow fadeIn" data-wow-delay="0.3s">
        <div class="container">
            <div class="row">
                @foreach ($categories as $index => $categorie)
                    <div class="col-md-6 col-lg-4 {{ $index >= 6 ? 'hidden-category' : '' }}">
                        <a href="{{ route('robotiqueProducts.filterByCategory', ['category' => $categorie->id]) }}"
                            class="cat-card wow fadeIn" data-wow-delay="{{ 0.1 + ($index % 6) * 0.08 }}s">
                            <div class="cat-card__img">
                                @if($categorie->imgCategory)
                                    <img src="{{ asset($categorie->imgCategory) }}" loading="lazy" alt="{{ $categorie->nomCategory }}">
                                @else
                                    <div style="width:100%;height:100%;background:#dde4ee;display:flex;align-items:center;justify-content:center;">
                                        <span style="font-size:48px;color:#8fa5c5;">&#9881;</span>
                                    </div>
                                @endif
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

    @if ($categories->count() > 6)
        <div class="buttons wow fadeIn" data-wow-delay="0.3s">
            <button id="toggle-button" style="width:250px;"><span></span>
                <p style="font-weight:900;" data-start="good luck!" data-text="Réduire" data-title="Tous les Secteurs"></p>
            </button>
        </div>
    @endif

    <div style="margin-top:75px;"></div>

    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script>new WOW().init();</script>
    <script>
        function toggleVideo() {
            const v = document.querySelector('.background-video');
            v.paused ? v.play() : v.pause();
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const hidden = document.querySelectorAll('.hidden-category');
            const btn    = document.getElementById('toggle-button');
            let expanded = false;
            if (btn) {
                btn.addEventListener('click', function () {
                    expanded = !expanded;
                    hidden.forEach(el => { el.style.display = expanded ? 'block' : 'none'; });
                    if (expanded && hidden.length > 0) {
                        setTimeout(() => { hidden[0].scrollIntoView({ behavior: 'smooth', block: 'start' }); }, 50);
                    }
                });
            }
        });
        document.querySelectorAll('.buttons button').forEach(b => {
            b.addEventListener('click', function () { this.classList.toggle('clicked'); });
        });
    </script>

    @include('Footer')
</body>
</html>
