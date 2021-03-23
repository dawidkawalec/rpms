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
                            <div class="name"><?php the_title(); ?></div>
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
                                <a class="more d-flex" href="<?php the_permalink();?>">
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
                            <p class="big">Dział windykacji
                            </p>
                            <p>Posiadamy <strong>rozbudowany oraz prężnie funkcjonujący dział windykacyjny</strong>, w
                                ramach którego
                                doświadczeni negocjatorzy oraz prawnicy prowadzą działania z zakresu <a
                                    href="https://rpms.pl/windykacja/">windykacji</a> miękkiej
                                (polubownej) z uwzględnieniem zachowania dobrych stosunków z klientami, a także
                                windykacji sądowej i egzekucji.

                                Dział windykacyjny jest <strong>wyposażony w narzędzia automatyzujące procesy
                                    windykacyjne</strong>, co
                                pozwala nam na szybką realizację zleceń, a także bieżące informowanie Naszych Klientów o
                                stanie sprawy.</p>
                            <a href="/kontakt" class="cta">Skontakuj się</a>
                        </div>

                    </div>
                    <div class="col-lg-5"></div>
                    <img src="https://rpms.pl/wp-content/uploads/2020/01/Windykacja-nale%C5%BCno%C5%9Bci-RPMS-e1580887118363-800x600.jpg"
                        alt="" class="uslugi-item__right-img">
                </div>
            </div>
        </section>
    </div>



    <div class="section number" style="background: url(https://rpms.pl/wp-content/uploads/2017/07/22.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5 ">
                    <span class="d-block h1 font-weight-bold">Ostatni rok w liczbach</span>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-4">
                    <span class="block font-weight-bold">236</span>
                    <p>wszczętych postępowan sądowych</p>
                </div>
                <div class="col-lg-4">
                    <span class="block font-weight-bold">1963000 zł</span>
                    <p>wartość przekazanych spraw windykacyjnych</p>
                </div>
                <div class="col-lg-4">
                    <span class="block font-weight-bold">324</span>
                    <p>zakończonych spraw windykacyjnych</p>
                </div>
            </div>
        </div>
    </div>

</div>

</div>

<?php get_template_part( 'template-parts/contact');?>


<?php
get_footer(); ?>