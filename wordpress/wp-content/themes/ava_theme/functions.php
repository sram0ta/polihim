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

    wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/src/index.css'  );
    wp_enqueue_style( 'swiper-css', get_stylesheet_directory_uri() . '/src/css/vendor/swiper-bundle.min.css'  );

    wp_enqueue_script( 'gsap-js', get_stylesheet_directory_uri() . '/src/js/vendor/gsap.min.js'  );
    wp_enqueue_script( 'gsap-scroll-trigger-js', get_stylesheet_directory_uri() . '/src/js/vendor/gsap-scroll-trigger.min.js'  );
    wp_enqueue_script( 'swiper-js', get_stylesheet_directory_uri() . '/src/js/vendor/swiper-bundle.min.js'  );
    wp_enqueue_script( 'lottie-js', get_stylesheet_directory_uri() . '/src/js/vendor/lottie.min.js'  );

    wp_enqueue_script( 'index-js', get_stylesheet_directory_uri() . '/src/index.js');

    if (is_page('infocenter')){
        wp_enqueue_script( 'ajax-infocenter-js', get_stylesheet_directory_uri() . '/src/js/ajax-infocenter.js');
    }


    if (is_page('tare')){
        wp_enqueue_script( 'ajax-tare-js', get_stylesheet_directory_uri() . '/src/js/ajax-tare.js');
    }

    if (is_page('lubricants')){
        wp_enqueue_script( 'ajax-lubricants-js', get_stylesheet_directory_uri() . '/src/js/ajax-lubricants.js');
    }

    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('global-styles');
}
add_action( 'wp_enqueue_scripts', 'ava_theme_scripts' );

add_action("admin_menu", "remove_menus");
function remove_menus() {
    remove_menu_page("edit.php");                 # Записи
    remove_menu_page("edit-comments.php");        # Комментарии
}

// Разрешение загрузки json файлов для lottie
function allow_json_upload($mimes) {
    $mimes['json'] = 'application/json';
    return $mimes;
}
add_filter('upload_mimes', 'allow_json_upload');

function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['json'] = 'application/json';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');

// Убирает p и br из contact form 7
add_filter('wpcf7_autop_or_not', '__return_false');

// Поля под перевод polylang
add_action('init', 'ava_polylang_strings' );

function ava_polylang_strings()
{
    if (!function_exists('pll_register_string')) {
        return;
    }

    pll_register_string(
        'infocenter-year',
        'Выберите год публикаций, который вас интересует.',
        'Инфоцентр',
        true
    );

    pll_register_string(
        'infocenter-all',
        'Смотреть все',
        'Инфоцентр',
    );

    pll_register_string(
        'infocenter-watch',
        'Загрузить ещё',
        'Инфоцентр',
    );

    pll_register_string(
        'infocenter-read',
        'Читать',
        'Инфоцентр',
    );

    pll_register_string(
        'header-menu',
        'Меню',
        'Хедер',
    );

    pll_register_string(
        'header-tell-us',
        'Связаться с нами',
        'Хедер',
    );

    pll_register_string(
        'tare-filter-name',
        'Фильтрация тары',
        'Тара',
    );

    pll_register_string(
        'tare-clear-name',
        'Сбросить всё',
        'Тара',
    );

    pll_register_string(
        'lubricants-filter-name-composition',
        'Фильтрация по составу',
        'Смазки',
    );

    pll_register_string(
        'lubricants-filter-name-composition-mobile',
        'По составу',
        'Смазки',
    );

    pll_register_string(
        'lubricants-filter-name-purpose',
        'Фильтрация по назначению',
        'Смазки',
    );

    pll_register_string(
        'lubricants-filter-name-purpose-mobile',
        'По назначению',
        'Смазки',
    );

    pll_register_string(
        'lubricants-filter-name-filter',
        'Фильтрация',
        'Смазки',
    );

    pll_register_string(
        'lubricants-link-more',
        'Подробнее',
        'Смазки',
    );

    pll_register_string(
        'lubricants-link-pdf',
        'Скачать PDF',
        'Смазки',
    );

    pll_register_string(
        'lubricants-nothing',
        'Ничего не найдено.',
        'Смазки',
    );

    pll_register_string(
        'industry-link-name',
        'Узнать подробнее',
        'Главная',
    );

    pll_register_string(
        'catalog-link',
        'Перейти в каталог продукции',
        'Продукция',
    );

    pll_register_string(
        'catalog-item-pdf',
        'Скачать PDF',
        'Продукция',
    );

    pll_register_string(
        'catalog-link-lubricants',
        'Каталог смазок и СОЖ',
        'Продукция',
    );

    pll_register_string(
        'catalog-link-tare',
        'Перейти в каталог Тары',
        'Продукция',
    );

    pll_register_string(
        'main-infocenter-link',
        'Смотреть все новости',
        'Главная',
    );
}

require get_template_directory() . '/ajax-infocenter.php';
require get_template_directory() . '/ajax-tare.php';
require get_template_directory() . '/ajax-lubricants.php';
