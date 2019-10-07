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
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Penilaian</a></li>
                  <li class="breadcrumb-item active"></li>
                </ol>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                  <h4 class="text-themecolor">Penilaian</h4>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->

        <!-- column -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daftar Penilaian</h4>
                <h6 class="card-subtitle">Berisi data penilaian dari setiap calon atlit yang telah melalui proses seleksi</h6>
                <div class="m-t-40">
                    <div class="d-flex">
                        <div class="mr-auto">
                            <div class="form-group">
                                <a href="adminweb.php?module=pilih_atlit" id="demo-btn-addrow" class="btn btn-info "><i class="icon wb-plus" aria-hidden="true"></i>Tambah
                                </a>
                                <small>Penilaian baru akan ditambahkan di baris terakhir.</small> </div>
                        </div>
                    </div>
                </div>
                <table id="demo-foo-addrow2" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                    <thead>
                        <tr align="center">
                            <th>Kode</th>
                            <th>Tanggal</th>
                            <th>Atlit</th>
                            <th>C1</th>
                            <th>C2</th>
                            <th>C3</th>
                            <th>C4</th>
                            <th>C5</th>
                            <th>Total</th>
                            <th>Nilai Akhir</th>
                            <th  class="min-width">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php

                        if($jabatan=='pelatih silat'){
                          $query = mysqli_query($koneksi,"SELECT * FROM tbl_penilaian p JOIN tbl_atlit a ON p.kd_atlit=a.kd_atlit JOIN tbl_cabor c ON a.kd_cabor=c.kd_cabor WHERE c.nama_cabor='Pencak Silat'");
                        }else if($jabatan=='pelatih takraw'){
                          $query = mysqli_query($koneksi,"SELECT * FROM tbl_penilaian p JOIN tbl_atlit a ON p.kd_atlit=a.kd_atlit JOIN tbl_cabor c ON a.kd_cabor=c.kd_cabor WHERE c.nama_cabor='Sepak Takraw'");
                        }else{}

                        while ($p=mysqli_fetch_array($query)) {
                       ?>
                        <tr>
                            <td><?php echo $p['kd_penilaian']; ?></td>
                            <td><?php echo $p['tgl']; ?></td>
                            <td><?php echo $p['nama']; ?></td>
                            <td><?php echo number_format($p['C1'],2); ?></td>
                            <td><?php echo number_format($p['C2'],2); ?></td>
                            <td><?php echo number_format($p['C3'],2); ?></td>
                            <td><?php echo number_format($p['C4'],2); ?></td>
                            <td><?php echo number_format($p['C5'],2); ?></td>
                            <td><?php echo number_format($p['total'],2); ?></td>
                            <td><?php echo number_format($p['nilai_akhir'],2); ?></td>
                            <td align="center">
                              <div class="btn-group">
                                <a href="adminweb.php?module=detail_penilaian&kd_penilaian=<?php echo $p['kd_penilaian']; ?>"  type="button" class="btn  btn-icon btn-pure btn-success " data-toggle="tooltip" data-original-title="Detail"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
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
                                       window.location='<?php echo $admin_url?>module/penilaian/aksi_hapus.php?kd_penilaian=<?php echo $p['kd_penilaian']?>';
                                    }
                                });"
                                type="button" class="btn  btn-icon btn-pure btn-danger " data-toggle="tooltip" data-original-title="Hapus"><i class="ti-trash" aria-hidden="true"></i></button>


                              </div>
                            </td>
                        </tr>
                      <?php } ?>
                    </tbody>

                </table>
                <div class="">
                    <div class="d-flex">
                        <div class="mr-auto">
                            <div class="form-group">
                                <a href="adminweb.php?module=hitung_nilai" id="demo-btn-addrow" class="btn btn-primary "><i class="icon wb-plus" aria-hidden="true"></i>Hitung
                                </a>
                                <small>Sebelum menghitung, Pastikan seluruh atlit telah melakukan seleksi</small> </div>
                        </div>
                    </div>
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
