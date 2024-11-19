<?php
require 'connectDB.php';
   
$connect1 = new connectDB();
  
require 'connectToDB.php';

  
 
  // Taking all 5 values from the form data(input)
  $name = $_POST['course'];
  $noofseats = $_POST['numseats'];
  $semester = $_POST['semester'];
 
  
  $sql = "INSERT INTO tblcourse (name, semesterID, noofSeats) 
VALUES ('$name','$semester','$noofseats')";

$connect1->executeQuery($con,$sql);

header("Location: admin.php?course=added");
?>