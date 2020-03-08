<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model');

	}

	public function index()
	{
		
		$data['judul'] = 'Data Mahasiswa';
		$data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();

		$this->load->view('templates/header', $data);
		$this->load->view('mahasiswa/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['judul'] = 'Tambah Data Mahasiswa';

		$this->form_validation->set_rules('nama','Nama', 'required');
		$this->form_validation->set_rules('nim', 'Nim', 'required|max_length[10]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('mahasiswa/create');
			$this->load->view('templates/footer');
		}else{
			$this->Mahasiswa_model->tambahDataMahasiswa();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('Mahasiswa');
		}

		
	}

	public function hapus($id)
	{
		$this->Mahasiswa_model->hapus($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('Mahasiswa');
	}

	public function detail($id)
	{
		$data['judul'] = 'Detail Mahasiswa';
		$data['mahasiswa'] = $this->Mahasiswa_model->detail($id);

		$this->load->view('templates/header', $data);
		$this->load->view('mahasiswa/detail', $data);
		$this->load->view('templates/footer');
	}

	public function ubah($id)
	{
		$data['judul'] = 'Ubah Data Mahasiswa';
		$data['mahasiswa'] = $this->Mahasiswa_model->detail($id);


		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nim', 'Nim', 'required|max_length[10]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');

		if($this->form_validation->run() == false)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('mahasiswa/ubah');
			$this->load->view('templates/footer');
		}else{
			$this->Mahasiswa_model->ubahDataMahasiswa($id);
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('Mahasiswa');
		}

		
	}



}
