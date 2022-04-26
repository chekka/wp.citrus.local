<?php get_header(); ?>

<main class="container">

  <?php the_post_thumbnail( '800-450' );  ?>
  <h2><?php the_title(); ?></h2>
  <div class="container">
    <?php // Start the loop.
        while (have_posts()):
        the_post();      
        the_content();
      ?>
    <div class="author">Von <?php the_author(); ?></div>
    <?php
        endwhile; 
      ?>
  </div>

</main>

<?php get_footer(); ?>