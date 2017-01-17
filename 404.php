<?php
  // Achtung: der hier dargestellte Text wurde von PC-Games geklaut -- bitte unbedingt ändern!

?>
<?php get_header(); ?>
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
<div class="col-sm-8">
<img src="<?php echo get_bloginfo('template_directory');?>/img/soft-404.jpg" alt="404" class="center-block">
</div>
</header>

<main>
<h1 align="middle">Seite nicht gefunden</h1>
<A HREF="javascript:javascript:history.go(-1)"><p align="middle"><br>Hier klicken um zur Homepage zurückzukehren</p></A>

<div class="container">
  <div class="row">
    <div class="col-sm-2" style="padding-right:20px; border-right: 1px solid #ccc;">
    <p>Über</p>
    <p>Kontakt</p>
    <p>Homepage</p>
    <p>Impressum</p>
  </div>


    <div class="col-sm-3">
<?php
  // =======================================================================//
  // ! Suche
  // =======================================================================//
  get_search_form();
?>
</div>


  <div class="col-sm-3" style="padding-left:80px; border-left: 1px solid #ccc;">
  <p>Links</p>
  <a href="http://www.th-nuernberg.de">www.th-nuernberg.de</a>
  <br>
  <a href="http://www.ohm-professional.de">ohm-professional.de</a>
<p><br><br></p>

</div>
</div>
</div>
</main>
<?php get_footer(); ?>
