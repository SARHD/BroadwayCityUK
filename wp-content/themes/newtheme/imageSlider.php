<!----------------------------------------------Images Sldier in the end of page---------------------------------------------------------->

    <div class="imageslider">
        <div class="container-fluid ps-5">
            <div class="row">
                <div class="col-md-12 heroSlider-fixed">
                    <div class="overlay"></div>
                    <!-- Slider -->
                    <div class="slider responsive">
                        <div>
                            <img class="imagesliderdimension" src="<?php echo get_template_directory_uri(); ?>/assets/images/nk-corporation.svg" alt="" loading="lazy"/>
                        </div>
                        <div>
                            <img class="imagesliderdimension" src="<?php echo get_template_directory_uri(); ?>/assets/images/milstone.svg" alt="" loading="lazy"/>
                        </div>
                        <div>
                            <img class="imagesliderdimension" src="<?php echo get_template_directory_uri(); ?>/assets/images/gda.svg" alt="" loading="lazy"/>
                        </div>
                        <div>
                            <img class="imagesliderdimension" src="<?php echo get_template_directory_uri(); ?>/assets/images/cpec.svg" alt="" loading="lazy"/>
                        </div>
                        <div>
                            <img class="imagesliderdimension" src="<?php echo get_template_directory_uri(); ?>/assets/images/landmak.svg" alt="" loading="lazy"/>
                        </div>
                        <div>
                            <img class="imagesliderdimension" src="<?php echo get_template_directory_uri(); ?>/assets/images/nk-corporation.svg" alt="" loading="lazy"/>
                        </div>
                        <div>
                            <img class="imagesliderdimension" src="<?php echo get_template_directory_uri(); ?>/assets/images/milstone.svg" alt="" loading="lazy"/>
                        </div>
                        <div>
                            <img class="imagesliderdimension" src="<?php echo get_template_directory_uri(); ?>/assets/images/gda.svg" alt="" loading="lazy"/>
                        </div>
                        <div>
                            <img class="imagesliderdimension" src="<?php echo get_template_directory_uri(); ?>/assets/images/cpec.svg" alt="" loading="lazy"/>
                        </div>
                        <div>
                            <img class="imagesliderdimension" src="<?php echo get_template_directory_uri(); ?>/assets/images/landmak.svg" alt="" loading="lazy"/>
                        </div>
                    </div>
                    <!-- control arrows -->
                    <div class="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    </div>
                    <div class="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        jQuery(document).ready(function($) {
    $('.responsive').slick({
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
        infinite: true,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,           
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
        ]
    });
});
        </script>