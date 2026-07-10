<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - SOMAFIAM S.A</title>
    <meta name="description" content="Contactez SOMAFIAM S.A — 59 Rue El Khansa, Quartier Palmier, Casablanca. Demandez un devis pour vos équipements industriels, agricoles ou métallurgiques.">
    <meta name="robots" content="index, follow">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://somafiam.com/contact">
    <meta property="og:title" content="Contact - SOMAFIAM S.A">
    <meta property="og:description" content="Contactez notre équipe à Casablanca pour tout devis ou renseignement sur nos équipements industriels.">
    <meta property="og:image" content="{{ url('Logo/Last Logo Somafiam.png') }}">

    <script src="https://www.google.com/recaptcha/api.js?render=6LenKnYqAAAAAEn5vrNjyzb3m1DQNP84d3-En53I"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Montserrat', Arial, sans-serif; background: #f4f6fb; }

        /* ── Hero ── */
        .hero-section {
            position: relative;
            width: 100%;
            height: 45vh;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #001228;
        }
        .hero-section video {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.4;
        }
        .hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, rgba(0,18,40,0.5) 0%, rgba(0,18,40,0.85) 100%);
        }
        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: #fff;
            padding-top: 60px;
        }
        .hero-content .eyebrow {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: #F47920;
            display: block;
            margin-bottom: 14px;
        }
        .hero-content h1 {
            font-size: 3rem;
            font-weight: 800;
            letter-spacing: 6px;
            text-transform: uppercase;
            margin: 0;
        }
        .hero-content p {
            font-size: 14px;
            color: rgba(255,255,255,0.65);
            margin-top: 12px;
            letter-spacing: 1px;
        }

        /* ── Info cards ── */
        .info-section {
            background: #fff;
            padding: 0 0 0;
            margin-top: -1px;
        }
        .info-cards {
            display: flex;
            max-width: 900px;
            margin: -36px auto 0;
            position: relative;
            z-index: 10;
            gap: 0;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 40px rgba(0,53,128,0.18);
        }
        .info-card {
            flex: 1;
            background: #003580;
            color: #fff;
            padding: 30px 20px;
            text-align: center;
            transition: background 0.2s;
            border-right: 1px solid rgba(255,255,255,0.1);
        }
        .info-card:last-child { border-right: none; }
        .info-card:hover { background: #001f4d; }
        .info-card i {
            font-size: 26px;
            color: #F47920;
            margin-bottom: 12px;
            display: block;
        }
        .info-card h3 {
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            color: rgba(255,255,255,0.6);
            margin-bottom: 8px;
        }
        .info-card p {
            font-size: 13px;
            font-weight: 600;
            color: #fff;
            margin: 0;
            line-height: 1.6;
        }

        /* ── Main section ── */
        .main-section {
            padding: 70px 0 60px;
        }

        /* ── Form card ── */
        .form-card {
            background: #fff;
            border-radius: 16px;
            padding: 40px 36px;
            box-shadow: 0 4px 24px rgba(0,53,128,0.08);
        }
        .form-card .section-label {
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: #F47920;
            display: block;
            margin-bottom: 8px;
        }
        .form-card h2 {
            font-size: 1.5rem;
            font-weight: 800;
            color: #001f4d;
            margin-bottom: 6px;
        }
        .form-card > p {
            font-size: 13px;
            color: #888;
            margin-bottom: 28px;
        }
        .form-card .form-control {
            border: 1.5px solid #e0e6f0;
            border-radius: 8px;
            padding: 11px 14px;
            font-size: 13.5px;
            color: #333;
            background: #fafbfd;
            transition: border-color 0.2s, box-shadow 0.2s;
            height: auto;
        }
        .form-card .form-control:focus {
            border-color: #003580;
            box-shadow: 0 0 0 3px rgba(0,53,128,0.08);
            background: #fff;
            outline: none;
        }
        .form-card select.form-control { color: #666; }
        .form-card textarea.form-control { resize: vertical; min-height: 110px; }
        .form-card .btn-submit {
            background: #003580;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 13px 32px;
            font-size: 14px;
            font-weight: 700;
            width: 100%;
            cursor: pointer;
            transition: background 0.2s, transform 0.15s;
            letter-spacing: 0.5px;
        }
        .form-card .btn-submit:hover {
            background: #F47920;
            transform: translateY(-1px);
        }
        .form-label-sm {
            font-size: 11px;
            font-weight: 600;
            color: #555;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            margin-bottom: 5px;
            display: block;
        }
        .input-group-field { margin-bottom: 16px; }

        /* ── Map card ── */
        .map-card {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 24px rgba(0,53,128,0.08);
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        .map-card-header {
            background: #001f4d;
            padding: 20px 24px;
            color: #fff;
        }
        .map-card-header h4 {
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: #F47920;
            margin: 0 0 4px;
        }
        .map-card-header p {
            font-size: 12.5px;
            color: rgba(255,255,255,0.7);
            margin: 0;
        }
        .map-card iframe {
            flex: 1;
            width: 100%;
            min-height: 360px;
            border: 0;
            display: block;
        }
        .map-card-footer {
            background: #fff;
            padding: 14px 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .map-card-footer a {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #003580;
            color: #fff;
            text-decoration: none;
            font-size: 12.5px;
            font-weight: 700;
            padding: 10px 22px;
            border-radius: 7px;
            transition: background 0.2s;
        }
        .map-card-footer a:hover { background: #F47920; color: #fff; text-decoration: none; }

        /* ── Alert ── */
        .alert-success-custom {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            border-radius: 8px;
            padding: 12px 16px;
            font-size: 13px;
            margin-bottom: 20px;
        }
        .alert-error-custom {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            border-radius: 8px;
            padding: 12px 16px;
            font-size: 13px;
            margin-bottom: 20px;
        }

        @media (max-width: 768px) {
            .info-cards { flex-direction: column; margin: -20px 16px 0; }
            .info-card { border-right: none; border-bottom: 1px solid rgba(255,255,255,0.1); }
            .form-card { padding: 24px 18px; }
            .hero-content h1 { font-size: 2rem; }
            .map-card { margin-top: 32px; }
        }
    </style>
</head>

<body>
    @include('Header')

    <!-- Hero -->
    <section class="hero-section">
        <video autoplay loop muted playsinline>
            <source src="{{ asset('Videos/v5.mp4') }}" type="video/mp4">
        </video>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <span class="eyebrow">Somafiam S.A — Casablanca</span>
            <h1>Contact</h1>
            <p>Notre équipe vous répond dans les meilleurs délais</p>
        </div>
    </section>

    <!-- Info cards -->
    <div class="info-section">
        <div class="info-cards">
            <div class="info-card">
                <i class="fas fa-phone-alt"></i>
                <h3>Appelez-nous</h3>
                <p>+212 663 475 037</p>
            </div>
            <div class="info-card">
                <i class="fas fa-envelope"></i>
                <h3>Écrivez-nous</h3>
                <p>contact@somafiam.com</p>
            </div>
            <div class="info-card">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Trouvez-nous</h3>
                <p>59 Rue El Khansa, Étage 3, N°7<br>Quartier Palmier, Casablanca</p>
            </div>
        </div>
    </div>

    <!-- Form + Map -->
    <div class="main-section">
        <div class="container">
            <div class="row">

                <!-- Formulaire -->
                <div class="col-lg-6 mb-4">
                    <div class="form-card">
                        <span class="section-label">Formulaire de contact</span>
                        <h2>Envoyez-nous un message</h2>
                        <p>Remplissez le formulaire et nous vous répondrons rapidement.</p>

                        @if(session('success'))
                            <div class="alert-success-custom">✓ {{ session('success') }}</div>
                        @endif
                        @if($errors->any())
                            <div class="alert-error-custom">
                                @foreach($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
                            </div>
                        @endif

                        <form method="POST" id="contactFormulaire" action="{{ route('contactSend') }}">
                            @csrf
                            <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">

                            <div class="row">
                                <div class="col-md-6 input-group-field">
                                    <label class="form-label-sm">Nom Prénom *</label>
                                    <input type="text" name="name" class="form-control" placeholder="Ex: Ahmed Benali" required value="{{ old('name') }}">
                                </div>
                                <div class="col-md-6 input-group-field">
                                    <label class="form-label-sm">E-Mail *</label>
                                    <input type="email" name="email" class="form-control" placeholder="exemple@societe.com" required value="{{ old('email') }}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 input-group-field">
                                    <label class="form-label-sm">Société</label>
                                    <input type="text" name="societe" class="form-control" placeholder="Nom de votre société" value="{{ old('societe') }}">
                                </div>
                                <div class="col-md-6 input-group-field">
                                    <label class="form-label-sm">Téléphone</label>
                                    <input type="tel" name="telephone" class="form-control" placeholder="+212 6XX XXX XXX" value="{{ old('telephone') }}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 input-group-field">
                                    <label class="form-label-sm">Pays *</label>
                                    <select name="country" class="form-control" required>
                                        <option value="" disabled {{ old('country') ? '' : 'selected' }}>Sélectionnez le pays</option>
                                        @php $pays = ['Maroc','Algérie','Tunisie','Libye','Égypte','Mauritanie','Sénégal','Mali','Burkina Faso','Niger','Tchad','Cameroun','Congo','République démocratique du Congo','Côte d\'Ivoire','Ghana','Nigeria','Gabon','Angola','Kenya','Tanzanie','Mozambique','Afrique du Sud','France','Espagne','Belgique','Autres']; @endphp
                                        @foreach($pays as $p)
                                            <option value="{{ $p }}" {{ old('country') == $p ? 'selected' : '' }}>{{ $p }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 input-group-field">
                                    <label class="form-label-sm">Sujet *</label>
                                    <input type="text" name="subject" class="form-control" placeholder="Ex: Demande de devis" required value="{{ old('subject') }}">
                                </div>
                            </div>

                            <div class="input-group-field">
                                <label class="form-label-sm">Message *</label>
                                <textarea name="message" class="form-control" rows="5" placeholder="Décrivez votre besoin..." required>{{ old('message') }}</textarea>
                            </div>

                            <button type="submit" class="btn-submit">
                                Envoyer le message &nbsp;&#8594;
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Carte -->
                <div class="col-lg-6 mb-4">
                    <div class="map-card">
                        <div class="map-card-header">
                            <h4>Notre localisation</h4>
                            <p>59 Rue El Khansa, Étage 3 N°7, Quartier Palmier, Casablanca 20340, Maroc</p>
                        </div>
                        <iframe
                            src="https://maps.google.com/maps?q=33.575635,-7.615812&hl=fr&z=17&output=embed"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                        <div class="map-card-footer">
                            <a href="https://www.google.com/maps/dir/?api=1&destination=59+Rue+El+Khansa+Quartier+Palmier+Casablanca+Maroc"
                               target="_blank" rel="noopener">
                                <i class="fas fa-directions"></i>
                                Obtenir l'itinéraire
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        // Refresh reCAPTCHA token juste avant soumission
        document.getElementById('contactFormulaire').addEventListener('submit', function(e) {
            e.preventDefault();
            var form = this;
            grecaptcha.ready(function() {
                grecaptcha.execute('6LenKnYqAAAAAEn5vrNjyzb3m1DQNP84d3-En53I', { action: 'submit' })
                    .then(function(token) {
                        document.getElementById('g-recaptcha-response').value = token;
                        form.submit();
                    });
            });
        });
    </script>

    @include('Footer')
</body>

</html>
