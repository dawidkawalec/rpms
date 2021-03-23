<?php
/**
* Template Name: Rejestracja znaków towarowych
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






    <section class="text-form my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text">
                    <h2 style="text-align: center;
                    font-size: 2rem;
                    font-weight: 900;">Rejestracja znaku towarowego – Zabezpiecz swoje prawa do marki</h2>

                    <p style="text-align: justify;">
                        Rejestracja znaku towarowego niesie ze sobą wiele istotnych korzyści. Stanowi przede wszystkim
                        podstawową ochronę zarówno przed <strong><a
                                href="https://rpms.pl/nieuczciwa-konkurencja/">nieuczciwą konkurencją</a>,</strong>
                        próbami
                        <strong>przejęcia marki (domeny)</strong> czy <strong>podszywaniem się </strong>w ramach
                        kampanii w internecie<strong> (SEO, Google ADS)</strong>.
                    </p>
                    <p style="text-align: justify;">
                        Dla naszych Klientów wykonujemy <strong>pełną weryfikację <a
                                href="https://rpms.pl/prawo-autorskie/">praw do marki</a></strong> (znaku towarowego),
                        badamy jego czystość ochronną i na tej podstawie prowadzimy procesy zabezpieczenia
                        praw naszych Klientów, począwszy od złożenia wniosku o rejestrację znaku towarowego aż do
                        wydania świadectwa ochronnego przez Urząd Patentowy / EUIPO bądź WIPO.<strong><br /> </strong>
                    </p>
                    <p style="text-align: justify;">
                        Z uwagi na specjalizację zapewniamy<strong> pełne wsparcie </strong>przy uruchomieniu narzędzi
                        eliminujących lub ograniczających wykorzystywanie znaku towarowego w ramach kampanii w<strong>
                            GOOGLE</strong> oraz mediach
                        społecznościowych <strong>(Facebook / Instagram / Tweeter),</strong> jak również na bieżąco
                        monitorujemy wykorzystanie marki oraz
                        <a href="https://rpms.pl/uslugi-prawne/e-commerce/ochrona-reputacji/">naruszanie dóbr
                            osobistych</a> naszych Klientów przez inne podmioty.
                    </p>
                </div>
                <div class="col-lg-6 specialization">
                    <div class="form">
                        <?php echo do_shortcode('[contact-form-7 id="142" title="Formularz uslugi"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="boxes">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single">
                        <h3>Audyt ochrony marki</h3>
                        <span class="price">0 zł</span>
                        <div class="desc">
                            <p><strong>Bezpłatny audyt ochrony marki</strong> – weryfikujemy zabezpieczenie Twojej
                                marki, w tym strony internetowej (domeny) oraz udzielimy dodatkowych informacji o
                                narzędziach i procedurze zabezpieczenia marki.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single">
                        <h3>REJESTRACJA ZNAKU TOWAROWEGO – POLSKA</h3>
                        <span class="price">od 750 zł</span>
                        <div class="desc">
                            <p>Pełna weryfikacja praw do znaku towarowego, w tym badanie czystości ochronnej i
                                <strong>zastrzeżenie znaku towarowego w Urzędzie Patentowym RP (UPRP)</strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single">
                        <h3>REJESTRACJA ZNAKU TOWAROWEGO – EUROPA</h3>
                        <span class="price">od 1250 zł</span>
                        <div class="desc">
                            <p>Pełna weryfikacja praw do znaku towarowego, w tym badanie czystości ochronnej i
                                <strong>zastrzeżenie znaku towarowego w Urzędzie Unii Europejskiej ds. Własności
                                    Intelektualnej (EUIPO)</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <p><span style="color: red;">*</span> ceny netto<br> <span style="color: red;">**</span> do cen
                        należy doliczyć opłaty urzędowe</p>
                </div>
            </div>
        </div>
    </section>



    <section class="uslugi-tabs mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-rodo-tab" data-toggle="pill" href="#pills-rodo"
                                role="tab" aria-controls="pills-rodo" aria-selected="true">Dlaczego warto zarejestrować
                                znak towarowy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-it-tab" data-toggle="pill" href="#pills-it" role="tab"
                                aria-controls="pills-it" aria-selected="false">Ile kosztuje rejestracja (zastrzeżenie)
                                znaku towarowego</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-startup-tab" data-toggle="pill" href="#pills-startup"
                                role="tab" aria-controls="pills-startup" aria-selected="false">Znak towarowy czy znak
                                słowno - graficzny</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-oferta-tab" data-toggle="pill" href="#pills-oferta" role="tab"
                                aria-controls="pills-oferta" aria-selected="false">Co grozi za naruszenie znaku
                                towarowego</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-rodo" role="tabpanel"
                            aria-labelledby="pills-rodo-tab">
                            <p class="bold-text">Dlaczego warto?</p>
                            <p style="text-align: justify;">
                                Ponieważ dobrze jest kierować się starym porzekadłem: przezorny zawsze ubezpieczony. Nie
                                ma wątpliwości, że rejestracja znaku towarowego niesie ze sobą wiele korzyści. Dzięki
                                rejestracji
                                <strong>zyskujesz wyłączność na posługiwanie się znakiem</strong>, zwiększasz renomę
                                swojej marki, uzyskujesz możliwość wniesienia skutecznego sprzeciwu gdy ktoś spróbuje
                                zarejestrować znak podobny do twojego, a do tego możesz
                                udzielać odpłatnej licencji na korzystanie z Twoich oznaczeń przez inne podmioty.
                            </p>
                            <p style="text-align: justify;">Największe zalety zastrzeżenia znaku towarowego to m.in:</p>
                            <ul class="special-list">
                                <li style="text-align: justify;">
                                    Szeroka, <strong>potwierdzona urzędowo ochrona prawna (tzw. świadectwo ochronne na
                                        znak towarowy),</strong> w których korzystasz ze znaku towarowego (<strong>10
                                        lat +</strong>), terytorium, na którym obowiązuje ochrona znaku
                                    towarowego <strong>(rejestracja znaku towarowego na Polskę / Unię Europejską /
                                        Świat)</strong>. Daje Ci to podstawę do ochrony swoich praw w razie sporu
                                    dotyczącego praw do marki jak i możliwość skutecznego dochodzenia roszczeń
                                    od podmiotów dopuszczających się naruszenia.
                                </li>
                                <li style="text-align: justify;">
                                    <strong>Ochrona domeny internetowej</strong> i możliwość blokowania reklam
                                    tekstowych takich jak <strong>AdWords</strong> oraz <strong>fanpage’y</strong> na
                                    Facebooku zawierających znak towarowy, jeżeli nie chcesz, aby inna
                                    firma posługiwała się Twoją nazwą w celach marketingowych.
                                </li>
                                <li>
                                    Możliwość korzystania z programów jak <strong>Amazon Brand Registry</strong>,
                                    <strong><a title="Strefa Marek Allegro"
                                            href="https://rpms.pl/strefa-marki-allegro/">Strefa Marek
                                            Allegro</a></strong> czy e
                                    <strong>Bay Verified Rights Owner Program (VERO).</strong>
                                </li>
                                <li>Możliwość dochodzenia odszkodowań za naruszenie praw do znaku towarowego i
                                    uzyskiwanie korzyści na jego licencjonowaniu.</li>
                                <li>
                                    <strong>Aspekty marketingowe</strong> – posługiwanie się oznaczeniem
                                    “<strong>R”</strong> symbolizuje formalnie udzielone prawo ochronne do danej marki,
                                    dzięki czemu stajesz się jej faktycznym właścicielem znaku towarowego. R-ka
                                    zwiększa zaufanie ze strony klientów i partnerów biznesowych i <strong>wzmacnia
                                        wizerunek firmy.</strong>
                                </li>
                                <li>Szansa na bezpieczne, zgodne z prawem tworzenie <strong>sieci franczyzowej.</strong>
                                </li>
                                <li>Możliwość uzyskania dodatkowych punktów w ramach postępowań związanych z
                                    dofinansowaniem na działalność gospodarczą.</li>
                                <li style="text-align: justify;">Możliwość <strong>zabezpieczenia sloganu
                                        reklamowego</strong>, który nie jest chroniony prawem autorskim.</li>
                                <li style="text-align: justify;">Możliwość wskazania towarów lub usług, których jeszcze
                                    nie oferujesz (wówczas masz aż 5 lat na wejście we wskazane branże).</li>
                                <li style="text-align: justify;">
                                    Skuteczna rejestracja znaku towarowego, na podstawie której udzielane jest prawo
                                    ochronne&nbsp; Przejście praw do marki firmy bezpośrednio na rodzinę po śmierci
                                    właściciela.
                                    <strong>Bez rejestracji prawa te znikają wraz z właścicielem</strong>, przez co
                                    rodzina jest zmuszona zakładać nową działalność „od zera”.<br />
                                    <hr />
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-it" role="tabpanel" aria-labelledby="pills-it-tab">
                            <p class="bold-text">Ile kosztuje rejestracja (zastrzeżenie) znaku towarowego?</p>
                            <p style="text-align: justify;">
                                <span style="font-weight: 400;">
                                    Wysokość opłat jest uzależniona przede wszystkim od terytoriów państw, na których
                                    będzie obowiązywać Twoje zastrzeżenie znaku towarowego. Może to być wyłącznie
                                    Polska, teren Unii Europejskiej, albo wybrane kraje świata (w
                                    dostępnej puli jest ich ok. 100).&nbsp; Ponoszone przez przedsiębiorcę koszty
                                    dotyczą zarówno rozpatrywania wniosku (zgłoszenia), jak i ochrony znaku
                                    towarowego.&nbsp;
                                </span>
                            </p>
                            <p style="text-align: justify;"><b>Zastrzeżenie znaku towarowego na terenie Polski&nbsp;</b>
                            </p>
                            <p style="text-align: justify;"><span style="font-weight: 400;">Czas trwania procedury
                                    wynosi około 6 miesięcy. Rejestracji należy dokonać w Urzędzie Patentowym RP
                                    (Warszawa).&nbsp;</span></p>
                            <ol class="number-list" style="text-align: justify;">
                                <li style="font-weight: 400;">
                                    <span style="font-weight: 400;">
                                        Opłata za zgłoszenie znaku towarowego w jednej klasie wynosi 450 zł przy
                                        składaniu wniosku osobiście;&nbsp; albo 400 zł – w przypadku złożenia wniosku
                                        online. Za każdą kolejną klasę płaci się 120 zł.
                                    </span>
                                </li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Za ochronę każdej klasy
                                        przez okres 10 lat ponosi się koszt 400 zł, a za opublikowanie informacji o
                                        zdobyciu prawa do zastrzeżenia – 90 zł.</span></li>
                            </ol>
                            <p style="text-align: justify;"><b>Zastrzeżenie znaku towarowego na terenie Unii
                                    Europejskiej&nbsp;</b></p>
                            <p style="text-align: justify;"><span style="font-weight: 400;">W tym przypadku podane kwoty
                                    dotyczą jednocześnie zgłoszenia i dziesięcioletniej ochrony.</span></p>
                            <ol class="number-list" style="text-align: justify;">
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Zgłoszenie znaku w
                                        pierwszej klasie to koszt 1000 EUR, drogą elektroniczną – 850 EUR.&nbsp;</span>
                                </li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Za drugą klasę opłata
                                        wynosi 50 EUR, a za każdą kolejną – 150 EUR.&nbsp;</span></li>
                            </ol>
                            <p style="text-align: justify;"><span style="font-weight: 400;">Procedura trwa od 4 do 5
                                    miesięcy. Zgłoszenie jest rozpatrywane przez Urząd Unii Europejskiej ds. Własności
                                    Intelektualnej (EUIPO) z siedzibą w Hiszpanii.&nbsp;</span></p>
                            <p style="text-align: justify;"><b>Rozszerzenie ochrony o wybrane kraje świata</b></p>
                            <p style="text-align: justify;">
                                <span style="font-weight: 400;">
                                    W sytuacji, w której jesteś właścicielem zastrzeżonej nazwy w Polsce lub na terenie
                                    Unii, możesz ubiegać się również o rozszerzenie zabezpieczenia na inne, wybrane
                                    przez siebie kraje. W tym przypadku należy złożyć wniosek do
                                    Światowej Organizacji Własności Intelektualnej (WIPO) z siedzibą w Szwajcarii.
                                </span>
                            </p>
                            <p style="text-align: justify;"><span style="font-weight: 400;">Trzeba mieć na uwadze, że w
                                    niektórych krajach mogą obowiązywać dodatkowo specjalne opłaty
                                    indywidualne.&nbsp;</span></p>
                            <ol class="number-list">
                                <li style="font-weight: 400; text-align: justify;">
                                    <span style="font-weight: 400;">Zgłoszenie i ochrona do trzech klas towarowych: w
                                        przypadku znaku kolorowego płaci się 903 CHF (frank szwajcarski), bez kolorów –
                                        653 CHF.</span>
                                </li>
                                <li style="font-weight: 400; text-align: justify;"><span style="font-weight: 400;">Za
                                        każdą klasę powyżej trzeciej oraz za każde wskazane państwo – 100 CHF.</span>
                                </li>
                            </ol>
                        </div>
                        <div class="tab-pane fade" id="pills-startup" role="tabpanel"
                            aria-labelledby="pills-startup-tab">
                            <p class="bold-text">Znak towarowy, czy znak słowno-graficzny</p>
                            <p style="text-align: justify;">
                                <span style="font-weight: 400;">
                                    Wybór pomiędzy znakiem towarowym a znakiem słowno-graficznym to jedna z
                                    najważniejszych kwestii, które rozważysz w trakcie rejestracji. Musisz wiedzieć, że
                                    każde z tych świadectw obejmuje różne formy ochrony. W związku z tym,
                                    podejmując decyzję, weź pod uwagę indywidualną sytuację i rzeczywiste potrzeby
                                    Twojej firmy.&nbsp;&nbsp;
                                </span>
                            </p>
                            <p style="text-align: justify;"><span style="font-weight: 400;">Jedno i drugie rozwiązanie
                                    ma pewne plusy, jak i minusy.&nbsp;</span></p>
                            <ul class="special-list" style="text-align: justify;">
                                <li>
                                    <b>Słowny znak towarowy</b>
                                    <span style="font-weight: 400;">
                                        zabezpiecza wyłącznie brzmienie (fonetykę) słowa lub słów, bez uwzględniania
                                        szaty graficznej (logo). Sprawdzi się więc w tych sytuacjach, w których mamy do
                                        czynienia wyłącznie z unikalną nazwą.&nbsp;
                                    </span>
                                </li>
                            </ul>
                            <p style="text-align: justify;"><span style="font-weight: 400;">Taka forma ochrony
                                    umożliwia:</span></p>
                            <ul class="special-list" style="text-align: justify;">
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Zabezpieczenie domeny
                                        strony internetowej,</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Zmuszenie innej firmy do
                                        zmiany nazwy, nawet jeżeli jej brzmienie jest tylko zbliżone do Twojej (również,
                                        gdy posiada zupełnie inne logo),&nbsp;</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Blokowanie reklam AdWords
                                        zawierających Twoją nazwę, a także ofert na platformach typu Allegro czy OLX –
                                        bez konieczności kierowania sprawy do sądu (!),</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Używanie symbolu R, który
                                        zwiększa prestiż i zaufanie w oczach konsumentów,</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Łatwiejszy rebranding,
                                        czyli zmiana logo i szaty graficznej bez konieczności składania nowego
                                        zgłoszenia.</span></li>
                            </ul>
                            <p style="text-align: justify;">
                                <span style="font-weight: 400;">
                                    Oczywiście wadą może być w tym przypadku sytuacja, w której konkurencyjne
                                    przedsiębiorstwo używa zbliżonej szaty graficznej i odmiennej, nie podobnie
                                    brzmiącej nazwy – wówczas taka ochrona na niewiele się zda. Co więcej, w
                                    niektórych przypadkach uzyskanie zgody na rejestrację może być utrudnione, np. gdy
                                    mamy do czynienia z określeniami ogólnoinformacyjny.&nbsp;
                                </span>
                            </p>
                            <ul class="special-list" style="text-align: justify;">
                                <li style="font-weight: 400;">
                                    <b>Znak słowno-graficzny</b>
                                    <span style="font-weight: 400;">
                                        rejestruje się wtedy, gdy to właśnie logo firmy jest unikalne i warte
                                        zabezpieczenia. Bez tego może dochodzić do nadużyć i stosowania podobnych
                                        grafik, szyldów, etykiet produktów itd., które prowadzą do podszywania się pod
                                        bardziej znaną markę i dezorientują konsumentów.&nbsp;
                                    </span>
                                </li>
                            </ul>
                            <p style="text-align: justify;">
                                <span style="font-weight: 400;">
                                    Taka forma ochrony umożliwia narzucenie zakazu stosowania oznaczeń podobnych do
                                    szaty graficznej Twojej firmy. Znak słowno-graficzny jest również łatwiejszy w
                                    rejestracji i stanowi dobrą alternatywę dla przedsiębiorców, którzy
                                    nie mogą zastrzec samej nazwy, ponieważ jest ona np. zbyt ogólnoinformacyjna.&nbsp;
                                </span>
                            </p>
                            <p style="text-align: justify;">
                                <span style="font-weight: 400;">
                                    Jednak znak słowno-graficzny nieco komplikuje ewentualny rebranding. Przy
                                    zmianie/odświeżaniu firmowego logo, będziesz zmuszony do jego ponownej rejestracji.
                                    Często trudniejsze (chociaż nie niemożliwe) jest również
                                    wyegzekwowanie praw od tych firm, które są do zbliżone do Twojej marki głównie w
                                    kontekście fonetycznym.&nbsp;
                                </span>
                            </p>
                            <p style="text-align: justify;">
                                <span style="font-weight: 400;">Podsumowując, w wielu przypadkach najrozsądniejszym
                                    rozwiązaniem okazuje się wybór </span><b>obu form zabezpieczenia</b>
                                <span style="font-weight: 400;">. Zwłaszcza gdy zależy Ci na pełnej, kompleksowej
                                    ochronie. Dopiero wtedy zyskasz pewność, że zarówno nazwa, jak i szata graficzna,
                                    będą niemal nienaruszalne przez konkurencję.&nbsp;</span>
                            </p>
                            <p style="text-align: justify;">
                                <span style="font-weight: 400;">
                                    Pamiętaj jednak, że wszystko zależy od indywidualnych potrzeb każdego przedsiębiorcy
                                    oraz obszarów rynkowych, w jakich funkcjonuje jego firma. Dlatego, jeżeli wciąż się
                                    wahasz i nie wiesz, która opcja będzie najlepsza w Twoim
                                    przypadku, skorzystaj z pomocy wykwalifikowanych doradców RPMS.
                                </span>
                            </p>
                        </div>
                        <div class="tab-pane fade" id="pills-oferta" role="tabpanel" aria-labelledby="pills-oferta-tab">
                            <p class="bold-text">Co grozi za naruszenie znaku towarowego?</p>
                            <p style="text-align: justify;">
                                <span style="font-weight: 400;">Zanim zaczniesz promować swoją nazwę i logo, upewnij
                                    się, że takowa już nie istnieje i nie została zarejestrowana w Urzędzie Patentowym.
                                    Inaczej sporo ryzykujesz.&nbsp;</span>
                            </p>
                            <p style="text-align: justify;">
                                <span style="font-weight: 400;">Najprostsze i najczęściej stosowane roszczenie to
                                </span><b>zakaz dalszego wykorzystywania</b>
                                <span style="font-weight: 400;">
                                    zarejestrowanego znaku towarowego. Przedsiębiorcy decydują się na takie działanie
                                    głównie ze względu na to, że: łatwo je uzyskać i nie trzeba wykazywać winy; ponosi
                                    się mniejsze opłaty sądowe, ponieważ zdobycie zakazu nie wymaga
                                    wskazania wysokości szkody; po pozytywnym rozpatrzeniu sprawy przez sąd, jej wynik
                                    otwiera drogę do złożenia pozwu o roszczenia finansowe.&nbsp;
                                </span>
                            </p>
                            <p style="text-align: justify;">
                                <span style="font-weight: 400;">Wśród głównych konsekwencji naruszenia&nbsp; znaku
                                    towarowego wymienia się również konieczność </span><b>wydania bezpodstawnie
                                    osiągniętych korzyści</b>
                                <span style="font-weight: 400;">
                                    , pozyskanych w wyniku używania nazwy lub grafiki zbliżonej do tej, która została
                                    zarejestrowana przez inną firmę. Jednak w takich sytuacjach znacznie częściej
                                    spotkamy się z opłatą licencyjną, ponieważ ta forma argumentacji
                                    jest lepiej widziana przez sąd. Na czym polega? Właściciel zarejestrowanego znaku
                                    towarowego może udzielać licencji na jego używanie przez inne podmioty. Dlatego,
                                    jeżeli jego prawa zostaną naruszone, zazwyczaj stosuje
                                </span>
                                <b>roszczenie o naprawę szkody</b><span style="font-weight: 400;">, czyli żąda wypłaty
                                    wynagrodzenia lub takiej kwoty pieniężnej, której wysokość odpowiada opłacie
                                    licencyjnej.&nbsp;</span>
                            </p>
                            <p style="text-align: justify;">
                                <span style="font-weight: 400;">
                                    Poza tym osoba posiadająca świadectwo rejestracji znaku towarowego, może zastosować
                                    liczne roszczenia prewencyjne, np. żądanie zaprzestania działań przez dany podmiot,
                                    naruszających jej ochronę, albo wycofania i zniszczenia
                                    przedmiotów zawierających konkretny znak towarowy.&nbsp;
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="greybox mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 content">
                    <p class="bold-text">
                        Jeżeli chcesz zabezpieczyć znak towarowy, rozszerzyć zakres już zarejestrowanego znaku lub<br />
                        dochodzić swoich praw w związku z naruszeniem praw do marki? Trafiłeś w dobre miejsce!
                    </p>
                    <p style="text-align: justify;">
                        Oferujemy kompleksową obsługę również w tej dziedzinie. Pomagamy w wyborze jak najlepszej opcji,
                        biorąc pod uwagę indywidualną sytuację każdego klienta oraz od lat prowadzimy postępowania w
                        imieniu naszych klientów od początku do
                        końca.
                    </p>
                    <ol class="number-list">
                        <li>
                            <strong>Wskazujemy </strong>obszary rynkowe, na których warto zabezpieczyć Twój znak
                            towarowy;<br />
                            <hr />
                        </li>
                        <li>
                            <strong>Doradzamy </strong>krok po kroku<strong>, </strong>którą klasę Klasyfikacji
                            Nicejskiej wybrać i określamy branże, w jakich należy zarejestrować&nbsp; znak
                            towarowy;<br />
                            <hr />
                        </li>
                        <li>
                            <strong>Analizujemy, </strong>czy wybrana nazwa / grafika nie koliduje z tymi już
                            istniejącymi – zarejestrowanymi znakami towarowymi oraz doradzamy jakie klasy towarowe dla
                            danego znaku towarowego należy wybrać by zapewnić
                            skuteczną ochronę;<br />
                            <hr />
                        </li>
                        <li>
                            <strong>Informujemy </strong>o przewidywanych szansach na rozpatrzenie wniosku o rejestrację
                            znaku towarowego – udzielenia prawa ochronnego; w przypadku oceny pozytywnej – przygotujemy
                            dla Ciebie odpowiedni wniosek; negatywnej –
                            otrzymasz od nas informację już na tym etapie, dzięki czemu unikniesz straty urzędowych
                            opłat.<br />
                            <hr />
                        </li>
                        <li>
                            <strong>Poprowadzimy w Twoim imieniu całą procedurę rejestracji znaku towarowego</strong>
                            przy udziale oddelegowanego Rzecznika Patentowego lub Radcy Prawnego, począwszy od
                            przygotowania i złożenia wniosku o rejestrację w
                            Urzędzie Patentowym, EUIPO czy WIPO, po pełne wsparcie prawne w procesie rejestracyjnym, aż
                            do uzyskania świadectwa ochronnego na znak towarowy.
                        </li>
                    </ol>
                    <p style="text-align: justify;">
                        Korzystając z usług kancelarii prawnej masz pewność, że <strong>obsługa procesu rejestracyjnego
                            będzie prowadzona przez wykwalifikowanych prawników podlegających rygorystycznym zasadom
                            korporacyjnym.</strong> Nie tylko przygotujemy
                        i złożymy w Twoim imieniu wniosek ale również pomożemy w wyborze optymalnego wariantu i
                        określeniu realnych, precyzyjnie wykalkulowanych szans na pozytywną rejestrację Twojego znaku
                        towarowego.
                    </p>
                    <p style="text-align: justify;">Posiadamy wieloletnie doświadczenie w procedurze zastrzegania znaków
                        towarowych, rejestracji wzorów przemysłowych oraz ogólnopojętym prawie własności intelektualnej.
                    </p>
                </div>
            </div>
        </div>
    </section>





    <div class="bluebox">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content">
                        <h2 class="bold-text" style="text-align: left;">Rejestracja znaku TOWAROWEGO to DOPIERO PIERWSZY
                            KROK!</h2>
                        <div class="bold-text title-h5" style="text-align: justify;">CZYLI JAK WYKORZYSTAĆ POTENCJAŁ
                            PŁYNĄCY Z UDZIELONEGO PRAWA OCHRONNEGO</div>
                        <ol class="number-list">
                            <li style="text-align: justify;">
                                Uzyskanie prawa ochronnego to dopiero pierwszy krok do efektywnego zabezpieczenia praw
                                marki. Kolejnym z nich jest regularny monitoring zastrzeżonego oznaczenia. W przypadku
                                e-commerce ma to szczególne znaczenie – konkurencja
                                niejednokrotnie może korzystać ze znaków identycznych lub podobnych do tych
                                zarejestrowanych. <strong>Tego typu działania obserwuje się w marketingu internetowym, w
                                    tym w reklamach Google Ads i działaniach SEO</strong>. Kiedy
                                firma zyskuje na popularności i sukcesywnie poszerza grono klientów, z reguły dość
                                szybko spotyka się z problemem kopiowania używanych przez siebie nazw, haseł, grafik i
                                rozwiązań.
                            </li>
                            <li style="text-align: justify;">
                                Kolejnym zagrożeniem są cyberprzestępcy – piraci domenowi i trolle, a także zjawisko
                                określane mianem <em>cyberwildcattingu</em>. Ostatnia z wymienionych praktyk polega na
                                rejestracji jak największej liczby domen zawierających
                                oznaczenia, które mogą być znakami towarowymi. Później przestępcy zgłaszają się do ich
                                właścicieli lub konkurencji z propozycją odsprzedania domeny internetowej za wygórowaną
                                kwotę. Takie działania są efektem niekorzystania z
                                najskuteczniejszej, dostępnej ochrony, jaką jest rejestracja znaku towarowego –&nbsp; w
                                szczególności słownego i jego późniejszy monitoring.
                            </li>
                            <li style="text-align: justify;">
                                Jak skutecznie monitorować markę? Można robić to samodzielnie, stosując przeznaczone do
                                tego celu narzędzia i programy, lub korzystając z usług wyspecjalizowanej kancelarii –
                                Rzecznika Patentowego lub Radcy Prawnego.<br />
                                <hr />
                            </li>
                        </ol>
                        <div class="title-h4 h3 mt-5" style="text-align: center; font-weight: 900;">Chcesz wiedzieć
                            więcej na temat monitoringu?</div>
                        <div class="title-h4 h3" style="text-align: center; font-weight: 900;">Sprawdź nasz system <a
                                href="https://rpms.pl/ochrona-marki/">Ochrona Marki 365</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2 text-center font-weight-bold"><strong>Zaufali nam</strong></h2>
                </div>
            </div>
        </div>
    </section>


    <div class="logotype grid mt-5 mb-5">
        <div class="container">
            <div class="row">
                <?php if ( have_rows( 'logotypy' , '6' ) ) : ?>
                <?php while ( have_rows( 'logotypy', '6' ) ) :
                                the_row(); ?>

                <div class="col-lg-3 mb-5 item text-center">
                    <img src=" <?php echo esc_url( get_sub_field( 'logo', '6' ) ); ?>" alt="">
                </div>


                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>



    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="bold-text">Niezawodny sposób na ochronę marki w sieci: rejestracja znaku towarowego</h2>
                    <p style="text-align: justify;">
                        Problem ochrony marki to powszechne zjawisko w internecie, w szczególności dotyczące branży
                        e-commerce. W Internecie wyjątkowo często spotkamy się z nieuczciwymi działaniami konkurencji.
                        Przykładowo, ktoś może przywłaszczyć sobie
                        naszą nazwę, grafikę, czy chwytliwe hasło, umieszczając je w swoich reklamach lub mediach
                        społecznościowych. Jednym ze skutecznych sposobów na przeciwdziałanie takim praktykom jest
                        rejestracja znaku towarowego np. przez wniesienie
                        zgłoszenia do Urzędu Patentowego RP. Niektórzy decydują się na ten krok wtedy, gdy odnotują
                        wyraźny wzrost rozpoznawalności firmy. Inni robią to już na samym początku prowadzenia biznesu.
                        Które postępowanie jest słuszne i kiedy
                        należy zacząć myśleć o przejściu przez procedurę rejestracji znaku towarowego dla ochrony swoich
                        towarów i usług?
                    </p>
                </div>
                <div class="col-lg-6"><img src="https://rpms.pl/wp-content/uploads/2020/04/Kancelaria-Krak%C3%B3w.jpg"
                        style="width: 100%; height: auto;" alt=""></div>
            </div>
        </div>
    </section>


    <section>
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2 text-center font-weight-bold">Co wpływa na <strong>wizerunek firmy</strong>?</h2>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6"><img src="https://rpms.pl/wp-content/uploads/2019/07/ppk-9.jpg"
                        style="width: 100%; height: auto;" alt=""></div>

                <div class="col-lg-6">
                    <p style="text-align: justify;">
                        Trzeba zwrócić uwagę na fakt, że marka – w skład której wchodzi m.in. nazwa i logo – jest
                        podstawowym czynnikiem kształtującym wizerunek firmy. To ona decyduje o rozpoznawalności i
                        możliwości zidentyfikowania produktów czy usług
                        świadczonych przez konkretnego przedsiębiorcę. Jej podstawowym celem jest więc
                        <strong>wyróżnienie naszej działalności na tle pozostałych</strong> i już samo to powinno
                        skłonić nas do rejestracji znaku towarowego celem
                        zabezpieczenia praw do tego oznaczenia.
                    </p>
                    <p style="text-align: justify;">
                        Dlaczego jest to tak ważne? Ponieważ po opracowaniu odpowiedniej nazwy lub oznaczenia
                        graficznego, przychodzi czas na ich wdrożenie i promocję. Inwestycja w reklamę w sieci opiera
                        się głównie na korzystaniu z Google Ads,
                        pozycjonowaniu strony internetowej, oraz prowadzeniu kampanii w mediach społecznościowych. W
                        ramach e-commerce zawsze korzystamy również z domeny internetowej, która (tak samo, jak nazwa
                        czy logotyp) stanowi nierozerwalną część
                        biznesu. Mając na uwadzę dynamikę rozwoju branży <a title="ecommerce"
                            href="https://rpms.pl/aktualnosci/ecommerce/">ecommerce</a>, wciąż kurczące się zasoby domen
                        internetowych (nazw własnych) oraz
                        <strong>nakłady jakie czynimy na rozwój rozpoznawalności jak i widoczności domeny internetowej –
                            jej zabezpieczenie poprzez rejestrację znaku towarowego można uznać za kluczowe.</strong>
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2 text-center font-weight-bold"><strong>Potencjalne czynniki ryzyka związane z brakiem
                            rejestracji znaku towarowego
                        </strong>?</h2>
                </div>
            </div>
        </div>
    </section>



    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p style="text-align: justify;">
                        Niestety nie oznacza to, że ktoś inny nie może z nich korzystać. Zdarza się, że towary i usługi
                        są oznaczane w identyczny lub bardzo podobny sposób przez różnych przedsiębiorców z tej samej
                        branży. Powody zaistnienia takiej sytuacji
                        mogą być różne. Często wynika to z wyboru rozwiązań dość oczywistych, schematycznych, opartych
                        na skojarzeniach. W rezultacie na rynku mogą pojawić się dwie, a nawet kilka marek, które
                        korzystają z jednakowych lub zbliżonych do
                        siebie oznaczeń towarów lub usług.
                    </p>
                    <p style="text-align: justify;">
                        Powszechność tego problemu wynika z niewiedzy i nieznajomości obowiązującego prawa. Wielu
                        przedsiębiorców nie weryfikuje, czy jakaś nazwa jest już używana lub zastrzeżona. Niektórzy
                        sprawdzają to jedynie za pomocą wyszukiwarki
                        internetowej – a to nie daje praktycznie żadnej gwarancji, że ktoś inny nie posługuje się daną
                        nazwą nazwą lub nie posiada zastrzeżonego znaku towarowego i za chwile sam nie wyciągnie wobec
                        nas konsekwencji prawnych. Efekty takiego
                        niedopatrzenia mogą być bardzo dotkliwe, o czym poniżej.
                    </p>
                </div>
                <div class="col-lg-6"><img src="https://rpms.pl/wp-content/uploads/2018/12/regul1.jpg"
                        style="width: 100%; height: auto;" alt=""></div>
            </div>
        </div>
    </section>


    <div class="greybox">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content">
                        <h2 class="bold-text" style="text-align: justify;">Jak nie popełnić błędu przy wyborze nazwy i
                            oznaczenia?</h2>
                        <p style="text-align: justify;">
                            Po pierwsze, opłacenie domeny nie daje monopolu na jej używanie. Chociaż w umowach z
                            operatorem często widnieje zapis o „przeniesieniu prawa do domeny”, jest to określenie
                            wprowadzające niejako w błąd,
                            <strong>gdyż chodzi o prawo używania danego oznaczenia, a nie prawo własności w rozumieniu
                                przepisów</strong>. Dotyczy to również wszelkiego rodzaju nazw i logotypów – ich
                            używanie nie sprawia, że automatycznie stajemy się ich
                            właścicielami. Prawa do tego typu oznaczeń zostaną potwierdzone dopiero wtedy, gdy
                            zarejestrujemy je we właściwym Urzędzie Patentowym.
                        </p>
                        <p style="text-align: justify;">
                            Dlatego przed założeniem działalności (firmy) czy wykupieniem domeny, warto zlecić ich
                            weryfikację profesjonalistom i sprawdzić, czy nie zostały już zastrzeżone przez inny podmiot
                            w ramach danej klasyfikacji towarów i usług.
                            Korzystając z cudzego, zarejestrowanego oznaczenia przedsiębiorca naraża się na konsekwencje
                            prawne, takie jak:
                        </p>
                        <ul class="special-list" style="text-align: justify;">
                            <li>
                                <strong>Nakaz zmiany nazwy marki (znaku towarowego) i dokonania tzw.
                                    rebrandingu</strong> – będzie to nie tylko kosztowne i problematyczne, ale też źle
                                widziane z punktu widzenia klienta. Konsumenci przyzwyczają się do pewnych
                                nazw i szaty graficznej, szukają produktów określonej firmy, przez co zmiana oznaczenia
                                zadziała na niekorzyść przedsiębiorcy.
                            </li>
                            <li>
                                <strong>Zakaz korzystania z określonej domeny internetowej</strong> – przepadają
                                wszelkie opłaty związane z pozycjonowaniem, reklamą, czy przygotowaniem logotypu i
                                oprawy graficznej na stronie. Jest to szczególnie dotkliwe
                                wtedy, gdy dotyczy sklepów internetowych przynoszących duży dochód dzięki wysokiej
                                pozycji w wyszukiwarce. Po zgłoszeniu roszczenia do nazwy przez inną firmę naruszyciel
                                znaku otrzymuje wezwanie do zaprzestania korzystania z
                                domeny, często też żądanie jej przekazania.
                            </li>
                        </ul>
                        <p style="text-align: justify;">
                            Jak widać, rezultaty niezweryfikowania marki przed założeniem działalności mogą nas sporo
                            kosztować. Inwestycje w promocję i reklamę przepadają, a my tracimy prawa do używania
                            wypromowanej już domeny i nazwy. Jak nie dopuścić do
                            takiej sytuacji? W celu uniknięcia problemów najlepiej zgłosić się po profesjonalny audyt
                            ochrony marki, realizowany m.in. przez kancelarię RPMS, a następnie rozpoczęcie procesu
                            uzyskania prawa ochronnego na znak towarowy.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="uslugi-item">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="uslugi-item__content">

                        <div class="first-section-p">
                            <h2>Uwaga na nazwy opisowe</h2>
                            <p style="text-align: justify;">Kolejnym błędem przedsiębiorców jest wybór nazw opisowych,
                                które nie mogą zostać zmonopolizowane. Rejestracji w Urzędzie Patentowym RP / EUIPO /
                                WIPO nie podlegają wszelkiego rodzaju oznaczenia jednoznacznie wskazujące na towary lub
                                usługi z branży, której dotyczą (tzw. opisowy znak towarowy). Do tej kategorii zalicza
                                się słowa i zestawienia słów używane na co dzień, np. <em>Piwo jasne, kredyty24.pl,</em>
                                <em>Słodycze,</em> <em>Doradca Finansowy</em> itd. Ich zastrzeżenie doprowadziłoby do
                                wielu absurdalnych sytuacji ograniczających wykorzystanie danego oznaczenia w określaniu
                                danej kategorii towarów i usług.
                            </p>
                            <p style="text-align: justify;">Jeżeli nazwa firmy jest opisowa i nie może zostać
                                zarejestrowana, istnieje alternatywa: <strong>zastrzeżenie znaku
                                    słowno-graficznego</strong>. Warunkiem jest to, aby wykorzystane oznaczenie
                                graficzne było na tyle oryginalne, że pozwoli na jednoznaczne odróżnienie od logotypów
                                pozostałych firm działających na rynku.</p>
                            <p style="text-align: justify;">Przy nazwach opisowych trzeba też wspomnieć o pewnych
                                wyjątkach, które nabyły tzw. wtórną zdolność odróżniającą. Mowa o oznaczeniach, które są
                                tak rozpoznawalne na rynku, że większość odbiorców identyfikuje je z konkretnym
                                podmiotem. Wtórną zdolność odróżniającą można zaobserwować w przypadku takich nazw jak
                                LOT, Poczta Kwiatowa, czy eObuwie. Oczywiście taką możliwość mają wyłącznie te
                                najpopularniejsze przedsiębiorstwa, od lat działające na rynku lub inwestujące w szeroko
                                pojętą promocję na znak towarowy.</p>
                        </div>

                    </div>

                </div>
                <img src="https://rpms.pl/wp-content/uploads/2019/09/up_sek1.jpg?id=25710" alt=""
                    class="uslugi-item__right-img">
            </div>
        </div>
    </section>


    <section>
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2 text-center font-weight-bold">Skuteczne działania ochronne – <strong>rola Rejestracji
                            znaku towarowego w e-commerce</strong></h2>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p style="text-align: justify;">
                        Prowadzenie działalności w sieci niesie ze sobą zarówno wiele szans, jak i zagrożeń dla
                        współczesnych przedsiębiorców. Z jednej strony Internet jest idealnym miejscem do promowania
                        kategorii towarów i usług. Daje możliwość dotarcia
                        do szerokiego grona odbiorców na skalę lokalną, krajową i globalną. Z drugiej, stanowi
                        płaszczyznę działania cyberprzestępców i nieuczciwej konkurencji, co może szybko zaprzepaścić
                        dążenia i sukcesy podmiotów z każdej branży.
                    </p>
                    <p style="text-align: justify;">
                        Jedynym sposobem na uniknięcie takich problemów jest zabezpieczenie swojej marki w świetle
                        prawa. Najlepiej zrobić to jeszcze na wczesnym etapie prowadzenia działalności. Weryfikacja
                        nazwy lub logotypu, rejestracja znaku towarowego
                        w Urzędzie Patentowym RP czy EUPO i późniejszy monitoring chronionych oznaczeń, to najlepsza
                        droga do zagwarantowania swojej firmie stabilności i niezakłóconego rozwoju danej marki.
                    </p>
                </div>
                <div class="col-lg-6"><img src="https://rpms.pl/wp-content/uploads/2019/07/Windykacja.jpg"
                        style="width: 100%; height: auto;" alt=""></div>
            </div>
        </div>
    </section>


    <section>
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2 text-center font-weight-bold">Warto wiedzieć</h2>
                </div>
            </div>
        </div>
    </section>



    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <a href="https://rpms.pl/znak-slowny-czy-slowno-graficzny/">
                        <img src="https://rpms.pl/wp-content/uploads/2020/05/Co-zarejestrowa%C4%87-logo-czy-nazw%C4%99.png"
                            alt="">
                    </a>
                </div>
                <div class="col-lg-4 mb-4">
                    <a href="https://rpms.pl/ile-trwa-ochrona-znaku-towarowego/">
                        <img src="https://rpms.pl/wp-content/uploads/2020/05/Jak-d%C5%82ugo-trwa-ochrona-znaku-towarowego.png"
                            alt="">
                    </a>
                </div>
                <div class="col-lg-4 mb-4">
                    <a href="https://rpms.pl/koszt-zastrzezenia-znaku-towarowego-nazwy-cena/">
                        <img src="https://rpms.pl/wp-content/uploads/2020/05/Koszt-zarejestrowania-znaku-towarowego.png"
                            alt="">
                    </a>
                </div>
                <div class="col-lg-4 mb-4">
                    <a href="https://rpms.pl/dlaczego-warto-zastrzec-prawa-do-marki/">
                        <img src="https://rpms.pl/wp-content/uploads/2020/05/Dlaczego-warto-zabezpieczy%C4%87-prawa-do-marki-znaku-towarowego.png"
                            alt="">
                    </a>
                </div>
                <div class="col-lg-4 mb-4">
                    <a href="https://rpms.pl/zastrzezenie-nazwy-firmy-kto-moze-to-zrobic/">
                        <img src="https://rpms.pl/wp-content/uploads/2020/05/Zastrze%C5%BCenie-nazwy-kt-mo%C5%BCe-to-zrobi%C4%87.png"
                            alt="">
                    </a>
                </div>
                <div class="col-lg-4 mb-4">
                    <a href="https://rpms.pl/korzysci-z-rejestracji-znaku-towarowego/">
                        <img src="https://rpms.pl/wp-content/uploads/2020/05/Korzy%C5%9Bci-marketingowe-z-rejestracji-znaku-towarowego.png"
                            alt="">
                    </a>
                </div>
                <div class="col-lg-4 mb-4">
                    <a href="https://rpms.pl/znak-towarowy-r/">
                        <img src="https://rpms.pl/wp-content/uploads/2020/05/Co-oznacza-r-przy-nazwie.png" alt="">
                    </a>
                </div>
                <div class="col-lg-4 mb-4">
                    <a href="https://rpms.pl/rejestracja-znaku-towarowego-anglia-brexit/">
                        <img src="https://rpms.pl/wp-content/uploads/2020/05/Znaki-toware-a-brexit.png" alt="">
                    </a>
                </div>
                <div class="col-lg-4 mb-4">
                    <a href="https://rpms.pl/znak-towarowy-opisowy/">
                        <img src="https://rpms.pl/wp-content/uploads/2020/05/Opisowa-nazwa-firmy.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="form-bottom-om" style="background: url(https://rpms.pl/wp-content/uploads/2019/09/wind_form_bg.jpg);
    background-position: bottom center;
    background-repeat: no-repeat;
    padding-bottom: 200px;">
        <div class="container">
            <div class="form">
                <?php echo do_shortcode('[contact-form-7 id="1080" title="Zweryfikuj bezpłatnie znak towarowy"]'); ?>
            </div>
        </div>
    </div>



    <?php get_template_part( 'template-parts/our-articles');?>
    <?php get_template_part( 'template-parts/contact');?>
</div>
<?php
get_footer(); ?>