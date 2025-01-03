<?php
/**
 * Template Name: thankyou
 */
?>
<?php get_header(); ?>
<!--------------------------------------------Banner Image Section-------------------------------------------------------------->
<?php
$banner_image_url = get_the_post_thumbnail_url(null, 'full');
if (!$banner_image_url) {
    $banner_image_url = get_template_directory_uri() . '/assets/images/Gwadar-night.webp'; 
}
?>
<div class="banner" style="background-image: url('<?php echo esc_url($banner_image_url); ?>');">
<div class="container-fluid">
    <div class="banner-content text-start">
        <h2 class="banner-heading" loading="eager loading">Thank You!</h2>
        <h3 class="banner-subheading">Your submission has been received successfully.</h3>
        <a class="btn btn-primary" href="<?php echo home_url(); ?>">Go Back to Home</a>
    </div>
</div>
</div>
<!-------------------------------------------- Image Slider Section --------------------------------------------------------------->
<?php
get_template_part('imageSlider');
?>

<?php get_footer(); ?>
