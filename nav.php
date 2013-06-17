<div class="contain-to-grid fixed">
<nav class="top-bar">
    <ul class="title-area">
        <li class="name">
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">EliWheaton.com</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>
    <section class="top-bar-section">
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'primary',
            'depth' => 0,
            'items_wrap' => '<ul class="right">%3$s</ul>',
            'container' => '',
            'walker' => new WPFDN_foundation_Walker(
                array(
                    'in_top_bar' => true,
                    'item_type' => 'li'
                )
            ),
        )
    );
    ?>
    </section>
</nav>
</div>