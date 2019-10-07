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
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Atlit</a></li>
                  <li class="breadcrumb-item active"></li>
                </ol>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                  <h4 class="text-themecolor">Atlit</h4>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->

        <!-- column -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daftar Atlit Seleksi</h4>
                <h6 class="card-subtitle">Berisi data atlit yang dapat mengikuti seleksi</h6>
                <table id="demo-foo-addrow2" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                    <thead>
                        <tr align="center">
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Cabang Olahraga</th>
                            <th  class="min-width">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                        include "../lib/config.php";
                        include "../lib/koneksi.php";
                        if ($jabatan=="admin") {

                          $query = mysqli_query($koneksi,"SELECT * FROM tbl_atlit a JOIN tbl_cabor c ON a.kd_cabor=c.kd_cabor");
                          while ($atlit=mysqli_fetch_array($query)) {

                       ?>
                        <tr>
                            <td><?php echo $atlit['kd_atlit']; ?></td>
                            <td><?php echo $atlit['nama']; ?></td>
                            <td><?php echo $atlit['nama_cabor']; ?></td>
                            <td align="center">
                              <div class="btn-group">
                                <a href="adminweb.php?module=detail_atlit&kd_atlit=<?php echo $atlit['kd_atlit']; ?>"  type="button" class="btn  btn-icon btn-pure btn-success " data-toggle="tooltip" data-original-title="Detail"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                              </div>
                            </td>
                        </tr>
                      <?php
                          }
                      }else if($jabatan=="pelatih silat"){
                            $query = mysqli_query($koneksi,"SELECT * FROM tbl_atlit a JOIN tbl_cabor c ON a.kd_cabor=c.kd_cabor where c.nama_cabor='Pencak Silat'");
                            while ($atlit=mysqli_fetch_array($query)) {
                          ?>
                          <tr>
                              <td><?php echo $atlit['kd_atlit']; ?></td>
                              <td><?php echo $atlit['nama']; ?></td>
                              <td><?php echo $atlit['nama_cabor']; ?></td>
                              <td align="center">
                                <div class="btn-group">
                                  <a href="adminweb.php?module=detail_atlit&kd_atlit=<?php echo $atlit['kd_atlit']; ?>"  type="button" class="btn  btn-icon btn-pure btn-success " data-toggle="tooltip" data-original-title="Detail"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
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
                                         window.location='<?php echo $admin_url?>module/atlit/aksi_hapus.php?kd_atlit=<?php echo $atlit['kd_atlit']?>';
                                      }
                                  });"
                                  type="button" class="btn  btn-icon btn-pure btn-danger " data-toggle="tooltip" data-original-title="Hapus"><i class="ti-trash" aria-hidden="true"></i></button>
                                </div>
                              </td>
                          </tr>
                        <?php
                            }
                        } else if($jabatan=="pelatih takraw"){
                          $query = mysqli_query($koneksi,"SELECT * FROM tbl_atlit a JOIN tbl_cabor c ON a.kd_cabor=c.kd_cabor where c.nama_cabor='Sepak Takraw'");
                          while ($atlit=mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td><?php echo $atlit['kd_atlit']; ?></td>
                            <td><?php echo $atlit['nama']; ?></td>
                            <td><?php echo $atlit['nama_cabor']; ?></td>
                            <td align="center">
                              <div class="btn-group">
                                <a href="adminweb.php?module=detail_atlit&kd_atlit=<?php echo $atlit['kd_atlit']; ?>"  type="button" class="btn  btn-icon btn-pure btn-success " data-toggle="tooltip" data-original-title="Detail"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
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
                                       window.location='<?php echo $admin_url?>module/atlit/aksi_hapus.php?kd_atlit=<?php echo $atlit['kd_atlit']?>';
                                    }
                                });"
                                type="button" class="btn  btn-icon btn-pure btn-danger " data-toggle="tooltip" data-original-title="Hapus"><i class="ti-trash" aria-hidden="true"></i></button>
                              </div>
                            </td>
                        </tr>
                      <?php
                        }
                      } else{}
                        ?>
                    </tbody>

                </table>
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
