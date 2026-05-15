<?php
/**
 * BRD Pest Solutions — Homepage Template (front-page.php)
 *
 * TODO: Replace image src values with wp_get_attachment_image() calls
 * once photos are uploaded to the WordPress media library.
 */

// Image paths — update these when uploading to WP media
$img_hero  = get_template_directory_uri() . '/assets/images/BRDTech-24.jpg';
$img_why   = get_template_directory_uri() . '/assets/images/BRDTech-29.jpg';
$img_areas = get_template_directory_uri() . '/assets/images/BRDTech-26.jpg';

get_header();
?>

<!-- ================================================
     1. HERO
     ================================================ -->
<section class="hero" aria-label="Hero">

    <div class="hero__photo" aria-hidden="true">
        <img
            src="<?php echo esc_url( $img_hero ); ?>"
            alt="BRD pest control technician in the field"
            loading="eager"
            fetchpriority="high"
        >
    </div>

    <div class="hero__content">
        <span class="hero__eyebrow">Georgia &middot; Maryland &middot; Oklahoma &middot; Texas &middot; Utah</span>

        <h1>Pest Control for<br><em>Pesky Intruders.</em></h1>

        <p class="hero__sub">
            Same-day availability. Trained technicians. Guaranteed results.
        </p>

        <ul class="hero__bullets">
            <li class="hero__bullet">
                <span class="hero__bullet-check" aria-hidden="true">
                    <svg viewBox="0 0 12 10"><polyline points="1,5 4,8 11,1"/></svg>
                </span>
                Satisfaction guarantee on every service
            </li>
            <li class="hero__bullet">
                <span class="hero__bullet-check" aria-hidden="true">
                    <svg viewBox="0 0 12 10"><polyline points="1,5 4,8 11,1"/></svg>
                </span>
                Eco-friendly, family &amp; pet safe products
            </li>
            <li class="hero__bullet">
                <span class="hero__bullet-check" aria-hidden="true">
                    <svg viewBox="0 0 12 10"><polyline points="1,5 4,8 11,1"/></svg>
                </span>
                Flexible scheduling &mdash; same day available
            </li>
            <li class="hero__bullet">
                <span class="hero__bullet-check" aria-hidden="true">
                    <svg viewBox="0 0 12 10"><polyline points="1,5 4,8 11,1"/></svg>
                </span>
                20+ common pest types treated
            </li>
        </ul>

        <div class="hero__ctas">
            <a href="<?php echo esc_url( home_url( '/get-a-quote' ) ); ?>" class="btn btn-red btn-lg">
                Get a Free Quote
            </a>
            <a href="tel:+18335059715" class="hero__phone">
                Call 1-833-505-9715
            </a>
        </div>
    </div>

</section>


<!-- ================================================
     2. CTA STRIP
     ================================================ -->
<section class="cta-strip" aria-label="Quick call to action">
    <div class="container">
        <div class="cta-strip__text">
            <p class="cta-strip__heading">Need Pest Control for Your Home or Business?</p>
            <p class="cta-strip__sub">Get a hassle-free quote in 90 seconds.</p>
        </div>
        <a href="<?php echo esc_url( home_url( '/get-a-quote' ) ); ?>" class="btn btn-red">
            Get a Free Quote
        </a>
    </div>
</section>


<!-- ================================================
     3. WHY BRD
     ================================================ -->
<section class="why-brd" aria-label="Why BRD">
    <div class="container">
        <div class="why-brd__grid">

            <div class="why-brd__text">
                <span class="why-brd__eyebrow">Why BRD</span>
                <h2>Why Should I Pay for Pest Control?</h2>
                <p class="why-brd__body">
                    DIY solutions treat the surface. BRD gets to the source. Our trained technicians identify what's getting in, cut it off, and make sure it doesn't come back.
                </p>

                <ul class="why-brd__items">
                    <li class="why-brd__item">
                        <div class="why-brd__item-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
                        <div>
                            <p class="why-brd__item-title">Satisfaction Guarantee</p>
                            <p class="why-brd__item-desc">Every service is backed by our guarantee. If pests return, we do too.</p>
                        </div>
                    </li>
                    <li class="why-brd__item">
                        <div class="why-brd__item-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                        <div>
                            <p class="why-brd__item-title">Local &amp; Licensed</p>
                            <p class="why-brd__item-desc">Certified technicians who know your region's specific pest pressures.</p>
                        </div>
                    </li>
                    <li class="why-brd__item">
                        <div class="why-brd__item-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"/></svg></div>
                        <div>
                            <p class="why-brd__item-title">Trained &amp; Certified</p>
                            <p class="why-brd__item-desc">Ongoing training &mdash; not just a one-day cert. We take the work seriously.</p>
                        </div>
                    </li>
                    <li class="why-brd__item">
                        <div class="why-brd__item-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
                        <div>
                            <p class="why-brd__item-title">Flexible Timing</p>
                            <p class="why-brd__item-desc">Schedule around your life. Same-day appointments available.</p>
                        </div>
                    </li>
                </ul>

                <a href="<?php echo esc_url( home_url( '/get-a-quote' ) ); ?>" class="btn btn-red">
                    Get a Free Quote
                </a>
            </div>

            <div class="why-brd__photo">
                <img
                    src="<?php echo esc_url( $img_why ); ?>"
                    alt="BRD technician treating a home"
                    loading="lazy"
                >
                <div class="why-brd__badge">
                    <strong class="why-brd__badge-num">20+</strong>
                    <span class="why-brd__badge-label">Pest Types Treated</span>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ================================================
     4. SERVICES GRID
     ================================================ -->
<section class="services" aria-label="Our services">
    <div class="container">

        <div class="services__header">
            <span class="services__eyebrow">What We Treat</span>
            <h2>Whatever Got In, We'll Get It Out.</h2>
            <p class="services__sub">From common household pests to serious infestations.</p>
        </div>

        <div class="services__grid">

            <a href="<?php echo esc_url( home_url( '/services/pest-control' ) ); ?>" class="service-card">
                <div class="service-card__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"><circle cx="12" cy="6" r="2"/><ellipse cx="12" cy="12" rx="3" ry="3.5"/><ellipse cx="12" cy="19" rx="3.5" ry="3"/><line x1="10.5" y1="4.5" x2="8.5" y2="3"/><line x1="13.5" y1="4.5" x2="15.5" y2="3"/><line x1="9" y1="10" x2="5" y2="9"/><line x1="9" y1="12" x2="5" y2="12"/><line x1="15" y1="10" x2="19" y2="9"/><line x1="15" y1="12" x2="19" y2="12"/><line x1="9" y1="17" x2="5" y2="18"/><line x1="15" y1="17" x2="19" y2="18"/></svg></div>
                <h3>Pest Control</h3>
                <p>Ants, spiders, cockroaches, silverfish, and more — year-round protection.</p>
                <span class="service-card__link">Learn more &rarr;</span>
            </a>

            <a href="<?php echo esc_url( home_url( '/services/rodent-control' ) ); ?>" class="service-card">
                <div class="service-card__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="10" cy="16" rx="7" ry="5"/><circle cx="17" cy="11" r="4"/><circle cx="15.5" cy="9" r="1.5"/><circle cx="19.5" cy="9" r="1.5"/><circle cx="18" cy="11" r="0.8" fill="currentColor" stroke="none"/><path d="M3 18 Q1 21 3 22"/></svg></div>
                <h3>Rodent Control</h3>
                <p>Full exclusion, baiting, and follow-up. No half measures.</p>
                <span class="service-card__link">Learn more &rarr;</span>
            </a>

            <a href="<?php echo esc_url( home_url( '/services/mosquito-control' ) ); ?>" class="service-card">
                <div class="service-card__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="14" rx="2" ry="5.5"/><circle cx="12" cy="7" r="2.5"/><path d="M12 4.5V3"/><path d="M10 11C8 10 5 11 4 13"/><path d="M14 11C16 10 19 11 20 13"/><line x1="10" y1="16" x2="6" y2="20"/><line x1="14" y1="16" x2="18" y2="20"/></svg></div>
                <h3>Mosquito Control</h3>
                <p>Take back your yard. Seasonal and one-time treatments available.</p>
                <span class="service-card__link">Learn more &rarr;</span>
            </a>

            <a href="<?php echo esc_url( home_url( '/services/bed-bugs' ) ); ?>" class="service-card">
                <div class="service-card__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M2 20V8h20v12"/><path d="M2 12h20"/><path d="M6 12V8a2 2 0 012-2h8a2 2 0 012 2v4"/><line x1="2" y1="8" x2="2" y2="5"/><line x1="22" y1="8" x2="22" y2="5"/></svg></div>
                <h3>Bed Bugs</h3>
                <p>Complete elimination &mdash; not just surface treatment.</p>
                <span class="service-card__link">Learn more &rarr;</span>
            </a>

            <a href="<?php echo esc_url( home_url( '/services/termite-control' ) ); ?>" class="service-card">
                <div class="service-card__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div>
                <h3>Termite Control</h3>
                <p>Protect your biggest investment before damage starts.</p>
                <span class="service-card__link">Learn more &rarr;</span>
            </a>

            <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="service-card">
                <div class="service-card__icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg></div>
                <h3>Protection Plans</h3>
                <p>Year-round coverage from one low monthly rate. Set it and forget it.</p>
                <span class="service-card__link">See plans &rarr;</span>
            </a>

        </div>
    </div>
