<div id="team-loop" class="flex space-between three-cols">
  <?php 
  if ( have_posts() ):
    while ( have_posts() ): 
      the_post(); 
  ?>
  <div class="service-col matchheight">
    <?php the_post_thumbnail("360-360"); ?>
    <div class="flyover">
      <p class="name">
        <strong><?php the_title(); ?></strong>
      </p>
      <p class="position"><?php the_field('position'); ?></p>
      <p class="text"><?php the_field('short-text'); ?></p>
      <?php 
      if( have_rows('social') ):
        while ( have_rows('social') ) : the_row(); ?>
      <ul class="team-social-links flex">
        <li>
          <a href="<?php the_sub_field('linkedin'); ?>" target="_blank" rel="noopener" title="Linkedin">
            <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-linkedin-in fa-w-14 fa-7x">
              <path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z" class=""></path>
            </svg>
          </a>
        </li>
        <li>
          <a href="<?php the_sub_field('xing'); ?>" target="_blank" rel="noopener" title="Xing">
            <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="xing" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-xing fa-w-12 fa-7x">
              <path fill="currentColor" d="M162.7 210c-1.8 3.3-25.2 44.4-70.1 123.5-4.9 8.3-10.8 12.5-17.7 12.5H9.8c-7.7 0-12.1-7.5-8.5-14.4l69-121.3c.2 0 .2-.1 0-.3l-43.9-75.6c-4.3-7.8.3-14.1 8.5-14.1H100c7.3 0 13.3 4.1 18 12.2l44.7 77.5zM382.6 46.1l-144 253v.3L330.2 466c3.9 7.1.2 14.1-8.5 14.1h-65.2c-7.6 0-13.6-4-18-12.2l-92.4-168.5c3.3-5.8 51.5-90.8 144.8-255.2 4.6-8.1 10.4-12.2 17.5-12.2h65.7c8 0 12.3 6.7 8.5 14.1z" class=""></path>
            </svg>
          </a>
        </li>
        <li>
          <a href="mailto:<?php the_sub_field('mail'); ?>" title="Mail">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-envelope fa-w-16 fa-7x">
              <path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z" class=""></path>
            </svg>
          </a>
        </li>
        <li>
          <a href="tel:<?php the_sub_field('phone'); ?>" title="Phone">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-phone-alt fa-w-16 fa-7x">
              <path fill="currentColor" d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z" class=""></path>
            </svg>
          </a>
        </li>
        <?php 
        $longtext = get_field('long-text');
        if($longtext != ""): ?>
        <li>
          <a href="<?php the_permalink(); ?>" title="Info">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512" class="svg-inline--fa fa-info fa-w-6 fa-7x">
              <path fill="currentColor" d="M20 424.229h20V279.771H20c-11.046 0-20-8.954-20-20V212c0-11.046 8.954-20 20-20h112c11.046 0 20 8.954 20 20v212.229h20c11.046 0 20 8.954 20 20V492c0 11.046-8.954 20-20 20H20c-11.046 0-20-8.954-20-20v-47.771c0-11.046 8.954-20 20-20zM96 0C56.235 0 24 32.235 24 72s32.235 72 72 72 72-32.235 72-72S135.764 0 96 0z" class=""></path>
            </svg>
          </a>
        </li>
        <?php endif; ?>
      </ul>
      <?php 
        endwhile;
      endif; ?>
    </div>
  </div>
  <?php 
    endwhile;
  endif;
