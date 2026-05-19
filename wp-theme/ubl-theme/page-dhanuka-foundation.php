<?php
/**
 * Template Name: Dhanuka Foundation
 * Description: Dhanuka Foundation CSR page for Umang Boards Limited
 */
get_header();
$uri = UBL_URI;
?>

<style>
/* ============================================
   DHANUKA FOUNDATION PAGE
   ============================================ */

/* --- HERO (split layout) --- */
.df-hero {
    position: relative;
    background: #fdf9f4;
    color: #0b1f3a;
    overflow: hidden;
    min-height: 100vh;
    display: flex;
    align-items: stretch;
    padding-top: calc(var(--utility-h) + var(--header-h));
}
.df-hero-split {
    display: flex;
    align-items: stretch;
    width: 100%;
}
.df-hero-left {
    position: relative;
    z-index: 2;
    width: 50%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 5rem clamp(2rem, 4vw, 5rem) 5rem clamp(1.5rem, 4vw, 3.5rem);
}
.df-hero-glow {
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 30% 50%, rgba(200,168,75,0.08) 0%, transparent 60%);
    pointer-events: none;
    z-index: 1;
}
.df-hero-right {
    position: relative;
    width: 50%;
    overflow: hidden;
}
.df-hero-right img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: grayscale(30%);
    transition: filter 1.2s ease, transform 1.2s ease;
}
.df-hero-right:hover img { filter: grayscale(0%); transform: scale(1.03); }
.df-hero-right-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to right, #fdf9f4 0%, rgba(253,249,244,0.5) 40%, rgba(253,249,244,0.15) 100%);
    z-index: 1;
}
.df-hero-right-label {
    position: absolute;
    bottom: 0;
    left: 0;
    z-index: 2;
    background: rgba(253,249,244,0.92);
    backdrop-filter: blur(8px);
    padding: 1rem 1.5rem;
    border-top: 2px solid var(--gold);
    color: #0b1f3a;
    font-size: 0.8rem;
    font-weight: 600;
    letter-spacing: 0.08em;
    text-transform: uppercase;
}
.df-hero-breadcrumb {
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
.df-hero-breadcrumb a { color: rgba(11,31,58,0.6); text-decoration: none; transition: color 0.3s; }
.df-hero-breadcrumb a:hover { color: var(--gold); }
.df-hero-breadcrumb .active { color: var(--gold); }
.df-hero-breadcrumb svg { width: 12px; height: 12px; }
.df-hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.4rem 1rem;
    background: rgba(11,31,58,0.05);
    border: 1px solid rgba(200,168,75,0.4);
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    margin-bottom: 1.5rem;
    color: var(--gold);
}
.df-hero-badge svg { width: 14px; height: 14px; fill: var(--gold); }
.df-hero-title {
    font-family: var(--font-body);
    font-size: clamp(2.2rem, 4.5vw, 3.8rem);
    font-weight: 700;
    line-height: 1.1;
    letter-spacing: -0.03em;
    margin-bottom: 1.75rem;
    color: #0b1f3a;
}
.df-hero-title em { font-style: normal; color: var(--gold); }
.df-hero-subtitle {
    font-size: clamp(1rem, 1.6vw, 1.2rem);
    color: rgba(11,31,58,0.75);
    max-width: 520px;
    line-height: 1.7;
    font-weight: 400;
    margin-bottom: 2.5rem;
}
.df-hero-scroll-cue {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: rgba(11,31,58,0.4);
    margin-top: auto;
    padding-top: 3rem;
}
.df-hero-scroll-line {
    width: 40px;
    height: 1px;
    background: rgba(11,31,58,0.2);
}

/* --- MISSION SECTION --- */
.df-mission {
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
    max-width: 1400px;
    margin: 0 auto;
}
.df-mission-layout {
    display: flex;
    gap: clamp(3rem, 6vw, 6rem);
    align-items: flex-start;
}
.df-mission-left {
    width: 33%;
    flex-shrink: 0;
}
.df-mission-bar {
    width: 3px;
    height: 3rem;
    background: var(--gold);
    margin-bottom: 1.5rem;
}
.df-mission-eyebrow {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 1rem;
}
.df-mission-heading {
    font-family: var(--font-body);
    font-size: clamp(2rem, 3.5vw, 3rem);
    font-weight: 700;
    line-height: 1.15;
    letter-spacing: -0.02em;
    color: var(--text-primary);
}
.df-mission-right {
    flex: 1;
    padding-top: 0.5rem;
}
.df-mission-quote {
    font-family: var(--font-body);
    font-size: clamp(1.2rem, 2vw, 1.6rem);
    font-weight: 400;
    line-height: 1.7;
    color: var(--text-secondary);
    font-style: italic;
    margin: 0 0 2rem;
    position: relative;
    padding-left: 2rem;
    border-left: 3px solid var(--gold);
}
.df-mission-text {
    font-size: 1rem;
    color: var(--text-secondary);
    line-height: 1.7;
    font-weight: 400;
    margin: 0 0 1.5rem;
}
.df-mission-text:last-child { margin-bottom: 0; }

