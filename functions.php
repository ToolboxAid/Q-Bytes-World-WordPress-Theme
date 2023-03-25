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
	add_image_size('square-thumbnail', 80, 80, true);	
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

	/*
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'mytheme' ),
        'id'            => 'main-sidebar',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'mytheme' ),

        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );	
	*/
	
	register_sidebar( array(/*footer 1*/
		'name' => 'Footer Area 1',
		'id' => 'footer1',
		
		'before_widget' => '<div class="widget-footer-item">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget-footer-title">',
		'after_title' => '</div>',
	));
	
	register_sidebar( array(/*footer 2*/
		'name' => 'Footer Area 2',
		'id' => 'footer2',
		'before_widget' => '<div class="widget-footer-item">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget-footer-title">',
		'after_title' => '</div>',
	));
	
	register_sidebar( array(/*footer 3*/
		'name' => 'Footer Area 3',
		'id' => 'footer3',
		'before_widget' => '<div class="widget-footer-item">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget-footer-title">',
		'after_title' => '</div>',
	));
	
	register_sidebar( array(/*footer 4*/
		'name' => 'Footer Area 4',
		'id' => 'footer4',
		'before_widget' => '<div class="widget-footer-item">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget-footer-title">',
		'after_title' => '</div>',
	));
	
}
add_action('widgets_init', 'qbytesworld_WidgetsInit');

/*


*/

