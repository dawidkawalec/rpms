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
                            <div class="image"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></div>
                            <div class="single-content__padding">
                            <div class="date"><?php get_the_date(); ?></div>
                            <h2 class="title"><?php the_title(); ?></h2>
                            <p><?php echo wp_trim_words( get_the_content(), 15, '...' ); ?></p>
                            <div class="more d-flex">Więcej <img class="ml-2" src="/wp-content/themes/rpms/inc/assets/img/arrow.svg" alt=""></div>
                            </div>
                        </a>
                    </div>
                </div>

		<?php	endwhile; ?>


			<div class="col-lg-12"><?php the_posts_navigation(); ?></div>

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
