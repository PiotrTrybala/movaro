
document.addEventListener("DOMContentLoaded", () => {

    const menuButton = document.querySelector(".c-header__menu-button");
    const closeButton = document.querySelector(".c-sidebar__header-button");
    const overlay = document.querySelector(".l-overlay");

    console.log(menuButton);

    menuButton.addEventListener('click', () => {
        console.log('active overlay');
        overlay.classList.add('active');
    });

    closeButton.addEventListener('click', () => {
        console.log('not active overlay');
        overlay.classList.remove('active');
    });
});