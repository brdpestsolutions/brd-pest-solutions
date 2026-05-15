<?php
/**
 * Template Name: Location Page
 *
 * Individual city/market location page.
 * Assign this template to each child page under /locations/.
 *
 * Location-specific content is driven by page meta (ACF or custom fields).
 * Until ACF is set up, hard-code content here per location.
 *
 * @package BRD_Pest_Solutions
 */

/*
 * --------------------------------------------------
 * LOCATION DATA
 * Replace with get_field() calls once ACF is live.
 * --------------------------------------------------
 */
$location = [
    'city'        => 'Atlanta',
    'state'       => 'Georgia',
    'state_abbr'  => 'GA',
    'slug'        => 'atlanta',
    'hero_img'    => get_template_directory_uri() . '/assets/images/BRDTech-24.jpg',
    'hero_sub'    => 'From Buckhead to Alpharetta, BRD\'s local Atlanta team delivers fast, guaranteed protection against Georgia\'s toughest pests.',
    'services_sub' => 'Full-service pest control tailored to Atlanta\'s climate and the pests that come with it.',
    'pests_sub'   => 'Georgia\'s heat and humidity create ideal conditions for a wide range of pests. Here\'s what Atlanta homeowners deal with most.',
    'areas_intro' => 'BRD serves Metro Atlanta and the surrounding suburbs. If you\'re not sure whether we cover your neighborhood, just ask.',
    'areas'       => [
        'Buckhead', 'Alpharetta', 'Marietta', 'Roswell', 'Sandy Springs',
        'Decatur', 'Johns Creek', 'Lawrenceville', 'Kennesaw', 'Smyrna',
        'Dunwoody', 'Cumming', 'Woodstock', 'Duluth', 'Peachtree City',
        'Stockbridge', 'McDonough', 'Canton', 'Conyers', 'Covington',
    ],
    'services'    => [
        [
            'title' => 'General Pest Control',
            'desc'  => 'Year-round protection against roaches, ants, spiders, silverfish, and the dozens of other species that try to move in.',
            'icon'  => '<path d="M12 2a10 10 0 1 0 0 20A10 10 0 0 0 12 2z"/><path d="M12 8v4l3 3"/>',
        ],
        [
            'title' => 'Termite Control',
            'desc'  => 'Georgia leads the nation in termite pressure. BRD\'s treatment plans protect your home\'s structure before damage starts.',
            'icon'  => '<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/>',
        ],
        [
            'title' => 'Mosquito Control',
            'desc'  => 'Atlanta\'s heat and humidity fuel mosquito season nearly year-round. We treat breeding sites and resting areas so you can use your yard.',
            'icon'  => '<circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/>',
        ],
        [
            'title' => 'Rodent Control',
            'desc'  => 'Roof rats and mice find their way in — especially in fall. We locate entry points, eliminate the population, and seal them out.',
            'icon'  => '<rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>',
        ],
        [
            'title' => 'Fire Ant Treatment',
            'desc'  => 'Fire ants are aggressive and venomous. Our targeted treatments eliminate entire colonies at the source — not just the mound.',
            'icon'  => '<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>',
        ],
        [
            'title' => 'Cockroach Elimination',
            'desc'  => 'German cockroaches thrive in Atlanta\'s heat. We eliminate existing infestations and apply barriers that prevent their return.',
            'icon'  => '<path d="M14.5 10c-.83 0-1.5-.67-1.5-1.5v-5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5z"/><path d="M20.5 10H19V8.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/>',
        ],
    ],
    'pests'       => [
        [
            'emoji' => '🪳',
            'label' => 'Most Common',
            'name'  => 'German Cockroach',
            'desc'  => 'Atlanta\'s #1 indoor pest. Thrives in warm, humid kitchens and bathrooms. A rapid breeder — a small problem becomes a large infestation fast.',
        ],
        [
            'emoji' => '🐜',
            'label' => 'Year-Round Threat',
            'name'  => 'Fire Ant',
            'desc'  => 'Aggressive and venomous, fire ants colonize lawns across Metro Atlanta. Mounds reappear quickly without targeted colony treatment.',
        ],
        [
            'emoji' => '🪵',
            'label' => 'Silent Destroyer',
            'name'  => 'Subterranean Termite',
            'desc'  => 'Georgia is a termite hot zone. Eastern subterranean termites work silently underground and can destroy structural wood over years.',
        ],
        [
            'emoji' => '🦟',
            'label' => 'Seasonal Peak',
            'name'  => 'Mosquito',
            'desc'  => 'Atlanta\'s humid summers keep mosquito season intense and long. Standing water anywhere on your property is a breeding ground.',
        ],
    ],
];

