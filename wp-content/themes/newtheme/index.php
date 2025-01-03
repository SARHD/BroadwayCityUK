<?php get_header(); ?>
<!--------------------------------------------Banner Custom Slider------------------------------------->
<?php get_template_part('bannerHomeSlider'); ?>
<!--------------------------------------------Section For For Two Alternate Section------------------------------------->
<div class="section-wrapper py-4">
    <div class="container-fluid">
        <!-- First Row -->
        <div class="row borderstyle-gold align-items-center mb-4">
            <div class="col-lg-7 col-md-6 p-3">
                <div class="custom-card text-start">
                    <h2>The Crown Jewel <span>Gwadar</span></h2>
                    <p>Gwadar serves as the focal point of the China-Pakistan Economic Corridor (CPEC). Gwadar city's strategic location along the Arabian Sea, natural scenic beauty, deep natural water port, and Pakistan and China's commitment to transforming it into a trade hub through investing billions of dollars. Rapid infrastructure development and a burgeoning economy make it a key area to invest in plots that promise a thriving future.</p>
                    <a href="#" class="main-button">Read More</a>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 nopadding">
                <!-- Desktop Image -->
                <img class=" image-side d-none d-lg-block" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/waterdiiging.webp' ); ?>" alt="Gwadar Image Desktop" loading="lazy">
                <!-- Tablet Image -->
                <img class=" image-side d-none d-md-block d-lg-none" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/waterdiiging.webp' ); ?>" alt="Gwadar Image Tablet" loading="lazy">
                <!-- Mobile Image -->
                <img class=" image-side d-block d-md-none" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mobilewaterdiiging.webp' ); ?>" alt="Gwadar Image Mobile" loading="lazy">
            </div>
        </div>

        <!-- Second Row -->
        <div class="row borderstyle-gold align-items-center">
            <div class="col-lg-7 col-md-6 order-md-2 order-lg-2 p-3">
                <div class="custom-card text-start">
                    <h2>Broadway <span>City</span></h2>
                    <p>An icon of modern living in the heart of Gwadar. Prominently located on Gwadar’s Central Boulevard, Broadway City is quite literally central to the Gwadar Smart Port City Master Plan (2017 – 2050). Thoughtfully planned with a smart mix of residential, commercial, community, and recreational spaces.</p>
                    <a href="#" class="main-button">Read More</a>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 order-md-1 order-lg-1 nopadding">
                <!-- Desktop Image -->
                <img class=" image-side d-none d-lg-block" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/cityview.webp' ); ?>" alt="Broadway City Image Desktop" loading="lazy">
                <!-- Tablet Image -->
                <img class=" image-side d-none d-md-block d-lg-none" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/cityview.webp' ); ?>" alt="Broadway City Image Tablet" loading="lazy">
                <!-- Mobile Image -->
                <img class=" image-side d-block d-md-none" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mobilecityview.webp' ); ?>" alt="Broadway City Image Mobile" loading="lazy">
            </div>
        </div>
    </div>
</div>


<!-----------------------------------------Section Paralexx Area Section------------------------------>  
<?php
$parallax_image_url = get_the_post_thumbnail_url(null, 'full');
if (!$parallax_image_url) {
    $parallax_image_url = get_template_directory_uri() . '/assets/images/Homepage-paralexxBanner.webp'; 
}
?>
<div class="parallax d-flex justify-content-center align-items-center" style="background-image: url('<?php echo esc_url($parallax_image_url); ?>');">
    <div class="parallax-content text-center">
        <h2 class="paralax-heading">INVEST FROM AS LITTLE AS £330 P/M</h2>
        <a href="#your-link" class="main-button paralexx-button">View Payment Plan</a>
    </div>
</div>
<!----------------------------------------- Section with Bootstrap Grid -------------------------------------->
<section class="container-fluid py-5">
    <div class="row g-4 borderbottom-card">
        <div class="col-md-4 nogap">
            <div class="card-custom borderrigth-card">
            <div class="card-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/premium-location.svg" alt="Premium Location Icon" class=" mobile-icons-for-grid" loading="lazy"/>
            </div>
                <h3 class="cardsec-heading">Premium Location</h3>
                <p class="cardsec-paragraph">Broadway City is prominently located on all four sides of the six lane intersection of Sarawan Avenue and Central Boulevard.</p>
            </div>
        </div>
        <div class="col-md-4 nogap">
            <div class="card-custom borderrigth-card ">
            <div class="card-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/165-acres.svg" alt="Premium Location Icon" class=" mobile-icons-for-grid" loading="lazy"/>
            </div>
                <h3 class="cardsec-heading">165 Acres</h3>
                <p class="cardsec-paragraph">Generously designed with only 48% of land for development, leaving vast coverage of open spaces, parks, and roads.</p>
            </div>
        </div>
        <div class="col-md-4 nogap">
            <div class="card-custom ">
            <div class="card-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1774-plots.svg" alt="Premium Location Icon" class=" mobile-icons-for-grid" loading="lazy" />
            </div>
                <h3 class="cardsec-heading">1774 Plots</h3>
                <p class="cardsec-paragraph">Development plots of various sizes and categories within GDA's short-term development priority zone.</p>
            </div>
        </div>
    </div>
    <div class="row g-4">
        <div class="col-md-4 nogap">
            <div class="card-custom borderrigth-card">
            <div class="card-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/central-location.svg" alt="Premium Location Icon" class=" mobile-icons-for-grid" loading="lazy"/>
            </div>
                <h3 class="cardsec-heading">Central Location</h3>
                <p class="cardsec-paragraph">Excellent regional, national, and international connectivity.</p>
            </div>
        </div>
        <div class="col-md-4 nogap">
            <div class="card-custom borderrigth-card">
            <div class="card-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/short-term-priority.svg" alt="Premium Location Icon" class=" mobile-icons-for-grid" loading="lazy" />
            </div>
                <h3 class="cardsec-heading">Short-Term Priority</h3>
                <p class="cardsec-paragraph">Within GDA's short-term priority zone for development.</p>
            </div>
        </div>
        <div class="col-md-4 nogap">
            <div class="card-custom">
            <div class="card-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/early-completion.svg" alt="Premium Location Icon" class=" mobile-icons-for-grid" loading="lazy"/>
            </div> 
                <h3 class="cardsec-heading">Early Completion</h3>
                <p class="cardsec-paragraph">The completion and handover are scheduled for July 2024.</p>
            </div>
        </div>
    </div>
</section>

<!------------------------------------------ Section Card Slider --------------------------------------->
<?php get_template_part('cardSlider'); ?>
<!---------------------------------------------Testimonial Slider Section--------------------------------------------------------->
<?php get_template_part('testimonialSlider'); ?>
<!-------------------------------------------- Image Slider Section --------------------------------------------------------------->
<?php get_template_part('imageSlider'); ?>


<?php get_footer(); ?>