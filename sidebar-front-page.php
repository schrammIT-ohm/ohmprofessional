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
     <h2></h2>
     <?php while ( $seminare->have_posts() ) : $seminare->the_post(); ?>
        <a href="<?php the_permalink(); ?>">
          <h3><?php echo get_the_title();  ?></h3>
        </a>

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>

<div class="navbar">
  <div class="navbar-inner">
<ul class="list-unstyled Menüzwei pull-right">
  <li><a href="404.php" target="blank" alt="Agil-Management">Agil-Management</a></li>
  <li><a href="404.php" target="blank" alt="Design Thinking">Design Thinking</a></li>
  <li><a href="404.php" target="blank" alt="Führen Virtueller Teams">Führen Virtueller Teams</a></li>
  <li><a href="404.php" target="blank" alt="Innovationskommunikation">Innovationskommunikation</a></li>
  <li><a href="404.php" target="blank" alt="Open Innovation">Open Innovation</a></li>
</ul>
</div>
</div>

<div class="row">
<div class="box">
<div class="Text">
  <h3> Breaking News: Lorem <h3>
    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem ipsum dolor sit <br> <a class=pull-right href="404.php"> Weiterlesen </a></p>
</div>
</div>
</div>

<div class="row">
<div class="box">
<div class="Text">
  <h3> Breaking News: Lorem <h3>
    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem ipsum dolor sit <br> <a class=pull-right href="404.php"> Weiterlesen </a></p>
</div>
</div>
</div>

<div class="row">
<div class="box">
<div class="Text">
  <h3> Breaking News: Lorem <h3>
    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem ipsum dolor sit <br> <a class=pull-right href="404.php"> Weiterlesen </a></p>
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
    <h2>Agil Management</h2>
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
