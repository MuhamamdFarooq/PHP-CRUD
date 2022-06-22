<?php

  include 'config.php';
  include 'insert.php';
 
  ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body >
   
   <div class="container">

    <center><h3 class="text-primary">Add Student</h3></center>

    <form method="POST">

  <div class="mb-3">
    <label class="form-label">Roll No</label>
    <input type="text"  name="Rolno" class="form-control" placeholder="enter your rollno" >
  </div>


  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" name="name" class="form-control" placeholder="enter your name" >
  </div>

  <div class="mb-3">
    <label class="form-label">Departement</label>
    <input type="text" name="dep" class="form-control" placeholder="enter your departement"  >
  </div>

  <div class="mb-3">
    <label class="form-label">address</label>
    <input type="text" name="address" class="form-control" placeholder="enter your address" >
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
     
   </div>
   
  </body>
</html>