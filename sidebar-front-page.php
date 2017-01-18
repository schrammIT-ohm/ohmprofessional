<aside class="front-page">

    <?php
    // =======================================================================//
    // ! Suche
    // =======================================================================//
    get_search_form();
    ?>
        <div class="aside-Liste">
            <h4 style="margin-bottom: 30px; margin-top: 20px"><a href="http://ohm-professional-school.de/home/" target="_blank"><font color="white">Agil Management</font></h4>
            <h4 style="margin-bottom: 30px"><a href="http://ohm-professional-school.de/home/" target="_blank"><font color="white">Design Thinking</font></h4>
            <h4 style="margin-bottom: 30px"><a href="http://ohm-professional-school.de/home/" target="_blank"><font color="white">Führen Virtueller Teams</font></h4>
            <h4 style="margin-bottom: 30px"><a href="http://ohm-professional-school.de/home/" target="_blank"><font color="white">Innovationskommunikation</font></h4>
            <h4 style="margin-bottom: 15px"><a href="http://ohm-professional-school.de/home/" target="_blank"><font color="white">Open Innovation</font></h4>
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
                        </div>
                    </a>
                    <a class="post-wrapper-a" href="<?php the_permalink(); ?>">

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
