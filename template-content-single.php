'template-content-single.php'
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
