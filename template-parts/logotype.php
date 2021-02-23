<?php
/**
 * Template part for Logotypy
 * 
 *
 */

?>




<section class="logotype pt-4 pb-2">
    <div class="container">
        <div class="row px-3 ">
            <div class="owl-carousel">
            <?php if ( have_rows( 'logotypy' ) ) : ?>
            <?php while ( have_rows( 'logotypy' ) ) :
                the_row(); ?>
                
                <div class="item">
                   <img src=" <?php echo esc_url( get_sub_field( 'logo' ) ); ?>" alt="">
                </div>


            <?php endwhile; ?>
        <?php endif; ?>
            </div>
        </div>
    </div>
</section>




