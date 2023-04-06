let header = document.querySelector("header");
let text = document.querySelector(".toplink");
let listlieux = document.querySelector("#parralax");
let buttonspot = document.querySelector("#ancreSpot");
let buttontitle = document.querySelector(".fa-circle-up");

if (buttonspot) {
  window.addEventListener("scroll", function () {
    let value = window.scrollY;

    text.style.top = 30 + value * -0.1 + "%";
    header.style.top = 0 + value * -0.1 + "%";
    buttonspot.style.top = 80 + value * -0.1 + "%";
    if (value > 100) {
      buttontitle.style.display = "block";
    } else {
      buttontitle.style.display = "none";
    }
  });
}