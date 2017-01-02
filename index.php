<?php get_header(); ?>
<?php
get_header();
if (have_posts()) :
   while (have_posts()) :
      the_post();
         the_content();
   endwhile;
endif;
get_sidebar();
get_footer();
?>
<?php get_footer(); ?>
