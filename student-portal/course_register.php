<?php
require 'connectDB.php';
   
$connect1 = new connectDB();
  
require 'connectToDB.php';

  
  
$currentUser =  $_POST['userid'];
$courseID = $_POST['course'];
$semesterID =  $_POST['activesemester'];



$sql = "INSERT INTO `tblschedule`(`userID`,`semesterID`,`course_name`) VALUES ($currentUser,$semesterID,'$courseID')";

$connect1->executeQuery($con,$sql);

header("Location: schedule.php?register=success");
?>