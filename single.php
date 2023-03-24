<?php
/**
 * The template for displaying all single posts and attachments
 */

//global $wp_query;
//$wp_query->set_404();
//status_header( 404 );
//get_template_part( 404 ); exit();


get_header(); ?>

<?php
if ( have_posts() ){

    while ( have_posts() ){

        the_post();

        get_template_part( 'template-parts/content', 'article');

    }
}
?>



<?php get_footer(); ?>
