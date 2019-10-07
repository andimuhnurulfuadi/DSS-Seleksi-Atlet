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
          <li class="breadcrumb-item"><a href="adminweb.php?module=detail_subkriteria&kd_sub=<?php echo $_GET['kd_sub']; ?>"> Detail</a></li>
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
                <h4 class="card-title">Form Tambah Detail Sub Kriteria</h4>
                <h6 class="card-subtitle">Form ini digunakan untuk menambahkan range penilaian sub kriteria</a></h6>
                <form class="m-t-40" action="../admin/module/sub_kriteria/aksi_simpan_detail.php" method="POST">
                  <?php
                      $kdsub=$_GET['kd_sub'];
                   ?>
                    <div class="form-group">
                        <h5>Kode</h5>
                        <div class="controls">
                            <input type="text" name="kdsub" class="form-control" value="<?php echo $kdsub; ?>" readonly></div>
                        <div class="form-control-feedback"><small>Kode sub kriteria otomatis dari sistem</small></div>
                    </div>
                    <div class="form-group">
                        <h5>Pilih Range Penilaian</h5>
                        <div class="controls">
                            <select name="kdrange" id="select" required class="form-control">
                              <?php
                                  $query =mysqli_query($koneksi,"SELECT * FROM tbl_range_penilaian");
                                  while ($r=mysqli_fetch_array($query)) {
                               ?>
                              <option value="<?php echo $r['kd_range']; ?>"><?php echo $r['keterangan']; ?> -<?php echo $r['nilai']; ?> </option>
                            <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Syarat</label>
                        <textarea class="form-control" rows="6" name="syarat" >
                        </textarea>
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
