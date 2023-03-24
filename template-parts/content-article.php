<section class="wrapper bg-soft-primary">
    <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
        <div class="row">
            <div class="col-md-10 col-xl-8 mx-auto">
                <div class="post-header">
                    <div class="post-category text-line">
                        <a class="hover" rel="category"><?php foreach((get_the_category()) as $category) { echo $category->cat_name; } ?></a>
                    </div>
                    <!-- /.post-category -->
                    <h1 class="display-1 mb-4"><?php the_title(); ?></h1>
                    <ul class="post-meta mb-5">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span><?php the_date(); ?></span></li>
                        <li class="post-author"><a href="#"><i class="uil uil-user"></i><span><?php the_author(); ?></span></a></li>
                    </ul>
                    <!-- /.post-meta -->
                </div>
                <!-- /.post-header -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->

<?php get_template_part( 'template-parts/content', 'post-content'); ?>