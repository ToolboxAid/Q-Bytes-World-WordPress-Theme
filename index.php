'index.php'
<?php

get_header(); ?>
	
	<!-- site-content -->
	<div class="site-content clearfix">
		
		<!-- main-column -->
		<div class="main-column">

			<?php if (have_posts()) :
				while (have_posts()) : the_post();

					get_template_part('template-content', get_post_format());

				endwhile; ?>

				<!-- Start the pagination functions after the loop. -->
				<div class="nav-next alignleft"><?php previous_posts_link( '&laquo; Newer posts' ); ?></div>
				<div class="nav-previous alignright"><?php next_posts_link( 'Older posts &raquo;' ); ?></div>
				<!-- End the pagination functions after the loop. -->
			

				<?php
				else :
					get_template_part('template-empty'); /* matches file name empty.php */	
				endif;
				?>

		</div><!-- /main-column -->

		<?php get_sidebar(); ?>
		
	</div><!-- /site-content -->
	
	<?php get_footer();

?>
