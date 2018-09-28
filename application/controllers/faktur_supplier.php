<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faktur_supplier extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('supplier_model');
		$this->load->model('faktur_supplier_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'faktur_supplier_view';
			$data['JSON'] = 'JSON/faktur_supplier_JSON';
			$this->load->view('index', $data);
		} else {
			redirect('login');
		}
		
	}

	public function tambah_faktur()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'tambah_faktur_supplier_view';
			$data['JSON'] = 'JSON/tambah_faktur_supplier_JSON';
			$data['data_supplier'] = $this->faktur_supplier_model->get_data_supplier();
			$this->load->view('index', $data);
		} else {
			redirect('login');
		}
		
	}

}

/* End of file faktur_supplier.php */
/* Location: ./application/controllers/faktur_supplier.php */