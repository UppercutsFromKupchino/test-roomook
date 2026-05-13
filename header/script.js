document.addEventListener('DOMContentLoaded', () => {
    const windowWidth = window.innerWidth;
    const buttonApplication = document.querySelector('.button-application');
    buttonApplication.addEventListener('click', () => {
        alert('Здесь должна быть подача заявки');
    })

    if(windowWidth < 1024) {
        const header = document.querySelector('header');
        const menuContainer = document.getElementById('menu-container');
        const menuButtons = menuContainer.querySelectorAll('img');
        const main = document.querySelector('main');
        const footer = document.querySelector('footer');
        
        menuContainer.addEventListener('click', () => {
            menuButtons.forEach((element) => {
                element.classList.toggle('active');
            });
            header.classList.toggle('open-menu-mobile');
            main.classList.toggle('open-menu-mobile');
            footer.classList.toggle('open-menu-mobile');
        });
    }
});