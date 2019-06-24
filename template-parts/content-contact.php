<?php 
//Contact Section Variables
$contact_subheader  = get_field('contact_subheader');
$contact_header     = get_field('contact_header');
$contact_form_title = get_field('contact_form_title');
$address_title      = get_field('address_title');
$street_address     = get_field('street_address');
$city               = get_field('city');
$state              = get_field('state');
$zipcode            = get_field('zipcode');
$country            = get_field('country');
$email_title        = get_field('email_title');
$email              = get_field('email');
$phone_title        = get_field('phone_title');
$phone_number       = get_field('phone_number');
$message_warning    = get_field('message_warning');
$message_success    = get_field('message_success');


//Social Media Variables
$facebook_url       = get_field('facebook_url');
$facebook_icon      = get_field('facebook_icon');
$linkedin_url       = get_field('linkedin_url');
$linkedin_icon      = get_field('linkedin_icon');
$twitter_url        = get_field('twitter_url');
$twitter_icon       = get_field('twitter_icon');
$instagram_url      = get_field('instagram_url');
$instagram_icon     = get_field('instagram_icon');
?>

<section id="contact" class="s-contact">

    <div class="overlay"></div>
    <div class="contact__line"></div>

    <div class="row section-header" data-aos="fade-up">
        <div class="col-full">
            <h3 class="subhead"><?php echo $contact_subheader; ?></h3>
            <h1 class="display-2 display-2--light"><?php echo $contact_header; ?></h1>
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
                    <?php if( !empty($facebook_url) ): ?>
                        <li>
                            <a href="<?php echo $facebook_url; ?>"><?php echo $facebook_icon; ?></a>
                        </li>
                    <?php endif; ?>
                    <?php if( !empty($linkedin_url) ): ?>
                        <li>
                            <a href="<?php echo $linkedin_url; ?>"><?php echo $linkedin_icon; ?></a>
                        </li>
                    <?php endif; ?>
                    <?php if( !empty($twitter_url) ): ?>
                        <li>
                            <a href="<?php echo $twitter_url; ?>"><?php echo $twitter_icon; ?></a>
                        </li>
                    <?php endif; ?>
                    <?php if( !empty($instagram_url) ): ?>
                        <li>
                            <a href="<?php echo $instagram_url; ?>"><?php echo $instagram_icon; ?></a>
                        </li>
                    <?php endif; ?>
                </ul> <!-- end contact-social -->

            </div> <!-- end contact-info -->
        </div> <!-- end contact-secondary -->

    </div> <!-- end contact-content -->

</section> <!-- end s-contact -->