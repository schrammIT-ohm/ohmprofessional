<?php
  // Achtung: der hier dargestellte Text wurde von PC-Games geklaut -- bitte unbedingt ändern!

?>
<?php get_header(); ?>
  <div class="fullscreen-wrapper">
      <header class="row header">
          <div class="col-xs-3">
            <?php
              // --- Logo
              // if site-icons is defined: Use the uploaded site icon (Admin->Customizer->Website Infos ->Website Icon)
              // otherwise use default Logo from ../img/...
              $logoUrl = has_site_icon() ? get_site_icon_url() : get_bloginfo('template_directory') . '/img/ohm-logo.png';
            ?>
            <img class="img-responsive" src="<?php echo $logoUrl; ?>" alt="Logo - <?php echo get_bloginfo('name'); ?>">
          </div>
          <div class="col-xs-9">
            <ul class="list-inline pull-right social-list">
              <li><a href="https://www.facebook.com" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/img/facebook.svg" alt="" /></a></li>
              <li><a href="https://www.xing.com" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/img/xing.svg" /></a></li>
              <li><a href="https://www.linkedin.com" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/img/linkedin.svg" /></a></li>
            </ul>
          </div>
      </header>
      <main>
      	<div class="text-center"> 
      		<h1>404 Fehler</h1>
      		<h2>Es ist nicht Deine Schuld.</h2>
      		<h2>Es ist das Internet.</h2>
      		<p>Die aufgerufene Seite konnte leider nicht gefunden werden.</p>
      		<a class="text-center" href="<?php echo get_bloginfo('template_directory');?>/">
      			<button class="btn-uber">
      				Zurück zur Homepage
      			</button>
      		</a>
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
  <!-- /FullScreen Wrapper: content + aside -->

  <!-- FullScreen Image: image + gradient -->
  <div class="bgimage-container gradient">
    <img src="<?php echo get_bloginfo('template_directory');?>/img/p_th_hochschulstandort_stadtansicht.jpg" alt="..">
  </div>
  <!-- /FullScreen Image: image + gradient -->

<?php get_footer(); ?>