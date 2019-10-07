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
          <li class="breadcrumb-item"><a href="adminweb.php?module=range">Range Penilaian</a></li>
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
                <h4 class="card-title">Form Tambah Range Penilaian</h4>
                <h6 class="card-subtitle">Form ini digunakan untuk menambahkan range penilaian baru</a></h6>
                <form class="m-t-40" action="../admin/module/range/aksi_simpan.php" method="POST">
                  <?php
                      $query = "SELECT max(kd_range) as maxkd FROM tbl_range_penilaian";
                      $hasil = mysqli_query($koneksi,$query);
                      $data = mysqli_fetch_array($hasil);
                      $kode = $data['maxkd'];
                      $noUrut = (int) substr($kode, 2);
                      $noUrut++;
                      $char = "R";
                      $kodeBaru = $char . sprintf("%04s", $noUrut);

                   ?>
                    <div class="form-group">
                        <h5>Kode</h5>
                        <div class="controls">
                            <input type="text" name="kd" class="form-control" value="<?php echo $kodeBaru; ?>" readonly></div>
                        <div class="form-control-feedback"><small>Kode range penilaian otomatis dari sistem</small></div>
                    </div>
                    <div class="form-group">
                        <h5>Keterangan Range<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="keterangan" class="form-control" required data-validation-required-message="This field is required"> </div>
                        <div class="form-control-feedback"><small>Pilih <code> nama range penilaian </code> yang ingin dibuat</small></div>
                    </div>
                    <div class="form-group">
                        <h5>Nilai<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="nilai" id="select" required class="form-control">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                            </select>
                        </div>
                        <div class="form-control-feedback"><small>Masukkan <code> nilai</code> untuk range penilaian = angka(1-4)</small></div>
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
