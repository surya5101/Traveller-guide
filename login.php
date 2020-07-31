<?php
$dbname="register";
$conn = new mysqli("localhost","root","",$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
session_start();

    $_SESSION['uname']=$_POST["usname"];
    $password=$_POST["pass"];
    

    $check = "SELECT uname, password FROM register where uname = '$_SESSION[uname]' && password ='$password'";
    $result =  $conn->query($check);
    if( $result !== FALSE){
        if ($result->num_rows > 0) {
        
            while($row = $result->fetch_assoc()) {
               
                header("Location:main.html"); 
                
            }
        }
        else{
            header("Location:login1.php?msg='Invalid user!'"); 
        }
    }
        
           

    else 
        {
           
        
                 echo "Error: " .  "<br>" . $conn->error;     
        }

$conn->close();

 ?>