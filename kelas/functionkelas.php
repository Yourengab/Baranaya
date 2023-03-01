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

function tambahKelas($data) {
    global $conn;

    $kelas = $data['kelas'];
    $nominalspp = $data['nominalspp'];

    $query = "INSERT INTO tb_kelas VALUES('','$kelas','$nominalspp')";

    mysqli_query($conn,$query);
    if(mysqli_affected_rows($conn) > 0 ) {
        echo "
        <script>
        alert('Berhasil menambah kelas');
        window.location.href = 'viewkelas.php';
        </script>";
    } else {
        echo "
        <script>
        alert('Gagal menambah kelas');
        window.location.href = 'viewkelas.php';
        </script>";
    }
}

function deleteKelas($id) {
    global $conn;

    mysqli_query($conn,"DELETE FROM tb_kelas WHERE idkelas=$id");
    if(mysqli_affected_rows($conn) > 0 ) {
        echo "
        <script>
        alert('Berhasil menghapus kelas');
        window.location.href = 'viewkelas.php';
        </script>";
    } else {
        echo "
        <script>
        alert('Gagal menghapus kelas');
        window.location.href = 'viewkelas.php';
        </script>";
    }
    
}

function updateKelas($data,$id) {
    global $conn;

    $kelas = $data['kelas'];
    $nominalspp = $data['nominalspp'];

    $query = "UPDATE tb_kelas SET kelas='$kelas', nominalspp='$nominalspp'  WHERE idkelas=$id";
    mysqli_query($conn,$query);

    if(mysqli_affected_rows($conn) > 0 ) {
        echo "
        <script>
        alert('Berhasil mengedit kelas');
        window.location.href = 'viewkelas.php';
        </script>";
    } else {
        echo "
        <script>
        alert('Gagal mengedit kelas');
        window.location.href = 'viewkelas.php';
        </script>";
    }
    
    
}
?>