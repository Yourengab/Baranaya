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

// kalender
let bulan = document.querySelector(".kalender header .current");
let date = new Date();
let currYear = date.getFullYear();
let currMonth = date.getMonth();
console.log(bulan);

const months = ['Januari','Februari','March','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
const renderCalender = () => {
  let lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate();
  month.innerText = `${months[currMonth]} ${currYear}`;
}
renderCalender();
console.log(date,currMonth,currYear)

