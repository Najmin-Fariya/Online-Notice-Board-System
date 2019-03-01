<?php include'adminlogin.php';?>
<!DOCTYPE html>
<html>
<head> 
    <title> Online Notice Board</title>
	<link rel="icon"  href="uulogo.jpg"  />
	<meta http-equiv ="Content-Type" content="text/html; charset=utf-8  " />
   	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
   	<link href='https://fonts.googleapis.com/css?family='Adamina' rel='stylesheet'>
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
</head>
 <style>
	body{

		font-family: Adamina;
		background-color: #ffffe6;
	}	
	h2{
		text-align:center;
		font-weight:bold;
		font-style: underline;
		color: #000066;
	}
	.form-group{
		font-weight:bold;
	}
	.container{
		
		padding:25px;
		font-size:20px;
		background: linear-gradient(to top, #ccffcc 17%, #00cc00 100%)
	}
	</style>
	
<body>
	
	<h2><b><em>Admin Login</em></b></h2>

	<section >
		<form action="" method="post">	
		
		<?php include('errors.php');?>

		  <div class="container" style="font-size: 25px;max-width: 650px;">
			<div class="form-group">
				<label><b>Username:</b></label>
				<input type="text" placeholder="Your username" name="username" class="form-control  input-lg" >
			</div>
			<div class="form-group">
				<label><b>Password:</b></label>
				<input type="password" placeholder="*********" name="password" class="form-control input-lg">
			</div>
				<button type="submit" name="login" class="btn btn-primary">Login</button>
				<button class="btn btn-danger">Cancel</button>
		  </div>
		</form>
	</section>
	
	</body>
</html>