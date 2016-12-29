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
     <?php while ( $seminare->have_posts() ) : $seminare->the_post(); ?>
        <a href="<?php the_permalink(); ?>">
          <h3><?php echo get_the_title();  ?></h3>
        </a>

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>

    <div class="navbar">
    <div class="navbar-inner">
      <ul class="list-unstyled Ueberschriften text-center">
            <li><a href="404.php" target="_blank">Agil Management</a></li>
            <li><a href="404.php" target="_blank">Design Thinking</a></li>
            <li><a href="404.php" target="_blank">Führen virtueller Teams</a></li>
            <li><a href="404.php" target="_blank">Innovationskommunikation</a></li>
            <li><a href="404.php" target="_blank">Open Innovation</a></li>
      </ul>
    </div>
    </div>

    <div class="Kasten2">
    <div class="Gestaltung">
<div class="text">
  <h4><b>Breaking News: Alle TJ-Studenten bestehen E-Technik</b></h4>
  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et<br><a class="pull-right" href="404.php" target="blank"> weiterlesen </a></p>
</div>
</div>
</div>

<div class="Kasten2">
<div class="Gestaltung">
<div class="text">
<h4><b>Breaking News: Banholzer streicht respektive aus seinem Wortschatz</b></h4>
<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et<br><a class="pull-right" href="404.php" target="blank"> weiterlesen </a></p>
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
