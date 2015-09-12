
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
						<li class="logo-wrapper"><a href="index.php"><img src="assets/img/mine/logo1.png" width="100" height="100"></li>
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
        	<h1>Admission Details</h1>
        	<div class="row search">
        		<div class="col-lg-12">
        			<div class="col-lg-3" style="padding:1em;">
        				<img src="img/team7.jpg" class="img img-responsive img-thumbnail" alt="">
        			</div>
        			<div class="col-lg-9">
        				<div class="col-lg-12">
        					<h2><?php echo $title[0];?></h2>
        				</div>
        				<div class="col-lg-12">
							<table class="table table-responsive">
								<tr>
									<td class="n">
										<h4>Department</h4>
									</td>
									<td>
										<h4 class="right"><?php echo $subject[0];?></h4>
									</td>
								</tr>
								<tr>
									<td>
										<h4>Post Date</h4>
									</td>
									<td>
										<h4 class="right"><?php echo $web[0];?></h4>
									</td>
								</tr>
								<tr>
									<td>
										<h4>Details</h4>
									</td>
									<td>
										<h4 class="right text-justify">
											Curabitur quis nisl in leo euismod venenatis eu in diam. 
											Etiam auctor diam pellentesque lectus vehicula mattis. Nulla 
											ac massa at dolor condimentum eleifend vitae vitae urna.
											Curabitur quis nisl in leo euismod venenatis eu in diam. Etiam
											 auctor diam pellentesque lectus vehicula mattis. Nulla ac massa
											  at dolor condimentum eleifend vitae vitae urna.
											Curabitur quis nisl in leo euismod venenatis eu in diam. Etiam 
											auctor diam pellentesque lectus vehicula mattis. Nulla ac massa 
											at dolor condimentum eleifend vitae vitae urna.
										</h4>
									</td>
								</tr>
								<tr>
									<td>
										<h4>Last Date</h4>
									</td>
									<td>
										<h4 class="right">12-August-2014</h4>
									</td>
								</tr>
								<tr>
									<td>
										<h4>Apply on</h4>
									</td>
									<td>
										<h4 class="right">http://www.aup.edu.pk</h4>
									</td>
								</tr>
							</table>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
	    <!-- Footer -->
		    <div class="row footer">
	    	<div class="container">
		    		<div class="col-footer col-md-4 col-xs-6 latestnews">
		    			<h3><i>Sign in</i><span> Here</span></h3>
		    			<form action="" class="from-control">
		    				<div class="input-group col-lg-9" >
		    					<label for="" class="input-group-addon ">Username</label>
		    					<input type="text" class="form-control">
		    				</div>
		    				<br>
		    				<div class="input-group col-lg-9">
		    					<label for="" class="input-group-addon ">Password</label>
		    					<input type="text" class="form-control">
		    				</div>
		    				<br>
		    				<div class="input-group">
		    					<p><a href="" class="btn btn-default">Log in</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="" class="btn btn-default">Reset</a></p>
		    				</div>
		    			</form>
		    		</div>
		    		<div class="col-footer col-md-2 col-xs-6 sitemap">
		    			<h3>Site map</h3>
		    			<ul class="no-list-style footer-navigate-section">
		    				<li><a href="#"><span class="fa fa-angle-right fa-sm"> </span>&nbsp; About</a></li>
		    				<li><a href="#"><span class="fa fa-angle-right fa-sm"> </span>&nbsp; Projects</a></li>
		    				<li><a href="#"><span class="fa fa-angle-right fa-sm"> </span>&nbsp; Society</a></li>
		    				<li><a href="#"><span class="fa fa-angle-right fa-sm"> </span>&nbsp; Schemes</a></li>
		    				<li><a href="#"><span class="fa fa-angle-right fa-sm"> </span>&nbsp; Flates</a></li>
		    				<li><a href="#"><span class="fa fa-angle-right fa-sm"> </span>&nbsp; Maps</a></li>
		    			</ul>
		    		</div>
		    		<div class="col-footer col-md-3 col-xs-6 community">
		    			<h3>Community</h3>
		    			<ul class="no-list-style footer-navigate-section">
		    				<li><a href="#"><span class="fa fa-angle-right fa-sm"> </span>&nbsp; Blog</a></li>
		    				<li><a href="#"><span class="fa fa-angle-right fa-sm"> </span>&nbsp; Forum</a></li>
		    				<li><a href="#"><span class="fa fa-angle-right fa-sm"> </span>&nbsp; Support</a></li>
		    				<li><a href="#"><span class="fa fa-angle-right fa-sm"> </span>&nbsp; News Letter</a></li>
		    			</ul>
		    		</div>
				<?php require_once('includes/footer.php');?> 
 