<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_masyarakat extends CI_Model 
{
    public function save_data_diri($data)
    {
        $this->db->insert('table_masyarakat', $data);
        
    }    

}

/* End of file Model_masyarakat.php */
?>