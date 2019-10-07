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
          <li class="breadcrumb-item"><a href="adminweb.php?module=penilaian">Penilaian</a></li>
          <li class="breadcrumb-item active">Plih Atlit</li>
        </ol>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
          <h4 class="text-themecolor">Pilih Atlit</h4>
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
                <h4 class="card-title">Pilih Atlit</h4>
                <h6 class="card-subtitle">Form ini digunakan untuk memilih calon atlit yang ingin dinilai</a></h6>
                <form class="m-t-40" action="adminweb.php?module=tambah_penilaian" method="POST">
                    <div class="form-group">
                        <h5>Pilih Atlit</h5>
                        <div class="controls">
                            <select name="kdatlit" id="select" required class="form-control">
                              <option value="">-</option>
                              <?php
                                  if ($jabatan=='pelatih silat') {
                                    $query=mysqli_query($koneksi,"SELECT * FROM tbl_atlit a JOIN tbl_cabor c ON a.kd_cabor=c.kd_cabor WHERE c.nama_cabor='Pencak Silat' AND a.kd_atlit NOT IN(select kd_atlit FROM tbl_penilaian)");
                                  }else{
                                    $query=mysqli_query($koneksi,"SELECT * FROM tbl_atlit a JOIN tbl_cabor c ON a.kd_cabor=c.kd_cabor WHERE c.nama_cabor='Sepak Takraw' AND a.kd_atlit NOT IN(select kd_atlit FROM tbl_penilaian)");
                                  }
                                  while ($atlit= mysqli_fetch_array($query)) {
                               ?>
                                <option value="<?php echo $atlit['kd_atlit']; ?>"><?php echo $atlit['nama']; ?></option>
                              <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="text-xs-right">
                        <button class="btn btn-info">Nilai</button>
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
