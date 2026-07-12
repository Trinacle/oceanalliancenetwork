<?php
/**
 * The homepage template.
 *
 * @package OceanAlliance
 */

get_header();

$uri = get_template_directory_uri();
?>

<!-- ============================================
     HERO — the ocean surface
     ============================================ -->
<section id="hero">
    <div class="hero-bg" aria-hidden="true">
        <img src="<?php echo esc_url($uri); ?>/assets/img/oan-hero-d1.jpg" alt="" />
        <div class="hero-bg-overlay"></div>
    </div>
    <div class="hero-surface" aria-hidden="true">
        <svg class="surface-wave" viewBox="0 0 1440 120" preserveAspectRatio="none">
            <path d="M0,60 C180,100 360,20 720,60 C1080,100 1260,20 1440,60 L1440,120 L0,120 Z" fill="rgba(255,255,255,0.06)"/>
            <path d="M0,80 C240,40 480,120 720,80 C960,40 1200,120 1440,80 L1440,120 L0,120 Z" fill="rgba(255,255,255,0.04)"/>
        </svg>
    </div>

    <div class="hero-content reveal">
        <span class="eyebrow">A movement for the blue planet</span>
        <h1 class="hero-title">
            Uniting to <em>protect</em><br/>
            our oceans.
        </h1>
        <p class="hero-sub">The Ocean Alliance Network brings together leaders, innovators, influencers, and communities to protect our oceans — bridging conservation and action through storytelling, technology, and strategic partnerships.</p>
        <div class="hero-cta">
            <a href="<?php echo esc_url(oan_page_url('donate')); ?>" class="btn btn--primary">Dive in — Donate</a>
            <a href="#mission" class="btn btn--ghost">Explore the depths</a>
        </div>
    </div>

    <a href="#mission" class="scroll-cue" aria-label="<?php esc_attr_e('Scroll down', 'ocean-alliance'); ?>">
        <span class="mouse"><span class="wheel"></span></span>
        <span class="scroll-cue-text">SCROLL TO DESCEND</span>
    </a>
</section>

<!-- ============================================
     MISSION — sunlight zone
     ============================================ -->
<section id="mission" class="section depth-sunlight">
    <div class="container narrow">
        <span class="eyebrow reveal">Our mission</span>
        <h2 class="section-title reveal">A collaborative initiative to <em>protect our oceans.</em></h2>
        <p class="lead reveal">
            The Ocean Alliance Network (OAN) brings together leaders, innovators, influencers, and communities to protect our oceans. We bridge ocean conservation and action through storytelling, technology, and strategic partnerships — uniting research, education, and policy to create measurable impact for marine ecosystems and the communities that depend on them.
        </p>
        <div class="mission-focus reveal">
            <div class="focus-item"><span>01</span><p><strong>Amplify</strong> ocean conservation through film, media, and storytelling.</p></div>
            <div class="focus-item"><span>02</span><p><strong>Engage</strong> communities, influencers, and the next generation of ocean stewards.</p></div>
            <div class="focus-item"><span>03</span><p><strong>Advance</strong> research and technology that drives measurable protection.</p></div>
            <div class="focus-item"><span>04</span><p><strong>Build</strong> strategic partnerships across science, industry, and policy.</p></div>
            <div class="focus-item"><span>05</span><p><strong>Mobilize</strong> action through summits, campaigns, and ambassador programs.</p></div>
        </div>
    </div>

    <div class="stats-grid">
        <div class="stat reveal">
            <span class="stat-num" data-count="71">0</span><span class="stat-unit">%</span>
            <p>of Earth covered by ocean</p>
        </div>
        <div class="stat reveal">
            <span class="stat-num" data-count="50">0</span><span class="stat-unit">%</span>
            <p>of the oxygen we breathe comes from the sea</p>
        </div>
        <div class="stat reveal">
            <span class="stat-num" data-count="3" data-suffix="B">0</span>
            <p>people depend on the ocean for their livelihoods</p>
        </div>
        <div class="stat reveal">
            <span class="stat-num" data-count="1" data-suffix="/3">0</span>
            <p>of marine life is at risk without action</p>
        </div>
    </div>
