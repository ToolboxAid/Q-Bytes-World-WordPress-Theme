<?php

/* Resource */
function script_resources() {	
	wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'script_resources');

// Navigation Menus
register_nav_menus(array(
	'primary' => __( 'Primary Menu'),
	'footer' => __( 'Footer Menu'),
));

// Customize excerpt word count length
function custom_excerpt_length()
{
	return 38;
}
add_filter('excerpt_length', 'custom_excerpt_length');