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
			<div class="col-lg-10 offset-lg-1 mb-4">
				<div class="content-list d-flex">
					<div class="autor">
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
					</div>
					<span class="px-2">|</span>
					<div class="date">
						<?php echo get_the_date(); ?>
					</div>
				</div>
			</div>
			<div class="col-lg-10 offset-lg-1 mb-5 content-list">
			<div class="table-of-content">
					<div class="table-of-content__wrapper" id="sticky2">
						<h3>Spis treści</h3>
						<ul>
							
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-10 offset-lg-1 head-content">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>


<section class="articles mx-3 mb-5">
    <div class="container pb-5">
    <div class="row row-title mb-5">
            <h3>Pozostale <strong>Artykuły</strong></h3>
    </div>
        <div class="row row-articles pb-5">
		<?php
            
            $args_query = array(
                'order' => 'DESC',
				'posts_per_page' => 3
            );

            $query = new WP_Query( $args_query );

            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post(); ?>
                    <div class="col-lg-4 mb-5 mb-lg-0 single">
                <div class="single-content">
                <a href="<?php the_permalink(); ?>">
                        <div class="image"><img src="http://rpms.craftweb.pl/wp-content/themes/rpms/inc/assets/img/Kancelaria-Prawna-RPMS-Prawo-Podatki-Windykacja_2.jpg" alt=""></div>
                        <div class="single-content__padding">
                        <div class="date">21 Czerwca 2020</div>
                        <h2 class="title">Tarcza antykryzysowa  pomoc dla przedsiębiorców</h2>
                        <p>Osoba fizyczna będzie mogła ubiegać się o świadczenie postojowe w wysokości 2.080,00 złotych…</p>
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
jQuery('.heading-anchor').each(function () {

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

if(jQuery('.single-post .content-list .table-of-content ul li').length == 0){
	jQuery('.single-post .content-list').remove();
}
</script>

<?php
get_footer();
