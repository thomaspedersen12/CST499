<?php
require 'connectDB.php';
   
$connect1 = new connectDB();
  
require 'connectToDB.php';

  
  

$courseID = $_POST['removecourse'];



$sql = "DELETE FROM `tblschedule` WHERE `course_name`= '$courseID'";

$connect1->executeQuery($con,$sql);

header("Location: schedule.php?unregister=success");
?>