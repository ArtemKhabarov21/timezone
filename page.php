<?php get_header();?>


<main>
    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2><?php wp_title(); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="sample-text-area">
        <div class="container box_1170">
            <?php get_template_part( 'template-parts/content/content', 'page' ); ?>
        </div>
    </section>

</main>


<?php get_footer();?>
