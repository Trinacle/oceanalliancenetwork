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

<!-- DEPTH CANVAS — bubbles / particles overlay -->
<canvas id="depth-canvas"></canvas>

<!-- PROGRESSIVE OCEAN BACKGROUND -->
<div id="ocean-bg" aria-hidden="true">
    <div class="caustics"></div>
    <div class="light-shaft light-shaft--1"></div>
    <div class="light-shaft light-shaft--2"></div>
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
            // Custom logo (set in Appearance → Customize → Site Identity), with SVG fallback.
            if (has_custom_logo()) {
                the_custom_logo();
            } else { ?>
                <svg class="brand-mark" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M4 30c4 0 4-4 8-4s4 4 8 4 4-4 8-4 4 4 8 4 4-4 8-4" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/>
                    <path d="M4 38c4 0 4-4 8-4s4 4 8 4 4-4 8-4 4 4 8 4 4-4 8-4" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" opacity="0.55"/>
                    <circle cx="24" cy="14" r="5" fill="currentColor"/>
                </svg>
            <?php } ?>
            <span class="brand-text">Ocean Alliance<small>Network</small></span>
        </a>

        <nav id="primary-nav" aria-label="<?php esc_attr_e('Primary', 'ocean-alliance'); ?>">
            <ul class="nav-list">
                <li><a href="<?php echo esc_url(home_url('/')); ?>" class="<?php oan_active('home'); ?>"><?php esc_html_e('Home', 'ocean-alliance'); ?></a></li>

                <!-- ABOUT mega -->
                <li class="has-mega">
                    <a href="<?php echo esc_url(oan_page_url('about')); ?>"><?php esc_html_e('About', 'ocean-alliance'); ?> <span class="caret"></span></a>
                    <div class="mega" role="region" aria-label="<?php esc_attr_e('About', 'ocean-alliance'); ?>">
                        <div class="mega-grid">
                            <div class="mega-col mega-intro">
                                <h4>About OAN</h4>
                                <p>A coalition of scientists, storytellers, and communities working to defend the ocean — from the surface to the deep.</p>
                                <a href="<?php echo esc_url(oan_page_url('about')); ?>" class="mega-cta">Our story →</a>
                            </div>
                            <div class="mega-col">
                                <h5>Organization</h5>
                                <ul>
                                    <li><a href="<?php echo esc_url(oan_anchor_url('about', 'fiscal-sponsor')); ?>">Fiscal Sponsor &amp; Tax ID</a></li>
                                    <li><a href="<?php echo esc_url(oan_anchor_url('about', 'strategic-advisors')); ?>">Strategic Advisors</a></li>
                                    <li><a href="<?php echo esc_url(oan_anchor_url('about', 'advisors')); ?>">Board of Advisors</a></li>
                                </ul>
                            </div>
                            <div class="mega-col mega-feature">
                                <span class="mega-tag">501(c)(3) Nonprofit</span>
                                <h5>Donate with confidence</h5>
                                <p>Every contribution is tax-deductible through our fiscal sponsor.</p>
                                <a href="<?php echo esc_url(oan_page_url('donate')); ?>" class="btn-mini">Donate →</a>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- MEDIA mega -->
                <li class="has-mega">
                    <a href="<?php echo esc_url(oan_page_url('media')); ?>"><?php esc_html_e('Media', 'ocean-alliance'); ?> <span class="caret"></span></a>
                    <div class="mega" role="region" aria-label="<?php esc_attr_e('Media', 'ocean-alliance'); ?>">
                        <div class="mega-grid">
                            <div class="mega-col mega-intro">
                                <h4>Media Division</h4>
                                <p>Original films, commercials, and series that amplify the voices of the ocean.</p>
                                <a href="<?php echo esc_url(oan_page_url('media')); ?>" class="mega-cta">Watch all →</a>
                            </div>
                            <div class="mega-col">
                                <h5>Series &amp; Films</h5>
                                <ul>
                                    <li><a href="<?php echo esc_url(oan_anchor_url('media', 'students')); ?>">Video Commercials — Students</a></li>
                                    <li><a href="<?php echo esc_url(oan_anchor_url('media', 'wavemaker')); ?>">Wave Maker</a></li>
                                    <li><a href="<?php echo esc_url(oan_anchor_url('media', 'local-legends')); ?>">Local Legends</a></li>
                                    <li><a href="<?php echo esc_url(oan_anchor_url('media', 'conferences')); ?>">Conferences &amp; Summits</a></li>
                                </ul>
                            </div>
                            <div class="mega-col mega-feature mega-feature--img">
                                <span class="mega-tag">Featured</span>
                                <h5>Local Legends</h5>
                                <p>Profiles of the people protecting our coastlines.</p>
                                <a href="<?php echo esc_url(oan_anchor_url('media', 'local-legends')); ?>" class="btn-mini">Watch →</a>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- COMMUNITY mega -->
                <li class="has-mega">
                    <a href="<?php echo esc_url(oan_page_url('community')); ?>"><?php esc_html_e('Community', 'ocean-alliance'); ?> <span class="caret"></span></a>
                    <div class="mega" role="region" aria-label="<?php esc_attr_e('Community', 'ocean-alliance'); ?>">
                        <div class="mega-grid">
                            <div class="mega-col mega-intro">
                                <h4>Our Community</h4>
                                <p>The people who make this movement possible — on the water and online.</p>
                                <a href="<?php echo esc_url(oan_page_url('community')); ?>" class="mega-cta">Get involved →</a>
                            </div>
                            <div class="mega-col">
                                <h5>Connect</h5>
                                <ul>
                                    <li><a href="<?php echo esc_url(oan_anchor_url('community', 'ambassadors')); ?>">Ambassadors</a></li>
                                    <li><a href="<?php echo esc_url(oan_anchor_url('community', 'blog')); ?>">Blog &amp; Stories</a></li>
                                    <li><a href="<?php echo esc_url(oan_anchor_url('community', 'events')); ?>">Past Events</a></li>
                                </ul>
                            </div>
                            <div class="mega-col mega-feature">
                                <span class="mega-tag">Join us</span>
                                <h5>Become an Ambassador</h5>
                                <p>Lead the movement in your coastal community.</p>
                                <a href="<?php echo esc_url(oan_anchor_url('community', 'ambassadors')); ?>" class="btn-mini">Apply →</a>
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
