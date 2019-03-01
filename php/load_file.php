<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	session_start();
	$db = mysqli_connect("localhost","root","","project");

	if (isset($_POST['submit']))
	{
		$target = "document/".basename($_FILES['uploadpdf']['name']);
		$id = $_POST['id'];
		$uploadfile = $_FILES['uploadpdf']['name'];
		$sql = "INSERT INTO noticedetail (id,filename,path)  VALUES ('$id','$uploadfile','$target')";
		
		mysqli_query($db,$sql);
		if(move_uploaded_file($_FILES ['uploadpdf']['tmp_name'], $target)){

	header('Content-type: application/pdf');
	header('Content-Disposition:inline;filename="'.$target.'"');
	header('Content-Transfer-Encoding: binary');
	header('Accept-Ranges: bytes');
	@readfile($file);}
}
?>
</body>
</html>