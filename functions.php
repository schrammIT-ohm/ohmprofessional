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
        'primary' => __('Primary Menu', 'befootec_v4'),
        'social' => __('Social Links Menu', 'befootec_v4'),
    ));

    // -- enable support for post formats (https://codex.wordpress.org/Post_Formats)
    add_theme_support('post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ));
  }

  
  add_action('after_setup_theme', 'ohmprof_theme_setup');
}
