<?php

get_header();

while ( have_posts() ) :
	the_post();
?>
<main class="container"><?php the_content(); ?></main>
<?php
	endwhile;

get_footer();