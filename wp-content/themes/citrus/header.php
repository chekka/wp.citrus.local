<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?> id="citrus">

  <head>
    <title><?php wp_title(' | ', 'echo', 'right'); bloginfo('name'); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <header class="main-header">
      <div class="header-top">
        <div class="flex space-between align-items-center">
          <nav class="top"><?php wp_nav_menu( array( 'theme_location' => 'top' ) ); ?></nav>
          <nav class="social"><?php wp_nav_menu( array( 'theme_location' => 'social' ) ); ?></nav>
        </div>
      </div>
      <div class="header-main">
        <div class="flex space-between">
          <div class="citrus-logo">
            <a href="<?php echo pll_home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/citrus-logo.svg" width="150" height="53" alt="Citrus staffing logo" /></a>
          </div>
          <nav class="mainmenu"><?php dynamic_sidebar( 'menu-main' ); ?></nav>
        </div>
      </div>
    </header>