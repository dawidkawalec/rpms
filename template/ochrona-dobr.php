<?php
/**
* Template Name: Ochrona dóbr osobistych
 */

get_header(); ?>
<div id="uslugi-prawne">
    <?php get_template_part( 'template-parts/banner-uslugi');?>
    <section class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <?php
                    if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb( '
					<p id="breadcrumbs">','</p>' );
                    }
                ?>
                </div>
            </div>
        </div>
    </section>
    <section class="uslugi-item">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="uslugi-item__content">

                        <p>W ramach usług skierowanych do klientów e-biznesowych oferujemy pełne wsparcie w zakresie
                            ochrony i zwalczania tzw. „czarnego marketingu” – negatywnych treści publikowanych w
                            Internecie, naruszających dobra osobiste Klienta lub stanowiące pomówienie (zniesławienie),
                            publikowanych przez:</p>
                        <ul class="special-list">
                            <li>byłych pracowników;</li>
                            <li>konkurencję;</li>
                            <li>niezadowolonych klientów.</li>
                        </ul>
                        <p>Posiadamy doświadczenie w zwalczaniu negatywnych treści naruszających dobra osobiste naszych
                            Klientów.</p>
                        <p>Skutecznie reprezentujemy interesy klientów zarówno w bezpośrednim sporze z osobą
                            dopuszczającą się naruszenia, jak i na portalach udostępniających opinie (na profilu Google
                            Moja Firma, Pracuj.pl, Opineo.pl, CENEO i innych).</p>
                    </div>
                </div>
                <img src="https://rpms.pl/wp-content/uploads/2019/09/up_sek1.jpg?id=25710" alt=""
                    class="uslugi-item__right-img">
            </div>
        </div>
    </section>


    <?php get_template_part( 'template-parts/our-articles');?>
    <?php get_template_part( 'template-parts/contact');?>
</div>
<?php
get_footer(); ?>