<?php

get_header();

while ( have_posts() ) :
	the_post();
?>

<main class="container"><?php the_content(); ?></main>

<?php
	endwhile;
	if(is_front_page()):
?>

<span class="scroll-down"></span>

<?php
 endif;
	
get_footer();