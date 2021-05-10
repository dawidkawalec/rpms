<?php
/**
* Template Name: Windykacja miasta
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

    <section class="text-form my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 text">
                    <?php if ( $windykacja_miasta_opis_intro = get_field( 'windykacja_miasta_opis_intro' ) ) : ?>
                    <?php echo $windykacja_miasta_opis_intro; ?>
                    <?php endif; ?>
                    <div class="logotype pt-4 pb-2">
                        <div class="owl-carousel">
                            <?php if ( have_rows( 'logotypy' , '6' ) ) : ?>
                            <?php while ( have_rows( 'logotypy', '6' ) ) :
                            the_row(); ?>

                            <div class="item">
                                <img src=" <?php echo esc_url( get_sub_field( 'logo', '6' ) ); ?>" alt="">
                            </div>


                            <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>



                    <div class="windykacja-jak-dziala">
                        <h2><strong><?php if ( $windykacja_miasta_jak_to_dziala_tytul = get_field( 'windykacja_miasta_jak_to_dziala_tytul' ) ) : ?>
                                <?php echo esc_html( $windykacja_miasta_jak_to_dziala_tytul ); ?>
                                <?php endif; ?></strong></h2>



                        <?php if ( have_rows( 'windykacja_miasta_ikony' ) ) : ?>
                        <?php while ( have_rows( 'windykacja_miasta_ikony' ) ) :
                        the_row(); ?>
                        <div class="windykacja-jak-dziala__item">
                            <?php
                        $ikona = get_sub_field( 'ikona' );
                        if ( $ikona ) : ?>
                            <div class="windykacja-jak-dziala__item--icon">
                                <img src="<?php echo esc_url( $ikona['url'] ); ?>"
                                    alt="<?php echo esc_attr( $ikona['alt'] ); ?>" />
                            </div>
                            <?php endif; ?>

                            <?php if ( $opis = get_sub_field( 'opis' ) ) : ?>
                            <div class="windykacja-jak-dziala__item--desc">
                                <p>
                                    <?php echo esc_html( $opis ); ?>
                                </p>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>


                    </div>

                </div>
                <div class="col-lg-5 specialization">
                    <div class="form form-windykacja-miasta">
                        <?php echo do_shortcode('[contact-form-7 id="4013" title="Formularz windykacja miasta"]'); ?>
                    </div>
                    <p class="mt-5 d-block" style="    color: #bfa071;
        text-align: center;
        font-size: 1.6rem;
        line-height: 1.5;"><strong>Wybierając usługi RPMS
                            sprawnie odzyskasz pieniądze</strong></p>
                </div>
            </div>
        </div>
    </section>

    <section class="text-form my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-6">
                    <img src="https://rpms.pl/wp-content/uploads/2019/09/Group-214.png" alt="">
                </div>
                <div class="col-xl-5 col-lg-6 text">
                    <h2><strong><?php if ( $windykacja_miasta_liczby_tytul = get_field( 'windykacja_miasta_liczby_tytul' ) ) : ?>
                            <?php echo esc_html( $windykacja_miasta_liczby_tytul ); ?>
                            <?php endif; ?></strong></h2>
                    <div class="windykacja-dlugow-miasto">


                        <?php if ( have_rows( 'windykacja_miasta_liczby_ikony' ) ) : ?>
                        <?php while ( have_rows( 'windykacja_miasta_liczby_ikony' ) ) :
                        the_row(); ?>
                        <div class="windykacja-dlugow-miasto__item">
                            <?php
                        $ikona = get_sub_field( 'ikona' );
                        if ( $ikona ) : ?>
                            <div class="windykacja-dlugow-miasto__item--icon">
                                <img src="<?php echo esc_url( $ikona['url'] ); ?>"
                                    alt="<?php echo esc_attr( $ikona['alt'] ); ?>" />
                            </div>
                            <?php endif; ?>
                            <div class="windykacja-dlugow-miasto__item--desc">
                                <p>
                                    <?php if ( $liczba = get_sub_field( 'liczba' ) ) : ?>
                                    <span><?php echo esc_html( $liczba ); ?></span>
                                    <?php endif; ?>

                                    <?php if ( $podpis = get_sub_field( 'podpis' ) ) : ?>
                                    <?php echo esc_html( $podpis ); ?>
                                    <?php endif; ?>
                                </p>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-form my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <?php if ( $windykacja_miasta_lewa_strona = get_field( 'windykacja_miasta_lewa_strona' ) ) : ?>
                    <?php echo $windykacja_miasta_lewa_strona; ?>
                    <?php endif; ?>
                </div>
                <div class="col-lg-6">
                    <?php if ( $windykacja_miasta_prawa_strona = get_field( 'windykacja_miasta_prawa_strona' ) ) : ?>
                    <?php echo $windykacja_miasta_prawa_strona; ?>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </section>


    <section class="maps my-5">
        <div class="container">


            <div class="row justify-content-center">

                <div class="col-lg-6">
                    <div class="desc text-center">
                        <h2>Kliknij na województwo i sprawdź gdzie świadczymy <strong>usługi windykacji</strong></h2>
                    </div>
                    <div id="demo-agents">
                        <ul style="list-style-type: none;" class="p-0">
                            <?php if ( have_rows( 'opis_windykacja_powtarzalne', 6 ) ) : ?>
                            <?php while ( have_rows( 'opis_windykacja_powtarzalne', 6 ) ) :
                            the_row(); ?>

                            <li id="<?php if ( $id = get_sub_field( 'id' ) ) : ?><?php echo esc_html( $id ); ?><?php endif; ?>"
                                style="display: none;">
                                <?php if ( $opis_windykacji = get_sub_field( 'opis_windykacji' ) ) : ?>
                                <?php echo $opis_windykacji; ?>
                                <?php endif; ?>
                            </li>

                            <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div id="map-poland">
                        <ul class="poland cssmap" style="float: left;">
                            <li class="pl1">
                                <span class="m">
                                    <span class="s1"></span><span class="s2"></span><span class="s3"></span><span
                                        class="s4"></span><span class="s5"></span><span class="s6"></span><span
                                        class="s7"></span><span class="s8"></span>
                                    <span class="s9"></span><span class="s10"></span><span class="s11"></span><span
                                        class="s12"></span><span class="s13"></span><span class="s14"></span><span
                                        class="s15"></span><span class="s16"></span>
                                    <span class="s17"></span><span class="s18"></span><span class="s19"></span><span
                                        class="s20"></span><span class="s21"></span><span class="s22"></span><span
                                        class="s23"></span><span class="s24"></span>
                                    <span class="s25"></span><span class="s26"></span><span class="s27"></span><span
                                        class="s28"></span><span class="s29"></span><span class="s30"></span><span
                                        class="s31"></span><span class="s32"></span>
                                    <span class="s33"></span><span class="s34"></span><span class="s35"></span><span
                                        class="s36"></span><span class="s37"></span><span class="s38"></span>
                                </span>
                                <a href="#dolnoslaskie" style="clip: rect(1px, 1px, 1px, 1px);">Wrocław</a><span
                                    class="bg"></span>
                            </li>
                            <li class="pl2">
                                <span class="m">
                                    <span class="s1"></span><span class="s2"></span><span class="s3"></span><span
                                        class="s4"></span><span class="s5"></span><span class="s6"></span><span
                                        class="s7"></span><span class="s8"></span>
                                    <span class="s9"></span><span class="s10"></span><span class="s11"></span><span
                                        class="s12"></span><span class="s13"></span><span class="s14"></span><span
                                        class="s15"></span><span class="s16"></span>
                                    <span class="s17"></span><span class="s18"></span><span class="s19"></span><span
                                        class="s20"></span><span class="s21"></span><span class="s22"></span><span
                                        class="s23"></span><span class="s24"></span>
                                    <span class="s25"></span><span class="s26"></span><span class="s27"></span><span
                                        class="s28"></span><span class="s29"></span><span class="s30"></span><span
                                        class="s31"></span><span class="s32"></span>
                                    <span class="s33"></span><span class="s34"></span><span class="s35"></span><span
                                        class="s36"></span><span class="s37"></span>
                                </span>
                                <a href="#kujawsko-pomorskie" style="clip: rect(1px, 1px, 1px, 1px);">Bydgoszcz</a><span
                                    class="bg"></span>
                            </li>
                            <li class="pl3">
                                <span class="m">
                                    <span class="s1"></span><span class="s2"></span><span class="s3"></span><span
                                        class="s4"></span><span class="s5"></span><span class="s6"></span><span
                                        class="s7"></span><span class="s8"></span>
                                    <span class="s9"></span><span class="s10"></span><span class="s11"></span><span
                                        class="s12"></span><span class="s13"></span><span class="s14"></span><span
                                        class="s15"></span><span class="s16"></span>
                                    <span class="s17"></span><span class="s18"></span><span class="s19"></span><span
                                        class="s20"></span><span class="s21"></span><span class="s22"></span><span
                                        class="s23"></span><span class="s24"></span>
                                    <span class="s25"></span><span class="s26"></span><span class="s27"></span><span
                                        class="s28"></span><span class="s29"></span><span class="s30"></span><span
                                        class="s31"></span><span class="s32"></span>
                                    <span class="s33"></span><span class="s34"></span><span class="s35"></span>
                                </span>
                                <a href="#lubelskie" style="clip: rect(1px, 1px, 1px, 1px);">Lubelskie</a><span
                                    class="bg"></span>
                            </li>
                            <li class="pl4">
                                <span class="m">
                                    <span class="s1"></span><span class="s2"></span><span class="s3"></span><span
                                        class="s4"></span><span class="s5"></span><span class="s6"></span><span
                                        class="s7"></span><span class="s8"></span>
                                    <span class="s9"></span><span class="s10"></span><span class="s11"></span><span
                                        class="s12"></span><span class="s13"></span><span class="s14"></span><span
                                        class="s15"></span><span class="s16"></span>
                                    <span class="s17"></span><span class="s18"></span><span class="s19"></span><span
                                        class="s20"></span><span class="s21"></span><span class="s22"></span><span
                                        class="s23"></span><span class="s24"></span>
                                    <span class="s25"></span><span class="s26"></span><span class="s27"></span><span
                                        class="s28"></span><span class="s29"></span><span class="s30"></span>
                                </span>
                                <a href="#lubuskie" style="clip: rect(1px, 1px, 1px, 1px);">Lublin</a><span
                                    class="bg"></span>
                            </li>
                            <li class="pl5">
                                <span class="m">
                                    <span class="s1"></span><span class="s2"></span><span class="s3"></span><span
                                        class="s4"></span><span class="s5"></span><span class="s6"></span><span
                                        class="s7"></span><span class="s8"></span>
                                    <span class="s9"></span><span class="s10"></span><span class="s11"></span><span
                                        class="s12"></span><span class="s13"></span><span class="s14"></span><span
                                        class="s15"></span><span class="s16"></span>
                                    <span class="s17"></span><span class="s18"></span><span class="s19"></span><span
                                        class="s20"></span><span class="s21"></span><span class="s22"></span><span
                                        class="s23"></span><span class="s24"></span>
                                    <span class="s25"></span><span class="s26"></span><span class="s27"></span><span
                                        class="s28"></span><span class="s29"></span><span class="s30"></span><span
                                        class="s31"></span><span class="s32"></span>
                                    <span class="s33"></span><span class="s34"></span>
                                </span>
                                <a href="#lodzkie" style="clip: rect(1px, 1px, 1px, 1px);">Łódz</a><span
                                    class="bg"></span>
                            </li>
                            <li class="pl6">
                                <span class="m">
                                    <span class="s1"></span><span class="s2"></span><span class="s3"></span><span
                                        class="s4"></span><span class="s5"></span><span class="s6"></span><span
                                        class="s7"></span><span class="s8"></span>
                                    <span class="s9"></span><span class="s10"></span><span class="s11"></span><span
                                        class="s12"></span><span class="s13"></span><span class="s14"></span><span
                                        class="s15"></span><span class="s16"></span>
                                    <span class="s17"></span><span class="s18"></span><span class="s19"></span><span
                                        class="s20"></span><span class="s21"></span><span class="s22"></span><span
                                        class="s23"></span><span class="s24"></span>
                                </span>
                                <a href="#malopolskie" style="clip: rect(1px, 1px, 1px, 1px);">Kraków</a><span
                                    class="bg"></span>
                            </li>
                            <li class="pl7">
                                <span class="m">
                                    <span class="s1"></span><span class="s2"></span><span class="s3"></span><span
                                        class="s4"></span><span class="s5"></span><span class="s6"></span><span
                                        class="s7"></span><span class="s8"></span>
                                    <span class="s9"></span><span class="s10"></span><span class="s11"></span><span
                                        class="s12"></span><span class="s13"></span><span class="s14"></span><span
                                        class="s15"></span><span class="s16"></span>
                                    <span class="s17"></span><span class="s18"></span><span class="s19"></span><span
                                        class="s20"></span><span class="s21"></span><span class="s22"></span><span
                                        class="s23"></span><span class="s24"></span>
                                    <span class="s25"></span><span class="s26"></span><span class="s27"></span><span
                                        class="s28"></span><span class="s29"></span><span class="s30"></span><span
                                        class="s31"></span><span class="s32"></span>
                                    <span class="s33"></span><span class="s34"></span><span class="s35"></span><span
                                        class="s36"></span><span class="s37"></span><span class="s38"></span><span
                                        class="s39"></span><span class="s40"></span>
                                    <span class="s41"></span><span class="s42"></span><span class="s43"></span><span
                                        class="s44"></span><span class="s45"></span><span class="s46"></span><span
                                        class="s47"></span><span class="s48"></span>
                                    <span class="s49"></span><span class="s50"></span><span class="s51"></span><span
                                        class="s52"></span><span class="s53"></span><span class="s54"></span><span
                                        class="s55"></span>
                                </span>
                                <a href="#mazowieckie" style="clip: rect(1px, 1px, 1px, 1px);">Warszawa</a><span
                                    class="bg"></span>
                            </li>
                            <li class="pl8">
                                <span class="m">
                                    <span class="s1"></span><span class="s2"></span><span class="s3"></span><span
                                        class="s4"></span><span class="s5"></span><span class="s6"></span><span
                                        class="s7"></span><span class="s8"></span>
                                    <span class="s9"></span><span class="s10"></span><span class="s11"></span><span
                                        class="s12"></span><span class="s13"></span><span class="s14"></span><span
                                        class="s15"></span><span class="s16"></span>
                                    <span class="s17"></span><span class="s18"></span><span class="s19"></span><span
                                        class="s20"></span><span class="s21"></span><span class="s22"></span><span
                                        class="s23"></span><span class="s24"></span>
                                </span>
                                <a href="#opolskie" style="clip: rect(1px, 1px, 1px, 1px);">Opole</a><span
                                    class="bg"></span>
                            </li>
                            <li class="pl9">
                                <span class="m">
                                    <span class="s1"></span><span class="s2"></span><span class="s3"></span><span
                                        class="s4"></span><span class="s5"></span><span class="s6"></span><span
                                        class="s7"></span><span class="s8"></span>
                                    <span class="s9"></span><span class="s10"></span><span class="s11"></span><span
                                        class="s12"></span><span class="s13"></span><span class="s14"></span><span
                                        class="s15"></span><span class="s16"></span>
                                    <span class="s17"></span><span class="s18"></span><span class="s19"></span><span
                                        class="s20"></span><span class="s21"></span><span class="s22"></span><span
                                        class="s23"></span><span class="s24"></span>
                                    <span class="s25"></span><span class="s26"></span><span class="s27"></span><span
                                        class="s28"></span><span class="s29"></span><span class="s30"></span><span
                                        class="s31"></span><span class="s32"></span>
                                </span>
                                <a href="#podkarpackie" style="clip: rect(1px, 1px, 1px, 1px);">Rzeszów</a><span
                                    class="bg"></span>
                            </li>
                            <li class="pl10">
                                <span class="m">
                                    <span class="s1"></span><span class="s2"></span><span class="s3"></span><span
                                        class="s4"></span><span class="s5"></span><span class="s6"></span><span
                                        class="s7"></span><span class="s8"></span>
                                    <span class="s9"></span><span class="s10"></span><span class="s11"></span><span
                                        class="s12"></span><span class="s13"></span><span class="s14"></span><span
                                        class="s15"></span><span class="s16"></span>
                                    <span class="s17"></span><span class="s18"></span><span class="s19"></span><span
                                        class="s20"></span><span class="s21"></span><span class="s22"></span><span
                                        class="s23"></span><span class="s24"></span>
                                    <span class="s25"></span><span class="s26"></span><span class="s27"></span><span
                                        class="s28"></span><span class="s29"></span><span class="s30"></span><span
                                        class="s31"></span><span class="s32"></span>
                                    <span class="s33"></span>
                                </span>
                                <a href="#podlaskie" style="clip: rect(1px, 1px, 1px, 1px);">Białystok</a><span
                                    class="bg"></span>
                            </li>
                            <li class="pl11">
                                <span class="m">
                                    <span class="s1"></span><span class="s2"></span><span class="s3"></span><span
                                        class="s4"></span><span class="s5"></span><span class="s6"></span><span
                                        class="s7"></span><span class="s8"></span>
                                    <span class="s9"></span><span class="s10"></span><span class="s11"></span><span
                                        class="s12"></span><span class="s13"></span><span class="s14"></span><span
                                        class="s15"></span><span class="s16"></span>
                                    <span class="s17"></span><span class="s18"></span><span class="s19"></span><span
                                        class="s20"></span><span class="s21"></span><span class="s22"></span><span
                                        class="s23"></span><span class="s24"></span>
                                    <span class="s25"></span><span class="s26"></span><span class="s27"></span><span
                                        class="s28"></span><span class="s29"></span><span class="s30"></span><span
                                        class="s31"></span><span class="s32"></span>
                                    <span class="s33"></span><span class="s34"></span><span class="s35"></span><span
                                        class="s36"></span><span class="s37"></span><span class="s38"></span>
                                </span>
                                <a href="#pomorskie" style="clip: rect(1px, 1px, 1px, 1px);">Gdańsk</a><span
                                    class="bg"></span>
                            </li>
                            <li class="pl12">
                                <span class="m">
                                    <span class="s1"></span><span class="s2"></span><span class="s3"></span><span
                                        class="s4"></span><span class="s5"></span><span class="s6"></span><span
                                        class="s7"></span><span class="s8"></span>
                                    <span class="s9"></span><span class="s10"></span><span class="s11"></span><span
                                        class="s12"></span><span class="s13"></span><span class="s14"></span><span
                                        class="s15"></span><span class="s16"></span>
                                    <span class="s17"></span><span class="s18"></span><span class="s19"></span><span
                                        class="s20"></span><span class="s21"></span><span class="s22"></span><span
                                        class="s23"></span><span class="s24"></span>
                                    <span class="s25"></span><span class="s26"></span><span class="s27"></span><span
                                        class="s28"></span><span class="s29"></span><span class="s30"></span><span
                                        class="s31"></span>
                                </span>
                                <a href="#slaskie" style="clip: rect(1px, 1px, 1px, 1px);">Katowice</a><span
                                    class="bg"></span>
                            </li>
                            <li class="pl13">
                                <span class="m">
                                    <span class="s1"></span><span class="s2"></span><span class="s3"></span><span
                                        class="s4"></span><span class="s5"></span><span class="s6"></span><span
                                        class="s7"></span><span class="s8"></span>
                                    <span class="s9"></span><span class="s10"></span><span class="s11"></span><span
                                        class="s12"></span><span class="s13"></span><span class="s14"></span><span
                                        class="s15"></span><span class="s16"></span>
                                    <span class="s17"></span><span class="s18"></span><span class="s19"></span><span
                                        class="s20"></span><span class="s21"></span><span class="s22"></span><span
                                        class="s23"></span><span class="s24"></span>
                                    <span class="s25"></span><span class="s26"></span><span class="s27"></span><span
                                        class="s28"></span>
                                </span>
                                <a href="#swietokrzyskie" style="clip: rect(1px, 1px, 1px, 1px);">Kielce</a><span
                                    class="bg"></span>
                            </li>
                            <li class="pl14">
                                <span class="m">
                                    <span class="s1"></span><span class="s2"></span><span class="s3"></span><span
                                        class="s4"></span><span class="s5"></span><span class="s6"></span><span
                                        class="s7"></span><span class="s8"></span>
                                    <span class="s9"></span><span class="s10"></span><span class="s11"></span><span
                                        class="s12"></span><span class="s13"></span><span class="s14"></span><span
                                        class="s15"></span><span class="s16"></span>
                                    <span class="s17"></span><span class="s18"></span><span class="s19"></span><span
                                        class="s20"></span><span class="s21"></span><span class="s22"></span><span
                                        class="s23"></span><span class="s24"></span>
                                    <span class="s25"></span><span class="s26"></span><span class="s27"></span><span
                                        class="s28"></span><span class="s29"></span><span class="s30"></span><span
                                        class="s31"></span><span class="s32"></span>
                                    <span class="s33"></span><span class="s34"></span><span class="s35"></span><span
                                        class="s36"></span><span class="s37"></span>
                                </span>
                                <a href="#warminsko-mazurskie" style="clip: rect(1px, 1px, 1px, 1px);">Olsztyn</a><span
                                    class="bg"></span>
                            </li>
                            <li class="pl15">
                                <span class="m">
                                    <span class="s1"></span><span class="s2"></span><span class="s3"></span><span
                                        class="s4"></span><span class="s5"></span><span class="s6"></span><span
                                        class="s7"></span><span class="s8"></span>
                                    <span class="s9"></span><span class="s10"></span><span class="s11"></span><span
                                        class="s12"></span><span class="s13"></span><span class="s14"></span><span
                                        class="s15"></span><span class="s16"></span>
                                    <span class="s17"></span><span class="s18"></span><span class="s19"></span><span
                                        class="s20"></span><span class="s21"></span><span class="s22"></span><span
                                        class="s23"></span><span class="s24"></span>
                                    <span class="s25"></span><span class="s26"></span><span class="s27"></span><span
                                        class="s28"></span><span class="s29"></span><span class="s30"></span><span
                                        class="s31"></span><span class="s32"></span>
                                    <span class="s33"></span><span class="s34"></span><span class="s35"></span><span
                                        class="s36"></span><span class="s37"></span><span class="s38"></span><span
                                        class="s39"></span><span class="s40"></span>
                                    <span class="s41"></span><span class="s42"></span><span class="s43"></span><span
                                        class="s44"></span><span class="s45"></span><span class="s46"></span><span
                                        class="s47"></span><span class="s48"></span>
                                    <span class="s49"></span><span class="s50"></span>
                                </span>
                                <a href="#wielkopolskie" style="clip: rect(1px, 1px, 1px, 1px);">Poznań</a><span
                                    class="bg"></span>
                            </li>
                            <li class="pl16">
                                <span class="m">
                                    <span class="s1"></span><span class="s2"></span><span class="s3"></span><span
                                        class="s4"></span><span class="s5"></span><span class="s6"></span><span
                                        class="s7"></span><span class="s8"></span>
                                    <span class="s9"></span><span class="s10"></span><span class="s11"></span><span
                                        class="s12"></span><span class="s13"></span><span class="s14"></span><span
                                        class="s15"></span><span class="s16"></span>
                                    <span class="s17"></span><span class="s18"></span><span class="s19"></span><span
                                        class="s20"></span><span class="s21"></span><span class="s22"></span><span
                                        class="s23"></span><span class="s24"></span>
                                    <span class="s25"></span><span class="s26"></span><span class="s27"></span><span
                                        class="s28"></span><span class="s29"></span><span class="s30"></span><span
                                        class="s31"></span><span class="s32"></span>
                                    <span class="s33"></span><span class="s34"></span><span class="s35"></span><span
                                        class="s36"></span><span class="s37"></span><span class="s38"></span>
                                </span>
                                <a href="#zachodniopomorskie" style="clip: rect(1px, 1px, 1px, 1px);">Szczecin</a><span
                                    class="bg"></span>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>

        </div>
    </section>
    <!--<section class="links mt-5">
        <div class="container">
            <ul class="k-ul-lp mt-5 zespol row list-unstyled justify-content-center">

                <?php if ( have_rows( 'windykacja_miasta_linki' ) ) : ?>
                <?php while ( have_rows( 'windykacja_miasta_linki' ) ) :
		        the_row(); ?>
                <li class="col-lg-4 mb-5 text-center">
                    <a class="h5 font-weight-bold " href="
                    <?php if ( $link_url = get_sub_field( 'link_url' ) ) : ?>
                    <?php echo esc_html( $link_url ); ?>
                    <?php endif; ?>">

                        <?php if ( $link_tekst = get_sub_field( 'link_tekst' ) ) : ?>
                        <?php echo esc_html( $link_tekst ); ?>
                        <?php endif; ?></a>
                </li>
                <?php endwhile; ?>
                <?php endif; ?>

            </ul>

        </div>
    </section>-->

    <?php get_template_part( 'template-parts/our-articles');?>
    <?php get_template_part( 'template-parts/contact');?>
</div>
<?php
get_footer(); ?>