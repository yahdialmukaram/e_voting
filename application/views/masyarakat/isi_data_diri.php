<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $title ?> </title>

    <!-- Bootstrap -->
    <link href="<?= base_url();?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url();?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url();?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?= base_url();?>assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
	  <link href="<?= base_url();?>assets/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css"
		rel="stylesheet">
      <!-- Datatables -->
      <link href="<?=base_url();?>assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="<?= base_url();?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Custom Theme Style -->
    <link href="<?= base_url();?>assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
         
        </div>

<!-- page content -->
     <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Identitas Diri</h3>
              </div>
            </div>
            <div class="clearfix"></div>
     

            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Identitas </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                 
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    
                    <div class="clearfix"></div>
                  </div>

                  <div class="box-body">
                    <div class="alert alert-warning alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h4><i class="icon fa fa-info"></i> Peringatan</h4>
                      <center> Dalam pengisian data. Isilah data dengan benar, jika tidak ada cukup di isi dengan " - ".</center>
                    </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left input_mask" action="<?=base_url();?>" method="POST" enctype="multipart/form-data">
                    
            
												<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Foto Ktp</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
														<input type="file" required class="form-control" name="foto" accept="image/*" onchange="loadFile(event)">
                          </div>
												</div>

												<div class="form-group">
													<div class="col-sm-3"></div>
													<div class="col-sm-6">
														<img id="output" class="gambar" src="http://localhost/fies/asset/upload.png">
													</div>
												</div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nik</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <input type="text" name="nik" class="form-control" placeholder="" required>
                        </div>
                      </div> 

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <input type="text" name="nama" class="form-control" placeholder="" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <textarea name="alamat" id="alamat" class="form-control" placeholder="input alamat" required cols=40" rows="2"></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal lahir</label>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class='input-group date' id='myDatepicker2'>
                            <input type='text' name="tgl_lahir" class="form-control" required/>
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>   
                      </div>
                      </div>
                  
                    
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis kelamin</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <select name="jenis_kelamin" class="form-control" required>
                            <option>laki-laki</option>
                            <option>Perempuan</option>
                          </select>
                        </div>
                      </div>
                  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Agama</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <select name="agama" class="form-control" required>
                            <option>Islam</option>
                            <option>Kristen</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                            <option>Katolik</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Status Perkawinan</label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <select name="jenis_kelamin" class="form-control" required>
                            <option>Kawin</option>
                            <option>Belum Kawin</option>
                            <option>Duda</option>
                            <option>Janda</option>
                          </select>
                        </div>
                      </div>



           
                      </div>

                    


                    

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <a href="<?=base_url();?>c_login" class="btn btn-primary btn-sm"> <i class="fa fa-reply-all"></i> Kembali</a>
						   <!-- <button class="btn btn-primary btn-sm" type="reset">Reset</button> -->
                          <button type="submit" class="btn btn-success btn-sm"> <i class="fa fa-save"></i> Save</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
         
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
 						
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
