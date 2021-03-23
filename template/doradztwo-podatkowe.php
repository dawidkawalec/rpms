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

                        <h2>Optymalne rozwiązania
                        </h2>

                        <p>Wierzymy, że wypracowywanie zindywidualizowanych, efektywnych, a w konsekwencji optymalnych rozwiązań, zapewni odpowiednie zabezpieczenie podatkowe naszych Klientów, jak również doprowadzi do pełnego wykorzystania udostępnionych narzędzi prawno – podatkowych.

Dzięki doświadczonej kadrze oraz wypracowanej metodologii w ramach wykonywania due dilligence jesteśmy w stanie świadczyć usługi dopasowane do potrzeb Klienta, uwzględniając charakterystykę działalności, cele biznesowe oraz możliwości organizacyjno – finansowe.

Naszą siłą jest wzajemnie uzupełniająca się wiedza specjalistów – doradców podatkowych z kwalifikacjami zawodowych prawników, jak i również analityków, doradców gospodarczych oraz finansowych.</p>

                    </div>

                </div>
                <img src="https://rpms.pl/wp-content/uploads/2019/09/up_sek1.jpg?id=25710" alt=""
                    class="uslugi-item__right-img">
            </div>
        </div>
    </section>

    <section class="greybox">
        <div class="container">
            <div class="content">
            <div class="row">
                <div class="col-lg-12">
                    <p class="big"><strong>Szczegółowy zakres usług:</strong></p>
                    <p class="big"><strong>Bieżące doradztwo podatkowe:</strong></p>
                    
                    <ul class="special-list">
                        <li>przygotowywanie wniosków o wydanie indywidualnych interpretacji prawa podatkowego oraz kompleksowe wsparcie Klienta</li>
                        <li>sporządzanie pisemnych opinii i memorandów podatkowych</li>
                        <li>przygotowywanie wniosków o wydanie indywidualnych interpretacji prawa podatkowego</li>
                        <li>dedykowane szkolenia</li>
                        <li>bieżące doradztwo podatkowe</li>
                    </ul>

                    <p class="big"><strong>Audyt podatkowy lub due diligence w obszarze podatkowym:</strong></p>
                    <ul class="special-list"><li>weryfikacja prawidłowości dokonywanych <a href="https://rpms.pl/uslugi-prawne/podatki/">rozliczeń podatkowych</a>;</li><li>due diligence</li></ul>
                    <p class="big"><a href="#"><strong>Postępowanie podatkowe i sądowe:</strong></a></p>
                    <ul class="special-list"><li>nadzór i weryfikacja czynności organów podatkowych, dokonywanych w ramach kontroli skarbowej i podatkowej</li><li>sporządzanie odwołań do organów wyższej instancji oraz skarg do wojewódzkich sądów administracyjnych i skarg kasacyjnych do Naczelnego Sądu Administracyjnego</li><li>reprezentacja Klientów przed organami podatkowymi i wojewódzkimi sądami administracyjnymi oraz przed Naczelnym Sądem Administracyjnym</li><li>przygotowywanie strategii na okoliczność postępowania podatkowego</li></ul>

                    <p class="big"><strong>Ceny transferowe:</strong></p>
                    <ul class="special-list"><li>przygotowanie dokumentacji podatkowych</li><li>wdrożenie polityki cen transferowych</li><li>benchmarking study</li><li>audyt w zakresie ryzyka cen transferowych</li><li>szkolenia z cen transferowych</li><li>wsparcie w przypadku kontroli podatkowych</li></ul>
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