<?php
/**
 * Single blog post template.
 * Featured image hero at top, white article card with readable typography.
 * Still within the ocean-themed header/footer chrome.
 *
 * @package OceanAlliance
 */

get_header();

while (have_posts()) {
    the_post();
    $uri = get_template_directory_uri();
    $has_featured = has_post_thumbnail();
?>

<!-- ============================================
     POST HERO — featured image full-bleed
     ============================================ -->
<section class="post-hero">
    <?php if ($has_featured) { ?>
        <div class="post-hero-bg" style="background-image:url('<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>');"></div>
    <?php } else { ?>
        <div class="post-hero-bg" style="background-image:url('<?php echo esc_url($uri); ?>/assets/img/oan-hero-d1.jpg');"></div>
    <?php } ?>
    <div class="post-hero-overlay"></div>
    <div class="post-hero-content">
        <div class="container narrow">
            <span class="eyebrow reveal"><?php echo esc_html(get_the_date('F j, Y')); ?> · <?php the_category(', '); ?></span>
            <h1 class="post-title reveal"><?php the_title(); ?></h1>
            <p class="post-excerpt reveal"><?php echo esc_html(get_the_excerpt()); ?></p>
        </div>
    </div>
</section>

<!-- ============================================
     ARTICLE BODY — white card, readable typography
     ============================================ -->
<section class="post-body-section">
    <div class="container narrow">
        <article class="post-article reveal">
            <?php
            the_content();
            wp_link_pages(array(
                'before' => '<div class="post-page-links">' . esc_html__('Pages:', 'ocean-alliance'),
                'after'  => '</div>',
            ));
            ?>
            <div class="post-footer-meta">
                <div class="post-share">
                    <span>Share</span>
                    <a href="https://twitter.com/intent/tweet?url=<?php echo esc_url(get_permalink()); ?>" target="_blank" rel="noopener" aria-label="Share on X">X</a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url(get_permalink()); ?>" target="_blank" rel="noopener" aria-label="Share on Facebook">f</a>
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo esc_url(get_permalink()); ?>" target="_blank" rel="noopener" aria-label="Share on LinkedIn">in</a>
                </div>
            </div>
        </article>
    </div>
</section>

<?php
} // end while

get_footer();
