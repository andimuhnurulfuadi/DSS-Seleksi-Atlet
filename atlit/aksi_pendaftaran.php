<?php  session_start(); ?>
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
 include "../lib/config.php";
 
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
   $querySimpan= mysqli_query($koneksi,"INSERT INTO tbl_atlit VALUES ('$kd','$cabor','$nama','$ttl','$jenkel','$usia','$telepon','$sekolah','$user','$pass')");

   if($querySimpan){
     echo "<script type='text/javascript'>
           setTimeout(function () { swal({
           title: 'Info!',
           text: 'Anda berhasil melakukan pendaftaran!',
           type: 'success',
           confirmButtonText: 'OK',
           closeOnConfirm: false,
         },
         function(isConfirm) {
           if (isConfirm) {
             window.location='$atlit_url';
           }
         });}, 100);</script>";

   }else{
     echo "<script type='text/javascript'>
           setTimeout(function () { swal({
           title: 'Info!',
           text: 'Gagal melakukan pendaftaran!',
           type: 'error',
           confirmButtonText: 'Coba Lagi',
           closeOnConfirm: false,
         },
         function(isConfirm) {
           if (isConfirm) {
             window.location='$atlit_url'+'pendaftaran.php';
           }
         });}, 100);</script>";
   }
  ?>
  <!-- Sweet-Alert  -->
  <script src="../admin/assets/node_modules/sweetalert/sweetalert.min.js"></script>
  <script src="../admin/assets/node_modules/sweetalert/jquery.sweet-alert.custom.js"></script>

 </body>
 </html>
