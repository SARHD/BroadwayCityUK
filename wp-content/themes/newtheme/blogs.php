<?php
/**
 * Template Name: blogs
 */
?>
<?php get_header(); ?>

<!--------------------------------------------Banner Image Section-------------------------------------------------------------->
<?php
$banner_image_url = get_the_post_thumbnail_url(null, 'full');
if (!$banner_image_url) {
    $banner_image_url = get_template_directory_uri() . '/assets/images/about-2.webp'; 
}
?>
<div class="banner vh-60 d-flex align-items-end p-4 position-relative">
    <!-- Background Image with Opacity -->
    <div class="position-absolute top-0 start-0 w-100 h-100 opacity-25 z-1" style="background-image: url('<?php echo esc_url($banner_image_url); ?>');"></div>
    
    <div class="container-fluid position-relative z-2">
    <div class="row">
        <!-- Text behind the main content -->
        <div class="col-12 position-absolute top-50 start-50 translate-middle text-center opacity-25">
            <span class="display-1 text-uppercase text-white text-opacity-25">Blogs</span>
        </div>

        <!-- Main content -->
        <div class="col-12 text-center position-relative">
            <h2 class="banner-subheading" loading="eager loading">BROADWAY CITY GWADAR</h2>
            <h3 class="banner-heading">BLOGS</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bcg-border.svg" alt="Border Icon" class="img-fluid"/>
        </div>
        <div class="col-12 text-center position-relative link-section">
        <a href="<?php echo home_url(); ?>">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="18" height="18" viewBox="0,0,256,256">
                <g fill="#c8ad61" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                    <g transform="scale(5.12,5.12)">
                        <path d="M25,1.05078c-0.2175,0 -0.43414,0.06898 -0.61914,0.20898l-23,17.95117c-0.43,0.34 -0.50992,0.9682 -0.16992,1.4082c0.34,0.43 0.9682,0.50992 1.4082,0.16992l1.38086,-1.07812v26.28906c0,0.55 0.45,1 1,1h14v-18h12v18h14c0.55,0 1,-0.45 1,-1v-26.28906l1.38086,1.07812c0.19,0.14 0.39914,0.21094 0.61914,0.21094c0.3,0 0.58906,-0.13086 0.78906,-0.38086c0.34,-0.44 0.26008,-1.0682 -0.16992,-1.4082l-23,-17.95117c-0.185,-0.14 -0.40164,-0.20898 -0.61914,-0.20898zM35,5v1.05078l6,4.67969v-5.73047z"></path>
                    </g>
                </g>
            </svg>
        </a>             
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0,0,256,256">
            <g fill="#c8ad61" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.33333,5.33333)"><path d="M39.4707,6.98633c-0.38956,0.01135 -0.75941,0.17386 -1.03125,0.45313l-31,31c-0.39185,0.37623 -0.54969,0.9349 -0.41265,1.46055c0.13704,0.52565 0.54754,0.93616 1.07319,1.07319c0.52565,0.13704 1.08432,-0.02081 1.46055,-0.41265l31,-31c0.4429,-0.43135 0.57582,-1.09023 0.33479,-1.65955c-0.24103,-0.56932 -0.80665,-0.93247 -1.42463,-0.91467z"></path></g></g>
            </svg>
            <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>">Blog</a>
        </div>
    </div>
</div>
</div>

<!--------------------------------------------Blogs Section-------------------------------------------------------------->
<div class="container-fluid">
    <!-- Search Bar -->
    <div class="row mb-4">
        <div class="col-12">
            <form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="d-flex">
                <input type="text" name="s" class="searchform-input" placeholder="Enter your Keyword...." value="<?php echo get_search_query(); ?>">
                <button type="submit" class="text-white blog-buttons-readmore">Search</button>
            </form>
        </div>
    </div>

    <?php
    // Define the query to get blog posts
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 4, // Number of posts to display
        'paged' => 0,  // Starting page

    );
    $query = new WP_Query($args);

    if ($query->have_posts()) :
        // Get the first post for the top featured post
        $query->the_post();
    ?>
        <!-- Featured Post -->
<div class="row my-5">
    <div class="col-12">
        <div class="row">
            <!-- Featured Image (Left Side) -->
            <div class="col-md-6">
                <?php if (has_post_thumbnail()) : ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
                    </a>
                <?php endif; ?>
            </div>

            <!-- Content (Right Side) -->
            <div class="col-md-6">
                <div class="featured-post-content">
                    <h2 class="gold-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p class="text-white"><?php echo get_the_date(); ?></p>
                    <p class="featured-post-description text-white"><?php echo wp_trim_words(get_the_excerpt(), 30, '...'); ?></p>
                    <a href="<?php the_permalink(); ?>" class="text-white blog-buttons-readmore">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>


        <!-- Other Posts (3 per row) -->
        <div class="row" id="posts-list">
        <?php
            // Now display the remaining posts
            while ($query->have_posts()) : $query->the_post();
        ?>
            <div class="col-md-4 mb-4">
                <div class="blog-post-card">
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="blog-post-thumbnail">
                                <?php the_post_thumbnail('medium', ['class' => 'img-fluid post-image']); ?>
                            </div>
                        <?php endif; ?>
                    </a>
                    <div class="blog-post-content">
                        <h4 class="blog-post-title">
                            <a href="<?php the_permalink(); ?>">
                                <?php echo wp_trim_words(get_the_title(), 6, '...'); ?>
                            </a>
                        </h4>
                        <p class="text-white"><?php echo get_the_date(); ?></p>
                        <p class="blog-post-excerpt text-white"><?php echo wp_trim_words(get_the_excerpt(), 12, '...'); ?></p>
                        <a href="<?php the_permalink(); ?>" class="cta-button">Read More</a>
                    </div>

                </div>
            </div>
        <?php
            endwhile;
            wp_reset_postdata();
        ?>
        </div>

    <?php
    else :
        echo '<p>No posts found.</p>';
    endif;
    ?>
</div>

<!-- Load More Button -->
<div id="load-more-container" class="text-center my-4">
        <button id="load-more-btn" data-page="2"  class="text-white blog-buttons-readmore">Load More</button>
    </div>
</div>

<!---------------------------------------- Image Slider Section -------------------------------------------------------->
<?php
get_template_part('imageSlider');
?>


<?php get_footer(); ?>