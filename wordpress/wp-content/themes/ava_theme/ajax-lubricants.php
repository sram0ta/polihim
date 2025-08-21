<?php
add_action('wp_ajax_filter_lubricants', 'filter_lubricants_ajax');
add_action('wp_ajax_nopriv_filter_lubricants', 'filter_lubricants_ajax');

function filter_lubricants_ajax() {
    $compound = !empty($_REQUEST['compound']) ? (array) $_REQUEST['compound'] : [];
    $purpose  = !empty($_REQUEST['purpose'])  ? (array) $_REQUEST['purpose']  : [];
    $industry = !empty($_REQUEST['industry']) ? (array) $_REQUEST['industry'] : [];

    foreach (['compound', 'purpose', 'industry'] as $tax) {
        if (count($$tax) === 1 && strpos($$tax[0], ',') !== false) {
            $$tax = explode(',', $$tax[0]);
        }
    }

    $compound = array_map('sanitize_text_field', $compound);
    $purpose  = array_map('sanitize_text_field', $purpose);
    $industry = array_map('sanitize_text_field', $industry);

    $purpose_all = array_values(array_unique(array_filter(array_merge($purpose, $industry))));

    $tax_query = [];

// compound как было
    if (!empty($compound)) {
        $tax_query[] = [
            'taxonomy' => 'compound',
            'field'    => 'slug',
            'terms'    => $compound,
            'operator' => 'IN',
        ];
    }


    if (!empty($industry)) {
        $tax_query[] = [
            'taxonomy'         => 'purpose',
            'field'            => 'slug',
            'terms'            => $industry,
            'include_children' => false,
            'operator'         => 'IN',
        ];
    } elseif (!empty($purpose)) {
        $tax_query[] = [
            'taxonomy'         => 'purpose',
            'field'            => 'slug',
            'terms'            => $purpose,
            'include_children' => true,
            'operator'         => 'IN',
        ];
    }

    if (count($tax_query) > 1) {
        $tax_query['relation'] = 'AND';
    }


    $current_lang = isset($_REQUEST['lang']) ? sanitize_text_field($_REQUEST['lang']) : (function_exists('pll_current_language') ? pll_current_language() : '');

    add_filter('posts_clauses', function($clauses) {
        global $wpdb;
        if (!empty($clauses['orderby'])) {
            $clauses['orderby'] = str_replace(
                "{$wpdb->posts}.post_title",
                "{$wpdb->posts}.post_title COLLATE utf8mb4_unicode_ci",
                $clauses['orderby']
            );
        }
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
            setup_postdata(get_post($post_id)); ?>
            <div class="lubricants__content__item">
                <div class="lubricants__content__item__inner">
                    <h5 class="lubricants__content__item__title h5"><?php echo get_the_title($post_id); ?></h5>
                    <p class="lubricants__content__item__description p1"><?php echo esc_html(get_field('small_description', $post_id)); ?></p>
                </div>
                <?php if (have_rows('repeater_description', $post_id) || get_field('pdf_file', $post_id)) : ?>
                    <div class="lubricants__content__item__link-list">
                        <?php if (have_rows('repeater_description', $post_id)) : ?>
                            <a href="<?= get_permalink($post_id); ?>" class="lubricants__content__item__link p1"><?= pll__('Подробнее'); ?></a>
                        <?php endif; ?>
                        <?php if (get_field('pdf_file', $post_id)) : ?>
                            <a href="<?= esc_url(get_field('pdf_file', $post_id)); ?>" class="lubricants__content__item__link p1" download><?= pll__('Скачать PDF'); ?></a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php }
        wp_reset_postdata();
    } else { ?>
        <div class="lubricants__content__nothing h4"><?= pll__('Ничего не найдено.') ?></div>
    <?php }

    wp_die();
}

add_action('wp_ajax_get_purpose_children', 'ajax_get_purpose_children');
add_action('wp_ajax_nopriv_get_purpose_children', 'ajax_get_purpose_children');

function ajax_get_purpose_children() {
    $parents = !empty($_REQUEST['parents']) ? (array)$_REQUEST['parents'] : [];

    if (count($parents) === 1 && strpos($parents[0], ',') !== false) {
        $parents = explode(',', $parents[0]);
    }

    $parents = array_map('sanitize_text_field', $parents);
    $output = '';

    foreach ($parents as $parent_slug) {
        $parent_term = get_term_by('slug', $parent_slug, 'purpose');
        if (!$parent_term || is_wp_error($parent_term)) {
            continue;
        }

        $children = get_terms([
            'taxonomy' => 'purpose',
            'hide_empty' => true,
            'parent' => (int)$parent_term->term_id,
        ]);

        if (!empty($children) && !is_wp_error($children)) {
            foreach ($children as $child) {
                $output .= '<button class="products-filter__button p2" data-type="' . esc_attr($child->slug) . '" data-parent="' . esc_attr($parent_term->slug) . '">' . esc_html($child->name) . '</button>';
            }
        }
    }

    if ($output === '') {
        $output = '<div class="products-filter__notice p2">' . esc_html__('Нет дочерних категорий', 'textdomain') . '</div>';
    }

    echo $output;
    wp_die();
}
