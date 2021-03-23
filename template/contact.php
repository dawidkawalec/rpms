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
                    <h2 class="my-5 p-0 h1">Skontaktuj się i sprawdź<br><strong>w jaki sposób możemy Ci pomóc!</strong></h2>
                </div>
            </div>
            <div class="row row-contact">
                <div class="col-lg-4">
                    <div class="col-content">
                        <div class="icon"><img src="/wp-content/uploads/2021/02/kontakt.svg" alt=""></div>
                        <p>
                        Kancelaria Prawna RPMS<br>
                        Staniszewski & Wspólnicy<br>
                        ul. Polska 114<br>
                        Poznań 60-401<br>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-content">
                        <div class="icon"><img src="/wp-content/uploads/2021/02/kontakt.svg" alt=""></div>
                        <p>
                        Kancelaria Prawna RPMS<br>
                        Staniszewski & Wspólnicy<br>
                        ul. Polska 114<br>
                        Poznań 60-401<br>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-content">
                        <div class="icon"><img src="/wp-content/uploads/2021/02/kontakt.svg" alt=""></div>
                        <p>
                        Kancelaria Prawna RPMS<br>
                        Staniszewski & Wspólnicy<br>
                        ul. Polska 114<br>
                        Poznań 60-401<br>
                        </p>
                    </div>
                </div> 
            </div>
            <div class="row row-form">
                <div class="col-lg-12">
                    <div class="form">
                        <?php echo do_shortcode('[contact-form-7 id="155" title="Formularz kontaktowy podstorna"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

   

</div>

</div>
<?php
get_footer(); ?>