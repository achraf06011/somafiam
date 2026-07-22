<style>
    .zoomable-img { cursor: zoom-in; }

    .img-lightbox-overlay {
        position: fixed;
        inset: 0;
        background: rgba(5, 15, 35, 0.88);
        z-index: 99999;
        display: none;
        align-items: center;
        justify-content: center;
        padding: 24px;
    }
    .img-lightbox-overlay.is-active { display: flex; }

    .img-lightbox-overlay .lightbox-frame {
        position: relative;
        width: min(92vw, 780px);
        height: min(88vh, 640px);
        background: #fff;
        border-radius: 12px;
        padding: 26px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .img-lightbox-overlay .lightbox-frame img.lightbox-img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: contain;
        margin: 0 auto;
    }

    .img-lightbox-overlay .lightbox-close {
        position: absolute;
        top: -18px;
        right: -18px;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #003580;
        color: #fff;
        border: none;
        font-size: 22px;
        line-height: 1;
        cursor: pointer;
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.35);
    }
    .img-lightbox-overlay .lightbox-close:hover { background: #F47920; }

    .img-lightbox-overlay .lightbox-mask {
        position: absolute;
        left: 26px;
        right: 26px;
        background: #fff;
        pointer-events: none;
    }
</style>

<div class="img-lightbox-overlay" id="imgLightboxOverlay">
    <div class="lightbox-frame">
        <button type="button" class="lightbox-close" id="imgLightboxClose" aria-label="Fermer">&times;</button>
        <img class="lightbox-img" id="imgLightboxImg" src="" alt="">
    </div>
</div>

<script>
(function () {
    if (window.__imgLightboxBound) { return; }
    window.__imgLightboxBound = true;

    function getOverlay() { return document.getElementById('imgLightboxOverlay'); }

    function clearMasks(frame) {
        frame.querySelectorAll('.lightbox-mask').forEach(function (n) { n.remove(); });
    }

    function addMask(frame, top, bottom, height) {
        var m = document.createElement('div');
        m.className = 'lightbox-mask';
        if (top !== null) { m.style.top = top + 'px'; }
        if (bottom !== null) { m.style.bottom = bottom + 'px'; }
        m.style.height = height + 'px';
        frame.appendChild(m);
    }

    function applyMasksFromWrapper(wrapper, imgEl, overlayImg, frame) {
        clearMasks(frame);
        if (!wrapper) { return; }

        // The mask overlays are positioned relative to the WRAPPER box (top:0 / bottom:0 of
        // .prod-img-wrap), not relative to the <img> itself, so ratios must use the wrapper's
        // rendered height as the reference — matching how the original CSS masks are anchored.
        var wrapperHeight = wrapper.getBoundingClientRect().height || wrapper.offsetHeight || 0;
        if (!wrapperHeight) { return; }

        var ratios = [];

        // Pattern 1: sibling div masks (industriel logo-mask-top / logo-mask-bottom / logo-mask-top-sm)
        var maskTopDiv = wrapper.querySelector('.logo-mask-top, .logo-mask-top-sm');
        var maskBottomDiv = wrapper.querySelector('.logo-mask-bottom');
        if (maskTopDiv) {
            ratios.push({ side: 'top', ratio: maskTopDiv.getBoundingClientRect().height / wrapperHeight });
        }
        if (maskBottomDiv) {
            ratios.push({ side: 'bottom', ratio: maskBottomDiv.getBoundingClientRect().height / wrapperHeight });
        }

        // Pattern 2: ::after pseudo-element mask (has-watermark)
        if (wrapper.classList.contains('has-watermark')) {
            var after = window.getComputedStyle(wrapper, '::after');
            var afterHeight = parseFloat(after.height);
            if (afterHeight > 0) {
                ratios.push({ side: after.top !== 'auto' ? 'top' : 'bottom', ratio: afterHeight / wrapperHeight });
            }
        }

        if (!ratios.length) { return; }

        function apply() {
            // The lightbox <img> fills 100% of the frame's padded content box, so that box
            // plays the same structural role the wrapper played for the thumbnail.
            var frameRect = frame.getBoundingClientRect();
            var box = overlayImg.getBoundingClientRect();
            var topFromFrame = box.top - frameRect.top;
            var bottomFromFrame = frameRect.bottom - box.bottom;
            ratios.forEach(function (r) {
                var h = box.height * r.ratio;
                if (r.side === 'top') { addMask(frame, topFromFrame, null, h); }
                else { addMask(frame, null, bottomFromFrame, h); }
            });
        }

        if (overlayImg.complete && overlayImg.naturalWidth) {
            requestAnimationFrame(apply);
        } else {
            overlayImg.onload = function () { apply(); };
        }
    }

    document.addEventListener('click', function (e) {
        var overlay = getOverlay();
        if (!overlay) { return; }
        var frame = overlay.querySelector('.lightbox-frame');
        var overlayImg = document.getElementById('imgLightboxImg');
        var closeBtn = document.getElementById('imgLightboxClose');

        var img = e.target.closest('.zoomable-img');
        if (img) {
            overlayImg.src = img.currentSrc || img.getAttribute('src');
            overlayImg.alt = img.getAttribute('alt') || '';
            overlay.classList.add('is-active');
            var wrapper = img.closest('.prod-img-wrap') || img.parentElement;
            applyMasksFromWrapper(wrapper, img, overlayImg, frame);
            return;
        }

        if (e.target === overlay || e.target === closeBtn) {
            overlay.classList.remove('is-active');
            overlayImg.src = '';
            clearMasks(frame);
        }
    });

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
            var overlay = getOverlay();
            if (overlay && overlay.classList.contains('is-active')) {
                overlay.classList.remove('is-active');
                document.getElementById('imgLightboxImg').src = '';
                clearMasks(overlay.querySelector('.lightbox-frame'));
            }
        }
    });
})();
</script>
