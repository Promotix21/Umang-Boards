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

                    <p class="ab2-subhead">
                        Advanced insulation materials and precision winding solutions enabling reliable power transmission across global energy systems.
                    </p>
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
                        <p class="ab2-body-extra">We manufacture high-performance cellulose insulation materials, precision super enameled and paper-coated winding wires in copper and aluminum, along with specialized insulating chemicals&mdash;delivering integrated solutions for critical electrical applications.</p>
                        <p class="ab2-body-extra">Serving industries across six continents, we support infrastructure that powers economies, industries, and emerging energy systems.</p>
                    </div>
                    <button type="button" class="ab2-readmore" id="ab2ReadMore" aria-expanded="false" aria-controls="ab2BodyText">
                        <span class="ab2-readmore-label">Read Full Story</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </button>
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
                     data-desc="Quality Management System — ensuring consistent product quality across all manufacturing operations.">
                    <img src="<?php echo esc_url( $uri ); ?>/assets/images/cert-iso-9001.png" alt="ISO 9001:2015" loading="lazy">
                    <div class="ab2-cert-item-text">
                        <div class="ab2-cert-item-name">ISO 9001:2015</div>
                        <div class="ab2-cert-item-sub">Quality Management</div>
                    </div>
                </div>
                <div class="ab2-cert-item"
                     data-img="<?php echo esc_url( $uri ); ?>/assets/images/cert-iso-14001.png"
                     data-title="ISO 14001:2015"
                     data-desc="Environmental Management System — reflecting our commitment to responsible and sustainable manufacturing.">
                    <img src="<?php echo esc_url( $uri ); ?>/assets/images/cert-iso-14001.png" alt="ISO 14001:2015" loading="lazy">
                    <div class="ab2-cert-item-text">
                        <div class="ab2-cert-item-name">ISO 14001:2015</div>
                        <div class="ab2-cert-item-sub">Environmental Management</div>
                    </div>
                </div>
                <div class="ab2-cert-item"
                     data-img="<?php echo esc_url( $uri ); ?>/assets/images/cert-iso-45001.png"
                     data-title="ISO 45001:2018"
                     data-desc="Occupational Health &amp; Safety Management — prioritising the wellbeing of every member of our workforce.">
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
                     data-desc="Approved by Power Grid Corporation of India Ltd for 400 kV class — India's highest voltage class approval for insulation manufacturers.">
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
                <p class="ab2-exc-body">Our integrated manufacturing capabilities span <em>high-performance insulation materials</em>, precision <em>winding wires</em>, and specialized <em>insulating chemicals</em>—enabling us to deliver complete electrical component solutions across applications.</p>
            </div>

            <!-- RIGHT: big image + 3 product cards -->
            <div class="ab2-exc-visual">
                <div class="ab2-exc-img-hero">
                    <img src="<?php echo esc_url( $uri ); ?>/assets/images/about-excellence-hero.jpg" alt="High-voltage testing in our laboratory" loading="lazy">
                    <div class="ab2-exc-img-hero-overlay"></div>
                </div>
                <div class="ab2-exc-products">
                    <div class="ab2-exc-product-card">
                        <img src="<?php echo esc_url( $uri ); ?>/assets/images/about-product-insulation.png" alt="Insulation Materials" loading="lazy">
                        <div class="ab2-exc-product-overlay">
                            <span class="ab2-exc-product-label">Insulation Materials</span>
                        </div>
                    </div>
                    <div class="ab2-exc-product-card">
                        <img src="<?php echo esc_url( $uri ); ?>/assets/images/about-product-winding.png" alt="Winding Wires" loading="lazy">
                        <div class="ab2-exc-product-overlay">
                            <span class="ab2-exc-product-label">Winding Wires</span>
                        </div>
                    </div>
                    <div class="ab2-exc-product-card">
                        <img src="<?php echo esc_url( $uri ); ?>/assets/images/about-product-chemicals.png" alt="Insulating Chemicals" loading="lazy">
                        <div class="ab2-exc-product-overlay">
                            <span class="ab2-exc-product-label">Insulating Chemicals</span>
                        </div>
                    </div>
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
                <h3 class="ab2-exc-pillar-title">Innovation &amp; Process</h3>
                <div class="ab2-exc-pillar-divider"></div>
                <p class="ab2-exc-pillar-body">Built on a technology-driven foundation, we continuously invest in advanced processes and product development to meet evolving electrical demands.</p>
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
                <p class="ab2-exc-pillar-body">Disciplined manufacturing, stringent quality control, and in-house testing ensure consistent performance across all product categories.</p>
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
                <p class="ab2-exc-pillar-body">Guided by experienced leadership and a clear growth vision, we have expanded steadily while maintaining operational and financial discipline.</p>
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
                <p class="ab2-exc-pillar-body">Through structured initiatives and the Dhanuka Foundation, we contribute to community development and sustainable practices.</p>
            </div>

        </div></div>

    </section>

    <!-- ================================================
         APPLICATIONS — header split + 3 cards + capability strip
         ================================================ -->
    <section class="ab2-apps" id="ab2Applications">

        <!-- HEADER SPLIT: text left, hero image right -->
        <div class="ab2-apps-hdr">
            <div class="ab2-apps-hdr-inner">

                <div class="ab2-apps-hdr-text">
                    <div class="ab2-apps-eyebrow">Our Impact</div>
                    <h2 class="ab2-apps-heading">Powering Critical Infrastructure Across <em>Global Energy Systems</em></h2>
                    <div class="ab2-apps-hdr-rule"></div>
                    <p class="ab2-apps-subtext">Our products form the backbone of electrical systems—from high-voltage transformers to industrial and emerging energy applications.</p>
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
                        <p class="ab2-apps-card-desc">We manufacture high-performance insulation materials and winding wires for transformers, supporting reliable electricity transmission—including ultra-high voltage applications.</p>
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
                        <p class="ab2-apps-card-desc">Our solutions power motors, stabilizers, and heavy electrical equipment—ensuring efficiency, durability, and reliability across demanding industrial environments.</p>
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
                        <p class="ab2-apps-card-desc">We support renewable energy systems, data centers, and next-generation electrical applications—enabling the infrastructure of tomorrow's energy economy.</p>
                    </div>
                    <div class="ab2-apps-card-img">
                        <img src="<?php echo esc_url( $uri ); ?>/assets/images/app-card-energy.jpg"
                             alt="Wind turbines and renewable energy infrastructure at dusk" loading="lazy">
                        <div class="ab2-apps-card-img-veil"></div>
                    </div>
                </article>

            </div>
        </div>

        <!-- CAPABILITY STRIP -->
        <div class="ab2-apps-strip">
            <div class="ab2-apps-strip-inner">

                <div class="ab2-apps-strip-left">
                    <div class="ab2-apps-strip-icon">
                        <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="24 4 44 16 44 32 24 44 4 32 4 16"/>
                            <line x1="4" y1="16" x2="44" y2="16"/>
                            <line x1="4" y1="32" x2="44" y2="32"/>
                            <line x1="24" y1="4" x2="24" y2="44"/>
                            <line x1="14" y1="9.5" x2="34" y2="38.5"/>
                            <line x1="34" y1="9.5" x2="14" y2="38.5"/>
                        </svg>
                    </div>
                    <div class="ab2-apps-strip-title">Integrated.<br>Reliable.<br>Future-Ready.</div>
                </div>

                <div class="ab2-apps-strip-center">
                    <p>Our integrated capabilities across insulation materials, winding wires, and insulating chemicals enable complete, high-performance electrical component solutions.</p>
                </div>

                <div class="ab2-apps-strip-points">
                    <div class="ab2-apps-strip-point">
                        <div class="ab2-apps-strip-point-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 2"/></svg>
                        </div>
                        <span>High Performance</span>
                    </div>
                    <div class="ab2-apps-strip-point">
                        <div class="ab2-apps-strip-point-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
                        </div>
                        <span>Engineered for Reliability</span>
                    </div>
                    <div class="ab2-apps-strip-point">
                        <div class="ab2-apps-strip-point-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                        </div>
                        <span>Global Applications</span>
                    </div>
                    <div class="ab2-apps-strip-point">
                        <div class="ab2-apps-strip-point-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"><path d="M12 2a10 10 0 0 1 0 20"/><path d="M12 2C8 6 6 9 6 12s2 6 6 10"/><path d="M2 12h20"/></svg>
                        </div>
                        <span>Sustainable by Design</span>
                    </div>
                </div>

            </div>
        </div>

    </section>

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
                        <p class="ab2-vm-card-support">We aspire to lead through continuous innovation, superior quality, and customer-centric solutions—creating long-term value and enabling a sustainable, electrified future.</p>
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
                        <p class="ab2-vm-card-body">We deliver high-quality, cost-efficient electrical components through advanced technology and operational excellence—supporting infrastructure from 1200 kV transformers to renewable energy, data centers, and industrial systems.</p>
                        <p class="ab2-vm-card-support">Our integrated solutions in insulation materials, winding wires, and insulating chemicals are built to enhance reliability, efficiency, and performance across critical applications worldwide.</p>
                    </div>

                </div>

                <!-- BOX DIVIDER + EXEC HEADER -->
                <div class="ab2-vm-exec-hdr">
                    <div class="ab2-vm-divider-rule"></div>
                    <h3 class="ab2-vm-exec-title">How We Execute This Vision</h3>
                    <p class="ab2-vm-exec-sub">Our strategic pillars translate our vision and mission into measurable impact.</p>
                </div>

                <!-- BOTTOM ROW: 5 pillars -->
                <div class="ab2-vm-pillars">

                    <div class="ab2-vm-pillar">
                        <div class="ab2-vm-pillar-icon">
                            <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <polygon points="28 5 16 25 24 25 20 43 32 23 24 23"/>
                            </svg>
                        </div>
                        <h4 class="ab2-vm-pillar-title">Power &amp; Distribution</h4>
                        <p class="ab2-vm-pillar-desc">Enabling reliable power transmission through advanced insulation materials and winding solutions for transformers up to 1200 kV and beyond.</p>
                    </div>

                    <div class="ab2-vm-pillar">
                        <div class="ab2-vm-pillar-icon">
                            <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M24 8c-1.5 4-5 7.5-5 13a5 5 0 0 0 10 0c0-5.5-3.5-9-5-13z"/>
                                <line x1="24" y1="21" x2="24" y2="40"/>
                                <line x1="16" y1="40" x2="32" y2="40"/>
                                <path d="M10 28c3.5-2 7-2 9 0"/>
                                <path d="M29 28c2-2 5.5-2 9 0"/>
                            </svg>
                        </div>
                        <h4 class="ab2-vm-pillar-title">Emerging Applications</h4>
                        <p class="ab2-vm-pillar-desc">Supporting renewable energy systems, data centers, EV ecosystems, and next-generation electrical infrastructure.</p>
                    </div>

                    <div class="ab2-vm-pillar">
                        <div class="ab2-vm-pillar-icon">
                            <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="24" cy="24" r="6"/>
                                <path d="M24 4v6M24 38v6M4 24h6M38 24h6"/>
                                <path d="M9.5 9.5l4.2 4.2M34.3 34.3l4.2 4.2M9.5 38.5l4.2-4.2M34.3 13.7l4.2-4.2"/>
                            </svg>
                        </div>
                        <h4 class="ab2-vm-pillar-title">Operational Excellence</h4>
                        <p class="ab2-vm-pillar-desc">Investing in advanced manufacturing, automation, zero liquid discharge (ZLD), and sustainable practices to ensure efficiency and quality.</p>
                    </div>

                    <div class="ab2-vm-pillar">
                        <div class="ab2-vm-pillar-icon">
                            <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="16" cy="18" r="7"/>
                                <circle cx="32" cy="30" r="7"/>
                                <path d="M23 18h2a7 7 0 0 1 7 7v2"/>
                                <path d="M16 25v2a7 7 0 0 0 7 7h2"/>
                            </svg>
                        </div>
                        <h4 class="ab2-vm-pillar-title">Strategic Partnerships</h4>
                        <p class="ab2-vm-pillar-desc">Building long-term relationships with global customers, suppliers, and partners—driving shared growth and reliability.</p>
                    </div>

                    <div class="ab2-vm-pillar">
                        <div class="ab2-vm-pillar-icon">
                            <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M24 6l3.5 9.5H38l-8.5 6.5 3.5 9.5L24 26l-9 5.5 3.5-9.5L10 15.5h10.5z"/>
                                <path d="M16 38l-4 6M32 38l4 6"/>
                                <path d="M12 44h24"/>
                            </svg>
                        </div>
                        <h4 class="ab2-vm-pillar-title">Innovation Leadership</h4>
                        <p class="ab2-vm-pillar-desc">Continuously advancing through R&amp;D, product development, and custom engineering solutions to meet evolving industry demands.</p>
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

            <!-- ROW 2: 8 icon cards (4×2) -->
            <div class="ab2-cv-grid">

                <div class="ab2-cv-card">
                    <div class="ab2-cv-card-icon">
                        <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="24" cy="24" r="16"/>
                            <polyline points="16 24 21 29 32 18"/>
                        </svg>
                    </div>
                    <h4 class="ab2-cv-card-title"><span class="ab2-cv-card-num">1.</span> Quality &amp; Excellence</h4>
                    <p class="ab2-cv-card-desc">Uncompromising standards, continuous improvement, and a zero-defect mindset.</p>
                </div>

                <div class="ab2-cv-card">
                    <div class="ab2-cv-card-icon">
                        <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M24 8c-2 5-5 7.5-5 13a5 5 0 0 0 10 0c0-5.5-3-8-5-13z"/>
                            <path d="M19 30h10"/>
                            <path d="M20 34h8"/>
                            <path d="M22 38h4"/>
                        </svg>
                    </div>
                    <h4 class="ab2-cv-card-title"><span class="ab2-cv-card-num">2.</span> Innovation &amp; Technology</h4>
                    <p class="ab2-cv-card-desc">Advanced R&amp;D, automation, and next-generation solutions that shape the future.</p>
                </div>

                <div class="ab2-cv-card">
                    <div class="ab2-cv-card-icon">
                        <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="18" cy="18" r="6"/>
                            <circle cx="32" cy="20" r="5"/>
                            <path d="M8 40c0-6 4-10 10-10s10 4 10 10"/>
                            <path d="M28 40c0-5 3-8 8-8s6 3 6 8"/>
                        </svg>
                    </div>
                    <h4 class="ab2-cv-card-title"><span class="ab2-cv-card-num">3.</span> Customer Centricity</h4>
                    <p class="ab2-cv-card-desc">Long-term partnerships, responsiveness, and collaborative problem-solving.</p>
                </div>

                <div class="ab2-cv-card">
                    <div class="ab2-cv-card-icon">
                        <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M24 8c-3 6-10 9-10 18a10 10 0 0 0 20 0c0-9-7-12-10-18z"/>
                            <path d="M20 28c0 4 2 7 4 8"/>
                        </svg>
                    </div>
                    <h4 class="ab2-cv-card-title"><span class="ab2-cv-card-num">4.</span> Sustainability &amp; Responsibility</h4>
                    <p class="ab2-cv-card-desc">Environmental stewardship, zero liquid discharge, and positive community impact.</p>
                </div>

                <div class="ab2-cv-card">
                    <div class="ab2-cv-card-icon">
                        <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="8" y="28" width="7" height="12" rx="1"/>
                            <rect x="20" y="20" width="7" height="20" rx="1"/>
                            <rect x="32" y="12" width="7" height="28" rx="1"/>
                            <polyline points="10 24 18 16 28 20 38 10"/>
                        </svg>
                    </div>
                    <h4 class="ab2-cv-card-title"><span class="ab2-cv-card-num">5.</span> Operational Excellence</h4>
                    <p class="ab2-cv-card-desc">Process discipline, efficiency, and data-driven optimization in everything we do.</p>
                </div>

                <div class="ab2-cv-card">
                    <div class="ab2-cv-card-icon">
                        <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M24 6l-14 6v10c0 9 6 17 14 20 8-3 14-11 14-20V12L24 6z"/>
                            <polyline points="18 24 22 28 30 20"/>
                        </svg>
                    </div>
                    <h4 class="ab2-cv-card-title"><span class="ab2-cv-card-num">6.</span> Integrity &amp; Trust</h4>
                    <p class="ab2-cv-card-desc">Transparency, accountability, and ethical practices in every business interaction.</p>
                </div>

                <div class="ab2-cv-card">
                    <div class="ab2-cv-card-icon">
                        <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="16" cy="16" r="5"/>
                            <circle cx="32" cy="16" r="5"/>
                            <circle cx="24" cy="14" r="4"/>
                            <path d="M8 38c0-6 4-10 8-10"/>
                            <path d="M40 38c0-6-4-10-8-10"/>
                            <path d="M16 40c0-6 4-10 8-10s8 4 8 10"/>
                        </svg>
                    </div>
                    <h4 class="ab2-cv-card-title"><span class="ab2-cv-card-num">7.</span> Teamwork &amp; Dedication</h4>
                    <p class="ab2-cv-card-desc">Skilled people, continuous learning, and a culture of respect and shared success.</p>
                </div>

                <div class="ab2-cv-card">
                    <div class="ab2-cv-card-icon">
                        <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="24" cy="24" r="10"/>
                            <path d="M24 18v6l4 3"/>
                            <path d="M24 8v3M24 37v3M8 24h3M37 24h3"/>
                        </svg>
                    </div>
                    <h4 class="ab2-cv-card-title"><span class="ab2-cv-card-num">8.</span> Cost Leadership</h4>
                    <p class="ab2-cv-card-desc">Delivering economical solutions that create value without compromising on quality.</p>
                </div>

            </div><!-- /grid -->

            <!-- ROW 3: inset rounded rectangle — quote + 4 pillars -->
            <div class="ab2-cv-inset">
                <div class="ab2-cv-quote">
                    <svg class="ab2-cv-quote-mark" viewBox="0 0 32 24" fill="currentColor" aria-hidden="true">
                        <path d="M0 24V12C0 5.4 5.4 0 12 0v4c-4.4 0-8 3.6-8 8h8v12H0zm20 0V12c0-6.6 5.4-12 12-12v4c-4.4 0-8 3.6-8 8h8v12H20z"/>
                    </svg>
                    <p class="ab2-cv-quote-text">These principles are not just ideals &mdash; they are the foundation of how we build, deliver, and lead.</p>
                </div>
                <div class="ab2-cv-pillars">
                    <div class="ab2-cv-pillar">
                        <h5 class="ab2-cv-pillar-title">Purpose Driven</h5>
                        <p class="ab2-cv-pillar-desc">Aligned with our mission every step of the way.</p>
                    </div>
                    <div class="ab2-cv-pillar">
                        <h5 class="ab2-cv-pillar-title">Performance Focused</h5>
                        <p class="ab2-cv-pillar-desc">Backed by rigour, results, and resilience.</p>
                    </div>
                    <div class="ab2-cv-pillar">
                        <h5 class="ab2-cv-pillar-title">Future Ready</h5>
                        <p class="ab2-cv-pillar-desc">Powering tomorrow for a sustainable tomorrow.</p>
                    </div>
                    <div class="ab2-cv-pillar">
                        <h5 class="ab2-cv-pillar-title">Trusted by Stakeholders</h5>
                        <p class="ab2-cv-pillar-desc">Earning confidence through consistency and care.</p>
                    </div>
                </div>
            </div><!-- /inset -->

        </div><!-- /ab2-cv-box -->
    </section>

    <!-- ═══════════════════════════════════════════════════════════════
         MEDIA & NEWS — au-news (ported from v1)
    ═══════════════════════════════════════════════════════════════ -->
    <section class="au-news" id="auNews">
        <div class="au-news-wrap">
            <div class="au-news-header">
                <div>
                    <div class="au-news-eyebrow">Media &amp; News</div>
                    <h2 class="au-news-title">Our Latest<br><em>Updates</em></h2>
                </div>
                <a href="<?php echo home_url('/newsroom'); ?>" class="btn-outline">View All</a>
            </div>
            <div class="au-news-grid">
                <article class="au-news-card">
                    <div class="au-news-card-img-wrap">
                        <span class="au-news-badge">Milestone</span>
                        <img src="<?php echo esc_url( $uri ); ?>/assets/images/news-pgcil-approval.jpg" alt="PGCIL 400 KV Approval" loading="lazy">
                    </div>
                    <div class="au-news-card-body">
                        <h3 class="au-news-card-title">Power Grid Corporation India Ltd &mdash; 400 KV Class Approval</h3>
                        <p class="au-news-card-excerpt">Approved by PGCIL for supply of pre-compressed pressboard, laminated pressboard and machined &amp; moulded components for up to 400 KV class rating transformers.</p>
                        <a href="<?php echo home_url('/newsroom'); ?>" class="au-news-card-link">Read More <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
                    </div>
                </article>
                <article class="au-news-card">
                    <div class="au-news-card-img-wrap">
                        <span class="au-news-badge">Rating</span>
                        <img src="<?php echo esc_url( $uri ); ?>/assets/images/news-crisil-rating.jpg" alt="CRISIL BBB Rating" loading="lazy">
                    </div>
                    <div class="au-news-card-body">
                        <h3 class="au-news-card-title">CRISIL BBB Investment Grade Rating Achieved</h3>
                        <p class="au-news-card-excerpt">We are now BBB rated by CRISIL &mdash; reflecting our strong financial position and creditworthiness in the Indian power sector market.</p>
                        <a href="<?php echo home_url('/newsroom'); ?>" class="au-news-card-link">Read More <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
                    </div>
                </article>
                <article class="au-news-card">
                    <div class="au-news-card-img-wrap">
                        <span class="au-news-badge">Recognition</span>
                        <img src="<?php echo esc_url( $uri ); ?>/assets/images/news-export-house.jpg" alt="Star Export House" loading="lazy">
                    </div>
                    <div class="au-news-card-body">
                        <h3 class="au-news-card-title">One Star Export House Certification by DGFT</h3>
                        <p class="au-news-card-excerpt">Honoured with the prestigious One Star Export House Certificate by the Directorate General of Foreign Trade, Government of India. Valid until March 2028.</p>
                        <a href="<?php echo home_url('/newsroom'); ?>" class="au-news-card-link">Read More <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════════════════════
         UPCOMING EVENTS — au-events (ported from v1)
    ═══════════════════════════════════════════════════════════════ -->
    <section class="au-events" id="auEvents">
        <div class="au-events-wrap">
            <div class="au-events-inner">
                <div class="au-events-eyebrow">Upcoming Events</div>
                <h2 class="au-events-title">Connect With Us</h2>
                <div class="au-events-grid">
                    <div class="au-event-card">
                        <div class="au-event-logo-wrap">
                            <img src="<?php echo esc_url( $uri ); ?>/assets/images/event-messe-dusseldorf.png" alt="Messe Dusseldorf" loading="lazy">
                        </div>
                        <div class="au-event-info">
                            <h3 class="au-event-name">Messe Dusseldorf</h3>
                            <p class="au-event-meta">13&ndash;17 Apr 2026 &middot; Booth C82-5</p>
                        </div>
                    </div>
                    <div class="au-event-card">
                        <div class="au-event-logo-wrap">
                            <img src="<?php echo esc_url( $uri ); ?>/assets/images/event-cwieme-berlin.png" alt="CWIEME Berlin" loading="lazy">
                        </div>
                        <div class="au-event-info">
                            <h3 class="au-event-name">CWIEME Berlin</h3>
                            <p class="au-event-meta">19&ndash;21 May 2026 &middot; Booth 27A50</p>
                        </div>
                    </div>
                    <div class="au-event-card">
                        <div class="au-event-logo-wrap">
                            <img src="<?php echo esc_url( $uri ); ?>/assets/images/event-elecrama.png" alt="ELECRAMA 2027" loading="lazy">
                        </div>
                        <div class="au-event-info">
                            <h3 class="au-event-name">ELECRAMA 2027</h3>
                            <p class="au-event-meta">20&ndash;24 Feb 2027 &middot; 17th Edition</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════════════════════
         INSTAGRAM FEED — au-insta (ported from v1)
    ═══════════════════════════════════════════════════════════════ -->
    <section class="au-insta" id="auInsta">
        <div class="au-insta-wrap">
            <div class="au-insta-header">
                <div class="au-insta-eyebrow">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    @umangboardslimited
                </div>
                <h2 class="au-insta-title">Follow Us on <em>Instagram</em></h2>
                <a href="https://instagram.com/umangboardslimited" target="_blank" rel="noopener" class="au-insta-follow btn-outline-light">Follow Us</a>
            </div>

            <?php if ( shortcode_exists('instagram-feed') ) : ?>
                <?php echo do_shortcode('[instagram-feed num=6 cols=6 showheader=false showbutton=false showfollow=false]'); ?>
            <?php else : ?>
            <div class="au-insta-grid">
                <?php
                $insta_placeholders = [
                    ['factory-aerial-drone.jpg', 'Manufacturing Excellence'],
                    ['facility-aerial.jpg', 'Our Facility'],
                    ['product-transformer-insulation.jpg', 'Transformer Insulation'],
                    ['product-winding-wire.jpg', 'Winding Wires'],
                    ['boardroom.jpg', 'Leadership'],
                    ['app-power-transformers.jpg', 'Power Transformers'],
                ];
                foreach ($insta_placeholders as $ph) : ?>
                <a href="https://instagram.com/umangboardslimited" target="_blank" rel="noopener" class="au-insta-tile">
                    <img src="<?php echo esc_url( $uri ); ?>/assets/images/<?php echo $ph[0]; ?>" alt="<?php echo esc_attr($ph[1]); ?>" loading="lazy">
                    <div class="au-insta-overlay">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
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

<script src="<?php echo esc_url( $uri ); ?>/assets/js/about-v2.js?ver=<?php echo UBL_VERSION; ?>"></script>
<?php get_footer(); ?>
