<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title?></title>
    <style>
        table {
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>

  
  <!-- <img style=" width: 80px;height: 80px;" src="uploads/original_image/lambang.png" align="left"> -->


<img src="uploads/original_image/lambang.png" style="float:left; width: 90px; height: 90px;"><h3 style="text-align: center;"><u>DATA PEMILIH TETAP (DPT) KECAMATAN BATIPUH SELATAN</u> <br><br><u>KABUPATEN TANAH DATAR</u></h3>
  

  <!-- <p style="text-align: center;">DATA PEMILIH TETAP (DPT) KECAMATAN BATIPUH SELATAN</p>
  <p style="text-align: center;"><u>KABUPATEN TANAH DATAR</u></p> -->
                
                
              
                <br>
                <h5>Tanggal Print : <?= date('d-m-Y');?> </h5>
              
                    <table>
                      <thead>
                      <tr>
                          <th>No</th>
                          <th>Nik</th>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>Tempat lahir</th>
                          <th>Tanggal lahir</th>
                          <th>Jenis kelamin</th>
                          <th>Foto ktp</th>
                          <th>Status</th>
                          <th>Telapon</th>
                          <th>Agama</th>
                          <th>Status pernikahan</th>
                    </tr>
                  </thead>
               <?php
               $no = 1;
               foreach ($pemilih as $key => $value):?>
                  <tbody>
                  <tr>
                          <td><?=$no++?></td>
                          <td><?=$value['nik'];?></td>
                          <td><?=$value['nama'];?></td>
                          <td><?=$value['alamat'];?></td>
                          <td><?=$value['tempat_lahir'];?></td>
                          <td><?=$value['tanggal_lahir'];?></td>
                          <td><?=$value['jenis_kelamin'];?></td>
                          <td><button type="button" class="label label-primary" onclick="show_photo('<?=$value['id_masyarakat']?>')"><i class= 'fa fa-check'> Klik foto</i> </button></td>
						    	<td>
						    		<?php if ($value['status']==0):?>
						    	<a href="#" class="label label-danger" onclick="verifikasi(<?=$value['id_masyarakat']?>);"><i class="fa fa-ban"></i> Belum Verifikasi</a>
						    	<?php elseif ($value['status']==1):?>
						    	<a href="#" class="label label-success" onclick="cancel_verifikasi(<?=$value['id_masyarakat']?>)"><i class="fa fa-check"></i> Terverifikasi</a>
						    	<?php elseif ($value['status']==2):?>
						    	<a href="#" class="label label-warning"><i class="fa fa-check"></i> Telah Memilih</a>
						    	<?php endif;?>
						    	</td>
                          <td><?=$value['no_hp'];?></td>
                          <td><?=$value['agama'];?></td>
                          <td><?=$value['status_perkawinan'];?></td>
                          </tr>
        </tbody>
               <?php endforeach;?>
    </table>
<br>
    <!-- <h5 style="text-align: right;">Pengawas</h5> -->
   
</body>
</html>