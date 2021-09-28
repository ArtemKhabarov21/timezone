<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <?php wp_head(); ?>


</head>

<body>

<!--<div id="preloader-active">-->
<!--    <div class="preloader d-flex align-items-center justify-content-center">-->
<!--        <div class="preloader-inner position-relative">-->
<!--            <div class="preloader-circle"></div>-->
<!--            <div class="preloader-img pere-text">-->
<!--                --><?php //the_custom_logo(); ?>
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- Preloader Start -->
<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="menu-wrapper">
                    <!-- Logo -->
                    <div class="logo">
                        <?php the_custom_logo(); ?>
                    </div>
                    <!-- Main-menu -->
                    <div class="main-menu d-none d-lg-block">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'Header',
                                'menu_id'        => 'navigation',
                                'container'         => 'nav', // тег контейнера или false, если контейнер не нужен
                                'container_class'   => ' ',
                                'items_wrap'      => '<ul id="%1$s">%3$s</ul>',
                            )
                        );

                        ?>
                    </div>
                    <!-- Header Right -->
                    <div class="header-right">
                        <ul>
                            <li>
                                <div class="nav-search search-switch">
                                    <span class="flaticon-search"></span>
                                </div>
                            </li>
                            <li> <a href="login.html"><span class="flaticon-user"></span></a></li>
                            <li><a href="cart.html"><span class="flaticon-shopping-cart"></span></a> </li>
                        </ul>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

</header>