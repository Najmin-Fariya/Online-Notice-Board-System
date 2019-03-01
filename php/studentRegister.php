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
	 background-color:#f5f5ef;
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
	h3{
		text-align:center;
	}
	.container {
    padding: 16px;
	background-color:#e6ffb3;
	font-size:18px;
    }
	
	button {
    color: white;
    padding: 14px 20px;
    cursor: pointer;
	font-family:Adamina;
	}
	button a {
		text-decoration:none;
		color:white;
	}
	.form-group{
	font-weight:bold;
	}
	button a:hover {
	color:black;
	text-decoration:none;
	}
	.gender{
	color: #0066cc;
	}

</style>
<body>
	<section class="container">
	<header class="header" >
		<img src="design/logo.png " height="200" width="170" alt="UU LOGO" class="logo">	  
		<h1> ONLINE NOTICE BOARD </h1>
		<div class="logotext-float">
		<p>U<span>TTARA</span> U<span>NIVERSITY<span><br/><em>Quality Education At Affordable Tution</em></p>
		</div>
		<div class="clear"></div>
	</header>
	
	<h2><b><em>Student Registration Form</em></b></h2></section>
<section>
	<div class="container">
		<div class="container-fluid">
			
			<form action="" method="post">
			<?php include('errors.php');?>
		    <div class="form-group">
				<label><b>Username:</b></label>
				<input type="text" placeholder="Username" name="username" class="form-control input-lg" value="<?php echo $username;?>" ></br>
			</div>
			<div class="form-group">
				<label><b>Password:</b></label>
				<input type="password" placeholder="*********" name="password" class="form-control input-lg" value="<?php echo $password;?>"></br>
			</div>
			<div class="form-group">
				<label><b>UU Registration No:</b></label>
				<input type="text" placeholder="i.e UU24814" name="registrationno" class="form-control input-lg" value="<?php echo $registrationno;?>"></br>
			</div>   
			<div class="form-group">
				<label><b>UU ID No:</b></label>
				<input type="text" placeholder="i.e F/M2142211001" name="id1" class="form-control input-lg" value="<?php echo $id;?>"></br>
			</div>
			<div class="form-group">
				<label><b>E-mail:</b></label>
				<input type="email" placeholder="i.e Sample@gmail.com" name="email" class="form-control input-lg" value="<?php echo $email;?>">
			</div>
			<div class="form-group">
				<label><b>Batch No:</b></label>
				<input type="text" placeholder="i.e 1st" name="batch" class="form-control input-lg" value="<?php echo $batch;?>"></br>
			</div>
				<label class="gender"><b>Gender:</b>
				<input type="radio" name="gender"  value="female">Female
				<input type="radio" name="gender"  value="male">Male
				<br></label>
				<br>
				<label class="gender" ><b>To get notifications mark checkboxes:</b></label><br>
				
				<div class="checkbox">
					<label><input type="checkbox" name="classroutine" value="1">Class routine</label>
				</div>	
				<div class="checkbox">
					<label><input type="checkbox" name="examroutine" value="1">examroutine</label>
				</div>
				<div class="checkbox">
					<label><input type="checkbox" name="jobinfo" value="1">jobinfo</label>
				</div>
				<div class="checkbox">
					<label><input type="checkbox" name="seminer" value="1">seminer</label>
				</div>
				<div class="checkbox">
					<label><input type="checkbox" name="club" value="1">club</label>
				</div> 
				<button type="submit" name="submit" class="btn btn-success">Register</button>
				<button class="btn btn-danger">Cancel</button>
				<br><br>
			    <p> Already a member? <a href="sLogin.php">Sign in</a></p>
		</form>
	</div>
</section>

<?php include'footer.php';?>
</body>
</html>