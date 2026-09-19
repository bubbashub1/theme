<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }

function bubba_hub_theme_setup() {
 add_theme_support('title-tag');
 add_theme_support('post-thumbnails');
 add_theme_support('custom-logo',array('height'=>120,'width'=>190,'flex-height'=>true,'flex-width'=>true));
 add_theme_support('html5',array('search-form','comment-form','comment-list','gallery','caption','style','script'));
 add_theme_support('responsive-embeds');
 register_nav_menus(array('primary'=>__('Primary Menu','bubba-hub')));
}
add_action('after_setup_theme','bubba_hub_theme_setup');

function bubba_hub_theme_assets() {
 wp_enqueue_style(
   'bubba-hub-fonts',
   'https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800;900&display=swap',
   array(),null
 );
 wp_enqueue_style('bubba-hub-style',get_stylesheet_uri(),array('bubba-hub-fonts'),'0.2.0');
 wp_enqueue_style('bubba-hub-components',get_template_directory_uri().'/assets/components.css',array('bubba-hub-style'),'0.2.0');
 wp_enqueue_script('bubba-hub-theme',get_template_directory_uri().'/assets/theme.js',array(),'0.2.0',true);
}
add_action('wp_enqueue_scripts','bubba_hub_theme_assets');

function bubba_hub_body_classes($classes){
 $classes[]='bubba-hub-theme';
 return $classes;
}
add_filter('body_class','bubba_hub_body_classes');

function bubba_hub_menu_classes( $classes, $item ) {
 if ( isset($item->title) && strtolower(trim(wp_strip_all_tags($item->title))) === 'leader portal' ) { $classes[] = 'bh-leader-portal'; }
 return $classes;
}
add_filter('nav_menu_css_class','bubba_hub_menu_classes',10,2);