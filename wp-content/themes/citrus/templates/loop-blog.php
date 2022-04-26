<div id="blog-loop" class="flex space-between three-cols">
  <?php 
  if ( have_posts() ):
    while ( have_posts() ): 
      the_post(); 
      $image = get_field('icon');
      $img_title = $image['title'];
      $img_url = $image['url'];
  ?>
  <div class="service-col matchheight">
    <a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail( '420-250' );  ?></a>
    <p><?php the_time('d.m.Y') ?></p>
    <h4><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h4>
    <?php the_excerpt(); ?>
  </div>
  <?php 
    endwhile;
  endif; 
?>
</div>