
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title><?=$title; ?>  </title>

    <!-- Bootstrap -->
    <link href="<?= base_url();?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url();?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url();?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?= base_url();?>assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="<?= base_url();?>assets/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href="<?= base_url();?>assets/vendors/normalize-css/normalize.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <!-- Bootstrap Colorpicker -->
    <link href="<?= base_url();?>assets/vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">

    <link href="<?= base_url();?>assets/vendors/cropper/dist/cropper.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?= base_url();?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="<?= base_url();?>assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?= base_url();?>assets/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?= base_url();?>assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url();?>assets/build/css/custom.min.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?= base_url();?>assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    
  </head>

  

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?=base_url('masyarakat')?>" class="site_title"><i class="fa fa-paw"></i> <span>E-Voting</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?= base_url();?>images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?= $this->session->userdata('nama');?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">

                  <li><a href="<?=base_url();?>masyarakat/home/"><i class="fa fa-dashboard"></i> Home <span class="fa fa-chevron"></span></a>
                  <li><a href="<?=base_url();?>masyarakat/input_pilihan/"><i class="fa fa-user"></i> Input Pilihan Anda</a>
                  <li><a href="<?= base_url();?>c_login/logout"><i class="fa fa-sign-out"></i> Log Out</a></li>
               
                  </li>
        
            
                </ul>

            
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                   <?= $this->session->userdata('nama');?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                   
                    <li><a href="<?= base_url();?>c_login/logout"><i class="fa fa-sign-out"></i> Log Out</a></li>
                    <!-- <li><a href="< base_url();?>masyarakat/edit_profil"><i class="fa fa-edit"></i> Edit Profil</a></li> -->
                   <li> <a href="#" onclick="edit_profil();"> <i class="fa fa-edit"> Edit Profil</i> </a></li>
                    <li><a href="<?= base_url();?>masyarakat/data_diri"><i class="fa fa-user"></i> Details Diri</a></li>
                  </ul>
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

 <!-- modal edit  data -->
<div class="modal fade" id="edit_profil" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog modal-dialog" role="document">
		<div class="modal-content">
			<form action="<?=base_url();?>controller/edit_profil" method="post">
			<div class="modal-header">
				<h5 class="modal-title">Edit Profil</h5>
			</div>

      <div class="modal-body">
          <form action="<?=base_url();?>/" method="POST" enctype="multipart/form-data">
          <div class="form-group" >
						<label for="exampleInputEmail1">Nik</label>
						<input type="text" name="nik" value="" id="" required class="form-control">						
          </div>

          <div class="form-group" >
						<label for="exampleInputEmail1">Nama</label>
						<input type="text" name="nama" id="" required class="form-control">						
          </div>

          <div class="form-group" >
						<label for="exampleInputEmail1">Alamat</label>
						<textarea class="form-control" name="alamat" id="" required ></textarea>						
          </div>

          <div class="form-group" >
						<label for="exampleInputEmail1">Tempat lahir</label>
						<input type="text" name="tempat lahir" id="" required class="form-control">						
          </div>

          <div class="form-group" >
						<label for="exampleInputEmail1">Tanggal lahir</label>
						<input type="text" name="tanggal_lahir" id="" required class="form-control">						
          </div>

          <div class="form-group">
												<label for="exampleInputEmail1">Jenis Kelamin
												</label>
											
													<select name="jenis_kelamin" id="" class="form-control">
														<option>Laki Laki</option>
														<option>Perempuan</option>
													</select>
		                     </div>

          <div class="form-group" >
						<label for="exampleInputEmail1">No hp</label>
						<input type="text" name="no_hp" id="" required class="form-control">						
          </div>

          <div class="form-group">
										    <label for="exampleInputEmail1">Agama
												</label>
													<select name="agama" id="" class="form-control">
														<option>Islam</option>
														<option>Kristen</option>
														<option>Hindu</option>
														<option>Budha</option>
													</select>
												</div>

                        <div class="form-group" >
                        <label for="exampleInputEmail1">Foto Ktp</label>
                        <input type="file" name="foto_ktp" id="" class="form-control">						
                      </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1">Staus Pernikahan
												</label>
										
													<select name="status_perkawinan" id="" class="form-control">
														<option>Sudah Menikah</option>
														<option>Belum Menikah</option>
													</select>
												</div>

                    </div>

			<!-- <div class="modal-body">Yakin Akan Edit Data Ini ?
				<input type="hidden" name="id" id="id">
			</div> -->
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
				<button type="submit" class="btn btn-primary">Update</button>
			</div>
      </form>
		</div>
	</div>
</div>
<script>
function edit_profil(id){
  $("#id").val(id);
  $("#edit_profil").modal("show");
}

function update(id)
{
  $('$update').val(id);

}
</script>

