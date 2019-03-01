 <?php

	$username="";
	$password ="";
	$confirmpassword="";
	$registrationno = "";
	$id = "";
	$email = "";
	$batch = "";
 	$gender = "";
 	$checkbox = "";
	$errors	= array();
	
	$db = mysqli_connect('localhost','root','','project'); //database connection
	if(isset($_POST['submit']))
	{
		$username = 			$_POST['username'];
		$password = 			$_POST['password'];
		$registrationno =		 $_POST['registrationno'];
		$id = 					$_POST['id1'];
		$email = 				$_POST['email'];
		$batch = 				$_POST['batch'];

		$gender = 				$_POST['gender'];
	
if(!empty($_POST['classroutine'])||!empty($_POST['examroutine'])||!empty($_POST['jobinfo'])||!empty($_POST['seminer'])||!empty($_POST['club']) ){
		$classroutine =			 $_POST['classroutine'];
		$examroutine =			 $_POST['examroutine'];
		$jobinfo =				 $_POST['jobinfo'];
		$seminer =				 $_POST['seminer'];
		$club = 				$_POST['club'];
}
		if (empty($username)){
			array_push($errors ,"Username is required");
		}
		if (empty($password)){
			array_push($errors,"Password is required");
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
			$sql = "INSERT INTO student_info (username,password,registrationno,id1,email,batch,gender,classroutine,examroutine,jobinfo,seminer,club)  
					VALUES('$username','$password','$registrationno','$id','$email','$batch','$gender','$classroutine','$examroutine','$jobinfo','$seminer','$club')";
			mysqli_query($db, $sql);

			header('location:studentprofile.php');
		}
	}
	
	//login
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
		$query = "SELECT * FROM `student_info` where username='$username' AND password ='$password'";
		$result = mysqli_query($db,$query);

		if(mysqli_num_rows($result) == 1){
		header('location:studentprofile.php');
		}else{	
			array_push($errors,"worng username/password combination");
		}
		}
	}
	
	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		unset($_SESSION['password']);
		header('location:index.php');
	}
	
	
	
?>