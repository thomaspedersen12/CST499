<?php

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registration</title>
    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
      
  </head>
  <body>
    
<?php require 'navigation.php';
?>
   
    <div class="container">
      <h3>Register</h3>
    <form action="register.php" method="post">
      <!--<div class="form-group">
      <label for="ID">ID</label>-->
      <!--<input type="id" name="email" class="form-control" id="exampleId" placeholder="Id">
    <!--</div>-->
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="pw" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
      <label for="firstname">First Name</label>
      <input type="firstname" name="first_name"class="form-control" id="firstname" placeholder="Firstname">
    </div>
    <div class="form-group">
      <label for="lastname">Last Name</label>
      <input type="lastname" name="last_name" class="form-control" id="lastname" placeholder="lastname">
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <input type="address"  name="address" class="form-control" id="address" placeholder="address">
    </div>
    <div class="form-group">
      <label for="phone">phone</label>
      <input type="phone" name="phone" class="form-control" id="phone" placeholder="phone">
    </div>
    <!--<div class="form-group">
      <label for="salary">salary</label>
      <input type="salary" name="salary" class="form-control" id="salary" placeholder="salary">
    </div>
    <div class="form-group">
      <label for="ssn">SSN</label>
      <input type="ssn" name="ssn"class="form-control" id="ssn" placeholder="ssn">
    </div>-->
  
    
    <button type="submit" value="submit" class="btn btn-primary">Register</button>
    </form>
    <br>
    <!--<form>
    <button type="submit" class="btn btn-primary">Return Data</button>
    </form>-->
    </div>
  </body>
  
</html>