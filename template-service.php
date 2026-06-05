<?php
/**
 * Template Name: Service Page
 * Template Post Type: page
 */

$slug = get_post_field( 'post_name', get_the_ID() );

$services = [
    'pest-control' => [
        'title'       => 'General Pest Control',
        'sub'         => 'Interior and exterior barrier treatment that eliminates 30+ household pests and keeps them from coming back, backed by our free re-service guarantee.',
        'hero_img'    => 'BRDTech-8.jpg',
        'detail_img'  => 'BRDTech-8.jpg',
        'detail_alt'  => 'BRD technician performing general pest control treatment',
        'detail_h2'   => 'One Treatment. Over 30 Pests Gone.',
        'detail_desc' => 'BRD\'s general pest control creates a protective barrier around your home that stops insects before they get inside. Our technicians treat entry points, harborage areas, and perimeter zones using products that are tough on pests and safe for your family and pets.',
        'bullets'     => ['Ants, spiders, cockroaches &amp; silverfish', 'Centipedes, earwigs &amp; stink bugs', 'Interior and exterior barrier treatment', 'Follow-up visits if pests return between scheduled services', 'Pet- and family-safe products'],
        'steps'       => [
            ['Inspection', 'Your technician walks the property identifying active pest entry points, harborage areas, and conditions attracting insects.'],
            ['Treatment',  'Interior and exterior barrier application using targeted, EPA-approved products to eliminate current activity and prevent re-entry.'],
            ['Follow-Up',  'If pests return between scheduled visits, we come back at no charge, until the problem is resolved.'],
        ],
    ],
    'termite-control' => [
        'title'       => 'Termite Control',
        'sub'         => 'Most homeowners don\'t know they have termites until the damage is already serious. BRD finds them early, eliminates the colony, and protects your home long-term.',
        'hero_img'    => 'BRDTech-24.jpg',
        'detail_img'  => 'BRDTech-3.jpg',
        'detail_alt'  => 'BRD technician performing termite inspection',
        'detail_h2'   => 'Stop the Silent Destroyer Before It\'s Too Late.',
        'detail_desc' => 'Termites cause billions in property damage every year, and most homeowners don\'t know they have them until it\'s serious. BRD\'s termite control combines thorough inspections with targeted treatment plans designed to eliminate active colonies and protect your home long-term.',
        'bullets'     => ['Full home inspection &amp; assessment', 'Subterranean and drywood termite treatment', 'Liquid treatments &amp; bait station systems', 'Pre-construction and existing-structure options', 'Annual monitoring available'],
        'steps'       => [
            ['Inspection',  'A thorough inspection of your foundation, crawl space, attic, and wood structures to locate any active termite activity or damage.'],
            ['Treatment',   'Targeted liquid treatments, bait stations, or fumigation depending on the species and severity of infestation.'],
            ['Monitoring',  'Annual follow-up inspections to confirm the colony is gone and protect against future infestations.'],
        ],
    ],
    'rodent-control' => [
        'title'       => 'Rodent Control',
        'sub'         => 'Rodents rarely stay gone after one visit. BRD places targeted bait stations and services them quarterly to keep populations under control season after season.',
        'hero_img'    => 'BRDTech-26.jpg',
        'detail_img'  => 'BRDTech-26.jpg',
        'detail_alt'  => 'BRD technician servicing a rodent bait station',
        'detail_h2'   => 'Targeted Baiting, Serviced Year-Round.',
        'detail_desc' => 'Mice and rats damage property, carry disease, and contaminate food. BRD\'s rodent control uses strategically placed bait stations, serviced quarterly so populations stay under control all year.',
        'bullets'     => ['Bait stations placed in areas of rodent activity', 'Quarterly service visits to inspect and refresh each station', 'Dead rodents removed and bait replenished every visit', 'Ongoing monitoring to keep populations under control'],
        'steps'       => [
            ['Inspection',      'We inspect interior and exterior to find where rodents are active and feeding.'],
            ['Baiting',         'We place targeted bait stations in those areas to knock down the active population.'],
            ['Quarterly Service', 'A technician returns every quarter to check each station, remove rodents, and refresh bait, keeping activity under control year-round.'],
        ],
    ],
    'mosquito-control' => [
        'title'       => 'Mosquito Control',
        'sub'         => 'Take back your yard. BRD\'s barrier spray cuts mosquito populations by up to 90% so you can actually enjoy being outside, one-time events or season-long programs available.',
        'hero_img'    => 'BRDTech-1.jpg',
        'detail_img'  => 'BRDTech-1.jpg',
        'detail_alt'  => 'BRD technician applying mosquito barrier treatment',
        'detail_h2'   => 'Take Back Your Yard. All Season Long.',
        'detail_desc' => 'BRD\'s treatment targets breeding sites and resting areas across your entire property, cutting mosquito populations by up to 90% after the first visit. Season-long recurring programs available, one call, no more thinking about it.',
        'bullets'     => ['Property inspection and breeding site identification', 'Barrier spray treatment for foliage and resting areas', 'Larvicide treatment for standing water sources', 'Season-long recurring programs available', 'Safe for pets and pollinators when dry'],
        'steps'       => [
            ['Inspection',  'We walk your property to identify breeding sites, standing water, and high-activity resting areas.'],
            ['Treatment',   'Barrier spray applied to foliage, shrubs, and resting areas along with larvicide for any standing water.'],
            ['Follow-Up',   'Recurring treatments every 30&#8211;45 days keep populations suppressed all season long.'],
        ],
    ],
    'bed-bugs' => [
        'title'       => 'Bed Bug Treatment',
        'sub'         => 'Surface sprays miss eggs and hidden populations. BRD\'s protocol targets every life stage, adults, nymphs, and eggs, so the infestation doesn\'t rebound two weeks later.',
        'hero_img'    => 'BRDTech-2.jpg',
        'detail_img'  => 'BRDTech-2.jpg',
        'detail_alt'  => 'BRD technician performing bed bug treatment',
        'detail_h2'   => 'Complete Elimination. Every Life Stage.',
        'detail_desc' => 'Bed bugs are one of the most difficult pests to eliminate because surface sprays miss eggs and hidden populations. BRD\'s treatment protocol targets every life stage, adults, nymphs, and eggs, so the infestation doesn\'t rebound two weeks later.',
        'bullets'     => ['Full room-by-room inspection to locate all activity', 'Treatment targeting adults, nymphs, and eggs', 'Liquid chemical treatment', 'Follow-up inspection included with every treatment', 'Re-treatment guarantee if activity persists'],
        'steps'       => [
            ['Inspection',  'A thorough room-by-room inspection to confirm the presence, identify all infested areas, and assess the severity.'],
            ['Treatment',   'Targeted liquid chemical treatment designed to eliminate every life stage, including eggs, nymphs, and adults.'],
            ['Follow-Up',   'A return inspection to confirm full elimination, and free re-treatment if any activity persists.'],
        ],
    ],
    'insulation-services' => [
        'title'       => 'Insulation Services',
        'sub'         => 'Upgrade your attic with clean, energy-efficient insulation that helps stabilize indoor temperatures, reduce noise, and support long-term pest protection.',
        'hero_img'    => 'service-insulation-blown-attic.jpg',
        'detail_img'  => 'service-insulation-attic-install.jpg',
        'detail_alt'  => 'Attic insulation installation in progress',
        'detail_h2'   => 'Comfort, Efficiency, and Pest Protection Above Your Ceiling.',
        'detail_desc' => 'Your attic plays a major role in how comfortable your home feels and how hard your HVAC system has to work. BRD\'s insulation services start with a thorough inspection, then we recommend either adding insulation over clean existing material or removing damaged, contaminated insulation before installing fresh coverage.',
        'bullets'     => ['Free attic insulation inspection', 'Insulation capping for clean, under-insulated attics', 'Removal and replacement for damaged or contaminated insulation', 'Helps reduce drafts, hot rooms, cold rooms, and attic noise', 'Supports pest prevention by addressing contaminated nesting areas'],
        'steps'       => [
            ['Inspection',    'We inspect insulation depth, ventilation, pest activity, moisture concerns, and signs of contamination or damage.'],
            ['Recommendation', 'Your technician explains whether your attic is a fit for capping existing insulation or a full removal and replacement.'],
            ['Installation',  'We protect the work area, install the recommended insulation, clean up debris, and walk you through the completed work.'],
        ],
        'faq'         => [
            ['How do I know if my attic needs insulation?', 'Common signs include uneven temperatures between rooms, rising heating or cooling bills, drafts, noisy living spaces, compressed insulation, or insulation that has been disturbed by pests or moisture.'],
            ['Do you remove old insulation or add more on top?', 'It depends on the condition of the existing insulation. If it is clean and dry, we may recommend adding insulation over it. If it is contaminated, damaged, wet, or heavily disturbed, removal and replacement is usually the better path.'],
            ['Can insulation services help with pests?', 'Yes. Fresh attic insulation can support a broader pest control plan by replacing contaminated nesting material and improving the attic environment. If active pest issues are present, we will identify them during the inspection and recommend the right treatment sequence.'],
            ['How long does installation usually take?', 'Most attic insulation projects can be completed in one day, though larger attics or removal-heavy jobs may take longer. Your BRD technician will give you a clearer timeline after the inspection.'],
        ],
    ],
    'protection-plans' => [
        'title'       => 'Protection Plans',
        'sub'         => 'Year-round coverage from one recurring plan. Scheduled treatments, priority scheduling, and free re-services, so you never have to think about pests again.',
        'hero_img'    => 'BRDTech-4.jpg',
        'detail_img'  => 'BRDTech-4.jpg',
        'detail_alt'  => 'BRD pest control technician',
        'detail_h2'   => 'One Plan. Zero Pest Stress.',
        'detail_desc' => 'Why deal with pests reactively when you can prevent them entirely? BRD\'s protection plans deliver scheduled treatments, priority scheduling, and free re-services, so your home stays protected all year without lifting a finger.',
        'bullets'     => ['Quarterly or monthly scheduled treatments', 'Coverage for 30+ common household pests', 'Free re-service between scheduled visits', 'Priority scheduling, no waiting in line', 'Satisfaction guaranteed or your money back'],
        'steps'       => [
            ['Sign Up',     'Choose your plan and schedule your first treatment. We\'ll handle everything from there.'],
            ['Treatment',   'Scheduled visits keep a protective barrier around your home all year, stopping pests before they get inside.'],
            ['Re-Service',  'If pests show up between scheduled visits, we come back at no charge, that\'s the BRD promise.'],
        ],
    ],
];

