<?php
/**
 * Template Name: Sustainability
 * Description: Environmental sustainability page for Umang Boards Limited
 */
get_header();
$uri = UBL_URI;
?>

<style>
/* ============================================
   SUSTAINABILITY PAGE
   ============================================ */

/* --- HERO --- */
.sust-hero {
    position: relative;
    background: var(--navy);
    color: #fff;
    padding: calc(var(--utility-h) + var(--header-h) + 4rem) 0 12rem;
    overflow: hidden;
}
.sust-hero-bg {
    position: absolute;
    inset: 0;
    background: url('<?php echo $uri; ?>/assets/images/csr-environmental.jpg') center/cover no-repeat;
    opacity: 0.18;
    mix-blend-mode: luminosity;
}
.sust-hero-gradient {
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, var(--navy), rgba(11,31,58,0.9), var(--navy));
}
.sust-hero-glow {
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at top right, rgba(200,168,75,0.15) 0%, transparent 50%);
    pointer-events: none;
}
.sust-hero-inner {
    position: relative;
    z-index: 2;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.sust-hero-breadcrumb {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: rgba(255,255,255,0.5);
    margin-bottom: 2rem;
}
.sust-hero-breadcrumb a { color: rgba(255,255,255,0.5); text-decoration: none; transition: color 0.3s; }
.sust-hero-breadcrumb a:hover { color: var(--gold); }
.sust-hero-breadcrumb .active { color: var(--gold); }
.sust-hero-breadcrumb svg { width: 12px; height: 12px; }
.sust-hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.4rem 1rem;
    background: rgba(255,255,255,0.1);
    border: 1px solid rgba(255,255,255,0.2);
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    margin-bottom: 1.5rem;
}
.sust-hero-badge svg { width: 14px; height: 14px; fill: var(--gold); }
.sust-hero-title {
    font-family: var(--font-body);
    font-size: clamp(2.5rem, 5.5vw, 4.5rem);
    font-weight: 700;
    line-height: 1.08;
    letter-spacing: -0.03em;
    margin-bottom: 2rem;
    max-width: 900px;
}
.sust-hero-title em { font-style: normal; color: var(--gold); }
.sust-hero-subtitle {
    font-size: clamp(1.1rem, 2vw, 1.4rem);
    color: rgba(255,255,255,0.7);
    max-width: 600px;
    line-height: 1.6;
    font-weight: 300;
}

/* --- OVERLAPPING FEATURE IMAGE --- */
.sust-feature {
    position: relative;
    z-index: 20;
    max-width: 1400px;
    margin: -6rem auto 0;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.sust-feature-img {
    position: relative;
    width: 100%;
    height: clamp(300px, 45vw, 700px);
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0,0,0,0.15);
    border: 1px solid rgba(255,255,255,0.1);
}
.sust-feature-img img {
    width: 100%; height: 100%; object-fit: cover;
    filter: grayscale(100%);
    transition: filter 1s ease, transform 1s ease;
}
.sust-feature-img:hover img { filter: grayscale(0%); transform: scale(1.02); }
.sust-feature-label {
    position: absolute;
    bottom: 0;
    left: 0;
    background: rgba(11,31,58,0.9);
    backdrop-filter: blur(8px);
    padding: 1rem 1.5rem;
    border-top: 2px solid var(--gold);
    color: #fff;
    font-size: 0.85rem;
    font-weight: 500;
    letter-spacing: 0.05em;
}

/* --- COMMITMENT --- */
.sust-commitment {
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
    max-width: 1400px;
    margin: 0 auto;
}
.sust-commitment-layout {
    display: flex;
    gap: clamp(3rem, 6vw, 6rem);
    align-items: flex-start;
}
.sust-commitment-left {
    width: 33%;
    flex-shrink: 0;
}
.sust-commitment-bar {
    width: 3px;
    height: 3rem;
    background: var(--gold);
    margin-bottom: 1.5rem;
}
.sust-commitment-eyebrow {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 1rem;
}
.sust-commitment-heading {
    font-family: var(--font-body);
    font-size: clamp(2rem, 3.5vw, 3rem);
    font-weight: 700;
    line-height: 1.15;
    letter-spacing: -0.02em;
    color: var(--text-primary);
}
.sust-commitment-right {
    flex: 1;
    padding-top: 0.5rem;
}
.sust-commitment-quote {
    font-family: var(--font-body);
    font-size: clamp(1.2rem, 2vw, 1.6rem);
    font-weight: 300;
    line-height: 1.7;
    color: var(--text-secondary);
    font-style: italic;
    margin: 0 0 2rem;
    position: relative;
    padding-left: 2rem;
    border-left: 3px solid var(--gold);
}
.sust-commitment-text {
    font-size: 1.05rem;
    color: var(--text-secondary);
    line-height: 1.7;
    font-weight: 300;
    margin: 0 0 1.5rem;
}
.sust-commitment-text:last-child { margin-bottom: 0; }

