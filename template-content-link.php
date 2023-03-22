'template-content-link.php'
<article class="post post-link">
    <p>This does not create a valid link. Need to fix.</p>
	<a href="<?php echo get_the_content(); ?>">
		<span class="mini-meta"><?php the_author(); ?> @ <?php the_time('F j, Y'); ?></span>
		<span class="post-link-text"><?php the_title(); ?></span>
	</a>
</article>