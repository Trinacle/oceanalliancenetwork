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
        <div class="hero-yt-wrapper">
            <iframe
                src="https://www.youtube-nocookie.com/embed/tADnCEpbPI8?autoplay=1&mute=1&start=3319&loop=1&playlist=tADnCEpbPI8&controls=0&showinfo=0&modestbranding=1&rel=0&iv_load_policy=3&playsinline=1"
                title=""
                frameborder="0"
                allow="autoplay; encrypted-media"
                allowfullscreen></iframe>
        </div>
    </div>

    <div class="hero-content reveal">
        <span class="eyebrow">Innovation, Collaboration &amp; Conservation</span>
        <h1 class="hero-title">
            Uniting Leaders for<br/>
            Ocean <em>Conservation</em>,<br/>
            Innovation &amp; Impact.
        </h1>
        <p class="hero-sub">OAN brings together coastal stakeholders, educators, innovators, investors, influencers, and community leaders to protect our oceans, improve water quality, and build a thriving Blue Economy.</p>
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
     FLAGSHIP CAMPAIGNS — full-width WHITE section (right below hero)
     ============================================ -->
<section id="campaigns" class="section white-section">
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
     MISSION — sunlight zone
     ============================================ -->
<section id="mission" class="section depth-sunlight">
    <div class="container">
        <div class="mission-intro reveal" style="text-align:center;max-width:700px;margin:0 auto 60px">
            <span class="eyebrow">Our mission</span>
            <h2 class="section-title">Smart Seas, <em>Safe Ocean.</em></h2>
            <p class="lead">
                To advance Ocean Conservation, Empower Future Leaders and build Sustainable Communities through collaboration, innovation, education, and storytelling.
            </p>
        </div>
    </div>

    <!-- Focus area 1: Protect Oceans -->
    <div class="focus-section reveal">
        <div class="container">
            <div class="focus-row">
                <div class="focus-img"><img src="<?php echo esc_url($uri); ?>/assets/img/focus-protect-oceans.jpg" alt="Protect Oceans" loading="lazy"/></div>
                <div class="focus-content">
                    <span class="focus-tag">01 — Protect Oceans</span>
                    <h3>Protect Oceans. Empower Students. Create Lasting Impact.</h3>
                    <p>OAN supports partnerships and programs that protect local waterways and advance healthier coastal ecosystems.</p>
                    <ul class="focus-bullets">
                        <li>Protecting water quality in coastal and urban waterways</li>
                        <li>Reducing TMDL pollutants, including copper-based boat paint contamination</li>
                        <li>Reducing plastic pollution and marine debris</li>
                        <li>Reducing impacts of DDT on Southern California coastline</li>
                        <li>Supporting innovative technologies that improve ocean and watershed health</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Focus area 2: Ocean Innovation -->
    <div class="focus-section reveal">
        <div class="container">
            <div class="focus-row focus-row--reverse">
                <div class="focus-img"><img src="<?php echo esc_url($uri); ?>/assets/img/focus-ocean-innovation.jpg" alt="Ocean Innovation" loading="lazy"/></div>
                <div class="focus-content">
                    <span class="focus-tag">02 — Ocean Innovation</span>
                    <h3>Advancing solutions for a sustainable Blue Economy</h3>
                    <p>OAN helps connect innovators, investors, researchers, and community leaders to advance practical solutions for ocean conservation.</p>
                    <ul class="focus-bullets">
                        <li>Advancing AI and emerging technologies to prevent whale strikes</li>
                        <li>Supporting clean marine transportation and sustainable ocean industries</li>
                        <li>Showcasing solutions that strengthen the Blue Economy</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Focus area 3: Youth Leadership -->
    <div class="focus-section reveal">
        <div class="container">
            <div class="focus-row">
                <div class="focus-img"><img src="<?php echo esc_url($uri); ?>/assets/img/focus-youth-leadership.jpg" alt="Youth Leadership" loading="lazy"/></div>
                <div class="focus-content">
                    <span class="focus-tag">03 — Empower Students</span>
                    <h3>Youth Leadership &amp; Workforce Development</h3>
                    <p>OAN empowers students through environmental education, storytelling, mentorship, and hands-on career experiences.</p>
                    <ul class="focus-bullets">
                        <li>Environmental leadership and storytelling programs</li>
                        <li>Career pathways in sustainability, media, science, and technology</li>
                        <li>Student access to industry leaders, mentors, and real-world opportunities</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Focus area 4: Community Engagement -->
    <div class="focus-section reveal">
        <div class="container">
            <div class="focus-row focus-row--reverse">
                <div class="focus-img"><img src="<?php echo esc_url($uri); ?>/assets/img/focus-community.jpg" alt="Community Engagement" loading="lazy"/></div>
                <div class="focus-content">
                    <span class="focus-tag">04 — Community Engagement</span>
                    <h3>Curated events that inspire collaboration and action</h3>
                    <p>OAN produces and supports ocean conservation events that bring together stakeholders, students, media, businesses, and local communities.</p>
                    <ul class="focus-bullets">
                        <li>Curated events that inspire collaboration and action</li>
                        <li>Educational experiences that connect communities to ocean solutions</li>
                        <li>Partnerships that turn awareness into measurable impact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Focus area 5: Storytelling / Media Division -->
    <div class="focus-section reveal">
        <div class="container">
            <div class="focus-row">
                <div class="focus-img"><img src="<?php echo esc_url($uri); ?>/assets/img/focus-media-division.jpg" alt="OAN Media Division" loading="lazy"/></div>
                <div class="focus-content">
                    <span class="focus-tag">05 — Storytelling</span>
                    <h3>Ocean Alliance Network Media Division</h3>
                    <p>The OAN Media Division creates opportunities for emerging storytellers and young talent to cover influential events, interview industry leaders, and produce content that inspires environmental awareness and action.</p>
                    <ul class="focus-bullets">
                        <li>Media training, mentorship, and hands-on experiences</li>
                        <li>LEAF Student Impact Series — Leaders of Environmental Action Films</li>
                        <li>Coverage of events like Roth Capital, Billabong XXL Awards, and pro surf contests</li>
                    </ul>
                </div>
            </div>
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
     STRATEGIC ADVISORS (white bg, with IG reels) — moved BEFORE Luau
     ============================================ -->
