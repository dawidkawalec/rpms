<?php
/**
* Template Name: Faq
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

    <?php get_template_part( 'template-parts/faq');?>


</div>

</div>
<?php
get_footer(); ?>