/* --- KEY PRACTICES --- */
.sust-practices {
    background: var(--bg-secondary);
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
}
.sust-practices-inner {
    max-width: 1400px;
    margin: 0 auto;
}
.sust-practices-header {
    text-align: center;
    margin-bottom: clamp(3rem, 6vh, 5rem);
}
.sust-practices-bar {
    width: 3px;
    height: 2.5rem;
    background: var(--gold);
    margin: 0 auto 1.5rem;
}
.sust-practices-eyebrow {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 1rem;
}
.sust-practices-title {
    font-family: var(--font-body);
    font-size: clamp(2rem, 3.5vw, 3rem);
    font-weight: 700;
    line-height: 1.15;
    letter-spacing: -0.02em;
    color: var(--text-primary);
    margin: 0 0 1rem;
}
.sust-practices-subtitle {
    font-size: 1.1rem;
    color: var(--text-muted);
    font-weight: 300;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}
.sust-practices-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: clamp(1.5rem, 3vw, 2.5rem);
}
.sust-practice {
    background: #fff;
    border: 1px solid rgba(11,31,58,0.06);
    padding: clamp(2rem, 3vw, 2.5rem);
    transition: all 0.5s var(--ease-out-expo);
    position: relative;
    overflow: hidden;
    display: flex;
    gap: 1.5rem;
    align-items: flex-start;
}
.sust-practice::before {
    content: '';
    position: absolute;
    top: 0; left: 0; bottom: 0;
    width: 3px;
    background: var(--gold);
    transform: scaleY(0);
    transform-origin: top;
    transition: transform 0.4s var(--ease-out-expo);
}
.sust-practice:hover {
    border-color: var(--gold);
    transform: translateY(-4px);
    box-shadow: 0 20px 50px rgba(0,0,0,0.08);
}
.sust-practice:hover::before { transform: scaleY(1); }
.sust-practice-icon {
    width: 64px;
    height: 64px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(200,168,75,0.1);
    border-radius: 12px;
    flex-shrink: 0;
}
.sust-practice-icon svg {
    width: 32px;
    height: 32px;
    fill: none;
    stroke: var(--gold);
    stroke-width: 1.5;
    stroke-linecap: round;
    stroke-linejoin: round;
}
.sust-practice-content { flex: 1; }
.sust-practice-number {
    font-size: 0.7rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 0.5rem;
}
.sust-practice-title {
    font-family: var(--font-body);
    font-size: clamp(1.3rem, 2vw, 1.6rem);
    font-weight: 700;
    color: var(--navy);
    margin: 0 0 0.75rem;
    letter-spacing: -0.01em;
}
.sust-practice-desc {
    font-size: 0.95rem;
    color: var(--text-secondary);
    line-height: 1.7;
    font-weight: 300;
    margin: 0;
}