?>
  <div class="service-col matchheight team-box">
    <svg version="1.1" id="now" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" xml:space="preserve">
      <path d="M14.3,72c-0.9-0.9-2.4-0.9-3.3,0l-4.8,4.8c-0.9,0.9-0.9,2.4,0,3.3c0.5,0.5,1.1,0.7,1.7,0.7c0.6,0,1.2-0.2,1.7-0.7l4.8-4.8C15.2,74.4,15.2,72.9,14.3,72z" />
      <path d="M21.1,78.9c-0.9-0.9-2.4-0.9-3.3,0L1.7,95c-0.9,0.9-0.9,2.4,0,3.3C2.1,98.8,2.8,99,3.4,99s1.2-0.2,1.7-0.7l16.1-16.1C22.1,81.3,22.1,79.8,21.1,78.9z" />
      <path d="M28,85.7c-0.9-0.9-2.4-0.9-3.3,0l-8.1,8.1c-0.9,0.9-0.9,2.4,0,3.3c0.5,0.5,1.1,0.7,1.7,0.7s1.2-0.2,1.7-0.7L28,89C28.9,88.1,28.9,86.6,28,85.7z" />
      <path d="M72.4,27.6c-2.7-2.7-6.4-4.3-10.3-4.3c-3.9,0-7.5,1.5-10.3,4.3c-2.7,2.7-4.3,6.4-4.3,10.3s1.5,7.5,4.3,10.3c2.7,2.7,6.4,4.3,10.3,4.3c3.9,0,7.5-1.5,10.3-4.3C78,42.5,78,33.3,72.4,27.6z M69,44.8c-1.9,1.9-4.3,2.9-6.9,2.9c-2.6,0-5.1-1-6.9-2.9c-1.9-1.9-2.9-4.3-2.9-6.9s1-5.1,2.9-6.9c1.9-1.9,4.3-2.9,6.9-2.9c2.6,0,5.1,1,6.9,2.9C72.9,34.8,72.9,41,69,44.8z" />
      <path d="M97.4,4.3c-0.2-0.8-0.9-1.4-1.7-1.7c-8-2.2-16.6-2.2-24.6-0.1c-1.3,0.3-2.5,0.7-3.7,1.1c-0.1,0-0.2,0.1-0.3,0.1c-6.7,2.4-12.9,6.2-18,11.3c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0-0.1,0.1c0,0,0,0-0.1,0.1l-7.2,8.4C30.3,23.5,19.3,28,11.3,36.1c-2.6,2.6-4.9,5.5-6.7,8.7c-0.4,0.6-0.4,1.4-0.1,2.1C4.7,47.5,5.3,48,6,48.2l13.1,3.3l-2.6,7c-1.3,3.4-0.4,7.3,2.2,9.9l12.8,12.8c1.8,1.8,4.2,2.8,6.7,2.8c1.1,0,2.2-0.2,3.2-0.6l7-2.6L51.8,94c0.2,0.7,0.7,1.3,1.4,1.6c0.3,0.1,0.6,0.2,0.9,0.2c0.4,0,0.8-0.1,1.2-0.3c3.2-1.8,6.1-4.1,8.7-6.7c8-8,12.5-19.1,12.4-30.4l8.4-7.2c0,0,0,0,0.1-0.1c0,0,0,0,0.1-0.1c0,0,0,0,0,0c0,0,0,0,0,0c5.1-5.1,8.9-11.2,11.3-18c0-0.1,0.1-0.2,0.1-0.3c0.4-1.2,0.8-2.5,1.1-3.7C99.5,20.9,99.5,12.4,97.4,4.3z M10.4,44.5c1.3-1.8,2.7-3.5,4.3-5.1c6.2-6.2,14.3-10,22.9-10.8L21.4,47.3L10.4,44.5z M21,60.1l2.2-5.9l3,3l-4.6,7.3C20.7,63.3,20.4,61.6,21,60.1z M25,68l4.6-7.4l3.2,3.2l-6,6L25,68z M30.2,73.2l6-6l3.2,3.2L32,75L30.2,73.2zM39.9,79c-1.5,0.6-3.2,0.3-4.4-0.6l7.3-4.6l3,3L39.9,79z M60.6,85.4c-1.6,1.6-3.3,3-5.1,4.3l-2.8-11l18.7-16.1C70.6,71.1,66.8,79.2,60.6,85.4z M81.6,47.6l-31.4,27L25.4,49.8l19-22.2c0,0,0,0,0.1-0.1l7.9-9.1c4.3-4.3,9.4-7.6,15-9.8l24,24C89.2,38.2,85.8,43.3,81.6,47.6z M92.9,27.6L72.4,7.1c6.8-1.7,13.9-1.8,20.7-0.2C94.7,13.7,94.7,20.8,92.9,27.6z" />
    </svg>
    <?php 
      $loc = get_locale();
      if($loc == "de_DE"): 
    ?>
    <a href="/de/bewerber/karriere/">Jetzt bewerben</a>
    <?php elseif($loc == "en_GB"): ?>
    <a href="/en/recruitment-professionals/career/">Launch your career</a>
    <?php endif; ?>
  </div>
</div>