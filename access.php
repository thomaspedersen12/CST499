<?php

if(isset($_POST['login-submit'])){
    
    require 'connectToDB.php';
    
    $userid = $_POST['userid'];
    $password = $_POST['pwd'];

    if (empty($userid) || empty($password)) {
        header("Location: index.php?error=emptyinput");
        exit();
    }
    else {
        $sql = "SELECT id, email, password FROM tbluser WHERE email=?";
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt,$sql)){
           header("Location: index.php?error=sqlerror");
           exit(); 
        }
        else{
            
           mysqli_stmt_bind_param($stmt,"s",$userid);
           mysqli_stmt_execute($stmt);
           $results = mysqli_stmt_get_result($stmt);
          
           if ($row = mysqli_fetch_assoc($results)){
            
                if(strcmp($password,$row['password'])!==0){
                    header("Location: index.php?error=wrongpassword");
                    exit(); 
                }
                else{
                    session_start();
                    $_SESSION['id']=$row['id'];
                    
                    header("Location: index.php?login=success");
                    exit();
                }
           }
           else{
            header("Location: index.php?error=nouser");
            exit(); 
           }
        }   
}
}
else{
    header("Location: index.php?error=failed");
    exit();
}
?>
