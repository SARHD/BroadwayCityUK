<?php
/**
 * Template Name: amenities
 */
?>
<?php get_header(); ?>
<!--------------------------------------------Banner Image Section-------------------------------------------------------------->
<?php
$banner_image_url = get_the_post_thumbnail_url(null, 'full');
if (!$banner_image_url) {
    $banner_image_url = get_template_directory_uri() . '/assets/images/banner-2new.webp'; 
}
?>
<div class="banner" style="background-image: url('<?php echo esc_url($banner_image_url); ?>');" loading="lazy">
    <div class="container-fluid" loading="eager">
        <div class="banner-content text-start">
        <h2 class="banner-heading">MODERN LIVING REDEFINED </h2>
        <h3 class="banner-subheading">IN THE HEART OF GWADAR</h3>
        </div>
    </div>
</div>
<!--------------------------------------------Content Section-------------------------------------------------------------->
<div class="container-fluid mt-5">
        <h5 class="paragraph-section spancolorchange">
        Broadway City has been cleverly planned on smart concepts, providing a great mix of residential, leisure, recreational, and commercial facilities to reduce the environmental impact of travel. It has also been generously designed leaving over 52% of the total land for recreational facilities, open spaces, parks, roads, and avenues. All the amenities and facilities needed for a modern lifestyle are either within Broadway City or striking distance and Broadway City is set to become one of the most desirable residential, commercial, and lifestyle addresses in Gwadar.
        <br><br>
        All the amenities and facilities needed for a modern lifestyle are either within Broadway City or striking distance and Broadway City is set to become one of the most desirable residential, commercial, and lifestyle addresses in Gwadar.
        </h5>
</div>

<!-----------------------------------------------8 Grid Layout Section------------------------------------------------------    ---->
<div class="container-fluid stat-section mt-5">
    
        <div class="row text-center my-4">
            <div class="col-md-3 col-sm-12">
                <div class="stat-box stat-box-h150 spancolorchange">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1svgimg.svg" alt="Population Icon" class="mt-n6 imageicon" loading="lazy"/>
                    <h5 class="text-18" class="text-center"> Parks & Play Ground </h5>
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="stat-box stat-box-h150 spancolorchange">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2svgimg.svg" alt="World Population Icon" class="mt-n6 imageicon" loading="lazy"/>
                    <h5 class="text-18" class="text-center">Gated & 24 hr CCTV</h5>
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="stat-box stat-box-h150 spancolorchange">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/3svgimg.svg" alt="GDP Icon" class="mt-n6 imageicon" loading="lazy"/>
                    <h5 class="text-18" class="text-center">School</h5>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-12">
                <div class="stat-box stat-box-h150 spancolorchange">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/4svgimg.svg" alt="GDP Icon" class="mt-n6 imageicon" loading="lazy"/>
                    <h5 class="text-18" class="text-center">Clinic and Hospital</h5>
                </div>
            </div>
         
        </div>
<br>
        <div class="row text-center my-4">
            
            <div class="col-md-3 col-sm-12">
                <div class="stat-box stat-box-h150 spancolorchange">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/5svgimg.svg" alt="Population Icon" class="mt-n6 imageicon" loading="lazy"/>
                    <h5 class="text-18" class="text-center"> Plantations & Green Belts</h5>
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="stat-box stat-box-h150 spancolorchange">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/6svgimg.svg" alt="Population Icon" class="mt-n6 imageicon" loading="lazy"/>
                    <h5 class="text-18" class="text-center"> Shopping Areas</h5>
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="stat-box stat-box-h150 spancolorchange">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/7svgimg.svg" alt="Population Icon" class="mt-n6 imageicon" loading="lazy"/>
                    <h5 class="text-18" class="text-center"> Mosque</h5>
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="stat-box stat-box-h150 spancolorchange">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/8svgimg.svg" alt="Population Icon" class="mt-n6 imageicon" loading="lazy"/>
                    <h5 class="text-18" class="text-center"> Community Club</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<!------------------------------------------3 Column Split Section-------------------------------------------------------------->
