
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?=$title?></title>

	<!-- Bootstrap -->
	<link href="<?=base_url();?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="<?=base_url();?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="<?=base_url();?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- Animate.css -->
	<link href="<?=base_url();?>assets/vendors/animate.css/animate.min.css" rel="stylesheet">
	<!-- boostrap-datetimepicker -->
	<link rel="stylesheet"
		href="<?=base_url();?>assets/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css">
	<!-- Custom Theme Style -->
	<link href="<?=base_url();?>assets/build/css/custom.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?=base_url();?>assets/css/css-costume.css">
</head>
<style>
	body {
		color: #73879C;
		background: rgb(250, 250, 250);
		font-family: "Helvetica Neue", Roboto, Arial, "Droid Sans", sans-serif;
		font-size: 13px;
		font-weight: 400;
		line-height: 1.471;
	}

</style>

<body class="nav-md">
	<div class="">
		<div class="">
			<!-- top navigation -->
			<div class="top_nav">
				<div class="nav_menu">
					<nav>

						<ul class="nav navbar-nav navbar-right">
							<li class="">
								<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
									aria-expanded="false">
									<img src="<?=base_url();?>assets/images/admin.png" alt=""><?=$this->session->userdata('username');?>
									<span class=" fa fa-angle-down"></span>
								</a>
								<ul class="dropdown-menu dropdown-usermenu pull-right">
									<!-- <li><a href="<?=base_url();?>controller/ubah_password"> Ubah Password</a>
									</li> -->
									<!-- <li>
                          <a href="javascript:;">
                            <span class="badge bg-red pull-right">50%</span>
                            <span>Settings</span>
                          </a>
                        </li>
                        <li><a href="javascript:;">Help</a></li> -->
									<li><a href="<?=base_url('c_login/logout');?>"><i class="fa fa-sign-out pull-right"></i> Keluar</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- /top navigation -->

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Formulir Pengisian Data Diri <?=$this->session->userdata('username')?></h3>
						</div>


					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>Data Diri</h2>

									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<div id="" class="alert alert-warning alert-dismissible">
										<button type="button" class="close" data-dismiss="alert"
											aria-hidden="true">&times;</button>
										<h4><i class="icon fa fa-warning"></i> Peringatan !</h4>
										Sistem mendeteksi anda sebagai user baru, harap isi data terlebih dahulu sebelum
										Lanjut ke menu berikutnya <br>
										Harap isi data dengan sebenar benarnya, jika data tidak sesui dengan sebenarnya,
										admin berhak untuk menonaktifkan account anda !! <br>
										Jika anda klik simpan berarti anda setuju dengan semua ketentuan yang ada
									</div>
								
			<form id="save_data_diri" enctype="multipart/form-data" class="form-horizontal form-label-right" method="POST"
										action="<?=base_url();?>masyarakat/save_data_diri">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12">NIK</label>
												<div class="col-md-9 col-sm-9 col-xs-12">
													<input type="text" name="nik"
														value="" class="form-control" placeholder="">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12">Nama
												</label>
												<div class="col-md-9 col-sm-9 col-xs-12">
													<input type="text" name="nama" class="form-control"
														placeholder="Nama">
												</div>
                                            </div>
                                            <div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12">
													Alamat
												</label>
												<div class="col-md-9 col-sm-9 col-xs-12">
													<textarea class="form-control" name="alamat" id="" cols="30"
														rows="4"></textarea>
												</div>
											</div>

											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12">Tempat
													Lahir</label>
												<div class="col-md-9 col-sm-9 col-xs-12">
													<input type="text" name="tempat_lahir" class="form-control"
														placeholder="Tempat Lahir">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal
													Lahir</label>
												<div class="col-md-9 col-sm-9 col-xs-12">
													<div class="input-group date" id="myDatepicker2">
														<input type="text" name="tanggal_lahir" 
															class="form-control">
														<span class="input-group-addon">
															<span class="glyphicon glyphicon-calendar"></span>
														</span>
													</div>
												</div>
											</div>
											
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin
												</label>
												<div class="col-md-9 col-sm-9 col-xs-12">
													<select name="jenis_kelamin" id="" class="form-control">
														<option>Laki Laki</option>
														<option>Perempuan</option>
													</select>
												</div>
                                            </div>
                                            
											<div class="ln_solid"></div>
										</div>
										<div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nomor
                                                                HP</label>
                                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" name="no_hp" value="" class="form-control"
                                                                    placeholder="Nomor hp">
                                                            </div>
                                                        </div>

                                        <div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12">Agama
												</label>
												<div class="col-md-9 col-sm-9 col-xs-12">
													<select name="agama" id="" class="form-control">
														<option>Islam</option>
														<option>Kristen</option>
														<option>Hindu</option>
														<option>Budha</option>
													</select>
												</div>
											</div>	
											
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12">Status Perkawinan
												</label>
												<div class="col-md-9 col-sm-9 col-xs-12">
													<select name="status_perkawinan" id="" class="form-control">
														<option>Sudah Menikah</option>
														<option>Belum Menikah</option>
													</select>
												</div>
											</div>
										
									
								
							
											<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> Image</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <input type="file" name="foto_ktp"required  class="form-control" placeholder="" >
                        </div>
                      </div>

											<div class="ln_solid"></div>

										</div>
										<div class="ln_solid"></div>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12 text-center">
												<button type="button" class="btn btn-success simpan"><i
														class="fa fa-save"></i>
													Simpan</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- modal konfirmasi -->
			<div class="modal fade" id="konfirmasi_daftar" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
				aria-hidden="true">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Konfirmasi Simpan<button type="button" class="close"
									data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button></h5>

						</div>
						<div class="modal-body">
							Yakin Akan akan menyimpan data ?
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
							<button type="button" class="btn btn-primary konfirmasi">Ya</button>
						</div>
					</div>
				</div>
			</div>
			<!-- /page content -->

			<!-- footer content -->
			<footer>
				<div class="pull-right">
					E-Voting <a href=""></a>
				</div>
				<div class="clearfix"></div>
			</footer>
			<!-- /footer content -->
		</div>
	</div>

	<!-- jQuery -->
	<script src="<?=base_url();?>assets/vendors/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="<?=base_url();?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- FastClick -->
	<script src="<?=base_url();?>assets/vendors/fastclick/lib/fastclick.js"></script>
	<!-- NProgress -->
	<script src="<?=base_url();?>assets/vendors/nprogress/nprogress.js"></script>
	<!-- iCheck -->
	<script src="<?=base_url();?>assets/vendors/iCheck/icheck.min.js"></script>
	<!-- moment.js -->
	<script src="<?=base_url();?>assets/vendors/moment/min/moment.min.js"></script>
	<!-- bootstrap-datetimepicker -->
	<script
		src="<?=base_url();?>assets/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js">
	</script>
	<!-- Custom Theme Scripts -->
	<script src="<?=base_url();?>assets/build/js/custom.min.js"></script>
	<script>
		$('#tgl_selesai').datetimepicker({
			format: 'DD-MM-YYYY'
		});

		function loadFile(event) {
			var reader = new FileReader();
			reader.onload = function () {
				var output = document.getElementById('output');
				output.src = reader.result;
			};
			reader.readAsDataURL(event.target.files[0]);
		};
		function loadFile2(event) {
			var reader = new FileReader();
			reader.onload = function () {
				var output = document.getElementById('output2');
				output.src = reader.result;
			};
			reader.readAsDataURL(event.target.files[0]);
		};
		$('.simpan').click(function (e) {
			$('#konfirmasi_daftar').modal('show');
		});
		$('.konfirmasi').click(function (e) {
			$('#save_data_diri').submit();
		});
	
	</script>
</body>

</html>
