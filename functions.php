<?php

if (!function_exists('ohmprof_theme_setup')) {
  function ohmprof_theme_setup() {

    // -- Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // -- Add Title Support
    add_theme_support('title-tag');

    // -- Add Post Thumbnails
    add_theme_support('post-thumbnails');

    //add_image_size( 'teaser-big', 753, 598, array('center', 'center')); // crop top left
    //add_image_size( 'teaser-small', 541, 283, array('center', 'center'));// crop
    //add_image_size( 'post-top', 1570, false); //  Post Detail top Image (just scale to max witdh)
    //add_image_size( 'lightbox', 1000, false); //

    // -- Add Menu Support
    add_theme_support('menus');

    // -- This theme uses wp_nav_menu() in two locations.
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'ohmprofessional'),
        'secondary' => __('Secondary Menu', 'ohmprofessional'),
    ));

    // -- enable support for post formats (https://codex.wordpress.org/Post_Formats)
    add_theme_support('post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ));
  }

  add_action('after_setup_theme', 'ohmprof_theme_setup');
}


function ohmprofessional_scripts() {

  $template_url = get_template_directory_uri();

  if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

      // ------------------------
      // --- CSS

      // --- bootstrap
      wp_register_style('boostrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all');
      wp_enqueue_style('boostrap'); // Enqueue it!

      // --- basic theme style
      wp_enqueue_style('ohmprofessional-style', get_stylesheet_uri());


      // ------------------------
      // --- JS

      // - Jquery (footer but always first)
      wp_deregister_script('jquery'); // deregister jquery, otherwise it will be loaded from wordpress-core (including jquery-migrate)
      wp_register_script('jquery', $template_url.'/js/jquery-3.1.1.min.js', array(), '3.1.1', true);
      wp_enqueue_script('jquery'); // Enqueue it!

      wp_register_script('bootstrap', $template_url.'/js/bootstrap.min.js', array(), '3.3.7', true);
      wp_enqueue_script('bootstrap'); // Enqueue it!

  }
}
add_action('wp_enqueue_scripts', 'ohmprofessional_scripts');
