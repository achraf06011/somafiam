<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médical, Pharmaceutique, Medtech - Robotique &amp; Automatisation - SOMAFIAM S.A</title>
    <meta name="description" content="SOMAFIAM S.A accompagne les industriels du secteur médical, pharmaceutique, biotech, medtech et cosmétique dans leurs projets d'industrialisation.">

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
        <img src="{{ asset('robotique/images/slide1.jpg') }}" alt="Médical, Pharmaceutique, Medtech" class="sector-hero__bg">
        <div class="sector-hero__overlay"></div>
        <div class="sector-hero__content">
            <span class="sector-hero__eyebrow">Secteur — Médical, Pharmaceutique, Medtech</span>
            <h1 class="sector-hero__title">Concevoir et fabriquer des produits innovants pour <span>l'industrie médicale &amp; cosmétique</span></h1>
            <p class="sector-hero__subtitle">SOMAFIAM S.A accompagne les industriels du secteur médical, pharmaceutique, biotech, medtech et cosmétique dans leurs projets d'industrialisation, d'optimisation des process et de développement d'équipements innovants.</p>
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
                <h2>Des machines destinées aux salles blanches</h2>
            </div>
            <div class="sector-intro__body">
                <p>La fabrication de produits dans l'industrie de la santé implique l'utilisation d'équipements de production adaptés à un environnement propre. Chaque équipement est conçu spécifiquement en fonction de la classe ISO de la salle blanche dans laquelle il sera installé.</p>
                <p><strong>Pensées, conçues et fabriquées différemment</strong> pour répondre aux exigences de ce secteur d'activité, ces machines de production nécessitent un réel savoir-faire. Fort d'une expérience de plus de 20 ans dans le domaine, SOMAFIAM S.A est reconnu pour son expertise.</p>
            </div>
        </div>
    </section>

    <section class="sector-split">
        <div class="sector-split__media">
            <img src="{{ asset('robotique/images/slide63.jpg') }}" alt="Salle blanche médicale">
        </div>
        <div class="sector-split__body">
            <span class="sector-label">Notre engagement</span>
            <h3>Notre équipe relève vos défis</h3>
            <ul class="checklist">
                <li><span class="check-ico"><svg viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Confiez-nous le développement de vos machines de production</li>
                <li><span class="check-ico"><svg viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Concrétisez vos projets de mise sur le marché d'équipements innovants</li>
                <li><span class="check-ico"><svg viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Optimisez vos process existants</li>
                <li><span class="check-ico"><svg viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Renforcez vos capacités de production</li>
                <li><span class="check-ico"><svg viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Gagnez en agilité grâce à des équipements de production multi-produits</li>
                <li><span class="check-ico"><svg viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Modernisez votre parc machines pour en faire un levier de compétitivité</li>
                <li><span class="check-ico"><svg viewBox="0 0 24 24" fill="none"><path d="M5 13l4 4L19 7" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></span>Profitez de notre expertise Conseil</li>
            </ul>
        </div>
    </section>

    <section class="sector-dark">
        <div class="sector-split sector-split--reverse">
            <div class="sector-split__media">
                <img src="{{ asset('robotique/images/img.jpg') }}" alt="Innovation médicale">
            </div>
            <div class="sector-split__body">
                <span class="sector-label">Notre approche</span>
                <h3>Accompagner l'innovation médicale</h3>
                <p>Décrits comme de réels "architectes de l'industrialisation" par nos clients, nous sommes en mesure de concevoir et de fabriquer vos équipements de production tout en réduisant vos délais de mise sur le marché. Pour cela, nous nous appuyons sur notre savoir-faire, mais aussi notre méthode de gestion de projets et notre vaste réseau de partenaires.</p>
                <p>Conscient des nombreuses phases de validation nécessaires et de la complexité croissante des produits de la santé, notre mission consiste à vous accompagner dans vos projets les plus ambitieux et de vous faire gagner en agilité.</p>
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
