<?php
include '../views/templates/header.php';
include 'functionprofil.php';

$key = $_GET['key'];
$dataSiswa = query("SELECT * FROM tb_siswa WHERE nis=$key");

if (isset($_POST['updateSiswa'])) {
    if(updateSiswa($_POST, $key) > 0) {
        echo "
        <script>
        alert('Berhasil mengedit Profil');
        window.location.href = '../histori/histori.php?keyword=';
        </script>";
    } else {
        echo "
        <script>
        alert('Gagal mengedit Profil');
        window.location.href = '../histori/histori.php?keyword=';
        </script>";
    }
}
?>

<body>
    <div class="container tambah">
        <div class="tambahForm">
            <form action="" method="post">
                <h2>Edit Profil</h2>
                <a href="../histori/histori.php?keyword=" style="color: #fd5e5e;">Kembali</a>
                <?php foreach($dataSiswa as $siswa) : ?>
                <div class="long notelp">
                <label for="notelp">No Telp</label>
                <input type="text" id="notelp" name="notelp" autocomplete="off" required value="<?= $siswa['notelp']?>"/>
                </div>
                <div class="long passoword">
                <label for="Password">Password</label>
                <input type="text" id="password" name="password" autocomplete="off" required value="<?= $siswa['password']?>"/>
                </div>
                <button type="submit" name="updateSiswa">Simpan</button>
                <?php endforeach; ?>
            </form>
        </div>
    </div>

    <?php
    include '../views/templates/footer.php';
?>