<?php
      include "/lib/koneksi.php";
      include "/lib/config.php";
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="admin/assets/images/favicon.png">
    <title>Pendaftaran</title>
    <link href="admin/assets/node_modules/wizard/steps.css" rel="stylesheet">
    <!--alerts CSS -->
    <link href="admin/assets/node_modules/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <!-- page css -->
    <link href="admin/assets/dist/css/pages/login-register-lock.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="admin/assets/dist/css/style.min.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="admin/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="admin/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-blue card-no-border" >
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">memuat</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper"  >
      <div class="" style="background-image:url(admin/assets/images/background/PPLP.jpg); background-size:cover;background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
      height: 100%;
      width: 100%;">

        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <!-- column -->
          <br><br>
          <div class="card">
              <div class="card-body">
                  <h2 class="card-title" align="center">Daftar Pengumuman</h2>
                  <h6 class="card-subtitle" align="center">Berisi pengumuman - pengumuman dari PPLP untuk para calon atlit</h6>
                  <br>
                  <?php
                    $query = mysqli_query($koneksi,"SELECT * FROM tbl_pengumuman");
                    while ($pengumuman=mysqli_fetch_array($query)) {

                   ?>
                  <table id="demo-foo-addrow2" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                      <thead>
                          <tr align="center">
                              <th><?php echo $pengumuman['nama_pengumuman']; ?></th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td><?php echo $pengumuman['isi']; ?></td>
                          </tr>
                      </tbody>
                  </table>
                  <br><hr><br>
                <?php } ?>
              </div>
              <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                  <div class="card-body" align="center">
                    <a href="index.php" class=" btn btn-lg btn-block ">&nbsp;&nbsp;<b>--&nbsp;kembali&nbsp;--</b>&nbsp;&nbsp;</a>
                  </div>
                </div>
                <div class="col-md-4"></div>
              </div>
          </div>
          <!-- column -->
          <!-- ============================================================== -->
          <!-- End PAge Content -->
          <!-- ============================================================== -->
        </div>

      </div>
    </section>

    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="admin/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="admin/assets/node_modules/popper/popper.min.js"></script>
    <script src="admin/assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="admin/assets/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="admin/assets/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="admin/assets/dist/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="admin/assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="admin/assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="admin/assets/dist/js/custom.min.js"></script>
    <script src="admin/assets/node_modules/moment/min/moment.min.js"></script>
    <script src="admin/assets/node_modules/wizard/jquery.steps.min.js"></script>
    <script src="admin/assets/node_modules/wizard/jquery.validate.min.js"></script>



</body>

</html>