/* Featured practice cards (ZLD + Solar/Biomass) */
.sust-practice--featured {
    background: linear-gradient(135deg, var(--navy), #0f2847);
    border-color: rgba(200,168,75,0.3);
}
.sust-practice--featured .sust-practice-icon {
    background: rgba(200,168,75,0.15);
}
.sust-practice--featured .sust-practice-icon svg {
    stroke: var(--gold);
}
.sust-practice--featured .sust-practice-number {
    color: var(--gold);
}
.sust-practice--featured .sust-practice-title {
    color: #fff;
}
.sust-practice--featured .sust-practice-desc {
    color: rgba(255,255,255,0.7);
}
.sust-practice--featured::before {
    background: var(--gold);
    transform: scaleY(1);
}
.sust-practice--featured:hover {
    border-color: var(--gold);
    box-shadow: 0 20px 50px rgba(200,168,75,0.15);
}
.sust-practice--featured .sust-practice-tag {
    display: inline-block;
    padding: 0.2rem 0.6rem;
    background: rgba(200,168,75,0.15);
    border: 1px solid rgba(200,168,75,0.3);
    font-size: 0.65rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.12em;
    color: var(--gold);
    margin-bottom: 0.5rem;
}
.sust-practice-tag { display: none; }

/* --- ISO HIGHLIGHT --- */
.sust-iso {
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
    max-width: 1400px;
    margin: 0 auto;
}
.sust-iso-wrap {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: clamp(3rem, 6vw, 5rem);
    align-items: center;
}
.sust-iso-visual {
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--bg-secondary);
    border: 1px solid rgba(11,31,58,0.06);
    padding: 3rem;
    min-height: 320px;
}
.sust-iso-badge {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    gap: 1rem;
}
.sust-iso-badge svg {
    width: 80px;
    height: 80px;
    fill: none;
    stroke: var(--navy);
    stroke-width: 1.2;
}
.sust-iso-badge-label {
    font-size: 1.6rem;
    font-weight: 800;
    color: var(--navy);
    letter-spacing: -0.02em;
}
.sust-iso-badge-sub {
    font-size: 0.85rem;
    color: var(--text-muted);
    font-weight: 500;
}
.sust-iso-content {}
.sust-iso-eyebrow {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 1rem;
}
.sust-iso-title {
    font-family: var(--font-body);
    font-size: clamp(1.6rem, 3vw, 2.4rem);
    font-weight: 700;
    color: var(--text-primary);
    letter-spacing: -0.02em;
    line-height: 1.15;
    margin: 0 0 1.5rem;
}
.sust-iso-text {
    font-size: 1rem;
    color: var(--text-secondary);
    line-height: 1.7;
    margin: 0 0 1.5rem;
}
.sust-iso-points {
    list-style: none;
    padding: 0;
    margin: 0;
}
.sust-iso-points li {
    display: flex;
    align-items: flex-start;
    gap: 0.75rem;
    padding: 0.6rem 0;
    font-size: 0.92rem;
    color: var(--text-secondary);
    line-height: 1.5;
}
.sust-iso-points li svg {
    width: 18px;
    height: 18px;
    flex-shrink: 0;
    margin-top: 2px;
    fill: none;
    stroke: var(--gold);
    stroke-width: 2;
}

/* --- CTA --- */
.sust-cta {
    background: var(--navy);
    color: #fff;
    padding: clamp(4rem, 8vh, 6rem) clamp(1.5rem, 4vw, 3.5rem);
    text-align: center;
    position: relative;
    overflow: hidden;
}
.sust-cta-glow {
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at center, rgba(212,168,67,0.1) 0%, transparent 60%);
    pointer-events: none;
}
.sust-cta-inner {
    position: relative;
    z-index: 2;
    max-width: 700px;
    margin: 0 auto;
}
.sust-cta-title {
    font-family: var(--font-body);
    font-size: clamp(1.6rem, 3vw, 2.2rem);
    font-weight: 700;
    margin-bottom: 1rem;
    letter-spacing: -0.02em;
}
.sust-cta-subtitle {
    font-size: 1rem;
    color: rgba(255,255,255,0.7);
    margin-bottom: 2.5rem;
    line-height: 1.6;
}
.sust-cta-btns {
    display: flex;
    justify-content: center;
    gap: 1rem;
    flex-wrap: wrap;
}

/* --- RESPONSIVE --- */
@media (max-width: 1024px) {
    .sust-commitment-layout { flex-direction: column; }
    .sust-commitment-left { width: 100%; }
    .sust-practices-grid { grid-template-columns: 1fr; }
    .sust-iso-wrap { grid-template-columns: 1fr; }
    .sust-iso-visual { order: -1; }
}
@media (max-width: 768px) {
    .sust-hero { padding: calc(var(--utility-h) + var(--header-h) + 2rem) 0 8rem; }
    .sust-feature { margin-top: -4rem; }
    .sust-feature-img { height: clamp(200px, 50vw, 400px); }
    .sust-practice { flex-direction: column; }
    .sust-iso-visual { min-height: 250px; padding: 2rem; }
}
</style>