</section>


<!-- ================================================
     5. TESTIMONIALS
     ================================================ -->
<section class="testimonials" aria-label="Customer reviews">
    <div class="container">

        <div class="testimonials__header">
            <span class="testimonials__eyebrow">Customer Reviews</span>
            <h2>What Our Customers Actually Say</h2>
        </div>

        <div class="testimonials__grid">

            <div class="testimonial-card">
                <div class="testimonial-card__stars" aria-label="5 stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p class="testimonial-card__quote">
                    "Our technician showed up on time, was thorough, and actually explained what he was treating and why. Haven't seen a bug since."
                </p>
                <div class="testimonial-card__footer">
                    <p class="testimonial-card__name">Sarah M.</p>
                    <p class="testimonial-card__location">Salt Lake City, UT</p>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-card__stars" aria-label="5 stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p class="testimonial-card__quote">
                    "I've had pest control before but never like this. Night and day difference. They actually fixed the problem instead of just spraying and leaving."
                </p>
                <div class="testimonial-card__footer">
                    <p class="testimonial-card__name">David R.</p>
                    <p class="testimonial-card__location">Houston, TX</p>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-card__stars" aria-label="5 stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p class="testimonial-card__quote">
                    "They treated the outside and the inside. Sealed up entry points I didn't even know existed. Haven't had a single issue since."
                </p>
                <div class="testimonial-card__footer">
                    <p class="testimonial-card__name">Jennifer K.</p>
                    <p class="testimonial-card__location">Atlanta, GA</p>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ================================================
     6. SERVICE AREAS
     ================================================ -->
