<?php
/**
 * Template Name: Pest Page
 * Template Post Type: page
 *
 * Individual pest library page — currently hard-coded for German Cockroach.
 * Assign this template in WP admin and duplicate for each pest.
 * Structured for easy ACF conversion later.
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

<main id="main">


    <!-- ================================================
         1. HERO
         ================================================ -->
    <section class="pest-hero" aria-label="German Cockroach overview">
        <div class="pest-hero__photo" aria-hidden="true">
            <img
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/BRDTech-4.png' ); ?>"
                alt=""
                width="1400"
                height="900"
                loading="eager"
            >
        </div>
        <div class="container">
            <div class="pest-hero__content">
                <span class="pest-hero__eyebrow">Crawling Insects</span>
                <div class="pest-hero__threat" aria-label="Threat level: High Risk">
                    <svg width="10" height="10" viewBox="0 0 10 10" fill="currentColor" aria-hidden="true">
                        <path d="M5 1L6.2 3.5H9L6.9 5.3L7.6 8L5 6.5L2.4 8L3.1 5.3L1 3.5H3.8L5 1Z"/>
                    </svg>
                    High Risk
                </div>
                <h1>German Cockroach</h1>
                <p class="pest-hero__sub">The most invasive cockroach species in North America — and the hardest to eliminate without professional treatment.</p>
                <div class="pest-hero__actions">
                    <a href="<?php echo esc_url( home_url( '/get-a-quote' ) ); ?>" class="btn btn-red btn-lg">Get a Free Quote</a>
                    <a href="#treatment" class="btn btn-outline btn-lg">See Treatment &darr;</a>
                </div>
            </div>
        </div>
    </section>


    <!-- ================================================
         2. QUICK FACTS BAR
         ================================================ -->
    <div class="pest-facts" aria-label="Quick facts">
        <div class="container">
            <div class="pest-facts__grid">

                <div class="pest-facts__item">
                    <span class="pest-facts__label">Size</span>
                    <span class="pest-facts__value">&#189; &#8211; &#8542; inch</span>
                </div>

                <div class="pest-facts__item">
                    <span class="pest-facts__label">Active Season</span>
                    <span class="pest-facts__value">Year-Round</span>
                </div>

                <div class="pest-facts__item">
                    <span class="pest-facts__label">Risk Level</span>
                    <span class="pest-facts__value">High</span>
                </div>

                <div class="pest-facts__item">
                    <span class="pest-facts__label">Found In</span>
                    <span class="pest-facts__value">Kitchens &amp; Bathrooms</span>
                </div>

            </div>
        </div>
    </div>


    <!-- ================================================
         3. IDENTIFICATION
         ================================================ -->
    <section class="pest-detail pest-detail--light" aria-label="Identification">
        <div class="container">
            <div class="pest-detail__grid">

                <div class="pest-detail__text">
                    <span class="pest-detail__eyebrow">How to Identify It</span>
                    <h2>Identifying a German Cockroach</h2>
                    <p class="pest-detail__desc">German cockroaches are the most common roach species found in homes and commercial kitchens. Despite the name, they likely originated in Southeast Asia and are now found on every inhabited continent.</p>
                    <ul class="pest-detail__bullets">
                        <li>Light tan to medium brown body, &#189;&#8211;&#8542; inch long</li>
                        <li>Two dark parallel stripes running from behind the head to the base of the wings</li>
                        <li>Wings present in adults but they rarely fly &#8212; prefer to run</li>
                        <li>Nymphs are darker with a single tan stripe down the center of the back</li>
                        <li>Typically found near heat and moisture &#8212; under appliances, inside cabinets, behind the stove</li>
                    </ul>
                </div>

                <div class="pest-detail__photo">
                    <img
                        src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/BRDTech-11.png' ); ?>"
                        alt="BRD technician inspecting kitchen for cockroaches"
                        width="700"
                        height="720"
                        loading="lazy"
                    >
                </div>

            </div>
        </div>
    </section>


    <!-- ================================================
         4. WHY IT'S A PROBLEM
         ================================================ -->
    <section class="pest-detail pest-detail--dark" aria-label="Threat information">
        <div class="container">

            <div style="text-align: center; max-width: 680px; margin: 0 auto var(--space-2xl);">
                <span class="pest-detail__eyebrow">The Threat</span>
                <h2>Why German Cockroaches Are Dangerous</h2>
                <p class="pest-detail__desc">German cockroaches aren&#8217;t just unsettling &#8212; they&#8217;re a genuine health hazard. They contaminate food, trigger asthma attacks, and reproduce so fast that a small problem becomes a full infestation within weeks.</p>
            </div>

            <div class="pest-threat__grid">

                <div class="pest-threat__item">
                    <div class="pest-threat__icon" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            <line x1="12" y1="8" x2="12" y2="12"/>
                            <line x1="12" y1="16" x2="12.01" y2="16"/>
                        </svg>
                    </div>
                    <h3>Health Risk</h3>
                    <p>Carry 33 kinds of bacteria including Salmonella and E. coli. Their shed skins and droppings trigger asthma in children and adults.</p>
                </div>

                <div class="pest-threat__item">
                    <div class="pest-threat__icon" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                            <polyline points="9 22 9 12 15 12 15 22"/>
                        </svg>
                    </div>
                    <h3>Property Damage</h3>
                    <p>Chew through packaging, book bindings, and electrical insulation. A restaurant infestation can cost tens of thousands in lost business.</p>
                </div>

                <div class="pest-threat__item">
                    <div class="pest-threat__icon" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/>
                            <polyline points="12 6 12 12 16 14"/>
                        </svg>
                    </div>
                    <h3>Rapid Reproduction</h3>
                    <p>One female produces up to 400 offspring in a lifetime. A single egg case holds 30&#8211;40 eggs &#8212; populations can double in under a month.</p>
                </div>

            </div>
        </div>
    </section>


    <!-- ================================================
         5. SIGNS OF INFESTATION
         ================================================ -->
    <section class="pest-detail pest-detail--light" aria-label="Warning signs">
        <div class="container">
            <div class="pest-detail__grid">

                <div class="pest-detail__text">
                    <span class="pest-detail__eyebrow">Warning Signs</span>
                    <h2>Signs You Have a German Cockroach Problem</h2>
                    <p class="pest-detail__desc">German cockroaches are nocturnal &#8212; seeing one in daylight almost always means the infestation has grown beyond what hides at night. Here&#8217;s what to look for.</p>
                    <ul class="pest-detail__bullets">
                        <li>Droppings resembling black pepper or coffee grounds &#8212; in cabinets, drawers, and behind appliances</li>
                        <li>Egg cases (oothecae) &#8212; small tan capsules about &#188; inch long, often near the stove or refrigerator motor</li>
                        <li>Musty, oily odor in enclosed spaces like under the sink or inside cabinets</li>
                        <li>Shed exoskeletons from molting nymphs &#8212; often found in corners and along baseboards</li>
                        <li>Live roaches visible during the day, especially near food, water, or warmth</li>
                    </ul>
                </div>

                <div style="background: rgba(0,83,139,0.06); border: 1px solid rgba(0,83,139,0.15); border-radius: var(--radius-lg); padding: var(--space-xl); display: flex; flex-direction: column; justify-content: center; gap: var(--space-md);">
                    <span style="font-family: var(--font-headline); font-weight: 700; font-size: 0.58rem; letter-spacing: 0.16em; text-transform: uppercase; color: var(--color-brd-blue);">Seeing These Signs?</span>
                    <h3 style="color: var(--color-charcoal); font-size: 1.25rem; line-height: 1.25; margin: 0;">Act Before It Gets Worse</h3>
                    <p style="color: #4a5568; font-size: 0.875rem; line-height: 1.6; margin: 0;">German cockroaches don&#8217;t go away on their own. Every day without treatment is another generation closer to a full infestation. BRD offers same-day service in most markets.</p>
                    <a href="<?php echo esc_url( home_url( '/get-a-quote' ) ); ?>" class="btn btn-red">Get a Free Quote</a>
                    <a href="tel:18335059715" style="font-family: var(--font-headline); font-size: 0.75rem; font-weight: 700; color: var(--color-brd-blue); text-decoration: none; letter-spacing: 0.05em;">Or call 1-833-505-9715</a>
                </div>

            </div>
        </div>
    </section>


    <!-- ================================================
         6. TREATMENT APPROACH
         ================================================ -->
    <section class="pest-detail pest-detail--light" id="treatment" aria-label="BRD treatment approach" style="background: #f8fafb; border-top: 1px solid rgba(0,0,0,0.06);">
        <div class="container">

            <div style="text-align: center; max-width: 680px; margin: 0 auto var(--space-2xl);">
                <span class="pest-detail__eyebrow">How We Treat It</span>
                <h2>BRD&#8217;s German Cockroach Elimination Process</h2>
                <p class="pest-detail__desc">Store-bought sprays scatter cockroaches temporarily &#8212; they don&#8217;t eliminate the population. BRD uses an integrated approach that targets every life stage: egg, nymph, and adult.</p>
            </div>

            <div class="pest-steps__grid">

                <div class="pest-step">
                    <div class="pest-step__number" aria-hidden="true">1</div>
                    <h3>Full Property Inspection</h3>
                    <p>Your BRD technician performs a thorough assessment of all harborage areas &#8212; behind appliances, inside wall voids, under sinks &#8212; to map the full extent of activity and identify all entry points.</p>
                </div>

                <div class="pest-step">
                    <div class="pest-step__number" aria-hidden="true">2</div>
                    <h3>Targeted Treatment</h3>
                    <p>We apply professional-grade gel baits, insect growth regulators (IGRs), and crack-and-crevice treatments. IGRs break the reproductive cycle by preventing nymphs from maturing into breeding adults.</p>
                </div>

                <div class="pest-step">
                    <div class="pest-step__number" aria-hidden="true">3</div>
                    <h3>Monitoring &amp; Follow-Up</h3>
                    <p>Glue monitors track population reduction over time. If cockroaches persist beyond the initial treatment, we return at no additional charge until they&#8217;re gone &#8212; that&#8217;s our guarantee.</p>
                </div>

            </div>

            <div class="pest-steps__cta">
                <a href="<?php echo esc_url( home_url( '/get-a-quote' ) ); ?>" class="btn btn-red btn-lg">Get a Free Quote</a>
            </div>

        </div>
    </section>


    <!-- ================================================
         7. RELATED PESTS
         ================================================ -->
    <section class="pest-related" aria-label="Related pests">
        <div class="container">

            <div class="pest-related__header">
                <span class="pest-related__eyebrow">Also Common in Your Area</span>
                <h2>Related Pests</h2>
            </div>

            <div class="pest-related__grid">

                <a href="<?php echo esc_url( home_url( '/pest-library/american-cockroach' ) ); ?>" class="pest-card-light">
                    <span class="pest-card-light__icon" aria-hidden="true">🪳</span>
                    <span class="pest-card-light__category">Insects</span>
                    <h3>American Cockroach</h3>
                    <p>Larger and found in sewers &#8212; often enters through drains and carries pathogens from pipes to your kitchen.</p>
                    <span class="pest-card-light__cta">Learn more &rarr;</span>
                </a>

                <a href="<?php echo esc_url( home_url( '/pest-library/bed-bug' ) ); ?>" class="pest-card-light">
                    <span class="pest-card-light__icon" aria-hidden="true">🐛</span>
                    <span class="pest-card-light__category">Insects</span>
                    <h3>Bed Bug</h3>
                    <p>Hides in mattress seams and feeds at night. Infestations spread quickly through shared walls and luggage.</p>
                    <span class="pest-card-light__cta">Learn more &rarr;</span>
                </a>

                <a href="<?php echo esc_url( home_url( '/pest-library/silverfish' ) ); ?>" class="pest-card-light">
                    <span class="pest-card-light__icon" aria-hidden="true">🐟</span>
                    <span class="pest-card-light__category">Insects</span>
                    <h3>Silverfish</h3>
                    <p>Thrives in the same moist environments as cockroaches and is often found in kitchens and bathrooms.</p>
                    <span class="pest-card-light__cta">Learn more &rarr;</span>
                </a>

            </div>

        </div>
    </section>


    <!-- ================================================
         8. CTA
         ================================================ -->
    <section class="pest-cta" aria-label="Call to action">
        <div class="container">
            <span class="pest-cta__eyebrow">Get Protected Today</span>
            <h2>Don&#8217;t Wait for the<br>Problem to Grow.</h2>
            <p class="pest-cta__sub">German cockroaches multiply fast. The sooner you call, the less damage they cause. Get a free quote from your local BRD technician today.</p>
            <div class="pest-cta__actions">
                <a href="<?php echo esc_url( home_url( '/get-a-quote' ) ); ?>" class="btn btn-red btn-lg">Get a Free Quote</a>
                <a href="tel:18335059715" class="btn btn-outline btn-lg">Call 1-833-505-9715</a>
            </div>
        </div>
    </section>


</main>

<?php get_footer(); ?>
