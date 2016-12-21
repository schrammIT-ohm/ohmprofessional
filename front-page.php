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
              $logoUrl = has_site_icon() ? get_site_icon_url() : get_bloginfo('template_directory') . '/img/TH_Nuernberg_logo.jpg';
            ?>
            <img class="img-responsive" src="<?php echo $logoUrl; ?>" alt="Logo - <?php echo get_bloginfo('name'); ?>">
          </div>
          <div class="col-sm-10">
            <!-- Problemstellung: Links zu den social-icon, Vergrößerung, Verkleinerung. Pfade!!! Sie müssen mit \beginnen(!) -->
             <ul class="list-inline pull-right social-icons">
             <li> <a href="https://www.facebook.com" target="blank">
               <img src="<?php echo get_bloginfo('template_directory'); ?> \img\ico\facebook.ico" alt="facebook-icon"  />
             </a> </li>
             <li><a href="https://www.twitter.com" target="blank">
               <img src="<?php echo get_bloginfo('template_directory'); ?> \img\ico\twitter.ico" alt="twitter-icon" />
             </a></li>
             <li><a href="https://www.xing.com" target="blank">
               <img src="<?php echo get_bloginfo('template_directory'); ?> \img\xing.png" alt="xing-icon"/>
             </a></li>
             <li><a href="https://www.linkedin.com" target="blank">
               <img src="<?php echo get_bloginfo('template_directory'); ?> \img\ico\linkedin.ico" alt="linkedin-icon" />
             </a></li>
           </ul>
             <!-- Problemstellung: Impressum ect... -->
          <div class="impressum">
           <ul class="list-inline">
             <li> <a href="https://www.th-nuernberg.de/seitenbaum/impressum/page.html" target="blank">
               <alt=>Impressum</a> </li>
             <li> <a href="https://www.th-nuernberg.de/institutionen/hochschulkommunikation/ohm-shop/agb/page.html" target="blank">
               <alt=>AGB</a> </li>
             <li> <a href="https://www.th-nuernberg.de/institutionen/language-center/ueber-uns/page.html" target="blank">
               <alt=>Über uns</a> </li>
           </ul>
          </div>
        </div>
      </header>
      <main>
        <h1><?php echo get_bloginfo('name'); ?></h1>
        <h2><?php echo get_bloginfo('description'); ?></h2>
      </main>
      <footer></footer>
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
