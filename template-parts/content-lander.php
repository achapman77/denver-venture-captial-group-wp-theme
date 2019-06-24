<?php 
    //Lander Section Variables
    $lander_feature_image       =   get_field('lander_feature_image');
    $lander_title               =   get_field('lander_title');
    $lander_description         =   get_field('lander_description');
    $lander_btn_1_text          =   get_field('lander_btn_1_text');
    $lander_btn_1_link          =   get_field('lander_btn_1_link');
    $lander_btn_2_text          =   get_field('lander_btn_2_text');
    $lander_btn_2_link          =   get_field('lander_btn_2_link');
?>

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