get_header();
?>


<!-- ================================================
     1. HERO
     ================================================ -->
<section class="location-hero" aria-label="<?php echo esc_attr( $location['city'] ); ?> hero">
    <div class="location-hero__photo" aria-hidden="true">
        <img src="<?php echo esc_url( $location['hero_img'] ); ?>" alt="" loading="eager">
    </div>
    <div class="container">
        <div class="location-hero__content">
            <span class="location-hero__eyebrow"><?php echo esc_html( $location['city'] . ', ' . $location['state'] ); ?></span>
            <h1>Pest Control for <em><?php echo esc_html( $location['city'] ); ?> Homeowners.</em></h1>
            <p class="location-hero__sub"><?php echo esc_html( $location['hero_sub'] ); ?></p>
            <div class="location-hero__actions">
                <a href="<?php echo esc_url( home_url( '/get-a-quote' ) ); ?>" class="btn btn-red btn-lg">Get a Free Quote</a>
                <a href="tel:18335059715" class="btn btn-outline btn-lg">Call 1-833-505-9715</a>
            </div>
        </div>
    </div>
</section>


<!-- ================================================
     2. TRUST BAR
     ================================================ -->
<div class="location-trust" aria-label="Trust signals">
    <div class="container">
        <div class="location-trust__grid">

            <div class="location-trust__item">
                <div class="location-trust__icon" aria-hidden="true">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
                    </svg>
                </div>
                <span class="location-trust__label">Same-Day Service Available</span>
            </div>

            <div class="location-trust__item">
                <div class="location-trust__icon" aria-hidden="true">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/>
                    </svg>
                </div>
                <span class="location-trust__label">100% Satisfaction Guaranteed</span>
            </div>

            <div class="location-trust__item">
                <div class="location-trust__icon" aria-hidden="true">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>
                    </svg>
                </div>
                <span class="location-trust__label">Local <?php echo esc_html( $location['city'] ); ?> Team</span>
            </div>

            <div class="location-trust__item">
                <div class="location-trust__icon" aria-hidden="true">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                </div>
                <span class="location-trust__label">Licensed &amp; Insured</span>
            </div>

        </div>
    </div>
</div>


<!-- ================================================
     3. SERVICES
     ================================================ -->
<section class="location-services" aria-label="Services in <?php echo esc_attr( $location['city'] ); ?>">
    <div class="container">

        <div class="location-services__header">
            <span class="location-services__eyebrow">What We Treat</span>
            <h2>Pest Control Services in <?php echo esc_html( $location['city'] ); ?></h2>
            <p class="location-services__sub"><?php echo esc_html( $location['services_sub'] ); ?></p>
        </div>

        <div class="location-services__grid">
            <?php foreach ( $location['services'] as $service ) : ?>
            <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="location-service-card">
                <div class="location-service-card__icon" aria-hidden="true">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <?php echo $service['icon']; ?>
                    </svg>
                </div>
                <h3><?php echo esc_html( $service['title'] ); ?></h3>
                <p><?php echo esc_html( $service['desc'] ); ?></p>
            </a>
            <?php endforeach; ?>
        </div>

    </div>
</section>


<!-- ================================================
     4. LOCAL PESTS
     ================================================ -->
