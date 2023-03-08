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
  "Maret",
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
const days = [
  "Minggu",
  "Senin",
  "Selasa",
  "Rabu",
  "Kamis",
  "Jumat",
  "Sabtu"
];

let date = new Date(),
hari = date.getDay();
tanggal = date.getDate();
bulan = date.getMonth();
tahun = date.getFullYear();
console.log(bulan)
const showDate = document.querySelector(".kalender-main h1");
const showMonth = document.querySelector(".kalender-main p");

function renderKalender() {
  showDate.innerText = `${days[hari]}`
  showMonth.innerText = `${tanggal} ${months[bulan]} ${tahun}`
}
renderKalender();