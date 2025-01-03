<?php
/**
 * Template Name: cashback
 */
?>
<?php get_header(); ?>

<!--------------------------------------------Banner Image Section-------------------------------------------------------------->
<?php
$banner_image_url = get_the_post_thumbnail_url(null, 'full');
if (!$banner_image_url) {
    $banner_image_url = get_template_directory_uri() . '/assets/images/001-modified.webp'; 
}
?>
<div class="banner" style="background-image: url('<?php echo esc_url($banner_image_url); ?>');">
    <div class="container-fluid">
        <div class="row">
            <!-- Left Column -->
            <div class="col-lg-6 col-md-6 col-sm-12 text-start">
                <h3 class="banner-subheading text-white">Halal Payment Plans</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bcg-border.svg" alt="Decorative Border Icon" class="img-fluid"/>
                <h2 class="banner-heading">
                    <span class="gold-text">Upto 50% Cashback</span> on Development Land
                </h2>
                <p class="text-white">
                    Act now and be one of only 100 investors to qualify for this unbeatable offer in Broadway City – Gwadar.
                </p>
                <div class="cta-button">
                    <a href="<?php echo esc_url( home_url( '/cash-back/' ) ); ?>" class="button">Claim Yours Now</a>
                </div>
            </div>
            
            <!-- Right Column -->
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center align-items-center">
                <svg id="waves" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" preserveAspectRatio="xMidYMid meet">
                    <g stroke="rgba(4, 209, 194, 0.5)" stroke-width="10px" fill="transparent">
                        <circle cx="50%" cy="50%" r="10">
                            <animate attributeType="CSS" attributeName="opacity" from="4" to="0" dur="3s" repeatCount="indefinite" />
                            <animate attributeType="CSS" attributeName="r" from="15" to="25" dur="3s" repeatCount="indefinite" />
                        </circle>
                        <circle cx="50%" cy="50%" r="10">
                            <animate attributeType="CSS" attributeName="opacity" from="3" to="0" dur="3s" repeatCount="indefinite" />
                            <animate attributeType="CSS" attributeName="r" from="25" to="35" dur="3s" repeatCount="indefinite" />
                        </circle>
                        <circle cx="50%" cy="50%" r="10">
                            <animate attributeType="CSS" attributeName="opacity" from="2" to="0" dur="3s" repeatCount="indefinite" />
                            <animate attributeType="CSS" attributeName="r" from="35" to="45" dur="3s" repeatCount="indefinite" />
                        </circle>
                    </g>
                </svg>
            </div>
        </div>
    </div>
</div>
<!--------------------------------------------Now is the ideal time------------------------------------------------------->
<div class="container-fluid spancolorchange my-5">
    <h5 class="text-center text-30"><span>Now is the ideal time</span> to invest in Broadway City and capitalise on these amazingly low prices</h5>
    <img class="client-headingdivider" src="<?php echo get_template_directory_uri(); ?>/assets/images/bcg-border.svg" alt="divider"/>
    <h5 class="paragraph-section text-center">
    The following developments are poised to transform Broadway City and Gwadar, significantly enhancing property values. With our unprecedented 50% Cashback offer, you can expect a potential ROI of 3-4 times your net investment
    </h5>
</div>
<!---------------------------------------------------3 Grid Layout Section-------------------------------------------------------------------->
<div class="container-fluid stat-section mt-5">
    <div class="container">
        <div class="row text-center">
            <!-- First Stat Box -->
            <div class="col-md-4 col-sm-12 my-2">
                <div class="p-3 bg222 spancolorchange">
                    <h5 class="text-20" class="text-center">
                        <span class="text-30">2024</span>
                    </h5>
                    <div class="stat-text">Gwadar International Airport</div>
                    <p class="text-white text-13 text-center my-2">South Asia’s largest and Pakistan’s most advanced international airport will commence operations by the end of 2024</p>
                </div>
            </div>
            
            <!-- Second Stat Box -->
            <div class="col-md-4 col-sm-12 my-2">
                <div class="p-3 bg222 spancolorchange">
                    <h5 class="text-20" class="text-center">
                        <span class="text-30">2025</span>
                    </h5>
                    <div class="stat-text">Priority Development Zone</div>
                    <p class="text-white text-13 text-center my-2">Broadway City is situated in Gwadar’s short-term priority development zone, set to be completed by the end of 2025</p>
                </div>
            </div>
            
            <!-- Third Stat Box -->
            <div class="col-md-4 col-sm-12 my-2">
                <div class="p-3 bg222 spancolorchange">
                    <h5 class="text-20" class="text-center">
                        <span class="text-30">2027</span>
                    </h5>
                    <div class="stat-text">Broadway City Infrastructure</div>
                    <p class="text-white text-13 text-center my-2">With development works already underway, Broadway City is projected for completion and handover by the end of 2027</p>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<!---------------------------------------Alternate Section ----------------------------------------------------------------------->
