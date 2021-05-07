<?php
/**
* Template Name: due-diligence-finansowe
 */

get_header(); ?>

<div id="due-diligence-finansowe">

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
                        <div class="first-section-p">
                            <h2>KOMPLEKSOWE WSPARCIE</h2>
                            <p>Zapewniamy kompleksowe wsparcie merytoryczne w procesie weryfikacji i optymalizacji
                                prowadzonej działalności gospodarczej.</p>
                            <p>Klienci zainteresowani zoptymalizowaniem procesów funkcjonowania swojego przedsiębiorstwa
                                oraz inwestorzy zamierzający nabyć udziały czy akcje innego podmiotu gospodarczego lub
                                jego zorganizowanej części mogą skorzystać z usługi prowadzenia kompleksowych <a
                                    href="https://rpms.pl/uslugi-prawne/podatki/">audytów prawno – podatkowych</a>.
                                Zmierzają one do wykrycia potencjalnych nieprawidłowości lub ewentualnych ścieżek
                                rozwoju wynikających z działalności tych podmiotów.</p>
                            <p>Dodatkowo Kancelaria na bieżąco współpracuje z kancelariami podatkowymi, biurami
                                księgowymi, doradcami inwestycyjnymi oraz doświadczonymi menedżerami w celu wsparcia
                                merytorycznego Klienta w zainicjowanym procesie restrukturyzacyjnym i inwestycyjnym.</p>
                            <p>Audyt dopasowany jest do potrzeb danego Klienta i uwzględnia specyfikę branży, w której
                                prowadzi działalność. Usługa audytu prawnego obejmuje między innymi zagadnienia
                                korporacyjne, umowy handlowe, sprawy pracownicze, kwestie administracyjnoprawne, <a
                                    href="https://rpms.pl/rejestracja-znakow-towarowych/">prawa własności
                                    intelektualnej</a>, <a
                                    href="https://rpms.pl/sprawy-sporne-i-postepowanie-sadowe/">postępowania sądowe</a>
                                itd.</p>
                        </div>

                    </div>

                </div>
                <img src="https://rpms.pl/wp-content/uploads/2019/09/of4.jpg" class="uslugi-item__right-img">
            </div>
        </div>
    </section>


    <section class="greybox ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 content">

                    <p class="bold-text" style="text-align: center;">Szczegółowy zakres usług:</p>
                    <ul class="special-list count-2">
                        <li>Audyt formalno-prawny;</li>
                        <li>Audyt podatkowy lub due diligence w obszarze podatkowym;</li>
                        <li>identyfikacja zagrożeń i nieprawidłowości;</li>
                        <li>określenie i wdrożenie zaktualizowanej strategii rozwoju przedsiębiorstwa;</li>
                        <li>optymalizacja wewnętrznych struktur – działu zarządzania, handlowego, obsługi posprzedażowej
                            i kadr;</li>
                        <li>redukcja pasywów / zwiększanie rentowności i spływu należności</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



    <?php get_template_part( 'template-parts/our-articles');?>


    <?php get_template_part( 'template-parts/contact');?>

</div>

</div>
<?php
get_footer(); ?>