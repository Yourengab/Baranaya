<?php
include '../views/templates/header.php';
include 'functionpetugas.php';


if (isset($_POST['tambahPetugas'])) {
    tambahPetugas($_POST);
}
?>

<body>
    <div class="container tambah">
        <div class="tambahForm">
            <form action="" method="post">
                <h2>Tambah Petugas</h2>
                <a href="javascript:history.back()" style="color: white;">Kembali</a>
                <div class="long nip">
                    <label for="nip">NIP</label>
                    <input type="text" id="nip" name="nip" autocomplete="off" maxlength="4" required />
                </div>
                <div class="long nama">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" autocomplete="off" required />
                </div>
                <div class="short alamatTelp">
                    <div class="shortContent alamat">
                        <label for="alamat">Alamat</label>
                        <input type="text" id="alamat" name="alamat" autocomplete="off" required />
                    </div>
                    <div class="shortContent telp">
                        <label for="telp">No Telp</label>
                        <input type="text" id="telp" name="telp" autocomplete="off" maxlength="12" required />
                    </div>
                </div>
                <button type="submit" name="tambahPetugas">Tambah</button>
            </form>
        </div>
    </div>

    <?php
    include '../views/templates/footer.php';
    ?>