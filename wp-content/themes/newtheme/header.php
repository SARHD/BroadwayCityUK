<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top ">
        <div class="container-fluid">
            <!-- Mobile and Desktop Logo -->
            <a class="navbar-brand" href="<?php echo home_url(); ?>" aria-label="Home" style="display: inline-block; width: auto; height: auto;">
    <svg xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" viewBox="0 0 609 375" style="width: 75px; height: 100%;" role="img" aria-label="Broadway City Logo">
        <title>Broadway City Logo</title>
        <path fill="#c9ae62" d="M400 202v-49l36-35-36-36V34h-48L320 2l-2-2-13 13-11-11-1-2-35 34h-49v49l-35 36 35 36v48h48l34 34 13-13 13 13 34-34h49zm0-56v-18l10-10-10-10V90l28 28-28 28zM345 34h-18l-18-18 9-9 27 27zm-37 186 18-18h18l-27 27-9-9zm49-181 14 14V39h-14zm19 19 19 19V39h-19v19zm19 100-19 20v19h19v-38zm-24 25-15 14h14v-14zm-70 37-18-18h-19l27 27 10-9zm-23-23-39-38v18l20 20h18zm-44-43-20-20v18l20 20v-19zm-25-25-10-10 10-10V91l-28 28 28 28v-18zm5-25 20-20V66l-20 19v19zm25-25 40-40h-19l-21 22v18zm45-45 18-18-9-9-27 27h18zm111 50-19-19v18l19 20V84zm-24-24-21-20h-18l39 38V60zm-66-40-14 14h28l-14-14zm-19 20-47 47v65l46 45h38l48-47V85l-46-45h-39zm-52 52-20 19v16l20 19V92zm-25 24-3 3 3 3v-6zm81 86 14 15 14-15h-28zm59-5 21-21v-19l-39 40h18zm27-26 19-20v-18l-19 19v19zm24-50v-6l3 3-3 3zm-148 76-13-13v13h13zm-18-18-20-19v37h20v-18zM214 78l20-19V39h-20v39zm25-24 14-15h-14v15zm156 56-19-20v55l19-19v-16zm2 175-17-22h8l12 16 12-16h8l-16 22v20h-8v-20zm-41 4-5-12-6 12h11zm-25 15 19-42h1l20 43h-8l-5-10h-15l-4 10h-8v-1zm-54 1-13-42h7l8 26 12-27h2l10 27 9-26h7l-14 43h-2l-11-29-13 29h-1l-1-1zm-49-35h-6v28h6c5 0 8-1 9-3 3-3 4-7 4-11s-1-8-3-10c-2-3-5-4-10-4zm-14 34v-41h14a19 19 0 0 1 15 6c3 4 5 9 5 15a23 23 0 0 1-5 16c-4 3-8 5-15 5h-14v-1zm-33-15-5-12-5 12h10zm-24 15 18-42h2l19 43h-8l-5-10h-15l-4 10h-8l1-1zm-27-30c-2-3-5-4-9-4s-7 1-9 4a16 16 0 0 0-3 10c0 4 1 8 3 11 2 2 5 4 9 4s7-2 9-4a16 16 0 0 0 4-11c0-4-2-8-4-10zm-23-6c4-3 8-6 14-6s11 3 14 6a25 25 0 0 1 0 32c-3 3-8 6-14 6a18 18 0 0 1-14-6 24 24 0 0 1-5-16c0-6 2-11 5-16zm-39 2h-9v12h9l4-2 1-4-1-5a5 5 0 0 0-4-1zm-16 34v-41h16c4 0 7 1 9 3l3 9c0 3 0 6-2 8a10 10 0 0 1-4 4l11 18h-8l-10-17h-8v17h-7v-1zm-34-34H7v10h12l3-1 1-3-1-4-4-2zm1 16H7v12h11l5-2 1-4a7 7 0 0 0-1-5 5 5 0 0 0-4-1zM0 304v-41h18c4 0 7 1 9 3s3 5 3 9l-1 5a9 9 0 0 1-3 3 12 12 0 0 1 5 10 13 13 0 0 1-3 9c-2 2-5 3-9 3H0zm586-19-17-22h8l12 16 12-16h8l-16 22v20h-7v-20zm-61-16v-6h31v7h-12v35h-7v-35h-12v-1zm-25 35v-41h7v42h-7v-1zm-26-40 7 4 1 1-4 6-1-1a19 19 0 0 0-5-3l-6-2c-4 0-7 2-9 4-3 3-4 6-4 11 0 4 1 8 4 11a13 13 0 0 0 16 2l3-4 1-1 5 4v1c-1 3-4 5-6 6a20 20 0 0 1-10 3c-6 0-11-2-15-6a23 23 0 0 1-5-16 22 22 0 0 1 5-16c4-4 9-6 15-6l8 2zm-49 75h-8v12h8l4-2 2-4-2-4a5 5 0 0 0-4-2zm-16 35v-42h17c4 0 7 1 9 3a13 13 0 0 1 3 9l-2 7-4 5 11 19h-9l-9-18h-8v17h-8zm-24-16-5-12-5 12h10zm-24 15 18-42h2l19 43h-8l-5-10h-15l-4 10h-8l1-1zm-27-34h-7v28h7c4 0 7-1 9-3 2-3 3-7 3-11s-1-8-3-10c-2-3-5-4-9-4zm-14 35v-42h14c6 0 11 2 14 5a25 25 0 0 1 0 32 19 19 0 0 1-14 5h-14zm-24-16-6-12-5 12h11zm-25 15 19-42h1l19 43h-8l-4-10h-15l-5 10h-7v-1zm-45 1-14-42h8l8 26 12-26h1l11 26 9-26h7l-14 43h-2l-12-29-12 29h-2v-1zm-39-19v-5h18v2l1 3c0 6-2 11-5 14a18 18 0 0 1-14 6 19 19 0 0 1-14-6 23 23 0 0 1-6-16 21 21 0 0 1 21-21 23 23 0 0 1 14 5h1l-4 6c-4-3-7-4-11-4s-8 1-10 4c-2 2-4 6-4 10 0 5 1 8 4 11a12 12 0 0 0 9 4c4 0 7-2 9-4 1-2 3-5 3-8h-12v-1z"/>
    </svg>
