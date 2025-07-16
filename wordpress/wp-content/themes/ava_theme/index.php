<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ava_theme
 */

get_header();
?>
    <main class="main page-main">
        <div class="container hero grid-12">
            <div class="hero__paragraph">
                <svg class="hero__paragraph__icon" width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.61853 1.36084C5.48656 0.864826 5.92057 0.61682 6.38149 0.519704C6.78935 0.43377 7.21065 0.43377 7.61851 0.519704C8.07943 0.61682 8.51345 0.864826 9.38147 1.36084L11.5815 2.61798C12.4623 3.12133 12.9027 3.373 13.2232 3.72664C13.5067 4.03952 13.7209 4.40873 13.8519 4.81011C14 5.26376 14 5.77102 14 6.78555V9.21445C14 10.229 14 10.7362 13.8519 11.1899C13.7209 11.5913 13.5067 11.9605 13.2232 12.2734C12.9027 12.627 12.4623 12.8787 11.5815 13.382L9.38147 14.6392C8.51345 15.1352 8.07943 15.3832 7.61851 15.4803C7.21065 15.5662 6.78935 15.5662 6.38149 15.4803C5.92057 15.3832 5.48656 15.1352 4.61853 14.6392L2.41853 13.382C1.53768 12.8787 1.09725 12.627 0.776833 12.2734C0.493338 11.9605 0.27908 11.5913 0.148071 11.1899C0 10.7362 0 10.229 0 9.21445V6.78555C0 5.77102 0 5.26376 0.148071 4.81011C0.27908 4.40873 0.493338 4.03952 0.776833 3.72664C1.09725 3.373 1.53768 3.12133 2.41853 2.61798L4.61853 1.36084Z" fill="#20376D"/>
                </svg>
                <div class="hero__paragraph__inner">
                    <p class="h4"><?php the_field('hero_left_title'); ?></p>
                    <div class="p1"><?php the_field('hero_left_description'); ?></div>
                </div>
            </div>
            <div class="hero__information">
                <div class="hero__information__title h1"><?php the_field('hero__title'); ?></div>
                <p class="hero__information__description p1"><?php the_field('hero_description'); ?></p>
                <a href="#" class="button-polygon">
                    <span class="button-polygon__title p1">Перейти в каталог продукции</span>
                    <span class="button-polygon__icon" style="background-image: url('/wp-content/uploads/2025/07/Polygon-1.svg')">
                        <span class="button-polygon__icon__inner">
                            <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 6L14 6M14 6L10 2M14 6L10 10" stroke="#E9E9E9"/>
                            </svg>
                            <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 6L14 6M14 6L10 2M14 6L10 10" stroke="#E9E9E9"/>
                            </svg>
                        </span>
                    </span>
                </a>
            </div>
        </div>
        <div class="container main-image" style="background-image: url('<?php the_field('hero_image'); ?>')"></div>
        <div class="container container-main__inner">
            <div class="customer-focus grid-12">
                <div class="customer-focus__paragraph">
                    <div class="customer-focus__paragraph__image" style="background-image: url('<?php the_field('customer_left_image'); ?>')"></div>
                    <div class="customer-focus__paragraph__title h4"><?php the_field('customer_left_title'); ?></div>
                    <div class="customer-focus__paragraph__description p1"><?php the_field('customer_left_description'); ?></div>
                </div>
                <div class="customer-focus__information">
                    <div class="customer-focus__information__title h3"><?php the_field('customer_title'); ?></div>
                    <div class="customer-focus__information__description p1"><?php the_field('customer_description'); ?></div>
                    <a href="#" class="button-polygon">
                        <span class="button-polygon__title p1">Перейти в каталог продукции</span>
                        <span class="button-polygon__icon" style="background-image: url('/wp-content/uploads/2025/07/Polygon-1.svg')">
                            <span class="button-polygon__icon__inner">
                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 6L14 6M14 6L10 2M14 6L10 10" stroke="#E9E9E9"/>
                                </svg>
                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 6L14 6M14 6L10 2M14 6L10 10" stroke="#E9E9E9"/>
                                </svg>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="advantages grid-12">
                <div class="advantages__information">
                    <div class="advantages__information__title h2"><?php the_field('advantages_title'); ?></div>
                    <div class="advantages__information__description p1"><?php the_field('advantages_description'); ?></div>
                    <div class="advantages__information__navigation">
                        <button class="navigation__button _prev">
                            <span class="navigation__button__border">
                                 <svg width="100" height="109" viewBox="0 0 100 109" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M45.2979 2.12988C48.3981 1.47319 51.6019 1.47319 54.7021 2.12988C58.1691 2.86431 61.4529 4.73944 68.3955 8.73145L80.4912 15.6855C87.4746 19.701 90.7664 21.6076 93.1533 24.252C95.2875 26.6164 96.8999 29.4039 97.8857 32.4326C98.9883 35.8199 99 39.6234 99 47.6787V61.3213C99 69.3766 98.9883 73.1801 97.8857 76.5674C96.8999 79.5961 95.2875 82.3836 93.1533 84.748C90.7664 87.3924 87.4747 89.299 80.4912 93.3145L68.3955 100.269C61.4529 104.261 58.1691 106.136 54.7021 106.87C51.6019 107.527 48.3981 107.527 45.2979 106.87C41.8309 106.136 38.5471 104.261 31.6045 100.269L19.5088 93.3145C12.5254 89.299 9.23359 87.3924 6.84668 84.748C4.71251 82.3836 3.10012 79.5961 2.11426 76.5674C1.01172 73.1801 1 69.3766 1 61.3213V47.6787C1 39.6234 1.01172 35.8199 2.11426 32.4326C3.10012 29.4039 4.71251 26.6164 6.84668 24.252C9.23359 21.6076 12.5253 19.701 19.5088 15.6855L31.6045 8.73145C38.5471 4.73944 41.8309 2.86431 45.2979 2.12988Z" stroke="#003B96" stroke-opacity="0.4" stroke-width="2"/>
                                </svg>
                            </span>
                            <span class="navigation__button__inner">
                                <svg width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 6L2 6M2 6L7.23077 1M2 6L7.23077 11" stroke="#20376D" stroke-width="2"/>
                                </svg>
                                <svg width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 6L2 6M2 6L7.23077 1M2 6L7.23077 11" stroke="#20376D" stroke-width="2"/>
                                </svg>
                            </span>
                        </button>
                        <button class="navigation__button _next">
                            <span class="navigation__button__border">
                                 <svg width="100" height="109" viewBox="0 0 100 109" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M45.2979 2.12988C48.3981 1.47319 51.6019 1.47319 54.7021 2.12988C58.1691 2.86431 61.4529 4.73944 68.3955 8.73145L80.4912 15.6855C87.4746 19.701 90.7664 21.6076 93.1533 24.252C95.2875 26.6164 96.8999 29.4039 97.8857 32.4326C98.9883 35.8199 99 39.6234 99 47.6787V61.3213C99 69.3766 98.9883 73.1801 97.8857 76.5674C96.8999 79.5961 95.2875 82.3836 93.1533 84.748C90.7664 87.3924 87.4747 89.299 80.4912 93.3145L68.3955 100.269C61.4529 104.261 58.1691 106.136 54.7021 106.87C51.6019 107.527 48.3981 107.527 45.2979 106.87C41.8309 106.136 38.5471 104.261 31.6045 100.269L19.5088 93.3145C12.5254 89.299 9.23359 87.3924 6.84668 84.748C4.71251 82.3836 3.10012 79.5961 2.11426 76.5674C1.01172 73.1801 1 69.3766 1 61.3213V47.6787C1 39.6234 1.01172 35.8199 2.11426 32.4326C3.10012 29.4039 4.71251 26.6164 6.84668 24.252C9.23359 21.6076 12.5253 19.701 19.5088 15.6855L31.6045 8.73145C38.5471 4.73944 41.8309 2.86431 45.2979 2.12988Z" stroke="#003B96" stroke-opacity="0.4" stroke-width="2"/>
                                </svg>
                            </span>
                            <span class="navigation__button__inner">
                                <svg width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 7V5H14.5L11 1.5L12.5 0L18.5 6L12.5 12L11 10.5L14.5 7H0Z" fill="#20376D"/>
                                </svg>
                                <svg width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 7V5H14.5L11 1.5L12.5 0L18.5 6L12.5 12L11 10.5L14.5 7H0Z" fill="#20376D"/>
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="advantages__gallery">
                    <div class="swiper" id="advantages-gallery">
                        <div class="swiper-wrapper">
                            <?php
                            $items = get_field('repeater_advantages');
                            $total = count($items);
                            $index = 0;

                            while (have_rows('repeater_advantages')) : the_row();
                                $index++;
                                $is_last = $index === $total;
                                ?>
                                <div class="swiper-slide advantages__gallery__item<?= $is_last ? ' last' : '' ?>">
                                    <div class="advantages__gallery__item__inner">
                                        <img src="/wp-content/uploads/2025/07/image-1.jpg" alt="" class="advantages__gallery__item__image" loading="lazy">
                                        <h4 class="advantages__gallery__item__title h4"><?php the_sub_field('title'); ?></h4>
                                        <p class="advantages__gallery__item__description p1"><?php the_sub_field('description'); ?></p>
                                    </div>
                                    <div class="advantages__gallery__item__ruler">
                                        <div class="advantages__gallery__item__ruler__number p2"><?= sprintf('%02d', $index); ?></div>
                                        <?php if ($is_last): ?>
                                            <svg width="754" height="71" viewBox="0 0 754 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <line x1="0.5" y1="10" x2="0.499997" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="30.5" y1="41" x2="30.5" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="60.5" y1="41" x2="60.5" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="90.5" y1="41" x2="90.5" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="120.5" y1="41" x2="120.5" y2="71" stroke="#20376D"/>
                                                <line x1="150.5" y1="21" x2="150.5" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="180.5" y1="41" x2="180.5" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="210.5" y1="41" x2="210.5" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="240.5" y1="41" x2="240.5" y2="71" stroke="#20376D"/>
                                                <line x1="270.5" y1="21" x2="270.5" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="300.5" y1="41" x2="300.5" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="330.5" y1="41" x2="330.5" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="360.5" y1="41" x2="360.5" y2="71" stroke="#20376D"/>
                                                <line x1="390.5" y1="21" x2="390.5" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="420.5" y1="41" x2="420.5" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="450.5" y1="41" x2="450.5" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="480.5" y1="41" x2="480.5" y2="71" stroke="#20376D"/>
                                                <line x1="510.5" y1="21" x2="510.5" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="540.5" y1="41" x2="540.5" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="570.5" y1="41" x2="570.5" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="600.5" y1="41" x2="600.5" y2="71" stroke="#20376D"/>
                                                <line x1="630.5" y1="21" x2="630.5" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="660.5" y1="41" x2="660.5" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="690.5" y1="41" x2="690.5" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="720.5" y1="41" x2="720.5" y2="71" stroke="#20376D"/>
                                                <line y1="70.5" x2="754" y2="70.5" stroke="#20376D"/>
                                                <line x1="753.5" y1="21" x2="753.5" y2="71" stroke="#20376D"/>
                                            </svg>
                                        <?php else: ?>
                                            <svg width="754" height="71" viewBox="0 0 754 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <line x1="0.5" y1="10" x2="0.499997" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="30.5" y1="41" x2="30.5" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="60.5" y1="41" x2="60.5" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="90.5" y1="41" x2="90.5" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="120.5" y1="41" x2="120.5" y2="71" stroke="#20376D"/>
                                                <line x1="150.5" y1="21" x2="150.5" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="180.5" y1="41" x2="180.5" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="210.5" y1="41" x2="210.5" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="240.5" y1="41" x2="240.5" y2="71" stroke="#20376D"/>
                                                <line x1="270.5" y1="21" x2="270.5" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="300.5" y1="41" x2="300.5" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="330.5" y1="41" x2="330.5" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="360.5" y1="41" x2="360.5" y2="71" stroke="#20376D"/>
                                                <line x1="390.5" y1="21" x2="390.5" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="420.5" y1="41" x2="420.5" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="450.5" y1="41" x2="450.5" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="480.5" y1="41" x2="480.5" y2="71" stroke="#20376D"/>
                                                <line x1="510.5" y1="21" x2="510.5" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="540.5" y1="41" x2="540.5" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="570.5" y1="41" x2="570.5" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="600.5" y1="41" x2="600.5" y2="71" stroke="#20376D"/>
                                                <line x1="630.5" y1="21" x2="630.5" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="660.5" y1="41" x2="660.5" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="690.5" y1="41" x2="690.5" y2="71" stroke="#20376D"/>
                                                <line opacity="0.2" x1="720.5" y1="41" x2="720.5" y2="71" stroke="#20376D"/>
                                                <line y1="70.5" x2="754" y2="70.5" stroke="#20376D"/>
                                            </svg>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="products grid-12">
                <img src="<?= get_field('products_image')['url']; ?>" alt="<?= get_field('products_image')['alt']; ?>" class="products__image" loading="lazy">
                <div class="products__inner">
                    <div class="products__title h2"><?php the_field('products_title'); ?></div>
                    <p class="products__description p1"><?php the_field('products_description'); ?></p>
                    <div class="products__list">
                        <?php
                        $count = 1;
                            while ( have_rows('repeater_scope') ) : the_row();
                            ?>
                                <div class="products__item">
                                    <div class="products__item__number p2"><?= sprintf('%02d', $count); ?></div>
                                    <p class="products__item__title p1"><?php the_sub_field('title'); ?></p>
                                    <div class="products__item__image"></div>
                                </div>
                            <?php
                            $count++;
                            endwhile;
                        ?>
                    </div>
                    <a href="#" class="button-polygon">
                        <span class="button-polygon__title p1">Перейти в каталог продукции</span>
                        <span class="button-polygon__icon" style="background-image: url('/wp-content/uploads/2025/07/Polygon-1.svg')">
                            <span class="button-polygon__icon__inner">
                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 6L14 6M14 6L10 2M14 6L10 10" stroke="#E9E9E9"/>
                                </svg>
                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 6L14 6M14 6L10 2M14 6L10 10" stroke="#E9E9E9"/>
                                </svg>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="container scale">
            <div class="scale__paragraph">
                <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.61853 1.36084C5.48656 0.864826 5.92057 0.61682 6.38149 0.519704C6.78935 0.43377 7.21065 0.43377 7.61851 0.519704C8.07943 0.61682 8.51345 0.864826 9.38147 1.36084L11.5815 2.61798C12.4623 3.12133 12.9027 3.373 13.2232 3.72664C13.5067 4.03952 13.7209 4.40873 13.8519 4.81011C14 5.26376 14 5.77102 14 6.78555V9.21445C14 10.229 14 10.7362 13.8519 11.1899C13.7209 11.5913 13.5067 11.9605 13.2232 12.2734C12.9027 12.627 12.4623 12.8787 11.5815 13.382L9.38147 14.6392C8.51345 15.1352 8.07943 15.3832 7.61851 15.4803C7.21065 15.5662 6.78935 15.5662 6.38149 15.4803C5.92057 15.3832 5.48656 15.1352 4.61853 14.6392L2.41853 13.382C1.53768 12.8787 1.09725 12.627 0.776833 12.2734C0.493338 11.9605 0.27908 11.5913 0.148071 11.1899C0 10.7362 0 10.229 0 9.21445V6.78555C0 5.77102 0 5.26376 0.148071 4.81011C0.27908 4.40873 0.493338 4.03952 0.776833 3.72664C1.09725 3.373 1.53768 3.12133 2.41853 2.61798L4.61853 1.36084Z" fill="white"/>
                </svg>
                <p class="scale__paragraph__title p1"><?php the_field('scale_title'); ?></p>
            </div>
            <div class="scale__list grid-12">
                <?php
                    while ( have_rows('repeater_scale') ) : the_row();
                    ?>
                        <div class="scale__item">
                            <div class="scale__item__number p3"><?php the_sub_field('number'); ?></div>
                            <p class="scale__item__description p1"><?php the_sub_field('description'); ?></p>
                            <img class="scale__item__image" src="/wp-content/uploads/2025/07/Frame-139.svg" alt="">
                        </div>
                    <?php
                    endwhile;
                ?>
            </div>
        </div>
        <div class="container container-main__inner _no-overflow">
            <div class="wide-range grid-12">
                <div class="wide-range__image" style="background-image: url('<?php the_field('wide-range_image'); ?>')"></div>
                <div class="wide-range__information">
                    <div class="wide-range__information__title h1"><?php the_field('wide-range_title'); ?></div>
                    <p class="wide-range__information__description p1"><?php the_field('wide-range_description'); ?></p>
                    <a href="#" class="button-polygon">
                        <span class="button-polygon__title p1">Перейти в каталог продукции</span>
                        <span class="button-polygon__icon" style="background-image: url('/wp-content/uploads/2025/07/Polygon-1.svg')">
                            <span class="button-polygon__icon__inner">
                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 6L14 6M14 6L10 2M14 6L10 10" stroke="#E9E9E9"/>
                                </svg>
                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 6L14 6M14 6L10 2M14 6L10 10" stroke="#E9E9E9"/>
                                </svg>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="wide-range__products grid-12">
                    <div class="wide-range__products__image__inner">
                        <img src="<?= get_field('wide-range_product')['url']; ?>" alt="<?= get_field('wide-range_product')['alt']; ?>" class="wide-range__products__image" loading="lazy">
                    </div>
                    <div class="wide-range__products__content">
                        <div class="wide-range__products__content__item">
                            <img src="/wp-content/uploads/2025/07/Group-4.svg" alt="image" class="wide-range__products__content__item__ruler">
                            <div class="wide-range__products__content__item__information">
                                <div class="wide-range__products__content__item__information__inner">
                                    <div class="wide-range__products__content__item__information__number p2">01</div>
                                    <h4 class="wide-range__products__content__item__information__title h4">Водные и водоэмульсионные смазки и СОЖ</h4>
                                </div>
                                <div class="wide-range__products__content__item__information__inner">
                                    <a href="#" class="wide-range__products__content__item__information__link p1">Перейти в каталог</a>
                                    <svg class="wide-range__products__content__item__information__icon" width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.61853 1.36084C5.48656 0.864826 5.92057 0.61682 6.38149 0.519704C6.78935 0.43377 7.21065 0.43377 7.61851 0.519704C8.07943 0.61682 8.51345 0.864826 9.38147 1.36084L11.5815 2.61798C12.4623 3.12133 12.9027 3.373 13.2232 3.72664C13.5067 4.03952 13.7209 4.40873 13.8519 4.81011C14 5.26376 14 5.77102 14 6.78555V9.21445C14 10.229 14 10.7362 13.8519 11.1899C13.7209 11.5913 13.5067 11.9605 13.2232 12.2734C12.9027 12.627 12.4623 12.8787 11.5815 13.382L9.38147 14.6392C8.51345 15.1352 8.07943 15.3832 7.61851 15.4803C7.21065 15.5662 6.78935 15.5662 6.38149 15.4803C5.92057 15.3832 5.48656 15.1352 4.61853 14.6392L2.41853 13.382C1.53768 12.8787 1.09725 12.627 0.776833 12.2734C0.493338 11.9605 0.27908 11.5913 0.148071 11.1899C0 10.7362 0 10.229 0 9.21445V6.78555C0 5.77102 0 5.26376 0.148071 4.81011C0.27908 4.40873 0.493338 4.03952 0.776833 3.72664C1.09725 3.373 1.53768 3.12133 2.41853 2.61798L4.61853 1.36084Z" fill="#20376D"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="wide-range__products__content__item">
                            <img src="/wp-content/uploads/2025/07/Group-4.svg" alt="image" class="wide-range__products__content__item__ruler">
                            <div class="wide-range__products__content__item__information">
                                <div class="wide-range__products__content__item__information__inner">
                                    <div class="wide-range__products__content__item__information__number p2">01</div>
                                    <h4 class="wide-range__products__content__item__information__title h4">Водные и водоэмульсионные смазки и СОЖ</h4>
                                </div>
                                <div class="wide-range__products__content__item__information__inner">
                                    <a href="#" class="wide-range__products__content__item__information__link p1">Перейти в каталог</a>
                                    <svg class="wide-range__products__content__item__information__icon" width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.61853 1.36084C5.48656 0.864826 5.92057 0.61682 6.38149 0.519704C6.78935 0.43377 7.21065 0.43377 7.61851 0.519704C8.07943 0.61682 8.51345 0.864826 9.38147 1.36084L11.5815 2.61798C12.4623 3.12133 12.9027 3.373 13.2232 3.72664C13.5067 4.03952 13.7209 4.40873 13.8519 4.81011C14 5.26376 14 5.77102 14 6.78555V9.21445C14 10.229 14 10.7362 13.8519 11.1899C13.7209 11.5913 13.5067 11.9605 13.2232 12.2734C12.9027 12.627 12.4623 12.8787 11.5815 13.382L9.38147 14.6392C8.51345 15.1352 8.07943 15.3832 7.61851 15.4803C7.21065 15.5662 6.78935 15.5662 6.38149 15.4803C5.92057 15.3832 5.48656 15.1352 4.61853 14.6392L2.41853 13.382C1.53768 12.8787 1.09725 12.627 0.776833 12.2734C0.493338 11.9605 0.27908 11.5913 0.148071 11.1899C0 10.7362 0 10.229 0 9.21445V6.78555C0 5.77102 0 5.26376 0.148071 4.81011C0.27908 4.40873 0.493338 4.03952 0.776833 3.72664C1.09725 3.373 1.53768 3.12133 2.41853 2.61798L4.61853 1.36084Z" fill="#20376D"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="wide-range__products__content__item">
                            <img src="/wp-content/uploads/2025/07/Group-4.svg" alt="image" class="wide-range__products__content__item__ruler">
                            <div class="wide-range__products__content__item__information">
                                <div class="wide-range__products__content__item__information__inner">
                                    <div class="wide-range__products__content__item__information__number p2">01</div>
                                    <h4 class="wide-range__products__content__item__information__title h4">Водные и водоэмульсионные смазки и СОЖ</h4>
                                </div>
                                <div class="wide-range__products__content__item__information__inner">
                                    <a href="#" class="wide-range__products__content__item__information__link p1">Перейти в каталог</a>
                                    <svg class="wide-range__products__content__item__information__icon" width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.61853 1.36084C5.48656 0.864826 5.92057 0.61682 6.38149 0.519704C6.78935 0.43377 7.21065 0.43377 7.61851 0.519704C8.07943 0.61682 8.51345 0.864826 9.38147 1.36084L11.5815 2.61798C12.4623 3.12133 12.9027 3.373 13.2232 3.72664C13.5067 4.03952 13.7209 4.40873 13.8519 4.81011C14 5.26376 14 5.77102 14 6.78555V9.21445C14 10.229 14 10.7362 13.8519 11.1899C13.7209 11.5913 13.5067 11.9605 13.2232 12.2734C12.9027 12.627 12.4623 12.8787 11.5815 13.382L9.38147 14.6392C8.51345 15.1352 8.07943 15.3832 7.61851 15.4803C7.21065 15.5662 6.78935 15.5662 6.38149 15.4803C5.92057 15.3832 5.48656 15.1352 4.61853 14.6392L2.41853 13.382C1.53768 12.8787 1.09725 12.627 0.776833 12.2734C0.493338 11.9605 0.27908 11.5913 0.148071 11.1899C0 10.7362 0 10.229 0 9.21445V6.78555C0 5.77102 0 5.26376 0.148071 4.81011C0.27908 4.40873 0.493338 4.03952 0.776833 3.72664C1.09725 3.373 1.53768 3.12133 2.41853 2.61798L4.61853 1.36084Z" fill="#20376D"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="wide-range__products__content__item">
                            <img src="/wp-content/uploads/2025/07/Group-4.svg" alt="image" class="wide-range__products__content__item__ruler">
                            <div class="wide-range__products__content__item__information">
                                <div class="wide-range__products__content__item__information__inner">
                                    <div class="wide-range__products__content__item__information__number p2">01</div>
                                    <h4 class="wide-range__products__content__item__information__title h4">Водные и водоэмульсионные смазки и СОЖ</h4>
                                </div>
                                <div class="wide-range__products__content__item__information__inner">
                                    <a href="#" class="wide-range__products__content__item__information__link p1">Перейти в каталог</a>
                                    <svg class="wide-range__products__content__item__information__icon" width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.61853 1.36084C5.48656 0.864826 5.92057 0.61682 6.38149 0.519704C6.78935 0.43377 7.21065 0.43377 7.61851 0.519704C8.07943 0.61682 8.51345 0.864826 9.38147 1.36084L11.5815 2.61798C12.4623 3.12133 12.9027 3.373 13.2232 3.72664C13.5067 4.03952 13.7209 4.40873 13.8519 4.81011C14 5.26376 14 5.77102 14 6.78555V9.21445C14 10.229 14 10.7362 13.8519 11.1899C13.7209 11.5913 13.5067 11.9605 13.2232 12.2734C12.9027 12.627 12.4623 12.8787 11.5815 13.382L9.38147 14.6392C8.51345 15.1352 8.07943 15.3832 7.61851 15.4803C7.21065 15.5662 6.78935 15.5662 6.38149 15.4803C5.92057 15.3832 5.48656 15.1352 4.61853 14.6392L2.41853 13.382C1.53768 12.8787 1.09725 12.627 0.776833 12.2734C0.493338 11.9605 0.27908 11.5913 0.148071 11.1899C0 10.7362 0 10.229 0 9.21445V6.78555C0 5.77102 0 5.26376 0.148071 4.81011C0.27908 4.40873 0.493338 4.03952 0.776833 3.72664C1.09725 3.373 1.53768 3.12133 2.41853 2.61798L4.61853 1.36084Z" fill="#20376D"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="wide-range__products__content__item">
                            <img src="/wp-content/uploads/2025/07/Group-4.svg" alt="image" class="wide-range__products__content__item__ruler">
                            <div class="wide-range__products__content__item__information">
                                <div class="wide-range__products__content__item__information__inner">
                                    <div class="wide-range__products__content__item__information__number p2">01</div>
                                    <h4 class="wide-range__products__content__item__information__title h4">Водные и водоэмульсионные смазки и СОЖ</h4>
                                </div>
                                <div class="wide-range__products__content__item__information__inner">
                                    <a href="#" class="wide-range__products__content__item__information__link p1">Перейти в каталог</a>
                                    <svg class="wide-range__products__content__item__information__icon" width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.61853 1.36084C5.48656 0.864826 5.92057 0.61682 6.38149 0.519704C6.78935 0.43377 7.21065 0.43377 7.61851 0.519704C8.07943 0.61682 8.51345 0.864826 9.38147 1.36084L11.5815 2.61798C12.4623 3.12133 12.9027 3.373 13.2232 3.72664C13.5067 4.03952 13.7209 4.40873 13.8519 4.81011C14 5.26376 14 5.77102 14 6.78555V9.21445C14 10.229 14 10.7362 13.8519 11.1899C13.7209 11.5913 13.5067 11.9605 13.2232 12.2734C12.9027 12.627 12.4623 12.8787 11.5815 13.382L9.38147 14.6392C8.51345 15.1352 8.07943 15.3832 7.61851 15.4803C7.21065 15.5662 6.78935 15.5662 6.38149 15.4803C5.92057 15.3832 5.48656 15.1352 4.61853 14.6392L2.41853 13.382C1.53768 12.8787 1.09725 12.627 0.776833 12.2734C0.493338 11.9605 0.27908 11.5913 0.148071 11.1899C0 10.7362 0 10.229 0 9.21445V6.78555C0 5.77102 0 5.26376 0.148071 4.81011C0.27908 4.40873 0.493338 4.03952 0.776833 3.72664C1.09725 3.373 1.53768 3.12133 2.41853 2.61798L4.61853 1.36084Z" fill="#20376D"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="wide-range__products__content__item">
                            <img src="/wp-content/uploads/2025/07/Group-4.svg" alt="image" class="wide-range__products__content__item__ruler">
                            <div class="wide-range__products__content__item__information">
                                <div class="wide-range__products__content__item__information__inner">
                                    <div class="wide-range__products__content__item__information__number p2">01</div>
                                    <h4 class="wide-range__products__content__item__information__title h4">Водные и водоэмульсионные смазки и СОЖ</h4>
                                </div>
                                <div class="wide-range__products__content__item__information__inner">
                                    <a href="#" class="wide-range__products__content__item__information__link p1">Перейти в каталог</a>
                                    <svg class="wide-range__products__content__item__information__icon" width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.61853 1.36084C5.48656 0.864826 5.92057 0.61682 6.38149 0.519704C6.78935 0.43377 7.21065 0.43377 7.61851 0.519704C8.07943 0.61682 8.51345 0.864826 9.38147 1.36084L11.5815 2.61798C12.4623 3.12133 12.9027 3.373 13.2232 3.72664C13.5067 4.03952 13.7209 4.40873 13.8519 4.81011C14 5.26376 14 5.77102 14 6.78555V9.21445C14 10.229 14 10.7362 13.8519 11.1899C13.7209 11.5913 13.5067 11.9605 13.2232 12.2734C12.9027 12.627 12.4623 12.8787 11.5815 13.382L9.38147 14.6392C8.51345 15.1352 8.07943 15.3832 7.61851 15.4803C7.21065 15.5662 6.78935 15.5662 6.38149 15.4803C5.92057 15.3832 5.48656 15.1352 4.61853 14.6392L2.41853 13.382C1.53768 12.8787 1.09725 12.627 0.776833 12.2734C0.493338 11.9605 0.27908 11.5913 0.148071 11.1899C0 10.7362 0 10.229 0 9.21445V6.78555C0 5.77102 0 5.26376 0.148071 4.81011C0.27908 4.40873 0.493338 4.03952 0.776833 3.72664C1.09725 3.373 1.53768 3.12133 2.41853 2.61798L4.61853 1.36084Z" fill="#20376D"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="wide-range__products__content__item">
                            <img src="/wp-content/uploads/2025/07/Group-6.svg" alt="image" class="wide-range__products__content__item__ruler">
                            <div class="wide-range__products__content__item__information">
                                <div class="wide-range__products__content__item__information__inner">
                                    <div class="wide-range__products__content__item__information__number p2">01</div>
                                    <h4 class="wide-range__products__content__item__information__title h4">Водные и водоэмульсионные смазки и СОЖ</h4>
                                </div>
                                <div class="wide-range__products__content__item__information__inner">
                                    <a href="#" class="wide-range__products__content__item__information__link p1">Перейти в каталог</a>
                                    <svg class="wide-range__products__content__item__information__icon" width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.61853 1.36084C5.48656 0.864826 5.92057 0.61682 6.38149 0.519704C6.78935 0.43377 7.21065 0.43377 7.61851 0.519704C8.07943 0.61682 8.51345 0.864826 9.38147 1.36084L11.5815 2.61798C12.4623 3.12133 12.9027 3.373 13.2232 3.72664C13.5067 4.03952 13.7209 4.40873 13.8519 4.81011C14 5.26376 14 5.77102 14 6.78555V9.21445C14 10.229 14 10.7362 13.8519 11.1899C13.7209 11.5913 13.5067 11.9605 13.2232 12.2734C12.9027 12.627 12.4623 12.8787 11.5815 13.382L9.38147 14.6392C8.51345 15.1352 8.07943 15.3832 7.61851 15.4803C7.21065 15.5662 6.78935 15.5662 6.38149 15.4803C5.92057 15.3832 5.48656 15.1352 4.61853 14.6392L2.41853 13.382C1.53768 12.8787 1.09725 12.627 0.776833 12.2734C0.493338 11.9605 0.27908 11.5913 0.148071 11.1899C0 10.7362 0 10.229 0 9.21445V6.78555C0 5.77102 0 5.26376 0.148071 4.81011C0.27908 4.40873 0.493338 4.03952 0.776833 3.72664C1.09725 3.373 1.53768 3.12133 2.41853 2.61798L4.61853 1.36084Z" fill="#20376D"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="quality__container">
                <div class="quality grid-12">
                    <div class="quality__title h3"><?php the_field('quality_title'); ?></div>
                    <div class="quality__inner grid-12">
                        <div class="quality__information">
                            <div class="quality__description p1"><?php the_field('quality_description'); ?></div>
                            <a href="#" class="button-polygon">
                                <span class="button-polygon__title p1">Перейти в каталог продукции</span>
                                <span class="button-polygon__icon" style="background-image: url('/wp-content/uploads/2025/07/Polygon-1.svg')">
                                <span class="button-polygon__icon__inner">
                                    <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 6L14 6M14 6L10 2M14 6L10 10" stroke="#E9E9E9"/>
                                    </svg>
                                    <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 6L14 6M14 6L10 2M14 6L10 10" stroke="#E9E9E9"/>
                                    </svg>
                                </span>
                            </span>
                            </a>
                        </div>
                        <div class="quality__wrapper">
                            <div class="quality__ruler">
                                <svg width="99" height="666" viewBox="0 0 99 666" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="80" y1="8.5" y2="8.5" stroke="#20376D"/>
                                    <line x1="80" y1="339.5" y2="339.5" stroke="#20376D"/>
                                    <line x1="80" y1="658.5" y2="658.5" stroke="#20376D"/>
                                    <line opacity="0.2" y1="40.5" x2="40" y2="40.5" stroke="#20376D"/>
                                    <line opacity="0.2" y1="371.5" x2="40" y2="371.5" stroke="#20376D"/>
                                    <line opacity="0.2" y1="172.5" x2="40" y2="172.5" stroke="#20376D"/>
                                    <line opacity="0.2" y1="503.5" x2="40" y2="503.5" stroke="#20376D"/>
                                    <line opacity="0.2" y1="73.5" x2="40" y2="73.5" stroke="#20376D"/>
                                    <line opacity="0.2" y1="404.5" x2="40" y2="404.5" stroke="#20376D"/>
                                    <line opacity="0.2" y1="205.5" x2="40" y2="205.5" stroke="#20376D"/>
                                    <line opacity="0.2" y1="536.5" x2="40" y2="536.5" stroke="#20376D"/>
                                    <line opacity="0.2" y1="106.5" x2="40" y2="106.5" stroke="#20376D"/>
                                    <line opacity="0.2" y1="437.5" x2="40" y2="437.5" stroke="#20376D"/>
                                    <line opacity="0.2" y1="238.5" x2="40" y2="238.5" stroke="#20376D"/>
                                    <line opacity="0.2" y1="569.5" x2="40" y2="569.5" stroke="#20376D"/>
                                    <line opacity="0.2" y1="139.5" x2="40" y2="139.5" stroke="#20376D"/>
                                    <line opacity="0.2" y1="470.5" x2="40" y2="470.5" stroke="#20376D"/>
                                    <line opacity="0.2" y1="271.5" x2="40" y2="271.5" stroke="#20376D"/>
                                    <line opacity="0.2" y1="602.5" x2="40" y2="602.5" stroke="#20376D"/>
                                    <line opacity="0.2" y1="304.5" x2="40" y2="304.5" stroke="#20376D"/>
                                    <line opacity="0.2" y1="635.5" x2="40" y2="635.5" stroke="#20376D"/>
                                    <line x1="0.5" y1="8" x2="0.499972" y2="658" stroke="#20376D"/>
                                    <path class="quality__ruler__item active" d="M91.4844 1.00879C91.8243 0.937177 92.1757 0.937177 92.5156 1.00879C92.8815 1.0859 93.2369 1.28243 94.1338 1.79492L96.333 3.05176C97.2433 3.57193 97.5982 3.7818 97.8525 4.0625C98.0887 4.32316 98.2678 4.63048 98.377 4.96484C98.4945 5.32489 98.5 5.73701 98.5 6.78516V9.21484C98.5 10.263 98.4945 10.6751 98.377 11.0352C98.2678 11.3695 98.0887 11.6768 97.8525 11.9375C97.5982 12.2182 97.2433 12.4281 96.333 12.9482L94.1338 14.2051C93.2369 14.7176 92.8815 14.9141 92.5156 14.9912C92.1757 15.0628 91.8243 15.0628 91.4844 14.9912C91.1185 14.9141 90.7631 14.7176 89.8662 14.2051L87.667 12.9482C86.7567 12.4281 86.4018 12.2182 86.1475 11.9375C85.9113 11.6768 85.7322 11.3695 85.623 11.0352C85.5055 10.6751 85.5 10.263 85.5 9.21484V6.78516C85.5 5.73701 85.5055 5.32489 85.623 4.96484C85.7322 4.63048 85.9113 4.32316 86.1475 4.0625C86.4018 3.7818 86.7567 3.57193 87.667 3.05176L89.8662 1.79492C90.7631 1.28243 91.1185 1.0859 91.4844 1.00879Z"/>
                                    <path class="quality__ruler__item" d="M91.4844 332.009C91.8243 331.937 92.1757 331.937 92.5156 332.009C92.8815 332.086 93.2369 332.282 94.1338 332.795L96.333 334.052C97.2433 334.572 97.5982 334.782 97.8525 335.062C98.0887 335.323 98.2678 335.63 98.377 335.965C98.4945 336.325 98.5 336.737 98.5 337.785V340.215C98.5 341.263 98.4945 341.675 98.377 342.035C98.2678 342.37 98.0887 342.677 97.8525 342.938C97.5982 343.218 97.2433 343.428 96.333 343.948L94.1338 345.205C93.2369 345.718 92.8815 345.914 92.5156 345.991C92.1757 346.063 91.8243 346.063 91.4844 345.991C91.1185 345.914 90.7631 345.718 89.8662 345.205L87.667 343.948C86.7567 343.428 86.4018 343.218 86.1475 342.938C85.9113 342.677 85.7322 342.37 85.623 342.035C85.5055 341.675 85.5 341.263 85.5 340.215V337.785C85.5 336.737 85.5055 336.325 85.623 335.965C85.7322 335.63 85.9113 335.323 86.1475 335.062C86.4018 334.782 86.7567 334.572 87.667 334.052L89.8662 332.795C90.7631 332.282 91.1185 332.086 91.4844 332.009Z"/>
                                    <path class="quality__ruler__item" d="M91.4844 651.009C91.8243 650.937 92.1757 650.937 92.5156 651.009C92.8815 651.086 93.2369 651.282 94.1338 651.795L96.333 653.052C97.2433 653.572 97.5982 653.782 97.8525 654.062C98.0887 654.323 98.2678 654.63 98.377 654.965C98.4945 655.325 98.5 655.737 98.5 656.785V659.215C98.5 660.263 98.4945 660.675 98.377 661.035C98.2678 661.37 98.0887 661.677 97.8525 661.938C97.5982 662.218 97.2433 662.428 96.333 662.948L94.1338 664.205C93.2369 664.718 92.8815 664.914 92.5156 664.991C92.1757 665.063 91.8243 665.063 91.4844 664.991C91.1185 664.914 90.7631 664.718 89.8662 664.205L87.667 662.948C86.7567 662.428 86.4018 662.218 86.1475 661.938C85.9113 661.677 85.7322 661.37 85.623 661.035C85.5055 660.675 85.5 660.263 85.5 659.215V656.785C85.5 655.737 85.5055 655.325 85.623 654.965C85.7322 654.63 85.9113 654.323 86.1475 654.062C86.4018 653.782 86.7567 653.572 87.667 653.052L89.8662 651.795C90.7631 651.282 91.1185 651.086 91.4844 651.009Z"/>
                                </svg>
                            </div>
                            <div class="quality__list">
                                <?php
                                while ( have_rows('repeater_quality') ) : the_row();
                                    ?>
                                    <div class="quality__item">
                                        <div class="quality__item__inner">
                                            <h5 class="quality__item__title h5"><?php the_sub_field('title'); ?></h5>
                                            <div class="quality__item__icon" data-json="<?php the_sub_field('file'); ?>"></div>
                                        </div>
                                        <p class="quality__item__description p1"><?php the_sub_field('description'); ?></p>
                                    </div>
                                <?php
                                endwhile;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="delivery">
                <div class="delivery__title h1"><?php the_field('delivery_title'); ?></div>
                <p class="delivery__description p1"><?php the_field('delivery_description'); ?></p>
                <div class="delivery__inner">
                    <img src="<?php the_field('delivery_image'); ?>" alt="image" class="delivery__image" loading="lazy">
                    <div class="delivery__list grid-12">
                        <?php
                            while ( have_rows('repeater_delivery') ) : the_row();
                            ?>
                                <div class="delivery__item">
                                    <h4 class="delivery__item__title h4"><?php the_sub_field('title'); ?></h4>
                                    <div class="delivery__item__inner">
                                        <p class="delivery__item__description p1"><?php the_sub_field('description'); ?></p>
                                        <svg class="delivery__item__icon" width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.61853 1.36084C5.48656 0.864826 5.92057 0.61682 6.38149 0.519704C6.78935 0.43377 7.21065 0.43377 7.61851 0.519704C8.07943 0.61682 8.51345 0.864826 9.38147 1.36084L11.5815 2.61798C12.4623 3.12133 12.9027 3.373 13.2232 3.72664C13.5067 4.03952 13.7209 4.40873 13.8519 4.81011C14 5.26376 14 5.77102 14 6.78555V9.21445C14 10.229 14 10.7362 13.8519 11.1899C13.7209 11.5913 13.5067 11.9605 13.2232 12.2734C12.9027 12.627 12.4623 12.8787 11.5815 13.382L9.38147 14.6392C8.51345 15.1352 8.07943 15.3832 7.61851 15.4803C7.21065 15.5662 6.78935 15.5662 6.38149 15.4803C5.92057 15.3832 5.48656 15.1352 4.61853 14.6392L2.41853 13.382C1.53768 12.8787 1.09725 12.627 0.776833 12.2734C0.493338 11.9605 0.27908 11.5913 0.148071 11.1899C0 10.7362 0 10.229 0 9.21445V6.78555C0 5.77102 0 5.26376 0.148071 4.81011C0.27908 4.40873 0.493338 4.03952 0.776833 3.72664C1.09725 3.373 1.53768 3.12133 2.41853 2.61798L4.61853 1.36084Z" fill="#20376D"/>
                                        </svg>
                                    </div>
                                </div>
                            <?php
                            endwhile;
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="industry container">
            <p class="industry__description p1">Для разработки и создания продукции НПП «ПОЛИХИМ» использует собственные лабораторию и производство, которые оснащены всем  необходимым для оборудованием.</p>
            <svg class="industry__icon _lt" width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.61853 1.36084C5.48656 0.864826 5.92057 0.61682 6.38149 0.519704C6.78935 0.43377 7.21065 0.43377 7.61851 0.519704C8.07943 0.61682 8.51345 0.864826 9.38147 1.36084L11.5815 2.61798C12.4623 3.12133 12.9027 3.373 13.2232 3.72664C13.5067 4.03952 13.7209 4.40873 13.8519 4.81011C14 5.26376 14 5.77102 14 6.78555V9.21445C14 10.229 14 10.7362 13.8519 11.1899C13.7209 11.5913 13.5067 11.9605 13.2232 12.2734C12.9027 12.627 12.4623 12.8787 11.5815 13.382L9.38147 14.6392C8.51345 15.1352 8.07943 15.3832 7.61851 15.4803C7.21065 15.5662 6.78935 15.5662 6.38149 15.4803C5.92057 15.3832 5.48656 15.1352 4.61853 14.6392L2.41853 13.382C1.53768 12.8787 1.09725 12.627 0.776833 12.2734C0.493338 11.9605 0.27908 11.5913 0.148071 11.1899C0 10.7362 0 10.229 0 9.21445V6.78555C0 5.77102 0 5.26376 0.148071 4.81011C0.27908 4.40873 0.493338 4.03952 0.776833 3.72664C1.09725 3.373 1.53768 3.12133 2.41853 2.61798L4.61853 1.36084Z" fill="white"/>
            </svg>
            <svg class="industry__icon _rt" width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.61853 1.36084C5.48656 0.864826 5.92057 0.61682 6.38149 0.519704C6.78935 0.43377 7.21065 0.43377 7.61851 0.519704C8.07943 0.61682 8.51345 0.864826 9.38147 1.36084L11.5815 2.61798C12.4623 3.12133 12.9027 3.373 13.2232 3.72664C13.5067 4.03952 13.7209 4.40873 13.8519 4.81011C14 5.26376 14 5.77102 14 6.78555V9.21445C14 10.229 14 10.7362 13.8519 11.1899C13.7209 11.5913 13.5067 11.9605 13.2232 12.2734C12.9027 12.627 12.4623 12.8787 11.5815 13.382L9.38147 14.6392C8.51345 15.1352 8.07943 15.3832 7.61851 15.4803C7.21065 15.5662 6.78935 15.5662 6.38149 15.4803C5.92057 15.3832 5.48656 15.1352 4.61853 14.6392L2.41853 13.382C1.53768 12.8787 1.09725 12.627 0.776833 12.2734C0.493338 11.9605 0.27908 11.5913 0.148071 11.1899C0 10.7362 0 10.229 0 9.21445V6.78555C0 5.77102 0 5.26376 0.148071 4.81011C0.27908 4.40873 0.493338 4.03952 0.776833 3.72664C1.09725 3.373 1.53768 3.12133 2.41853 2.61798L4.61853 1.36084Z" fill="white"/>
            </svg>
            <svg class="industry__icon _rb" width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.61853 1.36084C5.48656 0.864826 5.92057 0.61682 6.38149 0.519704C6.78935 0.43377 7.21065 0.43377 7.61851 0.519704C8.07943 0.61682 8.51345 0.864826 9.38147 1.36084L11.5815 2.61798C12.4623 3.12133 12.9027 3.373 13.2232 3.72664C13.5067 4.03952 13.7209 4.40873 13.8519 4.81011C14 5.26376 14 5.77102 14 6.78555V9.21445C14 10.229 14 10.7362 13.8519 11.1899C13.7209 11.5913 13.5067 11.9605 13.2232 12.2734C12.9027 12.627 12.4623 12.8787 11.5815 13.382L9.38147 14.6392C8.51345 15.1352 8.07943 15.3832 7.61851 15.4803C7.21065 15.5662 6.78935 15.5662 6.38149 15.4803C5.92057 15.3832 5.48656 15.1352 4.61853 14.6392L2.41853 13.382C1.53768 12.8787 1.09725 12.627 0.776833 12.2734C0.493338 11.9605 0.27908 11.5913 0.148071 11.1899C0 10.7362 0 10.229 0 9.21445V6.78555C0 5.77102 0 5.26376 0.148071 4.81011C0.27908 4.40873 0.493338 4.03952 0.776833 3.72664C1.09725 3.373 1.53768 3.12133 2.41853 2.61798L4.61853 1.36084Z" fill="white"/>
            </svg>
            <svg class="industry__icon _lb" width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.61853 1.36084C5.48656 0.864826 5.92057 0.61682 6.38149 0.519704C6.78935 0.43377 7.21065 0.43377 7.61851 0.519704C8.07943 0.61682 8.51345 0.864826 9.38147 1.36084L11.5815 2.61798C12.4623 3.12133 12.9027 3.373 13.2232 3.72664C13.5067 4.03952 13.7209 4.40873 13.8519 4.81011C14 5.26376 14 5.77102 14 6.78555V9.21445C14 10.229 14 10.7362 13.8519 11.1899C13.7209 11.5913 13.5067 11.9605 13.2232 12.2734C12.9027 12.627 12.4623 12.8787 11.5815 13.382L9.38147 14.6392C8.51345 15.1352 8.07943 15.3832 7.61851 15.4803C7.21065 15.5662 6.78935 15.5662 6.38149 15.4803C5.92057 15.3832 5.48656 15.1352 4.61853 14.6392L2.41853 13.382C1.53768 12.8787 1.09725 12.627 0.776833 12.2734C0.493338 11.9605 0.27908 11.5913 0.148071 11.1899C0 10.7362 0 10.229 0 9.21445V6.78555C0 5.77102 0 5.26376 0.148071 4.81011C0.27908 4.40873 0.493338 4.03952 0.776833 3.72664C1.09725 3.373 1.53768 3.12133 2.41853 2.61798L4.61853 1.36084Z" fill="white"/>
            </svg>
        </div>
        <div class="industry__list">
            <div class="industry__item">
                <div class="industry__item__content">
                    <h3 class="industry__item__content__title h3">Лаборатория</h3>
                    <p class="industry__item__content__description p1">Лаборатория ООО «НПП «ПОЛИХИМ» – инновации и качество под контролем экспертов</p>
                </div>
                <img src="" alt="" class="industry__item__image" loading="lazy">
                <a href="#" class="button-long _blue">
                    <span class="button-long__inner">
                        <span class="button-long__title p2">Узнать подробнее</span>
                        <span class="button-long__title p2">Узнать подробнее</span>
                    </span>
                </a>
            </div>
            <div class="industry__item">
                <div class="industry__item__content">
                    <h3 class="industry__item__content__title h3">Лаборатория</h3>
                    <p class="industry__item__content__description p1">Мы осуществляем полный цикл производства смазочно-охлаждающих жидкостей и технологических составов на современном предприятии в России.</p>
                </div>
                <img src="" alt="" class="industry__item__image" loading="lazy">
                <a href="#" class="button-long _blue">
                    <span class="button-long__inner">
                        <span class="button-long__title p2">Узнать подробнее</span>
                        <span class="button-long__title p2">Узнать подробнее</span>
                    </span>
                </a>
            </div>
        </div>
        <?php    $original_id = 148;
        $current_lang = function_exists('pll_current_language') ? pll_current_language() : apply_filters('wpml_current_language', null);

        if (function_exists('pll_get_post')) {
            $translated_id = pll_get_post($original_id, $current_lang);
        } elseif (function_exists('wpml_object_id')) {
            $translated_id = wpml_object_id($original_id, 'page', true, $current_lang);
        } else {
            $translated_id = $original_id;
        }

        $content_post = get_post($translated_id);
        ?>
        <div class="info-center container">
            <div class="info-center__inner grid-12">
                <div class="info-center__paragraph p1">
                    <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.61853 1.36084C5.48656 0.864826 5.92057 0.61682 6.38149 0.519704C6.78935 0.43377 7.21065 0.43377 7.61851 0.519704C8.07943 0.61682 8.51345 0.864826 9.38147 1.36084L11.5815 2.61798C12.4623 3.12133 12.9027 3.373 13.2232 3.72664C13.5067 4.03952 13.7209 4.40873 13.8519 4.81011C14 5.26376 14 5.77102 14 6.78555V9.21445C14 10.229 14 10.7362 13.8519 11.1899C13.7209 11.5913 13.5067 11.9605 13.2232 12.2734C12.9027 12.627 12.4623 12.8787 11.5815 13.382L9.38147 14.6392C8.51345 15.1352 8.07943 15.3832 7.61851 15.4803C7.21065 15.5662 6.78935 15.5662 6.38149 15.4803C5.92057 15.3832 5.48656 15.1352 4.61853 14.6392L2.41853 13.382C1.53768 12.8787 1.09725 12.627 0.776833 12.2734C0.493338 11.9605 0.27908 11.5913 0.148071 11.1899C0 10.7362 0 10.229 0 9.21445V6.78555C0 5.77102 0 5.26376 0.148071 4.81011C0.27908 4.40873 0.493338 4.03952 0.776833 3.72664C1.09725 3.373 1.53768 3.12133 2.41853 2.61798L4.61853 1.36084Z" fill="#20376D"/>
                    </svg>
                    <?= apply_filters('the_title', $content_post->post_title, $content_post->ID); ?>
                </div>
                <div class="info-center__title h1"><?= apply_filters('the_content', $content_post->post_content); ?></div>
            </div>
            <?php
            $posts = get_posts([
                'post_type'      => 'info-center',
                'numberposts'    => 6,
                'post_status'    => 'publish',
                'orderby'        => 'date',
                'order'          => 'DESC',
            ]);
            ?>
            <div class="info-center__list">
                <?php foreach ($posts as $post) :
                    setup_postdata($post); ?>
                    <a href="<?php the_permalink(); ?>" class="info-center__item grid-12">
                        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="info-center__item__image" loading="lazy">
                        <span class="info-center__item__date">
                            <span class="info-center__item__date__number h1"><?= get_the_date('d'); ?></span>
                            <span class="info-center__item__date__another p1"><?= get_the_date('F Y'); ?></span>
                        </span>
                        <span class="info-center__item__inner">
                            <h4 class="info-center__item__title"><?php the_title(); ?></h4>
                            <span class="info-center__item__description">
                                <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.61853 1.36084C5.48656 0.864826 5.92057 0.61682 6.38149 0.519704C6.78935 0.43377 7.21065 0.43377 7.61851 0.519704C8.07943 0.61682 8.51345 0.864826 9.38147 1.36084L11.5815 2.61798C12.4623 3.12133 12.9027 3.373 13.2232 3.72664C13.5067 4.03952 13.7209 4.40873 13.8519 4.81011C14 5.26376 14 5.77102 14 6.78555V9.21445C14 10.229 14 10.7362 13.8519 11.1899C13.7209 11.5913 13.5067 11.9605 13.2232 12.2734C12.9027 12.627 12.4623 12.8787 11.5815 13.382L9.38147 14.6392C8.51345 15.1352 8.07943 15.3832 7.61851 15.4803C7.21065 15.5662 6.78935 15.5662 6.38149 15.4803C5.92057 15.3832 5.48656 15.1352 4.61853 14.6392L2.41853 13.382C1.53768 12.8787 1.09725 12.627 0.776833 12.2734C0.493338 11.9605 0.27908 11.5913 0.148071 11.1899C0 10.7362 0 10.229 0 9.21445V6.78555C0 5.77102 0 5.26376 0.148071 4.81011C0.27908 4.40873 0.493338 4.03952 0.776833 3.72664C1.09725 3.373 1.53768 3.12133 2.41853 2.61798L4.61853 1.36084Z" fill="#20376D"/>
                                </svg>
                                <p class="p1"><?php the_field('small_description'); ?></p>
                            </span>
                        </span>
                    </a>
                <?php endforeach;
                wp_reset_postdata(); ?>
            </div>
            <a href="<?= pll_current_language(); ?>/info-center/" class="button-polygon">
                <span class="button-polygon__title p1">Смотреть все новости</span>
                <span class="button-polygon__icon" style="background-image: url('/wp-content/uploads/2025/07/Polygon-1.svg')">
                    <span class="button-polygon__icon__inner">
                        <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 6L14 6M14 6L10 2M14 6L10 10" stroke="#E9E9E9"></path>
                        </svg>
                        <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 6L14 6M14 6L10 2M14 6L10 10" stroke="#E9E9E9"></path>
                        </svg>
                    </span>
                </span>
            </a>
        </div>
    </main>
<?php
get_footer();
