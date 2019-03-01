<?php include'link_head.php';?>

<?php 
	
	$db = mysqli_connect("localhost","root","","project"); 
	
	if(isset($_POST['submit'])){

		
		$date = $_POST['date'];
		$title = $_POST['title'];
		$about = $_POST['about'];
		
		
		$query = "INSERT INTO notice (date,title,about) VALUES ('$date','$title','$about')";

		mysqli_query($db, $query);

		
	}?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container" style="">
		
			<form action="" method="POST"  >
			<input type="hidden" name="id" value="">

			
			<label >date</label>
			<input type="date" name="date" value="" class="form-control" >
		
			<label >Upload Image:</label>
			<input type="text" name="title" value="" class="form-control" >
	
			 
			<label >Description:</label>
			<textarea type="text" name="about" value="" class="form-control" ></textarea>
					
			<input type="submit" name="submit" class="btn btn-primary">
			<button>cancel</button>	
			</form>
		</div>


<?php 

	$db=mysqli_connect("localhost","root","project","project");

		if(isset($_POST['submit']))
		{
		$date	=$_POST['date'];
		$title = $_POST['title'];
		$about = $_POST['about'];
		
$sql="INSERT INTO `visitornotice`( `date`, `title`, `about`) VALUES ('$date',$title','$about')";
		mysqli_query($db,$sql);
}	
?>

</body>
</html>
