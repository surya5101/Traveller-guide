<?php
$dbname="register";
$conn = new mysqli("localhost","root","",$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$username=$_POST["uname"];
$password=$_POST["psw"];
$cpass=$_POST["psw1"];
$phone=$_POST["phn"];
if($password==$cpass){
	$sql = "INSERT INTO register(uname,password,phone) VALUES('$username','$password','$phone')";
		if($conn->query($sql) === TRUE){
			header('Location:index.html');
			}
			else 
			{
    			echo "Error: " . $sql . "<br>" . $conn->error;
			}
}
else{
	
	header("Location:register1.php?msg='Password Mismatch'");    
}
$conn->close();
 ?>