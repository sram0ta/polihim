<?php
/*
Template Name: Инфоцентр
*/

get_header();
?>
<main class="main page-infocenter">
    <div class="container container-main__inner">
        <div class="upper-information grid-12">
            <?php
            $home_id = pll_get_post(get_option('page_on_front'));
            ?>
            <div class="breadcrumbs">
                <a href="<?= get_permalink($home_id); ?>" class="breadcrumbs__item p1"> <?= get_the_title($home_id); ?></a>
                <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.61853 1.36084C5.48656 0.864826 5.92057 0.61682 6.38149 0.519704C6.78935 0.43377 7.21065 0.43377 7.61851 0.519704C8.07943 0.61682 8.51345 0.864826 9.38147 1.36084L11.5815 2.61798C12.4623 3.12133 12.9027 3.373 13.2232 3.72664C13.5067 4.03952 13.7209 4.40873 13.8519 4.81011C14 5.26376 14 5.77102 14 6.78555V9.21445C14 10.229 14 10.7362 13.8519 11.1899C13.7209 11.5913 13.5067 11.9605 13.2232 12.2734C12.9027 12.627 12.4623 12.8787 11.5815 13.382L9.38147 14.6392C8.51345 15.1352 8.07943 15.3832 7.61851 15.4803C7.21065 15.5662 6.78935 15.5662 6.38149 15.4803C5.92057 15.3832 5.48656 15.1352 4.61853 14.6392L2.41853 13.382C1.53768 12.8787 1.09725 12.627 0.776833 12.2734C0.493338 11.9605 0.27908 11.5913 0.148071 11.1899C0 10.7362 0 10.229 0 9.21445V6.78555C0 5.77102 0 5.26376 0.148071 4.81011C0.27908 4.40873 0.493338 4.03952 0.776833 3.72664C1.09725 3.373 1.53768 3.12133 2.41853 2.61798L4.61853 1.36084Z" fill="#20376D"/>
                </svg>
                <div class="breadcrumbs__item active p1"><?php the_title(); ?></div>
            </div>
            <div class="upper-information__title h1"><?php the_field('page-title'); ?></div>
        </div>
        <div class="date-filter">
            <div class="date-filter__title p1"><?= pll__('Выберите год публикаций, который вас интересует.'); ?></div>
            <?php
            $years = [];

            $all_posts = get_posts([
                'post_type'      => 'infocenter',
                'posts_per_page' => -1,
                'post_status'    => 'publish',
                'orderby'        => 'date',
                'order'          => 'DESC',
                'fields'         => 'ids',
                'no_found_rows'  => true,
                'cache_results'  => false,
                'update_post_term_cache' => false,
                'update_post_meta_cache' => false,
            ]);

            foreach ($all_posts as $post_id) {
                $year = get_the_date('Y', $post_id);
                $years[$year] = true;
            }

            $years = array_keys($years);
            rsort($years);

            if (!empty($years)) :
                ?>
                <div class="date-filter__list">
                    <button class="date-filter__button active p2" data-year="current"><?= pll__('Смотреть все'); ?></button>
                    <?php foreach ($years as $year) : ?>
                        <button class="date-filter__button p2" data-year="<?= esc_attr($year); ?>"><?= esc_html($year); ?></button>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="info-center__list"></div>
        <div class="info-center__button">
            <button class="button-polygon">
                <span class="button-polygon__title p1"><?= pll__('Загрузить ещё'); ?></span>
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
            </button>
        </div>
    </div>
</main>
<?php
get_footer();
