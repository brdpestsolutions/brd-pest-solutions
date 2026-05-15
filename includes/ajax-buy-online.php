<?php
if ( ! defined( 'ABSPATH' ) ) exit;

/* --------------------------------------------------
   brd_setup_intent
   Creates a Stripe SetupIntent so the card is vaulted
   (not charged). Team moves PM to FieldRoutes manually.
   -------------------------------------------------- */
function brd_ajax_setup_intent() {
    check_ajax_referer( 'brd_buy_online', 'nonce' );

    $secret = defined( 'BRD_STRIPE_SECRET' ) ? BRD_STRIPE_SECRET : get_option( 'brd_stripe_secret', '' );
    if ( ! $secret ) {
        wp_send_json_error( 'Stripe is not configured on this site.' );
    }

    $response = wp_remote_post( 'https://api.stripe.com/v1/setup_intents', [
        'headers' => [
            'Authorization' => 'Bearer ' . $secret,
            'Content-Type'  => 'application/x-www-form-urlencoded',
        ],
        'body' => http_build_query( [
            'usage'                  => 'off_session',
            'payment_method_types[]' => 'card',
        ] ),
        'timeout' => 15,
    ] );

    if ( is_wp_error( $response ) ) {
        wp_send_json_error( 'Network error. Please try again.' );
    }

    $body = json_decode( wp_remote_retrieve_body( $response ), true );

    if ( empty( $body['client_secret'] ) ) {
        $msg = $body['error']['message'] ?? 'Stripe error. Please try again.';
        wp_send_json_error( $msg );
    }

    wp_send_json_success( [ 'client_secret' => $body['client_secret'] ] );
}
add_action( 'wp_ajax_brd_setup_intent',        'brd_ajax_setup_intent' );
add_action( 'wp_ajax_nopriv_brd_setup_intent', 'brd_ajax_setup_intent' );


/* --------------------------------------------------
   brd_complete_order
   Saves order data and emails the BRD team.
   -------------------------------------------------- */
function brd_ajax_complete_order() {
    check_ajax_referer( 'brd_buy_online', 'nonce' );

    $order = [
        'first_name'     => sanitize_text_field(     $_POST['first_name']     ?? '' ),
        'last_name'      => sanitize_text_field(     $_POST['last_name']      ?? '' ),
        'phone'          => sanitize_text_field(     $_POST['phone']          ?? '' ),
        'email'          => sanitize_email(          $_POST['email']          ?? '' ),
        'address'        => sanitize_text_field(     $_POST['address']        ?? '' ),
        'service'        => sanitize_text_field(     $_POST['service']        ?? '' ),
        'plan'           => sanitize_text_field(     $_POST['plan']           ?? '' ),
        'pref_day'       => sanitize_text_field(     $_POST['pref_day']       ?? '' ),
        'pref_time'      => sanitize_text_field(     $_POST['pref_time']      ?? '' ),
        'notes'          => sanitize_textarea_field( $_POST['notes']          ?? '' ),
        'payment_method' => sanitize_text_field(     $_POST['payment_method'] ?? '' ),
        'created_at'     => current_time( 'mysql' ),
    ];

    // Append to stored orders list (simple MVP storage)
    $orders   = get_option( 'brd_online_orders', [] );
    $orders[] = $order;
    update_option( 'brd_online_orders', $orders, false );

    // Notify the team
    $name    = trim( $order['first_name'] . ' ' . $order['last_name'] );
    $to      = get_option( 'admin_email' );
    $subject = 'New Online Order — ' . $name;

    $body  = "A new order was placed at brdpestsolutions.com/buy-online\n\n";
    $body .= "Name:            {$name}\n";
    $body .= "Phone:           {$order['phone']}\n";
    $body .= "Email:           {$order['email']}\n";
    $body .= "Address:         {$order['address']}\n";
    $body .= "Service:         {$order['service']}\n";
    $body .= "Plan:            {$order['plan']}\n";
    $body .= "Preferred Day:   {$order['pref_day']}\n";
    $body .= "Preferred Time:  {$order['pref_time']}\n";
    $body .= "Notes:           {$order['notes']}\n";
    $body .= "Stripe PM ID:    {$order['payment_method']}\n";
    $body .= "Ordered At:      {$order['created_at']}\n\n";
    $body .= "Retrieve the Stripe payment method in the dashboard to transfer to FieldRoutes.";

    wp_mail( $to, $subject, $body );

    wp_send_json_success( [ 'order_index' => count( $orders ) ] );
}
add_action( 'wp_ajax_brd_complete_order',        'brd_ajax_complete_order' );
add_action( 'wp_ajax_nopriv_brd_complete_order', 'brd_ajax_complete_order' );
