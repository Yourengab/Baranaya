<?php 
header("Content-type: text/css");
?>

@import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap");

:root {
  --main: #1c1c1d;
  --second: #6b26fd;
  --border: #a9a9a9;
  --text-dimmed: #7e7e7e;
  --success: #5cd27d;
  --danger: #fd5e5e;
}

* {
  font-family: "Inter";
  box-sizing: border-box;
}

body {
  margin: 0;
  padding: 0;
}

/* Header */
header {
  margin-top: 30px;
  padding: 0 50px;
  height: 50px;
  background-color: white;

}
header .menu {
  cursor: pointer;
  position: fixed ;
  z-index: 10;
  transition: .3s ease-in-out;

}

header .menu.scroll {
  background-color: var(--second);
  padding: 10px 15px;
  border-radius: 10px;
 
}

header .menu span {
  display: inline-block;
  width: 45px;
  height: 5px;
  background-color: var(--main);
  display: flex;
  flex-direction: column;
  margin-top: 10px;
  border-radius: 5px;
  margin-bottom: 10px;
}
header .menu .line.white {
  background-color: white;
}

nav {
  position: fixed;
  z-index: 4;
  top: 0;
  left: 0;
  padding: 0 80px 0 20px;
  height: 100vh;
  background-color: var(--main);
  transform: translateX(-100%);
  visibility: none;
  transition: 0.5s ease-in-out;
}

nav.show {
  transform: translateX(0%);
  visibility: visible;
}
nav span {
  margin-left: 30px;
  margin-top: 150px;
  display: inline-block;
  width: 100%;
  height: 3px;
  background-color: white;
  border-radius: 10px;
}

nav .links {
  display: flex;
  flex-direction: column;
}

nav .links ul li {
  margin-left: -10px;
  list-style: none;
  margin-top: 25px;
  font-size: 18px;
}

nav .links ul li a {
  color: white;
  text-decoration: none;
}

nav .links .navFooter a {
  margin-top: 150px;
  display: inline-block;
  font-size: 18px;
  background-color: #6b26fd;
  text-decoration: none;
  color: wheat;
  width: 120%;
  margin-left: -10px;
  text-align: center;
  line-height: 40px;
  height: 40px;
  border-radius: 20px;
}

nav .links .navFooter p {
  text-align: center;
  margin-left: 15px;
  color: var(--text-dimmed);
}

/* Footer */

footer {
  display: flex;
  gap: 120px;
  width: 100%;
  height: 150px;
  background-color: #1c1c1d;
  padding: 20px 0;
  color: white;
  margin-top: 100px;
}

footer .footerText {
  width: 20%;
  margin-left: 50px;
}

footer p {
  color: var(--text-dimmed);
}

/* Dashboard */
.dash-container{
  width: 100%;
  /* background-color: #6b26fd; */
}

.dash-container .dash-head{
  display: grid;
  grid-template-columns: 2fr 1fr;
  /* width: fit-content; */
  /* gap: 10px; */
  padding: 30px 50px 40px;
}

