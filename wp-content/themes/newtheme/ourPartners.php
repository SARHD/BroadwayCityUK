<?php
/**
 * Template Name: ourPartner
 */
?>
<?php get_header(); ?>

<!--------------------------------------------Banner Image Section-------------------------------------------------------------->
<?php
$banner_image_url = get_the_post_thumbnail_url(null, 'full');
if (!$banner_image_url) {
    $banner_image_url = get_template_directory_uri() . '/assets/images/partners.webp'; 
}
?>
<div class="banner border-gold-bottom" style="background-image: url('<?php echo esc_url($banner_image_url); ?>');">
<div class="container-fluid">
    <div class="text-start">
        <h2 class="banner-heading">Constructing Communities</h2>
        <h3 class="banner-subheading">Brick by Brick</h3>
    </div>
</div>
</div>
<!--------------------------------------------Charity Section-------------------------------------------------------------->
    <div class="w-100 my-3">
        <div class="banner-content text-center mw-100 spancolorchange">
        <h2 class="banner-heading"><span>CHARITY</span> PARTNERS</h2>
        </div>
    </div>

    <div class="container-fluid my-3">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-6 col-lg-6">
                <p` class="paragraph-section spancolorchange">
                    <span class="text-50">Human Appeal</span>
                    is a UK-based humanitarian organization that focuses on providing aid, development programs, and emergency relief to communities in need around the world. They work in various areas, including providing food, healthcare, education, and shelter to those affected by conflict, natural disasters, poverty, and other crises. Human Appeal aims to alleviate suffering and empower communities to build a better future through their charitable initiatives and campaigns. Broadway City Gwadar has been a headline sponsor of Human Appeal Comedy Tour shows in 2022 and 2023. In 2023 the Comedy tour spanned 17 cities from the 15th of December till the 31st of December. With everyone’s contributions, the tour was successful in raising GBP 2.6 million for relief efforts committed to providing essentials to families in Gaza.
                </p>
            </div>
            <div class="col-12 col-sm-6 col-lg-6 col-lg-6">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/human-ap.webp" alt="Border Icon" class="img100" loading="lazy"/>
            </div>
        </div>
    </div>
    
<!-------------------------------------------- Image Slider Section --------------------------------------------------------------->
<?php get_template_part('imageSlider'); ?>

<?php get_footer(); ?>