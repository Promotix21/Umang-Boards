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

/* --- HEADING COLOR RESET — override blue --navy to dark for all headings --- */
.page-about h1, .page-about h2, .page-about h3,
.page-about .au-hero-title,
.page-about .au-bento-label h2,
.page-about .au-bento-story h3,
.page-about .au-vm-title,
.page-about .au-vm-panel-title,
.page-about .au-values-title,
.page-about .au-news-section-title,
.page-about .au-events-section-title,
.page-about .au-insta-title,
.page-about .au-cta-title,
.page-about .au-stat-founded,
.page-about .au-hero-stat-num {
    color: #0b1f3a !important;
}
.page-about .au-hero-title,
.page-about .au-hero-stat-num {
    color: #fff !important;
}
.page-about .au-hero-title em,
.page-about .au-bento-label h2 em,
.page-about .au-vm-title em,
.page-about .au-cta-title em {
    color: var(--gold) !important;
}

/* --- CURVED LINES ANIMATION (page-wide background layer) --- */
.au-curved-lines {
    position: fixed; top: 0; left: 0;
    width: 100%; height: 100%;
    pointer-events: none; z-index: 0;
    overflow: hidden; opacity: 1;
}
.au-curved-lines svg { width: 100%; height: 100%; }
.au-cl-track {
    fill: none; stroke: rgba(200,168,75,0.07);
    stroke-width: 1.2;
}
.au-cl-flow {
    fill: none;
    stroke-linecap: round;
    stroke-dasharray: 600;
    stroke-dashoffset: 600;
}
.au-cl-flow.au-cl-a1 { stroke: rgba(200,168,75,0.35); stroke-width: 1.8; animation: auClDraw 8s ease-in-out infinite; }
.au-cl-flow.au-cl-a2 { stroke: rgba(200,168,75,0.20); stroke-width: 1.2; animation: auClDraw 10s ease-in-out 2s infinite; }
.au-cl-flow.au-cl-a3 { stroke: rgba(200,168,75,0.28); stroke-width: 1.5; animation: auClDraw 12s ease-in-out 4s infinite; }
.au-cl-flow.au-cl-a4 { stroke: rgba(200,168,75,0.15); stroke-width: 1; animation: auClDraw 9s ease-in-out 1s infinite; }
.au-cl-flow.au-cl-a5 { stroke: rgba(200,168,75,0.22); stroke-width: 1.3; animation: auClDraw 11s ease-in-out 3s infinite; }
@keyframes auClDraw {
    0%   { stroke-dashoffset: 600; opacity: 0; }
    10%  { opacity: 1; }
    50%  { stroke-dashoffset: 0; opacity: 0.8; }
    90%  { opacity: 1; }
    100% { stroke-dashoffset: -600; opacity: 0; }
}
@media (max-width: 1024px) { .au-curved-lines { display: none; } }

/* ============================================
   HERO — Full cinematic: solid-left overlay, full-width content
   ============================================ */
