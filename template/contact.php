<?php
/**
* Template Name: Kontakt
 */

get_header(); ?>

<div id="prawo-pracy">

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


    <section class="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="my-5 p-0 h1">
                        <?php if ( get_field('kontakt_tekst_glowny') ) : ?>
                        <?php echo get_field('kontakt_tekst_glowny'); ?>
                        <?php endif; ?>
                    </h2>
                </div>
            </div>
            <div class="row row-contact align-items-center mb-4 mt-3">







                <?php if ( have_rows( 'kontakt_dane_kontaktowe' ) ) : ?>
                <?php while ( have_rows( 'kontakt_dane_kontaktowe' ) ) :
                    the_row(); ?>
                <div class="col-lg-4">
                    <div class="col-content">
                        <div class="icon"> <?php
                        $ikona = get_sub_field( 'ikona' );
                        if ( $ikona ) : ?>
                            <img src="<?php echo esc_url( $ikona['url'] ); ?>"
                                alt="<?php echo esc_attr( $ikona['alt'] ); ?>" />
                            <?php endif; ?>
                        </div>
                        <?php if ( $tekst = get_sub_field( 'tekst' ) ) : ?>
                        <?php echo $tekst; ?>

                        <?php endif; ?>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>

            </div>
            <div class="row row-form">
                <div class="col-lg-12">
                    <div class="form">

                        <?php if ( $kontakt_shortcode_formularz_kontaktowy = get_field( 'kontakt_shortcode_formularz_kontaktowy' ) ) : ?>
                        <?php echo do_shortcode($kontakt_shortcode_formularz_kontaktowy); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>



</div>

</div>
<?php
get_footer(); ?>