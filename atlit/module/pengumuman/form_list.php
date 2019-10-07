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
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Pengumuman</a></li>
                  <li class="breadcrumb-item active"></li>
                </ol>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                  <h4 class="text-themecolor">Pengumuman</h4>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->

        <!-- column -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Pengumuman</h4>
                <h6 class="card-subtitle">Berisi pengumuman - pengumuman dari PPLP untuk para calon atlit</h6>
                <?php
                  $query = mysqli_query($koneksi,"SELECT * FROM tbl_pengumuman");
                  while ($pengumuman=mysqli_fetch_array($query)) {

                 ?>
                <table id="demo-foo-addrow2" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                    <thead>
                        <tr align="center">
                            <th><?php echo $pengumuman['nama_pengumuman']; ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $pengumuman['isi']; ?></td>
                        </tr>
                    </tbody>
                </table>
                <br><hr><br>
              <?php } ?>
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
