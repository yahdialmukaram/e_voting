<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        

    }

    public function index()
    {
        $this->load->view('admin/login');
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}
