<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid ">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Profil</a></li>
                  <li class="breadcrumb-item active"></li>
                </ol>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                  <h4 class="text-themecolor">Profil</h4>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->
        <div class="row">
          <?php
              $query = mysqli_query($koneksi,"SELECT * FROM tbl_admin WHERE user='$user' AND pass='$pass'");
              $a=mysqli_fetch_array($query);
           ?>
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <center class="m-t-30"> <img src="assets/images/users/user.png" class="img-circle" width="150" />
                            <h4 class="card-title m-t-10"><?php echo $a['nama']; ?></h4>
                            <h6 class="card-subtitle"><?php echo $a['jabatan']; ?></h6>
                        </center>
                    </div>
                    <div>
                        <hr> </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs profile-tab" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">Profile</a> </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="profile" role="tabpanel">
                          <form action="../admin/module/profil/aksi_edit.php" method="POST">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 col-xs-6 b-r"> <strong>Kode</strong>
                                        <br>
                                        <div class="controls">
                                            <input type="text" name="kd" class="form-control" value="<?php echo $a['kd_admin']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-xs-6 b-r"> <strong>Nama</strong>
                                        <br>
                                        <div class="controls">
                                            <input type="text" name="nama" class="form-control" value="<?php echo $a['nama']; ?>" >
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 col-xs-6 b-r"> <strong>Jenis Kelamin</strong>
                                        <br>
                                        <div class="controls">
                                            <input type="text" name="jenkel" class="form-control" value="<?php echo $a['jenkel']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-xs-6 b-r"> <strong>Jabatan</strong>
                                        <br>
                                        <div class="controls">
                                            <input type="text" name="jabatan" class="form-control" value="<?php echo $a['jabatan']; ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 col-xs-6 b-r"> <strong>Username</strong>
                                        <div class="form-group">
                                          <br>
                                          <div class="controls">
                                              <input type="text" name="username" class="form-control" value="<?php echo $a['user']; ?>" required data-validation-required-message="This field is required"> </div>
                                          <div class="form-control-feedback"><small>Masukkan <code>username </code> yang mudah diingat</small></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-6 b-r"> <strong>Password</strong>
                                        <div class="form-group">
                                          <br>
                                          <div class="controls">
                                              <input type="password" name="password" class="form-control"  value="<?php echo $a['pass']; ?>" required data-validation-required-message="This field is required">
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-6 b-r"> <strong>Ulangi Password</strong>
                                        <div class="form-group">
                                          <br>
                                          <div class="controls">
                                              <input type="password" name="password2" data-validation-match-match="password" class="form-control" required>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="text-xs-right">
                                    <button class="btn btn-info">Simpan</button>
                                </div>
                            </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- Row -->
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
