// jquey for toggle dropdown menu
$(document).ready(function () {
    if ($(window).width() < 1023) {
        $('.header_menu-subbtn').click(function () {
            $(this).next('.header_submenu-list').slideToggle();
        });

        // Click show/hidden menu for mobile
        var menuList = document.querySelector('.header_menu-list');
        var menuCloseBtn = document.querySelector('.close_menu-btn');
        var menuOpenBtn = document.querySelector('.open_menu-btn');
        var overlayBtn = document.querySelector('.overlay_menu-btn');

        menuOpenBtn.addEventListener('click', () => {
            menuList.classList.add('active');
            overlayBtn.classList.add('active');
        });
        menuCloseBtn.addEventListener('click', () => {
            menuList.classList.remove('active');
            overlayBtn.classList.remove('active');
        });
        overlayBtn.addEventListener('click', () => {
            menuList.classList.remove('active');
            overlayBtn.classList.remove('active');
        });
    }
});
