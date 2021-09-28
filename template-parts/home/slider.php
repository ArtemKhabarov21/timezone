
<?php if( have_rows('slider') ):?>
<!--slider Area Start -->
        <div class="slider-area ">
            <div class="slider-active">
                <?php while( have_rows('slider') ): the_row();
                    $image = get_sub_field('slider_img');
                    $text = get_sub_field('slider_text');
                    $heading = get_sub_field('heading');
                    $button_text = get_sub_field('slider_button_text');
                    $link = get_sub_field('slider_link');
                    ?>
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center slide-bg">
                    <div class="container">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay=".4s" data-duration="2000ms"><?=$heading?></h1>
                                    <p data-animation="fadeInLeft" data-delay=".7s" data-duration="2000ms"><?=$text?></p>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s" data-duration="2000ms">
                                        <a href="<?=$link?>" class="btn hero-btn"><?=$button_text?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block">
                                <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                    <img src="<?=$image?>"  class="heartbeat">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile;  ?>
            </div>
        </div>
<?php endif; ?>