<div class="container-fluid py-5">
    <div class="row justify-content-start">
        <div class="col-6 col-md-4 col-lg-4 my-2 d-flex justify-content-start">
            <div class="feature-block">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" class="feature-icon">
                    <circle cx="12" cy="12" r="10" stroke-width="2" fill="#b69a5d"></circle>
                    <path d="M10 14l-3-3 1.5-1.5L10 11l4-4 1.5 1.5-5 5z" class="icon-path"></path>
                </svg>
                <div class="feature-text-wrapper">
                    <span class="feature-text">Artificial Lake</span>
                    <span class="underline"></span>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-4 my-2 d-flex justify-content-start">
            <div class="feature-block">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" class="feature-icon">
                    <circle cx="12" cy="12" r="10" stroke-width="2" fill="#b69a5d"></circle>
                    <path d="M10 14l-3-3 1.5-1.5L10 11l4-4 1.5 1.5-5 5z" fill="black"></path>
                </svg>
                <div class="feature-text-wrapper">
                    <span class="feature-text">Swimming Pool</span>
                    <span class="underline"></span>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-4 my-2 d-flex justify-content-start">
            <div class="feature-block">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" class="feature-icon">
                    <circle cx="12" cy="12" r="10" stroke-width="2" fill="#b69a5d"></circle>
                    <path d="M10 14l-3-3 1.5-1.5L10 11l4-4 1.5 1.5-5 5z" fill="black"></path>
                </svg>
                <div class="feature-text-wrapper">
                    <span class="feature-text">Only 48% buildup allocation</span>
                    <span class="underline"></span>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-4 my-2 d-flex justify-content-start">
            <div class="feature-block">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" class="feature-icon">
                    <circle cx="12" cy="12" r="10" stroke-width="2" fill="#b69a5d"></circle>
                    <path d="M10 14l-3-3 1.5-1.5L10 11l4-4 1.5 1.5-5 5z" fill="black"></path>
                </svg>
                <div class="feature-text-wrapper">
                    <span class="feature-text">Sewerage and electricity</span>
                    <span class="underline"></span>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-4 my-2 d-flex justify-content-start">
            <div class="feature-block">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" class="feature-icon">
                    <circle cx="12" cy="12" r="10" stroke-width="2" fill="#b69a5d"></circle>
                    <path d="M10 14l-3-3 1.5-1.5L10 11l4-4 1.5 1.5-5 5z" fill="black"></path>
                </svg>
                <div class="feature-text-wrapper">
                    <span class="feature-text">Quality street lighting</span>
                    <span class="underline"></span>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-4 my-2 d-flex justify-content-start">
            <div class="feature-block">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" class="feature-icon">
                    <circle cx="12" cy="12" r="10" stroke-width="2" fill="#b69a5d"></circle>
                    <path d="M10 14l-3-3 1.5-1.5L10 11l4-4 1.5 1.5-5 5z" fill="black"></path>
                </svg>
                <div class="feature-text-wrapper">
                    <span class="feature-text">Open spacious network of roads</span>
                    <span class="underline"></span>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-4 my-2 d-flex justify-content-start">
            <div class="feature-block">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" class="feature-icon">
                    <circle cx="12" cy="12" r="10" stroke-width="2" fill="#b69a5d"></circle>
                    <path d="M10 14l-3-3 1.5-1.5L10 11l4-4 1.5 1.5-5 5z" fill="black"></path>
                </svg>
                <div class="feature-text-wrapper">
                    <span class="feature-text">Wide footpaths</span>
                    <span class="underline"></span>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-4 my-2 d-flex justify-content-start">
            <div class="feature-block">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" class="feature-icon">
                    <circle cx="12" cy="12" r="10" stroke-width="2" fill="#b69a5d"></circle>
                    <path d="M10 14l-3-3 1.5-1.5L10 11l4-4 1.5 1.5-5 5z" fill="black"></path>
                </svg>
                <div class="feature-text-wrapper">
                    <span class="feature-text">Quality telecom infrastructure</span>
                    <span class="underline"></span>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-4 my-2 d-flex justify-content-start">
            <div class="feature-block">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" class="feature-icon">
                    <circle cx="12" cy="12" r="10" stroke-width="2" fill="#b69a5d"></circle>
                    <path d="M10 14l-3-3 1.5-1.5L10 11l4-4 1.5 1.5-5 5z" fill="black"></path>
                </svg>
                <div class="feature-text-wrapper">
                    <span class="feature-text">Open car parking spaces</span>
                    <span class="underline"></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-------------------------------------------- Split Section --------------------------------------------------------------->
<?php
get_template_part('splitSection');
?>
<!-------------------------------------------- Image Slider Section --------------------------------------------------------------->
<?php
get_template_part('imageSlider');
?>

<?php get_footer(); ?>