<?php
require 'navigation.php';
require 'connectToDB.php';

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
<?php
$currentUser = $_SESSION['id'];
$sqlUser = "SELECT * FROM `tbluser` WHERE `id`=$currentUser";
$results = mysqli_query ($con,$sqlUser);

if ($results){
    if(mysqli_num_rows($results)>0){
        while( $row = mysqli_fetch_array($results)){
            //print_r ($row['firstName']);
            ?>
            
            <div class="container">
            <form action ="logout.php" method="post">
            <button style="float: right;" type="submit" name="logout-submit" class="btn btn-default navbar-btn"><span class= "joker elda-user"</span> Logout</button>
            </form>
            </div>
            <div class="container">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder = "<?php echo $row['Email'];?>" readonly>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type = "text" name="pw" class="form-control" id="exampleInputPassword1" value = "<?php echo $row['Password'];?>" readonly>
            </div>
            <div class="form-group">
              <label for="firstname">First Name</label>
              <input type="firstname" name="first_name"class="form-control" id="firstname" value = "<?php echo $row['Firstname'];?>" readonly>
            </div>
            <div class="form-group">
              <label for="lastname">Last Name</label>
              <input type="lastname" name="last_name" class="form-control" id="lastname" value = "<?php echo $row['Lastname'];?>" readonly>
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <input type="address"  name="address" class="form-control" id="address" value = "<?php echo $row['Address'];?>" readonly>
            </div>
            <div class="form-group">
              <label for="phone">phone</label>
              <input type="phone" name="phone" class="form-control" id="phone" value = "<?php echo $row['Phone'];?>" readonly>
            </div>
            <!--<div class="form-group">
              <label for="salary">salary</label>
              <input type="salary" name="salary" class="form-control" id="salary" value = "<?php echo $row['salary'];?>" readonly>
            <div class="form-group">
              <label for="ssn">SSN</label>
              <input type="ssn" name="ssn"class="form-control" id="ssn" value = "<?php echo $row['ssn'];?>" readonly>
            </div>
            </div>-->
            <?php
            
        }
    }
}
    
    // We don't have the password or email info stored in sessions so instead we can get the results from the database.
    //
   // $stmt = $con->prepare("SELECT * FROM 'tbluser' WHERE id = ?");
    // In this case we can use the account ID to get the account info.
   /* $stmt->bind_param('i', $_SESSION['id']);
    $stmt->execute();
    $stmt->bind_result($email, $password,$first_name,$last_name,$address,$phone,$salary,$ssn);
    $stmt->fetch();
    $stmt->close();*/

?>
    
    
    
    
    
  </body>