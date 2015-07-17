<?php
class Model_users extends CI_Model{
	public function can_log_in(){
		$this->db->where('username',$this->input->post('username'));
		$this->db->where('password',md5($this->input->post('password')));

		$query = $this->db->get('users');

		if($query->num_rows() == 1)
		{
			return true;
		}
		else{
			return false;
		}
	}
	public function admin_login(){
		$this->db->where('username',$this->input->post('username'));
		$this->db->where('password',md5($this->input->post('password')));

		$query = $this->db->get('admin_users');

		if($query->num_rows() == 1)
		{
			return true;
		}
		else{
			return false;
		}
	}

	public function insert_adminData($data)
	{
		$this->db->insert('admin_users',$data);
	}

	public function insert_userRequest($data)
	{
		$this->db->insert('requests',$data);
		return true;
	}
	public function get_requests(){
		
		$query = $this->db->get('requests');
		return $query;
	}
	public function user_accepted()
	{
		$this->db->where('user_id',$this->uri->segment(3));
		$data = $this->db->get('requests');
		
		$query = $data->row();
		$newDick = array(
				//'user_id' => $query->user_id,
				'username' => $query->username,
				'name' => $query->name,
				'address' => $query->address,
				'email' => $query->email,
				'password' => $query->password
			);


		$this->db->insert('users',$newDick);

		$this->db->where('user_id',$this->uri->segment(3));
		$this->db->delete('requests');


	}

	public function user_declined()
	{
		$this->db->where('user_id',$this->uri->segment(3));
		$this->db->delete('requests'); 
	}

	public function seekProfile(){
		$this->db->where('username',$this->uri->segment(3));
		$data = $this->db->get('users');
		
		return $data->row(); 
	}






}