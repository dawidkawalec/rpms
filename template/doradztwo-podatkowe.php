<?php
/**
* Template Name: Doradztwo podatkowe
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
                        <img src="https://rpms.pl/wp-content/uploads/2019/09/Kompozycja-21.png" alt="">

                        <h2 style="    display: inline-block;
    margin-left: 1em;">Optymalne rozwiązania
                        </h2>

                        <p>Wierzymy, że wypracowywanie zindywidualizowanych, efektywnych, a w konsekwencji optymalnych
                            rozwiązań, zapewni odpowiednie zabezpieczenie podatkowe naszych Klientów, jak również
                            doprowadzi do pełnego wykorzystania udostępnionych narzędzi prawno – podatkowych.

                            Dzięki doświadczonej kadrze oraz wypracowanej metodologii w ramach wykonywania due
                            dilligence jesteśmy w stanie świadczyć usługi dopasowane do potrzeb Klienta, uwzględniając
                            charakterystykę działalności, cele biznesowe oraz możliwości organizacyjno – finansowe.

                            Naszą siłą jest wzajemnie uzupełniająca się wiedza specjalistów – doradców podatkowych z
                            kwalifikacjami zawodowych prawników, jak i również analityków, doradców gospodarczych oraz
                            finansowych.</p>

                    </div>

                </div>
                <img src="https://rpms.pl/wp-content/uploads/2019/09/up_sek1.jpg?id=25710" alt=""
                    class="uslugi-item__right-img">
            </div>
        </div>
    </section>



    <section class="faq pt-5 pb-5 mx-3 mt-5">
        <div class="container">
            <div class="row row-title mt-3">
                <h2>Szczegółowy zakres usług</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="accordion" id="accordionExample">
                        <div class="card show">
                            <div class="card-header show" id="headingOne">
                                <h3 class="mb-2">
                                    <button class="btn btn-link btn-block text-left" type="button"
                                        data-toggle="collapse" data-target="#biezace-doractwo-podatkowe"
                                        aria-expanded="true" aria-controls="biezace-doractwo-podatkowe">
                                        Bieżące doradztwo podatkowe
                                    </button>
                                    </h2>
                            </div>

                            <div id="biezace-doractwo-podatkowe" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="special-list">
                                        <li>przygotowywanie wniosków o wydanie indywidualnych interpretacji prawa
                                            podatkowego oraz kompleksowe wsparcie Klienta</li>
                                        <li>sporządzanie pisemnych opinii i memorandów podatkowych</li>
                                        <li>przygotowywanie wniosków o wydanie indywidualnych interpretacji prawa
                                            podatkowego</li>
                                        <li>dedykowane szkolenia</li>
                                        <li>bieżące doradztwo podatkowe</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h3 class="mb-2">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#audyt-podatkowy" aria-expanded="false"
                                        aria-controls="audyt-podatkowy">
                                        Audyt podatkowy lub <a href="https://rpms.pl/due-diligence-finansowe/">due
                                            diligence</a> w obszarze podatkowym</button>
                                    </h2>
                            </div>
                            <div id="audyt-podatkowy" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="special-list">
                                        <li>weryfikacja prawidłowości dokonywanych <a
                                                href="https://rpms.pl/uslugi-prawne/podatki/">rozliczeń podatkowych</a>;
                                        </li>
                                        <li>due diligence</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h3 class="mb-2">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#postepowanie-podatkowe"
                                        aria-expanded="false" aria-controls="postepowanie-podatkowe">
                                        <a href="https://rpms.pl/sprawy-sporne-i-postepowanie-sadowe/">Postępowanie
                                            podatkowe i sądowe</a>

                                    </button>
                                    </h2>
                            </div>
                            <div id="postepowanie-podatkowe" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="special-list">
                                        <li>nadzór i weryfikacja czynności organów podatkowych, dokonywanych w ramach
                                            kontroli skarbowej i podatkowej</li>
                                        <li>sporządzanie odwołań do organów wyższej instancji oraz skarg do wojewódzkich
                                            sądów administracyjnych i skarg kasacyjnych do Naczelnego Sądu
                                            Administracyjnego</li>
                                        <li>reprezentacja Klientów przed organami podatkowymi i wojewódzkimi sądami
                                            administracyjnymi oraz przed Naczelnym Sądem Administracyjnym</li>
                                        <li>przygotowywanie strategii na okoliczność postępowania podatkowego</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h3 class="mb-2">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#ceny-transferowe" aria-expanded="false"
                                        aria-controls="ceny-transferowe">
                                        Ceny transferowe
                                    </button>
                                    </h2>
                            </div>
                            <div id="ceny-transferowe" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="special-list">
                                        <li>przygotowanie dokumentacji podatkowych</li>
                                        <li>wdrożenie polityki cen transferowych</li>
                                        <li>benchmarking study</li>
                                        <li>audyt w zakresie ryzyka cen transferowych</li>
                                        <li>szkolenia z cen transferowych</li>
                                        <li>wsparcie w przypadku kontroli podatkowych</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
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