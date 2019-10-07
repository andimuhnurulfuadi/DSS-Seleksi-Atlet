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
          <li class="breadcrumb-item"><a href="adminweb.php?module=pilih_atlit">Pilih</a></li>
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
                <h4 class="card-title">Form Tambah Penilaian</h4>
                <h6 class="card-subtitle">Form ini digunakan untuk menambahkan data penilaian calon atlit</a></h6>
                <form class="m-t-40" action="../admin/module/penilaian/aksi_simpan.php" method="POST">
                  <?php
                      $query = "SELECT max(kd_penilaian) as maxkd FROM tbl_penilaian";
                      $hasil = mysqli_query($koneksi,$query);
                      $data = mysqli_fetch_array($hasil);
                      $kode = $data['maxkd'];
                      $noUrut = (int) substr($kode, 2);
                      $noUrut++;
                      $char = "N";
                      $kodeBaru = $char . sprintf("%04s", $noUrut);

                   ?>
                    <div class="form-group">
                        <h5>Kode</h5>
                        <div class="controls">
                            <input type="text" name="kd" class="form-control" value="<?php echo $kodeBaru; ?>" readonly></div>
                        <div class="form-control-feedback"><small>Kode admin otomatis dari sistem</small></div>
                    </div>
                    <div class="form-group">
                        <h5>Tanggal<span class="text-danger"></span></h5>
                        <?php
                            $tgl = date('Y-m-d');
                         ?>
                        <div class="controls">
                            <input type="text" name="tgl" class="form-control"  value="<?php echo $tgl; ?>" readonly> </div>
                    </div>
                     <div class="row">
                       <?php
                             $kdatlit=$_POST['kdatlit'];
                             $queryatlit=mysqli_query($koneksi,"SELECT * FROM tbl_atlit WHERE kd_atlit='$kdatlit'");
                             $atlit=mysqli_fetch_array($queryatlit);

                             $usia=0;
                             if ($atlit['umur']>18) {
                               $usia=4;
                             }elseif ($atlit['umur']<=18 && $atlit['umur']>=17) {
                               $usia=3;
                             }elseif ($atlit['umur']==16) {
                               $usia=2;
                             }else{
                               $usia=1;
                             }
                        ?>
                         <div class="col-md-3">
                             <div class="form-group">
                                 <h5>Kode Atlit</h5>
                                 <input type="text" class="form-control"  name="atlit" value="<?php echo $kdatlit ?>" readonly>
                             </div>
                         </div>
                         <div class="col-md-9">
                           <div class="form-group">
                             <h5>Nama Atlit</h5>
                               <input type="text" class="form-control" name="namaatlit" value="<?php echo $atlit['nama']; ?>" readonly>
                           </div>
                         </div>
                     </div>
                     <?php
                         $query=mysqli_query($koneksi,"SELECT * FROM tbl_kriteria");
                         while ($k=mysqli_fetch_array($query)) {
                      ?>
                      <div class="form-group">
                          <h5><?php echo $k['nama_kt']; ?></h5>
                          <div class="controls">
                                <?php
                                   $namakt=$k['nama_kt'];
                                    if ($jabatan=='pelatih silat') {
                                      $query1=mysqli_query($koneksi,"SELECT * FROM tbl_sub_kriteria s JOIN tbl_cabor c ON s.kd_cabor=c.kd_cabor JOIN tbl_kriteria k ON s.kd_kriteria=k.kd_kriteria  WHERE c.nama_cabor='Pencak Silat' AND k.nama_kt='$namakt'");
                                    }else{
                                      $query1=mysqli_query($koneksi,"SELECT * FROM tbl_sub_kriteria s JOIN tbl_cabor c ON s.kd_cabor=c.kd_cabor JOIN tbl_kriteria k ON s.kd_kriteria=k.kd_kriteria  WHERE c.nama_cabor='Sepak Takraw' AND k.nama_kt='$namakt'");
                                    }
                                    $no=1;
                                    while ($sub= mysqli_fetch_array($query1)) {
                                 ?>

                                 <div class="row">
                                 <div class="col-md-3">
                                   <p><?php echo $no; ?>.&nbsp;<?php echo $sub['nama_subkt']; ?></p>
                                 </div>
                                 <div class="col-md-9">
                                   <select name="<?php echo $sub['kd_subkt']; ?>" id="select" required class="form-control">
                                     <option value="">-</option>
                                     <?php
                                         $kdsub=$sub['kd_subkt'];
                                         $query2=mysqli_query($koneksi,"SELECT * FROM detail_sub_kriteria d JOIN tbl_sub_kriteria s ON d.kd_subkt=s.kd_subkt JOIN tbl_range_penilaian r ON d.kd_range=r.kd_range WHERE s.kd_subkt='$kdsub'");
                                         while ($range=mysqli_fetch_array($query2)) {
                                      ?>
                                       <option value="<?php echo $range['nilai']; ?>"
                                         <?php
                                            if($range['nilai']==$usia && $sub['nama_subkt']=='Usia'){ echo "selected";}
                                         ?>><?php echo $range['nilai']; ?> => <?php echo $range['syarat']; ?></option>
                                     <?php } ?>
                                   </select>
                                 </div>
                               </div>
                                <?php   $no++; } ?>
                          </div>
                      </div>
                    <?php } ?>
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
