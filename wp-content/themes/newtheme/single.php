<?php
get_header(); 
?>

<!-------------------------------------------- Single Post Banner Image Section -------------------------------------------------------------->

<?php 
// Get the featured image or fallback to a default image
$banner_image_url = get_the_post_thumbnail_url(null, 'full');
if (!$banner_image_url) {
    $banner_image_url = get_template_directory_uri() . '/assets/images/default-banner.jpg'; 
}
?>
<div class="single-post-banner vh-60 d-flex align-items-end p-4 position-relative">
    <div class="position-absolute top-0 start-0 w-100 h-100 opacity-25 z-1" style="background-image: url('<?php echo esc_url($banner_image_url); ?>');"></div>
    
    <div class="container-fluid position-relative z-2">
        <div class="row">
            <div class="col-12 text-center position-relative">
                <h2 class="banner-subheading">BROADWAY CITY GWADAR</h2>
                <!-- <h5 class="banner-heading"><?php the_title(); ?></h5> -->
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
                    <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a>
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0,0,256,256">
                            <g fill="#c8ad61" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                <g transform="scale(5.33333,5.33333)">
                                    <path d="M39.4707,6.98633c-0.38956,0.01135 -0.75941,0.17386 -1.03125,0.45313l-31,31c-0.39185,0.37623 -0.54969,0.9349 -0.41265,1.46055c0.13704,0.52565 0.54754,0.93616 1.07319,1.07319c0.52565,0.13704 1.08432,-0.02081 1.46055,-0.41265l31,-31c0.4429,-0.43135 0.57582,-1.09023 0.33479,-1.65955c-0.24103,-0.56932 -0.80665,-0.93247 -1.42463,-0.91467z"></path>
                                </g>
                            </g>
                        </svg>


                    <h5 class="text-white"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 5, '...'); ?></a></h5>
            </div>
        </div>
    </div>
</div>

<!-------------------------------------------- Single Post Content Section -------------------------------------------------------------->

<div class="container-fluid py-3">
    <div class="row">
        <div class="col-12">
            <article <?php post_class(); ?>>
                <header class="single-post-header">
                    <h1 class="single-post-title gold-text"><?php the_title(); ?></h1>
                    <p class="single-post-meta text-white"><?php echo get_the_date(); ?> by <?php the_author(); ?></p>
                </header>

                <div class="single-post-content text-white">
                    <?php 
                    // Display the featured image if available
                    if (has_post_thumbnail()) : ?>
                        <div class="single-post-thumbnail mb-4">
                            <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
                        </div>
                    <?php endif; ?>

                    <?php 
                    // Display the post content
                    the_content(); 
                    ?>
                </div>

                <!-- Comments Section -->
                <!-- <div class="comments-section">
                    <?php
                    // if (comments_open() || get_comments_number()) :
                    //     comments_template();
                    // endif;
                    ?>
                </div> -->
                
            </article>
        </div>
    </div>
</div>
<div class="border-gold-bottom"></div>
<div class="container-fluid py-3">
    <!-- Related Posts Section (Optional) -->
    <div class="row">
        <div class="col-12">
        <h4 class="text-center text-white fs-1 fs-sm-3">Related Posts</h4>
            <div class="row">
                <?php
                // Get related posts based on categories
                $related_args = array(
                    'posts_per_page' => 3,
                    'post__not_in' => array(get_the_ID()), // Exclude the current post
                    'category__in' => wp_get_post_categories(get_the_ID()),
                );
                $related_query = new WP_Query($related_args);
                
                if ($related_query->have_posts()) :
                    while ($related_query->have_posts()) : $related_query->the_post();
                ?>
                    <div class="col-md-4 mb-4">
                        <div class="related-post-card">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="related-post-thumbnail">
                                        <?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
                                    </div>
                                <?php endif; ?>
                            </a>
                            <div class="related-post-content">
                                <h5 class="related-post-title">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php echo wp_trim_words(get_the_title(), 6, '...'); ?>
                                    </a>
                                </h5>
                                <p class="related-post-date text-white"><?php echo get_the_date(); ?></p>
                            </div>

                        </div>
                    </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>No related posts found.</p>';
                endif;
                ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>