</section>

<!-- ============================================
     FLAGSHIP CAMPAIGNS — the real OAN initiatives
     ============================================ -->
<section id="campaigns" class="section depth-twilight">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">What we do</span>
            <h2 class="section-title">Three flagship initiatives.</h2>
            <p class="lead">Each campaign bridges science and storytelling to drive measurable protection for marine ecosystems.</p>
        </div>
        <div class="campaigns-grid">
            <article class="campaign-card reveal">
                <span class="campaign-tag">Voice 4 Oceans · LEAF</span>
                <h3>Listen. Engage. Act. Forward.</h3>
                <p>Our flagship engagement framework — turning awareness into action by amplifying the voices of coastal communities, scientists, and the next generation of ocean stewards.</p>
            </article>
            <article class="campaign-card reveal">
                <span class="campaign-tag">TMDL Awareness</span>
                <h3>Total Maximum Daily Load</h3>
                <p>Driving public understanding of water-quality limits under the Clean Water Act — because what runs off our land ends up in the sea.</p>
            </article>
            <article class="campaign-card reveal">
                <span class="campaign-tag">Whale Strike Reduction</span>
                <h3>Protecting whales from ship strikes</h3>
                <p>Working with maritime partners on slow-transit corridors and real-time monitoring to reduce fatal vessel collisions with migrating whales.</p>
            </article>
        </div>
    </div>
</section>

<!-- ============================================
     TURTLE PARALLAX — full-width image break
     ============================================ -->
<section id="turtle-break" class="parallax-break">
    <div class="parallax-bg" style="background-image:url('<?php echo esc_url($uri); ?>/assets/img/oan-turtle.jpeg');"></div>
    <div class="parallax-overlay"></div>
    <div class="container narrow center parallax-content">
        <div class="reveal">
            <span class="eyebrow">Every creature counts</span>
            <h2 class="section-title">Six of seven sea turtle species are threatened with extinction.</h2>
            <p class="lead">From coral reefs to the open ocean, the ecosystems we depend on are connected by species like this one. OAN funds the science, the storytelling, and the community action that gives them a chance.</p>
            <a href="<?php echo esc_url(oan_page_url('donate')); ?>" class="btn btn--primary">Protect marine life</a>
        </div>
    </div>
</section>

<!-- ============================================
     HOW WE WORK — the OAN approach
     ============================================ -->
<section id="work" class="section depth-twilight">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">How we work</span>
            <h2 class="section-title">Bridging conservation and action.</h2>
            <p class="lead">OAN connects the dots between research, storytelling, and the people who can turn both into policy and protection.</p>
        </div>

        <div class="pillars">
            <article class="pillar reveal">
                <h3>Storytelling</h3>
                <p>Original films, commercials, and documentary series that bring the ocean to millions who may never see it.</p>
            </article>
            <article class="pillar reveal">
                <h3>Technology</h3>
                <p>Data, monitoring, and platforms that turn science into accessible tools for communities and decision-makers.</p>
            </article>
            <article class="pillar reveal">
                <h3>Partnerships</h3>
                <p>Strategic alliances uniting researchers, creators, brands, and coastal communities around shared goals.</p>
            </article>
            <article class="pillar reveal">
                <h3>Education</h3>
                <p>Programs and summits that empower the next generation of ocean stewards and informed citizens.</p>
            </article>
        </div>
    </div>
</section>

<!-- ============================================
     FEATURED FILM — local legends
     ============================================ -->
