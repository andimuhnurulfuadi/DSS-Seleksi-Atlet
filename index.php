<?php
  include "lib/config.php";
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
    <title>Pilihan</title>

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

<body class="skin-blue card-no-border"  >
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
    <section id="wrapper">
        <div class="login-register" style="background-image:url(admin/assets/images/background/PPLP.jpg);">
        </div>
          <!-- Row -->
          <div class="row">
              <div class="col-12 m-t-30">
                  <h1 class="m-b-0" align="center">Masuk ke akun anda</h1>
                  <p class="text-muted m-t-0 font-20" align="center">Silahkan memilih login sebagai <strong>Admin</strong> atau <strong>Atlit</strong></p>
              </div>
          </div>
          <!-- End Row -->
          <br><br>
          <div class="container">
          <div class="row" >
            <div class="col-md-6 col-center">
                <div class="card border-dark">
                    <div class="card-header bg-info">
                        <h4 class="m-b-0 text-white"></h4><br></div>
                    <div class="card-body" align="center">
                        <h3 class="card-title">Admin</h3>
                        <p class="text-muted m-t-0 font-15">Pilih admin jika ingin masuk sebagai admin atau pelatih</p>
                        <a href="<?php echo $admin_url; ?>" class="btn btn-info">&nbsp;&nbsp;<b>P I L I H</b>&nbsp;&nbsp;</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-center">
                <div class="card border-info">
                    <div class="card-header bg-info">
                        <h4 class="m-b-0 text-white"></h4><br></div>
                    <div class="card-body" align="center">
                        <h3 class="card-title">Atlit</h3>
                        <p class="text-muted m-t-0 font-15">Pilih atlit jika ingin masuk sebagai atlit seleksi</p>
                          <a href="<?php echo $atlit_url; ?>" class="btn btn-info">&nbsp;&nbsp;<b>P I L I H</b>&nbsp;&nbsp;</a>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <div class="card-body" align="center">
              <a href="pengumuman.php" class=" btn btn-lg btn-block ">&nbsp;&nbsp;<b>--&nbsp;Lihat Pengumuman&nbsp;--</b>&nbsp;&nbsp;</a>
            </div>
          </div>
          <div class="col-md-4"></div>
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
    <!--Custom JavaScript -->
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
        // ==============================================================
        // Login and Recover Password
        // ==============================================================
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>

</body>

</html>
