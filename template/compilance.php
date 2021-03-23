<?php
/**
* Template Name: Compilance
 */

get_header(); ?>

<div id="sprawy-sporne">

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
                <div class="col-lg-6 text">
                    <p>Jako Kancelaria specjalizująca się w obsłudze <a
                            href="https://rpms.pl/uslugi-prawne/fintech-technologia-finansowa/">przedsiębiorców z
                            sektora finansowego</a>, <a
                            href="https://rpms.pl/uslugi-prawne/obsluga-prawna-agencji-e-marketingowych-seo-sem/">IT</a>
                        i nowoczesnych technologii, zapewniamy pełne wsparcie we wdrażaniu i późniejszej ewaluacji
                        wewnętrznych procedur w przedsiębiorstwie, dzięki którym jego działania stają się zgodne z
                        aktualnie obowiązującymi regulacjami prawnymi, a także chronią daną jednostkę przed nadużyciami
                        pracowników i podwykonawców dzięki wdrożeniu jasnych i sztywnych zasad funkcjonowania
                        poszczególnych działów oraz reguł dotyczących wewnętrznej wymiany informacji (Corporate
                        compliance).</p>
                    <p>Od 2018 roku compilance powinien być powszechnie stosowanym standardem w polskich firmach. Proces
                        ten pozwala przedsiębiorcom nie tylko uniknąć wysokich kar finansowych i przykrych konsekwencji
                        prawnych (m.in. w wyniku naruszeń ochrony danych osobowych – <a title="RODO"
                            href="https://rpms.pl/obsluga-prawna-rodo/">RODO</a>), ale także umożliwia utrzymanie
                        pozytywnej opinii o firmie jako podmiocie uczciwym, wiarygodnym i etycznym.</p>
                    <p>Dobra reputacja decyduje o Twoim sukcesie. Dlatego wdrożenie procedur compilance jest działaniem
                        długofalowym, wpływającym zarówno na biznesowe standardy, jak i zwiększającym skuteczność
                        ochrony prawnej i wszelkich działań firmy, w tym szans na powodzenie podczas przetargów.</p>
                </div>
                <div class="col-lg-6 specialization">
                    <div class="form">
                        <?php echo do_shortcode('[contact-form-7 id="142" title="Formularz uslugi"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="greybox">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 content">
                    <p class="bold-text">Compilance pozwala na:</p>
                    <ul class="special-list">
                        <li>Uniknięcie strat wizerunkowych,</li>
                        <li>Zwiększenie zaufania do firmy ze strony akcjonariuszy i klientów,</li>
                        <li>Zmniejszenie ryzyka wynikającego z niedopatrzeń i niedostosowania się do nowych
                            przepisów/regulacji prawnych,</li>
                        <li>Uniknięcie odpowiedzialności karnej, cywilnej i karnoskarbowej.<br></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="greybox">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 content">
                    <p class="bold-text text-center">Business compilance – obszary, które obsługujemy:</p>
                    <ol class="number-list">
                        <li><a title="Prawo pracy" href="https://rpms.pl/prawo-pracy/">Prawo pracy</a> – opracowywanie
                            wewnętrznych polityk i kodeksów (np. regulaminu pracy, regulaminu etyki, polityki
                            antydyskryminacyjnej), weryfikacja dokumentacji pracowniczej, szkolenia z zakresu prawa
                            pracy, doradztwo w zakresie zagadnień bezpieczeństwa, higieny i wypadków przy pracy,
                            postępowania w razie naruszeń ze strony pracowników, ochrony prywatności pracowników, oraz
                            zasad ich monitorowania (kontroli skrzynek e-mail, nagrywania itd.).</li>
                        <li>RODO i ochrona danych osobowych – szkolenia z zakresu RODO, przeprowadzenie audytu mającego
                            na celu sprawdzenie, czy firma postępuje zgodnie z regulacjami o ochronie danych osobowych,
                            opracowanie polityk, procedur i wzorów dokumentów związanych z RODO i ochroną danych (np.
                            umów i klauzul zgód na przetwarzanie danych).</li>
                        <li>MAR (Market Abuse Regulation) – doradztwo i reprezentacja przedsiębiorstwa przed Komisją
                            Nadzoru Finansowego.</li>
                        <li>Ochrona konkurencji – symulacja kontroli UOKiK oraz ocena pozycji rynkowej przedsiębiorstwa.
                        </li>
                        <li>Bezpieczeństwo teleinformatyczne – kontrola systemów i audyt bezpieczeństwa własności
                            intelektualnych i tajemnic firmy, szkolenie pracowników działu IT i wybranych grup
                            pracowników w zakresie ochrony informacji przed działaniami szpiegowskimi.</li>
                        <li>Bezpieczeństwo ekonomiczne – opracowanie i weryfikacja odpowiednich procedur oraz polityki
                            cen transferowych, szkolenia pracowników.</li>
                        <li>Procedury antykorupcyjne – pełnomocnictwo w postępowaniu przygotowawczym lub rozpoznawczym,
                            przygotowanie procedur antykorupcyjnych i szkoleń pracowników.</li>
                        <li>Sprawdzenie wiarygodności kontrahenta – szybka weryfikacja i dostarczenie raportu o
                            wiarygodności kontrahenta, m.in. na podstawie rejestrów, baz (w tym zagranicznych),
                            bezpośrednich zapytań do odpowiednich podmiotów i wywiadu środowiskowego.<br></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>


    <div class="bluebox">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content">
                        <p class="bold-text" style="text-align: justify;"><strong>Jak możemy Ci pomóc?</strong></p>
                        <p>Liczba przepisów i regulacji prawa rośnie z każdym rokiem. Stale ewoluują również rynkowe
                            tendencje. Z tych względów warto być na bieżąco i zaktualizować wewnętrzne procedury w swoim
                            biznesie. Pozwala to na uniknięcie zróżnicowanych, negatywnych konsekwencji, takich jak
                            chociażby utrata reputacji, odpowiedzialność karna, czy straty finansowe. W tym celu
                            wystarczy skorzystać z pomocy doświadczonych ekspertów Kancelarii RPMS w zakresie wdrożenia
                            zasad Corporate compliance w przedsiębiorstwie.</p>
                        <p>
                            Opracujemy dla Ciebie specjalny program zgodności z prawem, dzięki któremu wszystkie
                            działania Twojego przedsiębiorstwa będą spójne z obowiązującymi regulacjami zewnętrznymi i
                            wewnętrznymi.</p>

                        <p>Nasze usługi opierają się na:</p>

                        <ul class="special-list">
                            <li>Identyfikacji potencjalnych zagrożeń, czyli analizie obowiązujących przepisów
                                organizacyjno-prawnych pod kątem Twojej działalności.</li>
                            <li>Zaplanowaniu działań, które pozwolą na zniwelowanie ewentualnego ryzyka, a więc
                                opracowaniu odpowiednich, wewnętrznych regulacji, procedur i szkoleń pracowników.</li>
                            <li>Pomocy prawnej w razie wystąpienia sytuacji kryzysowej w Twoim przedsiębiorstwie.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php get_template_part( 'template-parts/our-articles');?>

</div>

<?php get_template_part( 'template-parts/contact');?>
</div>
<?php
get_footer(); ?>