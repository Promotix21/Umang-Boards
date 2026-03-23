<?php
/**
 * Template Name: Homepage
 * Front page template
 */
get_header();
?>

    <!-- ================================================
         ENERGY FLOW PIPES (SVG decorative layer)
         ================================================ -->
    <div class="energy-pipes" id="energyPipes" aria-hidden="true">
        <svg class="pipe-svg" id="pipeSvg" preserveAspectRatio="none">
            <defs>
                <linearGradient id="pipeGlow" gradientUnits="userSpaceOnUse">
                    <stop offset="0%" stop-color="transparent" />
                    <stop offset="35%" stop-color="#C8A84B" stop-opacity="0.4" />
                    <stop offset="50%" stop-color="#FFFFFF" stop-opacity="0.95" />
                    <stop offset="65%" stop-color="#C8A84B" stop-opacity="0.4" />
                    <stop offset="100%" stop-color="transparent" />
                </linearGradient>
                <filter id="pipeBlur" x="-20%" y="-20%" width="140%" height="140%">
                    <feGaussianBlur stdDeviation="3" />
                </filter>
            </defs>
            <!-- Segment 1: Right side of hero, curves down -->
            <g class="pipe-segment" data-pipe="1">
                <path class="pipe-outline" />
                <path class="pipe-current" />
            </g>
            <!-- Segment 2: Left side, between Products and Facility -->
            <g class="pipe-segment" data-pipe="2">
                <path class="pipe-outline" />
                <path class="pipe-current" />
            </g>
            <!-- Segment 3: Right side, between Events and CTA -->
            <g class="pipe-segment" data-pipe="3">
                <path class="pipe-outline" />
                <path class="pipe-current" />
            </g>
        </svg>
    </div>

    <?php
    $hero_video = ubl_field( 'hero_video', UBL_URI . '/assets/images/Advanced_Electrical_Insulation_Manufacturing.mp4' );
    ?>
    <section class="s-hero" id="sHero">
        <div class="hero-split">
            <!-- LEFT: Text content -->
            <div class="hero-text">
                <div class="hero-eyebrow">
                    <div class="hero-eyebrow-line"></div>
                    <span><?php echo esc_html( ubl_field( 'hero_eyebrow', 'Since 1999 — Jaipur, India' ) ); ?></span>
                </div>

                <h1 class="hero-title">
                    <span class="hero-title-line"><span class="htl-inner"><?php echo esc_html( ubl_field( 'hero_title_line1', "Powering Worlds'" ) ); ?></span></span>
                    <span class="hero-title-line"><span class="htl-inner"><em><?php echo esc_html( ubl_field( 'hero_title_line2', 'Electric Future' ) ); ?></em></span></span>
                </h1>

                <p class="hero-subtitle"><?php echo esc_html( ubl_field( 'hero_subtitle', 'Manufacturing high quality Transformer insulation solutions and winding wires.' ) ); ?></p>

                <div class="hero-stats">
                    <?php
                    $stats = ubl_field( 'hero_stats' );
                    if ( $stats ) :
                        foreach ( $stats as $stat ) : ?>
                            <div class="hero-stat">
                                <div class="hero-stat-num" data-target="<?php echo esc_attr( $stat['number'] ); ?>" data-suffix="<?php echo esc_attr( $stat['suffix'] ); ?>">0</div>
                                <div class="hero-stat-label"><?php echo esc_html( $stat['label'] ); ?></div>
                            </div>
                        <?php endforeach;
                    else : ?>
                        <div class="hero-stat">
                            <div class="hero-stat-num" data-target="25" data-suffix="+">0</div>
                            <div class="hero-stat-label">Years of Excellence</div>
                        </div>
                        <div class="hero-stat">
                            <div class="hero-stat-num" data-target="61" data-suffix="+">0</div>
                            <div class="hero-stat-label">Countries Served</div>
                        </div>
                        <div class="hero-stat">
                            <div class="hero-stat-num" data-target="400" data-suffix=" kV">0</div>
                            <div class="hero-stat-label">PGCIL Approved</div>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="hero-cta">
                    <a href="<?php echo esc_url( ubl_field( 'hero_cta1_url', '/products' ) ); ?>" class="btn-primary" data-cursor="hover">
                        <span><?php echo esc_html( ubl_field( 'hero_cta1_text', 'Explore Solutions' ) ); ?></span>
                        <div class="btn-arrow"></div>
                    </a>
                    <a href="<?php echo esc_url( ubl_field( 'hero_cta2_url', '/about-us' ) ); ?>" class="btn-outline hero-btn-outline" data-cursor="hover"><?php echo esc_html( ubl_field( 'hero_cta2_text', 'Our Story' ) ); ?></a>
                </div>
            </div>

            <!-- RIGHT: Video box that expands on scroll -->
            <div class="hero-video-box" id="heroVideoBox">
                <video autoplay loop muted playsinline class="hero-video">
                    <source src="<?php echo esc_url( $hero_video ); ?>" type="video/mp4">
                </video>
            </div>
        </div>

        <div class="scroll-cue">
            <span>Scroll</span>
            <div class="scroll-cue-line"></div>
        </div>
    </section>

    <!-- ================================================
         SECTION 2 — VALUE PROPOSITION (9 Items)
         ================================================ -->
    <section class="s-value" id="sValue">
        <div class="s-value-inner">
            <div class="s-value-header" id="valueHeader">
                <div class="section-eyebrow"><?php echo esc_html( ubl_field( 'value_eyebrow', 'Why Umang Boards' ) ); ?></div>
                <h2 class="section-title"><?php echo wp_kses_post( ubl_field( 'value_title', 'Built on Trust,<br>Driven by <em>Excellence</em>' ) ); ?></h2>
                <p class="section-desc"><?php echo esc_html( ubl_field( 'value_desc', "From a single pressboard unit in 1999 to India's most trusted name in transformer insulation — delivering quality that powers critical infrastructure worldwide." ) ); ?></p>
            </div>

            <!-- FEATURE ROW 1: Manufacturing legacy — image + oversized stat -->
            <div class="vf-row">
                <div class="vf-media">
                    <img src="<?php echo UBL_URI; ?>/assets/images/Mfg Hero Background.jpg" alt="Umang Boards Manufacturing Facility" class="vf-media-img">
                    <div class="vf-media-badge">Est. 1999 &mdash; Jaipur, Rajasthan</div>
                </div>
                <div class="vf-content">
                    <div class="vf-eyebrow">Manufacturing Legacy</div>
                    <div class="vf-giant-num">25<em>+</em></div>
                    <div class="vf-giant-label">Years of Continuous<br>Manufacturing Excellence</div>
                    <p class="vf-body">From a single pressboard unit in 1999 to two state-of-the-art production facilities — built on decades of process mastery, R&amp;D investment and zero-compromise quality.</p>
                    <a href="/about-us" class="vf-cta">Our Story &rarr;</a>
                </div>
            </div>

            <!-- HORIZONTAL FACTS BAND — no boxes, pure typography -->
            <div class="vf-facts-band">
                <div class="vf-fact">
                    <div class="vf-fact-num">15<span>+</span></div>
                    <div class="vf-fact-label">Export Countries</div>
                </div>
                <div class="vf-fact-rule"></div>
                <div class="vf-fact">
                    <div class="vf-fact-num">400<span>+</span></div>
                    <div class="vf-fact-label">Employee Strength</div>
                </div>
                <div class="vf-fact-rule"></div>
                <div class="vf-fact">
                    <div class="vf-fact-num">400<span>kV</span></div>
                    <div class="vf-fact-label">PGCIL Class Approved</div>
                </div>
                <div class="vf-fact-rule"></div>
                <div class="vf-fact">
                    <div class="vf-fact-num">2</div>
                    <div class="vf-fact-label">Manufacturing Facilities</div>
                </div>
            </div>

            <!-- FEATURE ROW 2: Certifications + Made in India — reversed layout -->
            <div class="vf-row vf-row-rev">
                <div class="vf-content">
                    <div class="vf-eyebrow">Quality &amp; Certifications</div>
                    <h3 class="vf-heading">Made in India.<br>Certified for the World.</h3>
                    <p class="vf-body">Every product leaving our facility carries the weight of internationally recognised certifications — not as a formality, but as proof of process.</p>
                    <div class="vf-cert-list">
                        <div class="vf-cert-item">
                            <div class="vf-cert-name">ISO 9001 &middot; ISO 14001 &middot; OHSAS 45001</div>
                            <div class="vf-cert-sub">Quality, Environment &amp; Safety Management</div>
                        </div>
                        <div class="vf-cert-item">
                            <div class="vf-cert-name">NABL Accredited Laboratory</div>
                            <div class="vf-cert-sub">IEC/ISO 17025 — in-house dielectric &amp; mechanical testing</div>
                        </div>
                        <div class="vf-cert-item">
                            <div class="vf-cert-name">PGCIL Approved — 400 kV Class</div>
                            <div class="vf-cert-sub">India's highest voltage class for insulation manufacturers</div>
                        </div>
                    </div>
                    <a href="/certifications" class="vf-cta">View Certifications &rarr;</a>
                </div>
                <div class="vf-media">
                    <img src="<?php echo UBL_URI; ?>/assets/images/Transformer Insulations.jpg" alt="Quality Manufacturing" class="vf-media-img">
                    <div class="vf-media-badge vf-badge-right">
                        <svg viewBox="0 0 20 20" fill="currentColor" width="14"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        Make in India
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================================================
         SECTION 3 — PRODUCT PORTFOLIO (Tabbed + 3-Level Finder)
         ================================================ -->
    <section class="s-products" id="sProducts">
        <div class="s-products-inner">
            <div class="s-products-header" id="productsHeader">
                <div class="section-eyebrow"><?php echo esc_html( ubl_field( 'products_eyebrow', 'Product Portfolio' ) ); ?></div>
                <h2 class="section-title"><?php echo wp_kses_post( ubl_field( 'products_title', 'Three Pillars of<br><em>Insulation Excellence</em>' ) ); ?></h2>
                <p class="section-desc"><?php echo esc_html( ubl_field( 'products_desc', "A vertically integrated suite powering the world's electrical infrastructure — from cellulose pressboards to precision winding wires and specialty chemicals." ) ); ?></p>
            </div>

            <!-- Tab Modes -->
            <div class="product-tab-modes">
                <button class="product-mode active" data-mode="byProduct">By Products</button>
                <button class="product-mode" data-mode="byApplication">By Applications</button>
                <button class="product-mode" data-mode="byBusiness">By Business</button>
            </div>

            <!-- Mode 1: By Products (default — existing tabs) -->
            <div class="product-mode-panel active" id="modeByProduct">
                <div class="product-tabs">
                    <button class="product-tab active" data-tab="panelInsulation">
                        <svg class="tab-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        Transformer Insulations
                    </button>
                    <button class="product-tab" data-tab="panelWires">
                        <svg class="tab-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83M16.62 12l-5.74 9.94"/></svg>
                        Winding Wires
                    </button>
                    <button class="product-tab" data-tab="panelChemicals">
                        <svg class="tab-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M10 2v7.527a2 2 0 01-.211.896L4.72 20.55a1 1 0 00.9 1.45h12.76a1 1 0 00.9-1.45l-5.069-10.127A2 2 0 0114 9.527V2"/><path d="M8.5 2h7"/></svg>
                        Insulating Chemicals
                    </button>
                </div>

                <!-- Panel 1: Transformer Insulations -->
                <div class="product-panel active" id="panelInsulation">
                    <div class="product-panel-grid">
                        <div class="product-panel-visual">
                            <img src="<?php echo UBL_URI; ?>/assets/images/Transformer Insulations.jpg" alt="Transformer Insulations" class="product-panel-img">
                        </div>
                        <div>
                            <span class="product-tag">Core Business</span>
                            <h3 class="product-panel-title">Transformer Insulations</h3>
                            <p class="product-panel-desc">India's only manufacturer of non-metallic particle pressboards. Our cellulose-based insulation range is PGCIL approved for transformers up to 400 kV class — serving every major power and distribution transformer OEM worldwide.</p>
                            <ul class="product-list">
                                <li>Cellulose Pressboards</li>
                                <li>Laminated Boards</li>
                                <li>Machined Components</li>
                                <li>Moulded Parts</li>
                                <li>Insulation Papers</li>
                                <li>Transformer Accessories</li>
                            </ul>
                            <a href="/transformer-insulations" class="btn-text" data-cursor="hover">
                                Explore Range
                                <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Panel 2: Winding Wires -->
                <div class="product-panel" id="panelWires" style="display:none;">
                    <div class="product-panel-grid">
                        <div class="product-panel-visual">
                            <img src="<?php echo UBL_URI; ?>/assets/images/Winding Wires.jpg" alt="Winding Wires" class="product-panel-img">
                        </div>
                        <div>
                            <span class="product-tag">Conductors</span>
                            <h3 class="product-panel-title">Winding Wires</h3>
                            <p class="product-panel-desc">Paper and film insulated copper and aluminium wires engineered for power and distribution transformers. Precision-manufactured to international standards with consistent electrical performance across demanding operating conditions.</p>
                            <ul class="product-list">
                                <li>Paper Insulated Copper</li>
                                <li>Film Insulated Copper</li>
                                <li>Aluminium Winding Wires</li>
                            </ul>
                            <a href="/winding-wires" class="btn-text" data-cursor="hover">
                                Explore Range
                                <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Panel 3: Insulating Chemicals -->
                <div class="product-panel" id="panelChemicals" style="display:none;">
                    <div class="product-panel-grid">
                        <div class="product-panel-visual">
                            <img src="<?php echo UBL_URI; ?>/assets/images/Insulating Chemicals.jpg" alt="Insulating Chemicals" class="product-panel-img">
                        </div>
                        <div>
                            <span class="product-tag">Specialty Chemicals</span>
                            <h3 class="product-panel-title">Insulating Chemicals</h3>
                            <p class="product-panel-desc">Wire enamels, impregnating resins, and insulating varnishes formulated for superior dielectric performance. Serving electrical equipment manufacturers across India and international markets.</p>
                            <ul class="product-list">
                                <li>Wire Enamels</li>
                                <li>Impregnating Resins</li>
                                <li>Insulating Varnishes</li>
                            </ul>
                            <a href="/insulating-chemical" class="btn-text" data-cursor="hover">
                                Explore Range
                                <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Catch Phrase CTA -->
                <div class="product-cta-box">
                    <div class="product-cta-text">
                        <h4 class="product-cta-title"><?php echo esc_html( ubl_field( 'product_cta_title', 'Something caught your eye?' ) ); ?></h4>
                        <p class="product-cta-desc"><?php echo esc_html( ubl_field( 'product_cta_desc', 'Connect with our sales team for pricing, samples, and technical specifications.' ) ); ?></p>
                    </div>
                    <a href="/contact-us" class="btn-primary product-cta-btn" data-cursor="hover">
                        <span>Connect with Sales</span>
                        <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

            <!-- Mode 2: By Applications -->
            <div class="product-mode-panel" id="modeByApplication" style="display:none;">
                <div class="app-carousel-wrapper">
                    <!-- Left: Title + Description + Nav Arrows -->
                    <div class="app-carousel-left">
                        <h3 class="app-carousel-title">Applications We Serve</h3>
                        <p class="app-carousel-desc">From power grids to electric vehicles, our insulation and winding solutions serve the full spectrum of electrical applications — engineered for reliability at every voltage class.</p>
                        <div class="app-carousel-nav">
                            <button class="app-carousel-arrow" id="appCarouselPrev" aria-label="Scroll left">
                                <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                            </button>
                            <button class="app-carousel-arrow" id="appCarouselNext" aria-label="Scroll right">
                                <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </button>
                        </div>
                    </div>
                    <!-- Right: Carousel with navy background shape -->
                    <div class="app-carousel-right">
                        <div class="app-carousel-bg-shape"></div>
                        <div class="app-carousel-track" id="appCarouselTrack">
                            <!-- Cards are injected by JS (triplicated for infinite scroll) -->
                        </div>
                    </div>
                    <!-- Mobile nav arrows -->
                    <div class="app-carousel-nav-mobile">
                        <button class="app-carousel-arrow" id="appCarouselPrevMobile" aria-label="Scroll left">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                        </button>
                        <button class="app-carousel-arrow" id="appCarouselNextMobile" aria-label="Scroll right">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mode 3: By Business -->
            <div class="product-mode-panel" id="modeByBusiness" style="display:none;">
                <div class="business-cards">
                    <div class="biz-card" data-cursor="hover">
                        <div class="biz-card-header">
                            <div class="biz-card-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                            </div>
                            <h4 class="biz-card-title">Transformer Insulation</h4>
                        </div>
                        <p class="biz-card-desc">Core business — pressboards, machined components, moulded parts, insulation papers, and transformer accessories.</p>
                        <a href="/transformer-insulations" class="btn-text" data-cursor="hover">
                            View Products
                            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                    <div class="biz-card" data-cursor="hover">
                        <div class="biz-card-header">
                            <div class="biz-card-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83M16.62 12l-5.74 9.94"/></svg>
                            </div>
                            <h4 class="biz-card-title">Winding Wires</h4>
                        </div>
                        <p class="biz-card-desc">Paper & film insulated copper and aluminium winding wires for transformers, motors, and electrical equipment.</p>
                        <a href="/winding-wires" class="btn-text" data-cursor="hover">
                            View Products
                            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                    <div class="biz-card" data-cursor="hover">
                        <div class="biz-card-header">
                            <div class="biz-card-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M10 2v7.527a2 2 0 01-.211.896L4.72 20.55a1 1 0 00.9 1.45h12.76a1 1 0 00.9-1.45l-5.069-10.127A2 2 0 0114 9.527V2"/><path d="M8.5 2h7"/></svg>
                            </div>
                            <h4 class="biz-card-title">Insulating Chemicals</h4>
                        </div>
                        <p class="biz-card-desc">Wire enamels, impregnating resins, insulating varnishes, bonding agents, and specialty chemicals.</p>
                        <a href="/insulating-chemical" class="btn-text" data-cursor="hover">
                            View Products
                            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 3-Level Product Finder: Business > Solutions > Product -->
            <div class="product-finder">
                <div class="pf-title">Find Your Product</div>
                <div class="pf-selects">
                    <div class="pf-select-group">
                        <label class="pf-label" for="pfBusiness">Business</label>
                        <select class="pf-select" id="pfBusiness">
                            <option value="">Select Business</option>
                            <option value="insulation">Transformer Insulation</option>
                            <option value="wires">Winding Wires</option>
                            <option value="chemicals">Insulating Chemicals</option>
                        </select>
                    </div>
                    <div class="pf-select-group">
                        <label class="pf-label" for="pfSolution">Solution</label>
                        <select class="pf-select" id="pfSolution" disabled>
                            <option value="">Select Solution</option>
                        </select>
                    </div>
                    <div class="pf-select-group">
                        <label class="pf-label" for="pfProduct">Product</label>
                        <select class="pf-select" id="pfProduct" disabled>
                            <option value="">Select Product</option>
                        </select>
                    </div>
                    <a href="#" class="btn-primary pf-go-btn" id="pfGoBtn" data-cursor="hover" style="pointer-events:none; opacity:0.5;">
                        <span>Go</span>
                        <div class="btn-arrow"></div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ================================================
         FACILITY PARALLAX STRIP
         ================================================ -->
    <div class="s-facility" id="sFacility">
        <div class="parallax-box">
            <div class="facility-parallax"></div>
            <div class="facility-overlay"></div>
            <div class="facility-caption">
                <div class="facility-caption-inner">
                    <div class="facility-tag">Manufacturing Campus · Jaipur, Rajasthan</div>
                    <div class="facility-headline">Built for Scale.<br>Engineered for Precision.</div>
                    <div class="facility-sub">50,000 sq. ft. · 3 Production Lines · Export-Ready Logistics</div>
                </div>
            </div>
        </div>
    </div>

    <!-- ================================================
         SECTION 4 — GLOBAL REACH (Interactive Export Map)
         ================================================ -->
    <section id="export-map-section" class="export-map-section s-global">

        <!-- Subtle background grid -->
        <div class="bg-grid"></div>

        <!-- ===== LEFT COLUMN — Text & Stats (40%) ===== -->
        <div class="col-left">

            <div class="col-left__content">
                <div class="eyebrow">INFRASTRUCTURE NETWORK MAP</div>
                <h2 class="headline">Powering Transformers <span class="accent">Across the Globe</span></h2>
                <p class="subtext">Real-time visualization of export routes for electrical insulation materials from India to 15+ countries worldwide.</p>

                <!-- Stats grid -->
                <div class="stats-grid">
                    <div class="stat-card">
                        <span class="stat-card__number" data-count="15">0</span>
                        <span class="stat-card__label">Export Countries</span>
                    </div>
                    <div class="stat-card">
                        <span class="stat-card__number" data-count="5">0</span>
                        <span class="stat-card__label">Primary Markets</span>
                    </div>
                    <div class="stat-card">
                        <span class="stat-card__number" data-count="3">0</span>
                        <span class="stat-card__label">Product Lines</span>
                    </div>
                    <div class="stat-card">
                        <span class="stat-card__number" data-count="3">0</span>
                        <span class="stat-card__label">Continental Regions</span>
                    </div>
                </div>

                <!-- Region legend -->
                <div class="legend">
                    <div class="legend__item">
                        <span class="legend__dot legend__dot--europe"></span>
                        <span class="legend__text">Europe</span>
                    </div>
                    <div class="legend__item">
                        <span class="legend__dot legend__dot--asia"></span>
                        <span class="legend__text">Asia</span>
                    </div>
                    <div class="legend__item">
                        <span class="legend__dot legend__dot--namerica"></span>
                        <span class="legend__text">N. America</span>
                    </div>
                    <div class="legend__item">
                        <span class="legend__dot legend__dot--secondary"></span>
                        <span class="legend__text">Other Markets</span>
                    </div>
                </div>
            </div>

            <!-- Bottom HUD line -->
            <div class="hud-micro hud-micro--bottom">
                <span class="hud-micro__text">ORIGIN: INDIA 20.59°N 78.96°E</span>
                <span class="hud-micro__text">ROUTES: 5 PRIMARY</span>
            </div>
        </div>

        <!-- ===== RIGHT COLUMN — Map (60%) ===== -->
        <div class="col-right">
            <div class="map-container" id="map-container">
                <!-- Particle overlay canvas -->
                <canvas id="particle-canvas"></canvas>

                <!-- Main SVG world map -->
                <svg id="world-map" viewBox="0 0 1000 500" preserveAspectRatio="xMidYMid meet">
                    <defs>
                        <!-- Glow filters -->
                        <filter id="glow-strong" x="-50%" y="-50%" width="200%" height="200%">
                            <feGaussianBlur stdDeviation="4" result="blur"/>
                            <feComposite in="SourceGraphic" in2="blur" operator="over"/>
                        </filter>
                        <filter id="glow-soft" x="-50%" y="-50%" width="200%" height="200%">
                            <feGaussianBlur stdDeviation="2.5" result="blur"/>
                            <feComposite in="SourceGraphic" in2="blur" operator="over"/>
                        </filter>
                        <filter id="glow-origin" x="-100%" y="-100%" width="300%" height="300%">
                            <feGaussianBlur stdDeviation="8" result="blur"/>
                            <feComposite in="SourceGraphic" in2="blur" operator="over"/>
                        </filter>

                        <!-- Origin radial glow -->
                        <radialGradient id="origin-glow" cx="50%" cy="50%" r="50%">
                            <stop offset="0%" stop-color="var(--map-accent)" stop-opacity="0.5"/>
                            <stop offset="60%" stop-color="var(--map-accent)" stop-opacity="0.1"/>
                            <stop offset="100%" stop-color="var(--map-accent)" stop-opacity="0"/>
                        </radialGradient>
                    </defs>

                    <!-- Country paths rendered by JS -->
                    <g id="countries-group" class="countries-group"></g>

                    <!-- Export route lines -->
                    <g id="routes-group" class="routes-group"></g>

                    <!-- Energy pulse particles on routes -->
                    <g id="pulses-group" class="pulses-group"></g>

                    <!-- Secondary presence dots -->
                    <g id="secondary-nodes" class="secondary-nodes"></g>

                    <!-- Primary market nodes -->
                    <g id="nodes-group" class="nodes-group"></g>

                    <!-- Origin node (India) -->
                    <g id="origin-node" class="origin-node"></g>
                </svg>
            </div>
        </div>

        <!-- Tooltip panel (glassmorphism) -->
        <div class="tooltip-panel" id="tooltip-panel">
            <div class="tooltip-panel__header">
                <span class="tooltip-panel__region" id="tooltip-region">EUROPE</span>
                <span class="tooltip-panel__status">
                    <span class="hud-indicator hud-indicator--sm"></span>
                    ACTIVE
                </span>
            </div>
            <h3 class="tooltip-panel__country" id="tooltip-country">Turkey</h3>
            <div class="tooltip-panel__divider"></div>
            <div class="tooltip-panel__section">
                <span class="tooltip-panel__label">PRODUCTS EXPORTED</span>
                <ul class="tooltip-panel__products" id="tooltip-products">
                    <li>Electrical Insulation Pressboards</li>
                    <li>Transformer Insulation Kraft Paper</li>
                    <li>Paperboard Transformer Components</li>
                </ul>
            </div>
            <div class="tooltip-panel__row">
                <div class="tooltip-panel__section">
                    <span class="tooltip-panel__label">SECTOR</span>
                    <span class="tooltip-panel__value" id="tooltip-sector">Power · Transformer · Electrical</span>
                </div>
            </div>
            <div class="tooltip-panel__metrics">
                <div class="tooltip-panel__metric">
                    <span class="tooltip-panel__label">CONNECTION STRENGTH</span>
                    <div class="tooltip-panel__bar">
                        <div class="tooltip-panel__bar-fill" id="tooltip-bar"></div>
                    </div>
                </div>
                <div class="tooltip-panel__metric">
                    <span class="tooltip-panel__label">PARTNERSHIP</span>
                    <span class="tooltip-panel__value tooltip-panel__value--accent" id="tooltip-years">8+ Years</span>
                </div>
            </div>
        </div>

    </section>

    <!-- ================================================
         SECTION 5 — CSR
         ================================================ -->
    <section class="s-csr" id="sCSR">
        <div class="s-csr-inner">
            <div class="s-csr-grid">
                <div class="s-csr-content" id="csrContent">
                    <div class="section-eyebrow">Corporate Social Responsibility</div>
                    <h2 class="section-title">Growing Together,<br><em>Responsibly</em></h2>
                    <p class="section-desc">At Umang Boards, we believe in sustainable growth that creates a positive impact on communities, the environment, and our stakeholders.</p>

                    <div class="csr-highlights">
                        <div class="csr-item">
                            <div class="csr-item-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                            </div>
                            <div>
                                <div class="csr-item-title">Environmental Stewardship</div>
                                <div class="csr-item-desc">ISO 14001 certified operations with a commitment to minimising environmental footprint through responsible manufacturing practices.</div>
                            </div>
                        </div>
                        <div class="csr-item">
                            <div class="csr-item-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
                            </div>
                            <div>
                                <div class="csr-item-title">Community Development</div>
                                <div class="csr-item-desc">Investing in education, healthcare, and skill development initiatives in the communities surrounding our manufacturing facilities.</div>
                            </div>
                        </div>
                        <div class="csr-item">
                            <div class="csr-item-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            </div>
                            <div>
                                <div class="csr-item-title">Workplace Safety</div>
                                <div class="csr-item-desc">OHSAS 45001 certified. Prioritising employee well-being with rigorous safety standards and continuous training programmes.</div>
                            </div>
                        </div>
                    </div>

                    <a href="/csr" class="btn-text" data-cursor="hover" style="margin-top: 2rem;">
                        Learn More About CSR
                        <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>

                <div class="s-csr-visual" id="csrVisual">
                    <img src="<?php echo UBL_URI; ?>/assets/images/Secondary Static.jpg" alt="CSR Initiatives at Umang Boards" class="csr-img">
                </div>
            </div>
        </div>
    </section>

    <!-- ================================================
         SECTION 6 — MEDIA & NEWS
         ================================================ -->
    <section class="s-media-news" id="sMediaNews">
        <div class="s-media-news-inner">
            <!-- Watermark -->
            <div class="media-news-watermark" aria-hidden="true">UPDATES</div>

            <div class="s-media-news-header" id="mediaNewsHeader">
                <div class="section-eyebrow">Media &amp; News</div>
                <h2 class="section-title">Our Latest<br><em>Updates</em></h2>
                <p class="section-desc">Being a R&amp;D oriented organization, we strive towards bringing innovation to the power distribution sector. All functions including supply chain, value chain, project scheduling, manufacturing, services and spares, technology, R&amp;D, etc. are integrated to give you the best results.</p>
            </div>

            <!-- News Updates -->
            <div class="mn-news-block">
                <h3 class="mn-block-title">News Updates</h3>
                <div class="mn-news-list">
                    <div class="mn-news-item" data-cursor="hover">
                        <span class="mn-news-tag">Milestone</span>
                        <h4 class="mn-news-title">Power Grid Corporation India Ltd 400 KV Class Approval</h4>
                        <p class="mn-news-desc">Umang Boards Limited has been approved by Power Grid Corporation of India for supply of pre-compressed pressboard, laminated pressboard and machined and moulded components for up to 400 KV class rating transformers.</p>
                    </div>
                    <div class="mn-news-item" data-cursor="hover">
                        <span class="mn-news-tag">Rating</span>
                        <h4 class="mn-news-title">We Are Now BBB Rated by CRISIL</h4>
                        <p class="mn-news-desc">It is an investment grade rating achieved by us — reflecting our strong financial position and creditworthiness in the market.</p>
                    </div>
                    <div class="mn-news-item" data-cursor="hover">
                        <span class="mn-news-tag">Recognition</span>
                        <h4 class="mn-news-title">One Star Export House Certification</h4>
                        <p class="mn-news-desc">Umang Boards Limited has been honoured with the prestigious One Star Export House Certificate by DGFT, Government of India. Valid from 11th November 2023 to 31 March 2028.</p>
                    </div>
                </div>
            </div>

            <!-- Two-column: Social + Trade Fairs -->
            <div class="mn-two-col">
                <!-- Left: Instagram -->
                <div class="mn-social-col">
                    <h3 class="mn-block-title">Follow Us on Instagram</h3>
                    <div class="mn-insta-grid">
                        <a href="https://www.instagram.com/umangboards7/" target="_blank" rel="noopener" class="mn-insta-cta" data-cursor="hover">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="5"/><circle cx="17.5" cy="6.5" r="1.5" fill="currentColor" stroke="none"/></svg>
                            <span>@umangboards7</span>
                            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg>
                        </a>
                    </div>

                    <h3 class="mn-block-title" style="margin-top: 2.5rem;">Follow Us on YouTube</h3>
                    <div class="mn-youtube-embed">
                        <iframe src="https://www.youtube.com/embed/svxX0oXME-8" title="Umang Boards Limited" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen loading="lazy"></iframe>
                    </div>
                </div>

                <!-- Right: Trade Fairs -->
                <div class="mn-events-col">
                    <h3 class="mn-block-title">Connect With Us</h3>
                    <div class="mn-event-cards">
                        <a href="https://www.wire-tradefair.com/" target="_blank" rel="noopener" class="mn-event-card" data-cursor="hover">
                            <div class="mn-event-banner">
                                <img src="<?php echo UBL_URI; ?>/assets/images/event-messe-dusseldorf.png" alt="Wire Trade Fair - Messe Dusseldorf" loading="lazy">
                            </div>
                            <div class="mn-event-info">
                                <h4>Messe Dusseldorf</h4>
                                <span class="mn-event-date-text">13 April 2026 – 17 April 2026</span>
                                <span class="mn-event-booth">Visit us at: C82-5</span>
                            </div>
                        </a>
                        <a href="https://berlin.cwiemeevents.com/exhibitors/umang-boards-limited" target="_blank" rel="noopener" class="mn-event-card" data-cursor="hover">
                            <div class="mn-event-banner">
                                <img src="<?php echo UBL_URI; ?>/assets/images/event-cwieme-berlin.png" alt="CWIEME Berlin" loading="lazy">
                            </div>
                            <div class="mn-event-info">
                                <h4>CWIEME Berlin</h4>
                                <span class="mn-event-date-text">19 May 2026 – 21 May 2026</span>
                                <span class="mn-event-booth">Visit us at: 27A50</span>
                            </div>
                        </a>
                        <a href="https://elecrama.com" target="_blank" rel="noopener" class="mn-event-card" data-cursor="hover">
                            <div class="mn-event-banner">
                                <img src="<?php echo UBL_URI; ?>/assets/images/event-elecrama.png" alt="ELECRAMA" loading="lazy">
                            </div>
                            <div class="mn-event-info">
                                <h4>ELECRAMA</h4>
                                <span class="mn-event-date-text">20 February 2027 – 24 February 2027</span>
                                <span class="mn-event-booth">17th Edition — Powering the Future of Energy</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================================================
         BOARDROOM PARALLAX STRIP
         ================================================ -->
    <div class="s-boardroom" id="sBoardroom">
        <div class="parallax-box">
            <div class="boardroom-parallax"></div>
            <div class="boardroom-overlay"></div>
            <div class="boardroom-caption">
                <div class="boardroom-caption-inner">
                    <div class="facility-tag">Corporate Governance · NSE &amp; BSE Listed</div>
                    <div class="facility-headline">Decisions Backed<br>by <em>Data &amp; Integrity.</em></div>
                    <div class="facility-sub">Board-led · SEBI Compliant · CRISIL BBB Rated</div>
                </div>
            </div>
        </div>
    </div>

    <!-- ================================================
         SECTION 7 — INVESTOR RESOURCES (Dark)
         ================================================ -->
    <section class="s-investor-dark" id="sInvestor">
        <div class="s-investor-dark-inner">
            <!-- Watermark -->
            <div class="investor-watermark" aria-hidden="true">INVESTORS</div>

            <div class="s-investor-dark-header" id="investorHeader">
                <div class="investor-dark-eyebrow"><span class="investor-dark-eyebrow-bar"></span> Investors</div>
                <h2 class="investor-dark-title">Investor Resources</h2>
            </div>

            <!-- 3-Column Grid: NSE / BSE / Downloads -->
            <div class="investor-dark-grid">
                <!-- NSE Card -->
                <div class="inv-dark-card" id="invCardNSE">
                    <h3 class="inv-dark-card-heading">NSE</h3>
                    <div class="inv-dark-card-box">
                        <div class="inv-dark-status">Presently</div>
                        <div class="inv-dark-status-val">Un listed</div>
                    </div>
                    <!-- Decorative animated graph SVG -->
                    <div class="inv-dark-graph">
                        <svg viewBox="0 0 200 80" preserveAspectRatio="none" class="inv-graph-svg">
                            <defs>
                                <linearGradient id="graphGrad1" x1="0" y1="0" x2="0" y2="1">
                                    <stop offset="0%" stop-color="var(--gold)" stop-opacity="0.3"/>
                                    <stop offset="100%" stop-color="var(--gold)" stop-opacity="0"/>
                                </linearGradient>
                            </defs>
                            <path class="inv-graph-fill" d="M0,60 Q25,55 50,45 T100,35 T150,50 T200,30 V80 H0 Z" fill="url(#graphGrad1)"/>
                            <path class="inv-graph-line" d="M0,60 Q25,55 50,45 T100,35 T150,50 T200,30" fill="none" stroke="var(--gold)" stroke-width="2"/>
                            <circle class="inv-graph-dot" cx="200" cy="30" r="3" fill="var(--gold)"/>
                        </svg>
                    </div>
                </div>

                <!-- BSE Card -->
                <div class="inv-dark-card" id="invCardBSE">
                    <h3 class="inv-dark-card-heading">BSE</h3>
                    <div class="inv-dark-card-box">
                        <div class="inv-dark-status">Presently</div>
                        <div class="inv-dark-status-val">Un listed</div>
                    </div>
                    <!-- Decorative animated graph SVG -->
                    <div class="inv-dark-graph">
                        <svg viewBox="0 0 200 80" preserveAspectRatio="none" class="inv-graph-svg">
                            <defs>
                                <linearGradient id="graphGrad2" x1="0" y1="0" x2="0" y2="1">
                                    <stop offset="0%" stop-color="var(--gold)" stop-opacity="0.3"/>
                                    <stop offset="100%" stop-color="var(--gold)" stop-opacity="0"/>
                                </linearGradient>
                            </defs>
                            <path class="inv-graph-fill" d="M0,50 Q30,40 60,55 T120,30 T180,45 T200,25 V80 H0 Z" fill="url(#graphGrad2)"/>
                            <path class="inv-graph-line" d="M0,50 Q30,40 60,55 T120,30 T180,45 T200,25" fill="none" stroke="var(--gold)" stroke-width="2"/>
                            <circle class="inv-graph-dot" cx="200" cy="25" r="3" fill="var(--gold)"/>
                        </svg>
                    </div>
                </div>

                <!-- Investor Downloads Card -->
                <div class="inv-dark-card inv-dark-card-downloads" id="invCardDownloads">
                    <h3 class="inv-dark-card-heading">Investor Downloads</h3>
                    <div class="inv-dark-downloads-list">
                        <a href="/investor-login" class="inv-dark-dl-link" data-cursor="hover">
                            <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="var(--gold)" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                            <span>Financial Report 2018-19</span>
                        </a>
                        <a href="/investor-login" class="inv-dark-dl-link" data-cursor="hover">
                            <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="var(--gold)" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                            <span>Financial Report 2019-20</span>
                        </a>
                    </div>
                    <a href="/investor-login" class="inv-dark-login-btn" data-cursor="hover">
                        <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
                        <span>Investor Login</span>
                        <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

            <!-- Bottom CTA -->
            <div class="investor-dark-bottom">
                <a href="/investor-login" class="btn-gold" data-cursor="hover">
                    Investor Relations Portal
                    <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <a href="/corporate-governance" class="btn-outline-light" data-cursor="hover">
                    Corporate Governance
                </a>
            </div>
        </div>
    </section>

    <!-- ================================================
         CTA BAND
         ================================================ -->
    <?php
    $cta_video = ubl_field( 'cta_video_mp4' );
    ?>
    <section class="s-cta" id="sCTA">
        <video autoplay loop muted playsinline class="cta-bg-video">
            <?php if ( $cta_video ) : ?>
                <source src="<?php echo esc_url( $cta_video ); ?>" type="video/mp4">
            <?php else : ?>
                <source src="<?php echo UBL_URI; ?>/assets/images/transformer-assembly.webm" type="video/webm">
                <source src="<?php echo UBL_URI; ?>/assets/images/transformer-assembly.mp4" type="video/mp4">
            <?php endif; ?>
        </video>
        <div class="cta-overlay"></div>
        <div class="s-cta-inner">
            <div class="section-eyebrow-light" id="ctaEyebrow">Partner With Us</div>
            <h2 class="section-title-light" id="ctaTitle"><?php echo wp_kses_post( ubl_field( 'cta_title', 'Ready to Power Your<br>Next <em>Transformer Project</em>?' ) ); ?></h2>
            <p class="section-desc-light" id="ctaDesc" style="margin: 1rem auto 0; text-align: center;"><?php echo esc_html( ubl_field( 'cta_desc', 'Whether you need pressboards for a 400 kV power transformer or insulating varnishes for a distribution unit — our team is ready to engineer the right solution for your specifications.' ) ); ?></p>
            <div class="cta-actions" id="ctaActions">
                <a href="<?php echo esc_url( ubl_field( 'cta_btn1_url', '/contact-us' ) ); ?>" class="btn-gold" data-cursor="hover">
                    <?php echo esc_html( ubl_field( 'cta_btn1_text', 'Request a Quote' ) ); ?>
                    <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <a href="<?php echo esc_url( ubl_field( 'cta_btn2_url', '/downloads' ) ); ?>" class="btn-outline-light" data-cursor="hover">
                    <?php echo esc_html( ubl_field( 'cta_btn2_text', 'Download Catalogue' ) ); ?>
                    <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4M7 10l5 5 5-5M12 15V3"/></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- ================================================
         FOOTER
         ================================================ -->

<?php get_footer(); ?>
