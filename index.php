<p>'index.php'</p>
<?php

get_header();

if (have_posts()) :
    /* the loop */
	while (have_posts()) : the_post(); 	
		get_template_part('template-content', get_post_format()); /* matches file name template-content.php */	
	 endwhile;
	else :
		get_template_part('template-empty'); /* matches file name empty.php */	
	endif;
	
get_footer();

?>