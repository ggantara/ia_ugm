<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Mstaff');
	}
	public function index()
	{
		$data['login'] = $this->session->userdata("operator");
		$data['staff'] = $this->Mstaff->tampil_staff();
		$this->load->view('operator/header', $data);
		$this->load->view('operator/staff/tampil', $data);
		$this->load->view('operator/footer');


	}
	function add()
	{
		$input = $this->input->post();
		if ($input) {
			$this->Mstaff->simpan_staff($input);
			redirect('operator/staff','refresh');

		}
		$data['login'] = $this->session->userdata("operator");
		$this->load->view('operator/header',$data);
		$this->load->view('operator/staff/tambah');
		$this->load->view('operator/footer');
	}
	function delete($id){

		$this->Mstaff->hapus_staff($id);

		redirect('operator/staff','refresh');
	}
	function edit($id){

		$input=$this->input->post();
		if ($input) {
			$this->Mstaff->ubah_staff($input,$id);
			redirect('operator/staff','refresh');
		}
		//bagian pengambilan data dari function ambil_data()
		$data['login'] = $this->session->userdata("operator");
		$data['staff'] = $this->Mstaff->ambil_data($id);
		$this->load->view('operator/header',$data);
		$this->load->view('operator/staff/ubah', $data);
		$this->load->view('operator/footer');
	}
	function status($id)
	{
		$this->Mstaff->ubah_status_staff($id);
		redirect('operator/staff','refresh');
	}

}

/* End of file Staff.php */
/* Location: ./application/controllers/operator/Staff.php */