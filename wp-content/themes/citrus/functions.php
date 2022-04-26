<?php 
add_theme_support('post-thumbnails', array( 'post','page','team' ) );

function citrus_scripts_styles(){
 wp_enqueue_style('slick', get_template_directory_uri() . '/assets/slick/slick.css', array(), null, 'all');
 wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/slick/slick-theme.css', array(), null, 'all');
 wp_enqueue_style('citrus', get_template_directory_uri() . '/css/citrus.css', array(), null, 'all');

 wp_enqueue_script('slick', get_template_directory_uri() . '/assets/slick/slick.js', array(), null, 'true' );
 wp_enqueue_script('citrus', get_template_directory_uri() . '/js/citrus.js', array(), null, 'true' );

}
add_action('wp_enqueue_scripts', 'citrus_scripts_styles');

function citrus_widgets_init() {    
  register_sidebar(array(
    'name'          => __( 'Footer Left', 'citrus' ),
    'id'            => 'footer-left',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="widget-title">',
    'after_title'   => '</div>',
  ));
  register_sidebar(array(
    'name'          => __( 'Footer Middle', 'citrus' ),
    'id'            => 'footer-mid',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="widget-title">',
    'after_title'   => '</div>',
  ));    
  register_sidebar(array(
    'name'          => __( 'Footer Right', 'citrus' ),
    'id'            => 'footer-right',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="widget-title">',
    'after_title'   => '</div>',
  ));
  register_sidebar(array(
    'name'          => __( 'Main Menu', 'citrus' ),
    'id'            => 'menu-main',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="widget-title">',
    'after_title'   => '</div>',
  )); 
}
add_action('widgets_init', 'citrus_widgets_init');

function citrus_register_nav_menu(){
        register_nav_menus( array(
            'top'  => __( 'Top Menu', 'citrus' ),
            'main' => __( 'Main Menu', 'citrus' ),            
            'footer'  => __( 'Footer Menu', 'citrus' ),
            'social'  => __( 'Social Menu', 'citrus' ),
            'sections'  => __( 'Sections Menu', 'citrus' ),
        ) );
    }
add_action( 'after_setup_theme', 'citrus_register_nav_menu', 0 );

function citrus_social_menu_atts( $atts, $item, $args ) {  
  if ($item->ID == 28 || $item->ID == 29 || $item->ID == 30) {
    $atts['target'] = '_blank';
    $atts['rel'] = 'noopener noreferrer';
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'citrus_social_menu_atts', 10, 3 );

add_action('init', function() { pll_register_string( 'kontakt-link', '/de/kontakt', 'citrus', false ); });
add_action('init', function() { pll_register_string( 'bewerbung-title', 'Initiativbewerbung', 'citrus', false ); });


function filter_email_attachments( $attachments, $email, $form, $fields ) {
  // Add an uploaded file from a file field as an attachemnt
  // The file field should have return format "FileArray"
  $file = af_get_field( 'file' );
  $attachments[] = get_attached_file( $file['id'] );

  return $attachments;
}
add_filter( 'af/form/email/attachments/key=FORM_KEY', 'filter_email_attachments', 10, 4 );