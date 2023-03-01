<?php

include('../views/templates/conn.php');
function query($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);

    $datas = [];
    while ($data = mysqli_fetch_assoc($result)) {
        $datas[] = $data;
    }
    return $datas;
}

function tambahPetugas($data)
{
    global $conn;

    $nip = $data['nip'];
    $nama = $data['nama'];
    $alamat = $data['alamat'];
    $telp = $data['telp'];
    $password = 'petugasbaranaya';

    $query = "INSERT INTO tb_petugas VALUES('$nip','$nama','$alamat','$telp','petugas','$password')";

    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {
        echo "
            <script>
            alert('Berhasil menambah data petugas');
            window.location.href = 'viewpetugas.php';
            </script>";
    } else {
        echo "
            <script>
            alert('Gagal menambah data petugas');
            window.location.href = 'deletepetugas.php';
            </script>";

    }
}

function deletePetugas($nip)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM tb_petugas WHERE nip=$nip");
    if (mysqli_affected_rows($conn) > 0) {
        echo "
        <script>
        alert('Berhasil menghapus data petugas);
        window.location.href = 'viewpetugas.php';
        </script>";
        header('Location: viewpetugas.php');
    } else {
        echo "
        <script>
        alert('Gagal menghapus data petugas);
        window.location.href = 'deletepetugas.php';
        </script>";
        header('Location: viewpetugas.php');
    }
}
function updatePetugas($data,$nip) {
    global $conn;

    $nama = $data['nama'];
    $alamat = $data['alamat'];
    $telp = $data['telp'];

    $query = "UPDATE tb_petugas SET 
    nama='$nama',
    alamat='$alamat',
    notelp='$telp'
     WHERE nip=$nip";

    mysqli_query($conn,$query);
    if (mysqli_affected_rows($conn) > 0) {
        echo "
            <script>
            alert('Berhasil mengedit data petugas');
            window.location.href = 'viewpetugas.php';
            </script>";
    } else {
        echo "
            <script>
            alert('Gagal mengedit data petugas');
            window.location.href = 'deletepetugas.php';
            </script>";

    }
}
 ?>