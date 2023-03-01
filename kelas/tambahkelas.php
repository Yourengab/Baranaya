<?php 
include '../views/templates/header.php';
include 'functionKelas.php';



if (isset($_POST['tambahKelas'])) {
    tambahKelas($_POST);
}
?>
<body>
  <div class="container tambah">
    <div class="tambahForm">
      <form action="" method="post">
        <h2>Tambah Kelas</h2>
        <a href="javascript:history.back()" style="color: white;">Kembali</a>
        <div class="long kelas">
          <label for="kelas">Kelas</label>
          <input type="text" id="kelas" name="kelas" autocomplete="off" maxlength="4" required/>
        </div>
        <div class="long nominalspp">
          <label for="nominalspp">Nominal Spp</label>
          <input type="text" id="nominalspp" name="nominalspp" autocomplete="off" required/>
        </div>
          <button type="submit" name="tambahKelas">Tambah</button>
        </div>
      </form>
    </div>
  </div>

  <?php 
include '../views/templates/footer.php';
?>
</body>
