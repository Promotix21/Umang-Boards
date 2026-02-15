/* ============================================
   UMANG BOARDS v3 — AWARDS-LEVEL
   3D Earth Globe + Electron Dots + Flicker Grid
   ============================================ */
document.addEventListener('DOMContentLoaded', () => {

    /* ---- LENIS SMOOTH SCROLL ---- */
    const lenis = new Lenis({
        duration: 1.2,
        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
        smoothWheel: true,
        touchMultiplier: 2,
        autoRaf: false,
    });

    /* ---- LOADER WITH PROGRESS BAR ---- */
    const loaderBar = document.getElementById('loaderBar');
    let loadProgress = 0;
    let loadComplete = false;

    const progressInterval = setInterval(() => {
        if (loadComplete) {
            loadProgress = 100;
            loaderBar.style.width = '100%';
            clearInterval(progressInterval);
            setTimeout(() => document.body.classList.add('loaded'), 600);
        } else {
            // Simulate progress that slows near 90%
            const remaining = 90 - loadProgress;
            loadProgress += remaining * 0.06;
            loaderBar.style.width = loadProgress + '%';
        }
    }, 50);

    const markLoaded = () => { loadComplete = true; };
    if (document.readyState === 'complete') markLoaded();
    else window.addEventListener('load', markLoaded);

    /* ---- CURSOR ---- */
    const cur = document.getElementById('cursor'), dot = document.getElementById('cursorDot');
    if (cur && dot && window.matchMedia('(hover: hover)').matches) {
        let mx = 0, my = 0, cx = 0, cy = 0;
        document.addEventListener('mousemove', e => { mx = e.clientX; my = e.clientY; dot.style.left = mx + 'px'; dot.style.top = my + 'px'; });
        (function loop() { cx += (mx - cx) * 0.12; cy += (my - cy) * 0.12; cur.style.left = cx + 'px'; cur.style.top = cy + 'px'; requestAnimationFrame(loop); })();
        document.querySelectorAll('[data-cursor="hover"]').forEach(el => {
            el.addEventListener('mouseenter', () => { cur.classList.add('hover'); dot.classList.add('hover'); });
            el.addEventListener('mouseleave', () => { cur.classList.remove('hover'); dot.classList.remove('hover'); });
        });
    }

    /* ---- HEADER SCROLL ---- */
    const header = document.getElementById('header'), topBar = document.querySelector('.top-bar'), tbH = topBar ? topBar.offsetHeight : 34;
    // After the intro animation finishes, clear it so JS scroll logic can control transform
    if (topBar) {
        topBar.addEventListener('animationend', () => {
            topBar.style.animation = 'none';
            topBar.style.transform = 'translateY(0)';
        }, { once: true });
    }
    window.addEventListener('scroll', () => {
        const y = window.scrollY;
        const shouldBeSticky = y > 80;
        header.classList.toggle('scrolled', shouldBeSticky);
        if (topBar) {
            if (shouldBeSticky) {
                // Hide top bar when sticky
                topBar.style.transform = 'translateY(-100%)';
                topBar.style.transition = 'transform 0.4s ease';
                header.style.top = '0';
            } else {
                // Show top bar when not sticky
                topBar.style.transform = 'translateY(0)';
                header.style.top = tbH + 'px';
            }
        }
    }, { passive: true });

    /* ---- MEGA MENU LOGIC (HOVER & CURSOR) ---- */
    const allMegas = document.querySelectorAll('.mega-menu');
    const megaCursor = document.getElementById('megaCursor');
    let megaTimer = null;
    let cursorTimer = null;
    let cursorFollowing = false; // true = cursor tracks mouse, false = cursor is parked

    function closeMegas() {
        allMegas.forEach(m => m.classList.remove('active'));
        if (megaCursor) {
            megaCursor.classList.remove('active');
            megaCursor.style.pointerEvents = 'none';
        }
        cursorFollowing = false;
        clearTimeout(cursorTimer);
    }

    // Park the cursor: stop following, make clickable, start fade-out timer
    function parkCursor() {
        cursorFollowing = false;
        if (megaCursor) megaCursor.style.pointerEvents = 'auto'; // Now clickable
        clearTimeout(cursorTimer);
        cursorTimer = setTimeout(() => {
            if (megaCursor) megaCursor.classList.remove('active');
        }, 1000); // 1s fade-out
    }

    // Cursor Click to Close
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

        // Open on trigger hover — start following
        trigger.addEventListener('mouseenter', (e) => {
            clearTimeout(megaTimer);
            allMegas.forEach(m => {
                if (m !== target) m.classList.remove('active');
            });
            target.classList.add('active');

            // Show cursor and start following (pointer-events off so menu gets mousemove)
            if (megaCursor) {
                megaCursor.style.pointerEvents = 'none';
                megaCursor.style.left = e.clientX + 'px';
                megaCursor.style.top = e.clientY + 'px';
                megaCursor.classList.add('active');
                cursorFollowing = true;
                clearTimeout(cursorTimer);
            }
        });

        // Follow mouse inside the mega menu (until it reaches .mega-grid)
        target.addEventListener('mousemove', (e) => {
            if (!cursorFollowing || !megaCursor) return;
            megaCursor.style.left = e.clientX + 'px';
            megaCursor.style.top = e.clientY + 'px';
        });

        // Stop following when mouse reaches submenu content
        const grid = target.querySelector('.mega-grid');
        if (grid) {
            grid.addEventListener('mouseenter', () => {
                parkCursor();
            });
        }

        // Keep open when hovering the menu itself
        target.addEventListener('mouseenter', () => {
            clearTimeout(megaTimer);
        });

        // Close when leaving trigger (with delay)
        trigger.addEventListener('mouseleave', () => {
            megaTimer = setTimeout(closeMegas, 250);
        });

        // Close when leaving menu (with delay)
        target.addEventListener('mouseleave', () => {
            megaTimer = setTimeout(closeMegas, 250);
            if (megaCursor) megaCursor.classList.remove('active');
            cursorFollowing = false;
        });
    });

    document.querySelectorAll('.mega-close').forEach(b => b.addEventListener('click', closeMegas));
    document.addEventListener('keydown', e => { if (e.key === 'Escape') closeMegas(); });

    /* ---- MOBILE MENU ---- */
    const menuToggle = document.getElementById('menuToggle'), mobileNav = document.getElementById('mobileNav');
    if (menuToggle && mobileNav) {
        menuToggle.addEventListener('click', () => {
            const a = mobileNav.classList.toggle('active');
            menuToggle.classList.toggle('active');
            if (a) { lenis.stop(); }
            else { lenis.start(); }
            // Close all accordions when menu closes
            if (!a) mobileNav.querySelectorAll('.mobile-accordion.active').forEach(ac => ac.classList.remove('active'));
        });
        // Close mobile nav when a direct link is clicked (not accordion headers)
        mobileNav.querySelectorAll('.mobile-nav-links > li > a, .mobile-accordion-body a').forEach(a => a.addEventListener('click', () => {
            mobileNav.classList.remove('active'); menuToggle.classList.remove('active');
            lenis.start();
        }));
        // Accordion toggle
        mobileNav.querySelectorAll('.mobile-accordion-header').forEach(h => h.addEventListener('click', () => {
            const parent = h.closest('.mobile-accordion');
            const wasActive = parent.classList.contains('active');
            // Close all other accordions
            mobileNav.querySelectorAll('.mobile-accordion.active').forEach(ac => ac.classList.remove('active'));
            // Toggle this one
            if (!wasActive) parent.classList.add('active');
        }));
    }

    /* ---- PARALLAX ---- */
    if (window.innerWidth > 1100) { const orbital = document.querySelector('.hero-orbital'), badge = document.querySelector('.hero-badge'); document.addEventListener('mousemove', e => { const nx = e.clientX / window.innerWidth - 0.5, ny = e.clientY / window.innerHeight - 0.5; if (orbital) { orbital.style.transform = `translate(${nx * 20}px,${ny * 20}px)`; orbital.style.transition = 'transform 0.8s cubic-bezier(0.16,1,0.3,1)'; } if (badge) { badge.style.transform = `translate(${nx * -12}px,${ny * -12}px)`; badge.style.transition = 'transform 1s cubic-bezier(0.16,1,0.3,1)'; } }); }

    /* ---- SLIDESHOW ---- */
    const slides = document.querySelectorAll('.slide'), pBar = document.querySelector('.slideshow-progress-bar');
    let cSlide = 0, dur = 4500, pS = null, afId = null;
    function uProg(ts) { if (!pS) pS = ts; const pct = Math.min(((ts - pS) / dur) * 100, 100); if (pBar) pBar.style.width = pct + '%'; if (pct < 100) afId = requestAnimationFrame(uProg); }
    if (slides.length > 0) { slides[0].classList.add('active'); setTimeout(() => { afId = requestAnimationFrame(uProg); setInterval(() => { const pv = cSlide; cSlide = (cSlide + 1) % slides.length; slides[pv].classList.remove('active'); slides[pv].classList.add('exiting'); slides[cSlide].classList.add('active'); setTimeout(() => slides[pv].classList.remove('exiting'), 1300); pS = null; if (pBar) pBar.style.width = '0%'; cancelAnimationFrame(afId); afId = requestAnimationFrame(uProg); }, dur); }, 3500); }

    /* ---- HERO COUNTERS ---- */
    setTimeout(() => { document.querySelectorAll('.hero-stat-number').forEach(s => { const t = parseInt(s.dataset.target, 10), sx = s.dataset.suffix || '', d = 2200, st = performance.now(); (function tk(n) { const p = Math.min((n - st) / d, 1); s.innerHTML = Math.floor((1 - Math.pow(2, -10 * p)) * t) + '<span class="accent">' + sx + '</span>'; if (p < 1) requestAnimationFrame(tk); })(performance.now()); }); }, 3300);




    /* ============================================
       PHYSICS PARTICLE GRID — Dots with velocity & forces
       Mouse cursor applies repulsion force to particles
       ============================================ */
    const mfCanvas = document.getElementById('magneticField');
    if (mfCanvas && window.matchMedia('(hover: hover)').matches && window.innerWidth > 768) {
        const ctx = mfCanvas.getContext('2d');
        let W, H, mouseX = -9999, mouseY = -9999;
        let lastMouseX = -9999, lastMouseY = -9999;
        let mouseVelocity = 0;
        let fadeOpacity = 0;  // Global fade opacity for smooth transitions
        const GAP = 18;
        const FORCE_RADIUS = 30;       // Radius of mouse influence (much tighter)
        const FORCE_STRENGTH = 0.6;    // How strong the push/pull is
        const FRICTION = 0.94;         // Velocity decay - higher = smoother, slower stop
        const SPRING_STRENGTH = 0.012; // How fast particles return to rest position (slower = more natural)
        let particles = [];

        // Particle class with physics properties
        class Particle {
            constructor(restX, restY) {
                this.restX = restX;  // Original position
                this.restY = restY;
                this.x = restX;      // Current position
                this.y = restY;
                this.vx = 0;         // Velocity X
                this.vy = 0;         // Velocity Y
            }

            applyForce(fx, fy) {
                this.vx += fx;
                this.vy += fy;
            }

            update() {
                // Spring force back to rest position
                const dx = this.restX - this.x;
                const dy = this.restY - this.y;
                this.vx += dx * SPRING_STRENGTH;
                this.vy += dy * SPRING_STRENGTH;

                // Apply friction
                this.vx *= FRICTION;
                this.vy *= FRICTION;

                // Update position
                this.x += this.vx;
                this.y += this.vy;
            }

            draw(ctx, globalFade) {
                // Calculate distance from rest position to determine visual intensity
                const displacement = Math.sqrt(
                    Math.pow(this.x - this.restX, 2) +
                    Math.pow(this.y - this.restY, 2)
                );

                // Base alpha and size
                let alpha = 0.08;
                let size = 0.6;

                // If displaced, make more visible
                if (displacement > 0.5) {
                    const intensity = Math.min(displacement / 12, 1);
                    alpha = 0.1 + intensity * 0.5; // Reduced max opacity
                    size = 0.6 + intensity * 2.0;
                }

                // Apply global fade for smooth transitions
                alpha *= globalFade;

                if (alpha > 0.01) {
                    ctx.beginPath();
                    ctx.arc(this.x, this.y, size, 0, Math.PI * 2);
                    ctx.fillStyle = `rgba(61,96,152,${alpha})`;
                    ctx.fill();
                }
            }
        }

        function initGrid() {
            W = mfCanvas.width = window.innerWidth;
            H = mfCanvas.height = window.innerHeight;
            particles = [];

            const cols = Math.ceil(W / GAP);
            const rows = Math.ceil(H / GAP);

            for (let c = 0; c < cols; c++) {
                const x = c * GAP + GAP * 0.5;
                for (let r = 0; r < rows; r++) {
                    const y = r * GAP + GAP * 0.5;
                    particles.push(new Particle(x, y));
                }
            }
        }

        initGrid();
        window.addEventListener('resize', initGrid);

        // Track mouse velocity for motion detection
        document.addEventListener('mousemove', e => {
            const dx = e.clientX - mouseX;
            const dy = e.clientY - mouseY;
            mouseVelocity = Math.sqrt(dx * dx + dy * dy);
            mouseX = e.clientX;
            mouseY = e.clientY;
            lastMouseX = mouseX;
            lastMouseY = mouseY;
        });

        document.addEventListener('mouseleave', () => {
            mouseX = -9999;
            mouseY = -9999;
            mouseVelocity = 0;
        });

        // Smoothly adjust fade opacity based on velocity
        setInterval(() => {
            mouseVelocity *= 0.7;
            // Smooth fade in/out based on velocity
            const targetFade = mouseVelocity > 0.3 ? 1 : 0;
            fadeOpacity += (targetFade - fadeOpacity) * 0.15; // Smooth easing
        }, 30);

        function animate() {
            ctx.clearRect(0, 0, W, H);

            particles.forEach(p => {
                // Calculate distance to mouse
                const dx = mouseX - p.x;
                const dy = mouseY - p.y;
                const dist = Math.sqrt(dx * dx + dy * dy);

                // Apply repulsion force if within radius
                if (dist < FORCE_RADIUS && dist > 0) {
                    const proximity = 1 - dist / FORCE_RADIUS;
                    // Ease-out cubic for smoother, more natural motion
                    const eased = 1 - Math.pow(1 - proximity, 3);
                    const force = eased * FORCE_STRENGTH;
                    // Normalize direction and apply force (negative = repulsion)
                    const fx = -(dx / dist) * force;
                    const fy = -(dy / dist) * force;
                    p.applyForce(fx, fy);
                }

                p.update();
                p.draw(ctx, fadeOpacity);
            });

            requestAnimationFrame(animate);
        }
        animate();
    }


    /* ============================================
       THREE.JS — EARTH GLOBE (Textured + Dot Grid)
       ============================================ */
    const gC = document.getElementById('globeCanvas');
    if (gC && typeof THREE !== 'undefined') {
        const isMobileGlobe = window.innerWidth <= 768;
        const globeContainer = gC.parentElement;
        const gW = isMobileGlobe ? gC.clientWidth || globeContainer.clientWidth : window.innerWidth;
        const gH = isMobileGlobe ? (gC.clientHeight || 300) : window.innerHeight;

        const scene = new THREE.Scene();
        const cam = new THREE.PerspectiveCamera(50, gW / gH, 0.1, 1000);
        cam.position.z = isMobileGlobe ? 3.2 : 5.0;
        const ren = new THREE.WebGLRenderer({ canvas: gC, alpha: true, antialias: !isMobileGlobe });
        ren.setSize(gW, gH);
        ren.setPixelRatio(Math.min(window.devicePixelRatio, isMobileGlobe ? 1.5 : 2));

        // ---- EARTH GROUP ----
        const earthGroup = new THREE.Group();
        earthGroup.position.set(isMobileGlobe ? 0 : 2.0, 0, 0);
        scene.add(earthGroup);

        // ---- EARTH SPHERE ----
        const R = 1.3;
        const earthGeo = new THREE.SphereGeometry(R, 64, 64);

        // ---- SOLID SEA SPHERE (underneath map) ----
        const seaGeo = new THREE.SphereGeometry(R - 0.001, 64, 64);
        const seaMat = new THREE.MeshPhongMaterial({
            color: 0x1a4d7a, // Deep sea blue
            shininess: 5,
            specular: new THREE.Color(0x111111),
        });
        const sea = new THREE.Mesh(seaGeo, seaMat);
        earthGroup.add(sea);

        // ---- MAP SPHERE (on top, with transparency) ----
        const texLoader = new THREE.TextureLoader();
        const earthMap = texLoader.load('assets/World-Map.png');

        const earthMat = new THREE.MeshPhongMaterial({
            map: earthMap,
            transparent: true, // Allow the sea sphere to show through
            color: 0xffffff, // White so map colors are true
            emissive: 0x000000,
            emissiveIntensity: 0,
            shininess: 2, // Very matte
            specular: new THREE.Color(0x111111), // Almost no specular
        });

        const earth = new THREE.Mesh(earthGeo, earthMat);
        earthGroup.add(earth);

        // ---- ATMOSPHERE GLOW REMOVED ----
        // Removed to show natural blue map colors
        /*
        const atmosGeo = new THREE.SphereGeometry(R * 1.04, 64, 64);
        const atmosMat = new THREE.ShaderMaterial({
            vertexShader: `varying vec3 vN; void main(){ vN=normalize(normalMatrix*normal); gl_Position=projectionMatrix*modelViewMatrix*vec4(position,1.0); }`,
            fragmentShader: `varying vec3 vN; void main(){ float i=pow(0.55-dot(vN,vec3(0,0,1)),2.6); gl_FragColor=vec4(1.0, 0.8, 0.4, 1.0)*i*0.8; }`, // Golden glow
            side: THREE.BackSide, blending: THREE.AdditiveBlending, transparent: true,
        });
        const atmos = new THREE.Mesh(atmosGeo, atmosMat);
        earthGroup.add(atmos);
        */

        // ---- LOCATION DOTS (61+ Countries) ----
        // Lat, Lon coordinates for ~60 representative countries
        const countries = [
            { lat: 20.59, lon: 78.96 }, { lat: 15.87, lon: 100.99 }, { lat: 23.42, lon: 53.84 }, { lat: 23.88, lon: 45.07 }, { lat: 25.35, lon: 51.18 }, // India, Thai, UAE, Saudi, Qatar
            { lat: -0.02, lon: 37.90 }, { lat: -30.55, lon: 22.93 }, { lat: 37.09, lon: -95.71 }, { lat: 56.13, lon: -106.34 }, { lat: -14.23, lon: -51.92 }, // Kenya, SA, USA, Can, Bra
            { lat: 51.16, lon: 10.45 }, { lat: 46.22, lon: 2.21 }, { lat: 55.37, lon: -3.43 }, { lat: 41.87, lon: 12.56 }, { lat: 40.46, lon: -3.74 }, // Ger, Fra, UK, Ita, Spa
            { lat: 35.86, lon: 104.19 }, { lat: 36.20, lon: 138.25 }, { lat: -25.27, lon: 133.77 }, { lat: 61.52, lon: 105.31 }, { lat: 38.96, lon: 35.24 }, // Chi, Jap, Aus, Rus, Tur
            { lat: 9.08, lon: 8.67 }, { lat: 26.82, lon: 30.80 }, { lat: 33.93, lon: 67.70 }, { lat: 23.68, lon: 90.35 }, { lat: 7.87, lon: 80.77 }, // Nig, Egy, Afg, Ban, SL
            { lat: 28.39, lon: 84.12 }, { lat: 21.91, lon: 95.95 }, { lat: 14.05, lon: 108.27 }, { lat: -0.78, lon: 113.92 }, { lat: 3.13, lon: 101.68 }, // Nep, Mya, Vie, Ind, Mal
            { lat: 12.87, lon: 121.77 }, { lat: 35.90, lon: 127.76 }, { lat: 48.01, lon: 66.92 }, { lat: 51.91, lon: 19.14 }, { lat: 46.81, lon: 8.22 }, // Phi, SK, Kaz, Pol, Swi
            { lat: 52.13, lon: 5.29 }, { lat: 50.50, lon: 4.46 }, { lat: 47.16, lon: 19.50 }, { lat: 39.07, lon: 21.82 }, { lat: 31.04, lon: 34.85 }, // Net, Bel, Hun, Gre, Isr
            { lat: 33.22, lon: 43.67 }, { lat: 32.42, lon: 53.68 }, { lat: 29.31, lon: 47.48 }, { lat: 26.06, lon: 50.55 }, { lat: 23.58, lon: 58.38 }, // Ira, Ira, Kuw, Bah, Oma
            { lat: 15.55, lon: 48.51 }, { lat: 8.98, lon: 39.78 }, { lat: -6.36, lon: 34.88 }, { lat: 0.34, lon: 32.29 }, { lat: 9.14, lon: 40.48 }, // Yem, Eth, Tan, Uga, Som
            { lat: 36.75, lon: 3.04 }, { lat: 31.79, lon: -7.09 }, { lat: 5.55, lon: -0.19 }, { lat: -40.90, lon: 174.88 }, { lat: -35.67, lon: -71.54 }, // Alg, Mor, Gha, NZ, Chi
            { lat: 4.57, lon: -74.29 }, { lat: -9.18, lon: -75.01 }, { lat: 20.59, lon: -78.96 }, { lat: 18.73, lon: -70.16 }, { lat: -1.83, lon: -78.18 }  // Col, Per, Cub, DR, Ecu
        ];

        function latLonToVector3(lat, lon, r) {
            // Convert lat/lon to radians
            const phi = (90 - lat) * (Math.PI / 180); // Polar angle from north pole
            const theta = (lon + 180) * (Math.PI / 180); // Azimuthal angle

            // Spherical to Cartesian coordinates
            const x = -r * Math.sin(phi) * Math.cos(theta);
            const z = r * Math.sin(phi) * Math.sin(theta);
            const y = r * Math.cos(phi);

            return new THREE.Vector3(x, y, z);
        }

        const dotGeo = new THREE.SphereGeometry(0.015, 8, 8); // Slightly bigger dots
        const dotMat = new THREE.MeshBasicMaterial({
            color: 0xffd700,
            transparent: true,
            opacity: 0.7
        }); // Gold dots with reduced opacity

        countries.forEach(c => {
            const pos = latLonToVector3(c.lat, c.lon, R);
            const dot = new THREE.Mesh(dotGeo, dotMat);
            dot.position.copy(pos);
            earthGroup.add(dot);
        });

        // ---- ANIMATED ARC CONNECTIONS ----
        const arcObjects = []; // Track all arcs for animation
        const electrons = [];

        {
            const arcSegments = 60;

            function createArc(startLatLon, endLatLon, height, color, delay) {
                const start = latLonToVector3(startLatLon.lat, startLatLon.lon, R);
                const end = latLonToVector3(endLatLon.lat, endLatLon.lon, R);

                const points = [];
                for (let i = 0; i <= arcSegments; i++) {
                    const t = i / arcSegments;
                    const point = new THREE.Vector3().lerpVectors(start, end, t);
                    point.normalize();
                    const elevation = 1 + height * Math.sin(Math.PI * t);
                    point.multiplyScalar(R * elevation);
                    points.push(point);
                }

                const curve = new THREE.CatmullRomCurve3(points);
                const geometry = new THREE.BufferGeometry().setFromPoints(curve.getPoints(arcSegments));
                geometry.setDrawRange(0, 0);
                const material = new THREE.LineBasicMaterial({
                    color: color,
                    transparent: true,
                    opacity: 0.5
                });
                const line = new THREE.Line(geometry, material);
                earthGroup.add(line);

                return {
                    line: line,
                    geometry: geometry,
                    material: material,
                    totalPoints: arcSegments + 1,
                    progress: 0,
                    delay: delay,
                    delayCounter: 0,
                    phase: 'waiting',
                    visibleTimer: 0
                };
            }

            // Connect key trade routes (India as hub)
            const arcColor = 0xC4A265;
            const india = countries[0];

            arcObjects.push(createArc(india, countries[1], 0.04, arcColor, 0));
            arcObjects.push(createArc(india, countries[2], 0.03, arcColor, 30));
            arcObjects.push(createArc(india, countries[5], 0.06, arcColor, 60));
            arcObjects.push(createArc(india, countries[6], 0.08, arcColor, 90));
            arcObjects.push(createArc(india, countries[7], 0.12, arcColor, 120));
            arcObjects.push(createArc(india, countries[10], 0.09, arcColor, 150));
            arcObjects.push(createArc(india, countries[12], 0.08, arcColor, 180));
            arcObjects.push(createArc(india, countries[15], 0.05, arcColor, 210));
            arcObjects.push(createArc(india, countries[16], 0.06, arcColor, 240));
            arcObjects.push(createArc(india, countries[17], 0.07, arcColor, 270));
            arcObjects.push(createArc(india, countries[9], 0.11, arcColor, 300));
            arcObjects.push(createArc(india, countries[29], 0.03, arcColor, 330));
            arcObjects.push(createArc(india, countries[18], 0.06, arcColor, 360));

            // ---- ELECTRON ORBITS (ATOM STYLE) ----
            function createAtomOrbit(orbitR, rotX, rotY, rotZ, color, speed) {
                const group = new THREE.Group();
                const eGeo = new THREE.SphereGeometry(0.04, 8, 8);
                const eMat = new THREE.MeshBasicMaterial({ color: color });
                const eMesh = new THREE.Mesh(eGeo, eMat);
                group.add(eMesh);
                group.rotation.set(rotX, rotY, rotZ);
                return { group, mesh: eMesh, angle: Math.random() * Math.PI * 2, speed: speed, r: orbitR };
            }

            const atomGroup = new THREE.Group();
            atomGroup.position.copy(earthGroup.position);
            scene.add(atomGroup);

            const orbR = R * 1.25;
            const orbColor = 0xffaa00;

            const orb1 = createAtomOrbit(orbR, 1.0, 0.5, 0, orbColor, 0.015);
            const orb2 = createAtomOrbit(orbR, -1.0, 0.5, 0, orbColor, 0.015);
            const orb3 = createAtomOrbit(orbR, 0, 0, 1.57, orbColor, 0.015);

            electrons.push(orb1, orb2, orb3);
            electrons.forEach(e => atomGroup.add(e.group));
        }

        // ---- TILT EARTH AXIS (23.5 degrees like real Earth) ----
        earthGroup.rotation.z = 23.5 * (Math.PI / 180);




        // ---- LIGHTING (Diffused, no shine) ----
        const ambientLight = new THREE.AmbientLight(0xffffff, 0.9); // Higher ambient for even lighting
        scene.add(ambientLight);

        const dir = new THREE.DirectionalLight(0xffffff, 0.3); // Dimmed directional light
        dir.position.set(0, 8, 2); // Light from top
        scene.add(dir);

        const rim = new THREE.DirectionalLight(0xffffff, 0.2); // Subtle rim
        rim.position.set(-3, 0, -5);
        scene.add(rim);

        // ---- LOOP ----
        let gRot = 0;
        function anim() {
            // GLOBE ROTATION (west to east)
            gRot += 0.0015;
            earthGroup.rotation.y = gRot;

            // ANIMATE ARCS - progressive draw, hold, fade, reset
            arcObjects.forEach(arc => {
                if (arc.phase === 'waiting') {
                    arc.delayCounter++;
                    if (arc.delayCounter >= arc.delay) {
                        arc.phase = 'drawing';
                        arc.progress = 0;
                    }
                } else if (arc.phase === 'drawing') {
                    arc.progress += 1.2; // Speed of drawing
                    const count = Math.min(Math.floor(arc.progress), arc.totalPoints);
                    arc.geometry.setDrawRange(0, count);
                    if (count >= arc.totalPoints) {
                        arc.phase = 'visible';
                        arc.visibleTimer = 0;
                    }
                } else if (arc.phase === 'visible') {
                    arc.visibleTimer++;
                    if (arc.visibleTimer > 120) { // Hold visible for ~2 seconds
                        arc.phase = 'fading';
                    }
                } else if (arc.phase === 'fading') {
                    arc.material.opacity -= 0.01;
                    if (arc.material.opacity <= 0) {
                        arc.material.opacity = 0.5;
                        arc.geometry.setDrawRange(0, 0);
                        arc.phase = 'waiting';
                        arc.delayCounter = 0;
                        arc.progress = 0;
                    }
                }
            });

            // ATOM ELECTRONS
            electrons.forEach(e => {
                e.angle += e.speed;
                e.mesh.position.set(
                    Math.cos(e.angle) * e.r,
                    Math.sin(e.angle) * e.r,
                    0
                );
            });

            ren.render(scene, cam);
            requestAnimationFrame(anim);
        }
        anim();

        window.addEventListener('resize', () => {
            const mobile = window.innerWidth <= 768;
            const rW = mobile ? (gC.clientWidth || globeContainer.clientWidth) : window.innerWidth;
            const rH = mobile ? (gC.clientHeight || 300) : window.innerHeight;
            cam.aspect = rW / rH;
            cam.updateProjectionMatrix();
            ren.setSize(rW, rH);
        });
    }


    /* ============================================
       GSAP SCROLL ANIMATIONS
       ============================================ */
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);

        // Sync Lenis with GSAP ScrollTrigger
        lenis.on('scroll', ScrollTrigger.update);
        gsap.ticker.add((time) => { lenis.raf(time * 1000); });
        gsap.ticker.lagSmoothing(0);

        gsap.fromTo('#legacyEyebrow', { opacity: 0, x: -30 }, { opacity: 1, x: 0, duration: 1, scrollTrigger: { trigger: '#sLegacy', start: 'top 80%', toggleActions: 'play none none reverse' } });
        gsap.fromTo('#legacyTitle', { opacity: 0, y: 50 }, { opacity: 1, y: 0, duration: 1.2, ease: 'power3.out', scrollTrigger: { trigger: '#sLegacy', start: 'top 70%', toggleActions: 'play none none reverse' } });
        gsap.fromTo('#legacyBody', { opacity: 0, y: 30 }, { opacity: 1, y: 0, duration: 1, delay: 0.2, ease: 'power3.out', scrollTrigger: { trigger: '#sLegacy', start: 'top 60%', toggleActions: 'play none none reverse' } });
        gsap.fromTo('#globeCaption', { opacity: 0, x: 40 }, { opacity: 1, x: 0, duration: 1, delay: 0.4, scrollTrigger: { trigger: '#sLegacy', start: 'top 50%', toggleActions: 'play none none reverse' } });

        // BG color transitions
        ScrollTrigger.create({ trigger: '#sLegacy', start: 'top 60%', onEnter: () => { document.querySelector('.s-legacy').style.backgroundColor = '#EDEAE4'; }, onLeaveBack: () => { document.querySelector('.s-legacy').style.backgroundColor = ''; } });
        ScrollTrigger.create({ trigger: '#sCerts', start: 'top 60%', onEnter: () => { document.querySelector('.s-certs').style.backgroundColor = '#EEF1F6'; }, onLeaveBack: () => { document.querySelector('.s-certs').style.backgroundColor = ''; } });
        ScrollTrigger.create({ trigger: '#sSegments', start: 'top 60%', onEnter: () => { document.querySelector('.s-segments').style.backgroundColor = '#E8E5DE'; }, onLeaveBack: () => { document.querySelector('.s-segments').style.backgroundColor = ''; } });

        // Bento scale-up
        gsap.fromTo('#impactHeader', { opacity: 0, y: 50 }, { opacity: 1, y: 0, duration: 1, ease: 'power3.out', scrollTrigger: { trigger: '#sImpact', start: 'top 75%' } });
        gsap.utils.toArray('.bento-card, .bento-featured').forEach((c, i) => {
            gsap.fromTo(c, { opacity: 0, scale: 0.8, y: 50 }, { opacity: 1, scale: 1, y: 0, duration: 1, delay: i * 0.1, ease: 'back.out(1.7)', scrollTrigger: { trigger: c, start: 'top 90%', onEnter: () => c.classList.add('is-visible') } });
        });

        gsap.fromTo('#certsHeader', { opacity: 0, y: 50 }, { opacity: 1, y: 0, duration: 1, ease: 'power3.out', scrollTrigger: { trigger: '#sCerts', start: 'top 75%' } });
        gsap.utils.toArray('.cert-bento').forEach((c, i) => {
            gsap.fromTo(c, { opacity: 0, scale: 0.8, y: 50 }, { opacity: 1, scale: 1, y: 0, duration: 1, delay: i * 0.12, ease: 'back.out(1.7)', scrollTrigger: { trigger: c, start: 'top 90%', onEnter: () => c.classList.add('is-visible') } });
        });

        gsap.fromTo('#segmentsHeader', { opacity: 0, y: 50 }, { opacity: 1, y: 0, duration: 1, ease: 'power3.out', scrollTrigger: { trigger: '#sSegments', start: 'top 75%' } });
        gsap.utils.toArray('.seg-card').forEach((c, i) => {
            gsap.fromTo(c, { opacity: 0, scale: 0.8, y: 60 }, { opacity: 1, scale: 1, y: 0, duration: 1.1, delay: i * 0.15, ease: 'back.out(1.7)', scrollTrigger: { trigger: c, start: 'top 90%' } });
        });
        gsap.fromTo('#segStrip', { opacity: 0, y: 30 }, { opacity: 1, y: 0, duration: 0.8, ease: 'power3.out', scrollTrigger: { trigger: '#segStrip', start: 'top 90%' } });

        /* ============================================
           S4–S8 GSAP SCROLL ANIMATIONS
           Paste inside the existing GSAP if-block
           ============================================ */

        // S4 — Manufacturing hero text
        gsap.fromTo('#mfgEyebrow', { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.8, scrollTrigger: { trigger: '#sMfg', start: 'top 60%' } });
        gsap.fromTo('#mfgTitle', { opacity: 0, y: 40 }, { opacity: 1, y: 0, duration: 1.2, ease: 'power3.out', scrollTrigger: { trigger: '#sMfg', start: 'top 55%' } });
        gsap.fromTo('#mfgSub', { opacity: 0, y: 30 }, { opacity: 1, y: 0, duration: 1, delay: 0.2, scrollTrigger: { trigger: '#sMfg', start: 'top 50%' } });

        // S4 — Mfg bento cards
        gsap.utils.toArray('.mfg-card').forEach((c, i) => {
            gsap.fromTo(c, { opacity: 0, scale: 0.82, y: 50 }, {
                opacity: 1, scale: 1, y: 0, duration: 1, delay: i * 0.12, ease: 'back.out(1.7)',
                scrollTrigger: { trigger: c, start: 'top 90%', onEnter: () => c.classList.add('is-visible') }
            });
        });

        // S4 BG color
        ScrollTrigger.create({
            trigger: '.s-mfg-features', start: 'top 60%',
            onEnter: () => { document.querySelector('.s-mfg-features').style.backgroundColor = '#F0EDE7'; },
            onLeaveBack: () => { document.querySelector('.s-mfg-features').style.backgroundColor = ''; }
        });

        // S5 — Global
        gsap.fromTo('#globalLeft', { opacity: 0, x: -40 }, { opacity: 1, x: 0, duration: 1.2, ease: 'power3.out', scrollTrigger: { trigger: '#sGlobal', start: 'top 70%' } });
        gsap.fromTo('#globalMap', { opacity: 0, scale: 0.9 }, { opacity: 1, scale: 1, duration: 1, delay: 0.2, ease: 'back.out(1.5)', scrollTrigger: { trigger: '#sGlobal', start: 'top 65%' } });

        gsap.utils.toArray('.sg-stat').forEach((s, i) => {
            gsap.fromTo(s, { opacity: 0, y: 30 }, { opacity: 1, y: 0, duration: 0.8, delay: 0.3 + i * 0.15, ease: 'power3.out', scrollTrigger: { trigger: '#sGlobal', start: 'top 65%' } });
        });

        // S6 — Milestones
        gsap.fromTo('#msHeader', { opacity: 0, y: 50 }, { opacity: 1, y: 0, duration: 1, ease: 'power3.out', scrollTrigger: { trigger: '#sMs', start: 'top 75%' } });

        gsap.utils.toArray('.ms-item').forEach((m, i) => {
            gsap.fromTo(m, { opacity: 0, y: 40 }, { opacity: 1, y: 0, duration: 0.8, delay: i * 0.08, ease: 'power3.out', scrollTrigger: { trigger: '#sMs', start: 'top 65%' } });
        });

        // Milestone nav buttons
        const msT = document.getElementById('msTrack');
        const msLb = document.getElementById('msL');
        const msRb = document.getElementById('msR');
        if (msT && msLb && msRb) {
            msLb.addEventListener('click', () => msT.scrollBy({ left: -300, behavior: 'smooth' }));
            msRb.addEventListener('click', () => msT.scrollBy({ left: 300, behavior: 'smooth' }));
        }

        // S6 BG
        ScrollTrigger.create({
            trigger: '#sMs', start: 'top 60%',
            onEnter: () => { document.querySelector('.s-milestones').style.backgroundColor = '#E5E2DA'; },
            onLeaveBack: () => { document.querySelector('.s-milestones').style.backgroundColor = ''; }
        });

        // S7 — CTA
        gsap.fromTo('#ctaEyebrow', { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.8, scrollTrigger: { trigger: '#sCta', start: 'top 75%' } });
        gsap.fromTo('#ctaTitle', { opacity: 0, y: 40 }, { opacity: 1, y: 0, duration: 1.2, ease: 'power3.out', scrollTrigger: { trigger: '#sCta', start: 'top 70%' } });
        gsap.fromTo('#ctaBody', { opacity: 0, y: 30 }, { opacity: 1, y: 0, duration: 1, delay: 0.15, scrollTrigger: { trigger: '#sCta', start: 'top 65%' } });
        gsap.fromTo('#ctaActions', { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.8, delay: 0.3, scrollTrigger: { trigger: '#sCta', start: 'top 60%' } });

        // Hero parallax on scroll-out
        gsap.to('.hero-content', {
            y: -60, opacity: 0.3, ease: 'none',
            scrollTrigger: { trigger: '.hero', start: 'top top', end: 'bottom top', scrub: 0.5 }
        });
        gsap.to('.hero-visual', {
            y: -40, ease: 'none',
            scrollTrigger: { trigger: '.hero', start: 'top top', end: 'bottom top', scrub: 0.5 }
        });
        gsap.to('.scroll-indicator', {
            opacity: 0, y: -20,
            scrollTrigger: { trigger: '.hero', start: '15% top', end: '30% top', scrub: true }
        });

        // S5 — Global country tag wave
        gsap.utils.toArray('.sg-tag').forEach((tag, i) => {
            gsap.fromTo(tag, { opacity: 0, scale: 0.7 },
                { opacity: 1, scale: 1, duration: 0.4, delay: 0.5 + i * 0.03, ease: 'back.out(2)',
                  scrollTrigger: { trigger: '.s-global-tags', start: 'top 90%' } });
        });

        // S8 — Footer reveal
        gsap.fromTo('.s-footer-top', { opacity: 0, y: 40 },
            { opacity: 1, y: 0, duration: 0.8, ease: 'power3.out',
              scrollTrigger: { trigger: '.s-footer', start: 'top 85%' } });

    }


    /* ---- MANUFACTURING PARTICLES (DARK WAVE - ADAPTED FOR LIGHT BG) ---- */
    const initMfgParticles = () => {
        const canvas = document.getElementById('mfg-particles');
        const container = document.querySelector('.s-mfg-features');
        if (!canvas || !container) return;

        const scene = new THREE.Scene();
        // Clear background color so CSS background shows
        // scene.background = null; 

        const camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 10, 5000);
        camera.position.set(0, 400, 1200);
        camera.lookAt(0, 0, 0);

        const renderer = new THREE.WebGLRenderer({ canvas, antialias: true, alpha: true, powerPreference: "high-performance" });
        renderer.setSize(container.offsetWidth, container.offsetHeight);
        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

        // Shader Code
        const vertexShader = `
            uniform float uTime; uniform float uPixelRatio; uniform float uSize; uniform vec2 uMouse;
            attribute float aScale; attribute vec3 aRandomness;
            varying vec3 vColor; varying float vAlpha;
            vec3 mod289(vec3 x){return x-floor(x*(1.0/289.0))*289.0;} vec2 mod289(vec2 x){return x-floor(x*(1.0/289.0))*289.0;} vec3 permute(vec3 x){return mod289(((x*34.0)+1.0)*x);}
            float snoise(vec2 v){ const vec4 C=vec4(0.211324865405187,0.366025403784439,-0.577350269189626,0.024390243902439); vec2 i=floor(v+dot(v,C.yy)); vec2 x0=v-i+dot(i,C.xx); vec2 i1; i1=(x0.x>x0.y)?vec2(1.0,0.0):vec2(0.0,1.0); vec4 x12=x0.xyxy+C.xxzz; x12.xy-=i1; i=mod289(i); vec3 p=permute(permute(i.y+vec3(0.0,i1.y,1.0))+i.x+vec3(0.0,i1.x,1.0)); vec3 m=max(0.5-vec3(dot(x0,x0),dot(x12.xy,x12.xy),dot(x12.zw,x12.zw)),0.0); m=m*m; m=m*m; vec3 x=2.0*fract(p*C.www)-1.0; vec3 h=abs(x)-0.5; vec3 ox=floor(x+0.5); vec3 a0=x-ox; m*=1.79284291400159-0.85373472095314*(a0*a0+h*h); vec3 g; g.x=a0.x*x0.x+h.x*x0.y; g.yz=a0.yz*x12.xz+h.yz*x12.yw; return 130.0*dot(m,g); }
            void main() {
                vec4 modelPosition = modelMatrix * vec4(position, 1.0);
                float speed = 20.0; float flowOffset = uTime * speed; float width = 3000.0;
                modelPosition.x -= flowOffset; modelPosition.x = mod(modelPosition.x + width * 0.5, width) - width * 0.5;
                float noiseFreq = 0.0015; float noiseAmp = 80.0;
                float elevation = snoise(vec2(modelPosition.x * noiseFreq, modelPosition.z * noiseFreq * 0.5 + uTime * 0.1)) * noiseAmp;
                elevation += sin(modelPosition.x * 0.01 + uTime * 0.5) * 10.0;
                float distToMouse = distance(vec2(modelPosition.x, modelPosition.z), vec2(uMouse.x * 1000.0, uMouse.y * 500.0));
                float mouseEffect = smoothstep(600.0, 0.0, distToMouse);
                elevation -= mouseEffect * 100.0 * sin(uTime * 5.0);
                modelPosition.y += elevation + aRandomness.y * 20.0;
                vec4 viewPosition = viewMatrix * modelPosition;
                gl_Position = projectionMatrix * viewPosition;
                gl_PointSize = uSize * aScale * uPixelRatio; gl_PointSize *= (1.0 / - viewPosition.z);
                float elevationNormal = (elevation + noiseAmp) / (noiseAmp * 2.0);
                
                // Dark colors for light background
                vec3 colorDeep = vec3(0.05, 0.1, 0.25); // Dark Navy
                vec3 colorHigh = vec3(0.77, 0.63, 0.4); // Gold (#C4A265)
                
                vColor = mix(colorDeep, colorHigh, elevationNormal * 1.5);
                float edgeFade = 1.0 - smoothstep(width * 0.4, width * 0.5, abs(modelPosition.x));
                vAlpha = edgeFade * (0.6 + elevationNormal * 0.4);
            }
        `;
        const fragmentShader = `
            varying vec3 vColor; varying float vAlpha;
            void main() {
                float strength = distance(gl_PointCoord, vec2(0.5)); strength = 1.0 - strength; strength = pow(strength, 3.0);
                float alpha = vAlpha * strength;
                if(alpha < 0.01) discard;
                gl_FragColor = vec4(vColor, alpha);
            }
        `;

        const geometry = new THREE.BufferGeometry();
        const count = 6000; // Increased density
        const positions = new Float32Array(count * 3);
        const randomness = new Float32Array(count * 3);
        const scales = new Float32Array(count);
        for (let i = 0; i < count; i++) {
            const i3 = i * 3;
            positions[i3] = (Math.random() - 0.5) * 3000;
            positions[i3 + 1] = 0;
            positions[i3 + 2] = (Math.random() - 0.5) * 1500;
            randomness[i3] = Math.random(); randomness[i3 + 1] = Math.random(); randomness[i3 + 2] = Math.random();
            scales[i] = Math.random();
        }
        geometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));
        geometry.setAttribute('aRandomness', new THREE.BufferAttribute(randomness, 3));
        geometry.setAttribute('aScale', new THREE.BufferAttribute(scales, 1));

        const material = new THREE.ShaderMaterial({
            depthWrite: false,
            blending: THREE.NormalBlending,
            vertexColors: true,
            transparent: true,
            vertexShader, fragmentShader,
            uniforms: { uTime: { value: 0 }, uPixelRatio: { value: Math.min(window.devicePixelRatio, 2) }, uSize: { value: 300.0 }, uMouse: { value: new THREE.Vector2(0, 0) } }
        });
        const points = new THREE.Points(geometry, material);
        scene.add(points);

        let time = 0;
        const mouse = new THREE.Vector2(0, 0);

        window.addEventListener('resize', () => {
            if (!container) return;
            const w = container.offsetWidth;
            const h = container.offsetHeight;
            camera.aspect = w / h; camera.updateProjectionMatrix();
            renderer.setSize(w, h); material.uniforms.uPixelRatio.value = Math.min(window.devicePixelRatio, 2);
        });

        document.addEventListener('mousemove', (e) => {
            mouse.x = (e.clientX / window.innerWidth) * 2 - 1;
            mouse.y = -(e.clientY / window.innerHeight) * 2 + 1;
        });

        const animate = () => {
            const rect = container.getBoundingClientRect();
            if (rect.bottom > 0 && rect.top < window.innerHeight) {
                time += 0.01; material.uniforms.uTime.value = time;
                material.uniforms.uMouse.value.lerp(mouse, 0.05);
                camera.position.x += (mouse.x * 50 - camera.position.x) * 0.01;
                camera.lookAt(0, 0, 0);
                renderer.render(scene, camera);
            }
            requestAnimationFrame(animate);
        };
        animate();
    };
    initMfgParticles();

    /* ---- CERTIFICATIONS PARTICLES (DARK WAVE - BLUE TONES FOR LIGHT BG) ---- */
    const initCertsParticles = () => {
        const canvas = document.getElementById('certs-particles');
        const container = document.querySelector('.s-certs');
        if (!canvas || !container) return;

        const scene = new THREE.Scene();

        const camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 10, 5000);
        camera.position.set(0, 400, 1200);
        camera.lookAt(0, 0, 0);

        const renderer = new THREE.WebGLRenderer({ canvas, antialias: true, alpha: true, powerPreference: "high-performance" });
        renderer.setSize(container.offsetWidth, container.offsetHeight);
        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

        const vertexShader = `
            uniform float uTime; uniform float uPixelRatio; uniform float uSize; uniform vec2 uMouse;
            attribute float aScale; attribute vec3 aRandomness;
            varying vec3 vColor; varying float vAlpha;
            vec3 mod289(vec3 x){return x-floor(x*(1.0/289.0))*289.0;} vec2 mod289(vec2 x){return x-floor(x*(1.0/289.0))*289.0;} vec3 permute(vec3 x){return mod289(((x*34.0)+1.0)*x);}
            float snoise(vec2 v){ const vec4 C=vec4(0.211324865405187,0.366025403784439,-0.577350269189626,0.024390243902439); vec2 i=floor(v+dot(v,C.yy)); vec2 x0=v-i+dot(i,C.xx); vec2 i1; i1=(x0.x>x0.y)?vec2(1.0,0.0):vec2(0.0,1.0); vec4 x12=x0.xyxy+C.xxzz; x12.xy-=i1; i=mod289(i); vec3 p=permute(permute(i.y+vec3(0.0,i1.y,1.0))+i.x+vec3(0.0,i1.x,1.0)); vec3 m=max(0.5-vec3(dot(x0,x0),dot(x12.xy,x12.xy),dot(x12.zw,x12.zw)),0.0); m=m*m; m=m*m; vec3 x=2.0*fract(p*C.www)-1.0; vec3 h=abs(x)-0.5; vec3 ox=floor(x+0.5); vec3 a0=x-ox; m*=1.79284291400159-0.85373472095314*(a0*a0+h*h); vec3 g; g.x=a0.x*x0.x+h.x*x0.y; g.yz=a0.yz*x12.xz+h.yz*x12.yw; return 130.0*dot(m,g); }
            void main() {
                vec4 modelPosition = modelMatrix * vec4(position, 1.0);
                float speed = 20.0; float flowOffset = uTime * speed; float width = 3000.0;
                modelPosition.x -= flowOffset; modelPosition.x = mod(modelPosition.x + width * 0.5, width) - width * 0.5;
                float noiseFreq = 0.0015; float noiseAmp = 80.0;
                float elevation = snoise(vec2(modelPosition.x * noiseFreq, modelPosition.z * noiseFreq * 0.5 + uTime * 0.1)) * noiseAmp;
                elevation += sin(modelPosition.x * 0.01 + uTime * 0.5) * 10.0;
                float distToMouse = distance(vec2(modelPosition.x, modelPosition.z), vec2(uMouse.x * 1000.0, uMouse.y * 500.0));
                float mouseEffect = smoothstep(600.0, 0.0, distToMouse);
                elevation -= mouseEffect * 100.0 * sin(uTime * 5.0);
                modelPosition.y += elevation + aRandomness.y * 20.0;
                vec4 viewPosition = viewMatrix * modelPosition;
                gl_Position = projectionMatrix * viewPosition;
                gl_PointSize = uSize * aScale * uPixelRatio; gl_PointSize *= (1.0 / - viewPosition.z);
                float elevationNormal = (elevation + noiseAmp) / (noiseAmp * 2.0);

                // Blue tones for light certs background
                vec3 colorDeep = vec3(0.24, 0.38, 0.6);  // Brand blue #3D6098
                vec3 colorHigh = vec3(0.65, 0.75, 0.87);  // Brand blue pale #A8C0DC

                vColor = mix(colorDeep, colorHigh, elevationNormal * 1.5);
                float edgeFade = 1.0 - smoothstep(width * 0.4, width * 0.5, abs(modelPosition.x));
                vAlpha = edgeFade * (0.6 + elevationNormal * 0.4);
            }
        `;
        const fragmentShader = `
            varying vec3 vColor; varying float vAlpha;
            void main() {
                float strength = distance(gl_PointCoord, vec2(0.5)); strength = 1.0 - strength; strength = pow(strength, 3.0);
                float alpha = vAlpha * strength;
                if(alpha < 0.01) discard;
                gl_FragColor = vec4(vColor, alpha);
            }
        `;

        const geometry = new THREE.BufferGeometry();
        const count = 5000;
        const positions = new Float32Array(count * 3);
        const randomness = new Float32Array(count * 3);
        const scales = new Float32Array(count);
        for (let i = 0; i < count; i++) {
            const i3 = i * 3;
            positions[i3] = (Math.random() - 0.5) * 3000;
            positions[i3 + 1] = 0;
            positions[i3 + 2] = (Math.random() - 0.5) * 1500;
            randomness[i3] = Math.random(); randomness[i3 + 1] = Math.random(); randomness[i3 + 2] = Math.random();
            scales[i] = Math.random();
        }
        geometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));
        geometry.setAttribute('aRandomness', new THREE.BufferAttribute(randomness, 3));
        geometry.setAttribute('aScale', new THREE.BufferAttribute(scales, 1));

        const material = new THREE.ShaderMaterial({
            depthWrite: false,
            blending: THREE.NormalBlending,
            vertexColors: true,
            transparent: true,
            vertexShader, fragmentShader,
            uniforms: { uTime: { value: 0 }, uPixelRatio: { value: Math.min(window.devicePixelRatio, 2) }, uSize: { value: 250.0 }, uMouse: { value: new THREE.Vector2(0, 0) } }
        });
        const points = new THREE.Points(geometry, material);
        scene.add(points);

        let time = 0;
        const mouse = new THREE.Vector2(0, 0);

        window.addEventListener('resize', () => {
            if (!container) return;
            const w = container.offsetWidth;
            const h = container.offsetHeight;
            camera.aspect = w / h; camera.updateProjectionMatrix();
            renderer.setSize(w, h); material.uniforms.uPixelRatio.value = Math.min(window.devicePixelRatio, 2);
        });

        document.addEventListener('mousemove', (e) => {
            mouse.x = (e.clientX / window.innerWidth) * 2 - 1;
            mouse.y = -(e.clientY / window.innerHeight) * 2 + 1;
        });

        const animate = () => {
            const rect = container.getBoundingClientRect();
            if (rect.bottom > 0 && rect.top < window.innerHeight) {
                time += 0.01; material.uniforms.uTime.value = time;
                material.uniforms.uMouse.value.lerp(mouse, 0.05);
                camera.position.x += (mouse.x * 50 - camera.position.x) * 0.01;
                camera.lookAt(0, 0, 0);
                renderer.render(scene, camera);
            }
            requestAnimationFrame(animate);
        };
        animate();
    };
    initCertsParticles();

    /* ---- THEME SWITCHER (PREVIEW) ---- */
    const themeBtn = document.getElementById('themeSwitchBtn');
    const themeText = document.getElementById('themeSwitchText');
    if (themeBtn && themeText) {
        themeBtn.addEventListener('click', () => {
            document.body.classList.toggle('theme-industrial');
            const isInd = document.body.classList.contains('theme-industrial');
            themeText.textContent = isInd ? 'Switch to Classic' : 'Preview Industrial';

            // Optional: Update cursor color instantly if needed, 
            // but CSS variables should handle it automatically.
        });
    }

});
