<?php 
    //Projects Section Variables
    $projects_section_title     =   get_field('projects_section_title');
    $projects_section_intro     =   get_field('projects_section_intro');
?>

<section id='projects' class="s-works">

    <div class="intro-wrap">
            
        <div class="row section-header has-bottom-sep light-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead"><?php echo $projects_section_intro; ?></h3>
                <h1 class="display-2 display-2--light"><?php echo $projects_section_title; ?></h1>
            </div>
        </div> <!-- end section-header -->

    </div> <!-- end intro-wrap -->

    <div class="row works-content">
        <div class="col-full masonry-wrap">
            <div class="masonry">
                <?php $loop = new WP_Query( array( 'post_type' => 'projects', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
                
                <?php while( $loop->have_posts()): $loop->the_post(); ?>
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="<?php the_field("project_image_wide"); ?>" class="thumb-link" title="<?php the_title(); ?>" data-size="1050x700">
                                    <img src="<?php the_field("project_image_medium_square"); ?>" 
                                        srcset="<?php the_field("project_image_medium_square"); ?> 1x, 
                                        <?php the_field("project_image_large_square"); ?> 2x" alt="<?php the_title(); ?>">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    <?php the_title(); ?>
                                </h3>
                                <p class="item-folio__cat">
                                    <?php the_field('project_category'); ?>
                                </p>
                            </div>
    
                            <a href="<?php the_field('project_link'); ?>" class="item-folio__project-link" title="<?php the_title(); ?> link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <?php the_field('project_description'); ?>
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->
                <?php endwhile; wp_reset_query();?>

            </div> <!-- end masonry -->
        </div> <!-- end col-full -->
    </div> <!-- end works-content -->

</section> <!-- end s-works -->