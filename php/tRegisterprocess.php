<?php

	$username = "";
	$password = "";
	$id = ""; 
	$email = "";
	$gender ="";
	$errors	= array();

	$db = mysqli_connect("localhost","root","","project")or die (mysql_error());
	if(isset($_POST['submit']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$id =$_POST['id1'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
if(!empty($_POST['classroutine'])||!empty($_POST['examroutine'])||!empty($_POST['jobinfo'])||!empty($_POST['seminer'])||!empty($_POST['club']) ){
		$classroutine = $_POST['classroutine'];
		$examroutine = $_POST['examroutine'];
		$jobinfo = $_POST['jobinfo'];
		$seminer = $_POST['seminer'];
		$club = $_POST['club'];
}
		if (empty($username)){
			array_push($errors ,"Username is required");
		}
		if (empty($password)){
			array_push($errors,"Password is required");
		}
		if (empty($id)){
			array_push($errors,"ID is required");
		}
		if (empty($email)){
			array_push($errors,"Email is required");
		}
		if (empty($gender)){
			array_push($errors,"Gender is required");
		}
		if(count($errors) == 0){
		$password = md5($password);
	$sql = "INSERT INTO teacher_info (username,password,id1,email,gender,classroutine,examroutine,jobinfo,seminer,club) VALUES('$username','$password','$id','$email','$gender','$classroutine','$examroutine','$jobinfo','$seminer','$club') ";
	mysqli_query($db,$sql);
	header('location:teacherprofile.php');

	}
}

	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		if (empty($username)){
			array_push($errors ,"Username is required");
		}
		if (empty($password)){
			array_push($errors,"Password is required");
		}

		if(count($errors) == 0){	
		$query = "SELECT * FROM `teacher_info` where username='$username' AND password ='$password'";
		$result = mysqli_query($db,$query);

		if(mysqli_num_rows($result) == 1){
		header('location:teacherprofile.php');
		}else{	
			array_push($errors,"worng username/password combination");
		}
	}
}

	if(isset($_GET['logout'])){
		session_destroy();
		header('location:index.php');
	}
	


?>
