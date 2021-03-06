<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_masyarakat extends CI_Model 
{
    public function save_data_diri($data)
    {
        $this->db->insert('table_masyarakat', $data);        
	}   
	// check data diri
	public function check_data_diri(Type $var = null)
	{
		return $this->db->from('table_masyarakat')->where('id_user', $this->session->userdata('id_user'))->get()->num_rows();
		
	}

	public function data_diri($id)
	{
		$this->db->from('table_masyarakat');
		$this->db->where('id_user',$this->session->userdata('id_user'));
		return $this->db->get()->row_array();
		
	}

	public function modelcheck($nik)
	{
		$this->db->select('nik');
		$this->db->from('table_masyarakat');
		$this->db->where('nik', $nik);
		return $this->db->get()->num_rows();
		
		
		
		
	}
}

/* End of file Model_masyarakat.php */
?>
