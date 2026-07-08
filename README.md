# Ocean Alliance Network — WordPress Theme

A modern, ocean-themed WordPress theme for Ocean Alliance Network. Built around a
**"Descend Into the Deep"** concept: the ocean darkens from surface (header) through six
depth zones to the abyss (footer), with rising bubbles, god-rays, an animated depth gauge,
glassmorphic mega menu, and editorial typography (Fraunces + Inter).

Designed for foundation / charity / nonprofit use.

- **Version:** 1.0.0
- **Requires WordPress:** 6.0+
- **Requires PHP:** 7.4+
- **License:** GPL-2.0-or-later

---

## ✨ Features

- **Scroll-driven ocean descent** — fixed gradient backdrop shifts through 6 depth zones as you scroll
- **Live depth gauge** (right edge) — counts up in meters, shows current zone (SURFACE → TRENCH)
- **Rising bubble particle canvas** — vanilla JS, no libraries, auto-reduces on mobile
- **God-rays + caustic light** + animated surface waves
- **Reveal-on-scroll** via `IntersectionObserver`, with staggered delays
- **Animated stat counters**
- **Glassmorphic mega menu** (3 panels: About / Media / Community)
- **Mobile hamburger drawer** with accordion sub-menus
- **Custom logo support** — upload your logo in the Customizer, SVG fallback included
- **Auto-creates 4 core pages + sets static front page** on theme activation
- **Full `prefers-reduced-motion` support**
- **Translation-ready** (`text-domain: ocean-alliance`)

---

## 📁 Theme structure

```
ocean-alliance/                     ← this repo = the theme root
├── style.css                       ← WP theme header ONLY
├── functions.php                   ← enqueues, theme supports, page auto-creation, helpers
├── header.php                      ← pre-header chrome + <header> + mobile drawer
├── footer.php                      ← <footer> + wp_footer()
├── front-page.php                  ← homepage
├── page-about.php                  ← slug: about
├── page-media.php                  ← slug: media
├── page-community.php              ← slug: community
├── page-donate.php                 ← slug: donate (enqueues donate.js)
├── index.php                       ← fallback (single post view / redirect)
├── screenshot.png                  ← 1200×900, shown in WP theme picker
├── README.md                       ← this file
├── .gitignore
└── assets/
    ├── css/
    │   ├── style.css               ← the real CSS (enqueued)
    │   └── pages.css               ← sub-page CSS (enqueued except on homepage)
    ├── js/
    │   ├── main.js                 ← scroll-depth, bubbles, mega menu, reveal, counters
    │   └── donate.js               ← amount selector + Stripe handler (donate page only)
    └── img/
        ├── oan-media-{2,3,5,7,8,9,11,12,13,14}.jpg   ← real photos from the OAN library
        ├── oan-logo-wide.png                        ← official OAN logo
        ├── oan-logo-mark.png
        ├── partner-uscseagrant.png
        └── partner-sustainoc.png
```

---

## 🚀 Deploy — GitHub Actions auto-deploy (skill standard)

Every push to `main` triggers a GitHub Actions workflow that rsyncs the theme to the
Bluehost server over SSH. **No manual cPanel steps.** Gated on a repo variable so you can
pause deploys.

**Environments:**
| | URL | Server path |
|--|-----|-------------|
| **Staging** | `https://oceanalliancenetwork.org/staging/2135/` | `/home1/thefindg/public_html/website_76291747/staging/wp-content/themes/oceanalliancenetwork` |

### One-time setup (SSH keypair + GitHub secrets)

1. **Generate a dedicated SSH keypair** (already done locally at `~/.ssh/oan_deploy`):
   ```bash
   ssh-keygen -t rsa -b 4096 -f ~/.ssh/oan_deploy -N "" -C "github-oan-deploy@trinacle"
   ```

2. **Add the PUBLIC key to Bluehost:**
   - cPanel → **Security → SSH Access → Manage SSH Keys → Import Key**
   - Paste the contents of `~/.ssh/oan_deploy.pub`
   - Authorize the key after import.

3. **Add secrets to GitHub** (repo → Settings → Secrets and variables → Actions →
   **New repository secret**):
   | Secret | Value |
   |--------|-------|
   | `SSH_HOST` | `XXX.bluehost.com` (your Bluehost server hostname — see cPanel) |
   | `SSH_USER` | your cPanel username |
   | `SSH_PORT` | `22` |
   | `SSH_KEY` | the PRIVATE key contents (`~/.ssh/oan_deploy`, the file without `.pub`) |
   | `DEPLOY_PATH` | `/home1/thefindg/public_html/website_76291747/staging/wp-content/themes/oceanalliancenetwork` |

