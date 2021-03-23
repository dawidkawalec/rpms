<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
 
?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>

<?php get_template_part( 'footer-widget' ); ?>
<footer id="colophon" class="mx-3 mt-4 mb-3 site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>"
    role="contentinfo">
    <div class="container pt-3 pb-3">
        <div class="row">
            <div class="col-lg-3 info mb-3 mb-lg-0">
                <img src="/wp-content/uploads/2021/03/logorpmswhite.png" alt="" class="logo">
                <p>Zapewniamy pełne wsparcie prawne w przygotowaniu formalnego zaplecza funkcjonowania podmiotów
                    gospodarczych świadczących usługi poprzez sieć internetową, w tym regulaminów, polityk
                    bezpieczeństwa, ogólnych warunków, formularzy i innych, a także w procesach windykacyjnych i
                    podatkowych.</p>
                <ul class="social m-0 mb-3 mb-lg-0 p-0">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-3 links pl-lg-5 mb-3 mb-lg-0">
                <span>Usługi prawne</span>
                <ul class="m-0 p-0">
                    <li><a href="#">Prawo</a></li>
                    <li><a href="#">Finanse i bankowość</a></li>
                    <li><a href="#">Własnośc intelektualna</a></li>
                    <li><a href="#">IT / E-commerce</a></li>
                </ul>
            </div>
            <div class="col-lg-3 links mb-3 mb-lg-0">
                <span>RPMS</span>
                <ul class="m-0 p-0">
                    <li><a href="#">Usługi prawne</a></li>
                    <li><a href="#">Zespół</a></li>
                    <li><a href="#">Aktualności</a></li>
                    <li><a href="#">Media o nas</a></li>
                    <li><a href="#">Zaufali nam</a></li>
                    <li><a href="#">Kontakt</a></li>
                </ul>
            </div>
            <div class="col-lg-3 links mb-3 mb-lg-0">
                <span>Przydatne linki</span>
                <ul class="m-0 p-0">
                    <li><a href="#">Dane osobowe (RODO)</a></li>
                    <li><a href="#">Regulamin strony</a></li>
                    <li><a href="#">Pliki cookie</a></li>

                </ul>
            </div>
        </div>

    </div>

    <div class="copy text-center">
        © Copyright 2020 - wszelkie prawa zastrzeżone RPMS
    </div>

</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<script type="text/javascript" src="/wp-content/themes/rpms/inc/assets/js/jquery.cssmap.min.js"></script>

<?php wp_footer(); ?>
<script>
jQuery(window).load(function() {
jQuery("#map-poland").CSSMap({
        "size": 650,
        "activateOnLoad": ["pl7"],
        "cities": true,
        "tooltips" : false,
        "responsive": "auto",
        "agentsList": {
            "enable": true,
            "agentsListId": "#demo-agents",
            "agentsListSpeed": 1000,
        }
    });
});


</script>
<?php wp_footer(); ?>

</body>

</html>