<?php
get_header();
?>
    <main class="main single-infocenter">
        <div class="container container-main__inner">
            <?php
            $home_id = get_option('page_on_front');
            if (function_exists('pll_get_post')) {
                $home_id = pll_get_post($home_id);
            }

            $target_page = get_page_by_path('infocenter');
            if (function_exists('pll_get_post') && $target_page) {
                $target_page = get_post(pll_get_post($target_page->ID));
            }
            ?>
            <div class="breadcrumbs">
                <a href="<?= get_permalink($home_id); ?>" class="breadcrumbs__item p1"><?= get_the_title($home_id); ?></a>
                <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.61853 1.36084C5.48656 0.864826 5.92057 0.61682 6.38149 0.519704C6.78935 0.43377 7.21065 0.43377 7.61851 0.519704C8.07943 0.61682 8.51345 0.864826 9.38147 1.36084L11.5815 2.61798C12.4623 3.12133 12.9027 3.373 13.2232 3.72664C13.5067 4.03952 13.7209 4.40873 13.8519 4.81011C14 5.26376 14 5.77102 14 6.78555V9.21445C14 10.229 14 10.7362 13.8519 11.1899C13.7209 11.5913 13.5067 11.9605 13.2232 12.2734C12.9027 12.627 12.4623 12.8787 11.5815 13.382L9.38147 14.6392C8.51345 15.1352 8.07943 15.3832 7.61851 15.4803C7.21065 15.5662 6.78935 15.5662 6.38149 15.4803C5.92057 15.3832 5.48656 15.1352 4.61853 14.6392L2.41853 13.382C1.53768 12.8787 1.09725 12.627 0.776833 12.2734C0.493338 11.9605 0.27908 11.5913 0.148071 11.1899C0 10.7362 0 10.229 0 9.21445V6.78555C0 5.77102 0 5.26376 0.148071 4.81011C0.27908 4.40873 0.493338 4.03952 0.776833 3.72664C1.09725 3.373 1.53768 3.12133 2.41853 2.61798L4.61853 1.36084Z" fill="#20376D"/>
                </svg>
                <a href="<?= get_permalink($target_page) ?>" class="breadcrumbs__item p1"><?= get_the_title($target_page) ?></a>
                <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.61853 1.36084C5.48656 0.864826 5.92057 0.61682 6.38149 0.519704C6.78935 0.43377 7.21065 0.43377 7.61851 0.519704C8.07943 0.61682 8.51345 0.864826 9.38147 1.36084L11.5815 2.61798C12.4623 3.12133 12.9027 3.373 13.2232 3.72664C13.5067 4.03952 13.7209 4.40873 13.8519 4.81011C14 5.26376 14 5.77102 14 6.78555V9.21445C14 10.229 14 10.7362 13.8519 11.1899C13.7209 11.5913 13.5067 11.9605 13.2232 12.2734C12.9027 12.627 12.4623 12.8787 11.5815 13.382L9.38147 14.6392C8.51345 15.1352 8.07943 15.3832 7.61851 15.4803C7.21065 15.5662 6.78935 15.5662 6.38149 15.4803C5.92057 15.3832 5.48656 15.1352 4.61853 14.6392L2.41853 13.382C1.53768 12.8787 1.09725 12.627 0.776833 12.2734C0.493338 11.9605 0.27908 11.5913 0.148071 11.1899C0 10.7362 0 10.229 0 9.21445V6.78555C0 5.77102 0 5.26376 0.148071 4.81011C0.27908 4.40873 0.493338 4.03952 0.776833 3.72664C1.09725 3.373 1.53768 3.12133 2.41853 2.61798L4.61853 1.36084Z" fill="#20376D"/>
                </svg>
                <div class="breadcrumbs__item active p1"><?php the_title(); ?></div>
            </div>
            <div class="infocenter grid-12">
                <div class="infocenter__information">
                    <h1 class="infocenter__information__title h2"><?php the_title(); ?></h1>
                    <div class="infocenter__information__date">
                        <div class="infocenter__information__date__title p1">Дата публикации</div>
                        <div class="infocenter__information__date__number p2"><?= get_the_date('d F Y'); ?></div>
                    </div>
                </div>
                <div class="infocenter__content">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="infocenter__content__image">
                    <?php
                        while ( have_rows('content') ) : the_row();
                            if(get_row_layout() == 'title'){
                                ?>
                                    <h5 class="infocenter__content__title h5"><?php the_sub_field('title'); ?></h5>
                                <?php
                            } elseif (get_row_layout() == 'description'){
                                ?>
                                    <div class="infocenter__content__description p1"><?php the_sub_field('description'); ?></div>
                                <?php
                            }
                        endwhile;
                    ?>
                </div>
            </div>
            <div class="another-news grid-12">
                <div class="another-news__title h1"><?= get_field('unique_title', $target_page); ?></div>
                <?php
                $posts = get_posts([
                    'post_type'      => 'infocenter',
                    'numberposts'    => 3,
                    'post_status'    => 'publish',
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                ]);
                ?>
                <div class="info-center__list">
                    <?php foreach ($posts as $post) :
                        setup_postdata($post); ?>
                        <a href="<?= get_the_permalink($post); ?>" class="info-center__item grid-12">
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
                <a href="/<?= pll_current_language(); ?>/infocenter/" class="button-polygon">
                    <span class="button-polygon__title p1"><?= pll__('Смотреть все новости'); ?></span>
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
        </div>
    </main>
<?php
get_footer();
