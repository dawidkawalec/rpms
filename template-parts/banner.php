<?php
/**
 * Template part for banner
 *
 */

?>

<section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Kancelaria Prawna<br>
                    <strong>RPMS</strong>
                </h1>
                <div class="tags">
                    <span>prawo</span>
                    <span>|</span>
                    <span>podatki</span>
                    <span>|</span>
                    <span>windykacja</span>
                </div>
            </div>
        </div>
    </div>
</section>



<div class="icon-banner">
    <div class="container">
        <div class="row row-shadow px-3">
                <?php if ( have_rows( 'uslugi' ) ) : ?>
                <?php while ( have_rows( 'uslugi' ) ) :
                    the_row(); ?>
            <div class="col-lg-4 single">

                <div class="icon-banner_single">
                    <?php
                        $link = get_sub_field( 'przekierowanie' );
                        if ( $link ) : ?>
                    
                        <div class="icon">
                            <img src="<?php echo esc_url( get_sub_field( 'ikona' ) ); ?>" alt="ikona">
                        </div>
                        <div class="desc">
                        <a href="<?php echo esc_url( $link ); ?>">
                            <div class="title">
                                <p>
                                    <?php if ( $tytul = get_sub_field( 'tytul' ) ) : ?>
                                    <?php echo esc_html( $tytul ); ?>
                                    <?php endif; ?>
                                </p>
                            </div>
                            </a>
                            <div class="smalldesc">
                                <?php if ( $opis = get_sub_field( 'opis' ) ) : ?>
                                <?php echo esc_html( $opis ); ?>
                                <?php endif; ?>
                            </div>
                            <div class="readmore">
                                 <a href="<?php echo esc_url( $link ); ?>" rel="nofollow">
                                     Więcej <img class="ml-2" src="/wp-content/themes/rpms/inc/assets/img/arrow.svg" alt="">
                                </a>
                            </div>
                        </div>
                   
                    <?php endif; ?>
                </div>
                </div>

                <?php endwhile; ?>
                <?php endif; ?>

        </div>
    </div>
</div>