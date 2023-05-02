const menuHamburger = document.querySelector(".mobile-bar");
const closemenuHamburger = document.querySelector(".mobile-bar-close");
const navLinks = document.querySelector(".mobile-menu");

menuHamburger.addEventListener('click', () => {
    navLinks.classList.add('op');
    navLinks.classList.add('no-scroll');
    document.body.classList.add('no-scroll');
});
closemenuHamburger.addEventListener('click', () => {
    navLinks.classList.remove('op');
    navLinks.classList.remove('no-scroll');
    document.body.classList.remove('no-scroll');
});