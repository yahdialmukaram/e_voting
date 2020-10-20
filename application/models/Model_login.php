<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model 
{	
	// public function cek_login($table,$where)
	// {		
	// 	return $this->db->get_where($table,$where);
	// }	

	public function cek_login($username,$password)
    {
        $this->db->from('table_user');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get();
    }

    public function registrasi_user($data)
    {
        $this->db->insert('table_user', $data);
    }
}

/* End of file ModelName.php */
