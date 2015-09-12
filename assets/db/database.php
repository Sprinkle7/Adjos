<?php
	
	error_reporting(0);
	$server	=	mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('finder',$server) or die(mysql_error());
	
?>