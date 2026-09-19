<?php
/**
 * Bubba Hub theme bootstrap.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

function bubba_hub_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array( 'height' => 80, 'width' => 260, 'flex-height' => true, 'flex-width' => true ) );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'responsive-embeds' );
    register_nav_menus( array( 'primary' => __( 'Primary Menu', 'bubba-hub' ) ) );
}
add_action( 'after_setup_theme', 'bubba_hub_theme_setup' );

function bubba_hub_theme_assets() {
    wp_enqueue_style( 'bubba-hub-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Work+Sans:wght@400;500;600;700&display=swap', array(), null );
    wp_enqueue_style( 'bubba-hub-style', get_stylesheet_uri(), array( 'bubba-hub-fonts' ), '0.1.0' );
}
add_action( 'wp_enqueue_scripts', 'bubba_hub_theme_assets' );

function bubba_hub_body_classes( $classes ) {
    $classes[] = 'bubba-hub-theme';
    return $classes;
}
add_filter( 'body_class', 'bubba_hub_body_classes' );
