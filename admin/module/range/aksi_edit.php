<?php  session_start(); ?>
<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <!--alerts CSS -->
     <link href="../../assets/node_modules/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
     <!-- Custom CSS -->
     <link href="../../assets/dist/css/style.min.css" rel="stylesheet">
   </head>
   <body>



 <?php
 //mengakses koneksi di folder lib
 include "../../../lib/koneksi.php";
 include "../../../lib/config.php";


  //menggunakan variabel session dari form login index.php
  $user = $_SESSION['namauser'];
  $pass = $_SESSION['passuser'];
  $jab = $_SESSION['jabatanuser'];


 if(!ctype_alnum($user) OR !ctype_alnum($pass)){
     header('location:index.php');
 } else {
   $kd=$_POST['kd'];
   $ket=$_POST['keterangan'];
   $nilai=$_POST['nilai'];
   $queryUpdate= mysqli_query($koneksi,"UPDATE tbl_range_penilaian SET keterangan='$ket', nilai='$nilai' WHERE kd_range='$kd' ");

   if($queryUpdate){
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
             window.location='$admin_url'+'adminweb.php?module=range';
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
             window.location='$admin_url'+'adminweb.php?module=edit_range&kd_range=$kd';
           }
         });}, 100);</script>";
   }
 }


  ?>
  <!-- Sweet-Alert  -->
  <script src="../../assets/node_modules/sweetalert/sweetalert.min.js"></script>
  <script src="../../assets/node_modules/sweetalert/jquery.sweet-alert.custom.js"></script>

 </body>
 </html>
