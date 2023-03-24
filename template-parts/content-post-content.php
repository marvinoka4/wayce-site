<section class="wrapper bg-light">
    <div class="container pb-14 pb-md-16">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="blog single mt-n17">
                    <div class="card">
                        <figure class="card-img-top"><img src="<?php the_post_thumbnail_url(); ?>" alt="" /></figure>
                        <div class="card-body">
                            <div class="classic-view">
                                <article class="post">
                                    <div class="post-content mb-5">

                                        <?php the_content(); ?>

                                    </div>
                                    <!-- /.post-content -->
                                    <div class="post-footer d-md-flex flex-md-row justify-content-md-between align-items-center mt-8">
                                        <div>
                                            <ul class="list-unstyled tag-list mb-0">
                                                <li>
                                                    <?php
                                                    the_tags(' <li class="btn btn-soft-ash btn-sm rounded-pill mb-1"><span>', '</span></li><li class="btn btn-soft-ash btn-sm rounded-pill mb-2"><span>', '</span></li>');
                                                    ?>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mb-0 mb-md-2">
                                            <div class="dropdown share-dropdown btn-group">
                                                <button class="btn btn-sm btn-red rounded-pill btn-icon btn-icon-start dropdown-toggle mb-0 me-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="uil uil-arrow-left"></i> Go Back </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="/"><i class="uil uil-home"></i>Home</a>
                                                    <a class="dropdown-item" href="/projects"><i class="uil uil-heart-alt"></i>Projects</a>
                                                </div>
                                                <!--/.dropdown-menu -->
                                            </div>
                                            <!--/.back-dropdown -->
                                        </div>
                                    </div>
                                    <!-- /.post-footer -->
                                </article>
                                <!-- /.post -->
                            </div>
                            <!-- /.classic-view -->
                            <hr />

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.blog -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->