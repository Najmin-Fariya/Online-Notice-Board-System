<?php include 'register.php';?>
<!DOCTYPE html>
<html>
<head> 
    <title> Online Notice Board</title>
	<link rel="icon"  href="images/uulogo.jpg"  />
	<meta http-equiv ="Content-Type" content="text/html; charset=utf-8  " />
	   <meta name="viewport" content="width=device-width, initial-scale=1">
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
        <link href='https://fonts.googleapis.com/css?family='Adamina' rel='stylesheet'>
	   <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
</head>
 <style>
	.header{
		background-color:#0066cc;
		font-family:Adamina;
		color:white;
		position:relative;
		width:100%;
		margin-top:-20px;
	 }
	 h1{
		font-size:35px;
		text-align:center;
	}
	.logo{
		float:left;
		margin:2px 10px 0px 2px;
	}
	 .logotext-float{
		font-size:25px;
		font-family: 'Open Sans Condensed', sans-serif;
	}
	.logotext-float span{
		font-size:20px;
		
	}
	.clear{
		clear:left;
	}
	h2{
		margin-top:0px;
		margin-bottom:0px;
		padding:5px 0px 8px 0px;
		font-family:Adamina;
		text-align:center;
		background-color:#00e673;
		color:#000066;
	}
	</style>
	
<body>
	<header class="header" >
			<img src="design/logo.png " height="200" width="170" alt="UU LOGO" class="logo">	  
			<h1> ONLINE NOTICE BOARD ADMIN</h1>
			<div class="logotext-float">
			<p>U<span>TTARA</span> U<span>NIVERSITY<span><br/><em>Quality Education At Affordable Tution</em></p>
			</div>
			<div class="clear"></div>
	</header>
	
	<h2><b><em>Login</em></b></h2>

	<section>
		<form action="login.php" method="post">	
		
		<?php include('errors.php');?>
		  <div class="container">
			<div class="form-group">
				<label><b>Username:</b></label>
				<input type="text" placeholder="Username" name="username" class="form-control" />
			</div>
			<div class="form-group">
				<label><b>Password:</b></label>
				<input type="password" placeholder="*********" name="password" class="form-control"/></br>
			</div>
				<button type="submit" name="login" class="btn btn-success">Login</button>
				<button type="button" class="btn btn-danger" ><a href="login.php">Cancel</a></button></br>
				<p> Not Yet a Member?  <a href="userregister.php">Sign up</a></p>
		  </div>
		</form>
	</section>
	</body>
</html>