<section class="location-pests" aria-label="Common pests in <?php echo esc_attr( $location['city'] ); ?>">
    <div class="container">

        <div class="location-pests__header">
            <span class="location-pests__eyebrow">Know Your Enemy</span>
            <h2><?php echo esc_html( $location['city'] ); ?>'s Most Common Pest Problems</h2>
            <p class="location-pests__sub"><?php echo esc_html( $location['pests_sub'] ); ?></p>
        </div>

        <div class="location-pests__grid">
            <?php foreach ( $location['pests'] as $pest ) : ?>
            <a href="<?php echo esc_url( home_url( '/pest-library' ) ); ?>" class="pest-card">
                <div class="pest-card__icon" aria-hidden="true"><?php echo $pest['emoji']; ?></div>
                <span class="pest-card__label"><?php echo esc_html( $pest['label'] ); ?></span>
                <h3><?php echo esc_html( $pest['name'] ); ?></h3>
                <p><?php echo esc_html( $pest['desc'] ); ?></p>
            </a>
            <?php endforeach; ?>
        </div>

        <div class="location-pests__footer">
            <a href="<?php echo esc_url( home_url( '/pest-library' ) ); ?>" class="btn btn-outline">
                Browse the Full Pest Library
            </a>
        </div>

    </div>
</section>


<!-- ================================================
     5. WHY BRD
     ================================================ -->
<section class="location-why" aria-label="Why BRD in <?php echo esc_attr( $location['city'] ); ?>">
    <div class="container">

        <div class="location-why__header">
            <span class="location-why__eyebrow">The BRD Difference</span>
            <h2>Why <?php echo esc_html( $location['city'] ); ?> Homeowners Choose BRD</h2>
        </div>

        <div class="location-why__grid">

            <div class="location-why__item">
                <div class="location-why__icon" aria-hidden="true">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>
                    </svg>
                </div>
                <h3>Local <?php echo esc_html( $location['city'] ); ?> Expertise</h3>
                <p>Our technicians live and work in <?php echo esc_html( $location['city'] ); ?>. They know the pest seasons, the microclimates, and the specific conditions that drive infestations in <?php echo esc_html( $location['state'] ); ?> homes.</p>
            </div>

            <div class="location-why__item">
                <div class="location-why__icon" aria-hidden="true">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
                    </svg>
                </div>
                <h3>Fast Local Response</h3>
                <p>Local teams mean shorter wait times. We offer same-day service availability when you need it most — no routing through a national call center.</p>
            </div>

            <div class="location-why__item">
                <div class="location-why__icon" aria-hidden="true">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                </div>
                <h3>Satisfaction Guaranteed</h3>
                <p>Every BRD service is backed by our full satisfaction guarantee. If pests return between scheduled visits, so do we — at no charge to you.</p>
            </div>

        </div>
    </div>
</section>


<!-- ================================================
     6. SERVICE AREAS / NEIGHBORHOODS
     ================================================ -->
<section class="location-areas" aria-label="Areas served near <?php echo esc_attr( $location['city'] ); ?>">
    <div class="container">

        <div class="location-areas__header">
            <span class="location-areas__eyebrow">Neighborhoods We Cover</span>
            <h2>Serving <?php echo esc_html( $location['city'] ); ?> and Surrounding Areas</h2>
            <p class="location-areas__intro"><?php echo esc_html( $location['areas_intro'] ); ?></p>
        </div>

        <div class="location-areas__tags">
            <?php foreach ( $location['areas'] as $area ) : ?>
            <span class="location-areas__tag"><?php echo esc_html( $area ); ?></span>
            <?php endforeach; ?>
        </div>

    </div>
</section>


<!-- ================================================
     7. CTA
     ================================================ -->
<section class="location-cta" aria-label="Call to action">
    <div class="container">
        <span class="location-cta__eyebrow">Get Started Today</span>
        <h2>Ready to Protect Your <?php echo esc_html( $location['city'] ); ?> Home?</h2>
        <p class="location-cta__sub">Get a free, no-obligation quote from a local BRD technician. Same-day service available. 100% satisfaction guaranteed.</p>
        <div class="location-cta__actions">
            <a href="<?php echo esc_url( home_url( '/get-a-quote' ) ); ?>" class="btn btn-white btn-lg">Get a Free Quote</a>
            <a href="tel:18335059715" class="btn btn-outline btn-lg">Call 1-833-505-9715</a>
        </div>
    </div>
</section>


<?php get_footer(); ?>
