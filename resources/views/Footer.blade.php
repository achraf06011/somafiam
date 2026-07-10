<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

    <style>
        @import "https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Yeseva+One";

        img {
            max-width: 100%;
            height: auto;
        }

        .sectionF {
            padding: 60px 0;
            /* min-height: 100vh;*/
        }

        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .contact-area {
            border-bottom: 1px solid #252d3a;
        }

        .contact-content p {
            margin: 30px 0 60px;
            position: relative;
            font-size: 1.25rem;
            font-family: Montserrat;
            font-weight: 700;
            font-style: normal;
            letter-spacing: 2.5px;
        }

        .contact-content p::after {
            background: #f2f6fa;
            bottom: -30px;
            content: "";
            height: 1px;
            left: 50%;
            position: absolute;
            transform: translate(-50%);
            width: 80%;
        }

        .contact-content h1 {
            color: #e9f0fa;
            font-size: 3rem;
            font-family: Montserrat;
            font-weight: 700;
            font-style: normal;
            letter-spacing: 2.5px;
            margin-bottom: 10px;
        }

        .contact-content h6 {
            color: #e9f0fa;
            font-family: monospace;
            font-size: 15px;
            font-weight: 400;
            margin-bottom: 10px;
        }

        .contact-content span {
            color: #e9f0fa;
            margin: 0 10px;
        }

        .contact-social {
            margin-top: 30px;
        }

        .contact-social>ul {
            display: inline-flex;
        }

        .contact-social ul li a {
            border: 1px solid #263447;
            color: #e9f0fa;
            display: inline-block;
            height: 40px;
            margin: 0 10px;
            padding-top: 7px;
            transition: all 0.4s ease 0s;
            width: 40px;
            font-family: "Montserrat", sans-serif
        }

        .contact-social ul li a:hover {
            border: 1px solid #1689cc;
            color: #82b0f1;
        }

        .contact-content img {
            max-width: 210px;
        }

        .footer-logo {
            height: 70px;
            margin-bottom: 15px;
            filter: brightness(0) invert(1);
        }

        .sectionF,
        footer {
            background: #879cc0;
            color: #e9f0fa;
        }

        footer p {
            padding: 40px 0;
            text-align: center;
        }

        .quote-btn {
            background-color: #F47920;
            color: #fff;
            border: none;
            padding: 12px 30px;
            border-radius: 6px;
            font-weight: 600;
            font-size: 15px;
            transition: background-color 0.2s;
        }

        .quote-btn:hover {
            background-color: #d4651a;
            color: #fff;
        }

        footer img {
            width: 44px;
        }
    </style>
    <div style='height: 75px;'></div>
    <section class="contact-area sectionF" id="contact" style="background-color: #001f4d">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="contact-content text-center">
                        <h1> SOMAFIAM S.A </h1>
                        <p>
                            Votre partenaire industriel de confiance au Maroc
                        </p>
                        <div class="hr"></div>
                        <a href="/contact">
                            <div class="btn quote-btn"> Contactez-nous </div>
                        </a>
                        <div class="contact-social">
                            <ul>
                                <li><a class="hover-target" href="https://www.facebook.com/somafiam" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="hover-target" href="https://www.linkedin.com/company/somafiam-s-a/" target="_blank" rel="noopener"><i class="fab fa-linkedin-in"></i></a></li>
                                <!--<li><a class="hover-target" href=""><i class="fab fa-github"></i></a></li>-->
                                <!--<li><a class="hover-target" href=""><i class="fab fa-behance"></i></a></li>-->
                                <!--<li><a class="hover-target" href=""><i class="fab fa-pinterest-p"></i></a></li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =============== 1.9 Contact Area End ====================-->
    <!-- =============== 1.9 Footer Area Start ====================-->
    <footer style="background-color: #001f4d">
        <p style="margin-bottom: 8px;">&copy; Copyright 2026 SOMAFIAM S.A. Tous droits réservés.</p>
        <p style="padding-top: 0; font-size: 0.8rem;">
            <a href="/mentions-legales" style="color: rgba(255,255,255,0.5); text-decoration: none;"
               onmouseover="this.style.color='#F47920'" onmouseout="this.style.color='rgba(255,255,255,0.5)'">
                Mentions légales
            </a>
        </p>
    </footer>

    <!-- ── Bouton Retour en haut ── -->
    <button id="backToTop" onclick="window.scrollTo({top:0,behavior:'smooth'})"
        aria-label="Retour en haut"
        style="
            position: fixed !important;
            bottom: 92px !important;
            right: 24px !important;
            left: auto !important;
            top: auto !important;
            z-index: 99999;
            width: 46px;
            height: 46px;
            background-color: #003580;
            color: #fff;
            border: none;
            border-radius: 50%;
            display: none;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 14px rgba(0,0,0,0.3);
            cursor: pointer;
            transition: background-color 0.2s, transform 0.2s;
            font-size: 18px;
            padding: 0;
        "
        onmouseover="this.style.backgroundColor='#F47920'; this.style.transform='scale(1.1)'"
        onmouseout="this.style.backgroundColor='#003580'; this.style.transform='scale(1)'">
        &#8679;
    </button>
    <script>
        (function(){
            var btn = document.getElementById('backToTop');
            if(!btn) return;
            window.addEventListener('scroll', function(){
                btn.style.display = window.scrollY > 300 ? 'flex' : 'none';
            });
        })();
    </script>

    <!-- ── Bouton WhatsApp flottant ── -->
    <!-- Pour changer le numéro : remplacez 212521030936 par votre numéro sans le + -->
    <a href="https://wa.me/212663475037"
       target="_blank" rel="noopener"
       aria-label="Contactez-nous sur WhatsApp"
       style="
           position: fixed;
           bottom: 24px;
           right: 24px;
           z-index: 9999;
           width: 58px;
           height: 58px;
           background-color: #25D366;
           border-radius: 50%;
           display: flex;
           align-items: center;
           justify-content: center;
           box-shadow: 0 4px 16px rgba(0,0,0,0.25);
           transition: transform 0.2s, box-shadow 0.2s;
           text-decoration: none;
       "
       onmouseover="this.style.transform='scale(1.1)'; this.style.boxShadow='0 6px 22px rgba(0,0,0,0.35)'"
       onmouseout="this.style.transform='scale(1)';   this.style.boxShadow='0 4px 16px rgba(0,0,0,0.25)'">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="#fff">
            <path d="M16 2C8.268 2 2 8.268 2 16c0 2.417.636 4.688 1.748 6.66L2 30l7.54-1.722A13.944 13.944 0 0 0 16 30c7.732 0 14-6.268 14-14S23.732 2 16 2zm0 25.5a11.44 11.44 0 0 1-5.836-1.601l-.418-.247-4.476 1.022 1.052-4.357-.272-.44A11.5 11.5 0 1 1 16 27.5zm6.29-8.61c-.345-.172-2.04-1.006-2.356-1.12-.316-.115-.546-.172-.776.172-.23.345-.89 1.12-1.09 1.35-.2.23-.4.258-.745.086-.345-.172-1.456-.537-2.773-1.712-1.024-.914-1.716-2.043-1.916-2.388-.2-.345-.021-.532.15-.703.155-.155.345-.402.517-.603.172-.2.23-.345.345-.575.115-.23.057-.432-.029-.603-.086-.172-.776-1.87-1.063-2.56-.28-.672-.564-.58-.776-.59l-.661-.011a1.27 1.27 0 0 0-.92.432c-.316.345-1.207 1.178-1.207 2.873s1.235 3.333 1.407 3.563c.172.23 2.43 3.71 5.888 5.204.823.355 1.466.567 1.967.726.826.263 1.578.226 2.172.137.663-.099 2.04-.834 2.327-1.638.287-.805.287-1.494.2-1.638-.086-.143-.315-.23-.66-.402z"/>
        </svg>
    </a>
