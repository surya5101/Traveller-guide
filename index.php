<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Trip Advisor </title>
    <style>
        *{
            margin : 0;
            padding: 0;
        }
        .header{
            height: 100vh;
            background: rgba(0,0,100,0.4);
        }
        .video-bg{
            position:absolute;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height:auto;
            z-index: -1;;
        }
        @media (max-aspect-ratio:16/9){
            .video-bg
            {

                width: auto;
                height: 100%;
            }
        }
        .logo{
            margin:25px;
            height: 70px;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
        }   

        .welcome{
            position: relative;
            text-align: center;
            font-family: Lato, sans-serif;
            color: #fff;
            top: 150px;
           
        }
        .welcome h1{
            font-size: 60px;
            font-weight: 100;
            letter-spacing: 5px;
            margin-bottom:30px;  
        }

        .btn{
            font-size: 18px;
            color:white;
            margin: 5px;
            padding:7px 22px;
            text-decoration: none;
            border: 1px solid white;
        }
        .btn-register{
            border: 1px solid rgb(33, 32, 39);
            
         }
        .btn-register:hover{
            border: 3px solid white;
            transition: 0.5s;

        }
         .btn-login:hover{
            border: 3px solid rgb(33, 32, 39);
            transition: 0.5s;

        }
    </style>
    
</head>
<body>

    <section class ="header"></section>
            <video autoplay loop class = "video-bg "muted plays-inline>
                 <source src="videos/lap1.mp4" type="video/mp4">
             </video>
        <div class="overlay">
                <img src="images\logo.png" class="logo">
                    <div class = "welcome">
                       <h1> WELCOME TO LAPLAND PARADISE</h1>
                       <a href= "login1.php" class ="btn btn-login">Login</a>
                       <a href= "register1.php" class ="btn btn-register">Register</a>
                    </div>
        </div>

    </section>

</body>
</html>
