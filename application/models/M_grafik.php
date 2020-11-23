<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_grafik extends CI_Model {
    public function get_data_grafik()
    {
        $data = $this->db->query("SELECT * from table_masyarakat");
		return $data->result();
    }

    

}

/* End of file M_grafik.php */

?>