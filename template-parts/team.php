<?php
/**
 * Template part for Zespól
 * 
 *
 */

?>


<section class="teams py-5 mx-3 mt-5">
    <div class="container zespol-loop">
        <div class="row title mb-5">
            <h2>Zespół Kancelarii <strong>RPMS</strong></h2>
            <div class="row-nav">
                <ul>
                    <li class="prev"><i class="fas fa-long-arrow-alt-left"></i></li>
                    <li class="next"><i class="fas fa-long-arrow-alt-right"></i></li>
                </ul>
            </div>
        </div>
        <div class="row mt-10">
            <div class="row-carousel owl-carousel">
                <div class="item">
                    <a href="#">
                        <img src="https://rpms.craftweb.pl/wp-content/uploads/2021/04/kancelaria_rpms.jpg" alt="">
                    </a>
                </div>
                <div class="item">
                    <div class="row">
                        <?php 
                            // Custom WP query query
                            $args_query = array(
                                'post_type' => array('zespol'),
                                'order' => 'ASC',
                                'posts_per_page' => 3,
                            );

                            $query = new WP_Query( $args_query );

                            if ( $query->have_posts() ) {
                                while ( $query->have_posts() ) {
                                    $query->the_post(); ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-person">
                                <div class="image"><?php
                                        $zespol_zdjecie_osoby = get_field( 'zespol_zdjecie_osoby' );
                                        if ( $zespol_zdjecie_osoby ) : ?>
                                    <img src="<?php echo esc_url( $zespol_zdjecie_osoby['url'] ); ?>"
                                        alt="<?php echo esc_attr( $zespol_zdjecie_osoby['alt'] ); ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="desc">
                                    <a class="more d-flex" href="<?php the_permalink();?>">
                                        <div class="name"><?php the_title(); ?></div>
                                    </a>


                                    <div class="stan">
                                        <?php if ( $zespol_stanowisko = get_field( 'zespol_stanowisko' ) ) : ?>
                                        <?php echo esc_html( $zespol_stanowisko ); ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="spec">
                                        <?php if ( $zespol_specjalizacja = get_field( 'zespol_specjalizacja' ) ) : ?>
                                        <?php echo $zespol_specjalizacja; ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="more">
                                        <a class="more d-flex" href="<?php the_permalink();?>" rel="nofollow">
                                            - Więcej <img class="ml-2"
                                                src="/wp-content/themes/rpms/inc/assets/img/arrow.svg" alt="">

                                        </a>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <?php }
                            } else {

                            }

                            wp_reset_postdata();

                            ?>

                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <?php 
                            // Custom WP query query
                            $args_query = array(
                                'post_type' => array('zespol'),
                                'order' => 'ASC',
                                'posts_per_page' => 3,
                                'offset' => 3,
                            );

                            $query = new WP_Query( $args_query );

                            if ( $query->have_posts() ) {
                                while ( $query->have_posts() ) {
                                    $query->the_post(); ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-person">
                                <div class="image"><?php
                                        $zespol_zdjecie_osoby = get_field( 'zespol_zdjecie_osoby' );
                                        if ( $zespol_zdjecie_osoby ) : ?>
                                    <img src="<?php echo esc_url( $zespol_zdjecie_osoby['url'] ); ?>"
                                        alt="<?php echo esc_attr( $zespol_zdjecie_osoby['alt'] ); ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="desc">
                                    <a class="more d-flex" href="<?php the_permalink();?>">
                                        <div class="name"><?php the_title(); ?></div>
                                    </a>


                                    <div class="stan">
                                        <?php if ( $zespol_stanowisko = get_field( 'zespol_stanowisko' ) ) : ?>
                                        <?php echo esc_html( $zespol_stanowisko ); ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="spec">
                                        <?php if ( $zespol_specjalizacja = get_field( 'zespol_specjalizacja' ) ) : ?>
                                        <?php echo $zespol_specjalizacja; ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="more">
                                        <a class="more d-flex" href="<?php the_permalink();?>" rel="nofollow">
                                            - Więcej <img class="ml-2"
                                                src="/wp-content/themes/rpms/inc/assets/img/arrow.svg" alt="">

                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <?php }
                            } else {

                            }

                            wp_reset_postdata();

                            ?>

                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <?php 
                            // Custom WP query query
                            $args_query = array(
                                'post_type' => array('zespol'),
                                'order' => 'ASC',
                                'posts_per_page' => 3,
                                'offset' => 6,
                            );

                            $query = new WP_Query( $args_query );

                            if ( $query->have_posts() ) {
                                while ( $query->have_posts() ) {
                                    $query->the_post(); ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-person">
                                <div class="image"><?php
                                        $zespol_zdjecie_osoby = get_field( 'zespol_zdjecie_osoby' );
                                        if ( $zespol_zdjecie_osoby ) : ?>
                                    <img src="<?php echo esc_url( $zespol_zdjecie_osoby['url'] ); ?>"
                                        alt="<?php echo esc_attr( $zespol_zdjecie_osoby['alt'] ); ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="desc">
                                    <a class="more d-flex" href="<?php the_permalink();?>">
                                        <div class="name"><?php the_title(); ?></div>
                                    </a>


                                    <div class="stan">
                                        <?php if ( $zespol_stanowisko = get_field( 'zespol_stanowisko' ) ) : ?>
                                        <?php echo esc_html( $zespol_stanowisko ); ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="spec">
                                        <?php if ( $zespol_specjalizacja = get_field( 'zespol_specjalizacja' ) ) : ?>
                                        <?php echo $zespol_specjalizacja; ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="more">
                                        <a class="more d-flex" href="<?php the_permalink();?>" rel="nofollow">
                                            - Więcej <img class="ml-2"
                                                src="/wp-content/themes/rpms/inc/assets/img/arrow.svg" alt="">

                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <?php }
                            } else {

                            }

                            wp_reset_postdata();

                            ?>

                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <?php 
                            // Custom WP query query
                            $args_query = array(
                                'post_type' => array('zespol'),
                                'order' => 'ASC',
                                'posts_per_page' => 3,
                                'offset' => 9,
                            );

                            $query = new WP_Query( $args_query );

                            if ( $query->have_posts() ) {
                                while ( $query->have_posts() ) {
                                    $query->the_post(); ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-person">
                                <div class="image"><?php
                                        $zespol_zdjecie_osoby = get_field( 'zespol_zdjecie_osoby' );
                                        if ( $zespol_zdjecie_osoby ) : ?>
                                    <img src="<?php echo esc_url( $zespol_zdjecie_osoby['url'] ); ?>"
                                        alt="<?php echo esc_attr( $zespol_zdjecie_osoby['alt'] ); ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="desc">
                                    <a class="more d-flex" href="<?php the_permalink();?>">
                                        <div class="name"><?php the_title(); ?></div>
                                    </a>


                                    <div class="stan">
                                        <?php if ( $zespol_stanowisko = get_field( 'zespol_stanowisko' ) ) : ?>
                                        <?php echo esc_html( $zespol_stanowisko ); ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="spec">
                                        <?php if ( $zespol_specjalizacja = get_field( 'zespol_specjalizacja' ) ) : ?>
                                        <?php echo $zespol_specjalizacja; ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="more">
                                        <a class="more d-flex" href="<?php the_permalink();?>" rel="nofollow">
                                            - Więcej <img class="ml-2"
                                                src="/wp-content/themes/rpms/inc/assets/img/arrow.svg" alt="">

                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <?php }
                            } else {

                            }

                            wp_reset_postdata();

                            ?>

                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <?php 
                            // Custom WP query query
                            $args_query = array(
                                'post_type' => array('zespol'),
                                'order' => 'ASC',
                                'posts_per_page' => 3,
                                'offset' => 12,
                            );

                            $query = new WP_Query( $args_query );

                            if ( $query->have_posts() ) {
                                while ( $query->have_posts() ) {
                                    $query->the_post(); ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-person">
                                <div class="image"><?php
                                        $zespol_zdjecie_osoby = get_field( 'zespol_zdjecie_osoby' );
                                        if ( $zespol_zdjecie_osoby ) : ?>
                                    <img src="<?php echo esc_url( $zespol_zdjecie_osoby['url'] ); ?>"
                                        alt="<?php echo esc_attr( $zespol_zdjecie_osoby['alt'] ); ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="desc">
                                    <a class="more d-flex" href="<?php the_permalink();?>">
                                        <div class="name"><?php the_title(); ?></div>
                                    </a>


                                    <div class="stan">
                                        <?php if ( $zespol_stanowisko = get_field( 'zespol_stanowisko' ) ) : ?>
                                        <?php echo esc_html( $zespol_stanowisko ); ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="spec">
                                        <?php if ( $zespol_specjalizacja = get_field( 'zespol_specjalizacja' ) ) : ?>
                                        <?php echo $zespol_specjalizacja; ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="more">
                                        <a class="more d-flex" href="<?php the_permalink();?>" rel="nofollow">
                                            - Więcej <img class="ml-2"
                                                src="/wp-content/themes/rpms/inc/assets/img/arrow.svg" alt="">

                                        </a>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <?php }
                            } else {

                            }

                            wp_reset_postdata();

                            ?>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>