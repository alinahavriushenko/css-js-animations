<?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>

<article id="characters">
    <div class="main-character">
        <h3><span class="dynamic-title">Les personnages</span></h3>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php
        while ($characters_query->have_posts()) {
            $characters_query->the_post();
            ?>
                <div class="swiper-slide">
                    <figure>
                        <?php the_post_thumbnail('full'); ?>
                        <figcaption><?php the_title(); ?></figcaption>
                    </figure>
                </div> <?php
        }
        wp_reset_postdata();
        ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
</article>