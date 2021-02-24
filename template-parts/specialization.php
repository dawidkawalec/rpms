<?php
/**
 * Template part for Spacjalizacj 
 * 
 *
 */

?>


<section class="specialization mt-10">
    <div class="container">
        <div class="row row-title">
            <h3>Nasze <strong>Specjalizacje</strong></h3>
        </div>
        <div class="row">
            <div class="col-lg-8">

                <div class="row mx-2 mx-lg-0">
                    <div class="col-lg-4 p-0 navborder">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <?php if ( have_rows( 'specjalizacje' ) ) : ?>
                            <?php while ( have_rows( 'specjalizacje' ) ) :
                        the_row(); ?>

                            <a class="nav-link <?php if( get_row_index() == 1 ) {echo 'active'; } ?>"
                                id="tabname-<?php echo get_row_index(); ?>" data-toggle="pill"
                                href="#tabid-<?php echo get_row_index(); ?>" role="tab"
                                aria-controls="tabid-<?php echo get_row_index(); ?>" aria-selected="true">
                                <?php if ( $nazwa = get_sub_field( 'nazwa', false, false ) ) : ?><?php echo esc_html( $nazwa ); ?>
                                <?php endif; ?>
                            </a>

                            <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                    </div>
                    <div class="col-lg-8 p-0 pr-lg-3">
                        <div class="tab-content" id="v-pills-tabContent">

                            <?php if ( have_rows( 'specjalizacje' ) ) : ?>
                            <?php while ( have_rows( 'specjalizacje' ) ) :
                        the_row(); ?>




                            <div class="tab-pane fade <?php if( get_row_index() == 1 ) {echo 'show active'; } ?>"
                                id="tabid-<?php echo get_row_index(); ?>" role="tabpanel"
                                aria-labelledby="tabname-<?php echo get_row_index(); ?>">
                                <h4> <?php if ( $nazwa = get_sub_field( 'nazwa' ) ) : ?><?php echo esc_html( $nazwa ); ?>
                                    <?php endif; ?></h4>
                                <?php if ( $opis_specjalizacji = get_sub_field( 'opis_specjalizacji' ) ) : ?>
                                <?php echo $opis_specjalizacji; ?>
                                <?php endif; ?>
                            </div>

                            <?php endwhile; ?>
                            <?php endif; ?>


                        </div>
                    </div>

                </div>

            </div>
            <div class="col-lg-4 form mx-3 mx-lg-0">
                <?php echo do_shortcode('[contact-form-7 id="89" title="Formularz kontaktowy"]'); ?>
            </div>
        </div>
    </div>
</section>

