<?php

  include 'config.php';
  if(isset($_GET['delid']))
  {

     $no = $_GET['delid'];

    $sql ="DELETE FROM std where rollno = $no";
    $res= mysqli_query($conn, $sql);

  if($res){

header('location:display.php');
  }else
  {

    die(mysqli_error($conn));
  }
}

  ?>

  