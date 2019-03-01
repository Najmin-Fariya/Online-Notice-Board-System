<?php include'profileheader.php';?>


<!DOCTYPE html>
<html>
<title>Online Notice Board</title>
<head> 
</head>
<style type="text/css">
	
</style>

<body>
							<!-- Headline -->
	<h2 style="text-align: center;color: maroon;font-style: italic;font-weight: bold;">Job Informations</h2>

								<!-- Table -->
	<section class="container" style="max-width: 100%; border: 2px solid #0066cc;border-radius: 5px;">
    			<script type="text/javascript">$(document).ready(function(){
				   	 $('#myTable').DataTable();
							});
			
				</script>
        <table border="5" cellpadding="0" class="table table-bordered table-hover" cellspacing="0" id="myTable" class="display" width="100%">
			<thead>
				<tr>
					<th>Notice Title </th>
					<th>View</th>
					<th>Date</th>
				 </tr>
			</thead>
				<tbody>
						<?php
						$db = mysqli_connect("localhost","root","","project");
						$sql="SELECT file,date FROM jobinfo ";
						 $result_set=mysqli_query($db,$sql);
						 while($row=mysqli_fetch_array($result_set))
						 {
		  				?>
		        	<tr>
				        <td><?php echo $row['file'] ?></td>
				        <td><a href="document/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
				        <td><?php echo $row['date'] ?></td>
			        </tr>
		      		 <?php } ?>
		      	</tbody>
		</table>
	</section>

	
		<br><br>
		<?php include_once'footer.php';?>
</body>
</html>