<?php include'noticetable .php';?>
<!DOCTYPE html>
<html>
<head> 
	<title> Online Notice Board</title>
	<link rel="icon"  href="images/uulogo.jpg"  />
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
		width:100px; 
	}
	h1{
		font-size: 28px;
		text-align: right;
		font-family:Adamina;
	}
	header{
		background-color:#0066cc;
		color:white;
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
		margin-top: 0px;
		max-width: 100%;
		height: 150px;
	}
	</style>
	
<body>

    <header class="header">
		<img src="design/logo.png" alt="UU LOGO" class="logo"/>
			<h1 style="text-align: center;"> ONLINE NOTICE BOARD </h1>
				<p>UTTARA UNIVERSITY</p>
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
						<li><a href="index.php">HOME </a></li>
						<li><a href="profile.php">PROFILE </a></li>
						<li><a href="faculty.php">FACULTY</a></li>
						<li><a href="contactf.php">CONTACT</a></li>
						<li><a href='https://www.uttarauniversity.edu.bd/'>UU HOME</a></li>
						<button class="btn btn-primary navbar-btn"><a style="text-decoration:none;color:white; " href="studentprofile.php?logout='1'">LOGOUT</a></button>
					</ul>
				</div>
			</div>
		</nav>
	</div>
</nav>
</section>
<secion>


	<div class="container">

		<div class="leftside-nav">
			<ul type=none>
	<li><button style="padding-top:20px;" class = "btn btn-primary btn-lg" data-toggle = "modal" data-target = "#myModal">CLASS ROUTINE</button></li>


<div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog" 
   aria-labelledby = "myModalLabel" aria-hidden = "true">
   
   <div class = "modal-dialog">
      <div class = "modal-content">
         
         <div class = "modal-header">
            <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
                  &times;
            </button>
            
            <h4 class = "modal-title" id = "myModalLabel">All notices</h4>
            
         </div>
         
         <div class = "modal-body" style="max-width: 250%">
           <div class="container" style="max-width: 100%;border: 1px solid green;border-radius: 8px;padding: 10px;">
<script type="text/javascript">$(document).ready(function(){
				   	 $('#myTable').DataTable();
							});
			
				</script>
        <table border="1" cellpadding="0" class="table table-bordered table-hover" cellspacing="0" id="myTable" class="display" width="100%">
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
					<tr><?php }?>
						<td><?php echo $row['slno'];?></td>
						<td> <a href="" style="text-decoration: none;"> <?php echo $row['noticetitle'];?></a></td>
						<td><?php echo $row['date'];?></td>
						<td><?php echo $row['view'];?></td>
					</tr>
				
				</tbody>
		</table>
         </div>
         
         <div class = "modal-footer">
            <button type = "button" class = "btn btn-danger" data-dismiss = "modal"> Close </button>

         </div>
         
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
  
</div><!-- /.modal -->



		</ul>
	</div>
</div>
</secion>





		<?php include_once'footer.php';?>

</body>
</html>
