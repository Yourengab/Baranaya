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
