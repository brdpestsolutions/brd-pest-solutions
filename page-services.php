<?php
/**
 * page-services.php
 * Services overview page — template auto-loads for /services slug.
 *
 * @package BRD_Pest_Solutions
 */

get_header();
?>


<!-- ================================================
     1. HERO
     ================================================ -->
<section class="services-hero" aria-label="Services hero">
    <div class="services-hero__photo" aria-hidden="true">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/BRDTech-29.png' ); ?>" alt="" loading="eager">
    </div>
    <div class="container">
        <div class="services-hero__content">
            <span class="services-hero__eyebrow">What We Treat</span>
            <h1>Whatever Got In, <em>We'll Get It Out.</em></h1>
            <p class="services-hero__sub">BRD handles everything from common household pests to serious infestations — with local teams, proven treatments, and a 100% satisfaction guarantee.</p>
            <div class="services-hero__actions">
                <a href="<?php echo esc_url( home_url( '/get-a-quote' ) ); ?>" class="btn btn-red btn-lg">Get a Free Quote</a>
                <a href="tel:18335059715" class="btn btn-outline btn-lg">Call 1-833-505-9715</a>
            </div>
        </div>
    </div>
</section>


<!-- ================================================
     2. SERVICE CARDS OVERVIEW
     ================================================ -->
<section class="services-cards" aria-label="Services overview">
    <div class="container">

        <div class="services-cards__header">
            <span class="services-cards__eyebrow">Our Services</span>
            <h2>Full-Service Pest Protection</h2>
            <p class="services-cards__sub">From a single treatment to year-round coverage, BRD has the right solution for your situation.</p>
        </div>

        <div class="services-cards__grid">

            <a href="#general-pest-control" class="services-overview-card">
                <div class="services-overview-card__icon" aria-hidden="true">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/>
                    </svg>
                </div>
                <h3>General Pest Control</h3>
                <p>Ants, spiders, cockroaches, silverfish, and over 30 other household pests — eliminated and kept out.</p>
                <span class="services-overview-card__cta">Learn more
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                </span>
            </a>

            <a href="#termite-control" class="services-overview-card">
                <div class="services-overview-card__icon" aria-hidden="true">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                </div>
                <h3>Termite Control</h3>
                <p>Silent and destructive. BRD's termite treatments protect your home's structure before and after damage starts.</p>
                <span class="services-overview-card__cta">Learn more
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                </span>
            </a>

            <a href="#rodent-control" class="services-overview-card">
                <div class="services-overview-card__icon" aria-hidden="true">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                    </svg>
                </div>
                <h3>Rodent Control</h3>
                <p>Full exclusion, removal, and sealing. We eliminate the population and close off how they got in.</p>
                <span class="services-overview-card__cta">Learn more
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                </span>
            </a>

            <a href="#mosquito-control" class="services-overview-card">
                <div class="services-overview-card__icon" aria-hidden="true">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="16"/><line x1="8" y1="12" x2="16" y2="12"/>
                    </svg>
                </div>
                <h3>Mosquito Control</h3>
                <p>Take back your yard. Seasonal programs and one-time treatments that cut mosquito populations by up to 90%.</p>
                <span class="services-overview-card__cta">Learn more
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                </span>
            </a>

            <a href="#bed-bug-treatment" class="services-overview-card">
                <div class="services-overview-card__icon" aria-hidden="true">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M2 9V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v3"/><path d="M2 11v9"/><path d="M22 11v9"/><path d="M2 15h20"/><path d="M6 15v5"/><path d="M18 15v5"/>
                    </svg>
                </div>
                <h3>Bed Bug Treatment</h3>
                <p>Complete elimination — not just surface treatment. We target every life stage so they don't come back.</p>
                <span class="services-overview-card__cta">Learn more
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                </span>
            </a>

            <a href="#protection-plans" class="services-overview-card">
                <div class="services-overview-card__icon" aria-hidden="true">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                </div>
                <h3>Protection Plans</h3>
                <p>Year-round coverage from one recurring plan. Set it and forget it — we handle the rest.</p>
                <span class="services-overview-card__cta">View plans
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                </span>
            </a>

        </div>
    </div>
</section>


<!-- ================================================
     3. GENERAL PEST CONTROL
     ================================================ -->
<section class="service-detail service-detail--light" id="general-pest-control" aria-label="General pest control">
    <div class="container">
        <div class="service-detail__grid">
            <div class="service-detail__text">
                <span class="service-detail__eyebrow">General Pest Control</span>
                <h2>One Treatment. Over 30 Pests Gone.</h2>
                <p class="service-detail__desc">BRD's general pest control creates a protective barrier around your home that stops insects before they get inside. Our technicians treat entry points, harborage areas, and perimeter zones using products that are tough on pests and safe for your family and pets.</p>
                <ul class="service-detail__bullets">
                    <li>Ants, spiders, cockroaches &amp; silverfish</li>
                    <li>Centipedes, earwigs &amp; stink bugs</li>
                    <li>Interior and exterior barrier treatment</li>
                    <li>Follow-up visits if pests return</li>
                    <li>Pet- and family-safe products</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/get-a-quote' ) ); ?>" class="btn btn-red">Get a Free Quote</a>
            </div>
            <div class="service-detail__photo">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/BRDTech-8.png' ); ?>" alt="BRD technician performing general pest control treatment" loading="lazy">
            </div>
        </div>
    </div>
