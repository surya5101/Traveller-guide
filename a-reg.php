<?php
$dbname="register";
$conn = new mysqli("localhost","root","",$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$admin=$_POST["usname"];
$password=$_POST["pass"];
$cpass=$_POST["pass"];

if($password==$cpass){
	$sql = "INSERT INTO admin(aname,apass) VALUES('$admin','$password')";
		if($conn->query($sql) === TRUE){
			header('Location:privilege.html');
			}
			else 
			{
    			echo "Error: " . $sql . "<br>" . $conn->error;
			}
}
else{
	
	header("Location:admin.php?msg='Password Mismatch'");    
}
$conn->close();
 ?>