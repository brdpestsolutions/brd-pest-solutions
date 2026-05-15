<?php
/**
 * BRD Pest Solutions — Theme Functions
 */

if ( ! defined( 'ABSPATH' ) ) exit;


/* ------------------------------------------------
   Theme Setup
------------------------------------------------ */
function brd_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', [
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ] );
    add_theme_support( 'html5', [
        'search-form', 'comment-form', 'gallery',
        'caption', 'style', 'script',
    ] );
    add_theme_support( 'responsive-embeds' );

    register_nav_menus( [
        'primary' => __( 'Primary Navigation', 'brd-pest-solutions' ),
        'footer'  => __( 'Footer Navigation',  'brd-pest-solutions' ),
    ] );
}
add_action( 'after_setup_theme', 'brd_theme_setup' );


/* ------------------------------------------------
   Enqueue Assets
------------------------------------------------ */
function brd_enqueue_assets() {
    $v   = wp_get_theme()->get( 'Version' );
    $uri = get_template_directory_uri();

    // Google Fonts: Montserrat (500, 500i, 700, 800) + Inter (400)
    wp_enqueue_style(
        'brd-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400&family=Montserrat:ital,wght@0,500;0,700;0,800;1,500&display=swap',
        [],
        null
    );

    // Global styles (style.css — design tokens, reset, typography, utilities)
    wp_enqueue_style(
        'brd-global',
        get_stylesheet_uri(),
        [ 'brd-google-fonts' ],
        $v
    );

    // Component stylesheets
    wp_enqueue_style( 'brd-header', $uri . '/assets/css/header.css', [ 'brd-global' ], $v );
    wp_enqueue_style( 'brd-footer', $uri . '/assets/css/footer.css', [ 'brd-global' ], $v );

    // Page-specific stylesheets
    if ( is_front_page() ) {
        wp_enqueue_style( 'brd-home', $uri . '/assets/css/home.css', [ 'brd-global' ], $v );
    }
    if ( is_page( 'services' ) ) {
        wp_enqueue_style( 'brd-services', $uri . '/assets/css/services.css', [ 'brd-global' ], $v );
    }
    if ( is_page( 'locations' ) ) {
        wp_enqueue_style( 'brd-locations', $uri . '/assets/css/locations.css', [ 'brd-global' ], $v );
    }
    if ( is_page_template( 'template-location.php' ) ) {
        wp_enqueue_style( 'brd-location-single', $uri . '/assets/css/location-single.css', [ 'brd-global' ], $v );
    }
    if ( is_page( 'pest-library' ) || is_page_template( 'template-pest.php' ) ) {
        wp_enqueue_style( 'brd-pest-library', $uri . '/assets/css/pest-library.css', [ 'brd-global' ], $v );
    }
    if ( is_page( 'about' ) ) {
        wp_enqueue_style( 'brd-about', $uri . '/assets/css/about.css', [ 'brd-global' ], $v );
    }
    if ( is_page( 'get-a-quote' ) ) {
        wp_enqueue_style( 'brd-quote', $uri . '/assets/css/quote.css', [ 'brd-global' ], $v );
    }
    if ( is_page( 'buy-online' ) ) {
        wp_enqueue_style( 'brd-buy-online', $uri . '/assets/css/buy-online.css', [ 'brd-global' ], $v );
        wp_enqueue_script( 'stripe-js', 'https://js.stripe.com/v3/', [], null, false );
        wp_enqueue_script(
            'brd-buy-online',
            $uri . '/assets/js/buy-online.js',
            [],
            $v,
            [ 'strategy' => 'defer', 'in_footer' => true ]
        );
        wp_localize_script( 'brd-buy-online', 'brdBuyVars', [
            'ajax'      => admin_url( 'admin-ajax.php' ),
            'nonce'     => wp_create_nonce( 'brd_buy_online' ),
            'stripeKey' => get_option( 'brd_stripe_publishable', '' ),
        ] );
    }

    // Main JS — deferred, no dependencies
    wp_enqueue_script(
        'brd-main',
        $uri . '/assets/js/main.js',
        [],
        $v,
        [ 'strategy' => 'defer', 'in_footer' => true ]
    );
}
add_action( 'wp_enqueue_scripts', 'brd_enqueue_assets' );


/* ------------------------------------------------
   Fallback Nav — renders when no menu assigned in WP admin
------------------------------------------------ */
function brd_primary_nav_fallback() {
    $h = trailingslashit( home_url() );
    ?>
    <ul class="nav__list">
        <li><a href="<?php echo esc_url( $h . 'services' ); ?>">Services</a></li>
        <li><a href="<?php echo esc_url( $h . 'pest-library' ); ?>">Pest Library</a></li>
        <li class="nav__item--has-dropdown">
            <a href="<?php echo esc_url( $h . 'locations' ); ?>">Locations</a>
            <ul class="nav__dropdown">
                <li class="nav__dropdown-group">
                    <span class="nav__dropdown-state">Georgia</span>
                    <a href="<?php echo esc_url( $h . 'locations/atlanta' ); ?>">Atlanta</a>
                </li>
                <li class="nav__dropdown-group">
                    <span class="nav__dropdown-state">Maryland</span>
                    <a href="<?php echo esc_url( $h . 'locations/maryland' ); ?>">Maryland</a>
                </li>
                <li class="nav__dropdown-group">
                    <span class="nav__dropdown-state">Oklahoma</span>
                    <a href="<?php echo esc_url( $h . 'locations/oklahoma-city' ); ?>">Oklahoma City</a>
                </li>
                <li class="nav__dropdown-group">
                    <span class="nav__dropdown-state">Texas</span>
                    <a href="<?php echo esc_url( $h . 'locations/austin' ); ?>">Austin</a>
                    <a href="<?php echo esc_url( $h . 'locations/dallas' ); ?>">Dallas</a>
                    <a href="<?php echo esc_url( $h . 'locations/houston' ); ?>">Houston</a>
                    <a href="<?php echo esc_url( $h . 'locations/san-antonio' ); ?>">San Antonio</a>
                </li>
                <li class="nav__dropdown-group">
                    <span class="nav__dropdown-state">Utah</span>
                    <a href="<?php echo esc_url( $h . 'locations/utah' ); ?>">Utah</a>
                </li>
                <li class="nav__dropdown-divider"></li>
                <li class="nav__dropdown-all">
                    <a href="<?php echo esc_url( $h . 'locations' ); ?>">View All Locations &rarr;</a>
                </li>
            </ul>
        </li>
        <li><a href="<?php echo esc_url( $h . 'about' ); ?>">About</a></li>
        <li><a href="<?php echo esc_url( $h . 'blog' ); ?>">Blog</a></li>
    </ul>
    <?php
}

/* Page-specific body classes for CSS scoping */
add_filter( 'body_class', function( $classes ) {
    if ( is_page( 'locations' ) )   $classes[] = 'page-locations';
    if ( is_page( 'buy-online' ) )  $classes[] = 'page-buy-online';
    if ( is_page( 'get-a-quote' ) ) $classes[] = 'page-get-a-quote';
    return $classes;
} );

/* Buy Online AJAX handlers */
require_once get_template_directory() . '/includes/ajax-buy-online.php';

function brd_footer_nav_fallback() {
    echo '<ul class="footer__nav">
        <li><a href="/services">Services</a></li>
        <li><a href="/pest-library">Pest Library</a></li>
        <li><a href="/locations">Locations</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/get-a-quote">Get a Quote</a></li>
    </ul>';
}


/* ------------------------------------------------
   Clean up <head> bloat
------------------------------------------------ */
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
