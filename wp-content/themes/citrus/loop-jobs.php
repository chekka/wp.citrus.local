<div id="jobs-loop" class="flex space-between three-cols">
  <?php 
  if ( have_posts() ):
    while ( have_posts() ): 
      the_post(); 
      $image = get_field('icon');
      $img_title = $image['title'];
      $img_url = $image['url'];
  ?>
  <div class="service-col matchheight">
    <a href="<?php echo get_post_permalink(); ?>">
      <img src="<?php echo $img_url; ?>" alt="<?php echo esc_attr($image['alt']); ?>" width=" 70" height="70" />
      <p><strong><?php the_title(); ?></strong></p>
      <p><?php the_field('region'); ?></p>
    </a>
  </div>
  <?php 
    endwhile;
  endif; 
?>
</div>