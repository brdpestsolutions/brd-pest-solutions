<?php
/**
 * page-locations.php
 * Main locations overview page — template auto-loads for /locations slug.
 *
 * @package BRD_Pest_Solutions
 */

$hero_img = get_template_directory_uri() . '/assets/images/BRDTech-5.jpg';

get_header();
?>


<!-- ================================================
     1. HERO
     ================================================ -->
<section class="locations-hero" aria-label="Locations hero">
    <div class="locations-hero__photo" aria-hidden="true">
        <img src="<?php echo esc_url( $hero_img ); ?>" alt="" loading="eager">
    </div>
    <div class="container">
        <div class="locations-hero__content">
            <span class="locations-hero__eyebrow">Where We Operate</span>
            <h1>Local Pest Experts, <em>Right in Your Backyard</em></h1>
            <p class="locations-hero__sub">BRD deploys local teams across 5 states — technicians who know the region, the pests, and the people they serve.</p>
            <div class="locations-hero__actions">
                <a href="<?php echo esc_url( home_url( '/get-a-quote' ) ); ?>" class="btn btn-red btn-lg">Get a Free Quote</a>
                <a href="#service-areas" class="btn btn-outline btn-lg">View All Locations</a>
            </div>
        </div>
    </div>
</section>


<!-- ================================================
     2. LOCATION CARDS
     ================================================ -->
<section class="location-cards" id="service-areas" aria-label="Service areas">
    <div class="container">

        <div class="location-cards__header">
            <span class="location-cards__eyebrow">Our Service Areas</span>
            <h2>8 Markets. One Standard of Service.</h2>
            <p class="location-cards__sub">Select a location to explore local services, meet the team, and get in touch.</p>
        </div>

        <div class="location-cards__grid">

            <a href="<?php echo esc_url( home_url( '/locations/atlanta' ) ); ?>" class="location-card">
                <span class="location-card__state">Georgia</span>
                <h3>Atlanta</h3>
                <p>Serving Metro Atlanta and surrounding communities. From Buckhead to Alpharetta, BRD knows Georgia's pests.</p>
                <span class="location-card__cta">Explore Atlanta
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                </span>
            </a>

            <a href="<?php echo esc_url( home_url( '/locations/maryland' ) ); ?>" class="location-card">
                <span class="location-card__state">Maryland</span>
                <h3>Maryland</h3>
                <p>Statewide coverage across Maryland's residential and commercial communities, from the suburbs to rural areas.</p>
                <span class="location-card__cta">Explore Maryland
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                </span>
            </a>

            <a href="<?php echo esc_url( home_url( '/locations/oklahoma-city' ) ); ?>" class="location-card">
                <span class="location-card__state">Oklahoma</span>
                <h3>Oklahoma City</h3>
                <p>Serving OKC and the greater metro area with local teams built for Oklahoma's unique pest pressures.</p>
                <span class="location-card__cta">Explore OKC
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                </span>
            </a>

            <a href="<?php echo esc_url( home_url( '/locations/austin' ) ); ?>" class="location-card">
                <span class="location-card__state">Texas</span>
                <h3>Austin</h3>
                <p>Protecting homes and businesses across Austin and the Hill Country suburbs from Texas-tough pests.</p>
                <span class="location-card__cta">Explore Austin
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                </span>
            </a>

            <a href="<?php echo esc_url( home_url( '/locations/dallas' ) ); ?>" class="location-card">
                <span class="location-card__state">Texas</span>
                <h3>Dallas</h3>
                <p>Serving the DFW Metroplex with local experts who understand North Texas pest seasons inside and out.</p>
                <span class="location-card__cta">Explore Dallas
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                </span>
            </a>

            <a href="<?php echo esc_url( home_url( '/locations/houston' ) ); ?>" class="location-card">
                <span class="location-card__state">Texas</span>
                <h3>Houston</h3>
                <p>Houston's heat and humidity create year-round pest pressure. BRD's local teams are built for it.</p>
                <span class="location-card__cta">Explore Houston
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                </span>
            </a>

            <a href="<?php echo esc_url( home_url( '/locations/san-antonio' ) ); ?>" class="location-card">
                <span class="location-card__state">Texas</span>
                <h3>San Antonio</h3>
                <p>Serving San Antonio and surrounding Bexar County communities with trusted, guaranteed pest control.</p>
                <span class="location-card__cta">Explore San Antonio
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                </span>
            </a>

            <a href="<?php echo esc_url( home_url( '/locations/utah' ) ); ?>" class="location-card">
                <span class="location-card__state">Utah</span>
                <h3>Utah</h3>
                <p>Serving communities across northern and central Utah — from the Wasatch Front to surrounding valleys.</p>
                <span class="location-card__cta">Explore Utah
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                </span>
            </a>

        </div>
    </div>
</section>


<!-- ================================================
     3. WHY LOCAL MATTERS
     ================================================ -->
<section class="why-local" aria-label="Why local matters">
    <div class="container">
        <div class="why-local__header">
            <span class="why-local__eyebrow">The BRD Difference</span>
            <h2>Why Local Matters</h2>
        </div>
        <div class="why-local__grid">

            <div class="why-local__item">
                <div class="why-local__icon" aria-hidden="true">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z"/>
                        <circle cx="12" cy="10" r="3"/>
                    </svg>
                </div>
                <h3>Local Knowledge</h3>
                <p>Our technicians live and work in the same areas they serve. They know exactly which pests thrive in your region — and when they're most active.</p>
            </div>

            <div class="why-local__item">
                <div class="why-local__icon" aria-hidden="true">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="12 6 12 12 16 14"/>
                    </svg>
                </div>
                <h3>Fast Response</h3>
                <p>Local teams mean same-week appointments and emergency response when it can't wait. No routing through a national call center.</p>
            </div>

            <div class="why-local__item">
                <div class="why-local__icon" aria-hidden="true">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                        <circle cx="9" cy="7" r="4"/>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                    </svg>
                </div>
                <h3>Community First</h3>
                <p>BRD is invested in the communities we serve. We're your neighbors — not a call center — and we stand behind every job with a full satisfaction guarantee.</p>
            </div>

        </div>
    </div>
</section>


<!-- ================================================
     4. CTA
     ================================================ -->
<section class="locations-cta" aria-label="Call to action">
    <div class="container">
        <span class="locations-cta__eyebrow">Get Started Today</span>
        <h2>Ready to Protect Your Home?</h2>
        <p class="locations-cta__sub">Find your location and get a free, no-obligation quote from a local BRD expert.</p>
        <div class="locations-cta__actions">
            <a href="<?php echo esc_url( home_url( '/get-a-quote' ) ); ?>" class="btn btn-red btn-lg">Get a Free Quote</a>
            <a href="tel:18335059715" class="btn btn-outline btn-lg">Call 1-833-505-9715</a>
        </div>
    </div>
</section>


<?php get_footer(); ?>
