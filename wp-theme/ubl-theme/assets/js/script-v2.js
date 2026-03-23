/* ============================================
   UMANG BOARDS V2 — SCRIPT
   Lenis + GSAP + ScrollTrigger + Vanilla JS
   ============================================ */
document.addEventListener('DOMContentLoaded', () => {

    /* ============================================
       LENIS SMOOTH SCROLL
       ============================================ */
    const lenis = new Lenis({
        duration: 1.2,
        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
        smoothWheel: true,
        touchMultiplier: 2,
        autoRaf: false,
    });

    /* ============================================
       LOADER — Handled by premium preloader (appended below).
       The preloader JS calls document.body.classList.add('loaded')
       when its Phase 8 exit completes.
       ============================================ */

    /* CUSTOM CURSOR — removed per client feedback, using default browser cursor */

    /* ============================================
       HEADER SCROLL BEHAVIOR
       ============================================ */
    const header = document.getElementById('header');
    const utilityBar = document.getElementById('utilityBar');
    const utilityH = 32;

    if (utilityBar) {
        utilityBar.addEventListener('animationend', () => {
            utilityBar.style.animation = 'none';
            utilityBar.style.transform = 'translateY(0)';
        }, { once: true });
    }

    window.addEventListener('scroll', () => {
        const y = window.scrollY;
        const shouldBeSticky = y > 80;
        if (header) header.classList.toggle('scrolled', shouldBeSticky);
        if (utilityBar) {
            if (shouldBeSticky) {
                utilityBar.style.transform = 'translateY(-100%)';
                utilityBar.style.transition = 'transform 0.4s ease';
                if (header) header.style.top = '0';
            } else {
                utilityBar.style.transform = 'translateY(0)';
                if (header) header.style.top = utilityH + 'px';
            }
        }
    }, { passive: true });

    /* ============================================
       SEARCH OVERLAY
       ============================================ */
    const searchToggle = document.getElementById('searchToggle');
    const searchOverlay = document.getElementById('searchOverlay');
    const searchClose = document.getElementById('searchClose');
    const searchInput = document.getElementById('searchInput');

    function openSearch() {
        if (searchOverlay) {
            searchOverlay.classList.add('active');
            setTimeout(() => { if (searchInput) searchInput.focus(); }, 400);
        }
    }
    function closeSearch() {
        if (searchOverlay) {
            searchOverlay.classList.remove('active');
            if (searchInput) searchInput.value = '';
        }
    }

    if (searchToggle) searchToggle.addEventListener('click', openSearch);
    if (searchClose) searchClose.addEventListener('click', closeSearch);
    if (searchOverlay) {
        searchOverlay.addEventListener('click', (e) => {
            if (e.target === searchOverlay) closeSearch();
        });
    }

    /* ============================================
       UTILITY PANEL (Slide-out Drawer)
       ============================================ */
    const utilityPanelToggle = document.getElementById('utilityPanelToggle');
    const utilityPanel = document.getElementById('utilityPanel');
    const utilityPanelOverlay = document.getElementById('utilityPanelOverlay');
    const utilityPanelClose = document.getElementById('utilityPanelClose');

    function openUtilityPanel() {
        if (utilityPanel) utilityPanel.classList.add('active');
    }
    function closeUtilityPanel() {
        if (utilityPanel) utilityPanel.classList.remove('active');
    }

    if (utilityPanelToggle) utilityPanelToggle.addEventListener('click', openUtilityPanel);
    if (utilityPanelClose) utilityPanelClose.addEventListener('click', closeUtilityPanel);
    if (utilityPanelOverlay) utilityPanelOverlay.addEventListener('click', closeUtilityPanel);

    /* ============================================
       LANGUAGE DROPDOWN
       ============================================ */
    const langDropdown = document.getElementById('langDropdown');
    if (langDropdown) {
        const langBtn = langDropdown.querySelector('.utility-lang-btn');
        if (langBtn) {
            langBtn.addEventListener('click', () => {
                langDropdown.classList.toggle('active');
            });
        }
        document.addEventListener('click', (e) => {
            if (!langDropdown.contains(e.target)) {
                langDropdown.classList.remove('active');
            }
        });
    }

    /* ============================================
       MEGA MENU LOGIC — TCS-style compact dropdown
       Positions panel flush below the header bar
       ============================================ */
    const allMegas = document.querySelectorAll('.mega-menu');
    let megaTimer = null;

    function getMegaTop() {
        // Position panel directly below the current header bottom edge
        if (header) return header.getBoundingClientRect().bottom;
        return 80;
    }

    function openMega(target) {
        clearTimeout(megaTimer);
        allMegas.forEach(m => { if (m !== target) m.classList.remove('active'); });
        target.style.top = getMegaTop() + 'px';
        target.classList.add('active');
    }

    function closeMegas() {
        clearTimeout(megaTimer);
        allMegas.forEach(m => m.classList.remove('active'));
    }

    document.querySelectorAll('[data-mega]').forEach(trigger => {
        const targetId = trigger.dataset.mega;
        const target = document.getElementById(targetId);
        if (!target) return;

        trigger.addEventListener('mouseenter', () => openMega(target));
        trigger.addEventListener('mouseleave', () => { megaTimer = setTimeout(closeMegas, 220); });
        target.addEventListener('mouseenter', () => clearTimeout(megaTimer));
        target.addEventListener('mouseleave', () => { megaTimer = setTimeout(closeMegas, 220); });
    });

    // Close on Escape or click outside
    document.addEventListener('keydown', e => {
        if (e.key === 'Escape') {
            closeMegas();
            closeSearch();
            closeUtilityPanel();
        }
    });
    document.addEventListener('click', e => {
        if (!e.target.closest('.mega-menu') && !e.target.closest('[data-mega]')) {
            closeMegas();
        }
    });

    /* ============================================
       MEGA MENU — Center category hover → Right sub-panel
       ============================================ */
    document.querySelectorAll('.mega-cat').forEach(cat => {
        cat.addEventListener('mouseenter', () => {
            const subId = cat.dataset.sub;
            if (!subId) return;
            const menu = cat.closest('.mega-menu');
            if (!menu) return;
            // Deactivate all cats + panels in this menu
            menu.querySelectorAll('.mega-cat').forEach(c => c.classList.remove('active'));
            menu.querySelectorAll('.mega-sub-panel').forEach(p => p.classList.remove('active'));
            cat.classList.add('active');
            const panel = document.getElementById(subId);
            if (panel) panel.classList.add('active');
        });
    });

    /* ============================================
       MOBILE MENU
       ============================================ */
    const menuToggle = document.getElementById('menuToggle');
    const mobileNav = document.getElementById('mobileNav');
    if (menuToggle && mobileNav) {
        menuToggle.addEventListener('click', () => {
            const isActive = mobileNav.classList.toggle('active');
            menuToggle.classList.toggle('active');
            if (isActive) lenis.stop(); else lenis.start();
            if (!isActive) {
                mobileNav.querySelectorAll('.mobile-accordion.active').forEach(ac => ac.classList.remove('active'));
            }
        });
        mobileNav.querySelectorAll('.mobile-nav-links > li > a, .mobile-accordion-body a').forEach(a => {
            a.addEventListener('click', () => {
                mobileNav.classList.remove('active');
                menuToggle.classList.remove('active');
                lenis.start();
            });
        });
        mobileNav.querySelectorAll('.mobile-accordion-header').forEach(h => {
            h.addEventListener('click', () => {
                const parent = h.closest('.mobile-accordion');
                const wasActive = parent.classList.contains('active');
                mobileNav.querySelectorAll('.mobile-accordion.active').forEach(ac => ac.classList.remove('active'));
                if (!wasActive) parent.classList.add('active');
            });
        });
    }

    /* ============================================
       HERO STAT COUNTERS
       ============================================ */
    setTimeout(() => {
        document.querySelectorAll('.hero-stat-num').forEach(el => {
            const target = parseInt(el.dataset.target, 10);
            const suffix = el.dataset.suffix || '';
            const duration = 2200;
            const start = performance.now();
            (function tick(now) {
                const progress = Math.min((now - start) / duration, 1);
                const eased = 1 - Math.pow(2, -10 * progress);
                const current = Math.floor(eased * target);
                el.textContent = current + suffix;
                if (progress < 1) requestAnimationFrame(tick);
            })(performance.now());
        });
    }, 3000);

    /* ============================================
       PRODUCT TAB MODE SWITCHER
       ============================================ */
    const productModes = document.querySelectorAll('.product-mode');
    const modePanels = {
        byProduct: document.getElementById('modeByProduct'),
        byApplication: document.getElementById('modeByApplication'),
        byBusiness: document.getElementById('modeByBusiness'),
    };

    productModes.forEach(btn => {
        btn.addEventListener('click', () => {
            const mode = btn.dataset.mode;
            productModes.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            Object.values(modePanels).forEach(p => {
                if (p) { p.classList.remove('active'); p.style.display = 'none'; }
            });
            const target = modePanels[mode];
            if (target) {
                target.style.display = 'block';
                target.offsetHeight; // reflow
                target.classList.add('active');
            }
        });
    });

    /* ============================================
       APPLICATION CAROUSEL (inside By Applications mode)
       Infinite horizontal scroll with auto-slide
       ============================================ */
    (function initAppCarousel() {
        const track = document.getElementById('appCarouselTrack');
        if (!track) return;

        // Card data — all 9 applications with their SVGs
        const appCards = [
            {
                title: 'Power Transformers',
                desc: 'Pressboards, machined components, winding wires for transformers up to 400 kV class.',
                href: '/solutions/power-transformers',
                img: 'assets/images/Transformer Insulations.jpg',
                svg: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>'
            },
            {
                title: 'Distribution Transformers',
                desc: 'Cost-effective insulation and aluminium winding wire solutions.',
                href: '/solutions/distribution-transformers',
                img: 'assets/images/Winding Wires.jpg',
                svg: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>'
            },
            {
                title: 'Instrument Transformers',
                desc: 'Precision insulation components for current & potential transformers.',
                href: '/solutions/instrument-transformers',
                img: 'assets/images/Insulating Chemicals.jpg',
                svg: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-2 2 2 2 0 01-2-2v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83 0 2 2 0 010-2.83l.06-.06A1.65 1.65 0 004.68 15a1.65 1.65 0 00-1.51-1H3a2 2 0 01-2-2 2 2 0 012-2h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 010-2.83 2 2 0 012.83 0l.06.06A1.65 1.65 0 009 4.68a1.65 1.65 0 001-1.51V3a2 2 0 012-2 2 2 0 012 2v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 0 2 2 0 010 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9a1.65 1.65 0 001.51 1H21a2 2 0 012 2 2 2 0 01-2 2h-.09a1.65 1.65 0 00-1.51 1z"/></svg>'
            },
            {
                title: 'Electric Motors',
                desc: 'Enamelled wires and insulating varnishes for motor manufacturing.',
                href: '/solutions/electric-motors',
                img: 'assets/images/Winding Wires.jpg',
                svg: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83M16.62 12l-5.74 9.94"/></svg>'
            },
            {
                title: 'Renewables',
                desc: 'Wind & solar transformer insulation solutions.',
                href: '/solutions/renewables',
                img: 'assets/images/Transformer Insulations.jpg',
                svg: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>'
            },
            {
                title: 'Data Centers',
                desc: 'High-reliability transformer insulation for mission-critical infrastructure.',
                href: '/solutions/data-centers',
                img: 'assets/images/Insulating Chemicals.jpg',
                svg: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"/><rect x="2" y="14" width="20" height="8" rx="2" ry="2"/><line x1="6" y1="6" x2="6.01" y2="6"/><line x1="6" y1="18" x2="6.01" y2="18"/></svg>'
            },
            {
                title: 'Home Appliances',
                desc: 'Enamelled copper and aluminium wires for household appliance motors.',
                href: '/solutions/home-appliances',
                img: 'assets/images/Winding Wires.jpg',
                svg: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>'
            },
            {
                title: 'EV Motors',
                desc: 'High-performance enamelled wires for electric vehicle motor applications.',
                href: '/solutions/ev-motors',
                img: 'assets/images/Transformer Insulations.jpg',
                svg: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>'
            },
            {
                title: 'Stabilizers',
                desc: 'Enamelled copper and aluminium round and flat wires for voltage stabilizers.',
                href: '/solutions/stabilizers',
                img: 'assets/images/Insulating Chemicals.jpg',
                svg: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="1" y="6" width="22" height="12" rx="2"/><line x1="17" y1="6" x2="17" y2="18"/><line x1="12" y1="10" x2="12" y2="14"/><line x1="7" y1="8" x2="7" y2="16"/></svg>'
            }
        ];

        // Triplicate for infinite scrolling
        const extendedCards = [...appCards, ...appCards, ...appCards];

        // Render cards into the track
        function renderCards() {
            track.innerHTML = extendedCards.map(function(card) {
                return '<a href="' + card.href + '" class="app-carousel-card" data-cursor="hover">' +
                    '<div class="app-carousel-card-img">' +
                        '<img src="' + card.img + '" alt="' + card.title + '" loading="lazy">' +
                        '<div class="app-carousel-card-icon-badge">' + card.svg + '</div>' +
                    '</div>' +
                    '<div class="app-carousel-card-body">' +
                        '<div class="app-carousel-card-title">' + card.title + '</div>' +
                        '<div class="app-carousel-card-desc">' + card.desc + '</div>' +
                        '<span class="app-carousel-card-link">Explore <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M7 17L17 7M7 7h10v10"/></svg></span>' +
                    '</div>' +
                '</a>';
            }).join('');
        }
        renderCards();

        // Carousel state
        var isAnimating = false;
        var isPaused = false;
        var autoInterval = null;
        var scrollTimeout = null;
        var initialized = false;

        function getCardMetrics() {
            var firstCard = track.children[0];
            if (!firstCard) return { cardWidth: 280, gap: 20, setWidth: 2700 };
            var gap = parseFloat(window.getComputedStyle(track).gap) || 20;
            var cardWidth = firstCard.offsetWidth;
            var setWidth = (cardWidth + gap) * appCards.length;
            return { cardWidth: cardWidth, gap: gap, setWidth: setWidth };
        }

        // Position at the middle (2nd) set
        function initScrollPosition() {
            if (initialized) return;
            var m = getCardMetrics();
            track.style.scrollSnapType = 'none';
            track.scrollLeft = m.setWidth;
            void track.offsetHeight;
            track.style.scrollSnapType = 'x mandatory';
            initialized = true;
        }

        // Seamlessly reset when reaching 1st or 3rd set
        function checkAndResetScroll() {
            var m = getCardMetrics();
            if (track.scrollLeft < m.setWidth - (m.cardWidth / 2)) {
                track.style.scrollSnapType = 'none';
                track.scrollLeft += m.setWidth;
                void track.offsetHeight;
                track.style.scrollSnapType = 'x mandatory';
            } else if (track.scrollLeft >= m.setWidth * 2 - (m.cardWidth / 2)) {
                track.style.scrollSnapType = 'none';
                track.scrollLeft -= m.setWidth;
                void track.offsetHeight;
                track.style.scrollSnapType = 'x mandatory';
            }
        }

        // Smooth scroll by one card
        function scrollCarousel(direction) {
            if (isAnimating) return;
            var m = getCardMetrics();
            var scrollAmount = m.cardWidth + m.gap;
            var targetScroll = track.scrollLeft + (direction === 'right' ? scrollAmount : -scrollAmount);

            isAnimating = true;
            track.style.scrollSnapType = 'none';

            var startScroll = track.scrollLeft;
            var startTime = null;
            var duration = 600; // ms

            function easeInOutCubic(t) {
                return t < 0.5 ? 4 * t * t * t : 1 - Math.pow(-2 * t + 2, 3) / 2;
            }

            function animate(timestamp) {
                if (!startTime) startTime = timestamp;
                var elapsed = timestamp - startTime;
                var progress = Math.min(elapsed / duration, 1);
                var eased = easeInOutCubic(progress);
                track.scrollLeft = startScroll + (targetScroll - startScroll) * eased;

                if (progress < 1) {
                    requestAnimationFrame(animate);
                } else {
                    track.style.scrollSnapType = 'x mandatory';
                    isAnimating = false;
                    checkAndResetScroll();
                }
            }
            requestAnimationFrame(animate);
        }

        // Arrow click handlers (desktop + mobile)
        ['appCarouselPrev', 'appCarouselPrevMobile'].forEach(function(id) {
            var btn = document.getElementById(id);
            if (btn) btn.addEventListener('click', function() { scrollCarousel('left'); });
        });
        ['appCarouselNext', 'appCarouselNextMobile'].forEach(function(id) {
            var btn = document.getElementById(id);
            if (btn) btn.addEventListener('click', function() { scrollCarousel('right'); });
        });

        // Pause on hover / touch
        track.addEventListener('mouseenter', function() { isPaused = true; });
        track.addEventListener('mouseleave', function() { isPaused = false; });
        track.addEventListener('touchstart', function() { isPaused = true; }, { passive: true });
        track.addEventListener('touchend', function() { isPaused = false; });

        // Handle manual scroll (swipes) — reset position after native snap settles
        track.addEventListener('scroll', function() {
            clearTimeout(scrollTimeout);
            scrollTimeout = setTimeout(function() {
                if (!isAnimating) checkAndResetScroll();
            }, 150);
        }, { passive: true });

        // Auto-slide every 4 seconds
        function startAutoSlide() {
            stopAutoSlide();
            autoInterval = setInterval(function() {
                if (!isPaused && !isAnimating) scrollCarousel('right');
            }, 4000);
        }
        function stopAutoSlide() {
            if (autoInterval) { clearInterval(autoInterval); autoInterval = null; }
        }

        // Initialize when the panel becomes visible
        // Use MutationObserver to detect when display changes from none to block
        var appPanel = document.getElementById('modeByApplication');
        if (appPanel) {
            var observer = new MutationObserver(function() {
                if (appPanel.style.display !== 'none' && !initialized) {
                    setTimeout(function() {
                        initScrollPosition();
                        startAutoSlide();
                    }, 120);
                }
            });
            observer.observe(appPanel, { attributes: true, attributeFilter: ['style', 'class'] });

            // Also check if it's already visible (in case it's the default active tab)
            if (appPanel.style.display !== 'none' && appPanel.classList.contains('active')) {
                setTimeout(function() {
                    initScrollPosition();
                    startAutoSlide();
                }, 120);
            }
        }

        // Re-init on window resize
        var resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                if (initialized) {
                    initialized = false;
                    initScrollPosition();
                }
            }, 250);
        });
    })();

    /* ============================================
       PRODUCT TABS (inside By Products mode)
       Slide-fade animation on panel switch
       ============================================ */
    const tabs = document.querySelectorAll('.product-tab');
    const panels = document.querySelectorAll('.product-panel');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            if (tab.classList.contains('active')) return;
            const targetId = tab.dataset.tab;

            // Deactivate all tabs
            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');

            // Hide current panel
            const currentPanel = document.querySelector('.product-panel.active');
            if (currentPanel) {
                currentPanel.style.opacity = '0';
                currentPanel.style.transform = 'translateY(10px)';
                setTimeout(() => {
                    currentPanel.classList.remove('active');
                    currentPanel.style.display = 'none';
                    currentPanel.style.opacity = '';
                    currentPanel.style.transform = '';
                }, 200);
            }

            // Show new panel with slide-in
            const targetPanel = document.getElementById(targetId);
            if (targetPanel) {
                setTimeout(() => {
                    targetPanel.style.display = 'block';
                    targetPanel.style.opacity = '0';
                    targetPanel.style.transform = 'translateY(16px)';
                    targetPanel.offsetHeight; // reflow
                    targetPanel.style.transition = 'opacity 0.35s ease, transform 0.35s cubic-bezier(0.16,1,0.3,1)';
                    targetPanel.style.opacity = '1';
                    targetPanel.style.transform = 'translateY(0)';
                    targetPanel.classList.add('active');
                }, currentPanel ? 180 : 0);
            }
        });
    });

    /* ============================================
       3-LEVEL PRODUCT FINDER
       Business > Solutions > Product
       ============================================ */
    const pfBusiness = document.getElementById('pfBusiness');
    const pfSolution = document.getElementById('pfSolution');
    const pfProduct = document.getElementById('pfProduct');
    const pfGoBtn = document.getElementById('pfGoBtn');

    const finderData = {
        insulation: {
            solutions: {
                'Power Transformers': [
                    { name: 'Pre-Compressed Pressboards', url: '/pre-compressed-pressboards' },
                    { name: 'Laminated Pressboards', url: '/laminated-pressboards' },
                    { name: 'Machined Spacers & Blocks', url: '/spacers-and-blocks' },
                    { name: 'Rings & Caps', url: '/rings-and-caps' },
                    { name: 'Lead Exit Assemblies', url: '/lead-exit-assemblies' },
                    { name: 'Crepe Paper', url: '/crepe-paper' },
                    { name: 'Diamond Dotted Paper', url: '/ddp' },
                ],
                'Distribution Transformers': [
                    { name: 'Calendered Pressboards', url: '/calendered-pressboards' },
                    { name: 'Moulded Spacers', url: '/moulded-spacers' },
                    { name: 'Plain Kraft Paper', url: '/plain-kraft-paper' },
                    { name: 'Paper Tubes', url: '/paper-tubes' },
                ],
                'Instrument Transformers': [
                    { name: 'Precision Machined Components', url: '/custom-machined' },
                    { name: 'Moulded Components', url: '/moulded-custom' },
                    { name: 'Tissue Paper', url: '/tissue-paper' },
                ],
                'Accessories': [
                    { name: 'Bushings', url: '/bushings' },
                    { name: 'Conservators', url: '/conservators' },
                    { name: 'Radiators', url: '/radiators' },
                    { name: 'Tap Changers', url: '/tap-changers' },
                    { name: 'Gaskets & Seals', url: '/gaskets' },
                ],
            }
        },
        wires: {
            solutions: {
                'Transformers': [
                    { name: 'Paper Insulated Copper Wire', url: '/copper' },
                    { name: 'Film Insulated Copper Wire', url: '/copper' },
                    { name: 'Aluminium Winding Wire', url: '/aluminium' },
                ],
                'Motors & Appliances': [
                    { name: 'Enamelled Copper Wire', url: '/copper' },
                    { name: 'Enamelled Aluminium Wire', url: '/aluminium' },
                ],
                'EV & Specialty': [
                    { name: 'High-Temperature Copper Wire', url: '/copper' },
                    { name: 'Specialty Aluminium Wire', url: '/aluminium' },
                ],
            }
        },
        chemicals: {
            solutions: {
                'Wire Enamels': [
                    { name: 'Polyester Enamel', url: '/wire-enamels' },
                    { name: 'Polyurethane Enamel', url: '/wire-enamels' },
                    { name: 'Polyamide-Imide Enamel', url: '/wire-enamels' },
                ],
                'Resins & Varnishes': [
                    { name: 'Impregnating Resins', url: '/impregnating-resins' },
                    { name: 'Insulating Varnishes', url: '/insulating-varnishes' },
                    { name: 'Bonding Agents', url: '/bonding-agents' },
                    { name: 'Thinners & Cleaners', url: '/thinners-cleaners' },
                ],
            }
        }
    };

    function resetSelect(sel, placeholder) {
        if (!sel) return;
        sel.innerHTML = '<option value="">' + placeholder + '</option>';
        sel.disabled = true;
    }

    function resetGoBtn() {
        if (!pfGoBtn) return;
        pfGoBtn.href = '#';
        pfGoBtn.style.pointerEvents = 'none';
        pfGoBtn.style.opacity = '0.5';
    }

    if (pfBusiness) {
        pfBusiness.addEventListener('change', () => {
            const biz = pfBusiness.value;
            resetSelect(pfSolution, 'Select Solution');
            resetSelect(pfProduct, 'Select Product');
            resetGoBtn();

            if (biz && finderData[biz]) {
                const solutions = Object.keys(finderData[biz].solutions);
                solutions.forEach(s => {
                    const opt = document.createElement('option');
                    opt.value = s;
                    opt.textContent = s;
                    pfSolution.appendChild(opt);
                });
                pfSolution.disabled = false;
            }
        });
    }

    if (pfSolution) {
        pfSolution.addEventListener('change', () => {
            const biz = pfBusiness.value;
            const sol = pfSolution.value;
            resetSelect(pfProduct, 'Select Product');
            resetGoBtn();

            if (biz && sol && finderData[biz] && finderData[biz].solutions[sol]) {
                finderData[biz].solutions[sol].forEach(p => {
                    const opt = document.createElement('option');
                    opt.value = p.url;
                    opt.textContent = p.name;
                    pfProduct.appendChild(opt);
                });
                pfProduct.disabled = false;
            }
        });
    }

    if (pfProduct) {
        pfProduct.addEventListener('change', () => {
            const val = pfProduct.value;
            if (val && pfGoBtn) {
                pfGoBtn.href = val;
                pfGoBtn.style.pointerEvents = 'auto';
                pfGoBtn.style.opacity = '1';
            } else {
                resetGoBtn();
            }
        });
    }

    /* ============================================
       FLOATING ACTION BUTTONS (FAB Cluster)
       ============================================ */
    const fabToggle = document.getElementById('fabToggle');
    const fabCluster = document.getElementById('fabCluster');

    if (fabToggle && fabCluster) {
        fabToggle.addEventListener('click', () => {
            fabCluster.classList.toggle('active');
        });

        // Close FAB when clicking outside
        document.addEventListener('click', (e) => {
            if (!fabCluster.contains(e.target)) {
                fabCluster.classList.remove('active');
            }
        });
    }

    /* ============================================
       GSAP + SCROLLTRIGGER ANIMATIONS
       ============================================ */
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);

        // Sync Lenis with GSAP
        lenis.on('scroll', ScrollTrigger.update);
        gsap.ticker.add((time) => { lenis.raf(time * 1000); });
        gsap.ticker.lagSmoothing(0);

        // --- Hero Video Expand on Scroll ---
        const heroSection = document.querySelector('.s-hero');
        const heroText = document.querySelector('.hero-text');
        const heroVideoBox = document.querySelector('.hero-video-box');
        const heroExpandedText = document.querySelector('.hero-expanded-text');
        const heroScrollCue = document.querySelector('.scroll-cue');

        if (heroSection && heroVideoBox && window.innerWidth > 900) {
            // Wait for initial animations to finish before setting up scroll
            setTimeout(() => {
                // Measure the video box's position
                const vbRect = heroVideoBox.getBoundingClientRect();

                // Create a fullscreen video overlay that starts matching the box position
                const overlay = document.createElement('div');
                overlay.id = 'heroVideoOverlay';
                overlay.style.cssText = `
                    position: fixed;
                    left: ${vbRect.left}px;
                    top: ${vbRect.top}px;
                    width: ${vbRect.width}px;
                    height: ${vbRect.height}px;
                    border-radius: 16px;
                    overflow: hidden;
                    z-index: 9998;
                    pointer-events: none;
                    box-shadow: 0 20px 60px rgba(11,31,58,0.15);
                `;

                // Clone the video into the overlay
                const videoClone = heroVideoBox.querySelector('video').cloneNode(true);
                videoClone.style.cssText = 'width:100%;height:100%;object-fit:cover;';
                videoClone.play();
                overlay.appendChild(videoClone);
                document.body.appendChild(overlay);

                // Hide the original video box (overlay replaces it visually)
                heroVideoBox.style.visibility = 'hidden';

                // Set overlay z-index below the next section so it scrolls under
                overlay.style.zIndex = '2';

                const heroTl = gsap.timeline({
                    scrollTrigger: {
                        trigger: '.s-hero',
                        start: 'top top',
                        end: '+=80%',
                        pin: true,
                        pinSpacing: true,
                        scrub: 0.5,
                        anticipatePin: 1,
                    }
                });

                // Phase 1: Fade out scroll cue
                heroTl.to(heroScrollCue, { opacity: 0, y: -20, duration: 0.08 }, 0);

                // Phase 2: Fade out hero text
                heroTl.to(heroText, {
                    opacity: 0, x: -80, duration: 0.4, ease: 'power2.in'
                }, 0);

                // Phase 3: Expand the fixed overlay to fill the viewport
                heroTl.to(overlay, {
                    left: 0,
                    top: 0,
                    width: '100vw',
                    height: '100vh',
                    borderRadius: 0,
                    boxShadow: '0 0 0 rgba(0,0,0,0)',
                    duration: 0.6,
                    ease: 'power2.inOut',
                }, 0.05);

                // Video stays visible — next section scrolls OVER it naturally
                // because overlay z-index (2) is below sections (which have position:relative)

            }, 3800);

        } else {
            // Mobile fallback — simple fade on scroll
            gsap.to('.scroll-cue', {
                opacity: 0, y: -20,
                scrollTrigger: { trigger: '.s-hero', start: '15% top', end: '30% top', scrub: true }
            });
        }

        // --- Section 2: Value Proposition (staggered text reveal) ---
        gsap.fromTo('#valueHeader .section-eyebrow', { opacity: 0, y: 20 },
            { opacity: 1, y: 0, duration: 0.6, ease: 'power2.out',
              scrollTrigger: { trigger: '#sValue', start: 'top 78%' } });
        gsap.fromTo('#valueHeader .section-title', { opacity: 0, y: 40, clipPath: 'inset(0 0 100% 0)' },
            { opacity: 1, y: 0, clipPath: 'inset(0 0 0% 0)', duration: 1, delay: 0.15, ease: 'power3.out',
              scrollTrigger: { trigger: '#sValue', start: 'top 78%' } });
        gsap.fromTo('#valueHeader .section-desc', { opacity: 0, y: 25 },
            { opacity: 1, y: 0, duration: 0.8, delay: 0.35, ease: 'power2.out',
              scrollTrigger: { trigger: '#sValue', start: 'top 78%' } });

        // Value feature rows — stagger in
        gsap.utils.toArray('.vf-row').forEach((row, i) => {
            const media = row.querySelector('.vf-media');
            const content = row.querySelector('.vf-content');
            const isReversed = row.classList.contains('vf-row-rev');
            if (media) {
                gsap.fromTo(media, { opacity: 0, x: isReversed ? 60 : -60 },
                    { opacity: 1, x: 0, duration: 1, ease: 'power3.out',
                      scrollTrigger: { trigger: row, start: 'top 80%' } });
            }
            if (content) {
                gsap.fromTo(content, { opacity: 0, x: isReversed ? -60 : 60 },
                    { opacity: 1, x: 0, duration: 1, delay: 0.15, ease: 'power3.out',
                      scrollTrigger: { trigger: row, start: 'top 80%' } });
                // Stagger children inside content
                const children = content.querySelectorAll('.vf-eyebrow, .vf-giant-num, .vf-giant-label, .vf-heading, .vf-body, .vf-cta, .vf-cert-item');
                gsap.fromTo(children, { opacity: 0, y: 20 },
                    { opacity: 1, y: 0, duration: 0.6, stagger: 0.08, delay: 0.3, ease: 'power2.out',
                      scrollTrigger: { trigger: row, start: 'top 75%' } });
            }
        });

        // Facts band — counter-style stagger
        gsap.utils.toArray('.vf-fact').forEach((fact, i) => {
            gsap.fromTo(fact, { opacity: 0, y: 30 },
                { opacity: 1, y: 0, duration: 0.7, delay: i * 0.12, ease: 'power3.out',
                  scrollTrigger: { trigger: '.vf-facts-band', start: 'top 85%' } });
        });
        gsap.utils.toArray('.vf-fact-rule').forEach((rule, i) => {
            gsap.fromTo(rule, { scaleY: 0 },
                { scaleY: 1, duration: 0.5, delay: 0.2 + i * 0.12, ease: 'power2.out',
                  scrollTrigger: { trigger: '.vf-facts-band', start: 'top 85%' } });
        });

        gsap.utils.toArray('.value-card').forEach((card, i) => {
            gsap.fromTo(card, { opacity: 0, y: 40 },
                { opacity: 1, y: 0, duration: 0.8, delay: i * 0.08, ease: 'power3.out',
                  scrollTrigger: { trigger: card, start: 'top 90%' } });
        });

        // --- Section 3: Products (staggered header) ---
        gsap.fromTo('#productsHeader .section-eyebrow', { opacity: 0, y: 15 },
            { opacity: 1, y: 0, duration: 0.5, ease: 'power2.out',
              scrollTrigger: { trigger: '#sProducts', start: 'top 78%' } });
        gsap.fromTo('#productsHeader .section-title', { opacity: 0, y: 40, clipPath: 'inset(0 0 100% 0)' },
            { opacity: 1, y: 0, clipPath: 'inset(0 0 0% 0)', duration: 1, delay: 0.12, ease: 'power3.out',
              scrollTrigger: { trigger: '#sProducts', start: 'top 78%' } });
        gsap.fromTo('#productsHeader .section-desc', { opacity: 0, y: 20 },
            { opacity: 1, y: 0, duration: 0.7, delay: 0.3, ease: 'power2.out',
              scrollTrigger: { trigger: '#sProducts', start: 'top 78%' } });

        // --- Facility Parallax Strip ---
        gsap.to('.facility-parallax', {
            yPercent: 25,
            ease: 'none',
            scrollTrigger: { trigger: '#sFacility', start: 'top bottom', end: 'bottom top', scrub: true }
        });
        gsap.to('.facility-caption-inner', {
            opacity: 1, y: 0, duration: 1, ease: 'power3.out',
            scrollTrigger: { trigger: '#sFacility', start: 'top 65%' }
        });

        // --- Section 4: Global / Export Map ---
        const mapSection = '#export-map-section';
        gsap.fromTo('.col-left', { opacity: 0, x: -50 },
            { opacity: 1, x: 0, duration: 1.2, ease: 'power3.out',
              scrollTrigger: { trigger: mapSection, start: 'top 70%' } });
        gsap.fromTo('.col-left .eyebrow', { opacity: 0, y: 20 },
            { opacity: 1, y: 0, duration: 0.6, delay: 0.1, ease: 'power2.out',
              scrollTrigger: { trigger: mapSection, start: 'top 70%' } });
        gsap.fromTo('.col-left .headline', { opacity: 0, y: 30 },
            { opacity: 1, y: 0, duration: 0.8, delay: 0.2, ease: 'power3.out',
              scrollTrigger: { trigger: mapSection, start: 'top 70%' } });
        gsap.fromTo('.col-left .subtext', { opacity: 0, y: 20 },
            { opacity: 1, y: 0, duration: 0.7, delay: 0.35, ease: 'power2.out',
              scrollTrigger: { trigger: mapSection, start: 'top 70%' } });
        gsap.fromTo('#map-container', { opacity: 0, scale: 0.9 },
            { opacity: 1, scale: 1, duration: 1.2, delay: 0.3, ease: 'back.out(1.4)',
              scrollTrigger: { trigger: mapSection, start: 'top 65%' } });
        gsap.utils.toArray('.stat-card').forEach((s, i) => {
            gsap.fromTo(s, { opacity: 0, y: 30 },
                { opacity: 1, y: 0, duration: 0.7, delay: 0.4 + i * 0.1, ease: 'power3.out',
                  scrollTrigger: { trigger: mapSection, start: 'top 65%' } });
        });
        gsap.utils.toArray('.legend__item').forEach((item, i) => {
            gsap.fromTo(item, { opacity: 0, x: -15 },
                { opacity: 1, x: 0, duration: 0.4, delay: 0.6 + i * 0.05, ease: 'power2.out',
                  scrollTrigger: { trigger: mapSection, start: 'top 60%' } });
        });

        // --- Section 5: CSR (staggered text + visual) ---
        gsap.fromTo('#csrContent .section-eyebrow', { opacity: 0, y: 15 },
            { opacity: 1, y: 0, duration: 0.5, ease: 'power2.out',
              scrollTrigger: { trigger: '#sCSR', start: 'top 75%' } });
        gsap.fromTo('#csrContent .section-title', { opacity: 0, y: 40, clipPath: 'inset(0 0 100% 0)' },
            { opacity: 1, y: 0, clipPath: 'inset(0 0 0% 0)', duration: 1, delay: 0.12, ease: 'power3.out',
              scrollTrigger: { trigger: '#sCSR', start: 'top 75%' } });
        gsap.fromTo('#csrContent .section-desc', { opacity: 0, y: 20 },
            { opacity: 1, y: 0, duration: 0.7, delay: 0.25, ease: 'power2.out',
              scrollTrigger: { trigger: '#sCSR', start: 'top 75%' } });
        gsap.utils.toArray('.csr-item').forEach((item, i) => {
            gsap.fromTo(item, { opacity: 0, x: -30 },
                { opacity: 1, x: 0, duration: 0.7, delay: 0.35 + i * 0.12, ease: 'power3.out',
                  scrollTrigger: { trigger: '#sCSR', start: 'top 65%' } });
        });
        gsap.fromTo('#csrVisual', { opacity: 0, x: 60, scale: 0.95 },
            { opacity: 1, x: 0, scale: 1, duration: 1.2, delay: 0.2, ease: 'power3.out',
              scrollTrigger: { trigger: '#sCSR', start: 'top 65%' } });

        // --- Section 6: Media & News (staggered header + cards) ---
        gsap.fromTo('#mediaNewsHeader', { opacity: 0, y: 30 },
            { opacity: 1, y: 0, duration: 0.8, ease: 'power2.out',
              scrollTrigger: { trigger: '#sMediaNews', start: 'top 78%' } });
        gsap.utils.toArray('.mn-news-item').forEach((item, i) => {
            gsap.fromTo(item, { opacity: 0, y: 30 },
                { opacity: 1, y: 0, duration: 0.7, delay: i * 0.12, ease: 'power3.out',
                  scrollTrigger: { trigger: '.mn-news-list', start: 'top 85%' } });
        });
        gsap.utils.toArray('.mn-event-card').forEach((card, i) => {
            gsap.fromTo(card, { opacity: 0, y: 25 },
                { opacity: 1, y: 0, duration: 0.7, delay: i * 0.15, ease: 'power3.out',
                  scrollTrigger: { trigger: '.mn-events-col', start: 'top 85%' } });
        });

        // --- Boardroom Parallax Strip ---
        gsap.to('.boardroom-parallax', {
            yPercent: 25,
            ease: 'none',
            scrollTrigger: { trigger: '#sBoardroom', start: 'top bottom', end: 'bottom top', scrub: true }
        });
        gsap.to('.boardroom-caption-inner', {
            opacity: 1, y: 0, duration: 1, ease: 'power3.out',
            scrollTrigger: { trigger: '#sBoardroom', start: 'top 65%' }
        });

        // --- Section 7: Investor Resources Dark (staggered header + cards + graph animation) ---
        gsap.fromTo('#investorHeader', { opacity: 0, y: 30 },
            { opacity: 1, y: 0, duration: 0.7, ease: 'power2.out',
              scrollTrigger: { trigger: '#sInvestor', start: 'top 78%' } });
        gsap.utils.toArray('.inv-dark-card').forEach((card, i) => {
            gsap.fromTo(card, { opacity: 0, y: 40, scale: 0.96 },
                { opacity: 1, y: 0, scale: 1, duration: 0.8, delay: i * 0.15, ease: 'power3.out',
                  scrollTrigger: { trigger: '.investor-dark-grid', start: 'top 85%' } });
        });
        // Animate SVG graph lines on scroll
        ScrollTrigger.create({
            trigger: '#sInvestor',
            start: 'top 70%',
            onEnter: function() {
                document.querySelectorAll('.inv-graph-line').forEach(function(line) { line.classList.add('animated'); });
                document.querySelectorAll('.inv-graph-fill').forEach(function(fill) { fill.classList.add('animated'); });
                document.querySelectorAll('.inv-graph-dot').forEach(function(dot) { dot.classList.add('animated'); });
            },
            once: true
        });

        // --- CTA (staggered reveal) ---
        gsap.fromTo('#ctaEyebrow', { opacity: 0, y: 20 },
            { opacity: 1, y: 0, duration: 0.6,
              scrollTrigger: { trigger: '#sCTA', start: 'top 75%' } });
        gsap.fromTo('#ctaTitle', { opacity: 0, y: 50, clipPath: 'inset(0 0 100% 0)' },
            { opacity: 1, y: 0, clipPath: 'inset(0 0 0% 0)', duration: 1.2, delay: 0.1, ease: 'power3.out',
              scrollTrigger: { trigger: '#sCTA', start: 'top 72%' } });
        gsap.fromTo('#ctaDesc', { opacity: 0, y: 30 },
            { opacity: 1, y: 0, duration: 0.8, delay: 0.25, ease: 'power2.out',
              scrollTrigger: { trigger: '#sCTA', start: 'top 68%' } });
        gsap.fromTo('#ctaActions', { opacity: 0, y: 25, scale: 0.95 },
            { opacity: 1, y: 0, scale: 1, duration: 0.7, delay: 0.4, ease: 'back.out(1.5)',
              scrollTrigger: { trigger: '#sCTA', start: 'top 65%' } });

        // --- Footer ---
        gsap.fromTo('.s-footer-top', { opacity: 0, y: 40 },
            { opacity: 1, y: 0, duration: 0.8, ease: 'power3.out',
              scrollTrigger: { trigger: '.s-footer', start: 'top 85%' } });

        // --- Logo Scroll Animation (Tech Mahindra style) ---
        // Logo re-draws SVG paths when scrolling back to top
        const logoIcon = document.getElementById('logoIcon');
        if (logoIcon) {
            // On scroll past hero, shrink logo subtly
            gsap.to('.logo-icon', {
                scale: 0.85, duration: 0.3,
                scrollTrigger: {
                    trigger: '.s-hero',
                    start: 'bottom 120px',
                    end: 'bottom 60px',
                    scrub: true,
                    onLeaveBack: () => {
                        // When scrolling back to top, play logo pulse animation
                        gsap.fromTo('.logo-icon', { scale: 0.85 },
                            { scale: 1, duration: 0.6, ease: 'elastic.out(1, 0.5)' });
                    }
                }
            });

            // Gold-glow pulse on logo when major sections enter view (brand colors preserved)
            const svgDrawSections = ['#sValue', '#sProducts', '#export-map-section', '#sInvestor'];
            svgDrawSections.forEach(sel => {
                ScrollTrigger.create({
                    trigger: sel,
                    start: 'top 60%',
                    onEnter: () => {
                        gsap.timeline()
                            .to('.logo-icon', {
                                filter: 'drop-shadow(0 0 10px rgba(200,168,75,0.75))',
                                scale: 1.08, duration: 0.35, ease: 'power2.out'
                            })
                            .to('.logo-icon', {
                                filter: 'drop-shadow(0 0 0px rgba(200,168,75,0))',
                                scale: 1, duration: 0.55, ease: 'elastic.out(1, 0.6)'
                            });
                    },
                    once: false
                });
            });
        }

        /* ============================================
           ENERGY FLOW PIPES — Scroll-driven current animation
           ============================================ */
        const pipeSvg = document.getElementById('pipeSvg');
        if (pipeSvg && window.innerWidth > 1024) {
            // Wait for layout to settle
            setTimeout(() => {
                const pageH = document.documentElement.scrollHeight;
                const pw = window.innerWidth;
                pipeSvg.setAttribute('viewBox', '0 0 ' + pw + ' ' + pageH);

                // Helper to get section vertical position
                function secTop(sel) {
                    const el = document.querySelector(sel);
                    return el ? el.offsetTop : 0;
                }
                function secBot(sel) {
                    const el = document.querySelector(sel);
                    return el ? el.offsetTop + el.offsetHeight : 0;
                }

                // Define 3 pipe segment paths
                const pipes = [
                    {
                        // Segment 1: Right side — hero area flowing down past value section
                        d: 'M ' + (pw + 60) + ' ' + (secTop('.s-hero') + 200) +
                           ' C ' + (pw - 180) + ' ' + (secTop('.s-hero') + 450) +
                           ', ' + (pw - 120) + ' ' + (secBot('.s-hero') + 100) +
                           ', ' + (pw + 60) + ' ' + (secTop('#sValue') + 300),
                        trigger: '.s-hero',
                        triggerEnd: '#sValue',
                    },
                    {
                        // Segment 2: Left side — between Products and Facility
                        d: 'M -60 ' + (secBot('#sProducts') - 200) +
                           ' C 200 ' + (secBot('#sProducts') - 100) +
                           ', 250 ' + (secTop('#sFacility') + 50) +
                           ', -60 ' + (secTop('#sFacility') + 300),
                        trigger: '#sProducts',
                        triggerEnd: '#sFacility',
                    },
                    {
                        // Segment 3: Right side — between Events and CTA
                        d: 'M ' + (pw + 60) + ' ' + (secBot('#sEvents') - 200) +
                           ' C ' + (pw - 200) + ' ' + (secBot('#sEvents') - 50) +
                           ', ' + (pw - 180) + ' ' + (secTop('#sCTA') + 100) +
                           ', ' + (pw + 60) + ' ' + (secTop('#sCTA') + 350),
                        trigger: '#sEvents',
                        triggerEnd: '#sCTA',
                    },
                ];

                pipes.forEach((pipe, i) => {
                    const seg = pipeSvg.querySelector('[data-pipe="' + (i + 1) + '"]');
                    if (!seg) return;

                    const outline = seg.querySelector('.pipe-outline');
                    const current = seg.querySelector('.pipe-current');

                    outline.setAttribute('d', pipe.d);
                    current.setAttribute('d', pipe.d);

                    // Measure path length
                    const len = current.getTotalLength();

                    // Set initial dash: short visible segment, rest hidden
                    const segLen = len * 0.15;
                    gsap.set(current, {
                        attr: {
                            'stroke-dasharray': segLen + ' ' + (len - segLen),
                            'stroke-dashoffset': len,
                        }
                    });

                    // Also set outline dasharray for drawing effect
                    gsap.set(outline, {
                        attr: {
                            'stroke-dasharray': len,
                            'stroke-dashoffset': len,
                        }
                    });

                    // Animate outline drawing in
                    gsap.to(outline, {
                        attr: { 'stroke-dashoffset': 0 },
                        ease: 'none',
                        scrollTrigger: {
                            trigger: pipe.trigger,
                            start: 'top 80%',
                            end: 'bottom 20%',
                            scrub: 1,
                        }
                    });

                    // Animate current flow along path
                    gsap.to(current, {
                        attr: { 'stroke-dashoffset': -segLen },
                        ease: 'none',
                        scrollTrigger: {
                            trigger: pipe.trigger,
                            start: 'top 60%',
                            end: 'bottom top',
                            scrub: 1.5,
                        }
                    });
                });

            }, 4500); // After hero setup
        }
    }

});


