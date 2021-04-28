<?php
/**
* Template Name: Zaufali nam
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

    <?php get_template_part( 'template-parts/clients');?>

    <div class="logotype grid mt-5 mb-5">
        <div class="container">
            <div class="row">
                <?php if ( have_rows( 'logotypy' , '6' ) ) : ?>
                <?php while ( have_rows( 'logotypy', '6' ) ) :
                                the_row(); ?>

                <div class="col-lg-3 mb-5 item text-center">
                    <img src=" <?php echo esc_url( get_sub_field( 'logo', '6' ) ); ?>" alt="">
                </div>


                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div id="alllogos">Zobacz wszystkie</div>


</div>

</div>
<?php
get_footer(); ?>