<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Startup_founder extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Mstartup_founder');
		$this->load->model('Mstartup');
		$this->load->model('Mmajor');
		$this->load->model('Mfaculty');
	} 
	public function index()
	{
		$data['login'] = $this->session->userdata("supervisor");
		$data['startup_founder'] = $this->Mstartup_founder->tampil_startup_founder();
		$data['startup'] = $this->Mstartup->tampil_startup();
		$data['major']=$this->Mmajor->tampil_jurusan();
		$data['faculty']=$this->Mfaculty->tampil_fakultas();
		$this->load->view('supervisor/header', $data);
		$this->load->view('supervisor/startup_founder/tampil', $data);
		$this->load->view('supervisor/footer');


	}
	function add()
	{
		$input = $this->input->post();
		if ($input) {
			$this->Mstartup_founder->simpan_startup_founder($input);
			redirect('supervisor/startup_founder','refresh');

		}
		$data['login'] = $this->session->userdata("supervisor");
		$data['startup'] = $this->Mstartup->tampil_startup();
		$data['major']=$this->Mmajor->tampil_jurusan();
		$data['faculty']=$this->Mfaculty->tampil_fakultas();
		$this->load->view('supervisor/header', $data);
		$this->load->view('supervisor/startup_founder/tambah');
		$this->load->view('supervisor/footer');
	}
	function delete($id){

		$this->Mstartup_founder->hapus_startup_founder($id);

		redirect('supervisor/startup_founder','refresh');
	}
	function edit($id){

		$input=$this->input->post();
		if ($input) {
			$this->Mstartup_founder->ubah_startup_founder($input,$id);
			redirect('supervisor/startup_founder','refresh');
		}
		//bagian pengambilan data dari function ambil_data()
		$data['login'] = $this->session->userdata("supervisor");
		$data['startup_founder'] = $this->Mstartup_founder->ambil_data($id);
		$data['startup'] = $this->Mstartup->tampil_startup();
		$data['major']=$this->Mmajor->tampil_jurusan();
		$data['faculty']=$this->Mfaculty->tampil_fakultas();
		$this->load->view('supervisor/header', $data);
		$this->load->view('supervisor/startup_founder/ubah', $data);
		$this->load->view('supervisor/footer');
	}
	function status($id)
	{
		$this->Mstartup_founder->ubah_status_sf($id);
		redirect('supervisor/startup_founder','refresh');
	}


}

/* End of file Startup_founder.php */
/* Location: ./application/controllers/supervisor/Startup_founder.php */