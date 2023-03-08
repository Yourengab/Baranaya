<?php
include '../views/templates/header.php';
include 'functionsiswa.php';

$key = $_SESSION['key'];
if($_SESSION['level'] == 'petugas' || $_SESSION['level'] == 'admin') {
    $dataSiswa = query("SELECT * FROM tb_siswa INNER JOIN tb_kelas using(idkelas)");
} else {
    $dataSiswa = query("SELECT * FROM tb_siswa INNER JOIN tb_kelas using(idkelas) WHERE nis=$key");
}


if(isset($_POST['cariSiswa'])) {
    $keyword =  $_POST['keyword'];

    $dataSiswa = query("SELECT * FROM tb_siswa INNER JOIN tb_kelas using(idkelas) WHERE
    nama LIKE '%$keyword%' OR
    nis = '$keyword'
    ");
}
?>
  <body>
    <div class="container siswa">
      <div class="containerHeading">
        <h1>Daftar Siswa</h1>
        <p>Seluruh data siswa yang terdaftar di dashboard</p>
        <?php if($_SESSION['level'] == "admin") : ?>
        <a href="tambahsiswa.php">Tambah siswa</a>
        <?php endif; ?>
      </div>
      <div class="tableContainer">
        <form action="" method="post">
          <div class="search">
            <label for="keyword">Cari siswa</label>
            <input type="text" id="keyword" name="keyword" placeholder="I Nyoman Suryadana" />
          </div>
          <button type="submit" name="cariSiswa">Cari</button>
        </form>
        <table cellpadding="25">
          <thead>
            <tr>
              <th>No</th>
              <th>Nis</th>
              <th>Nama</th>
              <th>Kelas</th>
              <th>Alamat</th>
              <th>No Telp</th>
              <?php if($_SESSION['level'] == 'admin') { ?>
                <th>Aksi</th>
              <?php } else { ?>
              <?php } ?>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php foreach($dataSiswa as $siswa) : ?>
              <tr>
                <td><?= $i++; ?></td>
                <td><?= $siswa['nis']; ?></td>
                <td><?= $siswa['nama']; ?></td>
                <td><?= $siswa['kelas']; ?></td>
                <td><?= $siswa['alamat']; ?></td>
                <td><?= $siswa['notelp']; ?></td>
                <?php if($_SESSION['level'] == 'admin') { ?>
                <td class="button">
                  <a href="updatesiswa.php?nis=<?= $siswa['nis'] ?>">Edit</a>
                  <a href="deletesiswa.php?nis=<?= $siswa['nis'] ?>"><img src="../asset/trash.svg" alt="icon" onclick="return confirm('Ingin menghapus data siswa?')"></a>
                </td>
                <?php } else { ?>
                <?php } ?>
              </tr>
              <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
<?php
include '../views/templates/footer.php';
?>