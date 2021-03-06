<?php

get_header(); ?>
<main id="main" class="site-main" role="main">
  <h2><?php the_title(); ?></h2>
  <div class="container">
    <?php // Start the loop.
      while (have_posts()):

      the_post();
      the_content();
    ?>
    <p class="text-center" style="padding-bottom:70px">
      <a class="btn" href="<?php echo get_the_permalink(pll_get_post(get_page_by_path( 'contact' )->ID));?>">Jetzt bewerben</a>
    </p>
    <?php
      // the_post_navigation([
      // 'next_text' => '<span class="meta-nav" aria-hidden="true">' . __('Next', 'twentyfifteen') . '</span> ' . '<span class="screen-reader-text">' . __('Next post:', 'twentyfifteen') . '</span> ' . '<span class="post-title">%title</span>',
      // 'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __('Previous', 'twentyfifteen') . '</span> ' . '<span class="screen-reader-text">' . __('Previous post:', 'twentyfifteen') . '</span> ' . '<span class="post-title">%title</span>',
      // ]);
      endwhile; 
    ?>
  </div>
</main>

<?php get_footer(); ?>