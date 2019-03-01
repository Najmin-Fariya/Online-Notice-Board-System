<?php 
	
	$id=0;
	$edit=false;
	$image ="";
	$pname ="";
	$designation ="";

	$db = mysqli_connect("localhost","root","","project");
	if (isset($_POST['add']))
	{
		$target = "images/".basename($_FILES['image']['name']);
		$image = $_FILES['image']['name'];

		$pname =  $_POST['pname'];
		$designation = $_POST['designation']; 
		
		$sql = "INSERT INTO faculty (picture,person_name,designation) VALUES ('$image','$pname','$designation')";
		mysqli_query($db,$sql);
		if(move_uploaded_file($_FILES ['image']['tmp_name'], $target)){
			echo"data inserted";
		}else{
			echo "Failed to upload image";
		}

	}

	//update
		if(isset($_POST['update'])){

		$target = "images/".basename($_FILES['image']['name']);
		$image = $_FILES['image']['name'];

		$pname = $_POST['person_name'];
		$designation = $_POST['designation'];
		

		$id= $_POST['id'];

		mysqli_query($db,"UPDATE faculty SET person_name='$pname'  WHERE id='$id' ");
	header('location: faculty.php');
	}
	
	//delete
	if(isset($_GET['del'])){
		$id = $_GET['del'];
		mysqli_query($db,"DELETE FROM faculty Where id =$id");
	header('location: faculty.php');
	}
	//retrive
$result =  mysqli_query($db, "SELECT * FROM faculty");


?>
