let header = document.querySelector('header');
let text = document.querySelector('.toplink');

window.addEventListener('scroll', function(){
    let value = window.scrollY;

    text.style.top = 40 + value * -0.1 + '%';
    header.style.top = 0 + value * -0.1 + '%';
})


