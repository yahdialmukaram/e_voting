<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model 
{
    public function get_user()
    {
        $this->db->from('table_user');
        $this->db->order_by('id_user', 'desc');
        return $this->db->get()->result_array();
    }
    public function add_admin($data)
    {
        $this->db->insert('table_user', $data);
        
    }
    public function get_pemilih()
    {
        $this->db->from('table_masyarakat');
        $this->db->order_by('id_masyarakat', 'desc');
        // $this->db->where(['status'=>1]);
        // $this->db->where('suara !="null"');	
        
        return $this->db->get()->result_array();
    }
    public function get_selesai_pemilih()
    {
        $this->db->from('table_masyarakat');
        $this->db->order_by('id_masyarakat', 'desc');
        $this->db->where(['status'=>1]);
        $this->db->where('suara !="null"');	
        
        return $this->db->get()->result_array();
    }
    public function get_selesai_memilih()
    {
        // $this->db->select('*');        
        $this->db->from('table_masyarakat');
        $this->db->order_by('id_masyarakat', 'desc');
        $this->db->where(['status'=>1]);
        $this->db->where('suara !="null"');			
        return $this->db->get()->result_array();
    }
    public function get_paslon()
    {
	$this->db->from('table_paslon');
        $this->db->order_by('id_paslon', 'desc');
        return $this->db->get();
        
    }
    public function save_paslon($insert)
    {
        $this->db->insert('table_paslon', $insert);
    }
    public function delete_paslon($id)
    {
        $this->db->where('id_paslon', $id);
        $this->db->delete('table_paslon');
           
    }
    
    public function delete_admin($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('table_user');
           
    }
    public function delete_user($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('table_masyarakat');
           
    }
    public function edit_password($id)
    {
        $this->db->where('id_user', $id);
        return $this->db->get('table_user')->row_array();
        
    }
    public function update_password($id,$update)
    {
        $this->db->where('id_user', $id);
        $this->db->update('table_user',$update);
        
    }
    public function edit_paslon($id)
    {
        $this->db->where('id_paslon', $id);
        return $this->db->get('table_paslon')->row_array();
        
    }
    public function update_paslon($id,$data)
    {
        $this->db->where('id_paslon',$id);
        $this->db->update('table_paslon',$data);
	}
	public function status_masyarakat($id)
	{
		$this->db->from('table_masyarakat');
		$this->db->select('status,suara');
		$this->db->where('id_user', $id);
		return $this->db->get()->row_array();
		
	}
	// function update status masyarakat
	public function update_status($id,$data)
	{
		$this->db->where('id_masyarakat', $id);
		$this->db->update('table_masyarakat', $data);	
    }
    
	public function get_foto($id)
	{
		$this->db->from('table_masyarakat');
		$this->db->select('foto_ktp as ktp');
		$this->db->where('id_masyarakat', $id);
		return $this->db->get()->row_array();
		
	}

	public function sendVote($id,$data)
	{
		$this->db->where('id_user', $id);
		$this->db->update('table_masyarakat', $data);	
    }
    
    public function find_data_masyarakat()
    {
       $data_dpt = $this->db->get('table_masyarakat');
       if ($data_dpt->num_rows() > 0) {
           return $data_dpt->num_rows();
       }else {
           return 0;
       }
    }

    public function find_data_paslon()
    {
        $data_paslon = $this->db->get('table_paslon');
        if ($data_paslon->num_rows() > 0 ) {
            return $data_paslon->num_rows();
        }else {
            return 0;
        }
    }

    // perintah mencari data
    //   public function find_data($table, $id_table, $id)
    // {
    //     $this->db->where($id_table, $id);
    //     return $this->db->get($table);

    // }
    // perintah mencari data
      public function find_data($table, $id_table, $id)
    {
        $this->db->where('jenis_kelamin',$id);
        return $this->db->get('table_masyarakat');
        // print_r($table);

    }

	public function hitung_suara($id)
	{
		$this->db->select('id_masyarakat');
		$this->db->from('table_masyarakat');
		$this->db->where('suara', $id);
		return $this->db->get()->num_rows();

	}
    public function hitung_dpt($status)
	{
		$this->db->select('id_masyarakat');
		$this->db->from('table_masyarakat');
		if ($status=='belum') {
			$this->db->where('suara', null);
			
		} else {
			$this->db->where('suara !="null"');
			
		}
		return $this->db->get()->num_rows();
		
	}
    

}

