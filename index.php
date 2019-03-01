 <?php include 'noticetable .php';?>

<!DOCTYPE html>
<html>
<head> 
    <title> Online Notice Board</title>
	<link rel="icon"  href="images/uulogo.jpg"  />
	<meta http-equiv ="Content-Type" content="text/html; charset=utf-8  " />
    <link rel="stylesheet" href="stylenew.css"  type="text/css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
    <link href='https://fonts.googleapis.com/css?family='Adamina' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
</head>

	<style>
	section{
		background-color:#cce0ff;
		
		}
		.table{
		background-color:white;
		margin: 30px 20px 5px 0px;
		}
		.table h3{
		text-align:center;
		}
	</style>
<body>
	<header>
		<div class="a">
			<img src="images/logo.png " height="200" width="170" alt="UU LOGO" class="logo"/>	  
			<h1> ONLINE NOTICE BOARD</h1>
			<div class="logotext-float">
			<p>UTTARA UNIVERSITY<br/><em id="a">Quality Education At Affordable Tution</em></p>
			</div>
			<div class="clear"></div>
		</div>	
	</header>
           <!--   navigation bar-->
		<section>   
    <nav class="my-nav navbar navbar-default" style=";">
	<div class="container">
		<div class="container-fluid">
		
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
			</div>			
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav"  >
						<li><a href="newpage.html" >HOME</a></li>
						<li><a href="">FACULTY</a></li>
						<li><a href="teacherprofile.php">TEACHERS-NOTICE</a></li>
						<li><a href="login.php" >STUDENTS-NOTICE</a></li>
							<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >LOG IN <span class="caret"></span> </a>
								<ul class="dropdown-menu">
									<li role="separator" class="divider"></li>
									<li><a href="teacherlogin.php">Teacher</a></li>
									<li role="separator" class="divider"></li>	
									<li><a href="userregister.php">Student</a></li>
								</ul>
							</li>
						<li><a href="">CONTACT</a></li>
						<li><a href='https://www.uttarauniversity.edu.bd/' target="blank">UU HOME</a></li>
					</ul>
				</div>
			
		</div>
	</div>
</nav>

	<marquee style="color:red;">Fall-2017 Mid Result Will Be Published On 07-nov-2017</marquee>
	
	
	
		<div class="container">
        <table class="table table-bordered">
			<thead>
				<tr>
					<th>SL NO</th>
					<th>Notice Title</th>
					<th>Date</th>
					<th>View</th>
				 </tr>
			</thead>
				<tbody>
				<?php while ($row = mysqli_fetch_array($result)) { ?>
					<tr>
						<td><?php echo $row['slno'];?>   </td>
						<td> <a href="admin/noticedatile.php" target="blank"> <?php echo $row['noticetitle'];?></a></td>
						<td><?php echo $row['date'];?></td>
						<td><a href="#">edit</a></td>
						<td><a href="#">delete</a></td>
					</tr>
				<?php }?>
				</tbody>
		</table>
	
	
	<?php include'footer.php'?>
	
	
	</section>   
</body>
</html>