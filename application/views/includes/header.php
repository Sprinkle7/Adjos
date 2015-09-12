<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>AdjoS Finder</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/icomoon-social.css">
        <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'> -->

        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/leaflet.css" />
		<!--[if lte IE 8]>
		    <link rel="stylesheet" href="css/leaflet.ie.css" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/font/open-sans.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome-4.1.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">
		<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'> -->
		<style>
		span[role="status"] div{
			display: none;
		}
		ul[id="ui-id-1"] li {
			list-style-type: none;
			position: relative;
			left: -28px;
		}
		</style>
        <script src="<?php echo base_url();?>assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
    
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Navigation & Logostyle="background:#1e97dd; color:#fff;"-->
        <div class="mainmenu-wrapper">
	        <div class="container">
	        	<div class="menuextras">
					<div class="extras">
						<ul>
						<?php 
						if($this->session->userdata('user_loged') != TRUE)
							{
						?>
						<li>
						<a href="<?php echo base_url()?>adjos/user" style="color:#fff; text-transform:uppercase;">Sign Up</a>
						</li>	
						<li>
			        	<a href="<?php echo base_url()?>login/userlog" id="loginhere" style="color:#fff; text-transform:uppercase;">Login</a>
			        	<li>
						<?php	
							}
							else{
						?>
						<li class="dropdown" style="margin-right:1em;">
						<a style="color:#fff; text-transform:uppercase;" href="" id="dLabel" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
						<!-- <span class="fa fa-user"></span> -->
						<img src="<?php echo base_url()?>assets/images/2.jpg" class="img-circle" style="border:2px solid #fff;" width="26" height="26">
						 <?php echo $this->session->userdata('user_name')?>
						 <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
						<li><a href="#">Profile</a></li>
						<li><a href="<?php echo base_url()?>login/user_logout">log out</a></li>
						</ul>
						</li>
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
							<a href="<?php echo base_url()?>adjos" style="color:#fff; text-transform:uppercase; position:relative; top:2em; left:4em; font-size:14px;"><i class="glyphicon glyphicon-home"> </i> Home</a>
						</li>
						<?php if($this->session->userdata('user_loged')==TRUE){ ?>
						<li class="active" style="color:#fff;">
							<a href="<?php echo base_url()?>user_controller/inbox" style="color:#fff; text-transform:uppercase; position:relative; top:2em; left:4em; font-size:14px;"><i class="glyphicon glyphicon-inbox"> </i> Inbox</a>
						</li>
						<?php } ?>
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