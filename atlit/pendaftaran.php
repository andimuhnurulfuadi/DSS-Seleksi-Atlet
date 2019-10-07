<?php
      include "../lib/koneksi.php";
      include "../lib/config.php";
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
    <link rel="icon" type="image/png" sizes="16x16" href="../admin/assets/images/favicon.png">
    <title>Pendaftaran</title>
    <link href="../admin/assets/node_modules/wizard/steps.css" rel="stylesheet">
    <!--alerts CSS -->
    <link href="../admin/assets/node_modules/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <!-- page css -->
    <link href="../admin/assets/dist/css/pages/login-register-lock.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../admin/assets/dist/css/style.min.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="../admin/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="../admin/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-blue card-no-border">
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
      <!-- Row -->
      <div class="row">
          <div class="col-12 m-t-10">
              <h1 class="m-b-0" align="center">Form Pendaftaran Seleksi</h1>
              <p class="text-muted m-t-0 font-20" align="center">Silahkan memasukkan <strong>data diri anda</strong> dengan <strong>lengkap</strong></p>
          </div>
      </div>
      <!-- End Row -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-body">
                          <form class="m-t-40" action="aksi_pendaftaran.php" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                  <?php
                                      $query = "SELECT max(kd_atlit) as maxkd FROM tbl_atlit";
                                      $hasil = mysqli_query($koneksi,$query);
                                      $data = mysqli_fetch_array($hasil);
                                      $kode = $data['maxkd'];
                                      $noUrut = (int) substr($kode, 3);
                                      $noUrut++;
                                      $char = "AT";
                                      $kodeBaru = $char . sprintf("%03s", $noUrut);
                                   ?>
                                    <div class="form-group">
                                        <h5>Kode</h5>
                                        <div class="controls">
                                            <input type="text" name="kd" class="form-control" value="<?php echo $kodeBaru; ?>" readonly></div>
                                        <div class="form-control-feedback"><small>Kode admin otomatis dari sistem</small></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                      <h5>Nama Lengkap<span class="text-danger">*</span></h5>
                                      <div class="controls">
                                          <input type="text" name="nama" class="form-control" required data-validation-required-message="This field is required"> </div>
                                      <div class="form-control-feedback"><small>Masukkan <code>nama lengkap </code> anda</small></div>
                                  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                      <h5>Tempat dan Tanggal Lahir<span class="text-danger">*</span></h5>
                                      <div class="controls">
                                          <input type="text" name="ttl" class="form-control" required data-validation-required-message="This field is required"> </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                      <h5>Usia</h5>
                                      <div class="controls">
                                          <select name="usia" id="select" required class="form-control">
                                            <?php for ($i=10; $i <20 ; $i++) { ?>
                                              <option value="<?php echo $i; ?>"><?php echo $i; ?> Tahun</option>
                                            <?php } ?>
                                          </select>
                                      </div>
                                  </div>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <h5>Jenis Kelamin <span class="text-danger">*</span></h5>
                                      <fieldset class="controls">
                                          <div class="custom-control custom-radio">
                                              <input type="radio" value="L" name="jenkel" required id="styled_radio1" class="custom-control-input" checked>
                                              <label class="custom-control-label" for="styled_radio1">Laki - laki</label>
                                          </div>
                                      </fieldset>
                                      <fieldset>
                                          <div class="custom-control custom-radio">
                                              <input type="radio" value="P" name="jenkel" id="styled_radio2" class="custom-control-input">
                                              <label class="custom-control-label" for="styled_radio2">Perempuan</label>
                                          </div>
                                      </fieldset>
                                  </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                              <div class="form-group">
                                  <h5>Sekolah Asal<span class="text-danger">*</span></h5>
                                  <div class="controls">
                                      <input type="text" name="sekolah" class="form-control" required data-validation-required-message="This field is required"> </div>
                                  <div class="form-control-feedback"><small>Masukkan <code>nama sekolah </code> anda</small></div>
                              </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <h5> Telepon  <span class="danger">*</span> </h5>
                                      <input type="text" class="form-control required" maxlength="13"  name="telepon" id="telepon">
                                      <div class="form-control-feedback"><small>Inputan hanya boleh <code>angka </code> saja</small></div>
                                  </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Username<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="username" class="form-control" required data-validation-required-message="This field is required"> </div>
                                    <div class="form-control-feedback"><small>Masukkan <code>username </code> yang mudah diingat</small></div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Password<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="password" name="password" class="form-control" required data-validation-required-message="This field is required"> </div>
                                        <div class="form-control-feedback"><small>Masukkan <code>password </code> yang mudah diingat</small></div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Ulangi Password<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="password" name="password2" data-validation-match-match="password" class="form-control" required> </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                    <h5>Cabang Olahraga</h5>
                                    <div class="controls">

                                        <select name="cabor" id="select" required class="form-control">
                                          <?php
                                                $query = mysqli_query($koneksi,"SELECT * FROM tbl_cabor");
                                                while ($cabor=mysqli_fetch_array($query)) {
                                           ?>
                                            <option value="<?php echo $cabor['kd_cabor']; ?>"><?php echo $cabor['nama_cabor']; ?> </option>
                                          <?php } ?>
                                        </select>
                                        <div class="form-control-feedback"><small>Pilih <code>cabang Olahraga </code>yang ingin di daftar</small></div>
                                    </div>
                                </div>
                              </div>
                            </div>
                              <div class="text-xs-right">
                                  <button class="btn btn-info">Simpan</button>
                                  <button type="reset" class="btn btn-inverse">Batal</button><br>
                                  Sudah melakukan pendaftaran seleksi? <a href="index.php" class="text-info m-l-5"><b>Login</b></a>
                              </div>

                          </form>
                      </div>
                  </div>
              </div>
          </div>
          <!-- ============================================================== -->
          <!-- End PAge Content -->
          <!-- ============================================================== -->
    </section>

    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../admin/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../admin/assets/node_modules/popper/popper.min.js"></script>
    <script src="../admin/assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../admin/assets/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="../admin/assets/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../admin/assets/dist/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../admin/assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../admin/assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="../admin/assets/dist/js/custom.min.js"></script>
    <script src="../admin/assets/node_modules/moment/min/moment.min.js"></script>
    <script src="../admin/assets/node_modules/wizard/jquery.steps.min.js"></script>
    <script src="../admin/assets/node_modules/wizard/jquery.validate.min.js"></script>
    <!-- Sweet-Alert  -->
    <script src="../admin/assets/node_modules/sweetalert/sweetalert.min.js"></script>
    <script src="../admin/assets/node_modules/wizard/steps.js"></script>
    <!-- Validation JavaScript -->
    <script src="../admin/assets/dist/js/pages/validation.js"></script>
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
        //untuk input Telepon
         jQuery('#telepon').keyup(function () { this.value = this.value.replace(/[^0-9\.]/g,''); });
         jQuery('#tinggi').keyup(function () { this.value = this.value.replace(/[^0-9\.]/g,''); });
         jQuery('#berat').keyup(function () { this.value = this.value.replace(/[^0-9\.]/g,''); });
    </script>
    <script>
      ! function(window, document, $) {
          "use strict";
          $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
      }(window, document, jQuery);
    </script>

</body>

</html>
