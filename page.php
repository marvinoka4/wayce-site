<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header();


get_template_part('template-parts/content', 'page-head');

get_template_part('template-parts/content', 'post-content');


get_footer();