/* Pillars */
.df-pillars {
    display: flex;
    gap: 0;
    margin-top: clamp(3rem, 6vh, 5rem);
    border-top: 1px solid var(--border-subtle);
}
.df-pillar {
    flex: 1;
    padding: clamp(1.5rem, 3vw, 2rem) clamp(1.5rem, 2.5vw, 2rem) clamp(1.5rem, 3vw, 2rem) 0;
    border-right: 1px solid var(--border-subtle);
    padding-right: clamp(1.5rem, 2.5vw, 2rem);
}
.df-pillar:last-child { border-right: none; padding-right: 0; }
.df-pillar:not(:first-child) { padding-left: clamp(1.5rem, 2.5vw, 2rem); }
.df-pillar-num {
    font-family: var(--font-mono, monospace);
    font-size: 0.65rem;
    font-weight: 700;
    letter-spacing: 0.2em;
    color: var(--gold);
    text-transform: uppercase;
    margin-bottom: 0.75rem;
}
.df-pillar-title {
    font-size: 1rem;
    font-weight: 700;
    color: #0b1f3a;
    margin: 0 0 0.6rem;
    letter-spacing: -0.01em;
    line-height: 1.3;
}
.df-pillar-desc {
    font-size: 0.9rem;
    color: var(--text-muted);
    line-height: 1.6;
    font-weight: 400;
    margin: 0;
}

/* --- INITIATIVES SECTION --- */
.df-initiatives {
    background: var(--bg-secondary);
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
}
.df-initiatives-inner {
    max-width: 1400px;
    margin: 0 auto;
}
.df-initiatives-header {
    text-align: center;
    margin-bottom: clamp(3rem, 6vh, 5rem);
}
.df-initiatives-bar {
    width: 3px;
    height: 2.5rem;
    background: var(--gold);
    margin: 0 auto 1.5rem;
}
.df-initiatives-eyebrow {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 1rem;
}
.df-initiatives-title {
    font-family: var(--font-body);
    font-size: clamp(2rem, 3.5vw, 3rem);
    font-weight: 700;
    line-height: 1.15;
    letter-spacing: -0.02em;
    color: var(--text-primary);
    margin: 0 0 1rem;
}
.df-initiatives-subtitle {
    font-size: 1rem;
    color: var(--text-muted);
    font-weight: 400;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}
.df-initiatives-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: clamp(1.5rem, 3vw, 2.5rem);
}

/* --- INITIATIVE CARDS --- */
.df-card {
    background: #fff;
    border: 1px solid rgba(11,31,58,0.06);
    overflow: hidden;
    transition: all 0.5s var(--ease-out-expo);
}
.df-card:hover {
    border-color: var(--gold);
    transform: translateY(-4px);
    box-shadow: 0 20px 50px rgba(0,0,0,0.08);
}
.df-card-icon {
    padding: clamp(2rem, 3vw, 2.5rem) clamp(1.5rem, 3vw, 2rem) 0;
}
.df-card-icon-wrap {
    width: 64px;
    height: 64px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(200,168,75,0.1);
    border-radius: 12px;
}
.df-card-icon-wrap svg {
    width: 32px;
    height: 32px;
    fill: none;
    stroke: var(--gold);
    stroke-width: 1.5;
    stroke-linecap: round;
    stroke-linejoin: round;
}
.df-card-body {
    padding: 1.5rem clamp(1.5rem, 3vw, 2rem) clamp(1.5rem, 3vw, 2rem);
}
.df-card-number {
    font-size: 0.7rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 0.75rem;
}
.df-card-title {
    font-family: var(--font-body);
    font-size: clamp(1.3rem, 2vw, 1.6rem);
    font-weight: 700;
    color: #0b1f3a;
    margin: 0 0 1rem;
    letter-spacing: -0.01em;
}
.df-card-desc {
    font-size: 1rem;
    color: var(--text-secondary);
    line-height: 1.7;
    font-weight: 400;
    margin: 0;
}

/* --- IMPACT STATS --- */
.df-impact {
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
    max-width: 1400px;
    margin: 0 auto;
}
.df-impact-header {
    text-align: center;
    margin-bottom: clamp(3rem, 6vh, 4rem);
}
.df-impact-bar {
    width: 3px;
    height: 2.5rem;
    background: var(--gold);
    margin: 0 auto 1.5rem;
}
.df-impact-eyebrow {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 1rem;
}
.df-impact-title {
    font-family: var(--font-body);
    font-size: clamp(1.8rem, 3vw, 2.5rem);
    font-weight: 700;
    line-height: 1.15;
    letter-spacing: -0.02em;
    color: var(--text-primary);
    margin: 0;
}
.df-impact-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: clamp(1.5rem, 3vw, 2.5rem);
}
.df-impact-card {
    text-align: center;
    padding: clamp(2rem, 4vw, 3rem) 1.5rem;
    background: var(--bg-secondary);
    border: 1px solid rgba(11,31,58,0.06);
    transition: all 0.5s var(--ease-out-expo);
}
.df-impact-card:hover {
    border-color: var(--gold);
    transform: translateY(-2px);
    box-shadow: 0 12px 40px rgba(0,0,0,0.06);
}
.df-impact-number {
    font-family: var(--font-body);
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 800;
    color: #0b1f3a;
    letter-spacing: -0.03em;
    line-height: 1;
    margin-bottom: 0.5rem;
}
.df-impact-number span { color: var(--gold); }
.df-impact-label {
    font-size: 0.85rem;
    font-weight: 500;
    color: var(--text-muted);
    line-height: 1.4;
}

