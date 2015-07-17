<?php
class Model_candi extends CI_Model{
	public function get_all(){
		$query = $this->db->get('candidate');
		return $query->result_array();
	}
	/*public function get_specific(){
		
	}*/

	public function get_votes()
	{
		$this->db->select('votes_total');
		$query = $this->db->get('candidate');
		return $query->result_array();
	}

	public function add_candi($data)
	{
		$this->db->insert('candidate',$data);
		return;
	}

	public function delete_row()
	{
		//$this->>db->where('serial',$this->uri->segment(3));
		$this->db->delete('candidate');
	}

	public function update_record()
	{
		$a = $this->input->post("id");
		$query =  $this->db->query("select * from candidate where candidate_id= $a");
		foreach ($query->result() as $row)
		{
		    $vote =  (int)$row->votes_total;
		}
		$vote++;
		//var_dump($vote);
		$data = array(
			'votes_total' => $vote
			);

		$this->db->where('candidate_id',$this->input->post('id'));
		$this->db->update('candidate',$data);
		return true;
	}
}