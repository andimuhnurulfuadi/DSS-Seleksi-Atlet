<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!--alerts CSS -->
    <link href="assets/node_modules/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link href="assets/dist/css/style.min.css" rel="stylesheet">
  </head>
  <body>

		<?php
			session_start();
			$user=$_SESSION['namauser'];
			$pass=$_SESSION['passuser'];
			$jabatan=$_SESSION['jabatanuser'];
			$_SESSION['namauser']=='$user';
			$_SESSION['passuser']=='$pass';
			$_SESSION['jabatanuser']=='$jabatan';
			unset($_SESSION);

				include "../lib/koneksi.php";
				include "../lib/config.php";

				echo "<script type='text/javascript'>
							setTimeout(function () { swal({
							title: 'Info!',
							text: 'Anda berhasil logout!',
							type: 'success',
							confirmButtonText: 'OK',
							closeOnConfirm: false,
						},
						function(isConfirm) {
							if (isConfirm) {
								window.location='$admin_url'+'index.php';
							}
						});}, 100);</script>";
		 ?>
 <!-- Sweet-Alert  -->
 <script src="assets/node_modules/sweetalert/sweetalert.min.js"></script>
 <script src="assets/node_modules/sweetalert/jquery.sweet-alert.custom.js"></script>

</body>
</html>
