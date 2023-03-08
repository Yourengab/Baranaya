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
function updatePetugas($data, $key)
{
    global $conn;

    $password = $data['password'];
    $telp = $data['notelp'];

    $query = "UPDATE tb_petugas SET 
    password='$password',
    notelp='$telp'
     WHERE nip='$key'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function updateSiswa($data, $key)
{
    global $conn;

    $password = $data['password'];
    $telp = $data['notelp'];

    $query = "UPDATE tb_siswa SET 
    password='$password',
    notelp='$telp'
     WHERE nis='$key'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
