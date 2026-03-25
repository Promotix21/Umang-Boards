<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Umang Boards Limited — Powering World's Electric Future</title>
    <meta name="description" content="India's leading manufacturer of cellulose transformer insulation, winding wires and insulating chemicals. Exporting to 61+ countries since 1999.">
    <?php wp_head(); ?>
</head>
<body <?php body_class( is_front_page() ? '' : 'loaded' ); ?>>

    <!-- Cursor -->
    <div class="cursor" id="cursor"></div>
    <div class="cursor-dot" id="cursorDot"></div>
    <div class="grain"></div>

    <?php if ( is_front_page() ) : ?>
    <!-- ================================================
         PRELOADER — Premium Brand Reveal (CAD-Style)
         ================================================ -->
    <div id="preloader" class="preloader">

        <!-- Phase 1: Technical engineering background layers -->
        <div class="bg-layers">
            <canvas id="noiseCanvas" class="bg-layer bg-layer--noise"></canvas>
            <div class="bg-layer bg-layer--grid"></div>
            <svg id="crosshairsSVG" class="bg-layer bg-layer--crosshairs" aria-hidden="true"></svg>
            <div class="bg-layer bg-layer--vignette"></div>
        </div>

        <!-- Center animation container -->
        <div class="preloader__stage">

            <!-- ===== LOGO SVG ===== -->
            <div class="logo-wrap" id="logoWrap">
                <svg id="logoSVG" viewBox="0 0 596 596" xmlns="http://www.w3.org/2000/svg" class="logo-svg">
                    <defs>
                        <filter id="fxLogoShadow" x="-15%" y="-10%" width="140%" height="140%">
                            <feDropShadow dx="0" dy="3" stdDeviation="6" flood-color="rgba(86,96,102,0.12)" />
                            <feDropShadow dx="0" dy="8" stdDeviation="18" flood-color="rgba(86,96,102,0.06)" />
                        </filter>
                    </defs>

                    <!-- Color 1: Dark Grey -->
                    <g class="logo-group color-1">
                        <path class="logo-path" d="M 98.82 71.21 C 165.21 71.32 231.60 71.22 298.00 71.26 C 336.33 70.73 374.67 71.12 413.00 71.00 C 425.16 71.17 437.34 70.64 449.48 71.28 C 449.22 75.62 450.52 80.25 449.31 84.41 C 400.67 137.71 352.05 191.06 303.30 244.27 C 296.83 251.80 289.68 258.73 283.48 266.49 C 280.09 262.08 275.00 259.61 270.57 256.45 C 260.14 249.23 249.81 241.86 239.42 234.59 C 235.78 231.99 231.78 229.80 228.71 226.49 C 237.99 225.70 247.39 226.23 256.60 224.76 C 256.71 222.90 256.84 221.05 257.01 219.20 C 238.16 203.59 218.70 188.71 199.65 173.35 C 196.08 170.38 192.15 167.84 188.84 164.57 C 197.38 163.58 205.98 163.29 214.53 162.43 C 214.61 160.09 214.67 157.75 214.69 155.42 C 207.31 149.69 199.54 144.48 192.02 138.95 C 177.12 127.84 162.01 117.03 146.95 106.14 C 144.06 108.44 141.46 111.08 139.12 113.94 C 156.94 127.96 174.99 141.72 193.10 155.37 C 190.78 156.03 188.39 156.48 185.97 156.51 C 178.84 156.67 171.75 157.50 164.63 157.73 C 164.53 159.68 164.42 161.63 164.30 163.59 C 183.40 178.90 202.88 193.75 222.14 208.87 C 225.21 211.55 229.51 213.32 231.07 217.35 C 222.08 217.60 213.04 217.19 204.08 218.12 C 204.48 221.00 203.88 224.55 206.31 226.70 C 209.66 229.75 213.58 232.08 217.21 234.79 C 232.05 245.62 246.93 256.38 261.76 267.22 C 265.79 270.10 269.64 273.25 273.96 275.70 C 275.33 274.48 276.71 273.27 278.05 272.03 C 276.11 275.63 272.53 277.86 269.94 280.94 C 235.99 317.98 202.23 355.18 168.27 392.22 C 155.44 406.75 141.96 420.70 129.18 435.28 C 128.61 436.29 127.54 436.55 126.49 436.74 C 120.65 423.01 113.46 409.85 108.49 395.76 C 98.79 365.53 98.75 333.43 98.31 302.01 C 98.32 265.67 98.31 229.34 98.31 193.00 C 98.76 157.34 98.43 121.67 98.54 86.00 C 98.64 81.07 98.22 76.12 98.82 71.21 Z" />
                        <path class="logo-path" d="M 440.45 242.46 C 443.53 239.25 446.08 235.50 449.67 232.82 C 449.96 253.88 449.30 274.95 449.60 296.01 C 449.91 300.05 448.48 303.95 448.71 307.98 C 448.71 326.66 448.98 345.35 448.35 364.02 C 445.66 383.94 442.34 404.24 433.35 422.43 C 429.88 429.88 424.07 435.77 419.36 442.40 C 413.34 450.63 407.90 459.39 400.57 466.58 C 386.28 481.22 367.23 489.77 348.58 497.42 C 325.77 505.81 301.09 507.10 277.01 506.54 C 269.63 506.65 262.35 505.24 254.97 505.17 C 239.27 503.20 223.43 501.54 208.05 497.74 C 210.57 494.10 214.17 491.38 217.01 488.00 C 292.03 406.64 366.07 324.40 440.45 242.46 Z" />
                    </g>

                    <!-- Color 2: Tan -->
                    <g class="logo-group color-2">
                        <path class="logo-path" d="M 410.66 145.66 C 429.81 124.83 448.59 103.65 467.95 83.03 C 478.11 106.25 487.65 129.75 497.71 153.02 C 498.18 154.66 499.80 156.73 498.19 158.24 C 387.62 279.96 277.20 401.85 166.61 523.58 C 166.30 523.59 165.70 523.60 165.40 523.61 C 151.25 504.06 137.26 484.39 123.11 464.85 C 122.43 464.02 121.93 462.59 122.81 461.73 C 218.83 356.43 314.70 250.99 410.66 145.66 Z" />
                    </g>

                    <!-- Color 3: Off-white -->
                    <g class="logo-group color-3">
                        <path class="logo-path" d="M 139.12 113.94 C 141.46 111.08 144.06 108.44 146.95 106.14 C 162.01 117.03 177.12 127.84 192.02 138.95 C 199.54 144.48 207.31 149.69 214.69 155.42 C 214.67 157.75 214.61 160.09 214.53 162.43 C 205.98 163.29 197.38 163.58 188.84 164.57 C 192.15 167.84 196.08 170.38 199.65 173.35 C 218.70 188.71 238.16 203.59 257.01 219.20 C 256.84 221.05 256.71 222.90 256.60 224.76 C 247.39 226.23 237.99 225.70 228.71 226.49 C 231.78 229.80 235.78 231.99 239.42 234.59 C 249.81 241.86 260.14 249.23 270.57 256.45 C 275.00 259.61 280.09 262.08 283.48 266.49 C 281.63 268.30 279.88 270.20 278.05 272.03 C 276.71 273.27 275.33 274.48 273.96 275.70 C 269.64 273.25 265.79 270.10 261.76 267.22 C 246.93 256.38 232.05 245.62 217.21 234.79 C 213.58 232.08 209.66 229.75 206.31 226.70 C 203.88 224.55 204.48 221.00 204.08 218.12 C 213.04 217.19 222.08 217.60 231.07 217.35 C 229.51 213.32 225.21 211.55 222.14 208.87 C 202.88 193.75 183.40 178.90 164.30 163.59 C 164.42 161.63 164.53 159.68 164.63 157.73 C 171.75 157.50 178.84 156.67 185.97 156.51 C 188.39 156.48 190.78 156.03 193.10 155.37 C 174.99 141.72 156.94 127.96 139.12 113.94 Z" />
                    </g>
                </svg>

                <!-- Scanner line -->
                <div class="scanner" id="scanner"></div>
            </div>

            <!-- ===== COMPANY NAME ===== -->
            <div class="brand-text" id="brandText">
                <div class="company-name" id="companyName">
                    <h1 class="brand-name" id="brandName">UMANG BOARDS LIMITED</h1>
                    <!-- tagline removed -->
                </div>
            </div>

        </div>
    </div>
    <?php endif; ?>

    <!-- ================================================
         UTILITY BAR (Top Bar — Two-bar pattern)
         ================================================ -->
    <div class="utility-bar" id="utilityBar">
        <div class="utility-bar-inner">
            <div class="utility-left">
                <!-- NSE/BSE Animated Ticker -->
                <div class="stock-ticker" id="stockTicker">
                    <div class="stock-ticker-track">
                        <div class="stock-ticker-item">
                            <span class="ticker-label">NSE</span>
                            <span class="ticker-symbol">UMANGBOARD</span>
                            <span class="ticker-price" id="tickerNsePrice">₹42.50</span>
                            <span class="ticker-change positive" id="tickerNseChange">+1.20 (2.91%)</span>
                        </div>
                        <span class="ticker-sep">•</span>
                        <div class="stock-ticker-item">
                            <span class="ticker-label">BSE</span>
                            <span class="ticker-symbol">539294</span>
                            <span class="ticker-price" id="tickerBsePrice">₹42.55</span>
                            <span class="ticker-change positive" id="tickerBseChange">+1.15 (2.78%)</span>
                        </div>
                        <span class="ticker-sep">•</span>
                        <div class="stock-ticker-item">
                            <span class="ticker-label">NSE</span>
                            <span class="ticker-symbol">UMANGBOARD</span>
                            <span class="ticker-price">₹42.50</span>
                            <span class="ticker-change positive">+1.20 (2.91%)</span>
                        </div>
                        <span class="ticker-sep">•</span>
                        <div class="stock-ticker-item">
                            <span class="ticker-label">BSE</span>
                            <span class="ticker-symbol">539294</span>
                            <span class="ticker-price">₹42.55</span>
                            <span class="ticker-change positive">+1.15 (2.78%)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="utility-right">
                <!-- E-Catalog / Customer Portal -->
                <a href="/customer-portal" class="utility-link utility-ecatalog" data-cursor="hover">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="14" height="14"><path d="M4 19.5A2.5 2.5 0 016.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z"/></svg>
                    <span>E-Catalog</span>
                </a>
                <span class="utility-sep">|</span>

                <!-- AI Search -->
                <button class="utility-search-btn" id="searchToggle" data-cursor="hover" aria-label="Search">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="14" height="14"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
                    <span>Search</span>
                </button>
                <span class="utility-sep">|</span>

                <!-- Language Dropdown -->
                <div class="utility-lang" id="langDropdown">
                    <button class="utility-lang-btn" data-cursor="hover">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="14" height="14"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
                        <span>EN</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="10" height="10"><path d="M6 9l6 6 6-6"/></svg>
                    </button>
                    <div class="utility-lang-menu">
                        <a href="?lang=en" class="lang-option active">English</a>
                        <a href="?lang=hi" class="lang-option">Hindi</a>
                        <a href="?lang=th" class="lang-option">Thai</a>
                    </div>
                </div>
                <span class="utility-sep">|</span>

                <!-- Hamburger Utility Panel -->
                <button class="utility-hamburger" id="utilityPanelToggle" data-cursor="hover" aria-label="Open utility panel">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </div>
    </div>

    <!-- ================================================
         SEARCH OVERLAY
         ================================================ -->
    <div class="search-overlay" id="searchOverlay">
        <div class="search-overlay-inner">
            <button class="search-close" id="searchClose" data-cursor="hover" aria-label="Close search">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M18 6L6 18M6 6l12 12"/></svg>
            </button>
            <div class="search-box">
                <svg class="search-box-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
                <input type="text" class="search-input" id="searchInput" placeholder="Search products, solutions, resources..." autocomplete="off">
                <div class="search-ai-badge">AI</div>
            </div>
            <div class="search-suggestions" id="searchSuggestions">
                <div class="search-suggest-label">Popular Searches</div>
                <div class="search-suggest-tags">
                    <a href="/products/cellulose-transformer-insulation-boards/" class="search-suggest-tag">Pressboards</a>
                    <a href="/products/machined-and-milled-components/" class="search-suggest-tag">Machined Components</a>
                    <a href="/copper" class="search-suggest-tag">Copper Winding Wires</a>
                    <a href="/products/insulating-chemicals/" class="search-suggest-tag">Wire Enamels</a>
                    <a href="/quality" class="search-suggest-tag">Quality & Testing</a>
                    <a href="/downloads" class="search-suggest-tag">Catalogues</a>
                    <a href="/careers" class="search-suggest-tag">Careers</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ================================================
         UTILITY PANEL (Slide-out Drawer)
         ================================================ -->
    <div class="utility-panel" id="utilityPanel">
        <div class="utility-panel-overlay" id="utilityPanelOverlay"></div>
        <div class="utility-panel-drawer">
            <div class="utility-panel-header">
                <span class="utility-panel-title">Quick Links</span>
                <button class="utility-panel-close" id="utilityPanelClose" data-cursor="hover" aria-label="Close panel">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M18 6L6 18M6 6l12 12"/></svg>
                </button>
            </div>
            <nav class="utility-panel-nav">
                <a href="/contact-us" class="up-link">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="18" height="18"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.362 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                    <span>Contact Us</span>
                </a>
                <a href="/downloads" class="up-link">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="18" height="18"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    <span>Download Center</span>
                </a>
                <a href="/csr" class="up-link">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="18" height="18"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
                    <span>CSR</span>
                </a>
                <a href="/our-locations" class="up-link">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="18" height="18"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    <span>Our Locations</span>
                </a>
                <a href="#sEvents" class="up-link">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="18" height="18"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                    <span>Announcements</span>
                </a>
                <a href="/blogs" class="up-link">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="18" height="18"><path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                    <span>Blogs</span>
                </a>
            </nav>
        </div>
    </div>

    <!-- ================================================
         HEADER (Bottom Menu Bar — Main Nav)
         ================================================ -->
    <header class="header" id="header">
        <div class="header-inner">
            <a href="/" class="logo" data-cursor="hover">
                <img src="<?php echo UBL_URI; ?>/assets/images/ubl-favicon.svg" alt="Umang Boards Limited" class="logo-icon" id="logoIcon">
                <div class="logo-text">
                    <span class="logo-line">UMANG</span>
                    <span class="logo-line">BOARDS</span>
                    <span class="logo-line">LIMITED</span>
                </div>
            </a>

            <nav class="nav-desktop">
                <!-- 1. COMPANY (Mega Menu) -->
                <div class="mega-wrap">
                    <a href="#" class="nav-link" data-cursor="hover" data-mega="megaCompany">Company</a>
                </div>

                <!-- 2. PRODUCTS (Mega Menu) -->
                <div class="mega-wrap">
                    <a href="#" class="nav-link" data-cursor="hover" data-mega="megaProducts">Products</a>
                </div>

                <!-- 3. SOLUTIONS (Mega Menu) -->
                <div class="mega-wrap">
                    <a href="#" class="nav-link" data-cursor="hover" data-mega="megaSolutions">Solutions</a>
                </div>

                <!-- 4. INVESTORS (Mega Menu) -->
                <div class="mega-wrap">
                    <a href="/investors" class="nav-link" data-cursor="hover" data-mega="megaInvestors">Investors</a>
                </div>

                <!-- 5. CONTACT US (Mega Menu) -->
                <div class="mega-wrap">
                    <a href="/contact-us" class="nav-link" data-cursor="hover" data-mega="megaContact">Contact Us</a>
                </div>

                <!-- 6. NEWSROOM (Mega Menu) -->
                <div class="mega-wrap">
                    <a href="/newsroom" class="nav-link" data-cursor="hover" data-mega="megaNewsroom">Newsroom</a>
                </div>
            </nav>

            <div class="header-actions">
                <a href="/contact-us" class="btn-enquiry" data-cursor="hover"><span>Enquire Now</span></a>
                <button class="hamburger" id="menuToggle" aria-label="Toggle menu">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </div>
    </header>

    <!-- ================================================
         MEGA MENU: COMPANY — TCS 3-panel layout
         ================================================ -->
    <div class="mega-menu" id="megaCompany">
        <div class="mega-inner">
            <div class="mega-left">
                <h3 class="mega-left-title">Company</h3>
                <p class="mega-left-desc">We deliver excellence and create value for the global power sector. With 25+ years of manufacturing expertise, we help transformer OEMs build reliable infrastructure worldwide.</p>
                <a href="/about-us" class="mega-left-cta" data-cursor="hover">Discover more &rarr;</a>
            </div>
            <div class="mega-center">
                <a class="mega-cat active" data-sub="companyAbout" href="/about-us">About Us <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
                <a class="mega-cat" data-sub="companyLeadership" href="/leadership">Leadership <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
                <a class="mega-cat" data-sub="companyHistory" href="/company-history">Company History <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
                <a class="mega-cat" data-sub="companyFoundation" href="/dhanuka-foundation">Dhanuka Foundation <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
                <a class="mega-cat" data-sub="companyMfg" href="/manufacturing-units">Manufacturing Units <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
                <a class="mega-cat" data-sub="companyPeople">People <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
                <a class="mega-cat" data-sub="companyDownloads">Download Center <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
                <a class="mega-cat" data-sub="companyQuality">Quality <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
            </div>
            <div class="mega-right">
                <!-- About Us — no L3, show description + card -->
                <div class="mega-sub-panel active" id="companyAbout">
                    <div class="mega-sub-desc">
                        <p class="mega-sub-desc-text">Learn about our journey, mission, and the values that drive Umang Boards Limited as a global leader in transformer insulation materials.</p>
                        <a href="/about-us" class="mega-sub-desc-cta">Visit About Us →</a>
                    </div>
                    <div class="mega-feature-card">
                        <img src="<?php echo UBL_URI; ?>/assets/images/Mfg Hero Background.jpg" alt="Umang Boards Manufacturing" class="mega-feature-img" loading="lazy">
                        <div class="mega-feature-body">
                            <div class="mega-feature-tag">Since 1999 · Jaipur</div>
                            <div class="mega-feature-title">25+ Years of Manufacturing Excellence</div>
                            <a href="/about-us" class="mega-feature-link">Discover more →</a>
                        </div>
                    </div>
                </div>
                <!-- Leadership — no L3 -->
                <div class="mega-sub-panel" id="companyLeadership">
                    <div class="mega-sub-desc">
                        <p class="mega-sub-desc-text">Meet our Board of Directors and senior management team steering Umang Boards towards global excellence in transformer insulation.</p>
                        <a href="/leadership" class="mega-sub-desc-cta">Meet the Team →</a>
                    </div>
                    <div class="mega-feature-card">
                        <img src="<?php echo UBL_URI; ?>/assets/images/boardroom.jpg" alt="Leadership Team" class="mega-feature-img" loading="lazy">
                        <div class="mega-feature-body">
                            <div class="mega-feature-tag">Board &amp; Management</div>
                            <div class="mega-feature-title">Experienced Leadership, Proven Results</div>
                            <a href="/leadership" class="mega-feature-link">Learn more →</a>
                        </div>
                    </div>
                </div>
                <!-- Company History — no L3 -->
                <div class="mega-sub-panel" id="companyHistory">
                    <div class="mega-sub-desc">
                        <p class="mega-sub-desc-text">Trace our evolution from a single-product startup in 1999 to India's leading vertically integrated transformer insulation manufacturer.</p>
                        <a href="/company-history" class="mega-sub-desc-cta">View Timeline →</a>
                    </div>
                    <div class="mega-feature-card">
                        <img src="<?php echo UBL_URI; ?>/assets/images/Mfg Hero Background.jpg" alt="Company History" class="mega-feature-img" loading="lazy">
                        <div class="mega-feature-body">
                            <div class="mega-feature-tag">Est. 1999</div>
                            <div class="mega-feature-title">From Jaipur to 61+ Countries Worldwide</div>
                            <a href="/company-history" class="mega-feature-link">Our story →</a>
                        </div>
                    </div>
                </div>
                <!-- Dhanuka Foundation — no L3 -->
                <div class="mega-sub-panel" id="companyFoundation">
                    <div class="mega-sub-desc">
                        <p class="mega-sub-desc-text">Discover how the Dhanuka Foundation is making a meaningful impact through education, healthcare, and community development initiatives.</p>
                        <a href="/dhanuka-foundation" class="mega-sub-desc-cta">Learn More →</a>
                    </div>
                    <div class="mega-feature-card">
                        <img src="<?php echo UBL_URI; ?>/assets/images/Main-Slideshow_0002_MS3.png" alt="Dhanuka Foundation" class="mega-feature-img" loading="lazy">
                        <div class="mega-feature-body">
                            <div class="mega-feature-tag">CSR Initiative</div>
                            <div class="mega-feature-title">Giving Back to Society</div>
                            <a href="/dhanuka-foundation" class="mega-feature-link">Explore →</a>
                        </div>
                    </div>
                </div>
                <!-- Manufacturing Units — no L3 -->
                <div class="mega-sub-panel" id="companyMfg">
                    <div class="mega-sub-desc">
                        <p class="mega-sub-desc-text">Explore our state-of-the-art manufacturing facilities in Jaipur, equipped with modern machinery and NABL-accredited testing laboratories.</p>
                        <a href="/manufacturing-units" class="mega-sub-desc-cta">View Facilities →</a>
                    </div>
                    <div class="mega-feature-card">
                        <img src="<?php echo UBL_URI; ?>/assets/images/Mfg Hero Background.jpg" alt="Manufacturing Units" class="mega-feature-img" loading="lazy">
                        <div class="mega-feature-body">
                            <div class="mega-feature-tag">Jaipur, Rajasthan</div>
                            <div class="mega-feature-title">World-Class Manufacturing Infrastructure</div>
                            <a href="/manufacturing-units" class="mega-feature-link">Take a tour →</a>
                        </div>
                    </div>
                </div>
                <!-- People — has L3 -->
                <div class="mega-sub-panel" id="companyPeople">
                    <div class="mega-sub-links">
                        <a href="/life-ubl">Life @ UBL</a>
                        <a href="/careers">Careers</a>
                        <a href="/training-and-development">Training &amp; Development</a>
                    </div>
                    <div class="mega-feature-card">
                        <img src="<?php echo UBL_URI; ?>/assets/images/Main-Slideshow_0002_MS3.png" alt="Umang Boards Team" class="mega-feature-img" loading="lazy">
                        <div class="mega-feature-body">
                            <div class="mega-feature-tag">400+ Employees</div>
                            <div class="mega-feature-title">Join Our Growing Team in Jaipur</div>
                            <a href="/careers" class="mega-feature-link">View openings →</a>
                        </div>
                    </div>
                </div>
                <!-- Download Center — has L3 -->
                <div class="mega-sub-panel" id="companyDownloads">
                    <div class="mega-sub-links">
                        <a href="/certifications">Certifications</a>
                        <a href="/catalogues">Catalogues</a>
                        <a href="/tech-datasheets">Technical Data Sheets</a>
                        <a href="/tc-sales">Terms &amp; Conditions Sales</a>
                        <a href="/tc-purchase">Terms &amp; Conditions Purchase</a>
                        <a href="/privacy">Privacy Policy</a>
                        <a href="/code-of-conduct">Code of Conduct</a>
                    </div>
                    <div class="mega-feature-card">
                        <img src="<?php echo UBL_URI; ?>/assets/images/Main-Slideshow_0000_MS1.png" alt="Umang Boards Certifications" class="mega-feature-img" loading="lazy">
                        <div class="mega-feature-body">
                            <div class="mega-feature-tag">ISO · NABL · PGCIL</div>
                            <div class="mega-feature-title">Certified for Global Standards</div>
                            <a href="/certifications" class="mega-feature-link">View certs →</a>
                        </div>
                    </div>
                </div>
                <!-- Quality — has L3 -->
                <div class="mega-sub-panel" id="companyQuality">
                    <div class="mega-sub-links">
                        <a href="/sustainability">Sustainability</a>
                        <a href="/quality">Transformer Insulation Laboratory</a>
                        <a href="/quality">Winding Wire Laboratory</a>
                        <a href="/quality">Chemical Laboratory</a>
                        <a href="/research-and-development">Research &amp; Development</a>
                    </div>
                    <div class="mega-feature-card">
                        <img src="<?php echo UBL_URI; ?>/assets/images/Secondary Static.jpg" alt="NABL Accredited Lab" class="mega-feature-img" loading="lazy">
                        <div class="mega-feature-body">
                            <div class="mega-feature-tag">NABL Accredited</div>
                            <div class="mega-feature-title">In-House Testing &amp; R&amp;D Facilities</div>
                            <a href="/quality" class="mega-feature-link">Explore labs →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ================================================
         MEGA MENU: PRODUCTS — TCS 3-panel layout
         ================================================ -->
    <div class="mega-menu" id="megaProducts">
        <div class="mega-inner">
            <div class="mega-left">
                <h3 class="mega-left-title">Our Products</h3>
                <p class="mega-left-desc">A vertically integrated product suite powering the world's electrical infrastructure — from cellulose pressboards to precision winding wires and specialty chemicals.</p>
                <a href="/products" class="mega-left-cta" data-cursor="hover">Explore all products &rarr;</a>
            </div>
            <div class="mega-center">
                <a class="mega-cat active" data-sub="prodInsulation">Transformer Insulation <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
                <a class="mega-cat" data-sub="prodWires">Winding Wires <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
                <a class="mega-cat" data-sub="prodChemicals">Chemicals <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
            </div>
            <div class="mega-right mega-right-products">
                <!-- L2: Transformer Insulation -->
                <div class="mega-sub-panel active" id="prodInsulation">
                    <div class="mega-l3-list">
                        <a class="mega-l3 active" data-l4="l4InsPress">Pressboards <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
                        <a class="mega-l3" data-l4="l4InsMach">Machined &amp; Moulded <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
                        <a class="mega-l3" data-l4="l4InsPaper">Papers <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
                        <a class="mega-l3" data-l4="l4InsAccess">Accessories <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
                    </div>
                    <div class="mega-l4-wrap">
                        <div class="mega-l4-panel active" id="l4InsPress">
                            <a href="/products/cellulose-transformer-insulation-boards/high-density-pressboards/">High Density Pressboard</a>
                            <a href="/products/cellulose-transformer-insulation-boards/laminated-pressboards/">Laminated Pressboard</a>
                            <a href="/products/cellulose-transformer-insulation-boards/calendered-pressboards/">Calendered Pressboard</a>
                            <a href="/products/cellulose-transformer-insulation-boards/mouldable-pressboards/">Mouldable Pressboard</a>
                        </div>
                        <div class="mega-l4-panel" id="l4InsMach">
                            <a href="/products/machined-and-milled-components/spacer-strips/">Spacer Strips &amp; Rings</a>
                            <a href="/products/machined-and-milled-components/l-profile-and-frames/">L Profile / U Channel</a>
                            <a href="/products/moulded-components-and-other-components/couched-high-voltage-terminal-leads/">Lead Exit Systems</a>
                            <a href="/products/moulded-components-and-other-components/angle-ring-cap-ring-snouts/">Angle Ring, Cap Ring, Snouts</a>
                            <a href="/products/moulded-components-and-other-components/corner-collars/">Corner Collars &amp; End Rings</a>
                        </div>
                        <div class="mega-l4-panel" id="l4InsPaper">
                            <a href="/products/insulation-papers/electrical-grade-kraft-paper/">Insulation Kraft Paper</a>
                            <a href="/products/insulation-papers/electrical-grade-crepe-paper/">Crepe Paper</a>
                            <a href="/products/insulation-papers/electrical-grade-diamond-dotted-paper/">Diamond Dotted Paper</a>
                            <a href="/products/insulation-papers/crepe-paper-tubes/">Tubes (Crepe, TUP)</a>
                            <a href="/products/insulation-papers/electrical-grade-press-paper/">Press Paper</a>
                        </div>
                        <div class="mega-l4-panel" id="l4InsAccess">
                            <a href="/products/paper-and-board/">Bushings &amp; Sleeves</a>
                            <a href="/products/paper-and-board/">Cooling Fans</a>
                            <a href="/products/paper-and-board/">Valves &amp; Relays</a>
                            <a href="/products/paper-and-board/">Cork Sheet / Perma Wood</a>
                            <a href="/products/paper-and-board/">Metal Fixing Parts</a>
                        </div>
                    </div>
                    <div class="mega-feature-card">
                        <img src="<?php echo UBL_URI; ?>/assets/images/Transformer Insulations.jpg" alt="Transformer Insulation Products" class="mega-feature-img" loading="lazy">
                        <div class="mega-feature-body">
                            <div class="mega-feature-tag">Featured</div>
                            <div class="mega-feature-title">Transformer Insulation</div>
                            <a href="/products/paper-and-board/" class="mega-feature-link">Explore <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="12" height="12"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
                        </div>
                    </div>
                </div>
                <!-- L2: Winding Wires -->
                <div class="mega-sub-panel" id="prodWires">
                    <div class="mega-l3-list">
                        <a class="mega-l3 active" data-l4="l4WireAlum">Aluminium <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
                        <a class="mega-l3" data-l4="l4WireCopper">Copper <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
                    </div>
                    <div class="mega-l4-wrap">
                        <div class="mega-l4-panel active" id="l4WireAlum">
                            <a href="/products/aluminium/super-enamelled-al-round-wire/">Super Enameled Round Wire</a>
                            <a href="/products/aluminium/super-enamelled-al-flat-wire/">Super Enameled Flat Wire</a>
                            <a href="/products/aluminium/kraft-crepe-coated-al-round-wire/">Paper Covered Round Wire</a>
                            <a href="/products/aluminium/paper-covered-al-flat-wire/">Paper Covered Flat Wire</a>
                            <a href="/products/aluminium/">Aluminium Foil</a>
                        </div>
                        <div class="mega-l4-panel" id="l4WireCopper">
                            <a href="/products/copper/super-enamelled-cu-round-wire/">Super Enameled Round Wire</a>
                            <a href="/products/copper/super-enamelled-cu-flat-wire/">Super Enameled Flat Wire</a>
                            <a href="/products/copper/kraft-crepe-coated-cu-round-wire/">Paper Covered Round Wire</a>
                            <a href="/products/copper/paper-covered-cu-flat-wire/">Paper Covered Flat Wire</a>
                            <a href="/products/copper/">CTC</a>
                            <a href="/products/copper/">Fiberglass Covered Flat Wire</a>
                        </div>
                    </div>
                    <div class="mega-feature-card">
                        <img src="<?php echo UBL_URI; ?>/assets/images/Winding Wires.jpg" alt="Winding Wire Products" class="mega-feature-img" loading="lazy">
                        <div class="mega-feature-body">
                            <div class="mega-feature-tag">Featured</div>
                            <div class="mega-feature-title">Winding Wires</div>
                            <a href="/products/winding-wires/" class="mega-feature-link">Explore <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="12" height="12"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
                        </div>
                    </div>
                </div>
                <!-- L2: Chemicals -->
                <div class="mega-sub-panel" id="prodChemicals">
                    <div class="mega-l3-list">
                        <a class="mega-l3 active" data-l4="l4ChemEnamels">Wire Enamels <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
                    </div>
                    <div class="mega-l4-wrap">
                        <div class="mega-l4-panel active" id="l4ChemEnamels">
                            <a href="/products/polyester/">Polyester</a>
                            <a href="/products/modified-polyester/">Modified Polyester</a>
                            <a href="/products/polyurethane/">Polyurethane</a>
                            <a href="/products/polyestermide/">Polyester Imide</a>
                            <a href="/products/polyamide-imide/">Polyamide Imide</a>
                        </div>
                    </div>
                    <div class="mega-feature-card">
                        <img src="<?php echo UBL_URI; ?>/assets/images/Insulating Chemicals.jpg" alt="Insulating Chemical Products" class="mega-feature-img" loading="lazy">
                        <div class="mega-feature-body">
                            <div class="mega-feature-tag">Featured</div>
                            <div class="mega-feature-title">Insulating Chemicals</div>
                            <a href="/products/insulating-chemicals/" class="mega-feature-link">Explore <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="12" height="12"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ================================================
         MEGA MENU: SOLUTIONS — TCS 3-panel layout
         ================================================ -->
    <div class="mega-menu" id="megaSolutions">
        <div class="mega-inner">
            <div class="mega-left">
                <h3 class="mega-left-title">Solutions</h3>
                <p class="mega-left-desc">End-to-end insulation solutions tailored for every transformer class and industrial application. From 400 kV power transformers to EV motors.</p>
                <a href="/solutions" class="mega-left-cta" data-cursor="hover">View all solutions &rarr;</a>
            </div>
            <div class="mega-center mega-center-grid">
                <a class="mega-cat active" data-sub="solPower">Power Transformers <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
                <a class="mega-cat" data-sub="solDist">Distribution Transformers <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
                <a class="mega-cat" data-sub="solInstrument">Instrument Transformers <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
                <a class="mega-cat" data-sub="solDataCenters">Data Centers <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
                <a class="mega-cat" data-sub="solRenewables">Renewables <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
                <a class="mega-cat" data-sub="solMotors">Electric Motors <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
                <a class="mega-cat" data-sub="solAppliances">Home Appliances <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
                <a class="mega-cat" data-sub="solEV">EV Motors <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
                <a class="mega-cat" data-sub="solStabilizers">Stabilizers <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
            </div>
            <div class="mega-right">
                <div class="mega-sub-panel active" id="solPower">
                    <div class="mega-sub-links">
                        <a href="/products/cellulose-transformer-insulation-boards/high-density-pressboards/">HD Pressboard</a>
                        <a href="/products/cellulose-transformer-insulation-boards/laminated-pressboards/">Laminated Pressboard</a>
                        <a href="/products/moulded-components-and-other-components/angle-ring-cap-ring-snouts/">Angle Ring, Cap Ring, Snouts</a>
                        <a href="/products/moulded-components-and-other-components/couched-high-voltage-terminal-leads/">Lead Exit Systems</a>
                        <a href="/products/copper/super-enamelled-cu-round-wire/">Enamelled Copper Round Wire</a>
                        <a href="/products/copper/super-enamelled-cu-flat-wire/">Enamelled Copper Flat Wire</a>
                        <a href="/products/copper/paper-covered-cu-flat-wire/">Paper Covered Copper Wire (Round &amp; Flat)</a>
                        <a href="/products/copper/">CTC</a>
                        <a href="/products/copper/">Fiberglass Covered Copper Wire</a>
                        <a href="/products/insulation-papers/electrical-grade-press-paper/">TUP Paper</a>
                        <a href="/products/insulation-papers/electrical-grade-diamond-dotted-paper/">DDP Paper</a>
                    </div>
                    <div class="mega-feature-card">
                        <img src="<?php echo UBL_URI; ?>/assets/images/Transformer Insulations.jpg" alt="Power Transformer Insulation" class="mega-feature-img" loading="lazy">
                        <div class="mega-feature-body">
                            <div class="mega-feature-tag">Up to 400 kV</div>
                            <div class="mega-feature-title">PGCIL-Approved for Transmission Class</div>
                            <a href="/solutions/power-transformers" class="mega-feature-link">View solution →</a>
                        </div>
                    </div>
                </div>
                <div class="mega-sub-panel" id="solDist">
                    <div class="mega-sub-links">
                        <a href="/products/cellulose-transformer-insulation-boards/calendered-pressboards/">Calendered Boards</a>
                        <a href="/products/cellulose-transformer-insulation-boards/high-density-pressboards/">HD Pressboards</a>
                        <a href="/products/aluminium/super-enamelled-al-round-wire/">Enamelled Aluminium Round Wire</a>
                        <a href="/products/aluminium/super-enamelled-al-flat-wire/">Enamelled Aluminium Flat Wire</a>
                        <a href="/products/aluminium/paper-covered-al-flat-wire/">Paper Covered Aluminium Wire (Round &amp; Flat)</a>
                        <a href="/products/insulation-papers/electrical-grade-kraft-paper/">Insulation Paper</a>
                        <a href="/products/aluminium/">Aluminium Foil</a>
                        <a href="/products/insulation-papers/electrical-grade-crepe-paper/">Crepe Paper Tubes</a>
                    </div>
                    <div class="mega-feature-card">
                        <img src="<?php echo UBL_URI; ?>/assets/images/Secondary Static.jpg" alt="Distribution Transformer" class="mega-feature-img" loading="lazy">
                        <div class="mega-feature-body">
                            <div class="mega-feature-tag">11 kV – 33 kV</div>
                            <div class="mega-feature-title">Full Insulation Kit for Distribution OEMs</div>
                            <a href="/solutions/distribution-transformers" class="mega-feature-link">View solution →</a>
                        </div>
                    </div>
                </div>
                <div class="mega-sub-panel" id="solInstrument">
                    <div class="mega-sub-links">
                        <a href="/products/copper/">Fiberglass Covered Copper Wire</a>
                        <a href="/products/cellulose-transformer-insulation-boards/calendered-pressboards/">Calendered Board</a>
                        <a href="/products/cellulose-transformer-insulation-boards/laminated-pressboards/">Laminated Pressboard</a>
                        <a href="/products/insulation-papers/electrical-grade-kraft-paper/">Insulation Paper</a>
                    </div>
                    <div class="mega-feature-card">
                        <img src="<?php echo UBL_URI; ?>/assets/images/Main-Slideshow_0000_MS1.png" alt="Instrument Transformer" class="mega-feature-img" loading="lazy">
                        <div class="mega-feature-body">
                            <div class="mega-feature-tag">CT &amp; PT Grade</div>
                            <div class="mega-feature-title">High Accuracy Class Insulation Materials</div>
                            <a href="/solutions/instrument-transformers" class="mega-feature-link">View solution →</a>
                        </div>
                    </div>
                </div>
                <div class="mega-sub-panel" id="solDataCenters">
                    <div class="mega-sub-links">
                        <a href="/solutions/data-centers">Transformer Accessories</a>
                        <a href="/products/insulation-papers/electrical-grade-press-paper/">TUP Paper</a>
                    </div>
                    <div class="mega-feature-card">
                        <img src="<?php echo UBL_URI; ?>/assets/images/Transformer Insulations.jpg" alt="Data Center Solutions" class="mega-feature-img" loading="lazy">
                        <div class="mega-feature-body">
                            <div class="mega-feature-tag">Mission Critical</div>
                            <div class="mega-feature-title">Reliable Insulation for Data Infrastructure</div>
                            <a href="/solutions/data-centers" class="mega-feature-link">View solution →</a>
                        </div>
                    </div>
                </div>
                <div class="mega-sub-panel" id="solRenewables">
                    <div class="mega-sub-links">
                        <a href="/ddp">Diamond Dotted Paper</a>
                        <a href="/products/insulation-papers/electrical-grade-press-paper/">TUP Paper</a>
                        <a href="/products/machined-and-milled-components/">Machined Components</a>
                    </div>
                    <div class="mega-feature-card">
                        <img src="<?php echo UBL_URI; ?>/assets/images/Winding Wires.jpg" alt="Renewables Solutions" class="mega-feature-img" loading="lazy">
                        <div class="mega-feature-body">
                            <div class="mega-feature-tag">Solar · Wind</div>
                            <div class="mega-feature-title">Insulation for Renewable Energy Systems</div>
                            <a href="/solutions/renewables" class="mega-feature-link">View solution →</a>
                        </div>
                    </div>
                </div>
                <div class="mega-sub-panel" id="solMotors">
                    <div class="mega-sub-links">
                        <a href="/aluminium">Super Enamelled Aluminium Wire (Round &amp; Flat)</a>
                        <a href="/copper">Super Enamelled Copper Wire (Round &amp; Flat)</a>
                        <a href="/plain-kraft-paper">Insulation Paper</a>
                    </div>
                    <div class="mega-feature-card">
                        <img src="<?php echo UBL_URI; ?>/assets/images/Winding Wires.jpg" alt="Electric Motor Solutions" class="mega-feature-img" loading="lazy">
                        <div class="mega-feature-body">
                            <div class="mega-feature-tag">Industrial Grade</div>
                            <div class="mega-feature-title">Premium Winding Wires for Motors</div>
                            <a href="/solutions/electric-motors" class="mega-feature-link">View solution →</a>
                        </div>
                    </div>
                </div>
                <div class="mega-sub-panel" id="solAppliances">
                    <div class="mega-sub-links">
                        <a href="/aluminium">Super Enamelled Aluminium Wire (Round &amp; Flat)</a>
                        <a href="/copper">Super Enamelled Copper Wire (Round &amp; Flat)</a>
                    </div>
                    <div class="mega-feature-card">
                        <img src="<?php echo UBL_URI; ?>/assets/images/Winding Wires.jpg" alt="Home Appliance Solutions" class="mega-feature-img" loading="lazy">
                        <div class="mega-feature-body">
                            <div class="mega-feature-tag">Consumer Grade</div>
                            <div class="mega-feature-title">Reliable Wires for Home Appliances</div>
                            <a href="/solutions/home-appliances" class="mega-feature-link">View solution →</a>
                        </div>
                    </div>
                </div>
                <div class="mega-sub-panel" id="solEV">
                    <div class="mega-sub-links">
                        <a href="/aluminium">Super Enamelled Aluminium Wire (Round &amp; Flat)</a>
                        <a href="/copper">Super Enamelled Copper Wire (Round &amp; Flat)</a>
                    </div>
                    <div class="mega-feature-card">
                        <img src="<?php echo UBL_URI; ?>/assets/images/Winding Wires.jpg" alt="EV Motor Solutions" class="mega-feature-img" loading="lazy">
                        <div class="mega-feature-body">
                            <div class="mega-feature-tag">EV Grade</div>
                            <div class="mega-feature-title">High-Performance Wires for Electric Vehicles</div>
                            <a href="/solutions/ev-motors" class="mega-feature-link">View solution →</a>
                        </div>
                    </div>
                </div>
                <div class="mega-sub-panel" id="solStabilizers">
                    <div class="mega-sub-links">
                        <a href="/aluminium">Super Enamelled Aluminium Wire (Round &amp; Flat)</a>
                        <a href="/copper">Super Enamelled Copper Wire (Round &amp; Flat)</a>
                    </div>
                    <div class="mega-feature-card">
                        <img src="<?php echo UBL_URI; ?>/assets/images/Winding Wires.jpg" alt="Stabilizer Solutions" class="mega-feature-img" loading="lazy">
                        <div class="mega-feature-body">
                            <div class="mega-feature-tag">Voltage Control</div>
                            <div class="mega-feature-title">Precision Wires for Voltage Stabilizers</div>
                            <a href="/solutions/stabilizers" class="mega-feature-link">View solution →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ================================================
         MEGA MENU: INVESTORS — TCS 3-panel with stock widget
         ================================================ -->
    <div class="mega-menu" id="megaInvestors">
        <div class="mega-inner">
            <div class="mega-left">
                <h3 class="mega-left-title">Umang Boards Limited</h3>
                <div class="mega-stock-label">NSE: UMANGBOARD</div>
                <div class="mega-stock-widget">
                    <div class="mega-stock-price" id="megaStockPrice">&#8377; 42.50</div>
                    <div class="mega-stock-change positive" id="megaStockChange">+1.20 (2.91%) <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="12" height="12"><path d="M18 15l-6-6-6 6"/></svg></div>
                </div>
                <a href="/investors" class="mega-left-cta" data-cursor="hover">Discover more &rarr;</a>
            </div>
            <div class="mega-center">
                <a class="mega-cat active" data-sub="invFinancials">Financials <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
                <a class="mega-cat" data-sub="invGovernance">Governance <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
                <a class="mega-cat" data-sub="invNews">News and Events <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
                <a class="mega-cat" data-sub="invResources">Resources <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
            </div>
            <div class="mega-right">
                <div class="mega-sub-panel active" id="invFinancials">
                    <div class="mega-sub-links">
                        <a href="/annual-reports">Annual Reports</a>
                        <a href="/quarterly-results">Quarterly Results</a>
                        <a href="/financial-statements">Financial Statements</a>
                        <a href="/investor-presentations">Investor Presentations</a>
                    </div>
                    <div class="mega-feature-card">
                        <img src="<?php echo UBL_URI; ?>/assets/images/boardroom.jpg" alt="Investor Relations" class="mega-feature-img" loading="lazy">
                        <div class="mega-feature-body">
                            <div class="mega-feature-tag">NSE · BSE Listed</div>
                            <div class="mega-feature-title">Transparent Reporting for Every Stakeholder</div>
                            <a href="/investors" class="mega-feature-link">Investor hub →</a>
                        </div>
                    </div>
                </div>
                <div class="mega-sub-panel" id="invGovernance">
                    <div class="mega-sub-links">
                        <a href="/corporate-governance">Corporate Governance</a>
                        <a href="/board-of-directors">Board of Directors</a>
                        <a href="/policies">Policies</a>
                        <a href="/shareholder-info">Shareholder Information</a>
                    </div>
                    <div class="mega-feature-card">
                        <img src="<?php echo UBL_URI; ?>/assets/images/boardroom.jpg" alt="Corporate Governance" class="mega-feature-img" loading="lazy">
                        <div class="mega-feature-body">
                            <div class="mega-feature-tag">SEBI Compliant</div>
                            <div class="mega-feature-title">Board-Led Governance &amp; Ethics</div>
                            <a href="/corporate-governance" class="mega-feature-link">Learn more →</a>
                        </div>
                    </div>
                </div>
                <div class="mega-sub-panel" id="invNews">
                    <div class="mega-sub-links">
                        <a href="/press-releases">Press Releases</a>
                        <a href="/events">Events</a>
                        <a href="/media-kit">Media Kit</a>
                    </div>
                    <div class="mega-feature-card">
                        <img src="<?php echo UBL_URI; ?>/assets/images/Mfg Hero Background.jpg" alt="News and Events" class="mega-feature-img" loading="lazy">
                        <div class="mega-feature-body">
                            <div class="mega-feature-tag">Latest Updates</div>
                            <div class="mega-feature-title">News, Events &amp; Media Resources</div>
                            <a href="/newsroom" class="mega-feature-link">Visit newsroom →</a>
                        </div>
                    </div>
                </div>
                <div class="mega-sub-panel" id="invResources">
                    <div class="mega-sub-links">
                        <a href="/stock-exchange">NSE / BSE Listing</a>
                        <a href="/shareholding-pattern">Shareholding Pattern</a>
                        <a href="/credit-rating">Credit Rating</a>
                        <a href="/downloads">Downloads</a>
                    </div>
                    <div class="mega-feature-card">
                        <img src="<?php echo UBL_URI; ?>/assets/images/Secondary Static.jpg" alt="Investor Resources" class="mega-feature-img" loading="lazy">
                        <div class="mega-feature-body">
                            <div class="mega-feature-tag">CRISIL BBB Rated</div>
                            <div class="mega-feature-title">Compliance Documents &amp; Stock Data</div>
                            <a href="/downloads" class="mega-feature-link">Browse files →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ================================================
         MEGA MENU: CONTACT US
         ================================================ -->
    <div class="mega-menu" id="megaContact">
        <div class="mega-inner">
            <div class="mega-left">
                <h3 class="mega-left-title">Contact Us</h3>
                <p class="mega-left-desc">Get in touch with our team for sales enquiries, technical support, factory visits, or general information. We're here to help.</p>
                <a href="/contact-us" class="mega-left-cta" data-cursor="hover">Get in touch &rarr;</a>
            </div>
            <div class="mega-center">
                <a class="mega-cat active" data-sub="contactOverview" href="/contact-us">Get in Touch <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
                <a class="mega-cat" data-sub="contactLocations" href="/our-locations">Our Locations <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
                <a class="mega-cat" data-sub="contactHours" href="/contact-us#hours">Office Hours <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
                <a class="mega-cat" data-sub="contactFAQ" href="/contact-us#faq">FAQ <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
            </div>
            <div class="mega-right">
                <div class="mega-sub-panel active" id="contactOverview">
                    <div class="mega-sub-desc">
                        <p class="mega-sub-desc-text">Reach out to us via our contact form, email, or phone. Our sales and support teams are ready to assist with your transformer insulation requirements.</p>
                        <a href="/contact-us" class="mega-sub-desc-cta">Contact Form →</a>
                    </div>
                    <div class="mega-feature-card">
                        <img src="<?php echo UBL_URI; ?>/assets/images/Mfg Hero Background.jpg" alt="Contact Umang Boards" class="mega-feature-img" loading="lazy">
                        <div class="mega-feature-body">
                            <div class="mega-feature-tag">Sales · Support · Enquiries</div>
                            <div class="mega-feature-title">We Respond Within 24 Hours</div>
                            <a href="/contact-us" class="mega-feature-link">Write to us →</a>
                        </div>
                    </div>
                </div>
                <div class="mega-sub-panel" id="contactLocations">
                    <div class="mega-sub-desc">
                        <p class="mega-sub-desc-text">Find our manufacturing facilities and offices on the map. Schedule a factory visit to see our state-of-the-art production lines firsthand.</p>
                        <a href="/our-locations" class="mega-sub-desc-cta">View on Map →</a>
                    </div>
                    <div class="mega-feature-card">
                        <img src="<?php echo UBL_URI; ?>/assets/images/Mfg Hero Background.jpg" alt="Our Locations" class="mega-feature-img" loading="lazy">
                        <div class="mega-feature-body">
                            <div class="mega-feature-tag">Jaipur, Rajasthan</div>
                            <div class="mega-feature-title">Schedule a Factory Visit</div>
                            <a href="/our-locations" class="mega-feature-link">Get directions →</a>
                        </div>
                    </div>
                </div>
                <div class="mega-sub-panel" id="contactHours">
                    <div class="mega-sub-desc">
                        <p class="mega-sub-desc-text"><strong>Monday – Friday:</strong> 9:00 AM – 6:00 PM IST<br><strong>Saturday &amp; Sunday:</strong> Closed<br><br><strong>Response Times:</strong><br>WhatsApp/Chat: Within 2 hours<br>Email: Within 24 hours<br>Phone: Live during office hours</p>
                        <a href="/contact-us" class="mega-sub-desc-cta">Contact Now →</a>
                    </div>
                    <div class="mega-feature-card">
                        <img src="<?php echo UBL_URI; ?>/assets/images/Secondary Static.jpg" alt="Office Hours" class="mega-feature-img" loading="lazy">
                        <div class="mega-feature-body">
                            <div class="mega-feature-tag">Mon – Fri · 9 AM – 6 PM</div>
                            <div class="mega-feature-title">Fast Response Guaranteed</div>
                            <a href="/contact-us" class="mega-feature-link">Reach out →</a>
                        </div>
                    </div>
                </div>
                <div class="mega-sub-panel" id="contactFAQ">
                    <div class="mega-sub-desc">
                        <p class="mega-sub-desc-text">Find quick answers to the most common questions about our products, ordering process, shipping, and technical specifications.</p>
                        <a href="/contact-us#faq" class="mega-sub-desc-cta">View All FAQs →</a>
                    </div>
                    <div class="mega-feature-card">
                        <img src="<?php echo UBL_URI; ?>/assets/images/Main-Slideshow_0000_MS1.png" alt="FAQ" class="mega-feature-img" loading="lazy">
                        <div class="mega-feature-body">
                            <div class="mega-feature-tag">Quick Answers</div>
                            <div class="mega-feature-title">Frequently Asked Questions</div>
                            <a href="/contact-us#faq" class="mega-feature-link">Browse FAQs →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ================================================
         MEGA MENU: NEWSROOM
         ================================================ -->
    <div class="mega-menu" id="megaNewsroom">
        <div class="mega-inner">
            <div class="mega-left">
                <h3 class="mega-left-title">Newsroom</h3>
                <p class="mega-left-desc">Stay updated with the latest news, events, and media resources from Umang Boards Limited.</p>
                <a href="/newsroom" class="mega-left-cta" data-cursor="hover">Visit Newsroom &rarr;</a>
            </div>
            <div class="mega-center">
                <a class="mega-cat active" data-sub="newsMedia" href="/media-kit">Media Kit <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
                <a class="mega-cat" data-sub="newsEvents" href="/events">Events <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
                <a class="mega-cat" data-sub="newsPress" href="/press-releases">Press Releases <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M9 18l6-6-6-6"/></svg></a>
            </div>
            <div class="mega-right">
                <div class="mega-sub-panel active" id="newsMedia">
                    <div class="mega-sub-desc">
                        <p class="mega-sub-desc-text">Access official logos, brand guidelines, press photos, and media assets for publications and press coverage.</p>
                        <a href="/media-kit" class="mega-sub-desc-cta">Download Media Kit →</a>
                    </div>
                    <div class="mega-feature-card">
                        <img src="<?php echo UBL_URI; ?>/assets/images/Mfg Hero Background.jpg" alt="Media Kit" class="mega-feature-img" loading="lazy">
                        <div class="mega-feature-body">
                            <div class="mega-feature-tag">Brand Assets</div>
                            <div class="mega-feature-title">Official Logos &amp; Press Resources</div>
                            <a href="/media-kit" class="mega-feature-link">Download →</a>
                        </div>
                    </div>
                </div>
                <div class="mega-sub-panel" id="newsEvents">
                    <div class="mega-sub-desc">
                        <p class="mega-sub-desc-text">Discover upcoming trade shows, exhibitions, and industry events where you can meet our team and explore our latest innovations.</p>
                        <a href="/events" class="mega-sub-desc-cta">View Events →</a>
                    </div>
                    <div class="mega-feature-card">
                        <img src="<?php echo UBL_URI; ?>/assets/images/Main-Slideshow_0002_MS3.png" alt="Events" class="mega-feature-img" loading="lazy">
                        <div class="mega-feature-body">
                            <div class="mega-feature-tag">Trade Shows · Exhibitions</div>
                            <div class="mega-feature-title">Meet Us at Industry Events</div>
                            <a href="/events" class="mega-feature-link">See calendar →</a>
                        </div>
                    </div>
                </div>
                <div class="mega-sub-panel" id="newsPress">
                    <div class="mega-sub-desc">
                        <p class="mega-sub-desc-text">Read the latest press releases, announcements, and company news from Umang Boards Limited.</p>
                        <a href="/press-releases" class="mega-sub-desc-cta">Read Releases →</a>
                    </div>
                    <div class="mega-feature-card">
                        <img src="<?php echo UBL_URI; ?>/assets/images/Secondary Static.jpg" alt="Press Releases" class="mega-feature-img" loading="lazy">
                        <div class="mega-feature-body">
                            <div class="mega-feature-tag">Latest Updates</div>
                            <div class="mega-feature-title">Company News &amp; Announcements</div>
                            <a href="/press-releases" class="mega-feature-link">Read more →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ================================================
         MOBILE NAV
         ================================================ -->
    <nav class="mobile-nav" id="mobileNav" aria-label="Mobile navigation" data-lenis-prevent>
        <ul class="mobile-nav-links">
            <!-- 1. Company -->
            <li class="mobile-accordion">
                <div class="mobile-accordion-header" data-cursor="hover">
                    <span>Company</span>
                    <svg class="mobile-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                </div>
                <ul class="mobile-accordion-body">
                    <li><a href="/about-us">About Us</a></li>
                    <li><a href="/leadership">Leadership</a></li>
                    <li><a href="/company-history">Company History</a></li>
                    <li><a href="/dhanuka-foundation">Dhanuka Foundation</a></li>
                    <li><a href="/manufacturing-units">Manufacturing Units</a></li>
                    <li class="mobile-sub-group">
                        <span class="mobile-sub-title">People</span>
                        <a href="/life-ubl">Life @ UBL</a>
                        <a href="/careers">Careers</a>
                        <a href="/training-and-development">Training & Development</a>
                    </li>
                    <li class="mobile-sub-group">
                        <span class="mobile-sub-title">Quality</span>
                        <a href="/sustainability">Sustainability</a>
                        <a href="/quality">Testing Labs</a>
                        <a href="/research-and-development">R&D</a>
                        <a href="/certifications">Certifications</a>
                    </li>
                    <li><a href="/downloads">Download Center</a></li>
                </ul>
            </li>

            <!-- 2. Products -->
            <li class="mobile-accordion">
                <div class="mobile-accordion-header" data-cursor="hover">
                    <span>Products</span>
                    <svg class="mobile-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                </div>
                <ul class="mobile-accordion-body">
                    <li class="mobile-sub-group">
                        <span class="mobile-sub-title">Transformer Insulations</span>
                        <a href="/cellulose-transformer-insulation-boards">Pressboards</a>
                        <a href="/products/machined-and-milled-components/">Machined Components</a>
                        <a href="/moulded-components">Moulded Components</a>
                        <a href="/insulation-papers">Insulation Papers</a>
                    </li>
                    <li class="mobile-sub-group">
                        <span class="mobile-sub-title">Transformer Accessories</span>
                        <a href="/bushings">Bushings</a>
                        <a href="/conservators">Conservators</a>
                        <a href="/radiators">Radiators</a>
                        <a href="/tap-changers">Tap Changers</a>
                        <a href="/gaskets">Gaskets & Seals</a>
                    </li>
                    <li class="mobile-sub-group">
                        <span class="mobile-sub-title">Winding Wires</span>
                        <a href="/copper">Copper Winding Wires</a>
                        <a href="/aluminium">Aluminium Winding Wires</a>
                    </li>
                    <li class="mobile-sub-group">
                        <span class="mobile-sub-title">Insulating Chemicals</span>
                        <a href="/products/insulating-chemicals/">Wire Enamels</a>
                        <a href="/impregnating-resins">Impregnating Resins</a>
                        <a href="/insulating-varnishes">Insulating Varnishes</a>
                    </li>
                </ul>
            </li>

            <!-- 3. Solutions -->
            <li class="mobile-accordion">
                <div class="mobile-accordion-header" data-cursor="hover">
                    <span>Solutions</span>
                    <svg class="mobile-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                </div>
                <ul class="mobile-accordion-body">
                    <li class="mobile-sub-group">
                        <span class="mobile-sub-title">Power Transformers</span>
                        <a href="/pre-compressed-pressboards">HD Pressboard</a>
                        <a href="/laminated-pressboards">Laminated Pressboard</a>
                        <a href="/rings-and-caps">Angle Ring, Cap Ring, Snouts</a>
                        <a href="/lead-exit-assemblies">Lead Exit Systems</a>
                        <a href="/copper">Enamelled Copper Wire</a>
                        <a href="/products/insulation-papers/electrical-grade-press-paper/">TUP Paper</a>
                        <a href="/ddp">DDP Paper</a>
                    </li>
                    <li class="mobile-sub-group">
                        <span class="mobile-sub-title">Distribution Transformers</span>
                        <a href="/calendered-pressboards">Calendered Boards</a>
                        <a href="/aluminium">Enamelled Aluminium Wire</a>
                        <a href="/plain-kraft-paper">Insulation Paper</a>
                        <a href="/crepe-paper">Crepe Paper Tubes</a>
                    </li>
                    <li class="mobile-sub-group">
                        <span class="mobile-sub-title">Instrument Transformers</span>
                        <a href="/copper">Fiberglass Copper Wire</a>
                        <a href="/calendered-pressboards">Calendered Board</a>
                        <a href="/plain-kraft-paper">Insulation Paper</a>
                    </li>
                    <li><a href="/solutions/data-centers">Data Centers</a></li>
                    <li><a href="/solutions/renewables">Renewables</a></li>
                    <li><a href="/solutions/electric-motors">Electric Motors</a></li>
                    <li><a href="/solutions/home-appliances">Home Appliances</a></li>
                    <li><a href="/solutions/ev-motors">EV Motors</a></li>
                    <li><a href="/solutions/stabilizers">Stabilizers</a></li>
                </ul>
            </li>

            <!-- 4. Investors -->
            <li class="mobile-accordion">
                <div class="mobile-accordion-header" data-cursor="hover">
                    <span>Investors</span>
                    <svg class="mobile-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                </div>
                <ul class="mobile-accordion-body">
                    <li><a href="/annual-reports">Annual Reports</a></li>
                    <li><a href="/quarterly-results">Quarterly Results</a></li>
                    <li><a href="/corporate-governance">Corporate Governance</a></li>
                    <li><a href="/board-of-directors">Board of Directors</a></li>
                    <li><a href="/shareholding-pattern">Shareholding Pattern</a></li>
                    <li><a href="/downloads">Downloads</a></li>
                </ul>
            </li>

            <!-- 5. Contact Us -->
            <li class="mobile-accordion">
                <div class="mobile-accordion-header" data-cursor="hover">
                    <span>Contact Us</span>
                    <svg class="mobile-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                </div>
                <ul class="mobile-accordion-body">
                    <li><a href="/contact-us">Get in Touch</a></li>
                    <li><a href="/our-locations">Our Locations</a></li>
                    <li><a href="/contact-us#hours">Office Hours</a></li>
                    <li><a href="/contact-us#faq">FAQ</a></li>
                </ul>
            </li>

            <!-- 6. Newsroom -->
            <li class="mobile-accordion">
                <div class="mobile-accordion-header" data-cursor="hover">
                    <span>Newsroom</span>
                    <svg class="mobile-accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                </div>
                <ul class="mobile-accordion-body">
                    <li><a href="/media-kit">Media Kit</a></li>
                    <li><a href="/events">Events</a></li>
                    <li><a href="/press-releases">Press Releases</a></li>
                </ul>
            </li>

            <li><a href="/customer-portal" data-cursor="hover">E-Catalog / Customer Portal</a></li>
            <li><a href="/contact-us" data-cursor="hover" style="color:var(--navy);">Enquire Now &rarr;</a></li>
        </ul>
        <div class="mobile-nav-footer">
            <p>General Enquiry</p>
            <a href="tel:+911412395845">+91 141 239 5845</a>
        </div>
    </nav>

    <!-- ================================================
         HERO
         ================================================ -->
