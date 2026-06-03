# Umang Boards Limited — umang.digitaldadi.in

## Project Overview
- **Client:** Umang Boards Limited (UBL) — India's leading manufacturer of cellulose transformer insulation, winding wires, and insulating chemicals
- **Live URL:** https://umang.digitaldadi.in/
- **Stack:** WordPress + custom PHP theme (`ubl-theme`)
- **Agency:** Digital Dadi
- **GitHub:** https://github.com/Promotix21/Umang-Boards (collaborator access)

## Repository Structure
```
umang/
├── wp-theme/ubl-theme/     ← Active WordPress theme (deploy this)
│   ├── front-page.php
│   ├── page-*.php          ← Custom page templates (20+)
│   ├── single-dd_product.php
│   ├── assets/
│   │   ├── css/            ← styles-v2.css, sections-v2.css, product-pages.css
│   │   ├── js/             ← script-v2.js, product-pages.js, world-map.js
│   │   └── images/
│   ├── inc/                ← ACF fields, form handlers, portal handlers
│   └── functions.php       ← UBL_VERSION defined here (bump on CSS/JS changes)
├── index.html              ← Static HTML prototype (reference only, not deployed)
├── assets/                 ← Static prototype assets (reference only)
├── Guideline and Sitemap/  ← Design guidelines PDFs
└── AI-IMAGE-PROMPTS.md     ← Image generation prompts used for site assets
```

## WordPress Setup
- **Theme folder:** `ubl-theme` (matches `/wp-content/themes/ubl-theme/` on server)
- **Theme version (style.css):** 1.0.0 (stylesheet header — not used for cache busting)
- **Asset version:** `UBL_VERSION` in `functions.php` (currently `2.19.0`) — bump this whenever CSS/JS changes to bust cache
- **Custom post type:** `dd_product` (Products)
- **Key plugins:** ACF (custom fields), CF7 or similar (forms), Cloudflare cache integration

## IMPORTANT — Active Templates (always edit these)

**Before editing any page, verify the active template via SSH:**
```bash
wp post meta get <PAGE_ID> _wp_page_template --allow-root
```
WP Admin can assign a custom template (e.g. `page-about-us-v2.php`) that overrides slug-based loading. Do not assume `page-{slug}.php` is what's running.

| Page | Page ID | Active Template | Notes |
|------|---------|----------------|-------|
| About Us (`/about-us/`) | 9 | `page-about-us-v2.php` | uses `about-v2.css` + `about-v2.js`; assigned in WP Admin |
| Leadership | 10 | `page-leadership.php` | — |
| Homepage | 5 | `front-page.php` | — |
| Products | — | `single-dd_product.php` | — |

**Rule:** If you create a new template file with a name like `page-X-v2.php` or `page-X-new.php`, WordPress will never load it automatically — it must have a `Template Name:` header AND be assigned in WP Admin. When in doubt, edit the existing `page-{slug}.php` directly.

## Branches
- `main` — production code, always deploy from here
- `claude/custom-homepage-v2-E32SL` — legacy static HTML work, all merged, do not use

## Deployment — RECORDED, do not re-ask

**Creds live in `deploy_pages.py` (top of file) and in `E:/ai-website-projects/.env` as `UMANG_*`.**
Shared **Hostinger** account (same as Doctor at Door):
- Host `217.21.76.22`, port `65002`, user `u495633441` (password in `.env` `UMANG_SSH_PASS` / in the deploy scripts)
- Theme path: `/home/u495633441/domains/umang.digitaldadi.in/public_html/wp-content/themes/ubl-theme`

**Deploy scripts (Python + paramiko, run from `umang/`):**
- `deploy_pages.py` — edit its `FILES` list to the files you changed, then `python deploy_pages.py`.
  It uploads via SFTP, **resets PHP OPcache** (writes/calls/removes `opcache_flush.php`), and **purges Cloudflare** (CF token + zone baked in). One command does everything.
- `deploy_catalog.py`, `deploy_transformer_boards.py` — page-specific variants, same pattern.

**Every deploy that touches CSS/JS:** bump `UBL_VERSION` in `functions.php` first (cache bust), include `functions.php` in the upload `FILES` list, and the script's CF purge handles the rest.

## Key Pages / Templates
| Template | URL |
|----------|-----|
| Homepage | front-page.php |
| Products | single-dd_product.php |
| Leadership | page-leadership.php |
| Investors | page-investors.php |
| Newsroom | page-newsroom.php |
| Contact | page-contact-us.php |
| Customer Portal | page-customer-portal.php |

## MANDATORY — Before Building Any UI Component

These steps are NON-NEGOTIABLE before writing any new HTML, CSS, or PHP:

1. **Find the nearest equivalent page on the live site first.**
   - Take a screenshot of it: `python -c "from playwright.sync_api import sync_playwright; ..."`
   - Or read the equivalent template PHP file to understand the existing markup pattern.

2. **Read `product-pages.css` before creating any product/catalog UI.**
   - All product page CSS lives here: `.pc-header`, `.pc-sidebar`, `.pd-left`, `.p-btn`, `.p-container`, etc.
   - NEVER invent a custom class for something that already exists in this file.

3. **Read `sections-v2.css` and `styles-v2.css` for global patterns.**
   - CSS variables, typography, button styles, shared layout classes are all defined here.

4. **Reuse existing CSS classes — do not invent new ones for already-solved problems.**
   - Wrong: writing `.tb-hero { background: navy; padding: ... }` when `.pc-header` already does this.
   - Right: `<section class="pc-header">` — done, zero new CSS needed.

5. **Read `about-v2.css` before replicating any About Us components on other pages.**
   - The cert strip (`ab2-cert-*`), vision/mission boxes, pillar cards — copy the class names directly.

Skipping these steps wastes deploys and produces inconsistent UI. The pattern is always already there.

## Current Status (May 2026)
- Repo is AHEAD of live server — PDF brief changes (About Us + Leadership) committed but not yet deployed
- Deploy via `deploy_pages.py` or SFTP, then clear Cloudflare cache
- Any changes made through WP Admin (content, ACF fields) live in the database only
