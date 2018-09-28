<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('supplier_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'supplier_view';
			$data['data_supplier'] = $this->supplier_model->get_supplier();
			$data['JSON'] = 'JSON/supplier_JSON';
			$this->load->view('index', $data);	
		} else {
			redirect('login');
		}		
	}

	public function get_supplier_by_id($id_supplier)
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data_supplier_by_id = $this->supplier_model->get_supplier_by_id($id_supplier);

			echo json_encode($data_supplier_by_id);
		} else {
			redirect('login');
		}
		
			
	}

	public function insert()
	{
		if ($this->supplier_model->add_supplier() == TRUE) {
			$this->session->set_flashdata('success', 'Tambah Supplier Berhasil');
			redirect('supplier');
		} else {
			$this->session->set_flashdata('failed', 'Tambah Data Gagal, Silahkan Coba Lagi atau Hubungi Admin');
			redirect('supplier');
		}
		
	}

	public function edit($id)
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			if ($this->supplier_model->edit_supplier($id) == TRUE) {
				$this->session->set_flashdata('success', 'Ubah Data Berhasil');
				redirect('supplier');
			} else {
				$this->session->set_flashdata('failed', 'Ubah Data Gagal, Silahkan Hubungi Admin');
				redirect('supplier');
			}
			
		} else {
			redirect('login');
		}
		
	}

	public function delete($id)
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			if ($this->supplier_model->delete_supplier($id) == TRUE) {
				$this->session->set_flashdata('success', 'Data Berhasil Dihapus');
				redirect('supplier');
			} else {
				$this->session->set_flashdata('failed', 'Data Gagal Dihapus. Silahkan Hubungi Admin');
				redirect('supplier');
			}
			
		} else {
			redirect('login');
		}
		
	}

}

/* End of file supplier.php */
/* Location: ./application/controllers/supplier.php */