let header = document.querySelector('header');
let text = document.querySelector('.toplink');
let listlieux = document.querySelector('#parralax');
let buttonspot = document.querySelector('#ancreSpot');


window.addEventListener('scroll', function(){
    let value = window.scrollY;

    text.style.top = 40 + value * -0.1 + '%';
    header.style.top = 0 + value * -0.1 + '%';
    buttonspot.style.top = 80 + value * -0.1 + '%';
})


