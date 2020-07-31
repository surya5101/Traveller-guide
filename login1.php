 <html>
<head>
    <title> Login  </title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" type="text/css" href="login.css">   
</head>
    <body>
    <div class="login-box" style="width: 400px">
    <img src="images/avatar1.png" class="avatar">
        <h1>Login </h1>
            <form action="login.php" method="post">
            <p>Username</p>
            <input type="text" name="usname" placeholder="Enter Username" required>
            <p>Password</p>
            <input type="password" name="pass" placeholder="Enter Password" required>
            <input type="submit" name="submit" value="Login">
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