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
                <h1>Kalender</h1>
                <div class="kalender">
                    <div class="banner">
                        <img src="../asset/kalender.jpg">
                    </div>
                    <div class="kalender-main">
                        <h1>Senin</h1>
                        <p>20 Maret 2023</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="dash-motivation">
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
    </div> -->
<?php
include('../views/templates/footer.php');
?>
</body>
</html>