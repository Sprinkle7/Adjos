<form action="<?php echo base_url()?>adjos/jobs" method="get">
					<div id="jobs">
        			<div class="col-lg-12">
						<div style="display:none;" id="j1">
							<dl>
							  <dt>Question:</dt>
							  <dd>Please Mention Job Type</dd>
							</dl>
		        			<div class="input-group">
							  <span class="input-group-addon color-btn"><span class="glyphicon glyphicon-search glyphicon-lg"></span></span>
								  <input type="text" autocomplete="off" name="type" id="job" placeholder="Enter Job Type" class="form-control">
							</div>
							<br>
							<br>
							<div class="input-group pull-right">
								<button type="button" id="reset" class="btn btn-success"><span class="fa fa-arrow-left"></span> Previous</button>&nbsp;&nbsp;&nbsp;
								<button type="button" id="jnext1" class="btn btn-primary"><span class="fa fa-arrow-right"></span> Next</button>
							</div>
						</div>
						</div>
<!-- //////////////// ******************* //////////////////////////////////////////////////////////////// -->
        			    <div class="col-lg-12">
						<div id="j2" style="display:none;">
						<dl>
						  <dt>Question:</dt>
						  <dd>Please Mention City Name</dd>
						</dl>
		        			<div class="input-group">
							  <span class="input-group-addon color-btn"><span class="glyphicon glyphicon-search glyphicon-lg"></span></span>
							  <input type="text" placeholder="City Name" name="city" id="city" class="form-control">
							</div>
							<br>
							<br>
							<div class="input-group pull-right">
								<button type="button" id="jprev1" class="btn btn-success"><span class="fa fa-arrow-left"></span> Previous</button>&nbsp;&nbsp;&nbsp;
								<button type="submit" id="jnext2" class="btn btn-primary"><span class="fa fa-arrow-right"></span> Next</button>
							 </div>
						</div>
						</div>
						</div>
<!-- //////////////// ******************* //////////////////////////////////////////////////////////////// -->
					</form>