<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
	function __construct() 
	{
		parent::__construct();
		$this->load->model('Mcategory');
	}
	

	public function index()
	{
		$data['login'] = $this->session->userdata("operator");
		// model Mcategory menjalankan fungsi tampil_kategori()
		$data['category']=$this->Mcategory->tampil_kategori();

		// load view

		$this->load->view('operator/header', $data); 
		$this->load->view('operator/news_category/tampil', $data);
		$this->load->view('operator/footer'); 
		
	}

	function add()
	{
		// mendapatkan inputan dari form
		$inputan = $this->input->post();

		if($inputan)
		{

			// mcategory jalankan fungsi simpan_kategori
			$this->Mcategory->simpan_kategori($inputan);

			// redirect tampilan operator/category/index
			redirect('operator/category','refresh');

		}
		$data['login'] = $this->session->userdata("operator");
		$this->load->view('operator/header', $data); 
		$this->load->view('operator/news_category/tambah');
		$this->load->view('operator/footer'); 
		
	}

	function delete($id){
		
		$this->Mcategory->hapus_kategori($id);

		// kembali ke controller pegawai function tampil

		redirect('operator/category','refresh');
	}
	function edit($id){
		
		// mendapatkan isi dari inputan
		$inputan=$this->input->post();
		if ($inputan) {
			$this->Mcategory->ubah_kategori($inputan,$id);
			redirect('operator/category','refresh');
		}
		$data['login'] = $this->session->userdata("operator");
		//bagian pengambilan data dari function ambil_data()
		$data['category'] = $this->Mcategory->ambil_data($id);
		$this->load->view('operator/header', $data);
		$this->load->view('operator/news_category/ubah', $data);
		$this->load->view('operator/footer');
	}
	function status($id)
	{
		$this->Mcategory->ubah_status_category($id);
		redirect('operator/category','refresh');
	}

	

}

/* End of file Category.php */
/* Location: ./application/controllers/operator/Category.php */