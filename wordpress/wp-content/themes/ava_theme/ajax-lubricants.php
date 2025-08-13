<?php
add_action('wp_ajax_filter_lubricants', 'filter_lubricants_ajax');
add_action('wp_ajax_nopriv_filter_lubricants', 'filter_lubricants_ajax');

function filter_lubricants_ajax() {
    $compound = !empty($_REQUEST['compound']) ? (array) $_REQUEST['compound'] : [];
    $purpose  = !empty($_REQUEST['purpose'])  ? (array) $_REQUEST['purpose']  : [];
    $industry = !empty($_REQUEST['industry']) ? (array) $_REQUEST['industry'] : [];

    // Если пришла строка через запятую — превращаем в массив
    foreach (['compound', 'purpose', 'industry'] as $tax) {
        if (count($$tax) === 1 && strpos($$tax[0], ',') !== false) {
            $$tax = explode(',', $$tax[0]);
        }
    }

    // Санитизация
    $compound = array_map('sanitize_text_field', $compound);
    $purpose  = array_map('sanitize_text_field', $purpose);
    $industry = array_map('sanitize_text_field', $industry);

    // Формируем tax_query
    $tax_query = [];
    if (!empty($compound)) {
        $tax_query[] = [
            'taxonomy' => 'compound',
            'field'    => 'slug',
            'terms'    => $compound,
        ];
    }
    if (!empty($purpose)) {
        $tax_query[] = [
            'taxonomy' => 'purpose',
            'field'    => 'slug',
            'terms'    => $purpose,
        ];
    }
    if (!empty($industry)) {
        $tax_query[] = [
            'taxonomy' => 'industry',
            'field'    => 'slug',
            'terms'    => $industry,
        ];
    }
    if (count($tax_query) > 1) {
        $tax_query['relation'] = 'AND';
    }

    $current_lang = isset($_REQUEST['lang']) ? sanitize_text_field($_REQUEST['lang']) : pll_current_language();

    // Добавляем фильтр для сортировки с кириллицей
    add_filter('posts_clauses', function($clauses) {
        global $wpdb;
        $clauses['orderby'] = str_replace(
            "{$wpdb->posts}.post_title",
            "{$wpdb->posts}.post_title COLLATE utf8mb4_unicode_ci",
            $clauses['orderby']
        );
        return $clauses;
    });

    $args = [
        'post_type'      => 'lubricants',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
        'tax_query'      => $tax_query,
        'lang'           => $current_lang,
        'orderby'        => 'title',
        'order'          => 'ASC',
        'fields'         => 'ids',
    ];

    $post_ids = get_posts($args);

    if (!empty($post_ids)) {
        foreach ($post_ids as $post_id) {
            setup_postdata(get_post($post_id));
            $compound_terms = get_the_terms($post_id, 'compound');
            $purpose_terms  = get_the_terms($post_id, 'purpose');
            $industry_terms = get_the_terms($post_id, 'industry');
            ?>
            <div class="lubricants__content__item">
                <div class="lubricants__content__item__inner">
                    <h5 class="lubricants__content__item__title h5"><?php echo get_the_title($post_id); ?></h5>
                    <p class="lubricants__content__item__description p1"><?php echo get_field('small_description', $post_id); ?></p>
                    <div class="lubricants__content__item__tag-list">
                        <?php
                        foreach ([$compound_terms, $purpose_terms, $industry_terms] as $terms) {
                            if ($terms && !is_wp_error($terms)) {
                                foreach ($terms as $term) {
                                    ?>
                                    <div class="lubricants__content__item__tag p2"><?= esc_html($term->name); ?></div>
                                    <?php
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
                <?php if (have_rows('repeater_description', $post_id) || get_field('pdf_file', $post_id)): ?>
                    <div class="lubricants__content__item__link-list">
                        <?php if (have_rows('repeater_description', $post_id)) : ?>
                            <a href="<?= get_permalink($post_id); ?>" class="lubricants__content__item__link p1"><?= pll__('Подробнее'); ?></a>
                        <?php endif; ?>
                        <?php if (get_field('pdf_file', $post_id)) : ?>
                            <a href="<?= get_field('pdf_file', $post_id); ?>" class="lubricants__content__item__link p1" download><?= pll__('Скачать PDF'); ?></a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php
        }
        wp_reset_postdata();
    } else {
        ?>
        <div class="lubricants__content__nothing h4"><?= pll__('Ничего не найдено.') ?></div>
        <?php
    }

    wp_die();
}
