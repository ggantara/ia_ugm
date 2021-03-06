<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->model('Muser');
	}
	public function index()
	{
		$data['login'] = $this->session->userdata("admin");
		$data['user'] = $this->Muser->tampil_user();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/user/tampil', $data);
		$this->load->view('admin/footer');
	}
	function add()
	{
		$input = $this->input->post();

		if ($input) {

			$this->Muser->simpan_user($input);

			redirect('admin/user','refresh');

		}
		$data['login'] = $this->session->userdata("admin");
		$this->load->view('admin/header', $data);
		$this->load->view('admin/user/tambah');
		$this->load->view('admin/footer');
	}
	function delete($id){
		
		$this->Muser->hapus_user($id);

		redirect('admin/user','refresh');
	}
	function edit($id){
		
		$input=$this->input->post();
		if ($input) {
			$this->Muser->ubah_user($input,$id);
			redirect('admin/user','refresh');
		}
		$data['login'] = $this->session->userdata("admin");
		//bagian pengambilan data dari function ambil_data()
		$data['user'] = $this->Muser->ambil_data($id);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/user/ubah', $data);
		$this->load->view('admin/footer');
	}
	function status($id)
	{
		$this->Muser->select_user($id);
		redirect('admin/user','refresh');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/admin/User.php */