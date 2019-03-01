<?php include_once'header.php';?>
<?php include'adminlogin.php';?>
<?php include'php/noticetable .php';?>

<?php
	$db = mysqli_connect("localhost","root","","project");
		// edit
 if (isset($_GET['edit'])){
	 $id = $_GET['edit'];
	 $edit_state = true;
	 $rec = mysqli_query($db,"SELECT * FROM notice WHERE id = $id");
	 $record = mysqli_fetch_array($rec);
	 $id = $record['id'];
	 $title = $record['title'];
	 $title = $record['about'];
	 $date = $record['date'];
 }
?>

<!DOCTYPE html>
<html>
<title></title>
<head></head>
	<style>
	body{
		background-color: #e6e6ff;
		
		font-size: 16px;
	}
	</style>

<body>
			<?php
			    $db = mysqli_connect("localhost","root","","project");
			    $sql = "SELECT * FROM `notice`ORDER BY id DESC";
			    $result = mysqli_query($db,$sql);

			    if(isset($_GET['del'])){
					$id = $_GET['del'];
				mysqli_query($db,"DELETE FROM notice Where id =$id");
				header('location: adminhome.php');
			}
			?>
		<h1>Upload Visitors Notices</h1>
			<div class="container" style="">
		
			<form action="" method="POST"  >
			<input type="hidden" name="id">

			<label >Date</label>
			<input type="date" name="date"  class="form-control" >
		
			<label >Notice Title:</label>
			<input type="text" name="title"  class="form-control" >

			<label >Write about your notice:</label>
			<textarea type="text" name="about"  class="form-control" ></textarea>
			<?php if ($edit_state == false):?>		
			<input type="submit" name="submit" class="btn btn-primary">
			<button class="btn btn-danger">CANCEL</button>	
			<?php else:?>
			<button type="submit" name="update" class="btn btn-primary">Update</button>
			<?php endif ?>
			

			</form>
		</div>

<div class="container" style="font-size: 18px;">
	<h1><h1>Visitors Notices Here</h1>
     	<section class="container" style="max-width: 100%; border-radius: 5px;border: 2px solid #0099cc;">
			<script type="text/javascript">$(document).ready(function(){
				   	 $('#myTable').DataTable();
							});
			</script>
        
        	<table border="1" cellpadding="0" class="table table-bordered table-hover" cellspacing="0" id="myTable" class="display" width="100%">
			<thead>
				<tr>
					<th>Sl no</th>
					<th>Notice title</th>
					<th>About</th>
					<th>Action</th>
					
				 </tr>
			</thead>
				<tbody>

				<?php 
				while ($row = mysqli_fetch_array($result)) { ?>
					<tr>
						<td><?php echo $row['id'];?></td>
						<td><?php echo $row['title'];?></td>
						<td ><?php echo $row['about'];?></td>
						<td><a class="btn btn-info" href="adminhome.php?edit=<?php echo $row['id'];?>">EDIT</a>
						<a class="btn btn-danger" href="adminhome.php?del=<?php echo $row['id'];?>">DELETE</a>

						</td>
					</tr>
				<?php }?>
				</tbody>
			</table></section>
		</div>
		<br><br>


						<?php include'allnotice.php';?>

</body>
</html>