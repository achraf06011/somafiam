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
        a.carousel-control-prev {
            font-family: Helvetica;
            line-height: 30px;
            font-weight: 900;
            font-style: normal;
            background-color: #11366e;
            height: 275px;
            position: absolute;
            top: 50px;
        }

        a.carousel-control-next {
            font-family: Helvetica;
            line-height: 30px;
            font-weight: 900;
            font-style: normal;
            background-color: #11366e;
            height: 275px;
            position: absolute;
            top: 50px;
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
                        style="padding-left: 50px;padding-right: 50px">
                        <div class="row">
                            @foreach ($productChunk as $product)
                                <div class="col-md-6 col-lg-3 mb-4 mb-md-0"
                                    style="padding-top: 50px;padding-bottom: 50px">
                                    <div class="cardXCategory" style="border-radius: 12.5px;">
                                        <div style="height:130px;display:flex;align-items:center;justify-content:center;background:#fff;border-radius:8px 8px 0 0;padding:8px;">
                                            <img src="{{ asset('btpProducts/' . $product->imgProduct) }}"
                                                class="card-img-top"
                                                style="max-height:114px;max-width:100%;width:auto;height:auto;object-fit:contain;display:block;"
                                                loading="lazy"
                                                alt="{{ $product->nomProduct }}" />
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <p class="small">
                                                    <a href="#!" class="text-muted">
                                                        @php
                                                            $subCategory = $subCategories->firstWhere(
                                                                'id',
                                                                $product->subCategory,
                                                            );
                                                        @endphp
                                                        {{ $subCategory->nomSubCategory ?? 'No SubCategory' }}
                                                    </a>
                                                </p>
                                            </div>
                                            <div class="d-flex justify-content-between mb-3">
                                                <h5 class="mb-0" style="font-size: 17px"> {{ $product->nomProduct }}
                                                </h5>
                                            </div>
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
            </a>
            <a class="carousel-control-next" href="#productCarousel" role="button" data-slide="next"
                style="width: 125px;">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    @else
        <p>No products found for this subcategory.</p>
    @endif
</body>

</html>
