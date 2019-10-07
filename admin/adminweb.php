<?php
	session_start();

  if(empty($_SESSION['namauser'])AND empty($_SESSION['passuser'])){
      header('location:index.php');
  }else{


  $user = $_SESSION['namauser'];
  $pass = $_SESSION['passuser'];
	$jabatan = $_SESSION['jabatanuser'];

  include "../lib/koneksi.php";
	include "../lib/config.php";
  $kueri = mysqli_query($koneksi,"SELECT * FROM tbl_admin WHERE user='$user' AND pass='$pass'");
  $pecah= mysqli_fetch_array($kueri);

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Admin</title>
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--sweetalert CSS -->
		<link rel="stylesheet" type="text/css" href="assets/node_modules/sweetalert/sweetalert.css" />
    <!-- <link href="assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet"> -->
    <!-- Custom CSS -->
    <link href="assets/dist/css/style.min.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="assets/dist/css/pages/dashboard1.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-blue fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">memuat</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="assets/images/logo-text-1.png" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->
                         <img src="assets/images/logo-light-text-1.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-sm-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- User Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/userm.png" alt="user" class=""> <span class="hidden-md-down"><?php echo $pecah['nama']; ?> &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                            <div class="dropdown-menu dropdown-menu-right animated bounceIn">
                                <!-- text-->
                                <a href="login.php" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                                <!-- text-->
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End User Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap text-center">--- MENU ---</li>
										<?php if($jabatan=='admin'){ ?>
											<li>
												<a href="adminweb.php?module=profil" ><i class="fa fa-user"></i><span class="hide-menu">Profil </span></a>
											</li>
                        <li>
                          <a href="adminweb.php?module=admin" ><i class="fa fa-users"></i><span class="hide-menu">Admin </span></a>
                        </li>
                        <li>
                          <a href="adminweb.php?module=pengumuman" ><i class="mdi mdi-bell-ring"></i><span class="hide-menu">Pengumuman</span></a>
                        </li>
                        <li>
                          <a href="adminweb.php?module=kriteria" ><i class="fa fa-id-card"></i><span class="hide-menu">Kriteria </span></a>
                        </li>
                        <li>
                          <a href="adminweb.php?module=subkriteria"><i class="fa fa-bars"></i><span class="hide-menu">Sub Kriteria </span></a>
                        </li>
                        <li>
                          <a href="adminweb.php?module=cabor" ><i class="mdi mdi-soccer"></i><span class="hide-menu">Cabang Olahraga </span></a>
                        </li>
                        <li>
                          <a href="adminweb.php?module=atlit" ><i class="mdi mdi-run"></i><span class="hide-menu">Atlit </span></a>
                        </li>
                        <li>
                          <a href="adminweb.php?module=laporan" ><i class="fa fa-print"></i><span class="hide-menu">Laporan </span></a>
                        </li>
											<?php } else { ?>
												<li>
                          <a href="adminweb.php?module=profil" ><i class="fa fa-user"></i><span class="hide-menu">Profil </span></a>
                        </li>
                        <li>
                          <a href="adminweb.php?module=pengumuman" ><i class="mdi mdi-bell-ring"></i><span class="hide-menu">Pengumuman</span></a>
                        </li>
                        <li>
                          <a href="adminweb.php?module=kriteria" ><i class="fa fa-id-card"></i><span class="hide-menu">Kriteria </span></a>
                        </li>
                        <li>
                          <a href="adminweb.php?module=subkriteria"><i class="fa fa-bars"></i><span class="hide-menu">Sub Kriteria </span></a>
                        </li>
                        <li>
                          <a href="adminweb.php?module=range" ><i class="mdi mdi-calendar-text"></i><span class="hide-menu">Range Penilaian </span></a>
                        </li>
                        <li>
                          <a href="adminweb.php?module=atlit" ><i class="mdi mdi-run"></i><span class="hide-menu">Atlit </span></a>
                        </li>
                        <li>
                          <a href="adminweb.php?module=penilaian" ><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Penilaian Atlit</span></a>
                        </li>
                        <li>
                          <a href="adminweb.php?module=laporan" ><i class="fa fa-print"></i><span class="hide-menu">Laporan </span></a>
                        </li>
											<?php } ?>
                        <li>
                          <a href="logout.php" ><i class="fa fa-power-off"></i><span class="hide-menu">Logout</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Module acces  -->
        <!-- ============================================================== -->
        <?php
				if($_GET['module']=='profil'){ //profil
					include "module/profil/form_profil.php";
				}  else if($_GET['module']=='edit_profil'){
					include "module/profil/form_edit.php";

        } else if($_GET['module']=='admin'){ //admin
          include "module/admin/form_list.php";
        } else if($_GET['module']=='tambah_admin'){
          include "module/admin/form_tambah.php";
        } else if($_GET['module']=='edit_admin'){
          include "module/admin/form_edit.php";

        } else if($_GET['module']=='pengumuman'){ //pengumuman
          include "module/pengumuman/form_list.php";
        } else if($_GET['module']=='tambah_pengumuman'){
          include "module/pengumuman/form_tambah.php";
        } else if($_GET['module']=='edit_pengumuman'){
          include "module/pengumuman/form_edit.php";

				} else if($_GET['module']=='kriteria'){ //kriteria
          include "module/kriteria/form_list.php";

				} else if($_GET['module']=='subkriteria'){ //subkriteria
          include "module/sub_kriteria/form_list.php";
        } else if($_GET['module']=='tambah_subkriteria'){
          include "module/sub_kriteria/form_tambah.php";
        } else if($_GET['module']=='edit_subkriteria'){
          include "module/sub_kriteria/form_edit.php";
				} else if($_GET['module']=='detail_subkriteria'){
          include "module/sub_kriteria/form_detail.php";
				} else if($_GET['module']=='tambah_detail_subkt'){
					include "module/sub_kriteria/form_tambah_detail.php";


				} else if($_GET['module']=='range'){ //range
					include "module/range/form_list.php";
				} else if($_GET['module']=='tambah_range'){
					include "module/range/form_tambah.php";
				} else if($_GET['module']=='edit_range'){
					include "module/range/form_edit.php";

        }  else if($_GET['module']=='cabor'){ //cabor
          include "module/cabor/form_list.php";
        } else if($_GET['module']=='tambah_cabor'){
          include "module/cabor/form_tambah.php";
        } else if($_GET['module']=='edit_cabor'){
          include "module/cabor/form_edit.php";

        } else if($_GET['module']=='atlit'){ //atlit
          include "module/atlit/form_list.php";
        } else if($_GET['module']=='detail_atlit'){
          include "module/atlit/form_detail.php";

        }  else if($_GET['module']=='penilaian'){ //penilaian
          include "module/penilaian/form_list.php";
				} else if($_GET['module']=='pilih_atlit'){
          include "module/penilaian/form_pilih.php";
        } else if($_GET['module']=='tambah_penilaian'){
          include "module/penilaian/form_tambah.php";
        } else if($_GET['module']=='hitung_nilai'){
          include "module/penilaian/aksi_hitung.php";
        } else if($_GET['module']=='detail_penilaian'){
          include "module/penilaian/form_detail.php";


        } else if($_GET['module']=='laporan'){ //laporan
          include "module/laporan/form_list.php";

        } else{
          include "module/profil/form_profil.php";

        }
       ?>

        <!-- ============================================================== -->
        <!-- End Module acces  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <div class="right-sidebar">
            <div class="slimscrollright">
                <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                <div class="r-panel-body">
                    <ul id="themecolors" class="m-t-20">
                        <li><b>With Light sidebar</b></li>
                        <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme working">4</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                        <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                        <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme ">7</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2019 PPLP by andi
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="assets/node_modules/popper/popper.min.js"></script>
    <script src="assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="assets/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="assets/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="assets/dist/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="assets/node_modules/raphael/raphael-min.js"></script>
    <script src="assets/node_modules/morrisjs/morris.min.js"></script>
    <script src="assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- sweetalert jquery -->
		<script src="assets/node_modules/sweetalert/sweetalert.min.js" type="text/javascript"></script>
		<script src="assets/node_modules/sweetalert/jquery.sweet-alert.custom.js" type="text/javascript"></script>
    <!-- <script src="assets/node_modules/toast-master/js/jquery.toast.js"></script> -->
    <!-- Chart JS -->
    <script src="assets/dist/js/dashboard1.js"></script>
    <!-- <script src="assets/node_modules/toast-master/js/jquery.toast.js"></script> -->
		<!-- Validation JavaScript -->
    <script src="assets/dist/js/pages/validation.js"></script>
		<!--stickey kit -->
    <script src="assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
		<!-- This is data table -->
    <script src="assets/node_modules/datatables/jquery.dataTables.min.js"></script>
		<!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
		<script>
    ! function(window, document, $) {
        "use strict";
        $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
    }(window, document, jQuery);
    </script>
		<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
</body>
</html>
<?php } ?>
