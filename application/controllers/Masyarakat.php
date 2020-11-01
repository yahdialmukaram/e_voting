<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Masyarakat extends CI_Controller {

public function __construct()
{
    parent::__construct();
    $this->load->model('Model_masyarakat');
    
    //Do your magic here
}

    public function index()
    {
     $judul['title']= 'Halaman Isi data diri';
        $this->load->view('masyarakat/isi_data_diri', $judul);   
        
        // redirect('masyarakat');

    }
    public function home()
    {
     $judul['title']= 'Halaman Home';
        $this->load->view('masyarakat/header', $judul);   
        $this->load->view('masyarakat/home');   
        $this->load->view('masyarakat/footer');   
        
        // redirect('masyarakat');

    }
    public function save_data_diri()
    {
        $data = [
            'nik'=> $this->input->post('nik'),
            'nama'=> $this->input->post('nama'),
            'alamat'=> $this->input->post('alamat'),
            'tempat_lahir'=> $this->input->post('tempat_lahir'),
            'tanggal_lahir'=> $this->input->post('tanggal_lahir'),
            'jenis_kelamin'=> $this->input->post('jenis_kelamin'),
            'no_hp'=> $this->input->post('no_hp'),
            'agama'=> $this->input->post('agama'),
            // 'foto_ktp'=> $this->input->post('foto_ktp'),
            'status_perkawinan'=> $this->input->post('status_perkawinan'),
         ];
         $this->Model_masyarakat->save_data_diri($data);
         $this->session->set_flashdata('success', 'data di simpan');
         redirect('masyarakat/home');
         
    }


}

?>