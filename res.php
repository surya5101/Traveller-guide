<html>
<head>
  <title>RESTAURANTS</title>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
 <link rel="stylesheet" href ="style.css" type="text/css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
.desc:hover{
   color:#191970;
}
.img:hover{
 opacity:0.5;  
}
input[type="submit"]:hover
{
    cursor: pointer;
    background: #191970;
    color: #fff;
}
input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 2px;
}

.coupon {
  border: 5px dotted #bbb;
  width: 80%;
  border-radius: 15px;
  margin: 0 auto;
  max-width: 400px;
}

.container {
  padding: 2px 16px;
  background-color: #f1f1f1;
}

.promo {
  background: #ccc;
  padding: 3px;
}

.expire {
  color: red;
}

.explain{
  padding-bottom: 30px;
}

</style>
<body>

<!-- Header -->
<header>
        <div class="title">
            <ul class="communication" style='background-color:lightgrey;'>
               <li ><a href="#">Have a question? Contact:</a></li>
                <li><a href="#">0431-2533373</a></li>
                <li><a href="#">trip_advisor@hotmail.com</a></li>
                <span class="attach"><li><a class="login" href="logout.php"><i class="fas fa-sign-in-alt"></i> Log-out </a></li>
               <!-- <li><a class="register" href="register.html"><i class="fas fa-unlock" style="color: #191970;"></i> Register</a>-->
              </span></li>
        </ul>
        </div>
          
        <div class="base">
            <ul class="nav" >
            <div class="logo" >
                <li><img src ="images\logo.png"></li></div>
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


    <div class="coupon">
  <div class="container">
  <div class="logo" >
                <li><img src ="images\logo.png"></li></div>
  </div>
  <img src="images\dish.jpg" alt="Avatar" style="width:100%;">
  <div class="container" style="background-color:white">
    <h2><b>20% OFF YOUR PURCHASE</b></h2> 
    <p>You are awarded with <i>Trip adivisor's</i> coupon.  Use this in the below restaurants and slay 
your food</p><br>
  </div>
  <div class="container">
    <p>Use Promo Code: <span class="promo">SHAAHA</span></p><br>
   <b> <p class="expire">Expires: Jan 03, 2021</p></b>
  </div>
</div>

    
<br><br><br><br>

    <!--Main body-->
<div class="header" style="color: #191970; background-color: lightgrey; text-align:center; padding-top:30px;">
  <h1>Dine in Lappish dishes</h1><br>
  
</div><br><br><br><br><br>

<!-- Photo Grid -->


<!--no1-->
<div class="explain" style="padding-left: 80px; border-bottom:2px solid grey" id='one'>
  <div class="desc" >
<p>
<b> SANTA SALMON'S RESTAURANT</b><br><br>
<span style='color:rgb(204, 153, 12);'><b>Closed ⋅ Opens 12PM</span></b> <br> 
Cosy - Casual - Good for Kids<br>
Address: Joulumaantie 13, 96930 Rovaniemi, Finland<br>
Phone: +358 40 8340900<br>
Very nice ambience with a central fire place. The food was very good and tasty. We especially liked the Forest mushroom soup.  Lapland Restaurant Santa is a Lappish-style restaurant that offers typical Lappish dishes in a very cozy atmosphere.'<br><br> 
<input type="submit" name="submit" value="Spot Location" onclick="one()">
<a href="res.php"><input type="submit" name="submit" value="Back" ></a>
</p>
</div>
<div class="img"><br><img src="images\hotel5.jpg" style="height: 230px; width:auto;"></div><br><br><br><br>
     </div>
<br><br><br><br>


<!--no2-->

<div class="explain" style="padding-left: 80px; border-bottom:2px solid grey;" id='two'>
  <div class="desc" style='float:right;'>
<p>
<b> NILLI RESTAURANT</b><br><br>
Hours: <br>
<span style='color:rgb(204, 153, 12);'><b>Closed ⋅ Opens 12PM</span></b> <br>

Warm, family-owned eatery with traditional local decor serving specialties from Lapland & Finland.<br>
Address: Valtakatu 20, 96200 Rovaniemi, Finland

Phone: +358 40 8340900<br>
One of the best restaurant in Rovaniemi. Delicious Lappish dishes. Try the Lapp Tapas starter.It's simply fantastic!!<br><br>
<input type="submit" name="submit" value="Spot Location" onclick="fun()">
<a href="res.php"><input type="submit" name="submit" value="Back" ></a>
</p>
</div>
<div class="img"><br><img src="images\hotel4.jpg" style="height: 230px; width:auto;"></div>
     </div>
<br><br><br><br>


