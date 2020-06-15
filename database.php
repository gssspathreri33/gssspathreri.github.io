<?php
	// creaed database connection
	$conn = mysqli_connect('localhost','root');

	if($conn)
	{
		echo "";
	}
	else
	{
		echo "not connection";
	}		

	mysqli_select_db($conn,'myweb');
?>