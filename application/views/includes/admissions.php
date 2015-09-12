<form action="<?php echo base_url()?>adjos/addmissions" method="get">
					<div id="admissions">
        			<div class="col-lg-12">
						<div style="display:none;" id="id1">
							<dl>
							  <dt>Question:</dt>
							  <dd>Please Select A Place Where You Want To Take Addmission</dd>
							</dl>
		        			<div class="input-group">
							  <span class="input-group-addon color-btn"><span class="glyphicon glyphicon-search glyphicon-lg"></span></span>
								  <input type="text" autocomplete="off" name="khar" id="city1" placeholder="Enter City Name" class="form-control">
							</div>
							<br>
							<br>
							<div class="input-group pull-right">
								<button type="button" id="reset" class="btn btn-success"><span class="fa fa-arrow-left"></span> Previous</button>&nbsp;&nbsp;&nbsp;
								<button type="button" id="next1" class="btn btn-primary"><span class="fa fa-arrow-right"></span> Next</button>
							</div>
						</div>
						</div>
<!-- //////////////// ******************* //////////////////////////////////////////////////////////////// -->
        			    <div class="col-lg-12">
						<div id="id2" style="display:none;">
						<dl>
						  <dt>Question:</dt>
						  <dd>Please Mention Colleges Or Universities?</dd>
						</dl>
		        			<div class="input-group">
							  <span class="input-group-addon color-btn"><span class="glyphicon glyphicon-search glyphicon-lg"></span></span>
								  <input type="text" autocomplete="off" name="col_unis" id="add_type" placeholder="Enter Study Level" class="form-control">
							</div>
							<br>
							<br>
							<div class="input-group pull-right">
								<button type="button" id="prev1" class="btn btn-success"><span class="fa fa-arrow-left"></span> Previous</button>&nbsp;&nbsp;&nbsp;
								<button type="button" id="next2" class="btn btn-primary"><span class="fa fa-arrow-right"></span> Next</button>
							 </div>
						</div>
						</div>
<!-- //////////////// ******************* //////////////////////////////////////////////////////////////// -->

        			<div class="col-lg-12">
						<div id="id3" style="display:none;">
							<dl>
							  <dt>Question:</dt>
							  <dd>Please Select Your Field(Subject) In Which You Want To Take Admission</dd>
							</dl>
			        		 <div class="input-group">
								  <span class="input-group-addon color-btn"><span class="glyphicon glyphicon-search glyphicon-lg"></span></span>
								  <input type="text" autocomplete="off" name="subject" id="subject" placeholder="Enter Subject" class="form-control">
							 </div>
								<br>
								<br>
							 <div class="input-group pull-right">
								<button type="button" id="prev2" class="btn btn-success"><span class="fa fa-arrow-left"></span> Previous</button>&nbsp;&nbsp;&nbsp;
								<button type="submit" id="next3" class="btn btn-primary"><span class="fa fa-arrow-right"></span> Next</button>
							 </div>
						</div>
						</div>
<!-- //////////////// ******************* //////////////////////////////////////////////////////////////// -->
					</form>