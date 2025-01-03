<?php
/**
 * Template Name: view-brochure
 */
?>
<?php get_header(); ?>
<!--------------------------------------------Banner Image Section-------------------------------------------------------------->
<?php
$banner_image_url = get_the_post_thumbnail_url(null, 'full');
if (!$banner_image_url) {
    $banner_image_url = get_template_directory_uri() . '/assets/images/FAQ-banner.webp'; 
}
?>
<div class="banner" style="background-image: url('<?php echo esc_url($banner_image_url); ?>');"></div>
<!------------------------------------------Form Section -------------------------------------------------------------->
<div class="container d-flex justify-content-center my-5">
    <div class="custom-card text-center text-18 spancolorchange fw-bold px-3 px-md-5 pt-3 pt-md-5 mx-3 mx-md-5 w-100 w-md-75">
        Our aim is to deliver safe and secure property investments which yield exceptional returns for investors and be the most trusted Gwadar property brand globally. 
        <span><br><br> NOC Number : 42/05/HS/GDA</span>
    </div>
</div>
<div class="custom-card text-center pt-5">
    <h2>VIEW <span> BROCHURE REQUEST</span> FORM</h2>
</div>
<!----------------------------------------------Form Section------------------------------------------------------------------->
<?php get_template_part('form-brochure'); ?>
<!-------------------------------------------- Split Section --------------------------------------------------------------->
<?php get_template_part('splitSection'); ?>
<!-------------------------------------------- Image Slider Section --------------------------------------------------------------->
<?php get_template_part('imageSlider'); ?>

<?php get_footer(); ?>