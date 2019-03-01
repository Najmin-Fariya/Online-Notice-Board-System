
	<?php include 'facultyprocess.php';?>
	<?php include'tRegisterprocess.php';?>
	<?php include'header.php';?>
<!DOCTYPE html>
<html>
<head> 
    <title> Online Notice Board</title>
	<link rel="icon"  href="design/uulogo.jpg"  />
	<meta http-equiv ="Content-Type" content="text/html; charset=utf-8  " />
    <link rel="stylesheet" href="stylenew.css"  type="text/css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
 	<link href='https://fonts.googleapis.com/css?family='Adamina' rel='stylesheet'>

 	<link rel="stylesheet" type="text/css" href="table.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/dataTables.min.js"></script>

	<style type="text/css">
 	
 	body{
	background-color: #e6f9ff;
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
	.table{
		background-color: #e6e6ff;
	}
	
	
	     </style>
</head>
<body>

						<!-- Headline -->
		<div class="container">
		   <h2 style="text-align:center; font-family: Adamina; background-color: #00cc66; color: white;margin-top: -20px;" > <em>Faculty Members Of Computer Science And Engineering</em>
		   </h2>
		</div>
   <br>


   							<!-- Table Shows Faculty Members detail -->
		<section class="container" class="table" style="max-width: 100%; border: 2px solid #0066cc;border-radius: 5px;font-size: 17px;"">
				<script type="text/javascript">$(document).ready(function(){
					$('#myTable').DataTable();
					});
				</script>  

		  	<table border="1" cellpadding="0" class="table table-bordered table-hover" cellspacing="0" id="myTable" class="display" width="100%" >

				<thead style="font-weight: bold;">
			  		<tr>
						<th>Name</th>
						<th>Designation</th>
						<th>Picture</th>
					</tr>
				</thead>

			<tbody>
				<?php while ($row = mysqli_fetch_array($result)) { ?>
			  	<tr>
					<!--<td><?php echo $row['id'];?></td><th>SL NO</th>-->
					<td><?php echo $row['person_name'];?></td>
					<td><?php echo $row['designation'];?></td>
					<td><?php echo "<img height = '200px' width = '180px' text-align='right' src='../images/".$row['picture']."'>";?></td>
			  	</tr>
			  	<?php }?>
			</tbody>
		  </table>
   </section>	 
   <br>
   
	<?php include'footer.php';?>

</body>
</html>
		