<?php
/**
 * Template Name: ourEvents
 */
?>
<?php get_header(); ?>
<!--------------------------------------------Banner Image Section-------------------------------------------------------------->
<?php
$banner_image_url = get_the_post_thumbnail_url(null, 'full');
if (!$banner_image_url) {
    $banner_image_url = get_template_directory_uri() . '/assets/images/Banner-1-2.webp'; 
}
?>
<div class="banner" style="background-image: url('<?php echo esc_url($banner_image_url); ?>');">
<div class="container-fluid">
    <div class="row">
    <div class="col-12 col-sm-6 col-lg-6 col-lg-6 text-start w-50 d-flex align-items-center ">
        <h2 class="banner-heading " loading="eager loading">DEDICATED AND COMMITED TO MAKE A CHANGE</h2>
    </div>
    <div class="col-12 col-sm-6 col-lg-6 col-lg-6">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Collage-Banner-Image.webp" alt="Border Icon" class="img100"/>
    </div>
</div>
</div>
</div>
<div class="my-5 text-center spancolorchange">
    <h5><span class="gold-color text-50 py-5">PAST EVENTS</span></h5>
</div>

<!-------------------------------------------- Image Slider Section --------------------------------------------------------------->
<?php
get_template_part('imageSlider');
?>

<?php get_footer(); ?>
