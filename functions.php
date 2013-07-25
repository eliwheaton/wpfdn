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

//// function create_custom_taxonomies() {
//     $args = array('label' => __('Categories'),
//             'rewrite' => array( 'slug' => 'featured-projects' ),
//             'hierarchical' => false);
//     register_taxonomy('featured-project', 'wpfdn-portfolio', $args );
//     register_taxonomy_for_object_type('featured-projects', 'wpfdn-portfolio');
// }
//add_action('init', 'create_custom_taxonomies');

function create_custom_post_types() {
    register_post_type( 'wpfdn-portfolio',
        array(
            'labels' => array(
                'name' => __( 'Portfolio' ),
                'singular_name' => __( 'Portfolio' )
            ),
            'rewrite' => array( 'slug' => 'portfolio' ),
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                    'title',
                    'editor',
                    'thumbnail',
                    'excerpt',
                    'custom-fields'
            ),
            'taxonomies' => array('post_tag')
        )
    );
}
add_action('init', 'create_custom_post_types');

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

}
add_action( 'widgets_init', 'wpfdn_widgets_init' );

function new_excerpt_more( $more ) {
    return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


?>