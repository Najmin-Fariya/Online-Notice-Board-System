
<?php 
session_start();
	$username ="";
	$password ="";
	$errors = array();
	$db = mysqli_connect("localhost","root","","project")or die (mysql_error());

	if(isset($_POST['login']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		if (empty($username)){
			array_push($errors ,"Username is required");
		}
		if (empty($password)){
			array_push($errors,"Password is required");
		}

		if(count($errors) == 0){
		$query = "SELECT * FROM `adminlogin` where username='$username' AND password ='$password'";
		$result = mysqli_query($db,$query);

		if(mysqli_num_rows($result) == 1)
		{
	

		header('location:adminhome.php');
		
		}else{	
			array_push($errors,"worng username/password combination");
		}
	}
}
//
if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		unset($_SESSION['password']);
		header('location:adminloginform.php');
	}


?>





