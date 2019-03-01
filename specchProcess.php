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
	$result2 =  mysqli_query($db, "SELECT * FROM faculty");
	?>