<?php
/**
 * Template Name: Quality
 * Description: Quality & R&D page for Umang Boards Limited
 */
get_header();
$uri = UBL_URI;
?>

<style>
/* ============================================
   QUALITY & R&D — Editorial Design
   ============================================ */

/* --- HERO --- */
.qa-hero {
    position: relative;
    background: var(--navy);
    color: #fff;
    padding: calc(var(--utility-h) + var(--header-h) + 4rem) 0 12rem;
    overflow: hidden;
}
.qa-hero-bg {
    position: absolute;
    inset: 0;
    background: url('<?php echo $uri; ?>/assets/images/facility-aerial.jpg') center/cover no-repeat;
    opacity: 0.2;
    mix-blend-mode: luminosity;
}
.qa-hero-gradient {
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, var(--navy), rgba(11,31,58,0.9), var(--navy));
}
.qa-hero-glow {
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at top right, rgba(200,168,75,0.15) 0%, transparent 50%);
    pointer-events: none;
}
.qa-hero-inner {
    position: relative;
    z-index: 2;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.qa-hero-breadcrumb {
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
.qa-hero-breadcrumb a { color: rgba(255,255,255,0.5); text-decoration: none; transition: color 0.3s; }
.qa-hero-breadcrumb a:hover { color: var(--gold); }
.qa-hero-breadcrumb .active { color: var(--gold); }
.qa-hero-breadcrumb svg { width: 12px; height: 12px; }
.qa-hero-badge {
    display: inline-flex;
    align-items: center;
    padding: 0.4rem 1rem;
    background: rgba(255,255,255,0.1);
    border: 1px solid rgba(255,255,255,0.2);
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    margin-bottom: 1.5rem;
}
.qa-hero-title {
    font-family: var(--font-body);
    font-size: clamp(2.5rem, 5.5vw, 4.5rem);
    font-weight: 700;
    line-height: 1.08;
    letter-spacing: -0.03em;
    margin-bottom: 2rem;
    max-width: 900px;
}
.qa-hero-title em { font-style: normal; color: var(--gold); }
.qa-hero-subtitle {
    font-size: clamp(1.1rem, 2vw, 1.4rem);
    color: rgba(255,255,255,0.7);
    max-width: 600px;
    line-height: 1.6;
    font-weight: 300;
}

/* --- OVERLAPPING STATS BAND --- */
.qa-stats {
    position: relative;
    z-index: 20;
    max-width: 1400px;
    margin: -5rem auto 0;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.qa-stats-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1px;
    background: rgba(11,31,58,0.06);
    border: 1px solid rgba(11,31,58,0.06);
    box-shadow: 0 20px 60px rgba(11,31,58,0.15);
}
.qa-stat {
    background: #fff;
    padding: 2.5rem 2rem;
    text-align: center;
    transition: background 0.3s;
}
.qa-stat:hover { background: var(--bg-secondary); }
.qa-stat-icon {
    width: 40px;
    height: 40px;
    color: var(--gold);
    margin: 0 auto 1rem;
}
.qa-stat-label {
    font-family: var(--font-body);
    font-size: clamp(1.1rem, 2vw, 1.4rem);
    font-weight: 700;
    color: var(--navy);
    letter-spacing: -0.01em;
    line-height: 1.2;
    margin-bottom: 0.5rem;
}
.qa-stat-desc {
    font-size: 0.78rem;
    font-weight: 600;
    color: var(--text-muted);
    text-transform: uppercase;
    letter-spacing: 0.1em;
}

/* --- SECTION SHARED --- */
.qa-section {
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
    max-width: 1400px;
    margin: 0 auto;
}
.qa-section-eyebrow {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 1rem;
}
.qa-section-heading {
    font-family: var(--font-body);
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 700;
    color: var(--navy);
    letter-spacing: -0.02em;
    line-height: 1.15;
    margin-bottom: 2rem;
}
.qa-bar {
    width: 3px;
    height: 2.5rem;
    background: var(--gold);
    margin-bottom: 1.5rem;
}

/* --- SECTION 01: QUALITY PHILOSOPHY (split) --- */
.qa-philosophy {
    border-top: 1px solid rgba(11,31,58,0.06);
}
.qa-split {
    display: flex;
    gap: clamp(3rem, 5vw, 6rem);
    align-items: flex-start;
}
.qa-split-text {
    flex: 1;
}
.qa-split-text p {
    font-size: 1.05rem;
    color: var(--text-secondary);
    line-height: 1.75;
    font-weight: 300;
    margin: 0 0 1.5rem;
}
.qa-split-text p:last-child { margin-bottom: 0; }
.qa-split-img {
    width: 45%;
    flex-shrink: 0;
}
.qa-split-img-wrap {
    position: relative;
    width: 100%;
    height: clamp(280px, 30vw, 450px);
    overflow: hidden;
    background: var(--navy);
    border: 1px solid rgba(11,31,58,0.06);
}
.qa-split-img-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: grayscale(100%);
    transition: filter 1s ease, transform 1s ease;
}
.qa-split-img-wrap:hover img {
    filter: grayscale(0%);
    transform: scale(1.03);
}
.qa-split-img-label {
    position: absolute;
    bottom: 0;
    left: 0;
    background: rgba(11,31,58,0.9);
    backdrop-filter: blur(8px);
    padding: 0.75rem 1.25rem;
    border-top: 2px solid var(--gold);
    color: #fff;
    font-size: 0.78rem;
    font-weight: 600;
    letter-spacing: 0.05em;
    text-transform: uppercase;
}

/* --- SECTION 02: TESTING LABS (3 cards) --- */
.qa-labs {
    background: var(--bg-secondary);
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
}
.qa-labs-inner {
    max-width: 1400px;
    margin: 0 auto;
}
.qa-labs-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.5rem;
    margin-top: 3rem;
}
.qa-lab-card {
    background: #fff;
    border: 1px solid rgba(11,31,58,0.06);
    padding: clamp(2rem, 3vw, 3rem);
    transition: border-color 0.4s, box-shadow 0.4s;
}
.qa-lab-card:hover {
    border-color: var(--gold);
    box-shadow: 0 12px 40px rgba(11,31,58,0.08);
}
.qa-lab-card-icon {
    width: 48px;
    height: 48px;
    color: var(--navy);
    margin-bottom: 1.5rem;
    transition: color 0.3s;
}
.qa-lab-card:hover .qa-lab-card-icon { color: var(--gold); }
.qa-lab-card h4 {
    font-family: var(--font-body);
    font-size: 1.3rem;
    font-weight: 700;
    color: var(--navy);
    margin: 0 0 1rem;
    letter-spacing: -0.01em;
}
.qa-lab-card p {
    font-size: 0.95rem;
    color: var(--text-secondary);
    line-height: 1.7;
    font-weight: 300;
    margin: 0;
}

