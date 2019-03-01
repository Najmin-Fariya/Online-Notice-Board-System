<?php include'noticedetailprocess.php';?>
<?php include'download.php';?>
<!DOCTYPE html>
<html>
<head> 
		<title> Online Notice Board</title>
		<link rel="icon"  href="uulogo.jpg"  />
		<meta http-equiv ="Content-Type" content="text/html; charset=utf-8  " />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
		<link href='https://fonts.googleapis.com/css?family='Adamina' rel='stylesheet'>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
</head>
	<style> </style>
<body>
			<h1> ONLINE NOTICE BOARD ADMIN </h1><br>
 
<div class="container">
	<form action="" method="POST" enctype="multipart/form-data">
		<div class="form-input">

			<label> UPLOAD File :</label>
			<input type="file" name="uploadfile"  class="form-control" >
			<br>
			
			<button type="submit" name="submit" class="btn btn-info" > UPLOAD</button>
		</div>
	</form>	

	<?php 
	$db = mysqli_connect("localhost","root","","project");
	$res =  mysqli_query($db, "SELECT * FROM noticedetail");
	while ($row = mysqli_fetch_array($res)){

		// $name = $row['filename'];
		$path = $row['path'];

	echo "<a href='download.php?downld=$path'>Download</a><br>";
			}
	?>

	</div>
	</body>
	</html>
