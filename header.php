<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a href="#main" class="skip-link">Skip to content</a>

<div class="promo-bar" id="promo-bar" role="banner" aria-label="Promotional offer">
    <div class="promo-bar__inner">
        <span class="promo-bar__text">&#127800; Spring Special: Bundle and Save $150 Today</span>
        <a href="<?php echo esc_url( home_url( '/get-a-quote' ) ); ?>" class="promo-bar__cta">Book Now</a>
        <button class="promo-bar__dismiss" id="promo-dismiss" aria-label="Dismiss promotion" type="button">
            <svg viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <line x1="1" y1="1" x2="13" y2="13" stroke="currentColor" stroke-width="1.75" stroke-linecap="round"/>
                <line x1="13" y1="1" x2="1" y2="13" stroke="currentColor" stroke-width="1.75" stroke-linecap="round"/>
            </svg>
        </button>
    </div>
</div>

<header class="site-header" id="site-header">
    <div class="container header__inner">

        <!-- Logo -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__logo" aria-label="BRD Pest Solutions — Home">
            <?php if ( has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <img
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/WordMark-BRDBlue-scaled.webp' ); ?>"
                    alt="BRD Pest Solutions"
                    width="300"
                    height="116"
                    loading="eager"
                >
            <?php endif; ?>
        </a>

        <!-- Primary Navigation (desktop) -->
        <nav class="nav" id="primary-nav" aria-label="Primary navigation">
            <?php
            wp_nav_menu( [
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'nav__list',
                'link_before'    => '<span>',
                'link_after'     => '</span>',
                'fallback_cb'    => 'brd_primary_nav_fallback',
            ] );
            ?>
        </nav>

        <!-- CTA — desktop only -->
        <a href="<?php echo esc_url( home_url( '/get-a-quote' ) ); ?>" class="btn btn-red header__cta">
            Get a Free Quote
        </a>

        <!-- Hamburger toggle — mobile only -->
        <button
            class="hamburger"
            id="hamburger"
            aria-label="Open navigation menu"
            aria-expanded="false"
            aria-controls="mobile-menu"
        >
            <span class="hamburger__bar" aria-hidden="true"></span>
            <span class="hamburger__bar" aria-hidden="true"></span>
            <span class="hamburger__bar" aria-hidden="true"></span>
        </button>

    </div>
</header>

<!-- Mobile Navigation Drawer -->
<div class="mobile-menu" id="mobile-menu" aria-hidden="true" role="dialog" aria-label="Navigation menu">
    <nav>
        <ul class="mobile-menu__list">
            <li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>"     class="mobile-menu__link">Services</a></li>
            <li><a href="<?php echo esc_url( home_url( '/pest-library' ) ); ?>" class="mobile-menu__link">Pest Library</a></li>
            <li>
                <a href="<?php echo esc_url( home_url( '/locations' ) ); ?>" class="mobile-menu__link">Locations</a>
                <ul class="mobile-menu__sub">
                    <li><a href="<?php echo esc_url( home_url( '/locations/atlanta' ) ); ?>"       class="mobile-menu__sub-link">Atlanta, GA</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/locations/maryland' ) ); ?>"      class="mobile-menu__sub-link">Maryland</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/locations/oklahoma-city' ) ); ?>" class="mobile-menu__sub-link">Oklahoma City, OK</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/locations/austin' ) ); ?>"        class="mobile-menu__sub-link">Austin, TX</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/locations/dallas' ) ); ?>"        class="mobile-menu__sub-link">Dallas, TX</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/locations/houston' ) ); ?>"       class="mobile-menu__sub-link">Houston, TX</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/locations/san-antonio' ) ); ?>"   class="mobile-menu__sub-link">San Antonio, TX</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/locations/utah' ) ); ?>"          class="mobile-menu__sub-link">Utah</a></li>
                </ul>
            </li>
            <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>"        class="mobile-menu__link">About</a></li>
            <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>"         class="mobile-menu__link">Blog</a></li>
        </ul>
        <a href="<?php echo esc_url( home_url( '/get-a-quote' ) ); ?>" class="btn btn-red mobile-menu__cta">
            Get a Free Quote
        </a>
    </nav>
</div>
<div class="mobile-menu-overlay" id="mobile-menu-overlay" aria-hidden="true"></div>

<main id="main">
