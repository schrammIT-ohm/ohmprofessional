<?php get_header(); ?>

  <h1>Hallo Welt</h1>
  <p>Schubidu</p>
  <span> ich bin cool </span>

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

<?php get_footer(); ?>
