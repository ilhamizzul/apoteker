<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faktur_supplier_model extends CI_Model {

	public function get_data_supplier()
	{
		return $this->db->get('tb_supplier')
						->result();
	}

	

}

/* End of file faktur_supplier_model.php */
/* Location: ./application/models/faktur_supplier_model.php */