/* --- CTA --- */
.df-cta {
    position: relative;
    color: #0b1f3a;
    padding: clamp(6rem, 14vh, 10rem) clamp(1.5rem, 4vw, 3.5rem);
    text-align: center;
    overflow: hidden;
}
.df-cta-bg {
    position: absolute;
    inset: 0;
    background: url('<?php echo $uri; ?>/assets/images/csr-community.jpg') center/cover no-repeat;
    filter: grayscale(40%);
    transform: scale(1.05);
    transition: transform 8s ease;
}
.df-cta:hover .df-cta-bg { transform: scale(1.0); }
.df-cta-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(145deg, rgba(242,224,200,0.92) 0%, rgba(232,202,164,0.88) 50%, rgba(221,184,128,0.92) 100%);
}
.df-cta-glow {
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 50% 40%, rgba(255,255,255,0.2) 0%, transparent 55%);
    pointer-events: none;
}
.df-cta-inner {
    position: relative;
    z-index: 2;
    max-width: 760px;
    margin: 0 auto;
}
.df-cta-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 0.6rem;
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    color: var(--gold);
    margin-bottom: 1.5rem;
}
.df-cta-eyebrow::before, .df-cta-eyebrow::after {
    content: '';
    display: block;
    width: 30px;
    height: 1px;
    background: var(--gold);
    opacity: 0.6;
}
.df-cta-title {
    font-family: var(--font-body);
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 700;
    margin-bottom: 1.25rem;
    letter-spacing: -0.03em;
    line-height: 1.15;
    color: #0b1f3a;
}
.df-cta-title em { font-style: normal; color: var(--gold); }
.df-cta-subtitle {
    font-size: 1rem;
    color: rgba(11,31,58,0.75);
    margin-bottom: 3rem;
    line-height: 1.7;
    max-width: 560px;
    margin-left: auto;
    margin-right: auto;
    font-weight: 400;
}
.df-cta-actions {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1.5rem;
    flex-wrap: wrap;
}
.df-cta-link {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.82rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.12em;
    color: rgba(11,31,58,0.6);
    text-decoration: none;
    transition: color 0.3s;
    border-bottom: 1px solid rgba(11,31,58,0.25);
    padding-bottom: 2px;
}
.df-cta-link:hover { color: var(--gold); border-color: var(--gold); }

/* --- ANIMATION INITIAL STATES (hidden until JS runs) --- */
.df-hero-breadcrumb, .df-hero-badge, .df-hero-title, .df-hero-subtitle, .df-hero-scroll-cue,
.df-hero-right,
.df-mission-eyebrow, .df-mission-heading, .df-mission-quote, .df-mission-text, .df-pillar,
.df-initiatives-bar, .df-initiatives-eyebrow, .df-initiatives-title, .df-initiatives-subtitle,
.df-card, .df-future-card,
.df-forward-eyebrow, .df-forward-heading, .df-forward-intro,
.df-measure-eyebrow, .df-measure-heading, .df-measure-text,
.df-cta-eyebrow, .df-cta-title, .df-cta-subtitle, .df-cta-actions {
    opacity: 0;
}
/* Bars use scaleY, keep them visible-sized but invisible via transform */
.df-mission-bar, .df-forward-bar, .df-measure-bar { transform: scaleY(0); transform-origin: top center; }

/* No-JS fallback: if gsap doesn't load, show everything */
.no-js .df-hero-breadcrumb, .no-js .df-hero-badge, .no-js .df-hero-title,
.no-js .df-hero-subtitle, .no-js .df-hero-scroll-cue, .no-js .df-hero-right,
.no-js .df-mission-eyebrow, .no-js .df-mission-heading, .no-js .df-mission-quote,
.no-js .df-mission-text, .no-js .df-pillar, .no-js .df-card, .no-js .df-future-card,
.no-js .df-forward-eyebrow, .no-js .df-forward-heading, .no-js .df-forward-intro,
.no-js .df-measure-eyebrow, .no-js .df-measure-heading, .no-js .df-measure-text,
.no-js .df-cta-eyebrow, .no-js .df-cta-title, .no-js .df-cta-subtitle, .no-js .df-cta-actions,
.no-js .df-mission-bar, .no-js .df-forward-bar, .no-js .df-measure-bar,
.no-js .df-initiatives-bar, .no-js .df-initiatives-eyebrow, .no-js .df-initiatives-title, .no-js .df-initiatives-subtitle {
    opacity: 1 !important; transform: none !important;
}

/* --- EXPANDABLE CARD DETAILS --- */
.df-card-expand-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    font-family: var(--font-body);
    font-size: 0.82rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    color: var(--gold);
    background: none;
    border: none;
    cursor: pointer;
    padding: 0.8rem 0 0;
    transition: color 0.3s ease;
}
.df-card-expand-btn:hover { color: #0b1f3a; }
.df-card-expand-btn svg {
    width: 14px; height: 14px;
    transition: transform 0.4s var(--ease-out-expo);
}
.df-card-expand-btn.active svg { transform: rotate(180deg); }
.df-card-detail {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.6s var(--ease-out-expo), opacity 0.4s ease;
    opacity: 0;
}
.df-card-detail.open {
    opacity: 1;
}
.df-card-detail-inner {
    padding: 1.25rem 0 0.5rem;
    margin-top: 1rem;
    border-left: 3px solid var(--gold);
    padding-left: 1.25rem;
}
.df-card-detail-inner p {
    font-size: 0.92rem;
    color: var(--text-secondary);
    line-height: 1.7;
    font-weight: 400;
    margin: 0 0 1rem;
}
.df-card-detail-inner p:last-child { margin-bottom: 0; }
.df-card-detail-inner ul {
    list-style: none;
    padding: 0;
    margin: 0 0 1rem;
}
.df-card-detail-inner ul li {
    position: relative;
    padding-left: 1.2rem;
    font-size: 0.92rem;
    color: var(--text-secondary);
    line-height: 1.7;
    font-weight: 400;
    margin-bottom: 0.4rem;
}
.df-card-detail-inner ul li::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0.6rem;
    width: 5px;
    height: 5px;
    background: var(--gold);
    border-radius: 50%;
}

