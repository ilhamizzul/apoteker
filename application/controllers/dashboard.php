<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('logged_in') != TRUE) {
			redirect('login');
		} else {
			$data['main_view'] = 'dashboard_view';
			$data['JSON'] = 'JSON/dashboard_JSON';
			$this->load->view('index', $data);	
		}
		
			
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */