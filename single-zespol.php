<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>


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


<section class="person">

    <div class="container">

        <div class="row">

            <div class="col-lg-4 image">
                <?php
				$zespol_zdjecie_osoby = get_field( 'zespol_zdjecie_osoby' );
				if ( $zespol_zdjecie_osoby ) : ?>
                <img src="<?php echo esc_url( $zespol_zdjecie_osoby['url'] ); ?>"
                    alt="<?php echo esc_attr( $zespol_zdjecie_osoby['alt'] ); ?>" />
                <?php endif; ?>
            </div>

            <div class="col-lg-8 pl-lg-5 desc mt-5 mt-lg-0">
                <div class="stan">
                    <?php if ( $dzial = get_field( 'dzial' ) ) : ?>
                    <?php echo esc_html( $dzial ); ?>
                    <?php endif; ?>
                </div>
                <div class="name"><?php the_title(); ?> –
                    <?php if ( $zespol_stanowisko = get_field( 'zespol_stanowisko' ) ) : ?>
                    <?php echo esc_html( $zespol_stanowisko ); ?>
                    <?php endif; ?></div>
                <?php if ( $opis = get_field( 'opis' ) ) : ?>
                <?php echo $opis; ?>
                <?php endif; ?>
                <a class="more d-flex" href="/zespol">
                    - Zobacz nasz zespół <img class="ml-2" src="/wp-content/themes/rpms/inc/assets/img/arrow.svg"
                        alt="">

                </a>
            </div>

        </div>


        <div class="row row-desc">
            <div class="col-lg-4">
                <div class="row-desc__content">
                    <?php if ( $tekst_pod_zdjeciem = get_field( 'tekst_pod_zdjeciem' ) ) : ?>
                    <?php echo $tekst_pod_zdjeciem; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-8 pl-lg-5">
                <div class="row-desc__content">
                    <?php if ( $tekst_pod_opisem = get_field( 'tekst_pod_opisem' ) ) : ?>
                    <?php echo $tekst_pod_opisem; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>


        <div class="row row-links pt-5 my-4">
            <div class="col-lg-4 text-center mb-4 mb-lg-0">
                <a class="h5 font-weight-bold" href="<?php if ( $link_1 = get_field( 'link_1' ) ) : ?>
					<?php echo esc_url( $link_1 ); ?>
				<?php endif; ?>">
                    <?php if ( $Tekst_link_1 = get_field( 'Tekst_link_1' ) ) : ?>
                    <?php echo esc_html( $Tekst_link_1 ); ?>
                    <?php endif; ?></a>
            </div>
            <div class="col-lg-4 text-center mb-4 mb-lg-0">
                <a class="h5 font-weight-bold" href="<?php if ( $link_2 = get_field( 'link_2' ) ) : ?>
	<?php echo esc_url( $link_2 ); ?>
<?php endif; ?>"><?php if ( $Tekst_link_2 = get_field( 'Tekst_link_2' ) ) : ?>
                    <?php echo esc_html( $Tekst_link_2 ); ?>
                    <?php endif; ?></a>
            </div>
            <div class="col-lg-4 text-center mb-4 mb-lg-0">
                <a class="h5 font-weight-bold" href="<?php if ( $link_3 = get_field( 'link_2' ) ) : ?>
	<?php echo esc_url( $link_3 ); ?>
<?php endif; ?>"><?php if ( $Tekst_link_3 = get_field( 'Tekst_link_3' ) ) : ?>
                    <?php echo esc_html( $Tekst_link_3 ); ?>
                    <?php endif; ?></a>
            </div>
        </div>

    </div>

</section>


<div class="section number" style="background: url(https://rpms.pl/wp-content/uploads/2017/07/22.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5 ">
                <span class="d-block h1 font-weight-bold">Ostatni rok w liczbach</span>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-lg-4">
                <span class="block font-weight-bold">236</span>
                <p>wszczętych postępowan sądowych</p>
            </div>
            <div class="col-lg-4">
                <span class="block font-weight-bold">1963000 zł</span>
                <p>wartość przekazanych spraw windykacyjnych</p>
            </div>
            <div class="col-lg-4">
                <span class="block font-weight-bold">324</span>
                <p>zakończonych spraw windykacyjnych</p>
            </div>
        </div>
    </div>
</div>



<?php get_template_part( 'template-parts/contact');?>



<?php
get_footer();