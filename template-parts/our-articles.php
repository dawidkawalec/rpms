<?php
/**
 * Template part for Artykuły
 * 
 *
 */

?>


<section class="articles mx-3">
    <div class="container">
    <div class="row row-title mb-5">
            <h3>Nasze <strong>Aktualności prawne</strong></h3>
    </div>
        <div class="row row-articles pb-10">
            <?php
            
            $args_query = array(
                'order' => 'DESC',
                'posts_per_page' => 3,
            );

            $query = new WP_Query( $args_query );

            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post(); ?>
                    <div class="col-lg-4 mb-5 mb-lg-0 single">
                <div class="single-content">
                <a href="<?php the_permalink(); ?>">
                        <div class="image"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></div>
                        <div class="single-content__padding">
                        <div class="date"><?php get_the_date(); ?></div>
                        <h2 class="title"><?php the_title(); ?></h2>
                        <p><?php echo wp_trim_words( get_the_content(), 15, '...' ); ?></p>
                        <div class="more d-flex">Więcej <img class="ml-2" src="/wp-content/themes/rpms/inc/assets/img/arrow.svg" alt=""></div>
                        </div>
                    </a>
                </div>
            </div>
                <?php }
            } else {

            }

            wp_reset_postdata();
            
            ?>
            
            
        </div>  
        <div class="row send-form mt-5 pb-5">
            <a href="#">Wyślij formularz</a>
        </div>
    </div>
</section>