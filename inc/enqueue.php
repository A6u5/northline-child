<?php
add_action( 'wp_enqueue_scripts', function () {
	$deps = array( 'storefront-style' );

	// Storefront's WooCommerce styles hold the price rules we override.
	if ( wp_style_is( 'storefront-woocommerce-style', 'registered' ) ) {
		$deps[] = 'storefront-woocommerce-style';
	}

	wp_enqueue_style(
		'northline-child',
		get_stylesheet_uri(),
		$deps,
		wp_get_theme()->get( 'Version' )
	);
}, 20 );
