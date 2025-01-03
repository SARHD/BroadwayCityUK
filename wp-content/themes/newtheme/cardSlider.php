<!------------------------------------------ Section Card Slider --------------------------------------->

<div class="slide-container swiper container-fluid">
    <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">
            <!-- Static Card 1 -->
            <div class="card swiper-slide position-relative hoveritemstyle">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/BCG-Payment-Plan-2.webp" class="card-img cardz-img" alt="SliderGwader" loading="lazy"/>
                
                <div class="card-body position-absolute top-50 start-50 translate-middle d-flex flex-column justify-content-center align-items-center text-white w-100 h-100">
                    <p class="card-title">Location</p>
                    <hr class="slider-card-hr w-50 bg-white border-2">
                    <p>Gwadar</p>
                </div>
                
                <a href="#" class="position-absolute bottom-0 start-50 translate-middle-x view-more-link">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/q-links-arrow.svg" class="logoicon-cardslider" alt="logoicon" />
                    <p>View More</p>
                </a>
            </div>

            <!-- Static Card 2 -->
            <div class="card swiper-slide position-relative hoveritemstyle">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/BCG-Virtual-Tour.webp" class="card-img cardz-img" alt="SliderGwader" loading="lazy"/>
                
                <div class="card-body position-absolute top-50 start-50 translate-middle d-flex flex-column justify-content-center align-items-center text-white w-100 h-100">
                    <p class="card-title">Get</p>
                    <hr class="slider-card-hr w-50 bg-white border-2">
                    <p>Virtual Consultation</p>
                </div>
                
                <a href="#" class="position-absolute bottom-0 start-50 translate-middle-x view-more-link">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/q-links-arrow.svg" class="logoicon-cardslider" alt="logoicon"/>
                    <p>View More</p>
                </a>
            </div>

            <!-- Static Card 3 -->
            <div class="card swiper-slide position-relative hoveritemstyle">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/BCG-Amenities.webp" class="card-img cardz-img" alt="SliderGwader" loading="lazy"/>
                
                <div class="card-body position-absolute top-50 start-50 translate-middle d-flex flex-column justify-content-center align-items-center text-white w-100 h-100">
                    <p class="card-title">Get</p>
                    <hr class="slider-card-hr w-50 bg-white border-2">
                    <p>Amenities</p>
                </div>
                
                <a href="#" class="position-absolute bottom-0 start-50 translate-middle-x view-more-link">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/q-links-arrow.svg" class="logoicon-cardslider" alt="logoicon"/>
                    <p>View More</p>
                </a>
            </div>

            <!-- Static Card 4 -->
            <div class="card swiper-slide position-relative hoveritemstyle">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/BCG-Location-Gwadar.webp" class="card-img cardz-img" alt="SliderGwader" loading="lazy"/>
                
                <div class="card-body position-absolute top-50 start-50 translate-middle d-flex flex-column justify-content-center align-items-center text-white w-100 h-100">
                    <p class="card-title">BROADWAY CITY</p>
                    <hr class="slider-card-hr w-50 bg-white border-2">
                    <p>Location</p>
                </div>
                
                <a href="#" class="position-absolute bottom-0 start-50 translate-middle-x view-more-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/q-links-arrow.svg" class="logoicon-cardslider" alt="logoicon"/>
                    <p>View More</p>
                </a>
            </div>

            <!-- Static Card 5 -->
            <div class="card swiper-slide position-relative hoveritemstyle">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/BCG-Virtual-Consultation.webp" class="card-img cardz-img" alt="SliderGwader" loading="lazy"/>
                
                <div class="card-body position-absolute top-50 start-50 translate-middle d-flex flex-column justify-content-center align-items-center text-white w-100 h-100">
                    <p class="card-title">BROADWAY CITY</p>
                    <hr class="slider-card-hr w-50 bg-white border-2">
                    <p>Virtual Consultation</p>
                </div>
                
                <a href="#" class="position-absolute bottom-0 start-50 translate-middle-x view-more-link">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/q-links-arrow.svg" class="logoicon-cardslider" alt="logoicon"/>
                    <p>View More</p>
                </a>
            </div>

            <!-- Static Card 6 -->
            <div class="card swiper-slide position-relative hoveritemstyle">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/BCG-Brochure.webp" class="card-img cardz-img" alt="SliderGwader" loading="lazy"/>
                
                <div class="card-body position-absolute top-50 start-50 translate-middle d-flex flex-column justify-content-center align-items-center text-white w-100 h-100">
                    <p class="card-title">BROADWAY CITY</p>
                    <hr class="slider-card-hr w-50 bg-white border-2">
                    <p>Brochure</p>
                </div>
                
                <a href="#" class="position-absolute bottom-0 start-50 translate-middle-x view-more-link">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/q-links-arrow.svg" class="logoicon-cardslider" alt="logoicon"/>
                    <p>View More</p>
                </a>
            </div>

        </div>
    </div>
    
    <div class="swiper-button-next swiper-navBtn buttonforswiper"></div>
    <div class="swiper-button-prev swiper-navBtn buttonforswiper"></div>
    <!-- <div class="swiper-pagination"></div> -->
</div>


<script>
   var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
});
</script>
