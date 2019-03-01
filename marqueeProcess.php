<?php
		$marquee="";
		$id= 0;
		$edits = false;
		$db = mysqli_connect('localhost','root','','project');
		if (!$db) {
	    die("Connection failed: " . mysqli_connect_error());
		}

	if(isset($_POST['add'])){
		$marquee = $_POST['marquee'];
		$query = "INSERT into marquee (marquee) VALUES('$marquee')";
		mysqli_query($db,$query);
	}
	//edit
	if(isset($_POST['update'])){

	$id= $_POST['id'];
	$marquee = $_POST['marquee'];

		mysqli_query($db,"UPDATE marquee SET marquee='$marquee' WHERE id='$id' ");
	header('location: marquee.php');
	}
	//delete
	if(isset($_GET['del'])){
		$id = $_GET['del'];
		mysqli_query($db,"DELETE FROM marquee Where id =$id");
	header('location: marquee.php');
	}
		$mresult =  mysqli_query($db, "SELECT * FROM marquee ");
	?>		