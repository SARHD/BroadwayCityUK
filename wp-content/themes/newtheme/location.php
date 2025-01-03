<?php
/**
 * Template Name: location
 */
?>
<?php get_header(); ?>
<!--------------------------------------------Banner Image Section-------------------------------------------------------------->
<?php
$banner_image_url = get_the_post_thumbnail_url(null, 'full');
if (!$banner_image_url) {
    $banner_image_url = get_template_directory_uri() . '/assets/images/Map-Banner-2-2-modified.webp'; 
}
?>
<div class="banner" style="background-image: url('<?php echo esc_url($banner_image_url); ?>');">
    <div class="container-fluid">
        <div class="banner-content text-start">
        <h2 class="banner-heading">MODERN LIVING REDEFINED </h2>
        <h4 class="banner-subheading">IN THE HEART OF GWADAR</h2>
        </div>
    </div>
</div>
<!--------------------------------------------Content Section-------------------------------------------------------------->
<div class="container-fluid my-5">
        <h5 class="paragraph-section spancolorchange">
        Broadway City is strategically located on all four sides of a six lane intersection of Sarawan Avenue and the Central Boulevard, making it easily accessible to Gwadar port, the new Airport and all major highways which connects to the rest of the country. The new Gwadar International airport is ideally located only 16 kiometers away, providing direct connections to rest of the world from end of 2023.
        </h5>
</div>
<!------------------------------------------2 Column Split Section-------------------------------------------------------------->
<div class="container-fluid py-3">
    <div class="row justify-content-start">
        <div class="col-12 col-sm-6 col-md-6 col-lg-6 my-2 d-flex justify-content-start">
            <div class="feature-block">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" class="feature-icon">
                    <circle cx="12" cy="12" r="10" stroke-width="2" fill="#b69a5d"></circle>
                    <path d="M10 14l-3-3 1.5-1.5L10 11l4-4 1.5 1.5-5 5z" class="icon-path"></path>
                </svg>
                <div class="feature-text-wrapper">
                    <span class="feature-text">DIPLOMATIC ENCLAVE - 1.5 KILOMETER</span>
                    <span class="underline"></span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-6 my-2 d-flex justify-content-start">
            <div class="feature-block">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" class="feature-icon">
                    <circle cx="12" cy="12" r="10" stroke-width="2" fill="#b69a5d"></circle>
                    <path d="M10 14l-3-3 1.5-1.5L10 11l4-4 1.5 1.5-5 5z" fill="black"></path>
                </svg>
                <div class="feature-text-wrapper">
                    <span class="feature-text">BALOCHISTAN SECRETARIAT - 2.5 KILOMETER</span>
                    <span class="underline"></span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-6 my-2 d-flex justify-content-start">
            <div class="feature-block">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" class="feature-icon">
                    <circle cx="12" cy="12" r="10" stroke-width="2" fill="#b69a5d"></circle>
                    <path d="M10 14l-3-3 1.5-1.5L10 11l4-4 1.5 1.5-5 5z" fill="black"></path>
                </svg>
                <div class="feature-text-wrapper">
                    <span class="feature-text">GOLF SPORTS COMPLEX - 3 KILOMETER</span>
                    <span class="underline"></span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-6 my-2 d-flex justify-content-start">
            <div class="feature-block">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" class="feature-icon">
                    <circle cx="12" cy="12" r="10" stroke-width="2" fill="#b69a5d"></circle>
                    <path d="M10 14l-3-3 1.5-1.5L10 11l4-4 1.5 1.5-5 5z" fill="black"></path>
                </svg>
                <div class="feature-text-wrapper">
                    <span class="feature-text">EDUCATION CITY - 4 KILOMETER</span>
                    <span class="underline"></span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-6 my-2 d-flex justify-content-start">
            <div class="feature-block">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" class="feature-icon">
                    <circle cx="12" cy="12" r="10" stroke-width="2" fill="#b69a5d"></circle>
                    <path d="M10 14l-3-3 1.5-1.5L10 11l4-4 1.5 1.5-5 5z" fill="black"></path>
                </svg>
                <div class="feature-text-wrapper">
                    <span class="feature-text">MARINE DRIVE - 6 KILOMETER</span>
                    <span class="underline"></span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-6 my-2 d-flex justify-content-start">
            <div class="feature-block">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" class="feature-icon">
                    <circle cx="12" cy="12" r="10" stroke-width="2" fill="#b69a5d"></circle>
                    <path d="M10 14l-3-3 1.5-1.5L10 11l4-4 1.5 1.5-5 5z" fill="black"></path>
                </svg>
                <div class="feature-text-wrapper">
                    <span class="feature-text">NEW AIRPORT - 16 KILOMETER</span>
                    <span class="underline"></span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-6 my-2 d-flex justify-content-start">
            <div class="feature-block">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" class="feature-icon">
                    <circle cx="12" cy="12" r="10" stroke-width="2" fill="#b69a5d"></circle>
                    <path d="M10 14l-3-3 1.5-1.5L10 11l4-4 1.5 1.5-5 5z" fill="black"></path>
                </svg>
                <div class="feature-text-wrapper">
                    <span class="feature-text">EXISTING AIRPORT - 2 KILOMETER</span>
                    <span class="underline"></span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-6 my-2 d-flex justify-content-start">
            <div class="feature-block">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" class="feature-icon">
                    <circle cx="12" cy="12" r="10" stroke-width="2" fill="#b69a5d"></circle>
                    <path d="M10 14l-3-3 1.5-1.5L10 11l4-4 1.5 1.5-5 5z" fill="black"></path>
                </svg>
                <div class="feature-text-wrapper">
                    <span class="feature-text">TURBAT UNIVERSITY - 7 KILOMETER</span>
                    <span class="underline"></span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-6 my-2 d-flex justify-content-start">
            <div class="feature-block">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" class="feature-icon">
                    <circle cx="12" cy="12" r="10" stroke-width="2" fill="#b69a5d"></circle>
                    <path d="M10 14l-3-3 1.5-1.5L10 11l4-4 1.5 1.5-5 5z" fill="black"></path>
                </svg>
                <div class="feature-text-wrapper">
                    <span class="feature-text">SEA PORT - 23 KILOMETER</span>
                    <span class="underline"></span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-6 my-2 d-flex justify-content-start">
            <div class="feature-block">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" class="feature-icon">
                    <circle cx="12" cy="12" r="10" stroke-width="2" fill="#b69a5d"></circle>
                    <path d="M10 14l-3-3 1.5-1.5L10 11l4-4 1.5 1.5-5 5z" fill="black"></path>
                </svg>
                <div class="feature-text-wrapper">
                    <span class="feature-text">INDUSTRIAL ESTATE - 23 KILOMETER</span>
                    <span class="underline"></span>
                </div>
            </div>
        </div>
    </div>
