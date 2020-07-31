<?php
     session_start();
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
     <link rel="stylesheet" href ="style.css" type="text/css">
     <style>
    table{
        border-collapse: collapse;
        width: 30%;
        color: #191970;
        font-family: monospace;
        font-size: 15px;
        text-align: left;
 
    }
    th{
        background-color:#191970;
        color:white;
        text-align: center;
    }
* {box-sizing: border-box;}
body
 {
     font-family: Verdana, sans-serif;
    }
.mySlides {display: none;}
img {vertical-align: middle;}
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}


.text {
  color: #191970;
  font-size: 20px;
  text-transform:uppercase;
  font-weight:bold;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

button{
    color:#191970;
    background-color: white;
    text-decoration: none;
    font-family: inherit;
    margin-left: 1150px;
    padding:12px 20px;
  
}


.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}


.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}


    </style>
</head>
<body>
<header>
        <div class="title">
            <ul class="communication" style='background-color:lightgrey;'>
               <li ><a href="#">Have a question?  Contact us: </a></li>
                <li><a href="#">0431-2533373</a></li>
                <li><a href="#">trip_advisor@hotmail.com</a></li>
                <span class="attach"><li><a class="login" href="logout.php"><i class="fas fa-sign-in-alt"></i> Log-out </a></li>
                <li><a class="register" href="register.html"><i class="fas fa-unlock" style="color: #191970;"></i> Register</a></span></li>
        </ul>
        </div>
          
        <div class="base">
            <ul class="nav" >
            <div class="logo">
                <li><img  style="height:150px; width:auto;" src ="images\logo.png"></li></div>
                <div class="list">
                    <b>
                <li class="highlight" ><a href="main.html">Home</a></li>
                <li class="menu"><a href="hotel1.html">Hotels</a></li>
                <li class="menu"><a href="attractions.html">Things to do</a></li>
                <li class="menu"><a href="res.php">Restaurtants</a></li>
                <li class="menu"><a href="history.php">Booking History</a></li></b>
               </div>
            </ul>
        </div>
    
        
    </header>
    <br><br><br>

    <div class="header" style="color: #191970; background-color: lightgrey; padding-top:10px; padding-bottom:10px;">
           <center> <h1>Scintillating stay in Lapland</h1>
            <p>Get amazing experience.</p></center>
    </div><br><br><br><br>

    <table>
   
        <tr>
            <th>Available Hotels</th>
            <th>Reservations  </th>
            <th> Images  </th>
        </tr>

        <br><br><br>
       <div class="wrap">
<div class="gallery">
    <img src="images\hotel1.jpg"  width="600" height="600">
  <div class="desc"><b>Royal Hotel</b><br>10,000<br>Nellim, Finland</div>
</div>

<div class="gallery">
    <img src="images\hotel2.jpg" width="600" height="600">

  <div class="desc"><b>Leisure Palace</b><br>Rs.10,600<br>Rovaniemi, Finland</div>
</div>

<div class="gallery">
    <img src="images\hotel3.jpg" alt="Northern Lights" width="600" height="600">
  
  <div class="desc"><b>Lapland Paradise</b><br>Rs.11,600<br>Saariselka, Finland</div>
</div>

<div class="gallery">
    <img src="images\hotel4.jpg"  width="600" height="600">
 
  <div class="desc"><b>Snow Point</b><br>Rs.12,600<br>Inari, Finland</div>
</div>


<div class="gallery">
    <img src="images\hotel1.jpg"  width="600" height="600">

  <div class="desc"><b>Blue stone</b><br>Rs.10,600<br>Rovaniemi, Finland</div>
</div>

<div class="gallery">
    <img src="images\hotel4.jpg" width="600" height="600">

  <div class="desc"><b>Artic Light Hotel</b><br>Rs.9,600<br>Saariselka, Finland</div>
</div>

<br><br><br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
<div class="header" style="color: #191970;">
           <center><h1>Best Room Availability/2 members per room.</h1>
            <p>
                Get amazing experience.
            </p></center>
</div>
       <br><br><br>

<!--slider-->

       

