<?php
    $kd = $_GET['kd_sub'];
    $query = mysqli_query($koneksi,"SELECT * FROM tbl_sub_kriteria sb JOIN tbl_cabor c ON sb.kd_cabor=c.kd_cabor JOIN tbl_kriteria k ON sb.kd_kriteria=k.kd_kriteria WHERE kd_subkt='$kd'");
    $pecah = mysqli_fetch_array($query);

    $kdcabor=$pecah['kd_cabor'];
    $kdkriteria=$pecah['kd_kriteria'];
    $namasub=$pecah['nama_subkt'];
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
          <li class="breadcrumb-item"><a href="adminweb.php?module=subkriteria">Sub Kriteria</a></li>
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
                <h4 class="card-title">Form Ubah Sub Kriteria</h4>
                <h6 class="card-subtitle">Form ini digunakan untuk merubah data sub kriteria</a></h6>
                <form class="m-t-40" action="../admin/module/sub_kriteria/aksi_edit.php" method="POST">
                    <div class="form-group">
                        <h5>Kode</h5>
                        <div class="controls">
                            <input type="text" name="kd" class="form-control" value="<?php echo $kd; ?>" readonly></div>
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
                              <option value="<?php echo $cabor['kd_cabor']; ?>" <?php if($cabor['kd_cabor']==$kdcabor){echo "selected";} ?>><?php echo $cabor['nama_cabor']; ?></option>
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
                              <option value="<?php echo $kriteria['kd_kriteria']; ?>" <?php if($kriteria['kd_kriteria']==$kdkriteria){echo "selected";} ?>><?php echo $kriteria['nama_kt']; ?></option>
                            <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Sub Kriteria<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="nama" class="form-control" value="<?php echo $namasub; ?>" required data-validation-required-message="This field is required"> </div>
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
