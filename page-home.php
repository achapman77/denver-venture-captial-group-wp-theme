<?php
    /* Template Name: Home Page */

    // Advanced Custom Fields

    // Header Variables

    //Lander Section Variables
    $lander_feature_image   =   get_field('lander_feature_image');
    $lander_title           =   get_field('lander_title');
    $lander_description     =   get_field('lander_description');
    $lander_btn_1_text      =   get_field('lander_btn_1_text');
    $lander_btn_1_link      =   get_field('lander_btn_1_link');
    $lander_btn_2_text      =   get_field('lander_btn_2_text');
    $lander_btn_2_link      =   get_field('lander_btn_2_link');

    //About Section Variables
    $about_section_intro        =   get_field('about_section_intro');
    $about_section_title        =   get_field('about_section_title');
    $about_section_description  =   get_field('about_section_description');

    //Services Section Variables
    $services_intro     =   get_field('services_intro');
    $services_title     =   get_field('services_title');

    get_header();
?>

<!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src=
        "<?php if( !empty($lander_feature_image) ) : ?>
            <?php echo $lander_feature_image['url']; ?>
        <?php endif; ?>" 
        data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h3><?php echo $lander_title; ?></h3>

                <h1>
                    <?php echo $lander_description; ?>
                </h1>

                <div class="home-content__buttons">
                    <a href="<?php echo $lander_btn_1_link; ?>" class="smoothscroll btn btn--stroke">
                        <?php echo $lander_btn_1_text; ?>
                    </a>
                    <a href="<?php echo $lander_btn_2_link; ?>" class="smoothscroll btn btn--stroke">
                        <?php echo $lander_btn_2_text; ?>
                    </a>
                </div>

            </div>

            <div class="home-content__scroll">
                <a href="#about" class="scroll-link smoothscroll">
                    <span>Scroll Down</span>
                </a>
            </div>

            <div class="home-content__line"></div>

        </div> <!-- end home-content -->


        <ul class="home-social">
            <li>
                <a href="#0"><i class="fab fa-facebook" aria-hidden="true"></i><span>Facebook</span></a>
            </li>
            <li>
                <a href="#0"><i class="fab fa-twitter" aria-hidden="true"></i><span>Twiiter</span></a>
            </li>
            <li>
                <a href="#0"><i class="fab fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
            </li>
        </ul> 
        <!-- end home-social -->

    </section> <!-- end s-home -->


    <!-- about
    ================================================== -->
    <section id='about' class="s-about">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--dark"><?php echo $about_section_intro; ?></h3>
                <h1 class="display-1 display-1--light"><?php echo $about_section_title; ?></h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row about-desc" data-aos="fade-up">
            <div class="col-full">
                <?php echo $about_section_description; ?>
            </div>
        </div> <!-- end about-desc -->

        <div class="row about-stats stats block-1-4 block-m-1-2 block-mob-full" data-aos="fade-up">

            <?php $loop = new WP_Query( array( 'post_type' => 'about_section_stat', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>   
            
            <?php while( $loop->have_posts()): $loop->the_post(); ?>
                <div class="col-block stats__col ">
                    <div class="stats__count"><?php the_field('stat_value'); ?></div>
                    <h5><?php the_title(); ?></h5>
                </div>
            <?php endwhile; ?>
            
        </div> <!-- end about-stats -->

        <div class="about__line"></div>

    </section> <!-- end s-about -->


    <!-- services
    ================================================== -->
    <section id='services' class="s-services">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">What We Do</h3>
                <h1 class="display-2">We’ve got everything you need to launch and grow your business</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row services-list block-1-2 block-tab-full">
            <?php $loop = new WP_Query( array( 'post_type' => 'service_options', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
            
            <?php while( $loop->have_posts()): $loop->the_post(); ?>
                <div class="col-block service-item" data-aos="fade-up">
                    <div class="service-icon">
                        <i class="<?php the_field('service_icon'); ?>"></i>
                    </div>
                    <div class="service-text">
                        <h3 class="h2"><?php the_title(); ?></h3>
                        <?php the_field('service_description'); ?>
                    </div>
                </div>
            <?php endwhile; ?>

        </div> <!-- end services-list -->

    </section> <!-- end s-services -->


    <!-- works
    ================================================== -->
    <section id='works' class="s-works">

        <div class="intro-wrap">
                
            <div class="row section-header has-bottom-sep light-sep" data-aos="fade-up">
                <div class="col-full">
                    <h3 class="subhead">Recent Works</h3>
                    <h1 class="display-2 display-2--light">We love what we do, check out some of our latest works</h1>
                </div>
            </div> <!-- end section-header -->

        </div> <!-- end intro-wrap -->

        <div class="row works-content">
            <div class="col-full masonry-wrap">
                <div class="masonry">
    
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="<?php bloginfo('stylesheet_directory');?>/images/portfolio/gallery/g-shutterbug.jpg" class="thumb-link" title="Shutterbug" data-size="1050x700">
                                    <img src="<?php bloginfo('stylesheet_directory');?>/images/portfolio/lady-shutterbug.jpg" 
                                         srcset="<?php bloginfo('stylesheet_directory');?>/images/portfolio/lady-shutterbug.jpg 1x, <?php bloginfo('stylesheet_directory');?>/images/portfolio/lady-shutterbug@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Shutterbug
                                </h3>
                                <p class="item-folio__cat">
                                    Branding
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->

                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="<?php bloginfo('stylesheet_directory');?>/images/portfolio/gallery/g-woodcraft.jpg" class="thumb-link" title="Woodcraft" data-size="1050x700">
                                    <img src="<?php bloginfo('stylesheet_directory');?>/images/portfolio/woodcraft.jpg" 
                                         srcset="<?php bloginfo('stylesheet_directory');?>/images/portfolio/woodcraft.jpg 1x, <?php bloginfo('stylesheet_directory');?>/images/portfolio/woodcraft@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Woodcraft
                                </h3>
                                <p class="item-folio__cat">
                                    Web Design
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->
    
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="<?php bloginfo('stylesheet_directory');?>/images/portfolio/gallery/g-beetle.jpg" class="thumb-link" title="The Beetle Car" data-size="1050x700">
                                    <img src="<?php bloginfo('stylesheet_directory');?>/images/portfolio/the-beetle.jpg"
                                         srcset="<?php bloginfo('stylesheet_directory');?>/images/portfolio/the-beetle.jpg 1x, <?php bloginfo('stylesheet_directory');?>/images/portfolio/the-beetle@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    The Beetle
                                </h3>
                                <p class="item-folio__cat">
                                    Web Development
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->
    
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="<?php bloginfo('stylesheet_directory');?>/images/portfolio/gallery/g-grow-green.jpg" class="thumb-link" title="Grow Green" data-size="1050x700">
                                    <img src="<?php bloginfo('stylesheet_directory');?>/images/portfolio/grow-green.jpg" 
                                         srcset="<?php bloginfo('stylesheet_directory');?>/images/portfolio/grow-green.jpg 1x, images/portfolio/grow-green@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Grow Green
                                </h3>
                                <p class="item-folio__cat">
                                    Branding
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->

                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="<?php bloginfo('stylesheet_directory');?>/images/portfolio/gallery/g-guitarist.jpg" class="thumb-link" title="Guitarist" data-size="1050x700">
                                    <img src="<?php bloginfo('stylesheet_directory');?>/images/portfolio/guitarist.jpg" 
                                         srcset="<?php bloginfo('stylesheet_directory');?>/images/portfolio/guitarist.jpg 1x, <?php bloginfo('stylesheet_directory');?>/images/portfolio/guitarist@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Guitarist
                                </h3>
                                <p class="item-folio__cat">
                                    Web Design
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->
    
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="<?php bloginfo('stylesheet_directory');?>/images/portfolio/gallery/g-palmeira.jpg" class="thumb-link" title="Palmeira" data-size="1050x700">
                                    <img src="<?php bloginfo('stylesheet_directory');?>/images/portfolio/palmeira.jpg"
                                         srcset="<?php bloginfo('stylesheet_directory');?>/images/portfolio/palmeira.jpg 1x, <?php bloginfo('stylesheet_directory');?>/images/portfolio/palmeira@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Palmeira
                                </h3>
                                <p class="item-folio__cat">
                                    Web Design
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->

                </div> <!-- end masonry -->
            </div> <!-- end col-full -->
        </div> <!-- end works-content -->

    </section> <!-- end s-works -->


    <!-- clients
    ================================================== -->
    <section id="clients" class="s-clients">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Our Clients</h3>
                <h1 class="display-2">Denver Venture Group has been honored to
                partner up with these companies.</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row clients-outer" data-aos="fade-up">
            <div class="col-full">
                <div class="clients">
                    
                    <a href="#0" title="" class="clients__slide"><img src="<?php bloginfo('stylesheet_directory');?>/images/clients/apple.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="<?php bloginfo('stylesheet_directory');?>/images/clients/atom.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="<?php bloginfo('stylesheet_directory');?>/images/clients/blackberry.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="<?php bloginfo('stylesheet_directory');?>/images/clients/dropbox.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="<?php bloginfo('stylesheet_directory');?>/images/clients/envato.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="<?php bloginfo('stylesheet_directory');?>/images/clients/firefox.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="<?php bloginfo('stylesheet_directory');?>/images/clients/joomla.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="<?php bloginfo('stylesheet_directory');?>/images/clients/magento.png" /></a>
                     
                </div> <!-- end clients -->
            </div> <!-- end col-full -->
        </div> <!-- end clients-outer -->

        <div class="row clients-testimonials" data-aos="fade-up">
            <div class="col-full">
                <div class="testimonials">

                    <div class="testimonials__slide">

                        <p>Qui ipsam temporibus quisquam vel. Maiores eos cumque distinctio nam accusantium ipsum. 
                        Laudantium quia consequatur molestias delectus culpa facere hic dolores aperiam. Accusantium quos qui praesentium corpori.
                        Excepturi nam cupiditate culpa doloremque deleniti repellat.</p>

                        <img src="<?php bloginfo('stylesheet_directory');?>/images/avatars/user-01.jpg" alt="Author image" class="testimonials__avatar">
                        <div class="testimonials__info">
                            <span class="testimonials__name">Tim Cook</span> 
                            <span class="testimonials__pos">CEO, Apple</span>
                        </div>

                    </div>

                    <div class="testimonials__slide">
                        
                        <p>Excepturi nam cupiditate culpa doloremque deleniti repellat. Veniam quos repellat voluptas animi adipisci.
                        Nisi eaque consequatur. Quasi voluptas eius distinctio. Atque eos maxime. Qui ipsam temporibus quisquam vel.</p>

                        <img src="<?php bloginfo('stylesheet_directory');?>/images/avatars/user-05.jpg" alt="Author image" class="testimonials__avatar">
                        <div class="testimonials__info">
                            <span class="testimonials__name">Sundar Pichai</span> 
                            <span class="testimonials__pos">CEO, Google</span>
                        </div>

                    </div>

                    <div class="testimonials__slide">
                        
                        <p>Repellat dignissimos libero. Qui sed at corrupti expedita voluptas odit. Nihil ea quia nesciunt. Ducimus aut sed ipsam.  
                        Autem eaque officia cum exercitationem sunt voluptatum accusamus. Quasi voluptas eius distinctio.</p>

                        <img src="<?php bloginfo('stylesheet_directory');?>/images/avatars/user-02.jpg" alt="Author image" class="testimonials__avatar">
                        <div class="testimonials__info">
                            <span class="testimonials__name">Satya Nadella</span> 
                            <span class="testimonials__pos">CEO, Microsoft</span>
                        </div>

                    </div>

                </div><!-- end testimonials -->
                
            </div> <!-- end col-full -->
        </div> <!-- end client-testimonials -->

    </section> <!-- end s-clients -->


    <!-- contact
    ================================================== -->
    <section id="contact" class="s-contact">

        <div class="overlay"></div>
        <div class="contact__line"></div>

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Contact Us</h3>
                <h1 class="display-2 display-2--light">Reach out to discuss your idea</h1>
            </div>
        </div>

        <div class="row contact-content" data-aos="fade-up">
            
            <div class="contact-primary">

                <h3 class="h6">Send Us A Message</h3>

                <form name="contactForm" id="contactForm" method="post" action="" novalidate="novalidate">
                    <fieldset>
    
                    <div class="form-field">
                        <input name="contactName" type="text" id="contactName" placeholder="Your Name" value="" minlength="2" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input name="contactEmail" type="email" id="contactEmail" placeholder="Your Email" value="" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="" class="full-width">
                    </div>
                    <div class="form-field">
                        <textarea name="contactMessage" id="contactMessage" placeholder="Your Message" rows="10" cols="50" required="" aria-required="true" class="full-width"></textarea>
                    </div>
                    <div class="form-field">
                        <button class="full-width btn--primary">Submit</button>
                        <div class="submit-loader">
                            <div class="text-loader">Sending...</div>
                            <div class="s-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
                    </div>
    
                    </fieldset>
                </form>

                <!-- contact-warning -->
                <div class="message-warning">
                    Something went wrong. Please try again.
                </div> 
            
                <!-- contact-success -->
                <div class="message-success">
                    Your message was sent, thank you!<br>
                </div>

            </div> <!-- end contact-primary -->

            <div class="contact-secondary">
                <div class="contact-info">

                    <h3 class="h6 hide-on-fullwidth">Contact Info</h3>

                    <div class="cinfo">
                        <h5>Where to Find Us</h5>
                        <p>
                            201 Milwaukee St. Suite 200<br>
                            Denver, CO<br>
                            80206 US
                        </p>
                    </div>

                    <div class="cinfo">
                        <h5>Email Us At</h5>
                        <p>
                            info@dvcg.com
                        </p>
                    </div>

                    <div class="cinfo">
                        <h5>Call Us At</h5>
                        <p>
                            Phone: 720-651-9222<br>
                        </p>
                    </div>

                    <ul class="contact-social">
                        <li>
                            <a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                        </li>
                        
                    </ul> <!-- end contact-social -->

                </div> <!-- end contact-info -->
            </div> <!-- end contact-secondary -->

        </div> <!-- end contact-content -->

    </section> <!-- end s-contact -->


    <!-- footer
    ================================================== -->
    <footer>

        <div class="row footer-main">

            <div class="col-six tab-full left footer-desc">

                <div class="footer-logo"></div>
                Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Nulla porttitor accumsan tincidunt. Quaerat voluptas autem necessitatibus vitae aut.

            </div>

            <div class="col-six tab-full right footer-subscribe">

                <h4>Get Notified</h4>
                <p>Quia quo qui sed odit. Quaerat voluptas autem necessitatibus vitae aut non alias sed quia. Ut itaque enim optio ut excepturi deserunt iusto porro.</p>

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
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div> <!-- end photoSwipe background -->


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale-pulse-out">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
