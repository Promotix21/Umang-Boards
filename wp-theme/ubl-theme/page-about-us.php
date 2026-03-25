<?php
/**
 * Template Name: About Us
 * Template-integrated About page — editorial hero, bento grid, sticky pillars, flip cards
 */
get_header();
$uri = UBL_URI;
?>

<style>
/* ============================================
   ABOUT US — Template-Integrated Design
   ============================================ */

/* --- HERO --- */
.au-hero {
    position: relative;
    background: var(--navy);
    color: #fff;
    padding: calc(var(--utility-h) + var(--header-h) + 4rem) 0 12rem;
    overflow: hidden;
}
.au-hero-bg {
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: center;
    opacity: 0.2;
    mix-blend-mode: luminosity;
}
.au-hero-gradient {
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, var(--navy), rgba(11,31,58,0.9), var(--navy));
}
.au-hero-glow {
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at top right, rgba(200,168,75,0.15) 0%, transparent 50%);
    pointer-events: none;
}
.au-hero-inner {
    position: relative;
    z-index: 2;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.au-hero-breadcrumb {
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
.au-hero-breadcrumb a { color: rgba(255,255,255,0.5); text-decoration: none; transition: color 0.3s; }
.au-hero-breadcrumb a:hover { color: var(--gold); }
.au-hero-breadcrumb .active { color: var(--gold); }
.au-hero-breadcrumb svg { width: 12px; height: 12px; }
.au-hero-badge {
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
.au-hero-title {
    font-family: var(--font-body);
    font-size: clamp(2.5rem, 5.5vw, 4.5rem);
    font-weight: 700;
    line-height: 1.08;
    letter-spacing: -0.03em;
    margin-bottom: 2rem;
    max-width: 900px;
}
.au-hero-title em { font-style: normal; color: var(--gold); }
.au-hero-subtitle {
    font-size: clamp(1.1rem, 2vw, 1.4rem);
    color: rgba(255,255,255,0.7);
    max-width: 600px;
    line-height: 1.6;
    font-weight: 300;
}

/* --- OVERLAPPING IMAGE + STATS --- */
.au-feature {
    position: relative;
    z-index: 20;
    max-width: 1400px;
    margin: -8rem auto 0;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.au-feature-img {
    position: relative;
    width: 100%;
    height: clamp(250px, 40vw, 600px);
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(11,31,58,0.2);
    border: 1px solid rgba(255,255,255,0.1);
}
.au-feature-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.au-feature-img-overlay {
    position: absolute;
    inset: 0;
    background: rgba(11,31,58,0.3);
    mix-blend-mode: multiply;
}
.au-feature-label {
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
.au-stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1px;
    margin-top: clamp(2rem, 4vw, 4rem);
    background: rgba(11,31,58,0.06);
    border: 1px solid rgba(11,31,58,0.06);
}
.au-stat {
    background: #fff;
    padding: 2rem;
    text-align: center;
    transition: background 0.3s;
}
.au-stat:hover { background: var(--bg-secondary); }
.au-stat-num {
    font-family: var(--font-body);
    font-size: clamp(2rem, 3.5vw, 3rem);
    font-weight: 700;
    color: var(--navy);
    letter-spacing: -0.03em;
    line-height: 1;
    margin-bottom: 0.5rem;
}
.au-stat-label {
    font-size: 0.72rem;
    font-weight: 700;
    color: var(--gold);
    text-transform: uppercase;
    letter-spacing: 0.15em;
}

/* --- BENTO GRID (Story + Vision/Mission) --- */
.au-bento {
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
    max-width: 1400px;
    margin: 0 auto;
}
.au-bento-label {
    border-left: 4px solid var(--gold);
    padding-left: 1.5rem;
    margin-bottom: clamp(3rem, 5vh, 4rem);
}
.au-bento-label h3 {
    font-size: 0.8rem;
    font-weight: 700;
    color: rgba(11,31,58,0.5);
    text-transform: uppercase;
    letter-spacing: 0.15em;
    margin-bottom: 0.5rem;
}
.au-bento-label h2 {
    font-family: var(--font-body);
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 700;
    color: var(--navy);
    letter-spacing: -0.02em;
    line-height: 1.15;
}
.au-bento-grid {
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    gap: 1rem;
}
.au-bento-story {
    grid-column: span 8;
    background: var(--navy);
    color: #fff;
    padding: clamp(2.5rem, 4vw, 4rem);
    position: relative;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: center;
    border: 1px solid var(--navy);
}
.au-bento-story-glow {
    position: absolute;
    top: 0;
    right: 0;
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(200,168,75,0.1) 0%, transparent 70%);
    transform: translate(30%, -30%);
    pointer-events: none;
}
.au-bento-story-icon { width: 48px; height: 48px; color: var(--gold); opacity: 0.8; margin-bottom: 2rem; }
.au-bento-story h3 {
    font-size: clamp(1.5rem, 3vw, 2.2rem);
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 1.5rem;
}
.au-bento-story p { font-size: 1.05rem; color: rgba(255,255,255,0.7); line-height: 1.7; max-width: 600px; font-weight: 300; }

.au-bento-local {
    grid-column: span 4;
    background: var(--gold);
    color: var(--navy);
    padding: clamp(2rem, 3vw, 3rem);
    display: flex;
    flex-direction: column;
    justify-content: center;
    position: relative;
    overflow: hidden;
}
.au-bento-local-icon { width: 40px; height: 40px; margin-bottom: 1.5rem; }
.au-bento-local h3 { font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem; }
.au-bento-local p { color: rgba(11,31,58,0.8); font-weight: 500; line-height: 1.6; }

.au-bento-vm {
    grid-column: span 6;
    background: #fff;
    border: 1px solid rgba(11,31,58,0.06);
    padding: clamp(2rem, 3vw, 3rem);
    transition: border-color 0.3s;
}
.au-bento-vm:hover { border-color: var(--gold); }
.au-bento-vm-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-bottom: 1px solid rgba(11,31,58,0.06);
    padding-bottom: 1.5rem;
    margin-bottom: 2rem;
}
.au-bento-vm-header h3 {
    font-size: 1.3rem;
    font-weight: 700;
    color: var(--navy);
    text-transform: uppercase;
    letter-spacing: 0.08em;
}
.au-bento-vm-header span { color: var(--gold); font-size: 0.85rem; }
.au-bento-vm p { font-size: 1.05rem; color: var(--text-secondary); line-height: 1.7; font-weight: 300; }

/* --- PILLARS (Sticky Left + Scrolling Right) --- */
.au-pillars {
    background: var(--navy);
    color: #fff;
    padding: clamp(5rem, 10vh, 8rem) 0;
    position: relative;
}
.au-pillars-inner {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
    display: flex;
    gap: clamp(2rem, 4vw, 4rem);
}
.au-pillars-left {
    width: 33%;
    flex-shrink: 0;
}
.au-pillars-sticky {
    position: sticky;
    top: calc(var(--utility-h) + var(--header-h) + 2rem);
}
.au-pillars-bar { width: 48px; height: 4px; background: var(--gold); margin-bottom: 2rem; }
.au-pillars-eyebrow {
    font-size: 0.8rem;
    font-weight: 700;
    color: var(--gold);
    text-transform: uppercase;
    letter-spacing: 0.15em;
    margin-bottom: 1rem;
}
.au-pillars-title {
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 700;
    line-height: 1.15;
    letter-spacing: -0.02em;
    margin-bottom: 1.5rem;
}
.au-pillars-desc {
    color: rgba(255,255,255,0.6);
    font-size: 1.05rem;
    line-height: 1.7;
    font-weight: 300;
    margin-bottom: 3rem;
}
.au-pillars-nav {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
    border-left: 1px solid rgba(255,255,255,0.1);
    padding-left: 1.5rem;
}
.au-pillars-nav-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    color: rgba(255,255,255,0.4);
    font-size: 0.85rem;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    transition: color 0.3s;
    cursor: default;
}
.au-pillars-nav-item:hover { color: #fff; }
.au-pillars-nav-num { color: var(--gold); font-size: 0.8rem; }

.au-pillars-right {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: clamp(3rem, 5vw, 6rem);
}
.au-pillar-card {
    background: var(--navy-light);
    border: 1px solid rgba(255,255,255,0.1);
    overflow: hidden;
    transition: border-color 0.5s;
}
.au-pillar-card:hover { border-color: rgba(200,168,75,0.5); }
.au-pillar-card-img {
    position: relative;
    height: clamp(250px, 30vw, 450px);
    overflow: hidden;
}
.au-pillar-card-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0.6;
    mix-blend-mode: luminosity;
    transition: all 1s ease;
}
.au-pillar-card:hover .au-pillar-card-img img {
    opacity: 0.8;
    mix-blend-mode: normal;
    transform: scale(1.05);
}
.au-pillar-card-img-gradient {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, var(--navy-light), rgba(26,53,86,0.4), transparent);
}
.au-pillar-card-icon {
    position: absolute;
    top: 1.5rem;
    left: 1.5rem;
    width: 48px;
    height: 48px;
    background: rgba(11,31,58,0.8);
    backdrop-filter: blur(8px);
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid rgba(255,255,255,0.1);
}
.au-pillar-card-icon svg { width: 20px; height: 20px; color: var(--gold); }
.au-pillar-card-num {
    position: absolute;
    bottom: 1.5rem;
    left: 1.5rem;
    font-size: 4.5rem;
    font-weight: 700;
    color: rgba(255,255,255,0.1);
    line-height: 1;
    letter-spacing: -0.05em;
}
.au-pillar-card-body {
    padding: clamp(2rem, 3vw, 3rem);
    background: var(--navy-light);
}
.au-pillar-card-title {
    font-size: 1.75rem;
    font-weight: 700;
    margin-bottom: 1rem;
    letter-spacing: -0.01em;
}
.au-pillar-card-desc {
    color: rgba(255,255,255,0.7);
    font-size: 1.05rem;
    line-height: 1.7;
    font-weight: 300;
    margin-bottom: 2.5rem;
}
.au-pillar-card-meta {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1.5rem;
    border-top: 1px solid rgba(255,255,255,0.1);
    padding-top: 2rem;
    margin-bottom: 2.5rem;
}
.au-pillar-meta-label {
    font-size: 0.72rem;
    color: var(--gold);
    text-transform: uppercase;
    letter-spacing: 0.15em;
    margin-bottom: 0.5rem;
}
.au-pillar-meta-value { font-size: 0.9rem; font-weight: 500; color: rgba(255,255,255,0.9); }
.au-pillar-link {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    color: #fff;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.12em;
    font-size: 0.85rem;
    text-decoration: none;
    border: 1px solid rgba(255,255,255,0.2);
    padding: 0.75rem 1.5rem;
    transition: all 0.3s;
}
.au-pillar-link:hover { border-color: var(--gold); color: var(--gold); }
.au-pillar-link svg { width: 16px; height: 16px; }

