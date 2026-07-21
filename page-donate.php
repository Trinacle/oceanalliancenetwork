<?php
/**
 * Template Name: Donate
 * The Donate page template. Enqueues donate.js (the Stripe handler).
 *
 * @package OceanAlliance
 */

get_header();
$uri = get_template_directory_uri();
?>

<section class="page-hero">
    <div class="container narrow center">
        <span class="eyebrow reveal">Support the ocean</span>
        <h1 class="reveal">Your gift <em>keeps the ocean alive</em>.</h1>
        <p class="lead reveal">Every dollar funds science, storytelling, and stewardship that protects our blue planet. All contributions are tax-deductible through our fiscal sponsor.</p>
    </div>
</section>

<!-- DONATION FORM -->
<section class="section depth-sunlight">
    <div class="container narrow">
        <div class="donate-card reveal">
            <div class="donate-form">
                <h2 class="section-title" style="font-size:2rem">Make a donation</h2>
                <p class="donate-subtitle">Choose an amount below — you'll be redirected to our secure Stripe checkout to complete your gift.</p>

                <div class="donate-frequency">
                    <label class="freq-opt"><input type="radio" name="freq" value="one" checked><span>One-time</span></label>
                    <label class="freq-opt"><input type="radio" name="freq" value="monthly"><span>Monthly</span></label>
                </div>

                <div class="amount-grid">
                    <button class="amount-btn" data-amount="25">$25</button>
                    <button class="amount-btn" data-amount="50">$50</button>
                    <button class="amount-btn amount-btn--active" data-amount="100">$100</button>
                    <button class="amount-btn" data-amount="250">$250</button>
                    <button class="amount-btn" data-amount="500">$500</button>
                    <button class="amount-btn" data-amount="2500">$2,500</button>
                </div>

                <label class="custom-amount">
                    <span>Or enter a custom amount</span>
                    <div class="custom-input"><span class="dollar">$</span><input type="number" id="custom-amount" placeholder="100" min="1"></div>
                </label>

                <button id="stripe-redirect" class="btn btn--primary donate-submit">Continue to secure checkout →</button>
                <p class="donate-trust">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="11" width="14" height="9" rx="2"/><path d="M8 11V7a4 4 0 0 1 8 0v4"/></svg>
                    Secured by Stripe. Your payment information is encrypted and never stored.
                </p>
            </div>

            <aside class="donate-aside">
                <span class="mega-tag">Founding Supporter Circle</span>
                <h3>Where your gift goes</h3>
                <ul class="impact-list">
                    <li><strong>$100</strong> — Funds a student filmmaker's kit for the season.</li>
                    <li><strong>$500</strong> — Supports a Local Legends episode from script to screen.</li>
                    <li><strong>$2,500</strong> — Underwrites an ambassador-led coastal cleanup program.</li>
                </ul>
                <div class="aside-divider"></div>
                <p class="aside-note">All gifts are tax-deductible. <a href="<?php echo esc_url(oan_anchor_url('about', 'fiscal-sponsor')); ?>">Tax ID info →</a></p>
            </aside>
        </div>
    </div>
</section>

<!-- TIERS (from flyer) -->
<section class="section depth-midnight">
    <div class="container narrow">
        <div class="section-head center reveal">
            <span class="eyebrow">Founding Supporter Circle</span>
            <h2 class="section-title">Be among the first.</h2>
            <p class="lead">An exclusive circle of founding supporters powering the launch of the Ocean Alliance Network Media Division.</p>
        </div>
        <div class="tiers">
            <div class="tier reveal"><span class="tier-name">Tide</span><span class="tier-amount">$100</span><ul><li>Founding supporter recognition</li><li>Digital supporter badge</li><li>Behind-the-scenes updates</li></ul><a href="https://buy.stripe.com/fZu00jbRHeN5dvW6wcgQE00" class="btn btn--ghost">Give</a></div>
            <div class="tier tier--featured reveal"><span class="tier-flag">Most popular</span><span class="tier-name">Current</span><span class="tier-amount">$500</span><ul><li>Everything in Tide</li><li>Name in film credits</li><li>Invitation to annual summit</li><li>Limited-edition print</li></ul><a href="https://buy.stripe.com/fZu00jbRHeN5dvW6wcgQE00" class="btn btn--primary">Give</a></div>
            <div class="tier reveal"><span class="tier-name">Deep Blue</span><span class="tier-amount">$2,500</span><ul><li>Everything in Current</li><li>Executive producer credit</li><li>Private screening invite</li><li>Direct line to the team</li></ul><a href="https://buy.stripe.com/fZu00jbRHeN5dvW6wcgQE00" class="btn btn--ghost">Give</a></div>
        </div>
    </div>
</section>

<section class="section depth-abyss">
    <div class="container narrow center">
        <div class="reveal">
            <h2 class="section-title">Prefer to give another way?</h2>
            <p class="lead" style="margin:18px auto 32px">Mail a check, give stock, or explore corporate partnership. Every form of support moves the mission forward.</p>
            <a href="mailto:hello@oceanalliancenetwork.org" class="btn btn--ghost">Contact us</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
