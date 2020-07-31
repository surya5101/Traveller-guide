<html>
<head>
<title>Admin-Entry</title>
<link rel="stylesheet" type="text/css" href="admin.css">   
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
	
    <div class="login-box" id="a-reg" style="display:none; width: 400px; ">
    
        <h1> Admin-Register </h1>
            <form action="a-reg.php" method="post">
            <p>Admin-name</p>
            <input type="text" name="usname" placeholder="Enter Admin-name"><br>
            <p>Password</p>
            <input type="password" name="pass" placeholder="Enter Password">
            <input type="password" name="pass" placeholder="Confirm-Password" >
            
            <input type="submit" name="submit" value="Register">
            <center> <a href="admin.php">Back</a>    </center>
                       
    </form>
</div>
     
    <div class="login-box" style="width: 400px; display:none;" id="a-log">
   
        <h1> Admin-Login </h1>
            <form action="a-log.php" method="post">
            <p>Admin-name</p>
            <input type="text" name="usname" placeholder="Enter Admin-name" required><br>
            <p>Password</p>
            <input type="password" name="pass" placeholder="Enter Password" required>

            <input type="submit" name="submit" value="Login">
            <center> <a href="admin.php">Back</a>    </center>
        <?php
            if(isset($_GET['msg'])){
            $msg=$_GET['msg'];
            echo "<script>alert(".$msg.");</script>";
        }
        ?>
        </form>
  
    </div>

<section class ="header"></section>
            <video autoplay loop class = "video-bg"muted plays-inline>
                 <source src="videos/aurora.mp4" type="video/mp4">
             </video>
        <div class="overlay">
                <img src="images/logo.png" class="logo">
                    <div class = "welcome">
                       <h1 id="title"> ADMIN-PARADISE</h1>
                       <button class ="btn btn-login" id="btn-a" onclick=login()>Login</button>
                       <button class ="btn btn-register" id="btn-b" onclick=register()>Register</button>
                    </div>
        </div>

    </section>

    <script>
        function login()
        {
        document.getElementById('a-log').style.display='';
        document.getElementById('a-reg').style.display='none';
        document.getElementById('btn-a').style.display='none';
        document.getElementById('btn-b').style.display='none';
        document.getElementById('title').style.display='none';
        }
        function register(){
        document.getElementById('a-log').style.display='none';
        document.getElementById('a-reg').style.display='';
        document.getElementById('btn-a').style.display='none';
        document.getElementById('btn-b').style.display='none';
        document.getElementById('title').style.display='none';
        }
</script>

</html>