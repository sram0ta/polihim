<?php
/*
Template Name: О компании
*/

get_header();
?>
    <main class="main page-about">
        <div class="container container-main__inner">
            <div class="upper-information grid-12">
                <?php
                $home_id = get_option('page_on_front');
                if (function_exists('pll_get_post')) {
                    $home_id = pll_get_post($home_id);
                }
                ?>
                <div class="breadcrumbs">
                    <a href="<?= get_permalink($home_id); ?>" class="breadcrumbs__item p1"><?= get_the_title($home_id); ?></a>
                    <?php
                    global $post;
                    if ($post->post_parent) {
                        $parent_id = $post->post_parent;

                        if (function_exists('pll_get_post')) {
                            $parent_id = pll_get_post($parent_id);
                        }
                        ?>
                        <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.61853 1.36084C5.48656 0.864826 5.92057 0.61682 6.38149 0.519704C6.78935 0.43377 7.21065 0.43377 7.61851 0.519704C8.07943 0.61682 8.51345 0.864826 9.38147 1.36084L11.5815 2.61798C12.4623 3.12133 12.9027 3.373 13.2232 3.72664C13.5067 4.03952 13.7209 4.40873 13.8519 4.81011C14 5.26376 14 5.77102 14 6.78555V9.21445C14 10.229 14 10.7362 13.8519 11.1899C13.7209 11.5913 13.5067 11.9605 13.2232 12.2734C12.9027 12.627 12.4623 12.8787 11.5815 13.382L9.38147 14.6392C8.51345 15.1352 8.07943 15.3832 7.61851 15.4803C7.21065 15.5662 6.78935 15.5662 6.38149 15.4803C5.92057 15.3832 5.48656 15.1352 4.61853 14.6392L2.41853 13.382C1.53768 12.8787 1.09725 12.627 0.776833 12.2734C0.493338 11.9605 0.27908 11.5913 0.148071 11.1899C0 10.7362 0 10.229 0 9.21445V6.78555C0 5.77102 0 5.26376 0.148071 4.81011C0.27908 4.40873 0.493338 4.03952 0.776833 3.72664C1.09725 3.373 1.53768 3.12133 2.41853 2.61798L4.61853 1.36084Z" fill="#20376D"/>
                        </svg>
                        <a href="<?= get_permalink($parent_id) ?>" class="breadcrumbs__item p1"><?= get_the_title($parent_id) ?></a>
                        <?php
                    }
                    ?>
                    <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.61853 1.36084C5.48656 0.864826 5.92057 0.61682 6.38149 0.519704C6.78935 0.43377 7.21065 0.43377 7.61851 0.519704C8.07943 0.61682 8.51345 0.864826 9.38147 1.36084L11.5815 2.61798C12.4623 3.12133 12.9027 3.373 13.2232 3.72664C13.5067 4.03952 13.7209 4.40873 13.8519 4.81011C14 5.26376 14 5.77102 14 6.78555V9.21445C14 10.229 14 10.7362 13.8519 11.1899C13.7209 11.5913 13.5067 11.9605 13.2232 12.2734C12.9027 12.627 12.4623 12.8787 11.5815 13.382L9.38147 14.6392C8.51345 15.1352 8.07943 15.3832 7.61851 15.4803C7.21065 15.5662 6.78935 15.5662 6.38149 15.4803C5.92057 15.3832 5.48656 15.1352 4.61853 14.6392L2.41853 13.382C1.53768 12.8787 1.09725 12.627 0.776833 12.2734C0.493338 11.9605 0.27908 11.5913 0.148071 11.1899C0 10.7362 0 10.229 0 9.21445V6.78555C0 5.77102 0 5.26376 0.148071 4.81011C0.27908 4.40873 0.493338 4.03952 0.776833 3.72664C1.09725 3.373 1.53768 3.12133 2.41853 2.61798L4.61853 1.36084Z" fill="#20376D"/>
                    </svg>
                    <div class="breadcrumbs__item active p1"><?php the_title(); ?></div>
                </div>
                <div class="upper-information__title h1"><?php the_field('page-title'); ?></div>
                <p class="upper-information__description p1"><?php the_field('page-description'); ?></p>
                <div class="upper-information__number__inner">
                    <p class="upper-information__number p3"><?php the_field('page-number'); ?></p>
                    <p class="upper-information__number-description p1"><?php the_field('page-number_description'); ?></p>
                </div>
                <div class="upper-information__link">
                    <a href="/<?= pll_current_language(); ?>/products/#catalog" class="button-polygon">
                        <span class="button-polygon__title p1"><?= pll__('Перейти в каталог продукции'); ?></span>
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
        <div class="upper-information__image" style="background-image: url('<?php the_field('page-image'); ?>')"></div>
        <div class="container container-main__inner _no-overflow">
            <div class="cycle grid-12">
                <img src="<?= get_field('cycle_image')['url']; ?>" alt="<?= get_field('cycle_image')['alt']; ?>" class="cycle__image" loading="lazy">
                <div class="cycle__content">
                    <div class="cycle__content__title h2"><?php the_field('cycle_title'); ?></div>
                    <div class="cycle__content__description p1"><?php the_field('cycle_description'); ?></div>
                </div>
            </div>
            <div class="achievement grid-12">
                <div class="achievement__title h3"><?php the_field('achievement_title'); ?></div>
                <div class="achievement__image-list">
                    <?php
                    while ( have_rows('repeater_achievement') ) : the_row();
                        ?>
                        <svg class="achievement__image" width="99" height="316" viewBox="0 0 99 316" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="80" y1="8.5" y2="8.5" stroke="#20376D"/>
                            <line x1="80" y1="308.5" y2="308.5" stroke="#20376D"/>
                            <line opacity="0.4" y1="37.5" x2="40" y2="37.5" stroke="#20376D"/>
                            <line opacity="0.4" y1="157.5" x2="40" y2="157.5" stroke="#20376D"/>
                            <line opacity="0.4" y1="67.5" x2="40" y2="67.5" stroke="#20376D"/>
                            <line opacity="0.4" y1="187.5" x2="40" y2="187.5" stroke="#20376D"/>
                            <line opacity="0.4" y1="97.5" x2="40" y2="97.5" stroke="#20376D"/>
                            <line opacity="0.4" y1="217.5" x2="40" y2="217.5" stroke="#20376D"/>
                            <line opacity="0.4" y1="127.5" x2="40" y2="127.5" stroke="#20376D"/>
                            <line opacity="0.4" y1="247.5" x2="40" y2="247.5" stroke="#20376D"/>
                            <line opacity="0.4" y1="277.5" x2="40" y2="277.5" stroke="#20376D"/>
                            <path d="M91.4844 1.00879C91.8243 0.937177 92.1757 0.937177 92.5156 1.00879C92.8815 1.0859 93.2369 1.28243 94.1338 1.79492L96.333 3.05176C97.2433 3.57193 97.5982 3.7818 97.8525 4.0625C98.0887 4.32316 98.2678 4.63048 98.377 4.96484C98.4945 5.32489 98.5 5.73701 98.5 6.78516V9.21484C98.5 10.263 98.4945 10.6751 98.377 11.0352C98.2678 11.3695 98.0887 11.6768 97.8525 11.9375C97.5982 12.2182 97.2433 12.4281 96.333 12.9482L94.1338 14.2051C93.2369 14.7176 92.8815 14.9141 92.5156 14.9912C92.1757 15.0628 91.8243 15.0628 91.4844 14.9912C91.1185 14.9141 90.7631 14.7176 89.8662 14.2051L87.667 12.9482C86.7567 12.4281 86.4018 12.2182 86.1475 11.9375C85.9113 11.6768 85.7322 11.3695 85.623 11.0352C85.5055 10.6751 85.5 10.263 85.5 9.21484V6.78516C85.5 5.73701 85.5055 5.32489 85.623 4.96484C85.7322 4.63048 85.9113 4.32316 86.1475 4.0625C86.4018 3.7818 86.7567 3.57193 87.667 3.05176L89.8662 1.79492C90.7631 1.28243 91.1185 1.0859 91.4844 1.00879Z" stroke="#20376D"/>
                            <path d="M91.4844 301.009C91.8243 300.937 92.1757 300.937 92.5156 301.009C92.8815 301.086 93.2369 301.282 94.1338 301.795L96.333 303.052C97.2433 303.572 97.5982 303.782 97.8525 304.062C98.0887 304.323 98.2678 304.63 98.377 304.965C98.4945 305.325 98.5 305.737 98.5 306.785V309.215C98.5 310.263 98.4945 310.675 98.377 311.035C98.2678 311.37 98.0887 311.677 97.8525 311.938C97.5982 312.218 97.2433 312.428 96.333 312.948L94.1338 314.205C93.2369 314.718 92.8815 314.914 92.5156 314.991C92.1757 315.063 91.8243 315.063 91.4844 314.991C91.1185 314.914 90.7631 314.718 89.8662 314.205L87.667 312.948C86.7567 312.428 86.4018 312.218 86.1475 311.938C85.9113 311.677 85.7322 311.37 85.623 311.035C85.5055 310.675 85.5 310.263 85.5 309.215V306.785C85.5 305.737 85.5055 305.325 85.623 304.965C85.7322 304.63 85.9113 304.323 86.1475 304.062C86.4018 303.782 86.7567 303.572 87.667 303.052L89.8662 301.795C90.7631 301.282 91.1185 301.086 91.4844 301.009Z" stroke="#20376D"/>
                            <line x1="0.5" y1="8" x2="0.5" y2="309" stroke="#20376D"/>
                        </svg>
                    <?php
                    endwhile;
                    ?>
                </div>
                <div class="achievement__content__inner">
                    <?php
                        while ( have_rows('repeater_achievement') ) : the_row();
                        ?>
                        <div class="achievement__content">
                            <div class="achievement__content__animate" data-json="<?php the_sub_field('image'); ?>"></div>
                            <div class="achievement__content__information">
                                <h4 class="achievement__content__information__title h4"><?php the_sub_field('title'); ?></h4>
                                <p class="achievement__content__information__description p1"><?php the_sub_field('description'); ?></p>
                                <svg class="achievement__content__information__icon" width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
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
        <div class="history container">
            <svg class="history__icon" width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.61853 1.36084C5.48656 0.864826 5.92057 0.61682 6.38149 0.519704C6.78935 0.43377 7.21065 0.43377 7.61851 0.519704C8.07943 0.61682 8.51345 0.864826 9.38147 1.36084L11.5815 2.61798C12.4623 3.12133 12.9027 3.373 13.2232 3.72664C13.5067 4.03952 13.7209 4.40873 13.8519 4.81011C14 5.26376 14 5.77102 14 6.78555V9.21445C14 10.229 14 10.7362 13.8519 11.1899C13.7209 11.5913 13.5067 11.9605 13.2232 12.2734C12.9027 12.627 12.4623 12.8787 11.5815 13.382L9.38147 14.6392C8.51345 15.1352 8.07943 15.3832 7.61851 15.4803C7.21065 15.5662 6.78935 15.5662 6.38149 15.4803C5.92057 15.3832 5.48656 15.1352 4.61853 14.6392L2.41853 13.382C1.53768 12.8787 1.09725 12.627 0.776833 12.2734C0.493338 11.9605 0.27908 11.5913 0.148071 11.1899C0 10.7362 0 10.229 0 9.21445V6.78555C0 5.77102 0 5.26376 0.148071 4.81011C0.27908 4.40873 0.493338 4.03952 0.776833 3.72664C1.09725 3.373 1.53768 3.12133 2.41853 2.61798L4.61853 1.36084Z" fill="#F05723"/>
            </svg>
            <div class="history__navigation history__navigation_pc">
                <button class="navigation__button _white _prev">
                    <span class="navigation__button__border">
                         <svg width="100" height="109" viewBox="0 0 100 109" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M45.2979 2.12988C48.3981 1.47319 51.6019 1.47319 54.7021 2.12988C58.1691 2.86431 61.4529 4.73944 68.3955 8.73145L80.4912 15.6855C87.4746 19.701 90.7664 21.6076 93.1533 24.252C95.2875 26.6164 96.8999 29.4039 97.8857 32.4326C98.9883 35.8199 99 39.6234 99 47.6787V61.3213C99 69.3766 98.9883 73.1801 97.8857 76.5674C96.8999 79.5961 95.2875 82.3836 93.1533 84.748C90.7664 87.3924 87.4747 89.299 80.4912 93.3145L68.3955 100.269C61.4529 104.261 58.1691 106.136 54.7021 106.87C51.6019 107.527 48.3981 107.527 45.2979 106.87C41.8309 106.136 38.5471 104.261 31.6045 100.269L19.5088 93.3145C12.5254 89.299 9.23359 87.3924 6.84668 84.748C4.71251 82.3836 3.10012 79.5961 2.11426 76.5674C1.01172 73.1801 1 69.3766 1 61.3213V47.6787C1 39.6234 1.01172 35.8199 2.11426 32.4326C3.10012 29.4039 4.71251 26.6164 6.84668 24.252C9.23359 21.6076 12.5253 19.701 19.5088 15.6855L31.6045 8.73145C38.5471 4.73944 41.8309 2.86431 45.2979 2.12988Z" stroke="#F9F9F9" stroke-width="2"/>
                        </svg>
                    </span>
                    <span class="navigation__button__inner">
                        <svg width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 6L2 6M2 6L7.23077 1M2 6L7.23077 11" stroke="#F9F9F9" stroke-width="2"/>
                        </svg>
                        <svg width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 6L2 6M2 6L7.23077 1M2 6L7.23077 11" stroke="#F9F9F9" stroke-width="2"/>
                        </svg>
                    </span>
                </button>
                <button class="navigation__button _white _next">
                    <span class="navigation__button__border">
                         <svg width="100" height="109" viewBox="0 0 100 109" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M45.2979 2.12988C48.3981 1.47319 51.6019 1.47319 54.7021 2.12988C58.1691 2.86431 61.4529 4.73944 68.3955 8.73145L80.4912 15.6855C87.4746 19.701 90.7664 21.6076 93.1533 24.252C95.2875 26.6164 96.8999 29.4039 97.8857 32.4326C98.9883 35.8199 99 39.6234 99 47.6787V61.3213C99 69.3766 98.9883 73.1801 97.8857 76.5674C96.8999 79.5961 95.2875 82.3836 93.1533 84.748C90.7664 87.3924 87.4747 89.299 80.4912 93.3145L68.3955 100.269C61.4529 104.261 58.1691 106.136 54.7021 106.87C51.6019 107.527 48.3981 107.527 45.2979 106.87C41.8309 106.136 38.5471 104.261 31.6045 100.269L19.5088 93.3145C12.5254 89.299 9.23359 87.3924 6.84668 84.748C4.71251 82.3836 3.10012 79.5961 2.11426 76.5674C1.01172 73.1801 1 69.3766 1 61.3213V47.6787C1 39.6234 1.01172 35.8199 2.11426 32.4326C3.10012 29.4039 4.71251 26.6164 6.84668 24.252C9.23359 21.6076 12.5253 19.701 19.5088 15.6855L31.6045 8.73145C38.5471 4.73944 41.8309 2.86431 45.2979 2.12988Z" stroke="#F9F9F9" stroke-width="2"/>
                        </svg>
                    </span>
                    <span class="navigation__button__inner">
                        <svg width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 7V5H14.5L11 1.5L12.5 0L18.5 6L12.5 12L11 10.5L14.5 7H0Z" fill="#F9F9F9"/>
                        </svg>
                        <svg width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 7V5H14.5L11 1.5L12.5 0L18.5 6L12.5 12L11 10.5L14.5 7H0Z" fill="#F9F9F9"/>
                        </svg>
                    </span>
                </button>
            </div>
            <div class="history__inner">
                <?php
                $history_items = [];

                if (have_rows('repeater_history')) :
                    while (have_rows('repeater_history')) : the_row();
                        $history_items[] = [
                            'date' => get_sub_field('date'),
                            'date_description' => get_sub_field('date_description')
                        ];
                    endwhile;
                endif;
                ?>
                <div class="swiper" id="history-content">
                    <div class="swiper-wrapper">
                        <?php foreach ($history_items as $item): ?>
                            <div class="swiper-slide">
                                <div class="history__item">
                                    <div class="history__item__inner">
                                        <p class="history__item__title h1"><?php the_field('history_title') ?></p>
                                        <div class="history__item__description p1"><?php the_field('history_description') ?></div>
                                    </div>
                                    <div class="history__navigation history__navigation_mobile">
                                        <button class="navigation__button _white _prev">
                                            <span class="navigation__button__border">
                                                 <svg width="100" height="109" viewBox="0 0 100 109" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M45.2979 2.12988C48.3981 1.47319 51.6019 1.47319 54.7021 2.12988C58.1691 2.86431 61.4529 4.73944 68.3955 8.73145L80.4912 15.6855C87.4746 19.701 90.7664 21.6076 93.1533 24.252C95.2875 26.6164 96.8999 29.4039 97.8857 32.4326C98.9883 35.8199 99 39.6234 99 47.6787V61.3213C99 69.3766 98.9883 73.1801 97.8857 76.5674C96.8999 79.5961 95.2875 82.3836 93.1533 84.748C90.7664 87.3924 87.4747 89.299 80.4912 93.3145L68.3955 100.269C61.4529 104.261 58.1691 106.136 54.7021 106.87C51.6019 107.527 48.3981 107.527 45.2979 106.87C41.8309 106.136 38.5471 104.261 31.6045 100.269L19.5088 93.3145C12.5254 89.299 9.23359 87.3924 6.84668 84.748C4.71251 82.3836 3.10012 79.5961 2.11426 76.5674C1.01172 73.1801 1 69.3766 1 61.3213V47.6787C1 39.6234 1.01172 35.8199 2.11426 32.4326C3.10012 29.4039 4.71251 26.6164 6.84668 24.252C9.23359 21.6076 12.5253 19.701 19.5088 15.6855L31.6045 8.73145C38.5471 4.73944 41.8309 2.86431 45.2979 2.12988Z" stroke="#F9F9F9" stroke-width="2"/>
                                                </svg>
                                            </span>
                                            <span class="navigation__button__inner">
                                                <svg width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M19 6L2 6M2 6L7.23077 1M2 6L7.23077 11" stroke="#F9F9F9" stroke-width="2"/>
                                                </svg>
                                                <svg width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M19 6L2 6M2 6L7.23077 1M2 6L7.23077 11" stroke="#F9F9F9" stroke-width="2"/>
                                                </svg>
                                            </span>
                                        </button>
                                        <button class="navigation__button _white _next">
                                            <span class="navigation__button__border">
                                                 <svg width="100" height="109" viewBox="0 0 100 109" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M45.2979 2.12988C48.3981 1.47319 51.6019 1.47319 54.7021 2.12988C58.1691 2.86431 61.4529 4.73944 68.3955 8.73145L80.4912 15.6855C87.4746 19.701 90.7664 21.6076 93.1533 24.252C95.2875 26.6164 96.8999 29.4039 97.8857 32.4326C98.9883 35.8199 99 39.6234 99 47.6787V61.3213C99 69.3766 98.9883 73.1801 97.8857 76.5674C96.8999 79.5961 95.2875 82.3836 93.1533 84.748C90.7664 87.3924 87.4747 89.299 80.4912 93.3145L68.3955 100.269C61.4529 104.261 58.1691 106.136 54.7021 106.87C51.6019 107.527 48.3981 107.527 45.2979 106.87C41.8309 106.136 38.5471 104.261 31.6045 100.269L19.5088 93.3145C12.5254 89.299 9.23359 87.3924 6.84668 84.748C4.71251 82.3836 3.10012 79.5961 2.11426 76.5674C1.01172 73.1801 1 69.3766 1 61.3213V47.6787C1 39.6234 1.01172 35.8199 2.11426 32.4326C3.10012 29.4039 4.71251 26.6164 6.84668 24.252C9.23359 21.6076 12.5253 19.701 19.5088 15.6855L31.6045 8.73145C38.5471 4.73944 41.8309 2.86431 45.2979 2.12988Z" stroke="#F9F9F9" stroke-width="2"/>
                                                </svg>
                                            </span>
                                            <span class="navigation__button__inner">
                                                <svg width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 7V5H14.5L11 1.5L12.5 0L18.5 6L12.5 12L11 10.5L14.5 7H0Z" fill="#F9F9F9"/>
                                                </svg>
                                                <svg width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 7V5H14.5L11 1.5L12.5 0L18.5 6L12.5 12L11 10.5L14.5 7H0Z" fill="#F9F9F9"/>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                    <div class="history__item__inner">
                                        <div class="history__item__date p3"><?= $item['date']; ?></div>
                                        <div class="history__item__date-description p1"><?= $item['date_description']; ?></div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="history__ruler">
                    <div class="swiper" id="history-ruler">
                        <div class="swiper-wrapper">
                            <?php foreach ($history_items as $item): ?>
                                <div class="swiper-slide">
                                    <div class="history__ruler__date p2"><?= $item['date']; ?></div>
                                    <svg class="history__ruler__item" width="764" height="61" viewBox="0 0 764 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="0.5" y1="2.18558e-08" x2="0.499997" y2="61" stroke="white"/>
                                        <line opacity="0.2" x1="30.5" y1="31" x2="30.5" y2="61" stroke="white"/>
                                        <line opacity="0.2" x1="60.5" y1="31" x2="60.5" y2="61" stroke="white"/>
                                        <line opacity="0.2" x1="90.5" y1="31" x2="90.5" y2="61" stroke="white"/>
                                        <line opacity="0.2" x1="120.5" y1="31" x2="120.5" y2="61" stroke="white"/>
                                        <line x1="150.5" y1="11" x2="150.5" y2="61" stroke="white"/>
                                        <line opacity="0.2" x1="180.5" y1="31" x2="180.5" y2="61" stroke="white"/>
                                        <line opacity="0.2" x1="210.5" y1="31" x2="210.5" y2="61" stroke="white"/>
                                        <line opacity="0.2" x1="240.5" y1="31" x2="240.5" y2="61" stroke="white"/>
                                        <line x1="270.5" y1="11" x2="270.5" y2="61" stroke="white"/>
                                        <line opacity="0.2" x1="300.5" y1="31" x2="300.5" y2="61" stroke="white"/>
                                        <line opacity="0.2" x1="330.5" y1="31" x2="330.5" y2="61" stroke="white"/>
                                        <line opacity="0.2" x1="360.5" y1="31" x2="360.5" y2="61" stroke="white"/>
                                        <line x1="390.5" y1="11" x2="390.5" y2="61" stroke="white"/>
                                        <line opacity="0.2" x1="420.5" y1="31" x2="420.5" y2="61" stroke="white"/>
                                        <line opacity="0.2" x1="450.5" y1="31" x2="450.5" y2="61" stroke="white"/>
                                        <line opacity="0.2" x1="480.5" y1="31" x2="480.5" y2="61" stroke="white"/>
                                        <line x1="510.5" y1="11" x2="510.5" y2="61" stroke="white"/>
                                        <line opacity="0.2" x1="540.5" y1="31" x2="540.5" y2="61" stroke="white"/>
                                        <line opacity="0.2" x1="570.5" y1="31" x2="570.5" y2="61" stroke="white"/>
                                        <line opacity="0.2" x1="600.5" y1="31" x2="600.5" y2="61" stroke="white"/>
                                        <line x1="630.5" y1="11" x2="630.5" y2="61" stroke="white"/>
                                        <line opacity="0.2" x1="660.5" y1="31" x2="660.5" y2="61" stroke="white"/>
                                        <line opacity="0.2" x1="690.5" y1="31" x2="690.5" y2="61" stroke="white"/>
                                        <line opacity="0.2" x1="720.5" y1="31" x2="720.5" y2="61" stroke="white"/>
                                        <line x1="4.37114e-08" y1="60.5" x2="763" y2="60.5001" stroke="white"/>
                                        <line x1="763.5" y1="2.18558e-08" x2="763.5" y2="61" stroke="white"/>
                                    </svg>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container-main__inner _no-overflow">
            <div class="advantages grid-12">
                <div class="advantages__paragraph p1">
                    <svg class="advantages__paragraph__icon" width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.61853 1.36084C5.48656 0.864826 5.92057 0.61682 6.38149 0.519704C6.78935 0.43377 7.21065 0.43377 7.61851 0.519704C8.07943 0.61682 8.51345 0.864826 9.38147 1.36084L11.5815 2.61798C12.4623 3.12133 12.9027 3.373 13.2232 3.72664C13.5067 4.03952 13.7209 4.40873 13.8519 4.81011C14 5.26376 14 5.77102 14 6.78555V9.21445C14 10.229 14 10.7362 13.8519 11.1899C13.7209 11.5913 13.5067 11.9605 13.2232 12.2734C12.9027 12.627 12.4623 12.8787 11.5815 13.382L9.38147 14.6392C8.51345 15.1352 8.07943 15.3832 7.61851 15.4803C7.21065 15.5662 6.78935 15.5662 6.38149 15.4803C5.92057 15.3832 5.48656 15.1352 4.61853 14.6392L2.41853 13.382C1.53768 12.8787 1.09725 12.627 0.776833 12.2734C0.493338 11.9605 0.27908 11.5913 0.148071 11.1899C0 10.7362 0 10.229 0 9.21445V6.78555C0 5.77102 0 5.26376 0.148071 4.81011C0.27908 4.40873 0.493338 4.03952 0.776833 3.72664C1.09725 3.373 1.53768 3.12133 2.41853 2.61798L4.61853 1.36084Z" fill="#20376D"/>
                    </svg>
                    <?php the_field('advantages_sub_title'); ?>
                </div>
                <div class="advantages__title h2"><?php the_field('advantages_title'); ?></div>
                <div class="advantages__list">
                    <?php
                        $counter = 1;
                        while ( have_rows('repeater_advantages') ) : the_row();
                        ?>
                            <div class="advantages__item grid-12">
                                <div class="advantages__item__image__inner">
                                    <img src="<?= get_sub_field('image')['url']; ?>" alt="<?= get_sub_field('image')['alt']; ?>" class="advantages__item__image" loading="lazy">
                                </div>
                                <div class="advantages__item__content">
                                    <div class="advantages__item__content__inner">
                                        <div class="advantages__item__content__number p2"><?= sprintf('%02d', $counter); ?></div>
                                        <h3 class="advantages__item__content__title h3"><?php the_sub_field('title'); ?></h3>
                                        <p class="advantages__item__content__description p1"><?php the_sub_field('description'); ?></p>
                                    </div>
                                    <svg class="advantages__item__content__icon" width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.61853 1.36084C5.48656 0.864826 5.92057 0.61682 6.38149 0.519704C6.78935 0.43377 7.21065 0.43377 7.61851 0.519704C8.07943 0.61682 8.51345 0.864826 9.38147 1.36084L11.5815 2.61798C12.4623 3.12133 12.9027 3.373 13.2232 3.72664C13.5067 4.03952 13.7209 4.40873 13.8519 4.81011C14 5.26376 14 5.77102 14 6.78555V9.21445C14 10.229 14 10.7362 13.8519 11.1899C13.7209 11.5913 13.5067 11.9605 13.2232 12.2734C12.9027 12.627 12.4623 12.8787 11.5815 13.382L9.38147 14.6392C8.51345 15.1352 8.07943 15.3832 7.61851 15.4803C7.21065 15.5662 6.78935 15.5662 6.38149 15.4803C5.92057 15.3832 5.48656 15.1352 4.61853 14.6392L2.41853 13.382C1.53768 12.8787 1.09725 12.627 0.776833 12.2734C0.493338 11.9605 0.27908 11.5913 0.148071 11.1899C0 10.7362 0 10.229 0 9.21445V6.78555C0 5.77102 0 5.26376 0.148071 4.81011C0.27908 4.40873 0.493338 4.03952 0.776833 3.72664C1.09725 3.373 1.53768 3.12133 2.41853 2.61798L4.61853 1.36084Z" fill="#20376D"/>
                                    </svg>
                                </div>
                            </div>
                        <?php
                        $counter++;
                        endwhile;
                    ?>
                </div>
                <a href="/<?= pll_current_language(); ?>/products/#catalog" class="button-polygon">
                    <span class="button-polygon__title p1"><?= pll__('Перейти в каталог продукции'); ?></span>
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
            <div class="system grid-12">
                <img src="<?= get_field('system_image')['url']; ?>" alt="<?= get_field('system_image')['alt']; ?>" class="system__image" loading="lazy">
                <div class="system__content">
                    <div class="system__content__paragraph p1">
                        <svg class="system__content__paragraph__icon" width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.61853 1.36084C5.48656 0.864826 5.92057 0.61682 6.38149 0.519704C6.78935 0.43377 7.21065 0.43377 7.61851 0.519704C8.07943 0.61682 8.51345 0.864826 9.38147 1.36084L11.5815 2.61798C12.4623 3.12133 12.9027 3.373 13.2232 3.72664C13.5067 4.03952 13.7209 4.40873 13.8519 4.81011C14 5.26376 14 5.77102 14 6.78555V9.21445C14 10.229 14 10.7362 13.8519 11.1899C13.7209 11.5913 13.5067 11.9605 13.2232 12.2734C12.9027 12.627 12.4623 12.8787 11.5815 13.382L9.38147 14.6392C8.51345 15.1352 8.07943 15.3832 7.61851 15.4803C7.21065 15.5662 6.78935 15.5662 6.38149 15.4803C5.92057 15.3832 5.48656 15.1352 4.61853 14.6392L2.41853 13.382C1.53768 12.8787 1.09725 12.627 0.776833 12.2734C0.493338 11.9605 0.27908 11.5913 0.148071 11.1899C0 10.7362 0 10.229 0 9.21445V6.78555C0 5.77102 0 5.26376 0.148071 4.81011C0.27908 4.40873 0.493338 4.03952 0.776833 3.72664C1.09725 3.373 1.53768 3.12133 2.41853 2.61798L4.61853 1.36084Z" fill="#20376D"/>
                        </svg>
                        <?php the_field('advantages_sub_title'); ?>
                    </div>
                    <div class="system__content__title h2"><?php the_field('system_title'); ?></div>
                    <p class="system__content__description p1"><?php the_field('system_description'); ?></p>
                    <a href="/<?= pll_current_language(); ?>/products/#catalog" class="button-polygon">
                        <span class="button-polygon__title p1"><?= pll__('Перейти в каталог продукции'); ?></span>
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
            <div class="catalog">
                <div class="catalog__title h1"><?php the_field('documents_title'); ?></div>
                <div class="catalog__inner grid-12">
                    <p class="catalog__paragraph p1"><?php the_field('documents_description'); ?></p>
                    <div class="catalog__list">
                        <?php
                        while ( have_rows('repeater_documents') ) : the_row();
                            ?>
                            <a href="<?php the_sub_field('file'); ?>" class="catalog__item" download>
                                <h5 class="catalog__item__title h5"><?php the_sub_field('title'); ?></h5>
                                <div class="catalog__item__document p1"><?= pll__('Скачать PDF'); ?></div>
                            </a>
                        <?php
                        endwhile;
                        ?>
                    </div>
                </div>
            </div>
            <div class="team grid-12">
                <div class="team__title h1"><?php the_field('team_title'); ?></div>
                <p class="team__description p1"><?php the_field('team_description'); ?></p>
                <div class="team__list grid-12">
                    <?php
                    $my_posts = get_posts( array(
                        'numberposts' => -1,
                        'post_type'   => 'employees',
                        'suppress_filters' => true,
                    ) );

                    foreach( $my_posts as $post ){
                        setup_postdata( $post );
                        ?>
                        <div class="team__item">
                            <img src="<?= get_field('image')['url']; ?>" alt="<?= get_field('image')['alt']; ?>" class="team__item__image" loading="lazy">
                            <div class="team__item__title h5"><?php the_title(); ?></div>
                            <div class="team__item__job p1"><?php the_field('job'); ?></div>
                        </div>
                        <?php
                    } wp_reset_postdata();
                    ?>
                </div>
            </div>
            <div class="clients grid-12">
                <div class="clients__paragraph p1">
                    <svg class="clients__paragraph__icon" width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.11853 1.36084C5.98656 0.864826 6.42057 0.61682 6.88149 0.519704C7.28935 0.43377 7.71065 0.43377 8.11851 0.519704C8.57943 0.61682 9.01345 0.864826 9.88147 1.36084L12.0815 2.61798C12.9623 3.12133 13.4027 3.373 13.7232 3.72664C14.0067 4.03952 14.2209 4.40873 14.3519 4.81011C14.5 5.26376 14.5 5.77102 14.5 6.78555V9.21445C14.5 10.229 14.5 10.7362 14.3519 11.1899C14.2209 11.5913 14.0067 11.9605 13.7232 12.2734C13.4027 12.627 12.9623 12.8787 12.0815 13.382L9.88147 14.6392C9.01345 15.1352 8.57943 15.3832 8.11851 15.4803C7.71065 15.5662 7.28935 15.5662 6.88149 15.4803C6.42057 15.3832 5.98656 15.1352 5.11853 14.6392L2.91853 13.382C2.03768 12.8787 1.59725 12.627 1.27683 12.2734C0.993338 11.9605 0.77908 11.5913 0.648071 11.1899C0.5 10.7362 0.5 10.229 0.5 9.21445V6.78555C0.5 5.77102 0.5 5.26376 0.648071 4.81011C0.77908 4.40873 0.993338 4.03952 1.27683 3.72664C1.59725 3.373 2.03768 3.12133 2.91853 2.61798L5.11853 1.36084Z" fill="#20376D"/>
                    </svg>
                    <?php the_field('clients_sub_title'); ?>
                </div>
                <div class="clients__information">
                    <div class="clients__information__title h1"><?php the_field('clients_title'); ?></div>
                    <p class="clients__information__description p1"><?php the_field('clients_description'); ?></p>
                </div>
                <div class="clients__inner grid-12">
                    <div class="clients__image__list">
                        <?php
                        $my_posts = get_posts( array(
                            'numberposts' => -1,
                            'post_type'   => 'clients',
                            'suppress_filters' => true,
                        ) );

                        foreach( $my_posts as $post ){
                            setup_postdata( $post );
                            ?>
                                <img src="<?= get_field('image')['url']; ?>" alt="<?= get_field('image')['alt']; ?>" class="clients__image" loading="lazy" data-client="<?php the_ID(); ?>">
                            <?php
                        } wp_reset_postdata();
                        ?>
                    </div>
                    <div class="clients__item__list">
                        <?php
                        $counter = 1;
                        foreach( $my_posts as $post ){
                            setup_postdata( $post );
                            ?>
                            <div class="clients__item" data-client="<?php the_ID(); ?>">
                                <div class="clients__item__number p2"><?= sprintf('%02d', $counter); ?></div>
                                <div class="clients__item__title h5"><?php the_title(); ?></div>
                            </div>
                            <?php
                            $counter++;
                        } wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?= get_template_part('template-part/section-industry') ?>
    </main>
<?php
get_footer();