/* --- LEADERSHIP (Flip Cards) --- */
.au-board {
    background: var(--bg-secondary);
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
}
.au-board-inner { max-width: 1400px; margin: 0 auto; }
.au-board-header {
    display: flex;
    flex-direction: column;
    margin-bottom: clamp(3rem, 5vh, 4rem);
    border-bottom: 1px solid rgba(11,31,58,0.06);
    padding-bottom: 2rem;
}
.au-board-header-top {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    gap: 2rem;
}
.au-board-eyebrow {
    font-size: 0.8rem;
    font-weight: 700;
    color: var(--gold);
    text-transform: uppercase;
    letter-spacing: 0.15em;
    margin-bottom: 1rem;
}
.au-board-title {
    font-family: var(--font-body);
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 700;
    color: var(--navy);
    letter-spacing: -0.02em;
}
.au-board-desc {
    font-size: 0.95rem;
    color: var(--text-secondary);
    max-width: 400px;
    line-height: 1.6;
    font-weight: 300;
    text-align: right;
}
.au-board-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1.5rem;
}

/* Flip Card */
.au-flip-wrap {
    perspective: 1000px;
    height: 420px;
    cursor: pointer;
}
.au-flip-inner {
    position: relative;
    width: 100%;
    height: 100%;
    transition: transform 0.7s;
    transform-style: preserve-3d;
}
.au-flip-wrap:hover .au-flip-inner { transform: rotateY(180deg); }
.au-flip-front,
.au-flip-back {
    position: absolute;
    inset: 0;
    backface-visibility: hidden;
    overflow: hidden;
}
.au-flip-front {
    background: var(--navy);
    border: 1px solid rgba(11,31,58,0.06);
}
.au-flip-front-img {
    position: absolute;
    inset: 0;
}
.au-flip-front-img img,
.au-flip-front-img .au-flip-placeholder {
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0.8;
    filter: grayscale(100%);
    transition: all 0.5s;
}
.au-flip-wrap:hover .au-flip-front-img img,
.au-flip-wrap:hover .au-flip-front-img .au-flip-placeholder {
    opacity: 1;
    filter: grayscale(0%);
}
.au-flip-front-gradient {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, var(--navy), rgba(11,31,58,0.2), transparent);
}
.au-flip-front-info {
    position: absolute;
    bottom: 0;
    left: 1rem;
    right: 0;
    padding: 1.5rem;
    color: #fff;
    border-left: 4px solid var(--gold);
    background: rgba(11,31,58,0.9);
    backdrop-filter: blur(8px);
    width: calc(100% - 2rem);
    margin-bottom: 1rem;
}
.au-flip-front-name { font-size: 1.05rem; font-weight: 700; margin-bottom: 0.25rem; }
.au-flip-front-role { font-size: 0.72rem; font-weight: 600; color: var(--gold); text-transform: uppercase; letter-spacing: 0.12em; }