/* =============================================================
   INTERACTIVE EXPORT MAP — IIFE
   Renders real world map from Natural Earth (world-paths.js),
   animated export routes, pulsing nodes, particles, hover tooltip.
   ============================================================= */
;(function () {
  'use strict';

  /* ==========================================================
     1. CONFIGURATION
     ========================================================== */

  const ORIGIN = { name: 'India', x: 709.9, y: 181.4 };

  const MARKETS = [
    {
      id: 'turkey', alpha2: 'TR', name: 'Turkey',
      x: 588.6, y: 123.4,
      region: 'EUROPE', cluster: 'europe',
      color: '#0066ff',
      years: '8+', strength: 85,
      sector: 'Power \u00b7 Transformer \u00b7 Electrical'
    },
    {
      id: 'russia', alpha2: 'RU', name: 'Russia',
      x: 731.2, y: 55.3,
      region: 'EUROPE', cluster: 'europe',
      color: '#0066ff',
      years: '6+', strength: 72,
      sector: 'Power \u00b7 Transformer \u00b7 Electrical'
    },
    {
      id: 'spain', alpha2: 'ES', name: 'Spain',
      x: 490.6, y: 118.7,
      region: 'EUROPE', cluster: 'europe',
      color: '#0066ff',
      years: '5+', strength: 68,
      sector: 'Power \u00b7 Transformer \u00b7 Electrical'
    },
    {
      id: 'mexico', alpha2: 'MX', name: 'Mexico',
      x: 229.1, y: 171.8,
      region: 'NORTH AMERICA', cluster: 'namerica',
      color: '#e85d00',
      years: '4+', strength: 60,
      sector: 'Power \u00b7 Transformer \u00b7 Electrical'
    },
    {
      id: 'thailand', alpha2: 'TH', name: 'Thailand',
      x: 770.7, y: 196.2,
      region: 'ASIA', cluster: 'asia',
      color: '#00b368',
      years: '7+', strength: 78,
      sector: 'Power \u00b7 Transformer \u00b7 Electrical'
    }
  ];

  const PRODUCTS = [
    'Electrical Insulation Pressboards',
    'Transformer Insulation Kraft Paper',
    'Paperboard Transformer Components'
  ];

  const EXPORT_CODES = new Set(['TR', 'RU', 'ES', 'MX', 'TH']);
  const ORIGIN_CODE = 'IN';

  const ID_TO_ALPHA = {
    '356': 'IN', '792': 'TR', '643': 'RU', '724': 'ES',
    '484': 'MX', '764': 'TH'
  };

  const SECONDARY_DOTS = [
    { x: 493.5, y: 77.7 },
    { x: 489.8, y: 114.4 },
    { x: 524.3, y: 85.9 },
    { x: 530.1, y: 111.7 },
    { x: 643.1, y: 171.0 },
    { x: 617.5, y: 170.3 },
    { x: 848.4, y: 127.7 },
    { x: 357.2, y: 279.9 },
    { x: 565.3, y: 337.1 },
    { x: 762.6, y: 131.9 },
    { x: 824.6, y: 131.4 },
    { x: 612.5, y: 142.1 },
    { x: 852.6, y: 326.8 },
  ];


  /* ==========================================================
     2. RENDER WORLD MAP
     ========================================================== */

  var svg = document.getElementById('world-map');
  if (!svg) return; // Exit if map section not in DOM

  var ns = 'http://www.w3.org/2000/svg';

  function svgEl(tag, attrs) {
    attrs = attrs || {};
    var el = document.createElementNS(ns, tag);
    for (var k in attrs) {
      if (attrs.hasOwnProperty(k)) el.setAttribute(k, attrs[k]);
    }
    return el;
  }

  var countriesGroup = document.getElementById('countries-group');

  if (typeof WORLD_PATHS !== 'undefined') {
    WORLD_PATHS.forEach(function(country) {
      var path = svgEl('path', { d: country.d });
      if (country.alpha2 && EXPORT_CODES.has(country.alpha2)) {
        path.classList.add('country--export');
      }
      if (country.alpha2 === ORIGIN_CODE) {
        path.classList.add('country--origin');
      }
      countriesGroup.appendChild(path);
    });
  }


  /* ==========================================================
     3. DRAW EXPORT ROUTES
     ========================================================== */

  var routesGroup = document.getElementById('routes-group');
  var pulsesGroup = document.getElementById('pulses-group');
  var nodesGroup = document.getElementById('nodes-group');

  function routePath(ox, oy, dx, dy) {
    var midX = (ox + dx) / 2;
    var midY = (oy + dy) / 2;
    var dist = Math.hypot(dx - ox, dy - oy);
    var arc = Math.min(dist * 0.28, 100);
    return 'M ' + ox + ' ' + oy + ' Q ' + midX + ' ' + (midY - arc) + ' ' + dx + ' ' + dy;
  }

  MARKETS.forEach(function(m, idx) {
    var d = routePath(ORIGIN.x, ORIGIN.y, m.x, m.y);

    routesGroup.appendChild(svgEl('path', { d: d, class: 'route-line-bg' }));

    var line = svgEl('path', { d: d, class: 'route-line', stroke: m.color });
    routesGroup.appendChild(line);

    requestAnimationFrame(function() {
      try {
        var len = line.getTotalLength();
        line.style.strokeDasharray = len;
        line.style.strokeDashoffset = len;
        line.style.transition = 'stroke-dashoffset 1.8s ease ' + (0.4 + idx * 0.25) + 's, opacity 0.5s ease ' + (0.4 + idx * 0.25) + 's';
        line.style.opacity = '0.7';
        requestAnimationFrame(function() { line.style.strokeDashoffset = '0'; });
      } catch (e) {
        line.style.opacity = '0.7';
      }
    });

    var pulse = svgEl('circle', { r: 2.5, class: 'energy-pulse', opacity: '0' });
    pulsesGroup.appendChild(pulse);

    m._path = line;
    m._pulse = pulse;
  });


  /* ==========================================================
     4. DRAW NODES
     ========================================================== */

  var secGroup = document.getElementById('secondary-nodes');
  SECONDARY_DOTS.forEach(function(dot, i) {
    var c = svgEl('circle', { cx: dot.x, cy: dot.y, r: 2, class: 'secondary-dot' });
    c.style.animationDelay = (i * 0.35) + 's';
    secGroup.appendChild(c);
  });

  var originGroup = document.getElementById('origin-node');
  originGroup.appendChild(svgEl('circle', {
    cx: ORIGIN.x, cy: ORIGIN.y, r: 32, class: 'origin-glow-circle'
  }));

  var ring1 = svgEl('circle', { cx: ORIGIN.x, cy: ORIGIN.y, r: 14, class: 'origin-ring' });
  var ring2 = svgEl('circle', { cx: ORIGIN.x, cy: ORIGIN.y, r: 14, class: 'origin-ring' });
  ring2.style.animationDelay = '1.2s';
  originGroup.appendChild(ring1);
  originGroup.appendChild(ring2);

  originGroup.appendChild(svgEl('circle', {
    cx: ORIGIN.x, cy: ORIGIN.y, r: 4.5, class: 'origin-core'
  }));

  var oLabel = svgEl('text', {
    x: ORIGIN.x, y: ORIGIN.y - 18,
    class: 'origin-label', 'text-anchor': 'middle'
  });
  oLabel.textContent = 'INDIA \u2014 HQ';
  originGroup.appendChild(oLabel);

  MARKETS.forEach(function(m, idx) {
    var g = svgEl('g', { class: 'market-node', 'data-id': m.id });

    var ring = svgEl('circle', {
      cx: m.x, cy: m.y, r: 10, class: 'node-ring', stroke: m.color
    });
    ring.style.animationDelay = (idx * 0.4) + 's';

    var core = svgEl('circle', {
      cx: m.x, cy: m.y, r: 3.5, class: 'node-core', fill: m.color
    });

    var label = svgEl('text', {
      x: m.x, y: m.y + 18, class: 'node-label', 'text-anchor': 'middle'
    });
    label.textContent = m.name.toUpperCase();

    var hit = svgEl('circle', {
      cx: m.x, cy: m.y, r: 20, class: 'node-hitarea'
    });

    g.appendChild(ring);
    g.appendChild(core);
    g.appendChild(label);
    g.appendChild(hit);
    nodesGroup.appendChild(g);

    m._nodeG = g;
    m._core = core;
  });


  /* ==========================================================
     5. ENERGY PULSE ANIMATION
     ========================================================== */

  function startPulses() {
    MARKETS.forEach(function(m, idx) {
      var pathEl = m._path;
      var pulseEl = m._pulse;
      if (!pathEl || !pulseEl) return;

      var pathLen;
      try { pathLen = pathEl.getTotalLength(); } catch (e) { return; }

      var speed = 3200 + idx * 400;
      var start = null;
      var delay = idx * 500;

      function step(ts) {
        if (!start) start = ts + delay;
        var elapsed = ts - start;
        if (elapsed < 0) { requestAnimationFrame(step); return; }

        var t = (elapsed % speed) / speed;
        var pt = pathEl.getPointAtLength(t * pathLen);

        pulseEl.setAttribute('cx', pt.x);
        pulseEl.setAttribute('cy', pt.y);
        var op = t < 0.05 ? t / 0.05 : t > 0.9 ? (1 - t) / 0.1 : 0.85;
        pulseEl.setAttribute('opacity', op);

        requestAnimationFrame(step);
      }

      requestAnimationFrame(step);
    });
  }

  setTimeout(startPulses, 1800);


  /* ==========================================================
     6. PARTICLE CANVAS
     ========================================================== */

  var canvas = document.getElementById('particle-canvas');
  if (!canvas) return;
  var ctx = canvas.getContext('2d');
  var particles = [];
  var P_COUNT = 40;

  function resizeCanvas() {
    var r = canvas.parentElement.getBoundingClientRect();
    var dpr = window.devicePixelRatio || 1;
    canvas.width = r.width * dpr;
    canvas.height = r.height * dpr;
    canvas.style.width = r.width + 'px';
    canvas.style.height = r.height + 'px';
    ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
  }

  function initParticles() {
    resizeCanvas();
    particles = [];
    var w = canvas.width / (window.devicePixelRatio || 1);
    var h = canvas.height / (window.devicePixelRatio || 1);
    for (var i = 0; i < P_COUNT; i++) {
      particles.push({
        x: Math.random() * w,
        y: Math.random() * h,
        vx: (Math.random() - 0.5) * 0.25,
        vy: (Math.random() - 0.5) * 0.25,
        size: Math.random() * 1.2 + 0.4,
        opacity: Math.random() * 0.15 + 0.03
      });
    }
  }

  function drawParticles() {
    var w = canvas.width / (window.devicePixelRatio || 1);
    var h = canvas.height / (window.devicePixelRatio || 1);
    ctx.clearRect(0, 0, w, h);

    particles.forEach(function(p) {
      p.x += p.vx;
      p.y += p.vy;
      if (p.x < 0) p.x = w;
      if (p.x > w) p.x = 0;
      if (p.y < 0) p.y = h;
      if (p.y > h) p.y = 0;

      ctx.beginPath();
      ctx.arc(p.x, p.y, p.size, 0, Math.PI * 2);
      ctx.fillStyle = 'rgba(0, 102, 255, ' + p.opacity + ')';
      ctx.fill();
    });

    requestAnimationFrame(drawParticles);
  }

  initParticles();
  drawParticles();
  window.addEventListener('resize', initParticles);


  /* ==========================================================
     7. TOOLTIP INTERACTIONS
     ========================================================== */

  var tooltip = document.getElementById('tooltip-panel');
  var ttCountry = document.getElementById('tooltip-country');
  var ttRegion = document.getElementById('tooltip-region');
  var ttSector = document.getElementById('tooltip-sector');
  var ttYears = document.getElementById('tooltip-years');
  var ttBar = document.getElementById('tooltip-bar');
  var activeMarket = null;

  function showTooltip(m, e) {
    activeMarket = m;
    ttCountry.textContent = m.name;
    ttRegion.textContent = m.region;
    ttSector.textContent = m.sector;
    ttYears.textContent = m.years + ' Years';
    ttBar.style.width = m.strength + '%';
    tooltip.classList.add('visible');
    posTooltip(e);
  }

  function hideTooltip() {
    activeMarket = null;
    tooltip.classList.remove('visible');
    ttBar.style.width = '0%';
  }

  function posTooltip(e) {
    var pad = 16;
    var tw = 280;
    var th = tooltip.offsetHeight || 280;
    var x = e.clientX + pad;
    var y = e.clientY - th / 2;
    if (x + tw > window.innerWidth - pad) x = e.clientX - tw - pad;
    if (y < pad) y = pad;
    if (y + th > window.innerHeight - pad) y = window.innerHeight - th - pad;
    tooltip.style.left = x + 'px';
    tooltip.style.top = y + 'px';
  }

  MARKETS.forEach(function(m) {
    if (!m._nodeG) return;
    m._nodeG.addEventListener('mouseenter', function(e) { showTooltip(m, e); });
    m._nodeG.addEventListener('mousemove', function(e) { if (activeMarket) posTooltip(e); });
    m._nodeG.addEventListener('mouseleave', hideTooltip);
    // Touch support
    m._nodeG.addEventListener('touchstart', function(e) {
      e.preventDefault();
      var t = e.touches[0];
      showTooltip(m, { clientX: t.clientX, clientY: t.clientY });
    });
  });

  document.addEventListener('touchstart', function(e) {
    if (!e.target.closest('.market-node')) hideTooltip();
  });


  /* ==========================================================
     8. ANIMATED COUNTERS
     ========================================================== */

  function animateCounters() {
    document.querySelectorAll('[data-count]').forEach(function(el) {
      var target = parseInt(el.dataset.count, 10);
      var dur = 1800;
      var t0 = performance.now();

      function tick(now) {
        var progress = Math.min((now - t0) / dur, 1);
        var eased = 1 - Math.pow(1 - progress, 3);
        el.textContent = Math.round(eased * target);
        if (progress < 1) requestAnimationFrame(tick);
      }

      requestAnimationFrame(tick);
    });
  }

  var statsGrid = document.querySelector('.export-map-section .stats-grid');
  if (statsGrid) {
    var obs = new IntersectionObserver(function(entries) {
      entries.forEach(function(e) {
        if (e.isIntersecting) { animateCounters(); obs.unobserve(e.target); }
      });
    }, { threshold: 0.5 });
    obs.observe(statsGrid);
  }


  /* HUD Clock removed — top HUD bar no longer shown */


  /* ==========================================================
     10. ENTRANCE ANIMATION
     ========================================================== */

  var section = document.getElementById('export-map-section');
  if (section) {
    section.style.opacity = '0';
    section.style.transition = 'opacity 0.8s ease';
    requestAnimationFrame(function() { section.style.opacity = '1'; });
  }

})();


