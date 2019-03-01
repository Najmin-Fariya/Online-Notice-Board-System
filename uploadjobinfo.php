<?php include_once'header.php';?>
			<!-- dalete -->
<?php
 
    $db = mysqli_connect("localhost","root","","project");
    if(isset($_GET['del'])){
		$id = $_GET['del'];
		mysqli_query($db,"DELETE FROM jobinfo Where id =$id");
	header('location: uploadclassroutine.php');
	}
?>

<?php

include_once 'php/dbconfig.php';
if(isset($_POST['btn-upload']))
{    
  $date = $_POST['date'];

 $file = $_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name']; 
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="document/";
 
 // new file size in KB
 $new_size = $file_size/1024;  
 
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  	$sql="INSERT INTO jobinfo(file,type,size,date) VALUES('$final_file','$file_type','$new_size','$date')";
	mysqli_query($db,$sql);
  ?>
  <script>
  alert('successfully uploaded');
        window.location.href='uploadjobinfo.php?success';
        // window.location.href='index2.php?success';
        </script>
  <?php
 }
 else
 {
  ?>
  <script>
  alert('error while uploading file');
    window.location.href='uploadjobinfo.php?success';
        // window.location.href='index2.php?fail';
        </script>
  <?php
 }
}
?>

<!DOCTYPE html>
<html>
	<style>
	body{
		background-color: #e6e6ff;
		font-size: 16px;
	}
	</style>
<body>
		
 		
<div class="container" style="max-width:700px;margin:0px auto;">
	<h2>  Upload job information here</h2>
	<form action="" method="post" enctype="multipart/form-data">
		
		<label>Filename:</label>
		<input type="file" name="file" class="form-control input-lg" />
		<br>
		<label>Date:</label>
		<input type="date" name="date" class="form-control input-lg" />
		<br>
		<button type="submit" name="btn-upload" class="btn btn-success">UPLOAD</button>
		<button class="btn btn-danger">CANCEL</button>
	</form>
<br><br>


<!-- 
    <?php
 if(isset($_GET['success']))
 {
  ?>
        <label>File Uploaded Successfully...  <a href="view.php">click here to view file.</a></label>
    <?php
 }
 else if(isset($_GET['fail']))
 {
  ?>
        <label>Problem While File Uploading !</label>
       
        <?php
 }
 else
 {
  ?>
     
        <?php
 }
 ?>
</div> -->
			
			</div>

			<!-- table -->

			<section class="container" style="max-width: 100%; border: 2px solid #00ace6;border-radius: 5px;">
	<script type="text/javascript">$(document).ready(function(){
				   	 $('#myTable').DataTable();
							});
			
				</script>
        <table border="1" cellpadding="0" class="table table-bordered table-hover" cellspacing="0" id="myTable" class="display" width="100%">
			
				<thead>
				<tr>
					<th>Date</th>
					<th>Notice Title </th>
					<th>View</th>
					
					<th>Action</th>
					
				 </tr>
			</thead>
				<tbody>
				
				<?php
				$db = mysqli_connect("localhost","root","","project");
				$sql="SELECT id,file,date FROM jobinfo";
				 

				 $result_set=mysqli_query($db,$sql);

				 
					 while($row=mysqli_fetch_array($result_set))
				 {
  				?>
		        <tr>
		        <td><?php echo $row['date'] ?></td>
		        <td><?php echo $row['file'] ?></td>
		        
		        <td><button class="btn"><a  href="document/<?php echo $row['file'] ?>" target="_blank">view file</a></button></td>

		        <td><a class="btn btn-danger" href="uploadjobifo.php?del=<?php echo $row['id'];?>">DELETE</a></td>

		        </tr>
		        <?php
					 }
					 ?>
	</tbody>
</div>
</table>
</section>
		<br>
			<br>
 <?php include'footer.php';?>

	
	
	</body>
	</html>
