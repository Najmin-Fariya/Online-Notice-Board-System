<?php include'profileheader.php';?>


<!DOCTYPE html>
<html>
<title>Online Notice Board</title>
<head> 
</head>
<style type="text/css">
	
</style>

<body>
									<!-- headline -->
	<h2 style="text-align: center;color: maroon;font-style: italic;font-weight: bold;">Exam Routine</h2>
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
						include_once 'dbconfig.php';
						?>
						<?php
						$sql="SELECT (file) FROM noticedetail ";
						 $result_set=mysql_query($sql);
						 while($row=mysql_fetch_array($result_set))
						 {
		  				?>
		        	<tr>
				        <td><?php echo $row['file'] ?></td>
				        <td><a href="document/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
				        <td></td>
			        </tr>
		      		 <?php } ?>
		      	</tbody>
		</table>
	</section>

	
		<br><br>
		<?php include_once'footer.php';?>
</body>
</html>