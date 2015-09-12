<?php
 /**
 * 
 */
 class Adjos extends CI_Controller
 {
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->library('form_validation');
 		error_reporting(0);
 	}
 	public function index()
 	{
 		$data['city'] = $this->adjos_model->select_cities('city');
 		$this->load->view('includes/header.php');
 		$this->load->view('index');
 		$this->load->view('includes/footer.php',$data);
 	}
 	public function user()
 	{
 		$show = $this->input->get('msg');
		if (!empty($show))
		 {
			$data['msg'] 	=  	$this->msg($show);
		}
 		$this->load->view('register',$data);
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
			$msg 	= 	'<div class="alert alert-danger" role="alert">Please Fill The Required Fields</div>';
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
 	public function register()
 	{
 		$name = $this->input->post(htmlentities(stripslashes('name')));
 		$uname = $this->input->post(htmlentities(stripslashes('username')));
 		$email = $this->input->post(htmlentities(stripslashes('email')));
 		$password = $this->input->post(htmlentities(stripslashes('password')));
 		if($uname ==' ' || $name ==' ' || $email == ' ' || $password ==' ')
 		{
 			redirect('adjos/user?msg=2','refresh');
 		}
 		$register  = array(
	 	'name' => $name,
	 	'user_name' => $uname,
	 	'email'  => $email,
	 	'password' => $password, 
	 	);
		$query = $this->adjos_model->register_user('users',$register);
		if($query)
			{
		 	redirect('adjos');	
			}
	 	else
 			{
 			redirect('adjos/user','refresh');
 			}
 	}
	public function addmissions()
 	{
 		$id=$this->uri->segment(3);
 		$data['search'] = $this->adjos_model->search($id);
 		$file_string = file_get_contents('http://localhost/web/simple.php');
  		$main="Admissions";
 		$this->load->view('includes/header2');
		$countet=50;
 		$counter=0;
 		$country = $this->input->get('khar'); 
 		$subject = $this->input->get('subject');
 		$value = $this->input->get('col_unis');
 		$this->header();
		$college = $this->comparing($value);
		if ($id!='') {
			$country  = $data['search']->city;
			$subject  = $data['search']->subject;
			$category = $data['search']->cat;
			$college  = $this->comparing($category);
			if ($country=='' || $subject=='' || $college=='') {
			echo 'Sorry';
			}
		}
		else{
			if ($country=='' || $subject=='' || $college=='') {
			echo 'Sorry';
			}
		}	
		$counter=1;
		$compared  = strlen($subject.$country)*5;
		switch ($college) {
			case 'M':
			while ( $counter <= $compared) {
				preg_match('/<p id="wel'.$counter.'">'.$country.'<\/p>/i',$file_string, $cityname);
				preg_match('/<h3 id="h'.$counter.'">(.*)<\/h3>/i',$file_string, $subj);
				preg_match('/<p id="web'.$counter.'">(.*)<\/p>/i', $file_string, $university);
				preg_match('/<p id="pd'.$counter.'">(.*)<\/p>/i', $file_string, $postdate);
				preg_match('/<p id="ld'.$counter.'">(.*)<\/p>/i', $file_string, $lastdate);
				$first = strip_tags(trim(strtolower($cityname[0])));
				$second = strip_tags(trim(strtolower($country)));
				$subject_trim = trim($subj[0]);
				if (!empty($first)==$second) {
					foreach ($subj as $key) {
						$data = explode(',', $key);
					} 
						foreach ($data as $ky) {
								$string1 = strtolower(trim(strip_tags($ky)));
								$string2 = strtolower(trim(strip_tags($subject)));
								if ($string1==$string2) {
									echo '<div class="col-lg-6">';
									echo '<div class="list-group">';
									if (!empty($string1)) {
										echo '<p class="list-group-item">Admission Started in:  <span style="text-transform:uppercase">'.@strip_tags($string1).'</span></p>';
									}
									if (!empty($cityname[0])) {
										echo '<span class="list-group-item"><p style="font-size:14px; color:#222;"><span class="fa fa-map-marker fa-lg"> </span> '.@strip_tags($cityname[0]).'</p>';
									}
									if (!empty($university[0])) {
										echo '<p style="font-size:14px; color:#222;"><span class="fa fa-university"> </span> '.@strip_tags($university[0]).'</p>';
									}
									if (!empty($postdate[0])) {
										echo '<p style="font-size:14px; color:#222;"><span class="fa fa-clock-o"> </span> '.@strip_tags($postdate[0]).'</p>';
									}
									if (!empty($lastdate[0])) {
										echo '<p style="font-size:14px; color:#222;"><span class="fa fa-clock-o"> </span> '.@strip_tags($lastdate[0]).'</p></span>';
									}
									echo '</div></div>';
								}
								else
								{
									$msg="No Result Found";
								}
						  // End of INNER FOREACH 
					} // End of OUTER FOREACH
				}
				$counter++;	
				}  // End of while loops
				break;
				// END OF FIRST SWITCH COMPARING
			case 'B':
			// 
			while ( $counter <= $compared) {
				preg_match('/<p id="wel'.$counter.'">'.$country.'<\/p>/i',$file_string, $cityname);
				preg_match('/<h3 id="s'.$counter.'">(.*)<\/h3>/i',$file_string, $subj);
				preg_match('/<p id="web'.$counter.'">(.*)<\/p>/i', $file_string, $university);
				preg_match('/<p id="pd'.$counter.'">(.*)<\/p>/i', $file_string, $postdate);
				preg_match('/<p id="ld'.$counter.'">(.*)<\/p>/i', $file_string, $lastdate);
				$first = strip_tags(trim(strtolower($cityname[0])));
				$second = strip_tags(trim(strtolower($country)));
				$subject_trim = trim($subj[0]);
				if (!empty($first)==$second) {
					foreach ($subj as $key) {
						$data = explode(',', $key);
					} 
						foreach ($data as $ky) {
								$string1 = strtolower(trim(strip_tags($ky)));
								$string2 = strtolower(trim(strip_tags($subject)));
								if ($string1==$string2) {
									echo '<div class="col-lg-6">';
									echo '<div class="list-group">';
									if (!empty($string1)) {
										echo '<p class="list-group-item">Admission Started in:  <span style="text-transform:uppercase">'.@strip_tags($string1).'</span></p>';
									}
									if (!empty($cityname[0])) {
										echo '<span class="list-group-item"><p style="font-size:14px; color:#222;"><span class="fa fa-map-marker fa-lg"> </span> '.@strip_tags($cityname[0]).'</p>';
									}
									if (!empty($university[0])) {
										echo '<p style="font-size:14px; color:#222;"><span class="fa fa-university"> </span> '.@strip_tags($university[0]).'</p>';
									}
									if (!empty($postdate[0])) {
										echo '<p style="font-size:14px; color:#222;"><span class="fa fa-clock-o"> </span> '.@strip_tags($postdate[0]).'</p>';
									}
									if (!empty($lastdate[0])) {
										echo '<p style="font-size:14px; color:#222;"><span class="fa fa-clock-o"> </span> '.@strip_tags($lastdate[0]).'</p></span>';
									}
									echo '</div></div>';
								}
								else
								{
									$msg="No Result Found";
								}
						  // End of INNER FOREACH 
					} // End of OUTER FOREACH
				}
				$counter++;	
				}  // End of while loops
				
				break;
				// END OF second SWITCH COMPARING
			default:
			break;
		}
		if($this->session->userdata('user_loged')!= FALSE)
		{
		$username=$this->session->userdata('user_name');
		$data['id']=$this->adjos_model->select_user('users',$username);
		echo form_open('adjos/save'); 
		echo '<div class="clearfix"></div><input type="submit" class="btn btn-primary" value="Save Search">
			  <input type="hidden" value="'.$country.'" name="city">
			  <input type="hidden" value="'.$subject.'" name="subject">
			  <input type="hidden" value="'.$value.'" name="cat">
			  <input type="hidden" value="'.$data['id']->user_id.'" name="user_id">
			  <input type="hidden" value="'.$main.'" name="about">';
		echo form_close();
		}
		echo '</div></div></div>';
 		$this->load->view('search');
 		$this->load->view('includes/footer');
 	}
 	public function jobs()
 	{
 		$id=$this->uri->segment(3);
 		$data['search'] = $this->adjos_model->search($id);
 		$file_strings = file_get_contents('http://localhost/web/jobs_finder.php');
  		$main="jobs";
 		$this->load->view('includes/header2');
 		$counter=0;
 		$type = trim($this->input->get('type')); 
 		$city = trim($this->input->get('city'));
 		$this->header();
 		if (!empty($id)) {
 			$city = $data['search']->city;
 			$type = $data['search']->subject;
		if ($type=='' || $city=='') {
			echo 'Sorry';
		}	
		}
		else{
			if ($type=='' || $city=='') {
			echo 'Sorry';
		}	
		}
		$counter=1;
		//for the results to display
		$compared  = strlen($city.$type)*25;
			while ( $counter <= $compared) {
				preg_match('/<div id="title'.$counter.'">'.$type.'<\/div>/i',$file_strings, $jobname);
				preg_match('/<div id="city'.$counter.'">'.$city.'<\/div>/i',$file_strings, $cityname);
				preg_match('/<div id="pro'.$counter.'">(.*)<\/div>/i', $file_strings, $namec);
				preg_match('/<div id="det'.$counter.'">(.*)<\/div>/i', $file_strings, $details);
				preg_match('/<div id="dat'.$counter.'">(.*)<\/div>/i', $file_strings, $dates);
				$comp1 = strip_tags(trim(strtolower($jobname[0])));
				$comp3 = strip_tags(trim(strtolower($cityname[0])));
				$comp2 = strip_tags(trim(strtolower($type)));
				$comp4 = strip_tags(trim(strtolower($city)));
				if ($comp3 == $comp4 && $comp1==$comp2) {
					echo '<div class="col-lg-12" style="margin-bottom:1em;">';
					echo '<div class="list-group">';
					if (!empty($jobname[0])) {
						echo '<p class="list-group-item"><span style="text-transform:uppercase">'.@strip_tags($jobname[0]).'</span></p>';
					}
					if (!empty($cityname[0])) {
						echo '<span class="list-group-item"><p style="font-size:14px; color:#222;">'.@strip_tags($cityname[0]).'</p>';
					}
					if (!empty($namec[0])) {
						echo '<p style="font-size:14px; color:#222;">'.@strip_tags($namec[0]).'</p>';
					}
					if (!empty($details[0])) {
						echo '<p style="font-size:14px; color:#222;">'.@strip_tags($details[0]).'</p>';
					}
					if (!empty($dates[0])) {
						echo '<p style="font-size:14px; color:#222;">'.@strip_tags($dates[0]).'<button class="btn btn-primary pull-right"> Apply Now</button></p></span>';
					}
					echo '</div></div>';
				}
				$counter++;	
				}  
				// End of while loops
				// END OF FIRST SWITCH COMPARING
		if($this->session->userdata('user_loged')!= FALSE)
		{
		$username=$this->session->userdata('user_name');
		$data['id']=$this->adjos_model->select_user('users',$username);
		echo form_open('adjos/save'); 
		echo '<input type="submit" class="btn btn-primary" value="Save Search">
			  <input type="hidden" value="'.$city.'" name="city">
			  <input type="hidden" value="'.$type.'" name="subject">
			  <input type="hidden" value="'.$data['id']->user_id.'" name="user_id">
			  <input type="hidden" value="'.$main.'" name="about">';
		echo form_close();
		}
		echo '</div></div></div>';
 		$this->load->view('search');
 		$this->load->view('includes/footer');
 	}
 	// Save Search here
 	public function save()
 	{	
 		$date=date("y-m-d");
 		$data= array(
 			'city'=> $this->input->post('city'),
 			'subject' => $this->input->post('subject'),
 			'about' => $this->input->post('about'),
 			'user_id'=> $this->input->post('user_id'),
 			'cat'=> $this->input->post('cat'),
 			'date' => $date,
 			);
 		$this->adjos_model->save('user_quest',$data);
 		redirect(base_url().'user_controller/index');
 	}
// loaded Web Pages
 	public function col_unis()
 	{
 		$this->load->view('includes/header2');
 		$city = $this->uri->segment(3);
 		$file_string = file_get_contents(base_url().'adjos/colleges');
 		$this->header();
 		$key = 'i';
 		if($key == 'u')
 		{
 			for ($i=0; $i <25 ; $i++) { 
 			if(preg_match('/<div id="u'.$i.'">(.*)<\/div>/i', $file_string, $first))
 				{
 				preg_match('/<div id="phone'.$i.'">(.*)<\/div>/i', $file_string, $second);
 				preg_match('/<div id="email'.$i.'">(.*)<\/div>/i', $file_string, $third);
 				echo '<div class="col-lg-6" style="height:170px; margin-top:1em;"><div class="panel panel-primary">
				  		<div class="panel-heading">'.$first[0].'</div>
				  		<div class="panel-body">'.
			 				'<b>Phone:</b>'.$second[0].
			 				'<b>Email:</b>'.$third[0].'
				  			</div></div></div>';
 				}
 			}
 		}
 		else if($key == 'c')
 		{
 			for ($i=0; $i <52 ; $i++) { 
 			if(preg_match('/<div id="c'.$i.'">(.*)<\/div>/i', $file_string, $first))
 				{
 				preg_match('/<div id="phone'.$i.'">(.*)<\/div>/i', $file_string, $second);
 				preg_match('/<div id="email'.$i.'">(.*)<\/div>/i', $file_string, $third);
 				echo '<div class="col-lg-6" style="height:170px; margin-top:1em;">
 					  <div class="panel panel-primary">
				  	  <div class="panel-heading">'.$first[0].'</div>
				  	  <div class="panel-body">'.
			 			'<b>Phone:</b>'.$second[0].
			 			'<b>Email:</b>'.$third[0].'
				  		</div></div></div>';
 				}
 			}
 		}
 		else if($key == 'i')
 		{
 			for ($i=0; $i <50 ; $i++) { 
 			if(preg_match('/<div id="i'.$i.'">(.*)<\/div>/i', $file_string, $first))
 				{
 				preg_match('/<div id="phone'.$i.'">(.*)<\/div>/i', $file_string, $second);
 				preg_match('/<div id="email'.$i.'">(.*)<\/div>/i', $file_string, $third);
 				echo '<div class="col-lg-6" style="height:170px; margin-top:1em;">
 					  <div class="panel panel-primary">
				  	  <div class="panel-heading">'.$first[0].'</div>
				  	  <div class="panel-body">'.
			 			'<b>Phone:</b>'.$second[0].
			 			'<b>Email:</b>'.$third[0].'
				  		</div></div></div>';
 				}
 			}
 		}
 		
 	}
 	public function header()
 	{
 		 	echo '<div class="mainmenu-wrapper">
	       	  <div class="container">
	        	<div class="menuextras">
					<div class="extras pull-right">';
					if($this->session->userdata('user_loged') != TRUE){	
					echo '<ul>
						 <li>
						 <a href="'.base_url().'adjos/user" style="color:#fff; text-transform:uppercase;">Sign Up</a>
						 </li>	
						 <li>
			        	 <a href="'.base_url().'login/userlog" id="loginhere" style="color:#fff; text-transform:uppercase;">Login</a>
			        	 <li>';
			        	}else
			        	{
			        	echo '<li class="dropdown" style="margin-right:1em;">
						<a style="color:#fff; text-transform:uppercase;" href="" id="dLabel" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">'
						.$this->session->userdata('user_name').'
						<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
						<li><a href="#">Profile</a></li>
						<li><a href="'.base_url().'login/user_logout">log out</a></li>
						</ul>
						</li>';
					}
			       	echo '</ul>
				</div>
			  </div>
				<nav id="mainmenu" class="mainmenu col-lg-6">
					<ul>
						<li class="logo-wrapper"><a href="index.php"><img src="'.base_url().'assets/img/mine/logo1.png" width="100" height="100"></li>
						<li class="active" style="color:#fff;">
							<a href="'.base_url().'adjos" style="color:#fff; text-transform:uppercase; position:relative;  top:2em; left:4em; font-size:14px;"><i class="glyphicon glyphicon-home"> </i> Home</a>
						</li>';
						if($this->session->userdata('user_loged')==TRUE){
				echo	'<li class="active" style="color:#fff;">
							<a href="'.base_url().'user_controller/inbox" style="color:#fff; text-transform:uppercase; position:relative; top:2em; left:4em; font-size:14px;"><i class="glyphicon glyphicon-inbox"> </i> Inbox</a>
						</li>';
						}
				echo '</ul>
				</nav>
				
			</div>
		</div>';
 		echo '<div class="section"><div class="container search_result">
			  <div class="col-lg-offset-1 col-lg-10" style="background:#f8f8f8">';
 	}
 	public function page_1()
 	{
 		$this->load->view('includes/header');
 		$this->load->view('page_1');
 		$this->load->view('includes/footer');
 	}
	public function page_2()
 	{
 		$this->load->view('includes/header');
 		$this->load->view('page_2');
 		$this->load->view('includes/footer');
 	}
 	public function page_3()
 	{
 		$this->load->view('includes/header');
 		$this->load->view('page_3');
 		$this->load->view('includes/footer');
 	}
 	public function page_4()
 	{
 		$this->load->view('includes/header');
 		$this->load->view('page_4');
 		$this->load->view('includes/footer');
 	}
 	public function comparing($value)
 	{
 		switch ($value) {
 			case 'Intermediate':
 			return $type='B';
 			break;
 			case 'FSc-Med':
 			return $type='B';
 			break;
 			case 'FSc-Eng':
 			return $type='B';
 			break;
 			case 'FCS':
 			return $type='B';
 			break;
 			case 'Bachelor':
 			return $type='B';
 			break;
 			case 'MS':
 			return $type='M';
 			break;
 			case 'MPHIL':
 			return $type='M';
 			break;
 			case 'PHD':
 			return $type='M';
 			break;
 			default:
 				break;
 		}
 	}



 }
?>