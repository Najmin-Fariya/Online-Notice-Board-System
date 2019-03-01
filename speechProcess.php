<?php 

	$id=0;
	$edit_state=false;
	$image ="";
	$description = "";

	$db = mysqli_connect("localhost","root","","project");
	if (isset($_POST['add']))
	{
		$target = "design/".basename($_FILES['image']['name']);
		$image = $_FILES['image']['name'];
		$description = $_POST['description']; 
		
		$sql = "INSERT INTO speech (image,description) VALUES ('$image','$description')";
		mysqli_query($db,$sql);
		if(move_uploaded_file($_FILES ['image']['tmp_name'], $target)){
			echo"data inserted";
		}else{
			echo "Failed to upload image";
		}

	}
	//update
	if(isset($_POST['update'])){
		$target = "design/".basename($_FILES['image']['name']);
		$image = $_FILES['image']['name'];
		$description = $_POST['description'];
		

		$id= $_POST['id'];

		mysqli_query($db,"UPDATE speech2 SET image='$image',description ='$description'  WHERE id='$id' ");
	header('location: speech.php');
	}
	
	//delete
	if(isset($_GET['del'])){
		$id = $_GET['del'];
		mysqli_query($db,"DELETE FROM speech Where id =$id");
	header('location: speech.php');
	}

	$result3 =  mysqli_query($db, "SELECT * FROM speech");
	?>