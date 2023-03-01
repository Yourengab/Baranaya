<?php
session_start();
include 'functionhistori.php';

if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
    $dataRiwayat = query("SELECT * FROM tb_spp INNER JOIN tb_siswa using(nis) INNER JOIN tb_kelas USING(idkelas) WHERE totalbayar > 0 AND nis = '$keyword' OR nama LIKE '%$keyword%' AND totalbayar IS NOT NULL ORDER BY tglbayar DESC");

    $totalBayar = query("SELECT SUM(totalbayar) FROM tb_spp INNER JOIN tb_siswa using(nis) INNER JOIN tb_kelas USING(idkelas) WHERE totalbayar > 0 AND nis = '$keyword' OR nama LIKE '%$keyword%' AND totalbayar IS NOT NULL ORDER BY tglbayar DESC")[0];
} else {
    $dataRiwayat = query("SELECT * FROM tb_spp INNER JOIN tb_siswa using(nis) INNER JOIN tb_kelas USING(idkelas) WHERE totalbayar > 0 ORDER BY tglbayar DESC");
}
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
    <h1>Laporan SPP</h1>
    <div class="container">
        <table border="1" cellpadding="5">
            <tr>
                <th>Petugas</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Bulan</th>
                <th>Tanggal Bayar</th>
                <th>Total Bayar</th>
            </tr>
            <?php foreach ($dataRiwayat as $riwayat): ?>
                <tr>
                    <td>
                        <?= $riwayat['petugas']; ?>
                    </td>
                    <td>
                        <?= $riwayat['nis']; ?>
                    </td>
                    <td>
                        <?= $riwayat['nama']; ?>
                    </td>
                    <td>
                        <?= $riwayat['kelas']; ?>
                    </td>
                    <td>
                        <?= $riwayat['bulan']; ?>
                    </td>
                    <td>
                        <?= $riwayat['tglbayar']; ?>
                    </td>
                    <td>
                        <?= $riwayat['totalbayar']; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
        </table>
        <h2>Total Bayar: Rp<?= number_format($totalBayar['SUM(totalbayar)'], 0, ',', '.'); ?></h2>
        <div class="ttd">
            <p>Denpasar,
                <?= date('d-m-Y'); ?>
            </p>
            <p><?= $_SESSION['namaPetugas']; ?></p>
        </div>
        <div class="layer"></div>
    </div>
    <script>
    window.print();
    window.onafterprint = () => history.back();
    </script>

</html>