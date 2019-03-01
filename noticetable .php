<?php
  
	$noticetitle="";
	$date="";
	$slno=0;
	$edit = false;
	
    $db = mysqli_connect("localhost","root","","project");
	
	if(isset($_POST['add'])){
		$id = $_POST['slno'];
		$uploadfile = $_FILES['uploadfile']['name'];
		$target = "document/".basename($_FILES['uploadfile']['name']);
		$date = $_POST['date'];

		$query = "INSERT INTO notice order by slno desc(noticetitle,date,noticefile) VALUES ('$uploadfile','$date','$target')"  ;

		mysqli_query($db, $query);
		if(move_uploaded_file($_FILES ['uploadfile']['tmp_name'], $target)){
			header('location:adminhome.php');
		}else{
			die("failed to upload");
		}
	}
	//delete
	if(isset($_GET['del'])){
		$slno = $_GET['del'];
		mysqli_query($db,"DELETE FROM notice Where slno =$slno");
	header('location: adminhome.php');
	}
	//retrive record
	$result =  mysqli_query($db, "SELECT * FROM notice");

?>