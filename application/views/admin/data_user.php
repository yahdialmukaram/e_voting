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

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data User</h2>
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
                  <button type="button" class="btn btn-primary fa fa-plus " data-toggle="modal"
                    data-target="#exampleModal">
                    Tambah Admin Sistem
                  </button>
                  <div class="x_content">
                
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 1%;">No</th>
                          <th>Username</th>
                          <th>Password</th>
                          <th>Edit Password</th>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Level</th>
                          </th>
                         
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 1; 
                        foreach ($user as $key => $value):?>
                        <tr>
                          <td><?=$no++?></td>
                          <td><?=$value['username'];?></td>
                          <td><?=$value['password'];?></td>
                          <td style="text-align: center;">
                          <a href="<?php echo base_url(); ?>c_admin/edit_siswa/"
                              class="btn btn-success btn-xs"> <i class="fa fa-edit"></i> Edit</a>
                          </td>
                          <td><?=$value['nama'];?></td>
                          <td><?=$value['email'];?></td>
                          <td><?=$value['level'];?></td>
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
				<h5 class="modal-title" id="exampleModalLabel">Tambah Admin</h5>
			</div>
			<div class="modal-body">

				<form action="<?=base_url();?>controller/add_admin" method="POST" enctype="multipart/form-data">

          <div class="form-group">
            <label class="control-label col-md-12 col-sm-3 col-xs-12">Username</label>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <input type="text" name="username" class="form-control"required placeholder="masukan username" >
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-12 col-sm-3 col-xs-12">Password</label>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <input type="password" name="password" class="form-control"required placeholder="masukan password" >
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-12 col-sm-3 col-xs-12">Nama</label>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <input type="text" name="nama" class="form-control"required placeholder="masukan nama" >
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-12 col-sm-3 col-xs-12">Email</label>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <input type="email" name="email" class="form-control"required placeholder="masukan email" aria-describedby="helpId" >
              <small id="helpId" class="text-muted-red" >Email</small>
            </div>
          </div>
          

          <div class="form-group">
            <label class="control-label col-md-12 col-sm-3 col-xs-12">Level
            </label>
            <div class="col-md-3 col-sm-9 col-xs-12">
              <select name="level" id="" class="form-control">
                <option>admin</option>
              </select>
            </div>
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