<section class="service-areas" aria-label="Service areas">
    <div class="container">
        <div class="service-areas__grid">

            <div class="service-areas__text">
                <span class="service-areas__eyebrow">Where We Operate</span>
                <h2>Serving 5 States Across the US</h2>
                <p class="service-areas__body">
                    BRD deploys local teams across Georgia, Maryland, Oklahoma, Texas, and Utah — technicians who know your region, your pests, and your community.
                </p>

                <div class="service-areas__states">

                    <div>
                        <p class="service-areas__state-name">Georgia</p>
                        <div class="service-areas__cities">
                            <a href="<?php echo esc_url( home_url( '/locations/atlanta' ) ); ?>" class="service-areas__city">Atlanta</a>
                            <a href="<?php echo esc_url( home_url( '/locations/atlanta' ) ); ?>" class="service-areas__city">Marietta</a>
                            <a href="<?php echo esc_url( home_url( '/locations/atlanta' ) ); ?>" class="service-areas__city">Alpharetta</a>
                            <a href="<?php echo esc_url( home_url( '/locations/atlanta' ) ); ?>" class="service-areas__city">Roswell</a>
                            <a href="<?php echo esc_url( home_url( '/locations/atlanta' ) ); ?>" class="service-areas__city">Sandy Springs</a>
                        </div>
                    </div>

                    <div>
                        <p class="service-areas__state-name">Maryland</p>
                        <div class="service-areas__cities">
                            <a href="<?php echo esc_url( home_url( '/locations/maryland' ) ); ?>" class="service-areas__city">Baltimore</a>
                            <a href="<?php echo esc_url( home_url( '/locations/maryland' ) ); ?>" class="service-areas__city">Annapolis</a>
                            <a href="<?php echo esc_url( home_url( '/locations/maryland' ) ); ?>" class="service-areas__city">Rockville</a>
                            <a href="<?php echo esc_url( home_url( '/locations/maryland' ) ); ?>" class="service-areas__city">Silver Spring</a>
                            <a href="<?php echo esc_url( home_url( '/locations/maryland' ) ); ?>" class="service-areas__city">Frederick</a>
                        </div>
                    </div>

                    <div>
                        <p class="service-areas__state-name">Oklahoma</p>
                        <div class="service-areas__cities">
                            <a href="<?php echo esc_url( home_url( '/locations/oklahoma-city' ) ); ?>" class="service-areas__city">Oklahoma City</a>
                            <a href="<?php echo esc_url( home_url( '/locations/oklahoma-city' ) ); ?>" class="service-areas__city">Edmond</a>
                            <a href="<?php echo esc_url( home_url( '/locations/oklahoma-city' ) ); ?>" class="service-areas__city">Norman</a>
                            <a href="<?php echo esc_url( home_url( '/locations/oklahoma-city' ) ); ?>" class="service-areas__city">Moore</a>
                            <a href="<?php echo esc_url( home_url( '/locations/oklahoma-city' ) ); ?>" class="service-areas__city">Midwest City</a>
                        </div>
                    </div>

                    <div>
                        <p class="service-areas__state-name">Texas</p>
                        <div class="service-areas__cities">
                            <a href="<?php echo esc_url( home_url( '/locations/houston' ) ); ?>" class="service-areas__city">Houston</a>
                            <a href="<?php echo esc_url( home_url( '/locations/dallas' ) ); ?>" class="service-areas__city">Dallas</a>
                            <a href="<?php echo esc_url( home_url( '/locations/austin' ) ); ?>" class="service-areas__city">Austin</a>
                            <a href="<?php echo esc_url( home_url( '/locations/san-antonio' ) ); ?>" class="service-areas__city">San Antonio</a>
                            <a href="<?php echo esc_url( home_url( '/locations/dallas' ) ); ?>" class="service-areas__city">Fort Worth</a>
                        </div>
                    </div>

                    <div>
                        <p class="service-areas__state-name">Utah</p>
                        <div class="service-areas__cities">
                            <a href="<?php echo esc_url( home_url( '/locations/utah' ) ); ?>" class="service-areas__city">Salt Lake City</a>
                            <a href="<?php echo esc_url( home_url( '/locations/utah' ) ); ?>" class="service-areas__city">Provo</a>
                            <a href="<?php echo esc_url( home_url( '/locations/utah' ) ); ?>" class="service-areas__city">Orem</a>
                            <a href="<?php echo esc_url( home_url( '/locations/utah' ) ); ?>" class="service-areas__city">Sandy</a>
                            <a href="<?php echo esc_url( home_url( '/locations/utah' ) ); ?>" class="service-areas__city">West Jordan</a>
                        </div>
                    </div>

                </div>

                <a href="<?php echo esc_url( home_url( '/locations' ) ); ?>" class="btn btn-blue">
                    See All Locations
                </a>
            </div>

            <div class="service-areas__photo">
                <img
                    src="<?php echo esc_url( $img_areas ); ?>"
                    alt="BRD technician serving local communities"
                    loading="lazy"
                >
            </div>

        </div>
    </div>
</section>


<!-- ================================================
     7. FINAL CTA
     ================================================ -->
<section class="final-cta" aria-label="Get a quote">
    <div class="container">
        <h2>Ready to Get Your Home Protected?</h2>
        <p class="final-cta__sub">Start with a free quote &mdash; no commitment, no hassle.</p>
        <div class="final-cta__buttons">
            <a href="<?php echo esc_url( home_url( '/get-a-quote' ) ); ?>" class="btn btn-red btn-lg">
                Get a Free Quote
            </a>
            <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="btn btn-outline btn-lg">
                See Our Services
            </a>
        </div>
        <a href="tel:+18335059715" class="final-cta__phone">
            Or call us: <span>1-833-505-9715</span>
        </a>
    </div>
</section>

<?php get_footer(); ?>
