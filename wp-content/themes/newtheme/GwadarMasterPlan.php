<?php
/**
 * Template Name: Gwader
 */
?>
<?php get_header(); ?>

<!--------------------------------------------Banner Image Section-------------------------------------------------------------->
<?php
$banner_image_url = get_the_post_thumbnail_url(null, 'full');
if (!$banner_image_url) {
    $banner_image_url = get_template_directory_uri() . '/assets/images/Master-plan-scaled.webp'; 
}
?>
<div class="banner" style="background-image: url('<?php echo esc_url($banner_image_url); ?>');"></div>

<!--------------------------------------------Gwadar Master Plan Section-------------------------------------------------------------->
<div class="container-fluid my-5 ">
        <h5 class="paragraph-section"><div class="spancolorchange">
            <p><span >Gwadar Master Plan</span>
            is gaining momentum through a range of high-quality development initiatives spanning 13 key areas. The objective is to transform the former fishing town into a modern city, focusing on activities like upgrading the central business district, rejuvenating old towns, redesigning roads, establishing parks, promoting sustainable growth, creating ecological corridors, identifying tourism spots, digitizing processes, and fostering a skill-based economy. The aim is to establish a robust foundation for social and civic amenities, drive innovative business opportunities, and provide cutting-edge health and educational facilities.</p>
        </h5>
</div></div>

<!--------------------------------------------Gwadar Master Plan Split Section-------------------------------------------------------------->

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 mb-5">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gmasterplan-1.webp" alt="Gwadar Master Plan" class=" img100" />
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 text-light my-5">
            <div class="row mb-2 GMPSS">
                <div class="col-12 my-2 my-md-0 text-center text-ms-start text-lg-start col-md-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/breifcase.svg" alt="Gwadar Master Plan" class="svg-img" />
                </div>
                <div class="col-12 my-2 my-md-0 text-center text-ms-start text-lg-start col-md-5">
                    <p> Diplomatic Enclave </p>
                    <span class="float-md-right">2KM</span>
                    <hr class="footer-hr">
                </div>
                <div class="col-12 my-2 my-md-0 text-center text-ms-start text-lg-start col-md-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/economybooter.svg" alt="Gwadar Master Plan" class="svg-img" />
                </div>
                <div class="col-12 my-2 my-md-0 text-center text-ms-start text-lg-start col-md-5">
                    <p> $30 Billion </p>
                    <span class="float-md-right">Economy</span>
                    <hr class="footer-hr">
                </div>
            </div>

            <div class="row mb-2 GMPSS">
                <div class="col-12 my-2 my-md-0 text-center text-ms-start text-lg-start col-md-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/golf.svg" alt="Gwadar Master Plan" class="svg-img" />
                </div>
                <div class="col-12 my-2 my-md-0 text-center text-ms-start text-lg-start col-md-5">
                    <p> New Secretariat & Golf </p>
                    <span class="float-md-right">3KM</span>
                    <hr class="footer-hr">
                </div>
                <div class="col-12 my-2 my-md-0 text-center text-ms-start text-lg-start col-md-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/couple.svg" alt="Gwadar Master Plan" class="svg-img" />
                </div>
                <div class="col-12 my-2 my-md-0 text-center text-ms-start text-lg-start col-md-5">
                    <p> 2 Million </p>
                    <span class="float-md-right">Population</span>
                    <hr class="footer-hr">
                </div>
            </div>

            <div class="row mb-2 GMPSS">
                <div class="col-12 my-2 my-md-0 text-center text-ms-start text-lg-start col-md-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/graduate.svg" alt="Gwadar Master Plan" class="svg-img" />
                </div>
                <div class="col-12 my-2 my-md-0 text-center text-ms-start text-lg-start col-md-5">
                    <p> Education City </p>
                    <span class="float-md-right">4KM</span>
                    <hr class="footer-hr">
                </div>
                <div class="col-12 my-2 my-md-0 text-center text-ms-start text-lg-start col-md-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/jobs.svg" alt="Gwadar Master Plan" class="svg-img" />
                </div>
                <div class="col-12 my-2 my-md-0 text-center text-ms-start text-lg-start col-md-5">
                    <p> 1.2 Million </p>
                    <span class="float-md-right">Jobs Created</span>
                    <hr class="footer-hr">
                </div>
            </div>

            <div class="row mb-2 GMPSS">
                <div class="col-12 my-2 my-md-0 text-center text-ms-start text-lg-start col-md-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/car.svg" alt="Gwadar Master Plan" class="svg-img" />
                </div>
                <div class="col-12 my-2 my-md-0 text-center text-ms-start text-lg-start col-md-5">
                    <p> Marina Drive </p>
                    <span class="float-md-right">6KM</span>
                    <hr class="footer-hr">
                </div>
                <div class="col-12 my-2 my-md-0 text-center text-ms-start text-lg-start col-md-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/percapita.svg" alt="Gwadar Master Plan" class="svg-img" />
                </div>
                <div class="col-12 my-2 my-md-0 text-center text-ms-start text-lg-start col-md-5">
                    <p> Per Capital GDP 1000% </p>
                    <span class="float-md-right">Of Pakistan</span>
                    <hr class="footer-hr">
                </div>
            </div>

            <div class="row mb-2 GMPSS">
                <div class="col-12 my-2 my-md-0 text-center text-ms-start text-lg-start col-md-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aeroplane.svg" alt="Gwadar Master Plan" class="svg-img" />
                </div>
                <div class="col-12 my-2 my-md-0 text-center text-ms-start text-lg-start col-md-5">
                    <p> New Intl Airport </p>
                    <span class="float-md-right">6KM</span>
                    <hr class="footer-hr">
                </div>
                <div class="col-12 my-2 my-md-0 text-center text-ms-start text-lg-start col-md-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/security.svg" alt="Gwadar Master Plan" class="svg-img" />
                </div>
                <div class="col-12 my-2 my-md-0 text-center text-ms-start text-lg-start col-md-5">
                    <p> First Weapons & Tax-Free </p>
                    <span class="float-md-right">City</span>
                    <hr class="footer-hr">
                </div>
            </div>

            <div class="row mb-2 GMPSS">
                <div class="col-12 my-2 my-md-0 text-center text-ms-start text-lg-start col-md-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seaport.svg" alt="Gwadar Master Plan" class="svg-img" />
                </div>
                <div class="col-12 my-2 my-md-0 text-center text-ms-start text-lg-start col-md-5">
                    <p> Seaport & Industrial </p>
                    <span class="float-md-right">23 KM</span>
                    <hr class="footer-hr">
                </div>
                <div class="col-12 my-2 my-md-0 text-center text-ms-start text-lg-start col-md-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/houses.svg" alt="Gwadar Master Plan" class="svg-img" />
                </div>
                <div class="col-12 my-2 my-md-0 text-center text-ms-start text-lg-start col-md-5">
                    <p> 250,000 </p>
                    <span class="float-md-right">Homes Required</span>
                    <hr class="footer-hr">
                </div>
            </div>
        </div>
    </div>
