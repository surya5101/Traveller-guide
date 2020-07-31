<?php
$dbname="register";
$conn = new mysqli("localhost","root","",$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
session_start();

    $_SESSION['admin']=$_POST["usname"];
    $password=$_POST["pass"];
    

    $check = "SELECT aname, apass FROM admin where aname = '$_SESSION[admin]' && apass ='$password'";
    $result =  $conn->query($check);
    if( $result !== FALSE){
        if ($result->num_rows > 0) {
        
            while($row = $result->fetch_assoc()) {
               
                header("Location:privilege.php"); 
                
            }
        }
        else{
            header("Location:admin.php?msg='Invalid user!'"); 
        }
    }

    else 
        {
           
        
                 echo "Error: " .  "<br>" . $conn->error;     
        }

$conn->close();

 ?>