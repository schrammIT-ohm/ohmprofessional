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
      'posts_per_page' => 5
    );
    $seminare = new WP_Query( $args );

   ?>
   <?php if($seminare->have_posts()): ?>
     <strong>
      <h2>SEMINARE</h2>
    </strong>
     <?php while ( $seminare->have_posts() ) : $seminare->the_post(); ?>
        <a href="<?php the_permalink(); ?>">
          <h3><?php echo get_the_title();  ?></h3>
        </a>

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>




  <?php
    // =======================================================================//
    // ! Posts
    // =======================================================================//

    // -- Get last 3 Posts
    $posts_per_page = 1;
    $args = array(
      'posts_per_page' => $posts_per_page
    );
    $posts = new WP_Query( $args );

  ?>

  <?php if($posts->have_posts()): ?>

    <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
       <a href="<?php the_permalink(); ?>">
         <div class="panel panel-default" >
           <div class="panel-heading"><h3><?php echo get_the_title();  ?></h3></div>
           <div class="panel-body text-muted"><?php echo get_the_excerpt();  ?></div>
         </div>
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