.dash-container .dash-head .head-left{
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.dash-container .dash-head .head-left p{
  color: var(--text-dimmed);
  font-weight: 600;
}

.dash-container .dash-head .head-left .data-box{
  width: 90%;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 16px;
}

.dash-container .dash-head .head-left .data-box .data{
  background-color: var(--second);
  border-radius: 16px;
  padding: 20px 10px;
  display: flex;
  align-items: center;
  justify-content: space-evenly;
  gap: 10px;
}

.dash-container .dash-head .head-left .data-box .data img{
  width: 50px;
}

.dash-container .dash-head .head-left .data-box .data .line{
  width: 2px;
  height: 100%;
  background-color: var(--main);
}

.dash-container .dash-head .head-left .data-box .data .count{
  display: flex;
  flex-direction: column;
}

.dash-container .dash-head .head-left .data-box .data .count span{
  color: #fff;
  font-size: 1rem;
}
.dash-container .dash-head .head-left .data-box .data .count span:first-child{
  font-size: 1.5rem;
  font-weight: 600;
}

.dash-container .dash-head .head-right{
  display: flex;
  flex-direction: column;
}

.dash-container .dash-head .head-right p{
  font-weight: 600;
}

.dash-container .dash-head .head-right .kalender{
  width: 100%;
  height: 250px;
  border-radius: 20px;
  box-shadow: 0px 8px 24px rgba(0, 0, 0, 0.20);
}

.dash-container .dash-motivation{
  margin-top: 30px;
  display: flex;
  flex-direction: column;
  gap: 16px;
  background-color: #1c1c1d;
  border-radius: 50px 50px 0px 0px;
  padding: 20px 50px;
}

.dash-container .dash-motivation > p{
  color: #fff;
  font-size: 20px;
}

.dash-container .dash-motivation .motiv-box{
  display: grid;
  grid-template-columns: repeat(3, 1fr);
}

.dash-container .dash-motivation .motiv-box .motiv span{
  background-color: var(--second);
  border-radius: 50%;
  padding: 5px 10px;
  color: #fff;
}

.dash-container .dash-motivation .motiv-box .motiv p{
  color: var(--text-dimmed);
}

/* Table */
.container {
  padding: 0 50px;
  margin-top: 50px;
}

.container .containerHeading {
  width: 20%;
  color: var(--main);
}

.container .containerHeading p {
  color: var(--text-dimmed);
}

.container .containerHeading a {
  display: inline-block;
  padding: 13px 32px;
  background-color: var(--second);
  color: white;
  text-decoration: none;
  border-radius: 50px;
}

.container .tableContainer {
  display: flex;
  flex-direction: column;
  align-items: flex-end;
}

.container .tableContainer form {
  display: flex;
  align-items: center;
  gap: 10px;
  margin-bottom: 50px;
}

.container .tableContainer form .search {
  flex-direction: column;
  display: flex;
  gap: 20px;
}

.container .tableContainer form input {
  width: 320px;
  padding: 10px 20px;
  border-radius: 10px;
  border: 1px solid var(--border);
}

.container .tableContainer form button {
  margin-top: 38px;
  padding: 11px 20px;
  border-radius: 10px;
  border: none;
  background-color: var(--second);
  color: white;
  cursor: pointer;
}

.container .tableContainer table {
  border-collapse: collapse;
  width: 100%;
  text-align: left;
  border-radius: 10px;
  overflow: hidden;
  filter: drop-shadow(0px 4px 24px rgba(0, 0, 0, 0.20));
}

.container .tableContainer table thead {
  color: white;
  background-color: var(--main);
}

.container .tableContainer table thead tr {
  font-weight: 500;
  font-size: 20px;
}

.container .tableContainer table tbody tr {
  font-size: 18px;
  cursor: pointer;
}

.container .tableContainer table tbody tr:nth-child(odd) {
  background-color: #f1f1f1;
  transition: 0.4s ease-in;


}
.container .tableContainer table tbody tr:nth-child(even) {
  background-color: #e7e7e7;
  transition: 0.4s ease-in;


}

.container .tableContainer table .button a:nth-child(odd) {
  display: inline-block;
  text-decoration: none;
  color: white;
  padding: 8px 32px;
  border-radius: 20px;
  background-color: var(--second);
  margin-right: 10px;
}
.container .tableContainer table .button a:nth-child(even) {
  display: inline-block;
  text-decoration: none;
  color: white;
  padding:  8px;
  border-radius: 20px;
  background-color: var(--danger);


}

.container .tableContainer table tbody tr:nth-child(odd):hover {
transform: scale(1.02);
}

.container .tableContainer table tbody tr:nth-child(even):hover {
transform: scale(1.02);


}

.container .tableContainer table .button a img {
  margin-bottom: -3px;
}

.tambah {
  width: 100%;
}

.tambah .tambahForm {
  display: flex;
  align-items: center;
  flex-direction: column;
  background: url(../asset/addbg.png);
  border-radius: 40px;
  filter: drop-shadow(0px 4px 24px rgba(0, 0, 0, 0.20));
  transition: .3s ease-in-out;

  
}

.tambah .tambahForm:hover {
  border-radius: 20px;


}

.tambah .tambahForm form {
  color: white;
  text-align: center;
  width: 500px;
  padding: 40px 40px;
  background-color: var(--main);
  /* border-radius: 20px; */
  border-left: 1px solid var(--border);
  border-right: 1px solid var(--border);
}

.tambah .tambahForm .short {
  display: flex;
  gap: 10px;

}

.tambah .tambahForm form button {
  margin-top: 20px;
  height: 40px;
  border-radius: 10px;
  background-color: var(--success);
  border: none;
  font-size: 16px;
  cursor: pointer;
  width: 100%;

}

.tambah .tambahForm form input,.tambah .tambahForm form select {
  height: 40px;
  border: 1px solid var(--border);
  background: transparent;
  border-radius: 10px;
  color: var(--border);
  padding: 0 20px;
}

.tambah .tambahForm form label {
  margin-bottom: 15px;
}

.tambah .tambahForm .short  input {
  width: 205px;
}

.tambah .tambahForm .short, .tambah .tambahForm .long {
  margin-top: 30px;
}

.tambah .tambahForm .shortContent,.tambah .tambahForm .long {
  text-align: left;
  display: flex;
  flex-direction: column;
}

.searchSiswa {
  padding: 0 50px;
  display: flex;
  justify-content: space-between;
  margin-top: 50px;
}

.container .angkatan {
  width: 120px;
  height: 45px;
  margin-bottom: 20px;
  border-radius: 10px;
  border: none;
  background-color: var(--second);
  color: white;
  font-weight: 500;
  margin-right: 5px;
  cursor: pointer;
}

.profilSiswa {
  margin-right: 10px;
  box-shadow: 0px 8px 24px rgba(0, 0, 0, 0.15);
  padding: 10px 30px;
  border-radius: 20px;
}

.profilSiswa h3  {
  font-size: 24px;
}

.profilSiswa  .nisKelas{
display: flex;
justify-content: space-between;
gap: 30px;
}

.searchSiswa p {
  margin-top: -10px;
  color: var(--text-dimmed);
}

.profilSiswa p {
  background-color: #F1F1F1;
  padding: 10px 40px;
  border:  1px solid var(--border);
  border-radius: 10px;
  color: var(--main);
}

.searchSiswa form {
  margin-top: 10px;
}

.searchSiswa form input {
width: 350px;
height: 40px;
padding: 10px 20px;
border-radius: 10px;
border: 1px solid var(--border);
}

.searchSiswa form button {
  height: 40px;
  padding: 0 30px;
  background-color: var(--second);
  border: none;
  border-radius: 10px;
  color: white;
  margin-left: 10px;
}

.container table .bayar {
  display: inline-block;
  width: 130px;
  height: 45px;
  line-height: 45px;
  background-color: var(--success);
  text-align: center;
  text-decoration: none;
  color: white;
  border-radius: 50px;
}


.petugas .histori  {
  margin-top: 40px;
  flex-direction: column;
  align-items: flex-start ;
}

.petugas .tableContainer .siswa {
  display: flex;
   gap: 10px;
}

.petugas .tableContainer .kelas button {
  background-color: var(--main);
}

.petugas .tableContainer .kelas .search {
  display: flex;
  flex-direction: row;
  align-items: flex-end;
  margin-top: -35px;
}

.petugas .tableContainer .kelas .search select {
  height: 40px;
  width: 100px;
  border-radius: 10px;
  padding: 10px 20px;
}