<?php
add_action('wp_ajax_filter_lubricants', 'filter_lubricants_ajax');
add_action('wp_ajax_nopriv_filter_lubricants', 'filter_lubricants_ajax');

function filter_lubricants_ajax() {
    $compound = !empty($_POST['compound']) ? (array) $_POST['compound'] : [];
    $purpose  = !empty($_POST['purpose'])  ? (array) $_POST['purpose']  : [];

    $compound = array_map('sanitize_text_field', $compound);
    $purpose  = array_map('sanitize_text_field', $purpose);

    $tax_query = [];

    if (!empty($compound)) {
        $tax_query[] = [
            'taxonomy' => 'compound',
            'field'    => 'slug',
            'terms'    => $compound,
            'operator' => 'IN',
        ];
    }

    if (!empty($purpose)) {
        $tax_query[] = [
            'taxonomy' => 'purpose',
            'field'    => 'slug',
            'terms'    => $purpose,
            'operator' => 'IN',
        ];
    }

    if (count($tax_query) > 1) {
        $tax_query['relation'] = 'AND';
    }

    $args = [
        'post_type'      => 'lubricants',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
        'tax_query'      => $tax_query,
        'lang'           => function_exists('pll_current_language') ? pll_current_language() : '',
    ];

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $compound_terms = get_the_terms(get_the_ID(), 'compound');
            $purpose_terms  = get_the_terms(get_the_ID(), 'purpose');
            ?>
            <div class="lubricants__content__item">
                <div class="lubricants__content__item__inner">
                    <h5 class="lubricants__content__item__title h5"><?php the_title(); ?></h5>
                    <p class="lubricants__content__item__description p1"><?php the_field('small_description'); ?></p>
                    <div class="lubricants__content__item__tag-list">
                        <?php
                        if ($compound_terms) {
                            foreach ($compound_terms as $term) {
                                ?>
                                    <div class="lubricants__content__item__tag p2"><?= esc_html($term->name); ?></div>
                                <?php
                            }
                        }
                        if ($purpose_terms) {
                            foreach ($purpose_terms as $term) {
                                ?>
                                    <div class="lubricants__content__item__tag p2"><?= esc_html($term->name); ?></div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="lubricants__content__item__link-list">
                    <?php if (have_rows('repeater_description')) : ?>
                        <a href="<?php the_permalink(); ?>" class="lubricants__content__item__link p1"><?= pll__('Подробнее'); ?></a>
                    <?php endif; ?>
                    <?php if (get_field('pdf_file')) : ?>
                        <a href="<?php the_field('pdf_file'); ?>" class="lubricants__content__item__link p1" download><?= pll__('Скачать PDF'); ?></a>
                    <?php endif; ?>
                </div>
            </div>
            <?php
        }
    } else {
        ?>
        <div class="lubricants__content__nothing h4"><?= pll__('Ничего не найдено.') ?></div>
        <?php
    }

    wp_reset_postdata();
    wp_die();
}
