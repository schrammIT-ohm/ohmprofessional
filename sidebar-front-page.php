<aside class="front-page">
  <!-- Suche -->
  <?php get_search_form(); ?>
  <!-- /Suche -->

  <?php
    // =======================================================================//
    // ! Seminare
    // =======================================================================//

    // get all (-1) custom post types "seminare"
    $args = array(
      'post_type' => 'seminare',
      'posts_per_page' => -1
    );
    $seminare = new WP_Query( $args );

    // -- nothing found, return false;
    if (!have_posts()) {
      return false;
    }
   ?>

   <?php while ( $seminare->have_posts() ) : $seminare->the_post(); ?>
      <a href="<?php the_permalink(); ?>">
        <h2><?php echo get_the_title();  ?></h2>
      </a>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>




  <?php if (is_active_sidebar('sidebar-frontpage')) : ?>
      <!-- Widget-Area -->
      <div id="widget-area" class="widget-area">
          <?php dynamic_sidebar('sidebar-frontPage'); ?>
      </div>
      <!-- /Widget-Area -->
  <?php endif; ?>
</aside>
