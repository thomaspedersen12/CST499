<?php
require 'connectToDB.php';

$selectSemesters = "SELECT * FROM `tblsemester`";
$semesterResult = mysqli_query ($con,$selectSemesters);

$selectCourse = "SELECT * FROM `tblcourse` WHERE `semesterID`=14";
$courseResult = mysqli_query ($con,$selectCourse);
;


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>
    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
      
  </head>
  <body>
    
<?php require 'navigation.php';?>
<?php
if (isset($_SESSION['id'])){
  $currentUser = $_SESSION['id'];
  
  $selectCourse2 = "SELECT * FROM `tblschedule` WHERE `userID` =$currentUser";
  $courseResult2 = mysqli_query ($con,$selectCourse2);
  
  $selectCourse3 = "SELECT * FROM `tblschedule` WHERE `userID` =$currentUser";
  $courseResult3 = mysqli_query ($con,$selectCourse3);
  }
?>

<div class="container">
    <form  action="course_register.php" method="post">
     <div class="form-group">
      <input type="hidden" name="userid" class="form-control" id="userid" value= "<?php echo $currentUser;?>" placeholder = "<?php echo $currentUser;?>" readonly>
     <h3>Select Semester</h3>
     </div>
     <div class="form-group">
      <select name ="activesemester">
        <?php while($row1 = mysqli_fetch_array($semesterResult)):; ?>
        <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>
        
        <?php
        //$id = $_POST[$row1[0]];
        
        endwhile;?>
      </select>
    
    </div>
     <h3>Register for Course</h3>
    <div class="form-group">
      
      <select name ="course">
       
        <?php
        
        while($row1 = mysqli_fetch_array($courseResult)):; ?>
        <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>
        
        
        <?php endwhile;?>
        
      </select>
    </div>
    
    <button type="submit" class="btn btn-primary">Register</button>
    
    
    </form>
    
    </div>

<div class="container">
      <h3>Unregister for Course</h3>
    <form class="form-inline" action="course__unregister.php" method="post">
    
    <div class="form-group">
      <select name ="removecourse">
        <?php while($row1 = mysqli_fetch_array($courseResult2)):; ?>
        <option value="<?php echo $row1[2];?>"><?php echo $row1[2];?></option>
        <?php endwhile;?>
      </select><br><br>
       <button type="submit" class="btn btn-primary">Unregister</button>
    </div>
    
     
 </form>
    
    </div>
<br>
<div class="container">
 
 <h3>Student Schedule</h3>

<div class="form-group">
      
      
       
        <?php
        
        while($row1 = mysqli_fetch_array($courseResult3)):; ?>
        <input type="schedule" name="schedule" class="form-control" id="userid" value= "<?php echo $row1[2];?>" placeholder = "<?php echo $row1[2];?>" readonly>
        
        
        <?php endwhile;?>
        
      
    </div>
</div>

  </body>
</html>