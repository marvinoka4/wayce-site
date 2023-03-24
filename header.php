<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all the <head> section
 *
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#603cba">
    <meta name="theme-color" content="#ffffff">
    <?php wp_head();?>
</head>
<body>
<div class="content-wrapper">
    <header class="wrapper bg-dark">
        <nav class="navbar navbar-expand-lg center-nav transparent navbar-dark">
            <div class="container flex-lg-row flex-nowrap align-items-center">
                <div class="navbar-brand w-100">
                    <a href="/">
                        <img class="logo-dark" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/util/wayce-logo-dark.svg" width="200px" alt="wayce logo" />
                        <img class="logo-light" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/util/wayce-logo-light.svg"  width="200px" alt="wayce logo" />
                    </a>
                </div>
                <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                    <div class="offcanvas-header d-lg-none">
                        <h3 class="text-white fs-30 mb-0">
                            <?php echo get_bloginfo('name')?>
                        </h3>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">

                        <?php wp_nav_menu(
                                array(
                                        'menu' => 'primary',
                                        'container' => '',
                                        'theme_location' => 'primary',
                                        'items_wrap' => '<ul class="navbar-nav">%3$s</ul>'
                                )
                        );
                        ?>

                        <div class="offcanvas-footer d-lg-none">
                            <div>
                                <a href="mailto:info@wayce.org" class="link-inverse">info@wayce.org</a>
                                <br /> <a href="tel:+2349033797799"> +234 (0) 903 379 7799 </a> <br />
                                <nav class="nav social social-white mt-4">
                                    <a href="https://www.facebook.com/wayce.org/" target="_blank"><i class="uil uil-facebook-f"></i></a>
                                    <a href="https://twitter.com/wayce_org" target="_blank"><i class="uil uil-twitter"></i></a>
                                    <a href="https://www.instagram.com/wayce_org/" target="_blank"><i class="uil uil-instagram"></i></a>
                                </nav>
                                <!-- /.social -->
                            </div>
                        </div>
                        <!-- /.offcanvas-footer -->
                    </div>
                    <!-- /.offcanvas-body -->
                </div>
                <!-- /.navbar-collapse -->
                <div class="navbar-other w-100 d-flex ms-auto">
                    <ul class="navbar-nav flex-row align-items-center ms-auto">
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-search"><i class="uil uil-search"></i></a></li>
                        <li class="nav-item d-lg-none">
                            <button class="hamburger offcanvas-nav-btn"><span></span></button>
                        </li>
                    </ul>
                    <!-- /.navbar-nav -->
                </div>
                <!-- /.navbar-other -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- /.navbar -->
        <div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
            <div class="container d-flex flex-row py-6">
                <form role="search" method="get" class="search-form w-100" action="<?php echo home_url( '/' ); ?>">
                    <label class="screen-reader-text" for="s">' . __( 'Type keyword and hit enter' ) . '</label>
                    <input type="text" class="form-control" placeholder="<?php echo esc_attr_x( 'Type keyword and hit enter', 'placeholder' ) ?>" value=" <?php get_search_query() ?> " name="s" id="s" />
                </form>
                <!-- /.search-form -->
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.offcanvas -->
    </header>
    <!-- /header -->