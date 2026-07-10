<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Électronique, Électromécanique, Électroménager - Robotique &amp; Automatisation - SOMAFIAM S.A</title>
    <meta name="description" content="SOMAFIAM S.A soutient les industriels de l'électronique, l'électromécanique et de l'électroménager dans leurs projets d'industrialisation.">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">
    @include('robotique.sectorStyles')
</head>

<body>
    @include('Header')

    <div class="sector-page">

    <section class="sector-hero">
        <img src="{{ asset('robotique/images/slide4.jpg') }}" alt="Électronique, Électromécanique, Électroménager" class="sector-hero__bg">
        <div class="sector-hero__overlay"></div>
        <div class="sector-hero__content">
            <span class="sector-hero__eyebrow">Secteur — Électronique, Électromécanique, Électroménager</span>
            <h1 class="sector-hero__title">Accompagner la filière <span>électronique, électromécanique, électroménager</span></h1>
            <p class="sector-hero__subtitle">SOMAFIAM S.A soutient les industriels de l'électronique, l'électromécanique et de l'électroménager dans leurs projets d'industrialisation, d'optimisation des process et de développement d'équipements de production innovants.</p>
            <a href="{{ route('contactShow') }}" class="sector-cta-btn">
                <span>Vous avez un projet ? Contactez-nous</span>
                <svg width="20" height="20" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="37" cy="37" r="35.5" stroke="white" stroke-width="3"></circle>
                    <path d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z" fill="white"></path>
                </svg>
            </a>
        </div>
    </section>

    <section class="sector-section">
        <div class="sector-intro">
            <div>
                <span class="sector-label">Contexte</span>
                <h2>Gagnez en réactivité avec SOMAFIAM S.A</h2>
            </div>
            <div class="sector-intro__body">
                <p>Indissociables de notre quotidien, les produits électro conduisent les fournisseurs et industriels à s'engager pleinement dans l'industrie du futur pour relever des défis de compétitivité, de réactivité et de flexibilité.</p>
                <p><strong>Dans un monde riche en opportunités tout autant qu'incertain,</strong> notre industrie se réinvente pour limiter la délocalisation et assurer une production efficace, de qualité, qui soit à la fois sécurisée et responsable. Pour répondre aux besoins de ce marché global en forte croissance, SOMAFIAM S.A a mis au point des solutions dédiées au secteur de l'électronique, l'électromécanique et de l'électroménager.</p>
            </div>
        </div>
    </section>

    <section class="sector-split">
        <div class="sector-split__media">
            <img src="{{ asset('robotique/images/slide66.jpg') }}" alt="Production électronique">
        </div>
        <div class="sector-split__body">
            <span class="sector-label">Notre engagement</span>
            <h3>Notre équipe relève vos défis</h3>
            <ul class="checklist">
                <li><span class="check-ico"><svg viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Confiez-nous le développement de vos machines de production</li>
                <li><span class="check-ico"><svg viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Modernisez votre parc machines pour en faire un levier de compétitivité</li>
                <li><span class="check-ico"><svg viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Optimisez vos process existants</li>
                <li><span class="check-ico"><svg viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Renforcez vos capacités de production</li>
                <li><span class="check-ico"><svg viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Gagnez en agilité grâce à des équipements de production multi-produits</li>
                <li><span class="check-ico"><svg viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Profitez de notre expertise Conseil</li>
                <li><span class="check-ico"><svg viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Augmentez la fiabilité et la disponibilité de vos équipements</li>
                <li><span class="check-ico"><svg viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Assurez la traçabilité de vos produits</li>
                <li><span class="check-ico"><svg viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Re-localisez vos moyennes séries grâce aux cellules d'assemblage flexible</li>
            </ul>
        </div>
    </section>

    <section class="sector-dark">
        <div class="sector-split sector-split--reverse">
            <div class="sector-split__media">
                <img src="{{ asset('robotique/images/img4.jpg') }}" alt="Compétitivité industrielle">
            </div>
            <div class="sector-split__body">
                <span class="sector-label">Notre approche</span>
                <h3>L'automatisation pour gagner en compétitivité</h3>
                <p>À l'écoute de vos besoins, SOMAFIAM S.A conçoit et fabrique des équipements de production à fort taux de rendement synthétique.</p>
                <p>Nos équipes engagées et ingénieuses développeront des solutions agiles pour répondre à vos contraintes techniques, au développement de nouveaux produits ou à l'optimisation de vos process de fabrication.</p>
                <p>Véritable partenaire industriel, concrétisons vos projets d'automatisation et d'équipements technologiques innovants pour le développement et l'assemblage de vos systèmes électroniques, électromécaniques et électroménagers.</p>
                <a href="{{ route('contactShow') }}" class="sector-cta-btn sector-cta-btn--ghost">
                    <span>Vous avez un projet ?</span>
                    <svg width="18" height="18" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="37" cy="37" r="35.5" stroke="white" stroke-width="3"></circle>
                        <path d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z" fill="white"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <div class="sector-divider">
        <div class="sector-divider__inner">
            <h4>Nos offres</h4>
            <div class="rule"></div>
        </div>
    </div>
    @include('robotique.liste')

    <div class="sector-divider">
        <div class="sector-divider__inner">
            <h4>Nos autres secteurs industriels</h4>
            <div class="rule"></div>
        </div>
    </div>
    @include('robotique.slider')
    </div>

    @include('Footer')
</body>

</html>
