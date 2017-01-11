<?php
/*
 * See: https://codex.wordpress.org/Theme_Development#Template_Files
 * - "index.php" is a fallback template only, in case no appropriate template was found
 * - "front-page.php" is used for the landing-page
 * - "home.php" is used for the blog (a listing of recent posts)
 */

?>
<script src="https://use.fontawesome.com/bcdb174f50.js"></script>
<?php get_header(); ?>
  <!-- FullScreen Wrapper: content + aside -->
  <div class="fullscreen-wrapper"> <!--äußerer Kontainer: besteht aus zwei Bereichen: Hautseite und Sidebar -->
    <div class="home-content"> <!--erster Bereich: Die Hauptseite -->
      <header>
        <div class="row">
          <div class="col-sm-2"> <!--Hier liegt das Logo, das links oben auf der Seite erscheint -->
            <?php
              // --- Logo
              // if site-icons is defined: Use the uploaded site icon (Admin->Customizer->Website Infos ->Website Icon)
              // otherwise use default Logo from ../img/...
              $logoUrl = has_site_icon() ? get_site_icon_url() : get_bloginfo('template_directory') . '/img/ohm-logo.png';
            ?>
            <a href="front-page.php">
            <img class="img-responsive" src="<?php echo $logoUrl; ?>" alt="Logo - <?php echo get_bloginfo('name'); ?>">
          </a>
          </div>
          <div class="col-sm-10"><!--hier müssen die social-links rein! Liste mit drei Listenelementen, die nebeneinander liegen -->
            <!--ul -> 1.li -> 2.li->3.li und danach geht die ul wieder zu-->
           <ul class="list-inline pull-right social-icons">
             <li> <a href="https://www.facebook.com" target="blank">
               <img src="<?php echo get_bloginfo('template_directory');?> \img\online_social_media_facebook-128.png" alt="facebook-icon"  />
             </a> </li>
             <li><a href="https://www.twitter.com" target="blank">
               <img src="<?php echo get_bloginfo('template_directory'); ?> \img\1481745744_twitter_online_social_media.png" alt="twitter-icon" />
             </a></li>
             <li><a href="https://www.xing.com" target="blank">
               <img src="<?php echo get_bloginfo('template_directory'); ?> \img\social_media_logo_xing-128.png" alt="xing-icon"/>
             </a></li>
             <li><a href="https://www.linkedin.com" target="blank">
               <img src="<?php echo get_bloginfo('template_directory'); ?> \img\online_social_media_linked_in-128.png" alt="linkedin-icon" />
             </a></li>
           </ul>

          </div>
        </div>
      </header>
      <main>
        <center>
        <h1><?php echo get_bloginfo('name'); ?></h1>
        <h2><?php echo get_bloginfo('description'); ?></h2>
        <a class="ghost-button-semi-transparent" href="more.php">Mehr erfahren</a>
      </center>
      </main>
      <footer>
        <ul class="list-inline pull-left">
          <li><a href="impressum.php">Impressum</a></li>
          <li><a href="datenschutz.php">Datenschutz</a></li>
          <li><a href="agb.php">AGB</a></li>
          <li><a href="kontakt.php">Kontakt</a></li>
        </ul>
      </div>
      </footer>
    <?php // --- Sidebar for FrontPage: https://developer.wordpress.org/reference/functions/get_sidebar/?>
    <?php get_sidebar('front-page'); ?>

  </div>
  <!-- /FullScreen Wrapper: content + aside -->

  <!-- FullScreen Image: image + gradient -->
  <div class="bgimage-container gradient"> <!-- -->
    <img src="<?php echo get_bloginfo('template_directory');?>/img/p_th_hochschulstandort_stadtansicht.jpg" alt="..">
  </div>
  <!-- /FullScreen Image: image + gradient -->

<?php get_footer(); ?>

<!--wenn fertig: add all and commit und anschließend push!-->
