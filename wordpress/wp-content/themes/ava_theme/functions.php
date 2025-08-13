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
        wp_enqueue_script(
            'ajax-infocenter-js',
            get_stylesheet_directory_uri() . '/src/js/ajax-infocenter.js',
            [],
            null,
            true
        );
    }


    if (is_page('tare')){
        wp_enqueue_script(
            'ajax-tare-js',
            get_stylesheet_directory_uri() . '/src/js/ajax-tare.js',
            [],
            null,
            true
        );
    }

    if (is_page('lubricants')) {
        wp_enqueue_script(
            'ajax-lubricants-js',
            get_stylesheet_directory_uri() . '/src/js/ajax-lubricants.js',
            [],
            null,
            true
        );

        wp_localize_script('ajax-lubricants-js', 'ajax_object', [
            'ajax_url' => admin_url('admin-ajax.php'),
            'lang' => pll_current_language(),
        ]);
    }


    if (is_page('about')){
        wp_enqueue_script( 'ajax-about-js', get_stylesheet_directory_uri() . '/src/js/ajax-about.js');
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

// Отключаем проверку типа файла по расширению и MIME
add_filter('wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if ($ext === 'json') {
        $data['ext'] = 'json';
        $data['type'] = 'application/json';
    }
    return $data;
}, 10, 4);


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
        'lubricants-filter-name-industry',
        'Фильтрация по отрасли',
        'Смазки',
    );

    pll_register_string(
        'lubricants-filter-name-industry-mobile',
        'По отрасли',
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
        'about-more',
        'Показать ещё',
        'О нас',
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
        'main-product-link',
        'Перейти в каталог',
        'Главная',
    );

    pll_register_string(
        'main-product-link',
        'Продукция',
        'Главная',
    );

    pll_register_string(
        'main-infocenter-link',
        'Смотреть все новости',
        'Главная',
    );

    pll_register_string(
        'search-title',
        'Результаты поиска',
        'Поиск',
    );

    pll_register_string(
        'search-counter',
        'Найдено:',
        'Поиск',
    );

    pll_register_string(
        'search-not-found',
        'Ничего не найдено по запросу:',
        'Поиск',
    );

    pll_register_string(
        'search-found',
        'Поиск',
        'Поиск',
    );

    pll_register_string(
        'footer-privacy-policy',
        'Политика конфиденциальности',
        'Подвал',
    );

    pll_register_string(
        'footer-ava-digital',
        'Сайт сделан в AVA-DIGITAL',
        'Подвал',
    );
}

require get_template_directory() . '/ajax-infocenter.php';
require get_template_directory() . '/ajax-tare.php';
require get_template_directory() . '/ajax-lubricants.php';
require get_template_directory() . '/ajax-about.php';

function redirect_404_to_home() {
    if ( is_404() && !is_admin() ) {
        wp_redirect( home_url(), 301 ); // 301 — постоянный редирект
        exit;
    }
}
add_action( 'template_redirect', 'redirect_404_to_home' );
