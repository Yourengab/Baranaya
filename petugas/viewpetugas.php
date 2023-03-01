<?php
include '../views/templates/header.php';
include 'functionpetugas.php';


$dataPetugas = query("SELECT * FROM tb_petugas");

if(isset($_POST['cariPetugas'])) {
    $keyword =  $_POST['keyword'];

    $dataPetugas = query("SELECT * FROM tb_petugas WHERE
    nama LIKE '%$keyword%' OR
    nip = '$keyword'
    ");
}
?>
  <body>
    <div class="container petugas">
      <div class="containerHeading">
        <h1>Daftar Petugas</h1>
        <p>Seluruh data petugas yang terdaftar di dashboard</p>
        <a href="tambahpetugas.php">Tambah petugas</a>
      </div>
      <div class="tableContainer">
        <form action="" method="post">
          <div class="search">
            <label for="keyword">Cari petugas</label>
            <input type="text" id="keyword" name="keyword" placeholder="I Nyoman Suryadana" />
          </div>
          <button type="submit" name="cariPetugas">Cari</button>
        </form>
        <table cellpadding="25">
          <thead>
            <tr>
              <th>No</th>
              <th>Nis</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>No Telp</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php foreach($dataPetugas as $petugas) : ?>
              <tr>
                <td><?= $i++; ?></td>
                <td><?= $petugas['nip']; ?></td>
                <td><?= $petugas['nama']; ?></td>
                <td><?= $petugas['alamat']; ?></td>
                <td><?= $petugas['notelp']; ?></td>
                <td class="button">
                  <a href="updatepetugas.php?nip=<?= $petugas['nip']; ?>">Edit</a>
                  <a href="deletepetugas.php?nip=<?= $petugas['nip']; ?>" onclick="return confirm('Ingin menghapus data petugas?')"><img src="../asset/trash.svg" alt="icon"></a>
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