// Customize Appearance Options header
function header_options_body( $wp_customize ) {

	/* Create section */
	$wp_customize->add_section('options_header', array(
		'title' => __('Options - Header', 'qbytesworld_WordPress'),
		'priority' => 160,
	));

	/* Create setting */
	$wp_customize->add_setting('qbw_backgroud_color_start', array(
		'default' => '#cccccc',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting('qbw_backgroud_color_end', array(
		'default' => '#666666',
		'transport' => 'refresh',
	));


	$wp_customize->add_setting('qbw_link_color', array(
		'default' => '#006ec3',
		'transport' => 'refresh',
	));	

	$wp_customize->add_setting('qbw_btn_color', array(
		'default' => '#006ec3',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting('qbw_btn_text_color', array(
		'default' => '#ffffff',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting('qbw_btn_hover_color', array(
		'default' => '#004C87',
		'transport' => 'refresh',
	));

	/* add setting to section */
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'qbw_backgroud_color_start', array(
		'label' => __('Background Color start', 'qbytesworld_WordPress'),
		'section' => 'options_header',
		'settings' => 'qbw_backgroud_color_start',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'qbw_backgroud_color_end', array(
		'label' => __('Background Color end', 'qbytesworld_WordPress'),
		'section' => 'options_header',
		'settings' => 'qbw_backgroud_color_end',
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'qbw_link_color_control', array(
		'label' => __('Link Color', 'qbytesworld_WordPress'),
		'section' => 'options_header',
		'settings' => 'qbw_link_color',
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'qbw_btn_color_control', array(
		'label' => __('Button Color', 'qbytesworld_WordPress'),
		'section' => 'options_header',
		'settings' => 'qbw_btn_color',
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'qbw_btn_text_color_control', array(
		'label' => __('Button Text Color', 'qbytesworld_WordPress'),
		'section' => 'options_header',
		'settings' => 'qbw_btn_text_color',
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'qbw_btn_hover_color_control', array(
		'label' => __('Button Hover Color', 'qbytesworld_WordPress'),
		'section' => 'options_header',
		'settings' => 'qbw_btn_hover_color',
	) ) );

}
add_action('customize_register', 'header_options_body');

// Output Customize CSS
function header_options_css() { ?>

	<style type="text/css">

		body
		{			
			/* background-image: linear-gradient(180deg, red, yellow); */
			
			background-image: linear-gradient(180deg, 
				<?php echo get_theme_mod('qbw_backgroud_color_start'); ?>,
				<?php echo get_theme_mod('qbw_backgroud_color_end'); ?> );

			background-color:<?php echo get_theme_mod('qbw_backgroud_color_start'); ?>;
		}

		a:link,
		a:visited {
			color: <?php echo get_theme_mod('qbw_link_color'); ?>;
		}


		div.header-search #searchsubmit,
		.site-header nav ul li.current-menu-item a:link,
		.site-header nav ul li.current-menu-item a:visited,
		.site-header nav ul li.current-page-ancestor a:link,
		.site-header nav ul li.current-page-ancestor a:visited {
/* */		background-color: <?php echo get_theme_mod('qbw_link_color'); ?>;
/* */		color: <?php echo get_theme_mod('qbw_btn_text_color'); ?>;
}

		.btn-a,
		.btn-a:link,
		.btn-a:visited,
		div.hd-search #searchsubmit {
/* */		background-color: <?php echo get_theme_mod('qbw_btn_color'); ?>;
		}

		.btn-a:hover,
		div.hd-search #searchsubmit:hover {
/* */		background-color: <?php echo get_theme_mod('qbw_btn_hover_color'); ?>;
		}

	</style>

<?php }
add_action('wp_head', 'header_options_css');

// Customize Appearance Options body
function body_options( $body_customize ) {
	$body_customize->add_section( 'body_options', array(
	  'title' => __( 'Options - Body', 'mytheme' ),
	  'description' => __( 'Configure your My Theme settings', 'mytheme' ),
	  'priority' => 161,
	) );
  
	// Add a checkbox control
	$body_customize->add_setting( 'show_featured_image', array(
	  'default' => true,
	  'sanitize_callback' => 'sanitize_boolean',
	) );
  
	$body_customize->add_control( 'show_featured_image', array(
	  'type' => 'checkbox',
	  'label' => __( 'Show featured image on posts', 'mytheme' ),
	  'section' => 'body_options',
	) );
  
	// Add a radio button control
	$body_customize->add_setting( 'header_layout', array(
	  'default' => 'default',
	  'sanitize_callback' => 'sanitize_text_field',
	) );
  
	$body_customize->add_control( 'header_layout', array(
	  'type' => 'radio',
	  'label' => __( 'Header layout', 'mytheme' ),
	  'section' => 'body_options',
	  'choices' => array(
		'default' => __( 'Default', 'mytheme' ),
		'centered' => __( 'Centered', 'mytheme' ),
		'left' => __( 'Left', 'mytheme' ),
		'right' => __( 'Right', 'mytheme' ),
	  ),
	) );
  
	// Add a select dropdown control
	$body_customize->add_setting( 'footer_color', array(
	  'default' => 'light',
	  'sanitize_callback' => 'sanitize_text_field',
	) );
  
	$body_customize->add_control( 'footer_color', array(
	  'type' => 'select',
	  'label' => __( 'Footer color', 'mytheme' ),
	  'section' => 'body_options',
	  'choices' => array(
		'light' => __( 'Light', 'mytheme' ),
		'dark' => __( 'Dark', 'mytheme' ),
	  ),
	) );
  
	// Add a text input control
	$body_customize->add_setting( 'custom_text', array(
	  'default' => '',
	  'sanitize_callback' => 'sanitize_text_field',
	) );
  
	$body_customize->add_control( 'custom_text', array(
	  'type' => 'text',
	  'label' => __( 'Custom text', 'mytheme' ),
	  'section' => 'body_options',
	) );
  }  
  add_action( 'customize_register', 'body_options' );
  



  // Sanitize boolean values
  function sanitize_boolean( $value ) {
	return (bool) $value;
  }





  // Add a custom section to the Customizer
function mytheme_customize_register( $wp_customize ) {
   // Add a new section called "Footer Options"
   $wp_customize->add_section( 'footer_options', array(
      'title' => __( 'Options - Footer', 'mytheme' ),
      'description' => __( 'Customize the footer options of your site', 'mytheme' ),
      'priority' => 162,
   ) );

   // Add a checkbox control for "Show Footer"
   $wp_customize->add_setting( 'show_footer', array(
      'default' => true,
      'transport' => 'refresh',
   ) );
   $wp_customize->add_control( 'show_footer', array(
      'label' => __( 'Show Footer', 'mytheme' ),
      'description' => __( 'Check this box to show the footer', 'mytheme' ),
      'section' => 'footer_options',
      'type' => 'checkbox',
   ) );

   // Add a text input control for "Footer Text"
   $wp_customize->add_setting( 'footer_text', array(
      'default' => '',
      'transport' => 'refresh',
   ) );
   $wp_customize->add_control( 'footer_text', array(
      'label' => __( 'Footer Text', 'mytheme' ),
      'description' => __( 'Enter the text to display in the footer', 'mytheme' ),
      'section' => 'footer_options',
      'type' => 'text',
   ) );
}
add_action( 'customize_register', 'mytheme_customize_register' );


  