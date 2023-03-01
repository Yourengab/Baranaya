<?php
session_start();
include('../views/templates/conn.php');

if(isset($_SESSION['login'])) {
  echo " <script>
  window.location.href = '../siswa/viewsiswa.php'
  </script>";
}

if( isset($_POST['login'])) {
$user = $_POST['user'];
$password = $_POST['password'];

$petugas = mysqli_query($conn,"SELECT * FROM tb_petugas WHERE nip=$user");
$siswa = mysqli_query($conn,"SELECT * FROM tb_siswa WHERE nis=$user");

if (mysqli_num_rows($petugas) === 1) {
    $dataPetugas = mysqli_fetch_assoc($petugas);
    $_SESSION['login'] = true;
    $_SESSION['key'] = $dataPetugas['nip'];
    $_SESSION['level'] = $dataPetugas['level'];
    $_SESSION['namaPetugas'] = $dataPetugas['nama'];
    if ($password == $dataPetugas['password']) {
        echo " <script>
        alert('Berhasil Login');
        window.location.href = '../siswa/viewsiswa.php';
        </script>";
        exit;
    }
    $error = true;
} else if (mysqli_num_rows($siswa) === 1 ) {
    $dataSiswa = mysqli_fetch_assoc($siswa);
    $_SESSION['login'] = true;
    $_SESSION['key'] = $dataSiswa['nis'];
    $_SESSION['level'] = $dataSiswa['level'];
    $_SESSION['namaSiswa'] = $dataSiswa['nama'];
    if ($password == $dataSiswa['password']) {
        echo " <script>
        alert('Berhasil Login');
        window.location.href = '../siswa/viewsiswa.php';
        </script>";
        exit;
    } 
    $error = true;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Login</title>
    <link rel="stylesheet" href="loginstyle.php" />
  </head>
  <body>
    <div class="container">
        <div class="loginText">
          <h2>Hallo👋,Silakan Login Untuk Mengakses Dashboard</h2>
          <p>Barannaya.school.sch.id</p>
        </div>
        <form action="" method="post">
          <div class="user">
              <?php if(isset($error)) : ?>
                <p>*Username / Password Salah!</p>
                <?php endif; ?>
                <label for='password'>NIS / NIP</label>
                <input type='text' id='user' name='user' required autocomplete="off">
            </div>
            <div class="password">
                <label for='password'>Password</label>
                <input type='password' id='password' name='password' required>
            </div>
            <button type="submit" name="login">Masuk</button>
        </form>
    </div>
  </body>
</html>
