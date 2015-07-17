<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wel extends CI_Controller {
	
	public function __construct()
	{
	    parent::__construct();
	    $this->load->model('model_users');
	    $this->load->model('model_candi');

	    //$data['forprofile'] = $this->model_candi->get_specific();
	    $this->load->view('view_header');

	     
	}

	public function index()
	{
		$this->home();
		
	}
	public function home(){
		$data['forprofile'] = $this->model_candi->get_all();
		$this->load->view('welcome',$data);
		$this->load->view('view_footer');
	}


	public function login(){
		$this->load->view("view_loginform");
		$this->load->view('view_footer');
	}
	public function login_validation()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required|callback_login_check');
		$this->form_validation->set_rules('password', 'Password', 'required|md5');

		if ($this->form_validation->run())
		{
			$data = array(
			'username' => $this->input->post('username'),
			/*'uid' => $this->input->post('userid'),*/
			'is_logged_in' => 1
			);
			$this->session->set_userdata($data);
			redirect('election');
			
		}
		else{
			redirect('wel/login');
		}
		
	}

	public function login_check()
	{
		

		if($this->model_users->can_log_in()){
			return true;
		}
		else
		{
			$this->form_validation->set_message('login_check','Incorrect username or passowrd');
			return false;
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('wel');
	}

	public function registration()
	{
		$this->load->view("view_register");
		$this->load->view('view_footer');

	}
	public function register_validation(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username','Username','required|is_unique[users.username]'); //|valid_email
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('cpassword','Confirm Password','required|matches[password]');
		$this->form_validation->set_message('is_unique',"That Username already exists.");

		if($this->form_validation->run())
		{
			
			$data = array(
					'name' => $this->input->post('name'),
					'address' =>$this->input->post('address'),
					/*'contact' => $this->input->post('contact'),*/
					'email' => $this->input->post('email'),
					'username' => $this->input->post('username'),
					'password' => md5($this->input->post('password'))
					);
			$this->model_users->insert_userRequest($data);

			echo "<script>
				alert(' Request has been sent. Please be patient as it will be administrated.');
				window.location.href='index';
				</script>";
			//redirect(site_url());
		}
		else{
			$this->load->view("view_register");
		}
	}

	public function profile(){
		$data = $this->model_users->seekProfile();
		$newData = array(
				'name' => $data->name,
				'address' => $data->address,
				'email' => $data->email,
			);
		$this->load->view('view_profile',$newData);

	}



}
