 
<?php
		
		include('database.php');		
		if(isset($_POST))
		{
			$User = $_POST['User'];
			$Email = $_POST['Email'];
			$Mobile = $_POST['Mobile'];
			$Class = $_POST['Class'];
			$Comment = $_POST['Comment'];
			
			$query = "insert into userinfo(User,Email,Mobile,Class,Comment)
			values('$User','$Email','$Mobile','$Class','$Comment')";
			mysqli_query($conn,$query);
			header('location:display.php');
		}
	 
	
		?>


 