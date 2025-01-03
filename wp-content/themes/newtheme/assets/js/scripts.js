/*Essential For the Bootstrap Desktop Menu to be able to click and go to the link of Pages*/
(() => {
  'use strict'

  const navbarToggle = document.querySelector('#navbarSideCollapse');
  if (navbarToggle) { // Check if the element exists
      navbarToggle.addEventListener('click', () => {
          const offcanvas = document.querySelector('.offcanvas-collapse');
          if (offcanvas) {
              offcanvas.classList.toggle('open');
          }
      });
  }
})();

/*Nav hide unhide*/
document.addEventListener('DOMContentLoaded', function () {
    let lastScrollTop = 0;
    const navbar = document.querySelector('.navbar');
    
    window.addEventListener('scroll', function () {
        const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

        if (currentScroll <= 10) {
            // When at the top, navbar has slight transparency
            navbar.classList.remove('navbar-hidden', 'navbar-black');
            navbar.classList.add('navbar-transparent');
        } else if (currentScroll > lastScrollTop) {
            // Scroll down, hide navbar
            navbar.classList.add('navbar-hidden');
            navbar.classList.remove('navbar-black', 'navbar-transparent');
        } else {
            // Scroll up, show navbar with black background
            navbar.classList.add('navbar-black');
            navbar.classList.remove('navbar-hidden', 'navbar-transparent');
        }

        lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // For mobile or negative scrolling
    });
});
