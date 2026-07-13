<?php
/**
 * The fallback template.
 * Single posts are handled by single.php. Anything else that falls through
 * here (archives, 404s on a static-front-page setup) redirects home.
 *
 * @package OceanAlliance
 */

if (is_singular()) {
    get_template_part('single');
} else {
    wp_safe_redirect(home_url('/'));
    exit;
}
