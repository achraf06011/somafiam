<style>
    @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800;900&family=Inter:wght@400;500;600;700&display=swap');

    .sector-page * ,
    .sector-page *::before,
    .sector-page *::after { box-sizing: border-box; }

    .sector-page {
        font-family: 'Inter', Arial, sans-serif;
        color: #2b3242;
        background: #f7f8fa;
        overflow-x: hidden;
    }

    .sector-page h1, .sector-page h2, .sector-page h3, .sector-page h4 {
        font-family: 'Raleway', sans-serif;
    }

    /* ================= HERO ================= */
    .sector-hero {
        position: relative;
        min-height: 88vh;
        display: flex;
        align-items: center;
        overflow: hidden;
        background-color: #050b18;
    }
    .sector-hero__bg {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0.55;
    }
    .sector-hero__overlay {
        position: absolute;
        inset: 0;
        background:
            linear-gradient(100deg, rgba(3,10,26,0.96) 0%, rgba(3,10,26,0.86) 32%, rgba(3,10,26,0.45) 62%, rgba(3,10,26,0.25) 100%),
            linear-gradient(to top, rgba(3,10,26,0.9) 0%, transparent 35%);
    }
    .sector-hero__content {
        position: relative;
        z-index: 2;
        max-width: 1180px;
        margin: 0 auto;
        padding: 140px 32px 80px;
        width: 100%;
    }
    .sector-hero__eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 3px;
        text-transform: uppercase;
        color: #F47920;
        margin-bottom: 22px;
    }
    .sector-hero__eyebrow::before {
        content: '';
        width: 28px;
        height: 2px;
        background: #F47920;
        display: inline-block;
    }
    .sector-hero__title {
        font-size: clamp(2rem, 4.2vw, 3.4rem);
        font-weight: 800;
        line-height: 1.18;
        color: #fff;
        max-width: 820px;
        margin: 0 0 24px;
        letter-spacing: -0.5px;
    }
    .sector-hero__title span { color: #F47920; }
    .sector-hero__subtitle {
        font-size: 17px;
        line-height: 1.7;
        color: rgba(255,255,255,0.82);
        max-width: 560px;
        margin: 0 0 38px;
        font-weight: 400;
    }
    .sector-cta-btn {
        display: inline-flex;
        align-items: center;
        gap: 14px;
        background: #F47920;
        color: #fff;
        font-weight: 700;
        font-size: 14.5px;
        letter-spacing: 0.3px;
        padding: 16px 28px;
        border-radius: 50px;
        text-decoration: none;
        transition: transform 0.25s ease, box-shadow 0.25s ease, background 0.25s ease;
        box-shadow: 0 8px 24px rgba(244, 121, 32, 0.35);
    }
    .sector-cta-btn:hover {
        background: #d4660f;
        color: #fff;
        text-decoration: none;
        transform: translateY(-3px);
        box-shadow: 0 12px 30px rgba(244, 121, 32, 0.45);
    }
    .sector-cta-btn svg { width: 20px; height: 20px; transition: transform 0.25s ease; flex-shrink: 0; }
    .sector-cta-btn:hover svg { transform: translateX(4px); }
    .sector-cta-btn--ghost {
        background: transparent;
        border: 1.5px solid rgba(255,255,255,0.4);
        box-shadow: none;
    }
    .sector-cta-btn--ghost:hover { background: rgba(255,255,255,0.08); }

    /* ================= GENERIC SECTION ================= */
    .sector-section {
        max-width: 1180px;
        margin: 0 auto;
        padding: 88px 32px;
    }
    .sector-section--tight { padding: 72px 32px; }

    .sector-label {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 2.5px;
        text-transform: uppercase;
        color: #F47920;
        margin-bottom: 16px;
    }
    .sector-label::before {
        content: '';
        width: 22px;
        height: 2px;
        background: #F47920;
        display: inline-block;
    }

    /* ---- Intro (heading + paragraphs) ---- */
    .sector-intro {
        display: grid;
        grid-template-columns: minmax(0, 0.85fr) minmax(0, 1fr);
        gap: 56px;
        align-items: start;
    }
    .sector-intro h2 {
        font-size: clamp(1.6rem, 2.6vw, 2.2rem);
        font-weight: 800;
        color: #001f4d;
        line-height: 1.28;
        margin: 0;
    }
    .sector-intro__body p {
        font-size: 15.5px;
        line-height: 1.85;
        color: #4c5568;
        margin: 0 0 18px;
    }
    .sector-intro__body p:last-child { margin-bottom: 0; }
    .sector-intro__body strong { color: #001f4d; font-weight: 700; }

    @media (max-width: 860px) {
        .sector-intro { grid-template-columns: 1fr; gap: 20px; }
    }

    /* ---- Split (image + content) ---- */
    .sector-split {
        max-width: 1180px;
        margin: 0 auto;
        padding: 20px 32px 96px;
        display: grid;
        grid-template-columns: minmax(0, 0.95fr) minmax(0, 1.05fr);
        gap: 52px;
        align-items: center;
    }
    .sector-split--reverse .sector-split__media { order: 2; }
    .sector-split--reverse .sector-split__body { order: 1; }

    .sector-split__media {
        position: relative;
        border-radius: 18px;
        overflow: hidden;
        aspect-ratio: 4 / 3.1;
        box-shadow: 0 24px 60px rgba(0, 31, 77, 0.18);
    }
    .sector-split__media img {
        width: 100%; height: 100%;
        object-fit: cover;
        display: block;
    }

    .sector-split__body h3 {
        font-size: clamp(1.4rem, 2.2vw, 1.85rem);
        font-weight: 800;
        color: #001f4d;
        margin: 0 0 22px;
        line-height: 1.3;
    }

    .checklist { list-style: none; margin: 0; padding: 0; }
    .checklist li {
        display: flex;
        align-items: flex-start;
        gap: 14px;
        padding: 13px 0;
        border-bottom: 1px solid #e8ecf3;
        font-size: 14.5px;
        line-height: 1.6;
        color: #384258;
    }
    .checklist li:last-child { border-bottom: none; }
    .checklist li .check-ico {
        flex-shrink: 0;
        width: 22px; height: 22px;
        border-radius: 50%;
        background: rgba(244, 121, 32, 0.12);
        color: #F47920;
        display: flex; align-items: center; justify-content: center;
        margin-top: 1px;
    }
    .checklist li .check-ico svg { width: 12px; height: 12px; }

    @media (max-width: 860px) {
        .sector-split { grid-template-columns: 1fr; gap: 28px; padding-bottom: 64px; }
        .sector-split--reverse .sector-split__media,
        .sector-split--reverse .sector-split__body { order: initial; }
        .sector-split__media { aspect-ratio: 16/10; }
    }

    /* ---- Dark variant ---- */
    .sector-dark {
        background: linear-gradient(135deg, #041022 0%, #0b2247 100%);
        color: #fff;
    }
    .sector-dark .sector-split__body h3 { color: #fff; }
    .sector-dark .sector-split__body p {
        font-size: 15.5px;
        line-height: 1.8;
        color: rgba(255,255,255,0.78);
        margin: 0 0 16px;
    }
    .sector-dark .sector-split__body p:last-of-type { margin-bottom: 28px; }
    .sector-dark .sector-label { color: #ff9a4d; }
    .sector-dark .sector-label::before { background: #ff9a4d; }

    /* ================= SECTION DIVIDER (Nos offres / Autres secteurs) ================= */
    .sector-divider {
        background: #050b18;
        padding: 54px 32px 10px;
        text-align: left;
    }
    .sector-divider__inner {
        max-width: 1180px;
        margin: 0 auto;
    }
    .sector-divider h4 {
        color: #fff;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 3px;
        text-transform: uppercase;
        margin: 0 0 8px;
    }
    .sector-divider .rule {
        width: 46px;
        height: 3px;
        background: #F47920;
        border-radius: 2px;
    }

    /* ================= RESPONSIVE HERO ================= */
    @media (max-width: 600px) {
        .sector-hero { min-height: 78vh; }
        .sector-hero__content { padding: 110px 20px 56px; }
        .sector-section { padding: 56px 20px; }
        .sector-split { padding: 16px 20px 48px; }
    }
</style>
