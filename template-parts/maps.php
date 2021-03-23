<?php
/**
 * Template part for Mapa
 *
 */

?>


<section class="maps my-5">
    <div class="container">


        <div class="row">
        <div class="col-lg-6 desc">
                <div id="demo-agents">
                    <ul style="list-style-type: none;" class="p-0">
                        <li id="dolnoslaskie" style="display: none;">
                        <?php if ( $opis_windykacja = get_field( 'opis_windykacja' ) ) : ?>
                    <?php echo $opis_windykacja; ?>
                    <?php endif; ?>
                        </li>
                        <li id="kujawsko-pomorskie" style="display: none;">
                        <?php if ( $opis_windykacja = get_field( 'opis_windykacja' ) ) : ?>
                    <?php echo $opis_windykacja; ?>
                    <?php endif; ?>
                        </li>
                        <li id="lubelskie" style="display: none;">
                        <?php if ( $opis_windykacja = get_field( 'opis_windykacja' ) ) : ?>
                    <?php echo $opis_windykacja; ?>
                    <?php endif; ?>
                        </li>
                        <li id="lubuskie" style="display: none;">
                        <?php if ( $opis_windykacja = get_field( 'opis_windykacja' ) ) : ?>
                    <?php echo $opis_windykacja; ?>
                    <?php endif; ?>
                        </li>
                        <li id="lodzkie" style="display: none;">
                        <?php if ( $opis_windykacja = get_field( 'opis_windykacja' ) ) : ?>
                    <?php echo $opis_windykacja; ?>
                    <?php endif; ?>
                        </li>
                        <li id="malopolskie" style="display: none;">
                        <?php if ( $opis_windykacja = get_field( 'opis_windykacja' ) ) : ?>
                    <?php echo $opis_windykacja; ?>
                    <?php endif; ?>
                        </li>
                        <li id="mazowieckie" style="display: none;">
                        <?php if ( $opis_windykacja = get_field( 'opis_windykacja' ) ) : ?>
                    <?php echo $opis_windykacja; ?>
                    <?php endif; ?>
                        </li>
                        <li id="opolskie" style="display: none;">
                        <?php if ( $opis_windykacja = get_field( 'opis_windykacja' ) ) : ?>
                    <?php echo $opis_windykacja; ?>
                    <?php endif; ?>
                        </li>
                        <li id="podkarpackie" style="display: none;">
                        <?php if ( $opis_windykacja = get_field( 'opis_windykacja' ) ) : ?>
                    <?php echo $opis_windykacja; ?>
                    <?php endif; ?>
                        </li>
                        <li id="podlaskie" style="display: none;">
                        <?php if ( $opis_windykacja = get_field( 'opis_windykacja' ) ) : ?>
                    <?php echo $opis_windykacja; ?>
                    <?php endif; ?>
                        </li>
                        <li id="pomorskie" style="display: none;">
                        <?php if ( $opis_windykacja = get_field( 'opis_windykacja' ) ) : ?>
                    <?php echo $opis_windykacja; ?>
                    <?php endif; ?>
                        </li>
                        <li id="slaskie" style="display: none;">
                        <?php if ( $opis_windykacja = get_field( 'opis_windykacja' ) ) : ?>
                    <?php echo $opis_windykacja; ?>
                    <?php endif; ?>
                        </li>
                        <li id="swietokrzyskie" style="display: none;">
                        <?php if ( $opis_windykacja = get_field( 'opis_windykacja' ) ) : ?>
                    <?php echo $opis_windykacja; ?>
                    <?php endif; ?>
                        </li>
                        <li id="warminsko-mazurskie" style="">
                        <?php if ( $opis_windykacja = get_field( 'opis_windykacja' ) ) : ?>
                    <?php echo $opis_windykacja; ?>
                    <?php endif; ?>
                        </li>
                        <li id="wielkopolskie" style="display: none;">
                        <?php if ( $opis_windykacja = get_field( 'opis_windykacja' ) ) : ?>
                    <?php echo $opis_windykacja; ?>
                    <?php endif; ?>
                        </li>
                        <li id="zachodniopomorskie" style="display: none;">
                        <?php if ( $opis_windykacja = get_field( 'opis_windykacja' ) ) : ?>
                    <?php echo $opis_windykacja; ?>
                    <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </div>
        <div class="col-lg-6">
                <div id="map-poland">
                    <ul class="poland cssmap" style="float: left;">
                        <li class="pl1">
                            <span class="m">
                                <span class="s1"></span><span class="s2"></span><span class="s3"></span><span class="s4"></span><span class="s5"></span><span class="s6"></span><span class="s7"></span><span class="s8"></span>
                                <span class="s9"></span><span class="s10"></span><span class="s11"></span><span class="s12"></span><span class="s13"></span><span class="s14"></span><span class="s15"></span><span class="s16"></span>
                                <span class="s17"></span><span class="s18"></span><span class="s19"></span><span class="s20"></span><span class="s21"></span><span class="s22"></span><span class="s23"></span><span class="s24"></span>
                                <span class="s25"></span><span class="s26"></span><span class="s27"></span><span class="s28"></span><span class="s29"></span><span class="s30"></span><span class="s31"></span><span class="s32"></span>
                                <span class="s33"></span><span class="s34"></span><span class="s35"></span><span class="s36"></span><span class="s37"></span><span class="s38"></span>
                            </span>
                            <a href="#dolnoslaskie" style="clip: rect(1px, 1px, 1px, 1px);">Wrocław</a><span class="bg"></span>
                        </li>
                        <li class="pl2">
                            <span class="m">
                                <span class="s1"></span><span class="s2"></span><span class="s3"></span><span class="s4"></span><span class="s5"></span><span class="s6"></span><span class="s7"></span><span class="s8"></span>
                                <span class="s9"></span><span class="s10"></span><span class="s11"></span><span class="s12"></span><span class="s13"></span><span class="s14"></span><span class="s15"></span><span class="s16"></span>
                                <span class="s17"></span><span class="s18"></span><span class="s19"></span><span class="s20"></span><span class="s21"></span><span class="s22"></span><span class="s23"></span><span class="s24"></span>
                                <span class="s25"></span><span class="s26"></span><span class="s27"></span><span class="s28"></span><span class="s29"></span><span class="s30"></span><span class="s31"></span><span class="s32"></span>
                                <span class="s33"></span><span class="s34"></span><span class="s35"></span><span class="s36"></span><span class="s37"></span>
                            </span>
                            <a href="#kujawsko-pomorskie" style="clip: rect(1px, 1px, 1px, 1px);">Bydgoszcz</a><span class="bg"></span>
                        </li>
                        <li class="pl3">
                            <span class="m">
                                <span class="s1"></span><span class="s2"></span><span class="s3"></span><span class="s4"></span><span class="s5"></span><span class="s6"></span><span class="s7"></span><span class="s8"></span>
                                <span class="s9"></span><span class="s10"></span><span class="s11"></span><span class="s12"></span><span class="s13"></span><span class="s14"></span><span class="s15"></span><span class="s16"></span>
                                <span class="s17"></span><span class="s18"></span><span class="s19"></span><span class="s20"></span><span class="s21"></span><span class="s22"></span><span class="s23"></span><span class="s24"></span>
                                <span class="s25"></span><span class="s26"></span><span class="s27"></span><span class="s28"></span><span class="s29"></span><span class="s30"></span><span class="s31"></span><span class="s32"></span>
                                <span class="s33"></span><span class="s34"></span><span class="s35"></span>
                            </span>
                            <a href="#lubelskie" style="clip: rect(1px, 1px, 1px, 1px);">Lubelskie</a><span class="bg"></span>
                        </li>
                        <li class="pl4">
                            <span class="m">
                                <span class="s1"></span><span class="s2"></span><span class="s3"></span><span class="s4"></span><span class="s5"></span><span class="s6"></span><span class="s7"></span><span class="s8"></span>
                                <span class="s9"></span><span class="s10"></span><span class="s11"></span><span class="s12"></span><span class="s13"></span><span class="s14"></span><span class="s15"></span><span class="s16"></span>
                                <span class="s17"></span><span class="s18"></span><span class="s19"></span><span class="s20"></span><span class="s21"></span><span class="s22"></span><span class="s23"></span><span class="s24"></span>
                                <span class="s25"></span><span class="s26"></span><span class="s27"></span><span class="s28"></span><span class="s29"></span><span class="s30"></span>
                            </span>
                            <a href="#lubuskie" style="clip: rect(1px, 1px, 1px, 1px);">Lublin</a><span class="bg"></span>
                        </li>
                        <li class="pl5">
                            <span class="m">
                                <span class="s1"></span><span class="s2"></span><span class="s3"></span><span class="s4"></span><span class="s5"></span><span class="s6"></span><span class="s7"></span><span class="s8"></span>
                                <span class="s9"></span><span class="s10"></span><span class="s11"></span><span class="s12"></span><span class="s13"></span><span class="s14"></span><span class="s15"></span><span class="s16"></span>
                                <span class="s17"></span><span class="s18"></span><span class="s19"></span><span class="s20"></span><span class="s21"></span><span class="s22"></span><span class="s23"></span><span class="s24"></span>
                                <span class="s25"></span><span class="s26"></span><span class="s27"></span><span class="s28"></span><span class="s29"></span><span class="s30"></span><span class="s31"></span><span class="s32"></span>
                                <span class="s33"></span><span class="s34"></span>
                            </span>
                            <a href="#lodzkie" style="clip: rect(1px, 1px, 1px, 1px);">Łódz</a><span class="bg"></span>
                        </li>
                        <li class="pl6">
                            <span class="m">
                                <span class="s1"></span><span class="s2"></span><span class="s3"></span><span class="s4"></span><span class="s5"></span><span class="s6"></span><span class="s7"></span><span class="s8"></span>
                                <span class="s9"></span><span class="s10"></span><span class="s11"></span><span class="s12"></span><span class="s13"></span><span class="s14"></span><span class="s15"></span><span class="s16"></span>
                                <span class="s17"></span><span class="s18"></span><span class="s19"></span><span class="s20"></span><span class="s21"></span><span class="s22"></span><span class="s23"></span><span class="s24"></span>
                            </span>
                            <a href="#malopolskie" style="clip: rect(1px, 1px, 1px, 1px);">Kraków</a><span class="bg"></span>
                        </li>
                        <li class="pl7">
                            <span class="m">
                                <span class="s1"></span><span class="s2"></span><span class="s3"></span><span class="s4"></span><span class="s5"></span><span class="s6"></span><span class="s7"></span><span class="s8"></span>
                                <span class="s9"></span><span class="s10"></span><span class="s11"></span><span class="s12"></span><span class="s13"></span><span class="s14"></span><span class="s15"></span><span class="s16"></span>
                                <span class="s17"></span><span class="s18"></span><span class="s19"></span><span class="s20"></span><span class="s21"></span><span class="s22"></span><span class="s23"></span><span class="s24"></span>
                                <span class="s25"></span><span class="s26"></span><span class="s27"></span><span class="s28"></span><span class="s29"></span><span class="s30"></span><span class="s31"></span><span class="s32"></span>
                                <span class="s33"></span><span class="s34"></span><span class="s35"></span><span class="s36"></span><span class="s37"></span><span class="s38"></span><span class="s39"></span><span class="s40"></span>
                                <span class="s41"></span><span class="s42"></span><span class="s43"></span><span class="s44"></span><span class="s45"></span><span class="s46"></span><span class="s47"></span><span class="s48"></span>
                                <span class="s49"></span><span class="s50"></span><span class="s51"></span><span class="s52"></span><span class="s53"></span><span class="s54"></span><span class="s55"></span>
                            </span>
                            <a href="#mazowieckie" style="clip: rect(1px, 1px, 1px, 1px);">Warszawa</a><span class="bg"></span>
                        </li>
                        <li class="pl8">
                            <span class="m">
                                <span class="s1"></span><span class="s2"></span><span class="s3"></span><span class="s4"></span><span class="s5"></span><span class="s6"></span><span class="s7"></span><span class="s8"></span>
                                <span class="s9"></span><span class="s10"></span><span class="s11"></span><span class="s12"></span><span class="s13"></span><span class="s14"></span><span class="s15"></span><span class="s16"></span>
                                <span class="s17"></span><span class="s18"></span><span class="s19"></span><span class="s20"></span><span class="s21"></span><span class="s22"></span><span class="s23"></span><span class="s24"></span>
                            </span>
                            <a href="#opolskie" style="clip: rect(1px, 1px, 1px, 1px);">Opole</a><span class="bg"></span>
                        </li>
                        <li class="pl9">
                            <span class="m">
                                <span class="s1"></span><span class="s2"></span><span class="s3"></span><span class="s4"></span><span class="s5"></span><span class="s6"></span><span class="s7"></span><span class="s8"></span>
                                <span class="s9"></span><span class="s10"></span><span class="s11"></span><span class="s12"></span><span class="s13"></span><span class="s14"></span><span class="s15"></span><span class="s16"></span>
                                <span class="s17"></span><span class="s18"></span><span class="s19"></span><span class="s20"></span><span class="s21"></span><span class="s22"></span><span class="s23"></span><span class="s24"></span>
                                <span class="s25"></span><span class="s26"></span><span class="s27"></span><span class="s28"></span><span class="s29"></span><span class="s30"></span><span class="s31"></span><span class="s32"></span>
                            </span>
                            <a href="#podkarpackie" style="clip: rect(1px, 1px, 1px, 1px);">Rzeszów</a><span class="bg"></span>
                        </li>
                        <li class="pl10">
                            <span class="m">
                                <span class="s1"></span><span class="s2"></span><span class="s3"></span><span class="s4"></span><span class="s5"></span><span class="s6"></span><span class="s7"></span><span class="s8"></span>
                                <span class="s9"></span><span class="s10"></span><span class="s11"></span><span class="s12"></span><span class="s13"></span><span class="s14"></span><span class="s15"></span><span class="s16"></span>
                                <span class="s17"></span><span class="s18"></span><span class="s19"></span><span class="s20"></span><span class="s21"></span><span class="s22"></span><span class="s23"></span><span class="s24"></span>
                                <span class="s25"></span><span class="s26"></span><span class="s27"></span><span class="s28"></span><span class="s29"></span><span class="s30"></span><span class="s31"></span><span class="s32"></span>
                                <span class="s33"></span>
                            </span>
                            <a href="#podlaskie" style="clip: rect(1px, 1px, 1px, 1px);">Białystok</a><span class="bg"></span>
                        </li>
                        <li class="pl11">
                            <span class="m">
                                <span class="s1"></span><span class="s2"></span><span class="s3"></span><span class="s4"></span><span class="s5"></span><span class="s6"></span><span class="s7"></span><span class="s8"></span>
                                <span class="s9"></span><span class="s10"></span><span class="s11"></span><span class="s12"></span><span class="s13"></span><span class="s14"></span><span class="s15"></span><span class="s16"></span>
                                <span class="s17"></span><span class="s18"></span><span class="s19"></span><span class="s20"></span><span class="s21"></span><span class="s22"></span><span class="s23"></span><span class="s24"></span>
                                <span class="s25"></span><span class="s26"></span><span class="s27"></span><span class="s28"></span><span class="s29"></span><span class="s30"></span><span class="s31"></span><span class="s32"></span>
                                <span class="s33"></span><span class="s34"></span><span class="s35"></span><span class="s36"></span><span class="s37"></span><span class="s38"></span>
                            </span>
                            <a href="#pomorskie" style="clip: rect(1px, 1px, 1px, 1px);">Gdańsk</a><span class="bg"></span>
                        </li>
                        <li class="pl12">
                            <span class="m">
                                <span class="s1"></span><span class="s2"></span><span class="s3"></span><span class="s4"></span><span class="s5"></span><span class="s6"></span><span class="s7"></span><span class="s8"></span>
                                <span class="s9"></span><span class="s10"></span><span class="s11"></span><span class="s12"></span><span class="s13"></span><span class="s14"></span><span class="s15"></span><span class="s16"></span>
                                <span class="s17"></span><span class="s18"></span><span class="s19"></span><span class="s20"></span><span class="s21"></span><span class="s22"></span><span class="s23"></span><span class="s24"></span>
                                <span class="s25"></span><span class="s26"></span><span class="s27"></span><span class="s28"></span><span class="s29"></span><span class="s30"></span><span class="s31"></span>
                            </span>
                            <a href="#slaskie" style="clip: rect(1px, 1px, 1px, 1px);">Katowice</a><span class="bg"></span>
                        </li>
                        <li class="pl13">
                            <span class="m">
                                <span class="s1"></span><span class="s2"></span><span class="s3"></span><span class="s4"></span><span class="s5"></span><span class="s6"></span><span class="s7"></span><span class="s8"></span>
                                <span class="s9"></span><span class="s10"></span><span class="s11"></span><span class="s12"></span><span class="s13"></span><span class="s14"></span><span class="s15"></span><span class="s16"></span>
                                <span class="s17"></span><span class="s18"></span><span class="s19"></span><span class="s20"></span><span class="s21"></span><span class="s22"></span><span class="s23"></span><span class="s24"></span>
                                <span class="s25"></span><span class="s26"></span><span class="s27"></span><span class="s28"></span>
                            </span>
                            <a href="#swietokrzyskie" style="clip: rect(1px, 1px, 1px, 1px);">Kielce</a><span class="bg"></span>
                        </li>
                        <li class="pl14">
                            <span class="m">
                                <span class="s1"></span><span class="s2"></span><span class="s3"></span><span class="s4"></span><span class="s5"></span><span class="s6"></span><span class="s7"></span><span class="s8"></span>
                                <span class="s9"></span><span class="s10"></span><span class="s11"></span><span class="s12"></span><span class="s13"></span><span class="s14"></span><span class="s15"></span><span class="s16"></span>
                                <span class="s17"></span><span class="s18"></span><span class="s19"></span><span class="s20"></span><span class="s21"></span><span class="s22"></span><span class="s23"></span><span class="s24"></span>
                                <span class="s25"></span><span class="s26"></span><span class="s27"></span><span class="s28"></span><span class="s29"></span><span class="s30"></span><span class="s31"></span><span class="s32"></span>
                                <span class="s33"></span><span class="s34"></span><span class="s35"></span><span class="s36"></span><span class="s37"></span>
                            </span>
                            <a href="#warminsko-mazurskie" style="clip: rect(1px, 1px, 1px, 1px);">Olsztyn</a><span class="bg"></span>
                        </li>
                        <li class="pl15">
                            <span class="m">
                                <span class="s1"></span><span class="s2"></span><span class="s3"></span><span class="s4"></span><span class="s5"></span><span class="s6"></span><span class="s7"></span><span class="s8"></span>
                                <span class="s9"></span><span class="s10"></span><span class="s11"></span><span class="s12"></span><span class="s13"></span><span class="s14"></span><span class="s15"></span><span class="s16"></span>
                                <span class="s17"></span><span class="s18"></span><span class="s19"></span><span class="s20"></span><span class="s21"></span><span class="s22"></span><span class="s23"></span><span class="s24"></span>
                                <span class="s25"></span><span class="s26"></span><span class="s27"></span><span class="s28"></span><span class="s29"></span><span class="s30"></span><span class="s31"></span><span class="s32"></span>
                                <span class="s33"></span><span class="s34"></span><span class="s35"></span><span class="s36"></span><span class="s37"></span><span class="s38"></span><span class="s39"></span><span class="s40"></span>
                                <span class="s41"></span><span class="s42"></span><span class="s43"></span><span class="s44"></span><span class="s45"></span><span class="s46"></span><span class="s47"></span><span class="s48"></span>
                                <span class="s49"></span><span class="s50"></span>
                            </span>
                            <a href="#wielkopolskie" style="clip: rect(1px, 1px, 1px, 1px);">Poznań</a><span class="bg"></span>
                        </li>
                        <li class="pl16">
                            <span class="m">
                                <span class="s1"></span><span class="s2"></span><span class="s3"></span><span class="s4"></span><span class="s5"></span><span class="s6"></span><span class="s7"></span><span class="s8"></span>
                                <span class="s9"></span><span class="s10"></span><span class="s11"></span><span class="s12"></span><span class="s13"></span><span class="s14"></span><span class="s15"></span><span class="s16"></span>
                                <span class="s17"></span><span class="s18"></span><span class="s19"></span><span class="s20"></span><span class="s21"></span><span class="s22"></span><span class="s23"></span><span class="s24"></span>
                                <span class="s25"></span><span class="s26"></span><span class="s27"></span><span class="s28"></span><span class="s29"></span><span class="s30"></span><span class="s31"></span><span class="s32"></span>
                                <span class="s33"></span><span class="s34"></span><span class="s35"></span><span class="s36"></span><span class="s37"></span><span class="s38"></span>
                            </span>
                            <a href="#zachodniopomorskie" style="clip: rect(1px, 1px, 1px, 1px);">Szczecin</a><span class="bg"></span>
                        </li>
                    </ul>
                </div>
            </div>
            
        
        </div>
        
    </div>
</section>