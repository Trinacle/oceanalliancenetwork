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
        <!-- Humpback whale — long body, tail fluke, pectoral fins (surface zone) -->
        <svg class="silhouette whale whale--1" viewBox="0 0 500 220" preserveAspectRatio="xMidYMid meet">
            <!-- main body: tapered head -> thick torso -> narrow tail -->
            <path d="M40 110 C70 85 130 72 200 75 C270 78 340 80 400 70 C440 63 470 55 485 45 C490 42 492 47 489 52 L475 70 C472 74 468 76 463 77 C450 80 435 82 420 85 C410 108 395 120 370 120 C355 120 348 112 350 100 C310 105 260 110 210 113 C160 116 110 115 70 108 C58 106 46 108 40 110 Z"/>
            <!-- tail fluke (the iconic whale tail) -->
            <path d="M480 50 Q495 15 485 8 Q478 20 478 45 Z"/>
            <path d="M488 55 Q520 35 530 20 Q518 48 495 62 Z"/>
            <!-- pectoral fin -->
            <path d="M260 115 Q250 165 220 185 Q240 155 245 118 Z"/>
            <!-- water spout from blowhole -->
            <path d="M120 80 Q118 45 125 20 Q130 18 132 22 Q128 48 130 80 Z" opacity="0.4"/>
            <path d="M140 78 Q145 50 155 30 Q158 28 160 32 Q152 55 150 80 Z" opacity="0.3"/>
        </svg>
        <!-- Smaller whale (twilight zone) -->
        <svg class="silhouette whale whale--2" viewBox="0 0 500 220" preserveAspectRatio="xMidYMid meet">
            <path d="M40 110 C70 85 130 72 200 75 C270 78 340 80 400 70 C440 63 470 55 485 45 C490 42 492 47 489 52 L475 70 C472 74 468 76 463 77 C450 80 435 82 420 85 C410 108 395 120 370 120 C355 120 348 112 350 100 C310 105 260 110 210 113 C160 116 110 115 70 108 C58 106 46 108 40 110 Z"/>
            <path d="M480 50 Q495 15 485 8 Q478 20 478 45 Z"/>
            <path d="M488 55 Q520 35 530 20 Q518 48 495 62 Z"/>
            <path d="M260 115 Q250 165 220 185 Q240 155 245 118 Z"/>
        </svg>
        <!-- Dolphin — arched body, dorsal fin, beak (sunlit zone) -->
        <svg class="silhouette dolphin dolphin--1" viewBox="0 0 300 160">
            <!-- arched body -->
            <path d="M20 95 C40 70 80 50 130 52 C170 54 200 65 225 50 C245 38 265 30 280 40 C285 43 283 50 277 53 L262 60 C258 62 254 62 250 61 C245 78 235 90 220 92 C232 105 240 118 235 130 C225 125 215 110 208 95 C180 100 140 105 100 102 C70 100 45 110 30 115 C22 113 18 100 20 95 Z"/>
            <!-- dorsal fin -->
            <path d="M135 53 Q145 20 165 10 Q160 35 155 55 Z"/>
            <!-- tail flukes -->
            <path d="M275 55 Q295 35 300 20 Q285 45 280 58 Z"/>
            <path d="M270 62 Q285 80 290 95 Q275 75 268 66 Z"/>
        </svg>
        <!-- Sea turtle — shell + 4 flippers + head (midnight zone) -->
        <svg class="silhouette turtle turtle--1" viewBox="0 0 260 180">
            <!-- shell (oval body) -->
            <ellipse cx="130" cy="90" rx="90" ry="55"/>
            <!-- head -->
            <ellipse cx="40" cy="85" rx="18" ry="12"/>
            <!-- front flippers -->
            <path d="M70 55 Q40 25 20 30 Q35 45 60 65 Z"/>
            <path d="M70 125 Q40 155 20 150 Q35 135 60 115 Z"/>
            <!-- back flippers -->
            <path d="M200 55 Q230 30 245 40 Q225 50 210 70 Z"/>
            <path d="M200 125 Q230 150 245 140 Q225 130 210 110 Z"/>
            <!-- shell pattern lines (subtle) -->
            <path d="M90 90 Q130 70 175 90" fill="none" stroke="rgba(0,0,0,0.2)" stroke-width="2"/>
            <path d="M90 90 Q130 110 175 90" fill="none" stroke="rgba(0,0,0,0.2)" stroke-width="2"/>
        </svg>
        <!-- School of small fish (sunlit zone) -->
        <svg class="silhouette fish-school fish--1" viewBox="0 0 120 60">
            <path d="M5 30 Q15 18 28 30 Q15 42 5 30 Z M28 30 L36 26 L36 34 Z"/>
            <path d="M44 22 Q54 10 67 22 Q54 34 44 22 Z M67 22 L75 18 L75 26 Z"/>
            <path d="M82 36 Q92 24 105 36 Q92 48 82 36 Z M105 36 L113 32 L113 40 Z"/>
            <path d="M50 44 Q60 34 71 44 Q60 54 50 44 Z M71 44 L78 41 L78 47 Z"/>
        </svg>
        <!-- Manta ray (abyss zone) -->
        <svg class="silhouette ray ray--1" viewBox="0 0 200 120">
            <path d="M100 30 C70 20 30 30 15 55 C30 50 45 52 55 60 C45 68 30 70 15 65 C30 90 70 100 100 90 C130 100 170 90 185 65 C170 70 155 68 145 60 C155 52 170 50 185 55 C170 30 130 20 100 30 Z M100 90 Q105 105 100 115 Q95 105 100 90 Z"/>
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
            // otherwise fall back to the bundled white OAN logo file.
            if (has_custom_logo()) {
                the_custom_logo();
            } else { ?>
                <img class="brand-logo" src="<?php echo esc_url($oan_uri); ?>/assets/img/oan-logo-white.png" alt="<?php esc_attr_e('Ocean Alliance Network', 'ocean-alliance'); ?>" />
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
