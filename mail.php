<?php include'header.php';?>
<?php include'link_head.php';?>		
		
<!DOCTYPE html>
<html>
<head> 
	<title>Contact</title>
</head>

<style type="text/css">
body{
	background-color: #e6e6ff;
	font-family: Adamina;
}
</style>



<body >
<div class="container" style="max-width:600px;margin:0px auto;border: 2px solid #00ace6; ">
	<h2 style="color: black;">Send Notification To Teachers</h2>
		<form action="" method="post">

  			<div class="form-input">
		    <label for="">Subject*</label>
		    <input type="text" id="" name="subject" placeholder="Your subject.." class="form-control">
			</div>

			
			<div class="form-input">
		    <label for="msg">Message *</label>
		    <textarea id="msg" name="msg" placeholder="Write your message here .." class="form-control"></textarea>
			</div>
			
			<div class="form-input">
		    <label for="email">Email From*</label>
		    <input type="text" id="email" name="emailf" placeholder="Your email address.."  class="form-control">
		    </div>
			
			<br>
   			<button type="submit" name="submit" class="btn btn-success" >SEND</button>
   			<button type="submit"  class="btn btn-danger" >CANCEL</button>
   			
</form><br>
<div>
  		
  
<?php 

	$db = mysqli_connect("localhost","root","","project");
  
	$sql = "SELECT email FROM teacher_info where classroutine = 1|| examroutine=1|| jobinfo=1 || seminer=1|| club=1";
	
	$res = mysqli_query($db,$sql);
	while($row_data=mysqli_fetch_array($res)){

	if(isset($_POST['submit']))
		{
   $subject = $_POST['subject'];
    $to = $row_data['email']; // The column where your e-mail was stored.
    $from = $_POST['emailf'];
	$body = $_POST['msg'];
    mail($to,$subject, $body, $from);
		}
	 }
	
		?>


	</div>
</div>


<br><br>
<div class="container" style="max-width:600px;margin:0px auto;border: 2px solid #00ace6;border-radius: 5px; ">

	<h2 style="color: black;">Send Notification To Students</h2>
		<form action="" method="post">

  			<div class="form-input">
		    <label for="">Subject*</label>
		    <input type="text" id="" name="subject" placeholder="Your subject.." class="form-control">
			</div>

			
			<div class="form-input">
		    <label for="msg">Message *</label>
		    <textarea id="msg" name="msg" placeholder="Write your message here .." class="form-control"></textarea>
			</div>
			
			<div class="form-input">
		    <label for="email">Email From*</label>
		    <input type="text" id="email" name="emailf" placeholder="Your email address.."  class="form-control">
		    </div>
			
			<br>
   			<button type="submit" name="submit" class="btn btn-success">SEND</button>
   			<button type="submit"  class="btn btn-danger">CANCEL</button>
   			

</form>
<br>
<div>
  		
  
<?php 

	$db = mysqli_connect("localhost","root","","project");
  
	$sql = "SELECT email FROM student_info where classroutine = 1|| examroutine=1|| jobinfo=1 || seminer=1|| club=1";
	
	$res = mysqli_query($db,$sql);
	 
	 while ($row_data = mysqli_fetch_array($res)) {

    // Then you will set your variables for the e-mail using the data 
    // from the array.
	if(isset($_POST['submit']))
		{
   $subject = $_POST['subject'];
    $to = $row_data['email']; // The column where your e-mail was stored.
    $from = $_POST['emailf'];
	$body = $_POST['msg'];
    mail($to,$subject, $body, $from);
		}
	 }
	
		?>
		
		

</div>
</div>
<br>
<?php include'footer.php';?>
</body>
</html>
