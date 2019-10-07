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
          <li class="breadcrumb-item"><a href="adminweb.php?module=subkriteria">Sub Kriteria</a></li>
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
                <h4 class="card-title">Form Tambah Sub Kriteria</h4>
                <h6 class="card-subtitle">Form ini digunakan untuk menambahkan sub kriteria baru</a></h6>
                <form class="m-t-40" action="../admin/module/sub_kriteria/aksi_simpan.php" method="POST">
                  <?php
                      $query = "SELECT max(kd_subkt) as maxkd FROM tbl_sub_kriteria";
                      $hasil = mysqli_query($koneksi,$query);
                      $data = mysqli_fetch_array($hasil);
                      $kode = $data['maxkd'];
                      $noUrut = (int) substr($kode, 3);
                      $noUrut++;
                      $char = "SK";
                      $kodeBaru = $char . sprintf("%03s", $noUrut);

                   ?>
                    <div class="form-group">
                        <h5>Kode</h5>
                        <div class="controls">
                            <input type="text" name="kd" class="form-control" value="<?php echo $kodeBaru; ?>" readonly></div>
                        <div class="form-control-feedback"><small>Kode sub kriteria otomatis dari sistem</small></div>
                    </div>
                    <div class="form-group">
                        <h5>Pilih Cabang Olahraga</h5>
                        <div class="controls">
                          <?php if ($jabatan=='admin') { ?>
                            <select name="cabor" id="select" required class="form-control">
                              <?php
                                  $query =mysqli_query($koneksi,"SELECT * FROM tbl_cabor");
                                  while ($cabor=mysqli_fetch_array($query)) {
                               ?>
                              <option value="<?php echo $cabor['kd_cabor']; ?>"><?php echo $cabor['nama_cabor']; ?></option>
                            <?php } ?>
                            </select>
                          <?php } else if($jabatan=='pelatih silat'){ ?>
                            <select name="cabor" id="select" required class="form-control" readonly>
                              <?php
                                  $query =mysqli_query($koneksi,"SELECT * FROM tbl_cabor WHERE nama_cabor='Pencak Silat'");
                                  while ($cabor=mysqli_fetch_array($query)) {
                               ?>
                              <option value="<?php echo $cabor['kd_cabor']; ?>"><?php echo $cabor['nama_cabor']; ?></option>
                            <?php } ?>
                            </select>
                          <?php }else if($jabatan=='pelatih takraw'){ ?>
                            <select name="cabor" id="select" required class="form-control" readonly>
                              <?php
                                  $query =mysqli_query($koneksi,"SELECT * FROM tbl_cabor WHERE nama_cabor='Sepak Takraw'");
                                  while ($cabor=mysqli_fetch_array($query)) {
                               ?>
                              <option value="<?php echo $cabor['kd_cabor']; ?>"><?php echo $cabor['nama_cabor']; ?></option>
                            <?php } ?>
                            </select>
                          <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Pilih Kriteria</h5>
                        <div class="controls">
                            <select name="kriteria" id="select" required class="form-control">
                              <?php
                                  $query =mysqli_query($koneksi,"SELECT * FROM tbl_kriteria");
                                  while ($kriteria=mysqli_fetch_array($query)) {
                               ?>
                              <option value="<?php echo $kriteria['kd_kriteria']; ?>"><?php echo $kriteria['nama_kt']; ?></option>
                            <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Sub Kriteria<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="nama" class="form-control" required data-validation-required-message="This field is required"> </div>
                        <div class="form-control-feedback"><small>Masukkan <code>nama sub kriteria </code> yang ingin ditambahkan</small></div>
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
