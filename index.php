<?php get_header(); ?>

  <h1>Hallo Welt</h1>
  <p>bla</p>

<?php get_footer(); ?>

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
