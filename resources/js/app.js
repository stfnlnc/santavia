import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const header = document.querySelector('header');

document.addEventListener('scroll', () => {
    if (window.scrollY > 300) {
        header.classList.add('bg-neutral-800')
        header.classList.remove('py-8')
        header.classList.add('py-4')
    } else {
        header.classList.remove('bg-neutral-800')
        header.classList.add('py-8')
        header.classList.remove('py-4')
    }
})

const menuOpen = document.querySelector('#menu-open');
const menuClose = document.querySelector('#menu-close');
const menu = document.querySelector('#menu');
const menuItems = document.querySelectorAll('.menu-item');

menuOpen.addEventListener('click', () => {
    menu.classList.toggle('translate-x-full');
})
menuClose.addEventListener('click', () => {
    menu.classList.toggle('translate-x-full');
})

menuItems.forEach(item => {
    item.addEventListener('click', () => {
        menu.classList.toggle('translate-x-full');
    })
})

