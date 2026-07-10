<style>
    .offers {
        background: #050b18;
        padding: 20px 32px 80px;
    }
    .offers__inner {
        max-width: 1180px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: minmax(0, 1.05fr) minmax(0, 0.95fr);
        gap: 48px;
        align-items: center;
    }
    .offers__list {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    .offers__item {
        cursor: pointer;
        padding: 20px 0;
        border-bottom: 1px solid rgba(255,255,255,0.12);
        border-left: 3px solid transparent;
        padding-left: 18px;
        transition: border-color 0.25s ease, background 0.25s ease;
    }
    .offers__item:first-child { padding-top: 4px; }
    .offers__item:hover { background: rgba(255,255,255,0.03); }
    .offers__item.active {
        border-left-color: #F47920;
        background: rgba(244,121,32,0.06);
    }
    .offers__item h3 {
        font-family: 'Raleway', sans-serif;
        font-size: 19px;
        font-weight: 700;
        color: rgba(255,255,255,0.55);
        margin: 0;
        transition: color 0.25s ease;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
    }
    .offers__item:hover h3,
    .offers__item.active h3 { color: #fff; }
    .offers__item.active h3 { color: #F47920; }

    .offers__item h3 .plus {
        flex-shrink: 0;
        width: 26px; height: 26px;
        border-radius: 50%;
        border: 1.5px solid rgba(255,255,255,0.3);
        display: flex; align-items: center; justify-content: center;
        font-size: 15px;
        color: rgba(255,255,255,0.6);
        transition: all 0.25s ease;
    }
    .offers__item.active h3 .plus {
        border-color: #F47920;
        color: #F47920;
        transform: rotate(45deg);
    }

    .offers__desc {
        max-height: 0;
        overflow: hidden;
        opacity: 0;
        transition: max-height 0.35s ease, opacity 0.3s ease, padding 0.3s ease;
        font-size: 14.5px;
        line-height: 1.7;
        color: rgba(255,255,255,0.68);
        padding-right: 20px;
    }
    .offers__desc.show {
        max-height: 160px;
        opacity: 1;
        padding-top: 12px;
    }

    .offers__media {
        position: relative;
        border-radius: 18px;
        overflow: hidden;
        aspect-ratio: 4/3.3;
        box-shadow: 0 24px 60px rgba(0,0,0,0.45);
    }
    .offers__media img {
        width: 100%; height: 100%;
        object-fit: cover;
        display: block;
        transition: opacity 0.3s ease;
    }

    @media (max-width: 860px) {
        .offers__inner { grid-template-columns: 1fr; gap: 28px; }
        .offers__media { order: -1; aspect-ratio: 16/10; }
        .offers__item h3 { font-size: 16px; }
    }
</style>

<div class="offers">
    <div class="offers__inner">
        <ul class="offers__list" id="infoList">
            <li class="offers__item active" data-image="{{ asset('robotique/images/liste1.jpg') }}">
                <h3>Projets technologiques innovants <span class="plus">+</span></h3>
                <div class="offers__desc show">Partenaire industriel des innovateurs, SOMAFIAM S.A vous accompagne de l'idée à la fabrication en série d'équipements.</div>
            </li>
            <li class="offers__item" data-image="{{ asset('robotique/images/liste2.jpg') }}">
                <h3>Fabrication d'équipements en série <span class="plus">+</span></h3>
                <div class="offers__desc">L'efficience industrielle est notre métier, nous nous chargeons de la fabrication en série des équipements destinés à vos clients.</div>
            </li>
            <li class="offers__item" data-image="{{ asset('robotique/images/liste3.jpg') }}">
                <h3>Robotisation - Cobotisation <span class="plus">+</span></h3>
                <div class="offers__desc">Fort d'un savoir-faire reconnu en intégration robotique multimarque, SOMAFIAM S.A conçoit et réalise des cellules robotisées ou collaboratives.</div>
            </li>
            <li class="offers__item" data-image="{{ asset('robotique/images/liste4.jpg') }}">
                <h3>Cellule d'assemblage flexible <span class="plus">+</span></h3>
                <div class="offers__desc">Nos solutions d'assemblage ouvrent une nouvelle voie dans l'automatisation des petites et moyennes séries.</div>
            </li>
            <li class="offers__item" data-image="{{ asset('robotique/images/liste5.jpg') }}">
                <h3>Machine spéciale de production sur-mesure <span class="plus">+</span></h3>
                <div class="offers__desc">Passionnés par la technologie, nous concevons et réalisons des équipements de pointe et machines spéciales, partout où les solutions standards ne conviennent pas.</div>
            </li>
        </ul>
        <div class="offers__media">
            <img id="displayImage" src="{{ asset('robotique/images/liste1.jpg') }}" alt="Image illustrative">
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('#infoList > li').forEach(function(item) {
        item.addEventListener('click', function() {
            var descDiv = item.querySelector('.offers__desc');
            var isOpen = descDiv.classList.contains('show');

            document.querySelectorAll('#infoList > li').forEach(function(li) {
                li.classList.remove('active');
                li.querySelector('.offers__desc').classList.remove('show');
            });

            document.getElementById('displayImage').src = item.getAttribute('data-image');

            if (!isOpen) {
                item.classList.add('active');
                descDiv.classList.add('show');
            }
        });
    });
</script>
