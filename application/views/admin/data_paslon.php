<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Kandidat</h3>
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
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i
										class="fa fa-wrench"></i></a>
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

					<button type="button" class="btn btn-primary fa fa-plus" data-toggle="modal" data-target="#tambahPaslon">
						Tambah Paslon
					</button>

					<div class="x_content">

						<table id="datatable" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th style="width: 1%;">No</th>
									<th style="text-align: center;">Ketua Paslon</th>
									<th style="text-align: center;">Wakil Paslon</th>
									<th style="width: 5%;">Jumlah Suara </th>
									<th>Action</th>
									<th></th>

								</tr>
							</thead>
							<tbody>
								<?php if ($statusData==true):?>
								<?php $no = 1; 
                        foreach ($paslon as $key => $value):?>
								<tr>
									<td>
										<?=$no++ ?>
									</td>

									<td style="text-align: center;">
										<?=$value['nama_paslon'];?>
										<hr><img style="width: 250px;height: 250px;  "
											src="<?=base_url();?>uploads/original_image/<?=$value['image_paslon'];?>">
									</td>
									<td style="text-align: center;">
										<?=$value['nama_wakil'];?>
										<hr><img style="width: 250px;height: 250px;  "
											src="<?=base_url();?>uploads/original_image/<?=$value['image_wakil'];?>">
									</td>
									<td>
										<label for="" class="label label-success"><?=$value['suara']?> Suara</label>
									</td>

									<td>
										<a href="<?php echo base_url(); ?>controller/edit_paslon/<?=$value['id_paslon']?>"
											class="btn btn-info btn-xs"> <i class="fa fa-wrench"></i> Edit </a>
										<!-- <br> -->
										<!-- <a href="<?php echo base_url(); ?>controller/details_paslon/<?=$value['id_paslon'];?>" class="btn btn-warning btn-xs"> <i class="fa fa-search-plus"></i> Details</a> -->
										<br>
										<a href="#" onclick="details_paslon(<?=$value['id_paslon']?>)"
											class="btn btn-warning btn-sm fa fa-search-plus"> Detils Paslon</a>
										<br>
										<a href="#" onclick="hapus_data(<?=$value['id_paslon']?>);" class="btn btn-danger btn-xs"> <i
												class="fa fa-trash"> Delete</i> </a>
										<hr>
									</td>

								</tr>
								<?php endforeach; ?>
								<?php endif; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahPaslon" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Input Paslon</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?=base_url();?>controller/save_paslon/" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="exampleInputEmail1">Nama Paslon</label>
						<input type="text" name="nama_paslon" id="" required class="form-control" placeholder="Input nama paslon">
						<small>
							<font color="red">nama wajib isi</font>
						</small>
					</div>

					<div class="form-group">
						<label for="exampleInputEmail1">Foto Paslon</label>
						<input type="file" name="image_paslon" id="" required class="form-control">
						<small>
							<font color="red">foto wajib isi</font>
						</small>
					</div>

					<div class="form-group">
						<label for="exampleInputEmail1">Nama Wakil</label>
						<input type="text" name="nama_wakil" id="" required class="form-control" placeholder="Input wakil">
						<small>
							<font color="red">nama wakil wajib isi</font>
						</small>
					</div>

					<div class="form-group">
						<label for="exampleInputEmail1">Foto Wakil</label>
						<input type="file" name="image_wakil" id="" required class="form-control">
						<small>
							<font color="red">foto wakil wajib isi</font>
						</small>
					</div>


					<div class="form-group">
						<label for="exampleInputEmail1">Visi Misi</label>
						<textarea type="text" name="visi" id="" required class="form-control" cols="30" rows="7"> </textarea>
						<small>
							<font color="red">visi misi wajib isi</font>
						</small>
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


<!-- modal konfirmasi hapus data -->
<div class="modal fade" id="konfirmasi" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<form action="<?=base_url();?>controller/delete_paslon" method="post">
				<div class="modal-header">
					<h5 class="modal-title">Konfirmasi Hapus</h5>

				</div>
				<div class="modal-body">Yakin Akan Hapus Data Kandidat ?
					<input type="hidden" name="id" id="id">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
					<button type="submit" class="btn btn-primary">Ya</button>
				</div>
			</form>
		</div>
	</div>
</div>

<style>
	.modal-dialog {
		width: 750px;
	}

</style>
<!-- Modal details-->
<div class="modal fade" id="details_paslon" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Details Paslon</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="" method="post" enctype="multipart/form-data">
					<input type="text" name="id" id="id_p">
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Paslon</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type disabled="text" name="nama_paslon" value="" id="nama_paslon" class="form-control"
								placeholder="">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Image Paslon</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type disabled="text" name="image_paslon" value="" id="image_paslon" class="form-control"
								placeholder="">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Nama wakil</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type disabled="text" name="nama_wakil" value="" id="nama_wakil" class="form-control"
								placeholder="">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Image wakil</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type disabled="text" name="image_wakil" value="" id="image_wakil" class="form-control"
								placeholder="">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Visi</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<!-- <input type disabled="text" name="visi" value="" id="visi" class="form-control" placeholder=""> -->
							<textarea disabled name="visi" id="visi" cols="20" rows="10" style="width: 520px;"></textarea>
						</div>
					</div>

				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
				<!-- <button type="button" class="btn btn-primary">Save</button> -->
			</div>
		</div>
	</div>
</div>

<script>
	function details_paslon(id) {
		$('#id').val(id);
		$.ajax({
			type: "POST",
			url: "<?=base_url();?>controller/show_details_paslon",
			data: {
				id: id
			},
			dataType: "json",
			success: function (response) {
				// console.log(response);
				// $('#id_u').attr('hidden', true);
				$('#id_p').attr('hidden', true);
				$('#nama_paslon').val(response.nama_paslon);
				$('#image_paslon').val(response.image_paslon);
				$('#nama_wakil').val(response.nama_wakil);
				$('#image_wakil').val(response.image_wakil);
				$('#visi').val(response.visi);

				$('#details_paslon').modal('show')
			}
		});


	}


	function hapus_data(id) {
		$("#id").val(id);
		$("#konfirmasi").modal("show");
	}

</script>