$s = $services[ $slug ] ?? $services['pest-control'];
$img_base = get_template_directory_uri() . '/assets/images/';

get_header();
?>

<main id="main">

<section class="services-hero" aria-label="<?php echo esc_attr( $s['title'] ); ?> hero">
    <div class="services-hero__photo" aria-hidden="true">
        <img src="<?php echo esc_url( $img_base . $s['hero_img'] ); ?>" alt="" width="1400" height="900" loading="eager">
    </div>
    <div class="container">
        <div class="services-hero__content">
            <span class="services-hero__eyebrow">Services</span>
            <h1><?php echo esc_html( $s['title'] ); ?></h1>
            <p class="services-hero__sub"><?php echo esc_html( $s['sub'] ); ?></p>
            <div class="services-hero__actions">
                <a href="<?php echo esc_url( home_url( '/get-a-quote/' ) ); ?>" class="btn btn-red btn-lg">Get a Free Quote</a>
                <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-outline btn-lg">All Services &larr;</a>
            </div>
        </div>
    </div>
</section>

<section class="service-detail service-detail--light" aria-label="What's included">
    <div class="container">
        <div class="service-detail__grid">
            <div class="service-detail__text">
                <span class="service-detail__eyebrow">What's Included</span>
                <h2><?php echo esc_html( $s['detail_h2'] ); ?></h2>
                <p class="service-detail__desc"><?php echo esc_html( $s['detail_desc'] ); ?></p>
                <ul class="service-detail__bullets">
                    <?php foreach ( $s['bullets'] as $bullet ) : ?>
                        <li><?php echo wp_kses_post( $bullet ); ?></li>
                    <?php endforeach; ?>
                </ul>
                <a href="<?php echo esc_url( home_url( '/get-a-quote/' ) ); ?>" class="btn btn-red">Get a Free Quote</a>
            </div>
            <div class="service-detail__photo">
                <img src="<?php echo esc_url( $img_base . $s['detail_img'] ); ?>" alt="<?php echo esc_attr( $s['detail_alt'] ); ?>" loading="lazy">
            </div>
        </div>
    </div>
