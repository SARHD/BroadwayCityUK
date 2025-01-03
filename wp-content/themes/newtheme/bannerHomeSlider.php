<div class="slider-container">
    <?php
    // Retrieve custom field values
    $slider_images = get_post_meta(get_the_ID(), 'slider_images', true) ?: []; // Array of image URLs
    $slider_texts = get_post_meta(get_the_ID(), 'slider_texts', true) ?: []; // Array of texts
    $slider_video_links = get_post_meta(get_the_ID(), 'slider_video_links', true) ?: []; // Array of video links
    ?>

    <!-- Slide Content Section -->
    <div class="slider-content">
        <h2 id="slider-text"><?php echo esc_html($slider_texts[0] ?? 'Default Text'); ?></h2>
        <a href="<?php echo esc_url($slider_video_links[0] ?? '#'); ?>" class="slider-video-btn" aria-label="Play Video">
    <!-- Replace with your custom SVG icon -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24px" height="24px">
        <path d="M8 5v14l11-7z" />
    </svg>
</a>

        <a href="/contact-us" class="slider-cta-btn">Request a Call Back</a> <!-- Static CTA Button -->
    </div>

    <!-- Dynamically generated slides -->
    <?php foreach ($slider_images as $index => $image_url): ?>
        <div class="slide slide-bannermain" style="background-image: url('<?php echo esc_url($image_url); ?>');" data-index="<?php echo esc_attr($index); ?>">
        </div>
    <?php endforeach; ?>

    <!-- Controls -->
    <div class="controls-container">
        <?php foreach ($slider_images as $index => $image_url): ?>
            <div class="control" data-index="<?php echo esc_attr($index); ?>"></div>
        <?php endforeach; ?>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const slides = document.querySelectorAll('.slide');
        const controls = document.querySelectorAll('.control');
        const sliderText = document.getElementById('slider-text');
        const videoButton = document.querySelector('.slider-video-btn');

        // PHP-generated slide data
        const slideData = <?php echo json_encode([
            'texts' => $slider_texts,
            'video_links' => $slider_video_links,
        ]); ?>;

        let activeSlide = 0;
        let prevActive = slides.length - 1; // Default to the last slide for initial transition

        // Initialize the first slide and start the interval
        function changeSlides() {
            if (slides.length === 0) return;

            // Update classes for slides and controls
            slides[prevActive]?.classList.remove('active');
            controls[prevActive]?.classList.remove('active');

            slides[activeSlide]?.classList.add('active');
            controls[activeSlide]?.classList.add('active');

            // Update text and video link
            sliderText.textContent = slideData.texts[activeSlide] || 'Default Slider Text';
            videoButton.href = slideData.video_links[activeSlide] || '#';

            // Update slide indexes
            prevActive = activeSlide;
            activeSlide = (activeSlide + 1) % slides.length;
        }

        // Start automatic slide change
        let interval = setInterval(changeSlides, 4000);
        changeSlides(); // Trigger immediately on load

        // Add event listeners for manual controls
        controls.forEach((control, index) => {
            control.addEventListener('click', () => {
                activeSlide = index;
                changeSlides();
                clearInterval(interval); // Reset interval
                interval = setInterval(changeSlides, 4000);
            });
        });
    });
</script>
