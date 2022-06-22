<?php 
include 'config.php';
 ?>


<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		
body{

	background-image: url("std.png");
	  background-repeat: no-repeat;
	   background-size:cover;
}
	</style>


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>display </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
	<br>
<div class="container">

	<center><h3 class="text-primary">All Admitted Students</h3></center>

	<button class="btn btn-primary"> <a href="student.php " class="text-light">Add student</a></button>
<br><br>


	<table class="table">
  <thead>
    <tr>
      <th scope="col">Roll No</th>
      <th scope="col">Name</th>
      <th scope="col">Department</th>
      <th scope="col">Address</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
   
  <?php 

$sql = "SELECT * FROM std";
$res = mysqli_query($conn, $sql);
if ($res) {
    while ($row = mysqli_fetch_assoc($res)) {
        
       							echo '<tr>';
       							echo '<td>'.$row['rollno'].'</td>';
                                echo '<td>'.$row['name'].'</td>';
                                echo '<td>'.$row['dept'].'</td>';
                                echo '<td>'.$row['address'].'</td>';
                                echo '<td width=250>';
                               
                                echo ' ';
                                echo '<a class="btn btn-success" href="update.php?upid= '.$row['rollno'].'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="delete.php?delid='.$row['rollno'].'">Delete</a>';
                                echo '</td>';
                                echo '</tr>';
        }
     
    
}
else {
    echo "ERROR: Could not able to execute $sql. "
                                .mysqli_error($conn);
}
mysqli_close($conn);
?>


   
  </tbody>
</table>
	

</div>

</body>
</html>