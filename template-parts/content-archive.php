
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
                }
                ?>

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
