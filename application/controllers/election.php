<?php
class Election extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('model_candi');

	    //$data['forprofile'] = $this->model_candi->get_all();
	    $this->load->view('view_header');

	}

	public function index()
	{
		if($this->session->userdata('is_logged_in')){
			$this->listCandi();
		}
		else
		{
			redirect(site_url());
		}
	}
	public function listCandi(){

		$data['forprofile'] = $this->model_candi->get_all();

		$this->load->view('view_ActivePage',$data);
		$this->load->view('view_footer');
	}

	public function vote_update()
	{	

		$this->model_candi->update_record();
		$this->load->view("vote_success");
	}

	public function results(){
		$data['votes'] = $this->model_candi->get_votes();
		$data['names'] = $this->model_candi->get_all();

		$this->load->view("view_results",$data);
	}






}