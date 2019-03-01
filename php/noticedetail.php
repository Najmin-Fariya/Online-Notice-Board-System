

<?php include 'header.php';?>
<?php include'noticedetailprocess.php';?>
<?php include 'download.php';?>


<!DOCTYPE html>
<html>
	<style> </style>
<body>
	<?php 
	$db = mysqli_connect("localhost","root","","project");
	$res =  mysqli_query($db, "SELECT * FROM noticedetail");
	while ($row = mysqli_fetch_array($res)){

		$name = $row['filename'];
		$path = $row['path'];

	echo $name."<a href='download.php?downld=$path'>Download</a><br>";
			}
	?>
<?php include 'footer.php';?>
</body>
</html>