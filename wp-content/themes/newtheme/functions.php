<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/*------------------------- Register Navigation Menu -------------------------*/
function custom_theme_menus() {
    register_nav_menus( array(
        'main-menu' => __( 'MenuNav', 'your-theme-textdomain' ),
    ) );
}
add_action( 'init', 'custom_theme_menus' );


/*------------------------- Allow .ico and .svg Uploads -------------------------*/
function allow_custom_uploads( $mimes ) {
    $mimes['ico'] = 'image/x-icon';
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'allow_custom_uploads' );


/*------------------------- Enqueue Styles and Scripts -------------------------*/
function mytheme_enqueue_assets() {
    // Enqueue Styles
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
    wp_enqueue_style( 'main-style2', get_template_directory_uri() . '/assets/css/mainstyles.css', array(), '1.0.0' );
    wp_enqueue_style( 'header-style', get_template_directory_uri() . '/assets/css/Header.css', array(), '1.0.0' );
    wp_enqueue_style( 'footer-style', get_template_directory_uri() . '/assets/css/Footer.css', array(), '1.0.0' );
    wp_enqueue_style( 'banner-style', get_template_directory_uri() . '/assets/css/banner.css', array(), '1.0.0' );
    wp_enqueue_style( 'index-style', get_template_directory_uri() . '/assets/css/index.css', array(), '1.0.0' );
    wp_enqueue_style( 'beforeAfter', get_template_directory_uri() . '/assets/css/beforeAfter.css', array(), '1.0.0', 'all' ); 

    // Enqueue Slick Slider Styles
    wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.8.1', 'all' );
    wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() . '/assets/css/slick-theme.css', array(), '1.8.1', 'all' );

    // Enqueue Swiper CSS (conditionally loaded later)

    // Enqueue Bootstrap CSS (handled separately)

    // Enqueue Deferred Styles if necessary
    // Uncomment and adjust if you have non-critical CSS to defer
    /*
    wp_enqueue_style( 'non-critical-css', get_template_directory_uri() . '/assets/css/non-critical.css', array(), '1.0.0', false );
    wp_style_add_data( 'non-critical-css', 'media', 'print' );
    wp_style_add_data( 'non-critical-css', 'onload', "this.media='all'" );
    */

    // Enqueue Scripts
    wp_enqueue_script( 'jquery' ); // Ensure jQuery is loaded in the header

    wp_enqueue_script( 'custom-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '1.0.0', true );

    // Enqueue Slick Slider Scripts
    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/js/slick.js', array( 'jquery' ), '1.8.1', true );

    // Enqueue Swiper JS (conditionally loaded later)

    // Enqueue AJAX Load More Scripts
    wp_enqueue_script( 'load-more', get_template_directory_uri() . '/assets/js/load-more.js', array( 'jquery' ), null, true );
    wp_localize_script( 'load-more', 'load_more_params', array(
        'ajax_url' => admin_url( 'admin-ajax.php' ),
    ) );
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_assets' );


/*------------------------- Enqueue Bootstrap -------------------------*/
function theme_enqueue_bootstrap() {
    // Bootstrap 5 CSS
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css', array(), '5.3.0' );

    // Bootstrap 5 JavaScript Bundle with Popper
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array( 'jquery' ), '5.3.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_bootstrap' );


/*------------------------- For Dynamic Slider Data -------------------------*/

// Add Meta Box for Slider
function add_slider_meta_box() {
    add_meta_box(
        'slider_meta', // Meta box ID
        'Slider Information', // Meta box Title
        'slider_meta_box_callback', // Callback function
        'page', // Post type
        'normal', // Context
        'high' // Priority
    );
}
add_action( 'add_meta_boxes', 'add_slider_meta_box' );

// Enqueue Media Uploader for Slider Meta Box
function slider_enqueue_media_uploader() {
    wp_enqueue_media(); // Enqueue the WordPress media uploader
    wp_enqueue_script( 'slider-admin-js', get_template_directory_uri() . '/js/slider-admin.js', array( 'jquery' ), null, true ); // Enqueue the custom JS file
}
add_action( 'admin_enqueue_scripts', 'slider_enqueue_media_uploader' );

// Create the form for the meta box
function slider_meta_box_callback( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'slider_meta_box_nonce' );
    
    // Get the meta values if they exist
    $slider_images       = get_post_meta( $post->ID, 'slider_images', true ) ?: [];
    $slider_texts        = get_post_meta( $post->ID, 'slider_texts', true ) ?: [];
    $slider_video_links  = get_post_meta( $post->ID, 'slider_video_links', true ) ?: [];
    $slider_cta_links    = get_post_meta( $post->ID, 'slider_cta_links', true ) ?: [];

    ?>
    <div id="slider-fields">
        <div id="slides-wrapper">
            <?php
            // Loop through existing slides if available
            if ( ! empty( $slider_images ) ) :
                foreach ( $slider_images as $index => $image_url ) : ?>
                    <div class="slide-item">
                        <h4>Slide <?php echo esc_html( $index + 1 ); ?></h4>
                        <p>
                            <label>Image: </label>
                            <input type="hidden" name="slider_images[]" value="<?php echo esc_url( $image_url ); ?>" class="slide-image-url">
                            <button class="upload-image-button button">Select/Upload Image</button>
                            <?php if ( ! empty( $image_url ) ) : ?>
                                <img src="<?php echo esc_url( $image_url ); ?>" class="preview-image" style="max-width:100px;">
                            <?php endif; ?>
                        </p>

                        <p>
                            <label>Text: </label>
                            <textarea name="slider_texts[]" rows="2" style="width:100%;"><?php echo esc_textarea( $slider_texts[ $index ] ); ?></textarea>
                        </p>

                        <p>
                            <label>Video Link: </label>
                            <input type="url" name="slider_video_links[]" value="<?php echo esc_url( $slider_video_links[ $index ] ); ?>" style="width:100%;">
                        </p>

                        <p>
                            <label>CTA Link: </label>
                            <input type="url" name="slider_cta_links[]" value="<?php echo esc_url( $slider_cta_links[ $index ] ); ?>" style="width:100%;">
                        </p>

                        <button type="button" class="delete-slide button">Delete Slide</button>
                        <hr>
                    </div>
                <?php endforeach;
            endif; ?>
        </div>

        <button type="button" id="add-slide-button" class="button">Add Slide</button>
    </div>

    <script>
    jQuery(document).ready(function($) {
        // Add slide functionality
        $('#add-slide-button').on('click', function() {
            const slideTemplate = `
                <div class="slide-item">
                    <h4>New Slide</h4>
                    <p>
                        <label>Image: </label>
                        <input type="hidden" name="slider_images[]" class="slide-image-url">
                        <button class="upload-image-button button">Select/Upload Image</button>
                        <img src="" class="preview-image" style="max-width:100px; display: none;">
                    </p>
                    <p>
                        <label>Text: </label>
                        <textarea name="slider_texts[]" rows="2" style="width:100%;"></textarea>
                    </p>
                    <p>
                        <label>Video Link: </label>
                        <input type="url" name="slider_video_links[]" style="width:100%;">
                    </p>
                    <p>
                        <label>CTA Link: </label>
                        <input type="url" name="slider_cta_links[]" style="width:100%;">
                    </p>
                    <button type="button" class="delete-slide button">Delete Slide</button>
                    <hr>
                </div>`;
            $('#slides-wrapper').append(slideTemplate);
        });

        // Image uploader functionality
        $('body').on('click', '.upload-image-button', function(e) {
            e.preventDefault();

            const button = $(this);
            const custom_uploader = wp.media({
                title: 'Select Image',
                button: { text: 'Use Image' },
                multiple: false
            });

            custom_uploader.on('select', function() {
                const attachment = custom_uploader.state().get('selection').first().toJSON();
                button.siblings('.slide-image-url').val(attachment.url);
                button.siblings('.preview-image').attr('src', attachment.url).show();
            });

            custom_uploader.open();
        });

        // Delete slide functionality
        $('body').on('click', '.delete-slide', function() {
            $(this).closest('.slide-item').remove(); // Remove the slide from the DOM
        });
    });
    </script>
    <?php
}
add_action( 'add_meta_boxes', 'add_slider_meta_box' );

