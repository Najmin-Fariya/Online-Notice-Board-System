<?php include_once'header.php';?>
<?php include'adminlogin.php';?>
<?php include'php/dbconfig.php';?>
<?php 


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<section class="container">
	<script type="text/javascript">$(document).ready(function(){
				   	 $('#myTable').DataTable();
							});
			
				</script>
        <table border="1" cellpadding="0" class="table table-bordered table-hover" cellspacing="0" id="myTable" class="display" width="100%">
			
				<thead>
				<tr>
					<th>Date</th>
					<th>Notice Title </th>
					<th>Latest Notices</th>
					<th>Action</th>
					
				 </tr>
			</thead>
				<tbody>
				
				<?php
				$db = mysqli_connect('localhost', 'root', '', 'project');
				$sql="SELECT * FROM visitornotice";

					$result_set=mysql_query($sql); 
					while($row=mysql_fetch_array($result_set))
				 {
  				?>
		        <tr>
			        <td><?php echo $row['date'] ?></td>
			        <td><?php echo $row['title'] ?></td>
			        <td><?php echo $row['about'] ?></td>
			        <td><a class="btn btn-success" href="visitornotice.php?del=<?php echo $row['id'];?>">Upload</a>
			        	<a class="btn btn-danger" href="visitornotice.php?del=<?php echo $row['id'];?>">DELETE</a>

			        </td>

		        </tr>
		        <?php
					 }
					 ?>
					</tbody>
				</table>
			</section>
</body>
</html>
	