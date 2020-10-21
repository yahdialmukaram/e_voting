<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Masyarakat extends CI_Controller {

public function __construct()
{
    parent::__construct();
    //Do your magic here
}

    public function index()
    {
     $judul['title']= 'Halaman Isi data diri';
        $this->load->view('masyarakat/isi_data_diri', $judul);
        
    }

}

?>