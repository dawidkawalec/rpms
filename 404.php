<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WP_Bootstrap_Starter
 */


get_header(); ?>

<section class="banner-uslugi">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Nie znaleziono takiej strony</h1>
            </div>
        </div>
    </div>
</section>
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
<section class="search404">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p>Wygląda na to, że nie znaleziono takiej podstrony. Może spróbujesz wyszukać? </p>


                <form action="/" method="get" class="w-100">
                    <input type="text" class="w-100 input-word" name="s" placeholder="Wpisz czego szukasz..."
                        id="search" value="<?php the_search_query(); ?>" />
                    <input type="submit" class="search-btn" value="szukaj">
                </form>

            </div>
        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/contact');?>
<?php
get_footer();