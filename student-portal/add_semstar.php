<?php
require 'connectDB.php';
   
$connect1 = new connectDB();
  
require 'connectToDB.php';

  
 
  // Taking all 5 values from the form data(input)
  $semester = $_POST['semester'];
 
  
  $sql = "INSERT INTO tblsemester (name) 
VALUES ('$semester')";

$connect1->executeQuery($con,$sql);

header("Location: admin.php?semester=added");
?>