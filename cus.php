<?php
$dbname="register";
$conn = new mysqli("localhost","root","",$dbname);
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error);
} 


session_start();
if(isset($_SESSION['uname']))
{
			$hotel = $_POST["hotel"];
			$cin = $_POST["cin"];
			$cout =$_POST["cout"];
			$sum =$_POST["sum"];
			$soln =$_POST["soln"];
		


		$cname=$_POST["cname"];
		$phone=$_POST["phone"];
			

			
					$sql = "INSERT INTO customer(cname, checkin, checkout, alloted, hotel, nop ,phone) VALUES('$cname','$cin','$cout','$soln','$hotel','$sum','$phone')";
					if($conn->query($sql) === TRUE){
							
							$sql =  "UPDATE hotel SET available=available-$soln WHERE hname ='$hotel'";
							if($conn->query($sql) !== FALSE){
								echo" <html lang='en'>
								<head>
									<meta charset='UTF-8'>
									<meta name='viewport' content='width=device-width, initial-scale=1.0'>
									<link rel='stylesheet' href ='style.css' type='text/css'>
									<title>Booking Confirmation</title>
									<style>
									   body{
										border-style: solid;
										border-color: navy;
										border-width: 10px;
									   
										}
										.btn{
											font-size: 18px;
											color:#191970;
											margin: 5px;
											padding:7px 22px;
											text-decoration: none;
											border: 1px solid black;
											
										}
										.btn-login:hover{
											border: 3px solid  #191970;
											transition: 0.5s;
								
										 }
									</style>
									
								</head>
								<body>
									<p ><center>
								
										 <ul class='nav'>
										<div class='logo'>
											<img src ='images\logo.png'></div>       
											<h2 style='color: #191970;'><center>Welcome to<span style='color:mediumseagreen';> The $hotel Hotel</span><br><br><br> 
											Confirmation for reservation</center></h2>
										<br><br>
									<span style='color:#696969; text-align:left;'>
									Name 	 		:	$cname<br><br>
									Check-in 		:	$cin <br><br> 
									Check-out		:	$cout <br><br> 
									Alloted Rooms	:	$soln <br><br> 
									Payment			:	Cash/No e-payment <br><br> 
									Status			:   Booking Confirmed <br><br> </span>

									<br> <br><br>
									<span style='color:mediumseagreen';><b>We hope you to have a pleasant stay and fabulous expirence.	Enjoy your trip under our
									service.</b></span>

							
								

									</p><br>   </div>    <br><a href= 'main.html' class ='btn btn-login'>Home</a>
									<a href= 'main.html' class ='btn btn-login' onclick='window.print()'>Print</a>
									<br><br><br>
								</center>
								<br><br>  
								 
									
								</body>
								</html>";
							}
							else{
								echo "Error: " . $sql . "<br>" . $conn->error;
							}
							
					}
					else   
						{
							echo "Error: " . $sql . "<br>" . $conn->error;
						}
						
			
}
else{
	header("Location:login1.php"); 
}
			
				
?>