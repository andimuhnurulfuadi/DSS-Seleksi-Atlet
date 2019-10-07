<?php  session_start(); ?>
<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <!--alerts CSS -->
     <link href="../../../admin/assets/node_modules/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
     <!-- Custom CSS -->
     <link href="../../../admin/assets/dist/css/style.min.css" rel="stylesheet">
   </head>
   <body>



 <?php
 //mengakses koneksi di folder lib
 include "../../../lib/koneksi.php";
 include "../../../lib/config.php";


  //menggunakan variabel session dari form login index.php
  $user = $_SESSION['namauser'];
  $pass = $_SESSION['passuser'];


 if(!ctype_alnum($user) OR !ctype_alnum($pass)){
     header('location:index.php');
 } else {
   $kd=$_POST['kd'];
   $nama=$_POST['nama'];
   $ttl=$_POST['ttl'];
   $usia=$_POST['usia'];
   $jenkel=$_POST['jenkel'];
   $sekolah=$_POST['sekolah'];
   $telepon=$_POST['telepon'];
   $cabor=$_POST['cabor'];
   $user=$_POST['username'];
   $pass=$_POST['password'];

   $queryUpdate= mysqli_query($koneksi,"UPDATE tbl_atlit SET nama='$nama', ttl='$ttl', umur='$usia', jenkel='$jenkel', sekolah='$sekolah', telepon='$telepon', kd_cabor='$cabor', user_atlit='$user', pass_atlit='$pass' WHERE kd_atlit='$kd' ");

   if($queryUpdate){
     $_SESSION['namauser']=$user;
     $_SESSION['passuser']=$pass;

     echo "<script type='text/javascript'>
           setTimeout(function () { swal({
           title: 'Info!',
           text: 'Data berhasil diubah!',
           type: 'success',
           confirmButtonText: 'OK',
           closeOnConfirm: false,
         },
         function(isConfirm) {
           if (isConfirm) {
             window.location='$atlit_url'+'atlitweb.php?module=profil';
           }
         });}, 100);</script>";

   }else{
     echo "<script type='text/javascript'>
           setTimeout(function () { swal({
           title: 'Info!',
           text: 'Data Gagal diubah!',
           type: 'error',
           confirmButtonText: 'Coba Lagi',
           closeOnConfirm: false,
         },
         function(isConfirm) {
           if (isConfirm) {
             window.location='$atlit_url'+'atlitweb.php?module=profil';
           }
         });}, 100);</script>";
   }
 }


  ?>
  <!-- Sweet-Alert  -->
  <script src="../../../admin/assets/node_modules/sweetalert/sweetalert.min.js"></script>
  <script src="../../../admin/assets/node_modules/sweetalert/jquery.sweet-alert.custom.js"></script>

 </body>
 </html>
