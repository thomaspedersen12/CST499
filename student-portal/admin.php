<?php
require 'connectToDB.php';

$selectSemesters = "SELECT * FROM `tblsemester`";
$semesterResult = mysqli_query ($con,$selectSemesters);
$semesterResult2 = mysqli_query ($con,$selectSemesters);

$selectCourse = "SELECT * FROM `tblcourse`";
$courseResult = mysqli_query ($con,$selectCourse);

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

<div class="container">
      <h3>Create Semester</h3>
    <form class="form-inline" action="add_semester.php" method="post">
    
    <div class="form-group">
      <label for="semester">Semester</label>
      <input type="semester" name="semester"class="form-control" id="semester" placeholder="Ex. Winter 2024">
      <br>
      <button type="submit" class="btn btn-primary">Add</button>
    </div>
    </form>
    
    </div>

<div class="container">
      <h3>Delete Semester</h3>
    <form class="form-inline" action="removesemester.php" method="post">
    
    <div class="form-group">
      <select name ="removesemester">
        <?php while($row1 = mysqli_fetch_array($semesterResult)):; ?>
        <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>
        <?php endwhile;?>
      </select>
      <br><br>
       <button type="submit" class="btn btn-primary">Delete</button>
    </div>
    </form>
    
     </div>


<div class="container">
      <h3>Add Course</h3>
    <form class="form-inline" action="add_course.php" method="post">
    
    <div class="form-group">
      <label for="course">Course Name</label>
      <input type="course" name="course"class="form-control" id="course" placeholder="Ex. Econ 489">
    </div>
    
    <div class="form-group">
      <label for="numseats">Number of Seats</label>
      <input type="numseats" name="numseats"class="numseats" id="numseats" placeholder="Number of Seats">
    </div>
    
    <div class="form-group">
      <label for="numseats">Semester</label>
      <select name ="semester">
        <?php while($row1 = mysqli_fetch_array($semesterResult2)):; ?>
        <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>
        <?php endwhile;?>
      </select>
    </div>
    <br><br>
    <button type="submit" class="btn btn-primary">Add</button>
    
    
    </form>
    
    </div>

<div class="container">
      <h3>Remove Course</h3>
    <form class="form-inline" action="removecourse.php" method="post">
    
    <div class="form-group">
      <select name ="removecourse">
        <?php while($row1 = mysqli_fetch_array($courseResult)):; ?>
        <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>
        <?php endwhile;?>
      </select><br><br>
       <button type="submit" class="btn btn-primary">Delete</button>
    </div>
    
     
 </form>
    
    </div>


  </body>
</html>