<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data DPT Belum Memilih</h3>
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
										<?php if ($this->session->flashdata('success')) :?>
										<div class="alert alert-success" role="alert">
											<strong>Success</strong>
											<p><?=$this->session->flashdata('success');
											?></p>
										</div>
										<?php endif;?>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 1%;">No</th>
                          <th>nik</th>
                          <th>nama</th>
                          <th>alamat</th>
                          <th>tempat lahir</th>
                          <th>tanggal lahir</th>
                          <th>jenis kelamin</th>
                          <th>no hp</th>
                          <th>agama</th>
                          <th>status perkawinan</th>
                          <th>status</th>
                          <th>foto ktp (klik tombol)</th>
                          <th>opsi</th>
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
                          <td><?=$value['tempat_lahir'];?></td>
                          <td><?=$value['tanggal_lahir'];?></td>
                          <td><?=$value['jenis_kelamin'];?></td>
                          <td><?=$value['no_hp'];?></td>
                          <td><?=$value['agama'];?></td>
                          <td><?=$value['status_perkawinan'];?></td>
													<td>
														<?php if ($value['status']==0):?>
													<a href="#" class="label label-danger" onclick="verifikasi(<?=$value['id_masyarakat']?>);"><i class="fa fa-ban"></i> Belum Verifikasi</a>
													<?php elseif ($value['status']==1):?>
													<a href="#" class="label label-success" onclick="cancel_verifikasi(<?=$value['id_masyarakat']?>)"><i class="fa fa-check"></i> Terverifikasi</a>
													<?php elseif ($value['status']==2):?>
													<a href="#" class="label label-warning"><i class="fa fa-comment-o"></i> Telah Memilih</a>
													<?php endif;?>
													</td>
                                         <td><?=$value['foto_ktp'];?></td>

                      <!-- <td>
                      <a href="<?php echo base_url(); ?>c_admin/edit_siswa/"
                          class="btn btn-danger btn-xs"> <i class="fa fa-edit"></i> Aktifkan </a>
                      </td> -->
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
            <textarea name="usulan" id="usulan" class="form-control" cols="40" rows="12"></textarea>
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


				 
				 <!-- Modal verifikasi-->
				 <div class="modal fade" id="verifikasi" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
					 <div class="modal-dialog" role="document">
						 <div class="modal-content">
							 <form class="form-verifikasi" method="post">
							 <div class="modal-header">
								 <h5 class="modal-title">Konfirmasi Verifikasi</h5>
									
							 </div>
							 <div class="modal-body">
								 <input type="hidden" name="id" value="" class="id_masyarakat">
								 <div class="text"></div>
							 </div>
							 <div class="modal-footer">
								 <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
								 <button type="submit" class="btn btn-primary">Ya</button>
							 </div>
							 </form>
						 </div>
					 </div>
				 </div>

				 <script>
					 function verifikasi(id) { 
						 $(".form-verifikasi").attr("action",'<?=base_url();?>controller/update_status/verifikasi')
						 $(".id_masyarakat").val(id);
						 $(".text").text("Yakin akan verifikasi data ini ?")
						 $("#verifikasi").modal("show");

					  }
						function cancel_verifikasi(id) { 
							$(".form-verifikasi").attr("action",'<?=base_url();?>controller/update_status/cancel')
						 $(".id_masyarakat").val(id);
						 $(".text").text("Yakin akan batalkan verifikasi untuk data ini  ?")
						 $("#verifikasi").modal("show");
						 }
				 </script>
