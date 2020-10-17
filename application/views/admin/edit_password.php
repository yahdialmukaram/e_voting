     <!-- page content -->
     <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h4>Form Edit Password</h4>
              </div>      
            </div>
            <div class="clearfix"></div>
     

            <div class="row">
              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h5>Edit Password Account </h5>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                 
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left input_mask" action="<?=base_url();?>controller/update_password/<?=$edit['id_user'];?>" method="POST" enctype="multipart/form-data">
          
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ubah Password</label>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                          <input type="text" name="password"  class="form-control" placeholder="Ubah password" required>
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <a href="<?=base_url();?>controller/data_user/" class="btn btn-primary btn-sm fa fa-reply-all"> Kembali</a>
                          <button type="submit" class="btn btn-success btn-sm fa fa-save"> Update</button>
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