<?php
/*
  Template part for Spacjalizacj 
  
 
 */
?>
<section class="specialization mt-5">
    <div class="container">
        <div class="row row-title">
            <h2>Nasze <strong>Specjalizacje</strong></h2>
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
                            <?php if ( $nazwa = get_sub_field( 'nazwa', false, false ) ) : ?>

                            <a class="nav-link <?php if( get_row_index() == 1 ) {echo 'active'; } ?>"
                                id="tabname-<?php echo get_row_index(); ?>" data-toggle="pill"
                                href="#<?php if ( $hash = get_sub_field( 'hash' ) ) : ?><?php echo esc_html( $hash ); ?><?php endif; ?>"
                                role="tab"
                                aria-controls="<?php echo str_replace(' ', '-', strtolower(esc_html( $nazwa ))); ?>"
                                aria-selected="true">
                                <?php echo esc_html( $nazwa ); ?>

                            </a>
                            <?php endif; ?>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-8 p-0 pr-lg-3">
                        <div class="tab-content" id="v-pills-tabContent">
                            <?php if ( have_rows( 'specjalizacje' ) ) : ?>
                            <?php while ( have_rows( 'specjalizacje' ) ) :
            the_row(); ?>
                            <?php if ( $nazwa = get_sub_field( 'nazwa', false, false ) ) : ?>
                            <div class="tab-pane fade <?php if( get_row_index() == 1 ) {echo 'show active'; } ?>"
                                id="<?php if ( $hash = get_sub_field( 'hash' ) ) : ?><?php echo esc_html( $hash ); ?><?php endif; ?>"
                                role="tabpanel" aria-labelledby="tabname-<?php echo get_row_index(); ?>">
                                <h3> <?php echo esc_html( $nazwa ); ?>
                                </h3>
                                <?php if ( $opis_specjalizacji = get_sub_field( 'opis_specjalizacji' ) ) : ?>
                                <?php echo $opis_specjalizacji; ?>
                                <?php endif; ?>
                            </div>
                            <?php endif; ?>
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