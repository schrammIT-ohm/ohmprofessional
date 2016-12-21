 <?php get_header(); ?>
 <?php
if ( have_posts() ) {
 while ( have_posts() ) {
   the_post();
   //
   // Post Content here
   //
 } // end while
} // end if
?>
  <h1>Hallo Welt</h1>
  <p>Blubdiblub</p>

<?php get_footer(); ?>
