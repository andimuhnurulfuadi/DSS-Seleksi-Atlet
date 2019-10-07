<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!--alerts CSS -->
    <link href="../admin/assets/node_modules/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link href="../admin/assets/dist/css/style.min.css" rel="stylesheet">
  </head>
  <body>
<?php
//mengakses koneksi di folder lib
include "../lib/koneksi.php";
session_start();
//menggunakan variabel post dari form login index.php
$user = $_POST['username'];
$pass = $_POST['password'];


if(!ctype_alnum($user) OR !ctype_alnum($pass)){
    header('location:index.php');
} else {
  $login = mysqli_query($koneksi,"SELECT * FROM tbl_atlit WHERE user_atlit='$user' AND pass_atlit='$pass'");
  $ketemu = mysqli_num_rows($login);
  $array = mysqli_fetch_array($login);

  if($ketemu > 0){
    $_SESSION['namauser'] = $array['user_atlit'];
    $_SESSION['passuser'] = $array['pass_atlit'];

    header('location:atlitweb.php?module=profil');

  } else {
    echo '<script type="text/javascript">';
    echo 'setTimeout(function () { swal({
          title: "Login gagal !",
          text: "username atau password salah!",
          type: "warning",
          confirmButtonText: "Lagi",
          closeOnConfirm: false,
        },
        function(isConfirm) {
          if (isConfirm) {
            window.location="index.php";
          }
        });';
    echo '}, 100);</script>';
  }
}

 ?>
 <!-- Sweet-Alert  -->
 <script src="../admin/assets/node_modules/sweetalert/sweetalert.min.js"></script>
 <script src="../admin/assets/node_modules/sweetalert/jquery.sweet-alert.custom.js"></script>

</body>
</html>
