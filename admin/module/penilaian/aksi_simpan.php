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
   $kdpenilaian=$_POST['kd'];
   $tgl=$_POST['tgl'];
   $atlit=$_POST['atlit'];

    if ($jab=='pelatih silat') {
      $querysub = mysqli_query($koneksi,"SELECT * FROM tbl_sub_kriteria  s JOIN tbl_kriteria k ON s.kd_kriteria=k.kd_kriteria JOIN tbl_cabor c ON s.kd_cabor=c.kd_cabor WHERE c.nama_cabor='Pencak Silat'");
    }else {
      $querysub = mysqli_query($koneksi,"SELECT * FROM tbl_sub_kriteria  s JOIN tbl_kriteria k ON s.kd_kriteria=k.kd_kriteria JOIN tbl_cabor c ON s.kd_cabor=c.kd_cabor WHERE c.nama_cabor='Sepak Takraw'");
    }

     $jumlah1=0;
     $jumlah2=0;
     $jumlah3=0;
     $jumlah4=0;
     $jumlah5=0;
     //mengambil nilai seleksi per kriteria
     while ($s=mysqli_fetch_array($querysub)) {
        if($s['nama_kt']=='Usia'){
         $kd=$s['kd_subkt'];
         $c=$_POST[$kd];
         $jumlah1=$jumlah1+$c;
       }
       if($s['nama_kt']=='Keterampilan'){
        $kd=$s['kd_subkt'];
        $c=$_POST[$kd];
        $jumlah2=$jumlah2+$c;
        }
        if($s['nama_kt']=='Fisik'){
         $kd=$s['kd_subkt'];
         $c=$_POST[$kd];
         $jumlah3=$jumlah3+$c;
       }
       if($s['nama_kt']=='Kesehatan'){
        $kd=$s['kd_subkt'];
        $c=$_POST[$kd];
        $jumlah4=$jumlah4+$c;
        }
        if($s['nama_kt']=='Prestasi'){
         $kd=$s['kd_subkt'];
         $c1=$_POST[$kd];
         $jumlah5=$jumlah5+$c;
       }
     }
     //menghitung jumlah sub kriteria
     if ($jab=='pelatih silat') {
       $query1 = mysqli_query($koneksi,"SELECT COUNT(s.kd_subkt) AS jumlah FROM tbl_sub_kriteria s JOIN tbl_kriteria k ON s.kd_kriteria=k.kd_kriteria JOIN tbl_cabor c ON s.kd_cabor=c.kd_cabor WHERE c.nama_cabor='Pencak Silat' AND k.nama_kt='Usia'");
       $k1=mysqli_fetch_array($query1);
       echo $k1['jumlah'];

       $query2 = mysqli_query($koneksi,"SELECT COUNT(s.kd_subkt) AS jumlah FROM tbl_sub_kriteria s JOIN tbl_kriteria k ON s.kd_kriteria=k.kd_kriteria JOIN tbl_cabor c ON s.kd_cabor=c.kd_cabor WHERE c.nama_cabor='Pencak Silat' AND k.nama_kt='Keterampilan'");
       $k2=mysqli_fetch_array($query2);
       echo $k2['jumlah'];

       $query3 = mysqli_query($koneksi,"SELECT COUNT(s.kd_subkt) AS jumlah FROM tbl_sub_kriteria s JOIN tbl_kriteria k ON s.kd_kriteria=k.kd_kriteria JOIN tbl_cabor c ON s.kd_cabor=c.kd_cabor WHERE c.nama_cabor='Pencak Silat' AND k.nama_kt='Fisik'");
       $k3=mysqli_fetch_array($query3);
       echo $k3['jumlah'];

       $query4 = mysqli_query($koneksi,"SELECT COUNT(s.kd_subkt) AS jumlah FROM tbl_sub_kriteria s JOIN tbl_kriteria k ON s.kd_kriteria=k.kd_kriteria JOIN tbl_cabor c ON s.kd_cabor=c.kd_cabor WHERE c.nama_cabor='Pencak Silat' AND k.nama_kt='Kesehatan'");
       $k4=mysqli_fetch_array($query4);
       echo $k4['jumlah'];

       $query5 = mysqli_query($koneksi,"SELECT COUNT(s.kd_subkt) AS jumlah FROM tbl_sub_kriteria s JOIN tbl_kriteria k ON s.kd_kriteria=k.kd_kriteria JOIN tbl_cabor c ON s.kd_cabor=c.kd_cabor WHERE c.nama_cabor='Pencak Silat' AND k.nama_kt='Prestasi'");
       $k5=mysqli_fetch_array($query5);
       echo $k5['jumlah'];
     }else{
       $query1 = mysqli_query($koneksi,"SELECT COUNT(s.kd_subkt) AS jumlah FROM tbl_sub_kriteria s JOIN tbl_kriteria k ON s.kd_kriteria=k.kd_kriteria JOIN tbl_cabor c ON s.kd_cabor=c.kd_cabor WHERE c.nama_cabor='Sepak Takraw' AND k.nama_kt='Usia'");
       $k1=mysqli_fetch_array($query1);
       echo $k1['jumlah'];

       $query2 = mysqli_query($koneksi,"SELECT COUNT(s.kd_subkt) AS jumlah FROM tbl_sub_kriteria s JOIN tbl_kriteria k ON s.kd_kriteria=k.kd_kriteria JOIN tbl_cabor c ON s.kd_cabor=c.kd_cabor WHERE c.nama_cabor='Sepak Takraw' AND k.nama_kt='Keterampilan'");
       $k2=mysqli_fetch_array($query2);
       echo $k2['jumlah'];

       $query3 = mysqli_query($koneksi,"SELECT COUNT(s.kd_subkt) AS jumlah FROM tbl_sub_kriteria s JOIN tbl_kriteria k ON s.kd_kriteria=k.kd_kriteria JOIN tbl_cabor c ON s.kd_cabor=c.kd_cabor WHERE c.nama_cabor='Sepak Takraw' AND k.nama_kt='Fisik'");
       $k3=mysqli_fetch_array($query3);
       echo $k3['jumlah'];

       $query4 = mysqli_query($koneksi,"SELECT COUNT(s.kd_subkt) AS jumlah FROM tbl_sub_kriteria s JOIN tbl_kriteria k ON s.kd_kriteria=k.kd_kriteria JOIN tbl_cabor c ON s.kd_cabor=c.kd_cabor WHERE c.nama_cabor='Sepak Takraw' AND k.nama_kt='Kesehatan'");
       $k4=mysqli_fetch_array($query4);
       echo $k4['jumlah'];

       $query5 = mysqli_query($koneksi,"SELECT COUNT(s.kd_subkt) AS jumlah FROM tbl_sub_kriteria s JOIN tbl_kriteria k ON s.kd_kriteria=k.kd_kriteria JOIN tbl_cabor c ON s.kd_cabor=c.kd_cabor WHERE c.nama_cabor='Sepak Takraw' AND k.nama_kt='Prestasi'");
       $k5=mysqli_fetch_array($query5);
       echo $k5['jumlah'];
     }

  //menghitung nilai dari kriteria
  $c1=$jumlah1/$k1['jumlah'];
  $c2=$jumlah2/$k2['jumlah'];
  $c3=$jumlah3/$k3['jumlah'];
  $c4=$jumlah4/$k4['jumlah'];
  $c5=$jumlah5/$k5['jumlah'];
  $total=$c1+$c2+$c3+$c4+$c5;

   $querySimpan=mysqli_query($koneksi,"INSERT INTO tbl_penilaian VALUES ('$kdpenilaian','$atlit','$tgl',$c1,$c2,$c3,$c4,$c5,$total,null)");
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
             window.location='$admin_url'+'adminweb.php?module=penilaian';
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
             window.location='$admin_url'+'adminweb.php?module=tambah_penilaian';
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
