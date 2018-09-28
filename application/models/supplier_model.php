<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_model extends CI_Model {

	public function get_supplier()
		{
			return $this->db->select('*')
							->from('tb_supplier')
							->get()
							->result();
		}	

	public function get_supplier_by_id($id_supplier)
	{
		return $this->db->where('id_supplier', $id_supplier)
						->get('tb_supplier')
						->row();
	}

	public function add_supplier()
	{

		$data = array(
			'nama_supplier' => $this->input->post('nama_supplier'),
			'PT_supplier' => $this->input->post('PT_supplier') 
		);

		$this->db->insert('tb_supplier', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
		
	}

	public function edit_supplier($id)
	{
		$data = array(
			'nama_supplier' => $this->input->post('nama_supplier'),
			'PT_supplier' => $this->input->post('PT_supplier') 
		);

		$this->db->where('id_supplier', $id)
				->update('tb_supplier', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
		
	}

	public function delete_supplier($id)
	{
		return $this->db->where('id_supplier', $id)
						->delete('tb_supplier');

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
		
	}

}

/* End of file supplier_model.php */
/* Location: ./application/models/supplier_model.php */