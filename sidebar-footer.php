<?php
    if (!is_active_sidebar('sidebar-footer-1') && !is_active_sidebar('sidebar-footer-2') && !is_active_sidebar('sidebar-footer-3'))
        return;
?>

<div class="row">
    <div class="large-12 columns">
        <hr />
    </div>

    <?php if ( is_active_sidebar( 'sidebar-footer-1' ) ) : ?>
    <div class="widget-area <?php echo wpfdn_footer_sidebar_columns(); ?>">
        <?php dynamic_sidebar( 'sidebar-footer-1' ); ?>
    </div>
    <?php endif; ?>

    <?php if ( is_active_sidebar( 'sidebar-footer-2' ) ) : ?>
    <div class="widget-area <?php echo $required_c = (wpfdn_footer_sidebar_columns() == 'large-8 columns' ? 'large-4 columns' : wpfdn_footer_sidebar_columns()); ?>">
        <?php dynamic_sidebar( 'sidebar-footer-2' ); ?>
    </div>
    <?php endif; ?>

    <?php if ( is_active_sidebar( 'sidebar-footer-3' ) ) : ?>
    <div class="widget-area <?php echo $required_c = (wpfdn_footer_sidebar_columns() == 'large-4 columns reverse' ? 'large-8 columns' : wpfdn_footer_sidebar_columns()); ?>">
        <?php dynamic_sidebar( 'sidebar-footer-3' ); ?>
    </div>
    <?php endif; ?>
</div>