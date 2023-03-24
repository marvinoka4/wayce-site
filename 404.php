<?php
/**
 * The template that should display when a user navigates to a broken link or non-existent page
 */

//global $wp_query;
//$wp_query->set_404();
//status_header( 404 );
//get_template_part( 404 ); exit();


get_header(); ?>

<section class="wrapper bg-light">
    <div class="container pt-12 pt-md-14 pb-14 pb-md-16">
        <div class="row">
            <div class="col-lg-9 col-xl-8 mx-auto">
                <figure class="mb-10"><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/illustrations/404.png" alt="404-img"></figure>
            </div>
            <!-- /column -->
            <div class="col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center">
                <h1 class="mb-3">Oops! Page Not Found.</h1>
                <p class="lead mb-7 px-md-12 px-lg-5 px-xl-7">The page you are looking for is not available or has been moved. Try a different page or go to homepage with the button below.</p>
                <a href="/" class="btn btn-primary rounded-pill">Go to Homepage</a>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->



<?php get_footer(); ?>
