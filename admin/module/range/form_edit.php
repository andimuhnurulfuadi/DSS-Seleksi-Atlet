<?php
      $kd = $_GET['kd_range'];
      $query= mysqli_query($koneksi,"SELECT * FROM tbl_range_penilaian WHERE kd_range='$kd'");
      $data = mysqli_fetch_array($query);

      $ket=$data['keterangan'];
      $nilai=$data['nilai'];
 ?>
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
          <li class="breadcrumb-item"><a href="adminweb.php?module=rang">Range Penilaian</a></li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
          <h4 class="text-themecolor">Edit</h4>
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
                <h4 class="card-title">Form Ubah Range Penilaian</h4>
                <h6 class="card-subtitle">Form ini digunakan untuk mengubah data range penilaian</a></h6>
                <form class="m-t-40" action="../admin/module/range/aksi_edit.php" method="POST">
                    <div class="form-group">
                        <h5>Kode</h5>
                        <div class="controls">
                            <input type="text" name="kd" class="form-control" value="<?php echo $kd; ?>" readonly></div>
                        <div class="form-control-feedback"><small>Kode range penilaian otomatis dari sistem</small></div>
                    </div>
                    <div class="form-group">
                        <h5>Keterangan Range<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="keterangan" class="form-control" value="<?php echo $ket; ?>" required data-validation-required-message="This field is required"> </div>
                        <div class="form-control-feedback"><small>Masukkan <code> nama range penilaian </code> yang ingin dibuat</small></div>
                    </div>
                    <div class="form-group">
                        <h5>Nilai<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="nilai" id="select" required class="form-control">
                              <option value="1" <?php if($nilai==1){ echo "selected";} ?>>1</option>
                              <option value="2" <?php if($nilai==2){ echo "selected";} ?>>2</option>
                              <option value="3" <?php if($nilai==3){ echo "selected";} ?>>3</option>
                              <option value="4" <?php if($nilai==4){ echo "selected";} ?>>4</option>
                            </select>
                        </div>
                        <div class="form-control-feedback"><small>Pilih <code> nilai</code> untuk range penilaian = angka(1-4)</small></div>
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
