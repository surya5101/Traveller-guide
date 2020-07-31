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
    $rate=$_POST["rate"];
    $avail=$_POST["avail"];

   $sql =  "UPDATE hotel SET available=$avail WHERE hname ='$hotel'";
   $sqll=  "UPDATE hotel SET price=$rate WHERE hname ='$hotel'";
   $sel =  $conn->query($sql);
   $sell =  $conn->query($sqll);
   if(($sel && $sell)!==FALSE){
       echo "<script>
       alert('Database Altered!');
       window.location='privilege.php';
       </script>";
   }else{
       echo "error";
   }
}
else{
    header("Location:admin.php");
}