/* --- SECTION 03: R&D (text section on navy) --- */
.qa-rnd {
    background: var(--navy);
    color: #fff;
    padding: clamp(6rem, 12vh, 10rem) clamp(1.5rem, 4vw, 3.5rem);
    position: relative;
    overflow: hidden;
}
.qa-rnd-glow {
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at bottom left, rgba(200,168,75,0.1) 0%, transparent 60%);
    pointer-events: none;
}
.qa-rnd-inner {
    position: relative;
    z-index: 1;
    max-width: 1400px;
    margin: 0 auto;
    display: flex;
    gap: clamp(3rem, 5vw, 6rem);
    align-items: flex-start;
}
.qa-rnd-left {
    width: 40%;
    flex-shrink: 0;
}
.qa-rnd-bar {
    width: 3px;
    height: 2.5rem;
    background: var(--gold);
    margin-bottom: 1.5rem;
}
.qa-rnd-eyebrow {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 1rem;
}
.qa-rnd-heading {
    font-family: var(--font-body);
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 700;
    line-height: 1.15;
    letter-spacing: -0.02em;
}
.qa-rnd-heading em { font-style: normal; color: var(--gold); }
.qa-rnd-right {
    flex: 1;
    padding-top: 1rem;
}
.qa-rnd-right p {
    font-size: 1.05rem;
    color: rgba(255,255,255,0.7);
    line-height: 1.75;
    font-weight: 300;
    margin: 0 0 1.5rem;
}
.qa-rnd-right p:last-child { margin-bottom: 0; }
.qa-rnd-features {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1.5rem;
    margin-top: 2.5rem;
}
.qa-rnd-feat {
    display: flex;
    align-items: flex-start;
    gap: 0.75rem;
}
.qa-rnd-feat-icon {
    width: 20px;
    height: 20px;
    color: var(--gold);
    flex-shrink: 0;
    margin-top: 2px;
}
.qa-rnd-feat span {
    font-size: 0.9rem;
    color: rgba(255,255,255,0.8);
    line-height: 1.5;
    font-weight: 400;
}

