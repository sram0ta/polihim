<?php
get_header();
?>
    <main class="main single-lubricants">
        <div class="container container-main__inner">
            <?php
            $home_id = get_option('page_on_front');
            if (function_exists('pll_get_post')) {
                $home_id = pll_get_post($home_id);
            }

            $target_page_products = get_page_by_path('products');
            if (function_exists('pll_get_post') && $target_page_products) {
                $target_page_products = get_post(pll_get_post($target_page_products->ID));
            }

            $target_page_lubricants = get_page_by_path('/products/lubricants/');
            if (function_exists('pll_get_post') && $target_page_lubricants) {
                $target_page_lubricants = get_post(pll_get_post($target_page_lubricants->ID));
            }
            ?>
            <div class="breadcrumbs">
                <a href="<?= get_permalink($home_id); ?>" class="breadcrumbs__item p1"><?= get_the_title($home_id); ?></a>
                <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.61853 1.36084C5.48656 0.864826 5.92057 0.61682 6.38149 0.519704C6.78935 0.43377 7.21065 0.43377 7.61851 0.519704C8.07943 0.61682 8.51345 0.864826 9.38147 1.36084L11.5815 2.61798C12.4623 3.12133 12.9027 3.373 13.2232 3.72664C13.5067 4.03952 13.7209 4.40873 13.8519 4.81011C14 5.26376 14 5.77102 14 6.78555V9.21445C14 10.229 14 10.7362 13.8519 11.1899C13.7209 11.5913 13.5067 11.9605 13.2232 12.2734C12.9027 12.627 12.4623 12.8787 11.5815 13.382L9.38147 14.6392C8.51345 15.1352 8.07943 15.3832 7.61851 15.4803C7.21065 15.5662 6.78935 15.5662 6.38149 15.4803C5.92057 15.3832 5.48656 15.1352 4.61853 14.6392L2.41853 13.382C1.53768 12.8787 1.09725 12.627 0.776833 12.2734C0.493338 11.9605 0.27908 11.5913 0.148071 11.1899C0 10.7362 0 10.229 0 9.21445V6.78555C0 5.77102 0 5.26376 0.148071 4.81011C0.27908 4.40873 0.493338 4.03952 0.776833 3.72664C1.09725 3.373 1.53768 3.12133 2.41853 2.61798L4.61853 1.36084Z" fill="#20376D"/>
                </svg>
                <a href="<?= get_permalink($target_page_products) ?>" class="breadcrumbs__item p1"><?= get_the_title($target_page_products) ?></a>
                <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.61853 1.36084C5.48656 0.864826 5.92057 0.61682 6.38149 0.519704C6.78935 0.43377 7.21065 0.43377 7.61851 0.519704C8.07943 0.61682 8.51345 0.864826 9.38147 1.36084L11.5815 2.61798C12.4623 3.12133 12.9027 3.373 13.2232 3.72664C13.5067 4.03952 13.7209 4.40873 13.8519 4.81011C14 5.26376 14 5.77102 14 6.78555V9.21445C14 10.229 14 10.7362 13.8519 11.1899C13.7209 11.5913 13.5067 11.9605 13.2232 12.2734C12.9027 12.627 12.4623 12.8787 11.5815 13.382L9.38147 14.6392C8.51345 15.1352 8.07943 15.3832 7.61851 15.4803C7.21065 15.5662 6.78935 15.5662 6.38149 15.4803C5.92057 15.3832 5.48656 15.1352 4.61853 14.6392L2.41853 13.382C1.53768 12.8787 1.09725 12.627 0.776833 12.2734C0.493338 11.9605 0.27908 11.5913 0.148071 11.1899C0 10.7362 0 10.229 0 9.21445V6.78555C0 5.77102 0 5.26376 0.148071 4.81011C0.27908 4.40873 0.493338 4.03952 0.776833 3.72664C1.09725 3.373 1.53768 3.12133 2.41853 2.61798L4.61853 1.36084Z" fill="#20376D"/>
                </svg>
                <a href="<?= get_permalink($target_page_lubricants) ?>" class="breadcrumbs__item p1"><?= get_the_title($target_page_lubricants) ?></a>
                <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.61853 1.36084C5.48656 0.864826 5.92057 0.61682 6.38149 0.519704C6.78935 0.43377 7.21065 0.43377 7.61851 0.519704C8.07943 0.61682 8.51345 0.864826 9.38147 1.36084L11.5815 2.61798C12.4623 3.12133 12.9027 3.373 13.2232 3.72664C13.5067 4.03952 13.7209 4.40873 13.8519 4.81011C14 5.26376 14 5.77102 14 6.78555V9.21445C14 10.229 14 10.7362 13.8519 11.1899C13.7209 11.5913 13.5067 11.9605 13.2232 12.2734C12.9027 12.627 12.4623 12.8787 11.5815 13.382L9.38147 14.6392C8.51345 15.1352 8.07943 15.3832 7.61851 15.4803C7.21065 15.5662 6.78935 15.5662 6.38149 15.4803C5.92057 15.3832 5.48656 15.1352 4.61853 14.6392L2.41853 13.382C1.53768 12.8787 1.09725 12.627 0.776833 12.2734C0.493338 11.9605 0.27908 11.5913 0.148071 11.1899C0 10.7362 0 10.229 0 9.21445V6.78555C0 5.77102 0 5.26376 0.148071 4.81011C0.27908 4.40873 0.493338 4.03952 0.776833 3.72664C1.09725 3.373 1.53768 3.12133 2.41853 2.61798L4.61853 1.36084Z" fill="#20376D"/>
                </svg>
                <div class="breadcrumbs__item active p1"><?php the_title(); ?></div>
            </div>
            <h1 class="title p3"><?php the_title(); ?></h1>
            <p class="description h5"><?php the_field('sub-title'); ?></p>
            <div class="information">
                <div class="information__tag-list">
                    <?php
                    $compound_terms = get_the_terms(get_the_ID(), 'compound');
                    $purpose_terms  = get_the_terms(get_the_ID(), 'purpose');

                    if ($compound_terms) {
                        foreach ($compound_terms as $term) {
                            ?>
                                <div class="information__tag p2"><?= esc_html($term->name); ?></div>
                            <?php
                        }
                    }

                    if ($purpose_terms) {
                        foreach ($purpose_terms as $term) {
                            ?>
                                <div class="information__tag p2"><?= esc_html($term->name); ?></div>
                            <?php
                        }
                    }
                    ?>
                </div>
                <?php
                if (get_field('pdf_file')){
                    ?>
                        <a href="<?php the_field('pdf_file'); ?>" class="information__tag__file p1" download><?= pll__('Скачать PDF'); ?></a>
                    <?php
                }
                ?>
            </div>
            <div class="content-list">
                <?php
                    while ( have_rows('repeater_description') ) : the_row();
                        ?>
                            <div class="content__item grid-12">
                                <h5 class="content__item__title h5"><?php the_sub_field('title'); ?></h5>
                                <div class="content__item__description p1"><?php the_sub_field('description'); ?></div>
                            </div>
                        <?php
                    endwhile;
                ?>
            </div>
        </div>
        <?= get_template_part('template-part/section-industry') ?>
    </main>
<?php
get_footer();
