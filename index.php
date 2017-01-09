 <?php get_header(); ?>

<!-- Start the Loop. -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <!-- Test if the current post is in category 3. -->
  <!-- If it is, the div box is given the CSS class "post-cat-three". -->
  <!-- Otherwise, the div box is given the CSS class "post". -->

  <?php if ( in_category( '3' ) ) : ?>
    <div class="post-cat-three">
    <?php else : ?>
      <div class="post">
      <?php endif; ?>
      <!-- Display the Title as a link to the Post's permalink. -->
      <div class="title-wrapper">
      <h2 class="title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title();?></a></h2>
      </div>

      <!-- Display the Post's content in a div box. -->

      <div class="header-image gradient">

        <?php // check if the post has a Post Thumbnail assigned to it. If not, add bg-picture of landing page.
        $dir = get_bloginfo('template_directory');
        $file = '/img/p_th_hochschulstandort_stadtansicht.jpg" ';
        if ( has_post_thumbnail() ) {
          echo '<img class="featured-image" src="'. get_the_post_thumbnail_url() . '" alt="">';
        }
        else {
          echo '<img class="featured-image" src="'. $dir . $file . 'alt="">';
        } ?>
      </div>

      <div class="content-wrapper">
        <div class="content">
          <?php the_content(); ?>
        </div>
      </div>

      <!-- Display a comma separated list of the Post's Categories. -->

      <p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' );?> on <?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></p>
    </div> <!-- closes the first div box -->


    <!-- Stop The Loop (but note the "else:" - see next line). -->

  <?php endwhile; else : ?>


    <!-- The very first "if" tested to see if there were any Posts to -->
    <!-- display.  This "else" part tells what do if there weren't any. -->
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>


    <!-- REALLY stop The Loop. -->
  <?php endif; ?>
<?php get_footer(); ?>
