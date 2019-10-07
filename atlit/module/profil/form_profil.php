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
              $query = mysqli_query($koneksi,"SELECT * FROM tbl_atlit a JOIN tbl_cabor c ON a.kd_cabor=c.kd_cabor WHERE a.user_atlit='$user' AND a.pass_atlit='$pass'");
              $a=mysqli_fetch_array($query);
           ?>
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <center class="m-t-30"> <img src="../admin/assets/images/users/user.png" class="img-circle" width="150" />
                            <h4 class="card-title m-t-10"><?php echo $a['nama']; ?></h4>
                            <h6 class="card-subtitle"><?php echo $a['nama_cabor']; ?></h6>
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
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">Profil</a> </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="profile" role="tabpanel">
                          <form action="../atlit/module/profil/aksi_edit.php" method="POST">
                            <div class="card-body">
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <h5>Kode</h5>
                                              <div class="controls">
                                                  <input type="text" name="kd" class="form-control" value="<?php echo $a['kd_atlit']; ?>" readonly></div>
                                              <div class="form-control-feedback"><small>Kode admin otomatis dari sistem</small></div>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Nama Lengkap<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="nama" class="form-control" required data-validation-required-message="This field is required" value="<?php echo $a['nama']; ?>"> </div>
                                            <div class="form-control-feedback"><small>Masukkan <code>nama lengkap </code> anda</small></div>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Tempat dan Tanggal Lahir<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="ttl" class="form-control" required data-validation-required-message="This field is required" value="<?php echo $a['ttl']; ?>"> </div>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Usia</h5>
                                            <div class="controls">
                                                <select name="usia" id="select" required class="form-control">
                                                  <?php for ($i=10; $i <20 ; $i++) { ?>
                                                    <option value="<?php echo $i; ?>" <?php if($a['umur']==$i){ echo "selected";} ?>><?php echo $i; ?> Tahun</option>
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
                                                    <input type="radio" value="L" name="jenkel" required id="styled_radio1" class="custom-control-input" <?php if($a['jenkel']=='L'){echo "checked";} ?>>
                                                    <label class="custom-control-label" for="styled_radio1">Laki - laki</label>
                                                </div>
                                            </fieldset>
                                            <fieldset>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" value="P" name="jenkel" id="styled_radio2" class="custom-control-input" <?php if($a['jenkel']=='P'){echo "checked";} ?>>
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
                                            <input type="text" name="sekolah" class="form-control" required data-validation-required-message="This field is required" value="<?php echo $a['sekolah']; ?>"> </div>
                                        <div class="form-control-feedback"><small>Masukkan <code>nama sekolah </code> anda</small></div>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5> Telepon  <span class="danger">*</span> </h5>
                                            <input type="text" class="form-control required" maxlength="13"  name="telepon" id="telepon" value="<?php echo $a['telepon']; ?>">
                                            <div class="form-control-feedback"><small>Inputan hanya boleh <code>angka </code> saja</small></div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4">
                                      <div class="form-group">
                                          <h5>Username<span class="text-danger">*</span></h5>
                                          <div class="controls">
                                              <input type="text" name="username" class="form-control" required data-validation-required-message="This field is required" value="<?php echo $a['user_atlit']; ?>"> </div>
                                          <div class="form-control-feedback"><small>Masukkan <code>username </code> yang mudah diingat</small></div>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                          <h5>Password<span class="text-danger">*</span></h5>
                                          <div class="controls">
                                              <input type="password" name="password" class="form-control" required data-validation-required-message="This field is required" value="<?php echo $a['pass_atlit']; ?>"> </div>
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
                                                  <option value="<?php echo $cabor['kd_cabor']; ?>" <?php if($a['kd_cabor']==$cabor['kd_cabor']){echo "selected";} ?>><?php echo $cabor['nama_cabor']; ?> </option>
                                                <?php } ?>
                                              </select>
                                              <div class="form-control-feedback"><small>Pilih <code>cabang Olahraga </code>yang ingin di daftar</small></div>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
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
