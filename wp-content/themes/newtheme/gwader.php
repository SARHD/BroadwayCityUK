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
    $banner_image_url = get_template_directory_uri() . '/assets/images/imagetest.webp'; 
}
?>
<div class="banner" style="background-image: url('<?php echo esc_url($banner_image_url); ?>');">
<div class="container-fluid">
    <div class="banner-content text-start">
        <h2 class="banner-heading" loading="eager loading">THE CROWN JEWEL</h2>
        <h3 class="banner-subheading">OF CPEC GWADAR asd</h3>
    </div>
</div>
</div>
<!--------------------------------------------FlipBox Section-------------------------------------------------------------->
<div class="container-fluid mt-5">
        <h5 class="paragraph-section spancolorchange">
            <span class="text-50">Gwadar</span>
                is destined to become one of the world’s great natural deep sea ports providing access to and from the Arabian Sea. It is a historic and important geo strategic development unrivalled in the world. Its success is enhanced by being part of the China Pakistan Economic Corridor (CPEC) which will provide the infrastructure such as roads, rail, airport and power stations for trade and commerce to accelerate and grow.
        </h5>
        <h5 class="text-center my-5 text-30 text-white"><span>WHY</span> GWADAR?</h5>
</div>

<div class="container-fluid">
  <div class="row flip-boxes">
    <div class="col-lg-3 col-md-3 col-sm-4 flip-box">
      <div class="front" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/CPEC-Powerhouse.webp);">
        <div class="content text-center">
        CPEC Powerhouse<br>
        </div>
      </div>
      <div class="back">
        <div class="content">
        <span>CPEC Powerhouse</span>
        Fueled by $62 billion in CPEC infrastructure – roads, railways, airports, and power – Gwadar's trade and commerce reach new heights.
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-4 flip-box">
      <div class="front" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/Worlds-deepest-natural-port.webp);">
      <div class="content text-center">
      World's Deepest Natural Port
        </div>
      </div>
      <div class="back">
        <div class="content">
        <span>World's Deepest Natural Port</span>
        Gwadar's deep-sea harbor, the world's envy, unlocks unparalleled access to the Arabian Sea and beyond—witness history in the making with this transformative geo-strategic marvel.

        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-4 flip-box">
      <div class="front" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/Gwadar-Airport.webp);">
      <div class="content text-center">
      South Asia's Gateway
        </div>
      </div>
      <div class="back">
        <div class="content">
        <span> South Asia's Gateway</span>
        Gwadar's international airport, set to take flight in 2024, connects continents and accelerates its meteoric rise.
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-4 flip-box">
      <div class="front" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/Weapon-free-zone.webp);">
      <div class="content text-center">
      Peace & Prosperity
        </div>
      </div>
      <div class="back">
        <div class="content">
        <span>Peace & Prosperity</span>
        Invest in peace and prosperity with Pakistan's first weapons-free zone, fostering economic growth.
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-4 flip-box">
      <div class="front" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/Gwadar-will-host-2-million-population-by-2050.webp);">
      <div class="content text-center">
      Smart City Dream<br>
        </div>
      </div>
      <div class="back">
        <div class="content">
        <span>Smart City Dream</span>
        Gwadar, a learning hub from global port cities, embraces sustainability and smart city designs for a thriving future.
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-4 flip-box">
      <div class="front" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/business-boom.webp);">
      <div class="content text-center">
      Tax Havens for 23 Years
        </div>
      </div>
      <div class="back">
        <div class="content">
        <span>Tax Havens for 23 Years</span>
        23 years of tax-free haven in Gwadar's SEZs attracts businesses and skilled labor, creating a magnet for investment and growth.
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-4 flip-box">
      <div class="front" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/Brighter-future-graph-can-show-1000_-increase.webp);">
      <div class="content text-center">
      1000% Brighter Future
        </div>
      </div>
      <div class="back">
        <div class="content">
        <span>1000% Brighter Future</span>
        Gwadar's per capita income is projected to soar 10x higher than Pakistan's average, painting a future of affluence and shared prosperity.
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-4 flip-box">
      <div class="front" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/Smart-City.webp);">
      <div class="content text-center">
      Mega Metropolis Rising
        </div>
      </div>
      <div class="back">
        <div class="content">
        <span>Mega Metropolis Rising</span>
        From 80,000 to 160,000 and climbing, Gwadar's population surge reflects its job boom. The master plan forecasts 300,000 by 2025, 600,000 by 2035, and a thriving metropolis of 2 million by 2050.
        </div>
      </div>
    </div>
  </div>
</div>

