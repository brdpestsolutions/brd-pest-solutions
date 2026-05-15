<?php
/**
 * Template: About
 * Auto-loads for slug: /about
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

<main id="main">


    <!-- ================================================
         1. HERO
         ================================================ -->
    <section class="about-hero" aria-label="Page hero">
        <div class="about-hero__photo" aria-hidden="true">
            <img
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/BRDTech-20.jpg' ); ?>"
                alt=""
                width="1400"
                height="900"
                loading="eager"
            >
        </div>
        <div class="container">
            <div class="about-hero__content">
                <span class="about-hero__eyebrow">About BRD Pest Solutions</span>
                <h1>We Started Because <em>Pest Control Deserved Better.</em></h1>
                <p class="about-hero__sub">BRD was built on a simple idea: homeowners and businesses shouldn&#8217;t have to settle for rushed visits, vague chemicals, and pests that keep coming back.</p>
                <div class="about-hero__actions">
                    <a href="<?php echo esc_url( home_url( '/get-a-quote' ) ); ?>" class="btn btn-red btn-lg">Get a Free Quote</a>
                    <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="btn btn-outline btn-lg">Our Services &rarr;</a>
                </div>
            </div>
        </div>
    </section>


    <!-- ================================================
         2. ORIGIN STORY
         ================================================ -->
    <section class="about-story" aria-label="Our story">
        <div class="container">
            <div class="about-story__grid">

                <div class="about-story__text">
                    <span class="about-story__eyebrow">How It Started</span>
                    <h2>Built by People Who Were Tired of the Industry Standard</h2>
                    <p class="about-story__desc">BRD was started after watching too many pest control companies overpromise and underdeliver. Rushed service calls. Chemicals applied without explanation. Callbacks that never came. We built BRD to be different &#8212; a company that treats every home the way we&#8217;d want our own treated.</p>
                    <p class="about-story__desc">Today, BRD operates across 5 states with teams embedded in local communities. But our commitment hasn&#8217;t changed: show up on time, explain what we&#8217;re doing and why, use treatments that actually work, and guarantee every job until the problem is solved.</p>
                    <p class="about-story__desc">Our technicians are licensed, background-checked, and trained in Integrated Pest Management (IPM) &#8212; a science-based approach that eliminates pests at the source, not just at the surface.</p>
                    <p class="about-story__desc">We don&#8217;t cut corners. We don&#8217;t upsell treatments you don&#8217;t need. And we don&#8217;t consider a job done until you do.</p>
                </div>

                <div class="about-story__photo">
                    <img
                        src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/BRDTech-22.jpg' ); ?>"
                        alt="BRD technician performing a thorough property inspection"
                        width="700"
                        height="920"
                        loading="lazy"
                    >
                </div>

            </div>
        </div>
    </section>


    <!-- ================================================
         3. STATS BAR
         ================================================ -->
    <div class="about-stats" aria-label="Company stats">
        <div class="container">
            <div class="about-stats__grid">

                <div class="about-stats__item">
                    <span class="about-stats__label">States Served</span>
                    <span class="about-stats__value">5</span>
                </div>

                <div class="about-stats__item">
                    <span class="about-stats__label">Cities Active</span>
                    <span class="about-stats__value">8</span>
                </div>

                <div class="about-stats__item">
                    <span class="about-stats__label">Homes Protected</span>
                    <span class="about-stats__value">10,000+</span>
                </div>

                <div class="about-stats__item">
                    <span class="about-stats__label">Satisfaction Rate</span>
                    <span class="about-stats__value">98%</span>
                </div>

            </div>
        </div>
    </div>


    <!-- ================================================
         4. MISSION & VALUES
         ================================================ -->
    <section class="about-values" aria-label="Mission and values">
        <div class="container">

            <div class="about-values__header">
                <span class="about-values__eyebrow">What Drives Us</span>
                <h2>Pest-Free Homes. No Shortcuts.</h2>
                <p class="about-values__sub">Three principles guide every service call, every treatment, and every follow-up BRD makes.</p>
            </div>

            <div class="about-values__grid">

                <div class="about-values__card">
                    <div class="about-values__icon" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9 3v18m0 0h10a2 2 0 0 0 2-2v-4M9 21H5a2 2 0 0 1-2-2v-4m0 0h18"/>
                        </svg>
                    </div>
                    <h3>Science-Based Treatment</h3>
                    <p>We use Integrated Pest Management (IPM) &#8212; the industry&#8217;s gold standard. Every treatment is designed to eliminate the root cause, not just the visible symptom.</p>
                </div>

                <div class="about-values__card">
                    <div class="about-values__icon" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                        </svg>
                    </div>
                    <h3>Transparent Communication</h3>
                    <p>Before we apply anything, we tell you what it is, why we&#8217;re using it, and what to expect. No surprises. No upsells. No fine print.</p>
                </div>

                <div class="about-values__card">
                    <div class="about-values__icon" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            <polyline points="9 12 11 14 15 10"/>
                        </svg>
                    </div>
                    <h3>Guaranteed Results</h3>
                    <p>If pests return between scheduled treatments, we come back and re-treat at no additional charge. We&#8217;re not done until you&#8217;re satisfied.</p>
                </div>

            </div>
        </div>
    </section>


    <!-- ================================================
         5. THE BRD DIFFERENCE
         ================================================ -->
    <section class="about-diff" aria-label="The BRD difference">
        <div class="container">

            <div class="about-diff__header">
                <span class="about-diff__eyebrow">The BRD Difference</span>
                <h2>We Do Pest Control the Right Way</h2>
                <p class="about-diff__sub">Three things set BRD apart from the big-box pest control chains &#8212; and they&#8217;re the reason our customers stay.</p>
            </div>

            <div class="about-diff__grid">

                <div class="about-diff__item">
                    <div class="about-diff__icon" aria-hidden="true">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="7" width="20" height="14" rx="2" ry="2"/>
                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
                        </svg>
                    </div>
                    <h3>Licensed &amp; Background-Checked</h3>
                    <p>Every BRD technician is fully licensed by their state, background-checked, and trained in the latest treatment methods before entering a customer&#8217;s home.</p>
                </div>

                <div class="about-diff__item">
                    <div class="about-diff__icon" aria-hidden="true">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/>
                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
                        </svg>
                    </div>
                    <h3>Integrated Pest Management</h3>
                    <p>IPM focuses on long-term prevention through habitat modification, exclusion, and targeted treatment &#8212; fewer chemicals, longer-lasting results, better for your family.</p>
                </div>

                <div class="about-diff__item">
                    <div class="about-diff__icon" aria-hidden="true">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="23 4 23 10 17 10"/>
                            <polyline points="1 20 1 14 7 14"/>
                            <path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"/>
                        </svg>
                    </div>
                    <h3>We&#8217;re Not Done Until You Are</h3>
                    <p>Our satisfaction guarantee means you&#8217;re never on your own after the first visit. If treatment doesn&#8217;t work, we return at no charge until the problem is fully resolved.</p>
                </div>

            </div>
        </div>
    </section>


    <!-- ================================================
         6. CTA
         ================================================ -->
    <section class="about-cta" aria-label="Call to action">
        <div class="container">
            <span class="about-cta__eyebrow">Get Started Today</span>
            <h2>Ready to Protect Your Home?</h2>
            <p class="about-cta__sub">Get a free, no-obligation quote from a local BRD technician. Same-day service available in most markets. 100% satisfaction guaranteed.</p>
            <div class="about-cta__actions">
                <a href="<?php echo esc_url( home_url( '/get-a-quote' ) ); ?>" class="btn btn-red btn-lg">Get a Free Quote</a>
                <a href="tel:18335059715" class="btn btn-outline btn-lg">Call 1-833-505-9715</a>
            </div>
        </div>
    </section>


</main>

<?php get_footer(); ?>