4. **Add the gate variable** (same page → **Variables** tab → **New repository variable**):
   - Name: `DEPLOY_ENABLED` · Value: `true`

5. **Activate the theme** in WP Admin → Appearance → Themes → **Ocean Alliance Network**.
   On activation it auto-creates the 4 core Pages (About/Media/Community/Donate) and sets
   the homepage as the static front page.

6. **Upload your logo** in Appearance → Customize → Site Identity (or leave the SVG fallback).

### The update loop (every change)
1. Edit theme files → `git push origin main`.
2. GitHub Actions runs `deploy.yml` → rsyncs to the server (~30–45s).
3. Verify with a cache-busting fetch (LiteSpeed serves stale HTML otherwise):
   ```bash
   curl -s "https://oceanalliancenetwork.org/staging/2135/?nc=$(date +%s)" \
     -H "User-Agent: Mozilla/5.0" | grep -c '</html>'
   ```

### Pushing to production
Staging → production is your call. Either point production at the same repo with a different
`DEPLOY_PATH`, or use Bluehost's "Push staging to live." Always flush permalinks
(Settings → Permalinks → Save) and purge LiteSpeed cache after a production deploy.

---

## 💳 Stripe (Donate page)

The Donate page has a working amount selector (presets + custom + one-time/monthly toggle)
and tier cards. The submit button currently shows a placeholder. To go live, pick one:

### Option A — Stripe Payment Link (simplest, ~5 min)
1. In Stripe, create **Payment Links** for one-time and monthly giving.
2. Edit `assets/js/donate.js` — in the submit handler, replace the `alert(...)` with:
   ```js
   var freq = document.querySelector('.freq-opt input:checked').value;
   var links = {
     one:     'https://buy.stripe.com/YOUR_ONE_TIME_LINK',
     monthly: 'https://buy.stripe.com/YOUR_MONTHLY_LINK'
   };
   window.location.href = links[freq];
   ```
3. Commit + push → redeploy in cPanel.

### Option B — Stripe Checkout via WP REST (recommended for production)
1. `composer require stripe/stripe-php` (or via a WP Stripe plugin).
2. Register a REST endpoint in `functions.php` (e.g. `/wp-json/oan/v1/checkout`) that creates
   a `\\Stripe\\Checkout\\Session` with the chosen amount and frequency.
3. `donate.js` `fetch()`es the endpoint and redirects to `session.url`.

**Never put your Stripe SECRET key in the browser** — only `pk_live_...`. Secrets live on
the server.

---

## ✏️ Editing content

For v1, most content (advisors, events, blog cards, tiers) is **hard-coded in the page
templates** so the design renders exactly as designed. The cleanest path to make it
staff-editable later is:

- **Advisors / events / partners:** register Custom Post Types + Advanced Custom Fields.
- **Blog:** the Blog section currently shows sample cards. Replace with a `WP_Query` loop
  pulling real Posts once you're publishing.
- **Nav:** the mega menu is hard-coded in `header.php` for a pixel-perfect match. Migrate to
  `wp_nav_menu()` with a custom walker when non-developers need to edit links.

These are flagged for a future enhancement round.

---

## 🔧 Local development

You can preview the theme locally in a few ways:

- **Local by Flywheel / DevKinsta / XAMPP** — install WordPress, drop this folder in
  `wp-content/themes/`, activate.
- **WP-CLI scaffold:** `wp server` after symlinking the theme.
- **Quick static preview:** the design source (pre-conversion) lives in
  `C:\Users\kevin\ZCodeProject\ocean-alliance\` — run
  `python -m http.server 8765` there for a no-WP preview of the exact design.

---

## ♿ Accessibility

- Semantic landmarks, `aria-label`s on nav.
- Keyboard-friendly mobile drawer (Esc to close).
- `prefers-reduced-motion` disables all animation.
- `loading="lazy"` on content images.
- Translation-ready via `ocean-alliance` text domain.

---

## 🔐 Notes

- All imagery is real, pulled from the Ocean Alliance Network media library.
- For questions about this theme: **kevin@trinacle.com**
