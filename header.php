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
    <link rel="stylesheet" href="https://use.typekit.net/qve3pib.css">
    <?php wp_head(); ?>
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
                    <img src="/wp-content/themes/rpms/inc/assets/img/logo_rpms.png" alt="RPMS logo">
                </a>
            </div>
                <nav class="navbar navbar-expand-xl py-0">

                        <?php
                    wp_nav_menu(array(
                    'theme_location'    => 'primary',
                    'container'       => 'div',
                    'container_id'    => 'main-nav',
                    'container_class' => 'collapse navbar-collapse justify-content-end',
                    'menu_id'         => false,
                    'menu_class'      => 'navbar-nav',
                    'depth'           => 3,
                    'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                    'walker'          => new wp_bootstrap_navwalker()
                    ));
                    ?>

                    <div class="search ml-lg-5">
                        <div class="icon"><i class="fas fa-search"></i></div>
                    </div>


                    <div class="phone">
                        <div class="icon"><i class="fas fa-phone-alt"></i></div>
                        <div class="data">
                            <a href="#">+48 61 307 09 91</a>
                            <a href="#">kancelaria@rpms.pl</a>
                        </div>
                    </div>

                </nav>
                </div>
            </div>
        </header><!-- #masthead -->


        <?php endif; ?>