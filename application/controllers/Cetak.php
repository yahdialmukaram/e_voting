<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {

    public function index()
    {
        $this->load->view('admin/dpt');        
    }

    public function printdpt()
    {
        $mpdf = new Mpdf\Mpdf(['format'=>'Legal']);
        $mpdf->AddPage('L');
        $cetak= $this->load->view('admin/dpt',[], true);
        $mpdf->WriteHtml($cetak);
        $mpdf->Output();
    }

}

?>