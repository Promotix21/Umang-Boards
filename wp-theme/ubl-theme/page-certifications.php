<?php
/**
 * Template Name: Certifications
 * Certifications showcase page for Umang Boards Limited
 */
get_header();
$uri = UBL_URI;
?>

<style>
/* ============================================
   CERTIFICATIONS PAGE
   ============================================ */

/* --- HERO --- */
.cert-hero {
    position: relative;
    background: #fdf9f4;
    color: #0b1f3a;
    padding: calc(var(--utility-h) + var(--header-h) + 4rem) 0 6rem;
    overflow: hidden;
}
.cert-hero-gradient {
    position: absolute;
    inset: 0;
    background: none;
}
.cert-hero-glow {
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at top right, rgba(212,168,67,0.12) 0%, transparent 50%);
    pointer-events: none;
}
.cert-hero-pattern {
    position: absolute;
    inset: 0;
    opacity: 1;
    background-image: radial-gradient(circle, rgba(11,31,58,0.06) 1px, transparent 1px);
    background-size: 24px 24px;
    pointer-events: none;
}
.cert-hero-accent {
    position: absolute;
    left: clamp(1.5rem, 4vw, 3.5rem);
    top: calc(var(--utility-h) + var(--header-h) + 2rem);
    bottom: 2rem;
    width: 4px;
    background: linear-gradient(to bottom, var(--gold), rgba(212,168,67,0.2));
    z-index: 1;
}
.cert-hero-inner {
    position: relative;
    z-index: 2;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.cert-breadcrumb {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: rgba(11,31,58,0.6);
    margin-bottom: 2rem;
}
.cert-breadcrumb a {
    color: rgba(11,31,58,0.6);
    text-decoration: none;
    transition: color 0.3s;
}
.cert-breadcrumb a:hover { color: var(--gold); }
.cert-breadcrumb .active { color: var(--gold); }
.cert-breadcrumb svg { width: 12px; height: 12px; }
.cert-hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.4rem 1rem;
    background: rgba(212,168,67,0.1);
    border: 1px solid rgba(212,168,67,0.25);
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    margin-bottom: 1.5rem;
}
.cert-hero-badge svg { width: 14px; height: 14px; fill: var(--gold); }
.cert-hero-title {
    font-family: var(--font-body);
    font-size: clamp(2.5rem, 5.5vw, 4.5rem);
    font-weight: 700;
    line-height: 1.08;
    letter-spacing: -0.03em;
    margin-bottom: 1.5rem;
    max-width: 800px;
}
.cert-hero-title em { font-style: normal; color: var(--gold); }
.cert-hero-subtitle {
    font-size: clamp(1.05rem, 1.8vw, 1.3rem);
    color: rgba(11,31,58,0.75);
    max-width: 600px;
    line-height: 1.65;
    font-weight: 400;
}

/* --- CERTIFICATIONS GRID --- */
.cert-grid-section {
    padding: clamp(4rem, 8vh, 7rem) 0;
    background: #fff;
}
.cert-grid-wrap {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.cert-section-label {
    border-left: 4px solid var(--gold);
    padding-left: 1.5rem;
    margin-bottom: clamp(2.5rem, 4vh, 4rem);
}
.cert-section-label h2 {
    font-size: 0.8rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin: 0 0 0.5rem;
}
.cert-section-label p {
    font-size: clamp(1.4rem, 2.5vw, 2rem);
    font-weight: 700;
    color: #0b1f3a;
    letter-spacing: -0.02em;
    margin: 0;
    line-height: 1.2;
}
.cert-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.5rem;
}
.cert-card {
    background: #fff;
    border: 1px solid rgba(0,0,0,0.06);
    padding: 2.5rem 2rem;
    transition: all 0.4s var(--ease-out-expo);
    position: relative;
    overflow: hidden;
}
.cert-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: var(--gold);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.4s var(--ease-out-expo);
}
.cert-card:hover {
    border-color: var(--gold);
    box-shadow: 0 12px 40px rgba(55,110,180,0.08);
    transform: translateY(-4px);
}
.cert-card:hover::before {
    transform: scaleX(1);
}
.cert-icon {
    width: 56px;
    height: 56px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(55,110,180,0.06);
    border-radius: 12px;
    margin-bottom: 1.5rem;
}
.cert-icon svg {
    width: 28px;
    height: 28px;
    fill: none;
    stroke: #0b1f3a;
    stroke-width: 1.5;
    stroke-linecap: round;
    stroke-linejoin: round;
}
.cert-name {
    font-family: var(--font-body);
    font-size: 1.25rem;
    font-weight: 700;
    color: #0b1f3a;
    margin: 0 0 0.35rem;
    letter-spacing: -0.01em;
}
.cert-full {
    font-size: 0.85rem;
    font-weight: 600;
    color: #0b1f3a;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    margin-bottom: 1rem;
}
.cert-desc {
    font-size: 0.9rem;
    color: rgba(11,31,58,0.65);
    line-height: 1.65;
    margin: 0;
}

