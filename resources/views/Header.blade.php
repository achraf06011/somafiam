<link rel="icon" type="image/png" href="{{ asset('Logo/Last Logo Somafiam.png') }}">
<link rel="shortcut icon" type="image/png" href="{{ asset('Logo/Last Logo Somafiam.png') }}">

    <style>
        body, h1, h2, p, ul {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background: #fff;
            padding: 6px 0;
            border-bottom: 1px solid #ddd;
        }

        .containerI {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 16px;
        }

        .logo img { max-width: 150px; }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li { margin: 0 15px; }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        nav ul li a:hover { color: #003580; }

        .header-right { align-items: center; }

        .quote-btn {
            padding: 10px 20px;
            background-color: #003580;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            font-size: 14px;
            transition: background-color 0.2s;
        }

        .quote-btn:hover { background-color: #F47920; color: #fff; }

        .navbar-brand { text-decoration: none; }

        .company-name {
            font-size: 24px;
            font-weight: bold;
            background-image: linear-gradient(125deg, #003580 5%, #F47920 80%);
            background-size: 100%;
            background-repeat: repeat;
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* ── Dropdown desktop ── */
        .dropdown { position: relative; }

        .dropdown-content {
            position: absolute;
            top: 175%;
            left: 50%;
            transform: translateX(-48%);
            border-radius: 7.5px;
            width: auto;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            height: 0;
            overflow: hidden;
            transition: height 0.3s ease;
            z-index: 999;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            min-width: 600px;
        }

        .dropdown-content a { text-decoration: none; flex: 1; }

        .dropdown-content .dropdown-item {
            padding: 25px 20px;
            background-color: #003580;
            color: #fff;
            text-align: center;
            border-bottom: 2.5px ridge #fff;
            text-transform: uppercase;
            font-size: 12px;
            font-weight: 900;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .dropdown-content .dropdown-item:hover { background-color: #F47920; }

        .dropdown-content > *:first-child .dropdown-item { border-radius: 7.5px 0 0 7.5px; }
        .dropdown-content > *:last-child .dropdown-item  { border-radius: 0 7.5px 7.5px 0; }

        .headerHtml {
            box-sizing: border-box;
            background-color: #fff;
            color: #242629;
            font-size: 100%;
            font-family: "Montserrat", sans-serif;
        }

        /* ── Hamburger button ── */
        .hamburger {
            display: none;
            flex-direction: column;
            justify-content: center;
            gap: 5px;
            background: none;
            border: none;
            cursor: pointer;
            padding: 8px;
            z-index: 1001;
        }

        .hamburger span {
            display: block;
            width: 26px;
            height: 3px;
            background-color: #003580;
            border-radius: 3px;
            transition: transform 0.3s, opacity 0.3s;
        }

        .hamburger.active span:nth-child(1) { transform: translateY(8px) rotate(45deg); }
        .hamburger.active span:nth-child(2) { opacity: 0; }
        .hamburger.active span:nth-child(3) { transform: translateY(-8px) rotate(-45deg); }

        /* ── Mobile styles ── */
        @media (max-width: 768px) {
            .company-name { font-size: 15px; }
            .navbar-brand img { height: 40px; }

            .hamburger { display: flex; }

            nav {
                display: none;
                position: fixed;
                top: 71px;
                left: 0;
                right: 0;
                bottom: 0;
                background: #fff;
                z-index: 1000;
                overflow-y: auto;
                padding: 20px 0;
                border-top: 2px solid #003580;
            }

            nav.open { display: block; }

            nav ul {
                flex-direction: column;
                padding: 0;
            }

            nav ul li {
                margin: 0;
                border-bottom: 1px solid #eee;
            }

            nav ul li a {
                display: block;
                padding: 16px 24px;
                font-size: 16px;
                color: #003580;
            }

            /* Services dropdown on mobile */
            .dropdown-content {
                position: static;
                transform: none;
                flex-direction: column;
                min-width: unset;
                box-shadow: none;
                border-radius: 0;
                height: 0;
                transition: height 0.3s ease;
                overflow: hidden;
            }

            .dropdown-content a { flex: none; }

            .dropdown-content .dropdown-item {
                border-radius: 0 !important;
                border-bottom: 1px solid rgba(255,255,255,0.2);
                padding: 14px 24px 14px 40px;
                text-align: left;
                font-size: 13px;
            }

            .header-right { display: none; }
        }

        @media (max-width: 576px) {
            .company-name { font-size: 12px; }
            .navbar-brand img { height: 35px; }
        }
    </style>
    <style id="marquee-style-0" type="text/css"></style>
    <style>
        .cat-panel {
            display: none;
            position: fixed;
            background: #fff;
            z-index: 99999;
            box-shadow: 0 8px 32px rgba(0,53,128,0.18);
            border-radius: 0 0 10px 10px;
            border-top: 3px solid #F47920;
            padding: 18px 24px 22px;
            min-width: 420px;
            max-width: 680px;
            max-height: 75vh;
            overflow-y: auto;
        }
        .cat-panel-title {
            font-size: 0.65rem;
            font-weight: 700;
            color: #F47920;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 12px;
            font-family: Montserrat, sans-serif;
        }
        .cat-panel-link {
            display: block;
            padding: 6px 8px;
            font-size: 0.78rem;
            color: #1a1a2e;
            text-decoration: none;
            border-radius: 5px;
            font-family: Montserrat, sans-serif;
            transition: background 0.15s, color 0.15s;
        }
        .cat-panel-link:hover {
            background: #003580;
            color: #fff !important;
            text-decoration: none;
        }
        .cat-panel-footer {
            margin-top: 14px;
            padding-top: 10px;
            border-top: 1px solid #e8eef7;
        }
        .cat-panel-all {
            font-size: 0.75rem;
            color: #003580;
            font-weight: 700;
            text-decoration: none;
            font-family: Montserrat, sans-serif;
        }
        .cat-panel-all:hover { color: #F47920; text-decoration: none; }
    </style>

    <header class="headerHtml fixed-top">
        <div class="containerI">
            <div class="d-flex align-items-center">
                <a class="navbar-brand d-flex align-items-center" href="/">
                    <img src="{{ asset('Logo/Last Logo Somafiam.png') }}" alt="SOMAFIAM.SA"
                        style="height: 58px; margin-right: 10px;">
                    <div class="company-name">SOMAFIAM S.A</div>
                </a>
            </div>

            <nav id="main-nav">
                <ul>
                    <li><a href="/">Accueil</a></li>
                    <li><a href="/aProposNous">Qui sommes nous</a></li>
                    <li class="dropdown">
                        <a href="#" id="services-link">Nos Produits ▾</a>
                        <div class="dropdown-content" id="dropdown-content">
                            <div id="industriel-tab" style="flex:1;">
                                <a href="{{ route('industrielProducts.index') }}">
                                    <div class="dropdown-item" style="border-radius:7.5px 0 0 7.5px;">Équipements Industriels ▾</div>
                                </a>
                            </div>
                            <div id="agriculture-tab" style="flex:1;">
                                <a href="{{ route('agricultureProducts.index') }}">
                                    <div class="dropdown-item">Équipements Agricoles ▾</div>
                                </a>
                            </div>
                            <div id="metallurgie-tab" style="flex:1;">
                                <a href="{{ route('metallurgieProducts.index') }}">
                                    <div class="dropdown-item">Métallurgie ▾</div>
                                </a>
                            </div>
                            <div id="robotique-tab" style="flex:1;">
                                <a href="{{ route('robotiques') }}">
                                    <div class="dropdown-item">Robotique ▾</div>
                                </a>
                            </div>
                            <div id="btp-tab" style="flex:1;">
                                <a href="{{ route('btp') }}">
                                    <div class="dropdown-item">BTP ▾</div>
                                </a>
                            </div>
                            <div id="mines-tab" style="flex:1;">
                                <a href="{{ route('mines') }}">
                                    <div class="dropdown-item">Mines ▾</div>
                                </a>
                            </div>
                            <div id="manutention-tab" style="flex:1;">
                                <a href="{{ route('manutention') }}">
                                    <div class="dropdown-item" style="border-radius:0 7.5px 7.5px 0;">Manutention ▾</div>
                                </a>
                            </div>
                        </div>
                    </li>

                    @php
                        $headerIndustrielCats  = \App\Models\IndustrielCategory::orderBy('ordre')->get();
                        $headerAgricultureCats = \App\Models\AgricultureCategory::orderBy('ordre')->get();
                        $headerMetalCats       = \App\Models\MetallurgieCategory::orderBy('ordre')->get();
                        $headerRobotiqueCats   = \App\Models\RobotiqueCategory::orderBy('ordre')->get();
                        $headerBtpCats         = \App\Models\BtpCategory::orderBy('ordre')->get();
                        $headerMinesCats       = \App\Models\MinesCategory::orderBy('ordre')->get();
                        $headerManutentionCats = \App\Models\ManutentionCategory::orderBy('ordre')->get();
                    @endphp

                    {{-- Panel Industriel --}}
                    <div id="industriel-cat-panel" class="cat-panel">
                        <div class="cat-panel-title">Catégories — Équipements Industriels</div>
                        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:6px 16px;">
                            @foreach($headerIndustrielCats as $cat)
                            <a href="{{ route('industrielProducts.filterByCategory', ['category' => $cat->id]) }}" class="cat-panel-link">
                                {{ $cat->nomCategory }}
                            </a>
                            @endforeach
                        </div>
                        <div class="cat-panel-footer">
                            <a href="{{ route('industrielProducts.index') }}" class="cat-panel-all">Voir tous les équipements industriels →</a>
                        </div>
                    </div>

                    {{-- Panel Agriculture --}}
                    <div id="agriculture-cat-panel" class="cat-panel">
                        <div class="cat-panel-title">Catégories — Équipements Agricoles</div>
                        <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:6px 16px;">
                            @foreach($headerAgricultureCats as $cat)
                            <a href="{{ route('agricultureProducts.filterByCategory', ['category' => $cat->id]) }}" class="cat-panel-link">
                                {{ $cat->nomCategory }}
                            </a>
                            @endforeach
                        </div>
                        <div class="cat-panel-footer">
                            <a href="{{ route('agricultureProducts.index') }}" class="cat-panel-all">Voir tous les équipements agricoles →</a>
                        </div>
                    </div>

                    {{-- Panel Métallurgie --}}
                    <div id="metallurgie-cat-panel" class="cat-panel">
                        <div class="cat-panel-title">Catégories — Métallurgie</div>
                        <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:6px 16px;">
                            @foreach($headerMetalCats as $cat)
                            <a href="{{ route('metallurgieProducts.filterByCategory', ['category' => $cat->id]) }}" class="cat-panel-link">
                                {{ $cat->nomCategory }}
                            </a>
                            @endforeach
                        </div>
                        <div class="cat-panel-footer">
                            <a href="{{ route('metallurgieProducts.index') }}" class="cat-panel-all">Voir tous les produits métallurgie →</a>
                        </div>
                    </div>

                    {{-- Panel Robotique --}}
                    <div id="robotique-cat-panel" class="cat-panel">
                        <div class="cat-panel-title">Secteurs — Robotique</div>
                        <div style="display:grid;grid-template-columns:repeat(1,1fr);gap:6px 16px;">
                            @foreach($headerRobotiqueCats as $cat)
                            <a href="{{ route('robotiqueProducts.filterByCategory', ['category' => $cat->id]) }}" class="cat-panel-link">
                                {{ $cat->nomCategory }}
                            </a>
                            @endforeach
                        </div>
                        <div class="cat-panel-footer">
                            <a href="{{ route('robotiques') }}" class="cat-panel-all">Voir tous les secteurs robotique →</a>
                        </div>
                    </div>
                    {{-- Panel BTP --}}
                    <div id="btp-cat-panel" class="cat-panel">
                        <div class="cat-panel-title">Catégories — BTP</div>
                        <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:6px 16px;">
                            @foreach($headerBtpCats as $cat)
                            <a href="{{ route('btpProducts.filterByCategory', ['category' => $cat->id]) }}" class="cat-panel-link">
                                {{ $cat->nomCategory }}
                            </a>
                            @endforeach
                        </div>
                        <div class="cat-panel-footer">
                            <a href="{{ route('btp') }}" class="cat-panel-all">Voir tous les équipements BTP →</a>
                        </div>
                    </div>

                    {{-- Panel Mines --}}
                    <div id="mines-cat-panel" class="cat-panel">
                        <div class="cat-panel-title">Catégories — Mines</div>
                        <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:6px 16px;">
                            @foreach($headerMinesCats as $cat)
                            <a href="{{ route('minesProducts.filterByCategory', ['category' => $cat->id]) }}" class="cat-panel-link">
                                {{ $cat->nomCategory }}
                            </a>
                            @endforeach
                        </div>
                        <div class="cat-panel-footer">
                            <a href="{{ route('mines') }}" class="cat-panel-all">Voir tous les équipements miniers →</a>
                        </div>
                    </div>

                    {{-- Panel Manutention --}}
                    <div id="manutention-cat-panel" class="cat-panel">
                        <div class="cat-panel-title">Catégories — Manutention</div>
                        <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:6px 16px;">
                            @foreach($headerManutentionCats as $cat)
                            <a href="{{ route('manutentionProducts.filterByCategory', ['category' => $cat->id]) }}" class="cat-panel-link">
                                {{ $cat->nomCategory }}
                            </a>
                            @endforeach
                        </div>
                        <div class="cat-panel-footer">
                            <a href="{{ route('manutention') }}" class="cat-panel-all">Voir tous les équipements de manutention →</a>
                        </div>
                    </div>
                    <li><a href="/nos-catalogues">Catalogues</a></li>
                    <li style="display:none" class="mobile-contact-item">
                        <a href="/contact" style="color:#F47920 !important; font-weight:900;">Contactez-nous</a>
                    </li>
                </ul>
            </nav>

            <div class="header-right">
                <a href="/contact" class="quote-btn">Contactez-nous</a>
            </div>

            <button class="hamburger" id="hamburger" aria-label="Ouvrir le menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <script>
        // ── Hamburger toggle ──
        var hamburger = document.getElementById('hamburger');
        var nav = document.getElementById('main-nav');

        hamburger.addEventListener('click', function () {
            var isOpen = nav.classList.toggle('open');
            hamburger.classList.toggle('active', isOpen);
            hamburger.setAttribute('aria-label', isOpen ? 'Fermer le menu' : 'Ouvrir le menu');
            // Show/hide the mobile contact link
            document.querySelector('.mobile-contact-item').style.display = isOpen ? 'block' : 'none';
        });

        // ── Services dropdown (desktop + mobile) ──
        document.getElementById('services-link').addEventListener('click', function (e) {
            e.preventDefault();
            var dropdown = document.getElementById('dropdown-content');
            var parent = this.parentElement;
            var isMobile = window.innerWidth <= 768;

            if (parent.classList.contains('open')) {
                parent.classList.remove('open');
                dropdown.style.height = '0';
            } else {
                parent.classList.add('open');
                dropdown.style.height = isMobile
                    ? (dropdown.scrollHeight + 'px')
                    : '70px';
            }
        });

        // Close Services dropdown when clicking outside
        document.addEventListener('click', function (e) {
            var dropdown = document.getElementById('dropdown-content');
            var servicesLink = document.getElementById('services-link');
            if (!dropdown.contains(e.target) && !servicesLink.contains(e.target)) {
                servicesLink.parentElement.classList.remove('open');
                dropdown.style.height = '0';
            }
        });

        // Close mobile nav when a link is clicked
        nav.querySelectorAll('a:not(#services-link)').forEach(function (link) {
            link.addEventListener('click', function () {
                if (window.innerWidth <= 768) {
                    nav.classList.remove('open');
                    hamburger.classList.remove('active');
                }
            });
        });

        // ── Sous-menus catégories (générique) ──
        var catMenus = [
            { tab: 'industriel-tab',   panel: 'industriel-cat-panel'  },
            { tab: 'agriculture-tab',  panel: 'agriculture-cat-panel' },
            { tab: 'metallurgie-tab',  panel: 'metallurgie-cat-panel' },
            { tab: 'robotique-tab',    panel: 'robotique-cat-panel'   },
            { tab: 'btp-tab',          panel: 'btp-cat-panel'         },
            { tab: 'mines-tab',        panel: 'mines-cat-panel'       },
            { tab: 'manutention-tab',  panel: 'manutention-cat-panel' }
        ];

        function hideAllPanels() {
            catMenus.forEach(function(m) {
                var p = document.getElementById(m.panel);
                if (p) p.style.display = 'none';
            });
        }

        catMenus.forEach(function(menu) {
            var tab   = document.getElementById(menu.tab);
            var panel = document.getElementById(menu.panel);
            if (!tab || !panel) return;
            var timer;

            tab.addEventListener('mouseenter', function() {
                if (window.innerWidth <= 768) return;
                clearTimeout(timer);
                hideAllPanels();
                var rect = tab.getBoundingClientRect();
                panel.style.top = rect.bottom + 'px';
                panel.style.left = rect.left + 'px';
                panel.style.display = 'block';

                var margin = 16;
                var panelWidth = panel.offsetWidth;
                var left = rect.left;
                if (left + panelWidth > window.innerWidth - margin) {
                    left = Math.max(margin, window.innerWidth - panelWidth - margin);
                }
                panel.style.left = left + 'px';
            });

            tab.addEventListener('mouseleave', function() {
                timer = setTimeout(function() { panel.style.display = 'none'; }, 150);
            });

            panel.addEventListener('mouseenter', function() { clearTimeout(timer); });
            panel.addEventListener('mouseleave', function() {
                timer = setTimeout(function() { panel.style.display = 'none'; }, 150);
            });
        });

        // Fermer tous les panels si on clique ailleurs
        document.addEventListener('click', function(e) {
            var clickedInside = catMenus.some(function(m) {
                var tab   = document.getElementById(m.tab);
                var panel = document.getElementById(m.panel);
                return (tab && tab.contains(e.target)) || (panel && panel.contains(e.target));
            });
            if (!clickedInside) hideAllPanels();
        });
    </script>
