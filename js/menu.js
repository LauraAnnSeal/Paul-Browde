const burgerNav = document.querySelector('#menu-btn')
const closeNav = document.querySelector('#menu-close')
const wrapper = document.querySelector('#wrapper')
const menu = document.querySelector('#menu')
let isOpen = false;

const openMenu = () => {
    wrapper.style.right = '0';
    wrapper.style.opacity = '1';
    menu.style.right = '0';
    menu.style.opacity = '1';
    isOpen = true;
}

const closeMenu = () => {
    wrapper.style.right = '-100vw';
    wrapper.style.opacity = '0';
    menu.style.right = '-100vw';
    menu.style.opacity = '0';
    isOpen = false;
}

burgerNav.addEventListener('click', () => {
    openMenu();
})
closeNav.addEventListener('click', () => {
    closeMenu();
})
wrapper.addEventListener('click', () => {
    closeMenu();
})