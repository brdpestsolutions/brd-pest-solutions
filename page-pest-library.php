<?php
/**
 * Template: Pest Library Index
 * Auto-loads for slug: /pest-library
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

<main id="main">


    <!-- ================================================
         1. HERO
         ================================================ -->
    <section class="pest-hero" aria-label="Page hero">
        <div class="pest-hero__photo" aria-hidden="true">
            <img
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/BRDTech-7.png' ); ?>"
                alt=""
                width="1400"
                height="900"
                loading="eager"
            >
        </div>
        <div class="container">
            <div class="pest-hero__content">
                <span class="pest-hero__eyebrow">Pest Library</span>
                <h1>Know What You're <em>Dealing With.</em></h1>
                <p class="pest-hero__sub">Identify your pest, understand the threat level, and find out exactly how BRD eliminates it for good.</p>
                <div class="pest-hero__actions">
                    <a href="<?php echo esc_url( home_url( '/get-a-quote' ) ); ?>" class="btn btn-red btn-lg">Get a Free Quote</a>
                    <a href="#pest-grid" class="btn btn-outline btn-lg">Browse Pests</a>
                </div>
            </div>
        </div>
    </section>


    <!-- ================================================
         2. PEST GRID
         ================================================ -->
    <section class="pest-index" id="pest-grid" aria-label="Pest library index">
        <div class="container">

            <div class="pest-index__header">
                <span class="pest-index__eyebrow">Common Household Pests</span>
                <h2>15 Pests. One Place.</h2>
                <p class="pest-index__sub">Click any pest to learn how to identify it, the threat it poses, and exactly how BRD treats it.</p>
            </div>


            <!-- INSECTS -->
            <div class="pest-category">
                <div class="pest-category__label">Insects</div>
                <div class="pest-category__grid">

                    <a href="<?php echo esc_url( home_url( '/pest-library/german-cockroach' ) ); ?>" class="pest-card-light">
                        <span class="pest-card-light__icon" aria-hidden="true">🪳</span>
                        <span class="pest-card-light__category">Insects</span>
                        <h3>German Cockroach</h3>
                        <p>Spreads bacteria rapidly and triggers allergies — the hardest roach species to eliminate.</p>
                        <span class="pest-card-light__cta">Learn more &rarr;</span>
                    </a>

                    <a href="<?php echo esc_url( home_url( '/pest-library/american-cockroach' ) ); ?>" class="pest-card-light">
                        <span class="pest-card-light__icon" aria-hidden="true">🪳</span>
                        <span class="pest-card-light__category">Insects</span>
                        <h3>American Cockroach</h3>
                        <p>Large, fast-moving, and found in sewers. Carries pathogens from drains straight to your kitchen.</p>
                        <span class="pest-card-light__cta">Learn more &rarr;</span>
                    </a>

                    <a href="<?php echo esc_url( home_url( '/pest-library/fire-ant' ) ); ?>" class="pest-card-light">
                        <span class="pest-card-light__icon" aria-hidden="true">🐜</span>
                        <span class="pest-card-light__category">Insects</span>
                        <h3>Fire Ant</h3>
                        <p>Aggressive stinging colonies that attack in waves, destroy landscaping, and send thousands to ERs each year.</p>
                        <span class="pest-card-light__cta">Learn more &rarr;</span>
                    </a>

                    <a href="<?php echo esc_url( home_url( '/pest-library/mosquito' ) ); ?>" class="pest-card-light">
                        <span class="pest-card-light__icon" aria-hidden="true">🦟</span>
                        <span class="pest-card-light__category">Insects</span>
                        <h3>Mosquito</h3>
                        <p>Transmits West Nile, Zika, and heartworm — and multiplies in any standing water on your property.</p>
                        <span class="pest-card-light__cta">Learn more &rarr;</span>
                    </a>

                    <a href="<?php echo esc_url( home_url( '/pest-library/bed-bug' ) ); ?>" class="pest-card-light">
                        <span class="pest-card-light__icon" aria-hidden="true">🐛</span>
                        <span class="pest-card-light__category">Insects</span>
                        <h3>Bed Bug</h3>
                        <p>Hides in mattress seams and bites at night. Nearly impossible to eliminate without professional treatment.</p>
                        <span class="pest-card-light__cta">Learn more &rarr;</span>
                    </a>

                    <a href="<?php echo esc_url( home_url( '/pest-library/silverfish' ) ); ?>" class="pest-card-light">
                        <span class="pest-card-light__icon" aria-hidden="true">🐟</span>
                        <span class="pest-card-light__category">Insects</span>
                        <h3>Silverfish</h3>
                        <p>Destroys books, wallpaper, and fabrics. An infestation signals high moisture and potential water damage.</p>
                        <span class="pest-card-light__cta">Learn more &rarr;</span>
                    </a>

                    <a href="<?php echo esc_url( home_url( '/pest-library/earwig' ) ); ?>" class="pest-card-light">
                        <span class="pest-card-light__icon" aria-hidden="true">🐛</span>
                        <span class="pest-card-light__category">Insects</span>
                        <h3>Earwig</h3>
                        <p>Pinching insects that invade in large numbers through gaps and foundation cracks, especially in wet weather.</p>
                        <span class="pest-card-light__cta">Learn more &rarr;</span>
                    </a>

                    <a href="<?php echo esc_url( home_url( '/pest-library/spider' ) ); ?>" class="pest-card-light">
                        <span class="pest-card-light__icon" aria-hidden="true">🕷️</span>
                        <span class="pest-card-light__category">Insects</span>
                        <h3>Spider</h3>
                        <p>Most are harmless, but Black Widows and Brown Recluses pose serious and sometimes life-threatening bites.</p>
                        <span class="pest-card-light__cta">Learn more &rarr;</span>
                    </a>

                </div>
            </div>


            <!-- RODENTS -->
            <div class="pest-category">
                <div class="pest-category__label">Rodents</div>
                <div class="pest-category__grid">

                    <a href="<?php echo esc_url( home_url( '/pest-library/house-mouse' ) ); ?>" class="pest-card-light">
                        <span class="pest-card-light__icon" aria-hidden="true">🐭</span>
                        <span class="pest-card-light__category">Rodents</span>
                        <h3>House Mouse</h3>
                        <p>Contaminates food, chews wiring, and reproduces at alarming speed — one pair becomes hundreds within months.</p>
                        <span class="pest-card-light__cta">Learn more &rarr;</span>
                    </a>

                    <a href="<?php echo esc_url( home_url( '/pest-library/roof-rat' ) ); ?>" class="pest-card-light">
                        <span class="pest-card-light__icon" aria-hidden="true">🐀</span>
                        <span class="pest-card-light__category">Rodents</span>
                        <h3>Roof Rat</h3>
                        <p>Climbs into attics and walls, gnaws structural wood and wiring, and spreads Salmonella throughout the home.</p>
                        <span class="pest-card-light__cta">Learn more &rarr;</span>
                    </a>

                    <a href="<?php echo esc_url( home_url( '/pest-library/norway-rat' ) ); ?>" class="pest-card-light">
                        <span class="pest-card-light__icon" aria-hidden="true">🐀</span>
                        <span class="pest-card-light__category">Rodents</span>
                        <h3>Norway Rat</h3>
                        <p>The largest US rodent. Burrows under foundations and can transmit leptospirosis through urine and droppings.</p>
                        <span class="pest-card-light__cta">Learn more &rarr;</span>
                    </a>

                </div>
            </div>


            <!-- WOOD-DESTROYING -->
            <div class="pest-category">
                <div class="pest-category__label">Wood-Destroying</div>
                <div class="pest-category__grid">

                    <a href="<?php echo esc_url( home_url( '/pest-library/subterranean-termite' ) ); ?>" class="pest-card-light">
                        <span class="pest-card-light__icon" aria-hidden="true">🪲</span>
                        <span class="pest-card-light__category">Wood-Destroying</span>
                        <h3>Subterranean Termite</h3>
                        <p>Causes 95% of all termite damage in the US. Invisible until structural collapse becomes a real risk.</p>
                        <span class="pest-card-light__cta">Learn more &rarr;</span>
                    </a>

                    <a href="<?php echo esc_url( home_url( '/pest-library/drywood-termite' ) ); ?>" class="pest-card-light">
                        <span class="pest-card-light__icon" aria-hidden="true">🪲</span>
                        <span class="pest-card-light__category">Wood-Destroying</span>
                        <h3>Drywood Termite</h3>
                        <p>Lives inside wood with no soil contact — thrives undetected in attics, furniture, and structural framing.</p>
                        <span class="pest-card-light__cta">Learn more &rarr;</span>
                    </a>

                    <a href="<?php echo esc_url( home_url( '/pest-library/carpenter-ant' ) ); ?>" class="pest-card-light">
                        <span class="pest-card-light__icon" aria-hidden="true">🐜</span>
                        <span class="pest-card-light__category">Wood-Destroying</span>
                        <h3>Carpenter Ant</h3>
                        <p>Excavates wood to nest inside it, silently hollowing out beams, joists, and window frames over time.</p>
                        <span class="pest-card-light__cta">Learn more &rarr;</span>
                    </a>

                    <a href="<?php echo esc_url( home_url( '/pest-library/carpenter-bee' ) ); ?>" class="pest-card-light">
                        <span class="pest-card-light__icon" aria-hidden="true">🐝</span>
                        <span class="pest-card-light__category">Wood-Destroying</span>
                        <h3>Carpenter Bee</h3>
                        <p>Drills perfect holes in wood to lay eggs, causing escalating structural damage to decks, eaves, and fences.</p>
                        <span class="pest-card-light__cta">Learn more &rarr;</span>
                    </a>

                </div>
            </div>

        </div>
    </section>


    <!-- ================================================
         3. CTA
         ================================================ -->
    <section class="pest-cta" aria-label="Call to action">
        <div class="container">
            <span class="pest-cta__eyebrow">Get Protected Today</span>
            <h2>Found Your Pest?<br>We Can Eliminate It.</h2>
            <p class="pest-cta__sub">Get a free, no-obligation quote from a local BRD technician. Same-day service available in most markets.</p>
            <div class="pest-cta__actions">
                <a href="<?php echo esc_url( home_url( '/get-a-quote' ) ); ?>" class="btn btn-red btn-lg">Get a Free Quote</a>
                <a href="tel:18335059715" class="btn btn-outline btn-lg">Call 1-833-505-9715</a>
            </div>
        </div>
    </section>


</main>

<?php get_footer(); ?>
