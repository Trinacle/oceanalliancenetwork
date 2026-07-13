<?php
/**
 * Ocean Alliance Network theme functions.
 *
 * @package OceanAlliance
 */

if (!defined('ABSPATH')) exit;

/**
 * Theme setup: title-tag, featured images, custom logo, menus.
 */
function oan_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 48,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
    add_theme_support('automatic-feed-links');
    add_theme_support('customize-selective-refresh-widgets');

    // Register a menu location (mega menu is hand-coded for v1; this powers footer/nav if you migrate later).
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'ocean-alliance'),
        'footer'  => __('Footer Menu', 'ocean-alliance'),
    ));
}
add_action('after_setup_theme', 'oan_setup');

/**
 * Set content width.
 */
function oan_content_width() {
    $GLOBALS['content_width'] = 1240;
}
add_action('after_setup_theme', 'oan_content_width', 0);

/**
 * Enqueue all styles and scripts.
 * Asset paths use get_template_directory_uri() so they resolve regardless of where WP lives.
 */
function oan_assets() {
    $uri = get_template_directory_uri();
    $path = get_template_directory();

    // Use file modification time as the cache-busting version, so the URL
    // changes automatically whenever the file is updated. This forces LiteSpeed
    // / CDN static-asset caches to fetch the new file after every deploy.
    wp_enqueue_style('oan-style', $uri . '/assets/css/style.css', array(), filemtime($path . '/assets/css/style.css'));

    // Page-specific stylesheet — NOT loaded on the homepage.
    if (!is_front_page()) {
        wp_enqueue_style('oan-pages', $uri . '/assets/css/pages.css', array('oan-style'), filemtime($path . '/assets/css/pages.css'));
    }

    // Main interactions: scroll-depth, bubble canvas, mega menu, reveal, counters.
    wp_enqueue_script('oan-main', $uri . '/assets/js/main.js', array(), filemtime($path . '/assets/js/main.js'), true);

    // Donate page script — only on the Donate page template.
    if (is_page_template('page-donate.php')) {
        wp_enqueue_script('oan-donate', $uri . '/assets/js/donate.js', array(), filemtime($path . '/assets/js/donate.js'), true);
    }
}
add_action('wp_enqueue_scripts', 'oan_assets');

/**
 * Add useful body classes for the current section.
 */
function oan_body_classes($classes) {
    if (is_front_page()) $classes[] = 'oan-home';
    if (is_page('about'))      $classes[] = 'oan-about';
    if (is_page('media'))      $classes[] = 'oan-media';
    if (is_page('community'))  $classes[] = 'oan-community';
    if (is_page('donate'))     $classes[] = 'oan-donate';
    return $classes;
}
add_filter('body_class', 'oan_body_classes');

/**
 * Helper: echo 'active' when the given page slug is the current page.
 * Used in header.php to mark the active nav link.
 */
function oan_active($slug) {
    if (is_front_page() && $slug === 'home') {
        echo 'active';
    } elseif (is_page($slug)) {
        echo 'active';
    }
}

/**
 * Helper: echo 'open' when the given page slug is the current page.
 * Used in header.php to expand the matching mobile drawer <details>.
 */
function oan_open($slug) {
    if (is_page($slug)) echo 'open';
}

/**
 * Helper: themed excerpt / fallback when a post has no excerpt.
 */
function oan_fallback_excerpt() {
    return __('Ocean Alliance Network — protecting the blue planet, together.', 'ocean-alliance');
}

/**
 * Helper: localized URL to a page by slug, with home_url fallback.
 */
function oan_page_url($slug) {
    $page = get_page_by_path($slug);
    return $page ? get_permalink($page->ID) : home_url('/');
}

/**
 * Helper: localized URL to a page section by slug + anchor.
 */
function oan_anchor_url($slug, $anchor) {
    return oan_page_url($slug) . '#' . $anchor;
}

/**
 * On theme activation: create the four core Pages + set the static front page.
 * Idempotent — only creates pages that don't already exist.
 */
