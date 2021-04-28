<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>



<section class="banner-uslugi">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1><?php single_cat_title();?>
                </h1>
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

<section id="primary" class="content-area col-12">
    <main id="main" class="site-main" role="main">




        <div class="category mt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <?php 
				
				$terms = get_terms( 'category', array(
					'hide_empty' => 0,
						'order' =>'asc', 
						'parent' =>0, 
						'include' => array(6, 4, 3, 7, 5),
				) );
                $ikonka = get_field( 'ikonka' );
                echo $ikonka['url'];
				foreach ( $terms as $term ) {
					$class = ( is_category( $term->name ) ) ? 'active' : ''; // assign this class if we're on the same category page as $term->name
					echo '<div class="cat"><div class="title"><div class="icon"><img src="'. esc_url( get_field('ikonka', $term )) .'" alt=""></div><a href="' . get_term_link( $term ) . '" class="' . $class . '"><span>' . $term->name . '</span></a></div><a rel="nofollow" href="' . get_term_link( $term ) . '" class="' . $class . '" style="margin-top:1em;display:block;"><div class="more">- Więcej <img class="ml-2" src="/wp-content/themes/rpms/inc/assets/img/arrow.svg" alt=""></div></a></div>';
				}
			
			?>
                </div>
            </div>
        </div>


        <section class="articles mx-3 mt-0" style="padding-top: 100px;">
            <div class="container">
                <div class="row row-articles pb-10">

                    <?php
		if ( have_posts() ) : ?>
                    <!-- 
			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header>.page-header -->



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
                                    <div class="more d-flex">Więcej <img class="ml-2"
                                            src="/wp-content/themes/rpms/inc/assets/img/arrow.svg" alt=""></div>

                                </div>
                            </a>
                        </div>
                    </div>

                    <?php endwhile; ?>

                    <div class="row row-pagination">
                        <?php kriesi_pagination($query->max_num_pages); ?>
                    </div>

                    <?php else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

                </div>
            </div>
        </section>

    </main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();