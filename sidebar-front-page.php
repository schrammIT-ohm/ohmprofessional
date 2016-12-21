<aside class="front-page">
     <div style="text-indent:10px;">
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
     <h3><u>Seminare</u></h3>
     <?php while ( $seminare->have_posts() ) : $seminare->the_post(); ?>
        <a href="<?php the_permalink(); ?>">
          <p><i class="fa fa-graduation-cap" aria-hidden="true"></i>
            <?php echo get_the_title();  ?></p>
        </a>

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
    <h3><u>Blog Meldungen</u></h3>
    <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
       <a href="<?php the_permalink(); ?>">
         <p><?php echo get_the_title();  ?></p>
       </a>

     <?php endwhile; ?>
     <?php wp_reset_postdata(); ?>
  <?php endif; ?>

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
