<?php 
include '../views/templates/header.php';
include 'functionkelas.php';

$dataKelas = query("SELECT * FROM tb_kelas"); 

if(isset($_POST['cariKelas'])) {
    $keyword =  $_POST['keyword'];
    
    $dataKelas = query("SELECT * FROM tb_kelas WHERE
    kelas LIKE '%$keyword%' OR
    idkelas = '$keyword' 
    ");
}
?>
  <body>
    <div class="container kelas">
      <div class="containerHeading">
        <h1>Daftar Kelas</h1>
        <p>Seluruh data kelas yang terdaftar di dashboard</p>
        <a href="tambahkelas.php">Tambah kelas</a>
      </div>
      <div class="tableContainer">
        <form action="" method="post">
          <div class="search">
            <label for="keyword">Cari kelas</label>
            <input type="text" id="keyword" name="keyword" placeholder="XI" />
          </div>
          <button type="submit" name="cariKelas">Cari</button>
        </form>
        <table cellpadding="25">
          <thead>
            <tr>
              <th>ID</th>
              <th>Kelas</th>
              <th>Nominal Spp</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach(  $dataKelas as $kelas ) : ?>
              <tr>
                <td><?= $kelas['idkelas']; ?></td>
                <td><?= $kelas['kelas']; ?></td>
                <td>Rp<?= $kelas['nominalspp']; ?></td>
                <td class="button">
                  <a href="updatekelas.php?id=<?= $kelas['idkelas']?>">Edit</a>
                  <a href="deletekelas.php?id=<?= $kelas['idkelas']?>"><img src="../asset/trash.svg" alt="icon"></a>
                </td>
              </tr>
              <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
<?php 
include '../views/templates/footer.php';
?>