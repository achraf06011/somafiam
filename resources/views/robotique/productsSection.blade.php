<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if ($products->isEmpty())
        <div class="center-container wow fadeIn"><span>Aucun produit trouvé.</span></div>
    @else
        @foreach ($products as $index => $product)
            @php
                $subCategory = $subCategories->firstWhere('id', $product->subCategory);
            @endphp
            <article class="product-card wow fadeIn" data-wow-delay="{{ 0.05 * ($index % 12) }}s"
                data-subcategory-id="{{ $product->subCategory }}">
                <div class="prod-img-wrap">
                    <img class="zoomable-img" src="{{ asset('robotique/products/' . $product->imgProduct) }}"
                        alt="{{ $product->nomProduct }}" loading="lazy">
                </div>
                <div class="prod-body">
                    <p class="prod-subcat">{{ $subCategory->nomSubCategory ?? '—' }}</p>
                    <h4>{{ $product->nomProduct }}</h4>
                </div>
            </article>
        @endforeach
    @endif

    @include('partials.imageLightbox')
</body>
</html>
