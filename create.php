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
    $sql = "INSERT INTO hotel(hname,price,available) VALUES('$hotel','$rate','$avail')";
		if($conn->query($sql) === TRUE){
            echo "<script>
            alert('New Hotel Inserted!');
            window.location='privilege.php';
            </script>";
        }
        else{
            echo "<script>
            alert('Hotel already exists!');
            window.location='privilege.php';
            </script>";
        }
}
else{
    header("Location:admin.php");
}
