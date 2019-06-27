<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dvcg-wp-theme
 */
//Favicons
$apple_touch_icon   =   get_field('apple_touch_icon', '13');
$favicon_32x32      =   get_field('favicon_32x32', '13');
$favicon_16x16      =   get_field('favicon_16x16', '13');

// Header Variables
$header_logo        =   get_field('header_logo', '13');
$menu_description   =   get_field('menu_description', '13');


?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/base.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/vendor.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $apple_touch_icon['url']; ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $favicon_32x32['url']; ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $favicon_16x16['url']; ?>">
    <link rel="manifest" href="<?php bloginfo( 'stylesheet_directory'); ?>/images/favicon_io/manifest.json">

    <!-- fontawesome
    ==================================================== -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	
	<?php wp_head(); ?>

	<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dvcg-wp-theme' ); ?></a>
	
	<!-- header
    ================================================== -->
	<header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index.html">
                <img src="<?php echo $header_logo['url']; ?>" alt="<?php echo $header_logo['alt']; ?>">
                
            </a>
        </div>

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                <h3>Navigation</h3>
				
				<?php 
                    wp_nav_menu( array(
					'theme_location' 	=> 	'primary',
					'menu_class' 		=> 	'header-nav__list'
					)); 
				?>
    
                <p><?php echo $menu_description; ?></p>
    
                <ul class="header-nav__social">
                    <?php $loop = new WP_Query( array( 'post_type' => 'social_media', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
							
                    <?php while( $loop->have_posts()): $loop->the_post(); ?>
                        <li>
                            <a href="<?php the_field('social_media_url'); ?>"><?php the_field('social_media_icon'); ?></a>
                        </li>
                    <?php endwhile; wp_reset_query(); ?>
				</ul>
				
				

            </div> <!-- end header-nav__content -->

        </nav>  <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-text">Menu</span>
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->

	<div id="content" class="site-content">
