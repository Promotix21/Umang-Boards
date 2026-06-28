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

## Current Status (Jun 2026)
- Local, GitHub (`origin/main`), and live server are all IN SYNC as of this update.
- Deploy via `deploy_pages.py` / `deploy_product_images.py` / SFTP, then clear Cloudflare cache (scripts auto-purge).
- Any changes made through WP Admin (content, ACF fields) live in the database only.

## Jun 28 2026 — Product pages built from client doc (`AK Folder/Product page details.docx`)
All 6 product pages now built from the client's Word doc + its 45 embedded product images.
Commits `71cfdcc` (build) + `8015747` (fix), pushed to `origin/main`; deployed live, CF purged.
- **Source method:** doc text + images extracted via Python `zipfile` (`word/media/`), mapped in
  document order → `AK Folder/seq.txt` (image↔product map), `product_page_details.txt` (text),
  `process_paper_images.py` (PIL optimiser). All extracted assets stay in `AK Folder/` (untracked;
  48MB docx NOT committed).
- **Pages built/finalised:** Machined (spacers/strips/washers), Moulded (angle/cap rings, disc
  angle/cap rings, snouts), Copper wires (3), Aluminium wires (4), Insulation Papers (5).
  Transformer Boards was already live. Product images optimised: transparent→quantized PNG,
  opaque→progressive JPG q82–86, max ~1100px (grid 1600px). All 25–226 KB.
- **Client decisions applied:** (1) Disc Cap Ring = SAME content as Disc Angle Ring, just renamed.
  (2) "20 mil" typo → write **0.5 mm** in brackets (not 0.25 mm) on Press/DDP/TUP papers + matrix.
- **Insulation Papers:** real paper photos swapped in — `paper-kraft.jpg` (img15), `paper-press.jpg`
  (img33), `paper-ddp.jpg` (img5), `paper-crepe.jpg` (img16), `paper-tup.jpg` (img25, green).
  (Old `paper-kraft-crepe.png`/`paper-press.png`/`paper-ddp.png`/`paper-thermally-upgraded.png` now
  unreferenced — left in place, harmless.)
- **Copper/Aluminium paper types:** the doc's pre-built "Available Paper Covering Options" grid
  (image26, all 7 types w/ photos+labels+desc) → `paper-covering-options.jpg`. Renderer extended:
  new optional `paper_types_image` field renders a full-width figure; falls back to text chips
  (`paper_types`) if absent. Chosen over the 9 individual photos (which had red watermark labels).
- **IMPORTANT principle reaffirmed:** only render what the doc provides. Initially I invented
  "Class A (105°C)" insulation class for machined/moulded matrix — doc never stated one → reverted
  to "—". Don't fabricate spec values the source omits.
- **⬜ PENDING (client sending, NON-blocking):** (1) hi-res Aluminium Paper-Insulated photo
  (`al-paper-insulated.jpg` source only ~446px, soft); (2) dedicated Disc Angle/Cap Ring photos
  (currently reuse Angle/Cap Ring images). When received: process → `assets/images/` → swap 1–3
  `'image'` paths → `deploy_pages.py`.

## Deploy creds — Jun 28 2026 FIX (was failing auth)
The shared Hostinger account SSH password had been rotated; `deploy_pages.py`'s hardcoded value AND
`.env` `UMANG_SSH_PASS` were both STALE → auth failures. The LIVE password is **`DAD_SSH_PASS`** in
`E:/ai-website-projects/.env` (same shared account `u495633441` as Doctor at Door).
- `deploy_pages.py` now reads `DAD_SSH_PASS` from `.env` at runtime (`_load_env_pass()`) — no
  hardcoded secret, won't go stale again.
- `.env` `UMANG_SSH_PASS` re-synced to the live value.
- If a future deploy fails auth: the source of truth is `DAD_SSH_PASS`; re-test before assuming code.
- `deploy_pages.py` `FILES` list was updated to this build's files; edit it to your changed files
  before each run.

## Credentials & deploy scripts (IMPORTANT)
- Deploy scripts (`deploy_pages.py`, `deploy_transformer_boards.py`, `deploy_product_images.py`,
  `deploy_catalog.py`, `purge_cf_cache.py`, `check_live.py`, etc.) contain SSH + Cloudflare creds and
  are **gitignored** — they stay LOCAL only, never commit them. Creds also mirrored in `E:/ai-website-projects/.env` (`UMANG_*`).
- GitHub has **push protection** (blocks secrets) and the push token lacks `workflow` scope — do NOT
  commit credential files or `.github/workflows/*` changes, or the push will be rejected.
- Background removal for product images: use `rembg` (u2net) → save local transparent PNG in
  `assets/images/`, switch template data from `image_id` to `'image' => UBL_URI . '/assets/images/...png'`.

## Product pages architecture
- **Transformer Boards** (`page-transformer-boards.php`) is STANDALONE — its own markup (`tb-` classes),
  data array `$boards`, and inline tables. Edit it directly.
- **All other catalog pages** (machined, moulded, copper/aluminium wires, papers, chemicals) define a
  `$catalog` array (products with `image_id` / `image`, `features`, `sizes`, `variants`, `matrix_row`)
  and `include inc/catalog-renderer.php`. The renderer draws the shared `tb-` UI for all of them — so
  one renderer edit affects every catalog page (e.g. removing the Key Properties/Features block).
- catalog-renderer image logic: `if image_id` (WP attachment, served via `wp_get_attachment_image`)
  `elseif image` (direct URL). To use a local transparent PNG, set `'image'` and REMOVE `'image_id'`
  (image_id wins if both present).
- Resolve a WP `image_id` → file URL via REST: `GET /wp-json/wp/v2/media/<id>` → `source_url`.
  Many source photos are low-res (~254–500px) — cutouts look soft at large sizes; ask client for hi-res.

## Live product page URLs (slugs differ from template names)
- Transformer Boards: `/products/cellulose-transformer-insulation-boards/`
- Machined Components: `/products/machined-and-milled-components/`
- Moulded Components: `/products/moulded-components-and-other-components/`
- Copper wires: `/products/copper/` · Aluminium wires: `/products/aluminium/` · Winding Wires: `/products/winding-wires/`
- Insulation Papers: `/products/insulation-papers/` · Insulating Chemicals: `/products/insulating-chemicals/`
- Page templates aren't always at slug-based URLs; find the real URL from the nav/sitemap, not the filename.

## Gotchas
- After a Cloudflare `purge_everything`, the origin briefly returns **522** (flooded with uncached
  requests) — assets settle to 200 within ~30s. Not a real error; re-check before concluding broken.
- "Broken image" reports are often Cloudflare/browser **cache**, not a 404 — verify the URL returns 200
  and renders before chasing a code fix; a CF purge usually resolves it.
- Repo hygiene: some leadership photos existed on the server but were missing locally — keep the local
  `assets/images/leadership/` in sync with what the template references (10 photos).