</div>

<!------------------------------------------Location Section-------------------------------------------------------------->
<div class="py-2 custom-card text-center">
  <h2>LOCATION IN <span> GWADAR</span></h2>
          
  <div class="row gx-0 py-4">
        <!-- Left Image Section -->
        <div class="col-md-6 no-padding d-none d-md-block">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gwadar-night.webp" class="img100" alt="Image for Desktop and Tablet" loading="lazy">
</div>
<div class="col-md-6 no-padding d-block d-md-none">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gwadar-nightMobile.webp" class="img100" alt="Image for Mobile" loading="lazy">
</div>

        
        <!-- Right Map Section -->
        <div class="col-md-6 no-padding">
            <div class="map-responsive">
                <iframe
                     src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3683.0833141760913!2d62.3131935!3d25.2443254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ebf1b28b771df13%3A0x80a5be07af1f447a!2sBroadway%20City%20Gwadar!5e0!3m2!1sen!2s!4v1698852806957!5m2!1sen!2s"
                    width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>

<!------------------------------------------Site Plan Section-------------------------------------------------------------->
<div class="custom-card text-center">
  <h2>SITE <span> PLAN</span></h2>
</div>
<?php
get_template_part('beforeAfter');
?>
<!-------------------------------------------- Split Section --------------------------------------------------------------->
<?php
get_template_part('splitSection');
?>
<!-------------------------------------------- Image Slider Section --------------------------------------------------------------->
<?php
get_template_part('imageSlider');
?>

<?php get_footer(); ?>