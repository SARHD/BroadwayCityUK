<?php
/**
 * Template Name: aboutUs
 */
?>
<?php get_header(); ?>
<!--------------------------------------------Banner Image Section-------------------------------------------------------------->
<?php
$banner_image_url = get_the_post_thumbnail_url(null, 'full');
if (!$banner_image_url) {
    $banner_image_url = get_template_directory_uri() . '/assets/images/About-us-Page-1-modified.webp'; 
}
?>
<div class="banner" style="background-image: url('<?php echo esc_url($banner_image_url); ?>');">
    <div class="w-100">
        <div class="banner-content text-center mw-100">
        <h2 class="banner-heading">ABOUT</h2>
        <h3 class="banner-subheading">BROADWAY CITY GWADAR</h3>
        </div>
    </div>
</div>

<!-------------------------------------------- Main Section --------------------------------------------------------------->

<div class="container-fluid my-5">
        <p class="paragraph-section spancolorchange text-center">
        Broadway city is an icon of modern living located in the heart of Gwadar – Pakistan.
        <br><br>
        We have partnered with the founder’s Milestone Properties and NK Corporations based in Karachi, Pakistan to bring this exceptional opportunity to our investors, overseas Pakistanis, and other foreign nationals in the UK who may want to get involved in this exciting and what promises to be an exceptionally rewarding Journey.
        <br><br>
        Compared with some of the other real estate investment opportunities in Gwadar, Broadway City is by far quite a unique contender. Located in the heart of Gwadar on Central Boulevard, Broadway City is quite literally central to the Gwadar Smart Port City Masterplan (2017 – 2050) due to its strategic city centre location. It’s also within the short-term priority of the government, which means the infrastructure in and around Broadway City is being developed ahead of other middle and longer-term priority zones.
        </p>
</div>

<div class="container-fluid">
    <div class="row">
        <!-- Mission Section -->
        <div class="col-lg-6 col-md-6 col-sm-12 border-gold p-4">
            <div class="row">
                <div class="col-4 text-center text-md-start">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Mission.svg" alt="Mission Icon" class="img100"/>
                </div>
                <div class="col-8 spancolorchange">
                    <h5 class="text-md-start text-center text-30 my-5">
                        <span>OUR</span><br>MISSION
                    </h5>
                </div>
            </div>
            <div class="row">
                <div class="col-4 offset-4 offset-md-0 text-center text-md-start">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bcg-border.svg" alt="Border Icon" class="img100"/>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-12">
                    <h5 class="paragraph-section spancolorchange text-md-start text-center">
                        Our aim is to deliver safe and secure property investments which yield exceptional returns for investors and be the most trusted Gwadar property brand globally.<br><br>We’re committed to building lasting trust-based relationships to foster customer loyalty. We guarantee your satisfaction at every step and value your feedback to maintain world-class standards.
                    </h5>
                </div>
            </div>
        </div>
        
        <!-- Vision Section -->
        <div class="col-lg-6 col-md-6 col-sm-12 border-gold p-4">
            <div class="row">
                <div class="col-4 text-center text-md-start">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Vision.svg" alt="Vision Icon" class="img100"/>
                </div>
                <div class="col-8 spancolorchange">
                    <h5 class="text-md-start text-center text-30 my-5">
                        <span>OUR</span><br>VISION
                    </h5>
                </div>
            </div>
            <div class="row">
                <div class="col-4 offset-4 offset-md-0 text-center text-md-start">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bcg-border.svg" alt="Border Icon" class="img100"/>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-12">
                    <h5 class="paragraph-section spancolorchange text-md-start text-center">
                        Our philosophy has always been to build long term relationships based on trust and confidence so that our customers always return to us.<br><br>We will continue to use our best endeavours to ensure your complete satisfaction at every stage of the process. We also welcome your feedback to help us improve our services to you and deliver truly world class standards.
                    </h5>
                </div>
            </div>
        </div>
    </div>
</div>

<!--------------------------------------------MESSAGE FROM CEO Section --------------------------------------------------------------->

<div class="container-fluid">
    <div class="row py-4">
        <div class="col-12 col-sm-12 col-md-5 col-lg-5 px-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/naveed-ahmed01.webp" alt="Border Icon" class="img100"/>
        </div>
        <div class="col-12 col-sm-12 col-md-7 col-lg-7 spancolorchange px-4 py-5">
             <h5 class="text-md-center text-md-start text-lg-start my-5 text-30 text-white">Message from the <strong>CEO</strong><br><span class="text-20">Mr. Naveed Ahmed</span></h5>
                <h5 class="paragraph-section spancolorchange text-center lh-base fst-italic">
                I extend my gratitude to our respected clients for their unwavering support, which has been instrumental in maintaining our position as Gwadar’s leading society in offering the best location for your future investments. Your trust and loyalty inspires us to continually strive for excellence and deliver unparalleled service. Thank you for being an integral part of our success story.
                </h5>
        </div>
    </div>
</div>

<!-------------------------------------------- 2Image Section --------------------------------------------------------------->

<div class="w-100">
        <div class="banner-content text-center mw-100 spancolorchange">
        <h2 class="banner-heading">MEET OUR <span>TEAM</span></h2>
        </div>
    </div>


<div class="container">
    <div class="row d-flex justify-content-center">
        <!-- Profile Card 1 -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="profile-card position-relative overflow-hidden">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Yasir-1.webp" alt="Yasir" class="w-100 img100"/>
                <div class="overlay position-absolute bottom-0 w-100 text-center p-3">
                    <h5 class="text-white mb-1">Yasar Rafiq</h5>
                    <hr class="divider my-2 mx-auto">
                    <p class="text-white mb-0">Director</p>
                </div>
                <div class="hover-overlay"></div>
            </div>
        </div>
        
        <!-- Profile Card 2 -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="profile-card position-relative overflow-hidden">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/UMAR-819x1024-1.webp" alt="Umar" class="w-100 img100"/>
                <div class="overlay position-absolute bottom-0 w-100 text-center p-3">
                    <h5 class="text-white mb-1">Umar Ahmed</h5>
                    <hr class="divider my-2 mx-auto">
                    <p class="text-white mb-0">Director</p>
                </div>
                <div class="hover-overlay"></div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-aboutus-mobile.webp" alt="Border Icon Mobile"              class="img100 d-md-none">
                 
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-aboutus.webp" alt="Border Icon Desktop" class=" d-none d-md-block">
        </div>
    </div>
</div>


<!-------------------------------------------- Image Slider Section --------------------------------------------------------------->
<?php
get_template_part('imageSlider');
?>

<?php get_footer(); ?>
