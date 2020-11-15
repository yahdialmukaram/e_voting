<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_masyarakat extends CI_Model 
{
    public function save_data_diri($data)
    {
        $this->db->insert('table_masyarakat', $data);
        
	}   
	function getdataid($id_masyarakat){
        $this->db->where('id_masyarakat',$id_masyarakat); 
        return $this->db->get('table_masyarakat')->result_array(); 
    }
     
	// check data diri
	public function check_data_diri(Type $var = null)
	{
		return $this->db->from('table_masyarakat')->where('id_user', $this->session->userdata('id_user'))->get()->num_rows();
		
	}

}

/* End of file Model_masyarakat.php */
?>
