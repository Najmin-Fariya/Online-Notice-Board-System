<?php
if(isset($_POST['submit']))
{

	$date=$_POST['date'];
	$file = $_FILES['file'];

	$filename = $_FILES['file']['name'];
	$fileTempName = $_FILES['file']['temp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type']; 

	$fileExt = explode('.', $filename);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg','jpeg','png','pdf');

		if (in_array($fileActualExt,$allowed))
        {
        	if($fileError === 0){
        		if($fileSize < 1000000){
        			$filenameNew = uniqid('',true).".".$fileActualExt;
        			$fileDestination = 'uploads/'.$filenameNew;
        			move_uploaded_file($fileTempName, $fileDestination);
        			header("Location: adminhome.php");
        		}else{
        			echo "your file is too big!!";
        		}

        	}else{
        		echo"there was an error!!";
        	}

		}else{
			echo"not ok";
		}

}








?>