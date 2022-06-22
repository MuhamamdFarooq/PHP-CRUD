<?php

  include 'config.php';

  $no = $_GET['upid'];

  $sql = "SELECT * FROM std";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);

 $name =  $row['name'];
 $dep = $row['dept'];
 $adr = $row['address'];

                               
    

  if(isset($_POST['submit']))
  {

    
    $rno = $_POST['Rolno'];
    $name = $_POST['name'];
    $dep = $_POST['dep'];
    $adr = $_POST['address'];

    $sql = "UPDATE std SET rollno = '$no', name = '$name', dept = '$dep', address = '$adr' WHERE rollno = '$no'" ;

    $res = mysqli_query($conn, $sql);
   
   if ($res) 
   {
      header('location: display.php');
 }
 else
 {
  die(mysqli_error($conn));

 }
}
  ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
   
   <div class="container">
    <center><h3 class="text-primary">Update Student</h3></center>

    <form method="POST">

  <div class="mb-3">
    <label class="form-label">Roll No</label>
    <input type="text"  name="Rolno" class="form-control" placeholder="enter your rollno" value="<?php echo $no;?>">
  </div>


  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" name="name" class="form-control" placeholder="enter your name" value="<?php echo $name;?>" >
  </div>

  <div class="mb-3">
    <label class="form-label">Departement</label>
    <input type="text" name="dep" class="form-control" placeholder="enter your departement" value="<?php echo $dep;?>"  >
  </div>

  <div class="mb-3">
    <label class="form-label">address</label>
    <input type="text" name="address" class="form-control" placeholder="enter your address" value="<?php echo $adr;?>" >
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
     
   </div>
   
  </body>
</html>