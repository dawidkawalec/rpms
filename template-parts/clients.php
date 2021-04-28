<?php
/**
 * Template part for Opinie
 * 
 *
 */

?>




<section class="opinion pt-4 pb-5">
    <div class="container">
        <div class="row row-title mt-3">
            <h2>Opinie <strong>klientów kancelarii</strong></h2>
        </div>
        <div class="row row-nav">
            <ul class="w-100">
                <li class="prev"><i class="fas fa-long-arrow-alt-left"></i></li>
                <li class="next"><i class="fas fa-long-arrow-alt-right"></i></li>
            </ul>
        </div>
        <div class="row px-3 ">
            <div class="owl-carousel">


                <?php if ( have_rows( 'opinie_pole_powtarzalne' , '6' ) ) : ?>
                <?php while ( have_rows( 'opinie_pole_powtarzalne' , '6') ) :
                        the_row(); ?>


                <div class="item">
                    <div class="item-content">
                        <div class="head">
                            <?php if ( $tekst_pogrubiony = get_sub_field( 'tekst_pogrubiony' , '6') ) : ?>
                            <?php echo $tekst_pogrubiony; ?>
                            <?php endif; ?>
                        </div>
                        <div class="subhead">
                            <?php if ( $tekst = get_sub_field( 'tekst' , '6') ) : ?>
                            <?php echo $tekst; ?>
                            <?php endif; ?>
                        </div>
                        <div class="readmore">
                            Rozwiń
                        </div>
                        <div class="logo">
                            <?php
                        $logo_klienta = get_sub_field( 'logo_klienta' , '6');
                        if ( $logo_klienta ) : ?>
                            <img src="<?php echo esc_url( $logo_klienta['url'] ); ?>"
                                alt="<?php echo esc_attr( $logo_klienta['alt'] ); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>







                <?php endwhile; ?>
                <?php endif; ?>



            </div>
        </div>
    </div>
</section>