<div class="slideshow-container" id='slider' style="display:none;">
<h2>Your stay destination</h2>

      <div class="mySlides fade">
        <div class="numbertext">1 / 6</div>
        <img src="images\room.jpg" style="width:100%">
        <div class="text">Royal Hotel</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 6</div>
        <img src="images\room0.jpg" style="width:100%">
        <div class="text">Snowpoint Hotel</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 6</div>
        <img src="images\room2.jpg" style="width:100%">
        <div class="text">Lapland Paradise</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">4 / 6</div>
        <img src="images\roo.jpg" style="width:100%">
        <div class="text">Lapland Paradise -2</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">5 / 6</div>
        <img src="images\room2.jpg" style="width:100%">
        <div class="text"><strong>Blue stone Hotel</strong></div>
      </div>




</div>
<br>

<div style="text-align:center"  id='slider' style="display:none;">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>




<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); 
}



function view(){
  document.getElementById('slider').style.display='';
  document.getElementById('header').style.display='';
            


}
</script>

      
  <!--end-->

<?php
$dbname="register";
$conn = new mysqli("localhost","root","",$dbname);
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error);
} 


if(isset($_SESSION['uname']))
{
    $cin=$_POST["cin"];
    $cout=$_POST["cout"];
    $sum=$_POST["count"];
    $soln=ceil($sum/2);

    if($cout<=$cin){
        echo "<script>
          alert('Enter proper date!!!');
          window.location= 'hotel1.html';
        </script>";
    }
    
    else if($cout==(date('Y-m-d'))){
      echo "<script>
        alert('Enter proper date!!!');
        window.location= 'hotel1.html';
      </script>";
    }
    else{
    
              
              $sql = "SELECT * from customer";
              $select =  $conn->query($sql);
              $date = date('Y-m-d');
              
              if( $select !== FALSE){
                if ($select->num_rows > 0) {
                  while($col = $select->fetch_assoc()) {
                     $alloted = $col['alloted'];
                     $hotel = $col['hotel'];
                     $cid= $col['id'];
                     $out =$col['checkout'];
                     
                      if(($date >= $out)&&($col['status']=='Booked'))
                        {
                          $new1 = "UPDATE customer SET status='Cancelled'where checkout='$date'and status='Booked'" ;
                          $query =  $conn->query($new1);
                          if($query !==FALSE)
                            {
                             
                              $new = "UPDATE hotel SET available=available+$alloted where hname='$hotel'" ;
                              $qrun =  $conn->query($new);
      
                              }
                        }
                      }
                  }
                }


              $check = "SELECT * from hotel";
              $result =  $conn->query($check);
              
            if( $result !== FALSE){
              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  $avail=$row['available'];
                if($avail>=$soln){
              
                echo "<tr><td> " ."     ". $row['hname']." Hotel    </td>".
                      "<td><form action='cus1.php' method='post'>
                    <p style='display:none'><input type='date' value=$cin name='cin' hidden>
                      <input type='date' value=$cout name='cout' hidden>
                     
                    <input type='number' value=$sum name='sum' hidden>
                      <input type='text' value=$soln   name='soln' hidden></p>
                      <button type='submit' value=$row[hname] name='Book' class='sim' style='width:60%; padding-left:20px;'>Book</button></form></td>
                      <td><button type='submit' id='view' class='sim' style='width:80%; padding-left:20px;' onclick='view()'>View</button></td></tr>";
                    
                echo '<tr></tr>' ."<br>";
              
              }
                
            }
            echo "</table>";
          
        }
      } 
    }
  }
     

else{
  header("Location:login1.php"); 
}

$conn->close();


 ?>

<br><br><br><br>
<br><br><br><br><br><br><br>
<footer  style='height: 100px;'>
    <div class='footer-content'>
        <div class='logo'>
        <img src ='images\logo.png' style='height:200px; width:auto;'></div>
       
      </div>

    <br><br> 
    <div class='footer-bottom'>
      &copy;  2020 TripAdvisor LLC All rights reserved
    
    </div>
</footer>

</body>
</html>

