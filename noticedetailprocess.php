<?php
	
	$db = mysqli_connect("localhost","root","","project");

	if (isset($_POST['submit']))
	{;
		$id = $_POST['id']
		$target = "document/".basename($_FILES['uploadfile']['name']);
		
		$uploadfile = $_FILES['uploadfile']['name'];
		
		$sql = "INSERT INTO noticedetail (id,filename,path)  VALUES ('$id','$uploadfile','$target')";
		
		mysqli_query($db,$sql);
		if(move_uploaded_file($_FILES ['uploadfile']['tmp_name'], $target)){
			header('location:noticedetail.php');
		}else{
			die("failed to upload");
		}
	}
?>