<?php
/**
 * Template part for Partnerzy
 * 
 *
 */

?>


<section class="partners my-5">
        <div class="container">
            <div class="row row-title">
                    <h3>Jesteśmy <strong>partnerami</strong></h3>
            </div>
        </div>
        <div class="row row-box m-0">

        <?php if ( have_rows( 'columna' ) ) : ?>
	<?php while ( have_rows( 'columna' ) ) :
		the_row(); ?>
		
		

        <div class="col-lg-4 single">
                <div class="single__content">
                    <div class="logo"><img src="<?php echo esc_url( get_sub_field( 'logo' ) ); ?>" alt=""></div>
                    <div class="title">
                    <?php if ( $tytul = get_sub_field( 'tytul' ) ) : ?>
                        <?php echo $tytul; ?>
                    <?php endif; ?>
                    </div>
                    <div class="desc">
                        <?php if ( $opis = get_sub_field( 'opis' ) ) : ?>
                            <?php echo $opis; ?>
                        <?php endif; ?>
                    </div>
                    <div class="link">
                    <?php
                        $link = get_sub_field( 'przekierowanie_przycisku' );
                        if ( $link ) : ?>
                            <a class="button" href="<?php echo esc_url( $link ); ?>">Dowiedź się więcej</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

	



	<?php endwhile; ?>
<?php endif; ?>


        </div>
</section>