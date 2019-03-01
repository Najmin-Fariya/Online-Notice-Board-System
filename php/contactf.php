	<?php include'header.php';?>
<!DOCTYPE html>
<html>
<head> 
	
</head>

<style type="text/css">
body{
	background-color: #e6f9ff;
}
	.dean{
		max-width: 430px;
		max-height: auto;
		overflow:auto;
		float: left;
		clear: left;
	}
	.container{
		background-color: #e6e6ff;
	}
	
	.footer{
		padding-top: 10px;
	}
	.speech{
		padding: 10px;
	}
		
	.header{
		background-color:#0066cc;
		font-family:Adamina;
		color:white;
		position:relative;
		width:100%;
		margin-top:-20px;
	 }
	 h1{
		font-size:35px;
		text-align:center;
	}
	.logo{
		float:left;
		margin:2px 10px 0px 2px;
	}
	 .logotext-float{
		font-size:28px;
		font-family: 'Open Sans Condensed', sans-serif;

	}
	.clear{
		clear:left;
	}
	h2{
		margin-top:0px;
		margin-bottom:0px;
		padding:5px 0px 8px 0px;
		font-family:Adamina;
		text-align:center;
		background-color:#00e673;
		color:#000066;
	}
</style>


<body>
	
<div class="container" style="max-width:700px;margin:0px auto;font-size: 18px;" >
		<form action="" method="post">
			
			<div class="form-input">
		    <label for="email">Email Address :</label>
		    <input type="email" id="email" name="emailf" placeholder="Your email address.."  class="form-control input-lg">
		    </div>

  			<div class="form-input">
		    <label for="">Subject :</label>
		    <input type="text" id="" name="subject" placeholder="Write subject.." class="form-control input-lg">
			</div>

			
			<div class="form-input">
		    <label for="msg">Message :</label>
		    <textarea id="msg" name="msg" placeholder="Write your message here .." class="form-control input-lg"></textarea>
			</div>
			
			<br>
   			<input type="submit" name="submit" class="btn btn-primary">
   			<button class="btn btn-danger">Cancel</button>
</form>
<div>
  		

<?php 

	$db=mysqli_connect("localhost","root","","project");

		if(isset($_POST['submit']))
		{
		$subject = $_POST['subject'];
		$msg = $_POST['msg'];
		$emailFrom = $_POST['emailf'];

		$sql="INSERT INTO contact (uname,email,msg) VALUES ('$subject','$emailFrom','$msg')";
		mysqli_query($db,$sql);

		if(mail("najminfaria@gmail.com","$subject","$msg","$emailFrom"))
		{
			echo 
			"<script>alert ('Thanks for contacting us')</script>";;
		}else
		{
			echo "Message have not sent";
		}
			}
?>

</div>
</div>
<br>
<?php include'footer.php';?>
</body>
</html>