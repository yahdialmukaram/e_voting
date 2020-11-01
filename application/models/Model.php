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
        return $this->db->get()->result_array();
    }
    public function get_selesai_memilih()
    {
        $this->db->from('table_masyarakat');
        $this->db->order_by('id_masyarakat', 'desc');
        return $this->db->get()->result_array();
    }
    public function get_paslon()
    {
        $this->db->from('table_paslon');
        $this->db->order_by('id_paslon', 'desc');
        return $this->db->get()->result_array();
        
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
        $this->db->where('id_masyarakat', $id);
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
    
    

}

