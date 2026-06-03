<?php
/**
 * Template Name: About Us V2
 */
get_header();
$uri = UBL_URI;
?>
<link rel="stylesheet" href="<?php echo esc_url( $uri ); ?>/assets/css/about-v2.css?ver=<?php echo UBL_VERSION; ?>">

<main class="page-about-v2">

    <!-- ================================================
         HERO — white bg, transformer image right of headline,
         3-row stack: (headline + image) → stats → 2-col split (text + video)
         ================================================ -->
    <section class="ab2-hero">

        <div class="ab2-inner">

            <!-- ROW 1 — headline (left) + transformer image (right) -->
            <div class="ab2-headline-row">
                <div class="ab2-headline">
                    <nav class="ab2-breadcrumb" aria-label="Breadcrumb">
                        <a href="/">Home</a>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                        <a href="#">Company</a>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                        <span class="active">About Us</span>
                    </nav>

                    <h1 class="ab2-title">
                        Powering Critical<br>
                        <em>Electrical Infrastructure</em><br>
                        Worldwide
                    </h1>

                </div>

                <div class="ab2-headline-img" aria-hidden="true">
                    <img src="<?php echo esc_url( $uri ); ?>/assets/images/about-hero-substation.jpg" alt="High-voltage transmission infrastructure at sunset" loading="eager">
                </div>
            </div>

            <!-- ROW 2 — inline stats bar -->
            <div class="ab2-stats">
                <div class="ab2-stat">
                    <div class="ab2-stat-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/>
                        </svg>
                    </div>
                    <div class="ab2-stat-num">1999</div>
                    <div class="ab2-stat-label">Established</div>
                </div>
                <div class="ab2-stat">
                    <div class="ab2-stat-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2l3 7h7l-5.5 4 2 7L12 16l-6.5 4 2-7L2 9h7z"/>
                        </svg>
                    </div>
                    <div class="ab2-stat-num">27+</div>
                    <div class="ab2-stat-label">Years of Excellence</div>
                </div>
                <div class="ab2-stat">
                    <div class="ab2-stat-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>
                        </svg>
                    </div>
                    <div class="ab2-stat-num">500+</div>
                    <div class="ab2-stat-label">Workforce</div>
                </div>
                <div class="ab2-stat">
                    <div class="ab2-stat-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                        </svg>
                    </div>
                    <div class="ab2-stat-num">15+</div>
                    <div class="ab2-stat-label">Countries Served</div>
                </div>
            </div>

            <!-- ROW 3 — 2-col split: full story + video -->
            <div class="ab2-split">
                <div class="ab2-split-text" id="ab2BodyText">
                    <h2 class="ab2-split-heading">About Umang Boards Limited</h2>
                    <div class="ab2-split-rule"></div>
                    <div class="ab2-body">
                        <p>Founded with a vision to reduce India's dependence on imported electrical insulation products, Umang Boards Limited has evolved into a globally trusted manufacturing partner serving power utilities, transformer OEMs, and industrial equipment manufacturers.</p>
                        <p>We manufacture high-performance cellulose insulation materials, precision super enameled and paper-coated winding wires in copper and aluminum, along with specialized insulating chemicals, delivering integrated solutions for critical electrical applications.</p>
                        <p>Serving industries across six continents, we support infrastructure that powers economies, industries, and emerging energy systems.</p>
                    </div>
                </div>

                <div class="ab2-split-video">
                    <div class="ab2-video-frame">
                        <iframe src="https://www.youtube.com/embed/JxFlvRRZhdU?autoplay=1&mute=1&loop=1&playlist=JxFlvRRZhdU&controls=1&rel=0&modestbranding=1&playsinline=1"
                                title="Umang Boards facility"
                                frameborder="0"
                                allow="autoplay; encrypted-media; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- ================================================
         CERT STRIP — separate section, content aligned to hero container
         ================================================ -->
    <div class="ab2-cert-strip">
        <div class="ab2-cert-inner">
            <div class="ab2-cert-label">
                Built on Trust.<br><em>Certified for Excellence.</em>
            </div>
            <div class="ab2-cert-items">
                <div class="ab2-cert-item"
                     data-img="<?php echo esc_url( $uri ); ?>/assets/images/cert-iso-9001.png"
                     data-title="ISO 9001:2015"
                     data-desc="Quality Management System, ensuring consistent product quality across all manufacturing operations.">
                    <img src="<?php echo esc_url( $uri ); ?>/assets/images/cert-iso-9001.png" alt="ISO 9001:2015" loading="lazy">
                    <div class="ab2-cert-item-text">
                        <div class="ab2-cert-item-name">ISO 9001:2015</div>
                        <div class="ab2-cert-item-sub">Quality Management</div>
                    </div>
                </div>
                <div class="ab2-cert-item"
                     data-img="<?php echo esc_url( $uri ); ?>/assets/images/cert-iso-14001.png"
                     data-title="ISO 14001:2015"
                     data-desc="Environmental Management System, reflecting our commitment to responsible and sustainable manufacturing.">
                    <img src="<?php echo esc_url( $uri ); ?>/assets/images/cert-iso-14001.png" alt="ISO 14001:2015" loading="lazy">
                    <div class="ab2-cert-item-text">
                        <div class="ab2-cert-item-name">ISO 14001:2015</div>
                        <div class="ab2-cert-item-sub">Environmental Management</div>
                    </div>
                </div>
                <div class="ab2-cert-item"
                     data-img="<?php echo esc_url( $uri ); ?>/assets/images/cert-iso-45001.png"
                     data-title="ISO 45001:2018"
                     data-desc="Occupational Health &amp; Safety Management, prioritising the wellbeing of every member of our workforce.">
                    <img src="<?php echo esc_url( $uri ); ?>/assets/images/cert-iso-45001.png" alt="ISO 45001:2018" loading="lazy">
                    <div class="ab2-cert-item-text">
                        <div class="ab2-cert-item-name">ISO 45001:2018</div>
                        <div class="ab2-cert-item-sub">Occupational Health &amp; Safety</div>
                    </div>
                </div>
                <div class="ab2-cert-item"
                     data-img="<?php echo esc_url( $uri ); ?>/assets/images/cert-nabl.png"
                     data-title="NABL Accredited Laboratory"
                     data-desc="In-house testing laboratory accredited under IEC/ISO 17025 for dielectric and mechanical testing of insulation materials.">
                    <img src="<?php echo esc_url( $uri ); ?>/assets/images/cert-nabl.png" alt="NABL Accredited" loading="lazy">
                    <div class="ab2-cert-item-text">
                        <div class="ab2-cert-item-name">NABL Accredited</div>
                        <div class="ab2-cert-item-sub">In-house Testing Laboratory</div>
                    </div>
                </div>
                <div class="ab2-cert-item"
                     data-img="<?php echo esc_url( $uri ); ?>/assets/images/cert-pgcil-400kv.png"
                     data-title="Approved by PGCIL"
                     data-desc="Approved by Power Grid Corporation of India Ltd for 400 kV class, India's highest voltage class approval for insulation manufacturers.">
                    <img src="<?php echo esc_url( $uri ); ?>/assets/images/cert-pgcil-400kv.png" alt="Approved by PGCIL" loading="lazy">
                    <div class="ab2-cert-item-text">
                        <div class="ab2-cert-item-name">Approved by PGCIL</div>
                        <div class="ab2-cert-item-sub">400 kV Class</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ================================================
         VISION & MISSION — transformer hero image bg + ONE inner box (2-card row + 5-card row)
         ================================================ -->
    <section class="ab2-vm" id="ab2VisionMission">

        <!-- Background: transformer + transmission infrastructure image -->
        <div class="ab2-vm-bg" style="background-image: url('<?php echo esc_url( $uri ); ?>/assets/images/about-vm-bg-v2.webp');"></div>
        <div class="ab2-vm-veil"></div>

        <div class="ab2-vm-inner">

            <!-- HEADER — left column, transformer image visible on right -->
            <div class="ab2-vm-hdr">
                <div class="ab2-vm-eyebrow">Our Direction</div>
                <h2 class="ab2-vm-heading">Shaping the Future of <em>Global Electrical Infrastructure</em></h2>
                <p class="ab2-vm-subtext">Our vision and mission guide how we innovate, scale, and contribute to the evolving global energy ecosystem.</p>
            </div>

            <!-- ONE BOX with both rows -->
            <div class="ab2-vm-box">

                <!-- TOP ROW: Vision + Mission -->
                <div class="ab2-vm-cards">

                    <div class="ab2-vm-card">
                        <div class="ab2-vm-card-icon">
                            <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="24" cy="24" r="10"/>
                                <path d="M24 4v6M24 38v6M4 24h6M38 24h6"/>
                                <path d="M10.5 10.5l4.2 4.2M33.3 33.3l4.2 4.2M10.5 37.5l4.2-4.2M33.3 14.7l4.2-4.2"/>
                            </svg>
                        </div>
                        <div class="ab2-vm-card-label">Vision</div>
                        <div class="ab2-vm-card-rule"></div>
                        <p class="ab2-vm-card-body">To be the global benchmark in electrical insulation and winding solutions, powering the world's transition to ultra-high voltage (1200 kV) and sustainable energy systems.</p>
                        <p class="ab2-vm-card-support">We aspire to lead through continuous innovation, superior quality, and customer-centric solutions, creating long-term value and enabling a sustainable, electrified future.</p>
                    </div>

                    <div class="ab2-vm-card">
                        <div class="ab2-vm-card-icon">
                            <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="24" cy="24" r="18"/>
                                <circle cx="24" cy="24" r="8"/>
                                <line x1="24" y1="16" x2="24" y2="10"/>
                            </svg>
                        </div>
                        <div class="ab2-vm-card-label">Mission</div>
                        <div class="ab2-vm-card-rule"></div>
                        <p class="ab2-vm-card-body">We deliver high-quality, cost-efficient electrical components through advanced technology and operational excellence, supporting infrastructure from 1200 kV transformers to renewable energy, data centers, and industrial systems.</p>
                        <p class="ab2-vm-card-support">Our integrated solutions in insulation materials, winding wires, and insulating chemicals are built to enhance reliability, efficiency, and performance across critical applications worldwide.</p>
                    </div>

                </div>


            </div><!-- /ab2-vm-box -->

        </div><!-- /ab2-vm-inner -->

    </section>

    <!-- ═══════════════════════════════════════════════════════════════
         CORE VALUES — prefix: ab2-cv-
         Structure: white outer, parchment inner box with shadow border,
         3 rows (hero+heading | 8-card grid | inset quote+pillars)
    ═══════════════════════════════════════════════════════════════ -->
    <section class="ab2-cv" id="ab2CoreValues">
        <div class="ab2-cv-box">

            <!-- ROW 1: heading left, hero image right (image fades into parchment) -->
            <div class="ab2-cv-row1">
                <div class="ab2-cv-text">
                    <div class="ab2-cv-eyebrow">OUR VALUES</div>
                    <h2 class="ab2-cv-heading">Principles That<br>Drive <em>Performance</em></h2>
                    <p class="ab2-cv-sub">Our values define how we operate, innovate, and deliver consistent quality across every aspect of our business.</p>
                </div>
                <div class="ab2-cv-hero" aria-hidden="true">
                    <img src="<?php echo esc_url( $uri ); ?>/assets/images/about-cv-materials.png" alt="" loading="lazy">
                </div>
            </div><!-- /row1 -->

            <!-- ROW 2: value pills -->
            <div class="ab2-cv-pills">
                <span class="ab2-cv-pill">Quality &amp; Excellence</span>
                <span class="ab2-cv-pill">Innovation &amp; Technology</span>
                <span class="ab2-cv-pill">Customer Centricity</span>
                <span class="ab2-cv-pill">Sustainability &amp; Responsibility</span>
                <span class="ab2-cv-pill">Operational Excellence</span>
                <span class="ab2-cv-pill">Integrity &amp; Trust</span>
                <span class="ab2-cv-pill">Teamwork &amp; Dedication</span>
                <span class="ab2-cv-pill">Cost Leadership</span>
            </div>


        </div><!-- /ab2-cv-box -->
    </section>

    <!-- ================================================
         ENGINEERING EXCELLENCE — two-col top + 4 pillars
         ================================================ -->
    <section class="ab2-exc" id="ab2Excellence">

        <!-- TOP: two-column grid -->
        <div class="ab2-exc-top">

            <!-- LEFT: text content -->
            <div class="ab2-exc-text">
                <div class="ab2-exc-eyebrow">Our Strength</div>
                <h2 class="ab2-exc-heading">Engineering Excellence Built on <em>Manufacturing Depth</em></h2>
                <div class="ab2-exc-divider"></div>
                <p class="ab2-exc-body">Headquartered in Jaipur, India, Umang Boards Limited has built its growth on continuous investment in advanced manufacturing, skilled talent, and rigorous in-house testing systems.</p>
                <p class="ab2-exc-body">With two modern production facilities and globally recognized ISO certifications, we ensure every product meets the highest standards of performance, reliability, and consistency.</p>
                <p class="ab2-exc-body">Our integrated manufacturing capabilities span <em>high-performance insulation materials</em>, precision <em>winding wires</em>, and specialized <em>insulating chemicals</em>, enabling us to deliver complete electrical component solutions across applications.</p>
            </div>

            <!-- RIGHT: 3 product category tiles (no lab image per brief) -->
            <div class="ab2-exc-visual">
                <div class="ab2-exc-products ab2-exc-products--full">
                    <a href="<?php echo esc_url( home_url('/transformer-insulations/') ); ?>" class="ab2-exc-product-card ab2-exc-product-card--linked">
                        <img src="<?php echo esc_url( $uri ); ?>/assets/images/about-product-insulation.png" alt="Insulation Materials" loading="lazy">
                        <div class="ab2-exc-product-overlay">
                            <span class="ab2-exc-product-label">Insulation Materials</span>
                            <span class="ab2-exc-product-cta">Explore Range <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                        </div>
                    </a>
                    <a href="<?php echo esc_url( home_url('/winding-wires/') ); ?>" class="ab2-exc-product-card ab2-exc-product-card--linked">
                        <img src="<?php echo esc_url( $uri ); ?>/assets/images/about-product-winding.png" alt="Winding Wires" loading="lazy">
                        <div class="ab2-exc-product-overlay">
                            <span class="ab2-exc-product-label">Winding Wires</span>
                            <span class="ab2-exc-product-cta">Explore Range <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                        </div>
                    </a>
                    <a href="<?php echo esc_url( home_url('/insulating-chemical/') ); ?>" class="ab2-exc-product-card ab2-exc-product-card--linked">
                        <img src="<?php echo esc_url( $uri ); ?>/assets/images/about-product-chemicals.png" alt="Insulating Chemicals" loading="lazy">
                        <div class="ab2-exc-product-overlay">
                            <span class="ab2-exc-product-label">Insulating Chemicals</span>
                            <span class="ab2-exc-product-cta">Explore Range <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                        </div>
                    </a>
                </div>
            </div>

        </div>

        <!-- BOTTOM: 4 pillar cards -->
        <div class="ab2-exc-pillars-outer"><div class="ab2-exc-pillars">

            <div class="ab2-exc-pillar">
                <div class="ab2-exc-pillar-icon">
                    <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="24" cy="20" r="12"/>
                        <path d="M24 12v8l5 3"/>
                        <path d="M14 38c0-3 4.5-5 10-5s10 2 10 5"/>
                    </svg>
                </div>
                <h3 class="ab2-exc-pillar-title">Innovation &amp; Products</h3>
                <div class="ab2-exc-pillar-divider"></div>
                <p class="ab2-exc-pillar-body">Built on a technology-driven foundation, we continuously invest in innovation, advanced processes and product development to stay ahead of evolving electrical demands.</p>
            </div>

            <div class="ab2-exc-pillar">
                <div class="ab2-exc-pillar-icon">
                    <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M24 6l4 8 9 1.3-6.5 6.3 1.5 9L24 26l-8 4.6 1.5-9L11 15.3 20 14z"/>
                        <path d="M14 40h20"/>
                        <path d="M24 36v4"/>
                    </svg>
                </div>
                <h3 class="ab2-exc-pillar-title">Quality &amp; Reliability</h3>
                <div class="ab2-exc-pillar-divider"></div>
                <p class="ab2-exc-pillar-body">Across markets, we are known for consistent quality, disciplined manufacturing, dependable delivery and long-term customer partnerships, serving clients in India and globally.</p>
            </div>

            <div class="ab2-exc-pillar">
                <div class="ab2-exc-pillar-icon">
                    <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="8 36 20 22 28 30 42 12"/>
                        <polyline points="34 12 42 12 42 20"/>
                    </svg>
                </div>
                <h3 class="ab2-exc-pillar-title">Leadership &amp; Growth</h3>
                <div class="ab2-exc-pillar-divider"></div>
                <p class="ab2-exc-pillar-body">Guided by committed leadership and a clear growth vision, Umang Boards has expanded steadily, strengthening its presence while maintaining operational rigor and financial discipline.</p>
            </div>

            <div class="ab2-exc-pillar">
                <div class="ab2-exc-pillar-icon">
                    <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="18" cy="16" r="6"/>
                        <path d="M6 38c0-6 5.4-10 12-10"/>
                        <circle cx="34" cy="28" r="5"/>
                        <path d="M26 42c0-4.4 3.6-8 8-8s8 3.6 8 8"/>
                        <path d="M28 20l3 3 6-7"/>
                    </svg>
                </div>
                <h3 class="ab2-exc-pillar-title">Social Responsibility</h3>
                <div class="ab2-exc-pillar-divider"></div>
                <p class="ab2-exc-pillar-body">We believe meaningful growth extends beyond business. Through structured social initiatives and our wholly owned subsidiary Dhanuka Foundation, we actively contribute to community development and sustainable progress.</p>
            </div>

        </div></div>

    </section>

    <!-- ================================================
         APPLICATIONS — header split + 3 cards
         ================================================ -->
    <section class="ab2-apps" id="ab2Applications">

        <!-- HEADER SPLIT: text left, hero image right -->
        <div class="ab2-apps-hdr">
            <div class="ab2-apps-hdr-inner">

                <div class="ab2-apps-hdr-text">
                    <div class="ab2-apps-eyebrow">Our Impact</div>
                    <h2 class="ab2-apps-heading">Powering Critical Infrastructure Across <em>Global Energy Systems</em></h2>
                    <div class="ab2-apps-hdr-rule"></div>
                    <p class="ab2-apps-subtext">Our products form the backbone of electrical systems, from high-voltage transformers to industrial and emerging energy applications.</p>
                </div>

                <div class="ab2-apps-hdr-img">
                    <img src="<?php echo esc_url( $uri ); ?>/assets/images/app-hero-collage.jpg"
                         alt="Umang Boards insulation materials, winding wires and chemicals" loading="lazy">
                    <div class="ab2-apps-hdr-img-veil"></div>
                </div>

            </div>
        </div>

        <!-- 3 APPLICATION CARDS -->
        <div class="ab2-apps-cards-wrap">
            <div class="ab2-apps-cards">

                <!-- Card 1 -->
                <article class="ab2-apps-card">
                    <div class="ab2-apps-card-body">
                        <div class="ab2-apps-card-icon">
                            <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <polygon points="28 5 16 25 24 25 20 43 32 23 24 23"/>
                            </svg>
                        </div>
                        <span class="ab2-apps-card-num">01</span>
                        <h3 class="ab2-apps-card-title">Power &amp; Transmission Infrastructure</h3>
                        <p class="ab2-apps-card-desc">We manufacture high-performance insulation materials and winding wires for transformers, supporting reliable electricity transmission, including ultra-high voltage applications.</p>
                    </div>
                    <div class="ab2-apps-card-img">
                        <img src="<?php echo esc_url( $uri ); ?>/assets/images/app-card-power.jpg"
                             alt="High-voltage transmission substation at sunset" loading="lazy">
                        <div class="ab2-apps-card-img-veil"></div>
                    </div>
                </article>

                <!-- Card 2 -->
                <article class="ab2-apps-card">
                    <div class="ab2-apps-card-body">
                        <div class="ab2-apps-card-icon">
                            <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="24" cy="24" r="7"/>
                                <path d="M24 6v6M24 36v6M6 24h6M36 24h6"/>
                                <path d="M11.5 11.5l4.2 4.2M32.3 32.3l4.2 4.2M11.5 36.5l4.2-4.2M32.3 15.7l4.2-4.2"/>
                            </svg>
                        </div>
                        <span class="ab2-apps-card-num">02</span>
                        <h3 class="ab2-apps-card-title">Industrial &amp; Electrical Systems</h3>
                        <p class="ab2-apps-card-desc">Our solutions power motors, stabilizers, and heavy electrical equipment, ensuring efficiency, durability, and reliability across demanding industrial environments.</p>
                    </div>
                    <div class="ab2-apps-card-img">
                        <img src="<?php echo esc_url( $uri ); ?>/assets/images/app-card-industrial.jpg"
                             alt="Industrial motors and electrical equipment on factory floor" loading="lazy">
                        <div class="ab2-apps-card-img-veil"></div>
                    </div>
                </article>

                <!-- Card 3 -->
                <article class="ab2-apps-card">
                    <div class="ab2-apps-card-body">
                        <div class="ab2-apps-card-icon">
                            <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M24 8c-1.5 4-5 7.5-5 13a5 5 0 0 0 10 0c0-5.5-3.5-9-5-13z"/>
                                <line x1="24" y1="21" x2="24" y2="40"/>
                                <line x1="16" y1="40" x2="32" y2="40"/>
                                <path d="M10 28c3.5-2 7-2 9 0"/>
                                <path d="M29 28c2-2 5.5-2 9 0"/>
                            </svg>
                        </div>
                        <span class="ab2-apps-card-num">03</span>
                        <h3 class="ab2-apps-card-title">Emerging Energy &amp; Digital Infrastructure</h3>
                        <p class="ab2-apps-card-desc">We support renewable energy systems, data centers, and next-generation electrical applications, enabling the infrastructure of tomorrow's energy economy.</p>
                    </div>
                    <div class="ab2-apps-card-img">
                        <img src="<?php echo esc_url( $uri ); ?>/assets/images/app-card-energy.jpg"
                             alt="Wind turbines and renewable energy infrastructure at dusk" loading="lazy">
                        <div class="ab2-apps-card-img-veil"></div>
                    </div>
                </article>

            </div>
        </div>


    </section>

    <!-- ═══════════════════════════════════════════════════════════════
         OUR TEAM GATEWAY
    ═══════════════════════════════════════════════════════════════ -->
    <section class="ab2-team-gateway">
        <div class="ab2-team-gateway-inner">
            <div class="ab2-team-eyebrow">Our Team</div>
            <p class="ab2-team-body">Great companies are shaped by the people who understand them most deeply. At Umang Boards, our leadership team carries between them decades of experience in transformer insulation, manufacturing operations, and business growth; a team that has built this company and continues to steer it with the same conviction it started with. Get to know them.</p>
            <a href="<?php echo esc_url( home_url('/leadership/') ); ?>" class="btn-gold">Meet the Team <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════════════════════
         NEWS + EVENTS + CONNECT — mn-trio (same as homepage)
    ═══════════════════════════════════════════════════════════════ -->
    <section class="s-media-news" id="auNews" style="background:#f8f9fb;">
        <div class="s-media-news-inner">

            <div class="s-media-news-header">
                <div>
                    <div class="section-eyebrow">Media &amp; News</div>
                    <h2 class="section-title">What's <em>Happening</em></h2>
                </div>
            </div>

            <div class="mn-trio">

                <!-- Col 1: Latest Update -->
                <div class="mn-trio-col">
                    <div class="mn-trio-col-hd">
                        <span class="mn-trio-col-label">Our Latest Updates</span>
                    </div>
                    <a href="<?php echo home_url('/newsroom'); ?>" class="mn-trio-card mn-trio-card--news">
                        <div class="mn-trio-news-img">
                            <img src="<?php echo esc_url( $uri ); ?>/assets/images/news-pgcil-approval.jpg" alt="PGCIL 400 KV Class Approval" loading="lazy">
                            <span class="mn-card-badge">Milestone</span>
                        </div>
                        <div class="mn-trio-news-body">
                            <h3 class="mn-trio-news-title">Power Grid Corporation India Ltd: 400 KV Class Approval</h3>
                            <p class="mn-trio-news-desc">Approved by PGCIL for supply of pre-compressed pressboard, laminated pressboard and machined &amp; moulded components for up to 400 KV class transformers.</p>
                        </div>
                    </a>
                    <a href="<?php echo home_url('/newsroom'); ?>" class="mn-trio-cta">
                        View All News
                        <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>

                <!-- Col 2: Featured Event -->
                <div class="mn-trio-col">
                    <div class="mn-trio-col-hd">
                        <span class="mn-trio-col-label">Upcoming Events</span>
                    </div>
                    <a href="https://berlin.cwiemeevents.com/exhibitors/umang-boards-limited" target="_blank" rel="noopener" class="mn-trio-card mn-trio-card--event">
                        <img src="<?php echo esc_url( $uri ); ?>/assets/images/event-cwieme-berlin.png" alt="CWIEME Berlin" class="mn-trio-event-logo">
                        <div class="mn-trio-event-info">
                            <span class="mn-trio-event-badge">&#9679; Live Now</span>
                            <h3 class="mn-trio-event-name">CWIEME Berlin 2026</h3>
                            <span class="mn-trio-event-meta">19&ndash;21 May 2026 &middot; Booth 27A50</span>
                            <p class="mn-trio-event-desc">World's leading trade show for coil winding, electric motor and transformer manufacturing technology.</p>
                        </div>
                    </a>
                    <a href="<?php echo home_url('/newsroom#events'); ?>" class="mn-trio-cta">
                        View All Events
                        <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>

                <!-- Col 3: Connect With Us -->
                <div class="mn-trio-col">
                    <div class="mn-trio-col-hd">
                        <span class="mn-trio-col-label">Connect With Us</span>
                    </div>
                    <div class="mn-trio-card mn-trio-card--connect">
                        <div class="mn-trio-video">
                            <iframe src="https://www.youtube.com/embed/svxX0oXME-8" title="Umang Boards Limited" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen loading="lazy"></iframe>
                        </div>
                        <div class="mn-trio-socials">
                            <a href="https://www.instagram.com/umangboards7/" target="_blank" rel="noopener" class="mn-social-btn">
                                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="5"/><circle cx="17.5" cy="6.5" r="1.5" fill="currentColor" stroke="none"/></svg>
                                Follow on Instagram
                            </a>
                            <a href="https://www.youtube.com/@UmangBoards" target="_blank" rel="noopener" class="mn-social-btn">
                                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22.54 6.42a2.78 2.78 0 00-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 00-1.94 2A29 29 0 001 11.75a29 29 0 00.46 5.33A2.78 2.78 0 003.4 19.1c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 001.94-2 29 29 0 00.46-5.25 29 29 0 00-.46-5.43z"/><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02" fill="currentColor" stroke="none"/></svg>
                                Subscribe on YouTube
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Cert lightbox -->
    <div class="ab2-lightbox" id="ab2Lightbox" role="dialog" aria-modal="true">
        <div class="ab2-lb-box">
            <button class="ab2-lb-close" id="ab2LbClose" aria-label="Close">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 6L6 18M6 6l12 12"/></svg>
            </button>
            <img class="ab2-lb-img" id="ab2LbImg" src="" alt="">
            <div class="ab2-lb-title" id="ab2LbTitle"></div>
            <div class="ab2-lb-desc" id="ab2LbDesc"></div>
        </div>
    </div>

</main>

<?php get_footer(); ?>
