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
                          
                          <td style="text-align: center;"><?=$value['nama_paslon'];?><hr><img style="width: 250px;height: 250px;  "
                          src="<?=base_url();?>uploads/original_image/<?=$value['image_paslon'];?>">
                         
                        </td>                       
                          <td style="text-align: center;"><?=$value['nama_wakil'];?><hr><img style="width: 250px;height: 250px;  "
                          src="<?=base_url();?>uploads/original_image/<?=$value['image_wakil'];?>">
                        </td>          
                        <!-- <td><?= $value['visi']?></td> -->
                                <td>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                         <a href="#" onclick="visi();"> <i class="btn btn-danger fa fa-book"> Visi Misi</i> </a>
                         <br>
                         <br>
                         <a href="#" onclick="input_pilihan();"> <i class="btn btn-primary fa fa-check-circle"> Pilih</i> </a>
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
			<form action="<?=base_url();?>controller/delete_paslon" method="post">
			<div class="modal-header">
				<h5 class="modal-title">Visi Misi Kandidat</h5>
					
			</div>
			<div class="modal-body">    
                <input type="hidden" name="id" id="id">
                <div class="form-group" >
						<textarea class ="form-control" rows="15" name="visi" id="" required class="form-control">	</textarea>					
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
			<form action="<?=base_url();?>controller/delete_paslon" method="post">
			<div class="modal-header">
				<h5 class="modal-title">Konfirmasi Pilihan Anda</h5>
					
			</div>
			<div class="modal-body">Yakin Akan Memilih Kandidat Ini ?
				<input type="hidden" name="id" id="id">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
				<button type="submit" class="btn btn-primary">Ya</button>
			</div></form>
		</div>
	</div>
</div>
<script>
function visi(id){
  $("#id").val(id);
  $("#visi").modal("show");
}
</script>

<script>
function input_pilihan(id){
  $("#id").val(id);
  $("#pilih").modal("show");
}
</script>