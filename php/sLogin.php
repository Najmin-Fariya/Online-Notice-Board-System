
<?php include 'sRegisterprocess.php';?>

<!DOCTYPE html>
<html>
<head> 
    <title> Online Notice Board</title>
	<link rel="icon"  href="design/uulogo.jpg"  />
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
 	background-color: #cce6ff;
 }
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
		font-size:28px;
		font-family: 'Open Sans Condensed', sans-serif;

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
	.container {
		background-color: #99e699;
		max-width: 700px;
		margin-top:7px;
    padding: 16px;
	font-size:18px;
	border-left:5px solid #33cc33;
    }

	</style>
	<script type="text/javascript">
		
	function myFunction() {
    var txt;
    if (confirm("Are you sure to cancel it??Then go back to home page!")) {
        txt = "CANCEL";
    }
    document.getElementById("cancel").innerHTML = txt;
}

	</script>
	
<body>

	
	<header class="header" >
		<img src="design/logo.png " height="150" width="120" alt="UU LOGO" class="logo">	  
		<h1> ONLINE NOTICE BOARD </h1>
		<div class="logotext-float">
	<p>U<small>TTARA</small> U<small>NIVERSITY</small><br/><em>Quality Education At Affordable Tution</em></p>
		</div>
		<div class="clear"></div>
	</header>
	
	<h2><b><em>Login</em></b></h2>

	<div class="container">
		<br>

		<button type="button" class="btn btn-primary btn-lg btn-block"><a href="index.php" style="color: white;text-decoration: none;"><< Back To Home Page...</a></button>
		<br>

	</div>
	<section>
		<form action="sLogin.php" method="post">	
		
		<?php include('errors.php');?>

		  <div class="container">
			<div class="form-group">
				<label><b>Username:</b></label>
				<input type="text" placeholder="Username" name="username" class="form-control input-lg" >
			</div>
			<div class="form-group">
				<label><b>Password:</b></label>
				<input type="password" placeholder="*********" name="password" class="form-control input-lg">
			</div>
				<button type="submit" name="login" class="btn btn-success">LOGIN</button>
				<button class="btn btn-danger" >CANCEL</button>

		<p>Not Yet A Member?<a href="studentRegister.php" style="text-decoration: none;">Sign Up</a></p>
		  </div>
		</form>
	</section>
<br><br>
	<?php include'footer.php';?>
	</body>
</html>