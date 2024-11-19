<?php
require 'connectDB.php';
   
$connect1 = new connectDB();
  
require 'connectToDB.php';

  
 
  // Taking all 5 values from the form data(input)
  $removecourse = $_POST['removecourse'];
 
  
$sql = "DELETE FROM `tblcourse` WHERE `name`= '$removecourse'";

$connect1->executeQuery($con,$sql);

header("Location: admin.php?course=removed");
