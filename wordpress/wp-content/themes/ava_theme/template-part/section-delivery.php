<?php
$front_page_id = get_option('page_on_front');
if (function_exists('pll_get_post')) {
    $front_page_id = pll_get_post($front_page_id);
}
?>
<div class="delivery">
    <div class="delivery__title h1"><?= get_field('delivery_title', $front_page_id); ?></div>
    <p class="delivery__description p1"><?= get_field('delivery_description', $front_page_id); ?></p>
    <div class="delivery__inner">
        <img src="<?= get_field('delivery_image', $front_page_id); ?>" alt="image" class="delivery__image" loading="lazy">
        <div class="delivery__list grid-12">
            <?php
            while ( have_rows('repeater_delivery', $front_page_id) ) : the_row();
                ?>
                <div class="delivery__item">
                    <h4 class="delivery__item__title h4"><?php the_sub_field('title'); ?></h4>
                    <div class="delivery__item__inner">
                        <p class="delivery__item__description p1"><?php the_sub_field('description'); ?></p>
                        <svg class="delivery__item__icon" width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.61853 1.36084C5.48656 0.864826 5.92057 0.61682 6.38149 0.519704C6.78935 0.43377 7.21065 0.43377 7.61851 0.519704C8.07943 0.61682 8.51345 0.864826 9.38147 1.36084L11.5815 2.61798C12.4623 3.12133 12.9027 3.373 13.2232 3.72664C13.5067 4.03952 13.7209 4.40873 13.8519 4.81011C14 5.26376 14 5.77102 14 6.78555V9.21445C14 10.229 14 10.7362 13.8519 11.1899C13.7209 11.5913 13.5067 11.9605 13.2232 12.2734C12.9027 12.627 12.4623 12.8787 11.5815 13.382L9.38147 14.6392C8.51345 15.1352 8.07943 15.3832 7.61851 15.4803C7.21065 15.5662 6.78935 15.5662 6.38149 15.4803C5.92057 15.3832 5.48656 15.1352 4.61853 14.6392L2.41853 13.382C1.53768 12.8787 1.09725 12.627 0.776833 12.2734C0.493338 11.9605 0.27908 11.5913 0.148071 11.1899C0 10.7362 0 10.229 0 9.21445V6.78555C0 5.77102 0 5.26376 0.148071 4.81011C0.27908 4.40873 0.493338 4.03952 0.776833 3.72664C1.09725 3.373 1.53768 3.12133 2.41853 2.61798L4.61853 1.36084Z" fill="#20376D"/>
                        </svg>
                    </div>
                </div>
            <?php
            endwhile;
            ?>
        </div>
    </div>
</div>
