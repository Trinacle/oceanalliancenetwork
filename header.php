<?php
/**
 * The header for our theme.
 * Contains the pre-header chrome, the site header with mega menu, and the mobile drawer.
 *
 * @package OceanAlliance
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link" href="#main"><?php esc_html_e('Skip to content', 'ocean-alliance'); ?></a>

<!-- DEPTH CANVAS — bubbles / particles overlay -->
<canvas id="depth-canvas"></canvas>

<!-- PROGRESSIVE OCEAN BACKGROUND (fixed — just the gradient + light) -->
<div id="ocean-bg" aria-hidden="true">
    <div class="caustics"></div>
    <div class="light-shaft light-shaft--1"></div>
    <div class="light-shaft light-shaft--2"></div>
</div>

<!-- MARINE LIFE — scrolls WITH the page (not fixed).
     Spread across document height so only 1-2 visible at each scroll depth. -->
<div class="marine-life" aria-hidden="true">
    <?php $creature_uri = get_template_directory_uri() . '/assets/img/creatures'; ?>

    <!-- ZONE 1: shallow (top of page) -->
    <!-- Fish school A — facing RIGHT -->
    <svg class="creature creature--fish fish-a" viewBox="0 0 120 60" data-dir="right">
        <path d="M5 30 Q15 18 28 30 Q15 42 5 30 Z M28 30 L36 26 L36 34 Z" fill="currentColor"/>
        <path d="M44 22 Q54 10 67 22 Q54 34 44 22 Z M67 22 L75 18 L75 26 Z" fill="currentColor"/>
        <path d="M82 36 Q92 24 105 36 Q92 48 82 36 Z M105 36 L113 32 L113 40 Z" fill="currentColor"/>
        <path d="M50 44 Q60 34 71 44 Q60 54 50 44 Z M71 44 L78 41 L78 47 Z" fill="currentColor"/>
    </svg>
    <!-- Creature facing LEFT -->
    <img class="creature c-1" src="<?php echo esc_url($creature_uri); ?>/1024x623.png" alt="" data-dir="left" />
    <!-- Creature facing RIGHT -->
    <img class="creature c-2" src="<?php echo esc_url($creature_uri); ?>/1024x653.png" alt="" data-dir="right" />

    <!-- ZONE 2: mid-water -->
    <!-- Creature facing RIGHT -->
    <img class="creature c-3" src="<?php echo esc_url($creature_uri); ?>/1024x503.png" alt="" data-dir="right" />
    <!-- Fish school B — facing RIGHT -->
    <svg class="creature creature--fish fish-b" viewBox="0 0 120 60" data-dir="right">
        <path d="M5 30 Q15 18 28 30 Q15 42 5 30 Z M28 30 L36 26 L36 34 Z" fill="currentColor"/>
        <path d="M44 22 Q54 10 67 22 Q54 34 44 22 Z M67 22 L75 18 L75 26 Z" fill="currentColor"/>
        <path d="M82 36 Q92 24 105 36 Q92 48 82 36 Z M105 36 L113 32 L113 40 Z" fill="currentColor"/>
        <path d="M50 44 Q60 34 71 44 Q60 54 50 44 Z M71 44 L78 41 L78 47 Z" fill="currentColor"/>
    </svg>
    <!-- Creature facing LEFT -->
    <img class="creature c-4" src="<?php echo esc_url($creature_uri); ?>/1024x458.png" alt="" data-dir="left" />

    <!-- ZONE 3: deep -->
    <!-- Creature facing RIGHT -->
    <img class="creature c-5" src="<?php echo esc_url($creature_uri); ?>/1024x411.png" alt="" data-dir="right" />
    <!-- Creature facing RIGHT -->
    <img class="creature c-6" src="<?php echo esc_url($creature_uri); ?>/1024x317.png" alt="" data-dir="right" />
    <!-- Fish school C — facing RIGHT -->
    <svg class="creature creature--fish fish-c" viewBox="0 0 120 60" data-dir="right">
        <path d="M5 30 Q15 18 28 30 Q15 42 5 30 Z M28 30 L36 26 L36 34 Z" fill="currentColor"/>
        <path d="M44 22 Q54 10 67 22 Q54 34 44 22 Z M67 22 L75 18 L75 26 Z" fill="currentColor"/>
        <path d="M82 36 Q92 24 105 36 Q92 48 82 36 Z M105 36 L113 32 L113 40 Z" fill="currentColor"/>
    </svg>

    <!-- ZONE 4: abyss (bottom) -->
    <!-- Whale — facing RIGHT, at the BOTTOM of the page -->
    <img class="creature creature--whale" src="<?php echo esc_url($creature_uri); ?>/1024x310.png" alt="" data-dir="right" />
    <!-- Creature facing LEFT -->
    <img class="creature c-7" src="<?php echo esc_url($creature_uri); ?>/1024x314.png" alt="" data-dir="left" />
    <!-- Fish school D — facing RIGHT (extra fish at bottom) -->
    <svg class="creature creature--fish fish-d" viewBox="0 0 120 60" data-dir="right">
        <path d="M5 30 Q15 18 28 30 Q15 42 5 30 Z M28 30 L36 26 L36 34 Z" fill="currentColor"/>
        <path d="M44 22 Q54 10 67 22 Q54 34 44 22 Z M67 22 L75 18 L75 26 Z" fill="currentColor"/>
        <path d="M82 36 Q92 24 105 36 Q92 48 82 36 Z M105 36 L113 32 L113 40 Z" fill="currentColor"/>
        <path d="M50 44 Q60 34 71 44 Q60 54 50 44 Z M71 44 L78 41 L78 47 Z" fill="currentColor"/>
    </svg>
</div>

<!-- DEPTH GAUGE -->
<aside id="depth-gauge" aria-hidden="true">
    <div class="gauge-track"><div class="gauge-fill"></div></div>
    <div class="gauge-label"><span class="gauge-depth">0m</span><span class="gauge-zone">SURFACE</span></div>
</aside>

<!-- ============================================
     MEGA MENU NAVIGATION
     ============================================ -->
<header id="site-header">
    <div class="header-inner">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="brand" aria-label="<?php esc_attr_e('Ocean Alliance Network home', 'ocean-alliance'); ?>">
            <?php
            $oan_uri = get_template_directory_uri();
            // Custom logo (set in Appearance → Customize → Site Identity) takes priority;
            // otherwise fall back to the bundled white OAN logo file.
            if (has_custom_logo()) {
                the_custom_logo();
            } else { ?>
                <img class="brand-logo" src="<?php echo esc_url($oan_uri); ?>/assets/img/oan-logo-wide-white.png" alt="<?php esc_attr_e('Ocean Alliance Network', 'ocean-alliance'); ?>" />
            <?php } ?>
        </a>

        <nav id="primary-nav" aria-label="<?php esc_attr_e('Primary', 'ocean-alliance'); ?>">
            <ul class="nav-list">
                <li><a href="<?php echo esc_url(home_url('/')); ?>" class="<?php oan_active('home'); ?>"><?php esc_html_e('Home', 'ocean-alliance'); ?></a></li>

                <!-- ABOUT mega -->
                <li class="has-mega">
                    <a href="<?php echo esc_url(oan_page_url('about')); ?>"><?php esc_html_e('About', 'ocean-alliance'); ?> <span class="caret"></span></a>
                    <div class="mega-wrap">
                        <div class="mega" role="region" aria-label="<?php esc_attr_e('About', 'ocean-alliance'); ?>">
                            <div class="mega-head">
                                <span class="mega-tag">About</span>
                                <h4>The organization</h4>
                            </div>
                            <div class="mega-grid">
                                <div class="mega-col">
                                    <h5>Who we are</h5>
                                    <ul>
                                        <li><a href="<?php echo esc_url(oan_page_url('about')); ?>">Our Story</a></li>
                                        <li><a href="<?php echo esc_url(oan_anchor_url('about', 'strategic-advisors')); ?>">Strategic Advisors</a></li>
                                        <li><a href="<?php echo esc_url(oan_anchor_url('about', 'advisors')); ?>">Board of Advisors</a></li>
                                    </ul>
                                </div>
                                <div class="mega-col">
                                    <h5>Accountability</h5>
                                    <ul>
                                        <li><a href="<?php echo esc_url(oan_anchor_url('about', 'fiscal-sponsor')); ?>">Fiscal Sponsor &amp; Tax ID</a></li>
                                        <li><a href="<?php echo esc_url(oan_page_url('donate')); ?>">Donate</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- MEDIA mega -->
                <li class="has-mega">
                    <a href="<?php echo esc_url(oan_page_url('media')); ?>"><?php esc_html_e('Media', 'ocean-alliance'); ?> <span class="caret"></span></a>
                    <div class="mega-wrap">
                        <div class="mega" role="region" aria-label="<?php esc_attr_e('Media', 'ocean-alliance'); ?>">
                            <div class="mega-head">
                                <span class="mega-tag">Media</span>
                                <h4>Films &amp; series</h4>
                            </div>
                            <div class="mega-grid">
                                <div class="mega-col">
                                    <h5>Original series</h5>
                                    <ul>
                                        <li><a href="<?php echo esc_url(oan_anchor_url('media', 'wavemaker')); ?>">Wave Maker</a></li>
                                        <li><a href="<?php echo esc_url(oan_anchor_url('media', 'local-legends')); ?>">Local Legends</a></li>
                                    </ul>
                                </div>
                                <div class="mega-col">
                                    <h5>Programs &amp; events</h5>
                                    <ul>
                                        <li><a href="<?php echo esc_url(oan_anchor_url('media', 'students')); ?>">Student Commercials</a></li>
                                        <li><a href="<?php echo esc_url(oan_anchor_url('media', 'conferences')); ?>">Conferences &amp; Summits</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- COMMUNITY mega -->
                <li class="has-mega">
                    <a href="<?php echo esc_url(oan_page_url('community')); ?>"><?php esc_html_e('Community', 'ocean-alliance'); ?> <span class="caret"></span></a>
                    <div class="mega-wrap">
                        <div class="mega" role="region" aria-label="<?php esc_attr_e('Community', 'ocean-alliance'); ?>">
                            <div class="mega-head">
                                <span class="mega-tag">Community</span>
                                <h4>Get involved</h4>
                            </div>
                            <div class="mega-grid">
                                <div class="mega-col">
                                    <h5>Join us</h5>
                                    <ul>
                                        <li><a href="<?php echo esc_url(oan_anchor_url('community', 'ambassadors')); ?>">Ambassadors</a></li>
                                        <li><a href="<?php echo esc_url(oan_anchor_url('community', 'events')); ?>">Past Events</a></li>
                                    </ul>
                                </div>
                                <div class="mega-col">
                                    <h5>Stay connected</h5>
                                    <ul>
                                        <li><a href="<?php echo esc_url(oan_anchor_url('community', 'blog')); ?>">Blog &amp; Stories</a></li>
                                        <li><a href="<?php echo esc_url(oan_page_url('donate')); ?>">Support the movement</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li><a href="<?php echo esc_url(oan_page_url('donate')); ?>" class="nav-donate <?php oan_active('donate'); ?>">Donate</a></li>
            </ul>
        </nav>

        <button id="menu-toggle" aria-label="<?php esc_attr_e('Open menu', 'ocean-alliance'); ?>" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>

<!-- Mobile menu drawer -->
<div id="mobile-drawer" aria-hidden="true">
    <nav aria-label="<?php esc_attr_e('Mobile', 'ocean-alliance'); ?>">
        <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
        <details <?php oan_open('about'); ?>>
            <summary>About</summary>
            <a href="<?php echo esc_url(oan_anchor_url('about', 'fiscal-sponsor')); ?>">Fiscal Sponsor &amp; Tax ID</a>
            <a href="<?php echo esc_url(oan_anchor_url('about', 'strategic-advisors')); ?>">Strategic Advisors</a>
            <a href="<?php echo esc_url(oan_anchor_url('about', 'advisors')); ?>">Board of Advisors</a>
        </details>
        <details <?php oan_open('media'); ?>>
            <summary>Media</summary>
            <a href="<?php echo esc_url(oan_anchor_url('media', 'students')); ?>">Video Commercials — Students</a>
            <a href="<?php echo esc_url(oan_anchor_url('media', 'wavemaker')); ?>">Wave Maker</a>
            <a href="<?php echo esc_url(oan_anchor_url('media', 'local-legends')); ?>">Local Legends</a>
            <a href="<?php echo esc_url(oan_anchor_url('media', 'conferences')); ?>">Conferences &amp; Summits</a>
        </details>
        <details <?php oan_open('community'); ?>>
            <summary>Community</summary>
            <a href="<?php echo esc_url(oan_anchor_url('community', 'ambassadors')); ?>">Ambassadors</a>
            <a href="<?php echo esc_url(oan_anchor_url('community', 'blog')); ?>">Blog</a>
            <a href="<?php echo esc_url(oan_anchor_url('community', 'events')); ?>">Past Events</a>
        </details>
        <a href="<?php echo esc_url(oan_page_url('donate')); ?>" class="m-donate">Donate</a>
    </nav>
</div>

<main id="main">
