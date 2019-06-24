<?php 
    //Services Section Variables
    $services_section_intro     =   get_field('services_section_intro');
    $services_section_title     =   get_field('services_section_title');
?>

<section id='services' class="s-services">

    <div class="row section-header has-bottom-sep" data-aos="fade-up">
        <div class="col-full">
            <h3 class="subhead"><?php echo $services_section_intro; ?></h3>
            <h1 class="display-2"><?php echo $services_section_title; ?></h1>
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