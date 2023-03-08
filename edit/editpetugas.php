<?php
include '../views/templates/header.php';
include 'functionprofil.php';
$key = $_GET['key'];
$dataPetugas = query("SELECT * FROM tb_petugas WHERE nip=$key");

if (isset($_POST['updatePetugas'])) {
    if(updatePetugas($_POST, $key) > 0) {
        echo "
        <script>
        alert('Berhasil mengedit Profil');
        window.location.href = '../dashboard/dashboard.php';
        </script>";
    } else {
        echo "
        <script>
        alert('Gagal mengedit Profil');
        window.location.href = '../dashboard/dashboard.php';
        </script>";
    }
}
?>


<body>
    <div class="container tambah">
        <div class="tambahForm">
            <form action="" method="post">
                <h2>Edit Profil</h2>
                <?php foreach($dataPetugas as $petugas) : ?>
                <div class="long notelp">
                    <label for="notelp">No Telp</label>
                    <input type="text" id="notelp" name="notelp" autocomplete="off"  maxlength="12" required value="<?= $petugas['notelp']?>"/>
                </div>
                <div class="long password">
                    <label for="password">Password</label>
                    <input type="text" id="password" name="password" autocomplete="off" required value="<?= $petugas['password']?>"/>
                </div>
                <?php endforeach; ?>
                <button type="submit" name="updatePetugas">Simpan</button>
            </form>
        </div>
    </div>

    <?php
    include '../views/templates/footer.php';
?>
