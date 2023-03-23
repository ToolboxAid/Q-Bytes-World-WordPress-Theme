<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	
	<body <?php body_class(); ?>>
		<!-- site-header -->
		<header class="site-header">

			<div class="social">
				<div>
					<div class="content-width">
						<p>social icons here</p>
					</div>
				</div>
			</div>

			<div class="border"></div>
			
			<div class="image">
				<div class="content-width">
					<div class="header-search">
						<?php get_search_form(); ?>
					</div>
					
					<h1 class="title"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
				</div>
			</div>
			
			<div class="border"></div>

			<div class="tagline">
				<h3 class="content-width"><?php bloginfo('description'); ?>
					<?php /* if (is_page(7)) {*/
					if (is_page('quite-kewl')) {?>
						- Thank you for the visit our KEWL site.
					<?php } ?>
				</h3>
			</div>

			<div class="menu">				
				<div class="content-width">
					<nav class="site-nav">				
					<?php $args = array( 'theme_location' => 'header' ); ?>
					<?php wp_nav_menu(  $args ); ?>
					</nav>
				</div>
			</div>
		</header><!-- /site-header -->

		<div class="qbw_body content-width"><!-- /content -->