<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Grafik extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_grafik');
    }
    

    public function index()
    {
        $data ['graph']=$this->M_grafik->get_data_grafik();
        $this->load->view('admin/grafik', $data);
        ;
    }

}

/* End of file Controllername.php */

?>