/* --- COMMITMENT MOVING FORWARD --- */
.df-forward {
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
    max-width: 1400px;
    margin: 0 auto;
}
.df-forward-layout {
    display: flex;
    gap: clamp(3rem, 6vw, 5rem);
    align-items: flex-start;
}
.df-forward-left {
    width: 38%;
    flex-shrink: 0;
}
.df-forward-bar {
    width: 3px;
    height: 3rem;
    background: var(--gold);
    margin-bottom: 1.5rem;
}
.df-forward-eyebrow {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 1rem;
}
.df-forward-heading {
    font-family: var(--font-body);
    font-size: clamp(2rem, 3.5vw, 3rem);
    font-weight: 700;
    line-height: 1.15;
    letter-spacing: -0.02em;
    color: var(--text-primary);
    margin: 0 0 1.5rem;
}
.df-forward-intro {
    font-size: 1rem;
    color: var(--text-secondary);
    line-height: 1.7;
    font-weight: 400;
    margin: 0;
}
.df-forward-right {
    flex: 1;
}
.df-future-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: clamp(1rem, 2vw, 1.5rem);
}
.df-future-card {
    background: var(--bg-secondary);
    border: 1px solid rgba(11,31,58,0.06);
    padding: clamp(1.5rem, 3vw, 2rem);
    transition: all 0.5s var(--ease-out-expo);
}
.df-future-card:hover {
    border-color: var(--gold);
    transform: translateY(-3px);
    box-shadow: 0 12px 40px rgba(0,0,0,0.06);
}
.df-future-icon {
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(200,168,75,0.1);
    border-radius: 10px;
    margin-bottom: 1.25rem;
}
.df-future-icon svg {
    width: 24px;
    height: 24px;
    fill: none;
    stroke: var(--gold);
    stroke-width: 1.5;
    stroke-linecap: round;
    stroke-linejoin: round;
}
.df-future-title {
    font-family: var(--font-body);
    font-size: 1.1rem;
    font-weight: 700;
    color: #0b1f3a;
    margin: 0 0 0.6rem;
    letter-spacing: -0.01em;
}
.df-future-desc {
    font-size: 0.92rem;
    color: var(--text-secondary);
    line-height: 1.6;
    font-weight: 400;
    margin: 0;
}

/* --- MEASURING IMPACT NOTE --- */
.df-measure {
    background: linear-gradient(145deg, #f2e0c8, #e8caa4, #ddb880);
    color: #0b1f3a;
    padding: clamp(4rem, 8vh, 6rem) clamp(1.5rem, 4vw, 3.5rem);
    position: relative;
    overflow: hidden;
}
.df-measure::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 80% 50%, rgba(255,255,255,0.15) 0%, transparent 60%);
    pointer-events: none;
}
.df-measure-inner {
    max-width: 1400px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    gap: clamp(3rem, 6vw, 8rem);
}
.df-measure-left {
    flex-shrink: 0;
    width: 38%;
}
.df-measure-bar {
    width: 3px;
    height: 3rem;
    background: var(--gold);
    margin-bottom: 1.5rem;
}
.df-measure-eyebrow {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--gold);
    margin-bottom: 1rem;
}
.df-measure-eyebrow svg { width: 14px; height: 14px; fill: none; stroke: var(--gold); stroke-width: 2; }
.df-measure-heading {
    font-family: var(--font-body);
    font-size: clamp(2rem, 3.5vw, 3rem);
    font-weight: 700;
    line-height: 1.15;
    letter-spacing: -0.02em;
    color: #0b1f3a;
    margin: 0;
}
.df-measure-heading em { font-style: normal; color: var(--gold); }
.df-measure-right {
    flex: 1;
}
.df-measure-text {
    font-size: 1rem;
    color: rgba(11,31,58,0.75);
    line-height: 1.75;
    font-weight: 400;
    margin: 0;
    border-left: 3px solid var(--gold);
    padding-left: 2rem;
}