<section id="advisor-spotlight" class="section white-section">
    <div class="container">
        <div class="section-head center reveal">
            <span class="eyebrow">Strategic Advisors</span>
            <h2 class="section-title">The names behind the <em>mission.</em></h2>
            <p class="lead">Celebrities, scientists, and ocean advocates who lend their voice, expertise, and platform to the Ocean Alliance Network.</p>
        </div>
        <div class="reels-grid">
            <a class="reel-card reveal" href="https://www.instagram.com/oceanalliancenetwork/reel/DZVLvIzBXKI/" target="_blank" rel="noopener">
                <div class="reel-thumb"><iframe src="https://www.instagram.com/reel/DZVLvIzBXKI/embed/" loading="lazy" scrolling="no" allowtransparency="true" title="OAN advisor reel"></iframe></div>
                <span class="reel-label">Featured Advisor</span>
            </a>
            <a class="reel-card reveal" href="https://www.instagram.com/oceanalliancenetwork/reel/DXaGLv0SPm2/" target="_blank" rel="noopener">
                <div class="reel-thumb"><iframe src="https://www.instagram.com/reel/DXaGLv0SPm2/embed/" loading="lazy" scrolling="no" allowtransparency="true" title="OAN advisor reel"></iframe></div>
                <span class="reel-label">Featured Advisor</span>
            </a>
            <a class="reel-card reveal" href="https://www.instagram.com/oceanalliancenetwork/reel/DXXnyqVhHbm/" target="_blank" rel="noopener">
                <div class="reel-thumb"><iframe src="https://www.instagram.com/reel/DXXnyqVhHbm/embed/" loading="lazy" scrolling="no" allowtransparency="true" title="OAN advisor reel"></iframe></div>
                <span class="reel-label">Featured Advisor</span>
            </a>
        </div>
    </div>
</section>

<!-- ============================================
     EVENT PHOTO GALLERY — clickable lightbox, lazy-loaded
     ============================================ -->
