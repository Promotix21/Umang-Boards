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
