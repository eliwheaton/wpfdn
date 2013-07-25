<?php get_header(); ?>

    <?php if (have_posts()) : ?>
        <div class="row pad-top">
            <?php $count = 0; ?>
            <?php while (have_posts() ) : the_post(); $count++ ?>
                <div class="large-4 columns">
                    <a href="<?php the_permalink(); ?>">
                    <div class="portfolio-item">
                        <img src="http://placehold.it/320x200" />
                        <h4><?php the_title(); ?></h4>
                    </div>
                    </a>
                </div>
                <?php if ($count % 3 == 0) : ?>
                    </div>
                    <div class="row">
                <?php endif; ?>            
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

<?php get_footer(); ?>