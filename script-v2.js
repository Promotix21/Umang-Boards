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
       LOADER — SVG Draw Animation
       ============================================ */
    const loaderBar = document.getElementById('loaderBar');
    let loadProgress = 0;
    let loadComplete = false;

    const progressInterval = setInterval(() => {
        if (loadComplete) {
            loadProgress = 100;
            if (loaderBar) loaderBar.style.width = '100%';
            clearInterval(progressInterval);
            setTimeout(() => document.body.classList.add('loaded'), 500);
        } else {
            const remaining = 90 - loadProgress;
            loadProgress += remaining * 0.06;
            if (loaderBar) loaderBar.style.width = loadProgress + '%';
        }
    }, 50);

    const markLoaded = () => { loadComplete = true; };
    if (document.readyState === 'complete') markLoaded();
    else window.addEventListener('load', markLoaded);

    /* ============================================
       CUSTOM CURSOR
       ============================================ */
    const cur = document.getElementById('cursor');
    const dot = document.getElementById('cursorDot');
    if (cur && dot && window.matchMedia('(hover: hover)').matches) {
        let mx = 0, my = 0, cx = 0, cy = 0;
        document.addEventListener('mousemove', e => {
            mx = e.clientX; my = e.clientY;
            dot.style.left = mx + 'px';
            dot.style.top = my + 'px';
        });
        (function loop() {
            cx += (mx - cx) * 0.12;
            cy += (my - cy) * 0.12;
            cur.style.left = cx + 'px';
            cur.style.top = cy + 'px';
            requestAnimationFrame(loop);
        })();

        function bindCursorHovers() {
            document.querySelectorAll('[data-cursor="hover"]').forEach(el => {
                if (el.__cursorBound) return;
                el.__cursorBound = true;
                el.addEventListener('mouseenter', () => { cur.classList.add('hover'); dot.classList.add('hover'); });
                el.addEventListener('mouseleave', () => { cur.classList.remove('hover'); dot.classList.remove('hover'); });
            });
        }
        bindCursorHovers();
    }

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
       MEGA MENU LOGIC (3 megas: Company, Products, Solutions)
       ============================================ */
    const allMegas = document.querySelectorAll('.mega-menu');
    const megaCursor = document.getElementById('megaCursor');
    let megaTimer = null;
    let cursorTimer = null;
    let cursorFollowing = false;

    function closeMegas() {
        allMegas.forEach(m => m.classList.remove('active'));
        if (megaCursor) {
            megaCursor.classList.remove('active');
            megaCursor.style.pointerEvents = 'none';
        }
        cursorFollowing = false;
        clearTimeout(cursorTimer);
    }

    function parkCursor() {
        cursorFollowing = false;
        if (megaCursor) megaCursor.style.pointerEvents = 'auto';
        clearTimeout(cursorTimer);
        cursorTimer = setTimeout(() => {
            if (megaCursor) megaCursor.classList.remove('active');
        }, 1000);
    }

    if (megaCursor) {
        megaCursor.addEventListener('click', (e) => {
            e.stopPropagation();
            closeMegas();
        });
    }

    document.querySelectorAll('[data-mega]').forEach(trigger => {
        const targetId = trigger.dataset.mega;
        const target = document.getElementById(targetId);
        if (!target) return;

        trigger.addEventListener('mouseenter', (e) => {
            clearTimeout(megaTimer);
            allMegas.forEach(m => { if (m !== target) m.classList.remove('active'); });
            target.classList.add('active');
            if (megaCursor) {
                megaCursor.style.pointerEvents = 'none';
                megaCursor.style.left = e.clientX + 'px';
                megaCursor.style.top = e.clientY + 'px';
                megaCursor.classList.add('active');
                cursorFollowing = true;
                clearTimeout(cursorTimer);
            }
        });

        target.addEventListener('mousemove', (e) => {
            if (!cursorFollowing || !megaCursor) return;
            megaCursor.style.left = e.clientX + 'px';
            megaCursor.style.top = e.clientY + 'px';
        });

        const grid = target.querySelector('.mega-grid');
        if (grid) {
            grid.addEventListener('mouseenter', () => { parkCursor(); });
        }

        target.addEventListener('mouseenter', () => { clearTimeout(megaTimer); });
        trigger.addEventListener('mouseleave', () => { megaTimer = setTimeout(closeMegas, 250); });
        target.addEventListener('mouseleave', () => {
            megaTimer = setTimeout(closeMegas, 250);
            if (megaCursor) megaCursor.classList.remove('active');
            cursorFollowing = false;
        });
    });

    document.querySelectorAll('.mega-close').forEach(b => b.addEventListener('click', closeMegas));
    document.addEventListener('keydown', e => {
        if (e.key === 'Escape') {
            closeMegas();
            closeSearch();
            closeUtilityPanel();
        }
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
       PRODUCT TABS (inside By Products mode)
       ============================================ */
    const tabs = document.querySelectorAll('.product-tab');
    const panels = document.querySelectorAll('.product-panel');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const targetId = tab.dataset.tab;
            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');
            panels.forEach(p => {
                p.classList.remove('active');
                p.style.display = 'none';
                p.style.opacity = '0';
            });
            const targetPanel = document.getElementById(targetId);
            if (targetPanel) {
                targetPanel.style.display = 'block';
                targetPanel.offsetHeight;
                targetPanel.classList.add('active');
                targetPanel.style.opacity = '1';
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

        // --- Hero parallax on scroll out ---
        gsap.to('.hero-content', {
            y: -60, opacity: 0.3, ease: 'none',
            scrollTrigger: { trigger: '.s-hero', start: 'top top', end: 'bottom top', scrub: 0.5 }
        });
        gsap.to('.scroll-cue', {
            opacity: 0, y: -20,
            scrollTrigger: { trigger: '.s-hero', start: '15% top', end: '30% top', scrub: true }
        });

        // --- Section 2: Value Proposition ---
        gsap.fromTo('#valueHeader', { opacity: 0, y: 50 },
            { opacity: 1, y: 0, duration: 1, ease: 'power3.out',
              scrollTrigger: { trigger: '#sValue', start: 'top 75%' } });

        gsap.utils.toArray('.value-card').forEach((card, i) => {
            gsap.fromTo(card, { opacity: 0, y: 40 },
                { opacity: 1, y: 0, duration: 0.8, delay: i * 0.08, ease: 'power3.out',
                  scrollTrigger: { trigger: card, start: 'top 90%' } });
        });

        // --- Section 3: Products ---
        gsap.fromTo('#productsHeader', { opacity: 0, y: 50 },
            { opacity: 1, y: 0, duration: 1, ease: 'power3.out',
              scrollTrigger: { trigger: '#sProducts', start: 'top 75%' } });

        // --- Section 4: Global ---
        gsap.fromTo('#globalLeft', { opacity: 0, x: -40 },
            { opacity: 1, x: 0, duration: 1.2, ease: 'power3.out',
              scrollTrigger: { trigger: '#sGlobal', start: 'top 70%' } });
        gsap.fromTo('#globalMap', { opacity: 0, scale: 0.92 },
            { opacity: 1, scale: 1, duration: 1, delay: 0.2, ease: 'back.out(1.5)',
              scrollTrigger: { trigger: '#sGlobal', start: 'top 65%' } });
        gsap.utils.toArray('.g-stat').forEach((s, i) => {
            gsap.fromTo(s, { opacity: 0, y: 30 },
                { opacity: 1, y: 0, duration: 0.8, delay: 0.3 + i * 0.15, ease: 'power3.out',
                  scrollTrigger: { trigger: '#sGlobal', start: 'top 65%' } });
        });
        gsap.utils.toArray('.g-tag').forEach((tag, i) => {
            gsap.fromTo(tag, { opacity: 0, scale: 0.7 },
                { opacity: 1, scale: 1, duration: 0.4, delay: 0.5 + i * 0.03, ease: 'back.out(2)',
                  scrollTrigger: { trigger: '.global-tags', start: 'top 90%' } });
        });

        // --- Map Pins staggered ---
        gsap.utils.toArray('.map-pin').forEach((pin, i) => {
            gsap.fromTo(pin, { scale: 0, opacity: 0 },
                { scale: 1, opacity: 1, duration: 0.5, delay: 0.8 + i * 0.1, ease: 'back.out(2)',
                  scrollTrigger: { trigger: '#globalMap', start: 'top 70%' } });
        });

        // --- Section 5: CSR ---
        gsap.fromTo('#csrContent', { opacity: 0, x: -40 },
            { opacity: 1, x: 0, duration: 1.2, ease: 'power3.out',
              scrollTrigger: { trigger: '#sCSR', start: 'top 70%' } });
        gsap.fromTo('#csrVisual', { opacity: 0, x: 40 },
            { opacity: 1, x: 0, duration: 1.2, delay: 0.2, ease: 'power3.out',
              scrollTrigger: { trigger: '#sCSR', start: 'top 65%' } });

        // --- Section 6: Events ---
        gsap.fromTo('#eventsHeader', { opacity: 0, y: 50 },
            { opacity: 1, y: 0, duration: 1, ease: 'power3.out',
              scrollTrigger: { trigger: '#sEvents', start: 'top 75%' } });
        gsap.utils.toArray('.event-card').forEach((card, i) => {
            gsap.fromTo(card, { opacity: 0, y: 30 },
                { opacity: 1, y: 0, duration: 0.8, delay: i * 0.12, ease: 'power3.out',
                  scrollTrigger: { trigger: card, start: 'top 90%' } });
        });

        // --- Section 7: Investor ---
        gsap.fromTo('#investorHeader', { opacity: 0, y: 50 },
            { opacity: 1, y: 0, duration: 1, ease: 'power3.out',
              scrollTrigger: { trigger: '#sInvestor', start: 'top 75%' } });
        gsap.utils.toArray('.investor-card').forEach((card, i) => {
            gsap.fromTo(card, { opacity: 0, y: 30 },
                { opacity: 1, y: 0, duration: 0.8, delay: i * 0.12, ease: 'power3.out',
                  scrollTrigger: { trigger: card, start: 'top 90%' } });
        });

        // --- CTA ---
        gsap.fromTo('#ctaEyebrow', { opacity: 0, y: 20 },
            { opacity: 1, y: 0, duration: 0.8,
              scrollTrigger: { trigger: '#sCTA', start: 'top 75%' } });
        gsap.fromTo('#ctaTitle', { opacity: 0, y: 40 },
            { opacity: 1, y: 0, duration: 1.2, ease: 'power3.out',
              scrollTrigger: { trigger: '#sCTA', start: 'top 70%' } });
        gsap.fromTo('#ctaDesc', { opacity: 0, y: 30 },
            { opacity: 1, y: 0, duration: 1, delay: 0.15,
              scrollTrigger: { trigger: '#sCTA', start: 'top 65%' } });
        gsap.fromTo('#ctaActions', { opacity: 0, y: 20 },
            { opacity: 1, y: 0, duration: 0.8, delay: 0.3,
              scrollTrigger: { trigger: '#sCTA', start: 'top 60%' } });

        // --- Footer ---
        gsap.fromTo('.s-footer-top', { opacity: 0, y: 40 },
            { opacity: 1, y: 0, duration: 0.8, ease: 'power3.out',
              scrollTrigger: { trigger: '.s-footer', start: 'top 85%' } });
    }

});
