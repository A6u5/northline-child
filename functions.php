<?php
/**
 * Child theme bootstrap: loads reusable modules from /inc.
 * To reuse on another site, copy the theme and set the constants listed in docs/WORKFLOW.md.
 */
foreach ( array( 'enqueue', 'analytics' ) as $module ) {
	require_once get_stylesheet_directory() . "/inc/{$module}.php";
}
