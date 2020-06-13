
<html>
<head>
<title></title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
  

</head>

<body>

	<?php
	include 'menu.php';
	?>
	
	<section class="m-1">
	<div class="py-1">
	<div class="">
	<div class="">

		<table class="border-radius:2px">

			<img src="images/contact.jpg" width="100%">

<div class="bg-dark"><h2 style="color: white" >Contact Us for Admission</h2> </div>
	</div>
</div>
		<div class="w-50 m-auto">
<div class="box-sizing"></div>

	<div class="fm">

		<form action="datainfor.php" method="post">
		
		<div class="form-group">
			<b>
		<label>User Name </label>
		<input type="text" name="User" placeholder="Enter User Name" class="form-control" required>
		
		<div class="form-group">
		<label>E-mail </label>
		<input type="text" name="Email" placeholder="Enter E-Mail" class="form-control" required>
		</div>
		
		<div class="form-group">
		<label>Mobile </label>
		<input type="text" name="Mobile" placeholder="Enter Mobile Number" class="form-control" required>
		</div>



		<div class="form-group">
		<label>Class </label>
		<input type="text" name="Class" placeholder="Enter Class" class="form-control" required>
		</div>


		
		<div class="form-group">
		<label>Comment </label>
		<textarea class="form-control" name="Comment">
		</textarea>
		</div>
		</b>
		<div>
		<button type="submit" class="btn-success">Submit</button>
		<a href = "display.php">View Data </a><br><br>
		
		
		</form>
		</div>
		

	</section>
	
		
		</div>
		</form>
		</div>
		
		
		
		
		
 
		
		
		
	
	<?php
	include 'footer.php';
 
	?>
	
	
	
	</body>
	</html>