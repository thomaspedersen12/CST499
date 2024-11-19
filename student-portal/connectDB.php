<?php

class connectDB {
  
  function executeSelectQuery($con,$sql){
    
    $result = mysqli_query($con, $sql); 
    echo "<br>";
    echo "<table border='1'>";
    while ($row = mysqli_fetch_assoc($result)) { 
        echo "<tr>";
        foreach ($row as $field => $value) { 
            echo "<td>" . $value . "</td>"; 
        }
        echo "</tr>";
    }
    echo "</table>";
    
  }
  
  function executeQuery($con,$sql){
    
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    if ($con->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
    
    $con->close();

    
  }
  
  
}

/*--$serverName = "localhost";
$userName= "root";
$password = "";
$dbName="cst310";

//create Connection

$con = mysqli_connect($serverName,$userName,$password,$dbName);

$sql = "SELECT id, email, password, firstName, lastName, address, phone, salary, ssn FROM tbluser";

$connect1 = new connectDB();

$connect1->executeSelectQuery($con,$sql);

$sql2 = "INSERT INTO tbluser (id, email, password, firstName, lastName, address, phone, salary, ssn)
VALUES (3, 'tpedersen12@icloud.com', 'password2','thomas','joker','123 edal way',999999,0,0)";

$connect1->executeQuery($con,$sql2);*/


?>
