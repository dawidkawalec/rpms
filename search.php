<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>


<section class="banner-uslugi">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Wyniki wyszukiwania</h1>
            </div>
        </div>
    </div>
</section>

<section id="primary" class="content-area col-lg-12 my-5">
    <main id="main" class="site-main" role="main">

        <div class="container">
            <div class="articles">
                <div class="row row-articles">
                    <?php
		if ( have_posts() ) : ?>


                    <?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

                    <div class="col-lg-4 mb-5 single">
                        <div class="single-content">
                            <a href="<?php the_permalink(); ?>">
                                <div class="single-content__padding p-4">
                                    <h2 class="title m-0"><?php the_title(); ?></h2>
                                </div>
                            </a>
                        </div>
                    </div>

                    <?php	endwhile; ?>


                    <div class="row row-pagination">
                        <?php kriesi_pagination($query->max_num_pages); ?>
                    </div>

                    <?php	else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
                </div>
            </div>
        </div>

    </main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();