<?php
$default_background_image_url = get_template_directory_uri() . '/assets/images/002.webp';

$custom_background_image_url = ''; 

$background_image_url = !empty($custom_background_image_url) ? $custom_background_image_url : $default_background_image_url;
?>

<div class="background-wrapper py-3" style="background-image: url('<?php echo $background_image_url; ?>'); background-size: cover;">
    <div class="container-fluid">
        <div class="row d-flex align-items-center">
            <!-- Third Column (First on Mobile) -->
            <div class="col-lg-6 col-md-6 col-sm-12 order-1 order-sm-3">
                <h3 class="banner-subheading text-white"><span class="gold-text">World’s Largest</span> Infrastructure Project</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bcg-border.svg" alt="Border Icon" class="img-fluid py-3"/>
                <p class="text-white">$8 trillion Investment by 2049, Belt and Road Initiative (BRI) is revolutionising global connectivity with massive investments in railways, highways, ports, power generation, and telecommunications</p>
                <div class="cta-button w-50">
                    <a href="<?php echo esc_url( home_url( '/cash-back/' ) ); ?>" class="button">Find Out More</a>
                </div>
            </div>

            <!-- First Column (Second on Mobile) -->
            <div class="col-lg-3 col-md-3 col-sm-12 order-2 order-sm-1">
                <div class="py-5 px-3 bg080 m-2">
                    <div class="d-flex justify-content-center"><img class="img50" src="<?php echo get_template_directory_uri(); ?>/assets/images/bri.svg" alt="divider"/></div>
                    <div class="stat-text gold-text">BRI</div>
                    <p class="text-white text-13 text-center my-2">The Belt and Road Initiative (BRI) connects over 140 countries, significantly enhancing global trade routes and economic growth</p>
                </div>
                <div class="py-5 px-3 bg080 m-2">
                    <div class="d-flex justify-content-center"><img class="img50" src="<?php echo get_template_directory_uri(); ?>/assets/images/iCPEC.svg" alt="divider"/></div>
                    <div class="stat-text gold-text">CPEC</div>
                    <p class="text-white text-13 text-center my-2">China Pakistan Economic Corridor (CPEC) is a flagship component of the BRI, making it pivotal to BRI's overall success</p>
                </div>
            </div>

            <!-- Second Column (Third on Mobile) -->
            <div class="col-lg-3 col-md-3 col-sm-12 order-3 order-sm-2">
                <div class="py-5 px-3 bg080 m-2">
                <div class="d-flex justify-content-center"><img class="img50" src="<?php echo get_template_directory_uri(); ?>/assets/images/gwadar-port-icon.svg" alt="divider"/></div>
                    <div class="stat-text gold-text">GWADAR</div>
                    <p class="text-white text-13 text-center my-2">Gwadar is the crown jewel of CPEC, and Pakistan’s first master-planned smart city, tax and weapon-free zone, offering unmatched investment potential</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--------------------------------------------Now is the ideal time------------------------------------------------------->
<div class="container-fluid spancolorchange my-5">
    <h5 class="text-center text-30"><span>Broadway City</span> is underwritten by Gwadar Development Authority (GDA)</h5>
    <img class="client-headingdivider" src="<?php echo get_template_directory_uri(); ?>/assets/images/bcg-border.svg" alt="divider"/>
    <h5 class="paragraph-section text-center">
    Located in Gwadar’s short term priority development zone, Broadway City has planning permission granted under NOC#:47/06/HS/GDA and is part of Gwadar’s Development Control Regulations (DCR)
    </h5>
