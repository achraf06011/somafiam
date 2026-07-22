<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manutention - SOMAFIAM S.A</title>
    <meta name="description" content="Chariots élévateurs, reach stackers et équipements de manutention — SOMAFIAM S.A, Maroc.">
    <meta name="robots" content="index, follow">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">

    <style>
        @import url(https://fonts.googleapis.com/css2?family=Gruppo:wght@400;700;900&display=swap);
        @import url(https://fonts.googleapis.com/css2?family=Raleway:wght@400;700;900&display=swap);

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }

        /* ── Hero ── */
        .hero-section {
            position: relative;
            width: 100%;
            height: 55vh;
            overflow: hidden;
            display: flex;
            align-items: flex-end;
            justify-content: flex-start;
            background-color: #001228;
        }
        .hero-section img.hero-bg {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.55;
        }
        .hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0,18,40,0.85) 30%, transparent 100%);
        }
        .hero-content {
            position: relative;
            z-index: 2;
            padding: 0 60px 40px;
        }
        .hero-content .cat-label {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: #F47920;
            font-family: Raleway, sans-serif;
            display: block;
            margin-bottom: 8px;
        }
        .hero-content h1 {
            font-size: 2.8rem;
            font-weight: 900;
            color: #fff;
            margin: 0;
            font-family: Raleway, sans-serif;
            letter-spacing: 2px;
        }
        .hero-content p {
            color: rgba(255,255,255,0.75);
            font-size: 15px;
            margin: 10px 0 0;
        }

        /* ── Section title ── */
        .hero-text h1.company-name {
            font-size: 32.5px;
            letter-spacing: 7.5px;
            padding: 25px 75px;
            background-image: linear-gradient(35deg, #003580 5%, #F47920 80%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-family: Raleway, sans-serif;
            font-weight: 900;
            margin: 0;
        }

        /* ── Categories ── */
        .categories-section {
            background-color: #f0f4f8;
            padding: 28px 0 32px;
        }

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
        .cat-card__img {
            overflow: hidden;
            height: 175px;
            background: linear-gradient(180deg, #fbfcfe 0%, #f2f5fa 100%);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .cat-card__img img {
            max-width: 100%;
            max-height: 160px;
            width: auto;
            height: auto;
            object-fit: contain;
            display: block;
            transition: transform 0.5s cubic-bezier(.22,1,.36,1);
        }
        .cat-card:hover .cat-card__img img { transform: scale(1.06); }
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

        /* ── Placeholder image slot ── */
        .cat-card__img .placeholder-img {
            width: 100%;
            height: 175px;
            background: linear-gradient(180deg, #e9eef7 0%, #dde4ee 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
            color: #8fa5c5;
        }

        /* ── Responsive hero/section titles ── */
        @media (max-width: 768px) {
            .hero-content h1 { font-size: 1.8rem; }
            .hero-content p { font-size: 13px; }
            .hero-text h1.company-name { font-size: 20px; letter-spacing: 3px; padding: 18px 20px; }
        }
    </style>
</head>

<body>
    @include('Header')

    <!-- Hero -->
    <section class="hero-section wow fadeIn" data-wow-delay="0.1s">
        <img class="hero-bg" src="{{ asset('manutentionProducts/p-xcs45.jpg') }}" alt="Manutention">
        <div class="hero-overlay"></div>
        <div class="hero-content wow fadeIn" data-wow-delay="0.4s">
            <span class="cat-label">Secteur</span>
            <h1>Manutention</h1>
            <p>Chariots élévateurs, reach stackers et équipements de levage et de logistique</p>
        </div>
    </section>

    <!-- Title -->
    <div class="hero-text wow fadeIn" data-wow-delay="0.1s" style="margin-top: 10px;">
        <h1 class="company-name">Catégories</h1>
    </div>

    <!-- Categories grid -->
    <section class="categories-section wow fadeIn" data-wow-delay="0.2s">
        <div class="container">
            <div class="row">
                @forelse ($categories as $index => $categorie)
                    <div class="col-md-6 col-lg-4">
                        <a href="{{ route('manutentionProducts.filterByCategory', ['category' => $categorie->id]) }}"
                            class="cat-card wow fadeIn" data-wow-delay="{{ 0.08 + ($index % 9) * 0.08 }}s">
                            <div class="cat-card__img">
                                @if ($categorie->imgCategory)
                                    <img src="{{ asset($categorie->imgCategory) }}" loading="lazy"
                                        alt="{{ $categorie->nomCategory }}">
                                @else
                                    <div class="placeholder-img">&#128247;</div>
                                @endif
                            </div>
                            <div class="cat-card__body">
                                <h5 class="cat-card__title">{{ $categorie->nomCategory }}</h5>
                                <span class="cat-card__arrow">&#8594;</span>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-12 text-center" style="padding: 40px 0; color: #5a6a7e;">
                        Catégories à venir.
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    @if ($products->count() > 0)
        <div class="hero-text wow fadeIn" data-wow-delay="0.1s" style="margin-top: 10px;">
            <h1 class="company-name">Mini Catalogue</h1>
        </div>

        <section class="wow fadeIn" data-wow-delay="0.3s"
            style="background-image: linear-gradient(135deg, #eeeeee 35%, #eeeeee 70%);">
            <div class="container py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="row" id="products-container">
                    @include('manutention.productsMiniCatalogue', [
                        'products' => $products,
                        'subCategories' => $subCategories,
                    ])
                </div>
            </div>
        </section>
    @endif

    <div style="height: 20px;"></div>

    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script>new WOW().init();</script>

    @include('Footer')
</body>

</html>
