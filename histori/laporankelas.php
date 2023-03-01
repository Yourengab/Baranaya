<?php
session_start();
include 'functionhistori.php';

$kelas = $_POST['kelas'];
$angkatan = $_POST['angkatan'];

$dataSiswa = query("SELECT * FROM tb_siswa WHERE idkelas = '$kelas' ORDER BY nama ASC");
$dataRiwayat = query("SELECT * FROM tb_spp INNER JOIN tb_siswa USING(nis) WHERE idkelas = '$kelas' AND angkatan = '$angkatan' ORDER BY nama ASC");
$dataBulan = query("SELECT * FROM tb_spp WHERE angkatan = '$angkatan' GROUP BY bulan ORDER BY id");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/laporan.php">
    <title>Laporan</title>
</head>

<body>
    <h1>Laporan SPP Kelas <?= $kelas ?></h1>
    <div class="container">
        <table border="1" cellpadding="5">
            <tr>
                <th>Nama</th>
                <?php foreach ($dataBulan as $bulan) : ?>
                <th><?= $bulan['bulan']; ?></th>
                <?php endforeach; ?>
            </tr>
            <?php foreach($dataSiswa as $siswa) : ?>
            <tr>
                <td><?= $siswa['nama']; ?></td>
                <?php foreach($dataRiwayat as $riwayat) : ?>
                <?php if($siswa['nis'] == $riwayat['nis']) :?>
                <td>Rp<?= $riwayat['totalbayar']; ?></td>
                <?php endif; ?>
                <?php endforeach; ?>
            </tr>
            <?php endforeach; ?>
        </table>
        <h2>Total Bayar : Rp</h2>
        <div class="ttd">
            <p>Denpasar, <?= date('d-m-Y'); ?></p>
            <p><?= $_SESSION['namaPetugas']; ?></p>
        </div>
        <div class="layer"></div>
    </div>
    <script>
        window.print();
        window.onafterprint = () => history.back();
    </script>

</html>