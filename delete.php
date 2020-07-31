<?php
$dbname="register";
$conn = new mysqli("localhost","root","",$dbname);
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error);
} 
session_start();
if(isset($_SESSION['admin']))
{
    $hotel=$_POST["hname"];
    $sql =  "DELETE FROM hotel WHERE hname ='$hotel'";
    $sql =  $conn->query($sql);
    if(($sql)!==FALSE){
        echo "<script>
        alert('Database Altered!');
        window.location='privilege.php';
        </script>";
    }
    else{
        echo "error". $conn->error;
    }
}
else{
    header("Location:privilege.php");
}