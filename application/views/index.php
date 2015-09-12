        <div class="section back">
        <div class="container ">
        		<div class="col-lg-4">
        		<div class="mainform">
        			<div class="col-lg-12">
        			<h3 style="font-weight:normal;">Find Your Dream</h3>
        			<div id="tab1">
        			<h5>Select Your Choice To Search For</h5>
						  <div class="input-group">
						  <span class="input-group-addon color-btn"><span class="glyphicon glyphicon-search glyphicon-lg"></span></span>
						 	<select name="" id="" class="form-control">
						 		<option value="">Please Select A Choice</option>
						 		<option value="admissions">Admissions</option>
						 		<option value="scholarships">Scholarships</option>
						 		<option value="jobs" id="">Jobs</option>
						 	</select>
 						</div>
						<div class="input-group pull-right" style="margin-top:3em;">
						</div>
					</div> 
        			</div>
				<?php $this->load->view('includes/jobs');?>
				<?php $this->load->view('includes/scholorships');?>
				<?php $this->load->view('includes/admissions');?>
				</div>
        		</div>

        	</div>
        <!-- End Of Search For -->
        <div class="col-lg-8">
        <div class="homepage-slider" >
        	<div id="sequence">
				<ul class="sequence-canvas">
					<!-- Slide 1 -->
					<li class="bg1">
						<!-- Slide Title -->
						<h2 class="title"  style="font-weight:normal;">Scholorships</h2>
						<!-- Slide Text -->
						<h3 class="subtitle"  style="font-weight:normal;">Search Scholarships through entire world to make your career</h3>
						<!-- Slide Image -->
						<img class="slide-img" src="<?php echo base_url()?>assets/img/mine/22.png" alt="Slide 3" />
					</li>
					<!-- End Slide 1 -->
					<!-- Slide 2 -->
					<li class="bg3">
						<!-- Slide Title -->
						<h2 class="title" style="font-weight:normal;">Colleges & University</h2>
						<!-- Slide Text -->
						<h3 class="subtitle" style="font-weight:normal;">Find out a beautiful college or university for your future!</h3>
						<!-- Slide Image -->
						<img class="slide-img" src="<?php echo base_url()?>assets/img/mine/11.png" alt="Slide 2" />
					</li>
					<!-- End Slide 2 -->
					<!-- Slide 3 -->
					<li class="bg4">
						<!-- Slide Title -->
						<h2 class="title" style="font-weight:normal;">Jobs</h2>
						<!-- Slide Text -->
						<h3 class="subtitle" style="font-weight:normal;">With Finder it's eazy to find your dream job where ever you want!</h3>
						<!-- Slide Image -->
						<img class="slide-img" src="<?php echo base_url()?>assets/img/mine/jobs.png" alt="Slide 1" />
					</li>
					<!-- End Slide 3 -->
				</ul>
				<div class="sequence-pagination-wrapper">
					<ul class="sequence-pagination">
						<li>1</li>
						<li>2</li>
						<li>3</li>
					</ul>
				</div>
			</div>
        </div>
        </div>
        </div>
        </div>
        <!-- End Homepage Slider -->

	    
		<!-- Call to Action Bar -->
	  
		<!-- End Call to Action Bar -->
        <div class="section">
	        <div class="container">
	        	<div class="row">
	        		<div class="col-xs-12 col-md-6 col-lg-3">
	        		  <div class="service-wrapper">
						<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="#"><img src="<?php echo base_url()?>assets/img/mine/education.jpg" alt="Service 1"></a>
							</div>
						</div> 
						<h3>Admissions</h3>
			    		<p>
						Find all admissions in Pakistan Universities, Colleges, Schools and Institutes in leading Pakistani Urdu and English newspaper Express..</p>
			    		<p style="text-align:center;"><a href="<?php echo base_url()?>adjos/page_1" class="btn btn-default">Readmore &raquo;</a></p>
		        	  </div>
	        		</div>
	        		<div class="col-xs-12 col-md-6 col-lg-3 col-sm-12">
	        		 <div class="service-wrapper">
						<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="#"><img src="<?php echo base_url()?>assets/img/mine/jobs.jpg" alt="Service 1"></a>
							</div>
						</div>
						<h3>Jobs</h3>
			    		<p>
						Find all jobs in Pakistan and apply for all latest jobs in Pakistan. Join Pakistan career portal and get your dream job ...
			    		</p>
			    		<p style="text-align:center;"><a href="<?php echo base_url()?>adjos/page_2" class="btn btn-default">Readmore &raquo;</a></p>
		        	  </div>
	        		</div>
	        		<div class="clearfix visible-md"></div>
	        		<div class="col-xs-12 col-md-6 col-lg-3">
	        		  <div class="service-wrapper">
						<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="#"><img src="<?php echo base_url()?>assets/img/mine/scholar.jpg" alt="Service 1"></a>
							</div>
						</div>
						<h3>Scholarships</h3>
			    		<p>Scholarships are awarded based upon various criteria, which usually reflect the values and purposes of the donor or founder of the award.</p>
			    		<p style="text-align:center;"><a href="<?php echo base_url()?>adjos/page_3" class="btn btn-default">Readmore &raquo;</a></p>
		        	  </div>
	        		</div>
	        		<div class="col-xs-12 col-md-6 col-lg-3">
	        		  <div class="service-wrapper">
						<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="#"><img src="<?php echo base_url()?>assets/img/mine/agri.jpg" alt="Service 1"></a>
							</div>
						</div>
						<h3>Colleges And Universities</h3>
			    		<p>
						Top Colleges and Universities in Pakistan by the 2014 4icu.org University Web Ranking.Lahore. 3 University of the Punjab ...
			    		</p>
			    		<p style="text-align:center;"><a href="<?php echo base_url()?>adjos/page_4" class="btn btn-default">Readmore &raquo;</a></p>
		        	  </div>
	        		</div>
	        	</div>
	        </div>
	    </div>
	     
	    <!-- End Services -->
		<!-- Footer Above -->
		<?php $this->load->view('includes/windows_type.php');?>
	    <!-- Footer -->
		
 