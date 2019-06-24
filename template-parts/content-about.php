<?php 
    //About Section Variables
    $about_section_intro        =   get_field('about_section_intro');
    $about_section_title        =   get_field('about_section_title');
    $about_section_description  =   get_field('about_section_description');
?>

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