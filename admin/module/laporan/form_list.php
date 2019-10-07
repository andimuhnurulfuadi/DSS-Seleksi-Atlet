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
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Laporan</a></li>
                  <li class="breadcrumb-item active"></li>
                </ol>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                  <h4 class="text-themecolor">Laporan</h4>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Laporan Hasil Penilaian Atlit</h4>
                        <h6 class="card-subtitle">Berisi nilai akhir dari setiap atlit yang telah mengikuti seleksi</h6>
                        <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr align="center">
                                        <th>No</th>
                                        <th>Atlit</th>
                                        <th>Cabang Olahraga</th>
                                        <th>Nilai Seleksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if ($jabatan=='pelatih takraw') {
                                          $query=mysqli_query($koneksi,"SELECT * FROM tbl_atlit a JOIN tbl_penilaian p ON a.kd_atlit=p.kd_atlit JOIN tbl_cabor c ON a.kd_cabor=c.kd_cabor WHERE c.nama_cabor='Sepak Takraw' ORDER BY p.nilai_akhir DESC");
                                        }elseif ($jabatan=='pelatih silat') {
                                          $query=mysqli_query($koneksi,"SELECT * FROM tbl_atlit a JOIN tbl_penilaian p ON a.kd_atlit=p.kd_atlit JOIN tbl_cabor c ON a.kd_cabor=c.kd_cabor WHERE c.nama_cabor='Pencak Silat' ORDER BY p.nilai_akhir DESC");
                                        }else{
                                          $query=mysqli_query($koneksi,"SELECT * FROM tbl_atlit a JOIN tbl_penilaian p ON a.kd_atlit=p.kd_atlit JOIN tbl_cabor c ON a.kd_cabor=c.kd_cabor ORDER BY p.nilai_akhir DESC");
                                        }
                                        $no=1;
                                        while ($a=mysqli_fetch_array($query)){
                                     ?>
                                    <tr align="center">
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $a['nama']; ?></td>
                                        <td><?php echo $a['nama_cabor']; ?></td>
                                        <td><?php echo number_format($a['nilai_akhir'],2); ?></td>

                                    </tr>
                                  <?php $no++;} ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
