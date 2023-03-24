<?php
/**
 * The template for displaying the footer.
 *
 * Contains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

</div>
<!-- /.content-wrapper -->

<footer class="bg-dark text-inverse">
    <div class="container py-13 py-md-15">
        <div class="row gy-6 gy-lg-0">
            <div class="col-md-4 col-lg-4">
                <div class="widget">
                    <img class="mb-4" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/util/wayce-logo-light.svg" width="200px" alt="wayce-logo" />
                    <p class="mb-4">© 2023 WAYCE. <br class="d-none d-lg-block" />All rights reserved.</p>
                    <nav class="nav social social-white">
                        <a href="https://www.facebook.com/wayce.org/" target="_blank"><i class="uil uil-facebook-f"></i></a>
                        <a href="https://twitter.com/wayce_org" target="_blank"><i class="uil uil-twitter"></i></a>
                        <a href="https://www.instagram.com/wayce_org/" target="_blank"><i class="uil uil-instagram"></i></a>
                    </nav>
                    <!-- /.social -->
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-4 col-lg-4">
                <div class="widget">
                    <h4 class="widget-title text-white mb-3">Get in Touch</h4>
                    <address class="pe-xl-15 pe-xxl-17">Plot 213, Lozumba Plaza Area 10, Garki, Abuja.</address>
                    <a href="mailto:#">info@wayce.org</a><br /> <a href="tel:+2349033797799"> +234 (0) 903 379 7799 </a>
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-4 col-lg-4">
                <div class="widget">
                    <h4 class="widget-title text-white mb-3">Learn More</h4>
                    <ul class="list-unstyled  mb-0">
                        <li><a href="/about-us">About Us</a></li>
                        <li><a href="/projects">Our Projects</a></li>
                        <li><a href="/contact-us">Contact Us</a></li>
                        <li><a href="/privacy-policy">Privacy Policy</a></li>
                    </ul>
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</footer>
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>

<?php wp_footer();?>

</body>
</html>