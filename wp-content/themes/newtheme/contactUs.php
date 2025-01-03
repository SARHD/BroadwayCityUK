<?php
/**
 * Template Name: contactUs
 */
?>
<?php get_header(); ?>
<!--------------------------------------------Banner Image Section-------------------------------------------------------------->
<?php
$banner_image_url = get_the_post_thumbnail_url(null, 'full');
if (!$banner_image_url) {
    $banner_image_url = get_template_directory_uri() . '/assets/images/contact-us-banner.webp'; 
}
?>
<div class="banner" style="background-image: url('<?php echo esc_url($banner_image_url); ?>');">
    <div class="container-fluid">
        <div class="banner-content text-start">
        <h2 class="banner-heading">Contact us</h2>
        </div>
    </div>
</div>

<!------------------------------------------Sideby Section-------------------------------------------------------------->
  <div class="row py-5 my-5">
        <!-- Left Image Section -->
        <div class="col-md-6 no-padding d-flex justify-content-md-end justify-content-center">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Contact-us-bottom-image.webp" class="img80" alt="Image for Desktop and Tablet" loading="lazy">
    </div>

        <div class="py-2 px-5 col-md-6 no-padding">
        <div class="custom-card text-start">
            <h2>CONTACT <span>DETAIL</span></h2><br>
            <h4><span class="gold-text">CALL</span></h4>
            <div><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#c6a444" class="bi bi-telephone-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
            </svg> &nbsp <a class="linktext" href="tel:+443334440222">0333 444 0222</a></div>
            <br>
            <h4><span class="gold-text">EMAIL</span></h4>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#c6a444" class="bi bi-envelope-fill" viewBox="0 0 16 16">
            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
            </svg> &nbsp <a class="linktext" href="mailto:info@broadwaycity.co.uk">info@broadwaycity.co.uk</a></div>
            <br>
            <h4><span class="gold-text">ADDRESS</span></h4>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#c6a444" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
            </svg> &nbsp <a class="linktext" href="#">The Future Works Building 2 - Brunel Way, Slough SL1 1FQ</a></div>
            
        </div>
    </div>
</div>

<!------------------------------------------Location Section-------------------------------------------------------------->
<div class="py-2 custom-card text-center">  
        <div class="no-padding">
            <div class="map-responsive">
                <iframe
                     src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3683.0833141760913!2d62.3131935!3d25.2443254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ebf1b28b771df13%3A0x80a5be07af1f447a!2sBroadway%20City%20Gwadar!5e0!3m2!1sen!2s!4v1698852806957!5m2!1sen!2s"
                    width="100%" heigh="100%" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" class="h-75"></iframe>
            </div>
        </div>
    </div>
</div>
<!---------------------------------------------Testimonial Slider Section--------------------------------------------------------->
<?php get_template_part('testimonialSlider'); ?>
<!-------------------------------------------- Image Slider Section --------------------------------------------------------------->
<?php get_template_part('imageSlider'); ?>

<?php get_footer(); ?>
