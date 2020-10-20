<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller 
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_login');
        $this->load->library('form_validation');
        
    }
    
    public function index()
    {
        $this->load->view('admin/login');
    }
    public function aksi_login()
    {
        //ambil username dan passwor dari databse
        // $username = $this->input->post('username');
        // $password = $this->input->post('password'); 
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
        
        //cek data ke databse ada atau tida data username
        $cek_username = $this->Model_login->cek_login($username,hash('md5',$password));
        //jika tidak ada kembali ke login dan beri aler
        if ($cek_username->num_rows() == '0') {   //jika username di hitung sama dengan 0
            //beri aler dengan flashdata
            $this->session->set_flashdata('error','maaf username dan password salah');
            redirect('c_login');

            //jika ada buat sesi login
        }else {
            $result = $cek_username->row_array(); //ambil satu data dari database
                    //buat array untuk session
            $ses_data = [
                'id_user'  => $result['id_user'],
                'username' => $result['username'],
                'nama'     => $result['nama'],
                'email'    => $result['email'],
                'level'    => $result['level'],
                'logged_in'=>true,
                ];
    //set buat sessionnya 
    $this->session->set_userdata($ses_data);
    //arahkan sesuai level user
    if ($this->session->userdata('level')=='admin') {
        redirect('controller');
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
            $this->form_validation->set_rules('nama','Nama','required|trim');
            $this->form_validation->set_rules('username','Username','required|trim');
            $this->form_validation->set_rules('password1','Password','required|trim|min_length[3]|matches[password2]',[
                'matches' => 'password tidak sama',
                'min_length' =>'password terlalu pendek'
            ]);
            $this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');
            
    
            if ($this->form_validation->run()== false) {
                $this->load->view('admin/login');
            }else {
                $data = [
                    'nama' => $this->input->post('nama'),
                    'username' => $this->input->post('username'),
                    'password' => password_hash( $this->input->post('password1'),PASSWORD_DEFAULT),
                    'level' => 2,
                    // 'created_at' =>date('l,d-m-Y H:i:s')
                ];
                $this->Model_login->registrasi_user($data);
                $this->session->set_flashdata('success','registrasi anda berhasil');
                // print_r($data);
                redirect('c_login');
            } 
          }

    }


 ?>