<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ava_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body>
<?php wp_body_open(); ?>
<div class="header">
    <div class="header__inner">
        <a href="<?= home_url(); ?>" class="header__logo">
            <img src="/wp-content/uploads/2025/07/114.svg" alt="logo">
        </a>
        <a href="" class="header__products">
            <span class="header__products__title p2">Продукция</span>
            <svg class="header__products__icon" width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="41" height="41" rx="5" fill="#20376D"/>
                <path d="M20.4968 17.5V24.5M17 21.0032H24" stroke="white"/>
            </svg>
        </a>
        <nav class="header__navigation">
            <a href="#" class="header__navigation__item p2">Производство</a>
            <a href="#" class="header__navigation__item p2">Лаборатория</a>
            <a href="#" class="header__navigation__item p2">О компании</a>
            <a href="<?= pll_current_language(); ?>/info-center/" class="header__navigation__item p2">Инфоцентр</a>
        </nav>
    </div>
    <div class="header__inner">
        <div class="header__lang">
            <div class="header__lang__activity">
                <div class="header__lang__activity__title p2">Ru</div>
                <div class="header__lang__activity__icon">
                    <svg width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="3" width="1" height="7" fill="#20376D"/>
                        <rect y="4" width="1" height="7" transform="rotate(-90 0 4)" fill="#20376D"/>
                    </svg>
                </div>
            </div>
            <div class="header__lang__all">
                <a href="#" class="header__lang__all__link p2">En</a>
            </div>
        </div>
        <div class="header__search">
            <form action="#" class="header__search__form">
                <input type="text" class="header__search__form__input p2" placeholder="Поиск">
                <button class="header__search__form__button" type="submit">
                    <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.4">
                            <path d="M5.53637 9.23289C7.44954 10.3375 9.8959 9.68196 11.0005 7.76879C12.105 5.85562 11.4495 3.40926 9.53637 2.30469C7.6232 1.20012 5.17684 1.85562 4.07227 3.76879C2.9677 5.68196 3.6232 8.12832 5.53637 9.23289ZM5.53637 9.23289L3.53637 12.697" stroke="#434244"/>
                        </g>
                    </svg>
                </button>
            </form>
        </div>
        <a href="#" class="button-long _orange">
            <span class="button-long__inner">
                <span class="button-long__title p2">Связаться с нами</span>
                <span class="button-long__title p2">Связаться с нами</span>
            </span>
        </a>
    </div>
</div>
