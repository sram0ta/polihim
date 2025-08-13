<?php
/*
Template Name: Продукция
*/

get_header();
?>
    <main class="main page-products">
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
                <div class="upper-information__link">
                    <a href="/<?= pll_current_language() ?>/products/lubricants" class="button-polygon">
                        <span class="button-polygon__title p1"><?= pll__('Каталог смазок и СОЖ'); ?></span>
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
                    <a href="/<?= pll_current_language() ?>/products/tare" class="button-polygon">
                        <span class="button-polygon__title p1"><?= pll__('Перейти в каталог Тары'); ?></span>
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
        <div class="container container-main__inner">
            <div class="catalog">
                <div class="catalog__title h1"><?php the_field('catalog_title'); ?></div>
                <div class="catalog__inner grid-12">
                    <p class="catalog__paragraph p1"><?php the_field('catalog_description'); ?></p>
                    <div class="catalog__list">
                        <?php
                            while ( have_rows('repeater_catalog') ) : the_row();
                            ?>
                                <a href="<?php the_sub_field('file'); ?>" class="catalog__item" target="_blank">
                                    <h5 class="catalog__item__title h5"><?php the_sub_field('title'); ?></h5>
                                    <div class="catalog__item__document p1"><?= pll__('Скачать PDF'); ?></div>
                                </a>
                            <?php
                            endwhile;
                        ?>
                    </div>
                </div>
            </div>
            <div class="catalog-product grid-12">
                <div class="anchor" id="catalog"></div>
                <img src="<?= get_field('lubricants_image')['url']; ?>" alt="<?= get_field('lubricants_image')['alt']; ?>" class="catalog-product__image" loading="lazy">
                <div class="catalog-product__content">
                    <div class="catalog-product__content__paragraph">
                        <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.61853 1.36084C5.48656 0.864826 5.92057 0.61682 6.38149 0.519704C6.78935 0.43377 7.21065 0.43377 7.61851 0.519704C8.07943 0.61682 8.51345 0.864826 9.38147 1.36084L11.5815 2.61798C12.4623 3.12133 12.9027 3.373 13.2232 3.72664C13.5067 4.03952 13.7209 4.40873 13.8519 4.81011C14 5.26376 14 5.77102 14 6.78555V9.21445C14 10.229 14 10.7362 13.8519 11.1899C13.7209 11.5913 13.5067 11.9605 13.2232 12.2734C12.9027 12.627 12.4623 12.8787 11.5815 13.382L9.38147 14.6392C8.51345 15.1352 8.07943 15.3832 7.61851 15.4803C7.21065 15.5662 6.78935 15.5662 6.38149 15.4803C5.92057 15.3832 5.48656 15.1352 4.61853 14.6392L2.41853 13.382C1.53768 12.8787 1.09725 12.627 0.776833 12.2734C0.493338 11.9605 0.27908 11.5913 0.148071 11.1899C0 10.7362 0 10.229 0 9.21445V6.78555C0 5.77102 0 5.26376 0.148071 4.81011C0.27908 4.40873 0.493338 4.03952 0.776833 3.72664C1.09725 3.373 1.53768 3.12133 2.41853 2.61798L4.61853 1.36084Z" fill="#20376D"/>
                        </svg>
                        <p class="catalog-product__content__paragraph__title p1"><?php the_field('lubricants_sub_title'); ?></p>
                    </div>
                    <div class="catalog-product__content__title-lubricants h2"><?php the_field('lubricants_title_first'); ?></div>
                    <p class="catalog-product__content__description p1"><?php the_field('lubricants_description'); ?></p>
                    <a href="/<?= pll_current_language() ?>/products/lubricants" class="button-long _blue">
                        <span class="button-long__inner">
                            <span class="button-long__title p2"><?= pll__('Каталог смазок и СОЖ'); ?></span>
                            <span class="button-long__title p2"><?= pll__('Каталог смазок и СОЖ'); ?></span>
                        </span>
                    </a>
                    <div class="catalog-product__content__title-tare h5"><?php the_field('lubricants_title_second'); ?></div>
                    <a href="/<?= pll_current_language() ?>/products/tare" class="catalog-product__content__link p1"><?= pll__('Перейти в каталог Тары'); ?></a>
                </div>
            </div>
            <?= get_template_part('template-part/section-delivery'); ?>
            <?php
            $front_page_id = get_option('page_on_front');
            if (function_exists('pll_get_post')) {
                $front_page_id = pll_get_post($front_page_id);
            }
            ?>
            <div class="quality__container">
                <div class="quality grid-12">
                    <div class="quality__title h3"><?= get_field('quality_title', $front_page_id); ?></div>
                    <div class="quality__inner grid-12">
                        <div class="quality__information">
                            <div class="quality__description p1"><?= get_field('quality_description', $front_page_id); ?></div>
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
                                while ( have_rows('repeater_quality', $front_page_id) ) : the_row();
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
        </div>
        <?= get_template_part('template-part/section-industry') ?>
    </main>
<?php
get_footer();
