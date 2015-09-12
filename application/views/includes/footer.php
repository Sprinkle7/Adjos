
			<div class="footer">
	    	<div class="container">
		    	<div class="col-lg-offset-1 col-lg-10">
		    		<!-- <div class="col-footer col-md-4 col-xs-12 sitemap">
		    			<h3>Site map</h3>
		    			<ul class="no-list-style footer-navigate-section">
		    				<li><a href="#"><span class="fa fa-angle-right fa-sm"> </span>&nbsp; About</a></li>
		    				<li><a href="#"><span class="fa fa-angle-right fa-sm"> </span>&nbsp; Projects</a></li>
		    				<li><a href="#"><span class="fa fa-angle-right fa-sm"> </span>&nbsp; Society</a></li>
		    			</ul>
		    		</div>
		    		<div class="col-footer col-md-4 col-xs-12 community">
		    			<h3>Community</h3>
		    			<ul class="no-list-style footer-navigate-section">
		    				<li><a href="#"><span class="fa fa-angle-right fa-sm"> </span>&nbsp; Blog</a></li>
		    				<li><a href="#"><span class="fa fa-angle-right fa-sm"> </span>&nbsp; Forum</a></li>
		    				<li><a href="#"><span class="fa fa-angle-right fa-sm"> </span>&nbsp; Support</a></li>
		    				<li><a href="#"><span class="fa fa-angle-right fa-sm"> </span>&nbsp; News Letter</a></li>
		    			</ul>
		    		</div> -->
		    	<div class="col-lg-4">
		    		
		    	</div>
		    
		    </div>
	    </div>	
	    </div>
		    	<div class="section footer_right">
				    <div class="col-md-12" style="line-height:0;">
				    	<div class="footer-copyright col-xs-8">&copy; 2014 Finder. All rights reserved.</div>
					    <div class="col-xs-4">
					   		<ul class="down" >
				    			<li><a href=""><span class="fa fa-google-plus-square fa-2x"></span></a></li>
				    			<li><a href=""><span class="fa fa-facebook-square fa-2x"></span></a></li>
				    			<li><a href=""><span class="fa fa-twitter-square fa-2x"></span></a></li>
			    			</ul>
					    </div>	
				    	</div>
				 </div>
        <!-- Javascripts -->
        <script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/js/window.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.fitvids.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.sequence-min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.bxslider.js"></script>
        <script src="<?php echo base_url();?>assets/js/main-menu.js"></script>
        <script src="<?php echo base_url();?>assets/js/template.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/jquery-ui.js"></script>
        <script src="<?php echo base_url();?>assets/js/search_jquery.js"></script>
		<script type="text/javascript">	
			
			var type = [
				"Intermediate",
				"FSc-Med",
				"FSc-Eng",
				"FCS",
				"Bachelor",
				"MS",
				"MPHIL",
				"PHD",
			];
			$("#add_type").autocomplete({
			    source: type,
			    messages: {
			        noResults: '',
			        results: function() {}
			    }
			});
			var city = [
				<?php foreach ($city as $key) {
					echo '"'.trim($key->city).'",';
				}?>
			];
			$("#city").autocomplete({
			    source: city,
			    messages: {
			        noResults: '',
			        results: function() {}
			    }
			});
			$("#city1").autocomplete({
			    source: city,
			    messages: {
			        noResults: '',
			        results: function() {}
			    }
			});

			var subjects = [
			<?php
			$file_string = file_get_contents('http://localhost/web/subjects.php');
			$data = strip_tags($file_string);
			$exploded = explode(',', $data);
			foreach ($exploded as $key){
				echo '"'.trim($key).'",';
			}
			?>
			];
			$("#subject").autocomplete({
			    source: subjects,
			    messages: {
			        noResults: '',
			        results: function() {}
			    }
			});
			var jobtitle = [
			<?php
			$file_string = file_get_contents('http://localhost/web/job_title.php');
			$data = strip_tags($file_string);
			$exploded = explode(',', $data);
			foreach ($exploded as $key){
				echo '"'.trim($key).'",';
			}
			?>
			];
			$("#job").autocomplete({
			    source: jobtitle,
			    messages: {
			        noResults: '',
			        results: function() {}
			    }
			});
		</script>

    </body>
</html>