<aside class="front-page text-center">
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
     <?php while ( $seminare->have_posts() ) : $seminare->the_post(); ?>
        <a href="<?php the_permalink(); ?>">
          <h2><?php echo get_the_title();  ?></h2>
        </a>

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>
    <div class="navbar">
      <div class="navbar-inner">
    <ul class="list-unstyled Menüzwei pull-right">
      <li><a href="http://localhost:8888/wordpress/wp-content/themes/ohmprofessional/uber.html" alt="Agil-Management"> <strong> Agil-Management </strong></a></li>
      <li><a href="http://localhost:8888/wordpress/wp-content/themes/ohmprofessional/uber.html" alt="Design Thinking"><strong>Design Thinking</strong></a></li>
      <li><a href="http://localhost:8888/wordpress/wp-content/themes/ohmprofessional/uber.html"  alt="Führen Virtueller Teams"><strong>Führen Virtueller Teams</strong></a></li>
      <li><a href="http://localhost:8888/wordpress/wp-content/themes/ohmprofessional/uber.html"  alt="Innovationskommunikation"><strong>Innovationskommunikation</strong></a></li>
      <li><a href="http://localhost:8888/wordpress/wp-content/themes/ohmprofessional/uber.html"  alt="Open Innovation"><strong>Open Innovation</strong></a></li>
    </ul>
    </div>
    </div>

    <div class="row">
    <div class="box">
    <div class="Text">
      <h3> <strong> Breaking News: Lorem </strong> <h3>
        <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem ipsum dolor sit <br> <a class=pull-right href="http://localhost:8888/wordpress/wp-content/themes/ohmprofessional/uber.html"> Weiterlesen </a></p>
    </div>
    </div>
    </div>

    <div class="row">
    <div class="box">
    <div class="Text">
      <h3> <strong> Breaking News: Lorem </strong> <h3>
        <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem ipsum dolor sit <br> <a class=pull-right href="http://localhost:8888/wordpress/wp-content/themes/ohmprofessional/uber.html"> Weiterlesen </a></p>
    </div>
    </div>
    </div>

    <div class="row">
    <div class="box">
    <div class="Text">
      <h3> <strong> Breaking News: Lorem </strong> <h3>
        <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem ipsum dolor sit <br> <a class=pull-right href="http://localhost:8888/wordpress/wp-content/themes/ohmprofessional/uber.html"> Weiterlesen </a></p>
    </div>
    </div>
    </div>

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
      <a href="<?php the_permalink(); ?>">
       <h3><?php echo get_the_title();  ?></h3>
       </a>

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
