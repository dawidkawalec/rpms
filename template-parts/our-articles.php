<?php
/**
 * Template part for Artykuły
 * 
 *
 */

?>


<section class="articles articles-single-post mx-3 mb-5">
    <div class="container pb-5">
        <div class="row row-title mb-5">
            <h2>Nasze Aktualności <strong>prawne</strong></h2>
        </div>
        <div class="row row-articles pb-5 owl-carousel">
            <?php
            
            $args_query = array(
                'order' => 'DESC',
				'posts_per_page' => 9
            );

            $query = new WP_Query( $args_query );

            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post(); ?>
            <div class="item">
                <div class="single">
                    <div class="single-content">

                        <div class="image"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></div>

                        <div class="single-content__padding">
                            <div class="date"><?php echo get_the_date(); ?></div>

                            <a href="<?php the_permalink(); ?>">

                                <span class="title"><?php the_title(); ?></span>
                            </a>
                            <p><?php echo wp_trim_words( get_the_content(), 15, '...' ); ?></p>
                            <a href="<?php the_permalink(); ?>" rel="nofollow">

                                <div class="more d-flex">Więcej <img class="ml-2"
                                        src="/wp-content/themes/rpms/inc/assets/img/arrow.svg" alt=""></div>
                            </a>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <?php }
            } else {

            }

            wp_reset_postdata();
            
            ?>
        </div>
        <?php if( !is_front_page() ) : ?>
        <div class="d-flex justify-content-end">
            <?php echo kk_star_ratings(); ?>
        </div>
        <?php endif; ?>
    </div>
</section>