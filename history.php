<?php
session_start();
 echo "<div class='title'><br>&nbsp;&nbsp;&nbsp;History</div><br><br>
 <link rel='stylesheet' href ='style.css' type='text/css'>
 <title>History</title>
 <script src='https://kit.fontawesome.com/a076d05399.js'></script>
 <style>

 .title{
     color: grey;
     background-color:rgb(51, 46, 46);
     height:7.5%;
     font-size: 20px;
  
 }
 .btn{
      font-size: 18px;
      color:#191970;
      margin: 5px;
      padding:7px 22px; 
      text-decoration: none;
      border: 1px solid black;
 
  }
  input[type='submit']:hover{
      opacity:0.7;
  }
   .btn-login:hover{
      border: 3px solid  #191970;
      transition: 0.5s;
    }
    td{
        background-color:rgb(120, 120, 143);
    }

  
</style><center>
<body>
<header>
    <div class='title'>
        <ul class='communication'>
           <li ><a href='#'>Have a question? Contact us: </a></li>
            <li><a href='#'>0431-2533373</a></li>
            <li><a href='#'>trip_advisor@hotmail.com</a></li>
            <span class='attach'><li><a class='login' href='logout.php'><i class='fas fa-sign-in-alt'></i> Log-out </a></li>
           </span>
    </ul>
    </div>
      
    <div class='base'>
        <ul class='nav' >
        <div class='logo' >
            <li><img src ='images\logo.png'></li></div>
            <div class='list'>
                <b>
            <li class='highlight' ><a href='main.html'>Home</a></li>
            <li class='menu'><a href='hotel1.html'>Hotels</a></li>
            <li class='menu'><a href='attractions.html'>Things to do</a></li>
            <li class='menu'><a href='res.php'>Restaurtants</a></li>
            <li class='menu'><a href='history.php'>Booking History</a></li></b>
           </div>
        </ul>
    </div>
</header>
<center>
<form method='get'>
  <input type='radio' id='booked' name='filter' value='Booked'>
  <label for='Booked' style='color:#191970; font-size:19px; font-weight:bold;'> Booked</label>&nbsp;
  <input type='radio' name='filter' value='Cancelled'>&nbsp;
  <label for='cancel' style='color:#191970; font-size:19px; font-weight:bold;'>Cancelled</label><br><br>
  <input type='submit' value='FILTER' name='end' style='width:250px;color: white; border-radius:2px;
   background-color: #191970; height:40px;'>
</form></center>
  <br><br><br><br>";


$dbname="register";
$conn = new mysqli("localhost","root","",$dbname);
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_SESSION['uname']))
{    $check = "SELECT * from customer";
    $result =  $conn->query($check);
    if( $result !== FALSE){
        if ($result->num_rows > 0) {
          
            echo " <table style='width:600px;height:40%;' id='table'>
                
            <tr style='background-color:lightgrey; color:black;'>
                <th>Name</th>
                <th> Hotel Name </th>
                <th> Alloted Rooms</th>
                <th> Status </th>
                <th> Alter Booking </th>
            </tr>";
            while($row = $result->fetch_assoc()) {
               
                
                echo "

                    <tr>
                        <td style='padding-left:40px; padding-right:40px;'>$_SESSION[uname]</td>
                       
                        <td style='padding-left:40px; padding-right:40px;'>$row[hotel]</td>
                        <td style='padding-left:40px; padding-right:40px;'>$row[alloted]</td>
                        <td style='padding-left:40px; padding-right:40px;'>$row[status]</td>";
                    if($row['status'] =='Cancelled'){
                        echo"<td  style='padding-left:40px; padding-right:40px;'><form><button class ='btn btn-login'>Cancelled</button></form></td>
                        </tr>";
                    }
                    else{
                        echo "<td  style='padding-left:40px; padding-right:40px;'><form action ='cancel.php' method= 'post'>
                        <p style='display:none'> <input type='text' value=$row[hotel] name='hotel'>
                        <input type='text' value=$row[alloted] name='alloted' hidden></p>
                        <button style='width:130px' id='btn' value='$row[id]' name='cancel' class ='btn btn-login'>Cancel</button></form></td>
                        </tr>";
                    }
        
           
        }
       
        echo "</center>";
        echo "</table>
        </body>";
       
    }}
    if(isset($_GET['end'])){
        $check = "SELECT * from customer where status='$_GET[filter]'";
        $result =  $conn->query($check);
        if( $result !== FALSE){
            if ($result->num_rows > 0) {
              
                echo " <script> document.getElementById('table').style.display='none';</script>
                <table style='width:600px;height:auto;'>
                    
                <tr style='background-color:lightgrey; color:black;'>
                    <th>Name</th>
                    <th> Hotel Name </th>
                    <th> Alloted Rooms</th>
                    <th> Status </th>
                    <th> Alter Booking </th>
                </tr>";
                while($row = $result->fetch_assoc()) {
                   
                    
                    echo "

                        <tr>
                            <td style='padding-left:40px; padding-right:40px;'>$_SESSION[uname]</td>
                           
                            <td style='padding-left:40px; padding-right:40px;'>$row[hotel]</td>
                            <td style='padding-left:40px; padding-right:40px;'>$row[alloted]</td>
                            <td style='padding-left:40px; padding-right:40px;'>$row[status]</td>";
                        if($row['status'] =='Cancelled'){
                            echo"<td  style='padding-left:40px; padding-right:40px;'><form><button class ='btn btn-login'>Cancelled</button></form></td>
                            </tr>";
                        }
                        else{
                            echo "<td  style='padding-left:40px; padding-right:40px;'><form action ='cancel.php' method= 'post'>
                            <p style='display:none'> <input type='text' value=$row[hotel] name='hotel'>
                            <input type='text' value=$row[alloted] name='alloted' hidden></p>
                            <button style='width:130px' id='btn' value='$row[id]' name='cancel' class ='btn btn-login'>Cancel</button></form></td>
                            </tr>";
                        }
            
               
            }
           
            echo "</center>";
            echo "</table>
            </body>";
           
        }
        }
      
    }
    echo " <br><br><br><br><br><br><br><br><footer  style='height: 100px;'>
    <div class='footer-content'>
        <div class='logo'>
        <img src ='images\logo.png'></div>
       
      </div>

    <br><br> 
    <div class='footer-bottom'>
      &copy;  2020 TripAdvisor LLC All rights reserved
    
    </div>
</footer>";
 
          
}

else{
    header("Location:login1.php");
}            
?>
           
    
           