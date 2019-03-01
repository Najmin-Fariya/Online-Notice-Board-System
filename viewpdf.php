
<?php
	session_start();
	$db = mysqli_connect("localhost","root","","project");
$id = "";
	if (isset($_POST['submit']))
	{
		$target = "document/".basename($_FILES['uploadpdf']['name']);
		$id = $_POST['id'];
		$
		$uploadfile = $_FILES['uploadpdf']['name'];
		$sql = "INSERT INTO noticedetail (id,filename,path)  VALUES ('$id','$uploadfile','$target')";
		
		mysqli_query($db,$sql);
}
/// retrive 





?>

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
			<input type="hidden" name="id">
			<label>Document Name :</label>
			<input type="text" name="name"><br>
			<label> UPLOAD File :</label>
			<input type="file" name="uploadpdf"  class="form-control" >
			<br>
			<button type="submit" name="submit" class="btn btn-info" > UPLOAD</button>
			<button><a href="viewpdfprocess.php"></a>view</button>
		</div>
	</form>
</div>
</body>
</html>


