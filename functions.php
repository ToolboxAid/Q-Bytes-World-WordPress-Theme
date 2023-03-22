<?php

/* Resource */
function script_resources() {	
	wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'script_resources');

// Does page have children?
// Get top ancestor
function get_top_ancestor_id() {
	
	global $post;
	
	if ($post->post_parent) {
		$ancestors = array_reverse(get_post_ancestors($post->ID));
		return $ancestors[0];
		
	}
	
	return $post->ID;
	
}


// Does page have children?
function has_children() {
	
	global $post;
	
	$pages = get_pages('child_of=' . $post->ID);
	return count($pages);
	
}

// Customize excerpt word count length
function custom_excerpt_length()
{
	return 38;
}
add_filter('excerpt_length', 'custom_excerpt_length');

// Theme setup
function qbytesworld_Setup()
{
	// Navigation Menus
	register_nav_menus(array(
		'header' => __( 'Header Menu'),
		'footer' => __( 'Footer Menu'),
	));

	// Add feature image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 180, 120, true);// true forces aspect ratio
	add_image_size('banner-image', 920, 210, true);	
//	add_image_size('banner-image', 920, 210, 'left', 'top'); crop location

	// Add post type support
	add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}
add_action('after_setup_theme', 'qbytesworld_Setup');

// Add Widget Areas
function qbytesworld_WidgetsInit() {
	
	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar1',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget-title">',
		'after_title' => '</div>',
	));
	
	register_sidebar( array(
		'name' => 'Footer Area 1',
		'id' => 'footer1',
		'before_widget' => '<div class="widget-footer-item">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget-footer-title">',
		'after_title' => '</div>',
	));
	
	register_sidebar( array(
		'name' => 'Footer Area 2',
		'id' => 'footer2',
		'before_widget' => '<div class="widget-footer-item">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget-footer-title">',
		'after_title' => '</div>',
	));
	
	register_sidebar( array(
		'name' => 'Footer Area 3',
		'id' => 'footer3',
		'before_widget' => '<div class="widget-footer-item">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget-footer-title">',
		'after_title' => '</div>',
	));
	
	register_sidebar( array(
		'name' => 'Footer Area 4',
		'id' => 'footer4',
		'before_widget' => '<div class="widget-footer-item">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget-footer-title">',
		'after_title' => '</div>',
	));
	
}
add_action('widgets_init', 'qbytesworld_WidgetsInit');



