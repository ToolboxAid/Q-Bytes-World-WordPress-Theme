<?php

get_header(); ?>
	
	<!-- site-content -->
	<div class="site-content clearfix">
		
		<!-- main-column -->
		<div class="main-column">

			<?php if (have_posts()) :
				while (have_posts()) : the_post();

				get_template_part('template-content', get_post_format());

				endwhile;

				else :
					get_template_part('template-empty'); /* matches file name empty.php */	
				endif;
				?>

		</div><!-- /main-column -->

		<?php get_sidebar(); ?>
		
	</div><!-- /site-content -->
	
	<?php get_footer();

?>
