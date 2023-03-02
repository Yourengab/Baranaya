<?php
include('../views/templates/header.php');
include('functionhistori.php');


$dataRiwayat = query("SELECT * FROM tb_spp INNER JOIN tb_siswa using(nis) INNER JOIN tb_kelas USING(idkelas) WHERE totalbayar > 0 ORDER BY tglbayar DESC");
if($_SESSION['level'] == "siswa") {
    $nis = $_SESSION['key'];
    $dataRiwayat = query("SELECT * FROM tb_spp INNER JOIN tb_siswa using(nis) INNER JOIN tb_kelas USING(idkelas) WHERE totalbayar > 0 AND nis=$nis ORDER BY tglbayar DESC");
}

$dataKelas = query("SELECT * FROM tb_kelas");

if ($_SESSION['level'] == "petugas" || $_SESSION['level'] == "admin") {
    if (isset($_GET['keyword'])) {
        if ($_GET['keyword'] == "") {
            $dataRiwayat = query("SELECT * FROM tb_spp INNER JOIN tb_siswa using(nis) INNER JOIN tb_kelas USING(idkelas) WHERE 
        totalbayar > 0 
        ORDER BY tglbayar DESC");
        } else {
            $keyword = $_GET['keyword'];
            $dataRiwayat = query("SELECT * FROM tb_spp INNER JOIN tb_siswa using(nis) INNER JOIN tb_kelas USING(idkelas) WHERE  
        totalbayar > 0 AND
        nis='$keyword' OR
        nama LIKE '%$keyword%' 
        AND totalbayar > 0 
        ORDER BY tglbayar DESC");
        }

        $tahunI = date("Y");
        $tahunII = date("Y", strtotime("+1 year"));
        $tahunIII = date("Y", strtotime("+2 years"));
        $tahunIIII = date("Y", strtotime("+3 years"));
    }
}
?>
<body>
  <div class="container petugas">
    <div class="containerHeading">
      <h1>Riwayat Pembayaran </h1>
      <p>Daftar riwayat pembayaran spp siswa</p>
      <?php if($_SESSION['level'] == "siswa") { ?>
      <?php } else { ?>
        <?php if ($_GET['keyword']  == "") { ?>
        <a href="laporan.php">Cetak Histori</a>
        <?php } else { ?>
          <a href="laporan.php?keyword=<?= $keyword ?>">Cetak Histori</a>
      <?php } ?>
      <?php } ?>
    </div>
    <div class="tableContainer histori">
      <?php if($_SESSION['level'] == "petugas" || $_SESSION['level'] == "admin") : ?>
      <form action="" method="get">
        <!-- Cari Siswa -->
        <div class="siswa">
        <div class="search">
          <label for="keyword">Cari histori siswa</label>
          <input type="text" id="keyword" name="keyword" placeholder="I Nyoman Suryadana" />
        </div>
        <button type="submit" name="cariSiswa">Cari</button>
      </div>
      </form>
      <form action="laporankelas.php" method="post">
        <!-- Cetak Sesuai Kelas -->
      <div class="kelas">
        <p>Cari sesuai kelas</p>
        <div class="search">
          <select name="kelas" required>
          <?php foreach ($dataKelas as $kelas) : ?>
            <option value="<?= $kelas['idkelas']; ?>"><?= $kelas['kelas']; ?></option>
          <?php endforeach; ?>
          </select>
          <select name="angkatan" required>
                <option value="I"><?= $tahunI ?>/<?= $tahunII ?></option>
                <option value="II"><?= $tahunII ?>/<?= $tahunIII ?></option>
                <option value="III"><?= $tahunIII ?>/<?= $tahunIIII ?></option>
          </select>
          <button type="submit" name="cariKelas">Cari</button>
        </div>
      </div>
      </form>
     <?php endif; ?>
      <table cellpadding="25">
        <thead>
          <tr>
            <th>No</th>
            <th>Petugas</th>
            <th>NIS Siswa</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Bulan</th>
            <th>Tanggal Bayar</th>
            <th>Total Bayar</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
        <?php foreach ($dataRiwayat as $riwayat) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $riwayat['petugas']; ?></td>
                <td><?= $riwayat['nis']; ?></td>
                <td><?= $riwayat['nama']; ?></td>
                <td><?= $riwayat['kelas']; ?></td>
                <td><?= $riwayat['bulan']; ?></td>
                <td><?= $riwayat['tglbayar']; ?></td>
                <td>Rp<?= $riwayat['totalbayar']; ?></td>
            </tr>
        <?php endforeach; ?>

        </tbody>
      </table>
    </div>
</div>
<?php
include('../views/templates/footer.php');

?>