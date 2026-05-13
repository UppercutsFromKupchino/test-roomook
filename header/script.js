document.addEventListener('DOMContentLoaded', () => {
    const windowWidth = window.innerWidth;

    if(windowWidth < 1024) {
        const header = document.querySelector('header');
        const menuContainer = document.getElementById('menu-container');
        const menuButtons = menuContainer.querySelectorAll('img');
        
        menuContainer.addEventListener('click', () => {
            menuButtons.forEach((element) => {
                element.classList.toggle('active');
            });
            header.classList.toggle('open-menu-mobile');
        });
    }
});