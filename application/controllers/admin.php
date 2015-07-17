<?php

class Admin extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_users');
	}
	public function index()
	{
		$this->login();
	}
	public function login(){
		$data['title'] = "Login Page";
		
		$this->load->view("adminform");
	}
	public function login_validation(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username','Username','required|trim|callback_login_check');
		$this->form_validation->set_rules('password','Password','required|md5');

		if($this->form_validation->run())
		{
			$data= array(
				'username' => $this->input->post('username'),
				'admin_logged_in' => 1
				);
			$this->session->set_userdata($data);
			redirect('admin/powerpage','refresh');;
		}
		else{
			redirect('admin');
		}

	}
	public function login_check(){
		if($this->model_users->admin_login()){
			return true;
		}
		else
		{
			$this->form_validation->set_message("login_check","Incorrect Credentials");
			return false;
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin');
	}

	public function register(){
		$this->load->view("admin_register");
	}

	public function register_validation()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username','Username','required|is_unique[admin_users.username]'); //|valid_email
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('cpassword','Confirm Password','required|matches[password]');
		$this->form_validation->set_message('is_unique',"That Username already exists.");

		if($this->form_validation->run())
		{
			$data = array(
					'username' => $this->input->post('username'),
					'password' => md5($this->input->post('password'))
					);
			$this->model_users->insert_adminData($data);
			redirect("admin");
		}
		else{
			$this->load->view("admin_register");
		}
	}

	public function powerpage()
	{
		if($this->session->userdata('admin_logged_in'))
		{
			$data = array();
			if($query = $this->model_users->get_requests())
			{
				$data['records'] = $query;
			}
			$this->load->view('powerpage', $data);

		}
		else
		{
			redirect('admin/restricted');
		}
	}
	public function acceptUser()
	{
		$this->model_users->user_accepted();
		redirect('admin/powerpage');
	}
	public function declineUser()
	{
		$this->model_users->user_declined();
		redirect('admin/powerpage');
	}



}