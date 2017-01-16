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
      <header class="row header">
          <div class="col-sm-2">
            <?php
              // --- Logo
              // if site-icons is defined: Use the uploaded site icon (Admin->Customizer->Website Infos ->Website Icon)
              // otherwise use default Logo from ../img/...
              $logoUrl = has_site_icon() ? get_site_icon_url() : get_bloginfo('template_directory') . '/img/ohm-logo.png';
            ?>
            <img class="img-responsive" src="<?php echo $logoUrl; ?>" alt="Logo - <?php echo get_bloginfo('name'); ?>">
          </div>
      </header>
      <main>
        <div>
      <h1 style="color:blue">Das sollte die Suche sein.</h1>
        <h2 style="color:lightblue">Ist aber jetzt Super Mario..</h2>
      <object width="500" height="300">
        <param name="movie" value="http://www.myspiele.net/content/games/marios-abenteuer-2.swf"><param name="quality" value="high">
        <embed src="http://www.myspiele.net/content/games/marios-abenteuer-2.swf" quality="high" width="500" height="400" type="application/x-shockwave-flash" pluginspage= "http://www.macromedia.com/go/getflashplayer"></embed></object>
        <a href="http://www.myspiele.net" target="_blank"><img src="http://www.myspiele.net/templates/spiele/images/spiele.png"  border="0" height="90" width="188"></a>
</div>
      </main>
      <footer class="footer">
          <ul class="list-inline navbar">
            <li><a href="<?php echo get_bloginfo('template_directory');?>/impressum.html">Impressum</a></li>
            <li><a href="<?php echo get_bloginfo('template_directory');?>/datenschutz.html">Datenschutz</a></li>
            <li><a href="<?php echo get_bloginfo('template_directory');?>/AGB.html">AGB</a></li>
            <li><a href="<?php echo get_bloginfo('template_directory');?>/kontakt.html">Kontakt</a></li>
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