</section>

<section class="service-steps" aria-label="How it works">
    <div class="container">
        <div class="service-steps__header">
            <span class="service-steps__eyebrow">How It Works</span>
            <h2>What to Expect</h2>
        </div>
        <div class="service-steps__grid">
            <?php foreach ( $s['steps'] as $i => $step ) : ?>
            <div class="service-step">
                <div class="service-step__num" aria-hidden="true"><?php echo $i + 1; ?></div>
                <h3><?php echo esc_html( $step[0] ); ?></h3>
                <p><?php echo esc_html( $step[1] ); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php if ( ! empty( $s['faq'] ) ) : ?>
<section class="service-faq" aria-label="<?php echo esc_attr( $s['title'] ); ?> frequently asked questions">
    <div class="container">
        <div class="service-faq__header">
            <span class="service-faq__eyebrow">Helpful FAQ</span>
            <h2>Insulation Services Questions</h2>
        </div>
        <div class="service-faq__grid">
            <?php foreach ( $s['faq'] as $item ) : ?>
            <article class="service-faq__item">
                <h3><?php echo esc_html( $item[0] ); ?></h3>
                <p><?php echo esc_html( $item[1] ); ?></p>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<section class="services-guarantee" aria-label="Why BRD">
    <div class="container">
        <div class="services-guarantee__header">
            <span class="services-guarantee__eyebrow">The BRD Promise</span>
            <h2>Service You Can Count On</h2>
        </div>
        <div class="services-guarantee__grid">
            <div class="services-guarantee__item">
                <div class="services-guarantee__icon" aria-hidden="true">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                </div>
                <h3>100% Satisfaction Guaranteed</h3>
                <p>If pests return between scheduled services, so do we, at no additional charge. We don't stop until the job is done.</p>
            </div>
            <div class="services-guarantee__item">
                <div class="services-guarantee__icon" aria-hidden="true">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h3>Licensed &amp; Insured Technicians</h3>
                <p>Every BRD technician is fully licensed, background-checked, and trained in the latest treatment methods and safety protocols.</p>
            </div>
            <div class="services-guarantee__item">
                <div class="services-guarantee__icon" aria-hidden="true">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
                <h3>Same-Day Service Available</h3>
                <p>Local teams mean faster scheduling. When you can't wait, we often can have a technician at your door the same day you call.</p>
            </div>
        </div>
    </div>
</section>

<section class="services-cta" aria-label="Get started">
    <div class="container">
        <span class="services-cta__eyebrow">Get Started Today</span>
        <h2>Ready to Get Started?</h2>
        <p class="services-cta__sub">Get a free, no-obligation quote from a local BRD technician. Same-day service available. 100% satisfaction guaranteed.</p>
        <div class="services-cta__actions">
            <a href="<?php echo esc_url( home_url( '/get-a-quote/' ) ); ?>" class="btn btn-red btn-lg">Get a Free Quote</a>
            <a href="tel:18335059715" class="btn btn-outline btn-lg">Call 1-833-505-9715</a>
        </div>
    </div>
</section>

</main>

<?php get_footer(); ?>
