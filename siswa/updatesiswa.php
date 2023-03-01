<?php
include '../views/templates/header.php';
include 'functionsiswa.php';

$nis = $_GET['nis'];
$dataSiswa = query("SELECT * FROM tb_siswa WHERE nis=$nis");
$dataKelas = query("SELECT * FROM tb_kelas");

if (isset($_POST['updateSiswa'])) {
    function updateSiswa($data,$nis) {
        global $conn;
    
        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $telp = $data['telp'];
        $kelas = $data['kelaSiswa'];
    
        $query = "UPDATE tb_siswa SET 
        nama='$nama',
        alamat='$alamat',
        notelp='$telp',
        idkelas='$kelas'
         WHERE nis=$nis";
    
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }
    if (updateSiswa($_POST,$nis) > 0) {
        echo "
            <script>
            alert('Berhasil mengedit data siswa');
            window.location.href='viewsiswa.php';
            </script>";
    } else {
        echo "
            <script>
            alert('Gagal mengedit data siswa');
            window.location.href = 'deletesiswa.php';
            </script>";
    }
}
?>

<body>
    <div class="container tambah">
        <div class="tambahForm">
            <form action="" method="post">
                <h2>Update Siswa</h2>
                <a href="viewsiswa.php" style="color: white;">Kembali</a>
                <?php foreach(  $dataSiswa as $siswa ) : ?>
                    <div class="long nama">
                        <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" autocomplete="off" required value="<?= $siswa['nama']?>"/>
                </div>
                <div class="short alamatTelp">
                    <div class="shortContent alamat">
                        <label for="alamat">Alamat</label>
                        <input type="text" id="alamat" name="alamat" autocomplete="off" required value="<?= $siswa['alamat']?>"/>
                    </div>
                    <div class="shortContent telp">
                        <label for="telp">No Telp</label>
                        <input type="text" id="telp" name="telp" autocomplete="off" maxlength="12" required value="<?= $siswa['notelp']?>"/>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="long kelas">
                    <label for="kelas">Kelas</label>
                    <select name="kelaSiswa" id="kelas" required value="<?= $siswa['kelas']?>">
                        <?php foreach(  $dataKelas as $kelas ) : ?>
                            <option value="<?= $kelas['idkelas']; ?>"><?= $kelas['kelas']; ?></option>
                            <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" name="updateSiswa">Simpan</button>
            </form>
        </div>
    </div>

    <?php
    include '../views/templates/footer.php';
    ?>
</body>