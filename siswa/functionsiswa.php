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
function tambahSpp($nis, $kelas)
{
    global $conn;

    $sppVII = query("SELECT nominalspp from tb_kelas WHERE kelas='VII'")[0]['nominalspp'];
    $sppVIII = query("SELECT nominalspp from tb_kelas WHERE kelas='VIII'")[0]['nominalspp'];
    $sppIX = query("SELECT nominalspp from tb_kelas WHERE kelas='IX'")[0]['nominalspp'];

    $tahunI = date("Y");
    $tahunII = date("Y", strtotime("+1 year"));
    $tahunIII = date("Y", strtotime("+2 years"));
    $tahunIIII = date("Y", strtotime("+3 years"));

    $query = "INSERT INTO tb_spp VALUES
  ('',$nis,'','Juni $tahunI','I',$sppVII,'',''),
  ('',$nis,'','Juli $tahunI','I',$sppVII,'',''),
  ('',$nis,'','Agustus $tahunI','I',$sppVII,'',''),
  ('',$nis,'','September $tahunI','I',$sppVII,'',''),
  ('',$nis,'','Oktober $tahunI','I',$sppVII,'',''),
  ('',$nis,'','November $tahunI','I',$sppVII,'',''),
  ('',$nis,'','Desember $tahunI','I',$sppVII,'',''),
  ('',$nis,'','Januari $tahunII','I',$sppVII,'',''),
  ('',$nis,'','Februari $tahunII','I',$sppVII,'',''),
  ('',$nis,'','Maret $tahunII','I',$sppVII,'',''),
  ('',$nis,'','April $tahunII','I',$sppVII,'',''),
  ('',$nis,'','Mei $tahunII','I',$sppVII,'',''),
  ('',$nis,'','Juni $tahunII','II',$sppVIII,'',''),
  ('',$nis,'','Juli $tahunII','II',$sppVIII,'',''),
  ('',$nis,'','Agustus $tahunII','II',$sppVIII,'',''), 
  ('',$nis,'','September $tahunII','II',$sppVIII,'',''),
  ('',$nis,'','Oktober $tahunII','II',$sppVIII,'',''),
  ('',$nis,'','November $tahunII','II',$sppVIII,'',''),
  ('',$nis,'','Desember $tahunII','II',$sppVIII,'',''),
  ('',$nis,'','Januari $tahunIII','II',$sppVIII,'',''),
  ('',$nis,'','Februari $tahunIII','II',$sppVIII,'',''),
  ('',$nis,'','Maret $tahunIII','II',$sppVIII,'',''),
  ('',$nis,'','April $tahunIII','II',$sppVIII,'',''),
  ('',$nis,'','Mei $tahunIII','II',$sppVIII,'',''),
  ('',$nis,'','Juni $tahunIII','III',$sppIX,'',''),
  ('',$nis,'','Juli $tahunIII','III',$sppIX,'',''),
  ('',$nis,'','Agustus $tahunIII','III',$sppIX,'',''),
  ('',$nis,'','September $tahunIII','III',$sppIX,'',''),
  ('',$nis,'','Oktober $tahunIII','III',$sppIX,'',''),
  ('',$nis,'','November $tahunIII','III',$sppIX,'',''),
  ('',$nis,'','Desember $tahunIII','III',$sppIX,'',''),
  ('',$nis,'','Januari $tahunIIII','III',$sppIX,'',''),
  ('',$nis,'','Februari $tahunIIII','III',$sppIX,'',''),
  ('',$nis,'','Maret $tahunIIII','III',$sppIX,'',''),
  ('',$nis,'','April $tahunIIII','III',$sppIX,'',''),
  ('',$nis,'','Mei $tahunIIII','III',$sppIX,'','')";


    mysqli_query($conn, $query);
}

function tambahSiswa($data) {
    global $conn;

    $nis = $data['nis'];
    $nama = $data['nama'];
    $alamat = $data['alamat'];
    $telp = $data['telp'];
    $kelaSiswa = $data['kelasSiswa'];
    $password = 'siswabaranaya';

    $query = "INSERT INTO tb_siswa VALUES('$nis','$nama','$kelaSiswa','$alamat','$telp','siswa','$password')";

    mysqli_query($conn,$query);
    tambahSpp($nis,$kelaSiswa);
    if(mysqli_affected_rows($conn) > 0 ) {
        echo "
        <script>
        alert('Berhasil menambah data siswa');
        window.location.href = 'viewsiswa.php';
        </script>";
    } else {
        echo "
        <script>
        alert('Gagal menambah data siswa');
        window.location.href = 'viewsiswa.php';
        </script>";
    }
}

function deleteSiswa($nis) {
    global $conn;

    mysqli_query($conn,"DELETE FROM tb_siswa WHERE nis=$nis");
    if(mysqli_affected_rows($conn) > 0 ) {
        echo "
        <script>
        alert('Berhasil menghapus data siswa');
        window.location.href = 'viewsiswa.php';
        </script>";
    } else {
        echo "
        <script>
        alert('Gagal menghapus data siswa');
        window.location.href = 'viewsiswa.php';
        </script>";
    }

}
?>