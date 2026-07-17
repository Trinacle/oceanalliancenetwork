<?php
/**
 * Template Name: Community
 * The Community page template.
 *
 * @package OceanAlliance
 */

get_header();
$uri = get_template_directory_uri();
?>

<section class="page-hero">
    <div class="container narrow center">
        <span class="eyebrow reveal">Our Community</span>
        <h1 class="reveal">The movement is <em>you</em>.</h1>
        <p class="lead reveal">From coastal ambassadors to online advocates, the Ocean Alliance Network is powered by people who refuse to stand by while the ocean changes. Find your role below.</p>
    </div>
</section>

<!-- AMBASSADORS -->
<section id="ambassadors" class="section depth-sunlight">
    <div class="container">
        <div class="ambassador-grid">
            <div class="reveal">
                <span class="eyebrow">Become an Ambassador</span>
                <h2 class="section-title">Lead the movement on your coastline.</h2>
                <p class="lead">Ambassadors are the local face of Ocean Alliance Network. They organize beach cleanups, host film screenings, represent OAN at events, and rally their communities around the ocean. We provide the playbook, the network, and the platform — you bring the passion.</p>
                <ul class="check-list">
                    <li>Host local events &amp; screenings</li>
                    <li>Receive the OAN ambassador toolkit</li>
                    <li>Connect with a global network of leaders</li>
                    <li>Represent OAN at conferences &amp; summits</li>
                </ul>
                <a href="<?php echo esc_url(oan_page_url('donate')); ?>" class="btn btn--primary" style="margin-top:24px">Apply to be an Ambassador</a>
            </div>
            <div class="reveal">
                <div class="ambassador-cards">
                    <div class="amb-card"><div class="amb-avatar" data-initials="AM"></div><div><strong>Coastal Ambassador</strong><p>Big Sur, CA</p></div></div>
                    <div class="amb-card"><div class="amb-avatar" data-initials="AM"></div><div><strong>Reef Ambassador</strong><p>Florida Keys</p></div></div>
                    <div class="amb-card"><div class="amb-avatar" data-initials="AM"></div><div><strong>River Ambassador</strong><p>Portland, OR</p></div></div>
                    <div class="amb-card"><div class="amb-avatar" data-initials="AM"></div><div><strong>Student Ambassador</strong><p>UC San Diego</p></div></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BLOG -->
<section id="blog" class="section depth-twilight">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">From the blog</span>
            <h2 class="section-title">Stories &amp; dispatches.</h2>
        </div>
        <div class="blog-grid">
            <article class="blog-card reveal">
                <div class="blog-img"><img src="<?php echo esc_url($uri); ?>/assets/img/oan-media-8.jpg" alt="On the water with OAN" loading="lazy"/></div>
                <div class="blog-body"><span class="video-cat">Dispatch</span><h3>On the Water With OAN</h3><p>A day on the water with our Media Division crew and ambassadors.</p><span class="blog-meta">Field Report · 4 min read</span></div>
            </article>
            <article class="blog-card reveal">
                <div class="blog-img"><img src="<?php echo esc_url($uri); ?>/assets/img/oan-media-9.jpg" alt="Local Legends Live recap" loading="lazy"/></div>
                <div class="blog-body"><span class="video-cat">Recap</span><h3>Local Legends Live</h3><p>Highlights from our flagship community convening and the legends we honored.</p><span class="blog-meta">Event Recap · 6 min read</span></div>
            </article>
            <article class="blog-card reveal">
                <div class="blog-img"><img src="<?php echo esc_url($uri); ?>/assets/img/oan-media-3.jpg" alt="Storytelling for the ocean" loading="lazy"/></div>
                <div class="blog-body"><span class="video-cat">Opinion</span><h3>Why Storytelling Saves Seas</h3><p>How film can move millions to act for the ocean.</p><span class="blog-meta">Essay · 5 min read</span></div>
            </article>
        </div>

        <!-- More stories placeholder -->
        <div class="placeholder-gallery reveal" style="--cols:3;margin-top:24px">
            <div class="placeholder placeholder--video"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M8 11h8M8 15h5"/></svg><span>More Stories</span></div>
            <div class="placeholder placeholder--video"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M8 11h8M8 15h5"/></svg><span>More Stories</span></div>
            <div class="placeholder placeholder--video"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M8 11h8M8 15h5"/></svg><span>More Stories</span></div>
        </div>
    </div>
</section>

<!-- EVENTS -->
<section id="events" class="section depth-midnight">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Past Events</span>
            <h2 class="section-title">Where we've gathered.</h2>
        </div>
        <div class="events-timeline">
            <article class="event-row reveal">
                <div class="event-date">2026<span>MAR</span></div>
                <div class="event-body"><h3>Ocean Alliance Annual Summit</h3><p>Three days of convening with advisors, ambassadors, and partners. Keynotes, working groups, and a coastal cleanup.</p></div>
                <span class="event-tag">Summit</span>
            </article>
            <article class="event-row reveal">
                <div class="event-date">2025<span>OCT</span></div>
                <div class="event-body"><h3>Blue Economy Forum</h3><p>Convening conservationists and maritime industry leaders on sustainable ocean enterprise.</p></div>
                <span class="event-tag">Forum</span>
            </article>
            <article class="event-row reveal">
                <div class="event-date">2025<span>JUL</span></div>
                <div class="event-body"><h3>Storytellers Convening</h3><p>A gathering of the Media Division's filmmakers, students, and creators.</p></div>
                <span class="event-tag">Convening</span>
            </article>
            <article class="event-row reveal">
                <div class="event-date">2025<span>APR</span></div>
                <div class="event-body"><h3>Earth Day Coastal Cleanup</h3><p>Ambassador-led cleanups across 12 coastlines in a single day.</p></div>
                <span class="event-tag">Cleanup</span>
            </article>
        </div>

        <!-- Events photo gallery placeholder -->
        <div class="section-head reveal" style="margin-top:60px">
            <h3 style="font-size:1.4rem;color:var(--ink-soft)">Event Gallery</h3>
        </div>
        <div class="placeholder-gallery reveal" style="--cols:4">
            <div class="placeholder"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="9" cy="11" r="2"/><path d="M3 17l5-4 4 3 4-5 5 6"/></svg><span>Event Photo</span></div>
            <div class="placeholder"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="9" cy="11" r="2"/><path d="M3 17l5-4 4 3 4-5 5 6"/></svg><span>Event Photo</span></div>
            <div class="placeholder"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="9" cy="11" r="2"/><path d="M3 17l5-4 4 3 4-5 5 6"/></svg><span>Event Photo</span></div>
            <div class="placeholder"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="9" cy="11" r="2"/><path d="M3 17l5-4 4 3 4-5 5 6"/></svg><span>Event Photo</span></div>
        </div>
    </div>
</section>

<section class="section depth-abyss">
    <div class="container narrow center">
        <div class="reveal">
            <h2 class="section-title">Ready to dive in?</h2>
            <p class="lead" style="margin-bottom:32px">Become an ambassador, subscribe to the blog, or support the movement.</p>
            <a href="<?php echo esc_url(oan_page_url('donate')); ?>" class="btn btn--primary">Support the movement</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
