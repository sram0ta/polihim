<?php

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

function register_my_menus() {
    register_nav_menus([
        'main_menu' => 'Главное меню',
    ]);
}
add_action('init', 'register_my_menus');


function ava_theme_setup() {

    load_theme_textdomain( 'ava_theme', get_template_directory() . '/languages' );

    add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'title-tag' );

    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'ava_theme_setup' );

function ava_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ava_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'ava_theme_content_width', 0 );

function ava_theme_scripts() {
    wp_enqueue_style( 'ava_theme-style', get_stylesheet_uri(), array(), _S_VERSION );

    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('global-styles');
}
add_action( 'wp_enqueue_scripts', 'ava_theme_scripts' );
