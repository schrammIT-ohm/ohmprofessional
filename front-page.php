<?php
/*
 * See: https://codex.wordpress.org/Theme_Development#Template_Files
 * - "index.php" is a fallback template only, in case no appropriate template was found
 * - "front-page.php" is used for the landing-page
 * - "home.php" is used for the blog (a listing of recent posts)
 */

?>

<?php get_header(); ?>
  <!-- FullScreen Wrapper: content + aside -->
  <div class="fullscreen-wrapper">
    <div class="home-content">
      <header>
        <div class="row">
          <div class="col-sm-2">
            <?php
              // --- Logo
              // if site-icons is defined: Use the uploaded site icon (Admin->Customizer->Website Infos ->Website Icon)
              // otherwise use default Logo from ../img/...
              $logoUrl = has_site_icon() ? get_site_icon_url() : get_bloginfo('template_directory') . '/img/ohm-logo.png';
            ?>
            <img class="Logo" src="<?php echo $logoUrl; ?>" alt="Logo - <?php echo get_bloginfo('name'); ?>">
          </div>
          <div class="col-sm-10">
          <ul class="list-inline Social-Links pull-right">
            <li><a href="https://www.facebook.com" target="_blank"><img class="facebook"src="<?php echo get_bloginfo('template_directory');?>/img/online_social_media_facebook-128.png" alt="facebook" /></a></li>
            <li><a href="https://twitter.com/" target="_blank"><img class="twitter"src="<?php echo get_bloginfo('template_directory');?>/img/1481745744_twitter_online_social_media.png" alt="twitter" /></a></li>
            <li><a href="https://www.xing.com" target="_blank"><img class="xing"src="<?php echo get_bloginfo('template_directory');?>/img/social_media_logo_xing-128.png" alt="xing" /></a></li>
          </ul>
        </div>
      </header>
      <main class="text-center">
        <h1> <strong>Ohm Professional School</strong></h1>
        <h2>Technische Hochschule Nürnberg</h2>
        <a href="<?php echo get_bloginfo('template_directory');?>/uber.html">
        <div class="über">
       <div class="btn btn-primary">
          <h4> <strong> Über uns </strong> </h4>
      </div>
      </main>
      <footer class="navbar-fixed-bottom footer">
      <div class=nav-inline>
           <ul class="list-inline">
            <li><a href="<?php echo get_bloginfo('template_directory');?>/impressum.html"><h4> Impressum </h4> </a></li>
            <li><a href="<?php echo get_bloginfo('template_directory');?>/datenschutz.html"><h4>Datenschutz</h4></a></li>
            <li><a href="<?php echo get_bloginfo('template_directory');?>/AGB.html"><h4>AGB</h4></a></li>
            <li><a href="<?php echo get_bloginfo('template_directory');?>/kontakt.html"><h4>Kontakt</h4></a></li>
           </ul>
       </footer>
     </div>

    <?php // --- Sidebar for FrontPage: https://developer.wordpress.org/reference/functions/get_sidebar/?>
    <?php get_sidebar('front-page'); ?>

  </div>
  <!-- /FullScreen Wrapper: content + aside -->

  <!-- FullScreen Image: image + gradient -->
  <div class="bgimage-container gradient">
    <img src="<?php echo get_bloginfo('template_directory');?>/img/p_th_hochschulstandort_stadtansicht.jpg" alt="..">
  </div>
  <!-- /FullScreen Image: image + gradient -->

<?php get_footer(); ?>