</div>



<!--------------------------------------------FlipBox Section-------------------------------------------------------------->
<div class="container-fluid"><div class="spancolorchange">
    <h5 class="text-center my-3 text-30"><span>SMART CITY</span> DEVELOPMENTS</h5>
</div></div>

<div class="container-fluid">
  <div class="row flip-boxes">
    <div class="col-lg-4 col-md-4 col-sm-4 flip-box">
      <div class="front" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/Pak-China-Friendship-Hospital-1.webp);">
        <div class="content text-center">
        Pak-China Friendship Hospital<br>
        </div>
      </div>
      <div class="back">
        <div class="content">
        <span>Pak-China Friendship Hospital</span>
        $30.5 Million USD State of the Art hospital inaugurated.
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 flip-box">
      <div class="front" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/Tax-Free-Zone.webp);">
      <div class="content text-center">
      Tax- Free Zone
        </div>
      </div>
      <div class="back">
        <div class="content">
        <span >Tax- Free Zone</span>
        To promote economic activity.
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 flip-box">
      <div class="front" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/CBD.webp);">
      <div class="content text-center">
      Central Business District (CBD)<br>
        </div>
      </div>
      <div class="back">
        <div class="content">
        <span>Central Business District (CBD)</span>
        CBD initiative has been approved to transform the city into a modern and sustainable urban center, planned over 2500 acres of land.
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 flip-box">
      <div class="front" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/white-borader-image.webp);">
      <div class="content text-center">
      Gwadar Safe City Project
        </div>
      </div>
      <div class="back">
        <div class="content">
        <span>Gwadar Safe City Project</span>
        Improved security of city with installation of cameras.
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 flip-box">
      <div class="front" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/Green-Projects.webp);">
      <div class="content text-center">
      Green Projects
        </div>
      </div>
      <div class="back">
        <div class="content">
        <span>Green Projects</span>
        Gwadar goes green with the development of green spaces, parks and tree-lined avenues.
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 flip-box">
      <div class="front" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/Sewage-Water-Treatment.webp);">
      <div class="content text-center">
      Sewage Water Treatment Plant
        </div>
      </div>
      <div class="back">
        <div class="content">
        <span>Sewage Water Treatment Plant</span>
        Sewage water can be treated to be used for irrigation and agriculture.
        </div>
      </div>
    </div>
  </div>
</div>

<!---------------------------------------------------------Image Section-------------------------------------------------------------->
<?php
$content_image_url = get_the_post_thumbnail_url(null, 'full'); 
if (!$content_image_url) {
    $content_image_url = get_template_directory_uri() . '/assets/images/halal-img-1.webp';
}
?>
<div class="content-image" style="background-image: url('<?php echo esc_url($content_image_url); ?>');"></div>

<!-------------------------------------------- Image Slider Section --------------------------------------------------------------->
<?php
get_template_part('imageSlider');
?>

<?php get_footer(); ?>