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

  <h1>blub</h1>
  <p>blblbl</p>
  <p>zweite änderung</p>
  <p>dritte änderunggit</p>

<?php get_footer(); ?>
