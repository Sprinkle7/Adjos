		<?php $this->load->view('includes/header.php');?>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <!-- Navigation & Logostyle="background:#1e97dd; color:#fff;"-->
        <div class="mainmenu-wrapper" style="background:#e43c49; border-bottom:5px solid #455a64;">
	        <div class="container">
	        	<div class="menuextras">
					<div class="extras">
						<ul>
						<?php 
						if($this->session->userdata('user_loged') != TRUE)
							{
						?>
						<li>
						<a href="adjos/user" style="color:#fff; text-transform:uppercase;">Sign Up</a>
						</li>	
						<li>
			        	<a href="login/userlog" id="loginhere" style="color:#fff; text-transform:uppercase;">Login</a>
			        	<li>
						<?php	
							}
							else{
						?>
						<li>
						<a style="color:#fff; text-transform:uppercase;"><?php echo $this->session->userdata('user_name')?></a>
						</li>	
						<li>
			        	<a href="login/user_logout" style="color:#fff; text-transform:uppercase;">log out</a>
			        	<li>
						<?php
							}
						?>
			        	
			        	</ul>
					</div>
		        </div>
		        <nav id="mainmenu" class="mainmenu col-lg-6">
					<ul>
						<li class="logo-wrapper"><a href="index.php"><img src="<?php echo base_url()?>assets/img/mine/logo1.png" width="100" height="100"></li>
						<li class="active" style="color:#fff;">
							<a href="<?php echo base_url()?>adjos" style="color:#fff; text-transform:uppercase; position:relative; top:2em; left:4em;"><i class="glyphicon glyphicon-home"> </i> Home</a>
						</li>
							
					</ul>
				</nav>
				<div class="pull-right" style="display:none;" id="click">
					<form action="" class="from-control">
		    				<div class="input-group col-lg-12" >
		    					<input type="text" class="form-control">
		    				</div>
		    				<div class="input-group col-lg-12">
		    					<input type="text" class="form-control">
		    				</div>
		    				<input type="submit" value="Login" class="btn color4 col-lg-12">
		    		</form>
				</div>
			</div>
			
		</div>
        <!-- Homepage Slider -->
        <div class="container ser" style="width:80%;">
        	<h1><?php if(!empty($h1)){ echo $h1;}?></h1>
        	<div class="row search">
        			<div class="col-lg-12">
        			<a href="">http://ilmkidunya.com.pk</a>
					<p>
					Curabitur quis nisl in leo euismod venenatis eu in diam. Etiam auctor diam pellentesque lectus vehicula mattis. Nulla ac massa at dolor condimentum eleifend vitae vitae urna.
        			</p>
        			<p><a href="#" class="btn btn-primary">More Details</a></p>
        			</div>
        	</div>
        </div>
