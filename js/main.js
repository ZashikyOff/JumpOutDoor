let header = document.querySelector('header');
let text = document.querySelector('.toplink');
let city = document.querySelector('.imgforparralax');
console.log(header);
console.log(text);
console.log(city);

window.addEventListener('scroll', function(){
    let value = window.scrollY;

    text.style.top = 20 + value * -0.1 + '%';
    header.style.top = 0 + value * -0.1 + '%';
    city.style.top = 35 + value * -0.2 + '%';
})


