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
                    <h2>Paslon</h2>
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

            
                  <div class="x_content">
				  <div id="" class="alert alert-warning alert-dismissible">
										<button type="button" class="close" data-dismiss="alert"
											aria-hidden="true">&times;</button>
									<h4><i class="icon fa fa-warning"></i> Peringatan !</h4>
									<marquee><h4>Masukan Sura Anda, Anda hanya dapat memilh satu kali. Terimkasih atas partisipasinya </h4>	</marquee>
									</div> 
				  </div>
					
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 1%;">No</th>
                          <th style="text-align: center;">Ketua Paslon</th>
                          <th style="text-align: center;">Wakil Paslon</th>
                          <th style="width: 10%;">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 1; 
                        foreach ($paslon as $key => $value):?>
                        <tr>
                          <td><?=$no++ ?></td>
                          
                          <td style="text-align: center;"><?=$value['nama_paslon'];?><hr><img style="width: 200px;height: 200px;  "
                          src="<?=base_url();?>uploads/original_image/<?=$value['image_paslon'];?>">
                         
                        </td>                       
                          <td style="text-align: center;"><?=$value['nama_wakil'];?><hr><img style="width: 200px;height: 200px;  "
                          src="<?=base_url();?>uploads/original_image/<?=$value['image_wakil'];?>">
							        
                                <td>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                         <a href="#" onclick="visi(<?=$value['id_paslon']?>);"> <i class="btn btn-danger fa fa-book"> Visi Misi</i> </a>
                         <br>
							 <br>
							 <?php if ($status == false):?>
								<a href="#" onclick="verifikasi();"> <i class="btn btn-primary fa fa-check-circle"> Pilih</i> </a>
								<?php else: ?>
							 <?php if ($suara==null):?>
								<a href="#" onclick="input_pilihan(<?=$value['id_paslon']?>);"> <i class="btn btn-primary fa fa-edit"> Pilih</i> </a>
							 <?php endif;?>
								<?php endif;?>
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

  
         </div>

         
 <!-- modal visi misi -->
<div class="modal fade" id="visi" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><i class="btn btn-warning fa fa-volume-down"> Visi Misi Kandidat</i></h5>
				
			</div>
      
			<div class="modal-body">    
               <div id="isi-visi">

							 </div>			
               <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
			</div>
          </div>
			</div>
      
        </form>
		</div>
	</div>
</div>

 <!-- modal konfirmasi hapus data -->
<div class="modal fade" id="pilih" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<form action="<?=base_url();?>controller/" method="post">
			<div class="modal-header">
				<h5 class="modal-title">Konfirmasi Pilihan Anda</h5>
					
			</div>
			<div class="modal-body">Yakin Akan Memilih Kandidat Ini ?
				<input type="hidden" name="id" id="id">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
				<button type="button" class="btn btn-primary" onclick="chose()">Ya</button>
			</div></form>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="verifikasi" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title btn">Peringatan</h5>
			</div>
			<div class="modal-body">
			<i class="btn btn-danger">Maaf data anda berlum terverfikasi, jadi anda tidak bisa memilih, mohon tunggu verifikasi
			</div></i>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Vote Berhasil di lakukan</h5>
					
			</div>
			<div class="modal-body">
				Suara Anda Berhasil di kirim ke sistem  !!!
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="refreshPage()">Close</button>
			</div>
		</div>
	</div>
</div>
<script>
	function verifikasi() { 
		$("#verifikasi").modal("show");
	 }
function visi(id){
	$.ajax({
		type: "POST",
		url: "<?=base_url();?>masyarakat/detail_paslon",
		data: {id:id},
		dataType: "JSON",
		success: function (response) {
			console.log(response);
			$("#isi-visi").text(response.visi);
  $("#visi").modal("show");

		}
	});
}
function input_pilihan(id){
	console.log(id);
  $("#id").val(id);
  $("#pilih").modal("show");
}
function chose() {
	let data={
		id:$("#id").val(),
		id_user:"<?=$this->session->userdata('id_user');?>"
	}
	$.ajax({
		type: "POST",
		url: "<?=base_url()?>masyarakat/choseCandidate",
		data: data,
		dataType: "JSON",
		success: function (response) {
			console.log(response);
			if (response.status=='success') {
				$("#pilih").modal("hide");
				$("#success").modal("show");
			}
		}
	});
	}
	function refreshPage() { 
		window.location.href="<?=base_url();?>masyarakat/input_pilihan";
	 }
</script>
