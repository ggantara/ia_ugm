<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Major extends CI_Controller {
	function __construct() 
	{
		parent::__construct();
		$this->load->model('Mmajor');
		$this->load->model('Mfaculty');
	}
	

	public function index()
	{
		$data['login'] = $this->session->userdata("operator");
		// model Mmajor menjalankan fungsi tampil_jurusan()
		$data['major']=$this->Mmajor->tampil_jurusan();
		$data['faculty']=$this->Mfaculty->tampil_fakultas();

		// load view

		$this->load->view('operator/header', $data); 
		$this->load->view('operator/major/tampil', $data);
		$this->load->view('operator/footer'); 
		
	}

	function add()
	{
		// mendapatkan inputan dari form
		$inputan = $this->input->post();

		if($inputan)
		{

			// mmajor jalankan fungsi simpan_jurusan
			$this->Mmajor->simpan_jurusan($inputan);

			// redirect tampilan operator/major/index
			redirect('operator/major','refresh');

		}
		$data['login'] = $this->session->userdata("operator");
		$data['faculty']=$this->Mfaculty->tampil_fakultas();
		$this->load->view('operator/header', $data); 
		$this->load->view('operator/major/tambah');
		$this->load->view('operator/footer'); 
		
	}

	function delete($id){
		
		$this->Mmajor->hapus_jurusan($id);

		// kembali ke controller pegawai function tampil

		redirect('operator/major','refresh');
	}
	function edit($id){
		
		// mendapatkan isi dari inputan
		$inputan=$this->input->post();
		if ($inputan) {
			$this->Mmajor->ubah_jurusan($inputan,$id);
			redirect('operator/major','refresh');
		}
		$data['login'] = $this->session->userdata("operator");
		//bagian pengambilan data dari function ambil_data()
		$data['major'] = $this->Mmajor->ambil_data($id);
		$data['faculty']=$this->Mfaculty->tampil_fakultas();
		$this->load->view('operator/header', $data);
		$this->load->view('operator/major/ubah', $data);
		$this->load->view('operator/footer');
	}
	function status($id)
	{
		$this->Mmajor->ubah_status_major($id);
		redirect('operator/major','refresh');
	}


	

}

/* End of file Major.php */
/* Location: ./application/controllers/operator/Major.php */