<main class="page-sustainability">

    <!-- ════ HERO ════ -->
    <section class="sust-hero">
        <div class="sust-hero-bg"></div>
        <div class="sust-hero-gradient"></div>
        <div class="sust-hero-glow"></div>
        <div class="sust-hero-inner">
            <nav class="sust-hero-breadcrumb" aria-label="Breadcrumb">
                <a href="<?php echo home_url(); ?>">Home</a>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                <span>Company</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                <span class="active">Sustainability</span>
            </nav>
            <div class="sust-hero-badge">
                <svg viewBox="0 0 24 24"><path d="M12 22c-4.97 0-9-2.69-9-6v-4c0 3.31 4.03 6 9 6s9-2.69 9-6v4c0 3.31-4.03 6-9 6z"/><path d="M12 16c-4.97 0-9-2.69-9-6s4.03-6 9-6 9 2.69 9 6-4.03 6-9 6z"/><path d="M12 6v6"/><path d="M9 9l3-3 3 3"/></svg>
                Environmental Stewardship
            </div>
            <h1 class="sust-hero-title">Committed to<br><em>Sustainability</em></h1>
            <p class="sust-hero-subtitle">Building a greener future through responsible manufacturing, resource conservation, and environmental stewardship at every level of our operations.</p>
        </div>
    </section>

    <!-- ════ OVERLAPPING IMAGE ════ -->
    <section class="sust-feature">
        <div class="sust-feature-img">
            <img src="<?php echo $uri; ?>/assets/images/csr-environmental.jpg" alt="Umang Boards sustainability initiatives" loading="eager">
            <div class="sust-feature-label">ISO 14001 Certified Environmental Management</div>
        </div>
    </section>

    <!-- ════ COMMITMENT ════ -->
    <section class="sust-commitment">
        <div class="sust-commitment-layout">
            <div class="sust-commitment-left">
                <div class="sust-commitment-bar"></div>
                <div class="sust-commitment-eyebrow">Our Commitment</div>
                <h2 class="sust-commitment-heading">Environmental<br>Responsibility</h2>
            </div>
            <div class="sust-commitment-right">
                <p class="sust-commitment-quote">Sustainable manufacturing is not just a goal -- it is integral to how we operate, innovate, and grow.</p>
                <p class="sust-commitment-text">At Umang Boards, we recognise that industrial growth must be balanced with environmental stewardship. We leverage state-of-the-art manufacturing technology, implement rigorous quality management systems, and maintain zero liquid discharge (ZLD) and sustainable practices including solar energy and biomass fuels.</p>
                <p class="sust-commitment-text">Our ISO 14001-certified environmental management system governs every aspect of our manufacturing operations, from raw material sourcing to waste disposal. We continuously invest in cleaner technologies, energy-efficient practices, and low carbon footprint initiatives to reduce our environmental impact while maintaining the highest product quality standards demanded by the global transformer and electrical industry.</p>
            </div>
        </div>
    </section>

    <!-- ════ KEY PRACTICES ════ -->
    <section class="sust-practices">
        <div class="sust-practices-inner">
            <div class="sust-practices-header">
                <div class="sust-practices-bar"></div>
                <div class="sust-practices-eyebrow">Our Initiatives</div>
                <h2 class="sust-practices-title">Key Sustainability Practices</h2>
                <p class="sust-practices-subtitle">Our environmental strategy encompasses comprehensive initiatives -- from zero liquid discharge systems and renewable energy to sustainable resource management -- driving measurable impact across all operations.</p>
            </div>

            <div class="sust-practices-grid">

                <!-- Waste Reduction -->
                <div class="sust-practice">
                    <div class="sust-practice-icon">
                        <svg viewBox="0 0 24 24"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"/></svg>
                    </div>
                    <div class="sust-practice-content">
                        <div class="sust-practice-number">Practice 01</div>
                        <h3 class="sust-practice-title">Waste Reduction</h3>
                        <p class="sust-practice-desc">Systematic waste minimization through process optimization, material recovery, and recycling programs. We monitor and reduce waste generation at every stage of production, recycling process water and repurposing material offcuts wherever possible.</p>
                    </div>
                </div>

                <!-- Zero Liquid Discharge -->
                <div class="sust-practice sust-practice--featured">
                    <div class="sust-practice-icon">
                        <svg viewBox="0 0 24 24"><path d="M12 2.69l5.66 5.66a8 8 0 11-11.31 0z"/></svg>
                    </div>
                    <div class="sust-practice-content">
                        <div class="sust-practice-tag">Key Differentiator</div>
                        <div class="sust-practice-number">Practice 02</div>
                        <h3 class="sust-practice-title">Zero Liquid Discharge (ZLD)</h3>
                        <p class="sust-practice-desc">We maintain Zero Liquid Discharge (ZLD) systems across our manufacturing facilities, ensuring no wastewater is released into the environment. Our advanced closed-loop water treatment and recycling systems treat and reuse 100% of process water, significantly reducing freshwater consumption and eliminating untreated effluent discharge.</p>
                    </div>
                </div>

                <!-- Energy Efficiency -->
                <div class="sust-practice">
                    <div class="sust-practice-icon">
                        <svg viewBox="0 0 24 24"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                    </div>
                    <div class="sust-practice-content">
                        <div class="sust-practice-number">Practice 03</div>
                        <h3 class="sust-practice-title">Energy-Efficient Practices</h3>
                        <p class="sust-practice-desc">Energy-efficient practices are a core commitment at Umang Boards. We continuously invest in high-efficiency equipment, LED lighting, variable frequency drives, and process optimization to reduce energy consumption per unit of production. Regular energy audits drive measurable improvements in our overall carbon intensity.</p>
                    </div>
                </div>

                <!-- Emission Control -->
                <div class="sust-practice">
                    <div class="sust-practice-icon">
                        <svg viewBox="0 0 24 24"><path d="M8 16s1.5-2 4-2 4 2 4 2"/><path d="M17 16l2-8"/><path d="M7 16l-2-8"/><path d="M2 12h2"/><path d="M20 12h2"/><path d="M12 2v2"/></svg>
                    </div>
                    <div class="sust-practice-content">
                        <div class="sust-practice-number">Practice 04</div>
                        <h3 class="sust-practice-title">Emission Control</h3>
                        <p class="sust-practice-desc">State-of-the-art emission control systems and regular monitoring ensure our air emissions remain well within regulatory limits. We proactively invest in cleaner technologies to continuously reduce particulate matter and gaseous emissions from our processes.</p>
                    </div>
                </div>

                <!-- Solar Energy & Biomass Fuels -->
                <div class="sust-practice sust-practice--featured">
                    <div class="sust-practice-icon">
                        <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>
                    </div>
                    <div class="sust-practice-content">
                        <div class="sust-practice-tag">Key Differentiator</div>
                        <div class="sust-practice-number">Practice 05</div>
                        <h3 class="sust-practice-title">Solar Energy &amp; Biomass Fuels</h3>
                        <p class="sust-practice-desc">We utilize solar energy to power portions of our manufacturing operations, reducing dependence on conventional grid electricity. Additionally, we employ biomass fuels as a renewable alternative in our thermal processes, significantly lowering greenhouse gas emissions and supporting our transition to sustainable energy sources.</p>
                    </div>
                </div>

                <!-- Low Carbon Footprint & Sustainable Resource Management -->
                <div class="sust-practice">
                    <div class="sust-practice-icon">
                        <svg viewBox="0 0 24 24"><path d="M2 22l1-1h3l9-9"/><path d="M17 2l4 4-2 2-4-4 2-2z"/><path d="M15 6l4 4"/><path d="M12 22c-4 0-7-2-9-5l3-3c1 2 3 4 6 4 4 0 7-3 7-7 0-3-2-5-4-6l3-3c3 2 5 5 5 9 0 6-5 11-11 11z"/></svg>
                    </div>
                    <div class="sust-practice-content">
                        <div class="sust-practice-number">Practice 06</div>
                        <h3 class="sust-practice-title">Low Carbon Footprint &amp; Sustainable Resource Management</h3>
                        <p class="sust-practice-desc">Our low carbon footprint initiatives encompass the entire value chain -- from sustainable resource management in raw material procurement to energy-optimized manufacturing processes. We prioritize responsibly sourced materials, maximize resource utilization efficiency, and continuously track and reduce our carbon emissions to meet our sustainability targets.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ════ ISO 14001 HIGHLIGHT ════ -->
    <section class="sust-iso">
        <div class="sust-iso-wrap">
            <div class="sust-iso-visual">
                <div class="sust-iso-badge">
                    <svg viewBox="0 0 24 24"><path d="M12 22c-4.97 0-9-2.69-9-6v-4c0 3.31 4.03 6 9 6s9-2.69 9-6v4c0 3.31-4.03 6-9 6z"/><path d="M12 16c-4.97 0-9-2.69-9-6s4.03-6 9-6 9 2.69 9 6-4.03 6-9 6z"/><path d="M12 6v6"/><path d="M9 9l3-3 3 3"/></svg>
                    <div class="sust-iso-badge-label">ISO 14001:2015</div>
                    <div class="sust-iso-badge-sub">Environmental Management System</div>
                </div>
            </div>
            <div class="sust-iso-content">
                <div class="sust-iso-eyebrow">Certified Framework</div>
                <h2 class="sust-iso-title">ISO 14001 Environmental Management</h2>
                <p class="sust-iso-text">Our environmental management system, certified to ISO 14001:2015 standards, provides a structured framework for identifying, managing, and reducing our environmental impact across all operations.</p>
                <ul class="sust-iso-points">
                    <li>
                        <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg>
                        Systematic environmental impact assessment
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg>
                        Regular internal and external audits
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg>
                        Compliance with all applicable environmental regulations
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg>
                        Continuous improvement targets and measurable goals
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg>
                        Zero liquid discharge (ZLD) systems maintaining 100% water recycling
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg>
                        Renewable energy integration through solar power and biomass fuels
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ════ CTA ════ -->
    <section class="sust-cta">
        <div class="sust-cta-glow"></div>
        <div class="sust-cta-inner">
            <h2 class="sust-cta-title">Learn More About Our Environmental Commitment</h2>
            <p class="sust-cta-subtitle">Request our sustainability reports, environmental policy documentation, or schedule a visit to see our green initiatives in action.</p>
            <div class="sust-cta-btns">
                <a href="<?php echo home_url('/contact-us'); ?>" class="btn-gold">
                    <svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                    Contact Us
                </a>
                <a href="<?php echo home_url('/certifications'); ?>" class="btn-outline-light">
                    <svg viewBox="0 0 24 24"><path d="M9 12l2 2 4-4"/><path d="M12 2a10 10 0 100 20 10 10 0 000-20z"/></svg>
                    View Certifications
                </a>
            </div>
        </div>
    </section>

