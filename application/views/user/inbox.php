<div class="container">
	<div class="row">
		<div class="col-lg-3">
		<br>
			<div class="list-group">
			<a href="<?php echo base_url()?>adjos" class="list-group-item"><span class="fa fa-home fa-lg"> </span> &nbsp;HOME</a>
			<a href="#" class="list-group-item"><span class="fa fa-inbox fa-lg"> </span> &nbsp;INBOX</a>
			<a href="#" class="list-group-item"><span class="fa fa-user fa-lg"> </span> &nbsp;PROFILE</a>
			<a href="#" class="list-group-item"><span class="fa fa-power-off fa-lg"> </span> &nbsp;LOGOUT</a>
			</div>
		</div>
		<div class="col-lg-9">
		<br>
			<div class="list-group">
				<?php 
				if(!empty($search))
				{
				foreach ($search as $row) {?>
				<div class="list-group-item">
					<p>Search Date: &nbsp;<?php echo $row->date;?></p>
					<p>Searched About: &nbsp;<?php echo 'Latest '.$row->about.' in '.$row->subject.' in '.$row->city;?>.</p>
					<p class="btn-group">
					<a href="<?php echo base_url();?>adjos/<?php 
						if ($row->about=='Admissions') {
							echo "addmissions/".$row->ques_id;
						}
						else
						{
							echo $row->about."/".$row->ques_id;
						}
					?>"><button class="btn"><span class="fa fa-search fa-lg"> </span> Search Again</button></a>
					<a href="<?php echo base_url();?>user_controller/s_del/<?php echo $row->ques_id;?>"><button class="btn"><span class="fa fa-trash fa-lg"> </span> Delete Record</button></a>
					</p>
				</div>
				<?php } }
				else {
					echo 'No Record Found';
				}	
				?>
			</div>
		</div>
	</div>
</div>
 