// Save the meta data for the slides
function save_slider_meta_box_data( $post_id ) {
    // Verify nonce for security
    if ( ! isset( $_POST['slider_meta_box_nonce'] ) || ! wp_verify_nonce( $_POST['slider_meta_box_nonce'], basename( __FILE__ ) ) ) {
        return;
    }

    // Check if the user has the capability to save meta fields
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    // Save slider data
    $fields = array( 'slider_images', 'slider_texts', 'slider_video_links', 'slider_cta_links' );
    foreach ( $fields as $field ) {
        if ( isset( $_POST[ $field ] ) ) {
            $sanitized = ( in_array( $field, array( 'slider_images', 'slider_video_links', 'slider_cta_links' ), true ) )
                ? array_map( 'esc_url_raw', $_POST[ $field ] )
                : array_map( 'sanitize_text_field', $_POST[ $field ] );

            update_post_meta( $post_id, $field, $sanitized );
        } else {
            delete_post_meta( $post_id, $field );
        }
    }
}
add_action( 'save_post', 'save_slider_meta_box_data' );


/*------------------------- Form Section View Brochure Page -------------------------*/

// Handle Custom Form Submission
function handle_custom_form_submission() {
    // Verify nonce for security
    if ( ! isset( $_POST['custom_form_nonce'] ) || ! wp_verify_nonce( $_POST['custom_form_nonce'], 'custom_form_action' ) ) {
        wp_die( 'Security check failed.' );
    }

    // Sanitize and validate input data
    $first_name = isset( $_POST['first_name'] ) ? sanitize_text_field( $_POST['first_name'] ) : '';
    $last_name  = isset( $_POST['last_name'] )  ? sanitize_text_field( $_POST['last_name'] )  : '';
    $email      = isset( $_POST['email'] )      ? sanitize_email( $_POST['email'] )          : '';
    $phone      = isset( $_POST['phone'] )      ? sanitize_text_field( $_POST['phone'] )      : '';

    if ( empty( $first_name ) || empty( $last_name ) || empty( $email ) || empty( $phone ) ) {
        wp_die( 'Please fill out all required fields.' );
    }

    if ( ! is_email( $email ) ) {
        wp_die( 'Invalid email address.' );
    }

    // Insert a new post of type "form_submission"
    $post_id = wp_insert_post( array(
        'post_type'   => 'form_submission',
        'post_title'  => $first_name . ' ' . $last_name,
        'post_status' => 'publish',
    ) );

    // Save form data as custom fields
    if ( $post_id ) {
        update_post_meta( $post_id, 'first_name', $first_name );
        update_post_meta( $post_id, 'last_name', $last_name );
        update_post_meta( $post_id, 'email', $email );
        update_post_meta( $post_id, 'phone', $phone );
    }

    echo 'success';
    exit;
}
add_action( 'admin_post_nopriv_custom_form_submission', 'handle_custom_form_submission' );
add_action( 'admin_post_custom_form_submission', 'handle_custom_form_submission' );