</a>



            <!-- Mobile Menu Toggle Button -->
<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>


            <!-- Offcanvas Menu Mobile Slide Menu -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <img class="Mobile-menu-logo-nav" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo1.svg" alt="Logo">
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <?php
                    // Dynamic WordPress Menu
                    wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'menu_class'     => 'navbar-nav justify-content-end flex-grow-1 pe-3',
                        'container'      => false,
                        'depth'          => 2,
                        'fallback_cb'    => false,
                    ));
                    ?>
                    <!-- CTA Button -->
                    <div class="cta-button">
                        <a href="<?php echo esc_url( home_url( '/cash-back/' ) ); ?>" class="button">50% Cashback Offer</a>
                    </div>

                    <div class="mobile-address">
                      <p class="broadway-textmob">Broadway City (UK) Ltd</b></p>
                      <p class="broadway-textmob1">The Future Works,<br>2 Brunel Way, <br>SLOUGH, <br>SL1 1FQ</p>
                    </div>
                </div>
            </div>
    </nav>
    </div>
    <script>
document.addEventListener('DOMContentLoaded', function () {
    function handleDropdowns() {
        const menuItems = document.querySelectorAll('.navbar-nav .menu-item-has-children');

        // Mobile and tablet functionality for screen widths <= 1024px
        if (window.innerWidth <= 1024) {
            menuItems.forEach(function (menuItem) {
                const menuLink = menuItem.querySelector('a');
                const subMenu = menuItem.querySelector('.sub-menu');
                
                menuLink.addEventListener('click', function (e) {
                    const clickPosition = this.offsetWidth - e.offsetX;

                    // Only trigger the submenu if clicking the icon area (right part)
                    if (clickPosition < 0) { //clickable area
                        e.preventDefault(); // Prevent link navigation when icon area is clicked

                        const allSubMenus = document.querySelectorAll('.sub-menu');
                        allSubMenus.forEach(function (s) {
                            if (s !== subMenu) s.style.display = 'none'; // Close other submenus
                        });

                        if (subMenu.style.display === 'block') {
                            subMenu.style.display = 'none'; // Close the submenu
                        } else {
                            subMenu.style.display = 'block'; // Open the clicked submenu
                        }
                    } 
                });
            });

            // Remove hover behavior for mobile and tablet
            menuItems.forEach(function (menuItem) {
                menuItem.removeEventListener('mouseenter', handleMouseEnter);
                menuItem.removeEventListener('mouseleave', handleMouseLeave);
            });
        } else {
            // For desktop, use hover to open the dropdown
            menuItems.forEach(function (menuItem) {
                menuItem.addEventListener('mouseenter', handleMouseEnter);
                menuItem.addEventListener('mouseleave', handleMouseLeave);
            });

            // Disable click for submenu toggle on desktop
            menuItems.forEach(function (menuItem) {
                const menuLink = menuItem.querySelector('a');
                menuLink.removeEventListener('click', function () {});
            });
        }
    }

    function handleMouseEnter() {
        const subMenu = this.querySelector('.sub-menu');
        if (subMenu) subMenu.style.display = 'block';
    }

    function handleMouseLeave() {
        const subMenu = this.querySelector('.sub-menu');
        if (subMenu) subMenu.style.display = 'none';
    }

    // Trigger the function on window resize and on page load
    window.addEventListener('resize', handleDropdowns);
    handleDropdowns();
});
</script>

    <?php wp_footer(); ?>

</body>
</html>
