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
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Cabang Olahraga</a></li>
                  <li class="breadcrumb-item active"></li>
                </ol>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                  <h4 class="text-themecolor">Cabang Olahraga</h4>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->

        <!-- column -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Cabang Olahraga</h4>
                <h6 class="card-subtitle">Berisi data cabang olahraga yang ada di PPLP</h6>
                <div class="m-t-40">
                    <div class="d-flex">
                        <div class="mr-auto">
                            <div class="form-group">
                                <a href="adminweb.php?module=tambah_cabor" id="demo-btn-addrow" class="btn btn-info "><i class="icon wb-plus" aria-hidden="true"></i>Tambah
                                </a>
                                <small>Cabang olahraga baru akan ditambahkan di baris terakhir.</small> </div>
                        </div>
                    </div>
                </div>
                <table id="demo-foo-addrow2" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                    <thead>
                        <tr align="center">
                            <th>Kode</th>
                            <th>Cabang Olahraga</th>
                            <th  class="min-width">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                        include "../lib/config.php";
                        include "../lib/koneksi.php";

                        $query = mysqli_query($koneksi,"SELECT * FROM tbl_cabor");
                        while ($cabor=mysqli_fetch_array($query)) {

                       ?>
                        <tr>
                            <td><?php echo $cabor['kd_cabor']; ?></td>
                            <td><?php echo $cabor['nama_cabor']; ?></td>
                            <td align="center">
                              <div class="btn-group">
                                <a href="adminweb.php?module=edit_cabor&kd_cabor=<?php echo $cabor['kd_cabor']; ?>"  type="button" class="btn  btn-icon btn-pure btn-warning " data-toggle="tooltip" data-original-title="Ubah"><i class="ti-pencil-alt" aria-hidden="true"></i></a>
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
                                       window.location='<?php echo $admin_url?>module/cabor/aksi_hapus.php?kd_cabor=<?php echo $cabor['kd_cabor']?>';
                                    }
                                });"
                                type="button" class="btn  btn-icon btn-pure btn-danger " data-toggle="tooltip" data-original-title="Hapus"><i class="ti-trash" aria-hidden="true"></i></button>


                              </div>
                            </td>
                        </tr>
                      <?php } ?>
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