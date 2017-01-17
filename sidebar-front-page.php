<aside class="front-page">

  <?php
    // =======================================================================//
    // ! Suche
    // =======================================================================//
    get_search_form();
  ?>
  <div class="wrapper-wrapper">
  <div class="seminar-wrapper-outer">
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

   ?>
  <div class="seminar-wrapper">
        <a href="<?php the_permalink(); ?>">
          <h3 class="seminar"></h3>
        </a>
          <h3>Agil-Management</h3>
          <h3>Design Thinking</h3>
          <h3>Führen Virtueller Teams</h3>
          <h3>Innovationskommunikation</h3>
          <h3>Open Invation</h3>

      </div>
  </div>

<div class="post-bottom">
  <?php
    // =======================================================================//
    // ! Posts
    // =======================================================================//

    // -- Get last 3 Posts
    $posts_per_page = 3;
    $args = array(
      'posts_per_page' => $posts_per_page
    );
    $posts = new WP_Query( $args );

  ?>
  <?php if($posts->have_posts()): ?>
    <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
       <a class="post-wrapper-a" href="<?php the_permalink(); ?>">
         <div class="post-wrapper">
           <h3><?php echo get_the_title();  ?></h3>
           <p><?php the_excerpt(); ?></p>
         <!-- needs to change excerpt length to 20 in wp-includes/formatting.php -->
        </div>
       </a>

     <?php endwhile; ?>
     <?php wp_reset_postdata(); ?>
  <?php endif; ?>
  </div>
  </div>

  <?php
      // =======================================================================//
      // ! Widget Area
      // =======================================================================//
  ?>
  <?php if (is_active_sidebar('sidebar-frontpage')) : ?>
      <!-- Widget-Area -->
      <div id="widget-area" class="widget-area">
          <?php dynamic_sidebar('sidebar-frontPage'); ?>
      </div>
      <!-- /Widget-Area -->
  <?php endif; ?>
</aside>
