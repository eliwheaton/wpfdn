<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php remove_filter('the_content', 'wpautop'); ?>
    <?php while (have_posts() ) : the_post(); ?>
        <div class="row pad-top">
            <div class="large-6 columns">
                <h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>
            </div>
            <div class="large-6 columns">
                <img src="http://placehold.it/500x400" />
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>