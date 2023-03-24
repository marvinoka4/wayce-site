
<aside class="col-lg-4 sidebar mt-8 mt-lg-6">
    <!-- /.widget -->
    <div class="widget">
        <form class="search-form">
            <div class="form-floating mb-0">
                <?php dynamic_sidebar('search-sidebar'); ?>
            </div>
        </form>
        <!-- /.search-form -->
    </div>
    <!-- /.widget -->
    <div class="widget">
        <h4 class="widget-title mb-3">About Us</h4>
        <p>We are a non-governmental and non-profit-making organization which was conceived out of the passion of providing healthy livelihood for women and youths of Nigeria and beyond.</p>
        <nav class="nav social">
            <a href="https://www.facebook.com/wayce.org/" target="_blank"><i class="uil uil-facebook-f"></i></a>
            <a href="https://twitter.com/wayce_org" target="_blank"><i class="uil uil-twitter"></i></a>
            <a href="https://www.instagram.com/wayce_org/" target="_blank"><i class="uil uil-instagram"></i></a>
        </nav>
        <!-- /.social -->
    </div>
    <!-- /.widget -->
    <div class="widget">
        <h4 class="widget-title mb-3">Categories</h4>
        <?php dynamic_sidebar('category-sidebar'); ?>
    </div>
    <!-- /.widget -->
    <div class="widget">
        <h4 class="widget-title mb-3">Archive</h4>
        <ul class="unordered-list bullet-primary text-reset">
            <?php dynamic_sidebar('archive-sidebar'); ?>
        </ul>
    </div>
    <!-- /.widget -->
    <div class="widget">
        <h4 class="widget-title mb-3">Tags</h4>
        <ul class="list-unstyled tag-list">
            <?php dynamic_sidebar('tag-sidebar'); ?>
        </ul>
    </div>
    <!-- /.widget -->
</aside>
<!-- /column .sidebar -->