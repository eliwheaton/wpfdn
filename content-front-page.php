
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
    </header>
    <div class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'wpfdn' ) . '</span>', 'after' => '</div>' ) ); ?>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->