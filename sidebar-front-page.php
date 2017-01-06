<aside class="front-page">
  <?php
    // =======================================================================//
    // ! Suche
    // =======================================================================//
    get_search_form();
  ?>

     <!-- Sidebar -->
     <div id="sidebar-wrapper">
         <nav id="spy">
             <ul class="sidebar-nav nav">
                 <li class="sidebar-brand">
                     <a href="#Agil Management"><span class="fa fa-home solo">Agil Management</span></a>
                 </li>
                 <li>
                     <a href="#Design Management">
                         <span class="fa fa-anchor solo">Design Management</span>
                     </a>
                 </li>
                 <li>
                     <a href="#Führen virtueller Teams">
                         <span class="fa fa-anchor solo">Führen virtueller Teams</span>
                     </a>
                 </li>
                 <li>
                     <a href="#Innovationskommunikation">
                         <span class="fa fa-anchor solo">Innovationskommunikation</span>
                     </a>
                 </li>
                 <li>
                     <a href="#Open Innovation">
                         <span class="fa fa-anchor solo">Open Innovation</span>
                     </a>
                 </li>
             </ul>
         </nav>
     </div>



     <!-- Page content -->
     <div id="page-content-wrapper">
         <div class="page-content">
             <div class="container-fluid">
                 <div class="row">
                     <div class="col-md-6">
                         <div class="panel panel-danger">
                             <div class="panel-heading">
                                     Post 1
                             </div>
                             <div class="panel-body">
                                 content body
                             </div>
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="panel panel-success">
                             <div class="panel-heading">
                                     Post 2
                             </div>
                             <div class="panel-body">
                                 content body
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
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
    <h2>Blog Meldungen</h2>
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
