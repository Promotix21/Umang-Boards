/**
 * Interactive World Map — Umang Boards Global Presence
 * Draws animated SVG arcs from India to export markets.
 * No external libraries required.
 */
(function () {
    'use strict';

    // ── Location data ─────────────────────────────────────────────────────────
    // Coordinates as percentages of the map image (0–100).
    // Calibrated against the World-Map.png (equirectangular-like projection).
    // x = (lon + 180) / 360 * 100   |   y = (90 - lat) / 180 * 100
    // Then adjusted for the map's visible crop/padding.

    const INDIA = { x: 71.8, y: 37.2, label: 'Jaipur, Rajasthan', sub: 'HQ & Manufacturing', type: 'hq' };

    const LOCATIONS = [
        // ── Offices ────────────────────────────────────────────────────────
        { x: 78.9, y: 43.5,  label: 'Bangkok, Thailand',  sub: 'Regional Office',     type: 'office' },
        // ── Export Markets ─────────────────────────────────────────────────
        { x: 56.9, y: 36.0,  label: 'UAE / Dubai',        sub: 'Export Market',       type: 'export' },
        { x: 55.0, y: 38.0,  label: 'Saudi Arabia',       sub: 'Export Market',       type: 'export' },
        { x: 57.8, y: 37.8,  label: 'Qatar',              sub: 'Export Market',       type: 'export' },
        { x: 51.5, y: 26.0,  label: 'Germany',            sub: 'Export Market',       type: 'export' },
        { x: 49.7, y: 24.5,  label: 'United Kingdom',     sub: 'Export Market',       type: 'export' },
        { x: 53.0, y: 27.5,  label: 'Italy',              sub: 'Export Market',       type: 'export' },
        { x: 54.2, y: 26.8,  label: 'Poland',             sub: 'Export Market',       type: 'export' },
        { x: 53.8, y: 43.5,  label: 'Egypt',              sub: 'Export Market',       type: 'export' },
        { x: 52.2, y: 52.5,  label: 'Kenya',              sub: 'Export Market',       type: 'export' },
        { x: 51.9, y: 62.5,  label: 'South Africa',       sub: 'Export Market',       type: 'export' },
        { x: 50.2, y: 50.0,  label: 'Nigeria',            sub: 'Export Market',       type: 'export' },
        { x: 79.4, y: 46.5,  label: 'Malaysia',           sub: 'Export Market',       type: 'export' },
        { x: 79.7, y: 49.0,  label: 'Singapore',          sub: 'Export Market',       type: 'export' },
        { x: 81.8, y: 46.5,  label: 'Indonesia',          sub: 'Export Market',       type: 'export' },
        { x: 84.3, y: 29.8,  label: 'Japan',              sub: 'Export Market',       type: 'export' },
        { x: 80.9, y: 34.5,  label: 'China',              sub: 'Export Market',       type: 'export' },
        { x: 74.5, y: 50.5,  label: 'Sri Lanka',          sub: 'Export Market',       type: 'export' },
        { x: 32.5, y: 52.5,  label: 'Brazil',             sub: 'Export Market',       type: 'export' },
        { x: 23.0, y: 31.5,  label: 'USA',                sub: 'Export Market',       type: 'export' },
        { x: 25.8, y: 52.5,  label: 'Mexico',             sub: 'Export Market',       type: 'export' },
    ];

    // ── Colours ───────────────────────────────────────────────────────────────
    const COLOR_HQ     = '#C8A84B';
    const COLOR_OFFICE = '#4CA8E8';
    const COLOR_EXPORT = 'rgba(200,168,75,0.75)';
    const COLOR_ARC_HQ = '#C8A84B';
    const COLOR_ARC_OF = '#4CA8E8';
    const COLOR_ARC_EX = 'rgba(200,168,75,0.5)';

    // ── Helpers ───────────────────────────────────────────────────────────────
    function pct2svg(px, py) {
        return { x: px * 10, y: py * 5 }; // viewBox is 1000×500
    }

    // Quadratic bezier control point — curve away from the map centre
    function controlPoint(x1, y1, x2, y2) {
        const mx = (x1 + x2) / 2;
        const my = (y1 + y2) / 2;
        const dx = x2 - x1;
        const dy = y2 - y1;
        const len = Math.sqrt(dx * dx + dy * dy);
        // Bend upward (toward the top of the map)
        const bend = Math.min(len * 0.35, 120);
        // Normalised perpendicular (rotated 90° CCW)
        const nx = -dy / len;
        const ny =  dx / len;
        return { cx: mx + nx * bend, cy: my + ny * bend - bend * 0.5 };
    }

    // Build a quadratic bezier path string
    function arcPath(x1, y1, x2, y2) {
        const { cx, cy } = controlPoint(x1, y1, x2, y2);
        return `M ${x1} ${y1} Q ${cx} ${cy} ${x2} ${y2}`;
    }

    // Measure approximate arc length (used to set stroke-dasharray)
    function arcLength(x1, y1, x2, y2) {
        const dx = x2 - x1, dy = y2 - y1;
        return Math.sqrt(dx * dx + dy * dy) * 1.4; // approx for quadratic
    }

    // ── Init ──────────────────────────────────────────────────────────────────
    function init() {
        const svg      = document.getElementById('mapSvg');
        const arcsG    = document.getElementById('mapArcs');
        const markersG = document.getElementById('mapMarkers');
        const tooltip  = document.getElementById('mapTooltip');
        const container = document.getElementById('mapContainer');

        if (!svg || !arcsG || !markersG) return;

        const origin = pct2svg(INDIA.x, INDIA.y);

        // ── Draw arcs ─────────────────────────────────────────────────────
        LOCATIONS.forEach((loc, i) => {
            const dest = pct2svg(loc.x, loc.y);
            const d    = arcPath(origin.x, origin.y, dest.x, dest.y);
            const len  = arcLength(origin.x, origin.y, dest.x, dest.y);
            const color = loc.type === 'office' ? COLOR_ARC_OF : COLOR_ARC_EX;

            const path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
            path.setAttribute('d', d);
            path.setAttribute('fill', 'none');
            path.setAttribute('stroke', color);
            path.setAttribute('stroke-width', loc.type === 'office' ? '1.4' : '0.9');
            path.setAttribute('stroke-linecap', 'round');
            path.setAttribute('opacity', loc.type === 'office' ? '0.75' : '0.45');
            path.style.strokeDasharray = len;
            path.style.strokeDashoffset = len;
            path.style.transition = `stroke-dashoffset 1.4s cubic-bezier(0.4,0,0.2,1) ${i * 60}ms`;
            path.dataset.arcIndex = i;
            arcsG.appendChild(path);
        });

        // ── Draw markers ──────────────────────────────────────────────────
        function addMarker(loc, isSelf) {
            const pos   = pct2svg(loc.x, loc.y);
            const g     = document.createElementNS('http://www.w3.org/2000/svg', 'g');
            g.style.cursor = 'pointer';
            g.style.pointerEvents = 'all';

            const isHQ     = loc.type === 'hq';
            const isOffice = loc.type === 'office';
            const color    = isHQ ? COLOR_HQ : isOffice ? COLOR_OFFICE : COLOR_EXPORT;
            const r        = isHQ ? 6 : isOffice ? 4 : 3;

            // Pulse ring with SMIL animate (works in all browsers)
            const pulse = document.createElementNS('http://www.w3.org/2000/svg', 'circle');
            pulse.setAttribute('cx', pos.x);
            pulse.setAttribute('cy', pos.y);
            pulse.setAttribute('r', r);
            pulse.setAttribute('fill', 'none');
            pulse.setAttribute('stroke', color);
            pulse.setAttribute('stroke-width', '1.2');

            const animR = document.createElementNS('http://www.w3.org/2000/svg', 'animate');
            animR.setAttribute('attributeName', 'r');
            animR.setAttribute('from', r);
            animR.setAttribute('to', r + (isHQ ? 18 : 12));
            animR.setAttribute('dur', isHQ ? '2s' : '2.5s');
            animR.setAttribute('repeatCount', 'indefinite');
            pulse.appendChild(animR);

            const animO = document.createElementNS('http://www.w3.org/2000/svg', 'animate');
            animO.setAttribute('attributeName', 'opacity');
            animO.setAttribute('from', '0.7');
            animO.setAttribute('to', '0');
            animO.setAttribute('dur', isHQ ? '2s' : '2.5s');
            animO.setAttribute('repeatCount', 'indefinite');
            pulse.appendChild(animO);

            g.appendChild(pulse);

            // Core dot
            const dot = document.createElementNS('http://www.w3.org/2000/svg', 'circle');
            dot.setAttribute('cx', pos.x);
            dot.setAttribute('cy', pos.y);
            dot.setAttribute('r', r);
            dot.setAttribute('fill', color);
            dot.setAttribute('opacity', isHQ ? '1' : isOffice ? '0.9' : '0.7');
            if (isHQ) dot.setAttribute('filter', 'url(#glow)');
            g.appendChild(dot);

            // HQ ring decoration
            if (isHQ) {
                const ring = document.createElementNS('http://www.w3.org/2000/svg', 'circle');
                ring.setAttribute('cx', pos.x);
                ring.setAttribute('cy', pos.y);
                ring.setAttribute('r', r + 5);
                ring.setAttribute('fill', 'none');
                ring.setAttribute('stroke', COLOR_HQ);
                ring.setAttribute('stroke-width', '1');
                ring.setAttribute('opacity', '0.4');
                g.appendChild(ring);
            }

            // Hover / touch interaction
            const hitTarget = document.createElementNS('http://www.w3.org/2000/svg', 'circle');
            hitTarget.setAttribute('cx', pos.x);
            hitTarget.setAttribute('cy', pos.y);
            hitTarget.setAttribute('r', Math.max(r + 8, 12));
            hitTarget.setAttribute('fill', 'transparent');
            g.appendChild(hitTarget);

            g.addEventListener('mouseenter', (e) => showTooltip(e, loc, container, tooltip, pos));
            g.addEventListener('mouseleave', () => hideTooltip(tooltip));
            g.addEventListener('touchstart', (e) => {
                e.preventDefault();
                showTooltip(e.touches[0], loc, container, tooltip, pos);
                setTimeout(() => hideTooltip(tooltip), 2500);
            }, { passive: false });

            markersG.appendChild(g);
        }

        addMarker(INDIA);
        LOCATIONS.forEach(loc => addMarker(loc));

        // ── Animate arcs on scroll into view ─────────────────────────────
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    arcsG.querySelectorAll('path').forEach(p => {
                        p.style.strokeDashoffset = '0';
                    });
                    observer.disconnect();
                }
            });
        }, { threshold: 0.25 });
        observer.observe(container);
    }

    // ── Tooltip ───────────────────────────────────────────────────────────────
    function showTooltip(e, loc, container, tooltip, svgPos) {
        tooltip.innerHTML = `<div class="tt-name">${loc.label}</div><div class="tt-type">${loc.sub}</div>`;
        tooltip.classList.add('visible');

        // Position tooltip using SVG coordinate → container percentage
        const pctX = (svgPos.x / 1000) * 100;
        const pctY = (svgPos.y / 500) * 100;
        tooltip.style.left = `${pctX}%`;
        tooltip.style.top  = `${pctY}%`;
    }

    function hideTooltip(tooltip) {
        tooltip.classList.remove('visible');
    }

    // ── Run on DOMContentLoaded ───────────────────────────────────────────────
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
