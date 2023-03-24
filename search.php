<?php
/**
 * The template for displaying the search page
 */

//global $wp_query;
//$wp_query->set_404();
//status_header( 404 );
//get_template_part( 404 ); exit();


get_header(); ?>



    <section class="wrapper bg-gray">
        <div class="container pt-10 pb-12 pt-md-14 pb-md-16 text-center">
            <div class="row">
                <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
                    <h2 class="display-1 mb-3">Search Results for "<?php echo get_search_query(); ?>" </h2>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->

    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row gx-lg-8 gx-xl-12">
                <div class="col-lg-8 order-lg-2">

                    <?php dragon_pagination(); ?>

                    <?php
                    if ( have_posts() ){

                        while ( have_posts() ){

                            the_post();

                            get_template_part( 'template-parts/content', 'main');
                        }
                    } else { ?>

                        <div class="container">
                            <div class="row">
                                <div>
                                    <h2 class="fs-16 text-uppercase text-line text-primary mb-3">No Search Results.</h2>
                                    <h3 class="display-4 mb-9"> Sorry, we couldn't find anything with the term "<?php echo get_search_query(); ?>" </h3>
                                </div>
                                <!-- /column -->
                                <hr />
                                <div class="mb-0 mb-md-2">
                                    <div class="dropdown share-dropdown btn-group">
                                        <button class="btn btn-sm btn-red rounded-pill btn-icon btn-icon-start dropdown-toggle mb-0 me-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="uil uil-arrow-left"></i> Would You Like To Go Back </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="/"><i class="uil uil-home"></i>Home</a>
                                            <a class="dropdown-item" href="/projects"><i class="uil uil-heart-alt"></i>Projects</a>
                                        </div>
                                        <!--/.dropdown-menu -->
                                    </div>
                                    <!--/.back-dropdown -->
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container -->

                     <?php   } ?>

                    <?php dragon_pagination(); ?>

                </div>

                <!-- /column -->
                <?php get_template_part( 'template-parts/content', 'sidebar'); ?>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->




<?php get_footer(); ?>