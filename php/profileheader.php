<?php include'sRegisterprocess.php';?>
<!DOCTYPE html>
<html>
<head> 
	<title> Online Notice Board</title>
	<link rel="icon" href="design/uulogo.jpg"  />
	<meta http-equiv ="Content-Type" content="text/html; charset=utf-8  " />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

   	<script src="/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	<link href='https://fonts.googleapis.com/css?family='Adamina' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="table.css">
   <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/dataTables.min.js"></script>
	<script type="text/javascript">
			
	</script>

</head>
    <style>
    body{
    	background-color:#cce0ff ;
    }
	.logo{
		float:right;
	}
	img{
		
		height:150px;
		width:130px; 
	}
	h1{
		font-size: 28px;
		text-align: right;
		font-family:Adamina;
	}
	header{
		background-color:#0066cc;
		color:white;
		margin-top: -20px;
	}
	p{

		text-align: right;
		font-size: 23px;
		font-family: 'Open Sans Condensed', sans-serif;
	}
	.leftside-nav{
		margin-top: -18px;
		margin-left: -50px;
		border-top:1px solid #000066;
		width:250px;
		height:auto;
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
	.header{
		margin-top: -20px;
		max-width: 100%;
		height: 150px;
	}
	</style>
	
<body>
	<section class="container">
    <header class="header">
		<img src="design/logo.png" alt="UU LOGO" class="logo"/>
			<h1 style="text-align: center;"> ONLINE NOTICE BOARD </h1>
				<p >UTTARA UNIVERSITY</p>
				<p><em>Quality Education At Affordable Tution</em></p>
	</header>
			<!-- Navigation bar -->
<section>
		 <nav class="my-nav navbar navbar-default" style="background-color:#66ff99;font-weight: bold;font-size: 20px;">
	<div class="container">
		<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
			</div>	
			<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li><a href="teacherprofile.php">HOME </a></li>
						<li><a href="profile.php">PROFILE</a></li>
						<li><a href="faculty.php">FACULTY</a></li>
						<li><a href="contactf.php">CONTACT</a></li>
						<li><a href='https://www.uttarauniversity.edu.bd/'>UU HOME</a></li>
						<li><button class="btn btn-primary navbar-btn"><a style="text-decoration:none;color:white; " href="studentprofile.php?logout='1'">LOGOUT</a></button></li>
					</ul>
				</div>
			</div>
		</nav>


</section>
<section>
<div class="container">
<div id="mySidenav" class="sidenav" >
  
  <ul type=none>
				<li><a href="classroutine.php" class = "btn btn-lg">Class Routine</a></li>
				<li><a href="examroutine.php" class = "btn btn-lg">Exam Routine</a></li>
				<li><a href="jobinfo.php" class = "btn btn-lg">Job Info</a></li>
				<li><a href="seminer.php" class = "btn btn-lg">Seminer</a></li>
				<li><a href="club.php" class = "btn btn-lg">Club Info</a></li>

			</ul>
</div>
</div>

</section>
</section>
</body>
</html>