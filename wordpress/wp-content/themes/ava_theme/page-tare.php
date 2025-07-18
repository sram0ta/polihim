<?php
/*
Template Name: Тара
*/

get_header();
?>
<main class="main page-tara">
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
        </div>
        <div class="tara grid-12">
            <div class="products-filter">
                <div class="products-filter__item">
                    <div class="products-filter__title p1"><?= pll__('Фильтрация тары'); ?></div>
                    <div class="products-filter__inner">
                        <button class="products-filter__button p2 active" data-type="all"><?= pll__('Смотреть все'); ?></button>
                        <?php
                        $terms = get_terms([
                            'taxonomy'   => 'type-of-tare',
                            'hide_empty' => true,
                        ]);

                        if (!empty($terms) && !is_wp_error($terms)) {
                            foreach ($terms as $term) {
                            ?>
                            <button class="products-filter__button p2" data-type="<?= esc_attr($term->slug); ?>"><?= esc_html($term->name) ?></button>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <button class="products-filter__clear p2"><?= pll__('Сбросить всё'); ?></button>
            </div>
            <div class="tara__content"></div>
        </div>
    </div>
    <?= get_template_part('template-part/section-industry') ?>
</main>
<?php
get_footer();