</div>
<!----------------------------------------- Section with Bootstrap Grid -------------------------------------->
<section class="container-fluid py-2">
    <div class="row g-4 ">
        <div class="col-md-4 nogap">
            <div class="card-custom px-4 borderrigth-card">
            <div class="card-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Strategic-Location.svg" alt="Premium Location Icon" class="mobile-icons-for-grid" />
            </div>
                <h3 class="cardsec-heading">Strategic Location</h3>
                <p class="cardsec-paragraph"><strong>Broadway City – Gwadar</strong> is an icon of modern living, spanning 165 acres of prime real estate. Strategically situated on Central Boulevard, it occupies all four sides of one of Gwadar's largest intersections, placing it at the centre of the Gwadar Smart City Master Plan 2017–2050</p>
            </div>
        </div>
        <div class="col-md-4 nogap">
            <div class="card-custom px-4 borderrigth-card ">
            <div class="card-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Secure-Investment.svg" alt="Premium Location Icon" class="mobile-icons-for-grid" />
            </div>
                <h3 class="cardsec-heading">Secure Investment</h3>
                <p class="cardsec-paragraph"><strong>Broadway City – Gwadar</strong> ensures stability and growth amidst Gwadar's expansion under CPEC. Our UK headquarters in Slough, along with offices in Karachi and Gwadar, combined with Gwadar Development Authority’s support, create a favourable environment for secure and sustainable investment returns</p>
            </div>
        </div>
        <div class="col-md-4 nogap">
            <div class="card-custom px-4">
            <div class="card-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/High-Returns.svg" alt="Premium Location Icon" class="mobile-icons-for-grid" />
            </div>
                <h3 class="cardsec-heading">High Returns</h3>
                <p class="cardsec-paragraph"><strong>Broadway City – Gwadar</strong> offers modern amenities, green spaces, and generous urban planning, elevating value and living standards for thriving residential and commercial communities. With Gwadar's rapid economic development and urbanisation, it promises to provide high returns on investment</p>
            </div>
        </div>
    </div>
</section>
<!---------------------------------------Alternate Section ----------------------------------------------------------------------->
<?php
$default_background_image_url = get_template_directory_uri() . '/assets/images/002.webp';

$custom_background_image_url = ''; 

$background_image_url = !empty($custom_background_image_url) ? $custom_background_image_url : $default_background_image_url;
?>

<div class="background-wrapper py-3" style="background-image: url('<?php echo $background_image_url; ?>'); background-size: cover;">
    <div class="container-fluid">
        <div class="row d-flex align-items-center">
        <div class="col-lg-6 col-md-6 col-sm-12 text-start">
            <h3 class="banner-subheading text-white"><span class="gold-text">World’s Largest</span> Infrastructure Project</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bcg-border.svg" alt="Border Icon" class="img-fluid py-3"/>
            <p class="text-white">$8 trillion Investment by 2049, Belt and Road Initiative (BRI) is revolutionising global connectivity with massive investments in railways, highways, ports, power generation and telecommunications</p>
            <div class="cta-button w-50">
                <a href="<?php echo esc_url( home_url( '/cash-back/' ) ); ?>" class="button">Find Out More</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="py-5 px-3 bg080 m-2">
                <div class="d-flex justify-content-center"><img class="img50" src="<?php echo get_template_directory_uri(); ?>/assets/images/gwadar-port-icon.svg" alt="divider"/></div>
                    <div class="stat-text gold-text">GWADAR</div>
                    <p class="text-white text-13 text-center my-2">Gwadar is the crown jewel of CPEC, and Pakistan’s first master-planned smart city, tax and weapon-free zone, offering unmatched investment potential</p>
                </div>
            </div>
        <div class="col-lg-3 col-md-3 col-sm-12 ">
                <div class="py-5 px-3 bg080 m-2">
                <div class="d-flex justify-content-center"><img class="img50" src="<?php echo get_template_directory_uri(); ?>/assets/images/bri.svg" alt="divider"/></div>
                    <div class="stat-text gold-text">BRI</div>
                    <p class="text-white text-13 text-center my-2">The Belt and Road Initiative (BRI) connects over 140 countries, significantly enhancing global trade routes and economic growth</p>
                </div>
                <div class="py-5 px-3 bg080 m-2">
                <div class="d-flex justify-content-center"><img class="img50" src="<?php echo get_template_directory_uri(); ?>/assets/images/iCPEC.svg" alt="divider"/></div>
                    <div class="stat-text gold-text">CPEC</div>
                    <p class="text-white text-13 text-center my-2">China Pakistan Economic Corridor (CPEC) is a flagship component of the BRI, making it pivotal to BRI's overall success</p>
                </div>
        </div>
    </div>
    </div>
