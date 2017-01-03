<?php
/**
 * The template for displaying 404 pages (Not Found).
**/

get_header(); ?>
<div id="bg">
     <img src="<?php echo get_bloginfo('template_directory'); ?> \img\Free-Chalkboard-Backgrounds.jpg" alt="background">
</div>
<header class="entry-header">
<center>
<h1 class="entry-title">404 - Not found</h1>
</center>
</header>

<article id="post-0" class="post error404 no-results not-found">
<div class="entry-content">
<p><big>404 - Die Seite konnte nicht gefunden werden.</big></p>
            <?php get_search_form(); ?>
            
          <!--   <img class="img-responsive" src="<?php echo $logoUrl; ?>" alt="Logo - <?php echo get_bloginfo('name'); ?>">  -->
          <center><img src="<?php echo get_bloginfo('template_directory'); ?> \img\internet-error-404-file-not-found.jpg" alt="404 not-found"  />
          </center>
        </div>
<!-- .entry-content -->
    </article>
<!-- #post-0 -->
<footer>


   <ul class="list-inline Impressum">
     <li> <a href="https://www.th-nuernberg.de/seitenbaum/impressum/page.html" target="blank">
       <alt=>Impressum</a> </li>
       <li> |
       </li>
     <li> <a href="https://www.th-nuernberg.de/institutionen/hochschulkommunikation/ohm-shop/agb/page.html" target="blank">
       <alt=>AGB</a> </li>
       <li> |
       </li>
     <li> <a href="https://www.th-nuernberg.de/institutionen/language-center/ueber-uns/page.html" target="blank">
       <alt=>Über uns</a> </li>
   </ul>


</footer>

<?php get_footer(); ?>
