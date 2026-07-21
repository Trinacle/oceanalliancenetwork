<?php
/**
 * Template Name: Media
 * The Media page template.
 *
 * @package OceanAlliance
 */

get_header();
$uri = get_template_directory_uri();
?>

<section class="page-hero">
    <div class="page-hero-video" aria-hidden="true">
        <iframe src="https://www.youtube-nocookie.com/embed/tADnCEpbPI8?autoplay=1&mute=1&start=6195&loop=1&playlist=tADnCEpbPI8&controls=0&showinfo=0&modestbranding=1&rel=0&iv_load_policy=3&playsinline=1" title="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
    <div class="page-hero-overlay" aria-hidden="true"></div>
    <div class="container narrow center">
        <span class="eyebrow reveal">Media Division</span>
        <h1 class="reveal">Stories from the <em>deep blue</em>.</h1>
        <p class="lead reveal">Original films, commercials, and documentary series from the Ocean Alliance Network Media Division — bringing the ocean to audiences who may never see it.</p>
    </div>
</section>

<!-- STUDENT COMMERCIALS -->
<section id="students" class="section depth-sunlight">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Student Program</span>
            <h2 class="section-title">Video Commercials — Students</h2>
            <p class="lead">A filmmaking program empowering the next generation of ocean storytellers. Students concept, shoot, and edit original commercials championing ocean conservation.</p>
        </div>
        <div class="video-grid">
            <article class="video-card reveal">
                <div class="video-thumb"><img src="<?php echo esc_url($uri); ?>/assets/img/oan-media-2.jpg" alt="Student film still" loading="lazy"/><button class="film-play" aria-label="Play"><svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z" fill="currentColor"/></svg></button><span class="video-duration">1:24</span></div>
                <div class="video-body"><span class="video-cat">Student Film</span><h3>Tide of Tomorrow</h3><p>A student-produced commercial on the future of our reefs.</p></div>
            </article>
            <article class="video-card reveal">
                <div class="video-thumb"><img src="<?php echo esc_url($uri); ?>/assets/img/oan-media-3.jpg" alt="Student film still" loading="lazy"/><button class="film-play" aria-label="Play"><svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z" fill="currentColor"/></svg></button><span class="video-duration">0:58</span></div>
                <div class="video-body"><span class="video-cat">Student Film</span><h3>Last Wave</h3><p>One surfer's call to protect the break that raised them.</p></div>
            </article>
            <article class="video-card reveal">
                <div class="video-thumb"><img src="<?php echo esc_url($uri); ?>/assets/img/oan-media-5.jpg" alt="Student film still" loading="lazy"/><button class="film-play" aria-label="Play"><svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z" fill="currentColor"/></svg></button><span class="video-duration">2:10</span></div>
                <div class="video-body"><span class="video-cat">Student Film</span><h3>Beneath the Surface</h3><p>A diver's perspective on a changing coastline.</p></div>
            </article>
        </div>

        <!-- More student films placeholder -->
        <div class="placeholder-gallery reveal" style="--cols:3;margin-top:24px">
            <div class="placeholder placeholder--video"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M10 8l6 4-6 4z" fill="currentColor"/></svg><span>More Student Films</span></div>
            <div class="placeholder placeholder--video"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M10 8l6 4-6 4z" fill="currentColor"/></svg><span>More Student Films</span></div>
            <div class="placeholder placeholder--video"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M10 8l6 4-6 4z" fill="currentColor"/></svg><span>More Student Films</span></div>
        </div>
    </div>
</section>

<!-- WAVE MAKER -->
<section id="wavemaker" class="section depth-twilight">
    <div class="container wide">
        <div class="film-card reveal">
            <div class="film-body" style="order:1">
                <span class="eyebrow">Original Series</span>
                <h2 class="section-title">Wave Maker</h2>
                <p>The flagship series that started it all. Wave Maker follows the people and projects making real waves in ocean conservation — from coral restoration labs to deep-sea research vessels.</p>
                <a href="#" class="btn btn--ghost">Watch the series →</a>
            </div>
            <div class="film-media" style="order:2">
                <img src="<?php echo esc_url($uri); ?>/assets/img/oan-media-7.jpg" alt="Wave Maker — OAN crew on the water" loading="lazy"/>
                <button class="film-play" aria-label="Play film"><svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z" fill="currentColor"/></svg></button>
                <div class="film-shimmer"></div>
            </div>
        </div>
    </div>
</section>

