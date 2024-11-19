<?php

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
      <h3>Please Login</h3>
    <form action ="access.php" method="post">
    <div  class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name= "userid" class="form-control" id="exampleInputEmail1" placeholder="Email">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name= "pwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    
    <button type="submit" name="login-submit" class="btn btn-primary">Login</button>
  </form>
    <br>
    <p>Not Registered? Cick here to <a href= "Registration.php">sign up</a></p>
    
    <!--<form action ="logout.php" method="post">
    <button type="submit" name="logout-submit" class="btn btn-primary">Logout</button>
  </form>-->
    </div>
    
  </body>
</html>