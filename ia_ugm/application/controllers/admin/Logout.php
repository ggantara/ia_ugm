<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index()
	{
		$this->session->unset_userdata('admin');
		redirect('login','refresh');
	}

}

/* End of file Logout.php */
/* Location: ./application/controllers/admin/Logout.php */