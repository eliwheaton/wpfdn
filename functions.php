<?php

function wpfdn_setup() {
    /*
     * Makes WpFdn available for translation.
     *
     * Translations can be added to the /languages/ directory.
     * If you're building a theme based on WpFdn, use a find and replace
     * to change 'wpfdn' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'wpfdn', get_template_directory() . '/languages' );

    // This theme styles the visual editor with editor-style.css to match the theme style.
    add_editor_style();

    // Adds RSS feed links to <head> for posts and comments.
    add_theme_support( 'automatic-feed-links' );

    // This theme supports a variety of post formats.
    add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status' ) );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'wpfdn'),
            'secondary' => __('Secondary Menu', 'wpfdn')
        )
    );

    // This theme uses a custom image size for featured images, displayed on "standard" posts.
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 624, 9999 ); // Unlimited height, soft crop
}
add_action( 'after_setup_theme', 'wpfdn_setup' );

require( get_template_directory() . '/includes/wpfdn-foundation.php' );       // make foundation work in WordPress

function wpfdn_widgets_init() {

    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'wpfdn' ),
        'id' => 'sidebar-main',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Area One', 'wpfdn' ),
        'id' => 'sidebar-footer-1',
        'description' => __( 'An optional widget area for your site footer', 'wpfdn' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Area Two', 'wpfdn' ),
        'id' => 'sidebar-footer-2',
        'description' => __( 'An optional widget area for your site footer', 'wpfdn' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Area Three', 'wpfdn' ),
        'id' => 'sidebar-footer-3',
        'description' => __( 'An optional widget area for your site footer', 'wpfdn' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ) );

}
add_action( 'widgets_init', 'wpfdn_widgets_init' );

function wpfdn_footer_sidebar_columns() {

    // default value
    $required_columns = 'large-4 columns';

    // only the first sidebar is active, go full-width
    if (     is_active_sidebar( 'sidebar-footer-1' )
        && ! is_active_sidebar( 'sidebar-footer-2' )
        && ! is_active_sidebar( 'sidebar-footer-3') ) {
        $required_columns = 'large-12 columns';
    }
    // the first one is disabled, go half-half
    else if (   ! is_active_sidebar( 'sidebar-footer-1' )
             &&   is_active_sidebar( 'sidebar-footer-2')
             &&   is_active_sidebar( 'sidebar-footer-3' ) ) {
        $required_columns = 'large-6 columns';
    }
    // the last one is disabled, go eight-four
    else if (   ! is_active_sidebar( 'sidebar-footer-3' )
             &&   is_active_sidebar( 'sidebar-footer-2' )
             &&   is_active_sidebar( 'sidebar-footer-1' ) ) {
        $required_columns = 'large-8 columns';
    }
    // the middle on is disabled, go four-eight
    else if (   ! is_active_sidebar( 'sidebar-footer-2' )
            &&    is_active_sidebar( 'sidebar-footer-3' )
            &&    is_active_sidebar( 'sidebar-footer-1' ) ) {
        $required_columns = 'large-4 columns reverse';
    }

    return $required_columns;
}

?>