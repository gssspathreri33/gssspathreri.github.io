
 <?php

	include 'menu.php';
	 
	?>


		<?php
		error_reporting(0);
		include('database.php');
	 


		$q="select * from userinfo";
		$query=mysqli_query($conn,$q);
		?>


		<!DOCTYPE html>
		<html>
		<head>
			<title></title>

		<style>


			th,td
			{
				color:black;
			}
			
				</style>
				</head>


		<body>
<img src="images/contact1.jpg" width="100%">
		<center>
		
			<div style="background:red">
				<th><h1 style="color: yellow">Record Found</th></h1>
			 </div>
		<table border="1" width="82%" height="50%">
			
		<tr>	
		<th>id1</th>
		<th>User</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Class</th>
		<th>Comment</th>
		</tr>

		<?php

		while ($row=mysqli_fetch_assoc($query)) 
		{

		?>

		<tr>
			<td><?php echo $row['id1'];?></td>
			<td><?php echo $row['User'];?></td>
			<td><?php echo $row['Email'];?></td>
			<td><?php echo $row['Mobile'];?></td>
			<td><?php echo $row['Class'];?></td>
			<td><?php echo $row['Comment'];?></td>

		</tr>


		<?php	 
		}

		?>

		 
		</table>
		</center>



		<?php
	include 'footer.php';
 
	?>
	
	
	
	 
		</body>
		</html>