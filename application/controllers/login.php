<?php

/**
* 
*/
class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->load->view('admin_login');
	}
	public function userlog()
	{
		$this->load->view('user_login');
	}
	public function usersign()
	{
		if($this->input->post('loged'))
			{
			$ses= array(
			'user_name' => $this->input->post('username'),
			'password' => $this->input->post('password'),	
			);
			$query = $this->adjos_model->user_authentication('users',$ses);
			if($query)
				{
					$session = array(
					'user_name' => $query->user_name,
					'user_id'  => $query->user_id,
					'user_loged' => TRUE
					);
					
					$this->session->set_userdata($session);
					redirect('user_controller');
				}
				else
				{
					redirect('login/userlog');
				}
			}
	}
	public function signin()
	{

		if($this->input->post('loginhere'))
			{
				$this->form_validation->set_rules('username','Username','required');
				$this->form_validation->set_rules('password','Password','required');
				$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
				if($this->form_validation->run() == true)
					{
						$where = array(
										'username' => $this->input->post('username') ,
										'password' => md5($this->input->post('password')),
									   );
						$query = $this->adjos_model->user_authenticate('admin_login',$where);
						if($query)
							{
								$user_id = $query->id;
								$session = array(
								'username' => $query->username,
								'user_id'  => $query->id,
								'logged_in'=> TRUE 
								 );
								$this->session->set_userdata($session);
								redirect('adjos_admin/index');
							}
						else{					
								redirect(base_url().'login');
							}	
					}
			}
		redirect(base_url().'login');
	}
	public function log_out()
	{
		$this->session->sess_destroy();
		redirect(base_url().'adjos');
	}
	public function user_logout()
	{
		$this->session->sess_destroy();
		redirect(base_url().'adjos');
	}
}

?>