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

add_action( 'wp_head', function () {
	if ( ! defined( 'NORTHLINE_GA4_ID' ) ) {
		return;
	}
	$id = esc_attr( NORTHLINE_GA4_ID );
	?>
	<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $id; ?>"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', '<?php echo $id; ?>');
	</script>
	<?php
}, 1 );
