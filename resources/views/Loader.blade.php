    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        .loader-overlay {
            position: fixed;
            inset: 0;
            background:
                radial-gradient(ellipse 80% 60% at 50% 50%, #002a6b 0%, #001228 60%, #000a18 100%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            overflow: hidden;
        }

        /* Spotlight orange doux derrière le texte */
        .loader-overlay::before {
            content: '';
            position: absolute;
            width: 700px;
            height: 400px;
            background: radial-gradient(ellipse, rgba(244,121,32,0.09) 0%, transparent 70%);
            border-radius: 50%;
        }

        /* Lueur bleue en bas */
        .loader-overlay::after {
            content: '';
            position: absolute;
            bottom: -100px;
            width: 100%;
            height: 300px;
            background: radial-gradient(ellipse 60% 100% at 50% 100%, rgba(0,53,128,0.4) 0%, transparent 70%);
        }

        /* ── Contenu ── */
        .loader-content {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 14px;
            z-index: 1;
        }

        /* Ligne orange qui s'étend */
        .loader-line {
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, transparent, #F47920, transparent);
            animation: line-expand 0.7s cubic-bezier(0.4, 0, 0.2, 1) 0.2s forwards;
        }

        @keyframes line-expand {
            to { width: 340px; }
        }

        /* Texte principal */
        .loader-brand {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 6px;
            opacity: 0;
            transform: translateY(16px);
            animation: brand-in 0.6s cubic-bezier(0.4, 0, 0.2, 1) 0.75s forwards;
        }

        @keyframes brand-in {
            to { opacity: 1; transform: translateY(0); }
        }

        .loader-name {
            font-family: Arial, sans-serif;
            font-size: 58px;
            font-weight: 900;
            letter-spacing: 14px;
            color: #ffffff;
            text-indent: 14px; /* compense le letter-spacing sur la droite */
        }

        .loader-sa {
            font-family: Arial, sans-serif;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 1.5px;
            color: #F47920;
            text-align: center;
        }

        /* Ligne orange basse */
        .loader-line-bottom {
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, transparent, #F47920, transparent);
            opacity: 0;
            animation: line-expand 0.7s cubic-bezier(0.4, 0, 0.2, 1) 1.2s forwards,
                       fade-in 0s 1.2s forwards;
        }

        @keyframes fade-in {
            to { opacity: 1; }
        }

        /* Tagline */
        .loader-tagline {
            font-family: Arial, sans-serif;
            font-size: 10px;
            font-weight: 400;
            letter-spacing: 4px;
            color: rgba(255,255,255,0.35);
            text-transform: uppercase;
            opacity: 0;
            animation: brand-in 0.5s ease 1.4s forwards;
        }

        /* Barre de progression en bas */
        .loader-progress {
            position: absolute;
            bottom: 0;
            left: 0;
            height: 3px;
            width: 0;
            background: linear-gradient(90deg, #003580, #F47920);
            animation: progress 1.8s cubic-bezier(0.4, 0, 0.2, 1) 0.1s forwards;
        }

        @keyframes progress {
            0%   { width: 0%; }
            60%  { width: 70%; }
            100% { width: 100%; }
        }

        /* Shimmer qui passe sur le texte */
        .loader-shimmer {
            position: absolute;
            top: 0; left: -100%;
            width: 60%; height: 100%;
            background: linear-gradient(
                90deg,
                transparent 0%,
                rgba(255,255,255,0.04) 50%,
                transparent 100%
            );
            animation: shimmer 1.8s ease 1.0s forwards;
        }

        @keyframes shimmer {
            to { left: 160%; }
        }
    </style>

    <div class="loader-overlay" id="loader-overlay">
        <div class="loader-shimmer"></div>

        <div class="loader-content">
            <div class="loader-line"></div>

            <div class="loader-brand">
                <div class="loader-name">SOMAFIAM</div>
                <div class="loader-sa">Société Marocaine de Fournitures Industrielles Agricoles et Métallurgie S.A</div>
            </div>

            <div class="loader-line-bottom"></div>

            <div class="loader-tagline">Votre partenaire industriel de confiance</div>
        </div>

        <div class="loader-progress"></div>
    </div>

    <script>
        window.addEventListener('DOMContentLoaded', function () {
            setTimeout(function () {
                var overlay = document.getElementById('loader-overlay');
                overlay.style.transition = 'opacity 0.6s ease-out';
                overlay.style.opacity = '0';
                setTimeout(function () {
                    overlay.style.display = 'none';
                }, 600);
            }, 2200);
        });
    </script>
