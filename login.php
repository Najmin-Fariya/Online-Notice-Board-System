<?php include'session.php';?>
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
	.leftside-nav{
		border-top:1px solid #000066;
		width:250px;
		height:230px;
		background-color:#00e673;
		float:left;
	}
	.leftside-nav a{
		 color:#000066;
	}
	 ul li{
		 border-bottom:1px solid #000066; 
		 list-style-type:none;
		 padding:10px;
		 text-decoration:none;
		
	}
	ul li:hover{
		background:white;
		transition:linear all .40s;
		margin-left:10px;
		text-decoration:none;
	}
	ul li a:hover{
		color:#000066;
		text-decoration:none;
	}
	h3{
		text-align:center;
	}
	.form{
		margin-left:300px;
		border:2px solid green;
		height:500px;
		width:1000px;
	}
	.container {
    padding: 16px;
}
.cancelbtn {
	margin-top:-50px;
    background-color: #f44336;
			font-family:Adamina;

}
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    cursor: pointer;
	font-family:Adamina;
	}
#login{
	text-align:center;
	font-family:Adamina;
	font-size:35px;
	font-style:italic;
	}
input[type=text], input[type=password] {
	font-family:Adamina;
    width: 500px;
	height:30px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

</style>
<body>
	<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
	<header class="header" >
	       <img src="logo.png " height="200" width="170" alt="UU LOGO" class="logo">	  
			<h1> ONLINE NOTICE BOARD ADMIN</h1>
			
			<div class="logotext-float">
			<p>U<span>TTARA</span> U<span>NIVERSITY<span><br/><em>Quality Education At Affordable Tution</em></p>
			
			</div>
			<div class="clear"></div>
	</header>
	<h2><b><em>Login</em></b></h2>
		
	<div class="leftside-nav">
		<ul type=none>
			<li style="padding-top:20px;"><a href="userresister.php"> CLASS ROUTINE</a></li>
			<li><a href="clsrtnlogin.php"> EXAM ROUTINE</a></li>
			<li><a href="clsrtnlogin.php"> SEMINER</a></li>
			<li><a href="clsrtnlogin.php"> JOB INFO.</a></li>
			<li><a href="clsrtnlogin.php"> CLUB</a></li>
		</ul>
	</div>	
   <h3 style="padding-right:5px;color:green;"> You May Resistration With Different Categories To Get Notification</h3>
	
	
	<section class="form">
		<form action="login.php" method="post">
		<div id="login"> <p> Login</p></div>
		  <div class="container">
			<label><b>Username:</b></label>
				<input type="text" placeholder="Username" name="username" ></br>
					<label><b>Password:</b></label>
						<input type="password" placeholder="*********" name="password" ></br>
					<button type="submit" name="login">Login</button>
					<button type="button" class="cancelbtn" ><a href="login.php">Cancel</a></button>
			   <p> Not Yet? <a href="userresister.php">Sign up</a></p>
		  </div>
		</form>
	</section>
</body>
</html>