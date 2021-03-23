<?php
/**
* Template Name: Obsługa prawna startupów
 */

get_header(); ?>
<div id="prawo-pracy">
    <?php get_template_part( 'template-parts/banner-uslugi');?>
    <section class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <?php
                    if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb( '
					<p id="breadcrumbs">','</p>' );
                    }
                ?>
                </div>
            </div>
        </div>
    </section>



    <div class="uslugi-list">
        <section class="uslugi-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="uslugi-item__content">
                            <h2><strong>Przygotowanie i wsparcie</strong></h2>
                            <p style="text-align: left;">Kancelaria w ramach <a
                                    href="https://rpms.pl/uslugi-prawne">świadczonych usług prawnych</a> w sposób
                                szczególny wspiera przedsiębiorców w początkowej fazie rozwoju, dając im możliwość
                                zrozumienia mechanizmów prawnych obowiązujących w obrocie gospodarczym oraz zapewnia
                                przygotowanie i wdrożenie wszelkich procedur zmierzających do zabezpieczenia interesów
                                Klienta – zarówno w ramach relacji z partnerami, jak i wynikających z powszechnie
                                obowiązujących regulacji prawnych, dotyczących funkcjonowania w danej branży. Wierzymy,
                                że pełne i prawidłowe wsparcie na tym etapie rozwoju zapewni skuteczniejszą i
                                bezpieczniejszą realizację założeń, które stanowiły podstawę i impuls do rozpoczęcia
                                działalności.</p>
                        </div>

                    </div>
                    <div class="col-lg-5"></div>
                    <img src="https://rpms.pl/wp-content/uploads/2019/09/up_sek1.jpg?id=25710" alt=""
                        class="uslugi-item__right-img">
                </div>
            </div>
        </section>
    </div>



    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <h2 class="h2 text-center font-weight-bold"><strong>Case STUDY</strong></h2>
                </div>
            </div>
        </div>
    </section>


    <section class="uslugi-tabs">
        <div class="container">
            <div class="col-lg-12">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item col-lg-4">
                        <a class="nav-link active" id="pills-rodo-tab" data-toggle="pill" href="#pills-rodo" role="tab"
                            aria-controls="pills-rodo" aria-selected="true">Case #3</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-rodo" role="tabpanel"
                        aria-labelledby="pills-rodo-tab">
                        <div class="row">
                            <div class="col-lg-6">
                                <p>We wrześniu 2016 r. do Kancelarii zgłosił się klient zamierzający rozpocząć swoją
                                    działalność w zakresie sprzedaży usług przez internet.</p>
                                <p>W ramach zleconej usługi zapewniono pełne wsparcie w procedurze rozpoczęcia
                                    działalności, a w szczególności:</p>
                                <ul class="k_ul">
                                    <li>– przygotowano wzory umów spółki a następnie doprowadzono do rejestracji
                                        działalności w KRS;</li>
                                    <li>– przygotowano wzory dokumentów potrzebnych do faktycznego rozpoczęcia
                                        działalności, z jednoczesnym zabezpieczeniem interesów Klienta, w tym:
                                        <ul>
                                            <li>a) dokumentów, klauzul i informacji podlegających wdrożeniu na stronę
                                                internetową;</li>
                                            <li>b) umów handlowych, jak i dokumentów wewnętrznych – regulaminów, umów o
                                                pracę, umów z podwykonawcami</li>
                                        </ul>
                                    </li>
                                    <li>– przygotowano i wdrożono zasady
                                        <a href="/obsluga-prawna-rodo/">ochrony danych osobowych</a>
                                    </li>
                                    <li>– przeszkolono kadrę zarządzającą oraz pracowników;</li>
                                    <li>– zapewniono pełne wsparcie w dalszym funkcjonowaniu działalności</li>
                                </ul>
                                <p>Od rozpoczęcia działalności spółka odnotowuje systematyczny wzrost przychodów przy
                                    jednoczesnym zachowaniu wysokiej rentowności i stabilnego spływu należności.</p>
                            </div>
                            <div class="col-lg-6">
                                <img src="https://rpms.pl/wp-content/uploads/2019/07/przychód-start-up.png" alt="">
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