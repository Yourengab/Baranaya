<?php 
include('../views/templates/header.php');
include('functiondashboard.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div class="dash-container">
        <div class="dash-head">
            <div class="head-left">
                <h1>Hallo👋, Suryadana Selamat Datang, Semangat Kerjanya!🔥😍</h1>
                <p>Total data yang ada di Dashboard</p>
                <div class="data-box">
                    <div class="data">
                        <!-- Icon Here -->
                        <div class="line"></div>
                        <div class="count">
                            <span>120</span>
                            <span>Data Siswa</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="head-right">
                <p>Kalender</p>
                <div class="box-kalender"></div>
            </div>
        </div>

        <div class="dash-motivation">
            <p>Kata-kata untuk hari ini</p>
            <div class="motiv-box">
                <div class="motiv">
                    <span>1</span>
                    <p>Taukah kamu? orang-orang yang bekerja di kantor yang diatur dengan baik oleh atasanya cenderung lebih produktif daripada mereka yang bekerja di lingkungan yang kacau.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>