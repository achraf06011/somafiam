<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        /* ── Carousel controls ── */
        a.carousel-control-prev,
        a.carousel-control-next {
            background-color: #003580;
            height: 240px;
            width: 48px;
            top: 50%;
            transform: translateY(-50%);
            border-radius: 6px;
            opacity: 0.85;
            transition: opacity 0.2s, background-color 0.2s;
        }
        a.carousel-control-prev:hover,
        a.carousel-control-next:hover {
            background-color: #F47920;
            opacity: 1;
        }

        /* ── Product card ── */
        .prod-card {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 14px rgba(0, 31, 77, 0.08);
            border-bottom: 3px solid transparent;
            transition: transform 0.25s ease, box-shadow 0.25s ease, border-bottom-color 0.25s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        .prod-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 32px rgba(0, 31, 77, 0.16);
            border-bottom-color: #F47920;
        }
        .prod-card__img {
            overflow: hidden;
            flex-shrink: 0;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 155px;
            padding: 14px;
        }
        .prod-card__img img {
            max-width: 100%;
            max-height: 127px;
            width: auto;
            height: auto;
            object-fit: contain;
            display: block;
            transition: transform 0.35s ease;
        }
        .prod-card:hover .prod-card__img img {
            transform: scale(1.07);
        }
        .prod-card__body {
            padding: 12px 14px 14px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }
        .prod-card__subcat {
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: #F47920;
            margin: 0 0 6px 0;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .prod-card__title {
            font-size: 13px;
            font-weight: 700;
            color: #001f4d;
            margin: 0;
            line-height: 1.4;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
</head>

<body>
    @if ($products->count() > 0)
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <div id="productCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($products->chunk(4) as $chunkIndex => $productChunk)
                    <div class="carousel-item @if ($chunkIndex == 0) active @endif"
                        style="padding: 32px 60px 24px;">
                        <div class="row">
                            @foreach ($productChunk as $product)
                                @php
                                    $subCategory = $subCategories->firstWhere('id', $product->subCategory);
                                @endphp
                                <div class="col-md-6 col-lg-3 mb-4">
                                    <div class="prod-card">
                                        <div class="prod-card__img">
                                            <img class="zoomable-img" src="{{ asset('industrielProducts/' . $product->imgProduct) }}"
                                                loading="lazy"
                                                alt="{{ $product->nomProduct }}">
                                        </div>
                                        <div class="prod-card__body">
                                            <p class="prod-card__subcat">{{ $subCategory->nomSubCategory ?? '—' }}</p>
                                            <h5 class="prod-card__title">{{ $product->nomProduct }}</h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#productCarousel" role="button" data-slide="prev"
                style="width: 125px;">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                {{-- <span class="sr-only">
                    Previous
                </span> --}}
            </a>
            <a class="carousel-control-next" href="#productCarousel" role="button" data-slide="next"
                style="width: 125px;">
                {{-- <span class="sr-only">
                    Next
                </span> --}}
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    @else
        <p>No products found for this subcategory.</p>
    @endif

    @include('partials.imageLightbox')
</body>

</html>
