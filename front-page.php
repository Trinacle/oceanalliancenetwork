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
            We are <em>stewards</em><br/>
            of the living ocean.
        </h1>
        <p class="hero-sub">Ocean Alliance Network unites scientists, storytellers, and coastal communities to protect what connects us all.</p>
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
                <div class="campaign-icon">
                    <svg viewBox="0 0 32 32"><path d="M16 4C10 12 6 16 6 22a10 10 0 0 0 20 0c0-6-4-10-10-18z" fill="none" stroke="currentColor" stroke-width="2"/><path d="M16 12v10" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                </div>
                <span class="campaign-tag">Voice 4 Oceans · LEAF</span>
                <h3>Listen. Engage. Act. Forward.</h3>
                <p>Our flagship engagement framework — turning awareness into action by amplifying the voices of coastal communities, scientists, and the next generation of ocean stewards.</p>
            </article>
            <article class="campaign-card reveal">
                <div class="campaign-icon">
                    <svg viewBox="0 0 32 32"><path d="M4 20h24M6 20v-8h4v8M14 20V6h4v14M22 20v-10h4v10" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                </div>
                <span class="campaign-tag">TMDL Awareness</span>
                <h3>Total Maximum Daily Load</h3>
                <p>Driving public understanding of water-quality limits under the Clean Water Act — because what runs off our land ends up in the sea.</p>
            </article>
            <article class="campaign-card reveal">
                <div class="campaign-icon">
                    <svg viewBox="0 0 32 32"><path d="M4 18c4 0 4-4 8-4s4 4 8 4 4-4 8-4M4 24c4 0 4-4 8-4s4 4 8 4 4-4 8-4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><circle cx="24" cy="8" r="3" fill="none" stroke="currentColor" stroke-width="2"/></svg>
                </div>
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
                <div class="pillar-icon"><svg viewBox="0 0 32 32"><path d="M16 4C10 12 6 16 6 22a10 10 0 0 0 20 0c0-6-4-10-10-18z" fill="none" stroke="currentColor" stroke-width="2"/></svg></div>
                <h3>Storytelling</h3>
                <p>Original films, commercials, and documentary series that bring the ocean to millions who may never see it.</p>
            </article>
            <article class="pillar reveal">
                <div class="pillar-icon"><svg viewBox="0 0 32 32"><circle cx="16" cy="16" r="11" fill="none" stroke="currentColor" stroke-width="2"/><path d="M5 16h22M16 5c4 3 4 19 0 22M16 5c-4 3-4 19 0 22" fill="none" stroke="currentColor" stroke-width="2"/></svg></div>
                <h3>Technology</h3>
                <p>Data, monitoring, and platforms that turn science into accessible tools for communities and decision-makers.</p>
            </article>
            <article class="pillar reveal">
                <div class="pillar-icon"><svg viewBox="0 0 32 32"><path d="M16 6l3 6 7 1-5 5 1 7-6-3-6 3 1-7-5-5 7-1z" fill="none" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/></svg></div>
                <h3>Partnerships</h3>
                <p>Strategic alliances uniting researchers, creators, brands, and coastal communities around shared goals.</p>
            </article>
            <article class="pillar reveal">
                <div class="pillar-icon"><svg viewBox="0 0 32 32"><path d="M6 24c4 0 4-4 8-4s4 4 8 4 4-4 8-4M6 16c4 0 4-4 8-4s4 4 8 4 4-4 8-4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></div>
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
     FOUNDING SUPPORTER CIRCLE
     ============================================ -->
<section id="supporter-circle" class="section depth-midnight">
    <div class="container narrow">
        <div class="section-head reveal">
            <span class="eyebrow">Founding Supporter Circle</span>
            <h2 class="section-title">Be among the first to carry the tide.</h2>
            <p class="lead">An exclusive circle of founding supporters powering the launch of the Ocean Alliance Network Media Division. Your support funds original films, education, and protection of the ocean.</p>
        </div>

        <div class="tiers">
            <div class="tier reveal">
                <span class="tier-name">Tide</span>
                <span class="tier-amount">$100</span>
                <ul><li>Founding supporter recognition</li><li>Digital supporter badge</li><li>Behind-the-scenes updates</li></ul>
                <a href="<?php echo esc_url(oan_page_url('donate')); ?>" class="btn btn--ghost">Join</a>
            </div>
            <div class="tier tier--featured reveal">
                <span class="tier-flag">Most popular</span>
                <span class="tier-name">Current</span>
                <span class="tier-amount">$500</span>
                <ul><li>Everything in Tide</li><li>Name in film credits</li><li>Invitation to annual summit</li><li>Limited-edition print</li></ul>
                <a href="<?php echo esc_url(oan_page_url('donate')); ?>" class="btn btn--primary">Join</a>
            </div>
            <div class="tier reveal">
                <span class="tier-name">Deep Blue</span>
                <span class="tier-amount">$2,500</span>
                <ul><li>Everything in Current</li><li>Executive producer credit</li><li>Private screening invite</li><li>Direct line to the team</li></ul>
                <a href="<?php echo esc_url(oan_page_url('donate')); ?>" class="btn btn--ghost">Join</a>
            </div>
        </div>
        <p class="tiers-note reveal">All contributions are tax-deductible. <a href="<?php echo esc_url(oan_anchor_url('about', 'fiscal-sponsor')); ?>">Tax ID &amp; fiscal sponsor info →</a></p>
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
