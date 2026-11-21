<?php
add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'northline-parent',
        get_template_directory_uri() . '/style.css'
    );
    wp_enqueue_style(
        'northline-child',
        get_stylesheet_uri(),
        array( 'northline-parent' ),
        wp_get_theme()->get( 'Version' )
    );
} );
