<aside class="front-page">
  <?php
    // =======================================================================//
    // ! Suche
    // =======================================================================//
    get_search_form();
  ?>

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
   <?php if($seminare->have_posts()): ?>
     <h2>Seminare</h2>

        <a href=""><h3>Agil-Management</h3></a>
        <a href=""><h3>Desing Thinking</h3></a>
        <a href=""><h3>Führen Virtueller Teams</h3></a>
        <a href=""><h3>Innovationskommunikation</h3></a>
        <a href=""><h3>Open Innovation</h3></a>
<?php while ( $seminare->have_posts() ) : $seminare->the_post(); ?>

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>


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
    <h2>Blog Meldungen</h2>
    <a href=""><h3>Heute gibt's Noten</h3></a>
    <a href=""><h3>Banholzer ist late</h3></a>
    <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
       

     <?php endwhile; ?>
     <?php wp_reset_postdata(); ?>
  <?php endif; ?>


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
