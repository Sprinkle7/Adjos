<?php
/**
* 
*/
class Adjos_admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('logged_in') != TRUE)
		{
			redirect('login');			
		}
	}
	public function login()
	{
		$this->load->view('admin/includes/header');
		$this->load->view('login');
	}
	public function index()
	{
		$this->load->view('admin/includes/header');
		$this->load->view('admin/includes/topmenu');
		$this->load->view('admin/includes/tile_menu');
		$this->load->view('admin/index');
	}
	public function city()
	{

		
		$data['show']	=	$this->adjos_model->showcity();
		$this->load->view('admin/includes/header');
		$this->load->view('admin/includes/topmenu');
		$this->load->view('admin/includes/city_menu');
		$this->load->view('admin/addcity',$data);
	}
	public function addcity()
	{
		$data = array('city' => $this->input->post('name'));
		$query = $this->adjos_model->addcity('city',$data);
		if ($query) {
			redirect('adjos_admin/city?msg=1','refresh');
		}
	}
	
	public function edit_city()
	{
		$data['id']		=	$this->uri->segment(3);
		$data['editing'] 	=	$this->adjos_model->select_edit('city',$data['id']);	 
		$this->load->view('admin/includes/header2');
		$this->load->view('admin/includes/topmenu');
		$this->load->view('admin/editcity', $data);
	}
	public function readdcity()
	{
		$id = $this->input->post('edit');
		$data = array(
						'city' => $this->input->post('name')
					);
		$query = $this->adjos_model->e_city('city',$id,$data);
		if($query)
		{
			redirect('adjos_admin/city?msg=3','refresh');
		}
	}
	public function msg($show)
	{
		if($show=='1')
		{

			$msg 	=	'<div class="alert alert-success" role="alert">Add Succesfully</div>';
			return $msg;
		}
		else if($show=='2')
		{
			$msg 	= 	'<div class="alert alert-danger" role="alert">City Deleted</div>';
			return $msg; 
		}
		else if($show=='3')
		{
			$msg 	= 	'<div class="alert alert-success" role="alert">City Modified</div>';
			return $msg; 
		}
		else 
		{
			$msg ='Sorry';
			return $msg;
		}
	}
	public function del_city()
	{
		$id['id']= $this->uri->segment(3);
		$query = $this->adjos_model->deletecity('city',$id);
		if($query)
		{
			redirect('adjos_admin/city?msg=2');
		}
	}
	public function questions()
	{
		$data['questions'] = $this->adjos_model->questions();
		$this->load->view('admin/includes/topmenu');
		$this->load->view('admin/includes/header');
		$this->load->view('admin/includes/question');
		$this->load->view('admin/questions',$data);
		$this->load->view('admin/includes/footer');
	}
	public function del_quest()
	{
		$id['q_id']= $this->uri->segment(3);
		$query = $this->adjos_model->questiondel('questions',$id);
		if($query)
		{
			redirect('adjos_admin/questions?msg=2');
		}
	}
	public function addquestion()
	{
		$data = array(	
						'question' => $this->input->post('question'), 
						'place' => $this->input->post('location'),	
					 );
		$query = $this->adjos_model->insertquestion('questions',$data);
		if ($query) {
			redirect('adjos_admin/questions?msg=1');
		}
	}

}
?>