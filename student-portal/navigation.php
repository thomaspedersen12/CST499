<?php
    session_start();
    require 'connectToDB.php';
?>
<!DOCTYPE html>
<html lang="en">
<nav class="navbar navbar-default">
        <div class= "container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Student Portal</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php"><span class= "joker elda-home"></span> Home</a></li>
                    <li><a href="Registration.php"><span class= "joker elda-ok"</span> Register</a></li>
                   
                    
                    <?php
      
                        if (isset($_SESSION['id'])){
                    echo'<li><a href="schedule.php"><span class= "joker elda-list-alt"</span> Schedule</a></li>';
                        }
                    
                    ?>
                    
                    <?php
                    if (isset($_SESSION['id'])){
                        $currentUser = $_SESSION['id'];
                        $sqlUser = "SELECT `Admin` FROM `tbluser` WHERE `id`=$currentUser";
                        $results = mysqli_query ($con,$sqlUser);
                        
                        
                        while ($row = mysqli_fetch_assoc($results))
                            {
                               //echo $row['Admin'];
                                if ($row['Admin'] == 1){
                                            
                                    echo' <li><a href="admin.php"><span class= "joker elda-star"</span> Admin</a></li>';
                                }   
                                
                            } }   
                        ?>
                    
                        
                    
                </ul>
            </div>
            <div>
                <ul class="nav navbar-nav navbar-right">
                    <?php
      
                        if (isset($_SESSION['id'])){
                            echo'<li><a href="profile.php"><span class= "joker elda-user"</span> Profile</a></li>';
                          //echo '<form action ="logout.php" method="post">
                                //<button type="submit" name="logout-submit" class="btn btn-default navbar-btn"><span class= "joker elda-user"</span> Logout</button>
                                //</form>';
                          
                        }
                        else{
                          echo'<li><a href="Login.php"><span class= "joker elda-user"</span> Login</a></li>';
                        }
                        ?>
                    <!--<li><a href="Login.php"><span class= "joker elda-user"</span> Login</a></li>-->
                </ul>
            </div>
        </div>
    </nav>

</html>