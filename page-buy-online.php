<?php
/**
 * Template: Buy Online
 * Auto-loads for slug: /buy-online
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

<main id="main">


    <!-- ================================================
         HERO
         ================================================ -->
    <section class="buy-hero" aria-label="Buy pest control online">
        <div class="container">
            <span class="buy-hero__eyebrow">Buy Online</span>
            <h1>Start Service Online.<br><em>No Phone Call Needed.</em></h1>
            <p class="buy-hero__sub">Select your service, see transparent pricing, and pay securely &#8212; all in about three minutes.</p>
        </div>
    </section>


    <!-- ================================================
         MULTI-STEP FLOW
         ================================================ -->
    <section class="buy-flow" aria-label="Online service checkout">
        <div class="container">
            <div class="buy-flow__inner">

                <!-- ---- Step card ---- -->
                <div class="buy-card" id="buy-card">

                    <div class="buy-progress" id="buy-progress" aria-label="Checkout progress" aria-hidden="true">
                        <div class="buy-progress__dot" data-step="1">1</div>
                        <div class="buy-progress__line"></div>
                        <div class="buy-progress__dot" data-step="2">2</div>
                        <div class="buy-progress__line"></div>
                        <div class="buy-progress__dot" data-step="3">3</div>
                        <div class="buy-progress__line"></div>
                        <div class="buy-progress__dot" data-step="4">4</div>
                        <div class="buy-progress__line"></div>
                        <div class="buy-progress__dot" data-step="5">5</div>
                    </div>

                    <!-- Step 1: Choose Service -->
                    <div class="buy-step" id="step-1">
                        <span class="buy-step__label">Step 1 of 5</span>
                        <h2 class="buy-step__title">Choose Your Service</h2>
                        <p class="buy-step__sub">Select the service you&#8217;d like to start today.</p>

                        <div class="service-cards" role="radiogroup" aria-label="Select a service">
                            <button class="service-card is-selected" data-service="general-pest" role="radio" aria-checked="true" type="button">
                                <div class="service-card__icon" aria-hidden="true">
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="13" cy="10" r="4" fill="#0da3dd" opacity="0.8"/>
                                        <circle cx="13" cy="16" r="3" fill="#0da3dd"/>
                                        <line x1="5" y1="8" x2="9" y2="11" stroke="#0da3dd" stroke-width="1.5" stroke-linecap="round"/>
                                        <line x1="21" y1="8" x2="17" y2="11" stroke="#0da3dd" stroke-width="1.5" stroke-linecap="round"/>
                                        <line x1="4" y1="14" x2="10" y2="14" stroke="#0da3dd" stroke-width="1.5" stroke-linecap="round"/>
                                        <line x1="22" y1="14" x2="16" y2="14" stroke="#0da3dd" stroke-width="1.5" stroke-linecap="round"/>
                                        <line x1="6" y1="20" x2="10" y2="17" stroke="#0da3dd" stroke-width="1.5" stroke-linecap="round"/>
                                        <line x1="20" y1="20" x2="16" y2="17" stroke="#0da3dd" stroke-width="1.5" stroke-linecap="round"/>
                                    </svg>
                                </div>
                                <div class="service-card__body">
                                    <span class="service-card__name">General Pest Control</span>
                                    <span class="service-card__desc">Starting at $49.99/mo &mdash; quarterly service</span>
                                </div>
                                <span class="service-card__check" aria-hidden="true"></span>
                            </button>
                        </div>

                        <div class="buy-step__actions">
                            <button class="btn btn-red btn-lg buy-next" data-next="2" type="button">Continue &rarr;</button>
                        </div>
                    </div>

                    <!-- Step 2: Your Info -->
                    <div class="buy-step" id="step-2">
                        <span class="buy-step__label">Step 2 of 5</span>
                        <h2 class="buy-step__title">About You</h2>
                        <p class="buy-step__sub">We&#8217;ll use this to confirm service availability at your address and set up your account.</p>

                        <div class="buy-form" id="form-info">
                            <div class="buy-form__row">
                                <div class="buy-field">
                                    <label class="buy-field__label" for="first-name">First Name</label>
                                    <input class="buy-field__input" type="text" id="first-name" name="first_name" autocomplete="given-name" required>
                                </div>
                                <div class="buy-field">
                                    <label class="buy-field__label" for="last-name">Last Name</label>
                                    <input class="buy-field__input" type="text" id="last-name" name="last_name" autocomplete="family-name" required>
                                </div>
                            </div>
                            <div class="buy-form__row">
                                <div class="buy-field">
                                    <label class="buy-field__label" for="phone">Phone Number</label>
                                    <input class="buy-field__input" type="tel" id="phone" name="phone" autocomplete="tel" required>
                                </div>
                                <div class="buy-field">
                                    <label class="buy-field__label" for="email">Email Address</label>
                                    <input class="buy-field__input" type="email" id="email" name="email" autocomplete="email" required>
                                </div>
                            </div>
                            <div class="buy-field">
                                <label class="buy-field__label" for="address">Service Address</label>
                                <input class="buy-field__input" type="text" id="address" name="address" autocomplete="street-address" placeholder="123 Main St, City, State, ZIP" required>
                            </div>
                        </div>

                        <div class="buy-step__actions">
                            <button class="btn btn-outline buy-back" data-back="1" type="button">&larr; Back</button>
                            <button class="btn btn-red btn-lg buy-next" data-next="3" type="button">Continue &rarr;</button>
                        </div>
                    </div>

                    <!-- Step 3: Choose Plan -->
                    <div class="buy-step" id="step-3">
                        <span class="buy-step__label">Step 3 of 5</span>
                        <h2 class="buy-step__title">Choose Your Plan</h2>
                        <p class="buy-step__sub">Transparent pricing. No surprises.</p>

                        <div class="plan-cards" role="radiogroup" aria-label="Select a plan">
                            <button class="plan-card is-selected" data-plan="monthly" role="radio" aria-checked="true" type="button">
                                <span class="plan-card__badge">Most Popular</span>
                                <div class="plan-card__header">
                                    <span class="plan-card__name">Monthly Plan</span>
                                    <div class="plan-card__price">
                                        <span class="plan-card__amount">$49.99</span>
                                        <span class="plan-card__period">/mo</span>
                                    </div>
                                </div>
                                <ul class="plan-card__includes">
                                    <li>Quarterly exterior &amp; interior treatments</li>
                                    <li>Coverage for 20+ common household pests</li>
                                    <li>100% satisfaction guarantee &#8212; we come back free</li>
                                    <li>Cancel anytime with 30 days notice</li>
                                </ul>
                            </button>
                        </div>

                        <div class="buy-step__actions">
                            <button class="btn btn-outline buy-back" data-back="2" type="button">&larr; Back</button>
                            <button class="btn btn-red btn-lg buy-next" data-next="4" type="button">Add to Cart &rarr;</button>
                        </div>
                    </div>

                    <!-- Step 4: Appointment Preference -->
                    <div class="buy-step" id="step-4">
                        <span class="buy-step__label">Step 4 of 5</span>
                        <h2 class="buy-step__title">Appointment Preference</h2>
                        <p class="buy-step__sub">We&#8217;ll call to confirm your first visit. Let us know what works best.</p>

                        <div class="buy-form" id="form-appt">
                            <div class="buy-form__row">
                                <div class="buy-field">
                                    <label class="buy-field__label" for="pref-day">Preferred Day</label>
                                    <select class="buy-field__select" id="pref-day" name="pref_day">
                                        <option value="">No preference</option>
                                        <option value="monday">Monday</option>
                                        <option value="tuesday">Tuesday</option>
                                        <option value="wednesday">Wednesday</option>
                                        <option value="thursday">Thursday</option>
                                        <option value="friday">Friday</option>
                                    </select>
                                </div>
                                <div class="buy-field">
                                    <label class="buy-field__label" for="pref-time">Preferred Time</label>
                                    <select class="buy-field__select" id="pref-time" name="pref_time">
                                        <option value="">No preference</option>
                                        <option value="morning">Morning (8AM&#8211;12PM)</option>
                                        <option value="afternoon">Afternoon (12PM&#8211;5PM)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="buy-field">
                                <label class="buy-field__label" for="notes">Notes for Your Technician <span class="buy-field__optional">(optional)</span></label>
                                <textarea class="buy-field__textarea" id="notes" name="notes" rows="3" placeholder="Gate code, dogs in backyard, specific areas of concern&#8230;"></textarea>
                            </div>
                        </div>

                        <div class="buy-step__actions">
                            <button class="btn btn-outline buy-back" data-back="3" type="button">&larr; Back</button>
                            <button class="btn btn-red btn-lg buy-next" data-next="5" type="button">Continue to Payment &rarr;</button>
                        </div>
                    </div>

                    <!-- Step 5: Payment -->
                    <div class="buy-step" id="step-5">
                        <span class="buy-step__label">Step 5 of 5</span>
                        <h2 class="buy-step__title">Secure Checkout</h2>
                        <p class="buy-step__sub">Your card details are encrypted and stored securely by Stripe. We confirm your first appointment before any charge is made.</p>

                        <div class="stripe-card-element" id="card-element" aria-label="Card details"></div>
                        <div class="stripe-card-errors" id="card-errors" role="alert" aria-live="polite"></div>

                        <div class="buy-trust">
                            <span class="buy-trust__item">&#128274; SSL Encrypted</span>
                            <span class="buy-trust__item">Secured by Stripe</span>
                            <span class="buy-trust__item">&#10003; 100% Guaranteed</span>
                        </div>

                        <div class="buy-step__actions">
                            <button class="btn btn-outline buy-back" data-back="4" type="button">&larr; Back</button>
                            <button class="btn btn-red btn-lg" id="complete-order" type="button">Complete Order</button>
                        </div>
                    </div>

                    <!-- Confirmation screen -->
                    <div class="buy-confirmation" id="buy-confirmation" hidden>
                        <div class="buy-confirmation__icon" aria-hidden="true">&#10003;</div>
                        <h2>You&#8217;re all set.</h2>
                        <p class="buy-confirmation__sub">Your order has been received. A local BRD technician will call you within 1 business day to confirm your first appointment.</p>
                        <div class="buy-confirmation__what">
                            <h3>What happens next</h3>
                            <ol class="buy-confirmation__steps">
                                <li>We call to confirm your preferred day and time</li>
                                <li>Your technician arrives for the initial treatment</li>
                                <li>Quarterly visits keep your home pest-free year-round</li>
                            </ol>
                        </div>
                        <div class="buy-confirmation__actions">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-red btn-lg">Return to Home</a>
                            <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="btn btn-outline btn-lg">View Our Services</a>
                        </div>
                    </div>

                </div><!-- /.buy-card -->

                <!-- ---- Order Summary Sidebar ---- -->
                <div class="buy-summary" id="buy-summary" hidden>
                    <div class="buy-summary__card">
                        <h3 class="buy-summary__title">Order Summary</h3>

                        <div class="buy-summary__service">
                            <span class="buy-summary__service-name" id="summary-service">General Pest Control</span>
                        </div>

                        <div class="buy-summary__lines">
                            <div class="buy-summary__line">
                                <span class="buy-summary__line-label">Plan</span>
                                <span class="buy-summary__line-value">Monthly</span>
                            </div>
                            <div class="buy-summary__line">
                                <span class="buy-summary__line-label">Service Frequency</span>
                                <span class="buy-summary__line-value">Quarterly</span>
                            </div>
                        </div>

                        <div class="buy-summary__address" id="summary-address-wrapper" hidden>
                            <span class="buy-summary__address-label">Service Address</span>
                            <span class="buy-summary__address-value" id="summary-address"></span>
                        </div>

                        <div class="buy-summary__total">
                            <span class="buy-summary__total-label">Monthly billing</span>
                            <span class="buy-summary__total-price">$49.99<span>/mo</span></span>
                        </div>

                        <p class="buy-summary__note">Your first appointment must be confirmed before any charge is made.</p>
                    </div>

                    <div class="buy-summary__trust">
                        <span>&#10003; No commitment required</span>
                        <span>&#10003; Cancel anytime with 30 days notice</span>
                        <span>&#10003; 100% satisfaction guarantee</span>
                    </div>
                </div>

            </div>
        </div>
    </section>


</main>

<?php get_footer(); ?>