<section id="featured-film" class="section depth-twilight">
    <div class="container wide">
        <div class="film-card reveal">
            <div class="film-media">
                <img src="<?php echo esc_url($uri); ?>/assets/img/oan-media-8.jpg" alt="Local Legends — OAN crew on the water" loading="lazy" />
                <button class="film-play" aria-label="Play film"><svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z" fill="currentColor"/></svg></button>
                <div class="film-shimmer"></div>
            </div>
            <div class="film-body">
                <span class="eyebrow">Featured series</span>
                <h2 class="section-title">Local Legends</h2>
                <p>Profiles of the surfers, divers, fishers, and scientists who have made protecting the ocean their life's work. A documentary series from the Ocean Alliance Network Media Division.</p>
                <a href="<?php echo esc_url(oan_anchor_url('media', 'local-legends')); ?>" class="btn btn--ghost">Watch the series →</a>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     LOCAL LEGENDS LUAU — photo gallery
     ============================================ -->
<section id="luau-gallery" class="section depth-twilight">
    <div class="container wide">
        <div class="section-head center reveal">
            <span class="eyebrow">Local Legends Live Luau</span>
            <h2 class="section-title">A night celebrating ocean champions.</h2>
            <p class="lead">Our flagship gathering brought together advisors, ambassadors, filmmakers, and community leaders for an evening of storytelling, music, and commitment to the ocean.</p>
        </div>
        <div class="gallery-grid reveal">
            <div class="gallery-item gallery-item--tall"><img src="<?php echo esc_url($uri); ?>/assets/img/oan-media-2.jpg" alt="Local Legends Live Luau" loading="lazy"/></div>
            <div class="gallery-item"><img src="<?php echo esc_url($uri); ?>/assets/img/oan-media-3.jpg" alt="Local Legends Live Luau" loading="lazy"/></div>
            <div class="gallery-item"><img src="<?php echo esc_url($uri); ?>/assets/img/oan-media-5.jpg" alt="Local Legends Live Luau" loading="lazy"/></div>
            <div class="gallery-item gallery-item--wide"><img src="<?php echo esc_url($uri); ?>/assets/img/oan-media-8.jpg" alt="Local Legends Live Luau" loading="lazy"/></div>
            <div class="gallery-item"><img src="<?php echo esc_url($uri); ?>/assets/img/oan-media-4.jpg" alt="Local Legends Live Luau" loading="lazy"/></div>
            <div class="gallery-item gallery-item--tall"><img src="<?php echo esc_url($uri); ?>/assets/img/oan-media-6.jpg" alt="Local Legends Live Luau" loading="lazy"/></div>
            <div class="gallery-item"><img src="<?php echo esc_url($uri); ?>/assets/img/oan-media-10.jpg" alt="Local Legends Live Luau" loading="lazy"/></div>
            <div class="gallery-item gallery-item--wide"><img src="<?php echo esc_url($uri); ?>/assets/img/oan-media-9.jpg" alt="Local Legends Live Luau" loading="lazy"/></div>
        </div>
    </div>
</section>

<!-- ============================================
     2026 SUMMIT — save the date
     ============================================ -->
<section id="summit" class="section depth-midnight">
    <div class="container">
        <div class="summit-card reveal">
            <div class="summit-date">
                <span class="summit-month">SPRING</span>
                <span class="summit-year">2026</span>
            </div>
            <div class="summit-body">
                <span class="eyebrow">Save the date</span>
                <h2 class="section-title">Ocean Alliance Summit 2026</h2>
                <p>The next convening of the Ocean Alliance Network — bringing together scientists, storytellers, policymakers, and community leaders to align on the next wave of ocean protection. Three days of keynotes, working groups, film screenings, and a coastal cleanup.</p>
                <div class="summit-cta">
                    <a href="<?php echo esc_url(oan_anchor_url('community', 'events')); ?>" class="btn btn--ghost">Details →</a>
                    <a href="<?php echo esc_url(oan_page_url('donate')); ?>" class="btn btn--primary">Sponsor the summit</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     VOICES OF THE ALLIANCE — supporter stories
     ============================================ -->
