<?php

get_header();

if (have_posts()) :
    /* the loop */
?>


<h2><?php 
if (is_category())
{
    echo 'Category: ';
    echo single_cat_title();
}
elseif (is_tag())
{
    echo 'Tag: ';
    echo single_tag_title();
}
elseif (is_author())
{
    echo 'Author Archives: ';
    the_post();
    echo get_the_author();
    rewind_posts();
}
elseif (is_day())
{
    echo 'Daily Archives: ' . get_the_date('F jS, Y');
}
elseif (is_month())
{
    echo 'Monthly Archives: ' . get_the_date('F Y');
}
elseif (is_year())
{
    echo 'Yearly Archives: ' . get_the_date('Y');}
else
{
    echo 'Archives:';
}

?></h2>

<?php

	while (have_posts()) : the_post(); ?>
	
	<article class="post">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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

		<?php the_excerpt(); ?>
	</article>
	
	<?php endwhile;
	else :
		echo '<p>Sorry, no content found  :(</p>';	
	endif;
	
get_footer();

?>