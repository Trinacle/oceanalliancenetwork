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
    $ver = '1.0.0';
    $uri = get_template_directory_uri();

    // Core stylesheet (the real CSS — root style.css only carries the WP theme header).
    wp_enqueue_style('oan-style', $uri . '/assets/css/style.css', array(), $ver);

    // Page-specific stylesheet — NOT loaded on the homepage.
    if (!is_front_page()) {
        wp_enqueue_style('oan-pages', $uri . '/assets/css/pages.css', array('oan-style'), $ver);
    }

    // Main interactions: scroll-depth, bubble canvas, mega menu, reveal, counters.
    wp_enqueue_script('oan-main', $uri . '/assets/js/main.js', array(), $ver, true);

    // Donate page script — only on the Donate page template.
    if (is_page_template('page-donate.php')) {
        wp_enqueue_script('oan-donate', $uri . '/assets/js/donate.js', array(), $ver, true);
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
}
add_action('after_switch_theme', 'oan_on_activate');

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
