




<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">


  
<style>
body {
  background-color:white;
  font-family:times new roman;
}

.glow {
  font-size: 25px;
  color: yellow;
  text-align: center;
  
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}

.p2
{
  color: yellow;
}

</style>

  <title>
    
  </title>
  </head>
  <body>
 
    

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
<span class="glow"> National Skills Qualification FrameWork </span>


  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


<?php
$d=date("d-m-Y");

  
echo "<h5> <font color=white size='4pt'>  &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp Today is " .$d."</h5></font>";

?>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">

      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="services.php">Our Streams</a>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link" href="about.php">About us</a>
      </li>
	  
	        <li class="nav-item">
        <a class="nav-link" href="contact.php">Admission Enquiry</a>
      </li>
	        
          <li class="nav-item">
        <a class="nav-link" href="galary.php">Photo Galary</a>
      </li>
          
      
      
    </ul>
    
      
    
	</div>
	</nav>
  </body>
  </html>

  