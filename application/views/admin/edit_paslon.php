
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
      
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Kandidat</h2>
             
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                 
                    <form action="<?=base_url();?>controller/update_paslon/<?=$edit['id_paslon']?>" method="post" data-parsley-validate class="form-horizontal form-label-left">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Palon
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="nama_paslon" value="<?=$edit['nama_paslon']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                        </div>
					  </div>


					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image Paslon 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" name="image_paslon" value="<?=$edit['image_paslon']?>"  id="first-name"  class="form-control col-md-7 col-xs-12">
                        </div>
					  </div>

					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Wakil
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="nama_wakil" value="<?=$edit['nama_wakil']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                        </div>
					  </div>   

					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image Wakil 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" name="image_wakil" value="<?=$edit['image_wakil']?>"  id="first-name"  class="form-control col-md-7 col-xs-12">
                        </div>
            </div>       

            <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Visi Misi
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea type="text" name="visi" rows="13" value="<?=$edit['visi']?>" id="first-name"  class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
					  </div>
              
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="<?=base_url();?>controller/data_paslon"class=" btn btn-primary fa fa-reply" > Beck</a>
                          <button type="submit" class="btn btn-success fa fa-glass"> Update</button>
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

    