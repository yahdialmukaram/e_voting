<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {

    public function index()
    {
        $this->load->view('admin/dpt');        
    }

    public function printdpt()
    {
        $data['title'] = 'Print data dpt';
        
        $data ['pemilih'] = $this->model->get_pemilih(); //manggil data di controller 
        $mpdf = new Mpdf\Mpdf(['format'=>'Legal']);
        $mpdf->AddPage('L');
        $cetak= $this->load->view('admin/dpt',$data, true);
        $mpdf->WriteHtml($cetak);
        $mpdf->Output();
    }

}

?>