/*------------------------- Register Form Submission Post Type -------------------------*/
function register_form_submission_post_type() {
    register_post_type( 'form_submission', array(
        'labels' => array(
            'name'               => 'Form Submissions',
            'singular_name'      => 'Form Submission',
            'add_new_item'       => 'Add New Submission',
            'edit_item'          => 'Edit Submission',
            'view_item'          => 'View Submission',
            'search_items'       => 'Search Submissions',
            'not_found'          => 'No submissions found',
            'not_found_in_trash' => 'No submissions found in Trash',
        ),
        'public'       => false,
        'has_archive'  => false,
        'show_ui'      => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'supports'     => array( 'title', 'custom-fields' ),
        'menu_icon'    => 'dashicons-email', // Optional: adds an icon to the menu
    ) );
}
add_action( 'init', 'register_form_submission_post_type' );


/*------------------------- FAQ Form Submission Handler -------------------------*/

// Handle FAQ Form Submission
function handle_faq_form_submission() {
    // Verify nonce for security
    if ( ! isset( $_POST['faq_form_nonce'] ) || ! wp_verify_nonce( $_POST['faq_form_nonce'], 'faq_form_action' ) ) {
        wp_redirect( add_query_arg( 'error', 'nonce_failed', wp_get_referer() ) );
        exit;
    }

    // Sanitize and validate input data
    $full_name = isset( $_POST['full_name'] ) ? sanitize_text_field( $_POST['full_name'] ) : '';
    $email     = isset( $_POST['email'] )     ? sanitize_email( $_POST['email'] )             : '';
    $phone     = isset( $_POST['phone'] )     ? sanitize_text_field( $_POST['phone'] )         : '';
    $question  = isset( $_POST['question'] )  ? sanitize_textarea_field( $_POST['question'] )  : '';

    if ( empty( $full_name ) || empty( $email ) || empty( $phone ) || empty( $question ) ) {
        wp_redirect( add_query_arg( 'error', 'empty_fields', wp_get_referer() ) );
        exit;
    }

    if ( ! is_email( $email ) ) {
        wp_redirect( add_query_arg( 'error', 'invalid_email', wp_get_referer() ) );
        exit;
    }

    // Insert a new post of type "faq_submission"
    $post_id = wp_insert_post( array(
        'post_type'   => 'faq_submission',
        'post_title'  => wp_trim_words( $question, 10, '...' ),
        'post_status' => 'publish',
    ) );

    if ( $post_id ) {
        update_post_meta( $post_id, 'full_name', $full_name );
        update_post_meta( $post_id, 'email', $email );
        update_post_meta( $post_id, 'phone', $phone );
        update_post_meta( $post_id, 'question', $question );

        wp_redirect( home_url( '/thank-you/' ) );
        exit;
    }

    wp_redirect( add_query_arg( 'error', 'submission_failed', wp_get_referer() ) );
    exit;
}
add_action( 'admin_post_nopriv_faq_form_submission', 'handle_faq_form_submission' );
add_action( 'admin_post_faq_form_submission', 'handle_faq_form_submission' );


