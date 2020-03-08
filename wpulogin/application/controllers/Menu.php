<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		cek_login();
		$this->load->model('Menu_model');
		$this->load->model('Submenu_model');

	}

	public function index()
	{
		$data['title'] = 'Menu Management';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['menu'] = $this->db->get('user_menu')->result_array();

		$this->form_validation->set_rules('menu', 'Menu', 'required');

		if($this->form_validation->run()== false){
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('menu/index', $data);
		$this->load->view('templates/footer');
		}else{
			$this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  			New menu added</div>');
			redirect('menu');
		}
		
	}
	public function hapus($id)
		{
			$this->Menu_model->hapusMenu($id);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  			Menu di delete</div>');
  			redirect('menu');
		}

		public function edit($id)
		{
			$data['title'] = 'Menu Management';
			$data['user'] = $this->db->get_where('user', ['email' =>
			$this->session->userdata('email')])->row_array();

			// $data['menu'] = $this->Menu_model->editMenu($id);

			$data['menu'] = $this->Menu_model->getById($id);
			
			$this->form_validation->set_rules('menu', 'Menu', 'required');

			if($this->form_validation->run()== false){
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar');
			$this->load->view('menu/edit', $data);
			$this->load->view('templates/footer');
		}else{
			$this->Menu_model->editMenu();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  			Menu is update</div>');
			redirect('menu');
		}
	}


	public function submenu()
	{
		$data['title'] = 'Submenu Management';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->model('Menu_model', 'menu');
		//join
		$data['subMenu'] = $this->menu->getSubMenu();

		//menampilkan menu untuk select
		$data['menu'] = $this->db->get('user_menu')->result_array();

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('menu_id', 'Menu', 'required');
		$this->form_validation->set_rules('url', 'URL', 'required');
		$this->form_validation->set_rules('icon', 'icon', 'required');

		if($this->form_validation->run() == false){
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('menu/submenu', $data);
			$this->load->view('templates/footer');	
		}else{
			$data = [
				'title' => $this->input->post('title'),
				'menu_id' => $this->input->post('menu_id'),
				'url' => $this->input->post('url'),
				'icon' => $this->input->post('icon'),
				'is_active' => $this->input->post('is_active')
			];

			$this->db->insert('user_sub_menu', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  			New Submenu added</div>');
			redirect('menu/submenu');
		}
			
	}

	public function delete($id)
	{
		$this->Submenu_model->deleteSubMenu($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  		SubMenu di delete</div>');
		redirect('menu/submenu');
	}

	public function editSub($id)
	{
		$data['title'] = 'Edit Submenu Management';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->model('Submenu_model', 'menu');
		
		$data['subMenu'] = $this->Submenu_model->getById($id);

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('menu_id', 'Menu', 'required');
		$this->form_validation->set_rules('url', 'URL', 'required');
		$this->form_validation->set_rules('icon', 'icon', 'required');

		if($this->form_validation->run() == false){
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar');
			$this->load->view('menu/edit-sub', $data);
			$this->load->view('templates/footer');	
		}else{
			$this->Submenu_model->editSubMenu();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  			Edit Submenu added</div>');
			redirect('menu/submenu');
		}
	}
		
}