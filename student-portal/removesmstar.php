<?php
require 'connectDB.php';
   
$connect1 = new connectDB();
  
require 'connectToDB.php';

  
 
  // Taking all 5 values from the form data(input)
  $removesemester = $_POST['removesemester'];
 
  
$sql = "DELETE FROM `tblsemester` WHERE `name`= '$removesemester'";

$connect1->executeQuery($con,$sql);

header("Location: admin.php?semester=removed");
?>