<?php
/**
 * Template Name: view-paymentPlan
 */
?>
<?php get_header(); ?>
<!--------------------------------------------Banner Image Section-------------------------------------------------------------->
<?php
$banner_image_url = get_the_post_thumbnail_url(null, 'full');
if (!$banner_image_url) {
    $banner_image_url = get_template_directory_uri() . '/assets/images/Payment-plan-modified.webp'; 
}
?>
<div class="banner" style="background-image: url('<?php echo esc_url($banner_image_url); ?>');">
<div class="container-fluid">
    <div class="banner-content text-start">
        <h2 class="banner-heading" loading="eager loading">Convenient Payment Plans</h2>
        <h3 class="banner-subheading">FOR A SEAMLESS INVESTMENT JOURNEY</h3>
    </div>
</div>
</div>
<!------------------------------------------Pre Form Section -------------------------------------------------------------->
<div class="container d-flex justify-content-center my-5">
    <div class="custom-card text-center text-18 spancolorchange fw-bold px-3 px-md-5 pt-3 pt-md-5 mx-3 mx-md-5 w-100 w-md-75">
        Our aim is to deliver safe and secure property investments which yield exceptional returns for investors and be the most trusted Gwadar property brand globally. 
        <span><br><br> NOC Number : 42/05/HS/GDA</span>
    </div>
</div>
<div class="custom-card text-center pt-5">
    <h2><span>PAYMENT PLAN</span> REQUEST FORM</h2>
</div>
<!----------------------------------------------Form Section------------------------------------------------------------------->
<?php get_template_part('form-paymentPlan'); ?>
<!------------------------------------------Post Form Section -------------------------------------------------------------->
<div class="container-fluid custom-card">    
    <h2 class="text-50 text-uppercase">safe and secure halal investments</h2>    
</div>
<div class="container-fluid d-flex justify-content-center">    
    <div class="custom-card spancolorchange  w-75 px-4">
    <p class="text-16 text-center">GDA retains 30% of all sellable stock from the developer which acts as a government guatantee
        to safeguard the investors in the event of failure by the developer. GDA uses this stock as
        collateeral which they can liquidate and use those funds of complete and deliver the society.
        <span><br>“AN INVESTMENT YOU CAN NOT AFFORD TO MISS”</span></p>
    </div>
</div>
<!-------------------------------------------- Split Section --------------------------------------------------------------->
<?php get_template_part('splitSection'); ?>
<!-------------------------------------------- Image Slider Section --------------------------------------------------------------->
<?php get_template_part('imageSlider'); ?>

<?php get_footer(); ?>