<?php
/**
* 
*/
class User_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('user_loged') != TRUE)
		{
			redirect('login/userlog');			
		}
	}
	public function index()
 	{
 		$data['city'] = $this->adjos_model->select_cities('city');
 		$this->load->view('includes/header.php');
 		$this->load->view('index',$data);
 		$this->load->view('includes/footer.php');
 	}
	public function inbox()
	{
		$id=$this->session->userdata('user_id');
		$data['search']= $this->adjos_model->user_data('user_quest',$id);
		$this->load->view('includes/header');
		$this->load->view('user/inbox',$data);
		$this->load->view('includes/footer');
	}
	public function s_del()
	{
		$id = $this->uri->segment(3);
		$query = $this->adjos_model->deletequest('user_quest',$id);
		if ($query) {
			redirect(base_url().'user_controller/inbox');
		}
	}
}
?>