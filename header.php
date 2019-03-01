<!DOCTYPE html>
<html>
<head> 
    <title> ADMIN Online Notice Board</title>
	<link rel="icon"  href="design/uulogo.jpg"  />
	<meta http-equiv ="Content-Type" content="text/html; charset=utf-8  " />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	<link href='https://fonts.googleapis.com/css?family='Adamina' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="php/table.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/dataTables.min.js"></script>

</head>

	<style type="text/css">
	body{
		font-size: 16px;
		font-family: Adamina;
		background-color: #e6f5ff;
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
	
	</style>
<body>
	<section class="container">
	<header  class="header" >
		<img src="design/logo.png " height="150" width="120" alt="UU LOGO" class="logo">	  
		<h1> ONLINE NOTICE BOARD </h1>
		<div class="logotext-float">
	<p>U<small>TTARA</small> U<small>NIVERSITY</small><br/><em>Quality Education At Affordable Tution</em></p>
		</div>
		<div class="clear"></div>
	</header>
</section>

	<div class="container">
			<nav class="my-nav navbar navbar-default ">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
		<div class="collapse navbar-collapse" >
			<ul class="nav navbar-nav">
				<li><a href="adminhome.php">HOME</a></li>

				<li><a href="uploadclassroutine.php">CLASS ROUTINE</a></li>
				<li><a href="uploadexamroutine.php">EXAM ROUTINE</a></li>
				<li><a href="uploadclubinfo.php">CLUB INFO</a></li>
				<li><a href="uploadjobinfo.php">JOB INFO</a></li>
				<li><a href="uploadseminerinfo.php">SEMINER INFO</a></li>

				<li><a href="faculty.php">FACULTY</a></li>
				
				<li><a href="speech.php">SPEECH</a></li>
				<li><a href="speech2.php">SPEECH2</a></li>

				<li><a href="marquee.php">MARQUEE</a></li>
				<li><a href="contact.php">CONTACT</a></li>
				<li><a href="mail.php">SEND MAIL</a></li>

				<button class="btn btn-primary navbar-btn"><a href="adminhome.php?logout='1'" style="text-decoration:none;color:white; ">Logout</a></button>
			</ul>
		</div>
	</nav>
</div>
		</body>
		</html>