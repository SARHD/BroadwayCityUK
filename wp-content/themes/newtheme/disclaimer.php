<?php
/**
 * Template Name: disclaimer
 */
?>
<?php get_header(); ?>
<!--------------------------------------------Banner Image Section-------------------------------------------------------------->
<?php
$banner_image_url = get_the_post_thumbnail_url(null, 'full');
if (!$banner_image_url) {
    $banner_image_url = get_template_directory_uri() . '/assets/images/about-2.webp'; 
}
?>
<div class="banner vh-60 d-flex align-items-end p-4 position-relative">
    <!-- Background Image with Opacity -->
    <div class="position-absolute top-0 start-0 w-100 h-100 opacity-25 z-1" style="background-image: url('<?php echo esc_url($banner_image_url); ?>');"></div>
    
    <div class="container-fluid position-relative z-2">
    <div class="row">
        <!-- Text behind the main content -->
        <div class="col-12 position-absolute top-50 start-50 translate-middle text-center opacity-25">
            <span class="display-1 text-uppercase text-white text-opacity-50">Disclaimer</span>
        </div>

        <!-- Main content -->
        <div class="col-12 text-center position-relative">
            <h2 class="banner-heading" loading="eager loading">Disclaimer</h2>
            <h3 class="banner-subheading">Last Updated: December 24, 2021</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bcg-border.svg" alt="Border Icon" class="img-fluid"/>
        </div>
    </div>
</div>

</div>
    <!---------------------------------------------Accordion Section------------------------------------------------------------------>
    <div class="container-fluid my-5 py-5">
  <div class="accordion accordion-flush" id="accordionExample">
    <div class="accordion-item bg-dark border-gold">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <span class="numaricaccordion">1</span> WEBSITE DISCLAIMER
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        The information provided by Broadway City UK Ltd (“we,” “us”, or “our”) on https://broadwaycity.co.uk (the “Site”) is for general informational purposes only. All information on the Site is provided in good faith, <br>
          however we make no representation or warranty of any kind, express or implied, regarding the accuracy, adequacy, validity, reliability, availability or completeness of any information on the Site. UNDER NO <br>
          CIRCUMSTANCE SHALL WE HAVE ANY LIABILITY TO YOU FOR ANY LOSS OR DAMAGE OF ANY KIND INCURRED AS A RESULT OF THE USE OF THE SITE OR RELIANCE ON ANY INFORMATION PROVIDED ON THE SITE. YOUR USE OF THE SITE AND YOUR RELIANCE ON ANY INFORMATION ON THE SITE IS SOLELY AT YOUR OWN RISK.
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">2</span> EXTERNAL LINKS DISCLAIMER
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        The Site may contain (or you may be sent through the Site) links to other websites or content belonging to or originating from third parties or links to websites and features in banners or other advertising. Such <br> external links are not investigated, monitored, or checked for accuracy, adequacy, validity, reliability, <br> availability or completeness by us. WE DO NOT WARRANT, ENDORSE, GUARANTEE, OR ASSUME RESPONSIBILITY FOR THE ACCURACY OR RELIABILITY OF ANY INFORMATION OFFERED BY <br> THIRD-PARTY WEBSITES LINKED THROUGH THE SITE OR ANY WEBSITE OR FEATURE LINKED IN ANY BANNER OR OTHER ADVERTISING. WE WILL NOT BE A PARTY TO OR IN ANY WAY BE RESPONSIBLE FOR MONITORING ANY TRANSACTION BETWEEN YOU AND THIRD-PARTY <br> PROVIDERS OF PRODUCTS OR SERVICES.
        </div>
      </div>
    </div>
    <div class="accordion-item bg-dark  border-gold mt-2">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed bg-dark text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
        <span class="numaricaccordion">3</span>TESTIMONIALS DISCLAIMER
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body bg-dark text-light border-gold text-13">
        The Site may contain testimonials by users of our products and/or services. These testimonials reflect the real-life experiences and opinions of such users. However, the experiences are personal to those particular users, and may not necessarily be representative of all users of our products and/or services. We do not claim, and you should not assume, that all users will have the same experiences. YOUR INDIVIDUAL <br>
        RESULTS MAY VARY.
        <br><br>
        The testimonials on the Site are submitted in various forms such as text, audio and/or video, and are <br>
        reviewed by us before being posted. They appear on the Site verbatim as given by the users, except for the correction of grammar or typing errors. Some testimonials may have been shortened for the sake of brevity where the full testimonial contained extraneous information not relevant to the general public.
        </div>
      </div>
    </div>
 
  </div>
</div>
<!-------------------------------------------- Image Slider Section --------------------------------------------------------------->
<?php
get_template_part('imageSlider');
?>

<?php get_footer(); ?>
