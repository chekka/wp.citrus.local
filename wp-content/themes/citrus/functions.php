<?php 
function citrus_scripts_styles(){
 wp_enqueue_style('slick', get_template_directory_uri() . '/assets/slick/slick.css', array(), null, 'all');
 wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/slick/slick-theme.css', array(), null, 'all');
 wp_enqueue_style('citrus', get_template_directory_uri() . '/assets/citrus.css', array(), null, 'all');

 wp_enqueue_script('slick', get_template_directory_uri() . '/assets/slick/slick.js', array(), null, 'true' );
 wp_enqueue_script('citrus', get_template_directory_uri() . '/assets/citrus.js', array(), null, 'true' );

}
add_action('wp_enqueue_scripts', 'citrus_scripts_styles');

function citrus_widgets_init() {    
    register_sidebar(array(
        'name'          => __( 'Footer', 'citrus' ),
        'id'            => 'footer',
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