<!--------------------------------------------THE BELT AND ROAD INITIATIVE Section-------------------------------------------------------------->
<div class="container-fluid mt-1 spancolorchange">
    <h5 class="text-center text-30 my-5"><span>THE</span> BELT <span>AND </span> ROAD INITIATIVE</h5>
    <h5 class="paragraph-section text-center">
         The BRI, covering 72 countries, is the largest ever infrastructure programme with total projected investments of US$8 trillion untill 2049; current annual investment is around US$150 billion.<br><br>
         The main aims of the BRI are to increase regional connectivity and economic integration.<br><br>
         Three-quarters of BRI projects until 2017 were in power (particularly hyfro and coal-fired power plants) as well as transport infrastructure.
    </h5>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/word-map01.svg" alt="Premium Location Icon" class="mt-5 img100" loading="lazy"/>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ship-Distance.svg" alt="Premium Location Icon" class="mt-5 img100" loading="lazy"/>
</div>
<!---------------------------------------------------6 Grid Layout Section-------------------------------------------------------------------->
<div class="container-fluid stat-section mt-5">
    <div class="container">
        <div class="row text-center my-4">
            <!-- First Stat Box -->
            <div class="col-md-4 col-sm-12">
                <div class="stat-box spancolorchange">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1icon.svg" alt="Population Icon" class="mt-n6 imageicon" loading="lazy"/>
                    <h5 class="text-20" class="text-center">
                        <span class="text-50">4.5</span> BILLION
                    </h5>
                    <div class="stat-text">Combined population of all countries involved in BRI</div>
                </div>
            </div>
            
            <!-- Second Stat Box -->
            <div class="col-md-4 col-sm-12">
                <div class="stat-box spancolorchange">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2icon.svg" alt="World Population Icon" class="mt-n6 imageicon" loading="lazy"/>
                    <h5 class="text-20" class="text-center">
                        <span class="text-50">60%</span>
                    </h5>
                    <div class="stat-text">BRI touches 60 percent of the world's population</div>
                </div>
            </div>
            
            <!-- Third Stat Box -->
            <div class="col-md-4 col-sm-12">
                <div class="stat-box spancolorchange">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/3icon.svg" alt="GDP Icon" class="mt-n6 imageicon" loading="lazy"/>
                    <h5 class="text-20" class="text-center">
                        <span class="text-50">$4.5</span> TRILLION
                    </h5>
                    <div class="stat-text">Combined GDP of all countries involved</div>
                </div>
            </div>
        </div>
<br>
        <div class="row text-center my-4">
            <!-- Fourth Stat Box -->
            <div class="col-md-4 col-sm-12">
                <div class="stat-box spancolorchange">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/4icon.svg" alt="Globe Icon" class="mt-n6 imageicon" loading="lazy"/>
                    <h5 class="text-20" class="text-center">
                        <span class="text-50">$6</span> BILLION
                    </h5>
                    <div class="stat-text">Combined population of all countries involved in BRI</div>
                </div>
            </div>

            <!-- Fifth Stat Box -->
            <div class="col-md-4 col-sm-12">
                <div class="stat-box spancolorchange">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/5icon.svg" alt="Income Icon" class="mt-n6 imageicon" loading="lazy"/>
                    <h5 class="text-20" class="text-center">
                        <span class="text-50">$3,875</span>
                    </h5>
                    <div class="stat-text">Low and Middle income BRI partners average capita income</div>
                </div>
            </div>

            <!-- Sixth Stat Box -->
            <div class="col-md-4 col-sm-12">
                <div class="stat-box spancolorchange">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/6icon.svg" alt="Infrastructure Cost Icon" class="mt-n6 imageicon" loading="lazy"/>
                    <h5 class="text-20" class="text-center">
                        <span class="text-50">$26</span> TRILLION
                    </h5>
                    <div class="stat-text">Estimated cost of infrastructure needs</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row trillonbox py-2 spancolorchange">
      <div class="col-md-2 col-sm-12">
        <h5 class="text-center text-20"><span class="text-50">$1</span> TILLION</h5>
      </div >

      <div class="col-md-10 col-sm-12 py-2 ">
        <h5 class="trillionboxtext"><span>Amount China has pledged</span></h5>
        <h5 class="trillionboxtext">The estimated cost of infrastructure needs in the developing parts of the ASI-Pacific through 2030 is $26 trillion. China has pledged $1 trillion<h5>
      </div >
    </div>
</div>

<!---------------------------------------------Testimonial Slider Section--------------------------------------------------------->
<?php get_template_part('testimonialSlider'); ?>
<!-------------------------------------------- Image Slider Section --------------------------------------------------------------->
<?php get_template_part('imageSlider'); ?>


<?php get_footer(); ?>