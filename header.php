<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <?php
          if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
          {
              header('X-UA-Compatible: IE=edge,chrome=1');
          }
      ?>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <link href="//fonts.googleapis.com" rel="dns-prefetch" >
      <link rel="profile" href="http://gmpg.org/xfn/11">
      <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

      <?php
      function custom_scripts_method() {
          wp_register_style( 'custom-style', get_stylesheet_directory_uri() . '/css/custom-style.css', array(), '1', 'all' );
          wp_register_style( 'second-custom-style', get_stylesheet_directory_uri() . '/css/second-custom-style.css', array(), '1', 'all' );

          wp_register_script('custom-script', get_template_directory_uri().'/js/custom-script.js', array('jquery'), '', TRUE);
          wp_register_script('second-custom-script', get_template_directory_uri().'/js/second-custom-script.js', array('jquery'), '', TRUE);

          if ( is_page('1')) {
              wp_enqueue_style('custom-style');
              wp_enqueue_script('custom-script');
              echo "It works!";
          }
      }

      add_action( 'wp_enqueue_scripts', 'custom_scripts_method' );
      ?>

      <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
