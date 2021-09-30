<?php

get_header();
?>

    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2><?php the_title(); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <?php get_template_part( 'template-parts/content/content', 'single' ); ?>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <?php get_sidebar(); ?>
            </div>
        </div>
    </section>


<?php
get_footer(); ?>