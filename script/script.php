<?php header('Content-Type: text/javascript'); ?>
const navbar = document.querySelector("header nav");
const hamburgerMenu = document.querySelector("header .menu");
const hamburgerLine = document.querySelectorAll("header .menu .line");

hamburgerMenu.addEventListener("click", () => {
  navbar.classList.toggle("show");
  hamburgerLine.forEach((span) => {
    if (navbar.classList.contains("show")) {
      span.style.backgroundColor = "white";
    } else {
      span.style.backgroundColor = "#1c1c1d";
    }
  });
});

function scrollWindow() {
  if (document.body.scrollBottom > 50 || document.documentElement.scrollTop > 50) {
    hamburgerMenu.classList.add("scroll");
  } else {
    hamburgerMenu.classList.remove("scroll");
  }
}

// kalender
const months = [
  "Januari",
  "Februari",
  "March",
  "April",
  "Mei",
  "Juni",
  "Juli",
  "Agustus",
  "September",
  "Oktober",
  "November",
  "Desember",
];

const renderCalendar = (bulan) => {
  const date = new Date();
  const currYear = date.getFullYear();
  const currMonth = date.getMonth();
  const lastDateOfMonth = new Date(currYear, currMonth + 1, 0).getDate();
  return bulan.innerText = `${months[currMonth]} ${currYear}`;
};

const bulan = document.querySelector(".kalender header .current");
renderCalendar(bulan);
