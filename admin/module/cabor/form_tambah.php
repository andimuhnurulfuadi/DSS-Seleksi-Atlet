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
          <li class="breadcrumb-item"><a href="adminweb.php?module=cabor">Cabang Olahraga</a></li>
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
                <h4 class="card-title">Form Tambah Cabang Olahraga</h4>
                <h6 class="card-subtitle">Form ini digunakan untuk menambahkan cabang olahraga baru</a></h6>
                <form class="m-t-40" action="../admin/module/cabor/aksi_simpan.php" method="POST">
                  <?php
                      $query = "SELECT max(kd_cabor) as maxkd FROM tbl_cabor";
                      $hasil = mysqli_query($koneksi,$query);
                      $data = mysqli_fetch_array($hasil);
                      $kode = $data['maxkd'];
                      $noUrut = (int) substr($kode, 3);
                      $noUrut++;
                      $char = "CB";
                      $kodeBaru = $char . sprintf("%03s", $noUrut);

                   ?>
                    <div class="form-group">
                        <h5>Kode</h5>
                        <div class="controls">
                            <input type="text" name="kd" class="form-control" value="<?php echo $kodeBaru; ?>" readonly></div>
                        <div class="form-control-feedback"><small>Kode cabang olahraga otomatis dari sistem</small></div>
                    </div>
                    <div class="form-group">
                        <h5>Cabang Olahraga<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="nama" class="form-control" required data-validation-required-message="This field is required"> </div>
                        <div class="form-control-feedback"><small>Masukkan <code> nama cabang olahraga </code> yang ingin ditambahkan</small></div>
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
