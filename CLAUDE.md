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
- **Asset version:** `UBL_VERSION` in `functions.php` (currently `2.16.0`) — bump this whenever CSS/JS changes to bust cache
- **Custom post type:** `dd_product` (Products)
- **Key plugins:** ACF (custom fields), CF7 or similar (forms), Cloudflare cache integration

## Branches
- `main` — production code, always deploy from here
- `claude/custom-homepage-v2-E32SL` — legacy static HTML work, all merged, do not use

## Deployment
- SSH credentials: **not yet recorded** — ask user for host, port, user, WP path
- After deploying theme files: clear Cloudflare cache (admin bar button or CF API)
- `UBL_VERSION` in `functions.php` must be bumped to force CSS/JS cache refresh

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

## Current Status (May 2026)
- Repo main branch is in sync with live site as of April 21 2026
- Any changes made through WP Admin (content, ACF fields) live in the database only
- No uncommitted server-side file changes confirmed (SSH access needed to verify fully)