/* --- NABL HIGHLIGHT --- */
.cert-nabl {
    padding: clamp(4rem, 8vh, 7rem) 0;
    background: #f8f9fb;
}
.cert-nabl-wrap {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: clamp(2rem, 5vw, 5rem);
    align-items: center;
}
.cert-nabl-content {}
.cert-nabl-eyebrow {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 1rem;
}
.cert-nabl-title {
    font-family: var(--font-body);
    font-size: clamp(1.6rem, 3vw, 2.4rem);
    font-weight: 700;
    color: #0b1f3a;
    letter-spacing: -0.02em;
    line-height: 1.15;
    margin: 0 0 1.5rem;
}
.cert-nabl-text {
    font-size: 1rem;
    color: rgba(11,31,58,0.65);
    line-height: 1.7;
    margin: 0 0 1.5rem;
}
.cert-nabl-points {
    list-style: none;
    padding: 0;
    margin: 0 0 2rem;
}
.cert-nabl-points li {
    display: flex;
    align-items: flex-start;
    gap: 0.75rem;
    padding: 0.6rem 0;
    font-size: 0.92rem;
    color: rgba(11,31,58,0.65);
    line-height: 1.5;
}
.cert-nabl-points li svg {
    width: 18px;
    height: 18px;
    flex-shrink: 0;
    margin-top: 2px;
    fill: none;
    stroke: var(--gold);
    stroke-width: 2;
}
.cert-nabl-visual {
    display: flex;
    align-items: center;
    justify-content: center;
    background: #fff;
    border: 1px solid rgba(0,0,0,0.06);
    padding: 3rem;
    min-height: 360px;
}
.cert-nabl-visual img {
    max-width: 280px;
    width: 100%;
    height: auto;
    object-fit: contain;
}

/* --- PGCIL SECTION --- */
.cert-pgcil {
    padding: clamp(4rem, 8vh, 7rem) 0;
    background: #fff;
}
.cert-pgcil-wrap {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: clamp(2rem, 5vw, 5rem);
    align-items: center;
}
.cert-pgcil-visual {
    display: flex;
    align-items: center;
    justify-content: center;
    background: #f8f9fb;
    border: 1px solid rgba(0,0,0,0.06);
    padding: 3rem;
    min-height: 300px;
}
.cert-pgcil-visual .pgcil-badge {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    gap: 1rem;
}
.cert-pgcil-visual .pgcil-badge svg {
    width: 80px;
    height: 80px;
    fill: none;
    stroke: #0b1f3a;
    stroke-width: 1.2;
}
.cert-pgcil-visual .pgcil-badge-label {
    font-size: 1.8rem;
    font-weight: 800;
    color: #0b1f3a;
    letter-spacing: -0.02em;
}
.cert-pgcil-visual .pgcil-badge-sub {
    font-size: 0.85rem;
    color: rgba(11,31,58,0.65);
    font-weight: 500;
}
.cert-pgcil-visual .pgcil-badges {
    display: flex;
    gap: 2.5rem;
    align-items: center;
}
.cert-pgcil-visual .pgcil-badge-divider {
    width: 1px;
    height: 80px;
    background: rgba(0,0,0,0.1);
}
.cert-pgcil-visual .pgcil-badge-note {
    font-size: 0.8rem;
    color: rgba(11,31,58,0.65);
    font-weight: 500;
    margin-top: 0.5rem;
    max-width: 160px;
    text-align: center;
    line-height: 1.4;
}
.cert-pgcil-content {}
.cert-pgcil-eyebrow {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 1rem;
}
.cert-pgcil-title {
    font-family: var(--font-body);
    font-size: clamp(1.6rem, 3vw, 2.4rem);
    font-weight: 700;
    color: #0b1f3a;
    letter-spacing: -0.02em;
    line-height: 1.15;
    margin: 0 0 1.5rem;
}
.cert-pgcil-text {
    font-size: 1rem;
    color: rgba(11,31,58,0.65);
    line-height: 1.7;
    margin: 0 0 1.5rem;
}

