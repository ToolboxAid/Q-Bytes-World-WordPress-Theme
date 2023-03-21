<?php
/* Page is used for No Title pages 
(selected from Page edit as template) 
*/

/*
Template Name: No Title Layout
*/
// Above comment registers it to Templates

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>	
		<article class="post page">
			<?php the_content(); ?>
		</article>	
	<?php endwhile;
	else :
		echo '<p>Sorry, we are too lazy to load any no title Pages! ;)</p>';	
	endif;
	
get_footer();

?>