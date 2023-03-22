<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	
<body <?php body_class(); ?>>
	<div class="container">
		<!-- site-header -->
		<header class="site-header">

			<div class="header-search">
				<?php get_search_form(); ?>
			</div>

			<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			<h3><?php bloginfo('description'); ?>
			<?php /* if (is_page(7)) {*/
			if (is_page('quite-kewl')) {?>
				- Thank you for the visit our KEWL site.
			<?php } ?>
			</h3>
			<nav class="site-nav">				
				<?php $args = array( 'theme_location' => 'header' ); ?>
				<?php wp_nav_menu(  $args ); ?>
			</nav>
			
		</header><!-- /site-header -->

		<div class="qbw_body">