</section>


<!-- ================================================
     4. TERMITE CONTROL
     ================================================ -->
<section class="service-detail service-detail--dark service-detail--flip" id="termite-control" aria-label="Termite control">
    <div class="container">
        <div class="service-detail__grid">
            <div class="service-detail__text">
                <span class="service-detail__eyebrow">Termite Control</span>
                <h2>Stop the Silent Destroyer Before It's Too Late.</h2>
                <p class="service-detail__desc">Termites cause billions in property damage every year — and most homeowners don't know they have them until it's serious. BRD's termite control combines thorough inspections with targeted treatment plans designed to eliminate active colonies and protect your home long-term.</p>
                <ul class="service-detail__bullets">
                    <li>Full home inspection &amp; assessment</li>
                    <li>Subterranean and drywood termite treatment</li>
                    <li>Liquid treatments &amp; bait station systems</li>
                    <li>Pre-construction and existing-structure options</li>
                    <li>Annual monitoring available</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/get-a-quote' ) ); ?>" class="btn btn-outline">Get a Free Quote</a>
            </div>
            <div class="service-detail__photo">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/BRDTech-3.png' ); ?>" alt="BRD technician performing termite inspection" loading="lazy">
            </div>
        </div>
    </div>
</section>


<!-- ================================================
     5. RODENT CONTROL
     ================================================ -->
<section class="service-detail service-detail--light" id="rodent-control" aria-label="Rodent control">
    <div class="container">
        <div class="service-detail__grid">
            <div class="service-detail__text">
                <span class="service-detail__eyebrow">Rodent Control</span>
                <h2>Find Them. Remove Them. Keep Them Out.</h2>
                <p class="service-detail__desc">Mice and rats don't just damage property — they carry disease and contaminate food. BRD's rodent control goes beyond trapping: we identify and seal every entry point so your rodent problem doesn't come back next season.</p>
                <ul class="service-detail__bullets">
                    <li>Thorough inspection to locate entry points</li>
                    <li>Trapping and population removal</li>
                    <li>Exclusion work to seal gaps and cracks</li>
                    <li>Attic and crawl space treatment available</li>
                    <li>Follow-up to confirm full elimination</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/get-a-quote' ) ); ?>" class="btn btn-red">Get a Free Quote</a>
            </div>
            <div class="service-detail__photo">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/BRDTech-26.png' ); ?>" alt="BRD technician performing rodent exclusion work" loading="lazy">
            </div>
        </div>
    </div>
</section>


<!-- ================================================
     6. MOSQUITO CONTROL
     ================================================ -->
<section class="service-detail service-detail--dark service-detail--flip" id="mosquito-control" aria-label="Mosquito control">
    <div class="container">
        <div class="service-detail__grid">
            <div class="service-detail__text">
                <span class="service-detail__eyebrow">Mosquito Control</span>
                <h2>Take Back Your Yard. All Season Long.</h2>
                <p class="service-detail__desc">Mosquitoes aren't just annoying — they're a health risk. BRD's mosquito treatment targets breeding sites and resting areas across your property, cutting populations by up to 90% so you can actually enjoy being outside.</p>
                <ul class="service-detail__bullets">
                    <li>Property inspection and breeding site ID</li>
                    <li>Barrier spray treatment for resting areas</li>
                    <li>Larvicide treatment for standing water</li>
                    <li>Season-long recurring programs available</li>
                    <li>Safe for pets and pollinators when dry</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/get-a-quote' ) ); ?>" class="btn btn-outline">Get a Free Quote</a>
            </div>
            <div class="service-detail__photo">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/BRDTech-1.png' ); ?>" alt="BRD technician performing mosquito barrier treatment" loading="lazy">
            </div>
        </div>
    </div>
</section>


<!-- ================================================
     7. BED BUG TREATMENT
     ================================================ -->
