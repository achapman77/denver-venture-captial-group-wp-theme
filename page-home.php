<?php
    /* Template Name: Home Page */
    
    

    get_header();
?>

<!-- Lander
================================================== -->
<?php get_template_part( 'template-parts/content', 'lander' ); ?>


<!-- about
================================================== -->
<?php get_template_part( 'template-parts/content', 'about' ); ?>


<!-- services
================================================== -->
<?php get_template_part( 'template-parts/content', 'services' ); ?>


<!-- works
================================================== -->
<?php get_template_part( 'template-parts/content', 'projects' ); ?>


<!-- clients
================================================== -->
<?php get_template_part( 'template-parts/content', 'clients' ); ?>


<!-- contact
================================================== -->
<?php get_template_part( 'template-parts/content', 'contact' ); ?>


<!-- footer
================================================== -->
<?php get_footer(); ?>

