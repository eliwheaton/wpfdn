<?php get_header(); ?>

    <!-- Row for main content area -->
    <div id="content" class="row">

        <div id="main" class="large-8 columns" role="main">
            <div class="post-box">

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'content', 'page' ); ?>

                    <?php
                        /**
                         * Seriously I never used comments on a page, what for?
                         */
                        //comments_template( '', true );
                    ?>

                <?php endwhile; // end of the loop. ?>

            </div>
        </div><!-- /#main -->

        <aside id="sidebar" class="large-4 columns" role="complementary">
            <div class="sidebar-box">
                <?php get_sidebar(); ?>
            </div>
        </aside><!-- /#sidebar -->

    </div><!-- End Content row -->

<?php get_footer(); ?>
