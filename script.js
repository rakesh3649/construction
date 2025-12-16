let loginForm = document.querySelector('.login-form');
let contactInfo = document.querySelector('.contact-info');
let menuBtn = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

document.querySelector('#login-btn').onclick = () => {
   loginForm.classList.toggle('active');
   navbar.classList.remove('active');
};

document.querySelector('#info-btn').onclick = () => {
   contactInfo.classList.add('active');
};

document.querySelector('#close-contact-info').onclick = () => {
   contactInfo.classList.remove('active');
};

menuBtn.onclick = () => {
   navbar.classList.toggle('active');
};
