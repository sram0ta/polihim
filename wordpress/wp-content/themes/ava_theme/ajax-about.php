<?php
add_action('wp_ajax_load_more_clients', 'load_more_clients');
add_action('wp_ajax_nopriv_load_more_clients', 'load_more_clients');

function load_more_clients() {
    $offset = isset($_POST['offset']) ? intval($_POST['offset']) : 0;
    $per_page = 5;

    $query = new WP_Query([
        'post_type'      => 'clients',
        'posts_per_page' => $per_page,
        'offset'         => $offset,
        'post_status'    => 'publish',
        'no_found_rows'  => false,
    ]);

    if (!$query->have_posts()) {
        wp_send_json_error(['message' => 'Ничего не найдено']);
        return;
    }

    $images_html = '';
    $items_html = '';
    $counter = $offset + 1;

    foreach ($query->posts as $post) {
        setup_postdata($post);
        $image = get_field('image', $post);
        $post_id = $post->ID;
        if (!$image) continue;

        $images_html .= '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" class="clients__image" loading="lazy" data-client="' . esc_attr($post_id) . '">';

        $items_html .= '<div class="clients__item" data-client="' . esc_attr($post_id) . '">
                            <div class="clients__item__number p2">' . sprintf('%02d', $counter) . '</div>
                            <div class="clients__item__title h5">' . esc_html(get_the_title($post)) . '</div>
                        </div>';
        $counter++;
    }

    wp_reset_postdata();

    $total_posts = $query->found_posts;
    $end = ($offset + $per_page) >= $total_posts;

    wp_send_json([
        'images' => $images_html,
        'items'  => $items_html,
        'end'    => $end
    ]);
}
