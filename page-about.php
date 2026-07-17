<?php
/**
 * Template Name: About
 * The About page template.
 *
 * @package OceanAlliance
 */

get_header();
$uri = get_template_directory_uri();
?>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="container narrow center">
        <span class="eyebrow reveal">About us</span>
        <h1 class="reveal">We are <em>one ocean</em>, one people.</h1>
        <p class="lead reveal">Ocean Alliance Network is a nonprofit coalition of scientists, storytellers, and coastal communities working to protect what connects us all — from the sunlit surface to the deepest trench.</p>
    </div>
</section>

<!-- STORY -->
<section class="section depth-sunlight">
    <div class="container narrow">
        <span class="eyebrow reveal">Our story</span>
        <h2 class="section-title reveal">A movement born on the water.</h2>
        <p class="reveal">Ocean Alliance Network began with a simple belief: that the ocean's story is best told by those who live closest to it. We connect researchers studying the deep with filmmakers who can bring that science to millions, and with the local communities who have defended these waters for generations.</p>
        <p class="reveal">Today, our work spans original documentary series, student filmmaking programs, coastal cleanups, and policy summits. Every project is built on the same foundation — that protecting the ocean starts with helping people fall in love with it.</p>
    </div>
</section>

<!-- FISCAL SPONSOR -->
<section id="fiscal-sponsor" class="section depth-twilight">
    <div class="container">
        <div class="info-card reveal">
            <div class="info-card-body">
                <span class="eyebrow">Fiscal Sponsor &amp; Tax Information</span>
                <h2 class="section-title">Donate with full confidence.</h2>
                <p class="lead">Ocean Alliance Network operates under a verified fiscal sponsor, making every contribution fully tax-deductible to the extent allowed by law. We are committed to radical transparency in how funds are received and spent.</p>

                <div class="tax-grid">
                    <div class="tax-item"><span class="tax-label">501(c)(3) Status</span><span class="tax-value">Verified</span></div>
                    <div class="tax-item"><span class="tax-label">Fiscal Sponsor</span><span class="tax-value">On file</span></div>
                    <div class="tax-item"><span class="tax-label">EIN / Tax ID</span><span class="tax-value">Available on request</span></div>
                </div>
                <p class="tax-note">Tax ID documentation is provided to donors upon gift confirmation and is available to grant-makers and institutional partners on request. <a href="<?php echo esc_url(oan_page_url('donate')); ?>">Make a donation →</a></p>
            </div>
            <div class="info-card-seal">
                <svg viewBox="0 0 120 120" aria-hidden="true">
                    <circle cx="60" cy="60" r="56" fill="none" stroke="var(--accent)" stroke-width="1" opacity=".3"/>
                    <circle cx="60" cy="60" r="44" fill="none" stroke="var(--accent)" stroke-width="1" opacity=".5"/>
                    <path d="M28 66c8 0 8-8 16-8s8 8 16 8 8-8 16-8 8 8 16 8 8-8 16-8" fill="none" stroke="var(--accent)" stroke-width="2.5" stroke-linecap="round"/>
                    <text x="60" y="48" text-anchor="middle" font-size="9" fill="var(--accent)" font-family="Inter" letter-spacing="2">501(c)(3)</text>
                    <text x="60" y="92" text-anchor="middle" font-size="7" fill="var(--ink-faint)" font-family="Inter" letter-spacing="1.5">NONPROFIT</text>
                </svg>
            </div>
        </div>
    </div>
</section>

<!-- STRATEGIC ADVISORS -->
<section id="strategic-advisors" class="section depth-twilight">
    <div class="container">
        <div class="section-head center reveal">
            <span class="eyebrow">Leadership</span>
            <h2 class="section-title">Strategic Advisors</h2>
            <p class="lead">Visionary leaders guiding the long-term direction of the alliance.</p>
        </div>
        <div class="people-grid">
            <article class="person reveal">
                <div class="placeholder placeholder--portrait"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="8" r="4"/><path d="M5 21c0-4 3-7 7-7s7 3 7 7"/></svg><span>Advisor Photo</span></div>
                <h4>Strategic Advisor</h4><p>Title &amp; organization</p>
            </article>
            <article class="person reveal">
                <div class="placeholder placeholder--portrait"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="8" r="4"/><path d="M5 21c0-4 3-7 7-7s7 3 7 7"/></svg><span>Advisor Photo</span></div>
                <h4>Strategic Advisor</h4><p>Title &amp; organization</p>
            </article>
            <article class="person reveal">
                <div class="placeholder placeholder--portrait"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="8" r="4"/><path d="M5 21c0-4 3-7 7-7s7 3 7 7"/></svg><span>Advisor Photo</span></div>
                <h4>Strategic Advisor</h4><p>Title &amp; organization</p>
            </article>
        </div>
        <p class="grid-note reveal">Full biographies forthcoming. <a href="<?php echo esc_url(oan_page_url('donate')); ?>">Support our work →</a></p>
    </div>
</section>

<!-- BOARD OF ADVISORS -->
<section id="advisors" class="section depth-midnight">
    <div class="container">
        <div class="section-head center reveal">
            <span class="eyebrow">Board of Advisors</span>
            <h2 class="section-title">A council of experts.</h2>
            <p class="lead">Scientists, filmmakers, and community leaders who lend their expertise to every program we run.</p>
        </div>
        <div class="advisors-wall reveal">
            <span class="advisor-chip">Advisor Name</span>
            <span class="advisor-chip">Advisor Name</span>
            <span class="advisor-chip">Advisor Name</span>
            <span class="advisor-chip">Advisor Name</span>
            <span class="advisor-chip">Advisor Name</span>
            <span class="advisor-chip">Advisor Name</span>
            <span class="advisor-chip">Advisor Name</span>
            <span class="advisor-chip">Advisor Name</span>
            <span class="advisor-chip">Advisor Name</span>
            <span class="advisor-chip">Advisor Name</span>
            <span class="advisor-chip">Advisor Name</span>
            <span class="advisor-chip">Advisor Name</span>
        </div>
        <p class="grid-note reveal">Names listed pending final board approval.</p>
    </div>
</section>

<!-- CTA -->
<section class="section depth-abyss">
    <div class="container narrow center">
        <div class="reveal">
            <h2 class="section-title">Join the alliance.</h2>
            <p class="lead" style="margin-bottom:32px">Your support funds science, story, and stewardship across every ocean on Earth.</p>
            <a href="<?php echo esc_url(oan_page_url('donate')); ?>" class="btn btn--primary">Donate today</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
