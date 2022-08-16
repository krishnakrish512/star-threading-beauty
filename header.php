<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="SemiColonWeb"/>

    <!-- Stylesheets
    ============================================= -->
    <link href="https://fonts.googleapis.com/css2?family=Prata&family=Roboto:wght@300;400;500;700&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="assets/css/colors.php?color=F1C77A" type="text/css"/>
    <!-- Date & Time Picker CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- Document Title
    ============================================= -->
    <title>Therapy &amp; Beauty | Canvas</title>

    <style>

    </style>
    <?php wp_head(); ?>
</head>

<body class="stretched page-transition">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="transparent-header floating-header dark custom-header-size" data-sticky-shrink="false">
        <div id="header-wrap">
            <div class="container pr-md-0">
                <div class="header-row">
                    <?php
                    if (function_exists('the_custom_logo')) {
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_url($custom_logo_id, 'full');
//                            var_dump($logo);
//                            exit();
                    } ?>

                    <!-- Logo
                    ============================================= -->
                    <div id="logo" class="mr-lg-4 pr-lg-4">
                        <a href="<?= get_home_url(); ?>" class="standard-logo"><img src="<?php echo $logo; ?>"
                                                                        alt="Canvas Logo"></a>
                        <a href="<?= get_home_url(); ?>" class="retina-logo"><img src="<?php echo $logo; ?>"
                                                                      alt="Canvas Logo"></a>
                    </div><!-- #logo end -->

                    <div id="primary-menu-trigger">
                        <svg class="svg-trigger" viewBox="0 0 100 100">
                            <path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path>
                            <path d="m 30,50 h 40"></path>
                            <path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path>
                        </svg>
                    </div>

                    <div class="header-misc ml-lg-auto">
                        <a href="#" class="font-weight-medium font-primary" data-scrollto="#section-appointment"
                           data-easing="easeInOutExpo" data-speed="1250" data-offset="140">Book Now</a>
                    </div>

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav class="primary-menu">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',

                            'container' => 'div',
                            'menu_class' => 'menu-container style-2  ',
//                            'container_class' => 'overflow-hidden',

                        )); ?>
                    </nav>

                </div>
            </div>
        </div>
        <div class="header-wrap-clone"></div>
    </header><!-- #header end -->

