
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
          <li class="breadcrumb-item"><a href="adminweb.php?module=kriteria">Kriteria</a></li>
          <li class="breadcrumb-item active"></li>
        </ol>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
          <h4 class="text-themecolor">Kriteria</h4>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<?php
      //Usia dan Kelas
      $query1 = mysqli_query($koneksi,"SELECT * FROM tbl_kriteria WHERE kd_kriteria='K0001'");
      $pecah = mysqli_fetch_array($query1);
      $kd1 = $pecah['kd_kriteria'];
      $k1 = $pecah['bobot_kt'];
      //Keterampilan
      $query= mysqli_query($koneksi,"SELECT * FROM tbl_kriteria WHERE kd_kriteria='K0002'");
      $pecah = mysqli_fetch_array($query);
      $kd2 = $pecah['kd_kriteria'];
      $k2 = $pecah['bobot_kt'];
      //Fisik
      $query = mysqli_query($koneksi,"SELECT * FROM tbl_kriteria WHERE kd_kriteria='K0003'");
      $pecah = mysqli_fetch_array($query);
      $kd3 = $pecah['kd_kriteria'];
      $k3 = $pecah['bobot_kt'];
      //Kesehatan
      $query = mysqli_query($koneksi,"SELECT * FROM tbl_kriteria WHERE kd_kriteria='K0004'");
      $pecah = mysqli_fetch_array($query);
      $kd4 = $pecah['kd_kriteria'];
      $k4 = $pecah['bobot_kt'];
      //Prestasi
      $query = mysqli_query($koneksi,"SELECT * FROM tbl_kriteria WHERE kd_kriteria='K0005'");
      $pecah = mysqli_fetch_array($query);
      $kd5 = $pecah['kd_kriteria'];
      $k5 = $pecah['bobot_kt'];
 ?>

<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Kriteria</h4>
                <h6 class="card-subtitle">Form ini digunakan untuk merubah bobot dari setiap kriteria</a></h6>
                <form class="m-t-40" action="../admin/module/kriteria/aksi_edit.php" method="POST">
                    <div class="form-group">
                        <input type="hidden" name="kd1" value="<?php echo $kd1; ?>">
                        <h4>Usia = <span class="text-danger" id="demo1"></span>%</h4>
                        <div class="controls">
                        <input type="range" min="1" max="100" value="<?php echo $k1; ?>" class="form-control" id="k1" name="k1" <?php if($jabatan!='admin'){ echo "disabled";} ?>>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="kd2" value="<?php echo $kd2; ?>">
                        <h4>Keterampilan = <span class="text-danger" id="demo2"></span>%</h4>
                        <div class="controls">
                        <input type="range" min="1" max="100" value="<?php echo $k2; ?>" class="form-control" id="k2" name="k2" <?php if($jabatan!='admin'){ echo "disabled";} ?>>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="kd3" value="<?php echo $kd3; ?>">
                        <h4>Fisik = <span class="text-danger" id="demo3"></span>%</h4>
                        <div class="controls">
                        <input type="range" min="1" max="100" value="<?php echo $k3; ?>" class="form-control" id="k3" name="k3" <?php if($jabatan!='admin'){ echo "disabled";} ?>>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="kd4" value="<?php echo $kd4; ?>">
                        <h4>Kesehatan = <span class="text-danger" id="demo4"></span>%</h4>
                        <div class="controls">
                        <input type="range" min="1" max="100" value="<?php echo $k4; ?>" class="form-control" id="k4" name="k4" <?php if($jabatan!='admin'){ echo "disabled";} ?>>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="kd5" value="<?php echo $kd5; ?>">
                        <h4>Prestasi = <span class="text-danger" id="demo5"></span>%</h4>
                        <div class="controls">
                        <input type="range" min="1" max="100" value="<?php echo $k5; ?>" class="form-control" id="k5" name="k5" <?php if($jabatan!='admin'){ echo "disabled";} ?>>
                        </div>
                    </div>
                    <?php if ($jabatan=='admin') { ?>

                    <div class="text-xs-right">
                        <button class="btn btn-info">Simpan</button>
                        <button type="reset" class="btn btn-inverse">Batal</button>
                    </div>
                  <?php } ?>
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

<script>
    //slider usia dan kelas
    var slider1 = document.getElementById("k1");
    var output1 = document.getElementById("demo1");
    output1.innerHTML = slider1.value;
    slider1.oninput = function() {
      output1.innerHTML = this.value;
    }
    //slider keterampilan
    var slider2 = document.getElementById("k2");
    var output2 = document.getElementById("demo2");
    output2.innerHTML = slider2.value;
    slider2.oninput = function() {
      output2.innerHTML = this.value;
    }
    //slider fisik
    var slider3 = document.getElementById("k3");
    var output3 = document.getElementById("demo3");
    output3.innerHTML = slider3.value;
    slider3.oninput = function() {
      output3.innerHTML = this.value;
    }
    //slider kesehatan
    var slider4 = document.getElementById("k4");
    var output4 = document.getElementById("demo4");
    output4.innerHTML = slider4.value;
    slider4.oninput = function() {
      output4.innerHTML = this.value;
    }
    //slider prestasi
    var slider5 = document.getElementById("k5");
    var output5 = document.getElementById("demo5");
    output5.innerHTML = slider5.value;
    slider5.oninput = function() {
      output5.innerHTML = this.value;
    }
</script>
