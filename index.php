<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

    <main>
    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2><?php single_post_title(); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                        <?php
                            if ( have_posts() ) {
                                while ( have_posts() ) {
                                    the_post();
                                    get_template_part( 'template-parts/content/content' );
                                }
                             } else {
                            echo wpautop( 'Постов для вывода не найдено.' );
                                }
                                ?>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
    </main>
<?php
get_footer(); ?>