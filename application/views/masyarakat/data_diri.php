
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
      
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Details Diri: <?= $this->session->userdata('username');?></h2>
             
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <!-- <br /> -->
                 
                    <form action="<?= base_url();?>masyarakat/data_diri/<?= $data_diri['id_masyarakat']?>" method="post" data-parsley-validate class="form-horizontal form-label-left">
            
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nik
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type disabled="text" name="nik" value="<?=$data_diri['nik']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                        </div>
					  </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type disabled="text" name="nama" value="<?=$data_diri['nama']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                        </div>
					  </div>

					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Alamat
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type disabled="text" name="alamat" value="<?=$data_diri['alamat']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                        </div>
					  </div>   

					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tempat Lahir
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type disabled="text" name="tempat_lahir" value="<?=$data_diri['tempat_lahir']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                        </div>
					  </div>   
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal Lahir
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type disabled="text" name="tanggal_lahir" value="<?=$data_diri['tanggal_lahir']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                        </div>
					  </div>   
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jenis Kelamin
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type disabled="text" name="jenis_kelamin" value="<?=$data_diri['jenis_kelamin']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                        </div>
					  </div>   
  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No Henphone
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type disabled="text" name="no_hp" value="<?=$data_diri['no_hp']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                        </div>
					  </div>   
  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Agama
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type disabled="text" name="agama" value="<?=$data_diri['agama']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                        </div>
					  </div>   
  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Foto ktp
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <img style="width: 200px; height: 200px;" src="<?=base_url();?>uploads/original_image/<?=$data_diri['foto_ktp']?>" class="form-control col-md-7 col-xs-12">
                        </div>
					  </div>   
  

                      <div class="ln_solid"></div>
                    
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="<?=base_url();?>masyarakat"class=" btn btn-primary fa fa-reply" > Back</a>
                        
                        </div>
                      </div>
                  
                    </form>
                  </div>
                </div>
              </div>
            </div>    
          </div>
        </div>
        <!-- /page content -->

    