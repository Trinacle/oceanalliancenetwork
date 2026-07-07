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

## 🚀 Install via Bluehost cPanel + Git (recommended)

This theme is deployed from GitHub. Once set up, **every push to GitHub can be pulled into
WordPress with one click** in cPanel.

### 1. Connect the repo in cPanel
1. Log in to **Bluehost cPanel**.
2. Find **Files → Git Version Control**.
3. Click **Create** → **Clone** a repository.
   - **URL:** `https://github.com/Trinacle/oceanalliancenetwork.git`
   - **Repository Path (Repository Name):** `ocean-alliance`
   - **Clone Path (the destination in your hosting):**
     `wp-content/themes/ocean-alliance`
   - *(Use the absolute version of that path shown in cPanel — usually something like
     `/home/USERNAME/public_html/wp-content/themes/ocean-alliance`)*
4. Click **Create** (or **Clone**).

### 2. Deploy (pull) the files
1. In the Git Version Control list, find your new `ocean-alliance` repo.
2. Click **Manage** → **Pull or Deploy** tab.
3. Click **Deploy HEAD Commit**. The files copy into `wp-content/themes/ocean-alliance/`.

### 3. Activate the theme
1. Open **WordPress Admin** → **Appearance → Themes**.
2. You'll see **Ocean Alliance Network**. Click **Activate**.
3. On activation, the theme **auto-creates** the four core Pages (About, Media, Community,
   Donate) with their templates already assigned, and sets the homepage as the static front
   page. (Idempotent — safe to activate repeatedly.)

### 4. Add your logo
- **Appearance → Customize → Site Identity → Logo** → upload `oan-logo-wide.png`
  (or whatever logo you want). If no logo is set, an SVG wave mark shows as fallback.

### 5. Update later (the part that matches thesmokedrop.com)
1. I push changes to GitHub (`Trinacle/oceanalliancenetwork`).
2. In cPanel → **Git Version Control** → **Manage** your repo → **Pull or Deploy** →
   click **Deploy HEAD Commit**.
3. Done — the live site updates instantly.

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
