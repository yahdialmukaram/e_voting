<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_login');
        $this->load->library('form_validation');
        date_default_timezone_set('Asia/Jakarta');  

    }

    
    // public function welcome()
    // {
    //     $this->load->view('admin/welcome');
        
    // }
    public function index()
    {
        $data['data_masyarakat'] = $this->model->find_data_masyarakat();
        $data['data_paslon'] = $this->model->find_data_paslon();
        $data['data_laki'] = $this->model->find_data('table_masyarakat','jenis_kelamin','Laki Laki')->num_rows();
        $data['data_perempuan'] = $this->model->find_data('table_masyarakat','jenis_kelamin','Perempuan')->num_rows();
		$data['dpt_memilih'] = $this->model->hitung_dpt('sudah');
		$data['dpt_belum_memilih'] = $this->model->hitung_dpt('belum');
        $paslon= $this->model->get_paslon();
        $this->load->view('admin/welcome', $data);
    }
    public function login_user()
    {
        $judul['title']='Halaman Login';
        $this->load->view('admin/login', $judul);
    }
    public function aksi_login()
    {
        //ambil username dan passwor dari databse
        $username = htmlspecialchars($this->input->post('username', true), ENT_QUOTES);
        $password = htmlspecialchars($this->input->post('password', true), ENT_QUOTES);

        //cek data ke databse ada atau tida data username
        $cek_username = $this->Model_login->cek_login($username, hash('md5', $password));
        //jika tidak ada kembali ke login dan beri aler
        if ($cek_username->num_rows() == '0') { //jika username di hitung sama dengan 0
            //beri aler dengan flashdata
            $this->session->set_flashdata('error', 'maaf username dan password salah');
            redirect('c_login/login_user');

            //jika ada buat sesi login
        } else {
            $result = $cek_username->row_array(); //ambil satu data dari database
            //buat array untuk session
            $ses_data = [
                'id_user' => $result['id_user'],
                'username' => $result['username'],
                'nama' => $result['nama'],
                'email' => $result['email'],
                'level' => $result['level'],
                'logged_in' => true,
            ];
            //set buat sessionnya
            $this->session->set_userdata($ses_data);
            //arahkan sesuai level user
            if ($this->session->userdata('level') == 'admin') {
                
                redirect('controller');
            }elseif ($this->session->userdata('level')=='masyarakat') {
                
                redirect('masyarakat');
                
            }

        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('c_login');
    }

    public function registrasi_user()
    {
        $this->form_validation->set_rules('username', 'username', 'trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('nama', 'nama', 'trim|required|min_length[1]|max_length[255]');
        if ($this->form_validation->run() == true) {
            $data = [
                'username' => $this->input->post('username'),
                'password' =>hash('md5', $this->input->post('password')),
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'waktu' => date('d-m-Y, H:i:s'),
                'level' => 'masyarakat',
                'status' => '2',
            ];

            $this->Model_login->registrasi_user($data);
            $this->session->set_flashdata('success', 'Proses Pendaftaran User Berhasil');
            redirect('c_login/login_user');
        } else {
            $this->session->set_flashdata('error', 'tidak terdftar');
            redirect('c_login');
        }
    }

}
