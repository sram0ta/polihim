<?php
/*
Template Name: Производство
*/

get_header();
?>
    <main class="main page-production">
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
            <div class="advantages">
                <div class="advantages__title h1"><?php the_field('advantages_title'); ?></div>
                <div class="advantages__inner grid-12">
                    <div class="advantages__image__wrapper">
                        <img src="<?= get_field('advantages_image')['url']; ?>" alt="<?= get_field('advantages_image')['alt']; ?>" class="advantages__image" loading="lazy">
                    </div>
                    <div class="advantages__list">
                        <img src="/wp-content/uploads/2025/07/group-11.svg" alt="" class="advantages__list__image">
                        <div class="advantages__list__wrapper">
                            <?php
                                while ( have_rows('repeater_advantages') ) : the_row();
                                ?>
                                    <div class="advantages__item">
                                        <div class="advantages__item__content">
                                            <h5 class="advantages__item__content__title h5"><?php the_sub_field('title'); ?></h5>
                                            <div class="advantages__item__content__list">
                                                <?php
                                                    $count = 1;
                                                    while ( have_rows('repeater_item') ) : the_row();
                                                    ?>
                                                        <div class="advantages__item__content__paragraph">
                                                            <div class="advantages__item__content__paragraph__number p2"><?= sprintf('%02d', $count); ?></div>
                                                            <p class="advantages__item__content__paragraph__title p1"><?php the_sub_field('title'); ?></p>
                                                        </div>
                                                    <?php
                                                    $count++;
                                                    endwhile;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                endwhile;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contract">
                <div class="contract__information grid-12">
                    <div class="contract__information__title h2"><?php the_field('contract_title'); ?></div>
                    <p class="contract__information__description p1"><?php the_field('contract_description'); ?></p>
                    <a href="/<?= pll_current_language(); ?>/products/#catalog" class="contract__information__link button-polygon">
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
                <div class="contract__line">
                    <img src="<?= get_field('contract_image')['url']; ?>" alt="<?= get_field('contract_image')['alt']; ?>" class="contract__line__item" loading="lazy">
                    <img src="<?= get_field('contract_image')['url']; ?>" alt="<?= get_field('contract_image')['alt']; ?>" class="contract__line__item" loading="lazy">
                </div>
            </div>
            <div class="possibilities grid-12">
                <div class="possibilities__information">
                    <div class="possibilities__information__title h2"><?php the_field('possibilities_title'); ?></div>
                    <div class="possibilities__information__navigation">
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
                <div class="possibilities__gallery">
                    <div class="swiper" id="advantages-gallery">
                        <div class="swiper-wrapper">
                            <?php
                            $items = get_field('repeater_possibilities');
                            $total = count($items);
                            $index = 0;

                            while (have_rows('repeater_possibilities')) : the_row();
                                $index++;
                                $is_last = $index === $total;
                                ?>
                                <div class="swiper-slide possibilities__gallery__item<?= $is_last ? ' last' : '' ?>">
                                    <div class="possibilities__gallery__item__inner">
                                        <img src="<?= get_sub_field('image')['url']; ?>" alt="<?= get_sub_field('image')['alt']; ?>" class="possibilities__gallery__item__image" loading="lazy">
                                        <h4 class="possibilities__gallery__item__title h4"><?php the_sub_field('title'); ?></h4>
                                        <div class="possibilities__gallery__item__description p1"><?php the_sub_field('description'); ?></div>
                                    </div>
                                    <div class="possibilities__gallery__item__ruler">
                                        <div class="possibilities__gallery__item__ruler__number p2"><?= sprintf('%02d', $index); ?></div>
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
            <div class="quote grid-12">
                <div class="quote__director">
                    <img src="<?= get_field('quote_image')['url']; ?>" alt="<?= get_field('quote_image')['alt']; ?>" class="quote__director__image" loading="lazy">
                    <h4 class="quote__director__title h4"><?php the_field('quote_fio'); ?></h4>
                    <p class="quote__director__description p1"><?php the_field('quote_job'); ?></p>
                </div>
                <div class="quote__title h2"><?php the_field('quote_title'); ?></div>
            </div>
        </div>
        <?= get_template_part('template-part/section-industry') ?>
    </main>
<?php
get_footer();
