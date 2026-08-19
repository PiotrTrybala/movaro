
document.addEventListener("DOMContentLoaded", () => {

    const menuButton = document.querySelector(".c-header__menu-button");
    const closeButton = document.querySelector(".c-sidebar__header-button");
    const sidebar = document.querySelector(".l-overlay");

    menuButton.addEventListener('click', () => {
        sidebar.classList.add('l-overlay-active');
    });

    closeButton.addEventListener('click', () => {
        sidebar.classList.remove('l-overlay-active');
    })

});