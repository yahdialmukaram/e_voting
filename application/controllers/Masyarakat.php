<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Masyarakat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('upload');
        $this->load->model('Model_masyarakat');

        //Do your magic here
    }

    public function index()
    {
        $judul['title'] = 'Halaman Isi data diri';
        //  check data user
        $check = $this->Model_masyarakat->check_data_diri();
        if ($check > 0) {
            redirect('masyarakat/home');
        } else {
            $this->load->view('masyarakat/isi_data_diri', $judul);
        }

    }
    public function home()
    {
        $judul['title'] = 'Halaman Home';
        $data['data_diri'] = $this->Model_masyarakat->data_diri($this->session->userdata('id_user'));
        $this->load->view('masyarakat/header', $judul);
        $this->load->view('masyarakat/home', $data);
        $this->load->view('masyarakat/footer');

        // redirect('masyarakat');

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

                $response = ['status' => 'success',
                    'data' => $gbr['file_name'],
                ];
                return $response;
            } else {
                $response = ['status' => 'error'];
                return $response;
                // redirect('c_admin/V_berita');
            }

        } else {
            return $response = ['status' => 'error'];
        }

    }
    public function save_data_diri()
    {
        $nik = $this->input->post('nik');
        $check_nik = $this->Model_masyarakat->modelcheck($nik);
        if($check_nik > 0){   
            $this->session->set_flashdata('error','Nik Yang Anda Masukan Sudah Terdaftar');
            redirect('masyarakat');
            
        }

        $image = $this->upload('image');
        if ($image['status'] == 'success') {
            $data = [
                'nik' => $this->input->post('nik'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'no_hp' => $this->input->post('no_hp'),
                'agama' => $this->input->post('agama'),
                'id_user' => $this->session->userdata('id_user'),
                'status_perkawinan' => $this->input->post('status_perkawinan'),
                'foto_ktp' => $image['data'],
				'status' => false,
				'suara'=>null,
            
            ];
            $this->Model_masyarakat->save_data_diri($data);
            $this->session->set_flashdata('success', 'data di simpan');
            redirect('masyarakat/home');
        } else {
            $this->session->set_flashdata('error', 'Foto yang anda masukan tidak sesui dengan kreteria sisten !!');
            redirect('masyarakat');
        }
        // print_r($data);
    }

    public function edit_profil()
    {
        $judul['title'] = 'Edit Profil';
        $this->load->view('masyarakat/header', $judul);
        $this->load->view('masyarakat/edit_profil');
        $this->load->view('masyarakat/footer');

    }
    public function input_pilihan()
    {
        $judul['title'] = 'Input pilihan';
        $data['paslon'] = $this->model->get_paslon()->result_array();
		$check= $this->model->status_masyarakat($this->session->userdata('id_user'));
		$data['status']=$check['status'];
		$data['suara']=$check['suara'];
        $this->load->view('masyarakat/header', $judul);
        $this->load->view('masyarakat/input_pilihan', $data);
        $this->load->view('masyarakat/footer');
        // print_r($data);
    }
    public function detail_paslon()
    {
        $id = $this->input->post('id');
        $data = $this->model->edit_paslon($id);
        echo json_encode($data);
    }

    public function data_diri()
    {
        $judul['title'] = 'Data diri';
        $data['data_diri'] = $this->Model_masyarakat->data_diri($this->session->userdata('id_user'));
        $this->load->view('masyarakat/header', $judul);
        $this->load->view('masyarakat/data_diri', $data);
        $this->load->view('masyarakat/footer');

    }
   
    // pilih calon
    public function choseCandidate(Type $var = null)
    {
        $id = $this->input->post('id');
        $id_user = $this->input->post('id_user');

        $this->model->sendVote($id_user, ['suara' => $id]);
        $response = [
            'status' => 'success',
            'msg' => 'Vote Berhasil di lakukan',
        ];
        echo json_encode($response);
    }

}
