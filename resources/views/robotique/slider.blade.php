<style>
    .bloc-sectors {
        background: #050b18;
        padding: 8px 32px 0;
    }
    .bloc-sectors__slider {
        display: flex;
        position: relative;
        overflow: hidden;
        max-width: 1180px;
        margin: 0 auto;
        border-radius: 16px;
    }

    @media (max-width: 959.98px) {
        .bloc-sectors__slider {
            flex-wrap: wrap
        }
    }

    .bloc-sectors__slider .slide {
        width: 100%;
        height: 240px;
        display: block;
        background-size: cover;
        background-position: 50%;
        overflow: hidden;
        transition: width .7s ease, min-width .7s ease;
        border-top: 0;
        padding-top: 0;
        margin-top: 0;
        color: #fff;
        min-width: 0
    }

    @media (min-width: 960px) {
        .bloc-sectors__slider .slide {
            width: calc(1/var(--length)*100%);
            height: 580px
        }

        .bloc-sectors__slider .slide:hover {
            width: 100%;
            min-width: 100%;
        }

        .bloc-sectors__slider .slide:hover .line {
            width: 24px
        }
    }

    .bloc-sectors__slider .slide__link {
        background-color: rgba(18, 18, 18, .5);
        color: #fff;
        padding: 24px 32px;
        height: 100%;
        width: 100%;
        left: 0;
        z-index: 2;
        display: flex;
        justify-content: flex-start;
        align-items: flex-start;
        text-decoration: none;
    }

    @media (min-width: 960px) {
        .bloc-sectors__slider .slide__link {
            width: calc(1/var(--length)*100%);
            position: absolute
        }
    }

    .bloc-sectors__slider .slide__inner {
        display: flex;
        width: 100%;
        height: 100%;
        flex-direction: column;
        justify-content: space-between
    }

    @media (min-width: 960px) and (max-width:1279.98px) {
        .bloc-sectors__slider .slide__inner__title {
            font-size: 14px;
            line-height: 25px;
            font-weight: 800
        }
    }

    .bloc-sectors__slider .slide__inner i {
        color: #fff;
        margin-left: auto
    }

    .bloc-sectors__slider .slide__inner i:before {
        font-size: 32px;
        line-height: 32px
    }

    .bloc-sectors__slider .slide__inner .line {
        display: block;
        margin-top: 8px;
        width: 0;
        height: 2px;
        transition: all .25s ease-out
    }

    .bloc-sectors__slider .slide:not(:last-child) .slide__link {
        border-bottom: 1px solid hsla(0, 0%, 100%, .5)
    }

    @media (min-width: 960px) {
        .bloc-sectors__slider .slide:not(:last-child) .slide__link {
            border-bottom: none;
            border-right: 1px solid hsla(0, 0%, 100%, .5)
        }
    }

    @media (min-width: 960px) {
        .bloc-sectors__slider .slide:first-child .slide__link { left: 0 }
        .bloc-sectors__slider .slide:nth-child(2) .slide__link { left: calc(1/var(--length)*100%) }
        .bloc-sectors__slider .slide:nth-child(3) .slide__link { left: calc(2/var(--length)*100%) }
        .bloc-sectors__slider .slide:nth-child(4) .slide__link { left: calc(3/var(--length)*100%) }
        .bloc-sectors__slider .slide:nth-child(5) .slide__link { left: calc(4/var(--length)*100%) }
        .bloc-sectors__slider .slide:nth-child(6) .slide__link { left: calc(5/var(--length)*100%) }
    }
</style>

<section class="bloc-sectors">
    <div class="bloc-sectors__slider">
        <div class="slide" style="background-image: url({{ asset('robotique/images/slide1.jpg') }}); --length: 5" js-sector-slide>
            <a class="slide__link" href="{{ route('m') }}">
                <div class="slide__inner">
                    <h3 class="slide__inner__title" style="font-size:18px; font-weight:700;">
                        <span>Médical</span><br>
                        <span>Pharmaceutique</span><br>
                        <span>Medtech</span><br>
                        <span>Biotech</span><br>
                        <span>Cosmétique</span>
                        <div class="line" style="background-color:#2A7EE2"></div>
                    </h3>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
        </div>
        <div class="slide" style="background-image: url({{ asset('robotique/images/slide2.jpg') }}); --length: 5" js-sector-slide>
            <a class="slide__link" href="{{ route('agroalimentaire') }}">
                <div class="slide__inner">
                    <h3 class="slide__inner__title" style="font-size:18px; font-weight:700;">
                        <span>Agroalimentaire</span>
                        <div class="line" style="background-color:#72af68"></div>
                    </h3>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
        </div>
        <div class="slide" style="background-image: url({{ asset('robotique/images/slide3.jpg') }}); --length: 5" js-sector-slide>
            <a class="slide__link" href="{{ route('automobile') }}">
                <div class="slide__inner">
                    <h3 class="slide__inner__title" style="font-size:18px; font-weight:700;">
                        <span>Automobile</span>
                        <div class="line" style="background-color:#e9702c"></div>
                    </h3>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
        </div>
        <div class="slide" style="background-image: url({{ asset('robotique/images/slide4.jpg') }}); --length: 5" js-sector-slide>
            <a class="slide__link" href="{{ route('electronique-electromecanique-electromenager') }}">
                <div class="slide__inner">
                    <h3 class="slide__inner__title" style="font-size:18px; font-weight:700;">
                        <span>Electronique</span><br>
                        <span>Electromécanique</span><br>
                        <span>Electroménager</span>
                        <div class="line" style="background-color:#edbd42"></div>
                    </h3>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
        </div>
        <div class="slide" style="background-image: url({{ asset('robotique/images/slide5.jpg') }}); --length: 5" js-sector-slide>
            <a class="slide__link" href="{{ route('mecanique-energie-plasturgie-biens-de-consommation') }}">
                <div class="slide__inner">
                    <h3 class="slide__inner__title" style="font-size:18px; font-weight:700;">
                        <span>Mécanique</span><br>
                        <span>Energie</span><br>
                        <span>Plasturgie</span><br>
                        <span>Biens de consommation</span>
                        <div class="line" style="background-color:#e21030"></div>
                    </h3>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
        </div>
    </div>
</section>
