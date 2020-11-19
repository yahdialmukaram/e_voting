<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data DPT Selesai Memilih</h3>
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
                    <h2>Data DPT</h2>
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
                  <!-- <button type="button" class="btn btn-primary fa fa-plus " data-toggle="modal"
                    data-target="#exampleModal">
                    Tambah User
                  </button> -->
                  <div class="x_content">
                
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 1%;">No</th>
                          <th style="width: 13%;">nik</th>
                          <th>nama</th>
                          <th>alamat</th>
                          <th style="width: 1%;">jenis kelamin</th>
                          <th style="width: 13%;">status</th>
                          <th style="width: 10%;">opsi</th>
                          </th>
                         
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 1; 
                        foreach ($pemilih as $key => $value):?>
                        <tr>
                          <td><?=$no++?></td>
                          <td><?=$value['nik'];?></td>
                          <td><?=$value['nama'];?></td>
                          <td><?=$value['alamat'];?></td>
                          <td><?=$value['jenis_kelamin'];?></td>
                          <td>
                          <?php if ($value['status']== 1 ) :?>
                        <a href="#" class="label label-primary"><i class="fa fa-check"></i> Telah Memilih</a>                        
                        <?php endif;?>
                          </td>
                      <td>
                      <a href="<?php echo base_url(); ?>c_admin/edit_siswa/"
                          class="btn btn-danger btn-xs"> <i class="fa fa-trash"></i> Delete </a>
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


        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Paslon</h5>
			</div>
			<div class="modal-body">

				<form action="<?=base_url();?>masyarakat/save_usulan" method="POST" enctype="multipart/form-data">
                <div class="form-group">
						<label for="exampleInputEmail1">Silahkan Masukan Usulan Pembangunan Anda</label>
            <textarea name="usulan" id="usulan" class="form-control" cols=40" rows="12"></textarea>
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


         