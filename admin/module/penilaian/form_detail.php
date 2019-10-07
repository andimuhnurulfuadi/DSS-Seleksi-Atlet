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
          $kd=$_GET['kd_penilaian'];
          $query = mysqli_query($koneksi,"SELECT * FROM  tbl_penilaian p JOIN tbl_atlit a ON p.kd_atlit=a.kd_atlit WHERE p.kd_penilaian='$kd'");
          $judul = mysqli_fetch_array($query);
         ?>
        <!-- column -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Detail Penilaian <?php echo $judul['nama']; ?></h4>
                <h6 class="card-subtitle">Berisi detail perhitungan nilai <?php echo $judul['nama']; ?></h6>
                <table id="demo-foo-addrow2" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                  <?php
                  $query = mysqli_query($koneksi,"SELECT *,t.total as totaln,p.total as totalp FROM  tbl_penilaian p JOIN tbl_temp_normalisasi t ON p.kd_penilaian=t.kd_penilaian WHERE p.kd_penilaian='$kd'");
                  while ($d=mysqli_fetch_array($query)) {
                    ?>
                    <thead>
                        <tr align="center">
                          <th colspan="5"><b>Nilai Kriteria<b></th>

                        </tr>
                        <tr align="center">
                            <th>Usia dan Kelas (C1)</th>
                            <th>Keterampilan (C2)</th>
                            <th>Fisik (C3)</th>
                            <th>Kesehatan (C4)</th>
                            <th>Prestasi (C5)</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr align="center">
                            <td><?php echo number_format($d['C1']); ?></td>
                            <td><?php echo number_format($d['C2']); ?></td>
                            <td><?php echo number_format($d['C3']); ?></td>
                            <td><?php echo number_format($d['C4']); ?></td>
                            <td><?php echo number_format($d['C5']); ?></td>
                            <td><?php echo number_format($d['total']); ?></td>
                        </tr>
                    </tbody>
                    <thead>
                      <tr align="center">
                        <th colspan="5"><b>Nilai Normalisasi<b></th>
                      </tr>
                    </thead>
                    <tbody>

                        <tr align="center">
                            <td><?php echo number_format($d['N1'],2); ?></td>
                            <td><?php echo number_format($d['N2'],2); ?></td>
                            <td><?php echo number_format($d['N3'],2); ?></td>
                            <td><?php echo number_format($d['N4'],2); ?></td>
                            <td><?php echo number_format($d['N5'],2); ?></td>
                            <td ><?php echo number_format($d['totaln'],2); ?></td>
                        </tr>
                    </tbody>
                    <thead>
                      <tr align="center">
                        <th colspan="5"><b>Bobot<b></th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr align="center">
                          <?php
                              $queryB=mysqli_query($koneksi,"SELECT * FROM tbl_kriteria");
                              $i=1;
                              while ($b=mysqli_fetch_array($queryB)) {
                                $index='N'.$i;
                          ?>
                            <td><?php echo $b['bobot_kt']/100; ?> X <?php echo number_format($d[$index],2); ?> </td>
                          <?php $i++;} ?>
                            <td ><b><?php echo number_format($d['nilai_akhir'],2); ?></b></td>
                        </tr>
                    </tbody>
                  <?php } ?>
                </table>
                <div class="text-xs-right">
                    <a href="adminweb.php?module=penilaian"><button class="btn btn-inverse">Tutup</button></a>
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
