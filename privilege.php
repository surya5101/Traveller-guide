<?php
session_start();
if(isset($_SESSION['admin']))
{
echo  "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <link rel='stylesheet' type='text/css' href='privilege.css'>
    
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Admin Privileges</title>
</head>
<body style='background:url(images/trees.jpg)'>
    <div class='sidenav' id='visible'>
    <img src='images\logo.png' class='logo'>
        <br><br><br><br><br>
        <button  id='create' onclick='create()'>Add hotel  <i class='fas fa-plus-circle'></i></button><br>
        <button  id='edit' onclick=edit()>Edit hotel  <i class='fas fa-edit'></i></button><br>
        <button  id='view' onclick=view()>View DB <i class='fas fa-eye'></i></button><br>
        <button  id='delete' onclick=remove()>Delete hotel <i class='far fa-trash-alt'></i></button>
        <br><br>
      
        <a id='out' href='out.php'><i class='fas fa-user-minus'></i> Log out</a>
       
    </div>
    <center><h1 style='color:white;'> DO WONDERS WITH THE PRIVILEGES YOU DESERVE<br><br></h1></center><a class='switch' href='privilege.php' style='float:right' >BACK</a>
   
    <div class='main' id ='box1' style='display:none;'>

    <div class='login-box' style='width: 500px;'>
   
        <h1> Add Hotel </h1><br>
        <form action='create.php' method='post'>
            <p>Hotel-name</p>
            <input type='text' name='hname' placeholder='Enter Hotel-name' required><br>
            <p>Price/Day</p>
            <input type='number' name='rate' placeholder='Enter rate/day' required>
            <p>Available Seats</p>
            <input type='number' name='avail' placeholder='Enter vacancies' required>

            <input type='submit' name='submit' value='Insert Hotel'>
            <center> <a href='admin.php'>Back</a>    </center>
        </form>
        </div> 
    </div>


    <div class='main' id ='box2' style='display:none;'>
    <div class='login-box' style='width: 500px;'>
   
    <h1>  Alterations are Welcomed </h1><br>
        <form action='edit.php' method='post'>
        <p>Hotel-name</p>
        <input type='text' name='hname' placeholder='Enter Hotel-name' required><br>
        <p>Price/Day</p>
        <input type='number' name='rate' placeholder='Enter new rate/day' required>
        <p>Available Seats</p>
        <input type='number' name='avail' placeholder='Enter additional vacancies' required>

        <input name='submit' type='submit' value='Alter'>
        <center> <a href='admin.php'>Back</a>    </center>
       </form>
    </div> 
</div>



<div class='main' id='box3' style='display:none;'>
    <div class='login-box' style='width: 500px;'>
   
    <h1> Monitor Actions </h1><br>
        <form method='get'>
        
        <p>Click to view details</p><br><br>
        <input name='hotel' type='submit' value='Hotel DB'>
        <input name='cus' type='submit' value='Customer DB'>
        <input name='user' type='submit' value='User DB'>
        <center> <a href='admin.php'>Back</a>    </center>
       </form>
    </div> 
</div>


<div class='main' id ='box4' style='display:none;'>
    <div class='login-box' style='width: 400px;'>

        <h1>  Delete Hotel </h1><br>
        <form action='delete.php' method='post'>

        <p>Remove Hotel from DB</p><br><br>
        <p>Hotel-name</p>
        <input type='text' name='hname' placeholder='Enter Hotel-name' required><br>

        <input name='submit' type='submit' value='Delete'>
        <center> <a href='admin.php'>Back</a>    </center>
        </form>
    </div> 
</div>


<script>
    function create(){
        document.getElementById('visible').style.display='';
        document.getElementById('box1').style.display='';
        document.getElementById('box2').style.display='none';
        document.getElementById('box3').style.display='none';
        document.getElementById('box4').style.display='none';
        document.getElementById('tab').style.display='none';
        document.getElementById('head').style.display='none';
    }

    function edit(){
        document.getElementById('visible').style.display='';
        document.getElementById('box1').style.display='none';
        document.getElementById('box2').style.display='';
        document.getElementById('box3').style.display='none';
        document.getElementById('box4').style.display='none';
        document.getElementById('tab').style.display='none';
        document.getElementById('head').style.display='none';
    }

    function view(){
        document.getElementById('visible').style.display='';
        document.getElementById('box1').style.display='none';
        document.getElementById('box2').style.display='none';
        document.getElementById('box3').style.display='';
        document.getElementById('box4').style.display='none';
        document.getElementById('tab').style.display='none';
        document.getElementById('head').style.display='none';
    }

    function remove(){
        document.getElementById('visible').style.display=''; 
        document.getElementById('box1').style.display='none';
        document.getElementById('box2').style.display='none';
        document.getElementById('box3').style.display='none';
        document.getElementById('box4').style.display='';
        document.getElementById('tab').style.display='none';
         document.getElementById('head').style.display='none';
    }

   

</script>

</body>
</html>";
echo "<style>
td{
    background-color: rgb(51, 46, 46);
    padding: 40px 40px;
    color: white;
}
th{
    background-color:rgb(78, 26, 26); 
    padding:40px 40px;
    color: white;
}
.switch {
    float:right;
    color: white;
    font-size:20px;
    text-decoration:none;
    padding-top:590px; 
    
}
.switch:hover{
    color:black;
}
</style>";
$dbname="register";
$conn = new mysqli("localhost","root","",$dbname);

if(isset($_GET['hotel'])){
    $sql = "SELECT * FROM hotel";
    $result =  $conn->query($sql);
          
    if( $result !== FALSE){
      if ($result->num_rows > 0) {
        echo "<center><table style='width:600px;height:40%;' id='tab'>
        <tr style='background-color:rgb(51, 46, 46); color: white;'>
        <th>Hotel name</th>
        <th>Price</th>
        <th>Vacancies</th></tr>";
        while($row = $result->fetch_assoc()) {
           
           echo "
                <br>  <tr style='background-color:rgb(51, 46, 46); color:  lightgrey;'>
                <td >$row[hname]</td>
                <td >$row[price]</td>
                <td>$row[available]</td>
                </tr>
               ";
}
    }

}
}
if(isset($_GET['cus'])){
    $sql = "SELECT * FROM customer";
    $result =  $conn->query($sql);
          
    if( $result !== FALSE){
      if ($result->num_rows > 0) {
            echo "<center><table id='tab' style='width:600px;height:40%; padding-left:90px;'>
            <th>Customer ID</th>
            <th>Customer Name</th>
            <th>Check-in</th>
            <th>Check-out</th>
            <th>Status</th>
            <th>Contact</th>";
            while($row = $result->fetch_assoc()) {
            
            echo "<tr>
                    <td>$row[id]</td>
                    <td>$row[cname]</td>
                    <td>$row[checkin]</td>
                    <td>$row[checkout]</td>
                    <td>$row[status]</td>
                    <td>$row[phone]</td>
                    </tr>
                ";
            }
    echo " </table></center>";
        }
    }
    }
    if(isset($_GET['user'])){
        $sql = "SELECT * FROM register";
        $result =  $conn->query($sql);
              
        if( $result !== FALSE){
          if ($result->num_rows > 0) {
                echo "<center><table id='tab' style='width:600px;height:40%;'>
                
                <th>User Name</th>
                <th>Password</th>
                <th>Contact</th>";
                while($row = $result->fetch_assoc()) {
                
                echo "<tr>
                       
                        <td>$row[uname]</td>
                        <td>$row[password]</td>
                        <td>$row[phone]</td>
                        
                        </tr>
                    ";
                }
        echo " </table></center>";
            }
        }
    }
}

else{
    header("Location:admin.php");
}

?>