/* --- CTA --- */
.cert-cta {
    background: linear-gradient(145deg, #f2e0c8 0%, #e8caa4 45%, #ddb880 100%);
    padding: clamp(4rem, 8vh, 6rem) 0;
    text-align: center;
    color: #0b1f3a;
    position: relative;
    overflow: hidden;
}
.cert-cta-glow {
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at center, rgba(212,168,67,0.15) 0%, transparent 60%);
    pointer-events: none;
}
.cert-cta-inner {
    position: relative;
    z-index: 2;
    max-width: 700px;
    margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.cert-cta-title {
    font-family: var(--font-body);
    font-size: clamp(1.6rem, 3vw, 2.2rem);
    font-weight: 700;
    margin-bottom: 1rem;
    letter-spacing: -0.02em;
}
.cert-cta-subtitle {
    font-size: 1rem;
    color: rgba(11,31,58,0.65);
    margin-bottom: 2.5rem;
    line-height: 1.6;
}
.cert-cta-btns {
    display: flex;
    justify-content: center;
    gap: 1rem;
    flex-wrap: wrap;
}
.cert-cta .btn-outline { color: #0b1f3a; border-color: rgba(11,31,58,0.25); }
.cert-cta .btn-outline:hover { border-color: var(--gold); color: var(--gold); }

/* --- RESPONSIVE --- */
@media (max-width: 1024px) {
    .cert-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    .cert-nabl-wrap,
    .cert-pgcil-wrap {
        grid-template-columns: 1fr;
        gap: 2.5rem;
    }
    .cert-nabl-visual {
        order: -1;
    }
}
@media (max-width: 640px) {
    .cert-grid {
        grid-template-columns: 1fr;
    }
    .cert-hero {
        padding-bottom: 4rem;
    }
    .cert-card {
        padding: 2rem 1.5rem;
    }
    .cert-nabl-visual {
        min-height: 250px;
        padding: 2rem;
    }
    .cert-pgcil-visual {
        min-height: 220px;
        padding: 2rem;
    }
}
</style>

<main class="page-certs">

    <!-- ═══════════════════════════════════
         HERO
    ════════════════════════════════════ -->
    <section class="cert-hero">
        <div class="cert-hero-gradient"></div>
        <div class="cert-hero-glow"></div>
        <div class="cert-hero-pattern"></div>
        <div class="cert-hero-accent"></div>
        <div class="cert-hero-inner">
            <nav class="cert-breadcrumb">
                <a href="/">Home</a>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                <span>Company</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                <span class="active">Certifications</span>
            </nav>
            <div class="cert-hero-badge">
                <svg viewBox="0 0 24 24"><path d="M12 2L9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61z"/></svg>
                Quality Assured
            </div>
            <h1 class="cert-hero-title">Certified for <em>Global Standards</em></h1>
            <p class="cert-hero-subtitle">Our comprehensive certifications affirm Umang Boards' commitment to quality, safety, and environmental responsibility across every product and process.</p>
        </div>
    </section>

    <!-- ═══════════════════════════════════
         CERTIFICATIONS GRID
    ════════════════════════════════════ -->
    <section class="cert-grid-section">
        <div class="cert-grid-wrap">
            <div class="cert-section-label">
                <h2>Our Certifications</h2>
                <p>Internationally Recognised Quality Systems</p>
            </div>
            <div class="cert-grid">

                <!-- ISO 9001:2015 -->
                <div class="cert-card" data-cert>
                    <div class="cert-icon">
                        <svg viewBox="0 0 24 24"><path d="M9 12l2 2 4-4"/><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/></svg>
                    </div>
                    <h3 class="cert-name">ISO 9001:2015</h3>
                    <div class="cert-full">Quality Management System</div>
                    <p class="cert-desc">Ensures consistent delivery of products and services that meet customer expectations and applicable regulatory requirements through a robust quality management framework.</p>
                </div>

                <!-- ISO 14001:2015 -->
                <div class="cert-card" data-cert>
                    <div class="cert-icon">
                        <svg viewBox="0 0 24 24"><path d="M12 22c-4.97 0-9-2.69-9-6v-4c0 3.31 4.03 6 9 6s9-2.69 9-6v4c0 3.31-4.03 6-9 6z"/><path d="M12 16c-4.97 0-9-2.69-9-6s4.03-6 9-6 9 2.69 9 6-4.03 6-9 6z"/><path d="M12 6v6"/><path d="M9 9l3-3 3 3"/></svg>
                    </div>
                    <h3 class="cert-name">ISO 14001:2015</h3>
                    <div class="cert-full">Environmental Management System</div>
                    <p class="cert-desc">Demonstrates our commitment to minimising environmental impact through systematic management of environmental responsibilities, sustainable resource use, and pollution prevention.</p>
                </div>

                <!-- OHSAS 45001 -->
                <div class="cert-card" data-cert>
                    <div class="cert-icon">
                        <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <h3 class="cert-name">ISO 45001</h3>
                    <div class="cert-full">Occupational Health &amp; Safety</div>
                    <p class="cert-desc">Provides a framework for managing occupational health and safety risks, ensuring safe and healthy workplaces by preventing work-related injuries and ill health across all operations.</p>
                </div>

                <!-- NABL -->
                <div class="cert-card" data-cert>
                    <div class="cert-icon">
                        <svg viewBox="0 0 24 24"><path d="M9 3h6v11l-3 3-3-3V3z"/><path d="M6 21h12"/><path d="M12 17v4"/></svg>
                    </div>
                    <h3 class="cert-name">NABL Accredited</h3>
                    <div class="cert-full">ISO/IEC 17025 Laboratory</div>
                    <p class="cert-desc">Our in-house testing laboratory is accredited by the National Accreditation Board for Testing and Calibration Laboratories, ensuring internationally accepted test results.</p>
                </div>

                <!-- PGCIL -->
                <div class="cert-card" data-cert>
                    <div class="cert-icon">
                        <svg viewBox="0 0 24 24"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                    </div>
                    <h3 class="cert-name">PGCIL Approved</h3>
                    <div class="cert-full">Power Grid Corporation of India</div>
                    <p class="cert-desc">Approved by PGCIL for supply of transformer insulation materials up to 400 kV class (2025). Additionally, 525 kV class performance validated by ATEF, Azerbaijan for insulation pressboards and laminated boards.</p>
                </div>

                <!-- CRISIL -->
                <div class="cert-card" data-cert>
                    <div class="cert-icon">
                        <svg viewBox="0 0 24 24"><path d="M12 2L9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61z"/></svg>
                    </div>
                    <h3 class="cert-name">CRISIL Rated</h3>
                    <div class="cert-full">SME Performance Rating</div>
                    <p class="cert-desc">Rated by CRISIL, India's leading rating agency and an S&amp;P Global company, recognising Umang Boards' financial strength, operational performance, and business fundamentals.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════
         NABL HIGHLIGHT
    ════════════════════════════════════ -->
    <section class="cert-nabl">
        <div class="cert-nabl-wrap">
            <div class="cert-nabl-content">
                <div class="cert-nabl-eyebrow">Key Differentiator</div>
                <h2 class="cert-nabl-title">NABL Accredited In-House Laboratory</h2>
                <p class="cert-nabl-text">Our laboratory, accredited under ISO/IEC 17025, is a rare capability among Indian insulation manufacturers. It enables rigorous, internationally recognised testing at every stage of production.</p>
                <ul class="cert-nabl-points">
                    <li>
                        <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg>
                        Full mechanical, electrical, and chemical testing capabilities
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg>
                        Test reports accepted internationally without retesting
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg>
                        Ensures compliance with IEC 60641, IS 1076, and other global standards
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg>
                        Enables 100% quality traceability across production batches
                    </li>
                </ul>
            </div>
            <div class="cert-nabl-visual">
                <img src="<?php echo $uri; ?>/assets/images/NABL_Official_LOGO_Registered.png" alt="NABL Accreditation Logo" loading="lazy">
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════
         PGCIL HIGHLIGHT
    ════════════════════════════════════ -->
    <section class="cert-pgcil">
        <div class="cert-pgcil-wrap">
            <div class="cert-pgcil-visual">
                <div class="pgcil-badges">
                    <div class="pgcil-badge">
                        <svg viewBox="0 0 24 24"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                        <div class="pgcil-badge-label">400 kV</div>
                        <div class="pgcil-badge-sub">PGCIL Approved Class</div>
                    </div>
                    <div class="pgcil-badge-divider"></div>
                    <div class="pgcil-badge">
                        <svg viewBox="0 0 24 24"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                        <div class="pgcil-badge-label">525 kV</div>
                        <div class="pgcil-badge-sub">Performance Validated</div>
                        <div class="pgcil-badge-note">ATEF, Azerbaijan</div>
                    </div>
                </div>
            </div>
            <div class="cert-pgcil-content">
                <div class="cert-pgcil-eyebrow">Power Sector Approval</div>
                <h2 class="cert-pgcil-title">PGCIL Approved up to 400 kV Class</h2>
                <p class="cert-pgcil-text">Approval by Power Grid Corporation of India Limited (PGCIL) — India's central transmission utility — qualifies Umang Boards to supply transformer insulation materials for the country's highest-voltage power transmission projects.</p>
                <p class="cert-pgcil-text">This approval is granted only after rigorous type-testing, factory inspection, and consistent performance validation, reflecting the highest manufacturing standards in the Indian power sector.</p>
                <p class="cert-pgcil-text"><strong>525 kV class performance validated by ATEF, Azerbaijan</strong> — Received performance letter from ATEF, Azerbaijan for successfully using our insulation pressboards and laminated boards in their 525 KV Class transformers.</p>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════
         CTA
    ════════════════════════════════════ -->
    <section class="cert-cta">
        <div class="cert-cta-glow"></div>
        <div class="cert-cta-inner">
            <h2 class="cert-cta-title">Need Certification Documents?</h2>
            <p class="cert-cta-subtitle">Request copies of our certifications, test reports, or quality documentation. Our team is ready to assist with your compliance requirements.</p>
            <div class="cert-cta-btns">
                <a href="/contact-us" class="btn-gold" data-cursor="hover">
                    <svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                    Contact Us
                </a>
                <a href="/downloads" class="btn-outline" data-cursor="hover">
                    <svg viewBox="0 0 24 24"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Downloads
                </a>
            </div>
        </div>
    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    if (typeof gsap === 'undefined') return;

    /* Hero entrance */
    gsap.from('.cert-hero-badge', { opacity: 0, y: 20, duration: 0.8, delay: 0.2, ease: 'power3.out' });
    gsap.from('.cert-hero-title', { opacity: 0, y: 30, duration: 0.9, delay: 0.35, ease: 'power3.out' });
    gsap.from('.cert-hero-subtitle', { opacity: 0, y: 20, duration: 0.8, delay: 0.5, ease: 'power3.out' });

    /* Cert cards stagger */
    if (typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);

        gsap.fromTo('[data-cert]',
            { opacity: 0, y: 40 },
            {
                scrollTrigger: {
                    trigger: '.cert-grid',
                    start: 'top 85%',
                    once: true,
                    onEnter: function() { gsap.set('[data-cert]', { clearProps: 'all' }); }
                },
                opacity: 1,
                y: 0,
                duration: 0.7,
                stagger: 0.1,
                ease: 'power3.out'
            }
        );
        /* Fallback: ensure cards are visible after 4s regardless */
        setTimeout(function() {
            document.querySelectorAll('[data-cert]').forEach(function(el) { el.style.opacity = '1'; el.style.transform = 'none'; });
        }, 4000);

        UBL.wipeIn('.cert-nabl-title', { delay: 0.1, start: 'top 75%' });
        UBL.wipeIn('.cert-pgcil-title', { delay: 0.1, start: 'top 75%' });
        UBL.wipeIn('.cert-cta-title', { delay: 0.1 });

        gsap.from('.cert-nabl-content', {
            scrollTrigger: {
                trigger: '.cert-nabl',
                start: 'top 75%',
                once: true
            },
            opacity: 0,
            x: -30,
            duration: 0.8,
            ease: 'power3.out'
        });

        gsap.from('.cert-nabl-visual', {
            scrollTrigger: {
                trigger: '.cert-nabl',
                start: 'top 75%',
                once: true
            },
            opacity: 0,
            x: 30,
            duration: 0.8,
            delay: 0.15,
            ease: 'power3.out'
        });

        gsap.from('.cert-pgcil-visual', {
            scrollTrigger: {
                trigger: '.cert-pgcil',
                start: 'top 75%',
                once: true
            },
            opacity: 0,
            x: -30,
            duration: 0.8,
            ease: 'power3.out'
        });

        gsap.from('.cert-pgcil-content', {
            scrollTrigger: {
                trigger: '.cert-pgcil',
                start: 'top 75%',
                once: true
            },
            opacity: 0,
            x: 30,
            duration: 0.8,
            delay: 0.15,
            ease: 'power3.out'
        });

        gsap.from('.cert-cta-inner', {
            scrollTrigger: {
                trigger: '.cert-cta',
                start: 'top 80%',
                once: true
            },
            opacity: 0,
            y: 30,
            duration: 0.8,
            ease: 'power3.out'
        });
    }
});
</script>

<?php get_footer(); ?>
