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
    

}