/*------------------------- Register FAQ Submission Post Type -------------------------*/
function register_faq_submission_post_type() {
    register_post_type( 'faq_submission', array(
        'labels' => array(
            'name'               => 'FAQ Submissions',
            'singular_name'      => 'FAQ Submission',
            'add_new_item'       => 'Add New FAQ Submission',
            'edit_item'          => 'Edit FAQ Submission',
            'view_item'          => 'View FAQ Submission',
            'search_items'       => 'Search FAQ Submissions',
            'not_found'          => 'No FAQ submissions found.',
            'not_found_in_trash' => 'No FAQ submissions found in Trash.',
        ),
        'public'       => false,
        'has_archive'  => false,
        'show_ui'      => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'supports'     => array( 'title', 'custom-fields' ),
        'menu_icon'    => 'dashicons-admin-comments', // Optional: add an appropriate icon
    ) );
}
add_action( 'init', 'register_faq_submission_post_type' );


/*------------------------- Conditional Swiper Asset Loading -------------------------*/

// Conditionally Load the Swiper CDN Only When Needed
function enqueue_swiper_assets() {
    // Adjust the condition based on where your slider is displayed
    if ( is_front_page() || is_page( 'slider-page' ) ) { // Replace 'slider-page' with your actual page slug
        // Enqueue Swiper CSS
        wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', array(), '9.0.0' );

        // Enqueue Swiper JS
        wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), '9.0.0', true );

        // Initialize Swiper (ensure this script runs after Swiper JS is loaded)
        wp_add_inline_script( 'swiper-js', "
            document.addEventListener('DOMContentLoaded', function() {
                var swiper = new Swiper('.swiper-container', {
                    // Swiper options here
                    loop: true,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                });
            });
        " );
    }
}
add_action( 'wp_enqueue_scripts', 'enqueue_swiper_assets' );


/*------------------------- Disable WordPress Emojis -------------------------*/
function disable_wp_emojis() {
    // Remove the emoji script and inline styles
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'wp_head', 'print_emoji_detection_script' );
    remove_action( 'wp_footer', 'print_emoji_detection_script' );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );

    // Remove from the TinyMCE editor
    add_filter( 'tiny_mce_plugins', function( $plugins ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } );

    // Remove the emoji-related DNS prefetch
    remove_action( 'wp_head', 'wp_resource_hints', 10, 2 );
}
add_action( 'init', 'disable_wp_emojis' );


/*------------------------- Optimize Script Loading -------------------------*/

