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

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 20 );

if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_homepage',
        'title' => 'homepage',
        'fields' => array (
            array (
                'key' => 'field_538d995440ebc',
                'label' => 'image slider',
                'name' => 'image_slider',
                'type' => 'image',
                'save_format' => 'url',
                'preview_size' => 'full',
                'library' => 'all',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'page',
                    'operator' => '==',
                    'value' => '10',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array (
        'id' => 'acf_librairie-2',
        'title' => 'librairie',
        'fields' => array (
            array (
                'key' => 'field_5391867f289db',
                'label' => 'image lib',
                'name' => 'image_lib',
                'type' => 'image',
                'save_format' => 'url',
                'preview_size' => 'full',
                'library' => 'all',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'page',
                    'operator' => '==',
                    'value' => '8',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
}
