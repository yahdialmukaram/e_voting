<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

public function __construct()
{
    parent::__construct();
    $this->load->library('upload');
    $this->load->library('session');
    date_default_timezone_set('Asia/Jakarta');
    
}

    public function index()
    {
        $judul ['title'] = 'halaman home';
        $this->load->view('admin/header', $judul);
        $this->load->view('admin/home');
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
                // Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './uploads/original_image/' . $gbr['file_name'];
                $config['create_thumb'] = false;
                $config['maintain_ratio'] = false;
                $config['quality'] = '60%';
                $config['width'] = 710;
                $config['height'] = 420;
                $config['new_image'] = './uploads/original_image/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
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
                    'tanggal_lahir' =>$this->input->post('tanggal_lahir'),     
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
}


?>