// Optimize Scripts by Ensuring jQuery is Loaded Properly
function optimize_scripts() {
    // Only modify jQuery for frontend, not admin
    if ( ! is_admin() ) {
        // Deregister WordPress's default jQuery
        wp_deregister_script( 'jquery' );

        // Register jQuery from Google's CDN (optional) or keep WordPress's version
        wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), '3.7.1', true );

        // Enqueue the registered jQuery
        wp_enqueue_script( 'jquery' );
    }
}
add_action( 'wp_enqueue_scripts', 'optimize_scripts' );


/*------------------------- Defer Non-Critical Styles -------------------------*/

// Defer Loading of Non-Critical CSS
function defer_non_critical_styles() {
    // Example of deferring a non-critical CSS file
    /*
    wp_enqueue_style( 'non-critical-css', get_template_directory_uri() . '/assets/css/non-critical.css', array(), '1.0.0', false );
    wp_style_add_data( 'non-critical-css', 'media', 'print' );
    wp_style_add_data( 'non-critical-css', 'onload', "this.media='all'" );
    */
}
add_action( 'wp_enqueue_scripts', 'defer_non_critical_styles' );


/*------------------------- Remove Default WordPress CSS -------------------------*/

// Remove Default WordPress Block Library CSS
function remove_wp_default_css() {
    // Only dequeue if not needed
    wp_dequeue_style( 'wp-block-library' );            // Dequeue block library CSS
    wp_dequeue_style( 'wp-block-library-theme' );      // Dequeue block theme CSS
}
add_action( 'wp_enqueue_scripts', 'remove_wp_default_css', 100 );


/*------------------------- Add Theme Support for Post Thumbnails -------------------------*/
function mytheme_setup() {
    add_theme_support( 'post-thumbnails' ); // Enable featured images
}
add_action( 'after_setup_theme', 'mytheme_setup' );


/*------------------------- AJAX Load More Posts -------------------------*/

// Handle AJAX Load More Posts
function load_more_posts() {
    // Get the current page number
    $page = isset( $_POST['page'] ) ? intval( $_POST['page'] ) : 1;

    // Query for more posts
    $args = array(
        'posts_per_page' => 3, // Adjust the number as needed
        'paged'          => $page,
    );
    $query = new WP_Query( $args );

    // Check if we have posts
    if ( $query->have_posts() ) :
        while ( $query->have_posts() ) : $query->the_post();
            ?>
            <div class="col-md-4 mb-4 post-item">
                <div class="blog-post-card">
                    <a href="<?php the_permalink(); ?>">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="blog-post-thumbnail">
                                <?php the_post_thumbnail( 'medium', array( 'class' => 'img-fluid post-image' ) ); ?>
                            </div>
                        <?php endif; ?>
                    </a>
                    <div class="blog-post-content">
                        <h4 class="blog-post-title">
                            <a href="<?php the_permalink(); ?>">
                                <?php echo esc_html( wp_trim_words( get_the_title(), 6, '...' ) ); ?>
                            </a>
                        </h4>
                        <p class="text-white"><?php echo esc_html( get_the_date() ); ?></p>
                        <p class="blog-post-excerpt text-white"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 12, '...' ) ); ?></p>
                        <a href="<?php the_permalink(); ?>" class="cta-button">Read More</a>
                    </div>
                </div>
            </div>
            <?php
        endwhile;
    endif;

    wp_reset_postdata();

    // End AJAX
    wp_die();
}
add_action( 'wp_ajax_load_more_posts', 'load_more_posts' );
add_action( 'wp_ajax_nopriv_load_more_posts', 'load_more_posts' );


/*------------------------- Additional Optimizations (Optional) -------------------------*/

// Example: Defer Parsing of JavaScript (excluding essential scripts)
// function defer_parsing_of_js( $url ) {
//     if ( is_admin() ) {
//         return $url;
//     }
//     if ( FALSE === strpos( $url, '.js' ) ) {
//         return $url;
//     }
//     if ( strpos( $url, 'jquery.js' ) || strpos( $url, 'slick.js' ) ) { // Exclude essential scripts
//         return $url;
//     }
//     return "$url' defer='defer";
// }
// add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );

?>
