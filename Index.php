<?php

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Employee Portal</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <?php require 'navigation.php';?>
    
    
    
    <main role="main" class="container">
      <div class="mybody">
      <div class="status">
      <?php
      if (isset($_SESSION['id'])){
        echo '<p>You are logged in, click here to <a href= "Logout.php"> sign out </p>';
        
      }
      else{
        echo'<p>You are logged out, cick here to <a href= "Login.php"> sign in</p>';
      }
      ?>
      </div>
      <div class="jumbotron">
      <h1>Welcome to the Student Portal</h1>
    <p>This page provides instructions on how to register for courses at Lions University. <br> This website is for registering for courses here at YOUR university.</p>
      <p><a class="btn btn-primary btn-lg" href="login.php" role="button">Login</a></p>
      </div>
        
      </div>

    </main>
   
  </body>
  
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>