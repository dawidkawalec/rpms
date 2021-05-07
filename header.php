<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>


    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBn10ljCCiNC5wwfZCunru90Miw0nzmOAY" defer></script> -->
    <link rel="stylesheet" href="https://use.typekit.net/qve3pib.css">
    <link rel="preload" as="image"
        href="/wp-content/themes/rpms/inc/assets/img/Kancelaria-Prawna-RPMS-Prawo-Podatki-Windykacja_2.jpg" />
    <?php wp_head(); ?>

    <?php
    if ( is_page_template( array( 'template/windykacja.php', 'template/windykacja-miasta.php' ) ) ){
    
    ?>

    <?php
    }
    else {
     get_template_part( 'schema/legalservice');
    }
    ?>


    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Kancelaria Prawna RPMS Staniszewski & Wspólnicy",
        "url": "https://rpms.pl/",
        "logo": "https://rpms.pl/wp-content/themes/rpms/inc/assets/img/logo_rpms.png",
        "sameAs": [
            "https://www.facebook.com/KancelariaPrawnaRPMS",
            "https://www.linkedin.com/company/kancelaria-prawna-rpms",
            "https://picpanzee.com/rpms_legal",
            "https://www.instagram.com/rpms_legal/"
        ]
    }
    </script>

</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
        <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
        <header id="hamburger" class="site-header navbar-static-top" role="banner">
            <div class="container-fluid">
                <div class="row justify-content-between px-3">
                    <div class="logo">
                        <a href="<?php echo esc_url('/'); ?>">
                            <img src="/wp-content/themes/rpms/inc/assets/img/logo_rpms.png"
                                alt="Kancelaria Prawna RPMS">
                        </a>
                    </div>
                    <nav class="navbar navbar-expand-xl py-0">

                        <?php
                        wp_nav_menu(array(
                        'theme_location'    => 'primary',
                        'container'       => 'div',
                        'container_id'    => 'main-nav',
                        'container_class' => 'navbar-collapse justify-content-end mt-5 mt-xl-0',
                        'menu_id'         => false,
                        'menu_class'      => 'navbar-nav',
                        'depth'           => 3,
                        'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                        'walker'          => new wp_bootstrap_navwalker(),
                        'items_wrap' => '<ul id="%1$s"  class="%2$s">%3$s</ul>'
                        ));
                        ?>

                        <div class="search ml-lg-5 d-xl-block d-none">
                            <div class="icon"><i class="fas fa-search"></i></div>
                            <div class="search-content">
                                <form action="/" method="get" class="w-100">
                                    <input type="text" class="w-100 input-word" name="s"
                                        placeholder="Wpisz czego szukasz..." id="search"
                                        value="<?php the_search_query(); ?>" />
                                    <input type="submit" class="search-btn" value="szukaj">
                                </form>
                            </div>
                        </div>


                        <div class="phone">
                            <div class="icon"><i class="fas fa-phone-alt"></i></div>
                            <div class="data">
                                <a href="tel:+48 61 307 09 91">+48 61 307 09 91</a>
                                <a href="mailto:kancelaria@rpms.pl">kancelaria@rpms.pl</a>
                            </div>
                        </div>

                    </nav>


                    <div class="search ml-lg-5 d-xl-none">
                        <div class="icon"><i class="fas fa-search"></i></div>
                    </div>
                    <div class="search-mobile">
                        <div class="search-content d-xl-none">
                            <form action="/" method="get" class="w-100">
                                <input type="text" class="w-100 input-word" name="s"
                                    placeholder="Wpisz czego szukasz..." id="search"
                                    value="<?php the_search_query(); ?>" />
                                <input type="submit" class="search-btn" value="szukaj">
                            </form>
                        </div>
                    </div>

                    <div class="site-hamburger">
                        <div id="nav-icon3">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                </div>
            </div>
        </header><!-- #masthead -->


        <?php endif; ?>