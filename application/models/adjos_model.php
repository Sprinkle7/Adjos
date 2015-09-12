<?php
/**
* 
*/
class Adjos_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		
	}
	public function addcity($value , $data)
	{
		$query = $this->db->insert($value,$data);
		if ($query) {
			return true;
		}
		else
		{
			return false;
		}
	}
	public function showcity()
	{
		$this->db->select('id,city')->from('city')->order_by('id','desc');
		$query 	=	$this->db->get();
		if ($query->num_rows()>0) {
			return $query->result();
		}
	}
	public function select_edit($table, $id)
	{
		$this->db->select('city');
		$this->db->from($table);
		$this->db->where('id',$id);
		$query = $this->db->get();
		if($query)
		{
			return $query->row();
		}
	}
	public function e_city($table,$id,$data)
	{
		$this->db->where('id',$id);
		$query = $this->db->update($table,$data);
		if ($query) {
			return true;
		}
	}

// front end
	public function select_cities($table)
	{
		$this->db->select('id,city');
		$this->db->from($table);
		$this->db->order_by('id','desc');
		$query = $this->db->get();
		if ($query) {
			return $query->result();
		}
	}
	public function select_city($table,$id)
	{
		$this->db->select('city');
		$this->db->from($table);
		$this->db->where('id',$id);
		$query = $this->db->get();
		if ($query) {
			return $query->row();
		}
	}
	public function search($id)
	{
		$this->db->select('*');
		$this->db->from('user_quest');
		$this->db->where('ques_id',$id);
		$query = $this->db->get();
		if ($query) {
			return $query->row();
		}
	}
	public function deletequest($value , $id)
	{
		$this->db->where('ques_id',$id);
		$query = $this->db->delete($value);
		return $query;
	}
	public function deletecity($value , $id)
	{
		$this->db->where($id);
		$query = $this->db->delete($value);
		return $query;
	}
	public function questiondel($value , $id)
	{
		$this->db->where($id);
		$query = $this->db->delete($value);
		return $query;
	}
	public function questions()
	{
		$this->db->select('q_id,question,place');
		$this->db->from('questions');
		$query = $this->db->get();
		if($query)
		{
			return $query->result();
		}
	}
	public function insertquestion($table, $data)
	{
		$query = $this->db->insert($table,$data);
		if($query)
			{
				return true;
			}	
	}
	public function user_authenticate($table,$data)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($data);
		$query = $this->db->get();
		if($query->num_rows()>0)
			{
				return $query->row();
			}
	}
	public function user_authentication($table,$data)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($data);
		$query = $this->db->get();
		if($query->num_rows()>0)
			{
				return $query->row();
			}
	}
	public function register_user($table,$data)
	{
		$query = $this->db->insert($table,$data);
		if($query)
			{
				return true;
			}
	}
	public function select_user($table,$data)
	{
		$this->db->select();
		$this->db->from($table);
		$this->db->where('user_name',$data);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			return $query->row();
		}
	}
	public function save($table,$data)
	{
		$query = $this->db->insert($table,$data);
		if($query)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	public function user_data($table,$id)
	{
		$this->db->select('*')
		->from($table)
		->where('user_id',$id);
		$query = $this->db->get();
		if ($query->num_rows>0) {
			return $query->result();
		}
	}
}
?>
