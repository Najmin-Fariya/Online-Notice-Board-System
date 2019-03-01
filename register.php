<?php
   // $session_start();
	$username="";
	$password ="";
	$confirmpassword="";
	$registrationno = "";
	$id = "";
	$email = "";
	$batch = "";
 	$gender = "";
	$errors	= array();
	
	$db = mysqli_connect('localhost','root','','project');
	if(isset($_POST['submit']))
	{
		$username = mysql_real_escape_string($_POST['username']);
		$password = mysql_real_escape_string($_POST['password']);
		$confirmpassword = mysql_real_escape_string($_POST['confirmpassword']);
		$registrationno = mysql_real_escape_string($_POST['registrationno']);
		$id = mysql_real_escape_string($_POST['id']);
		$email = mysql_real_escape_string($_POST['email']);
		$batch = mysql_real_escape_string($_POST['batch']);
		$gender = mysql_real_escape_string($_POST['gender']);
		
		if (empty($username)){
			array_push($errors ,"Username is required");
		}
		if (empty($password)){
			array_push($errors,"Password is required");
		}
		if ($password != $confirmpassword ){
			array_push($errors,"Two Passwords do not match");
		}
		if (empty($registrationno)){
			array_push($errors," please put registration no");
		}
		if (empty($id)){
			array_push($errors,"please put id no");
		}
		if (empty($email)){
			array_push($errors,"email is required");
		}
		if (empty($batch)){
			array_push($errors,"batch is required");
		}
		if (empty($gender)){
			array_push($errors,"gender is required");
		}
		if(count($errors) == 0){
			$password = md5($password);
			$sql = "INSERT INTO clsrtnlogin(username,password,registrationno,id,email,batch,gender)  
					VALUES('$username','$password','$registrationno','$id','$email','$batch','$gender')";
			mysqli_query($db, $sql);
			//$_SESSION['username']= $username;
			//$_SESSION['success']= "You are logged In";
			//header('location:login2.php');
		}
	}
?>