<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogues - SOMAFIAM S.A</title>
    <meta name="description" content="Consultez et téléchargez les catalogues produits de SOMAFIAM S.A — équipements industriels, agricoles, métallurgiques, robotiques et bien plus.">
    <meta name="robots" content="index, follow">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://somafiam.com/nos-catalogues">
    <meta property="og:title" content="Catalogues Produits - SOMAFIAM S.A">
    <meta property="og:description" content="Téléchargez nos catalogues d'équipements industriels, agricoles, métallurgiques et robotiques.">
    <meta property="og:image" content="{{ url('Logo/Last Logo Somafiam.png') }}">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: "Montserrat", sans-serif;
            background-color: #f4f6fb;
        }

        .content-wrapper {
            padding-top: 85px;
        }

        /* Hero */
        .hero-section {
            background: linear-gradient(135deg, #002060 0%, #003580 60%, #004ab0 100%);
            color: #fff;
            padding: 70px 0 50px;
            text-align: center;
        }

        .hero-section h1 {
            font-size: 2.4rem;
            font-weight: 700;
            margin-bottom: 12px;
        }

        .hero-section h1 span {
            color: #F47920;
        }

        .hero-section p {
            font-size: 1rem;
            opacity: 0.85;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Section */
        .catalogues-section {
            padding: 60px 0;
        }

        .section-header {
            margin-bottom: 40px;
        }

        .section-title {
            color: #003580;
            font-weight: 700;
            font-size: 1.5rem;
            position: relative;
            display: inline-block;
            padding-bottom: 10px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 45px;
            height: 3px;
            background-color: #F47920;
            border-radius: 2px;
        }

        /* Cards */
        .catalogue-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.07);
            padding: 30px 22px 24px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border-top: 4px solid #003580;
        }

        .catalogue-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 10px 28px rgba(0, 53, 128, 0.14);
        }

        .card-icon {
            font-size: 2.8rem;
            color: #003580;
            margin-bottom: 16px;
        }

        .catalogue-card h5 {
            font-size: 0.9rem;
            font-weight: 700;
            color: #1a1a2e;
            margin-bottom: 14px;
            line-height: 1.55;
            min-height: 52px;
        }

        .category-badge {
            display: inline-block;
            padding: 4px 14px;
            border-radius: 20px;
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            margin-bottom: 22px;
        }

        .badge-industriel   { background: #e8f0ff; color: #003580; }
        .badge-agriculture  { background: #e8f5e9; color: #2e7d32; }
        .badge-metallurgie  { background: #fce4d6; color: #bf360c; }
        .badge-robotique    { background: #f3e5f5; color: #6a1b9a; }
        .badge-construction { background: #fff3e0; color: #e65100; }

        /* Buttons */
        .card-actions {
            display: flex;
            gap: 8px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn-consult {
            background-color: #003580;
            color: #fff;
            padding: 8px 18px;
            border-radius: 6px;
            font-size: 0.82rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            transition: background-color 0.2s;
        }

        .btn-consult:hover {
            background-color: #002060;
            color: #fff;
            text-decoration: none;
        }

        .btn-dl {
            background-color: #F47920;
            color: #fff;
            padding: 8px 18px;
            border-radius: 6px;
            font-size: 0.82rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            transition: background-color 0.2s;
        }

        .btn-dl:hover {
            background-color: #d4651a;
            color: #fff;
            text-decoration: none;
        }

        /* Counter banner */
        .counter-banner {
            background: #fff;
            border-radius: 10px;
            padding: 18px 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.06);
            margin-bottom: 40px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .counter-banner .count {
            font-size: 2rem;
            font-weight: 700;
            color: #F47920;
        }

        .counter-banner .label {
            font-size: 0.95rem;
            color: #555;
        }
    </style>
</head>

<body>

    @include('Header')

    <div class="content-wrapper">

        <div class="hero-section">
            <div class="container">
                <h1>Nos <span>Catalogues</span> Produits</h1>
                <p>Consultez et téléchargez nos catalogues pour découvrir l'ensemble de notre offre industrielle, agricole et technologique.</p>
            </div>
        </div>

        <div class="catalogues-section">
            <div class="container">

                <div class="counter-banner">
                    <span class="count">11</span>
                    <span class="label">catalogues disponibles au téléchargement</span>
                </div>

                <div class="section-header">
                    <h2 class="section-title">Tous nos catalogues</h2>
                </div>

                @php
                $catalogues = [
                    [
                        'title'    => 'Équipements Industriels, Systèmes Électriques et Solutions',
                        'file'     => 'equipements-industriels-systemes-electriques.pdf',
                        'category' => 'Industriel',
                        'badge'    => 'badge-industriel',
                        'icon'     => 'fa-industry',
                    ],
                    [
                        'title'    => 'Compresseurs d\'Air BT-HT-MT',
                        'file'     => 'compresseurs-air-BT-HT-MT.pdf',
                        'category' => 'Industriel',
                        'badge'    => 'badge-industriel',
                        'icon'     => 'fa-wind',
                    ],
                    [
                        'title'    => 'Générateurs Électriques et Groupes Électrogènes',
                        'file'     => 'generateurs-electriques-groupes-electrogenes.pdf',
                        'category' => 'Industriel',
                        'badge'    => 'badge-industriel',
                        'icon'     => 'fa-bolt',
                    ],
                    [
                        'title'    => 'Moteurs Électriques MT-BT-HT',
                        'file'     => 'moteurs-electriques-MT-BT-HT.pdf',
                        'category' => 'Industriel',
                        'badge'    => 'badge-industriel',
                        'icon'     => 'fa-cog',
                    ],
                    [
                        'title'    => 'Pompes Industrielles et Civiles',
                        'file'     => 'pompes-industrielles-civiles.pdf',
                        'category' => 'Industriel',
                        'badge'    => 'badge-industriel',
                        'icon'     => 'fa-tint',
                    ],
                    [
                        'title'    => 'Robinetterie Industrielle et Civile',
                        'file'     => 'robinetterie-industrielles-civiles.pdf',
                        'category' => 'Industriel',
                        'badge'    => 'badge-industriel',
                        'icon'     => 'fa-tools',
                    ],
                    [
                        'title'    => 'Huiles et Graisses Industrielles',
                        'file'     => 'huiles-graisses-industrielles.pdf',
                        'category' => 'Industriel',
                        'badge'    => 'badge-industriel',
                        'icon'     => 'fa-oil-can',
                    ],
                    [
                        'title'    => 'Acier de Construction Industrielle, Civile et Militaire',
                        'file'     => 'acier-construction-civile-militaire.pdf',
                        'category' => 'Métallurgie',
                        'badge'    => 'badge-metallurgie',
                        'icon'     => 'fa-layer-group',
                    ],
                    [
                        'title'    => 'Machines et Équipements pour la Construction Civile et Militaire',
                        'file'     => 'machines-equipements-construction.pdf',
                        'category' => 'Construction',
                        'badge'    => 'badge-construction',
                        'icon'     => 'fa-hard-hat',
                    ],
                    [
                        'title'    => 'Machines et Équipements Agricoles, Stockage et Élevage',
                        'file'     => 'machines-equipements-agricoles.pdf',
                        'category' => 'Agriculture',
                        'badge'    => 'badge-agriculture',
                        'icon'     => 'fa-tractor',
                    ],
                    [
                        'title'    => 'Robots Industriels et Machines de Transformation Alimentaire',
                        'file'     => 'robots-industriels-transformation-alimentaire.pdf',
                        'category' => 'Robotique',
                        'badge'    => 'badge-robotique',
                        'icon'     => 'fa-robot',
                    ],
                ];
                @endphp

                <div class="row">
                    @foreach($catalogues as $cat)
                    <div class="col-lg-4 col-md-6 mb-4 d-flex">
                        <div class="catalogue-card w-100">
                            <div>
                                <div class="card-icon">
                                    <i class="fas {{ $cat['icon'] }}"></i>
                                </div>
                                <h5>{{ $cat['title'] }}</h5>
                                <span class="category-badge {{ $cat['badge'] }}">{{ $cat['category'] }}</span>
                            </div>
                            <div class="card-actions">
                                <a href="{{ asset('catalogues/' . rawurlencode($cat['file'])) }}"
                                   target="_blank"
                                   class="btn-consult">
                                    <i class="fas fa-eye"></i> Consulter
                                </a>
                                <a href="{{ asset('catalogues/' . rawurlencode($cat['file'])) }}"
                                   download="{{ $cat['title'] }}.pdf"
                                   class="btn-dl">
                                    <i class="fas fa-download"></i> Télécharger
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>

    </div>

    @include('Footer')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