/* =============================================================
   PREMIUM PRELOADER — CAD-Style Animation
   Phases: Grid → Stroke Draw → Scanner → Fill → Text → Sweep → Depth → Exit
   ============================================================= */
;(function () {
  'use strict';

  /* ========================================================================
     TIMING CONFIGURATION (ms)
     ======================================================================== */
  var T = {
    BG_INITIAL_DELAY:   80,
    BG_NOISE_FADE:      400,
    BG_GRID_DELAY:      100,
    BG_CROSSHAIR_DELAY: 150,
    BG_VIGNETTE_DELAY:  50,
    PHASE_DRAW:         800,
    PHASE_SCAN:         3000,
    PHASE_FILL:         3800,
    PHASE_TEXT:          4600,
    PHASE_SWEEP:        5800,
    PHASE_DEPTH:        6300,
    PHASE_EXIT:         7500,
    EXIT_DURATION:      800,
  };

  /* ========================================================================
     DOM CACHE
     ======================================================================== */
  var _$ = function(sel) { return document.querySelector(sel); };

  var dom = {
    preloader:     _$('#preloader'),
    noiseCanvas:   _$('#noiseCanvas'),
    gridLayer:     _$('.preloader .bg-layer--grid'),
    crosshairsSVG: _$('#crosshairsSVG'),
    vignetteLayer: _$('.preloader .bg-layer--vignette'),
    logoWrap:      _$('#logoWrap'),
    logoSVG:       _$('#logoSVG'),
    brandText:     _$('#brandText'),
    companyName:   _$('#companyName'),
  };

  if (!dom.preloader) return;

  /* ========================================================================
     UTILITIES
     ======================================================================== */
  function wait(ms) {
    return new Promise(function(r) { setTimeout(r, ms); });
  }

  /* ========================================================================
     NOISE TEXTURE
     ======================================================================== */
  function generateNoise(canvas) {
    var ctx = canvas.getContext('2d');
    var w = canvas.width = window.innerWidth;
    var h = canvas.height = window.innerHeight;
    var imageData = ctx.createImageData(w, h);
    var data = imageData.data;
    for (var i = 0; i < data.length; i += 4) {
      var v = Math.random() * 255;
      data[i] = data[i + 1] = data[i + 2] = v;
      data[i + 3] = 18;
    }
    ctx.putImageData(imageData, 0, 0);
  }

  /* ========================================================================
     CROSSHAIRS
     ======================================================================== */
  function generateCrosshairs(svg) {
    var w = window.innerWidth;
    var h = window.innerHeight;
    var gridSize = 64;
    var armLen = 4;
    svg.setAttribute('viewBox', '0 0 ' + w + ' ' + h);
    svg.setAttribute('width', w);
    svg.setAttribute('height', h);

    var pathData = '';
    var offsetX = (w % gridSize) / 2;
    var offsetY = (h % gridSize) / 2;

    for (var x = offsetX; x <= w; x += gridSize) {
      for (var y = offsetY; y <= h; y += gridSize) {
        pathData += 'M' + (x - armLen) + ',' + y + 'L' + (x + armLen) + ',' + y;
        pathData += 'M' + x + ',' + (y - armLen) + 'L' + x + ',' + (y + armLen);
      }
    }

    var path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
    path.setAttribute('d', pathData);
    path.setAttribute('stroke', 'rgba(86,96,102,0.1)');
    path.setAttribute('stroke-width', '0.5');
    path.setAttribute('fill', 'none');
    svg.appendChild(path);
  }

  /* ========================================================================
     PHASE 1: Background layers
     ======================================================================== */
  async function phase1() {
    await wait(T.BG_INITIAL_DELAY);
    generateNoise(dom.noiseCanvas);
    dom.noiseCanvas.classList.add('is-visible');
    await wait(T.BG_NOISE_FADE);
    await wait(T.BG_GRID_DELAY);
    dom.gridLayer.classList.add('is-visible');
    await wait(T.BG_CROSSHAIR_DELAY);
    generateCrosshairs(dom.crosshairsSVG);
    dom.crosshairsSVG.classList.add('is-visible');
    await wait(T.BG_VIGNETTE_DELAY);
    dom.vignetteLayer.classList.add('is-visible');
    await wait(200);
  }

  /* ========================================================================
     PHASE 2: CAD stroke draw
     ======================================================================== */
  function setupAndDraw() {
    var logoPaths = dom.logoSVG.querySelectorAll('.logo-path');
    logoPaths.forEach(function(path) {
      var length = path.getTotalLength();
      path.style.strokeDasharray = length;
      path.style.strokeDashoffset = length;
    });

    setTimeout(function() {
      dom.logoWrap.classList.add('draw-active');
    }, T.PHASE_DRAW);
  }

  /* ========================================================================
     PHASES 3-7: Timed class additions
     ======================================================================== */
  function schedulePhases() {
    // Phase 3: Scanner
    setTimeout(function() {
      dom.logoWrap.classList.add('scan-active');
    }, T.PHASE_SCAN);

    // Phase 4: Fill with color
    setTimeout(function() {
      dom.logoWrap.classList.add('fill-active');
    }, T.PHASE_FILL);

    // Phase 5: Text appears with letter-spacing reduction
    setTimeout(function() {
      dom.brandText.classList.add('text-active');
    }, T.PHASE_TEXT);

    // Phase 6: Highlight sweep
    setTimeout(function() {
      dom.companyName.classList.add('sweep-active');
    }, T.PHASE_SWEEP);

    // Phase 7: Depth and shadow
    setTimeout(function() {
      dom.preloader.classList.add('depth-active');
    }, T.PHASE_DEPTH);
  }

  /* ========================================================================
     PHASE 8: Exit
     ======================================================================== */
  function scheduleExit() {
    setTimeout(function() {
      dom.preloader.classList.add('is-exiting');
      document.body.style.overflow = 'auto';

      setTimeout(function() {
        document.body.classList.add('loaded');
        dom.preloader.style.display = 'none';
      }, T.EXIT_DURATION);
    }, T.PHASE_EXIT);
  }

  /* ========================================================================
     MASTER SEQUENCE
     ======================================================================== */
  async function runPreloader() {
    try {
      await phase1();
      setupAndDraw();
      schedulePhases();
      scheduleExit();
    } catch (err) {
      console.error('[Preloader] Animation error:', err);
      dom.preloader.classList.add('is-exiting');
      setTimeout(function() {
        dom.preloader.style.display = 'none';
        document.body.classList.add('loaded');
      }, 100);
    }
  }

  /* ========================================================================
     INIT
     ======================================================================== */
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', runPreloader);
  } else {
    runPreloader();
  }

})();
