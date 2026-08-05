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
    <div class="page-hero-video" aria-hidden="true">
        <iframe src="https://www.youtube-nocookie.com/embed/tADnCEpbPI8?autoplay=1&mute=1&start=3860&loop=1&playlist=tADnCEpbPI8&controls=0&showinfo=0&modestbranding=1&rel=0&iv_load_policy=3&playsinline=1&disablekb=1" title="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
    <div class="page-hero-blocker" aria-hidden="true"></div>
    <div class="page-hero-overlay" aria-hidden="true"></div>
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
                <p class="lead">Ocean Alliance Network is a fiscally sponsored initiative under the <strong>Sustain OC Foundation</strong>, a 501(c)(3) nonprofit. Every contribution is fully tax-deductible to the extent allowed by law.</p>

                <div class="tax-grid">
                    <div class="tax-item"><span class="tax-label">501(c)(3) Status</span><span class="tax-value">Verified</span></div>
                    <div class="tax-item"><span class="tax-label">Fiscal Sponsor</span><span class="tax-value">Sustain OC Foundation</span></div>
                    <div class="tax-item"><span class="tax-label">Tax ID (EIN)</span><span class="tax-value">27-4353381</span></div>
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

<!-- STRATEGIC ADVISORS (merged — single section, white bg) -->
<section id="strategic-advisors" class="section white-section">
    <div class="container">
        <div class="section-head center reveal">
            <span class="eyebrow">Leadership</span>
            <h2 class="section-title">Strategic Advisors</h2>
            <p class="lead">Visionary leaders guiding the long-term direction of the alliance.</p>
        </div>
        <div class="people-grid">
            <?php
            $advisors = array(
                'alex-avant'             => 'Alex Avant',
                'charles-hambleton'      => 'Charles Hambleton',
                'david-chokachi'         => 'David Chokachi',
                'david-electric'         => 'David Electric',
                'ed-begley-jr'           => 'Ed Begley, Jr.',
                'jimmy-thomas'           => 'Jimmy Thomas',
                'kevin-legrett'          => 'Kevin Legrett',
                'metta-world-peace'      => 'Metta World Peace',
                'myguymars'              => 'MyGuyMars',
                'nathan-banda'           => 'Nathan Banda',
                'pierre-andre-senizergues' => 'Pierre-André Senizergues',
            );
            $advisor_uri = $uri . '/assets/img/advisors';
            foreach ($advisors as $slug => $name) { ?>
                <article class="person reveal">
                    <div class="person-photo"><img src="<?php echo esc_url($advisor_uri . '/' . $slug . '.png'); ?>" alt="<?php echo esc_attr($name); ?>" loading="lazy"/></div>
                    <h4><?php echo esc_html($name); ?></h4>
                </article>
            <?php } ?>
        </div>
    </div>
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