/* --- SECTION 04: STANDARDS COMPLIANCE --- */
.qa-standards {
    border-top: 1px solid rgba(11,31,58,0.06);
}
.qa-tags-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    margin-top: 2rem;
}
.qa-tag {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem 1.5rem;
    background: #fff;
    border: 1px solid rgba(11,31,58,0.08);
    font-size: 0.85rem;
    font-weight: 600;
    color: var(--navy);
    letter-spacing: 0.02em;
    transition: all 0.3s;
}
.qa-tag:hover {
    border-color: var(--gold);
    background: var(--bg-secondary);
}
.qa-tag svg {
    width: 16px;
    height: 16px;
    color: var(--gold);
}

/* --- CTA --- */
.qa-cta {
    background: var(--navy);
    color: #fff;
    padding: clamp(4rem, 8vh, 6rem) clamp(1.5rem, 4vw, 3.5rem);
    text-align: center;
    border-top: 1px solid rgba(255,255,255,0.08);
}
.qa-cta p {
    font-family: var(--font-body);
    font-size: clamp(1.3rem, 2.5vw, 2rem);
    font-weight: 300;
    color: rgba(255,255,255,0.7);
    margin: 0 0 2rem;
}
.qa-cta-btns {
    display: flex;
    justify-content: center;
    gap: 1rem;
    flex-wrap: wrap;
}
.qa-cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    font-family: var(--font-body);
    font-size: 1rem;
    font-weight: 600;
    padding: 1rem 2.5rem;
    border-radius: 0;
    text-decoration: none;
    letter-spacing: 0.02em;
    transition: all 0.4s var(--ease-out-expo);
}
.qa-cta-btn--primary {
    color: var(--navy);
    background: var(--gold);
}
.qa-cta-btn--primary:hover {
    background: #fff;
    transform: translateY(-2px);
    box-shadow: 0 8px 30px rgba(0,0,0,0.2);
}
.qa-cta-btn--outline {
    color: #fff;
    background: transparent;
    border: 1px solid rgba(255,255,255,0.25);
}
.qa-cta-btn--outline:hover {
    border-color: var(--gold);
    color: var(--gold);
    transform: translateY(-2px);
}
.qa-cta-btn svg {
    width: 18px; height: 18px;
    transition: transform 0.4s var(--ease-out-expo);
}
.qa-cta-btn:hover svg { transform: translateX(4px); }

