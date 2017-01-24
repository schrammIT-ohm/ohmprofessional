
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
        <title>Ohm Professional School</title>

          <div class="row">
             <div class="col-sm-2">
            <?php
              // --- Logo
              // if site-icons is defined: Use the uploaded site icon (Admin->Customizer->Website Infos ->Website Icon)
              // otherwise use default Logo from ../img/...
              $logoUrl = has_site_icon() ? get_site_icon_url() : get_bloginfo('template_directory') . '/img/ohm-logo.png';
            ?>
            <a href="front-page.php">
            <img class="img-responsive" src="<?php echo $logoUrl; ?>" alt="Logo - <?php echo get_bloginfo('name'); ?>">
          </a>
          <!--Social Media Links rechts oben -->
          </div>
          <div class="col-sm-10">
            <ul class="list-inline Social links pull-right">
              <li><a href="https://www.facebook.com" target="_blank">
                <img src="<?php echo get_bloginfo('template_directory');?>\img\online_social_media_facebook-128.png" alt="facebook"/></a></li>
              <li><a href="https://www.twitter.com" target="_blank">
                <img src= <?php echo get_bloginfo('template_directory');?> \img\1481745744_twitter_online_social_media.png" alt="twitter"/></a></li>
              <li><a href="https://www.xing.com" target="_blank">
                <img src="<?php echo get_bloginfo('template_directory');?> \img\social_media_logo_xing-128.png" alt="xing"/></a></li>
              <li><a href="https://www.linkedin.com" target="_blank">
                <img src="<?php echo get_bloginfo('template_directory');?> \img\online_social_media_linked_in-128.png" alt="linkedin"/></a></li>
            </ul>
          </div>

          <ul class="navbar-fixed-top pull-left list-inline">
    <li><a href="404.php" target="_blank" alt="InformationenzumStudiumprogramm">Informationen zum Studienprogramm</a></li>
    <li><a href="404.php" target="_blank" alt="Termine">Termine</a></li>
    <li><a href="404.php" target="_blank" alt="Ansprechpartner">Ansprechpartner</a></li>
    <li><a href="404.php" target="_blank" alt="Module">Module</a></li>
</ul>
</div>

</div>

      </header>
      <main>
         <center>

        <h1>Ohm Professional School</h1>
        <h2>Technische Hochschule Nürnberg</h2>
        <a class="ghost-button-semi-transparent" href="more.php">Mehr erfahren</a>
          </center>
          <br>
        <div class="visible-xs" id="menue18">
          <ul>
          <li class="level1"><u>Social Media</u>
            <ul>
               <li class="level2"><a href="https://www.facebook.com">Facebook</a></li>
               <li class="level2"><a href="https://www.twitter.com">Twitter</a></li>
               <li class="level2"><a href="https://www.xing.com">Xing</a></li>
               <li class="level2"><a href="https://www.linkedin.com">Linkedin</a></li>
             </ul>
           </li>
         </ul>
       </div>
      </a>



    <?php // --- Sidebar for FrontPage: https://developer.wordpress.org/reference/functions/get_sidebar/?>
    <?php get_sidebar('front-page'); ?>

    <div class="seminar-wrapper">
      <a href="<?php the_permalink(); ?>">
        <h3 class="seminar"> <?php echo get_the_title(Seminar);  ?></h3>
      </a>
      <ul class="navbar-fixed-middel-left list-inline">
    </div>


  <!-- /FullScreen Wrapper: content + aside -->

  <!-- FullScreen Image: image + gradient -->
  <div class="bgimage-container gradient">
    <img src="<?php echo get_bloginfo('template_directory');?>/img/p_th_hochschulstandort_stadtansicht.jpg" alt="..">
  </div>
  <!-- /FullScreen Image: image + gradient -->

<?php get_footer(); ?>

</main>
 <footer>
   <div>
      <ul class="navbar-fixed-bottom pull-left list-inline">
    <li><a href="impressum.php">Impressum</a></li>
    <li><a href="datenschutz.php">Datenschutz</a></li>
    <li><a href="agb.php">AGB</a></li>
    <li><a href="kontakt.php">Kontakt</a></li>
 </ul>
</div>
</footer>