function oan_on_activate() {
    $pages = array(
        'about'     => __('About', 'ocean-alliance'),
        'media'     => __('Media', 'ocean-alliance'),
        'community' => __('Community', 'ocean-alliance'),
        'donate'    => __('Donate', 'ocean-alliance'),
    );

    foreach ($pages as $slug => $title) {
        if (!get_page_by_path($slug)) {
            wp_insert_post(array(
                'post_title'   => $title,
                'post_name'    => $slug,
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'post_content' => '',
                // Force the matching page template.
                'page_template' => 'page-' . $slug . '.php',
            ));
        }
    }

    // Set the front page to show front-page.php (a "static" homepage).
    $home = get_page_by_path('home');
    if (!$home) {
        $home_id = wp_insert_post(array(
            'post_title'  => __('Home', 'ocean-alliance'),
            'post_name'   => 'home',
            'post_status' => 'publish',
            'post_type'   => 'page',
        ));
    } else {
        $home_id = $home->ID;
    }

    update_option('show_on_front', 'page');
    update_option('page_on_front', $home_id);

    // Seed a sample blog post (idempotent — version-gated).
    if (get_option('oan_posts_seeded') !== '1') {
        if (!get_page_by_path('state-of-our-oceans-2026', OBJECT, 'post')) {
            wp_insert_post(array(
                'post_title'   => 'The State of Our Oceans: What 2026 Tells Us',
                'post_name'    => 'state-of-our-oceans-2026',
                'post_status'  => 'publish',
                'post_type'    => 'post',
                'post_excerpt' => 'Coral reefs have lost half their living cover. Sea temperatures keep breaking records. But protected areas work — and the Ocean Alliance Network is accelerating recovery through storytelling, technology, and community action.',
                'post_content' => '<p>The ocean covers 71 percent of our planet. It produces more than half the oxygen we breathe, regulates our climate, and feeds billions of people. Yet it is changing faster than at any point in human history.</p>' . "\n\n" .
                    '<h2>The numbers</h2>' . "\n" .
                    '<p>Coral reefs, which support roughly 25 percent of all marine species, have lost half their living coral cover in the past 50 years. Sea surface temperatures continue to break records. Marine populations declined by 36 percent between 1970 and 2019.</p>' . "\n\n" .
                    '<blockquote>The ocean does not need us. We need the ocean. Every second breath we take comes from it.</blockquote>' . "\n\n" .
                    '<h2>Where there is hope</h2>' . "\n" .
                    '<p>Protected marine areas work. When we give ecosystems space to recover, they do. The Ocean Alliance Network exists to accelerate that recovery — through storytelling that moves people, technology that empowers science, and partnerships that turn commitment into action.</p>' . "\n\n" .
                    '<h3>What OAN is doing</h3>' . "\n" .
                    '<ul>' . "\n" .
                    '<li><strong>Storytelling</strong> — Original films like Local Legends and Wave Maker bring the ocean to audiences who may never see it in person.</li>' . "\n" .
                    '<li><strong>Technology</strong> — Data platforms and monitoring tools that turn research into real-time protection.</li>' . "\n" .
                    '<li><strong>Community</strong> — A growing network of ambassadors leading cleanups, screenings, and education programs on coastlines around the world.</li>' . "\n" .
                    '</ul>' . "\n\n" .
                    '<h2>What you can do</h2>' . "\n" .
                    '<p>Protection starts with awareness. Share a film. Join a cleanup. Support the work. The ocean connects every one of us — and every one of us has a role in defending it.</p>',
            ));
        }
        update_option('oan_posts_seeded', '1');
    }
}
add_action('after_switch_theme', 'oan_on_activate');

/**
 * Run the post seeder once on init (covers the case where the theme is
 * already active when this code first deploys). Idempotent + gated.
 */
