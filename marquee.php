<?php include'header.php';?>
<?php include'marqueeProcess.php';

 if (isset($_GET['edit'])){
	 $id = $_GET['edit'];
	 $edits = true;
	 $rec = mysqli_query($db,"SELECT * FROM marquee WHERE id = $id");
	 $record = mysqli_fetch_array($rec);
	 $id = $record['id'];
	 $noticetitle = $record['marquee'];
	
 }

?>

<!DOCTYPE html>
<html>
<head> 

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
body{
	font-family: Adamina;
	background-color: #e6e6ff;
}
table{
		border-radius: 5px solid #003cb3;
		border:2px solid #003cb3; 
		font-size: 20px;
}
form{
		font-size: 20px;

}
</style>
<body>
 	<div class="container">
 		<div>
 		<form class="form-input"  action="" method="POST">
 			
 			<input type="hidden" name="id" value="<?php echo $id ;?>">
			
				<label for="text">Upload recent news</label>
				<input type="text" name="marquee" class="form-control input-lg" >
			<div class="form-input">
				
			<?php if ($edits == false):?>
			<button type="submit" name="add" class="btn btn-primary">Insert</button>
			<button class="btn btn-danger">Cancel</button>
			<br><br>
			<?php else:?>
				<button type="submit" name="update" class="btn btn-primary">Update</button>
			<?php endif ?>
			</div>

 			</form>
 			<br><br>

 			<table class="table table-bordered table-hover" style="border: 2px solid #003cb3; ">
 			<thead>
				<tr>
					<th>Update Notice</th>
					<th>Action</th>
					
				 </tr>
			</thead>
				<tbody>
					<?php while ($row2 = mysqli_fetch_array($mresult)) { ?>
				<tr>
					<td>
					<?php echo $row2['marquee'];?></td>
						<td><a class="btn btn-info" href="marquee.php?edit=<?php echo $row2['id'];?>">EDIT</a>
						<a class="btn btn-danger" href="marqueeProcess.php?del=<?php echo $row2['id'];?>">DELETE</a>
					</td>
					</tr>
				<?php }?>
	</tbody>
		</table>

	</div>

	<br>
	<?php include'footer.php';?>
</body>
</html>