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

      <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
