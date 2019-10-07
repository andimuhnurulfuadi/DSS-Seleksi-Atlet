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
   $kdsub=$_POST['kdsub'];
   $kdrange = $_POST['kdrange'];
   $syarat = nl2br($_POST['syarat']);
   $querySimpan= mysqli_query($koneksi,"INSERT INTO detail_sub_kriteria VALUES ('$kdsub','$kdrange','$syarat')");

   if($querySimpan){
     echo "<script type='text/javascript'>
           setTimeout(function () { swal({
           title: 'Info!',
           text: 'Data berhasil disimpan!',
           type: 'success',
           confirmButtonText: 'OK',
           closeOnConfirm: false,
         },
         function(isConfirm) {
           if (isConfirm) {
             window.location='$admin_url'+'adminweb.php?module=detail_subkriteria&kd_sub=$kdsub';
           }
         });}, 100);</script>";

   }else{
     echo "<script type='text/javascript'>
           setTimeout(function () { swal({
           title: 'Info!',
           text: 'Data Gagal disimpan!',
           type: 'error',
           confirmButtonText: 'Coba Lagi',
           closeOnConfirm: false,
         },
         function(isConfirm) {
           if (isConfirm) {
             window.location='$admin_url'+'adminweb.php?module=tambah_detail_subkt&kd_sub=$kdsub';
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
