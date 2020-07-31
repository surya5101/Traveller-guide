<?php
$dbname="register";
$conn = new mysqli("localhost","root","",$dbname);
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error);
} 


session_start();
if(isset($_SESSION['uname']))
{
if(isset(($_POST['cancel'])))
{
    $cid=$_POST['cancel'];
    $hotel=$_POST['hotel'];
    $allot=$_POST['alloted'];
    
    $min =date('Y-m-d');
    $check = "SELECT * from customer where id='$cid'";
    $result =  $conn->query($check);
        if( $result !== FALSE)
        {
            if ($result->num_rows > 0) {
            
                while($row = $result->fetch_assoc()) {
                    
                   $sql= "UPDATE customer SET status='Cancelled' where  id=$cid and status='Booked'";
                   
                   $sql1= "UPDATE hotel SET available=available+$allot where hname='$hotel'";
                   $res =  $conn->query($sql);
                   
                   $res1 =  $conn->query($sql1);
                   if($res1 !== FALSE){
                       echo "Error".$con->error;
                   }
                  
                   if(( $res && $res1 )!== FALSE){
                    echo "<script>
                    alert('Cancellation Successfull!!!');
                    window.location= 'history.php';
                  </script>";
                } 
            }
           }
        }
    }
        else{

                echo "Error: " .  "<br>" . $conn->error;
            }   
        
}
     
?>         