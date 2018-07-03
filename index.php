<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>PHP TEST</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<h1 class="text-center">Contact Form</h1>
<div class="container">
   <div class="row">
      <div class="col-md-5 col-md-offset-3 well">
	      <form action="contact page.php" method="post" class="form-group">
		     <label for="name">Your Name</label>
			 <input type="text" id="name" class="form-control" name="name" placeholder="Input Your Name" />
			 
			 <label for="email">Your Email</label>
			 <input type="email" id="email" class="form-control" name="email" placeholder="Input Your Email" />
			 
			 <label for="pass">Your Password</label>
			 <input type="password" id="pass" class="form-control" name="pass" placeholder="Input Your Password" /><br />
			 
			 <input type="submit" value="Sent" class="btn btn-info" />

		  </form>
	  </div>
   </div>
</div>

<?php

$x=array("1","2","3");

echo "$x[0]";

?>

</body>
</html>