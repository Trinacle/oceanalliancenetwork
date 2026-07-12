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

<!-- PROGRESSIVE OCEAN BACKGROUND -->
<div id="ocean-bg" aria-hidden="true">
    <div class="caustics"></div>
    <div class="light-shaft light-shaft--1"></div>
    <div class="light-shaft light-shaft--2"></div>

    <!-- Dark marine-life silhouettes, faded, drifting at depth -->
    <div class="marine-life" aria-hidden="true">
        <!-- Humpback whale (surface zone, largest) -->
        <svg class="silhouette whale whale--1" viewBox="0 0 400 160" preserveAspectRatio="xMidYMid meet">
            <path d="M20 90 C60 60 120 55 180 65 C220 70 260 60 300 45 C330 35 360 40 380 70 C385 78 378 86 370 88 L355 92 C350 110 335 120 315 118 C300 116 295 105 298 95 C260 100 220 105 180 108 C130 112 70 110 35 100 C25 97 18 95 20 90 Z M375 75 C382 72 390 74 392 80 C394 86 388 90 383 88 C378 86 372 80 375 75 Z" fill="currentColor"/>
        </svg>
        <!-- Smaller whale (twilight zone) -->
        <svg class="silhouette whale whale--2" viewBox="0 0 400 160" preserveAspectRatio="xMidYMid meet">
            <path d="M20 90 C60 60 120 55 180 65 C220 70 260 60 300 45 C330 35 360 40 380 70 C385 78 378 86 370 88 L355 92 C350 110 335 120 315 118 C300 116 295 105 298 95 C260 100 220 105 180 108 C130 112 70 110 35 100 C25 97 18 95 20 90 Z M375 75 C382 72 390 74 392 80 C394 86 388 90 383 88 C378 86 372 80 375 75 Z" fill="currentColor"/>
        </svg>
        <!-- School of fish (sunlit zone) -->
        <svg class="silhouette fish-school fish--1" viewBox="0 0 120 60">
            <path d="M5 30 Q15 18 28 30 Q15 42 5 30 Z M28 30 L36 26 L36 34 Z" fill="currentColor"/>
            <path d="M44 22 Q54 10 67 22 Q54 34 44 22 Z M67 22 L75 18 L75 26 Z" fill="currentColor"/>
            <path d="M82 36 Q92 24 105 36 Q92 48 82 36 Z M105 36 L113 32 L113 40 Z" fill="currentColor"/>
            <path d="M50 44 Q60 34 71 44 Q60 54 50 44 Z M71 44 L78 41 L78 47 Z" fill="currentColor"/>
        </svg>
        <!-- Single large fish (midnight zone) -->
        <svg class="silhouette fish-single fish--2" viewBox="0 0 140 60">
            <path d="M10 30 Q25 12 50 30 Q75 48 100 30 Q115 18 130 28 Q125 30 125 30 L135 22 L135 38 L125 30 Q115 42 100 30 Q75 12 50 30 Q25 48 10 30 Z" fill="currentColor"/>
        </svg>
        <!-- Manta ray (abyss zone) -->
        <svg class="silhouette ray ray--1" viewBox="0 0 200 120">
            <path d="M100 30 C70 20 30 30 15 55 C30 50 45 52 55 60 C45 68 30 70 15 65 C30 90 70 100 100 90 C130 100 170 90 185 65 C170 70 155 68 145 60 C155 52 170 50 185 55 C170 30 130 20 100 30 Z M100 90 Q105 105 100 115 Q95 105 100 90 Z" fill="currentColor"/>
        </svg>
    </div>
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
            // otherwise fall back to the bundled OAN logo file.
            if (has_custom_logo()) {
                the_custom_logo();
            } else { ?>
                <img class="brand-logo" src="<?php echo esc_url($oan_uri); ?>/assets/img/oan-logo-header.png" alt="<?php esc_attr_e('Ocean Alliance Network', 'ocean-alliance'); ?>" />
            <?php } ?>
            <span class="brand-text">Ocean Alliance<small>Network</small></span>
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
