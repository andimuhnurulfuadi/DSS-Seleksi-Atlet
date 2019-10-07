<?php
      $kd = $_GET['kd_pengumuman'];
      $query= mysqli_query($koneksi,"SELECT * FROM tbl_pengumuman WHERE kd_pengumuman='$kd'");
      $data = mysqli_fetch_array($query);

      $nama=$data['nama_pengumuman'];
      $isi=$data['isi'];
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
          <li class="breadcrumb-item"><a href="adminweb.php?module=pengumuman">Pengumuman</a></li>
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
                <h4 class="card-title">Form Ubah Pengumuman</h4>
                <h6 class="card-subtitle">Form ini digunakan untuk merubah pengumuman </a></h6>
                <form class="m-t-40" action="../admin/module/pengumuman/aksi_edit.php" method="POST">
                    <div class="form-group">
                        <h5>Kode</h5>
                        <div class="controls">
                            <input type="text" name="kd" class="form-control" value="<?php echo $kd; ?>" readonly></div>
                        <div class="form-control-feedback"><small>Kode pengumuman otomatis dari sistem</small></div>
                    </div>
                    <div class="form-group">
                        <h5>Tentang<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>" required data-validation-required-message="This field is required" > </div>
                        <div class="form-control-feedback"><small>Masukkan <code> judul pengumuman </code> yang ingin disampaikan</small></div>
                    </div>
                    <div class="form-group">
                        <label>Isi</label>
                        <textarea class="form-control" rows="8" name="isi" ><?php echo $isi; ?></textarea>
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
