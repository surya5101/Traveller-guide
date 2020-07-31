<?php
     session_start();
?>

<html>

    <head>
        <title> Booking Hotel  </title>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" type="text/css" href="login.css">   
    </head>
        <body >
    <?php
               
    if(isset($_SESSION['uname'])){  
        
        if(isset($_POST['Book'])){
            $hotel = $_POST["Book"];
            $cin = $_POST["cin"];
            $cout =$_POST["cout"];
            $sum =$_POST["sum"];
            $soln =$_POST["soln"];
        

        echo $_SESSION['uname'];
       echo" <div class='login-box' >
        <img src='images\avatar1.png' class='avatar'>
            <h1>Reserve rooms in  $hotel hotel</h1><br><br>
           
                <form action='cus.php' method='post'>
                <p>Username</p>
                <input type='text' name='cname' value='$_SESSION[uname]' placeholder='Enter user name as customer name' readonly>
                
                <p>Contact Number</p>
                <input type='tel' name='phone' maxlength='10' placeholder='Enter contact number' required>
                <input type='date' value=$cin name='cin' hidden/>
                <input type='date' value=$cout name='cout' hidden/>
                <input type='number' value=$sum name='sum' hidden/>
                <input type='text' value=$hotel   name='hotel' hidden/>
                <input type='text' value=$soln   name='soln' hidden>
                
               <input type='submit' name='submit' value='RESERVE'>
               <p style='color:red; font-size:12px;'>On clicking reserve, Print the receipt as it won't be loaded again.</p>
                   
                </form>
               
                
            </div>";
        }
        else{
            header("Location:login1.php");
        }
        }
    else{
            header("Location:login1.php");
        }
            
            ?>
        </body>
    </html>