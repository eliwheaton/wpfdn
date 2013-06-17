<?php if ( is_active_sidebar( 'sidebar-main' ) ) : ?>
    <div id="secondary" class="widget-area" role="complementary">
        <?php dynamic_sidebar( 'sidebar-main' ); ?>
    </div><!-- #secondary -->
<?php endif; ?>