.au-flip-back {
    transform: rotateY(180deg);
    background: var(--navy);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 2rem;
    border: 1px solid rgba(200,168,75,0.2);
}
.au-flip-back-avatar {
    width: 64px;
    height: 64px;
    background: rgba(200,168,75,0.1);
    border: 1px solid rgba(200,168,75,0.3);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
}
.au-flip-back-avatar span { font-size: 1.25rem; font-weight: 700; color: var(--gold); }
.au-flip-back-name { font-size: 1.15rem; font-weight: 700; color: #fff; margin-bottom: 0.5rem; }
.au-flip-back-role { font-size: 0.72rem; font-weight: 600; color: var(--gold); text-transform: uppercase; letter-spacing: 0.12em; margin-bottom: 1.5rem; }
.au-flip-back-divider { width: 48px; height: 1px; background: rgba(200,168,75,0.5); margin-bottom: 1.5rem; }
.au-flip-back-bio { font-size: 0.85rem; color: rgba(255,255,255,0.6); line-height: 1.6; font-weight: 300; }

/* Placeholder for leaders without photos */
.au-flip-placeholder {
    width: 100%;
    height: 100%;
    background: var(--navy);
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: var(--font-body);
    font-size: 4rem;
    font-weight: 800;
    color: var(--gold);
    opacity: 0.3;
}

/* --- CTA --- */
.au-cta {
    background: var(--navy);
    color: #fff;
    padding: clamp(6rem, 12vh, 12rem) clamp(1.5rem, 4vw, 3.5rem);
    text-align: center;
    position: relative;
    overflow: hidden;
}
.au-cta-line {
    width: 1px;
    height: 96px;
    background: linear-gradient(to bottom, transparent, var(--gold));
    margin: 0 auto 3rem;
}
.au-cta-title {
    font-family: var(--font-body);
    font-size: clamp(2.5rem, 6vw, 5rem);
    font-weight: 700;
    letter-spacing: -0.04em;
    line-height: 0.95;
    margin-bottom: 2rem;
}
.au-cta-title em {
    font-style: normal;
    background: linear-gradient(to right, var(--gold), var(--gold-light), var(--gold));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.au-cta-desc {
    font-size: clamp(1rem, 2vw, 1.3rem);
    color: rgba(255,255,255,0.6);
    max-width: 700px;
    margin: 0 auto 3rem;
    line-height: 1.6;
    font-weight: 300;
}
.au-cta-actions {
    display: flex;
    gap: 1.5rem;
    justify-content: center;
    flex-wrap: wrap;
}
.au-cta-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    height: 64px;
    padding: 0 2.5rem;
    font-size: 0.85rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    text-decoration: none;
    transition: all 0.4s var(--ease-out-expo);
}
.au-cta-btn-gold {
    background: var(--gold);
    color: var(--navy);
}
.au-cta-btn-gold:hover {
    background: var(--gold-light);
    transform: translateY(-3px);
    box-shadow: 0 12px 30px rgba(200,168,75,0.3);
}
.au-cta-btn-outline {
    background: transparent;
    color: #fff;
    border: 1px solid rgba(255,255,255,0.25);
}
.au-cta-btn-outline:hover {
    border-color: rgba(255,255,255,0.5);
    transform: translateY(-3px);
}

/* --- RESPONSIVE --- */
@media (max-width: 1024px) {
    .au-stats-grid { grid-template-columns: repeat(2, 1fr); }
    .au-bento-grid { grid-template-columns: 1fr; }
    .au-bento-story, .au-bento-local, .au-bento-vm { grid-column: span 1; }
    .au-pillars-inner { flex-direction: column; }
    .au-pillars-left { width: 100%; }
    .au-pillars-nav { display: none; }
    .au-pillars-sticky { position: static; }
    .au-board-grid { grid-template-columns: repeat(2, 1fr); }
    .au-flip-wrap { height: 350px; }
    .au-board-header-top { flex-direction: column; align-items: flex-start; }
    .au-board-desc { text-align: left; }
}
@media (max-width: 768px) {
    .au-hero { padding-bottom: 8rem; }
    .au-stats-grid { grid-template-columns: 1fr 1fr; }
    .au-board-grid { grid-template-columns: 1fr 1fr; }
    .au-flip-wrap { height: 320px; }
    .au-cta-actions { flex-direction: column; align-items: center; }
}
@media (max-width: 480px) {
    .au-board-grid { grid-template-columns: 1fr; }
    .au-flip-wrap { height: 380px; }
}
</style>

<main class="page-about">

    <!-- ================================================
         HERO — Large editorial hero
         ================================================ -->
    <section class="au-hero">
        <div class="au-hero-bg" style="background-image: url('<?php echo $uri; ?>/assets/images/Mfg Hero Background.jpg');"></div>
        <div class="au-hero-gradient"></div>
        <div class="au-hero-glow"></div>
        <div class="au-hero-inner">
            <div class="au-hero-breadcrumb">
                <a href="/">Home</a>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                <a href="#">Company</a>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                <span class="active">About Us</span>
            </div>
            <div class="au-hero-badge">About Us</div>
            <h1 class="au-hero-title">Building the Backbone of <em>Electrical Infrastructure</em></h1>
            <p class="au-hero-subtitle">What began in 1999 as a focused manufacturing venture has grown into a trusted name in the global power sector — from cellulose pressboards to precision winding wires.</p>
        </div>
    </section>

    <!-- ================================================
         FEATURE IMAGE + STATS
         ================================================ -->
    <section class="au-feature">
        <div class="au-feature-img">
            <img src="<?php echo $uri; ?>/assets/images/facility-aerial.jpg" alt="Umang Boards Manufacturing Facility">
            <div class="au-feature-img-overlay"></div>
            <div class="au-feature-label">Jaipur, Rajasthan &middot; Est. 1999</div>
        </div>
        <div class="au-stats-grid">
            <div class="au-stat">
                <div class="au-stat-num" data-target="25" data-suffix="+">0</div>
                <div class="au-stat-label">Years of Excellence</div>
            </div>
            <div class="au-stat">
                <div class="au-stat-num" data-target="15" data-suffix="+">0</div>
                <div class="au-stat-label">Export Countries</div>
            </div>
            <div class="au-stat">
                <div class="au-stat-num" data-target="400" data-suffix=" kV">0</div>
                <div class="au-stat-label">PGCIL Approved Class</div>
            </div>
            <div class="au-stat">
                <div class="au-stat-num" data-target="2" data-suffix="">0</div>
                <div class="au-stat-label">Production Facilities</div>
            </div>
        </div>
    </section>

    <!-- ================================================
         BENTO GRID — Corporate Overview
         ================================================ -->
    <section class="au-bento">
        <div class="au-bento-label">
            <h3>Corporate Overview</h3>
            <h2>From Jaipur to the <em>World</em></h2>
        </div>
        <div class="au-bento-grid">
            <!-- Navy story block (8 col) -->
            <div class="au-bento-story">
                <div class="au-bento-story-glow"></div>
                <div class="au-bento-story-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="48" height="48"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
                </div>
                <h3>We build the components that quietly keep electrical systems running</h3>
                <p>At Umang Boards Limited, we manufacture high-performance cellulose insulation materials, precision super enameled and paper-coated winding wires in copper and aluminium, along with specialized insulating chemicals.</p>
                <p style="margin-top: 1rem;">Headquartered in Jaipur, India, our journey has been shaped by continuous investment in advanced manufacturing, skilled people, and rigorous in-house testing. With two modern production facilities and globally recognized ISO certifications, we combine technical depth with disciplined quality systems.</p>
            </div>
            <!-- Gold local block (4 col) -->
            <div class="au-bento-local">
                <div class="au-bento-local-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="40" height="40"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <h3>Local Roots, Global Reach</h3>
                <p>From our manufacturing base in Jaipur, Rajasthan, we serve customers across India and in over 15 countries worldwide — building long-term partnerships through consistent quality and dependable delivery.</p>
            </div>
            <!-- Vision card (6 col) -->
            <div class="au-bento-vm">
                <div class="au-bento-vm-header">
                    <h3>Vision</h3>
                    <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="18" height="18"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg></span>
                </div>
                <p>To be a global leader in the electrical power and distribution transformer sector through the use of cutting-edge technology and developing high quality products and services that power critical infrastructure worldwide.</p>
            </div>
            <!-- Mission card (6 col) -->
            <div class="au-bento-vm">
                <div class="au-bento-vm-header">
                    <h3>Mission</h3>
                    <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="18" height="18"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></span>
                </div>
                <p>We aim to achieve growth by providing economical and quality products to our customers. We leverage our relationships, distribution, cost leadership and can-do attitude to become a market leader in every business we do.</p>
            </div>
        </div>
    </section>

    <!-- ================================================
         THREE PILLARS — Sticky left + scrolling right
         ================================================ -->
    <section class="au-pillars" id="auPillars">
        <div class="au-pillars-inner">
            <div class="au-pillars-left">
                <div class="au-pillars-sticky">
                    <div class="au-pillars-bar"></div>
                    <div class="au-pillars-eyebrow">Integrated Capabilities</div>
                    <h2 class="au-pillars-title">Three Pillars of Excellence</h2>
                    <p class="au-pillars-desc">Built on a technology-driven foundation, we continuously invest in innovation, advanced processes and product development to stay ahead of evolving electrical demands.</p>
                    <div class="au-pillars-nav">
                        <div class="au-pillars-nav-item">
                            <span class="au-pillars-nav-num">01</span>
                            Transformer Insulations
                        </div>
                        <div class="au-pillars-nav-item">
                            <span class="au-pillars-nav-num">02</span>
                            Winding Wires
                        </div>
                        <div class="au-pillars-nav-item">
                            <span class="au-pillars-nav-num">03</span>
                            Insulating Chemicals
                        </div>
                    </div>
                </div>
            </div>
            <div class="au-pillars-right">
                <!-- Pillar 1: Transformer Insulations -->
                <div class="au-pillar-card">
                    <div class="au-pillar-card-img">
                        <img src="<?php echo $uri; ?>/assets/images/product-transformer-insulation.jpg" alt="Transformer Insulations">
                        <div class="au-pillar-card-img-gradient"></div>
                        <div class="au-pillar-card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="4" y="4" width="16" height="16" rx="2"/><path d="M9 4v16M15 4v16M4 9h16M4 15h16"/></svg>
                        </div>
                        <div class="au-pillar-card-num">01</div>
                    </div>
                    <div class="au-pillar-card-body">
                        <h3 class="au-pillar-card-title">Transformer Insulations</h3>
                        <p class="au-pillar-card-desc">India's only manufacturer of non-metallic particle pressboards. Cellulose-based insulation range approved for transformers up to 400 kV class.</p>
                        <div class="au-pillar-card-meta">
                            <div>
                                <div class="au-pillar-meta-label">Classification</div>
                                <div class="au-pillar-meta-value">Core Business</div>
                            </div>
                            <div>
                                <div class="au-pillar-meta-label">Approval</div>
                                <div class="au-pillar-meta-value">PGCIL 400 kV</div>
                            </div>
                        </div>
                        <a href="/transformer-insulations" class="au-pillar-link">
                            Explore Range
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>
                <!-- Pillar 2: Winding Wires -->
                <div class="au-pillar-card">
                    <div class="au-pillar-card-img">
                        <img src="<?php echo $uri; ?>/assets/images/product-winding-wire.jpg" alt="Winding Wires">
                        <div class="au-pillar-card-img-gradient"></div>
                        <div class="au-pillar-card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="3"/><path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83"/></svg>
                        </div>
                        <div class="au-pillar-card-num">02</div>
                    </div>
                    <div class="au-pillar-card-body">
                        <h3 class="au-pillar-card-title">Winding Wires</h3>
                        <p class="au-pillar-card-desc">Paper and film insulated copper and aluminium wires engineered for power and distribution transformers, motors, and electrical equipment.</p>
                        <div class="au-pillar-card-meta">
                            <div>
                                <div class="au-pillar-meta-label">Classification</div>
                                <div class="au-pillar-meta-value">Conductors</div>
                            </div>
                            <div>
                                <div class="au-pillar-meta-label">Materials</div>
                                <div class="au-pillar-meta-value">Copper &amp; Aluminium</div>
                            </div>
                        </div>
                        <a href="/winding-wires" class="au-pillar-link">
                            Explore Range
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>
                <!-- Pillar 3: Insulating Chemicals -->
                <div class="au-pillar-card">
                    <div class="au-pillar-card-img">
                        <img src="<?php echo $uri; ?>/assets/images/product-insulating-chemicals.jpg" alt="Insulating Chemicals">
                        <div class="au-pillar-card-img-gradient"></div>
                        <div class="au-pillar-card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 3h6v7.5l3 4.5v3a3 3 0 01-3 3H9a3 3 0 01-3-3v-3l3-4.5V3z"/><path d="M9 3h6"/></svg>
                        </div>
                        <div class="au-pillar-card-num">03</div>
                    </div>
                    <div class="au-pillar-card-body">
                        <h3 class="au-pillar-card-title">Insulating Chemicals</h3>
                        <p class="au-pillar-card-desc">Wire enamels, impregnating resins, and insulating varnishes formulated for superior dielectric performance across industries.</p>
                        <div class="au-pillar-card-meta">
                            <div>
                                <div class="au-pillar-meta-label">Classification</div>
                                <div class="au-pillar-meta-value">Specialty Chemicals</div>
                            </div>
                            <div>
                                <div class="au-pillar-meta-label">Applications</div>
                                <div class="au-pillar-meta-value">Multi-Industry</div>
                            </div>
                        </div>
                        <a href="/insulating-chemical" class="au-pillar-link">
                            Explore Range
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================================================
         BOARD OF DIRECTORS — Flip Card Grid
         ================================================ -->
    <section class="au-board" id="auBoard">
        <div class="au-board-inner">
            <div class="au-board-header">
                <div class="au-board-header-top">
                    <div>
                        <div class="au-board-eyebrow">Leadership</div>
                        <h2 class="au-board-title">Board of Directors</h2>
                    </div>
                    <p class="au-board-desc">Guided by committed leadership and a clear growth vision, Umang Boards has expanded steadily, strengthening its presence while maintaining operational rigor.</p>
                </div>
            </div>
            <div class="au-board-grid">
                <!-- 1. Anoop Kumar Dhanuka -->
                <div class="au-flip-wrap">
                    <div class="au-flip-inner">
                        <div class="au-flip-front">
                            <div class="au-flip-front-img">
                                <div class="au-flip-placeholder">AKD</div>
                            </div>
                            <div class="au-flip-front-gradient"></div>
                            <div class="au-flip-front-info">
                                <div class="au-flip-front-name">Anoop Kumar Dhanuka</div>
                                <div class="au-flip-front-role">Chairman &amp; Managing Director</div>
                            </div>
                        </div>
                        <div class="au-flip-back">
                            <div class="au-flip-back-avatar"><span>AKD</span></div>
                            <div class="au-flip-back-name">Anoop Kumar Dhanuka</div>
                            <div class="au-flip-back-role">Chairman &amp; Managing Director</div>
                            <div class="au-flip-back-divider"></div>
                            <div class="au-flip-back-bio">Visionary founder who transformed Umang Boards from a trading venture to India's leading insulation manufacturer. Four decades of power sector expertise.</div>
                        </div>
                    </div>
                </div>
                <!-- 2. Umang Dhanuka -->
                <div class="au-flip-wrap">
                    <div class="au-flip-inner">
                        <div class="au-flip-front">
                            <div class="au-flip-front-img">
                                <div class="au-flip-placeholder">UD</div>
                            </div>
                            <div class="au-flip-front-gradient"></div>
                            <div class="au-flip-front-info">
                                <div class="au-flip-front-name">Umang Dhanuka</div>
                                <div class="au-flip-front-role">Whole Time Director</div>
                            </div>
                        </div>
                        <div class="au-flip-back">
                            <div class="au-flip-back-avatar"><span>UD</span></div>
                            <div class="au-flip-back-name">Umang Dhanuka</div>
                            <div class="au-flip-back-role">Whole Time Director</div>
                            <div class="au-flip-back-divider"></div>
                            <div class="au-flip-back-bio">Driving operational excellence and business development across domestic and international markets.</div>
                        </div>
                    </div>
                </div>
                <!-- 3. Dhruv Dhanuka -->
                <div class="au-flip-wrap">
                    <div class="au-flip-inner">
                        <div class="au-flip-front">
                            <div class="au-flip-front-img">
                                <div class="au-flip-placeholder">DD</div>
                            </div>
                            <div class="au-flip-front-gradient"></div>
                            <div class="au-flip-front-info">
                                <div class="au-flip-front-name">Dhruv Dhanuka</div>
                                <div class="au-flip-front-role">Whole Time Director</div>
                            </div>
                        </div>
                        <div class="au-flip-back">
                            <div class="au-flip-back-avatar"><span>DD</span></div>
                            <div class="au-flip-back-name">Dhruv Dhanuka</div>
                            <div class="au-flip-back-role">Whole Time Director</div>
                            <div class="au-flip-back-divider"></div>
                            <div class="au-flip-back-bio">Spearheading strategic growth initiatives and technology adoption. Modernizing manufacturing processes.</div>
                        </div>
                    </div>
                </div>
                <!-- 4. Alok Kumar Dhanuka -->
                <div class="au-flip-wrap">
                    <div class="au-flip-inner">
                        <div class="au-flip-front">
                            <div class="au-flip-front-img">
                                <div class="au-flip-placeholder">AKD</div>
                            </div>
                            <div class="au-flip-front-gradient"></div>
                            <div class="au-flip-front-info">
                                <div class="au-flip-front-name">Alok Kumar Dhanuka</div>
                                <div class="au-flip-front-role">Whole Time Director &amp; CFO</div>
                            </div>
                        </div>
                        <div class="au-flip-back">
                            <div class="au-flip-back-avatar"><span>AKD</span></div>
                            <div class="au-flip-back-name">Alok Kumar Dhanuka</div>
                            <div class="au-flip-back-role">Whole Time Director &amp; CFO</div>
                            <div class="au-flip-back-divider"></div>
                            <div class="au-flip-back-bio">Overseeing financial strategy, corporate governance, and investor relations.</div>
                        </div>
                    </div>
                </div>
                <!-- 5. Devendra Kumar -->
                <div class="au-flip-wrap">
                    <div class="au-flip-inner">
                        <div class="au-flip-front">
                            <div class="au-flip-front-img">
                                <div class="au-flip-placeholder">DK</div>
                            </div>
                            <div class="au-flip-front-gradient"></div>
                            <div class="au-flip-front-info">
                                <div class="au-flip-front-name">Devendra Kumar</div>
                                <div class="au-flip-front-role">Independent Director</div>
                            </div>
                        </div>
                        <div class="au-flip-back">
                            <div class="au-flip-back-avatar"><span>DK</span></div>
                            <div class="au-flip-back-name">Devendra Kumar</div>
                            <div class="au-flip-back-role">Independent Director</div>
                            <div class="au-flip-back-divider"></div>
                            <div class="au-flip-back-bio">Providing independent oversight and strategic counsel to the board.</div>
                        </div>
                    </div>
                </div>
                <!-- 6. Avindar Laddha -->
                <div class="au-flip-wrap">
                    <div class="au-flip-inner">
                        <div class="au-flip-front">
                            <div class="au-flip-front-img">
                                <div class="au-flip-placeholder">AL</div>
                            </div>
                            <div class="au-flip-front-gradient"></div>
                            <div class="au-flip-front-info">
                                <div class="au-flip-front-name">Avindar Laddha</div>
                                <div class="au-flip-front-role">Independent Director</div>
                            </div>
                        </div>
                        <div class="au-flip-back">
                            <div class="au-flip-back-avatar"><span>AL</span></div>
                            <div class="au-flip-back-name">Avindar Laddha</div>
                            <div class="au-flip-back-role">Independent Director</div>
                            <div class="au-flip-back-divider"></div>
                            <div class="au-flip-back-bio">Providing independent oversight and strategic counsel to the board.</div>
                        </div>
                    </div>
                </div>
                <!-- 7. Shruti Gupta -->
                <div class="au-flip-wrap">
                    <div class="au-flip-inner">
                        <div class="au-flip-front">
                            <div class="au-flip-front-img">
                                <div class="au-flip-placeholder">SG</div>
                            </div>
                            <div class="au-flip-front-gradient"></div>
                            <div class="au-flip-front-info">
                                <div class="au-flip-front-name">Shruti Gupta</div>
                                <div class="au-flip-front-role">Independent Director</div>
                            </div>
                        </div>
                        <div class="au-flip-back">
                            <div class="au-flip-back-avatar"><span>SG</span></div>
                            <div class="au-flip-back-name">Shruti Gupta</div>
                            <div class="au-flip-back-role">Independent Director</div>
                            <div class="au-flip-back-divider"></div>
                            <div class="au-flip-back-bio">Providing independent oversight and strategic counsel to the board.</div>
                        </div>
                    </div>
                </div>
                <!-- 8. Nitin G. Hotchandani -->
                <div class="au-flip-wrap">
                    <div class="au-flip-inner">
                        <div class="au-flip-front">
                            <div class="au-flip-front-img">
                                <div class="au-flip-placeholder">NH</div>
                            </div>
                            <div class="au-flip-front-gradient"></div>
                            <div class="au-flip-front-info">
                                <div class="au-flip-front-name">Nitin G. Hotchandani</div>
                                <div class="au-flip-front-role">Independent Director</div>
                            </div>
                        </div>
                        <div class="au-flip-back">
                            <div class="au-flip-back-avatar"><span>NH</span></div>
                            <div class="au-flip-back-name">Nitin G. Hotchandani</div>
                            <div class="au-flip-back-role">Independent Director</div>
                            <div class="au-flip-back-divider"></div>
                            <div class="au-flip-back-bio">Providing independent oversight and strategic counsel to the board.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================================================
         CTA — Large typography closing section
         ================================================ -->
    <section class="au-cta" id="auCTA">
        <div class="au-cta-line"></div>
        <h2 class="au-cta-title">POWERING THE<br><em>NEXT GENERATION</em></h2>
        <p class="au-cta-desc">Explore our history, meet the team, or get in touch with our sales team for product inquiries.</p>
        <div class="au-cta-actions">
            <a href="/contact-us" class="au-cta-btn au-cta-btn-gold">Partner With Us</a>
            <a href="/company-history" class="au-cta-btn au-cta-btn-outline">View Heritage</a>
        </div>
    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;
    gsap.registerPlugin(ScrollTrigger);

    var EASE = 'expo.out';

    function fadeUp(el, opts) {
        var o = Object.assign({ y: 20, duration: 0.6, delay: 0, start: 'top 85%' }, opts);
        gsap.fromTo(el,
            { opacity: 0, y: o.y },
            { opacity: 1, y: 0, duration: o.duration, ease: EASE, delay: o.delay,
              scrollTrigger: { trigger: el, start: o.start } }
        );
    }

    // Hero
    fadeUp('.au-hero-breadcrumb', { delay: 0.1, start: 'top 95%' });
    fadeUp('.au-hero-badge', { delay: 0.2, start: 'top 95%' });
    gsap.fromTo('.au-hero-title', { opacity: 0, y: 30, clipPath: 'inset(0 0 100% 0)' },
        { opacity: 1, y: 0, clipPath: 'inset(0 0 0% 0)', duration: 0.8, ease: EASE, delay: 0.3 });
    fadeUp('.au-hero-subtitle', { delay: 0.5 });

    // Feature image
    fadeUp('.au-feature-img', { y: 40, duration: 0.8, start: 'top 90%' });

    // Stats
    gsap.utils.toArray('.au-stat').forEach(function(el, i) {
        fadeUp(el, { delay: 0.1 * i, y: 15 });
    });

    // Bento blocks
    fadeUp('.au-bento-label', { y: 20 });
    fadeUp('.au-bento-story', { y: 30 });
    fadeUp('.au-bento-local', { y: 30, delay: 0.1 });
    gsap.utils.toArray('.au-bento-vm').forEach(function(el, i) {
        fadeUp(el, { y: 30, delay: 0.15 * i });
    });

    // Pillars
    fadeUp('.au-pillars-sticky', { y: 25 });
    gsap.utils.toArray('.au-pillar-card').forEach(function(el, i) {
        fadeUp(el, { y: 40, delay: 0.15 * i, duration: 0.7 });
    });

    // Leadership
    fadeUp('.au-board-header', { y: 20 });
    gsap.utils.toArray('.au-flip-wrap').forEach(function(el, i) {
        gsap.fromTo(el,
            { opacity: 0, y: 30 },
            { opacity: 1, y: 0, duration: 0.5, ease: EASE, delay: i * 0.05,
              scrollTrigger: { trigger: el, start: 'top 85%' } }
        );
    });

    // CTA
    fadeUp('.au-cta-line', { y: 0, duration: 0.5 });
    gsap.fromTo('.au-cta-title', { opacity: 0, y: 30 },
        { opacity: 1, y: 0, duration: 0.8, ease: EASE,
          scrollTrigger: { trigger: '.au-cta-title', start: 'top 80%' } });
    fadeUp('.au-cta-desc', { delay: 0.1 });
    fadeUp('.au-cta-actions', { delay: 0.2 });

    // Stat counters
    function runCounters() {
        document.querySelectorAll('.au-stat-num[data-target]').forEach(function(el) {
            var target = parseInt(el.dataset.target, 10);
            var suffix = el.dataset.suffix || '';
            var duration = 2200;
            var start = performance.now();
            (function tick(now) {
                var progress = Math.min((now - start) / duration, 1);
                var eased = 1 - Math.pow(2, -10 * progress);
                el.textContent = Math.floor(eased * target) + suffix;
                if (progress < 1) requestAnimationFrame(tick);
            })(performance.now());
        });
    }

    var statsSection = document.querySelector('.au-stats-grid');
    if (statsSection) {
        ScrollTrigger.create({
            trigger: statsSection,
            start: 'top 80%',
            once: true,
            onEnter: runCounters
        });
    }

    // Refresh
    window.addEventListener('load', function() {
        setTimeout(function() { ScrollTrigger.refresh(true); }, 500);
    });
});
</script>

<?php get_footer(); ?>
