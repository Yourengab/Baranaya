<?php
include '../views/templates/header.php';
include 'functionpetugas.php';

$nip = $_GET['nip'];
$dataPetugas = query("SELECT * FROM tb_petugas WHERE nip=$nip");

if (isset($_POST['updatePetugas'])) {
    updatePetugas($_POST,$nip);
}
?>

<body>
    <div class="container tambah">
        <div class="tambahForm">
            <form action="" method="post">
                <h2>Update Petugas</h2>
                <a href="viewpetugas.php" style="color: white;">Kembali</a>
                <?php foreach(  $dataPetugas as $petugas ) : ?>
                    <div class="long nama">
                        <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" autocomplete="off" required value="<?= $petugas['nama']?>"/>
                </div>
                <div class="short alamatTelp">
                    <div class="shortContent alamat">
                        <label for="alamat">Alamat</label>
                        <input type="text" id="alamat" name="alamat" autocomplete="off" required value="<?= $petugas['alamat']?>"/>
                    </div>
                    <div class="shortContent telp">
                        <label for="telp">No Telp</label>
                        <input type="text" id="telp" name="telp" autocomplete="off" maxlength="12" required value="<?= $petugas['notelp']?>"/>
                    </div>
                    <?php endforeach; ?>
                </div>
                <button type="submit" name="updatePetugas">Tambah</button>
            </form>
        </div>
    </div>

    <?php
    include '../views/templates/footer.php';
    ?>
</body>