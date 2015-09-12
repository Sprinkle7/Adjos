	<form action="<?php echo base_url()?>adjos/scholarships" method="get">
					<div id="scholarships" style="display:none;">
<!-- //////////////// ******************* //////////////////////////////////////////////////////////////// -->
        			<div class="col-lg-12">
	        			<div style="display:none;" id="sd1">
							<dl>
							  <dt>Question:</dt>
							  <dd>Please Mention Scholorships Type.(i.e BS)</dd>
							</dl>
		        			<div class="input-group">
							  <span class="input-group-addon color-btn"><span class="glyphicon glyphicon-search glyphicon-lg"></span></span>
							  <select class="form-control" name="type">
							  	<option>Select Type</option>
							  		<option value="BS">BS</option>
							  		<option value="Diploma">Diploma</option>
							  		<option value="MS">MS</option>
							  		<option value="PHD">PHD</option>
							  </select>
							</div>
							<br>
							<br>
							<div class="input-group pull-right">
								<button type="button" id="reset" class="btn btn-default"><span class="fa fa-arrow-left"></span> Previous</button>&nbsp;&nbsp;&nbsp;
								<button type="button" id="snext1" class="btn btn-primary"><span class="fa fa-arrow-right"></span> Next</button>
							</div>
						</div>
						</div>
<!-- //////////////// ******************* //////////////////////////////////////////////////////////////// -->
        			<div class="col-lg-12">
	        			<div style="display:none;" id="sd2">
							<dl>
							  <dt>Question:</dt>
							  <dd>Please Mention Country.</dd>
							</dl>
		        			<div class="input-group">
								  <span class="input-group-addon color-btn"><span class="glyphicon glyphicon-search glyphicon-lg"></span></span>
								  <input type="text" placeholder="Country" name="country" class="form-control">
							</div>
							<br>
							<br>
							<div class="input-group pull-right">
								<button type="button" id="sprev1" class="btn btn-success"><span class="fa fa-arrow-left"></span> Previous</button>&nbsp;&nbsp;&nbsp;
								<button type="button" id="snext2" class="btn btn-primary"><span class="fa fa-arrow-right"></span> Next</button>
							</div>
						</div>
						</div>
					<div class="col-lg-12">
	        			<div style="display:none;" id="sd3">
							<dl>
							  <dt>Question:</dt>
							  <dd>Please Mention Subject.(i.e BS(SE))</dd>
							</dl>
		        			<div class="input-group">
								  <span class="input-group-addon color-btn"><span class="glyphicon glyphicon-search glyphicon-lg"></span></span>
								  <input type="text" placeholder="Subject" name="subject" class="form-control">
							</div>
							<br>
							<br>
							<div class="input-group pull-right">
								<button type="button" id="sprev2" class="btn btn-success"><span class="fa fa-arrow-left"></span> Previous</button>&nbsp;&nbsp;&nbsp;
								<button type="submit" id="snext3" class="btn btn-primary"><span class="fa fa-arrow-right"></span> Next</button>
							</div>
						</div>
						</div>
<!-- //////////////// ******************* //////////////////////////////////////////////////////////////// -->
					</div>
<!-- //////////////// End Of Scholarships //////////////////////////////////////////////////////////////// -->
					</form>	