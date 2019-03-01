<?php include'header.php';?>
<?php include 'speechProcess2.php';

 if (isset($_GET['edit'])){
	 $id = $_GET['edit'];
	 $edit2 = true;
	 $rec = mysqli_query($db,"SELECT * FROM speech2 WHERE id = $id");
	 $record = mysqli_fetch_array($rec);
	 $id = $record['id'];
	 $description = $record['description'];

 }

?>

<!DOCTYPE html>
<html>
<head> 
		<title>Speeh</title>
		<meta http-equiv ="Content-Type" content="text/html; charset=utf-8  " />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<style type="text/css">
	body{
	
		background-color: #e6e6ff;
		font-size: 16px;
	}
</style>
<body>
<div class="container">
	<form action="" method="POST" enctype="multipart/form-data" >
<input type="hidden" name="id" value="<?php echo $id ?>">
		<div class="form-input">
			<label >Upload Image:</label>
			<input type="file" name="image" value="<?php echo $image ?>" class="form-control" >
		</div>
		<div class="form-input">
			<label >Description:</label>
			<textarea type="text" name="description" value="<?php echo $description ?>" class="form-control" ></textarea>

			<div class="form-input">
			<?php if ($edit2 == false):?>
			<button type="submit" name="add" class="btn btn-success">ADD</button>
			<button class="btn btn-danger">CANCEL</button>
			<?php else:?>
				<button type="submit" name="update" class="btn btn-primary">Update</button>
			<?php endif ?>
</div>
   			 <table class="table table-bordered">
			<thead>
				<tr>
					<th>Picture</th>
					<th>Description</th>
					<th>Action</th>
				 </tr>
			</thead>
				<tbody>
				<?php while ($row5 = mysqli_fetch_array($result4)) { ?>
					<tr>
						<td><?php echo "<img height = '200px' width = '200px' text-align='right' src='design/".$row5['image']."'>";?></td>
						<td><?php echo $row5['description'];?></td>

						<td ><a class="btn btn-info" href="speech2.php?edit=<?php echo $row5['id'];?>">EDIT</a>
						<a class="btn btn-danger" href="speechProcess2.php?del=<?php echo $row5['id'];?>">DELETE</a></td>
					</tr>
				<?php }?>
				</tbody>
		</table>
   			</div>
		</div>
	</form>
</div>
<br>
<?php include'footer.php';?>
</body>
</html>

