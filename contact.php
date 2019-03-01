
<?php include'header.php';?>
<?php

    if(isset($_GET['del'])){
		$id = $_GET['del'];
		mysqli_query($db,"DELETE FROM contact Where id =$id");
	header('location: contact.php');
	}
?>
<!DOCTYPE html>
<html>
<head> 
		<title>ADMIN  Online Notice Board</title>
		<link rel="icon"  href="uulogo.jpg"  />
		<meta http-equiv ="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
		<link href='https://fonts.googleapis.com/css?family='Adamina' rel='stylesheet'>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">

</head>
	<style>
	body{
		background-color: #e6e6ff;
	}
	</style>
<body>

     <div class="container" style="font-size: 18px;">
     	<section class="container" style="max-width: 100%; border-radius: 5px;border: 2px solid #0099cc;">
			<script type="text/javascript">$(document).ready(function(){
				   	 $('#myTable').DataTable();
							});
			</script>
        
        	<table border="1" cellpadding="0" class="table table-bordered table-hover" cellspacing="0" id="myTable" class="display" width="100%">
			<thead>
				<tr>
					
					<th>Subject</th>
					<th>Email Address</th>
					<th>Message</th>
					<th>Action</th>
					
				 </tr>
			</thead>
				<tbody>
				<?php 
				$db = mysqli_connect("localhost","root","","project");
				$sql = "SELECT * FROM `contact`ORDER BY id DESC";
    			$result =  mysqli_query($db, $sql);
				while ($row = mysqli_fetch_array($result)) { ?>
					<tr>
						
						<td><?php echo $row['uname'];?></td>
						<td><?php echo $row['email'];?></td>
						<td ><?php echo $row['msg'];?></td>
						<td><a class="btn btn-danger" href="contact.php?del=<?php echo $row['id'];?>">DELETE</a></td>
					</tr>
				<?php }?>
				</tbody>
			</table>
	
		</div>
		<br><br>

							<?php include'footer.php';?>
</body>
</html>