let search = document.querySelector('.search-box');
let menuIcon = document.querySelector('#menu-icon');
let searchIcon = document.querySelector('#search-icon');
let menu = document.querySelector('.navber');
let header = document.querySelector('header');

searchIcon.onclick = () => {
    search.classList.toggle('active');
    menu.classList.remove('active');
}

menuIcon.onclick = () => {
    menu.classList.toggle('active');
    search.classList.remove('active');
}

window.onscroll = () => {
    menu.classList.remove('active');
    search.classList.remove('active');
}

window.addEventListener('scroll', () => {
    header.classList.toggle('shadow', window.scrollY > 0);
});
