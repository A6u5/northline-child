<?php
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
