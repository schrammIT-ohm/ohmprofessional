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
            <img class="img-responsive" src="<?php echo $logoUrl; ?>" alt="Logo - <?php echo get_bloginfo('name'); ?>">
          </div>
          <div class="col-sm-10">
            <ul class="list-inline pull-right social-icons">
                  <li><a href="https://www.facebook.com" target="_blank"><img src="<?php echo get_bloginfo('template_directory')?>/img/online_social_media_facebook-128.png"alt=""/></a></li>
                  <li><a href="https://www.xing.com" target="_blank"><img src="<?php echo get_bloginfo('template_directory')?>/img/social_media_logo_xing-128.png"alt=""/></a></li>
                  <li><a href="https://twitter.com" target="_blank"><img src="<?php echo get_bloginfo('template_directory')?>/img/1481745744_twitter_online_social_media.png"alt=""/></a></li>
            </ul>
          </div>
        </div>
      </header>
      <main>
        <h1><?php echo get_bloginfo('name'); ?></h1>
        <h2><?php echo get_bloginfo('description'); ?></h2>
      </main>
      <footer class="navbar-fixed-bottom">
          <div class=nav-inline>
          <ul class="list-inline">
            <li>Impressum</li>
            <li>Datenschutz</li>
            <li>AGB</li>
            <li>Kontakt</li>
          </ul>
      </div>
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
