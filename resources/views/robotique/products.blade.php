<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robotique - {{ $category->nomCategory ?? 'Produits' }} - SOMAFIAM S.A</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">

    <style>
        @import url(https://fonts.googleapis.com/css2?family=Gruppo:wght@400;700;900&display=swap);
        @import url(https://fonts.googleapis.com/css2?family=Belleza:wght@400;700;900&display=swap);

        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f8f8f8; }

        .container { display: flex; width: 100%; padding: 20px; box-sizing: border-box; }

        .main-content { width: 100%; }

        .toolbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
            background: #ffffff;
            border-radius: 10px;
            padding: 12px 16px;
            box-shadow: 0 2px 12px rgba(0, 31, 77, 0.08);
            gap: 12px;
        }

        #toggle-subcategories {
            background-color: #003580 !important;
            color: #ffffff !important;
            border: none !important;
            font-weight: 600 !important;
            font-size: 13px !important;
            padding: 10px 18px !important;
            border-radius: 7px !important;
            white-space: nowrap;
            letter-spacing: 0.5px;
            transition: background-color 0.2s ease !important;
        }
        #toggle-subcategories:hover { background-color: #001f4d !important; }

        .view-toggle { display: flex; flex-shrink: 0; }
        .view-toggle button {
            display: flex; justify-content: center; align-items: center;
            width: 36px; height: 36px;
            border: 1.5px solid #dce3f0;
            background-color: #f5f7fb;
            color: #003580;
            cursor: pointer;
            font-size: 16px;
            padding: 0;
            margin-left: 6px;
            transition: all 0.2s ease;
            border-radius: 7px;
        }
        .view-toggle button.active { background-color: #003580; color: #ffffff; border-color: #003580; }
        .view-toggle button:hover:not(.active) { background-color: #eef2f9; }

        /* ── Products grid ── */
        .products { display: flex; flex-wrap: wrap; gap: 20px; }

        .product-card {
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 2px 10px rgba(0, 31, 77, 0.06), 0 1px 2px rgba(0, 31, 77, 0.05);
            border: 1px solid #eef1f7;
            border-bottom: 3px solid transparent;
            transition: transform 0.35s cubic-bezier(.22,1,.36,1), box-shadow 0.35s cubic-bezier(.22,1,.36,1), border-color 0.35s ease;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            padding: 0;
            width: calc(33.333% - 14px);
            cursor: pointer;
            position: relative;
        }
        .product-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 20px 38px rgba(0, 31, 77, 0.14), 0 6px 14px rgba(244, 121, 32, 0.10);
            border-bottom-color: #F47920;
            border-color: #f6ddc8;
        }

        .prod-img-wrap {
            overflow: hidden; flex-shrink: 0;
            background: linear-gradient(180deg, #fbfcfe 0%, #f2f5fa 100%);
            display: flex; align-items: center; justify-content: center;
            height: 175px; padding: 16px;
        }
        .prod-img-wrap img {
            max-width: 100%; max-height: 143px;
            width: auto; height: auto;
            object-fit: contain; display: block;
            transition: transform 0.45s cubic-bezier(.22,1,.36,1);
        }
        .product-card:hover .prod-img-wrap img { transform: scale(1.08); }

        .prod-body { padding: 14px 16px 16px; flex: 1; display: flex; flex-direction: column; }

        .prod-subcat {
            display: inline-block;
            font-size: 9.5px; font-weight: 700;
            letter-spacing: 1.3px; text-transform: uppercase;
            color: #F47920; background: rgba(244, 121, 32, 0.09);
            padding: 3px 9px; border-radius: 20px; margin: 0 0 9px 0;
            max-width: 100%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;
        }

        .product-card h4 {
            font-size: 13.5px; font-weight: 700;
            color: #001f4d; margin: 0; line-height: 1.45;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* ── Grid view ── */
        .products.grid-view .product-card { width: calc(33.333% - 14px); flex-direction: column; }

        /* ── List view ── */
        .products.list-view .product-card {
            width: 100%; flex-direction: row; align-items: stretch;
            border-bottom: none; border-left: 3px solid transparent;
        }
        .products.list-view .product-card:hover { transform: translateX(6px); border-left-color: #F47920; border-bottom-color: transparent; }
        .products.list-view .prod-img-wrap { width: 130px; flex-shrink: 0; }
        .products.list-view .prod-img-wrap img { width: 130px; height: 100%; min-height: 90px; object-fit: cover; }
        .products.list-view .prod-body { padding: 14px 18px; justify-content: center; }
        .products.list-view .product-card h4 { font-size: 14px; -webkit-line-clamp: 2; }

        /* ── Responsive grid ── */
        @media (max-width: 992px) {
            .product-card,
            .products.grid-view .product-card { width: calc(50% - 14px); }
        }
        @media (max-width: 576px) {
            .product-card,
            .products.grid-view .product-card { width: 100%; }
            .products.list-view .prod-img-wrap { width: 100px; }
            .products.list-view .prod-img-wrap img { width: 100px; }
        }

        /* ── Hero ── */
        .hero-section {
            position: relative; width: 100%; height: 50vh;
            overflow: hidden; display: flex;
            align-items: center; justify-content: center;
            background-color: #092a58; color: #fff;
            flex-direction: column; padding: 50px 0;
        }
        .background-video {
            position: absolute; top: 0; left: 0;
            width: 100%; object-fit: cover; height: 47.5vh;
        }
        .overlay {
            position: absolute; top: 0; left: 0;
            width: 100%; height: 48.5vh;
            background-color: rgba(0, 0, 0, 0.658);
            background-image: url("https://t4.ftcdn.net/jpg/08/12/64/65/360_F_812646509_Vx28n14USuaOODuSAGCr5QHSPLA6kd0Z.jpg");
            background-blend-mode: overlay;
        }
        .hero-content {
            position: relative; text-align: center;
            z-index: 2; max-width: 800px; padding-top: 150px;
        }
        .hero-content h1 {
            position: relative; font-size: 50px;
            letter-spacing: 5px; top: -25px;
        }
        .hero-content h6 {
            position: relative; font-family: Gruppo;
            font-weight: 600; font-size: 13px;
            text-transform: uppercase; top: -25px;
        }

        /* ── Subcategories panel ── */
        .subcategories {
            position: fixed; top: 56px; left: 0; width: 100%;
            background-color: #f8f9fa; padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            transform: translateY(calc(-150% - 25px));
            transition: transform 0.5s ease-in-out;
            border-bottom: 2px solid #0f2547;
        }
        .subcategories.show { transform: translateY(calc(0% + 25.25px)); }

        .category-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 10px;
            max-height: 400px;
            overflow-y: auto;
            padding: 10px;
        }
        .category-item {
            background-color: #02284e;
            border-left: rgb(17, 22, 36) groove 5px;
            color: #ffffff;
            padding: 15px; border-radius: 5px;
            text-align: center;
            transition: background-color 0.3s ease;
            cursor: pointer;
        }
        .category-item:hover { background-color: #dee2e6; color: #001228; }
        #toggle-subcategoriesClose { position: absolute; bottom: -70px; right: 20px; }

        /* ── Search ── */
        .searchArea {
            height: 42px !important; font-size: 13.5px !important;
            color: #2e3447 !important; background-color: #f5f7fb !important;
            border: 1.5px solid #dce3f0 !important; border-right: none !important;
            border-radius: 7px 0 0 7px !important; padding: 0 14px !important;
            flex: 1 !important; min-width: 0 !important; width: auto !important;
            transition: border-color 0.2s ease, background-color 0.2s ease !important;
        }
        .searchArea:focus { outline: none !important; border-color: #003580 !important; background-color: #fff !important; box-shadow: none !important; }
        .searchArea:hover { background-color: #eef2f9 !important; }

        .searchButton {
            height: 42px !important; padding: 0 20px !important;
            font-size: 13px !important; font-weight: 700 !important;
            letter-spacing: 0.5px !important; color: #ffffff !important;
            background-color: #F47920 !important; border: none !important;
            border-radius: 0 7px 7px 0 !important; white-space: nowrap !important;
            cursor: pointer !important; flex-shrink: 0 !important;
            text-transform: none !important; width: auto !important;
            transition: background-color 0.2s ease !important;
        }
        .searchButton:hover { background-color: #d4660f !important; }

        .center-container {
            display: flex; justify-content: center; align-items: center;
            height: 30vh; width: 100%;
            color: rgb(18, 44, 92); font-weight: 800;
        }

        /* ── Responsive hero title ── */
        @media (max-width: 768px) {
            .hero-content h1 { font-size: 28px; letter-spacing: 2px; }
        }
    </style>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    @include('Header')

    <div class="subcategories" id="subcategories">
        <div class="category-grid">
            @foreach ($subCategories as $subcategory)
                <div class="category-item" data-id="{{ $subcategory->id }}">
                    {{ $subcategory->nomSubCategory }}
                </div>
            @endforeach
            <button class="btn btn-light Filterings category-item" id="toggle-subcategoriesClose">Fermer</button>
        </div>
    </div>

    <section class="hero-section">
        <video autoplay loop muted playsinline class="background-video">
            <source src="{{ asset('Videos/v1.mp4') }}" type="video/mp4">
        </video>
        <div class="overlay wow fadeIn" data-wow-delay="0.1s"></div>
        <div class="hero-content">
            <h1 class="wow fadeIn" data-wow-delay="0.3s">ROBOTIQUE</h1>
            <h6 class="wow fadeIn" data-wow-delay="0.7s">
                Solutions Robotiques / {{ $category->nomCategory ?? '' }}
            </h6>
        </div>
    </section>

    <div class="container">
        <div class="main-content">
            <section class="toolbar">
                <button class="btn btn-light Filterings wow fadeIn" data-wow-delay="0.9s"
                    id="toggle-subcategories" style="font-family:Gruppo;font-weight:700;">
                    Catégories
                </button>

                @php $categoryId = $category->id ?? request('category'); @endphp

                <div class="d-flex justify-content-left flex-grow-1 wow fadeIn" data-wow-delay="1.1s">
                    <form id="searchForm" class="d-flex">
                        <input type="text" name="query" class="form-control btn-light Filterings searchArea"
                            placeholder="Rechercher des produits...">
                        <input type="hidden" name="category" value="{{ $categoryId }}">
                        <button type="submit" class="btn btn-light Filterings searchButton">Rechercher</button>
                    </form>
                </div>

                <div class="view-toggle">
                    <button id="grid-view" class="active wow fadeIn" data-wow-delay="1.3s">
                        <i class="fa fa-th" aria-hidden="true"></i>
                    </button>
                    <button id="list-view" class="wow fadeIn" data-wow-delay="1.5s">
                        <i class="fa fa-th-list" aria-hidden="true"></i>
                    </button>
                </div>
            </section>

            <section class="products grid-view wow fadeIn" data-wow-delay="1.6s">
                @include('robotique.productsSection')
            </section>
        </div>
    </div>

    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script>new WOW().init();</script>

    <script>
        document.getElementById('toggle-subcategories').addEventListener('click', function () {
            document.getElementById('subcategories').classList.toggle('show');
        });
        document.getElementById('toggle-subcategoriesClose').addEventListener('click', function () {
            document.getElementById('subcategories').classList.remove('show');
        });
    </script>

    <script>
        document.getElementById('grid-view').addEventListener('click', function () {
            const p = document.querySelector('.products');
            p.classList.add('grid-view'); p.classList.remove('list-view');
            this.classList.add('active'); document.getElementById('list-view').classList.remove('active');
        });
        document.getElementById('list-view').addEventListener('click', function () {
            const p = document.querySelector('.products');
            p.classList.add('list-view'); p.classList.remove('grid-view');
            this.classList.add('active'); document.getElementById('grid-view').classList.remove('active');
        });
    </script>

    <script>
        $(document).ready(function () {
            $('#searchForm').on('submit', function (event) {
                event.preventDefault();
                var query      = $('input[name="query"]').val();
                var categoryId = $('input[name="category"]').val();
                $.ajax({
                    url: '{{ route('robotiqueProducts.search') }}',
                    method: 'GET',
                    data: { query: query, category: categoryId },
                    success: function (response) { $('.products').html(response); },
                    error: function (xhr) { console.log('Error: ' + xhr.status); }
                });
            });
        });

        document.querySelectorAll('.category-item[data-id]').forEach(function (item) {
            item.addEventListener('click', function () {
                const id = this.getAttribute('data-id');
                document.querySelectorAll('.product-card').forEach(function (card) {
                    card.style.display = (card.getAttribute('data-subcategory-id') === id) ? 'flex' : 'none';
                });
            });
        });
    </script>

    @include('Footer')
</body>
</html>
