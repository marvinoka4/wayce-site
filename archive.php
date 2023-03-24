<?php
/**
 * The template for displaying archive
 */

//global $wp_query;
//$wp_query->set_404();
//status_header( 404 );
//get_template_part( 404 ); exit();


get_header(); ?>

<?php get_template_part( 'template-parts/content', 'page-head'); ?>

<?php get_template_part( 'template-parts/content', 'sidebar'); ?>


<?php get_footer(); ?>
