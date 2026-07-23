<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .logo-mask-top    { position:absolute; top:0;    left:0; right:0; background:#fff; z-index:2; height:36px; }
        .logo-mask-bottom { position:absolute; bottom:0; left:0; right:0; background:#fff; z-index:2; height:44px; }
        @media (max-width: 768px) {
            .logo-mask-top    { height: 24px; }
            .logo-mask-bottom { height: 30px; }
        }
        @media (max-width: 480px) {
            .logo-mask-top    { height: 20px; }
            .logo-mask-bottom { height: 26px; }
        }
    </style>
</head>

<body>
    @if ($products->isEmpty())
        <div class="center-container wow fadeIn">
            <span>Aucun produit trouvé.</span>
        </div>
    @else
        @foreach ($products as $index => $product)
            @php
                $subCategory = $subCategories->firstWhere('id', $product->subCategory);
                $maskCategory = isset($category) && in_array($category->id, [9005, 9006, 9007]);
            @endphp
            <article class="product-card wow fadeIn" data-wow-delay="{{ 0.05 * ($index % 12) }}s"
                data-subcategory-id="{{ $product->subCategory }}">
                <div class="prod-img-wrap" @if($maskCategory) style="position:relative;background:#fff;" @endif>
                    <img class="zoomable-img" src="{{ asset('industrielProducts/' . $product->imgProduct) }}"
                        alt="{{ $product->nomProduct }}" loading="lazy">
                    @if(isset($category) && in_array($category->id, [9005, 9006, 9007]))
                        <div class="logo-mask-top"></div>
                        <div class="logo-mask-bottom"></div>
                    @endif
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
