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
   //kd
   $kd[1]=$_POST['kd1'];
   $kd[2]=$_POST['kd2'];
   $kd[3]=$_POST['kd3'];
   $kd[4]=$_POST['kd4'];
   $kd[5]=$_POST['kd5'];
   //bobot
   $bobot[1]=$_POST['k1'];
   $bobot[2]=$_POST['k2'];
   $bobot[3]=$_POST['k3'];
   $bobot[4]=$_POST['k4'];
   $bobot[5]=$_POST['k5'];
   $total=0;
   for ($i=1; $i <=5 ; $i++) {
     $total=$total+$bobot[$i];
   }

 if ($total>100) {
   echo "<script type='text/javascript'>
         setTimeout(function () { swal({
         title: 'Info!',
         text: 'Data gagal disimpan, akumulasi bobot lebih dari 100% !',
         type: 'warning',
         confirmButtonText: 'Coba Lagi',
         closeOnConfirm: false,
       },
       function(isConfirm) {
         if (isConfirm) {
            window.location='$admin_url'+'adminweb.php?module=kriteria';
         }
       });}, 100);</script>";

 }else if($total<100){
   echo "<script type='text/javascript'>
         setTimeout(function () { swal({
         title: 'Info!',
         text: 'Data gagal disimpan, akumulasi bobot kurang dari 100% !',
         type: 'warning',
         confirmButtonText: 'Coba Lagi',
         closeOnConfirm: false,
       },
       function(isConfirm) {
         if (isConfirm) {
            window.location='$admin_url'+'adminweb.php?module=kriteria';
         }
       });}, 100);</script>";
 }else{
   for ($i=1; $i<=5 ; $i++) {

     $queryEdit= mysqli_query($koneksi,"UPDATE tbl_kriteria SET bobot_kt=$bobot[$i] WHERE kd_kriteria='$kd[$i]'");
   }
     if($queryEdit){
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
                window.location='$admin_url'+'adminweb.php?module=kriteria';
             }
           });}, 100);</script>";
     }else{
       echo "<script type='text/javascript'>
             setTimeout(function () { swal({
             title: 'Info!',
             text: 'Data gagal disimpan!',
             type: 'error',
             confirmButtonText: 'Coba Lagi',
             closeOnConfirm: false,
           },
           function(isConfirm) {
             if (isConfirm) {
                window.location='$admin_url'+'adminweb.php?module=kriteria';
             }
           });}, 100);</script>";
     }
 }
}
  ?>
  <!-- Sweet-Alert  -->
  <script src="../../assets/node_modules/sweetalert/sweetalert.min.js"></script>
  <script src="../../assets/node_modules/sweetalert/jquery.sweet-alert.custom.js"></script>

 </body>
 </html>
