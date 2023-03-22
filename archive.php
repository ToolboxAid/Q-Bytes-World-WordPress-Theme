<p>'archive.php'</p>
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
	while (have_posts()) : the_post();
		get_template_part('content'); /* matches file name content.php */	
	endwhile;
	else :
		get_template_part('empty'); /* matches file name empty.php */	
	endif;	
get_footer();

?>