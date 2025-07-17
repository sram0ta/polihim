<?php
add_action('wp_ajax_filter_by_year', 'ajax_filter_by_year');
add_action('wp_ajax_nopriv_filter_by_year', 'ajax_filter_by_year');

function ajax_filter_by_year() {
    $year = sanitize_text_field($_POST['year']);
    $paged = isset($_POST['paged']) ? max(1, intval($_POST['paged'])) : 1;
    $posts_per_page = 3;

    $args = [
        'post_type'           => 'infocenter',
        'post_status'         => 'publish',
        'posts_per_page'      => $posts_per_page,
        'paged'               => $paged,
        'orderby'             => 'date',
        'order'               => 'DESC',
        'fields'              => 'ids',
        'no_found_rows'       => false,
        'update_post_term_cache' => false,
        'update_post_meta_cache' => false,
        'cache_results'       => false,
    ];

    if ($year !== 'current') {
        $args['date_query'] = [
            ['year' => (int) $year]
        ];
    }

    $query = new WP_Query($args);
    $post_ids = $query->posts;
    $max_pages = $query->max_num_pages;

    ob_start();

    foreach ($post_ids as $post_id) {
        $title = get_the_title($post_id);
        $link = get_permalink($post_id);
        $thumb = get_the_post_thumbnail_url($post_id);
        $date_day = get_the_date('d', $post_id);
        $date_month_year = get_the_date('F Y', $post_id);
        $description = get_field('small_description', $post_id);
        ?>
        <a href="<?= esc_url($link); ?>" class="info-center__item grid-12">
            <img src="<?= esc_url($thumb); ?>" alt="<?= esc_attr($title); ?>" class="info-center__item__image" loading="lazy">
            <span class="info-center__item__date">
                <span class="info-center__item__date__number h1"><?= esc_html($date_day); ?></span>
                <span class="info-center__item__date__another p1"><?= esc_html($date_month_year); ?></span>
            </span>
            <span class="info-center__item__inner">
                <h4 class="info-center__item__title"><?= esc_html($title); ?></h4>
                <span class="info-center__item__description">
                    <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.61853 1.36084C5.48656 0.864826 5.92057 0.61682 6.38149 0.519704C6.78935 0.43377 7.21065 0.43377 7.61851 0.519704C8.07943 0.61682 8.51345 0.864826 9.38147 1.36084L11.5815 2.61798C12.4623 3.12133 12.9027 3.373 13.2232 3.72664C13.5067 4.03952 13.7209 4.40873 13.8519 4.81011C14 5.26376 14 5.77102 14 6.78555V9.21445C14 10.229 14 10.7362 13.8519 11.1899C13.7209 11.5913 13.5067 11.9605 13.2232 12.2734C12.9027 12.627 12.4623 12.8787 11.5815 13.382L9.38147 14.6392C8.51345 15.1352 8.07943 15.3832 7.61851 15.4803C7.21065 15.5662 6.78935 15.5662 6.38149 15.4803C5.92057 15.3832 5.48656 15.1352 4.61853 14.6392L2.41853 13.382C1.53768 12.8787 1.09725 12.627 0.776833 12.2734C0.493338 11.9605 0.27908 11.5913 0.148071 11.1899C0 10.7362 0 10.229 0 9.21445V6.78555C0 5.77102 0 5.26376 0.148071 4.81011C0.27908 4.40873 0.493338 4.03952 0.776833 3.72664C1.09725 3.373 1.53768 3.12133 2.41853 2.61798L4.61853 1.36084Z" fill="#20376D"/>
                    </svg>
                    <p class="p1"><?= esc_html($description); ?></p>
                </span>
                <span class="info-center__item__link p1"><?= pll__('Читать') ?></span>
            </span>
        </a>
        <?php
    }

    $output = ob_get_clean();

    wp_send_json_success([
        'html' => $output,
        'max_pages' => $max_pages,
        'current_page' => $paged,
    ]);
}
