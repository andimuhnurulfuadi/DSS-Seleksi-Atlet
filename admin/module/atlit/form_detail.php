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
                  <li class="breadcrumb-item"><a href="adminweb.php?module=atlit">Atlit</a></li>
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
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->
        <div class="row">
          <?php
              $kd = $_GET['kd_atlit'];
              $query = mysqli_query($koneksi,"SELECT * FROM tbl_atlit a JOIN tbl_cabor c ON a.kd_cabor=c.kd_cabor where a.kd_atlit='$kd'");
              $a=mysqli_fetch_array($query);
           ?>
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <center class="m-t-30"> <img src="assets/images/users/user.png" class="img-circle" width="150" />
                            <h4 class="card-title m-t-10"><?php echo $a['nama']; ?></h4>
                            <h6 class="card-subtitle"><?php echo $a['nama_cabor']; ?></h6>
                        </center>
                    </div>
                    <div>
                        <hr> </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs profile-tab" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">Profile</a> </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="profile" role="tabpanel">
                            <div class="card-body">
                                <div class="row">
                                  <div class="col-md-4 col-xs-6 b-r"> <strong>Kode Atlit</strong>
                                      <br>
                                      <p class="text-muted"><?php echo $a['kd_atlit']; ?></p>
                                  </div>
                                    <div class="col-md-8 col-xs-6 b-r"> <strong>Nama Lengkap</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $a['nama']; ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                  <div class="col-md-4 col-xs-6 b-r"> <strong>Tempat dan Tanggal lahir</strong>
                                      <br>
                                      <p class="text-muted"><?php echo $a['ttl']; ?></p>
                                  </div>
                                  <div class="col-md-8 col-xs-6 b-r"> <strong>Usia</strong>
                                      <br>
                                      <p class="text-muted"><?php echo $a['umur']; ?>&nbsp;Tahun</p>
                                  </div>
                                </div>
                                <hr>
                                <div class="row">
                                  <div class="col-md-4 col-xs-6 b-r"> <strong>Jenis Kelamin</strong>
                                      <br>
                                      <p class="text-muted"><?php echo $a['jenkel']; ?></p>
                                  </div>
                                  <div class="col-md-8 col-xs-6 b-r"> <strong>Telepon</strong>
                                    <br>
                                    <p class="text-muted"><?php echo $a['telepon']; ?>&nbsp;Cm</p>
                                  </div>
                                </div>
                                <hr>
                                <div class="row">
                                  <div class="col-md-12 col-xs-6 b-r"> <strong>Sekolah</strong>
                                      <br>
                                      <p class="text-muted"><?php echo $a['sekolah']; ?></p>
                                  </div>
                                </div>
                                <hr>
                                <div class="row">
                                  <div class="col-md-12 col-xs-6 b-r"> <strong>Cabang Olahraga</strong>
                                      <br>
                                      <p class="text-muted"><?php echo $a['nama_cabor']; ?></p>
                                  </div>
                                </div>
                                <hr>
                                <div class="row">
                                  <div class="col-md-4 col-xs-6 b-r"> <strong>Username</strong>
                                      <br>
                                      <p class="text-muted"><?php echo $a['user_atlit']; ?></p>
                                  </div>
                                  <div class="col-md-8 col-xs-6 b-r"> <strong>Password</strong>
                                      <br>
                                      <p class="text-muted"><?php echo $a['pass_atlit']; ?></p>
                                  </div>
                                </div>
                                <div class="text-xs-right">
                                    <a href="adminweb.php?module=atlit"><button class="btn btn-inverse">Tutup</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- Row -->
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