</main>

<!-- GSAP ScrollTrigger Animations -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;
    gsap.registerPlugin(ScrollTrigger);

    function fadeUp(el, opts) {
        var o = Object.assign({ y: 20, duration: 0.6, delay: 0, start: 'top 85%' }, opts || {});
        gsap.fromTo(el, { opacity: 0, y: o.y }, {
            opacity: 1, y: 0, duration: o.duration, ease: 'expo.out', delay: o.delay,
            scrollTrigger: { trigger: el, start: o.start }
        });
    }

    fadeUp('.sust-hero-badge', { y: 15, delay: 0.1 });
    fadeUp('.sust-hero-title', { y: 25, delay: 0.2 });
    fadeUp('.sust-hero-subtitle', { y: 20, delay: 0.35 });

    gsap.fromTo('.sust-feature-img', { opacity: 0, y: 40 }, {
        opacity: 1, y: 0, duration: 0.8, ease: 'expo.out',
        scrollTrigger: { trigger: '.sust-feature', start: 'top 80%' }
    });

    fadeUp('.sust-commitment-bar', { y: 10 });
    fadeUp('.sust-commitment-eyebrow', { y: 10, delay: 0.1 });
    fadeUp('.sust-commitment-heading', { y: 15, delay: 0.2 });
    fadeUp('.sust-commitment-quote', { y: 20, delay: 0.15 });
    gsap.utils.toArray('.sust-commitment-text').forEach(function (el, i) {
        fadeUp(el, { y: 15, delay: 0.1 * (i + 1) });
    });

    fadeUp('.sust-practices-bar', { y: 10, start: 'top 80%' });
    fadeUp('.sust-practices-title', { y: 20, delay: 0.1, start: 'top 80%' });
    fadeUp('.sust-practices-subtitle', { y: 15, delay: 0.2, start: 'top 80%' });

    gsap.utils.toArray('.sust-practice').forEach(function (card, i) {
        gsap.fromTo(card, { opacity: 0, y: 40 }, {
            opacity: 1, y: 0, duration: 0.7, ease: 'expo.out', delay: i * 0.15,
            scrollTrigger: { trigger: card, start: 'top 85%' }
        });
    });

    gsap.from('.sust-iso-visual', {
        scrollTrigger: { trigger: '.sust-iso', start: 'top 75%', once: true },
        opacity: 0, x: -30, duration: 0.8, ease: 'power3.out'
    });
    gsap.from('.sust-iso-content', {
        scrollTrigger: { trigger: '.sust-iso', start: 'top 75%', once: true },
        opacity: 0, x: 30, duration: 0.8, delay: 0.15, ease: 'power3.out'
    });

    fadeUp('.sust-cta-title', { y: 15 });
    fadeUp('.sust-cta-subtitle', { y: 15, delay: 0.1 });
    gsap.fromTo('.sust-cta-btns', { opacity: 0, y: 15 }, {
        opacity: 1, y: 0, duration: 0.6, ease: 'expo.out', delay: 0.2,
        scrollTrigger: { trigger: '.sust-cta', start: 'top 85%' }
    });
});
</script>

<?php get_footer(); ?>
