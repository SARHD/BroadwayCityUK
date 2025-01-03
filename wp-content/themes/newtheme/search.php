<?php get_header(); ?>

<!-- Search Banner Section -->
<div class="search-banner vh-60 d-flex align-items-end p-4 position-relative">
    <div class="position-absolute top-0 start-0 w-100 h-100 opacity-25 z-1" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/search-banner.jpg');"></div>
    <div class="container-fluid position-relative z-2">
        <div class="row">
            <div class="col-12 text-center position-relative">
                <h2 class="banner-subheading">BROADWAY CITY GWADAR</h2>
                <h3 class="banner-heading">Search Results</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bcg-border.svg" alt="Border Icon" class="img-fluid"/>
            </div>
        </div>
    </div>
</div>

<!-- Search Form Section -->
<div class="container-fluid my-5">
<div class="row mb-4">
        <div class="col-12">
            <form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="d-flex">
                <input type="text" name="s" class="searchform-input" placeholder="Enter your Keyword...." value="<?php echo get_search_query(); ?>">
                <button type="submit" class="text-white blog-buttons-readmore">Search</button>
            </form>
        </div>
    </div>
</div>

<!-- Search Results Section -->
<div class="container-fluid">
    <?php if (have_posts()) : ?>
        <div class="row">
            <?php while (have_posts()) : the_post(); ?>
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
                            <h4 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 6, '...'); ?></a></h4>
                            <p class="text-white"><?php echo get_the_date(); ?></p>
                            <p class="blog-post-excerpt text-white"><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></p>
                            <a href="<?php the_permalink(); ?>" class="cta-button">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>

        <!-- Pagination Section -->
        <div class="row">
            <div class="col-12 text-center">
                <?php 
                // Pagination
                the_posts_pagination(array(
                    'mid_size' => 2,
                    'prev_text' => '&laquo; Previous',
                    'next_text' => 'Next &raquo;',
                ));
                ?>
            </div>
        </div>

    <?php else : ?>
        <div class="row">
            <div class="col-12 text-center">
                <p>No posts found for your search. Please try again with different keywords.</p>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
