<?php 
include '../views/templates/header.php';
include 'functionKelas.php';

$id = $_GET['id'];
$dataKelas = query("SELECT * FROM tb_kelas WHERE idkelas=$id");

if (isset($_POST['updateKelas'])) {
    updateKelas($_POST,$id);
}
?>
<body>
  <div class="container tambah">
    <div class="tambahForm">
      <form action="" method="post">
        <h2>Update Kelas</h2>
        <a href="viewkelas.php" style="color: white;">Kembali</a>
        <?php foreach( $dataKelas as $kelas  ) : ?>
          <div class="long kelas">
            <label for="kelas">Kelas</label>
            <input type="text" id="kelas" name="kelas" autocomplete="off" maxlength="4" required value="<?= $kelas['kelas']?>"/>
          </div>
          <div class="long nominalspp">
            <label for="nominalspp">Nominal Spp</label>
            <input type="text" id="nominalspp" name="nominalspp" autocomplete="off" required value="<?= $kelas['nominalspp']?>" />
          </div>
          <?php endforeach; ?>
          <button type="submit" name="updateKelas">Simpan </button>
        </div>
      </form>
    </div>
  </div>

  <?php 
include '../views/templates/footer.php';
?>
</body>
