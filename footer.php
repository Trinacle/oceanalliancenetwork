<?php
/**
 * The footer for our theme.
 *
 * @package OceanAlliance
 */
?>
</main><!-- #main -->

<!-- ============================================
     FOOTER
     ============================================ -->
<footer id="site-footer">
    <div class="footer-inner">
        <div class="footer-brand">
            <svg class="brand-mark" viewBox="0 0 48 48" aria-hidden="true">
                <path d="M4 30c4 0 4-4 8-4s4 4 8 4 4-4 8-4 4 4 8 4 4-4 8-4" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/>
                <circle cx="24" cy="14" r="5" fill="currentColor"/>
            </svg>
            <p class="footer-tag">Ocean Alliance Network</p>
            <p class="footer-mission">Protecting the blue planet, together.</p>
        </div>
        <div class="footer-cols">
            <div>
                <h6>About</h6>
                <a href="<?php echo esc_url(oan_anchor_url('about', 'fiscal-sponsor')); ?>">Fiscal Sponsor</a>
                <a href="<?php echo esc_url(oan_anchor_url('about', 'strategic-advisors')); ?>">Strategic Advisors</a>
                <a href="<?php echo esc_url(oan_anchor_url('about', 'advisors')); ?>">Board of Advisors</a>
            </div>
            <div>
                <h6>Media</h6>
                <a href="<?php echo esc_url(oan_anchor_url('media', 'students')); ?>">Student Films</a>
                <a href="<?php echo esc_url(oan_anchor_url('media', 'wavemaker')); ?>">Wave Maker</a>
                <a href="<?php echo esc_url(oan_anchor_url('media', 'local-legends')); ?>">Local Legends</a>
                <a href="<?php echo esc_url(oan_anchor_url('media', 'conferences')); ?>">Conferences</a>
            </div>
            <div>
                <h6>Community</h6>
                <a href="<?php echo esc_url(oan_anchor_url('community', 'ambassadors')); ?>">Ambassadors</a>
                <a href="<?php echo esc_url(oan_anchor_url('community', 'blog')); ?>">Blog</a>
                <a href="<?php echo esc_url(oan_anchor_url('community', 'events')); ?>">Events</a>
            </div>
            <div>
                <h6>Support</h6>
                <a href="<?php echo esc_url(oan_page_url('donate')); ?>">Donate</a>
                <a href="<?php echo esc_url(oan_anchor_url('about', 'fiscal-sponsor')); ?>">Tax ID Info</a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; <?php echo esc_html(date_i18n('Y')); ?> Ocean Alliance Network. A 501(c)(3) nonprofit.</p>
        <p class="footer-credit">Designed for the depths · build 1.0.1</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
