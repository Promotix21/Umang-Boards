(function () {
    var lb    = document.getElementById('ab2Lightbox');
    var lbImg = document.getElementById('ab2LbImg');
    var lbTtl = document.getElementById('ab2LbTitle');
    var lbDsc = document.getElementById('ab2LbDesc');

    document.querySelectorAll('.ab2-cert-item').forEach(function (el) {
        el.addEventListener('click', function () {
            lbImg.src       = el.dataset.img;
            lbImg.alt       = el.dataset.title;
            lbTtl.textContent = el.dataset.title;
            lbDsc.innerHTML = el.dataset.desc;
            lb.classList.add('open');
            document.body.style.overflow = 'hidden';
        });
    });

    function closeLb() {
        lb.classList.remove('open');
        document.body.style.overflow = '';
    }

    document.getElementById('ab2LbClose').addEventListener('click', closeLb);
    lb.addEventListener('click', function (e) { if (e.target === lb) closeLb(); });
    document.addEventListener('keydown', function (e) { if (e.key === 'Escape') closeLb(); });
})();

// Hero — READ FULL STORY toggle
(function () {
    var btn  = document.getElementById('ab2ReadMore');
    var body = document.getElementById('ab2BodyText');
    if (!btn || !body) return;

    var label = btn.querySelector('.ab2-readmore-label');

    btn.addEventListener('click', function () {
        var expanded = body.classList.toggle('is-expanded');
        btn.setAttribute('aria-expanded', expanded ? 'true' : 'false');
        if (label) label.textContent = expanded ? 'Show Less' : 'Read Full Story';
    });
})();

// Applications section — GSAP ScrollTrigger animations
(function () {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;

    // Header text: stagger up
    gsap.from([
        '.ab2-apps-eyebrow',
        '.ab2-apps-heading',
        '.ab2-apps-hdr-rule',
        '.ab2-apps-subtext'
    ], {
        scrollTrigger: { trigger: '.ab2-apps-hdr-text', start: 'top 78%' },
        opacity: 0, y: 28, duration: 0.7, stagger: 0.1, ease: 'power2.out'
    });

    // Header image: slide in from right
    gsap.from('.ab2-apps-hdr-img', {
        scrollTrigger: { trigger: '.ab2-apps-hdr-img', start: 'top 82%' },
        opacity: 0, x: 40, scale: 0.97, duration: 0.9, ease: 'power2.out'
    });

    // Cards: stagger up, one at a time
    gsap.from('.ab2-apps-card', {
        scrollTrigger: { trigger: '.ab2-apps-cards', start: 'top 80%' },
        opacity: 0, y: 40, duration: 0.7, stagger: 0.15, ease: 'power2.out'
    });

    // Strip: left slides in, center fades, points stagger right
    gsap.from('.ab2-apps-strip-left', {
        scrollTrigger: { trigger: '.ab2-apps-strip', start: 'top 88%' },
        opacity: 0, x: -28, duration: 0.7, ease: 'power2.out'
    });
    gsap.from('.ab2-apps-strip-center', {
        scrollTrigger: { trigger: '.ab2-apps-strip', start: 'top 88%' },
        opacity: 0, y: 20, duration: 0.65, delay: 0.15, ease: 'power2.out'
    });
    gsap.from('.ab2-apps-strip-point', {
        scrollTrigger: { trigger: '.ab2-apps-strip', start: 'top 88%' },
        opacity: 0, x: 22, duration: 0.55, stagger: 0.1, delay: 0.25, ease: 'power2.out'
    });
})();

// Engineering Excellence section — GSAP ScrollTrigger animations
(function () {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;

    gsap.registerPlugin(ScrollTrigger);

    // Left text: stagger fade up
    gsap.from([
        '.ab2-exc-eyebrow',
        '.ab2-exc-heading',
        '.ab2-exc-divider',
        '.ab2-exc-body'
    ], {
        scrollTrigger: { trigger: '.ab2-exc-text', start: 'top 78%' },
        opacity: 0,
        y: 28,
        duration: 0.7,
        stagger: 0.1,
        ease: 'power2.out'
    });

    // Hero factory image
    gsap.from('.ab2-exc-img-hero', {
        scrollTrigger: { trigger: '.ab2-exc-visual', start: 'top 80%' },
        opacity: 0,
        y: 20,
        scale: 0.97,
        duration: 0.85,
        ease: 'power2.out'
    });

    // Product cards: stagger left to right
    gsap.from('.ab2-exc-product-card', {
        scrollTrigger: { trigger: '.ab2-exc-products', start: 'top 88%' },
        opacity: 0,
        y: 24,
        duration: 0.6,
        stagger: 0.12,
        ease: 'power2.out'
    });

    // Pillar cards: stagger
    gsap.from('.ab2-exc-pillar', {
        scrollTrigger: { trigger: '.ab2-exc-pillars', start: 'top 85%' },
        opacity: 0,
        y: 30,
        duration: 0.65,
        stagger: 0.1,
        ease: 'power2.out'
    });
})();

// Core Values section — GSAP ScrollTrigger animations
(function () {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;

    // Left text block: stagger fade up
    gsap.from([
        '.ab2-cv-eyebrow',
        '.ab2-cv-heading',
        '.ab2-cv-sub'
    ], {
        scrollTrigger: { trigger: '.ab2-cv-text', start: 'top 78%' },
        opacity: 0, y: 28, duration: 0.7, stagger: 0.1, ease: 'power2.out'
    });

    // Hero image: subtle drift in from right while masked edges fade in
    gsap.from('.ab2-cv-hero', {
        scrollTrigger: { trigger: '.ab2-cv-row1', start: 'top 80%' },
        opacity: 0, x: 36, scale: 0.97, duration: 0.95, ease: 'power2.out'
    });

    // Value cards: stagger up in rows
    gsap.from('.ab2-cv-card', {
        scrollTrigger: { trigger: '.ab2-cv-grid', start: 'top 82%' },
        opacity: 0, y: 36, duration: 0.65, stagger: 0.08, ease: 'power2.out'
    });

    // Inset quote + pillars: rise together, pillars stagger after
    gsap.from('.ab2-cv-quote', {
        scrollTrigger: { trigger: '.ab2-cv-inset', start: 'top 85%' },
        opacity: 0, y: 22, duration: 0.7, ease: 'power2.out'
    });
    gsap.from('.ab2-cv-pillar', {
        scrollTrigger: { trigger: '.ab2-cv-inset', start: 'top 85%' },
        opacity: 0, y: 22, duration: 0.6, stagger: 0.09, delay: 0.18, ease: 'power2.out'
    });
})();
