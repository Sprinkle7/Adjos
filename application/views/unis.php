<div class="section" style="background:#f8f8f8">
	<div class="container">
		<div class="list-group">
			<?php 
			$counter=0;
			foreach ($city as $row) 
			{?>			
			<div class="list-group-item col-lg-2">
				<a href="<?php echo base_url()?>adjos/col_unis/<?php echo $row->city;?>"><?php echo $row->city;?></a>
			</div>
			<?php }?>
		</div>
	</div>
</div>
		
 