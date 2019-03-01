<?php include'header.php';?>

<?php include 'facultyprocess.php';
 if (isset($_GET['edit'])){
	 $id = $_GET['edit'];
	 $edit = true;
	 $rec = mysqli_query($db,"SELECT * FROM faculty WHERE id = $id");
	 $record = mysqli_fetch_array($rec);
	 $id = $record['id'];
	 $pname = $record['person_name'];
	$designation = $record['designation'];
	
 }
?>

<!DOCTYPE html>
<html>
<head> 
	<title>Faculty</title>
	<meta http-equiv ="Content-Type" content="text/html; charset=utf-8  " />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	
	<link rel="stylesheet" type="text/css" href="php/table.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/dataTables.min.js"></script>

</head>
<style type="text/css">
	body{
		background-color: #e6e6ff;
		font-size: 16px;
	}
</style>
<body>
<div class="container" >
	<form action="faculty.php" method="post" enctype="multipart/form-data" >
		<input type="hidden" name="id" value="<?php echo $id ?>">
		<div class="form-input">
			<label>Person Name:</label>
			<input type="text" name="pname" value="<?php echo $pname?>" class="form-control" >
	    </div>
		<div class="form-input">
			<label>Designation:</label>
			<textarea type="text" name="designation" value="<?php echo $designation ?>" class="form-control" rows="5" ></textarea>
		</div>
		<div class="form-input">
			<label>Picture:</label>
			<input type="file" name="image" value="<?php echo $image ?>"  class="form-control"  >
   		</div>
		<br>
		<div class="form-input">
			<?php if ($edit == false):?>
			<button type="submit" name="add" class="btn btn-success">ADD</button>
			<button type="submit"  class="btn btn-danger">CANCEL</button><br><br>
			<?php else:?>
				<button type="submit" name="update" class="btn btn-info">Update</button>
				<button type="submit"  class="btn btn-danger">CANCEL</button>
			<?php endif ?>
		</div>
	</form>
</div>
<div>

	<!-- data table -->
	<section class="container" style="max-width: 100%; border-radius: 5px;border: 2px solid #0099cc;">
		<script type="text/javascript">$(document).ready(function(){
				   	 $('#myTable').DataTable();
							});
			
				</script>
        <table border="1" cellpadding="0" class="table table-bordered table-hover" cellspacing="0" id="myTable" class="display" width="100%">
			<thead>
				<tr>
					<th>SL NO</th>
					<th>Person name</th>
					<th>Designation</th>
					<th>Picture</th>
					<th>Action</th>
				 </tr>
			</thead>
				<tbody>
				<?php while ($row = mysqli_fetch_array($result)) { ?>
					<tr>
						<td><?php echo $row['id'];?></td>
						<td><?php echo $row['person_name'];?></td>
						<td><?php echo $row['designation'];?></td>
						
						<td><?php echo "<img height = '150px' width = '180px' text-align='right' src='images/".$row['picture']."'>";?></td>
<td ><a class="btn btn-primary" href="faculty.php?edit=<?php echo $row['id'];?>">EDIT</a><br><br>
						<a class="btn btn-danger" href="facultyprocess.php?del=<?php echo $row['id'];?>">DELETE</a></td>
					</tr>
				<?php }?>
				</tbody>
		</table>
</div></section>
<br>

<?php include 'footer.php';?>
</body>
</html>