
<?php get_header(); ?>
<header>
  <div class="col-sm-2">
    <?php
      $logoUrl = has_site_icon() ? get_site_icon_url() : get_bloginfo('template_directory') . '/img/ohm-logo.png';
    ?>
    <a href="<?php echo get_bloginfo('template_directory');?>" alt="Startseite"><img class="img-responsive" src="<?php echo $logoUrl; ?>" alt="Logo - <?php echo get_bloginfo('name'); ?>"></a>
  </div>
</header>
<main>
<div class="col-sm-8 pic">
<img src="<?php echo get_bloginfo('template_directory');?>/img/404fehler_error.jpg.png" alt="Error 404">
<h1>Die gewünschte Seite konnte nicht gefunden werden.</h1>
<p>Klicken Sie <a href="<?php echo get_bloginfo('template_directory');?>">hier</a>, um zur Startseite zurückzukehren, oder benutzen Sie die Suche.</p>
<?php
  // =======================================================================//
  // ! Suche
  // =======================================================================//
  get_search_form();
?>
    <ul class="list-inline foot">
      <li><a href="<?php echo get_bloginfo('template_directory');?>/impressum.html">Impressum</a></li>
      <li><a href="<?php echo get_bloginfo('template_directory');?>/datenschutz.html">Datenschutz</a></li>
      <li><a href="<?php echo get_bloginfo('template_directory');?>/agb.html">AGB</a></li>
      <li><a href="<?php echo get_bloginfo('template_directory');?>/kontakt.html">Kontakt</a></li>
    </ul>
</div>
</main>
<?php get_footer(); ?>
