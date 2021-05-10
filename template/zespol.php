<?php
/**
* Template Name: Zespół
 */

get_header(); ?>

<div id="zespol">

    <?php get_template_part( 'template-parts/banner-uslugi');?>

    <section class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <?php
                    if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                    }
                ?>
                </div>
            </div>
        </div>
    </section>


    <section class="zespol-desc my-5">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>


    <section class="zespol-loop">
        <div class="container">
            <div class="row">

                <?php 
                // Custom WP query query
                $args_query = array(
                    'post_type' => array('zespol'),
                    'order' => 'ASC',
                );

                $query = new WP_Query( $args_query );

                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post(); ?>
                <div class="col-lg-4">
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


                            <div class="stan"><?php if ( $zespol_stanowisko = get_field( 'zespol_stanowisko' ) ) : ?>
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
                                    - Więcej <img class="ml-2" src="/wp-content/themes/rpms/inc/assets/img/arrow.svg"
                                        alt="">

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
    </section>


    <div class="uslugi-list">
        <section class="uslugi-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="uslugi-item__content">
                            <p class="big">
                                <?php if ( $zespol_podtekstem_tytul_sekcji = get_field( 'zespol_podtekstem_tytul_sekcji' ) ) : ?>
                                <?php echo esc_html( $zespol_podtekstem_tytul_sekcji ); ?>
                                <?php endif; ?>
                            </p>
                            <?php if ( $zespol_podtekstem_opis = get_field( 'zespol_podtekstem_opis' ) ) : ?>
                            <?php echo $zespol_podtekstem_opis; ?>
                            <?php endif; ?>
                            <a href="<?php if ( $zespol_podtekstem_link_url = get_field( 'zespol_podtekstem_link_url' ) ) : ?>
                            <?php echo esc_url( $zespol_podtekstem_link_url ); ?>
                                <?php endif; ?>"
                                class="cta"><?php if ( $zespol_podtekstem_link_tekst = get_field( 'zespol_podtekstem_link_tekst' ) ) : ?>
                                <?php echo esc_html( $zespol_podtekstem_link_tekst ); ?>
                                <?php endif; ?></a>
                        </div>

                    </div>
                    <div class="col-lg-5"></div>
                    <img src="<?php if ( $zespol_podtekstem_zdjecie = get_field( 'zespol_podtekstem_zdjecie' ) ) : ?>
                        <?php echo esc_url( $zespol_podtekstem_zdjecie ); ?>
                    <?php endif; ?>" alt="" class="uslugi-item__right-img">
                </div>
            </div>
        </section>
    </div>



    <div class="section number" style="background: url(https://rpms.pl/wp-content/uploads/2017/07/22.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5 ">
                    <span
                        class="d-block h1 font-weight-bold"><?php if ( $zespol_liczby_tytul_sekcji = get_field( 'zespol_liczby_tytul_sekcji' ) ) : ?>
                        <?php echo esc_html( $zespol_liczby_tytul_sekcji ); ?>
                        <?php endif; ?></span>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-4">
                    <span
                        class="block font-weight-bold"><?php if ( $zespol_liczby_liczba_1 = get_field( 'zespol_liczby_liczba_1' ) ) : ?>
                        <?php echo esc_html( $zespol_liczby_liczba_1 ); ?>
                        <?php endif; ?></span>
                    <p><?php if ( $zespol_liczby_podpis_1 = get_field( 'zespol_liczby_podpis_1' ) ) : ?>
                        <?php echo esc_html( $zespol_liczby_podpis_1 ); ?>
                        <?php endif; ?></p>
                </div>
                <div class="col-lg-4">
                    <span
                        class="block font-weight-bold"><?php if ( $zespol_liczby_liczba_2 = get_field( 'zespol_liczby_liczba_2' ) ) : ?>
                        <?php echo esc_html( $zespol_liczby_liczba_2 ); ?>
                        <?php endif; ?></span>
                    <p><?php if ( $zespol_liczby_podpis_2 = get_field( 'zespol_liczby_podpis_2' ) ) : ?>
                        <?php echo esc_html( $zespol_liczby_podpis_2 ); ?>
                        <?php endif; ?></p>
                </div>
                <div class="col-lg-4">
                    <span
                        class="block font-weight-bold"><?php if ( $zespol_liczby_liczba_3 = get_field( 'zespol_liczby_liczba_3' ) ) : ?>
                        <?php echo esc_html( $zespol_liczby_liczba_3 ); ?>
                        <?php endif; ?></span>
                    <p><?php if ( $zespol_liczby_podpis_3 = get_field( 'zespol_liczby_podpis_3' ) ) : ?>
                        <?php echo esc_html( $zespol_liczby_podpis_3 ); ?>
                        <?php endif; ?></p>
                </div>
            </div>
        </div>
    </div>

</div>

</div>

<?php get_template_part( 'template-parts/contact');?>


<?php
get_footer(); ?>