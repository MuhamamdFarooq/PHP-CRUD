<?php

 if(isset($_POST['submit']))
  {
    $rno = $_POST['Rolno'];
    $name = $_POST['name'];
    $dep = $_POST['dep'];
    $adr = $_POST['address'];

    $sql = "INSERT INTO std (rollno,name,dept,address)
   VALUES ('$rno','$name',' $dep','$adr ')";
   if (mysqli_query($conn, $sql)) {

    header('location:display.php');

   } else {
    echo "Error: " . $sql . "
" . mysqli_error($conn);
   }
   mysqli_close($conn);
}

?>