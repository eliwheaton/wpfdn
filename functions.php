<?php


add_action( 'after_setup_theme', 'wpfdn_setup' );
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

    // This theme uses a custom image size for featured images, displayed on "standard" posts.
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 624, 9999 ); // Unlimited height, soft crop

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'wpfdn'),
            'secondary' => __('Secondary Menu', 'wpfdn')
        )
    );
}

require( get_template_directory() . '/includes/wpfdn-foundation.php' );       // make foundation work in WordPress

function new_excerpt_more( $more ) {
    return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


?>