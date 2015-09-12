<div class="row back">
        	<div class="col-lg-4">
        		<div class="mainform">
        			<h3>Find Your Dream</h3>
        			<div id="tab1">
        			<h5>Select Your Choice To Search For</h5>
						  <div class="input-group">
						  <span class="input-group-addon"><span class="glyphicon glyphicon-search glyphicon-lg"></span></span>
						 	<select name="" id="" class="form-control">
						 		<option value="">Please Select A Choice</option>
						 		<option value="admissions">Admissions</option>
						 		<option value="scholarships" id="">Scholarships</option>
						 		<option value="jobs" id="">Jobs</option>
						 	</select>
						</div>
					</div> 
<!-- //////////////// Start Of Jobs //////////////////////////////////////////////////////////////// -->
					<div id="jobs" style="display:none;">
	        			<div class="input-group">
						  <span class="input-group-addon"><span class="glyphicon glyphicon-search glyphicon-lg"></span></span>
						  <input type="text" class="form-control" value="jobs">
						</div>
						<br>
						<br>
						<div class="input-group pull-right">
							<input type="submit" value="Previous" id="pre2" class="btn btn-default">
							<input type="submit" value="Next" id="next2" class="btn btn-default">
						</div>
					</div>
<!-- //////////////// End Of Jobs //////////////////////////////////////////////////////////////// -->
<!-- //////////////// Start Of Scholarships //////////////////////////////////////////////////////////////// -->
					<div id="scholarships" style="display:none;">
<!-- //////////////// ******************* //////////////////////////////////////////////////////////////// -->
	        			<div style="display:none;" id="sd1">
							<dl>
							  <dt>Question:</dt>
							  <dd>Please Select A Place Where You Want To Take Addmission</dd>
							</dl>
		        			<div class="input-group">
							  <span class="input-group-addon"><span class="glyphicon glyphicon-search glyphicon-lg"></span></span>
							  <select class="form-control">
							  	<?php $this->load->view('includes/list_city');?>
							  </select>
							</div>
							<br>
							<br>
							<div class="input-group pull-right">
								<button type="button" id="snext1" class="btn btn-default"><span class="fa fa-arrow-right"></span></button>
							</div>
						</div>
<!-- //////////////// ******************* //////////////////////////////////////////////////////////////// -->
<!-- //////////////// ******************* //////////////////////////////////////////////////////////////// -->
	        			<div style="display:none;" id="sd2">
							<dl>
							  <dt>Question:</dt>
							  <dd>Please Select A Place Where You Want To Take Addmission</dd>
							</dl>
		        			<div class="input-group">
								  <span class="input-group-addon"><span class="glyphicon glyphicon-search glyphicon-lg"></span></span>
								  <input type="text" id="autocomplete" placeholder="Enter Subject" class="form-control">
							</div>
							<br>
							<br>
							<div class="input-group pull-right">
								<button type="button" id="sprev1" class="btn btn-default"><span class="fa fa-arrow-left"></span></button>
								<button type="button" id="snext2" class="btn btn-default"><span class="fa fa-arrow-right"></span></button>
							</div>
						</div>
<!-- //////////////// ******************* //////////////////////////////////////////////////////////////// -->
					</div>
<!-- //////////////// End Of Scholarships //////////////////////////////////////////////////////////////// -->
<!-- //////////////// Start Of Admissions //////////////////////////////////////////////////////////////// -->
					<div id="admissions">
						<div style="display:none;" id="id1">
							<dl>
							  <dt>Question:</dt>
							  <dd>Please Select A Place Where You Want To Take Addmission</dd>
							</dl>
		        			<div class="input-group">
							  <span class="input-group-addon"><span class="glyphicon glyphicon-search glyphicon-lg"></span></span>
							  <select class="form-control">
							  	<?php $this->load->view('includes/list_city');?>
							  </select>
							</div>
							<br>
							<br>
							<div class="input-group pull-right">
								<button type="button" id="next2" class="btn btn-default"><span class="fa fa-arrow-right"></span></button>
							</div>
						</div>
<!-- //////////////// ******************* //////////////////////////////////////////////////////////////// -->
						<div id="id2" style="display:none;">
							<dl>
							  <dt>Question:</dt>
							  <dd>Please Select Your Field(Subject) You Want To Take Admission</dd>
							</dl>
			        		 <div class="input-group">
								  <span class="input-group-addon"><span class="glyphicon glyphicon-search glyphicon-lg"></span></span>
								  <input type="text" id="autocomplete" placeholder="Enter Subject" class="form-control">
							 </div>
								<br>
								<br>
							 <div class="input-group pull-right">
								<button type="button" id="prev1" class="btn btn-default"><span class="fa fa-arrow-left"></span></button>
								<button type="button" id="next3" class="btn btn-default"><span class="fa fa-arrow-right"></span></button>
							 </div>
						</div>
<!-- //////////////// ******************* //////////////////////////////////////////////////////////////// -->
						<div id="id3" style="display:none;">
						<dl>
						  <dt>Question:</dt>
						  <dd>Please Enter Your Marks</dd>
						</dl>
		        			<div class="input-group">
							  <span class="input-group-addon"><span class="glyphicon glyphicon-search glyphicon-lg"></span></span>
							  <input type="text" placeholder="Marks" class="form-control">
							</div>
							<br>
							<br>
							<div class="input-group pull-right">
								<button type="button" id="prev2" class="btn btn-default"><span class="fa fa-arrow-left"></span></button>
								<button type="button" id="next4" class="btn btn-default"><span class="fa fa-arrow-right"></span></button>
							 </div>
						</div>
<!-- //////////////// ******************* //////////////////////////////////////////////////////////////// -->
<!-- //////////////// End Of Admissions //////////////////////////////////////////////////////////////// -->		
				</div>
<!-- //////////////// //////////////////// //////////////////////////////////////////////////////////////// -->
        		</div>
        	</div>