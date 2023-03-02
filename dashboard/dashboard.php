<?php
include('../views/templates/header.php');
include('functiondashboard.php');

$dataSiswa = query("SELECT * FROM tb_siswa");
$user = $_SESSION['namaPetugas'];
?>
<body>
    <div class="dash-container">
        <div class="dash-head">
            <div class="head-left">
                <h1>Hallo <?= $user; ?>👋,  Selamat Datang,<br> Di Dashboard!🔥😍</h1>
                <p>Total data yang ada di Dashboard</p>
                <div class="data-box">
                    <div class="data">
                        <img src="../asset/siswa.svg" alt="">
                        <div class="line"></div>
                        <div class="count">
                            <?php $totalSiswa = query("SELECT COUNT(*) FROM tb_siswa")[0] ?>
                            <span><?= $totalSiswa['COUNT(*)']; ?></span>
                            <span>Data Siswa</span>
                        </div>
                    </div>
                    <div class="data">
                        <img src="../asset/petugas.svg" alt="">
                        <div class="line"></div>
                        <div class="count">
                        <?php $totalPetugas = query("SELECT COUNT(*) FROM tb_petugas")[0] ?>
                            <span><?= $totalPetugas['COUNT(*)']; ?></span>
                            <span>Data Petugas</span>
                        </div>
                    </div>
                    <div class="data">
                        <img src="../asset/histori.svg" alt="">
                        <div class="line"></div>
                        <div class="count">
                            <?php $totalHistori = query("SELECT COUNT(*) FROM tb_spp WHERE totalbayar > 0")[0] ?>
                            <span><?= $totalHistori['COUNT(*)']; ?></span>
                            <span>Histori Pembayaran</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="head-right">
                <p>Kalender</p>
                <div class="kalender">
                    <header>
                        <div class="current">September 2023</div>
                        <div class="navigasi-kalender">
                            <img src="../asset/kiri.svg">
                            <img src="../asset/kanan.svg">
                        </div>
                    </header>
                    <div class="kalender-main">
                        <ul class="minggu">
                            <li>Min</li>
                            <li>Sen</li>
                            <li>Sel</li>
                            <li>Rab</li>
                            <li>Kam</li>
                            <li>Jum</li>
                            <li>Sabt</li>
                        </ul>
                        <ul class="hari">
                            <li>28</li>
                            <li>29</li>
                            <li>30</li>
                            <li>31</li>
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                            <li>6</li>
                            <li>7</li>
                            <li>8</li>
                            <li>9</li>
                            <li>10</li>
                            <li>11</li>
                            <li>12</li>
                            <li>13</li>
                            <li>14</li>
                            <li>15</li>
                            <li>16</li>
                            <li>17</li>
                            <li>18</li>
                            <li class="active">19</li>
                            <li>20</li>
                            <li>21</li>
                            <li>22</li>
                            <li>23</li>
                            <li>24</li>
                            <li >25</li>
                            <li>26</li>
                            <li>27</li>
                            <li>28</li>
                            <li>29</li>
                            <li class="inactive">30</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="dash-motivation">
            <p>Kata - kata untuk hari ini</p>
            <div class="motiv-box">
                <div class="motiv">
                    <span>1</span>
                    <p>Taukah kamu? orang-orang yang bekerja di kantor yang diatur dengan baik oleh atasanya cenderung lebih produktif daripada mereka yang bekerja di lingkungan yang kacau.</p>
                </div>
                <div class="motiv">
                    <span>2</span>
                    <p>Apa yang dilakukan seorang pekerja kantoran ketika dia merasa kesepian? Dia menghubungi IT-self😂!</p>
                </div>
                <div class="motiv">
                    <span>3</span>
                    <p>Bekerja keras tidak selalu menghasilkan hasil yang baik, tapi bekerja cerdas pasti akan menghasilkan hasil yang baik.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>