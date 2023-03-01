<?php
include '../views/templates/header.php';
include 'functionbayar.php';

if (isset($_GET['cariSiswa'])) {
    $nis = $_GET['nis'];
    $dataSiswa = query("SELECT * FROM tb_siswa INNER JOIN tb_kelas using(idkelas) WHERE nis=$nis");

    $dataSpp = query("SELECT * FROM tb_spp WHERE nis=$nis AND angkatan='I'");
    // Pilih angkatan Spp
    if (isset($_POST['angkatanSiswaI'])) {
        $dataSpp = query("SELECT * FROM tb_spp WHERE nis=$nis AND angkatan='I'");
    } elseif (isset($_POST['angkatanSiswaII'])) {
        $dataSpp = query("SELECT * FROM tb_spp WHERE nis=$nis AND angkatan='II'");
    } else {
        $dataSpp = query("SELECT * FROM tb_spp WHERE nis=$nis AND angkatan='III'");
    }

    $tahunI = date("Y");
    $tahunII = date("Y", strtotime("+1 year"));
    $tahunIII = date("Y", strtotime("+2 years"));
    $tahunIIII = date("Y", strtotime("+3 years"));
}
?>
<body>
  . 
  <div class="searchSiswa">
    <div class="search">
    <h1>Bayar SPP</h1>
    <p>Bayar Spp siswa dengan nis</p>
    <form action="" method="get">
      <input type="text" id="nis" name="nis" placeholder="Cari nis siswa" required/>
      <button type="submit" name="cariSiswa">Cari</button>
    </div>
    </form>
    <?php if(isset($_GET['cariSiswa'])) : ?>
    <div class="profilSiswa">
      <?php foreach($dataSiswa as $siswa) : ?>
      <h3>Profil Siswa</h3>
      <div class="nama">
        <h4>Nama</h4>
        <p><?= $siswa['nama'] ?></p>
      </div>
      <div class="nisKelas">
        <div class="nis">
          <h4>Nis</h4>
          <p><?= $siswa['nis'] ?></p>
        </div>
        <div class="kelas">
          <h4>Kelas</h4>
          <p><?= $siswa['kelas'] ?></p>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
    <?php endif; ?>
  </div>
  <body>
    <?php if(isset($_GET['cariSiswa'])) : ?>
    <div class="container siswa">
    <form action="" method="post">
      <p>Pilih Angkatan :</p>
      <button class="angkatan" name="angkatanSiswaI"><?= $tahunI ?>/<?= $tahunII ?></button>
      <button class="angkatan" name="angkatanSiswaII"><?= $tahunII ?>/<?= $tahunIII ?></button>
      <button class="angkatan" name="angkatanSiswaIII"><?= $tahunIII ?>/<?= $tahunIIII ?></button>
    </form>
      <div class="tableContainer">
        <table cellpadding="25">
          <thead>
            <tr>
              <th>No</th>
              <th>Bulan</th>
              <th>Terbayar</th>
              <th>Tanggal Bayar</th>
              <th>Petugas</th>
              <th>Keterangan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php foreach($dataSpp as $spp) : ?>
            <tr>
              <td><?= $i++; ?></td>
              <td><?= $spp['bulan'] ?></td>
              <td>Rp<?= $spp['totalbayar'] ?></td>
              <td><?= $spp['tglbayar'] ?></td>
              <?php if ($spp['totaltagihan'] == 0) { ?>
                  <td><?= $spp['petugas'] ?></td>
              <?php } else { ?>
                  <td>Belum Dibayar</td>
              <?php } ?>
              <?php if ($spp['totaltagihan'] == 0) { ?>
                  <td>Lunas</td>
              <?php } else { ?>
                  <td>Belum Lunas</td>
              <?php } ?>
              <?php if ($spp['totaltagihan'] == 0) { ?>
                <td>Lunas</td>
                <?php } else { ?>
                <td>
                  <a href="prosesbayar.php?idSpp=<?= $spp['id'] ?>&nis=<?= $siswa['nis'] ?>" class="bayar">Bayar</a>
              </td>
              <?php } ?>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
    <?php endif; ?>
    <?php if(!isset($_GET['nis'])) : ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php endif; ?>
    
  <?php
include '../views/templates/footer.php';
?>
</body>
