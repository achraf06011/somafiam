<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $category->nomCategory ?? 'Secteur' }} - Robotique - SOMAFIAM S.A</title>
    <meta name="description" content="Solutions d'intégration robotique et cobotique pour le secteur {{ $category->nomCategory ?? '' }} — SOMAFIAM S.A, Casablanca.">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">

    <style>
        @import url(https://fonts.googleapis.com/css2?family=Gruppo:wght@400;700;900&display=swap);
        @import url(https://fonts.googleapis.com/css2?family=Raleway:wght@400;700;900&display=swap);

        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f8f8f8; }

        /* ── Hero ── */
        .sector-hero {
            position: relative;
            width: 100%;
            height: 46vh;
            overflow: hidden;
            display: flex;
            align-items: flex-end;
            background-color: #001228;
        }
        .sector-hero img.hero-bg {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.55;
        }
        .sector-hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0,18,40,0.9) 25%, rgba(0,18,40,0.25) 100%);
        }
        .sector-hero-content {
            position: relative;
            z-index: 2;
            padding: 0 60px 36px;
        }
        .sector-hero-content .sector-label {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: #F47920;
            font-family: Raleway, sans-serif;
            display: block;
            margin-bottom: 10px;
        }
        .sector-hero-content h1 {
            font-size: 2.4rem;
            font-weight: 900;
            color: #fff;
            margin: 0;
            font-family: Raleway, sans-serif;
            max-width: 780px;
            line-height: 1.25;
        }

        /* ── Intro + applications ── */
        .sector-body { max-width: 1100px; margin: 0 auto; padding: 48px 24px 8px; }
        .sector-intro p {
            font-size: 16px;
            line-height: 1.7;
            color: #333c4d;
            max-width: 760px;
        }

        .apps-title {
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: #003580;
            margin: 36px 0 18px;
        }
        .apps-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 16px;
        }
        .app-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 14px rgba(0, 31, 77, 0.08);
            padding: 20px 22px;
            border-left: 3px solid #F47920;
        }
        .app-card h4 {
            font-size: 14.5px;
            font-weight: 700;
            color: #001f4d;
            margin: 0 0 8px;
        }
        .app-card p {
            font-size: 13.5px;
            color: #555f70;
            line-height: 1.55;
            margin: 0;
        }

        /* ── CTA ── */
        .sector-cta {
            max-width: 1100px;
            margin: 44px auto 0;
            padding: 0 24px 56px;
        }
        .sector-cta-box {
            background: linear-gradient(120deg, #003580 10%, #0d47a1 100%);
            border-radius: 14px;
            padding: 34px 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            flex-wrap: wrap;
        }
        .sector-cta-box h3 {
            color: #fff;
            font-size: 20px;
            font-weight: 800;
            margin: 0 0 6px;
            font-family: Raleway, sans-serif;
        }
        .sector-cta-box p {
            color: rgba(255,255,255,0.8);
            font-size: 14px;
            margin: 0;
        }
        .sector-cta-btn {
            background: #F47920;
            color: #fff;
            font-weight: 700;
            font-size: 13.5px;
            letter-spacing: 0.5px;
            padding: 14px 28px;
            border-radius: 8px;
            text-decoration: none;
            white-space: nowrap;
            transition: background 0.2s ease;
            flex-shrink: 0;
        }
        .sector-cta-btn:hover { background: #d4660f; color: #fff; text-decoration: none; }

        /* ── Other sectors ── */
        .other-sectors { max-width: 1100px; margin: 0 auto; padding: 8px 24px 56px; }
        .other-sectors h2 {
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: #003580;
            margin: 0 0 18px;
        }
        .other-cat-card {
            display: block;
            text-decoration: none;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 14px rgba(0, 31, 77, 0.09);
            border-bottom: 3px solid transparent;
            transition: transform 0.25s ease, box-shadow 0.25s ease, border-bottom-color 0.25s ease;
            margin-bottom: 20px;
        }
        .other-cat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 26px rgba(0, 31, 77, 0.16);
            border-bottom-color: #F47920;
            text-decoration: none;
        }
        .other-cat-card__img { height: 120px; overflow: hidden; }
        .other-cat-card__img img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.4s ease; }
        .other-cat-card:hover .other-cat-card__img img { transform: scale(1.06); }
        .other-cat-card__title {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: #001f4d;
            margin: 0;
            padding: 12px 14px;
            line-height: 1.4;
        }
    </style>
</head>

<body>
    @include('Header')

    <section class="sector-hero wow fadeIn" data-wow-delay="0.1s">
        @if($category->imgCategory ?? false)
            <img class="hero-bg" src="{{ asset($category->imgCategory) }}" alt="{{ $category->nomCategory }}">
        @endif
        <div class="sector-hero-overlay"></div>
        <div class="sector-hero-content wow fadeIn" data-wow-delay="0.4s">
            <span class="sector-label">Secteur</span>
            <h1>{{ $category->nomCategory ?? '' }}</h1>
        </div>
    </section>

    <div class="sector-body">
        <div class="sector-intro wow fadeIn" data-wow-delay="0.2s">
            <p>{{ $sectorIntro }}</p>
        </div>

        <h3 class="apps-title">Applications robotiques typiques</h3>
        <div class="apps-grid">
            @foreach ($sectorApplications as $app)
                <div class="app-card wow fadeIn" data-wow-delay="0.1s">
                    <h4>{{ $app['title'] }}</h4>
                    <p>{{ $app['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>

    <div class="sector-cta">
        <div class="sector-cta-box wow fadeIn" data-wow-delay="0.2s">
            <div>
                <h3>Un projet d'automatisation dans ce secteur ?</h3>
                <p>Parlons de vos besoins et des solutions robotiques adaptées à votre production.</p>
            </div>
            <a href="{{ route('contactShow') }}" class="sector-cta-btn">Discuter de mon projet</a>
        </div>
    </div>

    @if ($otherCategories->count() > 0)
        <div class="other-sectors">
            <h2>Autres secteurs</h2>
            <div class="row">
                @foreach ($otherCategories as $other)
                    <div class="col-md-4">
                        <a href="{{ route('robotiqueProducts.filterByCategory', ['category' => $other->id]) }}" class="other-cat-card wow fadeIn" data-wow-delay="0.1s">
                            <div class="other-cat-card__img">
                                @if($other->imgCategory)
                                    <img src="{{ asset($other->imgCategory) }}" loading="lazy" alt="{{ $other->nomCategory }}">
                                @endif
                            </div>
                            <h5 class="other-cat-card__title">{{ $other->nomCategory }}</h5>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script>new WOW().init();</script>

    @include('Footer')
</body>
</html>
