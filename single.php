
<p>'single.php'</p>
<?php

get_header();

if (have_posts()) :
    /* the loop */
	while (have_posts()) : the_post(); ?>
	
	<article class="post">
		<h2><?php the_title(); ?></h2>
		<p class="post-info"><?php the_time('F jS, Y @ g:i A'); ?>
		by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?>.</a>
		  Posted in 
		 <?php
		 	$categories = get_the_category();
			$seperator = ", ";
			$output = '';
			if ($categories)
			{
				foreach ($categories as $category)
				{
					$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $seperator;
				}
			}
			echo trim($output,$seperator);
		 ?>
		</p>

		<?php
			the_post_thumbnail('banner-image');
		?>
		<?php the_content(); ?>
		
	</article>
	
	<?php endwhile; ?>

<!-- Start the pagination functions after the loop. -->
<div class="nav-next alignleft"><?php previous_post_link(  ); ?></div>
<div class="nav-previous alignright"><?php next_post_link(  ); ?></div>
<!-- End the pagination functions after the loop. -->


<?php
	else :
		get_template_part('template-empty'); /* matches file name empty.php */	
	endif;
	
get_footer();

?>