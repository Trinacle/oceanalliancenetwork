<?php
/**
 * The footer for our theme.
 * Spacious editorial design: wave divider, brand column + social,
 * 3 link columns, newsletter band, legal row.
 *
 * @package OceanAlliance
 */
?>
</main><!-- #main -->

<!-- ============================================
     FOOTER — spacious editorial design
     ============================================ -->
<svg class="footer-wave" viewBox="0 0 1440 60" preserveAspectRatio="none" aria-hidden="true">
    <path d="M0,30 C180,55 360,5 720,30 C1080,55 1260,5 1440,30 L1440,60 L0,60 Z"/>
</svg>

<footer id="site-footer">
    <div class="footer-inner">
        <!-- Brand column -->
        <div class="footer-brand-col">
            <img class="brand-logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/oan-logo-wide.png" alt="<?php esc_attr_e('Ocean Alliance Network', 'ocean-alliance'); ?>" />
            <p class="footer-tag">Protecting the blue planet, together.</p>
            <p class="footer-mission">A collaborative initiative bringing together leaders, innovators, and communities to defend the ocean — from the surface to the deep.</p>
            <div class="footer-social">
                <a href="#" aria-label="Instagram"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg></a>
                <a href="#" aria-label="YouTube"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M21.6 7.2s-.2-1.4-.8-2c-.8-.8-1.7-.8-2.1-.9C15.9 4 12 4 12 4s-3.9 0-6.7.3c-.4 0-1.3.1-2.1.9-.6.6-.8 2-.8 2S2 8.8 2 10.5v1.6c0 1.7.2 3.3.2 3.3s.2 1.4.8 2c.8.8 1.9.8 2.4.9 1.7.2 6.6.3 6.6.3s3.9 0 6.7-.3c.4 0 1.3-.1 2.1-.9.6-.6.8-2 .8-2s.2-1.6.2-3.3v-1.6c0-1.7-.2-3.3-.2-3.3zM9.8 14.4V8l5.2 3.2-5.2 3.2z"/></svg></a>
                <a href="#" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.5 2h-17A1.5 1.5 0 002 3.5v17A1.5 1.5 0 003.5 22h17a1.5 1.5 0 001.5-1.5v-17A1.5 1.5 0 0020.5 2zM8 19H5v-9h3zM6.5 8.25A1.75 1.75 0 118.3 6.5a1.78 1.78 0 01-1.8 1.75zM19 19h-3v-4.74c0-1.42-.6-1.93-1.38-1.93A1.74 1.74 0 0013 14.19a.66.66 0 000 .14V19h-3v-9h2.9v1.3a3.11 3.11 0 012.7-1.4c1.55 0 3.36.86 3.36 3.66z"/></svg></a>
            </div>
        </div>

        <!-- Link columns -->
        <div class="footer-col">
            <h6>Explore</h6>
            <a href="<?php echo esc_url(oan_page_url('about')); ?>">About OAN</a>
            <a href="<?php echo esc_url(oan_page_url('media')); ?>">Media Division</a>
            <a href="<?php echo esc_url(oan_page_url('community')); ?>">Community</a>
            <a href="<?php echo esc_url(oan_anchor_url('about', 'campaigns')); ?>">Our Campaigns</a>
        </div>
        <div class="footer-col">
            <h6>Get Involved</h6>
            <a href="<?php echo esc_url(oan_anchor_url('community', 'ambassadors')); ?>">Become an Ambassador</a>
            <a href="<?php echo esc_url(oan_page_url('donate')); ?>">Donate</a>
            <a href="<?php echo esc_url(oan_anchor_url('about', 'fiscal-sponsor')); ?>">Fiscal Sponsor &amp; Tax ID</a>
            <a href="<?php echo esc_url(oan_anchor_url('community', 'blog')); ?>">Read the Blog</a>
        </div>
        <div class="footer-col">
            <h6>Watch</h6>
            <a href="<?php echo esc_url(oan_anchor_url('media', 'local-legends')); ?>">Local Legends</a>
            <a href="<?php echo esc_url(oan_anchor_url('media', 'wavemaker')); ?>">Wave Maker</a>
            <a href="<?php echo esc_url(oan_anchor_url('media', 'students')); ?>">Student Films</a>
            <a href="<?php echo esc_url(oan_anchor_url('media', 'conferences')); ?>">Conferences</a>
        </div>

        <!-- Newsletter band -->
        <div class="footer-newsletter">
            <div>
                <h4>Join the tide.</h4>
                <p>Ocean stories, campaign updates, and ways to help — monthly. No noise.</p>
            </div>
            <form class="footer-newsletter-form" onsubmit="return false;">
                <input type="email" placeholder="your@email.com" aria-label="Email address" required />
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; <?php echo esc_html(date_i18n('Y')); ?> Ocean Alliance Network · A 501(c)(3) nonprofit.</p>
        <div class="footer-legal">
            <a href="<?php echo esc_url(oan_anchor_url('about', 'fiscal-sponsor')); ?>">Tax ID Info</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
