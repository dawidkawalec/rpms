<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>


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


<section class="post-content py-5">
    <div class="container py-4">
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="content-list d-flex">
                    <div class="autor">

                        <?php if ( get_field('autor') ) : ?>
                        <span style="color: #bfa071;"><?php echo get_field('autor'); ?></span>
                        <?php
						else :
?>
                        <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
                            <?php
						$fname = get_the_author_meta('first_name');
						$lname = get_the_author_meta('last_name');
						$full_name = '';

						if( empty($fname)){
							$full_name = $lname;
						} elseif( empty( $lname )){
							$full_name = $fname;
						} else {
							//both first name and last name are present
							$full_name = "{$fname} {$lname}";
						}

						echo $full_name;
						?>
                        </a>
                        <?php
						
						?>
                        <?php endif; ?>
                    </div>
                    <span class="px-2">|</span>
                    <div class="date">
                        <?php echo get_the_date(); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mb-5 content-list">
                <div class="table-of-content">
                    <div class="table-of-content__wrapper" id="sticky2">
                        <h3>Spis treści</h3>
                        <ul>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 head-content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>


<section class="articles articles-single-post mx-3 mb-5">
    <div class="container pb-5">
        <div class="row row-title mb-5">
            <h3>Pozostałe <strong>Artykuły</strong></h3>
        </div>
        <div class="row row-articles pb-5 owl-carousel">
            <?php
            
            $args_query = array(
                'order' => 'DESC',
				'posts_per_page' => 12
            );

            $query = new WP_Query( $args_query );

            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post(); ?>
            <div class="item">
                <div class="single">
                    <div class="single-content">
                        <a href="<?php the_permalink(); ?>">
                            <div class="image"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></div>
                        </a>
                        <div class="single-content__padding">
                            <div class="date"><?php echo get_the_date(); ?></div>

                            <a href="<?php the_permalink(); ?>">

                                <h3 class="title"><?php the_title(); ?></h3>
                            </a>
                            <p><?php echo wp_trim_words( get_the_content(), 15, '...' ); ?></p>
                            <a href="<?php the_permalink(); ?>">

                                <div class="more d-flex">Więcej <img class="ml-2"
                                        src="/wp-content/themes/rpms/inc/assets/img/arrow.svg" alt=""></div>
                            </a>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <?php }
            } else {

            }

            wp_reset_postdata();
            
            ?>
        </div>

    </div>
</section>




<section class="comments-content mb-5">
    <div class="container">
        <div class="row row-form">
            <div class="col-lg-12">
                <?php 
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>
            </div>
        </div>
    </div>
</section>


<?php get_template_part( 'template-parts/contact');?>

<script>
var n = 1;
var postNavigationList = jQuery('.single-post .table-of-content__wrapper ul');
jQuery('.heading-anchor').each(function() {

    var idHeading = jQuery(this).attr('id');
    var textHeading = jQuery(this).text();


    var li = jQuery('<li>');
    jQuery('<a>', {
        text: textHeading,
        // href: '#section' + n
        href: '#' + idHeading,
    }).appendTo(li);
    li.appendTo(postNavigationList);
    n++;


    console.log(idHeading);
    console.log(textHeading);


});

if (jQuery('.single-post .content-list .table-of-content ul li').length == 0) {
    jQuery('.single-post .content-list').remove();
}
</script>

<?php
get_footer();