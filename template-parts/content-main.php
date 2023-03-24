<div class="blog classic-view">
    <article class="post">
        <div class="card">
            <figure class="card-img-top overlay overlay-1 hover-scale"><a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="" /></a>
                <figcaption>
                    <h5 class="from-top mb-0">Read More</h5>
                </figcaption>
            </figure>
            <div class="card-body">
                <div class="post-header">
                    <div class="post-category text-line">
                        <a class="hover" rel="category"><?php foreach((get_the_category()) as $category) { echo $category->cat_name; } ?></a>
                    </div>
                    <!-- /.post-category -->
                    <h2 class="post-title mt-1 mb-0"><a class="link-dark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div>
                <!-- /.post-header -->
                <div class="post-content">
                    <p><?php the_excerpt(); ?></p>
                </div>
                <!-- /.post-content -->
            </div>
            <!--/.card-body -->
            <div class="card-footer">
                <ul class="post-meta d-flex mb-0">
                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span><?php echo get_the_date(); ?></span></li>
                    <li class="post-author ms-auto"><i class="uil uil-user"></i><span><?php the_author(); ?></span></li>
                </ul>
                <!-- /.post-meta -->
            </div>
            <!-- /.card-footer -->
        </div>
        <!-- /.card -->
    </article>
    <!-- /.post -->
</div>
<!-- /.blog -->