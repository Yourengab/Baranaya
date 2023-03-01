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

function bayarLunas($id, $nis)
{
    session_start();
    global $conn;

    $kelas = query("SELECT * FROM tb_siswa INNER JOIN tb_kelas using(idkelas)WHERE nis=$nis")[0];
    if ($kelas['kelas'] == "X") {
        $spp = query("SELECT nominalspp from tb_kelas WHERE kelas='X'")[0];
    }
    if ($kelas['kelas'] == "XI") {
        $spp = query("SELECT nominalspp from tb_kelas WHERE kelas='XI'")[0];
    }
    if ($kelas['kelas'] == "XII") {
        $spp = query("SELECT nominalspp from tb_kelas WHERE kelas='XII'")[0];
    }

    $spp = $spp['nominalspp'];
    $petugas = $_SESSION['namaPetugas'];

    $query = "UPDATE tb_spp SET totalbayar='$spp',totaltagihan='0',tglbayar=NOW(),petugas='$petugas' WHERE id=$id";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
