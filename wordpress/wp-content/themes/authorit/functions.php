<?php
/**
 * Created by PhpStorm.
 * User: Bill
 * Date: 02/06/14
 * Time: 16:05
 */

if ( ! function_exists( 'authorit_setup' ) ) :

function authorit_setup() {

    /*
     * Make Twenty Fourteen available for translation.
     *
     * Translations can be added to the /languages/ directory.
     * If you're building a theme based on Twenty Fourteen, use a find and
     * replace to change 'twentyfourteen' to the name of your theme in all
     * template files.
     */
    load_theme_textdomain( 'authorit', get_template_directory() . '/languages' );

    // Enable support for Post Thumbnails, and declare two sizes.
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 672, 372, true );
    add_image_size( 'authorit-full-width', 1038, 576, true );

    // This theme uses wp_nav_menu() in two locations.

    register_nav_menu('header','Header Menu');
    register_nav_menu('social','Social Menu');
    register_nav_menu('footer','Footer menu');

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     * See http://codex.wordpress.org/Post_Formats
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
    ) );

    // This theme allows users to set a custom background.
    add_theme_support( 'custom-background', apply_filters( 'authorit_body', array(
        'default-color' => 'f5f5f5',
    ) ) );


}
endif; // authorit_setup
add_action( 'after_setup_theme', 'authorit_setup' );


