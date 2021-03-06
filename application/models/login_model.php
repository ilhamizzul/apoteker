<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function auth()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$query = $this->db->where('username', $username)->where('password', $password)->get('tb_karyawan');

		if ($this->db->affected_rows() > 0) {
			$data = $query->row_array();

			$session = array(
				'logged_in' => TRUE,
				'nama' => $data['nama'],
				'foto_profil' => $data['gambar'] 
			);

			$this->session->set_userdata($session);

			return TRUE;
		} else {
			return FALSE;
		}
		
	}

}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */