<?php

	$title="";
 	$date="";
	$id= 0;
	$edit_state = false;
	
    $db = mysqli_connect("localhost","root","","project");
	
	if(isset($_POST['submit'])){

		$id = $_POST['id'];
		$date = $_POST['date'];
		$title = $_POST['title'];
		$about = $_POST['about'];
		
		
		$query = "INSERT INTO notice (id,date,title,about) VALUES ('$id','$date','$title','$about')";

		mysqli_query($db, $query);

		 header('location:adminhome.php');
	}
	
	// retrive record
	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$title = $_POST['title'];
		$date = $_POST['date'];
		$about = $_POST['about'];
		mysqli_query($db,"UPDATE notice SET id ='$id', title='$title',date='$date',about='$about' ");
	header('location: adminhome.php');
	}
	
?>
