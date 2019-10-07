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
                  <li class="breadcrumb-item active">Detail</li>
                </ol>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                  <h4 class="text-themecolor">Detail</h4>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <?php
          $kdsub=$_GET['kd_sub'];
          $query = mysqli_query($koneksi,"SELECT * FROM  tbl_sub_kriteria where kd_subkt='$kdsub'");
          $judul = mysqli_fetch_array($query);
         ?>
        <!-- column -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Detail Sub Kriteria <?php echo $judul['nama_subkt']; ?></h4>
                <h6 class="card-subtitle">Berisi data range penilaian dari sub kriteria <?php echo $judul['nama_subkt']; ?></h6>
                <?php if($jabatan=='pelatih takraw' OR $jabatan=='pelatih silat'){ ?>
                  <div class="m-t-40">
                      <div class="d-flex">
                          <div class="mr-auto">
                              <div class="form-group">
                                  <a href="adminweb.php?module=tambah_detail_subkt&kd_sub=<?php echo $judul['kd_subkt']; ?>" id="demo-btn-addrow" class="btn btn-info "><i class="icon wb-plus" aria-hidden="true"></i>Tambah
                                  </a>
                                  <small>Range penilaian sub kriteria baru akan ditambahkan di baris terakhir.</small> </div>
                          </div>
                      </div>
                  </div>
                <?php } ?>
                <table id="demo-foo-addrow2" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                    <thead>
                        <tr align="center">
                            <th>Nilai</th>
                            <th>Keterangan</th>
                            <th>Syarat</th>
                            <?php if($jabatan=='pelatih takraw' OR $jabatan=='pelatih silat'){ ?>
                              <th  class="min-width">Aksi</th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                        $query = mysqli_query($koneksi,"SELECT * FROM detail_sub_kriteria d JOIN tbl_sub_kriteria s ON d.kd_subkt=s.kd_subkt JOIN tbl_range_penilaian r ON d.kd_range=r.kd_range where s.kd_subkt='$kdsub'");
                        while ($d=mysqli_fetch_array($query)) {
                       ?>
                        <tr>
                            <td><?php echo $d['nilai']; ?></td>
                            <td><?php echo $d['keterangan']; ?></td>
                            <td><?php echo $d['syarat']; ?></td>
                            <?php if($jabatan=='pelatih takraw' OR $jabatan=='pelatih silat'){ ?>
                              <td align="center">
                                <div class="btn-group">
                                  <button onclick="return swal({
                                      title: 'Info!',
                                      text: 'Apakah anda yakin ingin menghapus data ini?',
                                      type: 'warning',
                                      showCancelButton: true,
                                      cancelButtonText:'Batal',
                                      confirmButtonColor: '#DD6B55',
                                      confirmButtonText: 'Ya,Hapus data!',
                                      closeOnConfirm: false
                                  }, function(isConfirm){
                                      if(isConfirm){
                                         window.location='<?php echo $admin_url?>module/sub_kriteria/aksi_hapus_detail.php?kd_sub=<?php echo $d['kd_subkt']; ?>&kd_range=<?php echo $d['kd_range']; ?>';
                                      }
                                  });"
                                  type="button" class="btn  btn-icon btn-pure btn-danger " data-toggle="tooltip" data-original-title="Hapus"><i class="ti-trash" aria-hidden="true"></i></button>
                                </div>
                              </td>
                            <?php } ?>
                        </tr>
                      <?php } ?>
                    </tbody>

                </table>
                <div class="text-xs-right">
                    <a href="adminweb.php?module=subkriteria"><button class="btn btn-inverse">Tutup</button></a>
                </div>
            </div>
        </div>
        <!-- column -->
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