<section id="supporter-circle" class="section depth-midnight">
    <div class="container">
        <div class="section-head center reveal">
            <span class="eyebrow">Voices of the Alliance</span>
            <h2 class="section-title">A community of <em>ocean defenders.</em></h2>
            <p class="lead">Scientists, storytellers, students, and coastal leaders — united by a belief that the ocean is worth fighting for. These are a few of the people who make OAN possible.</p>
        </div>
        <div class="voices-grid">
            <article class="voice-card reveal">
                <p class="voice-quote">"Storytelling is how we turn science into action. A single film can reach more people than a decade of research papers."</p>
                <p class="voice-name">— OAN Media Division</p>
            </article>
            <article class="voice-card reveal">
                <p class="voice-quote">"Our coastline is our livelihood. When we protect the ocean, we protect our families, our economy, and our future."</p>
                <p class="voice-name">— Coastal Ambassador</p>
            </article>
            <article class="voice-card reveal">
                <p class="voice-quote">"The next generation will inherit whatever ocean we leave them. That's why we educate, engage, and empower young ocean stewards."</p>
                <p class="voice-name">— Student Program Lead</p>
            </article>
        </div>
    </div>
</section>

<!-- ============================================
     AMBASSADOR CTA — the deep
     ============================================ -->
<section id="ambassador-cta" class="section depth-abyss">
    <div class="container">
        <div class="ambassador-split">
            <div class="reveal">
                <span class="eyebrow">Become an Ambassador</span>
                <h2 class="section-title">Lead the movement on your coastline.</h2>
                <p class="lead">Ambassadors organize events, host screenings, and represent Ocean Alliance Network in their communities. Join a global network of ocean defenders.</p>
                <a href="<?php echo esc_url(oan_anchor_url('community', 'ambassadors')); ?>" class="btn btn--primary">Apply to be an Ambassador</a>
            </div>
            <div class="ambassador-photo reveal">
                <img src="<?php echo esc_url($uri); ?>/assets/img/oan-media-9.jpg" alt="Local Legends Live — OAN community event" loading="lazy" />
                <span class="photo-caption">Local Legends Live</span>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     WAYS TO SUPPORT
     ============================================ -->
<section id="support" class="section depth-abyss">
    <div class="container">
        <div class="section-head center reveal">
            <span class="eyebrow">Ways to support</span>
            <h2 class="section-title">There's a role for everyone.</h2>
        </div>
        <div class="support-grid">
            <article class="support-card reveal">
                <h3>Support our work</h3>
                <p>Fund the films, science, and community programs that protect the ocean.</p>
                <a href="<?php echo esc_url(oan_page_url('donate')); ?>" class="link-arrow">Learn more →</a>
            </article>
            <article class="support-card reveal">
                <h3>Become an Ambassador</h3>
                <p>Lead OAN's work in your community — host events, screen films, and rally your coastline.</p>
                <a href="<?php echo esc_url(oan_anchor_url('community', 'ambassadors')); ?>" class="link-arrow">Apply →</a>
            </article>
            <article class="support-card reveal">
                <h3>Partner with us</h3>
                <p>Brands, foundations, and institutions backing ocean protection through collaboration.</p>
                <a href="mailto:hello@oceanalliancenetwork.org" class="link-arrow">Reach out →</a>
            </article>
            <article class="support-card reveal">
                <h3>Spread the word</h3>
                <p>Share our films, follow our campaigns, and amplify the voices fighting for the ocean.</p>
                <a href="<?php echo esc_url(oan_page_url('media')); ?>" class="link-arrow">Watch + share →</a>
            </article>
        </div>
    </div>
</section>

<!-- ============================================
     PARTNERS
     ============================================ -->
<section id="partners" class="section depth-abyss">
    <div class="container">
        <div class="partners-wrap reveal">
            <span class="eyebrow">In good company</span>
            <div class="partners-row">
                <div class="partner-logo"><img src="<?php echo esc_url($uri); ?>/assets/img/partner-uscseagrant.png" alt="USC Sea Grant" /></div>
                <div class="partner-logo"><img src="<?php echo esc_url($uri); ?>/assets/img/partner-sustainoc.png" alt="Sustain OC" /></div>
                <div class="partner-logo partner-logo--text">LookOut</div>
                <div class="partner-logo partner-logo--text">Local Legends</div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
