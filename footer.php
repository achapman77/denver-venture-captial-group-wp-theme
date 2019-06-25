<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dvcg-wp-theme
 */
?>

	</div><!-- #content -->

	<!-- Footer -->
	<?php get_template_part( 'template-parts/content', 'footer' ); ?>

	
    <!-- photoswipe background
    ================================================== -->
    <?php get_template_part( 'template-parts/content', 'photoswipe' ); ?>


    <!-- preloader
    ================================================== -->
    <?php get_template_part( 'template-parts/content', 'preloader' ); ?>


    
    
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Java Script
================================================== -->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery-3.2.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/plugins.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>



</body>
</html>
