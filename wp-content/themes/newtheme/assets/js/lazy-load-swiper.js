document.addEventListener('DOMContentLoaded', function () {
    const swiperContainer = document.querySelector('.swiper-container');
    if (!swiperContainer) return; // Exit if no Swiper container exists

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const swiperScript = document.createElement('script');
                swiperScript.src = 'https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.js';
                swiperScript.onload = function () {
                    // Initialize Swiper after the script is loaded
                    new Swiper('.swiper-container', {
                        loop: true,
                        autoplay: {
                            delay: 3000,
                        },
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },
                    });
                };
                document.body.appendChild(swiperScript);
                observer.disconnect(); // Stop observing after loading the script
            }
        });
    });

    observer.observe(swiperContainer);
});
