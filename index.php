<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */

get_header(); ?>


<section class="wrapper bg-gray">
    <div class="container pt-10 pb-12 pt-md-14 pb-md-16 text-center">
        <div class="row">
            <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
                <h1 class="display-1 mb-3">Our Projects</h1>
                <p class="lead px-lg-5 px-xxl-8">Check out some of the projects that we do to empower Women and Youth.</p>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->


<?php get_template_part( 'template-parts/content', 'archive'); ?>




<?php get_footer(); ?>
