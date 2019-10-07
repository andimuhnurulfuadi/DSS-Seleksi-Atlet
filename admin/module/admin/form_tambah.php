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
          <li class="breadcrumb-item"><a href="adminweb.php?module=admin">Admin</a></li>
          <li class="breadcrumb-item active">Tambah</li>
        </ol>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
          <h4 class="text-themecolor">Tambah</h4>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Tambah Admin</h4>
                <h6 class="card-subtitle">Form ini digunakan untuk menambahkan admin atau pelatih baru</a></h6>
                <form class="m-t-40" action="../admin/module/admin/aksi_simpan.php" method="POST">
                  <?php
                      $query = "SELECT max(kd_admin) as maxkd FROM tbl_admin";
                      $hasil = mysqli_query($koneksi,$query);
                      $data = mysqli_fetch_array($hasil);
                      $kode = $data['maxkd'];
                      $noUrut = (int) substr($kode, 2);
                      $noUrut++;
                      $char = "A";
                      $kodeBaru = $char . sprintf("%04s", $noUrut);

                   ?>
                    <div class="form-group">
                        <h5>Kode</h5>
                        <div class="controls">
                            <input type="text" name="kd" class="form-control" value="<?php echo $kodeBaru; ?>" readonly></div>
                        <div class="form-control-feedback"><small>Kode admin otomatis dari sistem</small></div>
                    </div>
                    <div class="form-group">
                        <h5>Nama<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="nama" class="form-control" required data-validation-required-message="This field is required"> </div>
                        <div class="form-control-feedback"><small>Masukkan <code>nama lengkap </code> admin atau pelatih</small></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <h5>Jenis Kelamin <span class="text-danger">*</span></h5>
                                <fieldset class="controls">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" value="L" name="jenkel" required id="styled_radio1" class="custom-control-input">
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
                    <div class="form-group">
                        <h5>Username<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="username" class="form-control" required data-validation-required-message="This field is required"> </div>
                        <div class="form-control-feedback"><small>Masukkan <code>username </code> yang mudah diingat</small></div>
                    </div>
                    <div class="form-group">
                        <h5>Password<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="password" name="password" class="form-control" required data-validation-required-message="This field is required"> </div>
                    </div>
                    <div class="form-group">
                        <h5>Ulangi Password<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="password" name="password2" data-validation-match-match="password" class="form-control" required> </div>
                    </div>
                    <div class="form-group">
                        <h5>Pilih Jabatan</h5>
                        <div class="controls">
                            <select name="jabatan" id="select" required class="form-control">
                              <option value="admin">Admin</option>
                              <option value="pelatih silat">Pelatih Silat</option>
                              <option value="pelatih takraw">Pelatih Takraw</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-xs-right">
                        <button class="btn btn-info">Simpan</button>
                        <button type="reset" class="btn btn-inverse">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
