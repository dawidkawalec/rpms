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
                <img src="/wp-content/uploads/2021/03/logorpmswhite.png" alt="Kancelaria Prawna RPMS" class="logo">
                <p>Zapewniamy pełne wsparcie prawne w przygotowaniu formalnego zaplecza funkcjonowania podmiotów
                    gospodarczych świadczących usługi poprzez sieć internetową, w tym regulaminów, polityk
                    bezpieczeństwa, ogólnych warunków, formularzy i innych, a także w procesach windykacyjnych i
                    podatkowych.</p>
                <ul class="social m-0 mb-3 mb-lg-0 p-0">
                    <li><a href="https://www.google.com/url?q=https://www.facebook.com/KancelariaPrawnaRPMS/&sa=D&source=editors&ust=1619467317378000&usg=AOvVaw1cG6CYRQsOluJykXWk8MNY"
                            rel="nofollow"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.google.com/url?q=https://pl.linkedin.com/company/kancelaria-prawna-rpms&sa=D&source=editors&ust=1619467317378000&usg=AOvVaw2nlRYDWvn1AGb8md7kvhH7"
                            rel="nofollow"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#https://www.google.com/url?q=https://www.instagram.com/rpms_kancelaria/&sa=D&source=editors&ust=1619467317378000&usg=AOvVaw2LW_Hg0y3-SzD-xMJrBqFp"
                            rel="nofollow"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-3 links pl-lg-5 mb-3 mb-lg-0">
                <span>Usługi prawne</span>
                <?php
                            wp_nav_menu(array(
                            'theme_location'    => 'uslugi',
                            'container'       => 'div',
                            'container_id'    => 'main',
                            'menu_class' => 'm-0 p-0',
                            'container_class' => 'navbar-collapse justify-content-end',
                            'menu_id'         => false,
                            ));
                        ?>
            </div>
            <div class="col-lg-3 links mb-3 mb-lg-0">
                <span>RPMS</span>
                <?php
                            wp_nav_menu(array(
                            'theme_location'    => 'rpms',
                            'container'       => 'div',
                            'container_id'    => 'main',
                            'menu_class' => 'm-0 p-0',
                            'container_class' => 'navbar-collapse justify-content-end',
                            'menu_id'         => false,
                            ));
                        ?>
            </div>
            <div class="col-lg-3 links mb-3 mb-lg-0">
                <span>Przydatne linki</span>
                <?php
                            wp_nav_menu(array(
                            'theme_location'    => 'links',
                            'container'       => 'div',
                            'container_id'    => 'main',
                            'menu_class' => 'm-0 p-0',
                            'container_class' => 'navbar-collapse justify-content-end',
                            'menu_id'         => false,
                            ));
                        ?>
            </div>
        </div>

    </div>

    <div class="copy text-center">
        © Copyright <?php echo date('Y'); ?> - wszelkie prawa zastrzeżone RPMS
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
        "tooltips": false,
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