<section id="event-gallery" class="section depth-twilight">
    <div class="container wide">
        <div class="section-head center reveal">
            <span class="eyebrow">Event Gallery</span>
            <h2 class="section-title">Moments that <em>matter.</em></h2>
            <p class="lead">From Local Legends Luau to Ocean Alliance Summits, Tide to Table, and student film premieres — these are the gatherings that bring our mission to life.</p>
        </div>
        <div class="event-gallery-grid reveal" id="event-gallery-grid">
            <button class="event-gallery-item" data-full="<?php echo esc_url($uri); ?>/assets/img/oan-media-2.jpg"><img src="<?php echo esc_url($uri); ?>/assets/img/oan-media-2.jpg" alt="OAN event" loading="lazy"/></button>
            <button class="event-gallery-item" data-full="<?php echo esc_url($uri); ?>/assets/img/oan-media-3.jpg"><img src="<?php echo esc_url($uri); ?>/assets/img/oan-media-3.jpg" alt="OAN event" loading="lazy"/></button>
            <button class="event-gallery-item" data-full="<?php echo esc_url($uri); ?>/assets/img/oan-media-5.jpg"><img src="<?php echo esc_url($uri); ?>/assets/img/oan-media-5.jpg" alt="OAN event" loading="lazy"/></button>
            <button class="event-gallery-item" data-full="<?php echo esc_url($uri); ?>/assets/img/oan-media-4.jpg"><img src="<?php echo esc_url($uri); ?>/assets/img/oan-media-4.jpg" alt="OAN event" loading="lazy"/></button>
            <button class="event-gallery-item" data-full="<?php echo esc_url($uri); ?>/assets/img/oan-media-6.jpg"><img src="<?php echo esc_url($uri); ?>/assets/img/oan-media-6.jpg" alt="OAN event" loading="lazy"/></button>
            <button class="event-gallery-item" data-full="<?php echo esc_url($uri); ?>/assets/img/oan-media-9.jpg"><img src="<?php echo esc_url($uri); ?>/assets/img/oan-media-9.jpg" alt="OAN event" loading="lazy"/></button>
            <button class="event-gallery-item" data-full="<?php echo esc_url($uri); ?>/assets/img/oan-media-10.jpg"><img src="<?php echo esc_url($uri); ?>/assets/img/oan-media-10.jpg" alt="OAN event" loading="lazy"/></button>
            <button class="event-gallery-item" data-full="<?php echo esc_url($uri); ?>/assets/img/oan-media-11.jpg"><img src="<?php echo esc_url($uri); ?>/assets/img/oan-media-11.jpg" alt="OAN event" loading="lazy"/></button>
            <button class="event-gallery-item" data-full="<?php echo esc_url($uri); ?>/assets/img/oan-media-12.jpg"><img src="<?php echo esc_url($uri); ?>/assets/img/oan-media-12.jpg" alt="OAN event" loading="lazy"/></button>
            <button class="event-gallery-item" data-full="<?php echo esc_url($uri); ?>/assets/img/oan-media-13.jpg"><img src="<?php echo esc_url($uri); ?>/assets/img/oan-media-13.jpg" alt="OAN event" loading="lazy"/></button>
            <button class="event-gallery-item" data-full="<?php echo esc_url($uri); ?>/assets/img/oan-media-14.jpg"><img src="<?php echo esc_url($uri); ?>/assets/img/oan-media-14.jpg" alt="OAN event" loading="lazy"/></button>
            <button class="event-gallery-item" data-full="<?php echo esc_url($uri); ?>/assets/img/oan-media-15.jpg"><img src="<?php echo esc_url($uri); ?>/assets/img/oan-media-15.jpg" alt="OAN event" loading="lazy"/></button>
        </div>
    </div>
</section>

<!-- Lightbox overlay -->
<div class="lightbox" id="lightbox" aria-hidden="true" role="dialog">
    <button class="lightbox-close" id="lightbox-close" aria-label="Close">&times;</button>
    <button class="lightbox-prev" id="lightbox-prev" aria-label="Previous">&#8249;</button>
    <img class="lightbox-img" id="lightbox-img" src="" alt="" />
    <button class="lightbox-next" id="lightbox-next" aria-label="Next">&#8250;</button>
</div>

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
     FOLLOW ON SOCIAL (IG button + social links, no widget)
     ============================================ -->
<section id="social-follow" class="section depth-abyss">
    <div class="container">
        <div class="social-follow-head center reveal">
            <span class="eyebrow">Follow the movement</span>
            <h2 class="section-title">Join us on <em>Instagram.</em></h2>
            <a href="https://www.instagram.com/oceanalliancenetwork/" target="_blank" rel="noopener" class="btn btn--primary social-follow-btn">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>
                @oceanalliancenetwork
            </a>
        </div>
        <div class="social-links-row reveal">
            <a href="https://www.instagram.com/oceanalliancenetwork/" target="_blank" rel="noopener" class="social-link" aria-label="Instagram">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>
            </a>
            <a href="#" class="social-link" aria-label="YouTube">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M21.6 7.2s-.2-1.4-.8-2c-.8-.8-1.7-.8-2.1-.9C15.9 4 12 4 12 4s-3.9 0-6.7.3c-.4 0-1.3.1-2.1.9-.6.6-.8 2-.8 2S2 8.8 2 10.5v1.6c0 1.7.2 3.3.2 3.3s.2 1.4.8 2c.8.8 1.9.8 2.4.9 1.7.2 6.6.3 6.6.3s3.9 0 6.7-.3c.4 0 1.3-.1 2.1-.9.6-.6.8-2 .8-2s.2-1.6.2-3.3v-1.6c0-1.7-.2-3.3-.2-3.3zM9.8 14.4V8l5.2 3.2-5.2 3.2z"/></svg>
            </a>
            <a href="#" class="social-link" aria-label="LinkedIn">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20.5 2h-17A1.5 1.5 0 002 3.5v17A1.5 1.5 0 003.5 22h17a1.5 1.5 0 001.5-1.5v-17A1.5 1.5 0 0020.5 2zM8 19H5v-9h3zM6.5 8.25A1.75 1.75 0 118.3 6.5a1.78 1.78 0 01-1.8 1.75zM19 19h-3v-4.74c0-1.42-.6-1.93-1.38-1.93A1.74 1.74 0 0013 14.19a.66.66 0 000 .14V19h-3v-9h2.9v1.3a3.11 3.11 0 012.7-1.4c1.55 0 3.36.86 3.36 3.66z"/></svg>
            </a>
        </div>
    </div>
</section>

<!-- ============================================
     PARTNERS — In Good Company
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
