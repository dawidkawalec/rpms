<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>


<div itemscope itemtype="http://schema.org/Person">
    <span itemprop="name" content="<?php the_title(); ?>">
        <?php if ( $linkedin_url = get_field( 'linkedin_url' ) ) : ?>
        <link itemprop="sameAs" href="<?php echo esc_html( $linkedin_url ); ?>">
        <?php endif; ?>
    </span>
    <meta itemprop="jobTitle" content="<?php echo get_field('zespol_stanowisko'); ?>">
    <?php if ( $mail = get_field( 'mail' ) ) : ?>
    <meta itemprop="email" content="<?php echo esc_html( $mail ); ?>">
    <?php endif; ?>
    <meta itemprop="url" content="<?php echo get_permalink(); ?>">
    <meta itemprop="image" content="<?php
				$zespol_zdjecie_osoby = get_field( 'zespol_zdjecie_osoby_kopia' );
				if ( $zespol_zdjecie_osoby ) { ?>
                <?php echo esc_url( $zespol_zdjecie_osoby['url'] ); ?>
                    
                <?php } else { ?>
                <?php $zespol_zdjecie_osoby_kopia = get_field( 'zespol_zdjecie_osoby' ); ?>
                <?php echo esc_url( $zespol_zdjecie_osoby_kopia['url'] ); ?>
                    <?php echo esc_attr( $zespol_zdjecie_osoby_kopia['alt'] ); ?>
                <?php } ?>">
    <meta itemprop="worksFor" type="Organization" content="Kancelaria Prawna RPMS">
</div>


<?php get_template_part( 'template-parts/banner-uslugi');?>

<section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="col-lg-12 text-center">
                    <p id="breadcrumbs"><span><span><a href="https://rpms.craftweb.pl/">Kancelaria prawna RPMS</a> →
                                <span><a href="https://rpms.craftweb.pl/zespol/">Zespół</a> → <span
                                        class="breadcrumb_last"
                                        aria-current="page"><?php the_title() ?></span></span></span></span></p>
                </div>
            </div>
        </div>
</section>


<section class="person">

    <div class="container">

        <div class="row">

            <div class="col-lg-4 image">
                <?php
				$zespol_zdjecie_osoby = get_field( 'zespol_zdjecie_osoby_kopia' );
				if ( $zespol_zdjecie_osoby ) { ?>
                <img src="<?php echo esc_url( $zespol_zdjecie_osoby['url'] ); ?>"
                    alt="<?php echo esc_attr( $zespol_zdjecie_osoby['alt'] ); ?>" />
                <?php } else { ?>
                <?php $zespol_zdjecie_osoby_kopia = get_field( 'zespol_zdjecie_osoby' ); ?>
                <img src="<?php echo esc_url( $zespol_zdjecie_osoby_kopia['url'] ); ?>"
                    alt="<?php echo esc_attr( $zespol_zdjecie_osoby_kopia['alt'] ); ?>" />
                <?php } ?>



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
                    <?php endif; ?>
                </div>
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

    </div>

</section>





<section class="maps mb-5">
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
                            <a href="#lodzkie" style="clip: rect(1px, 1px, 1px, 1px);">Łódz</a><span class="bg"></span>
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