function oan_seed_post_now() {
    if (get_option('oan_posts_seeded') === '1') return;
    if (is_admin()) return;   // front-end only so it never blocks dashboard
    if (!get_page_by_path('state-of-our-oceans-2026', OBJECT, 'post')) {
        wp_insert_post(array(
            'post_title'   => 'The State of Our Oceans: What 2026 Tells Us',
            'post_name'    => 'state-of-our-oceans-2026',
            'post_status'  => 'publish',
            'post_type'    => 'post',
            'post_excerpt' => 'Coral reefs have lost half their living cover. Sea temperatures keep breaking records. But protected areas work — and the Ocean Alliance Network is accelerating recovery through storytelling, technology, and community action.',
            'post_content' => '<p>The ocean covers 71 percent of our planet. It produces more than half the oxygen we breathe, regulates our climate, and feeds billions of people. Yet it is changing faster than at any point in human history.</p>' . "\n\n" .
                '<h2>The numbers</h2>' . "\n" .
                '<p>Coral reefs, which support roughly 25 percent of all marine species, have lost half their living coral cover in the past 50 years. Sea surface temperatures continue to break records. Marine populations declined by 36 percent between 1970 and 2019.</p>' . "\n\n" .
                '<blockquote>The ocean does not need us. We need the ocean. Every second breath we take comes from it.</blockquote>' . "\n\n" .
                '<h2>Where there is hope</h2>' . "\n" .
                '<p>Protected marine areas work. When we give ecosystems space to recover, they do. The Ocean Alliance Network exists to accelerate that recovery — through storytelling that moves people, technology that empowers science, and partnerships that turn commitment into action.</p>' . "\n\n" .
                '<h3>What OAN is doing</h3>' . "\n" .
                '<ul>' . "\n" .
                '<li><strong>Storytelling</strong> — Original films like Local Legends and Wave Maker bring the ocean to audiences who may never see it in person.</li>' . "\n" .
                '<li><strong>Technology</strong> — Data platforms and monitoring tools that turn research into real-time protection.</li>' . "\n" .
                '<li><strong>Community</strong> — A growing network of ambassadors leading cleanups, screenings, and education programs on coastlines around the world.</li>' . "\n" .
                '</ul>' . "\n\n" .
                '<h2>What you can do</h2>' . "\n" .
                '<p>Protection starts with awareness. Share a film. Join a cleanup. Support the work. The ocean connects every one of us — and every one of us has a role in defending it.</p>',
        ));
    }
    update_option('oan_posts_seeded', '1');
}
add_action('init', 'oan_seed_post_now', 50);

/**
 * Optional: pingback header for older clients.
 */
function oan_pingback_header($headers) {
    if (is_singular() && pings_open()) {
        $headers['X-Pingback'] = get_bloginfo('pingback_url');
    }
    return $headers;
}
add_filter('wp_headers', 'oan_pingback_header');

/**
 * SEO meta tags + Open Graph + structured data (skill Phase 7).
 * Emits description, OG, Twitter card, and Organization JSON-LD.
 * Respects SEO plugins (Yoast/RankMath) if active — those plugins run
 * later on wp_head and emit their own canonical/description tags.
 */
function oan_meta_tags() {
    $uri = get_template_directory_uri();
    $default_og = $uri . '/assets/img/oan-media-7.jpg';
    $site_name  = get_bloginfo('name');
    $desc       = 'The Ocean Alliance Network (OAN) brings together leaders, innovators, influencers, and communities to protect our oceans through storytelling, technology, and strategic partnerships.';

    // Per-page description: excerpt on singular, default elsewhere.
    if (is_singular() && has_excerpt()) {
        $desc = wp_strip_all_tags(get_the_excerpt());
    }
    // Current page URL.
    $current_url = home_url(add_query_arg(array(), (isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '')));

    echo '<meta name="description" content="' . esc_attr($desc) . '">' . "\n";
    echo '<meta property="og:site_name" content="' . esc_attr($site_name) . '">' . "\n";
    echo '<meta property="og:type" content="' . (is_singular() ? 'article' : 'website') . '">' . "\n";
    echo '<meta property="og:title" content="' . esc_attr(wp_get_document_title()) . '">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr($desc) . '">' . "\n";
    echo '<meta property="og:url" content="' . esc_url($current_url) . '">' . "\n";

    // OG image: featured image on singular, default hero otherwise.
    if (is_singular() && has_post_thumbnail()) {
        $default_og = wp_get_attachment_image_url(get_post_thumbnail_id(), 'large');
    }
    echo '<meta property="og:image" content="' . esc_url($default_og) . '">' . "\n";
    echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
    echo '<meta name="twitter:title" content="' . esc_attr(wp_get_document_title()) . '">' . "\n";
    echo '<meta name="twitter:description" content="' . esc_attr($desc) . '">' . "\n";
    echo '<meta name="twitter:image" content="' . esc_url($default_og) . '">' . "\n";

    // Organization structured data on the homepage.
    if (is_front_page()) {
        $schema = array(
            '@context'    => 'https://schema.org',
            '@type'       => 'Organization',
            'name'        => 'Ocean Alliance Network',
            'url'         => home_url('/'),
            'logo'        => $uri . '/assets/img/oan-logo-wide-white.png',
            'description' => $desc,
            'sameAs'      => array('https://oceanalliancenetwork.org'),
        );
        echo '<script type="application/ld+json">' . wp_json_encode($schema) . '</script>' . "\n";
    }
}
add_action('wp_head', 'oan_meta_tags', 5);
