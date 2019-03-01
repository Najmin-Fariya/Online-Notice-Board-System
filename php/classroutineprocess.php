
<?php
	session_start();
	$db = mysqli_connect("localhost","root","","project");

	if (isset($_POST['submit']))
	{
		$target = "document/".basename($_FILES['uploadfile']['name']);
		$id = $_POST['id'];
		$uploadfile = $_FILES['uploadfile']['name'];
		$sql = "INSERT INTO noticedetail (id,filename,path)  VALUES ('$id','$uploadfile','$target')";
		
		mysqli_query($db,$sql);
		if(move_uploaded_file($_FILES ['uploadfile']['tmp_name'], $target)){
			header('location:abc.php');
		}else{
			die("failed to upload");
		}
	}
?>


	<?php 
	$db = mysqli_connect("localhost","root","project","project");
	$res =  mysqli_query($db, "SELECT * FROM classroutine");
	while ($row = mysqli_fetch_array($res)){

		$name = $row['filename'];
		$path = $row['path'];

	echo $name."<a href='download.php?downld=$path'>Download</a><br>";
			}
	?>

<!DOCTYPE html>
<html>
	<style> </style>
<body>
	<?php 
	$db = mysqli_connect("localhost","root","","project");
	$res =  mysqli_query($db, "SELECT * FROM classroutine");
	while ($row = mysqli_fetch_array($res)){

		$name = $row['filename'];
		$path = $row['path'];

	echo $name."<a href='download.php?downld=$path'>Download</a><br>";
			}
	?>
<?php include 'footer.php';?>
</body>
</html>