/* --- RESPONSIVE --- */
@media (max-width: 1024px) {
    .df-mission-layout { flex-direction: column; }
    .df-mission-left { width: 100%; }
    .df-initiatives-grid { grid-template-columns: repeat(2, 1fr); }
    .df-impact-grid { grid-template-columns: repeat(2, 1fr); }
    .df-forward-layout { flex-direction: column; }
    .df-forward-left { width: 100%; }
    .df-future-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 900px) {
    .df-hero { min-height: auto; flex-direction: column; }
    .df-hero-split { flex-direction: column; }
    .df-hero-left { width: 100%; padding: 3rem clamp(1.5rem, 4vw, 2.5rem); }
    .df-hero-right { width: 100%; height: 320px; }
    .df-hero-right-overlay { background: linear-gradient(to bottom, #fdf9f4 0%, rgba(253,249,244,0.2) 100%); }
    .df-hero-scroll-cue { display: none; }
    .df-pillars { flex-direction: column; gap: 1.5rem; }
    .df-pillar { border-right: none; border-bottom: 1px solid var(--border-subtle); padding: 0 0 1.5rem 0 !important; }
    .df-pillar:last-child { border-bottom: none; }
    .df-measure-inner { flex-direction: column; gap: 2rem; }
    .df-measure-left { width: 100%; }
    .df-initiatives-grid { grid-template-columns: 1fr; }
    .df-future-grid { grid-template-columns: 1fr; }
    .df-mission-layout { flex-direction: column; gap: 2rem; }
    .df-mission-left { width: 100%; }
    .df-forward-layout { flex-direction: column; gap: 2rem; }
    .df-forward-left { width: 100%; }
    .df-cta-actions { flex-direction: column; }
}
</style>

<main class="page-dhanuka-foundation">

    <!-- ════ HERO (split) ════ -->
    <section class="df-hero">
        <div class="df-hero-glow"></div>
        <div class="df-hero-split">

            <!-- Left: Text -->
            <div class="df-hero-left">
                <nav class="df-hero-breadcrumb" aria-label="Breadcrumb">
                    <a href="<?php echo home_url(); ?>">Home</a>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                    <span>Company</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                    <span class="active">Dhanuka Foundation</span>
                </nav>
                <div class="df-hero-badge">
                    <svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
                    Community Impact
                </div>
                <h1 class="df-hero-title">Beyond Business:<br>Creating Communities That <em>Thrive</em></h1>
                <p class="df-hero-subtitle">Through Dhanuka Foundation, we extend our commitment beyond excellence in manufacturing to build stronger communities — creating lasting change in education, healthcare, and sustainable livelihood.</p>
                <div class="df-hero-scroll-cue">
                    <div class="df-hero-scroll-line"></div>
                    <span>Scroll to explore</span>
                </div>
            </div>

            <!-- Right: Image -->
            <div class="df-hero-right">
                <img src="<?php echo $uri; ?>/assets/images/csr-community.jpg" alt="Dhanuka Foundation community engagement" loading="eager">
                <div class="df-hero-right-overlay"></div>
                <div class="df-hero-right-label">Dhanuka Foundation</div>
            </div>

        </div>
    </section>

    <!-- ════ OUR MISSION ════ -->
    <section class="df-mission">
        <div class="df-mission-layout">
            <div class="df-mission-left">
                <div class="df-mission-bar"></div>
                <div class="df-mission-eyebrow">Our Mission</div>
                <h2 class="df-mission-heading">Building a<br>Better Society</h2>
            </div>
            <div class="df-mission-right">
                <p class="df-mission-quote">Effective social intervention requires thoughtful planning, strategic execution, and sustained commitment. We take utmost care in the selection of community initiatives we support.</p>
                <p class="df-mission-text">Dhanuka Foundation, our wholly-owned subsidiary, is dedicated to creating sustainable social impact. Our approach is rooted in the principle of sustainable development — ensuring our interventions create lasting positive change while fostering long-term community resilience.</p>
                <p class="df-mission-text">Rather than spreading resources across numerous shallow initiatives, we focus our efforts on fewer, high-impact programs where we can make a genuine difference.</p>
            </div>
        </div>

        <!-- Three foundational pillars -->
        <div class="df-pillars">
            <div class="df-pillar">
                <div class="df-pillar-num">01 — Purposeful Selection</div>
                <h4 class="df-pillar-title">Impact-First Evaluation</h4>
                <p class="df-pillar-desc">We carefully evaluate every initiative based on its capacity to create sustainable, measurable impact in the communities we serve.</p>
            </div>
            <div class="df-pillar">
                <div class="df-pillar-num">02 — Community-Centric</div>
                <h4 class="df-pillar-title">Deep Local Understanding</h4>
                <p class="df-pillar-desc">All programs are designed with a deep understanding of local needs, community dynamics, and the specific challenges faced by beneficiaries.</p>
            </div>
            <div class="df-pillar">
                <div class="df-pillar-num">03 — Long-term Commitment</div>
                <h4 class="df-pillar-title">Lasting Partnerships</h4>
                <p class="df-pillar-desc">We build enduring relationships rather than one-time interventions, ensuring continuity and sustained benefits for communities over time.</p>
            </div>
        </div>
    </section>

    <!-- ════ KEY INITIATIVES ════ -->
    <section class="df-initiatives">
        <div class="df-initiatives-inner">
            <div class="df-initiatives-header">
                <div class="df-initiatives-bar"></div>
                <div class="df-initiatives-eyebrow">What We Do</div>
                <h2 class="df-initiatives-title">Key Initiatives</h2>
                <p class="df-initiatives-subtitle">Our Foundation focuses on three core areas that create lasting, measurable impact in the communities we serve.</p>
            </div>

            <div class="df-initiatives-grid">

                <!-- Education -->
                <div class="df-card">
                    <div class="df-card-icon">
                        <div class="df-card-icon-wrap">
                            <svg viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z"/><path d="M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"/></svg>
                        </div>
                    </div>
                    <div class="df-card-body">
                        <div class="df-card-number">Initiative 01</div>
                        <h3 class="df-card-title">Education</h3>
                        <p class="df-card-desc">Aligned with our vision of 'Education for All,' we operate a comprehensive merit scholarship program providing financial support to meritorious students. Our scholarships cover tuition fees, books, educational materials, and include mentorship — creating a ripple effect where educated individuals return to their communities as agents of positive change.</p>
                        <button class="df-card-expand-btn" onclick="toggleDfDetail(this)" aria-expanded="false">
                            Learn More
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                        </button>
                        <div class="df-card-detail">
                            <div class="df-card-detail-inner">
                                <p>Education serves as the cornerstone of individual empowerment and societal progress. Our scholarship initiative recognizes that intellectual potential exists across all socioeconomic backgrounds, but financial constraints often limit educational opportunities.</p>
                                <p>Key Features of Our Scholarship Program:</p>
                                <ul>
                                    <li>Merit-Based Selection: Scholarships are awarded based on academic performance</li>
                                    <li>Comprehensive Coverage: Financial assistance covers tuition fees, books, and educational materials</li>
                                    <li>Mentorship Component: Beyond financial support, we provide guidance and mentoring</li>
                                    <li>Progressive Support: Multi-year commitments ensure students can complete their programs</li>
                                </ul>
                                <p>We believe that for sustainable and steady societal growth, education plays the most critical role. Every student we support represents an investment in India's future.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Healthcare -->
                <div class="df-card">
                    <div class="df-card-icon">
                        <div class="df-card-icon-wrap">
                            <svg viewBox="0 0 24 24"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                        </div>
                    </div>
                    <div class="df-card-body">
                        <div class="df-card-number">Initiative 02</div>
                        <h3 class="df-card-title">Healthcare</h3>
                        <p class="df-card-desc">Through partnerships with Mother Teresa Foundation, Jaipur and SDMH Avedna Ashram, we provide residential care for the elderly and physically challenged, physiotherapy and rehabilitation services, palliative care for terminal illness, psychological counseling, and a dignified living environment that prioritizes comfort and respect.</p>
                        <button class="df-card-expand-btn" onclick="toggleDfDetail(this)" aria-expanded="false">
                            Learn More
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                        </button>
                        <div class="df-card-detail">
                            <div class="df-card-detail-inner">
                                <p>Healthcare accessibility remains a significant challenge for many communities, particularly for elderly citizens, physically challenged individuals, and those facing terminal illnesses.</p>
                                <p>Partnership with Mother Teresa Foundation, Jaipur — Our collaboration enables the foundation to:</p>
                                <ul>
                                    <li>Provide residential care facilities with professional medical supervision</li>
                                    <li>Offer physiotherapy and rehabilitation services for physically challenged individuals</li>
                                    <li>Ensure nutritious meals and essential medications for residents</li>
                                    <li>Create a dignified living environment that prioritizes comfort, care, and respect</li>
                                    <li>Implement recreational and therapeutic activities that enhance quality of life</li>
                                </ul>
                                <p>Partnership with SDMH Avedna Ashram — Our support enables the ashram to:</p>
                                <ul>
                                    <li>Provide palliative care services that focus on comfort and pain management</li>
                                    <li>Offer psychological counseling and emotional support for patients and families</li>
                                    <li>Maintain facilities that prioritize dignity and peace during challenging times</li>
                                    <li>Ensure access to necessary medications and medical equipment</li>
                                    <li>Create a supportive community environment where patients and families find solace</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Community Development -->
                <div class="df-card">
                    <div class="df-card-icon">
                        <div class="df-card-icon-wrap">
                            <svg viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4-4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                        </div>
                    </div>
                    <div class="df-card-body">
                        <div class="df-card-number">Initiative 03</div>
                        <h3 class="df-card-title">Community Development</h3>
                        <p class="df-card-desc">In partnership with Akshaya Patra Foundation, we help address food security challenges facing underprivileged communities. This initiative tackles multiple challenges simultaneously — addressing nutritional needs, improving school attendance, reducing economic burden on families, and creating employment opportunities within local communities.</p>
                        <button class="df-card-expand-btn" onclick="toggleDfDetail(this)" aria-expanded="false">
                            Learn More
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                        </button>
                        <div class="df-card-detail">
                            <div class="df-card-detail-inner">
                                <p>Food security remains one of the most pressing challenges facing underprivileged communities across India. Through our strategic partnership with the Akshaya Patra Foundation, we contribute to addressing this fundamental need while supporting the broader goal of educational access and retention.</p>
                                <p>The Akshaya Patra Foundation operates one of the world's largest school meal programs, serving millions of nutritious meals to children across India.</p>
                                <p>Our support enables the foundation to:</p>
                                <ul>
                                    <li>Expand meal distribution networks to reach more underserved communities</li>
                                    <li>Enhance nutritional quality through improved ingredients and preparation methods</li>
                                    <li>Implement technology-driven solutions for efficient meal preparation and distribution</li>
                                    <li>Create employment opportunities within local communities through kitchen operations and logistics</li>
                                </ul>
                                <p>By partnering with Akshaya Patra, we're not just addressing hunger — we're investing in a comprehensive solution that supports education, health, and community development.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ════ OUR COMMITMENT MOVING FORWARD ════ -->
    <section class="df-forward">
        <div class="df-forward-layout">
            <div class="df-forward-left">
                <div class="df-forward-bar"></div>
                <div class="df-forward-eyebrow">Looking Ahead</div>
                <h2 class="df-forward-heading">Our Commitment<br>Moving Forward</h2>
                <p class="df-forward-intro">As Umang Boards Limited continues to grow and expand our global presence, our commitment to social responsibility grows proportionally. We view our CSR initiatives not as separate activities, but as integral components of our business philosophy and long-term strategy.</p>
            </div>
            <div class="df-forward-right">
                <div class="df-future-grid">

                    <div class="df-future-card">
                        <div class="df-future-icon">
                            <svg viewBox="0 0 24 24"><path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z"/></svg>
                        </div>
                        <h4 class="df-future-title">Skill Development Programs</h4>
                        <p class="df-future-desc">Partnering with vocational training institutes to provide technical skills training for unemployed youth</p>
                    </div>

                    <div class="df-future-card">
                        <div class="df-future-icon">
                            <svg viewBox="0 0 24 24"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/><path d="M7 12l2-6 4 10 2-4h3"/></svg>
                        </div>
                        <h4 class="df-future-title">Environmental Conservation</h4>
                        <p class="df-future-desc">Community-based initiatives focused on water conservation, afforestation, and sustainable agricultural practices</p>
                    </div>

                    <div class="df-future-card">
                        <div class="df-future-icon">
                            <svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4-4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        </div>
                        <h4 class="df-future-title">Women's Empowerment</h4>
                        <p class="df-future-desc">Programs designed to support female entrepreneurship and economic independence</p>
                    </div>

                    <div class="df-future-card">
                        <div class="df-future-icon">
                            <svg viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><path d="M8 21h8M12 17v4"/></svg>
                        </div>
                        <h4 class="df-future-title">Digital Literacy</h4>
                        <p class="df-future-desc">Bridging the digital divide through computer education and internet access programs</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ════ MEASURING IMPACT ════ -->
    <section class="df-measure">
        <div class="df-measure-inner">
            <div class="df-measure-left">
                <div class="df-measure-bar"></div>
                <div class="df-measure-eyebrow">
                    <svg viewBox="0 0 24 24"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                    Accountability
                </div>
                <h2 class="df-measure-heading">Transparent<br>by <em>Design</em></h2>
            </div>
            <div class="df-measure-right">
                <p class="df-measure-text">We are committed to implementing robust monitoring and evaluation systems to measure the effectiveness of our CSR initiatives. This includes regular impact assessments, beneficiary feedback mechanisms, and transparent reporting on program outcomes. Community engagement and participatory planning ensure our programs remain responsive to local needs and priorities.</p>
            </div>
        </div>
    </section>

    <!-- ════ CTA ════ -->
    <section class="df-cta">
        <div class="df-cta-bg"></div>
        <div class="df-cta-overlay"></div>
        <div class="df-cta-glow"></div>
        <div class="df-cta-inner">
            <div class="df-cta-eyebrow">Join Us</div>
            <h2 class="df-cta-title">Making a <em>Difference</em><br>Together</h2>
            <p class="df-cta-subtitle">At Dhanuka Foundation, we believe that sustainable social change requires collective effort. Together, we can build stronger communities, transform lives, and contribute to India's journey toward inclusive and sustainable development.</p>
            <div class="df-cta-actions">
                <a href="<?php echo home_url('/contact-us'); ?>" class="btn-gold">
                    Get in Touch
                    <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <a href="<?php echo home_url('/about-us'); ?>" class="df-cta-link">
                    About Umang Boards
                    <svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>
        </div>
    </section>

</main>

<!-- Expandable Card Toggle -->
<script>
function toggleDfDetail(btn) {
    var detail = btn.nextElementSibling;
    var isOpen = detail.classList.contains('open');
    if (isOpen) {
        detail.style.maxHeight = '0';
        detail.classList.remove('open');
        btn.classList.remove('active');
        btn.setAttribute('aria-expanded', 'false');
        btn.childNodes[0].textContent = 'Learn More';
    } else {
        detail.style.maxHeight = detail.scrollHeight + 'px';
        detail.classList.add('open');
        btn.classList.add('active');
        btn.setAttribute('aria-expanded', 'true');
        btn.childNodes[0].textContent = 'Show Less';
    }
}
</script>

<!-- GSAP ScrollTrigger Animations -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;
    gsap.registerPlugin(ScrollTrigger);

    /* ─── Helpers ─── */
    function reveal(el, from, opts) {
        var defaults = { duration: 0.85, ease: 'expo.out', delay: 0, start: 'top 88%' };
        var o = Object.assign({}, defaults, opts || {});
        return gsap.fromTo(el,
            Object.assign({ opacity: 0 }, from),
            Object.assign({ opacity: 1 }, from.x !== undefined ? { x: 0 } : { y: 0 }, {
                duration: o.duration, ease: o.ease, delay: o.delay,
                scrollTrigger: { trigger: el, start: o.start }
            })
        );
    }
    function revealY(el, y, opts)  { return reveal(el, { y: y || 30 }, opts); }
    function revealX(el, x, opts)  { return reveal(el, { x: x || -40 }, opts); }

    function staggerReveal(selector, opts) {
        var els = gsap.utils.toArray(selector);
        if (!els.length) return;
        var o = Object.assign({ y: 35, duration: 0.75, stagger: 0.12, start: 'top 88%', ease: 'expo.out' }, opts || {});
        gsap.fromTo(els, { opacity: 0, y: o.y },
            { opacity: 1, y: 0, duration: o.duration, ease: o.ease,
              stagger: o.stagger,
              scrollTrigger: { trigger: els[0], start: o.start } });
    }

    function barReveal(el, opts) {
        var o = Object.assign({ start: 'top 85%' }, opts || {});
        gsap.fromTo(el, { scaleY: 0, transformOrigin: 'top center' },
            { scaleY: 1, duration: 0.6, ease: 'expo.out',
              scrollTrigger: { trigger: el, start: o.start } });
    }

    /* ─── HERO — load animations (above fold, no trigger) ─── */
    var heroTl = gsap.timeline({ defaults: { ease: 'expo.out' } });
    heroTl
        .fromTo('.df-hero-breadcrumb', { opacity: 0, y: -12 }, { opacity: 1, y: 0, duration: 0.7 }, 0.1)
        .fromTo('.df-hero-badge',      { opacity: 0, y: 15 },  { opacity: 1, y: 0, duration: 0.7 }, 0.25)
        .fromTo('.df-hero-title',      { opacity: 0, y: 35 },  { opacity: 1, y: 0, duration: 0.9 }, 0.4)
        .fromTo('.df-hero-subtitle',   { opacity: 0, y: 25 },  { opacity: 1, y: 0, duration: 0.8 }, 0.6)
        .fromTo('.df-hero-scroll-cue', { opacity: 0 },          { opacity: 1, duration: 0.6 }, 0.9)
        .fromTo('.df-hero-right',      { opacity: 0, clipPath: 'inset(0 100% 0 0)' },
                                       { opacity: 1, clipPath: 'inset(0 0% 0 0)', duration: 1.1, ease: 'expo.inOut' }, 0.3);

    /* ─── MISSION ─── */
    barReveal('.df-mission-bar');
    var missionLeftTl = gsap.timeline({
        scrollTrigger: { trigger: '.df-mission-left', start: 'top 82%' }
    });
    missionLeftTl
        .fromTo('.df-mission-eyebrow', { opacity: 0, x: -20 }, { opacity: 1, x: 0, duration: 0.7, ease: 'expo.out' }, 0.15)
        .fromTo('.df-mission-heading', { opacity: 0, x: -30 }, { opacity: 1, x: 0, duration: 0.85, ease: 'expo.out' }, 0.3);

    var missionRightTl = gsap.timeline({
        scrollTrigger: { trigger: '.df-mission-right', start: 'top 82%' }
    });
    missionRightTl
        .fromTo('.df-mission-quote', { opacity: 0, y: 25 }, { opacity: 1, y: 0, duration: 0.85, ease: 'expo.out' }, 0.1)
        .fromTo('.df-mission-text',  { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.7, ease: 'expo.out', stagger: 0.15 }, 0.35);

    /* Pillars — slide up with stagger */
    staggerReveal('.df-pillar', { y: 30, stagger: 0.18, start: 'top 85%', duration: 0.8 });

    /* ─── INITIATIVES ─── */
    var initHeaderTl = gsap.timeline({
        scrollTrigger: { trigger: '.df-initiatives-header', start: 'top 82%' }
    });
    initHeaderTl
        .fromTo('.df-initiatives-bar',      { scaleY: 0, transformOrigin: 'top center' }, { scaleY: 1, duration: 0.5, ease: 'expo.out' })
        .fromTo('.df-initiatives-eyebrow',  { opacity: 0, y: 10 }, { opacity: 1, y: 0, duration: 0.6, ease: 'expo.out' }, 0.2)
        .fromTo('.df-initiatives-title',    { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.75, ease: 'expo.out' }, 0.35)
        .fromTo('.df-initiatives-subtitle', { opacity: 0, y: 15 }, { opacity: 1, y: 0, duration: 0.65, ease: 'expo.out' }, 0.5);

    /* Cards — batch reveal as they enter viewport */
    ScrollTrigger.batch('.df-card', {
        start: 'top 88%',
        onEnter: function(batch) {
            gsap.fromTo(batch,
                { opacity: 0, y: 50, scale: 0.97 },
                { opacity: 1, y: 0, scale: 1, duration: 0.8, ease: 'expo.out', stagger: 0.14 }
            );
        }
    });

    /* ─── COMMITMENT MOVING FORWARD ─── */
    barReveal('.df-forward-bar');
    var fwdTl = gsap.timeline({
        scrollTrigger: { trigger: '.df-forward-left', start: 'top 82%' }
    });
    fwdTl
        .fromTo('.df-forward-eyebrow', { opacity: 0, x: -20 }, { opacity: 1, x: 0, duration: 0.65, ease: 'expo.out' }, 0.1)
        .fromTo('.df-forward-heading', { opacity: 0, x: -30 }, { opacity: 1, x: 0, duration: 0.8,  ease: 'expo.out' }, 0.25)
        .fromTo('.df-forward-intro',   { opacity: 0, y: 20 },  { opacity: 1, y: 0, duration: 0.7,  ease: 'expo.out' }, 0.45);

    staggerReveal('.df-future-card', { y: 28, stagger: 0.13, start: 'top 86%', duration: 0.72 });

    /* ─── MEASURING IMPACT — split slide ─── */
    var measureTl = gsap.timeline({
        scrollTrigger: { trigger: '.df-measure', start: 'top 78%' }
    });
    measureTl
        .fromTo('.df-measure-bar',     { scaleY: 0, transformOrigin: 'top center' }, { scaleY: 1, duration: 0.5, ease: 'expo.out' })
        .fromTo('.df-measure-eyebrow', { opacity: 0, x: -25 }, { opacity: 1, x: 0, duration: 0.7, ease: 'expo.out' }, 0.15)
        .fromTo('.df-measure-heading', { opacity: 0, x: -40 }, { opacity: 1, x: 0, duration: 0.9, ease: 'expo.out' }, 0.3)
        .fromTo('.df-measure-text',    { opacity: 0, x: 40  }, { opacity: 1, x: 0, duration: 0.9, ease: 'expo.out' }, 0.35);

    /* ─── CTA — parallax bg + text reveal ─── */
    gsap.to('.df-cta-bg', {
        y: -60,
        ease: 'none',
        scrollTrigger: { trigger: '.df-cta', start: 'top bottom', end: 'bottom top', scrub: 1.5 }
    });

    var ctaTl = gsap.timeline({
        scrollTrigger: { trigger: '.df-cta', start: 'top 75%' }
    });
    ctaTl
        .fromTo('.df-cta-eyebrow',  { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.7, ease: 'expo.out' })
        .fromTo('.df-cta-title',    { opacity: 0, y: 35 }, { opacity: 1, y: 0, duration: 0.9, ease: 'expo.out' }, 0.2)
        .fromTo('.df-cta-subtitle', { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.75, ease: 'expo.out' }, 0.45)
        .fromTo('.df-cta-actions',  { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.65, ease: 'expo.out' }, 0.65);
});
</script>

<?php get_footer(); ?>
