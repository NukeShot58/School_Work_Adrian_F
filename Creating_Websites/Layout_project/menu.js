const btnShow = document.querySelector('#open');
const btnHide = document.querySelector('#close');
const mobileMenu = document.querySelector('.mm-mobile');

btnShow.addEventListener('click', () => {
    mobileMenu.classList.add('show');
    btnHide.classList.add('show');
});

btnHide.addEventListener('click', () => {
    mobileMenu.classList.remove('show');
    btnHide.classList.remove('show');
});