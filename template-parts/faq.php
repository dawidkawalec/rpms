<?php
/**
 * Template part for FAQ
 * 
 *
 */

?>


<section class="faq pt-5 pb-5 mx-3" itemscope itemtype="https://schema.org/FAQPage">
    <div class="container">
        <div class="row row-title mt-3">
            <?php if ( get_field('tekst_glowny') ) : ?>
            <h2><?php echo get_field('tekst_glowny'); ?></h2>
            <?php endif; ?>


        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="accordion" id="accordionExample">





                    <?php if ( have_rows( 'faq_pytania' ) ) : ?>
                    <?php while ( have_rows( 'faq_pytania' ) ) :
                            the_row(); 
                            $rowwindex = get_row_index();
                            ?>









                    <div class="card " itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="card-header " id="heading<?php echo $rowwindex; ?>">
                            <h3 class="mb-0">
                                <div class="icon">
                                    <?php
                                    $ikona = get_sub_field( 'ikona' );
                                    if ( $ikona ) : ?>
                                    <img src="<?php echo esc_url( $ikona['url'] ); ?>"
                                        alt="<?php echo esc_attr( $ikona['alt'] ); ?>" />
                                    <?php endif; ?>
                                </div>
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                    data-target="#collapse<?php echo $rowwindex; ?>" aria-expanded="true"
                                    aria-controls="collapse<?php echo $rowwindex; ?>" itemprop="name">
                                    <?php if ( $pytanie = get_sub_field( 'pytanie' ) ) : ?>
                                    <?php echo $pytanie; ?>
                                    <?php endif; ?>
                                </button>
                            </h3>
                        </div>
                        <div id="collapse<?php echo $rowwindex; ?>" class="collapse "
                            aria-labelledby="heading<?php echo $rowwindex; ?>" data-parent="#accordionExample" itemscope
                            itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div class="card-body" itemprop="text">
                                <?php if ( $odpowiedz = get_sub_field( 'odpowiedz' ) ) : ?>
                                <?php echo $odpowiedz; ?>
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>