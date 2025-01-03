<?php
/**
 * Template Name: virtualTour
 */
?>
<?php get_header(); ?>
<!--------------------------------------------Banner Image Section-------------------------------------------------------------->
<?php
$banner_image_url = get_the_post_thumbnail_url(null, 'full');
if (!$banner_image_url) {
    $banner_image_url = get_template_directory_uri() . '/assets/images/Contact-Us-page-modified.webp'; 
}
?>
<div class="banner" style="background-image: url('<?php echo esc_url($banner_image_url); ?>');">
    <div class="container-fluid">
        <div class="banner-content text-start">
        <h2 class="banner-heading">Discover A Virtual Tour </h2>
        <h3 class="banner-subheading">TO MODERN LIVING</h3>
        </div>
    </div>
</div>
<!------------------------------------------Virtual Tour and Booking Section-------------------------------------------------------------->
<div class="container-fluid">
    <iframe loading="lazy" style="height: 450px; overflow: hidden; width:100%" src="https://virtualtours.azureedge.net/images/3dstudio/Hall/Broadway-3d/V7/index.html" data-rocket-lazyload="fitvidscompatible" data-lazy-src="https://virtualtours.azureedge.net/images/3dstudio/Hall/Broadway-3d/V7/index.html" data-ll-status="loaded" class="entered lazyloaded" id="iFrameResizer0" scrolling="no"></iframe>
</div>
    
<div class="py-2 custom-card text-center">
    <h2>VIRTUAL <span> CONSULTATION</span></h2>
</div>

<div class="container-fluid">
<iframe loading="lazy" src="https://api.leadconnectorhq.com/widget/appointment/service/virtualconsultation?group=bcguk" style="width: 100%; border: none; overflow: hidden; height: 782px;" scrolling="no" id="Xj6qLkSMqwl7FRF9PRnu_1665349102418" data-rocket-lazyload="fitvidscompatible" data-lazy-src="https://api.leadconnectorhq.com/widget/appointment/service/virtualconsultation?group=bcguk" data-ll-status="loaded" class="entered lazyloaded"></iframe>
</div>
<!-------------------------------------------- Split Section --------------------------------------------------------------->
<?php get_template_part('splitSection'); ?>
<!-------------------------------------------- Image Slider Section --------------------------------------------------------------->
<?php get_template_part('imageSlider'); ?>

<?php get_footer(); ?>