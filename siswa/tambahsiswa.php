<?php 
include '../views/templates/header.php';
include 'functionsiswa.php';

$dataKelas = query("SELECT * FROM tb_kelas");

if (isset($_POST['tambahSiswa'])) {
    tambahSiswa($_POST);
}
?>
<body>
  <div class="container tambah">
    <div class="tambahForm">
      <form action="" method="post">
        <h2>Tambah Siswa</h2>
        <a href="viewsiswa.php" style="color: white;">Kembali</a>
        <div class="long nis">
          <label for="nis">NIS</label>
          <input type="text" id="nis" name="nis" autocomplete="off" maxlength="4" required/>
        </div>
        <div class="long nama">
          <label for="nama">Nama</label>
          <input type="text" id="nama" name="nama" autocomplete="off" required/>
        </div>
        <div class="short alamatTelp">
          <div class="shortContent alamat">
            <label for="alamat">Alamat</label>
            <input type="text" id="alamat" name="alamat" autocomplete="off" required/>
          </div>
          <div class="shortContent telp">
            <label for="telp">No Telp</label>
            <input type="text" id="telp" name="telp" autocomplete="off"  maxlength="12" required/>
          </div>
        </div>
        <div class="long kelas">
          <label for="kelas">Kelas</label>
          <select name="kelasSiswa" id="kelas" required>
            <?php foreach(  $dataKelas as $kelas ) : ?>
               <option value="<?= $kelas['idkelas']; ?>"><?= $kelas['kelas']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <button type="submit" name="tambahSiswa">Tambah</button>
      </form>
    </div>
  </div>

  <?php 
include '../views/templates/footer.php';
?>
</body>
