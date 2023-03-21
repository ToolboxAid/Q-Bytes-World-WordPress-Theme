

<?php
/* Page is used for posts of type page */
get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	
	<article class="post page">
		<div class="info-box">
			<h3>Warning about the site</h3>
			<p>Do not trust anything on this site!</p>
		</div>
		<?php the_content(); ?>
	</article>	
	<?php endwhile;	
	else :
		echo '<p>Sorry, we are too lazy to load the quite kewl Page! ;)</p>';	
	endif;
	
get_footer();
?>