/* --- RESPONSIVE --- */
@media (max-width: 1024px) {
    .qa-stats-grid { grid-template-columns: repeat(3, 1fr); }
    .qa-split { flex-direction: column; }
    .qa-split-img { width: 100%; }
    .qa-rnd-inner { flex-direction: column; }
    .qa-rnd-left { width: 100%; }
    .qa-rnd-features { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 768px) {
    .qa-hero { padding: calc(var(--utility-h) + var(--header-h) + 2rem) 0 8rem; }
    .qa-stats { margin-top: -3rem; }
    .qa-stats-grid { grid-template-columns: 1fr; }
    .qa-labs-grid { grid-template-columns: 1fr; }
    .qa-rnd-features { grid-template-columns: 1fr; }
    .qa-cta-btns { flex-direction: column; align-items: center; }
}
</style>

<main class="page-quality">

    <!-- ════ HERO ════ -->
    <section class="qa-hero">
        <div class="qa-hero-bg"></div>
        <div class="qa-hero-gradient"></div>
        <div class="qa-hero-glow"></div>
        <div class="qa-hero-inner">
            <nav class="qa-hero-breadcrumb" aria-label="Breadcrumb">
                <a href="<?php echo home_url(); ?>">Home</a>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                <span>Company</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                <span class="active">Quality &amp; R&amp;D</span>
            </nav>
            <div class="qa-hero-badge">QUALITY &amp; R&amp;D</div>
            <h1 class="qa-hero-title">Unmatched Quality<br><em>Precision</em></h1>
            <p class="qa-hero-subtitle">An integrated quality approach spanning rigorous testing, NABL-accredited laboratories, and continuous improvement across every division.</p>
        </div>
    </section>

    <!-- ════ OVERLAPPING STATS ════ -->
    <section class="qa-stats">
        <div class="qa-stats-grid">
            <div class="qa-stat">
                <svg class="qa-stat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                </svg>
                <div class="qa-stat-label">NABL Accredited</div>
                <div class="qa-stat-desc">Laboratory Certification</div>
            </div>
            <div class="qa-stat">
                <svg class="qa-stat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
                </svg>
                <div class="qa-stat-label">ISO/IEC 17025</div>
                <div class="qa-stat-desc">Testing Standard</div>
            </div>
            <div class="qa-stat">
                <svg class="qa-stat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                </svg>
                <div class="qa-stat-label">400 kV PGCIL</div>
                <div class="qa-stat-desc">Approved Class</div>
            </div>
        </div>
    </section>

    <!-- ════ SECTION 01: QUALITY PHILOSOPHY ════ -->
    <section class="qa-section qa-philosophy">
        <div class="qa-split">
            <div class="qa-split-text">
                <div class="qa-bar"></div>
                <div class="qa-section-eyebrow">01 &mdash; Quality Philosophy</div>
                <h2 class="qa-section-heading">Quality at the Core<br>of Everything We Do</h2>
                <p>At Umang Boards, quality plays a very important role. Our rigorous quality control procedures ensure the production of superior quality products across all divisions.</p>
                <p>Our insulation solutions are manufactured to be free from metal and other impurities. Winding wires are produced free from dust particles, enabling them to attain high BDV values. Our chemical division aims for the highest quality with good solid content values.</p>
                <p>Strict quality control is maintained across all operations, with ongoing refinements driven through continuous feedback. Our continuous improvement process runs from top management to ground level, ensuring every stage of production meets the highest standards.</p>
            </div>
            <div class="qa-split-img">
                <div class="qa-split-img-wrap">
                    <img src="<?php echo $uri; ?>/assets/images/facility-aerial.jpg" alt="Quality testing at Umang Boards laboratory" loading="lazy">
                    <div class="qa-split-img-label">Quality Control</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ════ SECTION 02: TESTING LABORATORIES ════ -->
    <section class="qa-labs">
        <div class="qa-labs-inner">
            <div class="qa-bar"></div>
            <div class="qa-section-eyebrow">02 &mdash; Testing Laboratories</div>
            <h2 class="qa-section-heading">Three Dedicated Testing Facilities</h2>

            <div class="qa-labs-grid">
                <!-- Lab 1 -->
                <div class="qa-lab-card">
                    <svg class="qa-lab-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M6 13.5V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 9.75V10.5"/>
                    </svg>
                    <h4>Transformer Insulation Laboratory</h4>
                    <p>Comprehensive mechanical, electrical, and chemical testing of cellulose-based insulation pressboards, crepe papers, and moulded components ensuring defect-free products.</p>
                </div>
                <!-- Lab 2 -->
                <div class="qa-lab-card">
                    <svg class="qa-lab-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                    </svg>
                    <h4>Winding Wire Laboratory</h4>
                    <p>Precision testing of super enameled and paper covered copper and aluminium wires, ensuring products are free from dust particles and attain high BDV values.</p>
                </div>
                <!-- Lab 3 -->
                <div class="qa-lab-card">
                    <svg class="qa-lab-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19 14.5M14.25 3.104c.251.023.501.05.75.082M19 14.5l-1.434 4.303A2.25 2.25 0 0115.43 20.5H8.57a2.25 2.25 0 01-2.136-1.697L5 14.5m14 0H5"/>
                    </svg>
                    <h4>Chemical Laboratory</h4>
                    <p>Quality analysis of insulating varnishes and chemicals, verifying solid content values, viscosity, and chemical properties to meet the highest quality standards.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ════ SECTION 03: RESEARCH & DEVELOPMENT ════ -->
    <section class="qa-rnd">
        <div class="qa-rnd-glow"></div>
        <div class="qa-rnd-inner">
            <div class="qa-rnd-left">
                <div class="qa-rnd-bar"></div>
                <div class="qa-rnd-eyebrow">03 &mdash; Research &amp; Development</div>
                <h2 class="qa-rnd-heading">Continuous<br><em>Improvement</em></h2>
            </div>
            <div class="qa-rnd-right">
                <p>Umang Boards operates a fully NABL accredited laboratory for all divisions, equipped with state-of-the-art instruments for complete quality testing with precision and accuracy.</p>
                <p>A variety of quality control tests &mdash; mechanical, electrical, and chemical &mdash; are conducted by a highly qualified technical team that ensures defect-free products reach our customers.</p>
                <p>Our Total Quality Management System incorporates a customer feedback loop, driving continuous improvement across all processes and product lines.</p>

                <div class="qa-rnd-features">
                    <div class="qa-rnd-feat">
                        <svg class="qa-rnd-feat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>
                        <span>NABL accredited laboratory for all divisions</span>
                    </div>
                    <div class="qa-rnd-feat">
                        <svg class="qa-rnd-feat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>
                        <span>Mechanical, electrical &amp; chemical testing</span>
                    </div>
                    <div class="qa-rnd-feat">
                        <svg class="qa-rnd-feat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>
                        <span>Highly qualified technical team</span>
                    </div>
                    <div class="qa-rnd-feat">
                        <svg class="qa-rnd-feat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>
                        <span>Total Quality Management System</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ════ SECTION 04: STANDARDS COMPLIANCE ════ -->
    <section class="qa-section qa-standards">
        <div class="qa-bar"></div>
        <div class="qa-section-eyebrow">04 &mdash; Standards &amp; Compliance</div>
        <h2 class="qa-section-heading">Guided by International Standards</h2>
        <p style="font-size:1.05rem;color:var(--text-secondary);line-height:1.7;font-weight:300;max-width:700px;margin:0 0 2rem;">Our operations strictly follow internationally recognized guidelines and quality frameworks, ensuring every product meets global benchmarks.</p>

        <div class="qa-tags-grid">
            <div class="qa-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                ISO 9001
            </div>
            <div class="qa-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                ISO 14001
            </div>
            <div class="qa-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                OHSAS 45001
            </div>
            <div class="qa-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                NABL (ISO/IEC 17025)
            </div>
            <div class="qa-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                IEC Standards
            </div>
            <div class="qa-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                ASTM Standards
            </div>
            <div class="qa-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                BIS Standards
            </div>
            <div class="qa-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                IEEE Guidelines
            </div>
            <div class="qa-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg>
                PGCIL Approved (400 kV)
            </div>
        </div>
    </section>

    <!-- ════ CTA ════ -->
    <section class="qa-cta">
        <p>Need quality documentation or certifications?</p>
        <div class="qa-cta-btns">
            <a href="<?php echo home_url('/contact-us'); ?>" class="qa-cta-btn qa-cta-btn--primary">
                Contact Us
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="<?php echo home_url('/about-us'); ?>" class="qa-cta-btn qa-cta-btn--outline">
                About Umang Boards
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
    </section>

</main>

<!-- GSAP ScrollTrigger Animations -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
        return;
    }
    gsap.registerPlugin(ScrollTrigger);

    function fadeUp(el, opts) {
        var o = Object.assign({ y: 20, duration: 0.6, delay: 0, start: 'top 85%' }, opts || {});
        gsap.fromTo(el, { opacity: 0, y: o.y }, {
            opacity: 1, y: 0, duration: o.duration, ease: 'expo.out', delay: o.delay,
            scrollTrigger: { trigger: el, start: o.start }
        });
    }

    /* Hero */
    fadeUp('.qa-hero-badge', { y: 15, delay: 0.1 });
    fadeUp('.qa-hero-title', { y: 25, delay: 0.2 });
    fadeUp('.qa-hero-subtitle', { y: 20, delay: 0.35 });

    /* Stats */
    gsap.utils.toArray('.qa-stat').forEach(function (stat, i) {
        gsap.fromTo(stat, { opacity: 0, y: 30 }, {
            opacity: 1, y: 0, duration: 0.6, ease: 'expo.out', delay: i * 0.1,
            scrollTrigger: { trigger: '.qa-stats-grid', start: 'top 85%' }
        });
    });

    /* Quality Philosophy */
    fadeUp('.qa-philosophy .qa-bar', { y: 10 });
    fadeUp('.qa-philosophy .qa-section-eyebrow', { y: 10, delay: 0.1 });
    fadeUp('.qa-philosophy .qa-section-heading', { y: 15, delay: 0.15 });
    gsap.utils.toArray('.qa-split-text p').forEach(function (p, i) {
        fadeUp(p, { y: 15, delay: 0.2 + i * 0.1 });
    });
    gsap.fromTo('.qa-split-img-wrap', { opacity: 0, y: 40 }, {
        opacity: 1, y: 0, duration: 0.8, ease: 'expo.out',
        scrollTrigger: { trigger: '.qa-split-img-wrap', start: 'top 80%' }
    });

    /* Labs */
    fadeUp('.qa-labs .qa-bar', { y: 10 });
    fadeUp('.qa-labs .qa-section-eyebrow', { y: 10, delay: 0.1 });
    fadeUp('.qa-labs .qa-section-heading', { y: 15, delay: 0.15 });
    gsap.utils.toArray('.qa-lab-card').forEach(function (card, i) {
        gsap.fromTo(card, { opacity: 0, y: 30 }, {
            opacity: 1, y: 0, duration: 0.6, ease: 'expo.out', delay: i * 0.12,
            scrollTrigger: { trigger: card, start: 'top 85%' }
        });
    });

    /* R&D */
    fadeUp('.qa-rnd-bar', { y: 10, start: 'top 80%' });
    fadeUp('.qa-rnd-eyebrow', { y: 10, delay: 0.1, start: 'top 80%' });
    fadeUp('.qa-rnd-heading', { y: 15, delay: 0.2, start: 'top 80%' });
    gsap.utils.toArray('.qa-rnd-right p').forEach(function (p, i) {
        fadeUp(p, { y: 15, delay: 0.1 + i * 0.1, start: 'top 80%' });
    });
    gsap.utils.toArray('.qa-rnd-feat').forEach(function (feat, i) {
        fadeUp(feat, { y: 15, delay: i * 0.08, start: 'top 90%' });
    });

    /* Standards */
    fadeUp('.qa-standards .qa-bar', { y: 10 });
    fadeUp('.qa-standards .qa-section-eyebrow', { y: 10, delay: 0.1 });
    fadeUp('.qa-standards .qa-section-heading', { y: 15, delay: 0.15 });
    gsap.utils.toArray('.qa-tag').forEach(function (tag, i) {
        gsap.fromTo(tag, { opacity: 0, y: 15 }, {
            opacity: 1, y: 0, duration: 0.4, ease: 'expo.out', delay: i * 0.05,
            scrollTrigger: { trigger: '.qa-tags-grid', start: 'top 85%' }
        });
    });

    /* CTA */
    fadeUp('.qa-cta p', { y: 15 });
    fadeUp('.qa-cta-btns', { y: 15, delay: 0.15 });
});
</script>

<?php get_footer(); ?>
