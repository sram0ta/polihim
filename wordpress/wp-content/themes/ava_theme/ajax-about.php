<?php
add_action('wp_ajax_load_more_clients', 'load_more_clients');
add_action('wp_ajax_nopriv_load_more_clients', 'load_more_clients');

function load_more_clients() {
    $offset   = isset($_POST['offset']) ? intval($_POST['offset']) : 0;
    $per_page = 5;

    $orderby_fix = function( $clauses, WP_Query $q ) {
        if ( $q->get('clients_alpha') ) {
            global $wpdb;
            if ( ! empty( $clauses['orderby'] ) ) {
                $clauses['orderby'] = str_replace(
                    "{$wpdb->posts}.post_title",
                    "{$wpdb->posts}.post_title COLLATE utf8mb4_unicode_ci",
                    $clauses['orderby']
                );
            }
        }
        return $clauses;
    };
    add_filter('posts_clauses', $orderby_fix, 999, 2);

    $query = new WP_Query([
        'post_type'        => 'clients',
        'posts_per_page'   => $per_page,
        'offset'           => $offset,
        'post_status'      => 'publish',
        'orderby'          => 'title',
        'order'            => 'ASC',
        'no_found_rows'    => false,
        'suppress_filters' => false,
        'clients_alpha'    => true,
    ]);

    remove_filter('posts_clauses', $orderby_fix, 999);

    if ( ! $query->have_posts() ) {
        wp_send_json_error(['message' => 'Ничего не найдено']);
    }

    $images_html = '';
    $items_html  = '';
    $counter     = $offset + 1;

    foreach ( $query->posts as $post ) {
        setup_postdata( $post );
        $post_id = $post->ID;

        $image = get_field('image', $post_id);
        if ( empty($image['url']) ) {
            continue;
        }

        $images_html .= sprintf(
            '<img src="%s" alt="%s" class="clients__image" loading="lazy" data-client="%d">',
            esc_url($image['url']),
            esc_attr(isset($image['alt']) ? $image['alt'] : get_the_title($post_id)),
            esc_attr($post_id)
        );

        $items_html .= sprintf(
            '<div class="clients__item" data-client="%d">
                <div class="clients__item__number p2">%s</div>
                <div class="clients__item__title h5">%s</div>
            </div>',
            esc_attr($post_id),
            sprintf('%02d', $counter),
            esc_html(get_the_title($post_id))
        );

        $counter++;
    }

    wp_reset_postdata();

    $total_posts = (int) $query->found_posts;
    $end = ($offset + $per_page) >= $total_posts;

    wp_send_json([
        'images' => $images_html,
        'items'  => $items_html,
        'end'    => $end,
    ]);
}
