<?php
/**
 * Template Name: Company History
 * Description: Company history — editorial chapter layout with era groupings
 */
get_header();
$uri = UBL_URI;
?>

<style>
/* ==============================================
   COMPANY HISTORY V2 — Chapter / Era Edition
   All sections use ch2- prefix to avoid conflicts
   ============================================== */

/* ── HERO (Option 1 — clean horizontal timeline banner) ── */
.ch-hero {
    position: relative;
    background: #fdf9f4;
    color: #0b1f3a;
    padding: calc(var(--utility-h) + var(--header-h) + 3rem) 0 clamp(3rem, 6vh, 5rem);
    overflow: hidden;
}
.ch-hero-bg {
    position: absolute;
    inset: 0;
    background:
        radial-gradient(ellipse at 85% 15%, rgba(212,168,67,0.08) 0%, transparent 45%),
        radial-gradient(ellipse at 12% 85%, rgba(212,168,67,0.05) 0%, transparent 40%),
        linear-gradient(165deg, #fdf9f4 0%, #faf3e8 60%, #f5ead6 100%);
    pointer-events: none;
}
.ch-hero-grid-overlay {
    position: absolute;
    inset: 0;
    background-image: radial-gradient(circle, rgba(11,31,58,0.06) 1px, transparent 1px);
    background-size: 28px 28px;
    opacity: 0.5;
    pointer-events: none;
}
.ch-hero-gradient,
.ch-hero-glow,
.ch-hero-accent { display: none; }
.ch-hero-inner {
    position: relative;
    z-index: 2;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
}
.ch-hero-breadcrumb {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: rgba(11,31,58,0.55);
    margin-bottom: clamp(1.5rem, 3vh, 2.5rem);
    animation: chHeroUp 0.7s ease both;
}
.ch-hero-breadcrumb a { color: rgba(11,31,58,0.55); text-decoration: none; transition: color 0.3s; }
.ch-hero-breadcrumb a:hover { color: #0b1f3a; }
.ch-hero-breadcrumb .active { color: #0b1f3a; font-weight: 800; }
.ch-hero-breadcrumb svg { width: 10px; height: 10px; opacity: 0.4; flex-shrink: 0; }

/* Header block (eyebrow + title + subtitle) */
.ch-hero-header {
    max-width: 820px;
    margin-bottom: clamp(2.5rem, 5vh, 4rem);
}
.ch-hero-eyebrow {
    font-family: var(--font-mono, 'Inter', sans-serif);
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.22em;
    color: #D4A843;
    margin-bottom: 1.1rem;
    display: flex;
    align-items: center;
    gap: 0.65rem;
    animation: chHeroUp 0.75s 0.05s ease both;
}
.ch-hero-eyebrow::before {
    content: '';
    width: 28px; height: 2px;
    background: #D4A843;
    display: block;
    flex-shrink: 0;
}
.ch-hero-title {
    font-family: var(--font-body);
    font-size: clamp(2.2rem, 4vw, 3.6rem);
    font-weight: 700;
    line-height: 1.08;
    letter-spacing: -0.025em;
    color: #0b1f3a;
    margin: 0 0 1.25rem;
    animation: chHeroUp 0.85s 0.15s ease both;
}
.ch-hero-title em { font-style: normal; color: #D4A843; }
.ch-hero-subtitle {
    font-size: clamp(0.95rem, 1.4vw, 1.05rem);
    color: rgba(11,31,58,0.65);
    line-height: 1.72;
    font-weight: 400;
    max-width: 720px;
    margin: 0;
    animation: chHeroUp 0.8s 0.25s ease both;
}

/* HORIZONTAL TIMELINE */
.ch-hero-timeline {
    position: relative;
    margin-top: clamp(1.5rem, 3vh, 2.5rem);
    padding-top: 1.25rem;
    animation: chHeroUp 0.9s 0.4s ease both;
}
.ch-hero-tl-track {
    position: absolute;
    top: 4.5rem;
    left: 6%;
    right: 6%;
    height: 1.5px;
    background: linear-gradient(to right,
        rgba(212,168,67,0) 0%,
        rgba(212,168,67,0.45) 8%,
        rgba(212,168,67,0.65) 50%,
        rgba(212,168,67,0.45) 92%,
        rgba(212,168,67,0) 100%
    );
    z-index: 0;
}
.ch-hero-milestones {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1rem;
    position: relative;
    z-index: 1;
}
.ch-hero-milestone {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 0 clamp(0.5rem, 1vw, 1rem);
}
.ch-hero-ms-year {
    font-family: var(--font-mono, 'Inter', sans-serif);
    font-size: 0.78rem;
    font-weight: 800;
    color: #D4A843;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    margin-bottom: 0.85rem;
}
.ch-hero-ms-node {
    width: 56px;
    height: 56px;
    border-radius: 50%;
    background: #fdf9f4;
    border: 1.5px solid #D4A843;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #D4A843;
    margin-bottom: 1.1rem;
    flex-shrink: 0;
    transition: background 0.3s, transform 0.3s, box-shadow 0.3s;
    box-shadow: 0 0 0 6px rgba(253, 249, 244, 1), 0 4px 14px rgba(212,168,67,0.18);
}
.ch-hero-milestone:hover .ch-hero-ms-node {
    background: rgba(212,168,67,0.12);
    transform: translateY(-3px);
    box-shadow: 0 0 0 6px rgba(253, 249, 244, 1), 0 8px 22px rgba(212,168,67,0.32);
}
.ch-hero-ms-node svg { width: 26px; height: 26px; }
.ch-hero-ms-title {
    font-family: var(--font-body);
    font-size: 1rem;
    font-weight: 700;
    color: #0b1f3a;
    line-height: 1.3;
    margin-bottom: 0.55rem;
    letter-spacing: -0.01em;
}
.ch-hero-ms-desc {
    font-size: 0.82rem;
    color: rgba(11,31,58,0.6);
    line-height: 1.65;
    font-weight: 400;
    margin: 0;
    max-width: 220px;
}

/* Hide legacy elements */
.ch-hero-layout,
.ch-hero-left,
.ch-hero-right,
.ch-hero-deco-year,
.ch-hero-timeline-strip,
.ch-hero-bottom,
.ch-hero-stats,
.ch-hero-divider,
.ch-hero-badge { display: none; }

@keyframes chHeroUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

/* RESPONSIVE */
@media (max-width: 1024px) {
    .ch-hero-milestones { grid-template-columns: repeat(2, 1fr); gap: 2rem 1rem; }
    .ch-hero-tl-track { display: none; }
}
@media (max-width: 600px) {
    .ch-hero-milestones { grid-template-columns: 1fr; gap: 2rem; }
    .ch-hero-milestone { padding: 0; }
}


/* ==============================================
   ERA NAVIGATOR — chapter anchor strip
   ============================================== */
.ch2-nav {
    background: #ffffff;
    border-bottom: 1px solid rgba(11,31,58,0.08);
    z-index: 90;
    box-shadow: 0 2px 16px rgba(11,31,58,0.04);
    transition: box-shadow 0.3s ease;
    left: 0;
    right: 0;
}
.ch2-nav.is-stuck {
    position: fixed;
    top: calc(var(--utility-h) + var(--header-h));
    left: 0;
    right: 0;
    width: 100%;
    box-shadow: 0 6px 24px rgba(11,31,58,0.08);
    animation: ch2NavSlideDown 0.28s cubic-bezier(0.16, 1, 0.3, 1);
}
@keyframes ch2NavSlideDown {
    from { transform: translateY(-8px); opacity: 0.7; }
    to   { transform: translateY(0); opacity: 1; }
}
.ch2-nav-spacer {
    display: none;
    width: 100%;
}
.ch2-nav-spacer.is-visible { display: block; }
@media (max-width: 768px) {
    .ch2-nav.is-stuck { top: calc(var(--utility-h) + var(--header-h)); }
}
.ch2-nav-inner {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
    display: flex;
    align-items: stretch;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    scrollbar-width: none;
}
.ch2-nav-inner::-webkit-scrollbar { display: none; }
.ch2-nav-tab {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1.15rem 1.75rem 1.15rem 0;
    margin-right: 2rem;
    text-decoration: none;
    border-bottom: 3px solid transparent;
    transition: border-color 0.3s ease, background 0.3s ease;
    white-space: nowrap;
    flex-shrink: 0;
    position: relative;
}
.ch2-nav-tab:last-child { margin-right: 0; }
.ch2-nav-tab.is-active { border-bottom-color: var(--gold); }
.ch2-nav-num {
    font-size: 0.7rem;
    font-weight: 800;
    letter-spacing: 0.1em;
    color: rgba(11,31,58,0.22);
    font-family: var(--font-mono, monospace);
    transition: color 0.3s;
}
.ch2-nav-tab.is-active .ch2-nav-num { color: var(--gold); }
.ch2-nav-era-label {
    font-size: 0.82rem;
    font-weight: 700;
    letter-spacing: 0.06em;
    color: rgba(11,31,58,0.42);
    text-transform: uppercase;
    transition: color 0.3s;
}
.ch2-nav-tab.is-active .ch2-nav-era-label { color: #0b1f3a; }
.ch2-nav-years {
    font-family: var(--font-body);
    font-size: 0.92rem;
    font-weight: 800;
    color: rgba(11,31,58,0.35);
    letter-spacing: -0.01em;
    transition: color 0.3s;
}
.ch2-nav-tab.is-active .ch2-nav-years { color: var(--gold); }

/* ==============================================
   ERA SECTIONS — chapter blocks
   ============================================== */
.ch2-era {
    position: relative;
    overflow: hidden;
}
.ch2-era:nth-child(odd)  { background: #ffffff; }
.ch2-era:nth-child(even) { background: #f8f9fb; }
.ch2-era-wrap {
    max-width: 1400px;
    margin: 0 auto;
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem) clamp(4rem, 8vh, 6rem);
    position: relative;
    z-index: 2;
}

/* Background year watermark */
.ch2-era-bg-year {
    position: absolute;
    font-family: var(--font-body);
    font-size: clamp(10rem, 20vw, 22rem);
    font-weight: 900;
    color: transparent;
    -webkit-text-stroke: 1.5px rgba(11,31,58,0.07);
    letter-spacing: -0.06em;
    line-height: 1;
    user-select: none;
    pointer-events: none;
    bottom: -3rem;
    right: clamp(1rem, 3vw, 3rem);
    z-index: 0;
}

/* Era header row */
.ch2-era-header-row {
    display: grid;
    grid-template-columns: auto 1fr;
    gap: clamp(2rem, 4vw, 5rem);
    align-items: start;
    margin-bottom: clamp(3rem, 6vh, 5rem);
    padding-bottom: clamp(2.5rem, 4vh, 4rem);
    border-bottom: 1px solid rgba(11,31,58,0.06);
}
.ch2-era-label-wrap {
    display: flex;
    align-items: flex-start;
    gap: 1.5rem;
    padding-top: 0.25rem;
}
.ch2-era-num {
    font-family: var(--font-body);
    font-size: clamp(2.5rem, 4vw, 3.5rem);
    font-weight: 900;
    color: transparent;
    -webkit-text-stroke: 1.5px rgba(11,31,58,0.14);
    letter-spacing: -0.04em;
    line-height: 0.9;
    flex-shrink: 0;
    padding-top: 0.15rem;
}
.ch2-era-meta {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}
.ch2-era-tag {
    font-size: 0.72rem;
    font-weight: 800;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: var(--gold);
}
.ch2-era-span {
    font-family: var(--font-body);
    font-size: clamp(1.05rem, 1.5vw, 1.4rem);
    font-weight: 800;
    letter-spacing: -0.01em;
    color: #0b1f3a;
    line-height: 1;
}
.ch2-era-heading-wrap { padding-top: 0.25rem; }
.ch2-era-heading {
    font-family: var(--font-body);
    font-size: clamp(2rem, 3.5vw, 3.2rem);
    font-weight: 800;
    color: #0b1f3a;
    line-height: 1.15;
    letter-spacing: -0.03em;
    margin: 0 0 1rem;
}
.ch2-era-heading em { font-style: normal; color: var(--gold); }
.ch2-era-lead {
    font-size: 1rem;
    color: rgba(11,31,58,0.6);
    line-height: 1.75;
    max-width: 560px;
    font-weight: 400;
    margin: 0;
}

/* Era divider line with gold accent */
.ch2-era-divider {
    width: 3rem;
    height: 3px;
    background: var(--gold);
    margin-bottom: 1rem;
}

/* ==============================================
   MILESTONE CARDS
   ============================================== */
.ch2-cards {
    display: grid;
    gap: 1.5rem;
}
.ch2-cards[data-cols="2"] { grid-template-columns: repeat(2, 1fr); }
.ch2-cards[data-cols="3"] { grid-template-columns: repeat(3, 1fr); }
.ch2-cards[data-cols="4"] { grid-template-columns: repeat(4, 1fr); }

.ch2-card {
    background: #ffffff;
    border: 1px solid rgba(11,31,58,0.06);
    overflow: hidden;
    position: relative;
    display: flex;
    flex-direction: column;
    transition: box-shadow 0.4s ease, transform 0.4s ease;
}
.ch2-era:nth-child(odd) .ch2-card { background: #ffffff; }
.ch2-era:nth-child(even) .ch2-card { background: #ffffff; }
.ch2-card:hover {
    box-shadow: 0 12px 40px rgba(11,31,58,0.1);
    transform: translateY(-4px);
}
.ch2-card::after {
    content: '';
    position: absolute;
    bottom: 0; left: 0;
    width: 0; height: 2px;
    background: var(--gold);
    transition: width 0.4s ease;
}
.ch2-card:hover::after { width: 100%; }

/* Card media */
.ch2-card-media {
    position: relative;
    height: clamp(160px, 18vw, 240px);
    overflow: hidden;
    background: #f0ebe4;
    flex-shrink: 0;
}
.ch2-card-media img {
    width: 100%; height: 100%; object-fit: cover;
    filter: grayscale(100%);
    transition: filter 0.7s ease, transform 0.7s ease;
}
.ch2-card:hover .ch2-card-media img {
    filter: grayscale(0%);
    transform: scale(1.05);
}
/* Cert image treatment — contain */
.ch2-card.is-cert .ch2-card-media img {
    object-fit: contain;
    padding: 1rem;
    background: #f8f8f8;
}

/* Year badge over image */
.ch2-card-badge {
    position: absolute;
    top: 0.75rem; right: 0.75rem;
    background: var(--gold);
    padding: 0.5rem 0.9rem;
    box-shadow: 0 4px 14px rgba(11,31,58,0.15);
    transition: transform 0.4s ease;
}
.ch2-card:hover .ch2-card-badge { transform: translateY(-2px); }
.ch2-card-badge-year {
    font-family: var(--font-body);
    font-size: 1rem;
    font-weight: 800;
    letter-spacing: 0.02em;
    color: #0b1f3a;
    line-height: 1;
}

/* Card placeholder (no image available) */
.ch2-card-placeholder {
    width: 100%; height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #f0ebe4 0%, #e8e0d6 100%);
    gap: 0.5rem;
}
.ch2-card-placeholder-val {
    font-size: clamp(2.5rem, 5vw, 3.5rem);
    font-weight: 900;
    color: var(--gold);
    letter-spacing: -0.04em;
    line-height: 1;
}
.ch2-card-placeholder-lbl {
    font-size: 0.65rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    color: rgba(11,31,58,0.35);
}
.ch2-card-placeholder-bar {
    width: 1.5rem; height: 2px;
    background: var(--gold); opacity: 0.4;
}

/* Card info */
.ch2-card-info {
    padding: 1.5rem 1.5rem 1.75rem;
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 0.6rem;
}
.ch2-card-title {
    font-family: var(--font-body);
    font-size: clamp(1rem, 1.5vw, 1.2rem);
    font-weight: 700;
    color: #0b1f3a;
    line-height: 1.3;
    margin: 0;
    letter-spacing: -0.01em;
}
.ch2-card-text {
    font-size: 0.92rem;
    color: rgba(11,31,58,0.65);
    line-height: 1.65;
    font-weight: 400;
    margin: 0;
}

/* Era 3 (amber tint) */
.ch2-era-3 {
    background: linear-gradient(165deg, #fdf6ec 0%, #f7edd9 50%, #f2e4c6 100%);
}
.ch2-era-3 .ch2-card { background: #ffffff; }

/* ==============================================
   REVENUE GROWTH PATH
   ============================================== */
.ch2-growth {
    background: #ffffff;
    padding: clamp(5rem, 9vh, 7rem) clamp(1.5rem, 4vw, 3.5rem);
    border-top: 1px solid rgba(11,31,58,0.06);
    border-bottom: 1px solid rgba(11,31,58,0.06);
}
.ch2-growth-inner {
    max-width: 1400px;
    margin: 0 auto;
}
.ch2-growth-header {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    margin-bottom: clamp(3rem, 6vh, 5rem);
    gap: 2rem;
}
.ch2-growth-eyebrow {
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    color: var(--gold);
    margin-bottom: 0.75rem;
}
.ch2-growth-title {
    font-family: var(--font-body);
    font-size: clamp(1.8rem, 3vw, 2.6rem);
    font-weight: 800;
    color: #0b1f3a;
    line-height: 1.15;
    letter-spacing: -0.03em;
    margin: 0;
}
.ch2-growth-title em { font-style: normal; color: var(--gold); }
.ch2-growth-desc {
    max-width: 380px;
    font-size: 0.92rem;
    color: rgba(11,31,58,0.6);
    line-height: 1.7;
    margin: 0;
    text-align: right;
}

/* Revenue bars */
.ch2-revenue-track {
    display: flex;
    align-items: flex-end;
    gap: clamp(1rem, 2vw, 2rem);
    height: 260px;
    border-bottom: 1px solid rgba(11,31,58,0.08);
    position: relative;
    padding-bottom: 1px;
    margin-bottom: 1.5rem;
}
.ch2-revenue-track::before {
    content: '';
    position: absolute;
    left: 0; right: 0; bottom: 50%;
    border-bottom: 1px dashed rgba(11,31,58,0.06);
}
.ch2-revenue-bar-wrap {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-end;
    gap: 0;
    height: 100%;
}
.ch2-revenue-bar {
    width: 100%;
    max-width: 80px;
    background: linear-gradient(to top, var(--gold), rgba(212,168,67,0.4));
    position: relative;
    transform-origin: bottom;
    transform: scaleY(0);
    transition: transform 1s cubic-bezier(0.16, 1, 0.3, 1);
}
.ch2-revenue-bar.is-visible { transform: scaleY(1); }
.ch2-revenue-bar-label {
    position: absolute;
    top: -2.2rem;
    left: 50%;
    transform: translateX(-50%);
    font-family: var(--font-body);
    font-size: clamp(0.85rem, 1.2vw, 1.05rem);
    font-weight: 800;
    color: #0b1f3a;
    white-space: nowrap;
    letter-spacing: -0.02em;
}
.ch2-revenue-labels {
    display: flex;
    gap: clamp(1rem, 2vw, 2rem);
}
.ch2-revenue-label-item {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.2rem;
}
.ch2-revenue-year {
    font-size: 0.88rem;
    font-weight: 700;
    color: rgba(11,31,58,0.5);
    letter-spacing: 0.05em;
}
.ch2-revenue-sub {
    font-size: 0.68rem;
    font-weight: 600;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: rgba(11,31,58,0.3);
}

/* ==============================================
   NUMBERS BAND
   ============================================== */
.ch2-numbers {
    background: linear-gradient(145deg, #f2e0c8 0%, #e8caa4 45%, #ddb880 100%);
    padding: clamp(5rem, 9vh, 7rem) clamp(1.5rem, 4vw, 3.5rem);
    position: relative;
    overflow: hidden;
}
.ch2-numbers::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: radial-gradient(circle, rgba(11,31,58,0.05) 1px, transparent 1px);
    background-size: 28px 28px;
    pointer-events: none;
}
.ch2-numbers-inner {
    position: relative;
    z-index: 1;
    max-width: 1400px;
    margin: 0 auto;
}
.ch2-numbers-eyebrow {
    text-align: center;
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.25em;
    color: rgba(11,31,58,0.5);
    margin-bottom: 4rem;
}
.ch2-numbers-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 0;
}
.ch2-number-item {
    padding: clamp(2rem, 3vw, 3rem) clamp(1.5rem, 2.5vw, 2.5rem);
    border-right: 1px solid rgba(11,31,58,0.08);
    position: relative;
}
.ch2-number-item:last-child { border-right: none; }
.ch2-number-item::before {
    content: '';
    position: absolute;
    top: 0; left: 0;
    width: 0; height: 3px;
    background: #0b1f3a;
    transition: width 0.5s ease;
}
.ch2-number-item:hover::before { width: 100%; }
.ch2-number-val {
    font-family: var(--font-body);
    font-size: clamp(3rem, 5vw, 4.5rem);
    font-weight: 900;
    color: #0b1f3a;
    line-height: 1;
    letter-spacing: -0.05em;
    margin-bottom: 0.5rem;
}
.ch2-number-val .ch2-count { color: #0b1f3a; }
.ch2-number-val .ch2-suffix { color: rgba(11,31,58,0.4); }
.ch2-number-label {
    font-size: 0.7rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    color: rgba(11,31,58,0.55);
    margin-bottom: 0.75rem;
}
.ch2-number-desc {
    font-size: 0.88rem;
    color: rgba(11,31,58,0.65);
    line-height: 1.6;
    margin: 0;
}

/* ==============================================
   QUOTE DIVIDER — parallax
   ============================================== */
.ch2-quote-section {
    position: relative;
    min-height: 460px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}
.ch2-quote-bg {
    position: absolute;
    inset: 0;
    background-attachment: fixed;
    z-index: 0;
}
.ch2-quote-overlay {
    position: absolute;
    inset: 0;
    z-index: 1;
    background: linear-gradient(145deg, rgba(253,249,244,0.9) 0%, rgba(242,224,200,0.88) 50%, rgba(232,202,164,0.9) 100%);
}
.ch2-quote-inner {
    position: relative;
    z-index: 2;
    max-width: 880px;
    padding: clamp(4rem, 8vh, 7rem) clamp(1.5rem, 4vw, 3.5rem);
    text-align: center;
}
.ch2-quote-ornament {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1rem;
    margin-bottom: 2.5rem;
}
.ch2-quote-ornament-line {
    width: 40px; height: 1px; background: rgba(11,31,58,0.2);
}
.ch2-quote-ornament-icon { color: var(--gold); opacity: 0.7; }
.ch2-quote-text {
    font-family: var(--font-body);
    font-size: clamp(1.7rem, 3.5vw, 2.8rem);
    font-weight: 700;
    color: #0b1f3a;
    line-height: 1.3;
    letter-spacing: -0.02em;
    margin-bottom: 2rem;
}
.ch2-quote-text em { font-style: normal; color: var(--gold); }
.ch2-quote-attr {
    font-size: 0.78rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.18em;
    color: rgba(11,31,58,0.4);
}
@media (max-width: 768px) {
    .ch2-quote-section { min-height: 340px; }
    .ch2-quote-bg { background-attachment: scroll; }
}

/* ==============================================
   CTA — Full-width amber parchment, centered
   ============================================== */
.ch2-cta {
    background: #ffffff;
    padding: clamp(6rem, 12vh, 9rem) clamp(1.5rem, 4vw, 3.5rem);
    position: relative;
    overflow: hidden;
    text-align: center;
    border-top: 1px solid rgba(11,31,58,0.06);
}
.ch2-cta-inner {
    position: relative;
    z-index: 1;
    max-width: 800px;
    margin: 0 auto;
}
.ch2-cta-eyebrow {
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.22em;
    color: rgba(11,31,58,0.5);
    margin-bottom: 1.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.75rem;
}
.ch2-cta-eyebrow::before,
.ch2-cta-eyebrow::after {
    content: '';
    width: 28px; height: 1px;
    background: rgba(11,31,58,0.25);
}
.ch2-cta-title {
    font-family: var(--font-body);
    font-size: clamp(2.5rem, 5vw, 4rem);
    font-weight: 800;
    color: #0b1f3a;
    line-height: 1.1;
    letter-spacing: -0.04em;
    margin-bottom: 1.5rem;
}
.ch2-cta-title em { font-style: normal; color: var(--gold); }
.ch2-cta-desc {
    font-size: 1rem;
    color: rgba(11,31,58,0.7);
    line-height: 1.75;
    margin-bottom: 3rem;
    max-width: 520px;
    margin-left: auto;
    margin-right: auto;
}
.ch2-cta-actions {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}
/* .btn-outline is white-on-dark by default — override for our white CTA */
.ch2-cta .btn-outline {
    color: #0b1f3a;
    border: 1.5px solid #0b1f3a;
}
.ch2-cta .btn-outline:hover {
    color: var(--gold);
    border-color: var(--gold);
}

/* ==============================================
   RESPONSIVE
   ============================================== */
@media (max-width: 1024px) {
    .ch2-numbers-grid { grid-template-columns: repeat(2, 1fr); }
    .ch2-number-item:nth-child(2) { border-right: none; }
    .ch2-number-item:nth-child(3),
    .ch2-number-item:nth-child(4) { border-top: 1px solid rgba(11,31,58,0.08); }
    .ch2-cards[data-cols="4"] { grid-template-columns: repeat(2, 1fr); }
    .ch2-growth-header { flex-direction: column; align-items: flex-start; }
    .ch2-growth-desc { text-align: left; max-width: 100%; }
}
@media (max-width: 768px) {
    .ch2-era-header-row { grid-template-columns: 1fr; gap: 1.5rem; }
    .ch2-cards[data-cols="2"],
    .ch2-cards[data-cols="3"],
    .ch2-cards[data-cols="4"] { grid-template-columns: 1fr; }
    .ch2-era-bg-year { display: none; }
    .ch2-numbers-grid { grid-template-columns: 1fr; }
    .ch2-number-item { border-right: none; border-bottom: 1px solid rgba(11,31,58,0.08); }
    .ch2-number-item:last-child { border-bottom: none; }
    .ch2-nav { display: none; }
    .ch2-revenue-track { height: 180px; }
}
@media (min-width: 768px) and (max-width: 1024px) {
    .ch2-cards[data-cols="2"] { grid-template-columns: repeat(2, 1fr); }
    .ch2-cards[data-cols="3"] { grid-template-columns: repeat(2, 1fr); }
}
</style>

<main class="page-history-v2">

    <!-- ════════════════════════════════════════
         HERO — Option 1: clean horizontal timeline banner
         ════════════════════════════════════════ -->
    <section class="ch-hero">
        <div class="ch-hero-bg"></div>
        <div class="ch-hero-grid-overlay"></div>

        <div class="ch-hero-inner">

            <nav class="ch-hero-breadcrumb" aria-label="Breadcrumb">
                <a href="<?php echo home_url(); ?>">Home</a>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                <span>Company</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                <span class="active">Our History</span>
            </nav>

            <div class="ch-hero-header">
                <div class="ch-hero-eyebrow">Our History</div>
                <h1 class="ch-hero-title">Three Decades of Innovation &amp; <em>Excellence</em></h1>
                <p class="ch-hero-subtitle">From a single vision in 1999 to a global force in electrical insulation — our journey is built on relentless innovation and unwavering quality.</p>
            </div>

            <!-- Horizontal timeline -->
            <div class="ch-hero-timeline">
                <div class="ch-hero-tl-track"></div>
                <div class="ch-hero-milestones">

                    <!-- 1999 -->
                    <div class="ch-hero-milestone">
                        <div class="ch-hero-ms-year">1999</div>
                        <div class="ch-hero-ms-node">
                            <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M8 40V20l16-12 16 12v20"/>
                                <path d="M16 40V28h16v12"/>
                                <line x1="6" y1="40" x2="42" y2="40"/>
                            </svg>
                        </div>
                        <h3 class="ch-hero-ms-title">Our Beginning</h3>
                        <p class="ch-hero-ms-desc">Incorporated in Jaipur with a mission to reduce India's dependence on imported electrical insulation.</p>
                    </div>

                    <!-- 2005 -->
                    <div class="ch-hero-milestone">
                        <div class="ch-hero-ms-year">2005</div>
                        <div class="ch-hero-ms-node">
                            <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="6" y="14" width="36" height="26" rx="1.5"/>
                                <line x1="6" y1="22" x2="42" y2="22"/>
                                <line x1="14" y1="14" x2="14" y2="40"/>
                                <line x1="24" y1="22" x2="24" y2="40"/>
                                <line x1="34" y1="22" x2="34" y2="40"/>
                                <path d="M14 14V8h20v6"/>
                            </svg>
                        </div>
                        <h3 class="ch-hero-ms-title">Building Foundations</h3>
                        <p class="ch-hero-ms-desc">Pressboard plant operational, first exports to Oman, ISO 9001 quality systems established.</p>
                    </div>

                    <!-- 2014 -->
                    <div class="ch-hero-milestone">
                        <div class="ch-hero-ms-year">2014</div>
                        <div class="ch-hero-ms-node">
                            <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 38 18 24 26 32 42 12"/>
                                <polyline points="32 12 42 12 42 22"/>
                                <line x1="6" y1="42" x2="42" y2="42"/>
                            </svg>
                        </div>
                        <h3 class="ch-hero-ms-title">Scaling New Heights</h3>
                        <p class="ch-hero-ms-desc">EHV transformerboard launched, public limited transition, 132 kV PGCIL approval, ₹50 Cr revenue crossed.</p>
                    </div>

                    <!-- Future -->
                    <div class="ch-hero-milestone">
                        <div class="ch-hero-ms-year">Today &middot; Future</div>
                        <div class="ch-hero-ms-node">
                            <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="24" cy="24" r="18"/>
                                <ellipse cx="24" cy="24" rx="9" ry="18"/>
                                <line x1="6" y1="24" x2="42" y2="24"/>
                                <path d="M24 6c-4 6-4 12-4 18s0 12 4 18"/>
                                <path d="M24 6c4 6 4 12 4 18s0 12-4 18"/>
                            </svg>
                        </div>
                        <h3 class="ch-hero-ms-title">Global Presence</h3>
                        <p class="ch-hero-ms-desc">₹200 Cr revenue, 400 kV &amp; 525 kV class capability, 28+ countries served — leading the industry forward.</p>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- ════════════════════════════════════════
         ERA NAVIGATOR — sticky chapter tabs
         ════════════════════════════════════════ -->
    <nav class="ch2-nav" id="ch2-nav" aria-label="Chapter navigation">
        <div class="ch2-nav-inner">
            <a href="#ch2-era-1" class="ch2-nav-tab is-active" data-target="ch2-era-1">
                <span class="ch2-nav-num">01</span>
                <span class="ch2-nav-era-label">Foundation</span>
                <span class="ch2-nav-years">1999–2005</span>
            </a>
            <a href="#ch2-era-2" class="ch2-nav-tab" data-target="ch2-era-2">
                <span class="ch2-nav-num">02</span>
                <span class="ch2-nav-era-label">Expansion</span>
                <span class="ch2-nav-years">2011</span>
            </a>
            <a href="#ch2-era-3" class="ch2-nav-tab" data-target="ch2-era-3">
                <span class="ch2-nav-num">03</span>
                <span class="ch2-nav-era-label">Scale-Up</span>
                <span class="ch2-nav-years">2018–2024</span>
            </a>
            <a href="#ch2-era-4" class="ch2-nav-tab" data-target="ch2-era-4">
                <span class="ch2-nav-num">04</span>
                <span class="ch2-nav-era-label">Leadership</span>
                <span class="ch2-nav-years">2025–2026</span>
            </a>
        </div>
    </nav>
    <div class="ch2-nav-spacer" id="ch2-nav-spacer" aria-hidden="true"></div>

    <!-- ════════════════════════════════════════
         ERA 1 — FOUNDATION (1999–2005)
         ════════════════════════════════════════ -->
    <section class="ch2-era" id="ch2-era-1">
        <div class="ch2-era-wrap">
            <div class="ch2-era-header-row">
                <div class="ch2-era-label-wrap">
                    <span class="ch2-era-num">01</span>
                    <div class="ch2-era-meta">
                        <span class="ch2-era-tag">Foundation</span>
                        <span class="ch2-era-span">1999 — 2005</span>
                    </div>
                </div>
                <div class="ch2-era-heading-wrap">
                    <div class="ch2-era-divider"></div>
                    <h2 class="ch2-era-heading">Where It All<br><em>Began</em></h2>
                    <p class="ch2-era-lead">From a bold idea in Jaipur to our first international shipment — the founding years laid the quality standards that would define Umang Boards for decades to come.</p>
                </div>
            </div>
            <div class="ch2-cards" data-cols="4">
                <!-- 1999 — Incorporation -->
                <article class="ch2-card is-cert">
                    <div class="ch2-card-media">
                        <img src="<?php echo $uri; ?>/assets/images/ch-cert-incorporation-1999.jpg" alt="Certificate of Incorporation — Umang Boards Limited, 1999" loading="lazy">
                        <div class="ch2-card-badge"><span class="ch2-card-badge-year">1999</span></div>
                    </div>
                    <div class="ch2-card-info">
                        <h3 class="ch2-card-title">Incorporation</h3>
                        <p class="ch2-card-text">Company was incorporated.</p>
                    </div>
                </article>
                <!-- 2001 — Pressboard Plant -->
                <article class="ch2-card">
                    <div class="ch2-card-media">
                        <img src="<?php echo $uri; ?>/assets/images/factory-front.jpg" alt="Umang Boards Unit 1 — original pressboard manufacturing plant" loading="lazy">
                        <div class="ch2-card-badge"><span class="ch2-card-badge-year">2001</span></div>
                    </div>
                    <div class="ch2-card-info">
                        <h3 class="ch2-card-title">Start of Manufacturing of Pressboard Plant</h3>
                        <p class="ch2-card-text">Pressboard plant with sheet size 2200 &times; 1100 mm.</p>
                    </div>
                </article>
                <!-- 2004 — First Export -->
                <article class="ch2-card">
                    <div class="ch2-card-media">
                        <img src="<?php echo $uri; ?>/assets/images/news-export-house.jpg" alt="Export House recognition — Umang Boards first international export" loading="lazy">
                        <div class="ch2-card-badge"><span class="ch2-card-badge-year">2004</span></div>
                    </div>
                    <div class="ch2-card-info">
                        <h3 class="ch2-card-title">First Export</h3>
                        <p class="ch2-card-text">Achieved first export order to Oman.</p>
                    </div>
                </article>
                <!-- 2005 — ISO 9001 -->
                <article class="ch2-card is-cert">
                    <div class="ch2-card-media">
                        <img src="<?php echo $uri; ?>/assets/images/cert-iso-9001.png" alt="ISO 9001:2015 Quality Management System Certificate" loading="lazy">
                        <div class="ch2-card-badge"><span class="ch2-card-badge-year">2005</span></div>
                    </div>
                    <div class="ch2-card-info">
                        <h3 class="ch2-card-title">QMS Certification</h3>
                        <p class="ch2-card-text">Accredited with ISO 9001:2015 Certification.</p>
                    </div>
                </article>
            </div>
        </div>
        <div class="ch2-era-bg-year" aria-hidden="true">1999</div>
    </section>

    <!-- ════════════════════════════════════════
         ERA 2 — EXPANSION (2011)
         ════════════════════════════════════════ -->
    <section class="ch2-era" id="ch2-era-2">
        <div class="ch2-era-wrap">
            <div class="ch2-era-header-row">
                <div class="ch2-era-label-wrap">
                    <span class="ch2-era-num">02</span>
                    <div class="ch2-era-meta">
                        <span class="ch2-era-tag">Expansion</span>
                        <span class="ch2-era-span">2011</span>
                    </div>
                </div>
                <div class="ch2-era-heading-wrap">
                    <div class="ch2-era-divider"></div>
                    <h2 class="ch2-era-heading">Scaling Into<br><em>New Territory</em></h2>
                    <p class="ch2-era-lead">2011 was a watershed year — simultaneous launches in EHV transformerboard, insulation paper manufacturing, and three major international quality certifications.</p>
                </div>
            </div>
            <div class="ch2-cards" data-cols="4">
                <!-- EHV Transformerboard -->
                <article class="ch2-card">
                    <div class="ch2-card-media">
                        <img src="<?php echo $uri; ?>/assets/images/factory-aerial-drone.jpg" alt="Umang Boards expanded EHV manufacturing facility" loading="lazy">
                        <div class="ch2-card-badge"><span class="ch2-card-badge-year">2011</span></div>
                    </div>
                    <div class="ch2-card-info">
                        <h3 class="ch2-card-title">EHV Grade Transformerboard</h3>
                        <p class="ch2-card-text">Pressboard plant with sheet size 4000 &times; 1100 mm.</p>
                    </div>
                </article>
                <!-- Insulation Paper -->
                <article class="ch2-card">
                    <div class="ch2-card-media">
                        <img src="<?php echo $uri; ?>/assets/images/mission-operational-excellence.jpg" alt="Insulation paper production line — DDP and crepe paper manufacturing" loading="lazy">
                        <div class="ch2-card-badge"><span class="ch2-card-badge-year">2011</span></div>
                    </div>
                    <div class="ch2-card-info">
                        <h3 class="ch2-card-title">Insulation Paper Manufacturing</h3>
                        <p class="ch2-card-text">DDP paper and crepe paper manufacturing started.</p>
                    </div>
                </article>
                <!-- ISO 14001 -->
                <article class="ch2-card is-cert">
                    <div class="ch2-card-media">
                        <img src="<?php echo $uri; ?>/assets/images/cert-iso-14001.png" alt="ISO 14001:2015 Environmental Management System Certificate" loading="lazy">
                        <div class="ch2-card-badge"><span class="ch2-card-badge-year">2011</span></div>
                    </div>
                    <div class="ch2-card-info">
                        <h3 class="ch2-card-title">EMS Certification</h3>
                        <p class="ch2-card-text">Accredited with ISO 14001:2015 certification.</p>
                    </div>
                </article>
                <!-- ISO 45001 -->
                <article class="ch2-card is-cert">
                    <div class="ch2-card-media">
                        <img src="<?php echo $uri; ?>/assets/images/cert-iso-45001.png" alt="ISO 45001:2018 Occupational Health & Safety Certificate" loading="lazy">
                        <div class="ch2-card-badge"><span class="ch2-card-badge-year">2011</span></div>
                    </div>
                    <div class="ch2-card-info">
                        <h3 class="ch2-card-title">QH&amp;S Certification</h3>
                        <p class="ch2-card-text">Accredited with ISO 45001:2018 certification.</p>
                    </div>
                </article>
            </div>
        </div>
        <div class="ch2-era-bg-year" aria-hidden="true">2011</div>
    </section>

    <!-- ════════════════════════════════════════
         ERA 3 — SCALE-UP (2018–2024)
         ════════════════════════════════════════ -->
    <section class="ch2-era ch2-era-3" id="ch2-era-3">
        <div class="ch2-era-wrap">
            <div class="ch2-era-header-row">
                <div class="ch2-era-label-wrap">
                    <span class="ch2-era-num">03</span>
                    <div class="ch2-era-meta">
                        <span class="ch2-era-tag">Scale-Up</span>
                        <span class="ch2-era-span">2018 — 2024</span>
                    </div>
                </div>
                <div class="ch2-era-heading-wrap">
                    <div class="ch2-era-divider"></div>
                    <h2 class="ch2-era-heading">Revenue, Land<br>&amp; <em>Recognition</em></h2>
                    <p class="ch2-era-lead">The scale-up era: new land acquired, conversion to public limited company, PGCIL approval for 132 KV, and revenue crossing ₹50 Cr then ₹100 Cr — all within six years.</p>
                </div>
            </div>
            <div class="ch2-cards" data-cols="3">
                <!-- New Land -->
                <article class="ch2-card">
                    <div class="ch2-card-media">
                        <img src="<?php echo $uri; ?>/assets/images/facility-aerial-3.jpg" alt="Umang Boards Unit 2 — 51,000 sq. mtr. expansion land" loading="lazy">
                        <div class="ch2-card-badge"><span class="ch2-card-badge-year">2018</span></div>
                    </div>
                    <div class="ch2-card-info">
                        <h3 class="ch2-card-title">New Manufacturing Land Acquired</h3>
                        <p class="ch2-card-text">Acquired new property measuring around 51,000 sq. mtrs. for expansion in winding wires &amp; chemicals.</p>
                    </div>
                </article>
                <!-- Public Limited -->
                <article class="ch2-card is-cert">
                    <div class="ch2-card-media">
                        <img src="<?php echo $uri; ?>/assets/images/ch-cert-public-limited-2018.jpg" alt="Certificate of Conversion to Public Limited Company — Umang Boards Limited, 2018" loading="lazy">
                        <div class="ch2-card-badge"><span class="ch2-card-badge-year">2018</span></div>
                    </div>
                    <div class="ch2-card-info">
                        <h3 class="ch2-card-title">Conversion to Public Limited</h3>
                        <p class="ch2-card-text">Conversion from a Private Limited Company to a Public Limited Company.</p>
                    </div>
                </article>
                <!-- 132 KV -->
                <article class="ch2-card">
                    <div class="ch2-card-media">
                        <img src="<?php echo $uri; ?>/assets/images/news-pgcil-approval.jpg" alt="PGCIL 132 KV class approval — Power Grid Corporation of India" loading="lazy">
                        <div class="ch2-card-badge"><span class="ch2-card-badge-year">2021</span></div>
                    </div>
                    <div class="ch2-card-info">
                        <h3 class="ch2-card-title">132 KV Class Approval</h3>
                        <p class="ch2-card-text">Approved by Power Grid Corporation of India for supply of insulation pressboards and components for 132 KV class.</p>
                    </div>
                </article>
                <!-- ₹50 Cr -->
                <article class="ch2-card">
                    <div class="ch2-card-media">
                        <div class="ch2-card-placeholder">
                            <div class="ch2-card-placeholder-val">₹50Cr</div>
                            <div class="ch2-card-placeholder-bar"></div>
                            <div class="ch2-card-placeholder-lbl">Net Revenue</div>
                        </div>
                        <div class="ch2-card-badge"><span class="ch2-card-badge-year">2021</span></div>
                    </div>
                    <div class="ch2-card-info">
                        <h3 class="ch2-card-title">Crossed &#8377;50 Cr Turnover</h3>
                        <p class="ch2-card-text">In FY 2020-21, the company crossed net revenue of &#8377;50 Cr.</p>
                    </div>
                </article>
                <!-- ₹100 Cr -->
                <article class="ch2-card">
                    <div class="ch2-card-media">
                        <div class="ch2-card-placeholder">
                            <div class="ch2-card-placeholder-val">₹100Cr</div>
                            <div class="ch2-card-placeholder-bar"></div>
                            <div class="ch2-card-placeholder-lbl">Net Revenue</div>
                        </div>
                        <div class="ch2-card-badge"><span class="ch2-card-badge-year">2024</span></div>
                    </div>
                    <div class="ch2-card-info">
                        <h3 class="ch2-card-title">Crossed &#8377;100 Cr Turnover</h3>
                        <p class="ch2-card-text">In FY 2023-24, the company crossed net revenue of &#8377;100 Cr.</p>
                    </div>
                </article>
                <!-- New Plant 2024 -->
                <article class="ch2-card">
                    <div class="ch2-card-media">
                        <img src="<?php echo $uri; ?>/assets/images/mission-responsible-growth.jpg" alt="Commencement of new 4400mm pressboard plant expansion" loading="lazy">
                        <div class="ch2-card-badge"><span class="ch2-card-badge-year">2024</span></div>
                    </div>
                    <div class="ch2-card-info">
                        <h3 class="ch2-card-title">New Pressboard Plant Commenced</h3>
                        <p class="ch2-card-text">Pressboard plant with sheet size 4400 &times; 1100 mm.</p>
                    </div>
                </article>
            </div>
        </div>
        <div class="ch2-era-bg-year" aria-hidden="true">2018</div>
    </section>

    <!-- ════════════════════════════════════════
         ERA 4 — LEADERSHIP (2025–2026)
         ════════════════════════════════════════ -->
    <section class="ch2-era" id="ch2-era-4">
        <div class="ch2-era-wrap">
            <div class="ch2-era-header-row">
                <div class="ch2-era-label-wrap">
                    <span class="ch2-era-num">04</span>
                    <div class="ch2-era-meta">
                        <span class="ch2-era-tag">Leadership</span>
                        <span class="ch2-era-span">2025 — 2026</span>
                    </div>
                </div>
                <div class="ch2-era-heading-wrap">
                    <div class="ch2-era-divider"></div>
                    <h2 class="ch2-era-heading">Setting the<br><em>Global Standard</em></h2>
                    <p class="ch2-era-lead">PGCIL clearance for 400 KV, a 525 KV performance letter from Azerbaijan, and ₹200 Cr in revenue — Umang Boards enters its most ambitious chapter as a true global leader.</p>
                </div>
            </div>
            <div class="ch2-cards" data-cols="3">
                <!-- 400 KV -->
                <article class="ch2-card is-cert">
                    <div class="ch2-card-media">
                        <img src="<?php echo $uri; ?>/assets/images/cert-pgcil-400kv.png" alt="PGCIL 400 KV class approval certificate" loading="lazy">
                        <div class="ch2-card-badge"><span class="ch2-card-badge-year">2025</span></div>
                    </div>
                    <div class="ch2-card-info">
                        <h3 class="ch2-card-title">400 KV Class Approval</h3>
                        <p class="ch2-card-text">Approved by Power Grid Corporation of India for supply of insulation pressboards and components for 400 KV class.</p>
                    </div>
                </article>
                <!-- 525 KV -->
                <article class="ch2-card is-cert">
                    <div class="ch2-card-media">
                        <img src="<?php echo $uri; ?>/assets/images/ch-cert-525kv-atef.jpg" alt="ATEF Azerbaijan performance letter — 525 KV class insulation pressboards, 2025" loading="lazy">
                        <div class="ch2-card-badge"><span class="ch2-card-badge-year">2025</span></div>
                    </div>
                    <div class="ch2-card-info">
                        <h3 class="ch2-card-title">525 KV Class Approval</h3>
                        <p class="ch2-card-text">Received performance letter from ATEF, Azerbaijan for successfully using our insulation pressboards and laminated boards in their 525 KV class.</p>
                    </div>
                </article>
                <!-- ₹200 Cr -->
                <article class="ch2-card">
                    <div class="ch2-card-media">
                        <div class="ch2-card-placeholder">
                            <div class="ch2-card-placeholder-val">₹200Cr</div>
                            <div class="ch2-card-placeholder-bar"></div>
                            <div class="ch2-card-placeholder-lbl">Net Revenue</div>
                        </div>
                        <div class="ch2-card-badge"><span class="ch2-card-badge-year">2026</span></div>
                    </div>
                    <div class="ch2-card-info">
                        <h3 class="ch2-card-title">Crossed &#8377;200 Cr Turnover</h3>
                        <p class="ch2-card-text">In FY 2025-26, the company crossed net revenue of &#8377;200 Cr.</p>
                    </div>
                </article>
            </div>
        </div>
        <div class="ch2-era-bg-year" aria-hidden="true">2025</div>
    </section>

    <!-- ════════════════════════════════════════
         REVENUE GROWTH PATH
         ════════════════════════════════════════ -->
    <section class="ch2-growth">
        <div class="ch2-growth-inner">
            <div class="ch2-growth-header">
                <div>
                    <div class="ch2-growth-eyebrow">Revenue Trajectory</div>
                    <h2 class="ch2-growth-title">From ₹50 Cr to<br><em>₹200 Cr</em> in 5 Years</h2>
                </div>
                <p class="ch2-growth-desc">A 4× revenue milestone achieved through disciplined investment in technology, capacity, and quality systems — FY 2021 to FY 2026.</p>
            </div>
            <div class="ch2-revenue-track" id="ch2-revenue-track">
                <div class="ch2-revenue-bar-wrap">
                    <div class="ch2-revenue-bar" style="height:25%" data-height="25">
                        <span class="ch2-revenue-bar-label">₹50 Cr</span>
                    </div>
                </div>
                <div class="ch2-revenue-bar-wrap">
                    <div class="ch2-revenue-bar" style="height:50%" data-height="50">
                        <span class="ch2-revenue-bar-label">₹100 Cr</span>
                    </div>
                </div>
                <div class="ch2-revenue-bar-wrap">
                    <div class="ch2-revenue-bar" style="height:100%" data-height="100">
                        <span class="ch2-revenue-bar-label">₹200 Cr+</span>
                    </div>
                </div>
            </div>
            <div class="ch2-revenue-labels">
                <div class="ch2-revenue-label-item">
                    <span class="ch2-revenue-year">FY 2020–21</span>
                    <span class="ch2-revenue-sub">Scale begins</span>
                </div>
                <div class="ch2-revenue-label-item">
                    <span class="ch2-revenue-year">FY 2023–24</span>
                    <span class="ch2-revenue-sub">Accelerated growth</span>
                </div>
                <div class="ch2-revenue-label-item">
                    <span class="ch2-revenue-year">FY 2025–26</span>
                    <span class="ch2-revenue-sub">Industry leadership</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════
         KEY NUMBERS BAND
         ════════════════════════════════════════ -->
    <section class="ch2-numbers">
        <div class="ch2-numbers-inner">
            <div class="ch2-numbers-eyebrow">The Umang Boards Journey — Key Numbers</div>
            <div class="ch2-numbers-grid">
                <div class="ch2-number-item">
                    <div class="ch2-number-val">
                        <span class="ch2-count" data-target="1999">1999</span><span class="ch2-suffix">.</span>
                    </div>
                    <div class="ch2-number-label">Year Founded</div>
                    <p class="ch2-number-desc">Company was incorporated in Jaipur, Rajasthan.</p>
                </div>
                <div class="ch2-number-item">
                    <div class="ch2-number-val">
                        <span class="ch2-count" data-target="25">25</span><span class="ch2-suffix">+</span>
                    </div>
                    <div class="ch2-number-label">Years of Excellence</div>
                    <p class="ch2-number-desc">Serving power utilities, transformer OEMs, and industrial equipment makers across six continents.</p>
                </div>
                <div class="ch2-number-item">
                    <div class="ch2-number-val">
                        &#8377;<span class="ch2-count" data-target="200">200</span><span class="ch2-suffix">Cr+</span>
                    </div>
                    <div class="ch2-number-label">Revenue FY 2025–26</div>
                    <p class="ch2-number-desc">In FY 2025–26, the company crossed net revenue of ₹200 Cr.</p>
                </div>
                <div class="ch2-number-item">
                    <div class="ch2-number-val">
                        <span class="ch2-count" data-target="525">525</span><span class="ch2-suffix">KV</span>
                    </div>
                    <div class="ch2-number-label">Highest Class Approved</div>
                    <p class="ch2-number-desc">Performance letter from ATEF, Azerbaijan for 525 KV class insulation pressboards and laminated boards.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════
         QUOTE — Parallax Divider
         ════════════════════════════════════════ -->
    <section class="ch2-quote-section">
        <div class="ch2-quote-bg" style="background-image:url('<?php echo $uri; ?>/assets/images/facility-aerial-2.jpg'); background-size:cover; background-position:center;"></div>
        <div class="ch2-quote-overlay"></div>
        <div class="ch2-quote-inner">
            <div class="ch2-quote-ornament">
                <div class="ch2-quote-ornament-line"></div>
                <svg class="ch2-quote-ornament-icon" width="28" height="28" viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                <div class="ch2-quote-ornament-line"></div>
            </div>
            <p class="ch2-quote-text">From a single vision in 1999 to a global force in electrical insulation — our history is built on <em>relentless innovation</em> and unwavering quality.</p>
            <span class="ch2-quote-attr">Umang Boards Limited — Powering the Next Generation</span>
        </div>
    </section>

    <!-- ════════════════════════════════════════
         CTA — Full-width amber parchment
         ════════════════════════════════════════ -->
    <section class="ch2-cta">
        <div class="ch2-cta-inner">
            <div class="ch2-cta-eyebrow">Our People</div>
            <h2 class="ch2-cta-title">Explore Who Leads<br>Our <em>Next Chapter</em></h2>
            <p class="ch2-cta-desc">The people behind Umang Boards — meet the leadership team driving our vision of engineering excellence and global growth.</p>
            <div class="ch2-cta-actions">
                <a href="<?php echo home_url('/leadership'); ?>" class="btn-gold">
                    Meet Our Leadership
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <a href="<?php echo home_url('/about-us'); ?>" class="btn-outline">
                    About Umang Boards
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>
        </div>
    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var gsapAvail = typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined';
    if (gsapAvail) gsap.registerPlugin(ScrollTrigger);

    function fadeUp(el, opts) {
        if (!gsapAvail) return;
        var o = Object.assign({ y: 24, duration: 0.7, delay: 0, start: 'top 88%' }, opts || {});
        var els = typeof el === 'string' ? document.querySelectorAll(el) : [el];
        els.forEach(function(e) {
            if (!e) return;
            gsap.fromTo(e, { opacity: 0, y: o.y }, {
                opacity: 1, y: 0, duration: o.duration, ease: 'expo.out', delay: o.delay,
                scrollTrigger: { trigger: e, start: o.start }
            });
        });
    }

    /* ── HERO animations handled via CSS keyframes (chHeroUp) ── */

    /* ── ERA NAVIGATOR: JS-controlled sticky + active-tab tracking ── */
    var nav = document.getElementById('ch2-nav');
    var spacer = document.getElementById('ch2-nav-spacer');
    var navTabs = document.querySelectorAll('.ch2-nav-tab');
    var eras = document.querySelectorAll('.ch2-era');
    var siteHeader = document.getElementById('header') || document.querySelector('.header');

    /* Read the actual live bottom of the site header (accounts for scrolled state) */
    function getStickyTop() {
        if (siteHeader) {
            var r = siteHeader.getBoundingClientRect();
            return Math.max(0, r.bottom);
        }
        var cs = getComputedStyle(document.documentElement);
        return (parseInt(cs.getPropertyValue('--utility-h')) || 36) + (parseInt(cs.getPropertyValue('--header-h')) || 80);
    }

    if (nav && spacer) {
        var navHeight = 0;
        var navOffsetTop = 0;
        var stuck = false;
        var currentActive = null;

        function measure() {
            var wasStuck = nav.classList.contains('is-stuck');
            if (wasStuck) {
                nav.classList.remove('is-stuck');
                spacer.classList.remove('is-visible');
                nav.style.top = '';
            }
            var rect = nav.getBoundingClientRect();
            navHeight = rect.height;
            navOffsetTop = rect.top + window.pageYOffset;
            spacer.style.height = navHeight + 'px';
            update();
        }

        function update() {
            var threshold = getStickyTop();
            var y = window.pageYOffset || document.documentElement.scrollTop || 0;

            /* ── Stick/unstick ── */
            var shouldStick = (y + threshold) >= navOffsetTop;
            if (shouldStick && !stuck) {
                nav.classList.add('is-stuck');
                spacer.classList.add('is-visible');
                stuck = true;
            } else if (!shouldStick && stuck) {
                nav.classList.remove('is-stuck');
                spacer.classList.remove('is-visible');
                nav.style.top = '';
                stuck = false;
            }
            /* Keep nav glued to the live header bottom every frame while stuck */
            if (stuck) nav.style.top = threshold + 'px';

            /* ── Active tab: find the era whose midpoint is closest to a line ~30% down the viewport ── */
            if (eras.length && navTabs.length) {
                var line = y + threshold + 40;
                var best = null, bestDist = Infinity;
                eras.forEach(function(era) {
                    var eTop = era.getBoundingClientRect().top + y;
                    var eBot = eTop + era.offsetHeight;
                    if (line >= eTop && line < eBot) {
                        var dist = Math.abs(line - (eTop + era.offsetHeight / 2));
                        if (dist < bestDist) { bestDist = dist; best = era; }
                    }
                });
                /* Fallback: if past all eras, pick the last one; if before first, pick first */
                if (!best && eras.length) {
                    var firstTop = eras[0].getBoundingClientRect().top + y;
                    if (line < firstTop) best = eras[0];
                    else best = eras[eras.length - 1];
                }
                var targetId = best ? best.id : null;
                if (targetId !== currentActive) {
                    navTabs.forEach(function(tab) {
                        tab.classList.toggle('is-active', tab.dataset.target === targetId);
                    });
                    currentActive = targetId;
                }
            }
        }

        window.addEventListener('scroll', update, { passive: true });
        window.addEventListener('resize', measure);
        if (window.__ubl_lenis && typeof window.__ubl_lenis.on === 'function') {
            window.__ubl_lenis.on('scroll', update);
        }
        setTimeout(measure, 200);
        window.addEventListener('load', function() { setTimeout(measure, 100); });
    }

    /* Smooth scroll for nav tabs */
    navTabs.forEach(function(tab) {
        tab.addEventListener('click', function(e) {
            e.preventDefault();
            var target = document.getElementById(tab.dataset.target);
            if (target) {
                var navH = nav ? nav.offsetHeight : 56;
                var top = target.getBoundingClientRect().top + window.pageYOffset - getStickyTop() - navH - 8;
                if (window.__ubl_lenis && typeof window.__ubl_lenis.scrollTo === 'function') {
                    window.__ubl_lenis.scrollTo(top, { duration: 1.0 });
                } else {
                    window.scrollTo({ top: top, behavior: 'smooth' });
                }
            }
        });
    });

    /* ── ERA CARDS: staggered entrance ── */
    if (gsapAvail) {
        document.querySelectorAll('.ch2-era').forEach(function(era) {
            var cards = era.querySelectorAll('.ch2-card');
            cards.forEach(function(card, i) {
                gsap.fromTo(card,
                    { opacity: 0, y: 40 },
                    { opacity: 1, y: 0, duration: 0.65, ease: 'expo.out', delay: i * 0.08,
                      scrollTrigger: { trigger: card, start: 'top 88%' } });
            });

            /* Era header elements */
            var header = era.querySelector('.ch2-era-header-row');
            if (header) {
                fadeUp(era.querySelector('.ch2-era-label-wrap'), { y: 20, start: 'top 85%' });
                if (typeof UBL !== 'undefined' && UBL.wipeIn) {
                    UBL.wipeIn(era.querySelector('.ch2-era-heading'), { delay: 0.1, start: 'top 85%' });
                } else {
                    fadeUp(era.querySelector('.ch2-era-heading'), { y: 20, delay: 0.1, start: 'top 85%' });
                }
                fadeUp(era.querySelector('.ch2-era-lead'), { y: 16, delay: 0.2, start: 'top 85%' });
            }
        });
    }

    /* ── REVENUE BARS: animate in when visible ── */
    var revenueBars = document.querySelectorAll('.ch2-revenue-bar');
    if ('IntersectionObserver' in window && revenueBars.length) {
        var barObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    barObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.3 });
        revenueBars.forEach(function(bar) { barObserver.observe(bar); });
    }

    /* ── NUMBERS: count-up ── */
    if (gsapAvail) {
        document.querySelectorAll('.ch2-count').forEach(function(el) {
            var target = parseInt(el.dataset.target, 10);
            var startVal = target > 100 ? Math.round(target * 0.6) : 0;
            var counter = { val: startVal };
            gsap.to(counter, {
                val: target, duration: 2, ease: 'power2.out',
                onUpdate: function() { el.textContent = Math.round(counter.val); },
                scrollTrigger: { trigger: el.closest('.ch2-number-item'), start: 'top 88%' }
            });
        });
    }

    /* ── GROWTH SECTION ── */
    fadeUp('.ch2-growth-eyebrow', { y: 12, start: 'top 82%' });
    fadeUp('.ch2-growth-title', { y: 20, delay: 0.1, start: 'top 82%' });
    fadeUp('.ch2-growth-desc', { y: 16, delay: 0.2, start: 'top 82%' });

    /* ── NUMBERS BAND ── */
    if (gsapAvail) {
        document.querySelectorAll('.ch2-number-item').forEach(function(item, i) {
            gsap.fromTo(item,
                { opacity: 0, y: 40 },
                { opacity: 1, y: 0, duration: 0.7, ease: 'expo.out', delay: i * 0.12,
                  scrollTrigger: { trigger: item, start: 'top 88%' } });
        });
    }

    /* ── QUOTE ── */
    fadeUp('.ch2-quote-ornament', { y: 12, start: 'top 85%' });
    fadeUp('.ch2-quote-text', { y: 20, delay: 0.1, start: 'top 85%' });
    fadeUp('.ch2-quote-attr', { y: 12, delay: 0.2, start: 'top 85%' });

    /* ── CTA ── */
    fadeUp('.ch2-cta-eyebrow', { y: 12, start: 'top 85%' });
    fadeUp('.ch2-cta-title', { y: 20, delay: 0.1, start: 'top 85%' });
    fadeUp('.ch2-cta-desc', { y: 15, delay: 0.2, start: 'top 85%' });
    fadeUp('.ch2-cta-actions', { y: 15, delay: 0.3, start: 'top 85%' });
});
</script>

<?php get_footer(); ?>
