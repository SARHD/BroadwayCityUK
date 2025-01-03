<?php
/**
 * Template Name: cpec
 */
?>
<?php get_header(); ?>

<!-------------------------------------------- Banner Image Section -------------------------------------------------------------->
<?php
$banner_image_url = get_the_post_thumbnail_url(null, 'full');
if (!$banner_image_url) {
    $banner_image_url = get_template_directory_uri() . '/assets/images/CPEC.webp'; 
}
?>
<div class="banner" style="background-image: url('<?php echo esc_url($banner_image_url); ?>');"></div>
<!-------------------------------------------- The Belt and Road Initiative Section -------------------------------------------------------------->
<div class="container-fluid mt-1">
    <div class="spancolorchange">
        <h2 class="text-center my-5 text-30">
            C<span>HINA</span> P<span>AKISTAN</span> E<span>CONOMIC</span> C<span>ORRIDOR</span> (CPEC)
        </h2>
        <p class="paragraph-section text-center">
            Gwadar, the crown jewel of the China Pakistan Economic Corridor (CPEC), is of strategic importance to both CPEC and the Belt and Road Initiative (BRI). CPEC and Gwadar offer a significant reduction in shipping time from the current 44 days to just 7 days, providing direct access to the Middle East, Africa, and Europe. CPEC’s $62 billion investment encompasses Special Economic Zones, world-class roads, power stations, railways, and port infrastructure.
        </p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pakistan-map.svg" alt="Map of Pakistan Highlighting Gwadar" class="mt-5 img100" />
        
        <h2 class="text-center my-5 text-30"><span>CPEC</span> Mission<span> &</span> Vision</h2>
    </div>
</div>
<!-------------------------------------------- Full Width Image Section -------------------------------------------------------------->
<?php
$content_image_url = get_the_post_thumbnail_url(null, 'full'); 
if (!$content_image_url) {
    $content_image_url = get_template_directory_uri() . '/assets/images/CPEC-Vision-Mission-2.webp';
}
?>
<div class="content-image" style="background-image: url('<?php echo esc_url($content_image_url); ?>');"></div>
<!----------------------------------------- Section with Bootstrap Grid -------------------------------------->
<section class="container-fluid py-5">
    <div class="row g-4">
        <!-- Card 1 -->
        <div class="col-md-3 nogap">
            <div class="card-custom px-4 borderright-card">
                <div class="card-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Building-a-Thriving-Economy.webp" alt="Building a Thriving Economy Icon" class="mobile-icons-for-grid" />
                </div>
                <h3 class="cardsec-heading">Building a Thriving Economy</h3>
                <p class="cardsec-paragraph">
                    Aims to improve energy cooperation for a reliable power supply, involving the creation of industrial zones and parks to spur employment and attract investments.
                </p>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col-md-3 nogap">
            <div class="card-custom px-4 borderright-card">
                <div class="card-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Investing-in-People.webp" alt="Investing in People Icon" class="mobile-icons-for-grid" />
                </div>
                <h3 class="cardsec-heading">Investing in People</h3>
                <p class="cardsec-paragraph">
                    Prioritizing upskilling through human resource development and vocational training to enhance adaptability in a dynamic job market. CPEC focuses on improving healthcare, education, and water supplies to elevate the overall quality of life.
                </p>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="col-md-3 nogap">
            <div class="card-custom px-4 borderright-card">
                <div class="card-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Connecting-the-World.webp" alt="Connecting the World Icon" class="mobile-icons-for-grid" />
                </div>
                <h3 class="cardsec-heading">Connecting the World</h3>
                <p class="cardsec-paragraph">
                    Integrating transport and IT systems to enhance global connectivity, promoting efficient movement of people, goods, and information. Emphasizing tourism cooperation and people-to-people communication.
                </p>
            </div>
        </div>
        <!-- Card 4 -->
        <div class="col-md-3 nogap">
            <div class="card-custom px-4">
                <div class="card-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Building-a-Smart-Future.webp" alt="Building a Smart Future Icon" class="mobile-icons-for-grid" />
                </div>
                <h3 class="cardsec-heading">Building a Smart Future</h3>
                <p class="cardsec-paragraph">
                    Incorporating eco-friendly technologies, green spaces, and environmentally conscious planning to promote a harmonious balance between urbanization and ecological well-being.
                </p>
            </div>
        </div>
    </div>
</section>
<!-------------------------------------------- Image Slider Section --------------------------------------------------------------->
<?php
get_template_part('imageSlider');
?>

<?php get_footer(); ?>
