/* ============================================
   UMANG BOARDS — PRODUCT PAGES
   GSAP ScrollTrigger Animations + Filter/Sort
   ============================================ */

document.addEventListener('DOMContentLoaded', function () {

    const isCollection = document.querySelector('.pc-page');
    const isDetail     = document.querySelector('.pd-page');

    /* ────────────────────────────────────────
       GSAP + ScrollTrigger Setup
       ──────────────────────────────────────── */
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;
    gsap.registerPlugin(ScrollTrigger);

    const EASE = 'expo.out'; // matches --ease-out-expo

    /* ────────────────────────────────────────
       Animation Helpers
       ──────────────────────────────────────── */

    // Fade up: opacity 0, y → visible
    function animFadeUp(selector, opts) {
        var defaults = { y: 20, duration: 0.6, start: 'top 85%', delay: 0 };
        var o = Object.assign({}, defaults, opts || {});
        gsap.utils.toArray(selector).forEach(function (el) {
            gsap.fromTo(el,
                { opacity: 0, y: o.y },
                {
                    opacity: 1, y: 0,
                    duration: o.duration,
                    ease: EASE,
                    delay: o.delay,
                    scrollTrigger: { trigger: el, start: o.start }
                }
            );
        });
    }

    // Staggered fade up for groups
    function animStagger(parentSelector, childSelector, opts) {
        var defaults = { y: 25, duration: 0.5, stagger: 0.08, start: 'top 85%' };
        var o = Object.assign({}, defaults, opts || {});
        gsap.utils.toArray(parentSelector).forEach(function (parent) {
            var children = parent.querySelectorAll(childSelector);
            if (!children.length) return;
            gsap.fromTo(children,
                { opacity: 0, y: o.y },
                {
                    opacity: 1, y: 0,
                    duration: o.duration,
                    stagger: o.stagger,
                    ease: EASE,
                    scrollTrigger: { trigger: parent, start: o.start }
                }
            );
        });
    }

    // Clip reveal (title effect)
    function animClipReveal(selector, opts) {
        var defaults = { duration: 0.8, start: 'top 85%', delay: 0 };
        var o = Object.assign({}, defaults, opts || {});
        gsap.utils.toArray(selector).forEach(function (el) {
            gsap.fromTo(el,
                { opacity: 0, y: 30, clipPath: 'inset(0 0 100% 0)' },
                {
                    opacity: 1, y: 0, clipPath: 'inset(0 0 0% 0)',
                    duration: o.duration,
                    ease: EASE,
                    delay: o.delay,
                    scrollTrigger: { trigger: el, start: o.start }
                }
            );
        });
    }

    // Horizontal clip reveal (images)
    function animClipRevealH(selector, opts) {
        var defaults = { duration: 0.9, start: 'top 85%', delay: 0.35 };
        var o = Object.assign({}, defaults, opts || {});
        gsap.utils.toArray(selector).forEach(function (el) {
            gsap.fromTo(el,
                { clipPath: 'inset(0 100% 0 0)', opacity: 0 },
                {
                    clipPath: 'inset(0 0% 0 0)', opacity: 1,
                    duration: o.duration,
                    ease: EASE,
                    delay: o.delay,
                    scrollTrigger: { trigger: el, start: o.start }
                }
            );
        });
    }


    /* ════════════════════════════════════════
       COLLECTION PAGE ANIMATIONS
       ════════════════════════════════════════ */
    if (isCollection) {

        // Header load sequence
        animFadeUp('.pc-header .p-breadcrumb', { delay: 0.1 });
        animFadeUp('.pc-header .p-eyebrow', { delay: 0.2 });
        animClipReveal('.pc-header-title', { delay: 0.3, start: 'top 95%' });
        animFadeUp('.pc-header-desc', { delay: 0.5 });
        animFadeUp('.pc-product-count', { delay: 0.6, y: 10 });
        animFadeUp('.pc-header .p-btn-row', { delay: 0.7, y: 15 });

        // Product rows — staggered scroll reveal
        animStagger('#pc-product-grid', '.pc-product-row', { y: 30, stagger: 0.1 });

        // CTA panel
        animFadeUp('.pc-cta', { y: 40, duration: 0.7, start: 'top 80%' });

        // Related category cards
        animStagger('.pc-related-grid', '.pc-related-card', { stagger: 0.1 });


        /* ────────────────────────────────────
           SIDEBAR FILTER INTERACTIVITY
           ──────────────────────────────────── */
        var filterBtns = document.querySelectorAll('.pc-sidebar-cat');
        var grid       = document.getElementById('pc-product-grid');

        if (filterBtns.length && grid) {
            filterBtns.forEach(function (btn) {
                btn.addEventListener('click', function () {
                    // Toggle active
                    filterBtns.forEach(function (b) { b.classList.remove('active'); });
                    btn.classList.add('active');

                    var filter = btn.getAttribute('data-filter');
                    var rows   = grid.querySelectorAll('.pc-product-row');

                    rows.forEach(function (row) {
                        var cats = (row.getAttribute('data-cats') || '').split(' ');
                        if (filter === 'all' || cats.indexOf(filter) !== -1) {
                            row.classList.remove('hidden');
                        } else {
                            row.classList.add('hidden');
                        }
                    });
                });
            });
        }

        /* ────────────────────────────────────
           SORT (kept for future use / keyboard)
           ──────────────────────────────────── */
        var sortSelect = document.getElementById('pc-sort');
        if (sortSelect && grid) {
            sortSelect.addEventListener('change', function () {
                var rows = Array.from(grid.querySelectorAll('.pc-product-row'));
                var val  = sortSelect.value;

                rows.sort(function (a, b) {
                    if (val === 'title-asc') {
                        return (a.getAttribute('data-title') || '').localeCompare(b.getAttribute('data-title') || '');
                    }
                    if (val === 'title-desc') {
                        return (b.getAttribute('data-title') || '').localeCompare(a.getAttribute('data-title') || '');
                    }
                    if (val === 'date-desc') {
                        return (b.getAttribute('data-date') || '').localeCompare(a.getAttribute('data-date') || '');
                    }
                    return 0;
                });

                rows.forEach(function (row) { grid.appendChild(row); });
            });
        }
    }


    /* ════════════════════════════════════════
       PRODUCT DETAIL PAGE ANIMATIONS (Split Layout)
       ════════════════════════════════════════ */
    if (isDetail) {

        // Sections fade in on scroll
        animFadeUp('.pd-section', { y: 30, duration: 0.6 });

        // Spec rows stagger
        animStagger('.pd-spec-rows', '.pd-spec-row', { y: 15, stagger: 0.04 });

        // Char cards stagger
        animStagger('.pd-section', '.pd-char-card', { y: 20, stagger: 0.08 });

        // Doc rows stagger
        gsap.utils.toArray('.pd-doc-row').forEach(function(el, i) {
            gsap.fromTo(el,
                { opacity: 0, y: 20 },
                { opacity: 1, y: 0, duration: 0.5, ease: EASE, delay: i * 0.08,
                  scrollTrigger: { trigger: el, start: 'top 85%' } }
            );
        });

        // Enquiry panel
        animFadeUp('.pd-enquiry-panel', { y: 40, duration: 0.7, start: 'top 80%' });

        // Related products
        animStagger('.pd-related-grid', '.p-card', { y: 25, stagger: 0.08 });
    }


    /* ────────────────────────────────────────
       Refresh ScrollTrigger after page load
       ──────────────────────────────────────── */
    window.addEventListener('load', function () {
        setTimeout(function () { ScrollTrigger.refresh(true); }, 500);
    });

});
