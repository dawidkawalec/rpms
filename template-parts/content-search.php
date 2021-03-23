<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

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
 