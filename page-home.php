<?php
    /* Template Name: Home Page */
    
    //Footer Variables
$footer_mission_statement   =   get_field('footer_mission_statement');
$footer_subscribe_title     =   get_field('footer_subscribe_title');
$footer_subscribe_body      =   get_field('footer_subscribe_body');

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
    <footer>
        <div class="row footer-main">

            <div class="col-six tab-full left footer-desc">

                <div class="footer-logo"></div>
                <p><?php echo $footer_mission_statement; ?></p>

            </div>

            <div class="col-six tab-full right footer-subscribe">

                <h4><?php echo $footer_subscribe_title; ?></h4>
                <p><?php echo $footer_subscribe_body; ?></p>

                <div class="subscribe-form">
                    <form id="mc-form" class="group" novalidate="true">
                        <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">
                        <input type="submit" name="subscribe" value="Subscribe">
                        <label for="mc-email" class="subscribe-message"></label>
                    </form>
                </div>

            </div>

        </div> <!-- end footer-main -->

        <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    <!-- <span>© Copyright Glint 2017</span>  -->
                    <!-- <span>Site Template by <a href="https://www.colorlib.com/">Colorlib</a></span>	 -->
                </div>

                <div class="go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
                </div>
            </div>

        </div> <!-- end footer-bottom -->

    </footer> <!-- end footer -->


    <!-- photoswipe background
    ================================================== -->
    <?php get_template_part( 'template-parts/content', 'photoswipe' ); ?>


    <!-- preloader
    ================================================== -->
    <?php get_template_part( 'template-parts/content', 'preloader' ); ?>





<?php get_footer(); ?>