<!-- LOCAL LEGENDS -->
<section id="local-legends" class="section depth-twilight">
    <div class="container">
        <div class="section-head center reveal">
            <span class="eyebrow">Featured Series</span>
            <h2 class="section-title">Local Legends</h2>
            <p class="lead">Profiles of the surfers, divers, fishers, and scientists who have made protecting the ocean their life's work.</p>
        </div>
        <div class="legends-grid">
            <article class="legend-card reveal">
                <div class="legend-img"><img src="<?php echo esc_url($uri); ?>/assets/img/oan-media-11.jpg" alt="Local Legend portrait" loading="lazy"/></div>
                <h3>The Storyteller</h3><p>Documentary filmmaker, OAN Media Division</p>
            </article>
            <article class="legend-card reveal">
                <div class="legend-img"><img src="<?php echo esc_url($uri); ?>/assets/img/oan-media-12.jpg" alt="Local Legend portrait" loading="lazy"/></div>
                <h3>The Host</h3><p>Local Legends Live, emcee &amp; advocate</p>
            </article>
            <article class="legend-card reveal">
                <div class="legend-img"><img src="<?php echo esc_url($uri); ?>/assets/img/oan-media-13.jpg" alt="Local Legend portrait" loading="lazy"/></div>
                <h3>The Scientist</h3><p>Marine researcher &amp; field advisor</p>
            </article>
            <article class="legend-card reveal">
                <div class="legend-img"><img src="<?php echo esc_url($uri); ?>/assets/img/oan-media-14.jpg" alt="Local Legend portrait" loading="lazy"/></div>
                <h3>The Captain</h3><p>Vessel captain &amp; ocean steward</p>
            </article>
        </div>
    </div>
</section>

<!-- CONFERENCES -->
<section id="conferences" class="section depth-midnight">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Convenings</span>
            <h2 class="section-title">Conferences &amp; Summits</h2>
            <p class="lead">Bringing scientists, policymakers, and storytellers together to align on the future of ocean protection.</p>
        </div>

        <div class="conf-banner reveal">
            <img src="<?php echo esc_url($uri); ?>/assets/img/oan-media-9.jpg" alt="Local Legends Live — OAN summit event" loading="lazy"/>
            <div class="conf-banner-overlay">
                <span class="video-cat">Recap</span>
                <h3>Local Legends Live</h3>
                <p>A flagship OAN convening — bringing together advisors, ambassadors, filmmakers, and partners.</p>
            </div>
        </div>

        <div class="conf-list">
            <article class="conf-card reveal">
                <div class="conf-date"><span class="conf-year">2026</span><span class="conf-month">SPRING</span></div>
                <div class="conf-body"><span class="video-cat">Annual Summit</span><h3>Ocean Alliance Summit</h3><p>Our flagship convening of advisors, ambassadors, and partners. Keynotes, working groups, and a coastal cleanup.</p></div>
                <a href="<?php echo esc_url(oan_anchor_url('community', 'events')); ?>" class="conf-link">Highlights →</a>
            </article>
            <article class="conf-card reveal">
                <div class="conf-date"><span class="conf-year">2025</span><span class="conf-month">FALL</span></div>
                <div class="conf-body"><span class="video-cat">Conference</span><h3>Blue Economy Forum</h3><p>Bridging conservation and commerce in the maritime sector.</p></div>
                <a href="<?php echo esc_url(oan_anchor_url('community', 'events')); ?>" class="conf-link">Recap →</a>
            </article>
            <article class="conf-card reveal">
                <div class="conf-date"><span class="conf-year">2025</span><span class="conf-month">SUMMER</span></div>
                <div class="conf-body"><span class="video-cat">Summit</span><h3>Storytellers Convening</h3><p>A gathering of the Media Division's filmmakers and creators.</p></div>
                <a href="<?php echo esc_url(oan_anchor_url('community', 'events')); ?>" class="conf-link">Recap →</a>
            </article>
        </div>

        <!-- Conference photo gallery placeholder -->
        <div class="section-head reveal" style="margin-top:60px">
            <h3 style="font-size:1.4rem;color:var(--ink-soft)">Summit &amp; Conference Gallery</h3>
        </div>
        <div class="placeholder-gallery reveal" style="--cols:4">
            <div class="placeholder"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="9" cy="11" r="2"/><path d="M3 17l5-4 4 3 4-5 5 6"/></svg><span>Photo</span></div>
            <div class="placeholder"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="9" cy="11" r="2"/><path d="M3 17l5-4 4 3 4-5 5 6"/></svg><span>Photo</span></div>
            <div class="placeholder"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="9" cy="11" r="2"/><path d="M3 17l5-4 4 3 4-5 5 6"/></svg><span>Photo</span></div>
            <div class="placeholder"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="9" cy="11" r="2"/><path d="M3 17l5-4 4 3 4-5 5 6"/></svg><span>Photo</span></div>
        </div>
    </div>
</section>

<section class="section depth-abyss">
    <div class="container narrow center">
        <div class="reveal">
            <h2 class="section-title">Fund the next story.</h2>
            <p class="lead" style="margin-bottom:32px">Your support makes original ocean filmmaking possible.</p>
            <a href="<?php echo esc_url(oan_page_url('donate')); ?>" class="btn btn--primary">Become a supporter</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
