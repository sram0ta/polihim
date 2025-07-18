<?php
add_action('wp_ajax_filter_by_container_type', 'handle_container_filter');
add_action('wp_ajax_nopriv_filter_by_container_type', 'handle_container_filter');

function handle_container_filter() {
    $term_slugs = isset($_POST['terms']) ? (array) $_POST['terms'] : [];

    $args = [
        'post_type'      => 'tare',
        'posts_per_page' => -1,
    ];

    if (!empty($term_slugs) && !in_array('all', $term_slugs)) {
        $args['tax_query'] = [
            [
                'taxonomy' => 'type-of-tare',
                'field'    => 'slug',
                'terms'    => array_map('sanitize_text_field', $term_slugs),
            ],
        ];
    }

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            ?>
            <div class="tara__content__item">
                <div class="tara__content__item__inner">
                    <h5 class="tara__content__item__title h5"><?php the_title(); ?></h5>
                    <p class="tara__content__item__description p1"><?php the_field('description'); ?></p>
                </div>
                <div class="tara__content__item__image">
                    <img src="<?= esc_url(get_field('image')['url']); ?>" alt="<?php the_title(); ?>" loading="lazy">
                </div>
            </div>
            <?php
        }
        wp_reset_postdata();
    } else {
        echo '<p>Ничего не найдено.</p>';
    }

    wp_die();
}
