<html>
<head>
<title>Register</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="login.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background:url(new.jpg); width:100%; ">
	
    <div class="login-box">
    <img src="images\avatar1.png" class="avatar">
        <h1>Register </h1>
            <form action="register.php" method="post">
            <p>Username</p>
            <input type="text" name="usname" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="pass" placeholder="Enter Password">

            <input type="password" name="pass" placeholder="Confirm Password">
            <p>Phone</p>
            <input type="number" name="pass" placeholder="Enter contact number">
            <input type="submit" name="submit" value="Register">
           <center> <a href="index.php">Home</a>    </center>
            <?php
            if(isset($_GET['msg'])){
            $msg=$_GET['msg'];
            echo "<script>alert(".$msg.");</script>";
            }
            ?>
            </form>

        </div>

        
	</body>
</html>