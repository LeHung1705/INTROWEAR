document.addEventListener('DOMContentLoaded', function() {
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const responsiveNav = document.querySelector('.header-bottom.responsive-nav');

    if (hamburgerMenu && responsiveNav) {
        hamburgerMenu.addEventListener('click', function() {
            responsiveNav.classList.toggle('open'); // Toggle class 'open' để hiển thị/ẩn menu
        });
    }
});