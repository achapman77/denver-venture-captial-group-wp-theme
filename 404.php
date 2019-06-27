<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package dvcg-wp-theme
 */
//Contact Section Variables
$ep_header     			= get_field('ep_header', '13');
$ep_subheader  			= get_field('ep_subheader', '13');

$contact_form_title 	= get_field('contact_form_title', '13');
$address_title      	= get_field('address_title', '13');
$street_address     	= get_field('street_address', '13');
$city               	= get_field('city', '13');
$state              	= get_field('state', '13');
$zipcode            	= get_field('zipcode', '13');
$country            	= get_field('country', '13');
$email_title        	= get_field('email_title', '13');
$email              	= get_field('email', '13');
$phone_title        	= get_field('phone_title', '13');
$phone_number       	= get_field('phone_number', '13');
$message_warning    	= get_field('message_warning', '13');
$message_success    	= get_field('message_success', '13');


//Social Media Variables
$facebook_url       	= get_field('facebook_url', '13');
$facebook_icon      	= get_field('facebook_icon', '13');
$linkedin_url       	= get_field('linkedin_url', '13');
$linkedin_icon      	= get_field('linkedin_icon', '13');
$twitter_url        	= get_field('twitter_url', '13');
$twitter_icon       	= get_field('twitter_icon', '13');
$instagram_url      	= get_field('instagram_url', '13');
$instagram_icon     	= get_field('instagram_icon', '13');

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<section id="contact" class="s-contact">

			<div class="overlay"></div>
			<div class="contact__line"></div>

			<div class="row section-header" data-aos="fade-up">
				<div class="col-full">
					<h1 class="display-2 display-2--light"><?php echo $ep_header; ?></h1>
					<h3 class="subhead"><?php echo $ep_subheader; ?></h3>
				</div>
			</div>

			<div class="row contact-content" data-aos="fade-up">
				
				<div class="contact-primary">

					<h3 class="h6"><?php echo $contact_form_title; ?></h3>
					<?php echo do_shortcode( '[contact-form-7 id="178" title="contactForm"]' ); ?>

					<!-- contact-warning -->
					<div class="message-warning">
						<?php echo $message_warning; ?>
					</div> 
				
					<!-- contact-success -->
					<div class="message-success">
						<?php echo $message_success; ?><br>
					</div>

				</div> <!-- end contact-primary -->

				<div class="contact-secondary">
					<div class="contact-info">

						<h3 class="h6 hide-on-fullwidth">Contact Info</h3>

						<div class="cinfo">
							<h5><?php echo $address_title; ?></h5>
							<p>
								<?php echo $street_address; ?><br>
								<?php echo $city; ?>, <?php echo $state; ?><br>
								<?php echo $zipcode; ?> <?php $country; ?>
							</p>
						</div>

						<div class="cinfo">
							<h5><?php echo $email_title; ?></h5>
							<p>
								<?php echo $email; ?>
							</p>
						</div>

						<div class="cinfo">
							<h5><?php echo $phone_title; ?></h5>
							<p>
								<?php echo $phone_number; ?><br>
							</p>
						</div>

						<ul class="contact-social">
							<?php $loop = new WP_Query( array( 'post_type' => 'social_media', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
							
							<?php while( $loop->have_posts()): $loop->the_post(); ?>
								<li>
									<a href="<?php the_field('social_media_url'); ?>"><?php the_field('social_media_icon'); ?></a>
								</li>
							<?php endwhile; wp_reset_query(); ?>
		
						</ul> <!-- end contact-social -->

					</div> <!-- end contact-info -->
				</div> <!-- end contact-secondary -->

			</div> <!-- end contact-content -->

			</section> <!-- end s-contact -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