<!--no3-->
<div class="explain" style="padding-left: 80px; border-bottom:2px solid grey" id='three'>
  <div class="desc">
<p>
<b> PETRONEELA RESTAURANT</b><br><br>
<span style='color:rgb(204, 153, 12);'><b>Closed ⋅ Opens 9AM</span></b> <br>
Reservations required · Late-night food · All you can eat<br>
Address: Honkapolku 5, 99830 Saariselkä, Finland<br>
Hours: Closed ⋅ Opens 5PM<br>
Phone: +358 20 7919601<br>
The service was really nice and the food was excellent! The moose with grouse was one of the best portions I've ever had. Also the catch of the day was tasteful<br><br>
<input id='loc' type="submit" name="submit" value="Spot Location" onclick="three()">
<a href="res.php"><input type="submit" name="submit" value="Back" ></a>
</p>
</div>
<div class="img"><br><img src="images\petronella.jpg" style="height: 230px; width:auto;"></div>
     </div>
<br><br><br><br>


<!--no4-->
<div class="explain" style="padding-left: 80px; border-bottom:2px solid grey;" id='four'>
  <div class="desc" style='float:right;'>
<p>
<b style='text-transform:uppercase;'>Lapland Restaurant Kotahovi</b><br><br>
Hours: 
<span style='color:rgb(204, 153, 12);'><b>Closed ⋅ Opens 5PM</span></b>
 <br>
Warm, family-owned eatery with traditional local decor serving specialties from Lapland & Finland.<br>
Address: Valtakatu 20, 96200 Rovaniemi, Finland<br>

Phone: +358 40 8340900<br>
One of the best restaurant in Rovaniemi. Delicious Lappish dishes. Try the Lapp Tapas starter. It's simply fantastic!!<br><br>
<input type="submit" name="submit" value="Spot Location" onclick="four()">
<a href="res.php"><input type="submit" name="submit" value="Back" ></a>
</p>
</div>
<div class="img"><br><img src="images\res1.jpg" style="height: 230px; width:auto;"></div>
     </div>
<br><br><br><br>
<center>
    
<iframe id="map" style="display:none" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1590.814265912399!2d25.73220531598787!3d66.50191158471434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x442b4bf3a68724bf%3A0x6ebad5841967e763!2sNili%20Restaurant!5e0!3m2!1sen!2sin!4v1590493386182!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    
    
    <iframe id='first' style="display:none" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1588.1434315282543!2d25.843509815990306!3d66.54372768473517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x442b4e7fc37edcad%3A0x116ffea0fd0c172c!2sSanta&#39;s%20Salmon%20Place%20Restaurant!5e0!3m2!1sen!2sin!4v1590493970517!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


        <iframe id='thrid' style="display:none" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1591.8614992236253!2d25.71601701598696!3d66.4855118847062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x442b4bc18ec00001%3A0xae8ccd75f2e55818!2sAmica-ravintola%20Petronella!5e0!3m2!1sen!2sin!4v1590494394765!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


            <iframe id='fourth' style="display:none" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1588.213074392974!2d25.845274515990262!3d66.54263748473466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x442b4e7e2d7ce77b%3A0x11e721cad5c966e4!2sLapland%20Restaurant%20Kotahovi!5e0!3m2!1sen!2sin!4v1590494949979!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</center>
    <script>
        function fun(){
            document.getElementById('map').style.display='';
            document.getElementById('one').style.display='none';
            document.getElementById('two').style.display='';
            document.getElementById('three').style.display='none';
            document.getElementById('four').style.display='none';
        }
        function one(){
            document.getElementById('first').style.display='';
            document.getElementById('one').style.display='';
            document.getElementById('two').style.display='none';
            document.getElementById('three').style.display='none';
            document.getElementById('four').style.display='none';
        }
        function four(){
            document.getElementById('fourth').style.display='';
            document.getElementById('one').style.display='none';
            document.getElementById('two').style.display='none';
            document.getElementById('three').style.display='none';
            document.getElementById('four').style.display='';
        }
        function three(){
            document.getElementById('thrid').style.display='';
            document.getElementById('one').style.display='none';
            document.getElementById('two').style.display='none';
            document.getElementById('three').style.display='';
            document.getElementById('four').style.display='none';
        }
        </script>

    </body>

<br><br><br><br><br><br><br><br><br><br><br><br>
<footer  style='height: 100px;'>
    <div class='footer-content'>
        <div class='logo'>
        <img src ='images\logo.png'></div>
       
      </div>

    <br><br> 
    <div class='footer-bottom'>
      &copy;  2020 TripAdvisor LLC All rights reserved
    
    </div>
</footer>
</html>