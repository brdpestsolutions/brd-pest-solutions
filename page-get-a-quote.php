<?php
/**
 * Template: Get a Free Quote
 * Auto-loads for slug: /get-a-quote
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

<main id="main">


    <!-- ================================================
         1. SPLIT HERO — text left, form right
         ================================================ -->
    <section class="quote-hero" aria-label="Get a free quote">
        <div class="container">
            <div class="quote-hero__grid">

                <!-- LEFT: headline + trust -->
                <div class="quote-hero__content">
                    <span class="quote-hero__eyebrow">Free Quote</span>
                    <h1>Get a Free Quote.<br><em>No Commitment.</em></h1>
                    <p class="quote-hero__sub">Tell us about your pest problem and where you&#8217;re located. A local BRD technician will follow up within one business day to get you scheduled.</p>

                    <ul class="quote-hero__trust">
                        <li>No obligation &#8212; free quote, always</li>
                        <li>Same-day service available in most markets</li>
                        <li>Licensed &amp; background-checked technicians</li>
                        <li>100% satisfaction guaranteed or we come back free</li>
                    </ul>

                    <div class="quote-hero__proof">
                        <span class="quote-hero__proof-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                        <p class="quote-hero__proof-quote">&#8220;Showed up same-day, explained everything they were doing, and the problem was completely gone within a week. I&#8217;ll never use another pest company.&#8221;</p>
                        <span class="quote-hero__proof-attr">&#8212; Verified BRD Customer, Atlanta</span>
                    </div>
                </div>

                <!-- RIGHT: GHL form card -->
                <div class="quote-hero__form">
                    <div class="quote-hero__form-card">

                        <div class="quote-hero__form-header">
                            <span class="quote-hero__form-eyebrow">Get Started</span>
                            <h2>Request Your Free Quote</h2>
                            <p>We&#8217;ll reach out within 1 business day to get you scheduled.</p>
                        </div>

                        <div class="quote-hero__form-body">
                            <iframe
                                src="https://connect.mixifymedia.com/widget/form/EZyJL9hhzMy7mmgJx6cy"
                                style="width:100%;height:100%;border:none;"
                                id="inline-EZyJL9hhzMy7mmgJx6cy"
                                data-layout="{'id':'INLINE'}"
                                data-trigger-type="alwaysShow"
                                data-trigger-value=""
                                data-activation-type="alwaysActivated"
                                data-activation-value=""
                                data-deactivation-type="neverDeactivate"
                                data-deactivation-value=""
                                data-form-name="BRD Main Website Form"
                                data-height="710"
                                data-layout-iframe-id="inline-EZyJL9hhzMy7mmgJx6cy"
                                data-form-id="EZyJL9hhzMy7mmgJx6cy"
                                title="BRD Main Website Form"
                            >
                            </iframe>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <script src="https://connect.mixifymedia.com/js/form_embed.js"></script>
    </section>


    <!-- ================================================
         2. TRUST STRIP
         ================================================ -->
    <div class="quote-trust" aria-label="Why choose BRD">
        <div class="container">
            <div class="quote-trust__grid">

                <div class="quote-trust__item">
                    <span class="quote-trust__label">No Obligation</span>
                    <span class="quote-trust__text">Free quote, no commitment required.</span>
                </div>

                <div class="quote-trust__item">
                    <span class="quote-trust__label">1-Day Response</span>
                    <span class="quote-trust__text">We call back within one business day.</span>
                </div>

                <div class="quote-trust__item">
                    <span class="quote-trust__label">Same-Day Service</span>
                    <span class="quote-trust__text">Available in most of our markets.</span>
                </div>

                <div class="quote-trust__item">
                    <span class="quote-trust__label">100% Guaranteed</span>
                    <span class="quote-trust__text">If pests return, so do we. Free.</span>
                </div>

            </div>
        </div>
    </div>


    <!-- ================================================
         3. WHAT HAPPENS NEXT
         ================================================ -->
    <section class="quote-steps" aria-label="What happens after you submit">
        <div class="container">

            <div class="quote-steps__header">
                <span class="quote-steps__eyebrow">What to Expect</span>
                <h2>Here&#8217;s What Happens After You Submit</h2>
                <p class="quote-steps__sub">Three simple steps from your request to a pest-free home.</p>
            </div>

            <div class="quote-steps__grid">

                <div class="quote-step">
                    <div class="quote-step__number" aria-hidden="true">1</div>
                    <h3>Submit Your Request</h3>
                    <p>Takes about 60 seconds. Tell us your name, number, address, and what you&#8217;re dealing with. That&#8217;s all we need to get started.</p>
                </div>

                <div class="quote-step">
                    <div class="quote-step__number" aria-hidden="true">2</div>
                    <h3>We Call You Back</h3>
                    <p>A local BRD expert follows up within 1 business day to learn more, answer your questions, and get you on the schedule.</p>
                </div>

                <div class="quote-step">
                    <div class="quote-step__number" aria-hidden="true">3</div>
                    <h3>Problem Solved</h3>
                    <p>Your technician arrives, performs a full inspection, treats the issue, and guarantees the result. We&#8217;re not done until you are.</p>
                </div>

            </div>

        </div>
    </section>


    <!-- ================================================
         4. CTA / PHONE FALLBACK
         ================================================ -->
    <section class="quote-cta" aria-label="Call us directly">
        <div class="container">
            <span class="quote-cta__eyebrow">Prefer to Call?</span>
            <h2>Talk to a Local Expert Today</h2>
            <a href="tel:18335059715" class="quote-cta__phone">1-833-505-9715</a>
            <p class="quote-cta__sub">Our team is available Monday&#8211;Friday, 9AM&#8211;5PM. Happy to answer questions before you book.</p>
            <div class="quote-cta__actions">
                <a href="tel:18335059715" class="btn btn-red btn-lg">Call Now</a>
                <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="btn btn-outline btn-lg">View Our Services</a>
            </div>
        </div>
    </section>


</main>

<?php get_footer(); ?>
