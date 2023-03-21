
<p>'page.php'</p>
<?php
/* Page is used for posts of type page */
get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>	
		<article class="post page">
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</article>	
	<?php endwhile;	
	else :
		echo '<p>Sorry, we are too lazy to load any Pages! ;)</p>';	
	endif;
	
get_footer();

?>