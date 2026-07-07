<?php
/**
 * The fallback template.
 * On a static-front-page setup, every Page either has a dedicated
 * page-{slug}.php template or falls through here. We route blog posts
 * to their single view and anything else to the front page.
 *
 * @package OceanAlliance
 */

if (is_singular()) {
    // Single blog post — minimal readable view.
    get_header();
    ?>
    <section class="section depth-sunlight">
        <div class="container narrow">
            <?php
            while (have_posts()) {
                the_post();
                echo '<span class="eyebrow">From the blog</span>';
                echo '<h1 class="section-title">' . esc_html(get_the_title()) . '</h1>';
                echo '<p class="blog-meta" style="margin-bottom:32px;color:var(--ink-faint)">' . esc_html(get_the_date()) . '</p>';
                the_content();
            }
            ?>
        </div>
    </section>
    <?php
    get_footer();
} else {
    // Anything else — send to the homepage.
    wp_safe_redirect(home_url('/'));
    exit;
}
