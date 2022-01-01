<div id="testimonial-slider">
  <?php 
  if ( have_posts() ):
    while ( have_posts() ): 
      the_post(); 
  ?>
  <div class="slider-item matchheight">
    <h4 class="color-green"><?php the_title(); ?></h4>
    <p><?php the_content(); ?></p>
  </div>
  <?php 
    endwhile;
  endif; 
?>
</div>