<?php
	if(isset($_GET['Action']) && $_GET['Action']!='')
	{
		$view_msg	=	$_GET['Action'];
		$decode_msg	=	base64_decode($view_msg);

		if($decode_msg=='1')
		{	
			$msg 	 =	"Insertion Successful";
			echo $success =	'<div class="alert alert-success">
                         <button class="close" data-dismiss="alert"></button>
                         '.$msg.'
                         </div>';
		}
		elseif ($decode_msg=='2') {
			$msg	=	"Insertion Failed";
			echo $failed =	'<div class="alert alert-error">
                         <button class="close" data-dismiss="alert"></button>
                         '.$msg.'
                         </div>';
		}
		elseif ($decode_msg=='3') {
			$msg 	 =	 "Deleted Succesfully";
			echo $warning =	 '<div class="alert alert-succes">
                          <button class="close" data-dismiss="alert"></button>
                          '.$msg.'
                          </div>';
		}
		elseif ($decode_msg=='4') {
			$msg 	 =	 "Deletion Failed. Error Exists";
			echo $warning =	 '<div class="alert alert-error">
                          <button class="close" data-dismiss="alert"></button>
                          '.$msg.'
                          </div>';
		}
		elseif ($decode_msg=='101') {
			$msg 	 =	 "Please Fill The Field";
			echo $warning =	 '<div class="alert alert-warning">
                          <button class="close" data-dismiss="alert"></button>
                          '.$msg.'
                          </div>';
		}
	}

?>
 							
                            
                            