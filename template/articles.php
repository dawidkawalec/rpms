<?php
/**
* Template Name: Aktualności
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
                        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                    }
                ?>
                </div>
            </div>
        </div>
    </section>


<div class="category mt-5">
    <div class="container">
        <div class="row">
        <?php 
				
				$terms = get_terms( 'category', array(
					'hide_empty' => 0,
						'order' =>'asc', 
						'parent' =>0, 
						'include' => array(6, 4, 3, 7, 5),
				) );
				foreach ( $terms as $term ) {
					$class = ( is_category( $term->name ) ) ? 'active' : ''; // assign this class if we're on the same category page as $term->name
					echo '<div class="cat"><a href="' . get_term_link( $term ) . '" class="' . $class . '"><div class="title"><div class="icon"><img src="https://rpms.pl/wp-content/uploads/2020/03/worldwide.png" alt=""></div><h2>' . $term->name . '</h2></div><div class="more">- Więcej <img class="ml-2" src="/wp-content/themes/rpms/inc/assets/img/arrow.svg" alt=""></div></a></div>';
				}
			
			?>
        </div>
    </div>
</div>

    
<section class="articles mx-3">
    <div class="container">
        <div class="row row-articles pb-10">
                <?php
                
                if($pages == '')
                {
                    global $wp_query;
                    $pages = $wp_query->max_num_pages;
                    if(!$pages)
                    {
                        $pages = 1;
                    }
                }

                $args_query = array(
                    'order' => 'DESC',
                    'posts_per_page' => 9,
                    'paged' => $paged,
                );
                
                
                $query = new WP_Query( $args_query );

                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post(); ?>
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
                    <?php }
                } else {

                }

                wp_reset_postdata();
                
                ?>
                
            
        </div>
        <div class="row row-pagination">
        <?php kriesi_pagination($query->max_num_pages); ?>
        </div>
    </div>
</section>

</div>

</div>

<?php get_template_part( 'template-parts/contact');?>


<?php
get_footer(); ?>