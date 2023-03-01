<?php 
header("Content-type: text/script");
?>

const navbar = document.querySelector("header nav");
const hamburgerMenu = document.querySelector("header .menu");
const hamburgerLine = document.querySelectorAll("header .menu .line");

hamburgerMenu.addEventListener("click", () => {
  navbar.classList.toggle("show");
    hamburgerLine.forEach((span) => {
      if(navbar.classList.contains('show')) {
        span.style.backgroundColor = 'white';
      } else {
        span.style.backgroundColor = '#1c1c1d';
      }
    })
});

function scrollWindow() {
  if (document.body.scrollBottom > 50 ||  document.documentElement.scrollTop > 50) {
    hamburgerMenu.classList.add('scroll');
  } else {
    hamburgerMenu.classList.remove('scroll');
  }
}


