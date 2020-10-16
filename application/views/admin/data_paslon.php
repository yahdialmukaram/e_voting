<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Users <small>Some examples to get you started</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Paslon</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
              
              	<!-- alert simpan data -->
					<?php if ($this->session->flashdata('success')):?>
					<div id="pesan" class="alert alert-success" role="alert">
						<strong><?=$this->session->flashdata('success');?></strong>
					</div>
					<?php endif;?>
					<!-- aler hapus data -->
					<?php if ($this->session->flashdata('error')):?>
					<div id="pesan" class="alert alert-danger" role="alert">
						<strong><?=$this->session->flashdata('error');?></strong>
					</div>
					<?php endif; ?>

                  <button type="button" class="btn btn-primary fa fa-plus" data-toggle="modal" data-target="#modelId">
                  Tambah Paslon
                </button>
                  <div class="x_content">
                
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 1%;">No</th>
                          <th style="text-align: center;">Ketua Paslon</th>
                          <th style="text-align: center;">Wakil Paslon</th>
                          <th>Action</th>
                          <th></th>
                         
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 1; 
                        foreach ($paslon as $key => $value):?>
                        <tr>
                          <td><?=$no++ ?></td>
                          
                          <td style="text-align: center;"><?=$value['nama_paslon'];?><hr><img style="width: 300px;height: 300px;  "
                          src="<?=base_url();?>uploads/original_image/<?=$value['image_paslon'];?>">
                        </td>                       
                          <td style="text-align: center;"><?=$value['nama_wakil'];?><hr><img style="width: 300px;height: 300px;  "
                          src="<?=base_url();?>uploads/original_image/<?=$value['image_wakil'];?>">
                        </td>                       
                          
                          <td>
										<a href="<?php echo base_url(); ?>"class="btn btn-info btn-xs"> <i class="fa fa-wrench"></i>Edit </a>
<br>
										<a href="<?php echo base_url(); ?>"class="btn btn-warning btn-xs"> <i class="fa fa-search-plus"></i> Details</a>
<br>				
										<a href="<?php echo base_url(); ?>"class="btn btn-danger btn-xs"> <i class="fa fa-trash">Delete</i> </a>
                      <hr>
									</td>
              
                          </tr>
                          <?php endforeach; ?>
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


     
  <!-- Modal -->
  <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Input Paslon</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
          <form action="<?=base_url();?>controller/save_paslon/" method="POST" enctype="multipart/form-data">
          <div class="form-group" >
						<label for="exampleInputEmail1">Nama Paslon</label>
						<input type="text" name="nama_paslon" id="" required class="form-control" placeholder="Input nama paslon">						
          </div>
          
          <div class="form-group">
						<label for="exampleInputEmail1">Foto Paslon</label>
						<input type="file" name="image_paslon" id="" required class="form-control">						
          </div>
          
          <div class="form-group">
						<label for="exampleInputEmail1">Nama Wakil</label>
						<input type="text" name="nama_wakil" id="" required class="form-control" placeholder="Input wakil">						
          </div>
          
          <div class="form-group">
						<label for="exampleInputEmail1">Foto Wakil</label>
						<input type="file" name="image_wakil" id="" required class="form-control">						
          </div>
          
          <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Lahir</label>
            <div class='input-group date' id='myDatepicker2'>
                <input type='text' name='tanggal_lahir' class="form-control" />
                <span class="input-group-addon">
                   <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>

          <div class="form-group">
						<label for="exampleInputEmail1">Visi Misi</label>
						<textarea type="text" name="visi" id="" required class="form-control" cols="30"
            rows="7"> </textarea>						
					</div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
      </div>
    </div>
  </div>
  
         </div>
