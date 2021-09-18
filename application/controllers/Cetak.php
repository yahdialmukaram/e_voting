<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
    }
    
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

    public function printdpt_memilih()
    {
        $data['title'] = 'Prind dpt selesai memilih';
        $data['pemilih'] = $this->model->get_selesai_pemilih(); 
        $mpdf = new Mpdf\Mpdf(['format'=>'Legal']);
        $mpdf->AddPage('L');
        $cetak = $this->load->view('admin/printdpt_memilih', $data, true);
        $mpdf->WriteHtml($cetak);
        $mpdf->Output();
        
    }
    public function printdpt_belum_memilih()
    {
        $data['title'] = 'Prind dpt belum memilih';
        $data['pemilih'] = $this->model->get_belum_memilih(); 
        $mpdf = new Mpdf\Mpdf(['format'=>'Legal']);
        $mpdf->AddPage('L');
        $cetak = $this->load->view('admin/printdpt_belum_memilih', $data, true);
        $mpdf->WriteHtml($cetak);
        $mpdf->Output();
        
    }

}

?>
