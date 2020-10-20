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

    // public function registrasi($data)
    // {
    //     $this->db->insert('table_user', $data);
    // }

    public  function register_user($username,$password,$nama)
	{
		$data_user = array(
			'username'=>$username,
			'password'=>password_hash($password,PASSWORD_DEFAULT),
			'nama'=>$nama
		);
		$this->db->insert('table_user',$data_user);
	}
}

/* End of file ModelName.php */
