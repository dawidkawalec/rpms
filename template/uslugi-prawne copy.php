<?php
/**
* Template Name: Prawo turystyczne i lotnicze
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
                        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
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
                        <?php if ( $uslugi_prawne_s1_tresc = get_field( 'uslugi_prawne_s1_tresc' ) ) : ?>
                        <?php echo $uslugi_prawne_s1_tresc; ?>
                        <?php endif; ?>

                    </div>

                </div>

                <?php
                $uslugi_prawne_s1_obrazek = get_field( 'uslugi_prawne_s1_obrazek' );
                if ( $uslugi_prawne_s1_obrazek ) : ?>
                <img src="<?php echo esc_url( $uslugi_prawne_s1_obrazek['url'] ); ?>" class="uslugi-item__right-img"
                    alt="<?php echo esc_attr( $uslugi_prawne_s1_obrazek['alt'] ); ?>" />
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="uslugi-ol">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="big">
                        <strong><?php if ( $uslugi_prawne_list_tytul = get_field( 'uslugi_prawne_list_tytul' ) ) : ?>
                            <?php echo esc_html( $uslugi_prawne_list_tytul ); ?>
                            <?php endif; ?></strong>
                    </p>
                    <?php if ( $uslugi_prawne_list_lista = get_field( 'uslugi_prawne_list_lista' ) ) : ?>
                    <?php echo $uslugi_prawne_list_lista; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>

    <div class="uslugi-list">


        <?php if ( have_rows( 'uslugi_prawne_uslugi_uslugi' ) ) : ?>
        <?php while ( have_rows( 'uslugi_prawne_uslugi_uslugi' ) ) :
		the_row(); ?>
        <section class="uslugi-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="uslugi-item__content">
                            <?php if ( $tresc = get_sub_field( 'tresc' ) ) : ?>
                            <?php echo $tresc; ?>
                            <?php endif; ?>



                        </div>

                    </div>
                    <div class="col-lg-5"></div>

                    <?php
		$obrazek = get_sub_field( 'obrazek' );
		if ( $obrazek ) : ?>
                    <img src="<?php echo esc_url( $obrazek['url'] ); ?>" class="uslugi-item__right-img"
                        alt="<?php echo esc_attr( $obrazek['alt'] ); ?>" />
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <?php endwhile; ?>
        <?php endif; ?>







        <!-- <section class="uslugi-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="uslugi-item__content">

                            <h2>Tworzenie i rejestracja spółek </h2>

                            <p>Kancelaria zajmuje się świadczeniem kompleksowych usług w zakresie <strong>tworzenia i
                                    rejestracji podmiotów gospodarczych</strong>, w szczególności spółek prawa
                                handlowego, ich
                                <strong>oddziałów, fundacji i stowarzyszeń.</strong>
                            </p>

                            <p>Prawnicy Kancelarii przygotowują umowy oraz innego rodzaju akty założycielskie podmiotów
                                gospodarczych oraz reprezentują Klientów w trakcie czynności prawnych, tworzących te
                                podmioty (np. przy zawieraniu umowy przed notariuszem), a także w <strong>postępowaniach
                                    rejestrowych</strong> oraz przez internet (<strong>w trybie S24</strong>). Doradzamy
                                również w zakresie wyboru
                                odpowiedniej formy prowadzenia działalności gospodarczej, biorąc pod uwagę w
                                szczególności kwestie organizacyjne, prawne oraz podatkowe.</p>

                            <p>Kancelaria na bieżąco współpracuje z <strong>notariuszami</strong> oraz doradcami w celu
                                zapewnienia wdrożenia optymalnych rozwiązań dotyczących nowo utworzonych lub przejętych
                                podmiotów.</p>

                            <a href="https://rpms.pl/prawo-spolek-przeksztalcenia-fuzje-i-przejecia/"
                                class="cta">Obsługa spółek</a>

                        </div>

                    </div>
                    <div class="col-lg-5"></div>
                    <img src="https://rpms.pl/wp-content/uploads/2019/09/AdobeStock_210605453.jpg?id=25771" alt=""
                        class="uslugi-item__right-img">
                </div>
            </div>
        </section>-->



    </div>

    <section class="uslugi-tabs">
        <div class="container">
            <div class="row">
                <?php if ( $uslugi_prawne_spec_tresc = get_field( 'uslugi_prawne_spec_tresc' ) ) : ?>
                <div class="col-lg-12 text-center row-title">
                    <h2><strong>
                            <?php echo esc_html( $uslugi_prawne_spec_tresc ); ?>
                        </strong></h2>
                </div>
                <?php endif; ?>














                <div class="col-lg-12">
                    <?php if ( have_rows( 'uslugi_prawne_spec_specjalizacje' ) ) : ?>
                    <?php while ( have_rows( 'uslugi_prawne_spec_specjalizacje' ) ) :
	            	the_row(); 
                    $rowwindex = get_row_index();
                    ?>
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-<?php echo $rowwindex; ?>-tab" data-toggle="pill"
                                href="#pills-<?php echo $rowwindex; ?>" role="tab"
                                aria-controls="pills-<?php echo $rowwindex; ?>" aria-selected="true">
                                <?php if ( $tytul = get_sub_field( 'tytul' ) ) : ?>
                                <?php echo esc_html( $tytul ); ?>
                                <?php endif; ?>
                            </a>
                        </li>
                    </ul>
                    <?php endwhile; ?>
                    <?php endif; ?>

                    <div class="tab-content" id="pills-tabContent">
                        <?php if ( have_rows( 'uslugi_prawne_spec_specjalizacje' ) ) : ?>
                        <?php while ( have_rows( 'uslugi_prawne_spec_specjalizacje' ) ) :
                        the_row(); 
                        $rowwindex = get_row_index();
                        ?>
                        <div class="tab-pane fade show active" id="pills-<?php echo $rowwindex; ?>" role="tabpanel"
                            aria-labelledby="pills-<?php echo $rowwindex; ?>-tab">
                            <?php if ( $tresc = get_sub_field( 'tresc' ) ) : ?>
                            <?php echo $tresc; ?>
                            <?php endif; ?>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part( 'template-parts/our-articles');?>
    <?php get_template_part( 'template-parts/contact');?>
</div>
<?php
get_footer(); ?>