.au-hero {
    position: relative;
    color: #fff;
    overflow: hidden;
    z-index: 2;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    padding-top: calc(var(--utility-h) + var(--header-h));
}
.au-hero-video-wrap {
    position: absolute;
    inset: 0;
    z-index: 0;
    overflow: hidden;
}
.au-hero-video-wrap video {
    width: 100%; height: 100%;
    object-fit: cover;
    display: block;
}
/* Solid dark LEFT → fully transparent RIGHT — video visible on right half */
.au-hero-overlay {
    position: absolute;
    inset: 0;
    z-index: 1;
    background:
        linear-gradient(to right,
            rgba(8,15,28,0.96) 0%,
            rgba(8,15,28,0.93) 32%,
            rgba(8,15,28,0.62) 56%,
            rgba(8,15,28,0.06) 100%
        ),
        linear-gradient(to bottom,
            rgba(8,15,28,0.28) 0%,
            transparent 18%,
            transparent 70%,
            rgba(8,15,28,0.50) 100%
        );
}
/* Inner: single-column, content fills left ~62% naturally */
.au-hero-inner {
    position: relative;
    z-index: 2;
    flex: 1;
    max-width: 1400px;
    width: 100%;
    margin: 0 auto;
    padding: clamp(3.5rem, 9vh, 6.5rem) clamp(1.5rem, 4vw, 3.5rem);
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.au-hero-content {
    max-width: 62%;
    display: flex;
    flex-direction: column;
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
    margin-bottom: 1.75rem;
}
.au-hero-breadcrumb a { color: rgba(255,255,255,0.5); text-decoration: none; transition: color 0.3s; }
.au-hero-breadcrumb a:hover { color: var(--gold); }
.au-hero-breadcrumb .active { color: var(--gold); }
.au-hero-breadcrumb svg { width: 12px; height: 12px; }
.au-hero-badge {
    display: inline-flex;
    align-items: center;
    padding: 0.4rem 1rem;
    background: rgba(200,168,75,0.15);
    border: 1px solid rgba(200,168,75,0.4);
    color: var(--gold);
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    margin-bottom: 1.5rem;
    width: fit-content;
}
.au-hero-title {
    font-family: var(--font-body);
    font-size: clamp(2.8rem, 5vw, 4.8rem);
    font-weight: 700;
    line-height: 1.08;
    letter-spacing: -0.03em;
    margin-bottom: 1.5rem;
    color: #fff;
}
.au-hero-title em { font-style: normal; color: var(--gold); }
.au-hero-subhead {
    font-size: clamp(1rem, 1.5vw, 1.1rem);
    color: rgba(255,255,255,0.88);
    line-height: 1.65;
    font-weight: 500;
    margin-bottom: 1.75rem;
    border-left: 3px solid var(--gold);
    padding-left: 1.1rem;
}
.au-hero-body {
    display: flex;
    flex-direction: column;
    gap: 0.9rem;
}
.au-hero-body p {
    font-size: 0.92rem;
    color: rgba(255,255,255,0.65);
    line-height: 1.8;
    font-weight: 400;
    margin: 0;
}

/* ============================================
   CERTIFICATIONS STRIP — white bar directly below hero
   ============================================ */
.au-cert-strip {
    position: relative;
    z-index: 3;
    background: #fff;
    border-bottom: 1px solid rgba(11,31,58,0.08);
    box-shadow: 0 4px 20px rgba(11,31,58,0.06);
}
.au-cert-strip-inner {
    max-width: 1400px;
    margin: 0 auto;
    padding: 2.5rem clamp(1.5rem, 4vw, 3.5rem);
    display: flex;
    align-items: center;
    gap: 3rem;
}
.au-cert-strip-label {
    flex-shrink: 0;
    border-right: 1px solid rgba(11,31,58,0.1);
    padding-right: 3rem;
    font-size: 0.68rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.14em;
    color: rgba(11,31,58,0.5);
    line-height: 1.8;
    white-space: nowrap;
}
.au-cert-strip-label em { color: var(--gold); font-style: normal; display: block; }
.au-cert-strip-items {
    display: flex;
    align-items: stretch;
    flex: 1;
}
.au-cert-strip-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 0.9rem;
    padding: 1rem 2rem;
    flex: 1;
    border-right: 1px solid rgba(11,31,58,0.07);
    cursor: pointer;
    transition: background 0.2s;
    text-align: center;
}
.au-cert-strip-item:last-child { border-right: none; }
.au-cert-strip-item:hover { background: #f8f9fb; }
.au-cert-strip-item img {
    width: 80px;
    height: 80px;
    object-fit: contain;
    opacity: 0.85;
    display: block;
    transition: opacity 0.2s, transform 0.25s;
}
.au-cert-strip-item:hover img { opacity: 1; transform: scale(1.07); }
.au-cert-strip-item-text strong {
    display: block;
    font-size: 0.7rem;
    font-weight: 700;
    color: #0b1f3a;
    text-transform: uppercase;
    letter-spacing: 0.07em;
    line-height: 1.3;
    margin-bottom: 0.2rem;
}
.au-cert-strip-item-text span {
    display: block;
    font-size: 0.62rem;
    color: rgba(11,31,58,0.45);
    line-height: 1.4;
}
.au-cert-strip-item .cert-click-hint {
    font-size: 0.55rem;
    color: rgba(11,31,58,0.28);
    text-transform: uppercase;
    letter-spacing: 0.1em;
}

/* Cert lightbox */
.au-cert-lightbox {
    display: none;
    position: fixed;
    inset: 0;
    z-index: 9999;
    background: rgba(8,15,28,0.88);
    backdrop-filter: blur(6px);
    -webkit-backdrop-filter: blur(6px);
    align-items: center;
    justify-content: center;
    padding: 2rem;
}
.au-cert-lightbox.is-open { display: flex; }
.au-cert-lightbox-inner {
    position: relative;
    background: #fff;
    padding: 3rem 2.5rem 2.5rem;
    max-width: 400px;
    width: 100%;
    text-align: center;
    box-shadow: 0 40px 80px rgba(0,0,0,0.4);
    animation: certLbIn 0.22s ease;
}
@keyframes certLbIn {
    from { opacity: 0; transform: scale(0.90); }
    to   { opacity: 1; transform: scale(1); }
}
.au-cert-lb-img {
    width: 180px;
    height: 180px;
    object-fit: contain;
    display: block;
    margin: 0 auto 1.5rem;
}
.au-cert-lb-title {
    font-size: 0.82rem;
    font-weight: 700;
    color: #0b1f3a;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    margin-bottom: 0.4rem;
}
.au-cert-lb-desc {
    font-size: 0.8rem;
    color: rgba(11,31,58,0.55);
    line-height: 1.55;
}
.au-cert-lb-close {
    position: absolute;
    top: 0.85rem; right: 0.85rem;
    width: 30px; height: 30px;
    display: flex; align-items: center; justify-content: center;
    background: rgba(11,31,58,0.08);
    border: none; cursor: pointer; color: #0b1f3a;
    transition: background 0.2s;
    line-height: 1;
}
.au-cert-lb-close:hover { background: rgba(11,31,58,0.16); }
.au-cert-lb-close svg { width: 14px; height: 14px; }
/* Stats strip at bottom of hero */
.au-hero-stats {
    position: relative;
    z-index: 2;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    background: rgba(255,255,255,0.08);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border-top: 1px solid rgba(255,255,255,0.12);
}
.au-hero-stat {
    padding: 2rem 2.5rem;
    text-align: center;
    border-right: 1px solid rgba(255,255,255,0.08);
    transition: background 0.3s;
}
.au-hero-stat:last-child { border-right: none; }
.au-hero-stat:hover { background: rgba(255,255,255,0.05); }
.au-hero-stat-num {
    font-family: var(--font-body);
    font-size: clamp(2rem, 3.5vw, 3rem);
    font-weight: 700;
    color: var(--gold);
    letter-spacing: -0.03em;
    line-height: 1;
    margin-bottom: 0.4rem;
}
.au-hero-stat-label {
    font-size: 0.68rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.14em;
    color: rgba(255,255,255,0.5);
}

/* --- CORPORATE OVERVIEW — Photo + Editorial Split --- */
.au-overview {
    background: #fff;
    position: relative;
    z-index: 2;
    overflow: hidden;
}
.au-overview-inner {
    display: grid;
    grid-template-columns: 1fr 1fr;
    min-height: 600px;
}
.au-overview-photo {
    position: relative;
    overflow: hidden;
    min-height: 500px;
}
.au-overview-photo img {
    width: 100%; height: 100%;
    object-fit: cover; display: block;
}
.au-overview-photo-overlay {
    position: absolute; inset: 0;
    background: linear-gradient(to right, rgba(11,31,58,0.18) 0%, transparent 60%);
}
.au-overview-content {
    padding: clamp(4rem, 7vw, 7rem) clamp(2.5rem, 5vw, 5rem);
    display: flex; flex-direction: column; justify-content: center;
    background: #fff;
}
.au-overview-eyebrow {
    font-size: 0.68rem; font-weight: 700; color: rgba(11,31,58,0.45);
    text-transform: uppercase; letter-spacing: 0.22em;
    margin-bottom: 1.25rem;
    display: flex; align-items: center; gap: 0.75rem;
}
.au-overview-eyebrow::before {
    content: ''; display: inline-block;
    width: 28px; height: 1px; background: var(--gold);
}
.au-overview-heading {
    font-family: var(--font-body);
    font-size: clamp(2rem, 3.5vw, 2.8rem);
    font-weight: 700; color: #0b1f3a;
    letter-spacing: -0.02em; line-height: 1.15;
    margin-bottom: clamp(1.5rem, 3vh, 2.5rem);
}
.au-overview-heading em { color: var(--gold); font-style: normal; }
.au-overview-body-text p {
    font-size: 1rem; color: rgba(11,31,58,0.68); line-height: 1.8;
    font-weight: 400; margin-bottom: 1.25rem;
}
.au-overview-body-text p:last-child { margin-bottom: 0; }
.au-overview-callout {
    margin-top: clamp(2rem, 4vh, 3rem);
    padding: 1.5rem 1.75rem;
    border-left: 3px solid var(--gold);
    background: linear-gradient(135deg, #f9f5ee, #f2e8d8);
}
.au-overview-callout-label {
    font-size: 0.62rem; font-weight: 700; text-transform: uppercase;
    letter-spacing: 0.18em; color: rgba(11,31,58,0.5);
    margin-bottom: 0.5rem;
}
.au-overview-callout h4 {
    font-size: 1rem; font-weight: 700; color: #0b1f3a;
    margin-bottom: 0.6rem; line-height: 1.35;
}
.au-overview-callout p {
    font-size: 0.88rem; color: rgba(11,31,58,0.7); line-height: 1.65;
    font-weight: 400; margin: 0;
}

/* --- OUR STORY — Annual-Report Row Layout --- */
.au-pillars {
    background: #f8f9fb;
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
    position: relative;
    z-index: 2;
}
.au-pillars-inner { max-width: 1400px; margin: 0 auto; }
.au-pillars-header {
    display: grid;
    grid-template-columns: 1fr 1.8fr;
    gap: clamp(3rem, 6vw, 8rem);
    align-items: end;
    margin-bottom: clamp(3rem, 5vh, 4rem);
    padding-bottom: clamp(2rem, 3vh, 2.5rem);
    border-bottom: 1px solid rgba(11,31,58,0.12);
}
.au-pillars-eyebrow {
    font-size: 0.68rem; font-weight: 700; text-transform: uppercase;
    letter-spacing: 0.22em; color: var(--gold);
    display: flex; align-items: center; gap: 0.6rem;
    align-self: start; padding-top: 0.5rem;
}
.au-pillars-eyebrow::before {
    content: ''; display: inline-block;
    width: 24px; height: 1px; background: var(--gold); flex-shrink: 0;
}
.au-pillars-heading {
    font-family: var(--font-body);
    font-size: clamp(1.8rem, 3.5vw, 2.8rem);
    font-weight: 800; color: #0b1f3a;
    letter-spacing: -0.02em; line-height: 1.15; margin: 0;
}
.au-pillars-heading em { font-style: normal; color: var(--gold); }
.au-pillars-rows { display: flex; flex-direction: column; }
.au-pillar-row {
    display: grid;
    grid-template-columns: 260px 1fr;
    gap: clamp(2rem, 4vw, 5rem);
    align-items: start;
    padding: clamp(2rem, 3.5vh, 2.75rem) 0;
    border-top: 1px solid rgba(11,31,58,0.1);
}
.au-pillar-row:last-child { border-bottom: 1px solid rgba(11,31,58,0.1); }
.au-pillar-meta { display: flex; flex-direction: column; gap: 0.4rem; padding-top: 0.15rem; }
.au-pillar-num {
    font-size: 0.6rem; font-weight: 700; letter-spacing: 0.18em;
    color: var(--gold); opacity: 0.7;
}
.au-pillar-label {
    font-size: 0.78rem; font-weight: 700; text-transform: uppercase;
    letter-spacing: 0.1em; color: #0b1f3a; line-height: 1.4;
}
.au-pillar-row p {
    font-size: 1rem; color: rgba(11,31,58,0.65); line-height: 1.8;
    font-weight: 400; margin: 0;
}

/* --- CERT PANEL inside Vision/Mission tab --- */
.au-vm-panel.au-vm-panel-certs {
    grid-template-columns: 1fr !important;
    flex-direction: column;
}
.au-vm-cert-wrap {
    padding: clamp(2rem, 3vw, 3rem);
    background: rgba(255,255,255,0.55);
    display: flex; flex-direction: column; justify-content: center;
    min-height: 520px;
}
.au-vm-cert-grid {
    display: flex;
    gap: 1.25rem;
    flex-wrap: wrap;
    margin-top: 2rem;
}
.au-vm-cert-item {
    flex: 1 1 120px;
    display: flex; flex-direction: column; align-items: center;
    gap: 0.75rem; text-align: center;
    background: rgba(255,255,255,0.7);
    border: 1px solid rgba(11,31,58,0.07);
    padding: 1.75rem 1.25rem;
    transition: background 0.25s, box-shadow 0.25s;
}
.au-vm-cert-item:hover { background: #fff; box-shadow: 0 4px 16px rgba(11,31,58,0.08); }
.au-vm-cert-item img {
    height: 80px; width: 80px; object-fit: contain;
    opacity: 0.85; transition: opacity 0.25s;
}
.au-vm-cert-item:hover img { opacity: 1; }
.au-vm-cert-item span {
    font-size: 0.62rem; font-weight: 700; text-transform: uppercase;
    letter-spacing: 0.1em; color: #0b1f3a; line-height: 1.4; max-width: 110px;
}

/* --- VISION MISSION TAB SLIDER --- */
.au-vm {
    background: linear-gradient(165deg, #f5f8fc 0%, #edf2f9 50%, #f0f5fb 100%);
    color: var(--navy);
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
    position: relative;
    z-index: 2;
}
.au-vm-wrap { max-width: 1400px; margin: 0 auto; }
.au-vm-header {
    margin-bottom: clamp(2.5rem, 4vh, 4rem);
}
.au-vm-eyebrow {
    font-family: var(--font-mono);
    font-size: 0.72rem; font-weight: 700; color: var(--navy);
    text-transform: uppercase; letter-spacing: 0.25em; margin-bottom: 0.8rem;
    opacity: 0.6;
}
.au-vm-title {
    font-family: var(--font-body);
    font-size: clamp(2.2rem, 4.5vw, 3.5rem);
    font-weight: 800; letter-spacing: -0.02em; line-height: 1.08;
    color: var(--navy);
}
.au-vm-title em { font-style: normal; color: var(--gold); font-weight: 800; }

/* Two-column layout */
.au-vm-body {
    display: grid;
    grid-template-columns: 280px 1fr;
    gap: 0;
    min-height: 520px;
    border: 1px solid rgba(11,31,58,0.12);
    background: rgba(255,255,255,0.4);
}

/* LEFT: Tab list */
.au-vm-tabs {
    border-right: 1px solid rgba(11,31,58,0.1);
    display: flex;
    flex-direction: column;
    overflow: hidden;
    background: rgba(255,255,255,0.3);
}
.au-vm-tab {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1.1rem 1.5rem;
    border-bottom: 1px solid rgba(11,31,58,0.06);
    cursor: pointer;
    transition: background 0.25s;
    position: relative;
}
.au-vm-tab:last-child { border-bottom: none; }
.au-vm-tab::before {
    content: '';
    position: absolute; left: 0; top: 0; bottom: 0;
    width: 3px;
    background: var(--navy);
    transform: scaleY(0);
    transition: transform 0.3s var(--ease-out-expo, cubic-bezier(0.16,1,0.3,1));
    transform-origin: top;
}
.au-vm-tab.active { background: rgba(255,255,255,0.5); }
.au-vm-tab.active::before { transform: scaleY(1); }
.au-vm-tab-num {
    font-size: 0.68rem; font-weight: 700;
    color: var(--gold); letter-spacing: 0.12em;
    flex-shrink: 0; opacity: 0.9;
    min-width: 24px;
}
.au-vm-tab-label {
    font-size: 0.82rem; font-weight: 500;
    color: rgba(11,31,58,0.6);
    text-transform: uppercase; letter-spacing: 0.08em;
    line-height: 1.3;
    transition: color 0.25s;
}
.au-vm-tab.active .au-vm-tab-label { color: var(--navy); }
.au-vm-tab:hover .au-vm-tab-label { color: rgba(11,31,58,0.8); }

/* RIGHT: Content panel */
.au-vm-panel-wrap {
    position: relative;
    overflow: hidden;
    min-height: 520px;
}
.au-vm-panel {
    position: absolute; inset: 0;
    display: grid;
    grid-template-columns: 1fr 1fr;
    opacity: 0;
    pointer-events: none;
}
.au-vm-panel.active {
    opacity: 1;
    pointer-events: auto;
    position: relative;
    min-height: 520px;
}
.au-vm-panel-img {
    position: relative;
    overflow: hidden;
}
.au-vm-panel-img img {
    width: 100%; height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.8s ease;
}
.au-vm-panel.active .au-vm-panel-img img { transform: scale(1.03); }
.au-vm-panel-content {
    padding: clamp(2rem, 3vw, 3rem);
    display: flex;
    flex-direction: column;
    justify-content: center;
    background: rgba(255,255,255,0.55);
}
.au-vm-panel-tag {
    font-size: 0.72rem; font-weight: 700;
    color: var(--gold); text-transform: uppercase;
    letter-spacing: 0.18em; margin-bottom: 1rem;
    display: flex; align-items: center; gap: 0.75rem;
}
.au-vm-panel-tag::before {
    content: ''; width: 28px; height: 1px; background: var(--gold); flex-shrink: 0;
}
.au-vm-panel-num {
    font-size: 5rem; font-weight: 700;
    color: rgba(11,31,58,0.05); line-height: 1;
    letter-spacing: -0.05em; margin-bottom: -1rem;
}
.au-vm-panel-title {
    font-family: var(--font-body);
    font-size: clamp(1.3rem, 2.2vw, 1.8rem);
    font-weight: 700; line-height: 1.2;
    margin-bottom: 1.25rem; letter-spacing: -0.02em;
    color: var(--navy);
}
.au-vm-panel-desc {
    font-size: 0.92rem; color: rgba(11,31,58,0.75);
    line-height: 1.75; font-weight: 400;
    margin-bottom: 1.5rem;
}
.au-vm-panel-link {
    display: inline-flex; align-items: center; gap: 0.5rem;
    font-size: 0.78rem; font-weight: 700;
    color: var(--navy); text-transform: uppercase;
    letter-spacing: 0.1em; background: none; border: none;
    cursor: pointer; padding: 0; transition: gap 0.3s;
}
.au-vm-panel-link:hover { gap: 0.8rem; color: var(--gold); }
.au-vm-panel-link svg { width: 14px; height: 14px; }

/* Progress bar */
.au-vm-progress {
    height: 2px;
    background: rgba(11,31,58,0.1);
    position: relative;
    overflow: hidden;
}
.au-vm-progress-bar {
    position: absolute; left: 0; top: 0; bottom: 0;
    background: var(--navy);
    width: 0%;
    transition: width linear;
}

/* Responsive */
@media (max-width: 1024px) {
    .au-vm-body { grid-template-columns: 220px 1fr; }
    .au-vm-panel { grid-template-columns: 1fr; }
    .au-vm-panel-img { height: 220px; }
}
@media (max-width: 768px) {
    .au-vm-body { display: none; }
    .au-vm-progress { display: none; }
    .au-vm-swipe-hint { display: none; }
}

/* --- MOBILE ACCORDION (Vision/Mission) --- */
.au-vm-accordion {
    display: none;
    border-top: 1px solid rgba(11,31,58,0.08);
    margin-top: 2rem;
}
.au-vm-acc-item {
    border-bottom: 1px solid rgba(11,31,58,0.08);
    overflow: hidden;
}
.au-vm-acc-header {
    display: flex;
    align-items: center;
    gap: 0.875rem;
    padding: 1rem 0;
    cursor: pointer;
    user-select: none;
    -webkit-tap-highlight-color: transparent;
}
.au-vm-acc-num {
    font-size: 0.68rem; font-weight: 700;
    color: var(--gold); letter-spacing: 0.12em;
    flex-shrink: 0; min-width: 22px;
}
.au-vm-acc-label {
    flex: 1;
    font-size: 0.82rem; font-weight: 600;
    color: rgba(11,31,58,0.6);
    text-transform: uppercase; letter-spacing: 0.07em;
    line-height: 1.3;
    transition: color 0.2s;
}
.au-vm-acc-header.active .au-vm-acc-label { color: #0b1f3a; }
.au-vm-acc-chevron {
    flex-shrink: 0;
    transition: transform 0.3s ease;
    color: rgba(11,31,58,0.35);
}
.au-vm-acc-header.active .au-vm-acc-chevron {
    transform: rotate(180deg);
    color: var(--gold);
}
.au-vm-acc-body {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.4s cubic-bezier(0.16,1,0.3,1);
}
.au-vm-acc-body.open { max-height: 800px; }
.au-vm-acc-body .au-vm-panel-img { height: 180px; overflow: hidden; }
.au-vm-acc-body .au-vm-panel-img img { width: 100%; height: 100%; object-fit: cover; display: block; }
.au-vm-acc-body .au-vm-panel-content {
    padding: 1.25rem 0 1.5rem;
    background: transparent;
}
.au-vm-acc-body .au-vm-panel-num { font-size: 3rem; }
.au-vm-acc-body .au-vm-panel-title { font-size: 1.2rem; }
.au-vm-acc-body .au-vm-panel-desc { font-size: 0.9rem; }
/* Show accordion on mobile — must come AFTER .au-vm-accordion { display: none } default above */
@media (max-width: 768px) {
    .au-vm-accordion { display: block; }
}
/* swipe hint — hidden on desktop, shown on mobile via above rule */
.au-vm-swipe-hint {
    display: none;
    align-items: center; justify-content: center; gap: 0.5rem;
    padding: 0.75rem 0 0;
    font-size: 0.7rem; font-weight: 600; color: rgba(11,31,58,0.4);
    text-transform: uppercase; letter-spacing: 0.12em;
}

/* --- CTA --- */
.au-cta {
    background: #ffffff;
    color: var(--navy);
    padding: clamp(6rem, 12vh, 12rem) clamp(1.5rem, 4vw, 3.5rem);
    text-align: center;
    position: relative;
    overflow: hidden;
    z-index: 2;
    border-top: 1px solid rgba(55, 110, 180, 0.08);
}
.au-cta-line {
    width: 1px;
    height: 96px;
    background: linear-gradient(to bottom, transparent, var(--gold));
    margin: 0 auto 3rem;
    opacity: 0.4;
}
.au-cta-title {
    font-family: var(--font-body);
    font-size: clamp(2.5rem, 6vw, 5rem);
    font-weight: 700;
    letter-spacing: -0.04em;
    line-height: 0.95;
    margin-bottom: 2rem;
    color: var(--navy);
}
.au-cta-title em {
    font-style: normal;
    color: var(--gold);
}
.au-cta-desc {
    font-size: clamp(1rem, 2vw, 1.3rem);
    color: rgba(11,31,58,0.75);
    max-width: 700px;
    margin: 0 auto 3rem;
    line-height: 1.6;
    font-weight: 400;
}
.au-cta-actions {
    display: flex;
    gap: 1.5rem;
    justify-content: center;
    flex-wrap: wrap;
}
.au-cta .btn-outline { color: var(--navy); border-color: rgba(11,31,58,0.25); }
.au-cta .btn-outline:hover { border-color: var(--gold); color: var(--gold); }

/* --- INSTAGRAM SECTION --- */
.au-insta-section {
    background: var(--bg-primary, #fff);
    padding: clamp(4rem, 8vh, 7rem) clamp(1.5rem, 4vw, 3.5rem);
}
.au-insta-inner {
    max-width: 1400px;
    margin: 0 auto;
}
.au-insta-title {
    font-family: var(--font-body);
    font-size: clamp(1.8rem, 3.5vw, 2.8rem);
    font-weight: 700;
    color: var(--navy);
    letter-spacing: -0.02em;
    margin-bottom: clamp(2rem, 3vh, 3rem);
}
.au-insta-note {
    text-align: center;
    font-size: 0.8rem;
    color: var(--text-muted, rgba(11,31,58,0.6));
    margin-top: 1rem;
}
.au-insta-follow {
    display: flex;
    justify-content: center;
    margin-top: 2rem;
}

/* --- CERTIFICATION BADGES --- */
.au-cert-badges {
    display: flex;
    flex-wrap: wrap;
    gap: 0.75rem;
    margin-top: 1.5rem;
    justify-content: center;
}
.au-cert-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.5rem 1rem;
    background: var(--bg-secondary);
    border: 1px solid rgba(11,31,58,0.08);
    font-size: 0.72rem;
    font-weight: 600;
    color: var(--navy);
    text-transform: uppercase;
    letter-spacing: 0.08em;
    transition: all 0.3s;
}
.au-cert-badge:hover {
    border-color: var(--gold);
    background: #fff;
}
.au-cert-badge svg {
    width: 14px;
    height: 14px;
    color: var(--gold);
    flex-shrink: 0;
}

/* --- STORY CONTINUATION — merged into .au-pillars above --- */

/* --- VISION/MISSION MODALS --- */
.au-vm-read-link {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    margin-top: 1rem;
    font-size: 0.8rem;
    font-weight: 600;
    color: var(--gold);
    text-transform: uppercase;
    letter-spacing: 0.1em;
    cursor: pointer;
    transition: color 0.3s;
    background: none;
    border: none;
    padding: 0;
}
.au-vm-read-link:hover { color: var(--navy); }
.au-vm-modal-overlay {
    position: fixed;
    inset: 0;
    background: rgba(11,31,58,0.7);
    backdrop-filter: blur(4px);
    z-index: 9999;
    display: none;
    align-items: center;
    justify-content: center;
    padding: 2rem;
}
.au-vm-modal {
    background: #fff;
    max-width: 720px;
    width: 100%;
    max-height: 80vh;
    display: flex;
    flex-direction: column;
    box-shadow: 0 30px 80px rgba(11,31,58,0.3);
}
.au-vm-modal-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1.5rem 2rem;
    background: var(--navy);
    color: #fff;
    flex-shrink: 0;
}
.au-vm-modal-header h3 {
    font-size: 1.1rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
}
.au-vm-modal-close {
    width: 36px;
    height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(255,255,255,0.1);
    border: 1px solid rgba(255,255,255,0.2);
    color: #fff;
    cursor: pointer;
    transition: all 0.3s;
}
.au-vm-modal-close:hover {
    background: var(--gold);
    color: var(--navy);
    border-color: var(--gold);
}
.au-vm-modal-close svg { width: 16px; height: 16px; }
.au-vm-modal-body {
    padding: 2rem;
    overflow-y: scroll;
    flex: 1;
    min-height: 0;
    border-left: 4px solid var(--gold);
    overscroll-behavior: contain;
    -webkit-overflow-scrolling: touch;
}
.au-vm-modal-body p {
    font-size: 1rem;
    color: var(--text-secondary);
    line-height: 1.8;
    font-weight: 400;
    margin-bottom: 1.25rem;
}
.au-vm-modal-body p:last-child { margin-bottom: 0; }

/* --- CORE VALUES --- */
.au-values-section {
    background: var(--bg-secondary);
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
}
.au-values-inner {
    max-width: 1400px;
    margin: 0 auto;
}
.au-values-header {
    text-align: center;
    margin-bottom: clamp(3rem, 5vh, 4rem);
}
.au-values-eyebrow {
    font-size: 0.8rem;
    font-weight: 700;
    color: var(--gold);
    text-transform: uppercase;
    letter-spacing: 0.15em;
    margin-bottom: 1rem;
}
.au-values-title {
    font-family: var(--font-body);
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 700;
    color: var(--text-primary);
    letter-spacing: -0.02em;
}
.au-values-pills {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    justify-content: center;
}
.au-value-pill {
    display: inline-flex;
    align-items: center;
    padding: 0.85rem 1.75rem;
    background: #fff;
    border: 1px solid rgba(200,168,75,0.35);
    border-radius: 999px;
    font-size: 0.88rem;
    font-weight: 600;
    color: #0b1f3a;
    letter-spacing: 0.02em;
    transition: all 0.3s ease;
    white-space: nowrap;
}
.au-value-pill:hover {
    background: var(--gold);
    border-color: var(--gold);
    color: #0b1f3a;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(200,168,75,0.3);
}

/* --- SOLID BG SECTIONS above curved lines --- */
.au-overview, .au-pillars, .au-values-section, .au-news, .au-events, .au-insta { position: relative; z-index: 2; }
.au-values-section, .au-events { background: var(--bg-secondary); }

/* --- RESPONSIVE --- */
@media (max-width: 1024px) {
    .au-stats-grid { grid-template-columns: repeat(2, 1fr); }
    .au-overview-inner { grid-template-columns: 1fr; }
    .au-overview-photo { min-height: 340px; }
    .au-pillars-header { grid-template-columns: 1fr; gap: 1rem; }
    .au-pillar-row { grid-template-columns: 180px 1fr; }
    .au-values-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
    .au-hero { min-height: 85vh; }
    .au-hero-content { max-width: 80%; }
    .au-cert-strip-inner { flex-direction: column; align-items: flex-start; gap: 1.5rem; }
    .au-cert-strip-label { border-right: none; border-bottom: 1px solid rgba(11,31,58,0.08); padding-right: 0; padding-bottom: 1.25rem; width: 100%; }
    .au-cert-strip-items { flex-wrap: wrap; width: 100%; }
    .au-cert-strip-item { flex: 1 1 45%; border-right: none; border-bottom: 1px solid rgba(11,31,58,0.07); }
    .au-stats-grid { grid-template-columns: 1fr 1fr; }
    .au-pillar-row { grid-template-columns: 1fr; gap: 0.5rem; }
    .au-cta-actions { flex-direction: column; align-items: center; }
}
@media (max-width: 480px) {
    .au-values-grid { grid-template-columns: 1fr; }
    .au-vm-cert-grid { gap: 0.75rem; }
    .au-vm-cert-item { flex: 1 1 calc(50% - 0.75rem); }
}

/* --- OUR TEAM GATEWAY --- */
.au-team-gateway {
    background: linear-gradient(135deg, #0b1f3a 0%, #1a3556 100%);
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
    text-align: center;
    position: relative;
    z-index: 2;
}
.au-team-gateway::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: radial-gradient(circle, rgba(200,168,75,0.06) 1px, transparent 1px);
    background-size: 28px 28px;
    pointer-events: none;
}
.au-team-gateway-inner {
    max-width: 780px;
    margin: 0 auto;
    position: relative;
}
.au-team-eyebrow {
    font-size: 0.72rem;
    font-weight: 700;
    letter-spacing: 0.28em;
    text-transform: uppercase;
    color: var(--gold);
    margin-bottom: 1.75rem;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.75rem;
}
.au-team-eyebrow::before,
.au-team-eyebrow::after {
    content: '';
    width: 32px;
    height: 1px;
    background: var(--gold);
    opacity: 0.6;
}
.au-team-body {
    font-size: clamp(1rem, 1.6vw, 1.15rem);
    color: rgba(255,255,255,0.82);
    line-height: 1.8;
    font-weight: 400;
    margin-bottom: 2.5rem;
}

/* --- NEWS / EVENTS / CONNECT ROW HEADER --- */
.au-updates-header {
    max-width: 1400px;
    margin: 0 auto;
    display: flex;
    align-items: stretch;
    gap: 0;
    border-bottom: 1px solid rgba(11,31,58,0.08);
    padding: 0 clamp(1.5rem, 4vw, 3.5rem);
    margin-bottom: clamp(2.5rem, 4vw, 3.5rem);
}
.au-updates-header-item {
    flex: 1;
    padding: 1.5rem 0;
    padding-right: 2rem;
    border-right: 1px solid rgba(11,31,58,0.08);
}
.au-updates-header-item:last-child {
    border-right: none;
    padding-right: 0;
    padding-left: 2rem;
}
.au-updates-header-item:not(:first-child):not(:last-child) {
    padding-left: 2rem;
}

/* --- QUICK FACTS (stat icons redesign) --- */
.au-quick-facts-label {
    text-align: center;
    font-size: 0.68rem;
    font-weight: 700;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: rgba(11,31,58,0.35);
    margin-bottom: 1rem;
    margin-top: clamp(2rem, 4vw, 4rem);
}
.au-stat-icon {
    width: 40px; height: 40px;
    background: rgba(200,168,75,0.15);
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 0.75rem;
    color: var(--gold);
}
.au-stat-icon svg { width: 20px; height: 20px; }
.au-stat-founded { font-family: var(--font-body); font-size: clamp(1.6rem, 2.8vw, 2.5rem); font-weight: 700; color: var(--navy); letter-spacing: -0.02em; line-height: 1; margin-bottom: 0.5rem; }

/* --- CERT LOGOS (trust-mark strip) --- */
.au-cert-badges {
    display: flex;
    flex-wrap: nowrap;
    gap: 0;
    margin-top: 0;
    border-top: 1px solid rgba(11,31,58,0.07);
    background: #fafafa;
}
.au-cert-logo-card {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 0.85rem;
    padding: 2.5rem 2rem;
    flex: 1;
    border-right: 1px solid rgba(11,31,58,0.07);
    transition: background 0.25s;
    text-align: center;
}
.au-cert-logo-card:last-child { border-right: none; }
.au-cert-logo-card:hover { background: #fff; }
.au-cert-logo-card img {
    height: 80px; width: 80px; object-fit: contain;
    display: block; opacity: 0.85;
    transition: opacity 0.25s;
}
.au-cert-logo-card:hover img { opacity: 1; }
.au-cert-logo-card span {
    font-size: 0.62rem; font-weight: 700; text-transform: uppercase;
    letter-spacing: 0.1em; color: var(--navy); line-height: 1.4;
    max-width: 100px;
}
/* --- NEWS SECTION --- */
.au-news {
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
    background: #fff;
}
.au-news-wrap { max-width: 1400px; margin: 0 auto; }
.au-news-header {
    display: flex; align-items: flex-end; justify-content: space-between;
    margin-bottom: clamp(2rem, 4vw, 3rem);
    flex-wrap: wrap; gap: 1rem;
}
.au-news-eyebrow { font-size: 0.72rem; font-weight: 700; letter-spacing: 0.18em; text-transform: uppercase; color: var(--gold); margin-bottom: 0.75rem; }
.au-news-title { font-family: var(--font-body); font-size: clamp(2rem, 4vw, 3rem); font-weight: 700; color: var(--text-primary); letter-spacing: -0.02em; line-height: 1.1; }
.au-news-title em { font-style: normal; color: var(--gold); }
.au-news-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem; }
.au-news-card { background: #fff; border: 1px solid rgba(11,31,58,0.07); overflow: hidden; transition: box-shadow 0.3s, transform 0.3s; }
.au-news-card:hover { box-shadow: 0 8px 32px rgba(11,31,58,0.1); transform: translateY(-4px); }
.au-news-card-img-wrap { position: relative; aspect-ratio: 16/9; overflow: hidden; }
.au-news-card-img-wrap img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.5s; }
.au-news-card:hover .au-news-card-img-wrap img { transform: scale(1.05); }
.au-news-badge { position: absolute; top: 1rem; left: 1rem; background: var(--gold); color: var(--navy); font-size: 0.62rem; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; padding: 0.3rem 0.7rem; }
.au-news-card-body { padding: 1.5rem; }
.au-news-card-title { font-family: var(--font-body); font-size: 1rem; font-weight: 700; color: var(--text-primary); line-height: 1.4; margin-bottom: 0.75rem; }
.au-news-card-excerpt { font-size: 0.85rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 1.25rem; }
.au-news-card-link { display: inline-flex; align-items: center; gap: 0.4rem; font-size: 0.72rem; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; color: var(--gold); text-decoration: none; transition: gap 0.3s; }
.au-news-card-link:hover { gap: 0.7rem; }
.au-news-card-link svg { width: 14px; height: 14px; transition: transform 0.3s; }
.au-news-card-link:hover svg { transform: translateX(3px); }

/* --- EVENTS SECTION --- */
.au-events {
    padding: clamp(3rem, 6vh, 5rem) clamp(1.5rem, 4vw, 3.5rem);
    background: var(--bg-secondary);
}
.au-events-wrap { max-width: 1400px; margin: 0 auto; }
.au-events-inner { background: #fff; border-radius: 12px; padding: clamp(2rem, 4vw, 3rem); }
.au-events-eyebrow { font-size: 0.72rem; font-weight: 700; letter-spacing: 0.18em; text-transform: uppercase; color: var(--gold); margin-bottom: 0.5rem; }
.au-events-title { font-family: var(--font-body); font-size: clamp(1.4rem, 2.5vw, 2rem); font-weight: 700; color: var(--text-primary); margin-bottom: 2rem; }
.au-events-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem; }
.au-event-card { border: 1px solid rgba(11,31,58,0.07); border-radius: 8px; overflow: hidden; }
.au-event-logo-wrap { background: var(--bg-secondary); padding: 1.5rem; display: flex; align-items: center; justify-content: center; min-height: 100px; }
.au-event-logo-wrap img { max-height: 52px; max-width: 100%; object-fit: contain; }
.au-event-info { padding: 1rem 1.25rem 1.25rem; }
.au-event-name { font-size: 0.95rem; font-weight: 700; color: var(--text-primary); margin-bottom: 0.35rem; }
.au-event-meta { font-size: 0.78rem; color: var(--text-muted); }

/* --- INSTAGRAM SECTION --- */
.au-insta {
    padding: clamp(5rem, 10vh, 8rem) clamp(1.5rem, 4vw, 3.5rem);
    background: #fff;
    color: var(--navy);
}
.au-insta-wrap { max-width: 1400px; margin: 0 auto; }
.au-insta-header {
    display: flex; align-items: center; justify-content: space-between;
    flex-wrap: wrap; gap: 1rem;
    margin-bottom: clamp(2rem, 4vw, 3rem);
}
.au-insta-eyebrow {
    display: flex; align-items: center; gap: 0.5rem;
    font-size: 0.72rem; font-weight: 700; letter-spacing: 0.15em;
    text-transform: uppercase; color: var(--gold); margin-bottom: 0.5rem;
}
.au-insta-eyebrow svg { width: 16px; height: 16px; flex-shrink: 0; }
.au-insta-title { font-family: var(--font-body); font-size: clamp(1.8rem, 3vw, 2.5rem); font-weight: 700; letter-spacing: -0.02em; line-height: 1.1; color: var(--navy); }
.au-insta-title em { font-style: normal; color: var(--gold); }
.au-insta-follow { align-self: flex-start; margin-top: 0.5rem; }
.au-insta-grid {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 4px;
}
.au-insta-tile {
    aspect-ratio: 1/1;
    overflow: hidden;
    position: relative;
    display: block;
}
.au-insta-tile img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.5s; }
.au-insta-tile:hover img { transform: scale(1.08); }
.au-insta-overlay {
    position: absolute; inset: 0;
    background: rgba(11,31,58,0.55);
    display: flex; align-items: center; justify-content: center;
    opacity: 0; transition: opacity 0.3s;
}
.au-insta-overlay svg { width: 28px; height: 28px; color: #fff; }
.au-insta-tile:hover .au-insta-overlay { opacity: 1; }

@media (max-width: 900px) {
    .au-news-grid { grid-template-columns: 1fr; }
    .au-events-grid { grid-template-columns: 1fr; }
    .au-event-info { text-align: center; }
    .au-news-header { flex-direction: column; align-items: flex-start; }
    .au-insta-grid { grid-template-columns: repeat(3, 1fr); }
    .au-insta-header { flex-direction: column; align-items: flex-start; }
}
@media (max-width: 768px) {
    .au-hero { min-height: 85vh; }
    .au-hero-stats { grid-template-columns: repeat(2, 1fr); }
    .au-hero-stat { padding: 1.25rem 1rem; }
    .au-cert-badges { flex-wrap: wrap; }
    .au-cert-logo-card { flex: 1 1 50%; min-width: 0; padding: 1.5rem 1rem; border-bottom: 1px solid rgba(11,31,58,0.07); }
    .au-cert-logo-card img { height: 60px; width: 60px; }
    /* Instagram: reduce gap, fix invisible white button on white bg */
    .au-insta-header { margin-bottom: 1rem; }
    .au-insta-follow { color: #0b1f3a; border-color: rgba(11,31,58,0.25); }
}
@media (max-width: 480px) {
    .au-insta-grid { grid-template-columns: repeat(2, 1fr); }
    .au-hero-stats { grid-template-columns: repeat(2, 1fr); }
}
</style>

<main class="page-about">

    <!-- Curved lines animation layer — elegant flowing gold arcs -->
    <div class="au-curved-lines" aria-hidden="true">
        <svg viewBox="0 0 1440 900" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
            <!-- Curve 1: top-left corner sweeping down to right edge -->
            <path class="au-cl-track" d="M0,120 C180,80 420,320 720,400 Q1000,460 1440,280"/>
            <path class="au-cl-flow au-cl-a1" d="M0,120 C180,80 420,320 720,400 Q1000,460 1440,280"/>
            <!-- Curve 2: right edge arcing down to lower-left -->
            <path class="au-cl-track" d="M1440,50 C1100,200 850,140 600,350 Q350,520 0,680"/>
            <path class="au-cl-flow au-cl-a2" d="M1440,50 C1100,200 850,140 600,350 Q350,520 0,680"/>
            <!-- Curve 3: bottom-left rising to mid-right -->
            <path class="au-cl-track" d="M0,850 C250,700 500,750 800,550 Q1050,400 1440,480"/>
            <path class="au-cl-flow au-cl-a3" d="M0,850 C250,700 500,750 800,550 Q1050,400 1440,480"/>
            <!-- Curve 4: upper-center dropping to lower-right -->
            <path class="au-cl-track" d="M400,0 C500,200 700,350 950,300 Q1200,260 1440,600"/>
            <path class="au-cl-flow au-cl-a4" d="M400,0 C500,200 700,350 950,300 Q1200,260 1440,600"/>
            <!-- Curve 5: lower-right sweeping up to upper-left -->
            <path class="au-cl-track" d="M1440,750 C1150,650 900,800 600,600 Q300,420 0,300"/>
            <path class="au-cl-flow au-cl-a5" d="M1440,750 C1150,650 900,800 600,600 Q300,420 0,300"/>
        </svg>
    </div>

    <!-- ================================================
         HERO — Full-width cinematic: solid-left overlay, video right
         ================================================ -->
    <section class="au-hero">
        <!-- Video background (full coverage) -->
        <div class="au-hero-video-wrap">
            <video autoplay muted loop playsinline poster="<?php echo $uri; ?>/assets/images/facility-aerial.jpg">
                <source src="<?php echo $uri; ?>/assets/videos/about-hero.mp4" type="video/mp4">
            </video>
        </div>
        <!-- Solid left → transparent right overlay -->
        <div class="au-hero-overlay"></div>

        <!-- Content: left-aligned, spreads to ~62% width -->
        <div class="au-hero-inner">
            <div class="au-hero-content">
                <div class="au-hero-breadcrumb">
                    <a href="/">Home</a>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                    <a href="#">Company</a>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                    <span class="active">About Us</span>
                </div>
                <div class="au-hero-badge">About Us</div>
                <h1 class="au-hero-title">Powering Critical <em>Electrical Infrastructure</em> Worldwide</h1>
                <div class="au-hero-body">
                    <p>Founded with a vision to reduce India's dependence on imported electrical insulation products, Umang Boards Limited has evolved into a globally trusted manufacturing partner serving power utilities, transformer OEMs, and industrial equipment manufacturers.</p>
                    <p>We manufacture high-performance cellulose insulation materials, precision super enameled and paper-coated winding wires in copper and aluminum, along with specialized insulating chemicals, delivering integrated solutions for critical electrical applications.</p>
                    <p>Serving industries across six continents, we support infrastructure that powers economies, industries, and emerging energy systems.</p>
                </div>
            </div>
        </div>

        <!-- Stats strip — frosted glass bar at bottom of hero -->
        <div class="au-hero-stats">
            <div class="au-hero-stat">
                <div class="au-hero-stat-num">1999</div>
                <div class="au-hero-stat-label">Established</div>
            </div>
            <div class="au-hero-stat">
                <div class="au-hero-stat-num">27+</div>
                <div class="au-hero-stat-label">Years of Excellence</div>
            </div>
            <div class="au-hero-stat">
                <div class="au-hero-stat-num">500+</div>
                <div class="au-hero-stat-label">Workforce</div>
            </div>
            <div class="au-hero-stat">
                <div class="au-hero-stat-num">15+</div>
                <div class="au-hero-stat-label">Countries Served</div>
            </div>
        </div>
    </section>

    <!-- ================================================
         CERTIFICATIONS TRUST STRIP — white bar below hero
         ================================================ -->
    <div class="au-cert-strip">
        <div class="au-cert-strip-inner">
            <div class="au-cert-strip-label">
                Built on Trust.<br><em>Certified for Excellence.</em>
            </div>
            <div class="au-cert-strip-items">
                <div class="au-cert-strip-item"
                     data-cert-img="<?php echo $uri; ?>/assets/images/cert-iso-9001.png"
                     data-cert-title="ISO 9001:2015"
                     data-cert-desc="Quality Management System — ensuring consistent product quality across all manufacturing operations.">
                    <img src="<?php echo $uri; ?>/assets/images/cert-iso-9001.png" alt="ISO 9001:2015">
                    <div class="au-cert-strip-item-text">
                        <strong>ISO 9001:2015</strong>
                        <span>Quality Management</span>
                    </div>
                    <span class="cert-click-hint">Click to view</span>
                </div>
                <div class="au-cert-strip-item"
                     data-cert-img="<?php echo $uri; ?>/assets/images/cert-iso-14001.png"
                     data-cert-title="ISO 14001:2015"
                     data-cert-desc="Environmental Management System — reflecting our commitment to responsible and sustainable manufacturing.">
                    <img src="<?php echo $uri; ?>/assets/images/cert-iso-14001.png" alt="ISO 14001:2015">
                    <div class="au-cert-strip-item-text">
                        <strong>ISO 14001:2015</strong>
                        <span>Environmental Management</span>
                    </div>
                    <span class="cert-click-hint">Click to view</span>
                </div>
                <div class="au-cert-strip-item"
                     data-cert-img="<?php echo $uri; ?>/assets/images/cert-iso-45001.png"
                     data-cert-title="ISO 45001:2018"
                     data-cert-desc="Occupational Health &amp; Safety Management — prioritising the wellbeing of every member of our workforce.">
                    <img src="<?php echo $uri; ?>/assets/images/cert-iso-45001.png" alt="ISO 45001:2018">
                    <div class="au-cert-strip-item-text">
                        <strong>ISO 45001:2018</strong>
                        <span>Occupational Health &amp; Safety</span>
                    </div>
                    <span class="cert-click-hint">Click to view</span>
                </div>
                <div class="au-cert-strip-item"
                     data-cert-img="<?php echo $uri; ?>/assets/images/cert-nabl.png"
                     data-cert-title="NABL Accredited Laboratory"
                     data-cert-desc="Our in-house testing laboratory is NABL accredited under IEC/ISO 17025 for dielectric and mechanical testing of insulation materials.">
                    <img src="<?php echo $uri; ?>/assets/images/cert-nabl.png" alt="NABL Accredited">
                    <div class="au-cert-strip-item-text">
                        <strong>NABL Accredited</strong>
                        <span>In-house Testing Laboratory</span>
                    </div>
                    <span class="cert-click-hint">Click to view</span>
                </div>
                <div class="au-cert-strip-item"
                     data-cert-img="<?php echo $uri; ?>/assets/images/cert-pgcil-400kv.png"
                     data-cert-title="Approved by PGCIL"
                     data-cert-desc="Approved by Power Grid Corporation of India Ltd for 400 kV class — India's highest voltage class approval for insulation manufacturers.">
                    <img src="<?php echo $uri; ?>/assets/images/cert-pgcil-400kv.png" alt="Approved by PGCIL">
                    <div class="au-cert-strip-item-text">
                        <strong>Approved by PGCIL</strong>
                        <span>400 kV Class</span>
                    </div>
                    <span class="cert-click-hint">Click to view</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Cert lightbox modal -->
    <div class="au-cert-lightbox" id="certLightbox" role="dialog" aria-modal="true">
        <div class="au-cert-lightbox-inner">
            <button class="au-cert-lb-close" id="certLbClose" aria-label="Close">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 6L6 18M6 6l12 12"/></svg>
            </button>
            <img class="au-cert-lb-img" id="certLbImg" src="" alt="">
            <div class="au-cert-lb-title" id="certLbTitle"></div>
            <div class="au-cert-lb-desc" id="certLbDesc"></div>
        </div>
    </div>

    <script>
    (function(){
        var lb = document.getElementById('certLightbox');
        var lbImg = document.getElementById('certLbImg');
        var lbTitle = document.getElementById('certLbTitle');
        var lbDesc = document.getElementById('certLbDesc');
        var lbClose = document.getElementById('certLbClose');

        document.querySelectorAll('.au-cert-strip-item').forEach(function(el){
            el.addEventListener('click', function(){
                lbImg.src = el.dataset.certImg;
                lbImg.alt = el.dataset.certTitle;
                lbTitle.textContent = el.dataset.certTitle;
                lbDesc.innerHTML = el.dataset.certDesc;
                lb.classList.add('is-open');
                document.body.style.overflow = 'hidden';
            });
        });

        function closeLb(){
            lb.classList.remove('is-open');
            document.body.style.overflow = '';
        }
        lbClose.addEventListener('click', closeLb);
        lb.addEventListener('click', function(e){ if(e.target === lb) closeLb(); });
        document.addEventListener('keydown', function(e){ if(e.key === 'Escape') closeLb(); });
    })();
    </script>

    <!-- ================================================
         CORPORATE OVERVIEW — Photo + Editorial Split
         ================================================ -->
    <section class="au-overview">
        <div class="au-overview-inner">
            <!-- Left: facility photo -->
            <div class="au-overview-photo">
                <img src="<?php echo $uri; ?>/assets/images/mission-operational-excellence.jpg" alt="Umang Boards Manufacturing Facility">
                <div class="au-overview-photo-overlay"></div>
            </div>
            <!-- Right: editorial content -->
            <div class="au-overview-content">
                <div class="au-overview-eyebrow">Corporate Overview</div>
                <h2 class="au-overview-heading">From Jaipur to the <em>World</em></h2>
                <div class="au-overview-body-text">
                    <p>What began in 1999 as a focused manufacturing venture has grown into a trusted name in the power and energy sector. At Umang Boards Limited, we build the components that quietly keep electrical systems running: from high-performance cellulose insulation materials to precision super enameled and paper-coated winding wires in copper and aluminum, along with specialized insulating chemicals.</p>
                    <p>Headquartered in Jaipur, India, our journey has been shaped by continuous investment in advanced manufacturing, skilled people, and rigorous in-house testing. With two modern production facilities and globally recognized ISO certifications, we combine technical depth with disciplined quality systems, ensuring every product that leaves our floor is built for reliability.</p>
                </div>
                <div class="au-overview-callout">
                    <div class="au-overview-callout-label">Local Roots, Global Reach</div>
                    <h4>Manufacturing from Jaipur, Rajasthan</h4>
                    <p>From our manufacturing base in Jaipur, Rajasthan, we serve customers across India and in over 15 countries worldwide, building long-term partnerships through consistent quality and dependable delivery.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- ================================================
         VISION, MISSION & PILLARS — Tab Slider
         ================================================ -->
    <section class="au-vm" id="auVisionMission">
        <div class="au-vm-wrap">
            <div class="au-vm-header">
                <div class="au-vm-eyebrow">Vision &amp; Mission</div>
                <h2 class="au-vm-title">Where We're Going &amp; How We <em>Get There</em></h2>
            </div>
            <div class="au-vm-body">
                <!-- LEFT: Tab Navigation -->
                <div class="au-vm-tabs" id="auVmTabs">
                    <div class="au-vm-tab active" data-panel="0">
                        <span class="au-vm-tab-num">01</span>
                        <span class="au-vm-tab-label">Vision</span>
                    </div>
                    <div class="au-vm-tab" data-panel="1">
                        <span class="au-vm-tab-num">02</span>
                        <span class="au-vm-tab-label">Mission</span>
                    </div>
                    <div class="au-vm-tab" data-panel="2">
                        <span class="au-vm-tab-num">03</span>
                        <span class="au-vm-tab-label">Power &amp; Distribution</span>
                    </div>
                    <div class="au-vm-tab" data-panel="3">
                        <span class="au-vm-tab-num">04</span>
                        <span class="au-vm-tab-label">Emerging Applications</span>
                    </div>
                    <div class="au-vm-tab" data-panel="4">
                        <span class="au-vm-tab-num">05</span>
                        <span class="au-vm-tab-label">Operational Excellence</span>
                    </div>
                    <div class="au-vm-tab" data-panel="5">
                        <span class="au-vm-tab-num">06</span>
                        <span class="au-vm-tab-label">Strategic Partnerships</span>
                    </div>
                    <div class="au-vm-tab" data-panel="6">
                        <span class="au-vm-tab-num">07</span>
                        <span class="au-vm-tab-label">Responsible Growth</span>
                    </div>
                    <div class="au-vm-tab" data-panel="7">
                        <span class="au-vm-tab-num">08</span>
                        <span class="au-vm-tab-label">Innovation Leadership</span>
                    </div>
                    <div class="au-vm-tab" data-panel="8">
                        <span class="au-vm-tab-num">09</span>
                        <span class="au-vm-tab-label">Certifications</span>
                    </div>
                </div>

                <!-- RIGHT: Panels -->
                <div class="au-vm-panel-wrap" id="auVmPanels">

                    <!-- 01: Vision -->
                    <div class="au-vm-panel active">
                        <div class="au-vm-panel-img">
                            <img src="<?php echo $uri; ?>/assets/images/mission-vision.jpg" alt="Vision">
                        </div>
                        <div class="au-vm-panel-content">
                            <div class="au-vm-panel-num">01</div>
                            <div class="au-vm-panel-tag">Vision</div>
                            <h3 class="au-vm-panel-title">The Global Benchmark in Electrical Insulation</h3>
                            <p class="au-vm-panel-desc">To be the world's most trusted partner in electrical power infrastructure, leading the transformation of global energy systems through innovative insulation and winding solutions. We envision a future where our products spanning from distribution transformers to cutting-edge 1200 kV ultra-high voltage systems form the backbone of reliable, sustainable power networks across continents.</p>
                            <p class="au-vm-panel-desc">We aspire to be the innovation partner that transformer manufacturers, renewable energy developers, and electrical equipment makers turn to when they need solutions that don't yet exist - a globally recognized brand synonymous with quality, reliability, and innovation, proudly Made in India for the world.</p>
                        </div>
                    </div>

                    <!-- 02: Mission -->
                    <div class="au-vm-panel">
                        <div class="au-vm-panel-img">
                            <img src="<?php echo $uri; ?>/assets/images/mission-overview.jpg" alt="Mission">
                        </div>
                        <div class="au-vm-panel-content">
                            <div class="au-vm-panel-num">02</div>
                            <div class="au-vm-panel-tag">Mission</div>
                            <h3 class="au-vm-panel-title">World-Class Solutions That Power Critical Infrastructure</h3>
                            <p class="au-vm-panel-desc">To design, manufacture, and deliver world-class electrical insulation and winding wire solutions that power critical infrastructure and enable technological progress. We serve as the essential link in the power value chain, ensuring electricity flows safely and reliably from generation to end-use.</p>
                            <p class="au-vm-panel-desc">From 1200 kV transformers to renewable energy, data centers, and industrial motors - we leverage state-of-the-art manufacturing, rigorous quality systems, and sustainable practices to empower global infrastructure with reliability and a can-do attitude.</p>
                        </div>
                    </div>

                    <!-- 03: Power & Distribution -->
                    <div class="au-vm-panel">
                        <div class="au-vm-panel-img">
                            <img src="<?php echo $uri; ?>/assets/images/mission-power-distribution.jpg" alt="Power and Distribution">
                        </div>
                        <div class="au-vm-panel-content">
                            <div class="au-vm-panel-num">03</div>
                            <div class="au-vm-panel-tag">In Power &amp; Distribution</div>
                            <h3 class="au-vm-panel-title">Powering Grids Up to 1200 kV</h3>
                            <p class="au-vm-panel-desc">We manufacture high-performance pressboards, machined components, moulded components, insulation papers, and winding wires for power transformers up to 1200 kV and distribution transformers, enabling utilities and grid operators to deliver stable electricity worldwide.</p>
                        </div>
                    </div>

                    <!-- 04: Emerging Applications -->
                    <div class="au-vm-panel">
                        <div class="au-vm-panel-img">
                            <img src="<?php echo $uri; ?>/assets/images/mission-emerging-applications.jpg" alt="Emerging Applications">
                        </div>
                        <div class="au-vm-panel-content">
                            <div class="au-vm-panel-num">04</div>
                            <div class="au-vm-panel-tag">In Emerging Applications</div>
                            <h3 class="au-vm-panel-title">Enabling the Digital &amp; Clean Energy Economy</h3>
                            <p class="au-vm-panel-desc">We support the digital economy through specialized insulation for data center transformers, contribute to the clean energy transition through renewable energy components, and enable industrial progress through products for electric motors, stabilizers, and electronic applications.</p>
                        </div>
                    </div>

                    <!-- 05: Operational Excellence -->
                    <div class="au-vm-panel">
                        <div class="au-vm-panel-img">
                            <img src="<?php echo $uri; ?>/assets/images/mission-operational-excellence.jpg" alt="Operational Excellence">
                        </div>
                        <div class="au-vm-panel-content">
                            <div class="au-vm-panel-num">05</div>
                            <div class="au-vm-panel-tag">Through Operational Excellence</div>
                            <h3 class="au-vm-panel-title">World-Class Manufacturing Standards</h3>
                            <p class="au-vm-panel-desc">We leverage state-of-the-art manufacturing technology, rigorous quality management systems, and maintain zero liquid discharge (ZLD) and sustainable practices including solar energy and biomass fuels, delivering products that meet the highest international standards.</p>
                        </div>
                    </div>

                    <!-- 06: Strategic Partnerships -->
                    <div class="au-vm-panel">
                        <div class="au-vm-panel-img">
                            <img src="<?php echo $uri; ?>/assets/images/mission-strategic-partnerships.jpg" alt="Strategic Partnerships">
                        </div>
                        <div class="au-vm-panel-content">
                            <div class="au-vm-panel-num">06</div>
                            <div class="au-vm-panel-tag">Through Strategic Partnerships</div>
                            <h3 class="au-vm-panel-title">Long-Term Relationships, Shared Success</h3>
                            <p class="au-vm-panel-desc">We build long-term relationships with customers, suppliers, and technology partners, creating value through collaborative innovation, reliable supply chains, and responsive customer service. Our success is measured by our customers' success in their markets.</p>
                        </div>
                    </div>

                    <!-- 07: Responsible Growth -->
                    <div class="au-vm-panel">
                        <div class="au-vm-panel-img">
                            <img src="<?php echo $uri; ?>/assets/images/mission-responsible-growth.jpg" alt="Responsible Growth">
                        </div>
                        <div class="au-vm-panel-content">
                            <div class="au-vm-panel-num">07</div>
                            <div class="au-vm-panel-tag">Through Responsible Growth</div>
                            <h3 class="au-vm-panel-title">Growth That Gives Back</h3>
                            <p class="au-vm-panel-desc">We are committed to sustainable business practices that protect the environment, support local communities through the Dhanuka Foundation, and create value for all stakeholders, guided by principles of responsible manufacturing, ethical business conduct, and positive social impact.</p>
                        </div>
                    </div>

                    <!-- 08: Innovation Leadership -->
                    <div class="au-vm-panel">
                        <div class="au-vm-panel-img">
                            <img src="<?php echo $uri; ?>/assets/images/mission-innovation-leadership.jpg" alt="Innovation Leadership">
                        </div>
                        <div class="au-vm-panel-content">
                            <div class="au-vm-panel-num">08</div>
                            <div class="au-vm-panel-tag">Through Innovation Leadership</div>
                            <h3 class="au-vm-panel-title">R&amp;D at the Frontier of Electrical Engineering</h3>
                            <p class="au-vm-panel-desc">We invest in R&amp;D to anticipate market needs, develop next-generation products, and solve complex technical challenges. Our engineering teams create customized solutions that improve performance, reduce costs, and enable new applications in the rapidly evolving electrical industry.</p>
                        </div>
                    </div>

                    <!-- 09: Certifications -->
                    <div class="au-vm-panel au-vm-panel-certs">
                        <div class="au-vm-cert-wrap">
                            <div class="au-vm-panel-num">09</div>
                            <div class="au-vm-panel-tag">Our Accreditations</div>
                            <h3 class="au-vm-panel-title">Certified to the World's Highest Standards</h3>
                            <p class="au-vm-panel-desc">Every product we manufacture is backed by internationally recognized quality, safety, and environmental management certifications, reflecting our commitment to excellence, reliability, and responsible operations.</p>
                            <div class="au-vm-cert-grid">
                                <div class="au-vm-cert-item">
                                    <img src="<?php echo $uri; ?>/assets/images/cert-nabl.png" alt="NABL Accredited Laboratories">
                                    <span>NABL Accredited Laboratories</span>
                                </div>
                                <div class="au-vm-cert-item">
                                    <img src="<?php echo $uri; ?>/assets/images/cert-iso-9001.png" alt="ISO 9001 Certified">
                                    <span>ISO 9001 Certified</span>
                                </div>
                                <div class="au-vm-cert-item">
                                    <img src="<?php echo $uri; ?>/assets/images/cert-iso-14001.png" alt="ISO 14001 Certified">
                                    <span>ISO 14001 Certified</span>
                                </div>
                                <div class="au-vm-cert-item">
                                    <img src="<?php echo $uri; ?>/assets/images/cert-iso-45001.png" alt="ISO 45001 Certified">
                                    <span>ISO 45001 Certified</span>
                                </div>
                                <div class="au-vm-cert-item">
                                    <img src="<?php echo $uri; ?>/assets/images/cert-pgcil-400kv.png" alt="PGCIL 400 KV Approved Vendor">
                                    <span>PGCIL 400 KV Approved</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- .au-vm-panel-wrap -->
            </div><!-- .au-vm-body -->

            <!-- Progress bar + auto-advance -->
            <div class="au-vm-progress"><div class="au-vm-progress-bar" id="auVmProgressBar"></div></div>

            <!-- Swipe hint (visible on mobile only) -->
            <div class="au-vm-swipe-hint">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 16l-4-4 4-4M17 8l4 4-4 4"/></svg>
                Swipe to navigate
            </div>

            <!-- Mobile Accordion (replaces tab slider on ≤768px, visibility controlled by CSS) -->
            <div class="au-vm-accordion" id="auVmAccordion">
                <div class="au-vm-acc-item">
                    <div class="au-vm-acc-header active" data-acc="0">
                        <span class="au-vm-acc-num">01</span>
                        <span class="au-vm-acc-label">Vision</span>
                        <svg class="au-vm-acc-chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg>
                    </div>
                    <div class="au-vm-acc-body open">
                        <div class="au-vm-panel-img"><img src="<?php echo $uri; ?>/assets/images/mission-vision.jpg" alt="Vision"></div>
                        <div class="au-vm-panel-content">
                            <div class="au-vm-panel-tag">Vision</div>
                            <h3 class="au-vm-panel-title">The Global Benchmark in Electrical Insulation</h3>
                            <p class="au-vm-panel-desc">To be the world's most trusted partner in electrical power infrastructure, leading the transformation of global energy systems through innovative insulation and winding solutions - from distribution transformers to cutting-edge 1200 kV ultra-high voltage systems.</p>
                            <p class="au-vm-panel-desc">A globally recognized brand synonymous with quality, reliability, and innovation - proudly Made in India for the world.</p>
                        </div>
                    </div>
                </div>
                <div class="au-vm-acc-item">
                    <div class="au-vm-acc-header" data-acc="1">
                        <span class="au-vm-acc-num">02</span>
                        <span class="au-vm-acc-label">Mission</span>
                        <svg class="au-vm-acc-chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg>
                    </div>
                    <div class="au-vm-acc-body">
                        <div class="au-vm-panel-img"><img src="<?php echo $uri; ?>/assets/images/mission-overview.jpg" alt="Mission"></div>
                        <div class="au-vm-panel-content">
                            <div class="au-vm-panel-tag">Mission</div>
                            <h3 class="au-vm-panel-title">World-Class Solutions That Power Critical Infrastructure</h3>
                            <p class="au-vm-panel-desc">To design, manufacture, and deliver world-class electrical insulation and winding wire solutions that power critical infrastructure. From 1200 kV transformers to renewable energy, data centers, and industrial motors - we empower global infrastructure with reliability and a can-do attitude.</p>
                        </div>
                    </div>
                </div>
                <div class="au-vm-acc-item">
                    <div class="au-vm-acc-header" data-acc="2">
                        <span class="au-vm-acc-num">03</span>
                        <span class="au-vm-acc-label">Power &amp; Distribution</span>
                        <svg class="au-vm-acc-chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg>
                    </div>
                    <div class="au-vm-acc-body">
                        <div class="au-vm-panel-img"><img src="<?php echo $uri; ?>/assets/images/mission-power-distribution.jpg" alt="Power and Distribution"></div>
                        <div class="au-vm-panel-content">
                            <div class="au-vm-panel-tag">In Power &amp; Distribution</div>
                            <h3 class="au-vm-panel-title">Powering Grids Up to 1200 kV</h3>
                            <p class="au-vm-panel-desc">We manufacture high-performance pressboards, machined components, moulded components, insulation papers, and winding wires for power transformers up to 1200 kV and distribution transformers, enabling utilities and grid operators to deliver stable electricity worldwide.</p>
                        </div>
                    </div>
                </div>
                <div class="au-vm-acc-item">
                    <div class="au-vm-acc-header" data-acc="3">
                        <span class="au-vm-acc-num">04</span>
                        <span class="au-vm-acc-label">Emerging Applications</span>
                        <svg class="au-vm-acc-chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg>
                    </div>
                    <div class="au-vm-acc-body">
                        <div class="au-vm-panel-img"><img src="<?php echo $uri; ?>/assets/images/mission-emerging-applications.jpg" alt="Emerging Applications"></div>
                        <div class="au-vm-panel-content">
                            <div class="au-vm-panel-tag">In Emerging Applications</div>
                            <h3 class="au-vm-panel-title">Enabling the Digital &amp; Clean Energy Economy</h3>
                            <p class="au-vm-panel-desc">We support the digital economy through specialized insulation for data center transformers, contribute to the clean energy transition through renewable energy components, and enable industrial progress through products for electric motors, stabilizers, and electronic applications.</p>
                        </div>
                    </div>
                </div>
                <div class="au-vm-acc-item">
                    <div class="au-vm-acc-header" data-acc="4">
                        <span class="au-vm-acc-num">05</span>
                        <span class="au-vm-acc-label">Operational Excellence</span>
                        <svg class="au-vm-acc-chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg>
                    </div>
                    <div class="au-vm-acc-body">
                        <div class="au-vm-panel-img"><img src="<?php echo $uri; ?>/assets/images/mission-operational-excellence.jpg" alt="Operational Excellence"></div>
                        <div class="au-vm-panel-content">
                            <div class="au-vm-panel-tag">Through Operational Excellence</div>
                            <h3 class="au-vm-panel-title">World-Class Manufacturing Standards</h3>
                            <p class="au-vm-panel-desc">We leverage state-of-the-art manufacturing technology, rigorous quality management systems, and maintain zero liquid discharge (ZLD) and sustainable practices including solar energy and biomass fuels, delivering products that meet the highest international standards.</p>
                        </div>
                    </div>
                </div>
                <div class="au-vm-acc-item">
                    <div class="au-vm-acc-header" data-acc="5">
                        <span class="au-vm-acc-num">06</span>
                        <span class="au-vm-acc-label">Strategic Partnerships</span>
                        <svg class="au-vm-acc-chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg>
                    </div>
                    <div class="au-vm-acc-body">
                        <div class="au-vm-panel-img"><img src="<?php echo $uri; ?>/assets/images/mission-strategic-partnerships.jpg" alt="Strategic Partnerships"></div>
                        <div class="au-vm-panel-content">
                            <div class="au-vm-panel-tag">Through Strategic Partnerships</div>
                            <h3 class="au-vm-panel-title">Long-Term Relationships, Shared Success</h3>
                            <p class="au-vm-panel-desc">We build long-term relationships with customers, suppliers, and technology partners, creating value through collaborative innovation, reliable supply chains, and responsive customer service. Our success is measured by our customers' success in their markets.</p>
                        </div>
                    </div>
                </div>
                <div class="au-vm-acc-item">
                    <div class="au-vm-acc-header" data-acc="6">
                        <span class="au-vm-acc-num">07</span>
                        <span class="au-vm-acc-label">Responsible Growth</span>
                        <svg class="au-vm-acc-chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg>
                    </div>
                    <div class="au-vm-acc-body">
                        <div class="au-vm-panel-img"><img src="<?php echo $uri; ?>/assets/images/mission-responsible-growth.jpg" alt="Responsible Growth"></div>
                        <div class="au-vm-panel-content">
                            <div class="au-vm-panel-tag">Through Responsible Growth</div>
                            <h3 class="au-vm-panel-title">Growth That Gives Back</h3>
                            <p class="au-vm-panel-desc">We are committed to sustainable business practices that protect the environment, support local communities through the Dhanuka Foundation, and create value for all stakeholders, guided by principles of responsible manufacturing, ethical business conduct, and positive social impact.</p>
                        </div>
                    </div>
                </div>
                <div class="au-vm-acc-item">
                    <div class="au-vm-acc-header" data-acc="7">
                        <span class="au-vm-acc-num">08</span>
                        <span class="au-vm-acc-label">Innovation Leadership</span>
                        <svg class="au-vm-acc-chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg>
                    </div>
                    <div class="au-vm-acc-body">
                        <div class="au-vm-panel-img"><img src="<?php echo $uri; ?>/assets/images/mission-innovation-leadership.jpg" alt="Innovation Leadership"></div>
                        <div class="au-vm-panel-content">
                            <div class="au-vm-panel-tag">Through Innovation Leadership</div>
                            <h3 class="au-vm-panel-title">R&amp;D at the Frontier of Electrical Engineering</h3>
                            <p class="au-vm-panel-desc">We invest in R&amp;D to anticipate market needs, develop next-generation products, and solve complex technical challenges. Our engineering teams create customized solutions that improve performance, reduce costs, and enable new applications in the rapidly evolving electrical industry.</p>
                        </div>
                    </div>
                </div>
                <div class="au-vm-acc-item">
                    <div class="au-vm-acc-header" data-acc="8">
                        <span class="au-vm-acc-num">09</span>
                        <span class="au-vm-acc-label">Certifications</span>
                        <svg class="au-vm-acc-chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg>
                    </div>
                    <div class="au-vm-acc-body">
                        <div class="au-vm-panel-content">
                            <div class="au-vm-panel-tag">Our Accreditations</div>
                            <h3 class="au-vm-panel-title">Certified to the World's Highest Standards</h3>
                            <p class="au-vm-panel-desc">Every product we manufacture is backed by internationally recognized quality, safety, and environmental management certifications, reflecting our commitment to excellence, reliability, and responsible operations.</p>
                            <div class="au-vm-cert-grid">
                                <div class="au-vm-cert-item">
                                    <img src="<?php echo $uri; ?>/assets/images/cert-nabl.png" alt="NABL Accredited Laboratories">
                                    <span>NABL Accredited Laboratories</span>
                                </div>
                                <div class="au-vm-cert-item">
                                    <img src="<?php echo $uri; ?>/assets/images/cert-iso-9001.png" alt="ISO 9001 Certified">
                                    <span>ISO 9001 Certified</span>
                                </div>
                                <div class="au-vm-cert-item">
                                    <img src="<?php echo $uri; ?>/assets/images/cert-iso-14001.png" alt="ISO 14001 Certified">
                                    <span>ISO 14001 Certified</span>
                                </div>
                                <div class="au-vm-cert-item">
                                    <img src="<?php echo $uri; ?>/assets/images/cert-iso-45001.png" alt="ISO 45001 Certified">
                                    <span>ISO 45001 Certified</span>
                                </div>
                                <div class="au-vm-cert-item">
                                    <img src="<?php echo $uri; ?>/assets/images/cert-pgcil-400kv.png" alt="PGCIL 400 KV Approved Vendor">
                                    <span>PGCIL 400 KV Approved</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .au-vm-accordion -->
        </div><!-- .au-vm-wrap -->
    </section>

    <!-- ================================================
         CORE VALUES — Animated grid cards
         ================================================ -->
    <section class="au-values-section" id="auValues">
        <div class="au-values-inner">
            <div class="au-values-header">
                <div class="au-values-eyebrow">What Drives Us</div>
                <h2 class="au-values-title">Our Core Values</h2>
            </div>
            <div class="au-values-pills">
                <span class="au-value-pill">Quality &amp; Excellence</span>
                <span class="au-value-pill">Innovation &amp; Technology</span>
                <span class="au-value-pill">Customer Centricity</span>
                <span class="au-value-pill">Sustainability &amp; Responsibility</span>
                <span class="au-value-pill">Operational Excellence</span>
                <span class="au-value-pill">Integrity &amp; Trust</span>
                <span class="au-value-pill">Teamwork &amp; Dedication</span>
                <span class="au-value-pill">Cost Leadership</span>
            </div>
        </div>
    </section>


    <!-- Board of Directors section removed — see /leadership page -->
    <section class="au-board" id="auBoard" style="display:none">
        <div class="au-board-inner">
            <div class="au-board-header">
                <div class="au-board-header-top">
                    <div>
                        <div class="au-board-eyebrow">Leadership</div>
                        <h2 class="au-board-title">Board of Directors</h2>
                    </div>
                    <p class="au-board-desc">Guided by committed leadership and a clear growth vision, Umang Boards has expanded steadily, strengthening its presence while maintaining operational rigor.</p>
                </div>
                <div style="margin-top:1.5rem;">
                    <a href="/leadership" style="display:inline-flex;align-items:center;gap:0.5rem;font-size:0.82rem;font-weight:700;text-transform:uppercase;letter-spacing:0.12em;color:var(--gold);text-decoration:none;border-bottom:1px solid rgba(212,168,67,0.3);padding-bottom:0.2rem;transition:border-color 0.3s;" onmouseover="this.style.borderColor='var(--gold)'" onmouseout="this.style.borderColor='rgba(212,168,67,0.3)'">
                        View Full Leadership Team
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
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
                            <div class="au-flip-back-bio">Promoter, Chairman &amp; Managing Director with over 26 years of leadership in the power sector. B.Com from University of Rajasthan (1993). Transformed Umang Boards from a regional supplier into a global player with 1200 kV class capabilities.</div>
                            <div class="au-flip-back-actions">
                                <a href="/leadership/#executives" class="au-flip-back-link">View Full Profile <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
                                <a href="#" class="au-flip-linkedin" target="_blank" rel="noopener" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg></a>
                            </div>
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
                            <div class="au-flip-back-bio">B.Sc. Industrial Engineering from Purdue University (2018). Principal Member of BIS ETD-02 Committee. Oversees end-to-end insulation business operations, new product development, and investor relations.</div>
                            <div class="au-flip-back-actions">
                                <a href="/leadership/#executives" class="au-flip-back-link">View Full Profile <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
                                <a href="#" class="au-flip-linkedin" target="_blank" rel="noopener" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg></a>
                            </div>
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
                            <div class="au-flip-back-bio">B.Sc. Business Administration from USC (2022). Oversees Manufacturing Unit II at Kaladera, Jaipur. Manages legal, regulatory, and compliance frameworks with focus on data-driven quality control.</div>
                            <div class="au-flip-back-actions">
                                <a href="/leadership/#executives" class="au-flip-back-link">View Full Profile <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
                                <a href="#" class="au-flip-linkedin" target="_blank" rel="noopener" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg></a>
                            </div>
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
                                <div class="au-flip-front-role">Whole Time Director</div>
                            </div>
                        </div>
                        <div class="au-flip-back">
                            <div class="au-flip-back-avatar"><span>AKD</span></div>
                            <div class="au-flip-back-name">Alok Kumar Dhanuka</div>
                            <div class="au-flip-back-role">Whole Time Director</div>
                            <div class="au-flip-back-divider"></div>
                            <div class="au-flip-back-bio">Promoter and Whole Time Director since incorporation. B.Com from University of Rajasthan (1994). Oversees financial strategy, treasury management, P&amp;L performance, and capital utilization.</div>
                            <div class="au-flip-back-actions">
                                <a href="/leadership/#executives" class="au-flip-back-link">View Full Profile <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
                                <a href="#" class="au-flip-linkedin" target="_blank" rel="noopener" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg></a>
                            </div>
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
                            <div class="au-flip-back-bio">Seasoned banking leader with 39+ years of experience. Former Chief General Manager — Personal Banking at SBI. Currently RBI-appointed Advisor to Abhyudaya Coop Bank Ltd., Mumbai.</div>
                            <div class="au-flip-back-actions">
                                <a href="/leadership/#directors" class="au-flip-back-link">View Full Profile <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
                                <a href="#" class="au-flip-linkedin" target="_blank" rel="noopener" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg></a>
                            </div>
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
                                <div class="au-flip-front-name">Avindra Laddha</div>
                                <div class="au-flip-front-role">Independent Director</div>
                            </div>
                        </div>
                        <div class="au-flip-back">
                            <div class="au-flip-back-avatar"><span>AL</span></div>
                            <div class="au-flip-back-name">Avindra Laddha</div>
                            <div class="au-flip-back-role">Independent Director</div>
                            <div class="au-flip-back-divider"></div>
                            <div class="au-flip-back-bio">Over three decades of experience, formerly Additional Director of Industries for Government of Rajasthan. Key role in formulating Rajasthan MSME Policy 2015 and GI tagging of heritage products.</div>
                            <div class="au-flip-back-actions">
                                <a href="/leadership/#directors" class="au-flip-back-link">View Full Profile <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
                                <a href="#" class="au-flip-linkedin" target="_blank" rel="noopener" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg></a>
                            </div>
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
                            <div class="au-flip-back-actions">
                                <a href="/leadership/#directors" class="au-flip-back-link">View Full Profile <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
                                <a href="#" class="au-flip-linkedin" target="_blank" rel="noopener" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg></a>
                            </div>
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
                            <div class="au-flip-back-actions">
                                <a href="/leadership/#directors" class="au-flip-back-link">View Full Profile <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
                                <a href="#" class="au-flip-linkedin" target="_blank" rel="noopener" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================================================
         OUR TEAM GATEWAY
         ================================================ -->
    <section class="au-team-gateway">
        <div class="au-team-gateway-inner">
            <div class="au-team-eyebrow">Our Team</div>
            <p class="au-team-body">Great companies are shaped by the people who understand them most deeply. At Umang Boards, our leadership team carries between them decades of experience in transformer insulation, manufacturing operations, and business growth - a team that has built this company and continues to steer it with the same conviction it started with. Get to know them.</p>
            <a href="<?php echo home_url('/leadership'); ?>" class="btn-gold">Meet the Team</a>
        </div>
    </section>

    <!-- ================================================
         UPDATES / EVENTS / CONNECT — Row Header
         ================================================ -->
    <div class="au-updates-row-wrap" style="background:#fff;padding-top:clamp(4rem,8vh,7rem);position:relative;z-index:2;">
        <div class="au-updates-header">
            <div class="au-updates-header-item">
                <div class="au-news-eyebrow">Media &amp; News</div>
                <h2 class="au-news-title" style="font-size:clamp(1.6rem,3vw,2.4rem)">Our Latest <em>Updates</em></h2>
            </div>
            <div class="au-updates-header-item">
                <div class="au-news-eyebrow">Schedule</div>
                <h2 class="au-news-title" style="font-size:clamp(1.6rem,3vw,2.4rem)"><em>Events</em></h2>
            </div>
            <div class="au-updates-header-item">
                <div class="au-news-eyebrow">Social</div>
                <h2 class="au-news-title" style="font-size:clamp(1.6rem,3vw,2.4rem)">Connect <em>With Us</em></h2>
            </div>
        </div>
    </div>

    <!-- ================================================
         LATEST NEWS
         ================================================ -->
    <section class="au-news" id="auNews" style="padding-top:0;">
        <div class="au-news-wrap">
            <div class="au-news-grid">
                <article class="au-news-card">
                    <div class="au-news-card-img-wrap">
                        <span class="au-news-badge">Milestone</span>
                        <img src="<?php echo $uri; ?>/assets/images/news-pgcil-approval.jpg" alt="PGCIL 400 KV Approval" loading="lazy">
                    </div>
                    <div class="au-news-card-body">
                        <h3 class="au-news-card-title">Power Grid Corporation India Ltd: 400 KV Class Approval</h3>
                        <p class="au-news-card-excerpt">Approved by PGCIL for supply of pre-compressed pressboard, laminated pressboard and machined &amp; moulded components for up to 400 KV class rating transformers.</p>
                        <a href="<?php echo home_url('/newsroom'); ?>" class="au-news-card-link">Read More <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
                    </div>
                </article>
                <article class="au-news-card">
                    <div class="au-news-card-img-wrap">
                        <span class="au-news-badge">Rating</span>
                        <img src="<?php echo $uri; ?>/assets/images/news-crisil-rating.jpg" alt="CRISIL BBB Rating" loading="lazy">
                    </div>
                    <div class="au-news-card-body">
                        <h3 class="au-news-card-title">CRISIL BBB Investment Grade Rating Achieved</h3>
                        <p class="au-news-card-excerpt">We are now BBB rated by CRISIL, reflecting our strong financial position and creditworthiness in the Indian power sector market.</p>
                        <a href="<?php echo home_url('/newsroom'); ?>" class="au-news-card-link">Read More <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
                    </div>
                </article>
                <article class="au-news-card">
                    <div class="au-news-card-img-wrap">
                        <span class="au-news-badge">Recognition</span>
                        <img src="<?php echo $uri; ?>/assets/images/news-export-house.jpg" alt="Star Export House" loading="lazy">
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

    <!-- ================================================
         UPCOMING EVENTS
         ================================================ -->
    <section class="au-events" id="auEvents">
        <div class="au-events-wrap">
            <div class="au-events-inner">
                <div class="au-events-eyebrow">Upcoming Events</div>
                <h2 class="au-events-title">Connect With Us</h2>
                <div class="au-events-grid">
                    <div class="au-event-card">
                        <div class="au-event-logo-wrap">
                            <img src="<?php echo $uri; ?>/assets/images/event-messe-dusseldorf.png" alt="Messe Dusseldorf" loading="lazy">
                        </div>
                        <div class="au-event-info">
                            <h3 class="au-event-name">Messe Dusseldorf</h3>
                            <p class="au-event-meta">13&ndash;17 Apr 2026 &middot; Booth C82-5</p>
                        </div>
                    </div>
                    <div class="au-event-card">
                        <div class="au-event-logo-wrap">
                            <img src="<?php echo $uri; ?>/assets/images/event-cwieme-berlin.png" alt="CWIEME Berlin" loading="lazy">
                        </div>
                        <div class="au-event-info">
                            <h3 class="au-event-name">CWIEME Berlin</h3>
                            <p class="au-event-meta">19&ndash;21 May 2026 &middot; Booth 27A50</p>
                        </div>
                    </div>
                    <div class="au-event-card">
                        <div class="au-event-logo-wrap">
                            <img src="<?php echo $uri; ?>/assets/images/event-elecrama.png" alt="ELECRAMA 2027" loading="lazy">
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

    <!-- ================================================
         INSTAGRAM FEED
         ================================================ -->
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

            <!-- Instagram grid — replace shortcode with Smash Balloon plugin output once installed -->
            <?php if ( shortcode_exists('instagram-feed') ) : ?>
                <?php echo do_shortcode('[instagram-feed num=6 cols=6 showheader=false showbutton=false showfollow=false]'); ?>
            <?php else : ?>
            <!-- Static placeholder grid until Instagram plugin is connected -->
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
                    <img src="<?php echo $uri; ?>/assets/images/<?php echo $ph[0]; ?>" alt="<?php echo esc_attr($ph[1]); ?>" loading="lazy">
                    <div class="au-insta-overlay">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- ================================================
         INSTAGRAM FEED
         ================================================ -->
    <!-- ================================================
         CTA — Large typography closing section
         ================================================ -->
    <section class="au-cta" id="auCTA">
        <div class="au-cta-line"></div>
        <h2 class="au-cta-title">POWERING THE<br><em>NEXT GENERATION</em></h2>
        <p class="au-cta-desc">Explore our history, meet the team, or get in touch with our sales team for product inquiries.</p>
        <div class="au-cta-actions">
            <a href="/contact-us" class="btn-gold">Partner With Us</a>
            <a href="/company-history" class="btn-outline">View Heritage</a>
        </div>
    </section>

    <!-- Vision Modal -->
    <div class="au-vm-modal-overlay" id="au-vision-modal">
        <div class="au-vm-modal">
            <div class="au-vm-modal-header">
                <h3>Our Vision</h3>
                <button class="au-vm-modal-close">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 6L6 18M6 6l12 12"/></svg>
                </button>
            </div>
            <div class="au-vm-modal-body">
                <p>To be the world's most trusted partner in electrical power infrastructure, leading the transformation of global energy systems through innovative insulation and winding solutions. We envision a future where our products spanning from distribution transformers to cutting-edge 1200 kV ultra-high voltage systems form the backbone of reliable, sustainable power networks across continents.</p>
                <p>As pioneers in the electrical insulation industry, we are committed to advancing the boundaries of what's possible in power transmission and distribution. We see ourselves as enablers of the world's electric future, supporting the global transition to renewable energy, powering smart cities, enabling efficient data centers, and driving the electrification of transportation and industry.</p>
                <p>Our vision extends beyond manufacturing excellence to becoming a catalyst for technological advancement in the electrical sector. We aspire to be the innovation partner that transformer manufacturers, renewable energy developers, and electrical equipment makers turn to when they need solutions that don't yet exist, solutions that we will create through relentless research, development, and engineering excellence.</p>
                <p>We envision Umang Boards Limited as a globally recognized brand synonymous with quality, reliability, and innovation, proudly Made in India for the world, contributing to energy security and sustainable development across emerging and developed markets alike.</p>
            </div>
        </div>
    </div>

    <!-- Mission Modal -->
    <div class="au-vm-modal-overlay" id="au-mission-modal">
        <div class="au-vm-modal">
            <div class="au-vm-modal-header">
                <h3>Our Mission</h3>
                <button class="au-vm-modal-close">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 6L6 18M6 6l12 12"/></svg>
                </button>
            </div>
            <div class="au-vm-modal-body">
                <p>Our mission is to design, manufacture, and deliver world-class electrical insulation and winding wire solutions that power critical infrastructure and enable technological progress across multiple industries. We are dedicated to serving as the essential link in the power value chain, ensuring that electricity flows safely, efficiently, and reliably from generation to end-use applications.</p>
                <p>In Power &amp; Distribution: We manufacture high-performance pressboards, machined components, moulded components, insulation papers, and winding wires for power transformers up to 1200 kV and distribution transformers, enabling utilities and grid operators to deliver stable electricity to communities and businesses worldwide.</p>
                <p>In Emerging Applications: We support the digital economy through specialized insulation solutions for data center transformers, contribute to the clean energy transition through renewable energy transformer components, and enable industrial progress through products for electric motors, stabilizers, and electronic applications.</p>
                <p>Through Operational Excellence: We leverage state-of-the-art manufacturing technology, implement rigorous quality management systems, and maintain zero liquid discharge (ZLD) and sustainable practices including solar energy and biomass fuels.</p>
                <p>Through Strategic Partnerships: We build long-term relationships with customers, suppliers, and technology partners, creating value through collaborative innovation, reliable supply chains, and responsive customer service.</p>
                <p>Through Responsible Growth: We are committed to sustainable business practices that protect the environment, support local communities through the Dhanuka Foundation, and create value for all stakeholders.</p>
                <p>Through Innovation Leadership: We invest in research and development to anticipate market needs, develop next-generation products, and solve complex technical challenges.</p>
            </div>
        </div>
    </div>

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
    UBL.wipeIn('.au-bento-label h2', { delay: 0 });
    fadeUp('.au-bento-story', { y: 30 });
    fadeUp('.au-bento-local', { y: 30, delay: 0.1 });
    gsap.utils.toArray('.au-bento-vm').forEach(function(el, i) {
        fadeUp(el, { y: 30, delay: 0.15 * i });
    });

    // Certification badges
    gsap.utils.toArray('.au-cert-badge').forEach(function(el, i) {
        fadeUp(el, { y: 10, delay: 0.05 * i });
    });

    // Story continuation
    fadeUp('.au-story-accent', { y: 30 });
    gsap.utils.toArray('.au-story-content p').forEach(function(el, i) {
        fadeUp(el, { y: 20, delay: 0.1 * i });
    });

    // Core Values
    fadeUp('.au-values-header', { y: 20 });
    UBL.wipeIn('.au-values-title', { delay: 0.1 });
    gsap.utils.toArray('.au-values-card').forEach(function(el, i) {
        gsap.fromTo(el,
            { opacity: 0, y: 30 },
            { opacity: 1, y: 0, duration: 0.5, ease: EASE, delay: i * 0.06,
              scrollTrigger: { trigger: el, start: 'top 88%' } }
        );
    });

    // Vision Mission — Pin Scroll Slider
    fadeUp('.au-vm-eyebrow', { y: 15 });
    UBL.wipeIn('.au-vm-title', { delay: 0.1 });

    (function() {
        var section   = document.getElementById('auVisionMission');
        var tabs      = Array.from(document.querySelectorAll('.au-vm-tab'));
        var panels    = Array.from(document.querySelectorAll('.au-vm-panel'));
        var bar       = document.getElementById('auVmProgressBar');
        var total     = tabs.length;
        var current   = 0;
        var animating = false;

        if (!section || !tabs.length || !panels.length) return;

        /* ── transition engine ─────────────────────────── */
        function goTo(next, dir) {
            if (animating || next === current) return;
            animating = true;
            dir = (dir === undefined) ? (next > current ? 1 : -1) : dir;

            var outPanel = panels[current];
            var inPanel  = panels[next];
            var outImg   = outPanel.querySelector('.au-vm-panel-img img');
            var inImg    = inPanel.querySelector('.au-vm-panel-img img');
            var inContent = inPanel.querySelector('.au-vm-panel-content');

            // Activate tab
            tabs[current].classList.remove('active');
            tabs[next].classList.add('active');

            // Set incoming panel visible but offset
            gsap.set(inPanel, { opacity: 0, zIndex: 2, position: 'absolute', inset: 0 });
            gsap.set(outPanel, { zIndex: 1 });
            if (inImg) gsap.set(inImg, { x: dir * 80, scale: 1.08 });
            if (inContent) gsap.set(inContent, { y: 30, opacity: 0 });
            inPanel.classList.add('active');

            var tl = gsap.timeline({
                onComplete: function() {
                    outPanel.classList.remove('active');
                    gsap.set(outPanel, { clearProps: 'all' });
                    gsap.set(inPanel, { clearProps: 'position,inset,zIndex' });
                    current = next;
                    animating = false;
                    updateProgressBar();
                }
            });

            tl.to(outPanel, { opacity: 0, duration: 0.35, ease: 'power2.in' }, 0)
              .to(inPanel,  { opacity: 1, duration: 0.45, ease: 'power2.out' }, 0.1)
              .to(inImg,    { x: 0, scale: 1, duration: 0.7, ease: 'power3.out' }, 0.1)
              .to(inContent,{ y: 0, opacity: 1, duration: 0.5, ease: 'power3.out' }, 0.2);
        }

        /* ── progress bar (shows position in sequence) ── */
        function updateProgressBar() {
            if (!bar) return;
            var pct = ((current + 1) / total) * 100;
            gsap.to(bar, { width: pct + '%', duration: 0.4, ease: 'power2.out' });
        }

        /* ── tab click + hover ─────────────────────────── */
        tabs.forEach(function(tab, i) {
            tab.addEventListener('click', function() { goTo(i); });
            tab.addEventListener('mouseenter', function() { goTo(i); });
        });

        /* ── Auto-advance every 5 seconds ── */
        var _autoTimer = setInterval(function() {
            goTo((current + 1) % total, 1);
        }, 5000);
        // Pause auto-advance on user interaction
        section.addEventListener('mouseenter', function() { clearInterval(_autoTimer); });
        section.addEventListener('mouseleave', function() {
            _autoTimer = setInterval(function() { goTo((current + 1) % total, 1); }, 5000);
        });

        /* ── Touch swipe support (mobile + tablet) ─────── */
        var touchStartY = 0;
        var touchStartX = 0;
        section.addEventListener('touchstart', function(e) {
            touchStartY = e.touches[0].clientY;
            touchStartX = e.touches[0].clientX;
        }, { passive: true });
        section.addEventListener('touchend', function(e) {
            var dy = touchStartY - e.changedTouches[0].clientY;
            var dx = touchStartX - e.changedTouches[0].clientX;
            // Only trigger on predominantly vertical or horizontal swipe
            if (Math.abs(dy) < 50 && Math.abs(dx) < 50) return;
            var going = (Math.abs(dy) >= Math.abs(dx)) ? (dy > 0 ? 1 : -1) : (dx > 0 ? 1 : -1);
            var next = current + going;
            if (next >= 0 && next < total) goTo(next, going);
        }, { passive: true });

        /* ── keyboard arrow support ────────────────────── */
        document.addEventListener('keydown', function(e) {
            if (!isInViewport(section)) return;
            if (e.key === 'ArrowDown' || e.key === 'ArrowRight') goTo((current + 1) % total, 1);
            if (e.key === 'ArrowUp'   || e.key === 'ArrowLeft')  goTo((current - 1 + total) % total, -1);
        });

        function isInViewport(el) {
            var r = el.getBoundingClientRect();
            return r.top <= window.innerHeight && r.bottom >= 0;
        }

        updateProgressBar();
    })();

    /* ── Mobile Accordion (Vision/Mission) — built inside gsap block ── */
    // (actual build moved outside gsap guard below)

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
        var _countersRan = false;
        function _startCounters() {
            if (_countersRan) return;
            _countersRan = true;
            runCounters();
        }
        var _cio = new IntersectionObserver(function(entries) {
            if (entries[0].isIntersecting) { _cio.disconnect(); _startCounters(); }
        }, { threshold: 0 });
        _cio.observe(statsSection);
        // Fallback: if already in viewport on load
        window.addEventListener('load', function() {
            setTimeout(function() {
                var r = statsSection.getBoundingClientRect();
                if (r.top < window.innerHeight && r.bottom > 0) _startCounters();
            }, 500);
        });
    }

    // Vision/Mission modals — GSAP animated
    function openModal(overlay) {
        if (!overlay) return;
        var modal = overlay.querySelector('.au-vm-modal');
        overlay.style.display = 'flex';
        document.body.style.overflow = 'hidden';
        gsap.fromTo(overlay, { opacity: 0 }, { opacity: 1, duration: 0.35, ease: 'power2.out' });
        gsap.fromTo(modal,
            { opacity: 0, y: 60, scale: 0.93 },
            { opacity: 1, y: 0, scale: 1, duration: 0.5, ease: 'expo.out', delay: 0.05 }
        );
    }
    function closeModal(overlay) {
        if (!overlay) return;
        var modal = overlay.querySelector('.au-vm-modal');
        gsap.to(modal, { opacity: 0, y: 24, scale: 0.96, duration: 0.25, ease: 'power2.in' });
        gsap.to(overlay, { opacity: 0, duration: 0.3, ease: 'power2.in', delay: 0.05, onComplete: function() {
            overlay.style.display = 'none';
            document.body.style.overflow = '';
        }});
    }
    document.querySelectorAll('.au-vm-panel-link').forEach(function(btn) {
        btn.addEventListener('click', function() {
            openModal(document.getElementById(this.getAttribute('data-modal')));
        });
    });
    document.querySelectorAll('.au-vm-modal-overlay').forEach(function(overlay) {
        overlay.addEventListener('click', function(e) {
            if (e.target === overlay) closeModal(overlay);
        });
    });
    document.querySelectorAll('.au-vm-modal-close').forEach(function(btn) {
        btn.addEventListener('click', function() {
            closeModal(this.closest('.au-vm-modal-overlay'));
        });
    });
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            document.querySelectorAll('.au-vm-modal-overlay').forEach(function(overlay) {
                if (overlay.style.display !== 'none') closeModal(overlay);
            });
        }
    });

    // Trap wheel events inside modal so page doesn't scroll
    document.querySelectorAll('.au-vm-modal-body').forEach(function(body) {
        body.addEventListener('wheel', function(e) { e.stopPropagation(); }, { passive: true });
    });

    // Refresh
    window.addEventListener('load', function() {
        setTimeout(function() { ScrollTrigger.refresh(true); }, 500);
    });
});

/* ── Mobile Accordion toggle (HTML is server-rendered, JS only handles clicks) ── */
document.addEventListener('DOMContentLoaded', function() {
    var accordion = document.getElementById('auVmAccordion');
    if (!accordion) return;
    accordion.addEventListener('click', function(e) {
        var header = e.target.closest('.au-vm-acc-header');
        if (!header) return;
        var item = header.parentElement;
        var body = item.querySelector('.au-vm-acc-body');
        var isOpen = body.classList.contains('open');
        accordion.querySelectorAll('.au-vm-acc-body').forEach(function(b) { b.classList.remove('open'); });
        accordion.querySelectorAll('.au-vm-acc-header').forEach(function(h) { h.classList.remove('active'); });
        if (!isOpen) {
            body.classList.add('open');
            header.classList.add('active');
        }
    });
});
</script>

<?php get_footer(); ?>