<section class="service-detail service-detail--light" id="bed-bug-treatment" aria-label="Bed bug treatment">
    <div class="container">
        <div class="service-detail__grid">
            <div class="service-detail__text">
                <span class="service-detail__eyebrow">Bed Bug Treatment</span>
                <h2>Complete Elimination. Every Life Stage.</h2>
                <p class="service-detail__desc">Bed bugs are one of the most difficult pests to eliminate because surface sprays miss eggs and hidden populations. BRD's treatment protocol targets every life stage — adults, nymphs, and eggs — so the infestation doesn't rebound two weeks later.</p>
                <ul class="service-detail__bullets">
                    <li>Full room-by-room inspection</li>
                    <li>Treatment targeting all life stages</li>
                    <li>Heat and chemical treatment options</li>
                    <li>Follow-up inspection included</li>
                    <li>Re-treatment guarantee if activity persists</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/get-a-quote' ) ); ?>" class="btn btn-red">Get a Free Quote</a>
            </div>
            <div class="service-detail__photo">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/BRDTech-2.png' ); ?>" alt="BRD technician performing bed bug treatment" loading="lazy">
            </div>
        </div>
    </div>
</section>


<!-- ================================================
     8. PROTECTION PLANS
     ================================================ -->
<section class="plans-section" id="protection-plans" aria-label="Protection plans">
    <div class="container">
        <div class="plans-section__header">
            <span class="plans-section__eyebrow">Recurring Protection</span>
            <h2>One Plan. Zero Pest Stress.</h2>
            <p class="plans-section__sub">Why deal with pests reactively when you can prevent them entirely? BRD's protection plans deliver scheduled treatments, priority scheduling, and free re-services — so your home stays protected all year.</p>
        </div>
        <div class="plans-grid">

            <div class="plan-card">
                <div class="plan-card__name">One-Time</div>
                <div class="plan-card__cadence">Single visit</div>
                <ul class="plan-card__features">
                    <li>Full interior &amp; exterior treatment</li>
                    <li>Targets active infestation</li>
                    <li>Applies to any covered pest</li>
                    <li>30-day service guarantee</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/get-a-quote' ) ); ?>" class="btn btn-outline">Get a Quote</a>
            </div>

            <div class="plan-card plan-card--featured">
                <span class="plan-card__badge">Most Popular</span>
                <div class="plan-card__name">Quarterly</div>
                <div class="plan-card__cadence">4 visits per year</div>
                <ul class="plan-card__features">
                    <li>Scheduled seasonal treatments</li>
                    <li>Interior &amp; exterior every visit</li>
                    <li>Free re-service between visits</li>
                    <li>Priority scheduling</li>
                    <li>Covers 30+ pest species</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/get-a-quote' ) ); ?>" class="btn btn-red">Get a Quote</a>
            </div>

            <div class="plan-card">
                <div class="plan-card__name">Monthly</div>
                <div class="plan-card__cadence">12 visits per year</div>
                <ul class="plan-card__features">
                    <li>Maximum year-round coverage</li>
                    <li>Interior &amp; exterior every visit</li>
                    <li>Free re-service anytime</li>
                    <li>Priority same-day scheduling</li>
                    <li>Termite monitoring included</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/get-a-quote' ) ); ?>" class="btn btn-outline">Get a Quote</a>
            </div>

        </div>
    </div>
</section>


<!-- ================================================
     9. GUARANTEE STRIP
     ================================================ -->
<section class="services-guarantee" aria-label="Our guarantee">
    <div class="container">
        <div class="services-guarantee__header">
            <span class="services-guarantee__eyebrow">The BRD Promise</span>
            <h2>Service You Can Count On</h2>
        </div>
        <div class="services-guarantee__grid">

            <div class="services-guarantee__item">
                <div class="services-guarantee__icon" aria-hidden="true">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/>
                    </svg>
                </div>
                <h3>100% Satisfaction Guaranteed</h3>
                <p>If pests return between scheduled services, so do we — at no additional charge. We don't stop until the job is done.</p>
            </div>

            <div class="services-guarantee__item">
                <div class="services-guarantee__icon" aria-hidden="true">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                </div>
                <h3>Licensed &amp; Insured Technicians</h3>
                <p>Every BRD technician is fully licensed, background-checked, and trained in the latest treatment methods and safety protocols.</p>
            </div>

            <div class="services-guarantee__item">
                <div class="services-guarantee__icon" aria-hidden="true">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
                    </svg>
                </div>
                <h3>Same-Day Service Available</h3>
                <p>Local teams mean faster scheduling. When you can't wait, we often can have a technician at your door the same day you call.</p>
            </div>

        </div>
    </div>
</section>


<!-- ================================================
     10. CTA
     ================================================ -->
<section class="services-cta" aria-label="Call to action">
    <div class="container">
        <span class="services-cta__eyebrow">Get Started Today</span>
        <h2>Ready to Get Started?</h2>
        <p class="services-cta__sub">Get a free, no-obligation quote from a local BRD technician. Same-day service available. 100% satisfaction guaranteed.</p>
        <div class="services-cta__actions">
            <a href="<?php echo esc_url( home_url( '/get-a-quote' ) ); ?>" class="btn btn-red btn-lg">Get a Free Quote</a>
            <a href="tel:18335059715" class="btn btn-outline btn-lg">Call 1-833-505-9715</a>
        </div>
    </div>
</section>


<?php get_footer(); ?>
