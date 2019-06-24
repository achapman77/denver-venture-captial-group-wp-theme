<?php 
    //Clients Section Variables
    $clients_section_intro      =   get_field('clients_section_intro');
    $clients_section_title      =   get_field('clients_section_title');
?>

<section id="clients" class="s-clients">

    <div class="row section-header" data-aos="fade-up">
        <div class="col-full">
            <h3 class="subhead"><?php echo $clients_section_intro; ?></h3>
            <h1 class="display-2"><?php echo $clients_section_title; ?></h1>
        </div>
    </div> <!-- end section-header -->

    <div class="row clients-outer" data-aos="fade-up">
        <div class="col-full">
            <div class="clients">

                <?php $loop = new WP_Query( array( 'post_type' => 'client_logos', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
                
                <?php while( $loop->have_posts()): $loop->the_post(); ?>
                    <a href="<?php the_field('client_website'); ?>" title="<?php the_title(); ?>" class="clients__slide">
                        <img src="<?php the_field('client_logo'); ?>" />
                    </a>
                <?php endwhile; wp_reset_query(); ?>
                    
            </div> <!-- end clients -->
        </div> <!-- end col-full -->
    </div> <!-- end clients-outer -->

    <div class="row clients-testimonials" data-aos="fade-up">
        <div class="col-full">
            <div class="testimonials">
                <?php $loop = new WP_Query( array( 'post_type' => 'client_testimonials', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
                
                <?php while( $loop->have_posts()): $loop->the_post(); ?>
                    <div class="testimonials__slide">

                        <p><?php the_field('testimonial_body'); ?></p>

                        <img src="<?php the_field('testimonial_avatar'); ?>" alt="Image of <?php the_field('testimonial_from'); ?>" class="testimonials__avatar">
                        <div class="testimonials__info">
                            <span class="testimonials__name"><?php the_field('testimonial_from'); ?></span> 
                            <span class="testimonials__pos"><?php the_field('testimonial_work_title'); ?>, <?php the_field('testimonial_company'); ?></span>
                        </div>

                    </div>
                <?php endwhile; wp_reset_query(); ?>

            </div><!-- end testimonials -->
            
        </div> <!-- end col-full -->
    </div> <!-- end client-testimonials -->

</section> <!-- end s-clients -->