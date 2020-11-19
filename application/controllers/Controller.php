<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

public function __construct()
{
    parent::__construct();
    $this->load->library('upload');
    date_default_timezone_set('Asia/Jakarta');
    
    //ini pnting untuk ke amanan login
        // if ($this->session->userdata('level') !== 'admin' or 
        //     $this->session->userdata('logged_in') !== true
        //     ) {
        // $this->session->set_flashdata('error', 'Anda tidak punya akses untuk menu admin');
        // redirect('c_login');
        // }
    
}

    public function index()
    {
        $judul ['title'] = 'halaman home';
        $data['data_masyarakat'] = $this->model->find_data_masyarakat();
        $data['data_paslon'] = $this->model->find_data_paslon();
        $data['dpt_memilih'] = $this->model->find_dpt_memilih();
        $this->load->view('admin/header', $judul);
        $this->load->view('admin/home', $data);
        $this->load->view('admin/footer');
        
    }
    public function data_paslon()
    {
        $judul ['title'] = 'halaman paslon';
        $data['paslon'] = $this->model->get_paslon();
        $this->load->view('admin/header', $judul);
        $this->load->view('admin/data_paslon', $data);
        $this->load->view('admin/footer');
        
    }
    public function data_user()
    {
        $judul ['title'] = 'halaman user';
        $data['user'] = $this->model->get_user();
        $this->load->view('admin/header', $judul);
        $this->load->view('admin/data_user', $data);
        $this->load->view('admin/footer');
        
    }
    public function add_admin()
    {
        $data = [
            'username'=> $this->input->post('username'),
            'password'=> md5($this->input->post('password')),
            'nama'=> $this->input->post('nama'),
            'email'=> $this->input->post('email'),
            'level'=> $this->input->post('level'),  
        ];
        $this->model->add_admin($data);
        $this->session->set_flashdata('success', 'admin sistem berhasil di tambah');
        
        redirect('controller/data_user');
        
        

    }
    // tambah kan fungsi upload  untuk semua
    public function upload($name)
    {
        $config['upload_path'] = './uploads/original_image/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = true; //nama yang terupload nantinya

        $this->upload->initialize($config);
        if (!empty($_FILES[$name]['name'])) {
            if ($this->upload->do_upload($name)) {
                $gbr = $this->upload->data();
               
                $response['data'] = $gbr['file_name'];
                $response['status'] = 'success';
                return $response;
            } else {
                $response['status'] = 'error';
                return $response;
                // redirect('c_admin/V_berita');
            }

        } else {
            return $response['status'] = 'image not found';
        }
        function ambildataid()
        {
           $id_masyarakat = $this->input->post('id_masyarakat'); //Menangkap inputan no induk
           $data = $this->model->getdataid($id_masyarakat); // Menampung value return dari fungsi getDataByNoinduk ke variabel data
           echo json_encode($data); 
       }
	}
	// function update status
	public function update_status($jenis)
	{
		$id=$this->input->post('id');
		
		if ($jenis=='verifikasi') {
			$this->model->update_status($id,['status'=>1]);
			$this->session->set_flashdata('success', 'Data Masyarakat yang anda pilih berhasil di verifikasi');
		} elseif ($jenis=='cancel') {
			$this->model->update_status($id,['status'=>0]);
			$this->session->set_flashdata('error', 'Verifikasi data masyarakat yang anda pilih berhasil di batalkan');
		}
		redirect('controller/data_pemilih');
	}
    public function save_paslon()
    {
        $image = $this->upload('image_paslon');
        $image1 = $this->upload('image_wakil');
            if ($image ['status']=='success') {
                $insert =[
                    'nama_paslon' =>$this->input->post('nama_paslon'),
                    'image_paslon' => $image['data'],
                    'nama_wakil' =>$this->input->post('nama_wakil'),
                    'image_wakil' => $image1['data'],
                    'visi' =>$this->input->post('visi'),     
                ];      
                $this->model->save_paslon($insert);
                // print_r($insert);
                $this->session->set_flashdata('success', 'data paslon di simpan');
                redirect('controller/data_paslon');   
            }else {
                $this->session->set_flashdata('error',' Foto yang dimasukan tidak sesuai dengan kreteria sisten !');
                redirect('controller/data_paslon');   
       }
    }
    public function delete_paslon()
    {
        $id = $this->input->post('id');
        $this->model->delete_paslon($id);
        $this->session->set_flashdata('error', 'data paslon telah di hapus');
        redirect('controller/data_paslon');
    }
    public function delete_admin()
    {
        $id = $this->input->post('id');
        $this->model->delete_admin($id);
        $this->model->delete_user($id);
        $this->session->set_flashdata('error', 'data user telah di hapus');
        
        redirect('controller/data_user');
    }

    public function data_pemilih()
    {
        $judul ['title'] = 'halaman DPT';
        $data ['pemilih'] = $this->model->get_pemilih();
        $this->load->view('admin/header', $judul);
        $this->load->view('admin/data_pemilih', $data);
        $this->load->view('admin/footer');    
    }
    public function data_selesai_memilih()
    {
        $judul ['title'] = 'halaman DPT';
        $data ['pemilih'] = $this->model->get_selesai_memilih();
        $this->load->view('admin/header', $judul);
        $this->load->view('admin/data_selesai_memilih', $data);
        $this->load->view('admin/footer');    
    }
    public function edit_password($id)
    {
        $judul ['title'] = 'halaman edit passord';
        $data['edit'] = $this->model->edit_password($id);
        $this->load->view('admin/header', $judul);
        $this->load->view('admin/edit_password', $data);
        $this->load->view('admin/footer');    
    }
    public function update_password($id)
    {
        $update = [
            'username' =>$this->input->post('username'),
            'password' =>md5($this->input->post('password')),  
        ];
        $this->model->update_password($id,$update);
        $this->session->set_flashdata('success', 'password berhasil di ubah');

        redirect('controller/data_user');
    }
    public function edit_paslon($id)
    {
        $judul ['title'] = 'halaman edit paslon';
        $data['edit'] = $this->model->edit_paslon($id);
        $this->load->view('admin/header', $judul);
        $this->load->view('admin/edit_paslon', $data);
        $this->load->view('admin/footer');    
    }
    public function details_paslon($id)
    {
        $judul ['title'] = 'halaman details paslon';
        $data['edit'] = $this->model->edit_paslon($id);
        $this->load->view('admin/header', $judul);
        $this->load->view('admin/details', $data);
        $this->load->view('admin/footer');    
    }

    public function update_paslon($id)
    {
        $image = $this->upload('image_paslon');
        $image1 = $this->upload('image_wakil');
        if ($image['status'] == 'success') {
            $data =[
                'nama_paslon'  =>$this->input->post('nama_paslon'),
                'image_paslon' =>$image['data'],
                'nama_wakil'   =>$this->input->post('nama_wakil'),
                'image_wakil'  =>$image1['data'],
                'visi'  =>$this->input->post('visi'),
                ];
            }else {
                $data =[
                    'nama_paslon'  =>$this->input->post('nama_paslon'),
                    'nama_wakil' =>$this->input->post('nama_wakil'),
                    'visi'  =>$this->input->post('visi'),
                    ];
           }
           $this->model->update_paslon($id,$data);
           // print_r($data);
        
        $this->session->set_flashdata('success','Data berhasil di ubah');
        redirect('controller/data_paslon');
	}
	public function photo_check()
	{
		$id=$this->input->post('id');
		$data=$this->model->get_foto($id);
		echo json_encode($data);
	}
  

    


}


?>