</div>
<!-------------------------------------Act Now Section-------------------------------------------------------->
<div class="colorgreybg py-3">
<div class="container-fluid my-5">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <h5 class="text-start text-white display-6"><span class="gold-text">Act now</span> and claim your 50% Cashback</h5>
            <img class="py-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/bcg-border.svg" alt="divider"/>
                <div class="cta-button w-75">
                <a href="<?php echo esc_url( home_url( '/cash-back/' ) ); ?>" class="button">Claim Yours Now</a>
                </div>
        </div>


        <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="accordion-item bg-dark  border-gold mt-2">
                    <h2 class="accordion-header " id="headingFour">
                    <button class="accordion-button collapsed bg-dark text-white border-0 p-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo"> Future Savings </button></h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body bg-dark text-light border-gold text-13 p-3">
                Receive up to 50% cashback on your plot price, enhancing your financial position as you develop your plot
                </div>
            </div>
            </div>

                <div class="accordion-item bg-dark  border-gold mt-2">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed bg-dark text-white border-0 p-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo"> Value Appreciation </button></h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body bg-dark text-light border-gold text-13 p-3">
                Use the cashback to further invest in your plot to accelerate asset appreciation, ensuring maximum returns
                </div>
            </div>
            </div>

            <div class="accordion-item bg-dark  border-gold mt-2">
                    <h2 class="accordion-header" id="headingtwo">
                    <button class="accordion-button collapsed bg-dark text-white border-0 p-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="false" aria-controls="collapseTwo"> Streamlined Processing </button></h2>
                <div id="collapsetwo" class="accordion-collapse collapse" aria-labelledby="headingtwo" data-bs-parent="#accordionExample">
                <div class="accordion-body bg-dark text-light border-gold text-13 p-3">
                Experience streamlined processing and a hassle-free investment journey with digitised records and a UK head office
                </div>
            </div>
            </div>

        </div>
        </div>
    </div>
</div>
</div>
<!-------------------------------------50% Cashback-------------------------------------------------------->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h5 class="text-center text-white display-6"><span class="gold-text">50% Cashback</span> - Here’s how it works</h5>
            <img class="w-100 object-fit-none" src="<?php echo get_template_directory_uri(); ?>/assets/images/bcg-border.svg" alt="divider"/>
        </div>
        <?php get_template_part('timeline'); ?>
    </div>
</div>
<!-------------------------------------Act Now Section2-------------------------------------------------------->
<div class="colorgreybg py-3">
<div class="container-fluid my-5">
    <div class="row">
        <div class="col-lg-10 col-md-8 col-sm-8">
            <h5 class="text-start text-white display-6"><span class="gold-text">Act now</span> and claim your 50% Cashback</h5>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4">
        <div class="cta-button w-100">
                <a href="<?php echo esc_url( home_url( '/cash-back/' ) ); ?>" class="button">Dont Miss Out</a>
                </div>
        </div>
        </div>
    </div>
</div>
</div>
<!-------------------------------------Tabs Are Section-------------------------------------------------------->
<?php get_template_part('tabscashback'); ?>
<!---------------------------------------------Testimonial Slider Section--------------------------------------------------------->
<?php get_template_part('testimonialSlider'); ?>
<!-----------------------------------------Section Paralexx Area Section------------------------------>  
<?php
$parallax_image_url = get_the_post_thumbnail_url(null, 'full');
if (!$parallax_image_url) {
    $parallax_image_url = get_template_directory_uri() . '/assets/images/004-modified.webp'; 
}
?>
<div class="parallax d-flex justify-content-center align-items-center vh50" style="background-image: url('<?php echo esc_url($parallax_image_url); ?>');">
    <div class="parallax-content text-center">
        <h2 class="paralax-heading"><span class="gold-text">Ready to be </span>a part of Gwadar’s future?</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bcg-border.svg" alt="Border Icon" class="img-fluid py-2"/>
        <br><a href="#your-link" class="main-button paralexx-button">View Payment Plan</a>
    </div>
</div>
<!-------------------------------------------- Image Slider Section --------------------------------------------------------------->
<?php
get_template_part('imageSlider');
?>

<script> var animDoc = document.getElementById("waves"); </script>


<?php get_footer(); ?>